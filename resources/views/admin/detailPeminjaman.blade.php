<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Detail Peminjaman</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
        </div>
    </nav>

    <div class="container mt-4">
        <a href="{{ route('admin.peminjaman') }}">
            <i class="bi-arrow-left h1"></i>
        </a>

        <h5 class="mt-3 text-center">Detail Peminjaman</h5>

        <div class="card mt-4">
            <div class="card-body">
            @if ($detailPeminjaman)
                <p><strong>Nomor Anggota:</strong> {{ $detailPeminjaman->id_user }}</p>
                <p><strong>ID Buku:</strong> {{ $detailPeminjaman->id_buku }}</p>
                <p><strong>Tanggal Peminjaman:</strong> {{ \Carbon\Carbon::parse($detailPeminjaman->tanggal_pinjam)->format('d-m-Y') }}</p>
                <p><strong>Tanggal Pengembalian:</strong> {{ \Carbon\Carbon::parse($detailPeminjaman->tanggal_kembali)->format('d-m-Y') }}</p>
            @else
                <p>Data peminjaman tidak ditemukan.</p>
            @endif

                <a href="{{ route('admin.peminjaman') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('admin.peminjaman') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
