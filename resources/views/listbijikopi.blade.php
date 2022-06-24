@extends('layout.master')
@section('title', 'Price List | SPK Coffee')
@section('konten')

<div class="container animated fadeIn">
    <div class="row justify-content-center mt-5">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white h5 bg-dark">
                    Price List Biji Kopi di ........
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
                        </tr>
                    </thead>
                        {{-- @foreach ($bijikopis as $bijikopi)
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
                        </tr>
                        @endforeach --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
