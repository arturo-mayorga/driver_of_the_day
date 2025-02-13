<?php

namespace App\Livewire;
use App\Models\Race;
use App\Models\Vote;
use App\Models\Driver;
use Livewire\Component;

class DotdStreamerResultsPage extends Component
{
    public $id;

    public function render()
    {
        $race = Race::where('session_id', $this->id)->first();
        $drivers = $race->drivers()->get();
        $top3 = $drivers->sortByDesc(function ($driver) {
            return $driver->votes->count();
        })->take(3);
        $top3col = collect($top3, Driver::class);
        $totalVotes = $race->getTotalVotes();

        return view('livewire.dotd-streamer-results-page', [
            'drivers' => $top3col,
            'totalVotes' => $totalVotes,
            'race' => $race,
        ]);
    }
}
