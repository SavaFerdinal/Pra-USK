<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masuk()
    {
        $masuk = Pesan::where('pengirim_id' , '!=', Auth::user()->id)->where('penerima_id' , Auth::user()->id)->get();

        return view('user.pesan.masuk' ,compact('masuk'));
    }

    public function terkirim()
    {
        $terkirim = Pesan::where('penerima_id' , '!=', Auth::user()->id)->where('pengirim_id' , Auth::user()->id)->get();
        $penerima = User::where('role', 'admin')->get();

        return view('user.pesan.terkirim' ,compact('terkirim', 'penerima'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, Pesan $pesan)
    {
        $status = Pesan::where('id' , $request->id)->first();
        $status->update([
            'status' => 'terbaca'
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
}
