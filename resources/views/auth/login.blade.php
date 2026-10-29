<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Sistem - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-1 text-center">Masuk Sistem</h4>
                        <p class="text-muted small text-center mb-4">Sistem Peminjaman Buku Perpustakaan</p>
                        
                        @if ($errors->any())
                            <div class="alert alert-danger py-2 small">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small">Email Address</label>
                                <input type="email" name="email" class="form-control" value="admin@perpustakaan.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Password</label>
                                <input type="password" name="password" class="form-control" value="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Masuk ke Dashboard</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>