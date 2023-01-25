@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kirim-pesan">
            kirim pesan
        </button>

    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>penerima</th>
                    <th>Judul pesan</th>
                    <th>isi pesan </th>
                    <th>status pesan</th>
                    <th>tanggal kirim</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($terkirim as $t)
                    <tr>
                        <td>{{  $loop->iteration }}</td>
                        <td>{{ $t->penerima->fullname }}</td>
                        <td>{{ $t->judul }}</td>
                        <td>{{ $t->isi }}</td>
                        <td>{{ $t->status }}</td>
                        <td>{{ $t->tanggal_kirim }}</td>
                        <td>
                            <form action="{{ route('user.pesan.delete' , $t->id)  }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@include('user.pesan.form')

@endsection