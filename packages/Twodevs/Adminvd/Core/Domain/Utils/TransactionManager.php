<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\Core\Domain\Utils;

interface TransactionManager
{
    public function beginTransaction(): void;
    public function commit(): void;
    public function rollback(): void;
} 