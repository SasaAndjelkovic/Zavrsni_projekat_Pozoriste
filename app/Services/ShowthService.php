<?php

namespace App\Services;

use App\Http\Requests\Web\ShowthStoreRequest;
use App\Models\AvatarShowth;
use App\Models\Showth;
use Illuminate\Support\Facades\DB;

class ShowthService {
    public function storeShowth(ShowthStoreRequest $request, Showth $showth) {
        DB::transaction(function() use ($request, $showth) {
            $showth->name = $request->input('name');
            $showth->description = $request->input('description');
            $showth->author = $request->input('author');
            $showth->save();
       
            $avatarIds = $request->input('avatar_ids'); //nije niz vec jedan podatak
            if($avatarIds === null) $avatarIds = []; // za slucaj da nista nije cekirano!!!

            AvatarShowth::where('showth_id', '=', $showth->id)
                ->whereNotIn('avatar_id', $avatarIds)
                ->delete();

            foreach ($avatarIds as $id) {
                AvatarShowth::updateOrCreate(
                    ['showth_id' => $showth->id, 'avatar_id' => $id]
                );
            }
        });
    }
}