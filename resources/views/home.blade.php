@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido! escoge una opcion: <br><br>

                    <a href="{{route('campaign.index')}}"><button type="button" class="btn btn-primary">Campañas</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
