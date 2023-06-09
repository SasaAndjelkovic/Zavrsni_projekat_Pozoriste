<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ShowthStoreRequest;
use App\Models\Avatar;
use App\Models\Showth;
use App\Services\ShowthService;
use Illuminate\Http\Request;

class ShowthController extends Controller
{
     public function index()
     {
        // $showths = Showth::paginate(10)
        $showths = Showth::query()
     
        ->with(['avatars'])
        ->paginate(10);

        //dd($showths);
 
        return view('showths.index')->with([
             'showths' => $showths

         ]);
    }

    public function create()
    {
        $avatars = Avatar::all();

        return view('showths.create')->with([
            'avatars' => $avatars,
        ]);
    }

    // Izmena podatak o klijentu
    // clients-app.test/clients/1/edit
    // $id = 1;
    public function edit(Request $request, Showth $showth)
    {
        $avatars = Avatar::all();

        $selectedAvatarIds = $showth->avatars()->pluck('avatars.id')->all();

        return view('showths.edit')->with([
            'avatars' => $avatars,
            'selectedAvatarIds' => $selectedAvatarIds,
            'showth' => $showth,
        ]);
    }

    public function store(ShowthStoreRequest $request)
    {
        $showth = new Showth();
        $showthService = new ShowthService();

        $showthService->storeShowth($request, $showth);

        return redirect()->route('showths.index');
    }

    // Menjamo podatke u bazi za vec postojeci model
    public function update(ShowthStoreRequest $request, Showth $showth)
    {
        $showthService = new ShowthService();
        $showthService->storeShowth($request, $showth);

        return redirect()->route('showths.index');
    }

    public function destroy(Request $request, Showth $showth)
    {
        $showth->delete();
        return redirect()->route('showths.index');
    }
}
