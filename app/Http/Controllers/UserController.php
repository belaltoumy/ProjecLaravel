<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function login()
    {
        return view('user.login');
    }
    public function cheak(Request $request)
    {
        $validatlogin = Validator::make($request->all(), [
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if ($validatlogin->fails()) {
            return redirect('login')
                ->withErrors($validatlogin);
        } else {
            $user = User::where("email", $request->email)->first();

            if ($user && (Hash::check($request->password, $user->password))) {

               // $this->guard()->login($user, $request->has('remember'));
                return view('dashbord', ["user"=>$user]);
            }

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validat = Validator::make($request->all(), [
            'name' => 'string|required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required'
        ]);
        if ($validat->fails()) {
            return redirect('createuser',)
                ->withErrors($validat);
        } else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return view('dashbord');
        }
        // try{
        //     return 's';
        // }catch(Exception $e){
        //     return 'error';
        // }
        //     return $request;



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
