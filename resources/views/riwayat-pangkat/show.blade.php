@extends('adminlte::page')
@section('title', 'Master Tabel Pegawai')
@section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/riwayat-pangkat">Master tabel Pangkat</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lihat Detail</li>
    </ol>
</nav>
@stop
@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title"><h3>Lihat Datail Pangkat Pegawai</h3></span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('riwayat-pangkat.index1',$peg->id) }}"> Kembali</a>
                    </div>
                </div>
                <table class="table table-sm">
                    <tr>
                        <td style="width: 200px;">
                            <strong>Tanggal TMT</strong>
                        </td>
                        <td>: {{ $rw->tanggal_tmt_pangkat }}</td>
                    </tr>
                    <tr>
                        <td><strong>Nomor SK</strong></td>
                        <td>: {{ $rw->no_sk_pangkat }}</td>
                    </tr>
                    <tr>
                        <td><strong>Nama Pangkat</strong></td>
                        <td>: {{ $rw->getPangkat->nama_pangkat }}</td>
                    </tr>
                    <tr>
                        <td><strong>Gol/Ruang</strong></td>
                        <td>: {{ $rw->getPangkat->pangkat_gol }}</td>
                    </tr>
                    <tr>
                        <td><strong>Gaji Pokok</strong></td>
                        <td>: {{ $rw->gaji_pokok }}</td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        <td>: {{ $rw->status==0 ? "Tidak":"Berlaku" }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
