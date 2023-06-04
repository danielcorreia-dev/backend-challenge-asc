<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\User\UserServiceContract;

class UserController extends Controller
{
    //
    protected $userService;

    public function __construct(UserServiceContract $userServiceContract)
    {
        $this->userService = $userServiceContract;
    }

    public function getAllUsers()
    {
        try {
            return response()->json(
                $this->userService->getAllUsers(),
                200
            );
        } catch (Exception $e) {
            return response()->json($e->getMessage(), $e->getCode());
        }
    }
}
