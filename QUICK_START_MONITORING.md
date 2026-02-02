# 📌 Quick Reference - Fitur System & Network Monitoring

## Cara Cepat Menambahkan Data

### Dari Web Interface:

#### 1️⃣ System Monitoring
```
URL: http://localhost/system
Tombol: "Tambah Data" → Isi form → Submit
```

**Field yang diminta:**
- CPU Load (%) - contoh: 65
- Memory Used (GB) - contoh: 7.68
- Memory Total (GB) - contoh: 16
- Disk Used (GB) - contoh: 150
- Disk Total (GB) - contoh: 500
- Processor Name - contoh: Intel Core i7-9700K
- Processor Cores - contoh: 8
- Processor Frequency (GHz) - contoh: 3.60

#### 2️⃣ Network Traffic
```
URL: http://localhost/network
Tombol: "Tambah Data" → Isi form → Submit
```

**Field yang diminta:**
- Interface Name - contoh: eth0
- Download Speed (Mbps) - contoh: 1.2
- Upload Speed (Mbps) - contoh: 0.8
- Packets Sent - contoh: 1000000
- Packets Received - contoh: 2000000
- Bytes Sent - contoh: 500000000
- Bytes Received - contoh: 1000000000
- Active Connections - contoh: 127
- Established Connections - contoh: 89

---

## 📊 Contoh Data yang Bisa Digunakan

### System Metrics Examples:
```
Data 1: CPU 45%, Memory 4/16 GB, Disk 100/500 GB, Intel i5-8400, 6 cores, 3.8 GHz
Data 2: CPU 78%, Memory 12/16 GB, Disk 350/500 GB, Intel i7-9700K, 8 cores, 3.6 GHz
Data 3: CPU 32%, Memory 2/16 GB, Disk 50/500 GB, AMD Ryzen 5, 6 cores, 3.5 GHz
```

### Network Traffic Examples:
```
Data 1: eth0, DL: 2.5 Mbps, UL: 1.5 Mbps, Packets: 5000000/8000000, Bytes: 2B/3B, Conn: 150/100
Data 2: wlan0, DL: 1.2 Mbps, UL: 0.8 Mbps, Packets: 1000000/2000000, Bytes: 500M/1B, Conn: 80/60
Data 3: eth1, DL: 5.0 Mbps, UL: 3.2 Mbps, Packets: 10000000/15000000, Bytes: 5B/7B, Conn: 200/150
```

---

## 🔄 Operasi yang Tersedia

| Operasi | URL | Method | Deskripsi |
|---------|-----|--------|-----------|
| List System | /system | GET | Lihat semua data system |
| Create Form | /system/create | GET | Tampilkan form tambah |
| Store | /system | POST | Simpan data baru |
| Edit Form | /system/{id}/edit | GET | Tampilkan form edit |
| Update | /system/{id} | PATCH | Update data |
| Delete | /system/{id} | DELETE | Hapus data |
| List Network | /network | GET | Lihat semua data network |
| Create Form | /network/create | GET | Tampilkan form tambah |
| Store | /network | POST | Simpan data baru |
| Edit Form | /network/{id}/edit | GET | Tampilkan form edit |
| Update | /network/{id} | PATCH | Update data |
| Delete | /network/{id} | DELETE | Hapus data |

---

## 💾 Database Structure

### system_metrics table
Menyimpan: CPU, Memory, Disk, Processor info dengan timestamp

### network_traffic table
Menyimpan: Download/Upload speed, Packets, Bytes, Connections dengan timestamp

---

## ✨ Fitur Unggulan

✅ **Form Validation** - Semua input divalidasi server-side  
✅ **Pagination** - Data ditampilkan 10 per halaman  
✅ **Real-time Feedback** - Alert success/error otomatis  
✅ **Responsive Design** - Kompatibel desktop, tablet, mobile  
✅ **Edit & Delete** - Kelola data dengan mudah  
✅ **Timestamp** - Pencatatan otomatis waktu data  
✅ **Calculated Fields** - Persentase memory/disk otomatis  

---

## 🎨 UI Components

- **Bootstrap 5** - Styling responsif
- **Bootstrap Icons** - Icon untuk buttons
- **Progress Bars** - Visualisasi CPU load
- **Badges** - Status indikator
- **Responsive Tables** - Data display mobile-friendly

---

## 📝 Tips Penggunaan

1. Data dicatat otomatis dengan timestamp `recorded_at`
2. Pagination memudahkan navigasi data banyak
3. Edit button (pencil icon) untuk mengubah data
4. Delete button (trash icon) untuk menghapus
5. Alert notifikasi muncul saat operasi berhasil
6. Form validation mencegah data invalid

---

**Semua fitur sudah siap digunakan!** 🚀
