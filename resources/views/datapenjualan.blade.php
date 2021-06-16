@extends('layout.master')
@section('title', 'Data Penjualan Biji Kopi | SPK Coffee')
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
                                <b> Jumlah Penjualan </b>
                            </th>
                            <th>
                                <b> Tanggal Penjualan </b>
                            </th>
                            <th>
                                <b> Action </b>
                            </th>
                        </tr>
                    </thead>
                        @foreach ($datapenjualans as $datapenjualan)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ $datapenjualan->bijiKopi()->first()->nama }}
                            </td>
                            <td>
                                {{ $datapenjualan->jumlah_penjualan }}
                            </td>
                            <td>
                                {{ $datapenjualan->tanggal_penjualan }}
                            </td>
                            <td>
                                <form method="POST" action="{{ route('data-penjualan.delete', $datapenjualan->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('biji-kopi.edit', $datapenjualan->id) }}" class="btn btn-sm btn-warning btn-sm m-0">Edit</a>
                                    <button class="btn btn-sm btn-danger btn-sm m-0" type="submit">
                                        Delete
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
                <h4 class="modal-title w-100 font-weight-bold">Tambah Data Penjualan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body mx-3" method="POST" action="{{route('store-data-penjualan')}}">
                @csrf
                <div class="md-form">
                    <select class="form-control" name="biji_kopi_id" id="biji_kopi_id" required>
                        <option value="" disabled selected>Pilih Biji Kopi :</option>
                        @foreach ($bijikopis as $bijikopi)
                            <option value="{{ $bijikopi->id }}">{{ $bijikopi->nama }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="md-form">
                    <label for="jumlah_penjualan">Jumlah Penjualan</label>
                    <input class="form-control" value="{{ old('jumlah_penjualan') }}" type="number" name="jumlah_penjualan" id="jumlah_penjualan" required>
                    @error('jumlah_penjualan')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="md-form">
                    <label for="tanggal_penjualan">Tanggal Penjualan</label>
                    <input class="form-control" value="{{ old('tanggal_penjualan') }}" type="date" name="tanggal_penjualan" id="tanggal_penjualan" required>
                    @error('tanggal_penjualan')
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
