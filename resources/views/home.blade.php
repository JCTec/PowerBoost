@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajustes</div>

                <div class="card-body">
                    <form class="form-inline" method="GET" action="{{ route('addPost') }}">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col">
                                <input type="text" id="message" name="message" required style="width: 100%">
                            </div>
                        </div>

                        <div class="row">
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
