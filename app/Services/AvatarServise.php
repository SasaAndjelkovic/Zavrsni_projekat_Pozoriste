<?php

namespace App\Services;
use App\Http\Requests\AvatarStoreRequest;
use App\Models\Avatar;

class AvatarService
{
    public function storeAvatar(AvatarStoreRequest $request, Avatar $avatar)
    {
        $avatar->name = $request->input('name');
        $avatar->description = $request->input('description');
        $avatar->save();
    }
}