<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Paslon;
use Illuminate\Support\Facades\DB;
use Alert;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Pasangan Calon';
        $data = Paslon::orderBy('no_urut','asc')->get();
        return view('paslon.index',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Pasangan Calon';
        $data = Mahasiswa::orderBy('nama','asc')->get();
        return view('paslon.form',compact('title','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $no_urut = $request->no_urut;
        $calon_ketua = $request->calon_ketua;
        $calon_wakil_ketua = $request->calon_wakil_ketua;
        $visi = $request->visi;
        $misi = $request->misi;

        if($calon_ketua == $calon_wakil_ketua){
            Alert::error('Data Paslon', 'Gagal Simpan!','Calon Ketua Dan Wakil Tidak Boleh Sama');
            return redirect('admin/paslon/tambah');
        }else{
            $data = new Paslon();
            $data->no_urut = $no_urut;
            $data->calon_ketua = $calon_ketua;
            $data->calon_wakil_ketua = $calon_wakil_ketua;
            $data->visi = $visi;
            $data->misi = $misi;
            $data->save();
            Alert::success(' Tambah Data ', ' Berhasil');
            return redirect('admin/paslon');
        }
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
        // $paslon = Paslon::where('id',$id)->first();
        $paslon = DB::table('paslons')->where('id',$id)->first();
        $data = Mahasiswa::orderBy('nama', 'asc')->get();
        return view('paslon.edit',compact('data','paslon'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
