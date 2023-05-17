<?php
    namespace App\Services;

    use App\Models\User;

    class UserService
    {
        public function formatUser(User $user)
        {
            return [
                'id' => $user->id,
                'name' => strtoupper($user->name),
                'email' => $user->email,
            ];
        }
    }
