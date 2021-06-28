<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Alert;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class MahasiswaController extends Controller
{
    //
    public function index(){
        $title = "Mahasiswa";
        $no = 1;
        $data = Mahasiswa::orderBy('nama','asc')->get();
        return view('mahasiswa.index',compact('title','data','no'));
    }
    public function create(){
        return view('mahasiswa.form');
    }
    public function Detail($nim){
        $data = DB::table('mahasiswas')->where('nim',$nim)->first();
        echo json_encode($data);
    }
    public function store(Request $request){
        $nim = $request->nim;
        $nama = $request->nama;
        $tgl_lahir = $request->tgl_lahir;
        $alamat = $request->alamat;
        $file = $request->file('photo');
        $request->validate([
            'photo' => 'required|file|image|max:2000',
        ]);
        if($file){
            $nama_photo = rand().$file->getClientOriginalName();
            $file->move('images/photo_mhsw', $nama_photo);
            $photo = 'images/photo_mhsw/'.$nama_photo;
        }
        $user = new User();
        $user->name =$nama;
        $user->nim =$nim;
        $user->password = bcrypt($tgl_lahir);
        $user->assignRole('User');
        $user->save();
        $data = new Mahasiswa();
        $data->nim = $nim;
        $data->user_id = $user->id;
        $data->nama = $nama;
        $data->tgl_lahir = $tgl_lahir;
        $data->alamat = $alamat;
        $data->photo = $photo;
        $data->save();
        Alert::success(' Tambah Data ', ' Berhasil');
        return redirect('admin/mahasiswa');

    }
    public function edit($id){
        $title = 'Ubah Data';
        $data = DB::table('mahasiswas')->where('id',$id)->first();

        dd($data);
        // return view('mahasiswa.edit',compact('title','data'));
    }
    public function update(Request $request,$id){
        $data = Mahasiswa::find($id);

        $nim = $data->nim;
        $nama = $request->nama;
        $tgl_lahir = $request->tgl_lahir;
        $alamat = $request->alamat;
        $file = $request->file('photo');

        if($file){
            $nama_photo = rand().$file->getClientOriginalName();
            $file->move('images/photo_mhsw', $nama_photo);
            $photo = 'images/photo_mhsw/'.$nama_photo;
        }else{
            $photo = $data->photo;
        }
        $data->nim = $nim;
        $data->nama = $nama;
        $data->tgl_lahir = $tgl_lahir;
        $data->alamat = $alamat;
        $data->photo = $photo;
        $data->save();
        Alert::success('Update Data ', ' Berhasil');
        return redirect('admin/mahasiswa');
    }
    public function delete($id){
        Mahasiswa::where('user_id',$id)->delete();
        User::where('id',$id)->delete();
        Alert::success('Delete Data ', ' Berhasil');
        return redirect()->back();
    }
}
