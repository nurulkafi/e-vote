<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Paslon;
use App\Models\User;
use App\Models\Vote;

class HasilVoteController extends Controller
{
    public function index(){
        $title = 'Hasil Vote';
        $hasil = [];
        $hasil2 = [];
        $data2 = [];
        $paslon = Paslon::get();
        foreach($paslon as $ps){
            $id_kandidat = $ps->id;
            $no_urut = $ps->no_urut;
            $total = Vote::where('paslon_id',$id_kandidat)->count();
            $totalmhsw = Vote::get()->count();
            $calon_ketua = Mahasiswa::where('id',$ps->calon_ketua)->first();
            $calon_wakil_ketua = Mahasiswa::where('id',$ps->calon_wakil_ketua)->first();
            $a['name'] = "no urut ".$no_urut."<br>".$calon_ketua->nama."<br>".$calon_wakil_ketua->nama;
            $a['y'] = $total;
            $b['name'] = "no urut ".$no_urut."<br>".$calon_ketua->nama."<br>".$calon_wakil_ketua->nama;
            $b['y'] = $total;
            $b['drilldown'] = "no urut ".$no_urut."<br>".$calon_ketua->nama."<br>".$calon_wakil_ketua->nama;

            $pres= $total/$totalmhsw*100;
            $data['no_urut'] = $no_urut;
            $data['hasil'] = $total;
            $data['presen'] = substr($pres,0,4);
            array_push($hasil,$a);
            array_push($hasil2,$b);
            array_push($data2,$data);
        }
        return view('hasil_vote.index',compact('title','hasil','hasil2','data2'));
    }
}
