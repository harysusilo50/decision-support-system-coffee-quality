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
        <div>
            <label for="sub_kriteria">Sub Kriteria</label>
            <input value="{{ old('sub_kriteria') }}" type="text" name="sub_kriteria" id="sub_kriteria">
            @error('sub_kriteria')
            <div >
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div>
            <label for="value">Value</label>
            <input value="{{ old('value') }}" type="number" name="value" id="value">
            @error('value')
            <div >
                {{ $message }}
            </div>
            @enderror
        </div>
        <div id ='dynamic-form'>
            <h1>
                sub kriteria
            </h1>
        </div>
        <button type="button" id="add-kriteria">
            add kriteria
        </button>
        <button type="submit">
            Tambah
        </button>
    </form>
    
    {{-- <script>
        let counter = 1;
        function addForm(){
            let input = document.getElementById("dynamic-form").innerHTML
                input += ``
                document.getElementById('dynamic-form').innerHTML = input
                counter++;
        }
        function removeForm(){
            let
        }
    </script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
    var counter = 0;
        $("#add-kriteria").click(function () {
            console.log("tst")
            ++counter;
            $("#dynamic-form").append(`<div><input type="text" name="pilihan[${counter}]" id="input-pilihan-${counter}" value=""> <input type="number" name="nilai[${counter}]" id="input-nilai-${counter}" value=""> <button class="remove-input-field">Remove</button> </div>`
                );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parent('div').remove();
        });
    </script>
</body>
</html>