<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Users;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function welcome() {
        return view('pages.welcome');
    }

    public function register() {
        return view('pages.register');
    }

    public function newuser() {
        $post = Request::all();

        $user = new Users;
        $user->role_id = 2; // Default role is User
        $user->email = $post['email'];
        $user->password = $post['password'];
        $user->created_at = Carbon::now(); 

        if($user->save())
            return redirect('/profile');
        else
            return redirect('/');
    }

    public function dashboard() {
        //$user = Auth::user();
        return view('pages.dashboard');
    }

    public function listspace() {
        return view('pages.listspace');
    }
}
