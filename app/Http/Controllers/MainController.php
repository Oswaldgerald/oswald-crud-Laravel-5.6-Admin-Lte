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

    public function addBusinessOwnerIndex()
    {
        return view('pages.add_business_owner');
    }


    public function BusinessOwnerIndex()
    {
        return view('pages.view_business_owner');
    }


    public function addCashierIndex()
    {
        return view('pages.add_cashier');
    }
    public function CashierIndex()
    {
        return view('pages.view_cashier');
    }


    public function addStoreManagerIndex()
    {
        return view('pages.add_store_manager');
    }
    public function StoreManagerIndex()
    {
        return view('pages.view_storemanager');
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

//        $admin->type = 'admin';
        $admin->save();
        return redirect('pages/admin')->with('message', 'Administrator Added Successfully!');
    }

    public function getAdmin()
    {
        $admin = User::all();
        return view('pages.view_admin', compact('admin'));
    }

    public function addBusinessOwner(Request $req)
    {
        //validation
            $this->validate($req, array(
                'name' => 'required',
                'lastname' => 'required',
                'email' => 'required|max:255|unique:users',
                'password' => 'required',

        ));
          $businessowner = new User();
          $businessowner->name = $req->name;
          $businessowner->email = $req->email;
          $businessowner->remember_token = '';
          $businessowner->password = bcrypt(Input::get('password'));
          $businessowner->middlename = $req->middlename;
          $businessowner->lastname = $req->lastname;
//
          $businessowner->save();
        return redirect('/addbusinessowner')->with('message', 'businessowner Added Successfully!');
    }


    public function getBusinessOwner()
    {
        $businessowner = User::all();
        return view('pages.view_business_owner', compact('businessowner'));
    }

//    new
    public function addCashier(Request $req)
    {
        //validation
        $this->validate($req, array(
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|max:255|unique:users',
            'password' => 'required',

        ));
        $cashier = new User();
        $cashier->name = $req->name;
        $cashier->email = $req->email;
        $cashier->remember_token = '';
        $cashier->password = bcrypt(Input::get('password'));
        $cashier->middlename = $req->middlename;
        $cashier->lastname = $req->lastname;

        $cashier->save();
        return redirect('/addcashier')->with('message', 'cashier Added Successfully!');
    }

    public function getCashier()
    {
        $cashier = User::all();
        return view('pages.view_cashier', compact('cashier'));
    }

   //new manager
    public function addStoreManager(Request $req)
    {
        //validation
        $this->validate($req, array(
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|max:255|unique:users',
            'password' => 'required',

        ));
        $storemanager = new User();
        $storemanager->name = $req->name;
        $storemanager->email = $req->email;
        $storemanager->remember_token = '';
        $storemanager->password = bcrypt(Input::get('password'));
        $storemanager->middlename = $req->middlename;
        $storemanager->lastname = $req->lastname;

        $storemanager->save();
        return redirect('/addstoremanager')->with('message', 'storemanager Added Successfully!');
    }

    public function getStoreManager()
    {
        $storemanager = User::all();
        return view('pages.view_storemanager', compact('storemanager'));
    }
}