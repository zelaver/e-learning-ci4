module.exports = {
    proxy: "localhost:8080",  // Alamat server PHP spark serve
    files: [
      "app/**/*.{php,html}",  // Path file yang akan dipantau untuk perubahan
      "public/**/*.{css,js}"  // Path file CSS dan JS yang akan dipantau
    ],
    port: 3000,  // Port tempat Browsersync akan berjalan
    open: false,  // Jangan buka browser secara otomatis
    notify: false  // Jangan tampilkan notifikasi Browsersync
  };
  