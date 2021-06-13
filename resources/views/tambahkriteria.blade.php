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
            <label for="kriteria">kriteria</label>
            <input value="{{ old('kriteria') }}" type="text" name="kriteria" id="kriteria">
            @error('kriteria')
                <div >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <input type="radio" id="cost" name="tipe" value="cost">
            <label for="cost">Cost</label><br>
            <input type="radio" id="benefit" name="tipe" value="benefit">
            <label for="benefit">Benefit</label><br>
            @error('tipe')
                <div >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="bobot">bobot</label>
            <input value="{{ old('bobot') }}" type="number" name="bobot" id="bobot">
            @error('bobot')
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