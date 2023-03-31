<?php

namespace App\Services;
use App\Models\Showth;
use Illuminate\Database\Eloquent\Collection;

class ReportService
{
    public function getReport(): Collection
    {
        return Showth::query()
            ->select(['showths.*'])
            // ->selectRaw('count(avatars.id) as avatars_count')
            // ->leftJoin(
            //     'avatar_showths',
            //     'avatar_showths.avatar_id',
            //     '=',
            //     'avatars.id'
            // )
            // ->leftJoin(
            //     'showths',
            //     'showths.id',
            //     '=',
            //     'avatar_showths.showths_id',
            // )
            // ->orderBy('showths_count', 'desc')
            // ->orderByRaw('max(showths.created_at) desc')
            // ->groupBy(['prodato.id'])
            ->get();
    }
}