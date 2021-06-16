@extends('layout.master')
@section('title', 'Edit Data Penjualan Biji Kopi | SPK Coffee')
@section('konten')

<div class="container animated fadeIn">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-white h5 bg-dark">
                    Edit Data Penjualan Kopi
                </div>
                <div class="card-body">
                    <form class="modal-body mx-3" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="md-form">
                            <label for="nama">Nama (readonly)</label>
                            <input style="color : grey;" class="form-control" value="{{ $datapenjualan->bijiKopi()->first()->nama }}" type="text" name="nama" id="nama" readonly>
                            @error('nama')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-form">
                            <label for="harga">Jumlah Penjualan</label>
                            <input class="form-control" value="{{ $datapenjualan->jumlah_penjualan}}" type="number" name="jumlah_penjualan" id="jumlah_penjualan" >
                            @error('jumlah_penjualan')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-form">
                            <label for="harga">Tanggal Penjualan</label>
                            <input class="form-control" value="{{ $datapenjualan->tanggal_penjualan}}" type="date" name="tanggal_penjualan" id="tanggal_penjualan">
                            @error('tanggal_penjualan')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
        
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-brown" type="submit">Edit Data Penjualan Data</button>
                        </div>
                    </form>
        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
