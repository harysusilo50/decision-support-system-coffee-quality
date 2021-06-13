@extends('layout.master')
@section('title', 'Kriteria | SPK Coffee')
@section('konten')

<div class="container animated fadeIn">
    <div class="row justify-content-center mt-5">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white h5 bg-secondary">
                    List Kriteria
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md btn-table">
                        <thead class="secondary-color-dark text-white">
                            <tr>
                                <th>
                                    <b> No </b>
                                </th>
                                <th>
                                    <b> Kriteria </b>
                                </th>
                                <th>
                                    <b> Tipe </b>
                                </th>
                                <th>
                                    <b> Bobot </b>
                                </th>
                                <th>
                                    <b> Action </b>
                                </th>
                            </tr>
                        </thead>
                        @foreach ($kriterias as $kriteria)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ $kriteria->kriteria }}
                            </td>
                            <td>
                                {{ $kriteria->tipe }}
                            </td>
                            <td>
                                {{ $kriteria->bobot }}
                            </td>
                            <td>
                                <form method="POST" action="{{ route('kriteria.delete', $kriteria->id) }}">
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

                    <button style="width: 20rem" class="btn btn-primary" data-toggle="modal"
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
            <form class="modal-body mx-3" method="POST" action="{{route('store-kriteria')}}">
                @csrf
                <div class="md-form">
                    <label for="kriteria">Kriteria</label>
                    <input class="form-control" value="{{ old('kriteria') }}" type="text" name="kriteria" id="kriteria">
                    @error('kriteria')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="md-form">
                    <div class="custom-control custom-radio ">
                        <input class="custom-control-input" type="radio" id="cost" name="tipe" value="cost">
                        <label class="custom-control-label" for="cost">Cost</label>
                    </div>
                    <div class="custom-control custom-radio ">
                        <input class="custom-control-input" type="radio" id="benefit" name="tipe" value="benefit">
                        <label class="custom-control-label" for="benefit">Benefit</label>
                    </div>
                    @error('tipe')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="md-form">
                    <label for="bobot">Bobot</label>
                    <input class="form-control" value="{{ old('bobot') }}" type="number" name="bobot" id="bobot">
                    @error('bobot')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-secondary" type="submit">Tambah Data Kriteria</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
