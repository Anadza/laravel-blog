@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
<div class="container">
    <h2 class="fw-bold text-center mb-4">Proyek Portofolio</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        {{-- Looping Array Data Proyek Menggunakan @foreach --}}
        @foreach($proyek as $item)
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Cover Proyek">
                <div class="card-body">
                    <span class="badge bg-secondary mb-2">{{ $item['kategori'] }}</span>
                    <h5 class="card-title fw-bold">{{ $item['judul'] }}</h5>
                    <p class="card-text text-muted">{{ $item['deskripsi'] }}</p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
