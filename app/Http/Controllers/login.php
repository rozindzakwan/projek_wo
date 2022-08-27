<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $cek = User::where('username', $request->username)->first();
        if ($cek == NULL) {
            return redirect('login');
        }
        if ($cek->role == "user") {
            if (Hash::check($request->password, $cek->password)) {
                $data = array(
                    'name' => $cek->name,
                    'username' => $cek->username,
                    'id' => $cek->id,
                    'role' => $cek->role,
                );
                $request->session()->put($data);
                return redirect('dashboardUser')->with('loginSukses', "halo");
            } else {
                return redirect('login');
            }
        } elseif ($cek->role == "admin") {
            if (Hash::check($request->password, $cek->password)) {
                $data = array(
                    'name' => $cek->name,
                    'username' => $cek->username,
                    'id' => $cek->id,
                    'role' => $cek->role,
                );
                $request->session()->put($data);
                return redirect('dashboardAdmin')->with('loginSukses', "halo");
            } else {
                return redirect('login');
            }
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

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}
