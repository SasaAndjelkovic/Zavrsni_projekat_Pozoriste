<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\AvatarStoreRequest;
use App\Models\Avatar;
use App\Services\AvatarService;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index()
    {
        $avatars = Avatar::paginate(10);

        return view('avatars.index')->with([
            'avatars' => $avatars,
        ]);
    }

    public function create()
    {
        return view('avatars.create');
    }

    public function edit(Request $request, Avatar $avatar)
    {
        return view('avatars.edit')->with([
            'avatar' => $avatar,
        ]);
    }

    public function store(AvatarStoreRequest $request)
    {
        $service = new AvatarService();
        $service->storeAvatar($request, new Avatar());

        return redirect()->route('avatars.index');
    }

    public function update(AvatarStoreRequest $request, Avatar $avatar)
    {
        $service = new AvatarService();
        $service->storeAvatar($request, $avatar);

        return redirect()->route('avatars.index');
    }

    public function destroy(Request $request, Avatar $avatar)
    {
        $avatar->delete();

        return redirect()->route('avatars.index');
    }
}
