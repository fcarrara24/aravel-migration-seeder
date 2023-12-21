@extends('layouts.app')

@section('title', 'Today\'s trains')

@section('content')
    <main>

        <div class="container ">
            <div class="row">
                @forelse ($trains as $key => $train)
                    <div class="col-12">
                        <div class="card d-flex flex-row justify-content-between ">
                            <div class="w-50">
                                <h2>
                                    <div>{{ $train->Azienda }}</div>
                                </h2>
                            </div>
                            <div class=" flex-grow-1">giorno di partenza: {{ $train->Giorno_partenza }}</div>
                            <div class="btn btn-primary">
                                <a href="{{ route('trains.details', $train->id) }}"><div class="text-white">dettagli</div></a>
                            </div>
                        </div>

                    </div>

                @empty
                    <h1>Nessun treno trovato</h1>
                @endforelse
            </div>
        </div>
    </main>
@endsection
