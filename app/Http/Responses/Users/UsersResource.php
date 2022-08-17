<?php

declare(strict_types=1);

namespace App\Http\Responses\Users;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource

{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
