<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\City;
use App\Country;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::all();
        return view('dashboard.users.index')->with('users',$users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $roles = Role::all();


        return view('dashboard.users.add')
                ->with('roles',$roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => 'required',
            'city_id' => 'required',
            'mobile' => 'required',
            // 'nationalId' => 'required'

         ]);
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->role_id = request('role_id');
        $user->city_id = $request->city_id;
        $user->mobile = $request->mobile;
        if($request->nationalId){
            $user->nationalId = $request->nationalId;
        }
        $user->save();
        return redirect()->route('edit_user',$user->id)->with('success',__('User created successfully'));

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
        $user = User::find($id);
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();
        return view('dashboard.users/edit')
                ->with('user',$user)
                ->with('roles',$roles)
                ->with('cities',$cities)
                ->with('countries',$countries);
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
//        return $request->all() ;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required', 'string', 'email','unique:users','max:255'.$id,
            'role_id' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'mobile' => 'required',
            // 'nationalId' => 'required'

         ]);
         $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        if($request->input('password') !=""){
            $user->password = Hash::make(request('password'));
         }
        $user->role_id = request('role_id');
        $user->city_id = $request->city_id;
        $user->mobile = $request->mobile;
        if($request->nationalId){
            $user->nationalId = $request->nationalId;
        }
        $user->save();


         return redirect()->route('edit_user',$user->id)->with('success',__('User updated successfully'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success',__('User deleted successfully'));
    }




}
