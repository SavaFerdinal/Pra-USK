@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>

    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">
                                Jumlah Anggota
                            </h6>
                            <h6 class="font-extrabold mb-0">{{ $anggota }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Buku</h6>
                            <h6 class="font-extrabold mb-0">{{ $buku }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
