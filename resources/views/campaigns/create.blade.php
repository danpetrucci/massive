@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	<div class="panel-heading">Creación de campaña</div>

                <div class="panel-body">
                	
                	@if (Session::has('message'))
   						<div class="alert alert-success">
   							{{ Session::get('message') }}
   						</div>
					@endif

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('campaign.store') }}">
                        {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Tipo de campaña</label>

                            <div class="col-md-6">
                                <select id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required autofocus>
                                	<option value="Email" selected>Email</option>
                                	
                                </select>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Asunto</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image_url') ? ' has-error' : '' }}">
                            <label for="image_url" class="col-md-4 control-label">Imagen</label>

                            <div class="col-md-6">
                                <input id="image_url" type="file" class="form-control" name="image_url" value="{{ old('image_url') }}" required autofocus>
                                Imagen para el cuerpo del email

                                @if ($errors->has('image_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('footer') ? ' has-error' : '' }}">
                            <label for="footer" class="col-md-4 control-label">Footer</label>

                            <div class="col-md-6">

                                <textarea id="footer" class="form-control" name="footer" value="{{ old('footer') }}" autofocus rows="5">

                                </textarea>

                                @if ($errors->has('footer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('footer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

