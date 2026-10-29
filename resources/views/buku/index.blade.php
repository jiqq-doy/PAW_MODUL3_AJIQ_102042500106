@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-center mb-4">
        <div class="col">
            <h2 class="fw-bold mb-1">Daftar Buku</h2>
            <p class="text-muted mb-0">Koleksi katalog buku perpustakaan.</p>
        </div>
        <div class="col-auto">
            <a href="{{ route('buku.create') }}" class="btn btn-primary">+ Tambah Buku</a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($buku as $index => $item)
                        <tr>
                            <td>{{ $buku->firstItem() + $index }}</td>
                            <td class="fw-semibold">{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td><span class="badge bg-secondary">{{ $item->stok }}</span></td>
                        </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center py-4 text-muted">Belum ada data buku.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection