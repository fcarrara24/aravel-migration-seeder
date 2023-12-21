@extends('layouts.app')

@section('title', 'All Trains')

@section('content')
    <main>

        <h1 >Trains</h1>
        <div class="container">
            <div class="row">
                @forelse ($trains as $key =>$train)
                    <div class="col-12">
                        <div class="card d-flex flex-row justify-content-between ">
                            <div class="w-50">
                                <h2>
                                    <div>{{ $train->Azienda }}</div>
                                </h2>
                            </div>
                            <div class=" w-25">giorno di partenza: {{ $train->Giorno_partenza }}</div>
                            <div class="btn btn-primary">
                            <a href="{{ route('trains.details', $train->id) }}"><div class="text-white">dettagli</div></a>
                            </div>
                        </div>

                    </div>

                @empty
                    <h6>nessun treno trovato</h6>
                @endforelse
            </div>
        </div>
    </main>
@endsection
