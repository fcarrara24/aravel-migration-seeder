@extends('layouts.app')

@section('title', 'All Trains')

@section('content')
    <main>

        <h1 >Trains</h1>
        <div class="container">
            <div class="row">
                    @foreach ($train as $tr)
                    <div class="col-12">
                        <div class="card d-flex flex-column justify-content-between ">
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <h2>
                                    <div>{{ $tr->Azienda }}</div>
                                </h2>
                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">partenza</div>
                                <div>{{ $tr->Stazione_di_partenza }}</div>
                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">arrivo</div>
                                <div>{{ $tr->Stazione_di_arrivo }}</div>
                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">orario di partenza</div>
                                <div>{{ $tr->Orario_di_partenza }}</div>
                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">orario di arrivo</div>
                                <div>{{ $tr->Orario_di_arrivo }}</div>
                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">codice treno</div>
                                <div>{{ $tr->Codice_treno }}</div>

                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">numero carrozze</div>
                                <div>{{ $tr->Numero_carrozze }}</div>

                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">ritardi</div>
                                <div>{{ $tr->In_orario == 1 ? 'in orario' : 'non in orario' }}</div>

                            </div class="d-flex flex-row justify-content-start gap-2">
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">conferma</div>
                                <div>{{ $tr->Cancellato == 1 ? 'cancellato' : 'in arrivo' }}</div>

                            </div>
                            <div class="d-flex flex-row justify-content-start gap-2">
                                <div class="w-25">partenza</div>
                                <div>{{ $tr->Giorno_partenza }}</div>

                            </div>
                        </div>
                    </div>

                    @endforeach


            </div>
        </div>
    </main>
@endsection
