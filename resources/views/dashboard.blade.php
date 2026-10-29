@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center mb-4">
        <div class="col">
            <h2 class="fw-bold mb-1">Dashboard Perpustakaan</h2>
            <p class="text-muted mb-0">Selamat datang kembali, <strong>{{ Auth::user()->name }}</strong>.</p>
        </div>
        <div class="col-auto">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">+ Transaksi Peminjaman Baru</a>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card p-3 shadow-sm bg-white border-0">
                <span class="text-muted small d-block mb-1">Total Koleksi Buku</span>
                <h3 class="fw-bold mb-0 text-dark">{{ $totalBuku }}</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card p-3 shadow-sm bg-white border-0">
                <span class="text-muted small d-block mb-1">Total Anggota</span>
                <h3 class="fw-bold mb-0 text-dark">{{ $totalAnggota }}</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card p-3 shadow-sm bg-white border-0">
                <span class="text-muted small d-block mb-1">Sedang Dipinjam</span>
                <h3 class="fw-bold mb-0 text-dark">{{ $totalPeminjamanAktif }}</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card p-3 shadow-sm bg-white border-0">
                <span class="text-muted small d-block mb-1">Sudah Dikembalikan</span>
                <h3 class="fw-bold mb-0 text-dark">{{ $totalSudahKembali }}</h3>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm p-3">
        <h5 class="fw-bold mb-3">5 Transaksi Peminjaman Terbaru</h5>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($peminjamanTerbaru as $pt)
                        <tr>
                            <td>{{ $pt->anggota->nama ?? '-' }}</td>
                            <td>{{ $pt->buku->judul ?? '-' }}</td>
                            <td>{{ $pt->tanggal_pinjam }}</td>
                            <td>{{ $pt->tanggal_kembali ?? '-' }}</td>
                            <td><span class="badge {{ $pt->status == 'Dipinjam' ? 'bg-warning text-dark' : 'bg-success' }}">{{ $pt->status }}</span></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-3">Belum ada riwayat transaksi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection