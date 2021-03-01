<?php

declare(strict_types=1);

namespace TwoDevs\Adminvd\core\Application\Command\User;

use App\Models\User;
use Omatech\Provetsa\Domain\LogCenter;
use TwoDevs\Adminvd\Core\Domain\User\UserRepository;
use Omatech\Provetsa\Domain\Address\AddressDoesNotExist;
use TwoDevs\Adminvd\Core\Domain\Utils\TransactionManager;

final class CreateUserCommandHandler
{

    private UserRepository $userRepository;
    private TransactionManager $transactionManager;

    public function __construct(
        UserRepository $userRepository,
        TransactionManager $transactionManager
    )
    {
        $this->userRepository = $userRepository;
        $this->transactionManager = $transactionManager;
    }

    public function __invoke(CreateUserCommand $command): bool
    {

        $this->transactionManager->beginTransaction();

        try {

            $userId = $command->userId();

            $user = $this->userRepository->byId($userId);

            if (null == $user) {
                throw UserDoesNotExist::withIdOf($userId);
            }

            $user = User::registerNew(
                $userId,
                $command->name(),
                $command->email(),
                $command->password()
            );

            $this->userRepository->create($user);

            $this->transactionManager->commit();

            return true;
        } catch (\Exception $ex) {
            $this->logCenter->error($ex);
            $this->transactionManager->rollback();
            throw $ex;
        }
    }
}
