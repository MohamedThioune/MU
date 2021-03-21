@extends('layouts.app')

@section('content')
<br><br>
<center>
    <section class="content-header">
        <div class="user-panel">
            <div class="image">
                <!-- Load images and if this load preloader image correspond to this user  -->
                @if(Auth::user()->photo)
                    <img src="{{asset('images/uploads')}}/{{Auth::user()->photo}}" class="img-circle" alt="User Image"/>
                @elseif(Auth::user()->age <= 15)
                    <img src="{{asset('images/kids_preloader.png')}}" width="300" class="img-circle" alt="User Image"/>
                @elseif(Auth::user()->age > 15 && Auth::user()->sex == '1')
                    <img src="{{asset('images/flow_preloader.png')}}"  class="img-circle" alt="User Image"/>
                @elseif(Auth::user()->age > 15 && Auth::user()->sex == '0') 
                    <img src="{{asset('images/sista_preloader.png')}}"  class="img-circle" alt="User Image"/>
                @endif
                <h2 class="" style="text-decoration:underline">
                @php if($channel) echo $channel[0]->name; else if($canal) echo $canal->name; else echo "Welcome &#x1F318;"; @endphp
                </h2>
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


        @if($channel)
            @if(count($channel) > 0)
            <center>
                <a href="{{ route('channels.edit', [$channel[0]->id]) }}" class="btn btn-default"><i class="fa fa-wrench"></i> Personnaliser la chaine</a>
                <a href="{{ route('videos.index')}}" class="btn btn-danger"><i class="fa fa-tv"></i> Gérer ses vidéos</a> 
                <a href="{{ route('channel.fly', $channel[0]->id)}}" class="btn btn-info"><i class="fa fa-tv"></i> Apercu en mode visiteur </a> 
            </center>
            <div class="text-center">
            @else 
                <center>
                    <!-- No string, add one relative to the connected user -->
                    <a style="padding: 5 25px;" href="{{route('channels.create')}}" class="btn btn-info"><i class="fa fa-link"></i> Créer</a> <br><br>
                    <span style="color:#4c4c4c;">Pas encore de chaîne 🧐, il est temps d'en créer une</span>
                </center>
            @endif
        @endif


        @if($canal)
        <center>
            <a href="{{ route('channels.edit', [$canal->id]) }}" class="btn btn-default"><i class="fa fa-wrench"></i> Personnaliser la chaine</a>
            <a href="{{ route('videos.index')}}" class="btn btn-danger"><i class="fa fa-tv"></i> Gérer ses vidéos</a> 
            <a href="{{ route('channel.fly', $canal->id)}}" class="btn btn-info"><i class="fa fa-tv"></i> Apercu en mode visiteur </a> 
        </center>
        <div class="text-center">
        @elseif(!$channel)
            <center>
                <!-- No string, add one relative to the connected user -->
                <a style="padding: 5 25px;" href="{{route('channels.create')}}" class="btn btn-info"><i class="fa fa-link"></i> Créer</a> <br><br>
                <span style="color:#4c4c4c;">Pas encore de chaîne 🧐, il est temps d'en créer une</span>
            </center>
        @endif
        
        </div>
    </div>
@endsection

