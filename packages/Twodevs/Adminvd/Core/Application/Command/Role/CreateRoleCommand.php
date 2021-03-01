<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\core\Application\Command\Role;

final class CreateRoleCommand
{
    private int $id;
    private string $name;

    public function __construct(int $id, string $name)
    {
        $this->id    = $id;
        $this->name  = $name;
    }
}
