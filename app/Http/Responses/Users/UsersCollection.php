<?php

declare(strict_types=1);

namespace App\Http\Responses\Users;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersCollection extends ResourceCollection
{
    public $collects = UsersResource::class;
}
