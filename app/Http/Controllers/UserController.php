<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return "index";

       return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request->validate([
         //   'name' => 'required',
        //    'email' => 'required|email|unique:users',
        //    'password' => 'required|min:6',
      //  ]);

       // $user = User::create([
      //      'name' => $request->name,
      //      'email' => $request->email,
        //    'password' => Hash::make($request->password),
        //]);
        //return response()->json($user, 201); // 201 Created
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //return response()->json($user);
        return $user;
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
    public function update(Request $request, User $user)
    {
       // $request->validate([
        //    'name' => 'required',
         ///  'email' => 'required|email',
          //  'password' => 'nullable|min:6',
        //]);

       // $user->name = $request->name;
       // $user->email = $request->email;

      //  if ($request->password) {
      //      $user->password = Hash::make($request->password);
     //   }

       // $user->save();

      //  return response()->json($user);

      $user->update($request->all());
      return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
     //  $user->delete();
     //   return response()->json(null, 204); // 204 No Content

     $user->delete();
        return response()->json(null, 204);
    }
}
