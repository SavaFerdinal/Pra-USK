@extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>pengirim</th>
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
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->pengirim->fullname }}</td>
                    <td>{{ $t->judul }}</td>
                    <td>{{ $t->isi }}</td>
                    <td>{{ $t->status == 'terkirim' ? 'belum dibaca' : 'terbaca' }}</td>
                    <td>{{ $t->tanggal_kirim }}</td>
                    <td>
                        @if ($t->status == 'terkirim')
                            <form action="{{ route('user.pesan.masuk.update', ['id' => $t->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="penerima_id" value="{{ Auth::user()->id }}">
                                <button type="submit" class="btn btn-success">update
                                </button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
