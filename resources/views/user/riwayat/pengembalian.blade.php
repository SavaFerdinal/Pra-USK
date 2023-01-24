@extends('layouts.master')

@section('content')
<div class="container">

    @if (Session('status'))
    <div class="alert alert-{{ session('status') }}" role="alert"></i>
        <strong>{{ session('msg') }}</strong>
    </div>
@endif

    <div class="row">
        <div class="col-6">
            <h3>Riwayat Pengembalian Buku</h3>

        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pengembalian</th>
                <th>Kondisi buku saat dipinjam</th>
                <th>Kondisi buku saat dikembalikan</th>
                <th>denda</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengembalian as $key => $p)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $p->user->fullname }}</td>
                    <td>{{ $p->buku->judul }}</td>
                    <td>{{ $p->tanggal_pengembalian }}</td>
                    <td>{{ $p->kondisi_buku_saat_dipinjam }}</td>
                    <td>{{ $p->kondisi_buku_saat_dikembalikan }}</td>
                    <td>{{ $p->denda }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

   
@endsection