@extends('layouts.master')


@section('content')
<div class="container">

   <div class="card">
       <div class="card-header">
         <h4>Form Pengembalian</h4>
       </div>

       <div class="card-body">
           <form action="{{ route('submit.pengembalian') }}" method="POST" class="form-group">
            @csrf
           
            <div class="mb-3">
                <label for="">Pilih Buku Yang Dikembalikan</label>

                <select name="buku_id" id="" class="form-select">

                <option >Pilih Opsi</option>
            
                 @foreach($judul as $j) 
                <option value="{{$j->buku->id}}">{{$j->buku->judul}}</option>

                @endforeach
            </select>

               <div class="mb-3">
                   <label>Tanggal Pengembalian</label>
                   <input type="date" class="form-control" name="tanggal_pengembalian" value="{{ date('Y-m-d') }}" readonly>
               </div>




               </div>

               <div class="mb-3">
                   <label for="">kondisi buku saat dikembalikan</label>
                   <select class="form-select" name="kondisi_buku_saat_dikembalikan">
                       <option value="" disabled selected >Pilih Opsi</option>
                       <option value="baik">Baik</option>
                       <option value="rusak">rusak</option>
                       <option value="hilang">hilang</option>

                   </select>  
               </div>
               <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
       </div>
   </div>



</div>
@endsection