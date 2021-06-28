<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use Alert;
class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Pemilihan Pasangan Calon';
        $user = Auth()->user()->id;
        $photo = DB::table('mahasiswas')->where('user_id',$user)->first();
        $data = Paslon::orderBy('no_urut','asc')->get();
        $bg = ["bg-success","bg-info","bg-primary","bg-danger"];
        $val = DB::table('votes')->where('user_id',$user)->first();
        $no = 0;
        return view('vote.index',compact('title','data','photo','bg','no','val'));

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
        $user_id = Auth()->user()->id;
        $id_paslon = $request->paslon_id;
        $data = new Vote();
        $data->user_id = $user_id;
        $data->paslon_id = $id_paslon;
        $data->save();
        Alert::success('Ok ', ' Berhasil');
        return redirect('vote');
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
