@extends('layouts.app')

@section('content')

<div class="body-3">
<div class="section-2">
    <div class="container-6 w-container">
        <div class="div-block-15">
            <img src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}" >
        </div>
        <div>
            <p class="text-block-4">As Salaaamou alaykouuum !!!</p>
            <p class="text-block-5">{{__('Welcome to SMUUSE')}}!<br>{{__('The Muslim video platform.')}}</p>
            <a href="{{route('language.choose', 'en')}}" class="btn btn-info"> EN &#x1F1FA;&#x1F1F8;</a>   <a href="{{route('language.choose', 'fr')}}" class="btn btn-danger"> FR &#x1F1EB;&#x1F1F7;</a>
        </div>
    </div>
</div>