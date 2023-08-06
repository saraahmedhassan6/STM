<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);

    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
}
