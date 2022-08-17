<?php
declare(strict_types=1);

namespace Domain\User\Repositories;

use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;

final class UserRepository
{
    public function getIndex(array $params): Paginator
    {

        return User::query()->paginate();
    }
}
