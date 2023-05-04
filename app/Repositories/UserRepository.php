<?php
// app/Repositories/UserRepository.php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    // Triển khai các phương thức chức năng cụ thể cho User model tại đây

}

