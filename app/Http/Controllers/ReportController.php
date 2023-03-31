<?php

namespace App\Http\Controllers;

use App\Services\ReportService;

class ReportController extends Controller
{
    public function show()
    {
        $service = new ReportService();
        $data = $service->getReport();
        return view('reports.show')
            ->with('showths', $data)
            ->with('topPerformer', $data->first())
            ->with('worstPerformer', $data->last());
    }
}
