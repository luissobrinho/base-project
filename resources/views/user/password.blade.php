@extends('layouts.app')

@section('titlePage')Mudar Senha @stop
@section('descPage')Manutenção da senha do usuário @stop
@section('icon')fa fa-user @stop
@section('sz-view')8 @stop

@php
    $pages = [['route' => 'user.settings', 'name' => 'Perfil'], ['route' => 'user.password', 'name' => 'Mudar Senha']]
@endphp

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/user/password">
                {!! csrf_field() !!}

                <div>
                    @input_maker_label('Senha Antiga')
                    @input_maker_create('old_password', ['type' => 'password', 'alt_name' => 'Senha Antiga'])
                </div>

                <div class="raw-margin-top-24">
                    @input_maker_label('Nova senha')
                    @input_maker_create('new_password', ['type' => 'password', 'alt_name' => 'Nova senha'])
                </div>

                <div class="raw-margin-top-24">
                    @input_maker_label('Confirme a Senha')
                    @input_maker_create('new_password_confirmation', ['type' => 'password', 'alt_name' => 'Confirme a Senha'])
                </div>

                <div class="raw-margin-top-24 m-t-25">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary pull-right" type="submit"> Salvar</button>
                        <a class="btn btn-secondary pull-left" href="{{ URL::previous() }}"> Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@push('javascript')
@endpush
