<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\Core\Domain\Utils;

use Exception;

interface LogCenter
{
    public function error(Exception $ex): void;
}