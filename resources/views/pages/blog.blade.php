@extends('layouts.app')

@section('title', 'Daftar Blog')

@section('content')
<div class="container" style="max-width: 800px;">
    <h2 class="fw-bold mb-4 text-center">Artikel Terbaru</h2>

    {{-- Looping Array Artikel Dummy --}}
    @foreach($artikel as $post)
    <article class="card p-4 mb-4 border-0 shadow-sm">
        <small class="text-muted mb-2">{{ $post['tanggal'] }}</small>
        <h3 class="fw-bold text-dark h4 mb-2">{{ $post['judul'] }}</h3>
        <p class="text-muted">{{ $post['cuplikan'] }}</p>
        <a href="#" class="text-primary fw-semibold text-decoration-none">Baca Selengkapnya &rarr;</a>
    </article>
    @endforeach
</div>
@endsection
