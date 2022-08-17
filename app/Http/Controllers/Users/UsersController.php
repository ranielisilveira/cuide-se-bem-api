<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use app\Http\Responses\Users\UsersCollection;
use Domain\User\Repositories\UserRepository;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request, UserRepository $userRepository)
    {
        dd('aqui');
        $params = $request->all();
        return new UsersCollection($userRepository->getIndex($params));
    }
}
