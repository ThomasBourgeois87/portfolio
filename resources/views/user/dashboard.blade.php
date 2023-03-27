@extends('base')


@section('pageTitle', 'Dashboard')



@section('content')
    <div class="Dashboard">
        <x-primary-button class="primaryButton" :href="route('logout')">Se déconnecter</x-primary-button>
    </div>
@endsection
