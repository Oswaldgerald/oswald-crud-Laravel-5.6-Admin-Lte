<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;

class MainController extends Controller
{

    public function _construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function adminIndex()
    {

        return view('pages.view_admin');

    }


    public function addAdminIndex()
    {
        return view('pages.add_admin');
    }


    public function addAdmin(Request $req)
    {
        //validation
        $this->validate($req, array(
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|max:255|unique:users',
            'password' => 'required'
        ));
        $admin = new User();
        $admin->name = $req->name;
        $admin->email = $req->email;
        $admin->remember_token = '';
        $admin->password = bcrypt(Input::get('password'));
        $admin->middlename = $req->middlename;
        $admin->lastname = $req->lastname;
//        $admin->college_id = "";
//        $admin->type = 'admin';
        $admin->save();
        return redirect('pages/admin')->with('message', 'Administrator Added Successfully!');
    }

    public function getAdmin()
    {
        $admin = User::all();
        return view('pages.view_admin', compact('admin'));
    }

}
