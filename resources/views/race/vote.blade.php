<x-app-layout>
    <title>Create a dotd vote</title>
    <div class="flex justify-center items-center p-6">
        <p> {{ $id }}</p>
        @livewire('dotd-driver-vote', ['leagueId' => $leagueId, 'seasonId' => $seasonId, 'id' => $id])
    </div>
</x-app-layout>
