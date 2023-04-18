<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ShowthStoreRequest;
use App\Models\Showth;
use App\Services\ShowthService;
use Illuminate\Http\Request;

class ShowthApiController extends Controller
{
    public function index()
    {
        $showths = Showth::paginate(10);
        return response()->json([
            'showths' => $showths,
        ]);
    }

    public function store(ShowthStoreRequest $request)
    {
        $service = new ShowthService();
        $newShowth = new Showth();
        $service->storeShowth($request, $newShowth);

        return response()->json([
            'success' => true,
            'showth' => $newShowth,
        ]);
    }

    public function delete(Request $request, Showth $showth)
    {
        $showth->delete();
        return response()->json(['success' => true]);
    }
}
