<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\core\Domain\User;
use TwoDevs\Adminvd\App\Models\User;

interface UserRepository
{
    public function byId(int $userId): ?User;
    public function create(User $user): void;
}
