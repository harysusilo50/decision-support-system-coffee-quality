@extends('layout.master')
@section('title', 'Kriteria | SPK Coffee')
@section('konten')

<div class="container animated fadeIn">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-white h5 bg-dark">
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
                        
                        @foreach ($kriterias as $kriteria)
                            <h1 for="">{{ $kriteria->kriteria }}</h1><br>

                                @foreach ($kriteria->subKriteria as $item)
                                    <div class="custom-control custom-radio ">
                                        <input class="custom-control-input" type="radio" id="{{ $item->id }}" name="{{ $kriteria->id }}" value="{{ $item->id }}" @if($bijikopi->isFilledKriteria($kriteria) &&  $bijikopi->findSubKriteriaId($kriteria) == $item->id) checked @endif>
                                        <label class="custom-control-label" for="{{ $item->id }}">{{ $item->sub_kriteria }}</label>
                                    </div>
                                @endforeach
                        @endforeach
        
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
    var counter = 1;
        $("#add-kriteria").click(function () {
            console.log("tst")
            ++counter;
            $("#dynamic-form").append(`<div><input type="text" name="pilihan[]" id="input-pilihan-${counter}" value="" required > <input type="number" name="nilai[]" id="input-nilai-${counter}" value="" required > <button class="remove-input-field">Remove</button> </div>`
                );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parent('div').remove();
        });
    </script>
@endpush