<?php

namespace App\Http\Controllers;

use App\Models\SystemMetric;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        $metrics = SystemMetric::latest('recorded_at')->paginate(10);
        $latestMetric = SystemMetric::latest('recorded_at')->first();
        
        return view('system.index', compact('metrics', 'latestMetric'));
    }

    public function create()
    {
        return view('system.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cpu_load' => 'required|numeric|min:0|max:100',
            'memory_used' => 'required|numeric|min:0',
            'memory_total' => 'required|numeric|min:0',
            'disk_used' => 'required|numeric|min:0',
            'disk_total' => 'required|numeric|min:0',
            'processor_name' => 'required|string',
            'processor_cores' => 'required|integer|min:1',
            'processor_frequency' => 'required|numeric|min:0',
        ]);

        $validated['recorded_at'] = now();

        SystemMetric::create($validated);

        return redirect()->route('system')->with('success', 'Data sistem berhasil ditambahkan!');
    }

    public function show(SystemMetric $systemMetric)
    {
        return view('system.show', compact('systemMetric'));
    }

    public function edit(SystemMetric $systemMetric)
    {
        return view('system.edit', compact('systemMetric'));
    }

    public function update(Request $request, SystemMetric $systemMetric)
    {
        $validated = $request->validate([
            'cpu_load' => 'required|numeric|min:0|max:100',
            'memory_used' => 'required|numeric|min:0',
            'memory_total' => 'required|numeric|min:0',
            'disk_used' => 'required|numeric|min:0',
            'disk_total' => 'required|numeric|min:0',
            'processor_name' => 'required|string',
            'processor_cores' => 'required|integer|min:1',
            'processor_frequency' => 'required|numeric|min:0',
        ]);

        $systemMetric->update($validated);

        return redirect()->route('system')->with('success', 'Data sistem berhasil diperbarui!');
    }

    public function destroy(SystemMetric $systemMetric)
    {
        $systemMetric->delete();

        return redirect()->route('system')->with('success', 'Data sistem berhasil dihapus!');
    }
}
