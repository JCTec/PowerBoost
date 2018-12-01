@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajustes</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('addPost') }}">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row settings">
                            <div class="col">
                                <input class="settingsI" type="text" id="message" name="message" required placeholder="Tweet" style="width: 100%">
                            </div>
                        </div>

                        <div class="row settings">
                            <div class="col">
                                <input class="settingsI" type="text" id="player1" name="player1" required placeholder="Jugador 1" style="width: 100%">
                            </div>
                        </div>

                        <div class="row settings">
                            <div class="col">
                                <input class="settingsI" type="text" id="player2" name="player2" required placeholder="Jugador 2" style="width: 100%">
                            </div>
                        </div>

                        <div class="row settings">
                            <div class="col">
                                <input class="settingsI" type="text" id="player3" name="player3" required placeholder="Jugador 3" style="width: 100%">
                            </div>
                        </div>

                        <div class="row settings">
                            <div class="col">
                                <input class="settingsI" type="text" id="player4" name="player4" required placeholder="Jugador 4" style="width: 100%">
                            </div>
                        </div>

                        <div class="row settings">
                            <div class="col">
                            </div>

                            <div class="col" style="text-align: right; align-content: right;">
                                <button class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
