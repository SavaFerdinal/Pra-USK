@extends('layouts.master')

@section('content')
    <h2 class="mb-3">Dashboard</h2>
    @foreach ($pemberitahuan as $p)
        <div class="alert alert-primary">
            {{ $p->isi }}
        </div>
    @endforeach

    <h2 class="mb-3">List Buku</h2>
    
    <div class="row">
        @foreach ($buku as $b)
            <div class="col-4">
                <div class="card">
                    <div class="card-content">
                        <img src="" alt="">
                        <div class="card-body">
                            <div class="card-title"><h5>{{ $b->judul }}</h5></div>
                            <div class="card-text">
                                <div>{{ $b->pengarang }}</div>
                                <div>{{ $b->penerbit->nama }}</div>
                                <div>{{ $b->tahun_terbit }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection