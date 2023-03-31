<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientWithAvatarsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->first_name,
            'description' => $this->description,
            'author' => $this->author,
            'avatars' => AvatarResource::collection($this->avatars), // modeli
        ];
    }
}
