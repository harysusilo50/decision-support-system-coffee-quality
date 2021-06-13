@extends('layout.master')
@section('title', 'Kriteria | SPK Coffee')
@section('konten')

<div class="container animated fadeIn">
    <div class="row justify-content-center mt-5">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white h5 bg-secondary">
                    Edit Biji Kopi
                </div>
                <div class="card-body">
                    <form class="modal-body mx-3" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="md-form">
                            <label for="nama">Nama</label>
                            <input class="form-control" value="{{ $bijikopi->nama }}" type="text" name="nama" id="nama">
                            @error('nama')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-form">
                            <label for="harga">Harga</label>
                            <input class="form-control" value="{{ $bijikopi->harga}}" type="number" name="harga" id="harga">
                            @error('harga')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
        
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-brown" type="submit">Edit Data Biji Kopi</button>
                        </div>
                    </form>
        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
    var counter = 0;
        $("#add-kriteria").click(function () {
            console.log("tst")
            ++counter;
            $("#dynamic-form").append(`<div><input type="text" name="pilihan[${counter}]" id="input-pilihan-${counter}" value="" required > <input type="number" name="nilai[${counter}]" id="input-nilai-${counter}" value="" required > <button class="remove-input-field">Remove</button> </div>`
                );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parent('div').remove();
        });
    </script>
@endpush