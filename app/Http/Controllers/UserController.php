<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Services\UserService;

class UserController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $userService;

    public function __construct(UserService $userService)
    {
        //
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->successResponse($this->userService->obtainUsers());
    }
    public function show($id){
        return $data= $this->successResponse($this->userService->obtainUsersById($id));
        

    }

    //
}
