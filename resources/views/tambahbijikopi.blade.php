<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kriteria</title>
</head>
<body>
    <form method="POST">
        @csrf
        <div>
            <label for="nama">Nama</label>
            <input value="{{ old('nama') }}" type="text" name="nama" id="nama">
            @error('nama')
                <div >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="harga">Harga</label>
            <input value="{{ old('harga') }}" type="number" name="harga" id="harga">
            @error('harga')
                <div >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit">
            Tambah
        </button>
    </form>
</body>
</html>