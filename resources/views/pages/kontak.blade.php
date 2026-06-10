@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container" style="max-width: 600px;">
    <div class="card p-4 border-0 shadow-sm">
        <h2 class="fw-bold text-center mb-3">Hubungi Kami</h2>
        <p class="text-muted text-center mb-4">Silakan tinggalkan pesan, kami akan membalas secepatnya.</p>

        <form onsubmit="event.preventDefault(); alert('Form ini baru tampilan saja!');">
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Alamat Email</label>
                <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label fw-semibold">Isi Pesan</label>
                <textarea class="form-control" id="pesan" rows="4" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Kirim Pesan</button>
        </form>
    </div>
</div>
@endsection
