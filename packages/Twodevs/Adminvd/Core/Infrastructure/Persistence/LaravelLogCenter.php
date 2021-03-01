<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\Core\Infrastructure\Persistence;

use Illuminate\Support\Facades\Log;
use TwoDevs\Adminvd\Core\Domain\Utils\LogCenter;

final class LaravelLogCenter implements LogCenter
{
    public function error(): void
    {
        \Log::error($ex->getMessage());
        \Log::error(substr($ex->getTraceAsString(), 0, 2000));
    }
}