<?php

namespace App\Http\Controllers;

use App\Models\NetworkTraffic;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        $traffics = NetworkTraffic::latest('recorded_at')->paginate(10);
        $latestTraffic = NetworkTraffic::latest('recorded_at')->first();
        
        return view('network.index', compact('traffics', 'latestTraffic'));
    }

    public function create()
    {
        return view('network.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'interface_name' => 'required|string',
            'download_speed' => 'required|numeric|min:0',
            'upload_speed' => 'required|numeric|min:0',
            'packets_sent' => 'required|integer|min:0',
            'packets_received' => 'required|integer|min:0',
            'bytes_sent' => 'required|integer|min:0',
            'bytes_received' => 'required|integer|min:0',
            'active_connections' => 'required|integer|min:0',
            'established_connections' => 'required|integer|min:0',
        ]);

        $validated['recorded_at'] = now();

        NetworkTraffic::create($validated);

        return redirect()->route('network')->with('success', 'Data traffic jaringan berhasil ditambahkan!');
    }

    public function show(NetworkTraffic $networkTraffic)
    {
        return view('network.show', compact('networkTraffic'));
    }

    public function edit(NetworkTraffic $networkTraffic)
    {
        return view('network.edit', compact('networkTraffic'));
    }

    public function update(Request $request, NetworkTraffic $networkTraffic)
    {
        $validated = $request->validate([
            'interface_name' => 'required|string',
            'download_speed' => 'required|numeric|min:0',
            'upload_speed' => 'required|numeric|min:0',
            'packets_sent' => 'required|integer|min:0',
            'packets_received' => 'required|integer|min:0',
            'bytes_sent' => 'required|integer|min:0',
            'bytes_received' => 'required|integer|min:0',
            'active_connections' => 'required|integer|min:0',
            'established_connections' => 'required|integer|min:0',
        ]);

        $networkTraffic->update($validated);

        return redirect()->route('network')->with('success', 'Data traffic jaringan berhasil diperbarui!');
    }

    public function destroy(NetworkTraffic $networkTraffic)
    {
        $networkTraffic->delete();

        return redirect()->route('network')->with('success', 'Data traffic jaringan berhasil dihapus!');
    }
}
