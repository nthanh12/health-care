<?php

namespace App\Http\Controllers;

use App\Http\Service\UserService;

class UserController
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function getUserList(){
        return $this->userService->getAll();
    }
}
