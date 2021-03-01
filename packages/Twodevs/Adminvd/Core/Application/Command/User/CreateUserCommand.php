<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\core\Application\Command\User;

final class CreateUserCommand
{
    private int $userId;
    private string $name;
    private string $email;
    private string $password;


    public function __construct(int $userId, string $name, string $email, string $password)
    {
        $this->userId  = $userId;
        $this->name     = $name;
        $this->email    = $email;
        $this->password = $password;
    }

     public function userId(): int
     {
        return $this->userId;
     }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function password(): string
    {
        return $this->password;
    }
}
