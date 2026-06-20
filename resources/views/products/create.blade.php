<!DOCTYPE html>

<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

```
<h2>Tambah Produk Elektronik</h2>

<form action="{{ route('products.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Merek</label>
        <input type="text" name="merek" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>
```

</div>

</body>
</html>
