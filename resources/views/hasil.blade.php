@extends('layout.master')
@section('title', 'Hasil | SPK Coffee')

@section('konten')
    <div class="container animated fadeIn">
    <div class="row justify-content-center mt-5">
    <div class="col-md">
            <div class="card">
                <div class="card-header text-white h5 bg-warning">
                    Hasil Perhitungan SPK Biji Kopi
                </div>
                <div class="card-body">
                    <h3>Nilai Awal</h3>
            <table class="table table-striped table-responsive-md btn-table">
                <tr>
                <th>No</th>
                    <th>Biji Kopi</th>
                    @foreach ($kriterias as $kriteria)
                        <th>
                            {{ $kriteria->kriteria }} ({{ $kriteria->tipe }})
                        </th>
                    @endforeach
                </tr>
                @foreach ($bijikopis as $bijikopi)
                    <tr>
                        <td>
                                {{ $loop->index+1 }}
                        </td>
                        <td>
                            {{ $bijikopi->nama }}
                        </td>
                        @foreach ($kriterias as $kriteria)
                        @if ($bijikopi->nilaiKriteriaTabel1($kriteria))
                            <td>
                                {{ $bijikopi->nilaiKriteriaTabel1($kriteria) }}
                            </td>
                            
                        @else
                            <td style="color: red">
                                <b>Belum Diisi</b>
                                <i class="fas fa-exclamation-circle"></i>
                            </td>
                        @endif
                        @endforeach
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="card-body">
            <h3>Nilai Cost Benefit</h3>
            <table class="table table-striped table-responsive-md btn-table">
                <tr>
                <th>No</th>
                    <th>Biji Kopi</th>
                    @foreach ($kriterias as $kriteria)
                        <th>
                            {{ $kriteria->kriteria }} ({{ $kriteria->tipe }})
                        </th>
                    @endforeach
                </tr>
                @foreach ($bijikopis as $bijikopi)
                    <tr>
                        <td>
                                {{ $loop->index+1 }}
                        </td>
                        <td>
                            {{ $bijikopi->nama }}
                        </td>
                        @foreach ($kriterias as $kriteria)
                        @if ($bijikopi->nilaiKriteriaTabel2($kriteria))
                            <td>
                                {{$bijikopi->nilaiKriteriaTabel2($kriteria)}}
                            </td>
                        @else
                        <td style="color: red">
                                <b>Belum Diisi</b>
                                <i class="fas fa-exclamation-circle"></i>
                            </td>
                        @endif
                        @endforeach
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="card-body">
            <h3>Nilai Dikali dengan Bobot</h3>
            <table class="table table-striped table-responsive-md btn-table">
                <tr>
                <th>No</th>
                    <th>Biji Kopi</th>
                    @foreach ($kriterias as $kriteria)
                        <th>
                            {{ $kriteria->kriteria }} ({{ $kriteria->tipe }})
                        </th>
                    @endforeach
                </tr>
                @foreach ($bijikopis as $bijikopi)
                    <tr>
                        <td>
                                {{ $loop->index+1 }}
                        </td>
                        <td>
                            {{ $bijikopi->nama }}
                        </td>
                        @foreach ($kriterias as $kriteria)
                        @if ($bijikopi->nilaiKriteriaTabel3($kriteria))
                            <td>
                                {{ $bijikopi->nilaiKriteriaTabel3($kriteria) }}
                            </td>
                            
                        @else
                        <td style="color: red">
                                <b>Belum Diisi</b>
                                <i class="fas fa-exclamation-circle"></i>
                            </td>
            
                        @endif
                        @endforeach
                    </tr>
                @endforeach

            </table>
        </div>

        <div class="card-body">
            <h3>Nilai dan Peringkat Akhir Kopi</h3>
            <table class="table table-striped table-responsive-md btn-table">
                <tr>
                <th>No</th>
                    <th>Biji Kopi</th>
                    @foreach ($kriterias as $kriteria)
                        <th>
                            {{ $kriteria->kriteria }} ({{ $kriteria->tipe }})
                        </th>
                    @endforeach
                    <th>
                        Total
                    </th>
                    <th>
                        Ranking
                    </th>
                </tr>
                @foreach ($bijikopis as $bijikopi)
                    <tr>
                        <td>
                                {{ $loop->index+1 }}
                        </td>
                        <td>
                            {{ $bijikopi->nama }}
                        </td>
                        @foreach ($kriterias as $kriteria)
                        @if ($bijikopi->nilaiKriteriaTabel3($kriteria))
                            <td>
                                {{ $bijikopi->nilaiKriteriaTabel3($kriteria) }}
                            </td>
                        @else
                        <td style="color: red">
                                <b>Belum Diisi</b>
                                <i class="fas fa-exclamation-circle"></i>
                            </td>
                        @endif
                        @endforeach
                        
                        @if ($bijikopi->nilaiKriteriaTabel4())
                            <td>
                                {{ $bijikopi->nilaiKriteriaTabel4() }}
                            </td>
                            
                        @else
                        <td style="color: red">
                                <b>Belum Diisi</b>
                                <i class="fas fa-exclamation-circle"></i>
                            </td>
                        @endif
                        @if ($bijikopi->ranking())
                            <td>
                                {{ $bijikopi->ranking() }}
                            </td>
                            
                        @else
                            <td style="color: red">
                                <b>Belum Diisi</b>
                                <i class="fas fa-exclamation-circle"></i>
                            </td>
                        @endif
                    </tr>
                @endforeach

            </table>
            <div class="alert alert-primary" role="alert">
            Kesimpulan : Dari hasil perhitungan yang dilakukan menggunakan metode SAW Biji Kopi Terbaik untuk di pilih adalah {{ $numberOne->nama }}  dengan nilai {{ $numberOne->nilaiKriteriaTabel4() }}
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection