# QUICK REFERENCE - Web Monitoring BMKG

## 🚀 START HERE

### Testing Aplikasi
1. Buka browser → `http://localhost/WebMonitoringJaringan`
2. Login dengan credentials Anda
3. Enjoy! 🎉

---

## ✨ FITUR UTAMA

| Fitur | Lokasi | Cara Pakai |
|-------|--------|-----------|
| **Dark Mode** | 🌙 Icon di navbar | Klik untuk toggle light/dark |
| **Menu Navigation** | 🏠📊💻⚙️ Di sidebar | Klik untuk pindah halaman |
| **Sidebar Collapse** | ≡ Icon di navbar | Klik untuk collapse/expand |
| **User Dropdown** | 👤 Di navbar | Klik untuk profile/settings |
| **Real-time Data** | Dashboard & pages | Update otomatis setiap 3s |

---

## 📍 NAVIGASI MENU

```
🏠 Dashboard     → /dashboard  ✅
💻 System        → /system     ✅
📊 Network       → /network    ✅
⚙️ Settings      → /settings   ✅
🚪 Sign Out      → /logout     ✅
```

---

## 🎨 DARK MODE

**Toggle:**
- Click 🌙 di navbar
- Icon berubah menjadi ☀️
- Otomatis disimpan

**Color Changes:**
- Light: White sidebar, gray text
- Dark: Black sidebar, white text

---

## 📊 PAGES OVERVIEW

### Dashboard
- CPU Load chart
- RAM Load chart
- Online/Offline devices
- Network traffic chart

### System
- CPU usage meter
- Memory usage meter
- Disk usage meter
- Processor info
- Top processes table

### Network
- Download speed
- Upload speed
- Traffic analysis chart
- Network interfaces
- Active connections

### Settings
- 5 tabs untuk berbagai settings
- General, Network, Monitoring
- Notifications, Security

---

## 🔧 FILE PENTING

| File | Fungsi |
|------|--------|
| `layouts/app.blade.php` | Main layout + semua CSS |
| `partials/sidebar.blade.php` | Menu navigation |
| `partials/navbar.blade.php` | Top bar + dark mode |
| `dashboard/index.blade.php` | Dashboard page |
| `system/index.blade.php` | System monitoring |
| `network/index.blade.php` | Network traffic |
| `settings/index.blade.php` | Settings page |
| `routes/web.php` | URL routing |

---

## 🐛 TROUBLESHOOTING

### Dark mode tidak save?
→ Clear browser cache, check localStorage enabled

### Menu tidak clickable?
→ Reload page, check console untuk errors

### Page tidak load?
→ Check route di web.php, check view file exists

### Charts tidak muncul?
→ Check Chart.js library loaded, check browser console

---

## 💻 KEYBOARD SHORTCUTS

```
Esc   → Close dropdowns
Tab   → Navigate buttons
Enter → Submit forms
```

---

## 📊 REAL-TIME DATA

Semua page update data setiap **3 detik**:
- CPU usage
- Memory usage
- Download/Upload speed
- Connection stats

---

## 🔐 SECURITY

✅ CSRF protected forms
✅ Authentication required
✅ Logout available
✅ User session managed

---

## 📱 RESPONSIVE

✅ Desktop (1024px+) - Full sidebar
✅ Tablet (768px+) - Full sidebar
✅ Mobile (<768px) - Toggle sidebar

---

## 🎯 COMMON TASKS

### Navigasi ke System
1. Klik 💻 System di sidebar
2. Lihat sistem monitoring details
3. Lihat update setiap 3 detik

### Enable Dark Mode
1. Klik 🌙 di navbar
2. Lihat icon berubah ☀️
3. Semua warna berubah

### Collapse Sidebar
1. Klik ≡ di navbar
2. Sidebar menjadi narrow
3. Hanya icons terlihat

### Logout
1. Klik 👤 di navbar
2. Pilih "Logout"
3. Redirect ke login page

---

## 🎨 COLOR REFERENCE

**Light Mode:**
- Green accent: `#16a34a`
- Gray bg: `#f7f8fa`
- White surface: `#ffffff`

**Dark Mode:**
- Green accent: `#4ade80`
- Black bg: `#1a1a1a`
- Dark surface: `#1f1f1f`

---

## ⏱️ ANIMATION SPEEDS

```
Page load:        0.5s
Color transition: 0.3s
Hover effect:     0.3s
Sidebar toggle:   0.3s
Progress bar:     0.6s
```

---

## 🌐 BROWSER SUPPORT

✅ Chrome/Edge
✅ Firefox
✅ Safari
✅ Mobile browsers

---

## 📞 NEED HELP?

1. Check `DOKUMENTASI_LENGKAP.md` untuk detail
2. Check `VISUAL_GUIDE.md` untuk layout
3. Check browser console untuk errors
4. Check `CHANGES.md` untuk file changes

---

## ✅ VERIFICATION CHECKLIST

- [ ] Can login successfully
- [ ] Dashboard loads with charts
- [ ] Dark mode toggle works
- [ ] All menu items clickable
- [ ] Each page shows correct content
- [ ] Real-time data updates
- [ ] Sidebar collapse works
- [ ] Logout works
- [ ] Responsive on mobile

---

**Happy Monitoring! 🚀**

*Version 1.0 - Production Ready*
