@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container">
    <div class="p-5 mb-4 bg-white rounded-3 text-center border shadow-sm">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-dark">Selamat Datang di Website Saya!</h1>
            <p class="col-md-8 mx-auto fs-4 text-muted">Ini adalah website sederhana yang dibangun menggunakan Laravel dan Bootstrap 5 melalui kompilasi kilat Vite.</p>
            <a href="/portofolio" class="btn btn-primary btn-lg px-4">Lihat Portofolio</a>
        </div>
    </div>

    <div class="row g-4 mt-2">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-3 bg-body">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Cepat & Responsif</h5>
                    <p class="card-text text-muted">Tampilan web disokong oleh Bootstrap 5 sehingga nyaman diakses lewat HP maupun Laptop.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-3 bg-body">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success">Template Blade</h5>
                    <p class="card-text text-muted">Menggunakan sistem warisan template membuat kode web rapi dan anti duplikasi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-3 bg-body">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-danger">Kompilasi Vite</h5>
                    <p class="card-text text-muted">Aset front-end dimuat secepat kilat menggunakan teknologi bundling modern.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('darkModeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const themeText = document.getElementById('themeText');
        const htmlElement = document.documentElement;

        // 1. Fungsi untuk menerapkan tema ke elemen HTML & Ikon
        function applyTheme(theme) {
            htmlElement.setAttribute('data-bs-theme', theme);
            localStorage.setItem('theme', theme); // Simpan preferensi di localStorage

            if (theme === 'dark') {
                themeIcon.textContent = '☀️';
                if(themeText) themeText.textContent = 'Light Mode';
                // Mengubah tombol toggle menjadi varian light saat gelap
                toggleBtn.classList.remove('btn-outline-light');
                toggleBtn.classList.add('btn-outline-warning');
            } else {
                themeIcon.textContent = '🌙';
                if(themeText) themeText.textContent = 'Dark Mode';
                toggleBtn.classList.remove('btn-outline-warning');
                toggleBtn.classList.add('btn-outline-light');
            }
        }

        // 2. Cek preferensi tema yang tersimpan di localStorage saat halaman dimuat
        const savedTheme = localStorage.getItem('theme') || 'light';
        applyTheme(savedTheme);

        // 3. Event Listener saat tombol Toggle diklik
        toggleBtn.addEventListener('click', function () {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            applyTheme(newTheme);
        });
    </script>
@endpush
