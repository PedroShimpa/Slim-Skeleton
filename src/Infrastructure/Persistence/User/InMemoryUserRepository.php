<?php



namespace App\Infrastructure\Persistence\User;

use App\Application\Models\UsersModel;
use App\Domain\User\User;
use App\Domain\User\UserNotFoundException;
use App\Domain\User\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    private array $users;
    private $usersModel;

    public function __construct(array $users = null)
    {
        $this->usersModel = new UsersModel();
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        return $this->usersModel->findAll();
    }

    /**
     * {@inheritdoc}
     */
    public function findUserOfId(int $id): User
    {
        if (!isset($this->users[$id])) {
            throw new UserNotFoundException();
        }

        return $this->users[$id];
    }
}
