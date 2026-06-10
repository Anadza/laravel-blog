<?php

use Illuminate\Support\Facades\Route;

// 1. Beranda
Route::get('/', function () {
    return view('pages.home');
});

// 2. Tentang
Route::get('/tentang', function () {
    return view('pages.tentang');
});

// 3. Portofolio (Mengirim data array proyek)
Route::get('/portofolio', function () {
    $proyek = [
        ['judul' => 'Website E-Commerce', 'deskripsi' => 'Membangun toko online toko baju dengan Laravel.', 'kategori' => 'Web Development'],
        ['judul' => 'Aplikasi Kasir Kontrakan', 'deskripsi' => 'Sistem manajemen pembayaran sewa kontrakan.', 'kategori' => 'Web App'],
        ['judul' => 'Desain UI/UX Travel', 'deskripsi' => 'Desain antarmuka aplikasi pemesanan tiket liburan.', 'kategori' => 'UI/UX Design'],
    ];
    return view('pages.portofolio', compact('proyek'));
});

// 4. Blog (Mengirim data array artikel)
Route::get('/blog', function () {
    $artikel = [
        ['judul' => 'Tips Belajar Laravel untuk Pemula', 'slug' => 'tips-belajar-laravel', 'cuplikan' => 'Laravel adalah salah satu framework PHP paling populer...', 'tanggal' => '10 Juni 2026'],
        ['judul' => 'Mengapa Vite Sangat Cepat?', 'slug' => 'mengapa-vite-cepat', 'cuplikan' => 'Beralih dari Webpack ke Vite memberikan dampak performa...', 'tanggal' => '08 Juni 2026'],
    ];
    return view('pages.blog', compact('artikel'));
});

// 5. Kontak
Route::get('/kontak', function () {
    return view('pages.kontak');
});
