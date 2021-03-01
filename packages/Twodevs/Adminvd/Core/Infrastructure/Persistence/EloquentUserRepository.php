<?php

use TwoDevs\Adminvd\App\Models\User;
use TwoDevs\Adminvd\core\Domain\User\UserRepository;
use TwoDevs\Adminvd\src\App\Repositories\UserRepository as BaseEloquentUserRepository;

class EloquentUserRepository implements UserRepository
{
    private BaseEloquentUserRepository $userRepository;

    public function __construct(BaseEloquentUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function byId(int $userId): ?User
    {
        return $this->userRepository->find($userId);
    }

    public function create(User $user): void
    {
        $this->userRepository->create($user->getAttributes());
    }
}
