<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\Core\Infrastructure\Persistence;

use Illuminate\Support\Facades\DB;
use TwoDevs\Adminvd\Core\Domain\Utils\TransactionManager;

final class EloquentTransactionManager implements TransactionManager
{
    public function beginTransaction(): void
    {
        DB::beginTransaction();
    }

    public function commit(): void
    {
        DB::commit();
    }

    public function rollback(): void
    {
        DB::rollBack();
    }
}