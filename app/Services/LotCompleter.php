<?php

namespace App\Services;

use App\Lot;
use Carbon\Carbon;

class LotCompleter
{
    public function completingLots()
    {
        $lots = Lot::where('end_time_at', '<', Carbon::now())
            ->where('status', 'active')
            ->orderBy('id', 'desc')
            ->paginate(10);

        foreach ($lots as $lot) {
            $lot->status = 'complete';
            $lot->save();
        }
    }
}