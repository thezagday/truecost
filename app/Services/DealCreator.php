<?php

namespace App\Services;

use App\Deal;
use App\Lot;

class DealCreator
{
    public function createDeals()
    {
        $lots = Lot::where('status', 'complete')
            ->orderBy('id', 'desc')
            ->paginate(10);

        foreach ($lots as $lot) {
            $params = [
                'status' => 'work',
                'lot_id' => $lot->id,
                'executor_id' => $lot->candidate_id,
            ];

            try {
                $deal = Deal::create($params);
                $deal->save();
            } catch (\Exception $e) {
                (new Logger())->log($e->getMessage());
            }

            $lot->status = 'closed';
            $lot->save();
        }
    }
}