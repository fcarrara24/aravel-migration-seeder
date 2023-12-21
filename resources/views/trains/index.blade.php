@extends('layouts.app')

@section('title', 'Houses')

@section('content')
    <main>

        <h1>Trains</h1>
        <div class="container">
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-12">
                        <div class="card d-flex flex-row justify-content-between ">
                            <div>
                                <h2>
                                    <div>{{ $train->Azienda }}</div>
                                </h2>
                            </div>
                            <div>
                                partenza
                                <div>{{ $train->Stazione_di_partenza }}</div>
                            </div>
                            <div>
                                arrivo
                                <div>{{ $train->Stazione_di_arrivo }}</div>
                            </div>
                            <div>
                                orario di partenza
                                <div>{{ $train->Orario_di_partenza }}</div>
                            </div>
                            <div>
                                orario di arrivo
                                <div>{{ $train->Orario_di_arrivo }}</div>
                            </div>
                            <div>
                                codice treno
                                <div>{{ $train->Codice_treno }}</div>

                            </div>
                            <div>
                                numero carrozze
                                <div>{{ $train->Numero_carrozze }}</div>

                            </div>
                            <div>

                                <div>{{ $train->In_orario == 1 ? 'in orario' : 'non in orario' }}</div>

                            </div>
                            <div>
                                <div>{{ $train->Cancellato == 1 ? 'cancellato' : 'in arrivo' }}</div>

                            </div>
                        </div>
                    </div>

                @empty
                    <h6>No record found</h6>
                @endforelse
            </div>
        </div>
    </main>
@endsection
