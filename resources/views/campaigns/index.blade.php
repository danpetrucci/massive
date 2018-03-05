@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Campañas 
                	<a href="{{route('campaign.create')}}"><span class="glyphicon glyphicon-plus pull-right"></span></a>
				</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(count($campaigns)>0)
                   	<table class="table">
 						<thead>
 							<tr>
 								<th>id</th>
 								<th>Nombre</th>
 								<th>Tipo</th>
 								<th>Asunto</th>
 								<th style="text-align: center;">Imagen</th>
 								<th style="text-align: center;">Status</th>
 								<th>Creada el</th>
 							</tr>
 						</thead>
 						<tbody>
 							@foreach($campaigns as $campaign)
    						<tr>
    							<td>{{$campaign->id}}</td>
    							<td>{{$campaign->name}}</td>
    							<td>{{$campaign->type}}</td>
    							<td>{{$campaign->subject}}</td>
    							<td style="text-align: center;">
                                    <a target="_blank" href="{{substr($campaign->image_url,6)}}">
                                        <span class="glyphicon glyphicon-picture"> 
                                    </a>
                                </td>
    							<td style="text-align: center;">
                                    @if($campaign->status==0)
                                        <span class="label label-default">No enviada</span>
                                    @endif
                                    @if($campaign->status==1)
                                        <span class="label label-warning">En progreso</span>
                                    @endif
                                </td>
    							<td>{{$campaign->created_at->format('d-m-Y')}}</td>
    							<td></td>
    						</tr>
    						@endforeach
    					</tbody>
    				</table>

    				{{ $campaigns->links() }}

    				@else
    					<div class="alert alert-warning">
    					No hay campañas creadas. Selecciona el icono <span class="glyphicon glyphicon-plus"></span> para agregar una.
    					</div>
    				@endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
