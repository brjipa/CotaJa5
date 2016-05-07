@extends('layout')

@section('conteudo')
<div class="row"><h3>Cadastro</h3></div>
<div class="row">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}


        <div class="row">
            <div class="col l6{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col l6{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Sobrenome</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="sobrenome" value="{{ old('sobrenome') }}">

                    @if ($errors->has('sobrenome'))
                        <span class="help-block">
                        <strong>{{ $errors->first('sobrenome') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l6">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l6">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Senha</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col l6">
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Confirme a Senha</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h3>Endereço</h3>
            <div class="col l6">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Rua</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="rua" value="{{ old('rua') }}">
                    </div>
                </div>
            </div>
            <div class="col l2">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Número</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="numero" value="{{ old('numero') }}">
                    </div>
                </div>
            </div>
            <div class="col l4">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Bairro</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="bairro" value="{{ old('bairro') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Register
                </button>
            </div>
        </div>
    </form>
</div>

@stop
