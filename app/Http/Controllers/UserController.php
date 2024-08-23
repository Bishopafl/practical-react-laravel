<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Get all of the users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(User::paginate(), Response::HTTP_OK);
    }

    /**
     * Create one User
     *
     * @param  UserCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = User::create(
            $request->only('first_name', 'last_name', 'email') + ['password' => Hash::make(1234)]
        );
        return response($user, Response::HTTP_CREATED);
    }

    /**
     * Show a single User
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(User::find($id), Response::HTTP_ACCEPTED);
    }

    /**
     * Update a single user
     *
     * @param  UserUpdateRequest $request
     * @param  int  $id
     * @return Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);

        $user->update($request->only('first_name', 'last_name', 'email'));

        return response($user, Response::HTTP_ACCEPTED);
    }

    /**
     * Delete a single user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        \Log::info("Deleting user: {$user->id}");
        $user->delete();
        \Log::info("User deleted: {$user->id}");

        return response(null, Response::HTTP_NO_CONTENT);
    }

}
