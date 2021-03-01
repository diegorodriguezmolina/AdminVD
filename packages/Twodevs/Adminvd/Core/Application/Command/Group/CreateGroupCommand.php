<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\core\Application\Command\Group;

final class CreateGroupCommand
{
    private int $id;
    private string $name;
    private string $description;


    public function __construct(int $id, string $name, string $description)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->description = $description;
    }
}
