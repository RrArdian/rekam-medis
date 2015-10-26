<?php

namespace App\Http\Controllers;

use App\Http\Models\Role;
use App\Http\Models\User;
use App\Http\Models\UserRole;
use App\Http\Models\Provinsi;
use App\Http\Models\AdminProvinsi;
use App\Http\Models\Kabupaten;
use App\Http\Models\Kecamatan;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function roles()
    {
        $role = Role::all();

        return view('admin.role')->withRole($role);
    }

    public function createrole(Request $request)
    {
        $rules = ['nama' => 'required|max:255'];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($v);
        } else {
            $role = new Role;
            $role->name = $request->input('nama');
            $role->save();

            return redirect()->back()->with('message', 'Role pengguna berhasil ditambah!');
        }
    }

    public function removerole($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect()->back()->with('message', 'Role pengguna berhasil dihapus!');
    }

    public function manageadminprovinsi()
    {
        $role = Role::whereLevel(2)->first();

        $user = UserRole::with('user.adminprovinsi.provinsi', 'role')->where('role_id', $role->id)->get();

        $provinsi = Provinsi::all();

        return view('admin.userole')->withUser($user)->withProvinsi($provinsi);
    }

    public function tambahadminprovinsi(Request $request)
    {
        $rules = ['nama' => 'required|max:255', 'email' => 'required|unique:users', 'provinsi' => 'required|numeric'];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($v);
        } else {
            $user = new User;
            $user->username = $request->input('nama');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('nama'));
            $user->save();

            $userid = User::max('id');

            $role = new UserRole;
            $role->user_id = $userid;
            $role->role_id = 3;
            $role->save();

            $provinsi = new AdminProvinsi;
            $provinsi->user_id = $userid;
            $provinsi->provinsi_id = $request->input('provinsi');
            $provinsi->save();

            return redirect()->back()->with('message', 'Admin provinsi berhasil ditambah!');
        }
    }

    public function provinsi($id)
    {
        $provinsi = Provinsi::with('kabupaten.kecamatan')->find($id);

        return $provinsi;
    }

    public function carikabupaten($id)
    {
        $kabupaten = Kabupaten::where('provinsi_id', $id)->get();
        $options = [];

        foreach ($kabupaten as $station) {
            $options += [$station->id => $station->nama];
        }

        return response()->json($options);
    }

    public function carikecamatan($id)
    {
        $kecamatan = Kecamatan::where('kabupaten_id', $id)->get();
        $options = [];

        foreach ($kecamatan as $station) {
            $options += [$station->id => $station->nama];
        }

        return response()->json($options);
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
