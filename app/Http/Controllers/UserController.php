<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $dataUser=User::all();
        return view('dbadmin.user-show', compact('dataUser'));
    }

    public function adminHome()
    {
        $dataUser=User::all();
        return view('dbadmin.home-db', compact('dataUser'));
    }

    public function userDB()
    {
        $dataUser=Auth::user();
        return view('dbuser.dashboardUser', compact('dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("home.sign-up");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        // $request->validate([
        //     'productCode' => 'required',
        //     'product' => 'required',
        //     'qty' => 'required|numeric',
        //     'perPrice' => 'required|numeric',
        // ]);

        // dd($request->all());

        $data = $request->all();
        $data['password'] = Hash::make($request['password']);
        // dd($data['pass']);s

        User::create($data);

        return redirect('login')->with('success', 'Product created successfully.');
    }

    public function login(Request $request)
    {
        $credentials = [ 'usn' => $request['usn'],
                        'password' => $request['password']];
        // dd($credentials);
        
        if (Auth::attempt($credentials)) {
            // Authentication passed
            // dd(Auth::check());
            if (Auth::user()->isadmin) {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/dashboard');
            } 
        } else {
            // Authentication failed
            return back()->withErrors(['usn' => 'Invalid username or password.']);
        }
    }

    public function dashboard()
    {
        return view("dbuser.dashboardUser");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return view('dbadmin.product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('#', compact('user')); 
    }

    /**
     * Update the specified resource in storage.     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // $request->validate([
        //     'productCode' => 'required',
        //     'product' => 'required',
        //     'qty' => 'required|numeric',
        //     'perPrice' => 'required|numeric',
        // ]);

        $user->update($request->all());
        
        return redirect()->route('products.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('succes', 'User deleted succesfully.');
    }
}
