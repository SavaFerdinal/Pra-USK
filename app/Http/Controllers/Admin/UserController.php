<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = User::where('role', 'user')->get();
        $count = count($anggota);
        $code = "A00" . $count + 1;

        return view('admin.anggota.index', compact('anggota', 'code'));
    }

    public function indexAdmin()
    {
        $admin = User::where('role', 'admin')->get();
        $count = count($admin);
        $code = "A0" . $count + 1;

        return view('admin.admin.index', compact('admin', 'code'));
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
        $anggota = User::where('role', 'user')->get();
        $anggota = User::create([
            'kode' => $request->kode,
            'nis' => $request->nis,
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'role' => 'user',
            'verif' => 'verified',
            'joind_date' => Carbon::now()
        ]);

        return redirect()->back();
    }

    public function storeAdmin(Request $request)
    {
        $admin = User::where('role', 'admin')->get();
        $admin = User::create([
            'kode' => $request->kode,
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'verif' => 'verified',
            'joind_date' => Carbon::now()
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anggota = User::where('role', 'user')->where('id', $id);
        $anggota->update([
            'nis' => $request->nis,
            'fullname' => $request->fullname,
            'username' => $request->username,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'verif' => $request->verif_id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = User::where('role', 'user')->where('id', $id);
        $anggota->delete();

        return redirect()->back();
    }

    public function destroyAdmin($id)
    {
        $admin = User::where('role', 'admin')->where('id', $id);
        $admin->delete();

        return redirect()->back();
    }
}
