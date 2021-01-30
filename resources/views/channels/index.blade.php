@extends('layouts.app')

@section('content')
<br><br>
<center>
    <section class="content-header">
        <div class="user-panel">
            <div class="image">
                <img src="{{asset('img/auteur.png')}}" class="img-circle" alt="User Image"/>
                <h1 class="">Channels</h1>
            </div>
        </div>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('channels.create') }}">Add New</a>
        </h1> -->
    </section>
</center>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        
        <div class="clearfix"></div>
        @if(count($channel) > 0)
        <center>
            <a href="{{ route('channels.edit', [$channel[0]->id]) }}" class="btn btn-default"><i class="fa fa-user-edit"></i> Personnaliser la chaine</a>
            <a href="#" class="btn btn-danger"><i class="fa fa"></i> Gérer les vidéos</a> 
        </center>
        <div class="text-center">
        @else 
            <center>
                <!-- No string, add one relative to the connected user -->
                <a style="padding: 5 25px;" href="{{route('channels.create')}}" class="btn btn-info"><i class="fa fa-link"></i> Créer</a> <br><br>
                <span style="color:#4c4c4c;">Pas encore de chaîne 🧐, il est temps d'en créer une</span>
            </center>
        @endif
        
        </div>
    </div>
@endsection

