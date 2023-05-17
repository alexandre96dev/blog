<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = User::orderBy('name')->get();
        $reversedUsers = $users->reverse();



        return view('users.index', compact('users', 'reversedUsers'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('users.show', $user->id)
            ->with('success', 'Usuário criado com sucesso!');
    }

    public function show(User $user)
    {
        $users = $this->userService->formatUser($user);
        return view('users.index', compact('users'));
    }


}

