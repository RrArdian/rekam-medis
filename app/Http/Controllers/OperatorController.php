<?php

namespace App\Http\Controllers;

use App\Http\Models\Provinsi;
use App\Http\Models\User;
use App\Http\Models\Penduduk;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operator.index');
    }

    public function daftarpasien()
    {
        return view('operator.daftarpasien');
    }

    public function registrasipasien()
    {
        $provinsi = Provinsi::all();

        return view('operator.registrasi')->withProvinsi($provinsi);
    }

    public function pendaftaran()
    {
        return view('operator.pendaftaran');
    }

    public function rekamedis()
    {
        return view('operator.rekamedis');
    }

    public function inputrekamedis()
    {
        return view('operator.inputrekamedis');
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

    public static function nomerRM($num) {
        $num=$num+1;

        switch (strlen($num)) {
            case 1 : $NoTrans = "00000000".$num;
            break;
            case 2 : $NoTrans = "0000000".$num;
            break;
            case 3 : $NoTrans = "000000".$num;
            break;
            case 4 : $NoTrans = "00000".$num;
            break;
            case 5 : $NoTrans = "0000".$num;
            break;
            case 6 : $NoTrans = "000".$num;
            break;
            case 7 : $NoTrans = "00".$num;
            break;
            case 8 : $NoTrans = "0".$num;
            break;
            default: $NoTrans = $num;
        }

        return $NoTrans;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|max:255',
            'nik' => 'required|numeric',
            'tempat' => 'required|max:50',
            'tanggal' => 'required',  
            'agama' => 'required',
            'jkel' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'suku' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required|max:100',
            'alamat' => 'required|max:100',
        ];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($v);
        } else {

            $user = new User;
            $user->username = $request->input('nik');
            $user->email = $request->input('nik').'@simetris.go.id';
            $user->password = bcrypt($request->input('nik'));
            $user->save();

            $userid = User::max('id');

            $penduduk = new Penduduk;
            $penduduk->user_id = $userid;
            $penduduk->nama_lengkap = $request->input('nama');
            $penduduk->nik = $request->input('nik');
            $penduduk->no_rekam_medis = $this->nomerRM($userid);
            $penduduk->tempat_lahir = $request->input('tempat');
            $penduduk->tanggal_lahir = $request->input('tanggal');
            $penduduk->agama = $request->input('agama');
            $penduduk->jenis_kelamin = $request->input('jkel');
            $penduduk->status = $request->input('status');
            $penduduk->pendidikan = $request->input('pendidikan');
            $penduduk->pekerjaan = $request->input('pekerjaan');
            $penduduk->suku_bangsa = $request->input('suku');
            $penduduk->alamat = $request->input('alamat');
            $penduduk->kelurahan = $request->input('kelurahan');
            $penduduk->kecamatan_id = $request->input('kecamatan');
            $penduduk->save();

            return redirect()->back()->with('message', 'Data registrasi pasien berhasil!');
        }
    }

    public function caripendaftaran($id)
    {
        $penduduk = Penduduk::with('kecamatan.kabupaten.provinsi')->where('no_rekam_medis', $id)->first();

        return $penduduk;
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
