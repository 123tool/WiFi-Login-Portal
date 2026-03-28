# ⚡ WiFi Portal

WiFi Authentication Portal untuk simulasi pengujian *Social Engineering*. Berjalan lancar di **Termux Non-Root**.

## 🚀 Fitur
- **UI Aesthetic:** Menggunakan Tailwind CSS v3.
- **Responsive:** Sempurna di layar HP maupun Desktop.
- **Log System:** Mencatat SSID, Password, IP, dan User-Agent secara real-time.
- **Lightweight:** Tanpa database berat, hanya butuh PHP.

## 🛠️ Instalasi di Termux
Buka aplikasi Termux Anda dan jalankan perintah berikut:

1. **Update & Install PHP**
   ```bash
   pkg update && pkg upgrade
   pkg install php wget -y
2. **Clone Repository**
   ```bash
   git clone [https://github.com/USERNAME_KAMU/spy-e-wifi-portal.git](https://github.com/USERNAME_KAMU/spy-e-wifi-portal.git)
   cd spy-e-wifi-portal
3. **Server**
   ```bash
   php -S 127.0.0.1:8080
4. **Online-kan (Agar bisa diakses Target)
Buka sesi baru di Termux, lalu gunakan Cloudflared:**
   ```bash
   wget [https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-arm](https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-arm)
   chmod +x cloudflared-linux-arm
   ./cloudflared-linux-arm tunnel --url [http://127.0.0.1:8080](http://127.0.0.1:8080)
5. **Log**
   ```bash
   cat log.txt
   
### Disclaimer:
**Alat ini dibuat khusus untuk tujuan edukasi dan ethical hacking. Penyalahgunaan untuk tindakan ilegal adalah tanggung jawab pengguna.**
