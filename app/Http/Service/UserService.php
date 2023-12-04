<?php

namespace App\Http\Service;

use App\Models\User;

class UserService
{
    public function getAll(){
        $users = User::get();

        // Định dạng ngày trong JSON
        return response()->json($users);
    }
}
