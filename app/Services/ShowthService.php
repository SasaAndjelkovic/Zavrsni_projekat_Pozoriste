<?php

namespace App\Services;

use App\Http\Requests\ShowthStoreRequest;
use App\Models\Showth;

class ShowthService {
    public function storeShowth(ShowthStoreRequest $request, Showth $showth) {
        $showth->name = $request->input('name');
        $showth->description = $request->input('description');
        $showth->author = $request->input('author');
        $showth->save();
    }
}