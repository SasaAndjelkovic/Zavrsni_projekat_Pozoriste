<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvatarResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "name" => $this->name,
        ];
    }
}
