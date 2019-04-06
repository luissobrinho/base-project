@extends('layouts.app')

@section('titlePage')Perfil @stop
@section('descPage')Configurações da conta do usuário logado @stop
@section('icon')fa fa-user @stop
@section('sz-view')8 @stop

@php
    $pages = [['route' => 'user.settings', 'name' => 'Perfil']]
@endphp

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/user/settings">
                {!! csrf_field() !!}

                <div>
                    @input_maker_label('Email')
                    @input_maker_create('email', ['type' => 'string', 'custom' => 'readonly="true"', 'alt_name' => 'E-mail'], $user)
                </div>

                <div class="raw-margin-top-24">
                    @input_maker_label('Name')
                    @input_maker_create('name', ['type' => 'string', 'alt_name' => 'Nome'], $user)
                </div>

                @include('user.meta')

                @if ($user->roles->first()->name === 'admin' || $user->id == 1)
                    <div class="raw-margin-top-24">
                        @input_maker_label('Role')
                        @input_maker_create('roles', ['type' => 'relationship', 'model' => 'App\Models\Role', 'label' => 'label', 'value' => 'name', 'alt_name' => 'Permissão'], $user)
                    </div>
                @endif

                <div class="raw-margin-top-24 m-t-25">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                        <a class="btn btn-link" href="/user/password">Mudar Senha</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@push('javascript')
@endpush
