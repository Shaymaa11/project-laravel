<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
// use intervention\Image;
// use App\Models\Image;
//  use Intervention\Image\Image;
// use intervention\image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    // public function register()
    // {
    // }
    // public function handleregister(){

    // }
    // public function login(){

    // }

    // public function handlelogin()
    // {
    // }

    public function register()
    {
        return view('User.register');
    }
    public function handleregister(Request $request)
    {
        // dd('ggg');
        $img=$request->img;
        $ext = $img->getClientOriginalName();
        $name = time()  .".$ext";
        $img->move(public_path('users/'), $name);

        // User::create([
        //     'name' => $request->name, 'email' => $request->email,
        //     'img' => $name, 'role' => $request->role, 'password' => Hash::make($request->password)
        // ]);
        // Auth::login($logeduser);
        $user = User::create([
            'name' => $request->name, 'email' => $request->email,
            'img' => $name, 'role' => $request->role, 'password' => Hash::make($request->password)
        ]);
        Auth::login($user);
        // return redirect(route('login'));
        return redirect(url('/'));
        // return redirect(route('login'));

    }
    public function login()
    {
        return view('User.login');
    }
    public function handlelogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $cred = array('email' => $email, 'password' => $password);
        if (Auth::attempt($cred))
            return redirect(url('/'));
        return redirect(route('login'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
    // public function deleteaccount()
    // {
    //     $id = Auth::user()->id;
    //     if (Comment::where('user_id', $id)->first() != null) {
    //         $comments = Comment::where('user_id', $id)->get();
    //         foreach ($comments as $comment) {
    //             $comment->delete();
    //         }
    //     }
    //     if (Course::where('user_id', $id)->first() != null) {
    //         $courses = Course::where('user_id', $id)->get();
    //         foreach ($courses as $course) {
    //             $course->delete();
    //         }
    //     }
    //     if (Enrollment::where('user_id', $id)->first() != null) {
    //         $enrollments = Enrollment::where('user_id', $id)->get();
    //         foreach ($enrollments as $enrollment) {
    //             $enrollment->delete();
    //         }
    //     }
    //     User::find($id)->delete();
    //     return redirect(route('login'));
    // }

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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        // dd($user);
        return view('layout.profile', ["data" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // dd($user);
        // $user = User::findorfail($user);
        return view("layout.editprofile", ["data" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        // $user = user::findorfail($user);
        // dd($request);
        // $user->name = request("name");
        // $user->update($request->all());
        // return redirect("/userprofile");
        // dd($request->all());
        $user->update($request->all());
        return redirect("/userprofile");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        //
        $user->delete();
        return redirect('/');
    }


}
