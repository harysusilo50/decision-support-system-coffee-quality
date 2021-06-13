@extends('layout.master')
@section('title', 'Data Biji Kopi | SPK Coffee')
@section('konten')

<div class="container animated fadeIn">
    <div class="row justify-content-center mt-5">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white h5 bg-dark">
                    Daftar Biji Kopi Beserta Harganya
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md btn-table ">
                        <thead class="brown text-white">
                        <tr>
                            <th>
                               <b> No </b>
                            </th>
                            <th>
                                <b> Nama Biji Kopi </b>
                            </th>
                            <th>
                                <b> Harga </b>
                            </th>
                            <th>
                                <b> Action </b>
                            </th>
                        </tr>
                    </thead>
                        @foreach ($bijikopis as $bijikopi)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ $bijikopi->nama }}
                            </td>
                            <td>
                                {{ $bijikopi->harga }}
                            </td>
                            <td>
                                <form method="POST" action="{{ route('biji-kopi.delete', $bijikopi->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-sm m-0" type="submit">
                                        delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <button style="width: 20rem" class="btn btn-brown" data-toggle="modal"
                        data-target="#modalRegisterForm">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Kriteria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body mx-3" method="POST" action="{{route('store-biji-kopi')}}">
                @csrf
                <div class="md-form">
                    <label for="nama">Nama</label>
                    <input class="form-control" value="{{ old('nama') }}" type="text" name="nama" id="nama">
                    @error('nama')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="md-form">
                    <label for="harga">Harga</label>
                    <input class="form-control" value="{{ old('harga') }}" type="number" name="harga" id="harga">
                    @error('harga')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-brown" type="submit">Tambah Data Biji Kopi</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
