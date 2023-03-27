@extends('base')


@section('pageTitle', 'Se connecter')

@section('content')
    <div class="Login">
        <x-form.form :action="route('authenticate')">
            <h1>Authentification</h1>
            <x-form.field name="email" type="email" label="Nom d'utilisateur" />
            <x-form.field name="password" type="password" label="Mot de passe" />
            <x-primary-button class="primaryButton" type="submit">Se connecter</x-primary-button>
        </x-form.form>
    </div>
@endsection
