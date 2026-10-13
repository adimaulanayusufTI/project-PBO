Konversi Suhu

Aplikasi web sederhana untuk mengonversi suhu antara Celsius, Fahrenheit, Kelvin, dan Reamur. Proyek ini dibuat menggunakan PHP, HTML, dan CSS untuk memenuhi tugas praktikum Pemrograman Berorientasi Objek.

 Fitur

- Memasukkan nilai suhu.
- Memilih satuan suhu asal dan tujuan.
- Mengonversi empat satuan suhu: Celsius, Fahrenheit, Kelvin, dan Reamur.
- Menampilkan hasil konversi secara langsung pada halaman.
- Memvalidasi input dan menolak suhu di bawah nol mutlak.
- Tampilan sederhana menggunakan CSS.

 Toold yang Digunakan

- PHP — memproses input dan menghitung konversi suhu.
- HTML — membuat struktur halaman dan formulir.
- CSS — mengatur tampilan website.
- Laragon — menjalankan aplikasi pada localhost.
- Visual Studio Code — menulis dan mengedit kode program.

 Struktur Folder

konversi-suhu/
├── pertemuan2.php
└── README.md

 Cara Menjalankan Program

1. Pastikan Laragon sudah terpasang di komputer.

2. Buat folder "konversi-suhu" di dalam direktori "C:\laragon\www\".

3. Simpan file "index.php", "style.css", dan "README.md" di dalam folder tersebut.

4. Buka Laragon, kemudian klik Start All.

5. Buka browser dan akses alamat berikut:
   
   "http://localhost/konversi-suhu/"

6. Masukkan nilai suhu.

7. Pilih satuan asal dan satuan tujuan.

8. Klik tombol Konversi untuk melihat hasilnya.

 Rumus Konversi

Konversi| Rumus
Celsius ke Fahrenheit| F = (C × 9/5) + 32
Celsius ke Kelvin| K = C + 273,15
Celsius ke Reamur| R = C × 4/5
Fahrenheit ke Celsius| C = (F − 32) × 5/9
Kelvin ke Celsius| C = K − 273,15
Reamur ke Celsius| C = R × 5/4

Program menggunakan Celsius sebagai satuan perantara untuk melakukan konversi antarsatuan.

 Penerapan Materi Praktikum

Program ini menerapkan beberapa konsep dasar pemrograman PHP:

1. Variabel dan tipe data: menggunakan integer, float, string, boolean, dan array.
2. Percabangan: menggunakan "if" dan "switch" untuk memvalidasi input serta menentukan rumus konversi.
3. Perulangan: menggunakan "foreach" untuk menampilkan pilihan satuan suhu.
4. Fungsi buatan sendiri: menggunakan fungsi "konversi()" untuk menghitung hasil konversi.
5. Formulir HTML: menerima input suhu dan pilihan satuan dari pengguna.

Contoh Pengujian

Suhu Asal| Satuan Tujuan| Hasil
30 Celsius| Fahrenheit| 86 °F
100 Celsius| Reamur| 80 °Reamur
300 Kelvin| Celsius| 26,85 °C
32 Fahrenheit| Celsius| 0 °C

Tujuan Proyek

Proyek ini bertujuan untuk memahami penerapan variabel, tipe data, percabangan, perulangan, fungsi buatan sendiri, serta integrasi PHP dengan HTML dan CSS dalam pembuatan aplikasi web sederhana.

👤 Identitas Mahasiswa

- Nama: Adi Maulana Yusuf
- NIM: 2530521087
- Kelas: 3C
- Mata Kuliah: Pemrograman Berorientasi Objek

