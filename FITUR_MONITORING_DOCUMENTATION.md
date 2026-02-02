# Dokumentasi Fitur System & Network Traffic

## Ringkasan Perubahan

Telah ditambahkan fitur lengkap untuk menambahkan, mengubah, dan menghapus data **System Monitoring** dan **Network Traffic** ke dalam aplikasi Web Monitoring Jaringan.

---

## 📁 File-File yang Dibuat/Diubah

### 1. **Models** (2 file baru)
- `app/Models/SystemMetric.php` - Model untuk data metrik sistem
- `app/Models/NetworkTraffic.php` - Model untuk data traffic jaringan

### 2. **Controllers** (2 file baru)
- `app/Http/Controllers/SystemController.php` - Mengelola CRUD operasi System
- `app/Http/Controllers/NetworkController.php` - Mengelola CRUD operasi Network

### 3. **Migrations** (2 file baru)
- `database/migrations/0001_01_01_000003_create_system_metrics_table.php`
- `database/migrations/0001_01_01_000004_create_network_traffic_table.php`

### 4. **Views** (6 file baru + 2 file diubah)

#### System Views:
- `resources/views/system/create.blade.php` - Form tambah data system
- `resources/views/system/edit.blade.php` - Form edit data system
- `resources/views/system/index.blade.php` - **Diubah** (ditambah tabel data & tombol)

#### Network Views:
- `resources/views/network/create.blade.php` - Form tambah data network
- `resources/views/network/edit.blade.php` - Form edit data network
- `resources/views/network/index.blade.php` - **Diubah** (ditambah tabel data & tombol)

### 5. **Routes** (Diubah)
- `routes/web.php` - Ditambahkan 12 routes untuk CRUD operations

---

## 🗄️ Database Schema

### Tabel: `system_metrics`
```
- id (Primary Key)
- cpu_load (float) - Persentase penggunaan CPU
- memory_used (float) - Memori terpakai (GB)
- memory_total (float) - Total memori (GB)
- disk_used (float) - Disk terpakai (GB)
- disk_total (float) - Total disk (GB)
- processor_name (string) - Nama processor
- processor_cores (integer) - Jumlah cores
- processor_frequency (float) - Frekuensi (GHz)
- recorded_at (datetime) - Waktu pencatatan
- timestamps (created_at, updated_at)
```

### Tabel: `network_traffic`
```
- id (Primary Key)
- interface_name (string) - Nama interface jaringan
- download_speed (float) - Kecepatan download (Mbps)
- upload_speed (float) - Kecepatan upload (Mbps)
- packets_sent (bigInteger) - Paket yang dikirim
- packets_received (bigInteger) - Paket yang diterima
- bytes_sent (bigInteger) - Byte yang dikirim
- bytes_received (bigInteger) - Byte yang diterima
- active_connections (integer) - Koneksi aktif
- established_connections (integer) - Koneksi established
- recorded_at (datetime) - Waktu pencatatan
- timestamps (created_at, updated_at)
```

---

## 🔗 Routes yang Ditambahkan

### System Routes:
- `GET /system` - Lihat daftar data system (dengan tabel data)
- `GET /system/create` - Tampilkan form tambah data
- `POST /system` - Simpan data system baru
- `GET /system/{systemMetric}/edit` - Tampilkan form edit
- `PATCH /system/{systemMetric}` - Update data system
- `DELETE /system/{systemMetric}` - Hapus data system

### Network Routes:
- `GET /network` - Lihat daftar data network (dengan tabel data)
- `GET /network/create` - Tampilkan form tambah data
- `POST /network` - Simpan data network baru
- `GET /network/{networkTraffic}/edit` - Tampilkan form edit
- `PATCH /network/{networkTraffic}` - Update data network
- `DELETE /network/{networkTraffic}` - Hapus data network

---

## 🎯 Fitur Utama

### System Monitoring:
✅ Tambah data CPU Load, Memory, Disk  
✅ Input data Processor (nama, cores, frequency)  
✅ Lihat riwayat data dalam tabel  
✅ Edit data yang sudah tersimpan  
✅ Hapus data  
✅ Pagination otomatis (10 data per halaman)  

### Network Traffic:
✅ Tambah data download/upload speed  
✅ Input data packets dan bytes  
✅ Input data active/established connections  
✅ Lihat riwayat data dalam tabel  
✅ Edit data yang sudah tersimpan  
✅ Hapus data  
✅ Pagination otomatis (10 data per halaman)  

---

## 💡 Cara Penggunaan

### 1. Menambah Data System:
1. Klik tombol **"Tambah Data"** di halaman System
2. Isi form dengan data sistem
3. Klik **"Tambah Data"** untuk menyimpan

### 2. Menambah Data Network:
1. Klik tombol **"Tambah Data"** di halaman Network
2. Isi form dengan data traffic jaringan
3. Klik **"Tambah Data"** untuk menyimpan

### 3. Mengedit Data:
1. Cari data di tabel
2. Klik tombol **Edit** (pensil)
3. Ubah data yang diperlukan
4. Klik **"Simpan Perubahan"**

### 4. Menghapus Data:
1. Cari data di tabel
2. Klik tombol **Delete** (tempat sampah)
3. Konfirmasi penghapusan

---

## 🔐 Validasi Form

### System Metrics:
- `cpu_load`: Required, numeric, 0-100%
- `memory_used`: Required, numeric, min 0
- `memory_total`: Required, numeric, min 0
- `disk_used`: Required, numeric, min 0
- `disk_total`: Required, numeric, min 0
- `processor_name`: Required, string
- `processor_cores`: Required, integer, min 1
- `processor_frequency`: Required, numeric, min 0

### Network Traffic:
- `interface_name`: Required, string
- `download_speed`: Required, numeric, min 0
- `upload_speed`: Required, numeric, min 0
- `packets_sent`: Required, integer, min 0
- `packets_received`: Required, integer, min 0
- `bytes_sent`: Required, integer, min 0
- `bytes_received`: Required, integer, min 0
- `active_connections`: Required, integer, min 0
- `established_connections`: Required, integer, min 0

---

## 📊 Fitur Tambahan di Index Views

### Tabel Data System:
- Menampilkan: Waktu, CPU Load (dengan progress bar), Memory %, Disk %, Processor
- Pagination
- Tombol Edit & Delete
- Alert success saat data ditambahkan/diubah/dihapus

### Tabel Data Network:
- Menampilkan: Waktu, Interface, Download/Upload Speed, Packets, Connections
- Pagination
- Tombol Edit & Delete
- Alert success saat data ditambahkan/diubah/dihapus

---

## ✅ Status Implementasi

✅ Models dibuat  
✅ Migrations dibuat dan dijalankan  
✅ Controllers dibuat dengan CRUD lengkap  
✅ Views dibuat untuk create dan edit  
✅ Index views diupdate dengan tabel data  
✅ Routes dikonfigurasi  
✅ Database tables sudah ada (siap digunakan)  

---

## 🚀 Langkah Selanjutnya (Opsional)

1. **API Endpoints** - Buat API untuk integrasi dengan sistem monitoring eksternal
2. **Real-time Updates** - Tambahkan WebSocket untuk update data real-time
3. **Graphing** - Integrasikan chart library untuk visualisasi trend data
4. **Export** - Tambahkan fitur export data ke CSV/Excel
5. **Alerts** - Tambahkan notifikasi ketika nilai melampaui threshold

---

**Fitur siap digunakan!** 🎉
