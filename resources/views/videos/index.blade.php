@extends('layouts.sidbarDashboard')
@section('head')
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<link rel="stylesheet" type="text/css" href="../css/video.css" />
@endsection

@section('content-sidbar-element')
<!--    <section class="content-header">
        <h1 class="pull-left">Videos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('videos.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              @include('videos.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>-->
    <div style="width:100%" >
    <div class="publier-sur-sista">
        <div class="bandeau-chaine1">
            <label class="label" for="input">
                <img src="{{ asset('img/Mu-bandeau-chaine-figue.jpg') }}" alt="">
            </label>
            <div class="input1 inputCustom3">
                <input name="input1" id="file2" type="file">
            </div>
        </div>
        <div class="menu-content-business">
            <a href="#" class="link-26">Infos</a>
            <a href="#" class="link-26">Récents</a>
            <a href="#" class="link-26">Toutes les videos</a>
            <a href="#" class="link-26">Offres</a>
            <a href="#" class="link-26">Playlist</a>
        </div>
        <div class="chaine-name">
            <h1 class="heading-45">{{$channel->name}}</h1>
            &nbsp;&nbsp; <a href="{{route('channels.edit', [$channel->id])}}" class="link-17">Modifier le nom de ma chaîne</a>
        </div>
        <div class="div-block-220">
            <div class="div-block-224">
                <div class="div-block-222">
                    <label class="label div-block-2files" for="input3">
                        <img class="image-97" src="{{ asset('img/Mu-bull-profil-daniela-constantin.jpg') }}" loading="lazy" alt="">
                    </label>
                    <div class="input3 inputCustom4">
                        <input name="input3" id="file3" type="file">
                    </div>
                </div>
                <div class="div-block-223">
                    <div class="text-block-246">Description de ma chaîne</div>
                    <textarea class="div-block-225" placeholder="{{$channel->description}}"></textarea>
                </div>
            </div>
            @php $user = Auth::user(); @endphp

            @if($user->sex == 0)
           <div class="div-block-224">
           <div class="div-block-222"></div>
                <div class="div-block-231">
                    <div class="div-block-226">
                        <div class="div-block-227"></div>
                    </div>
                </div>
                <div class="text-block-246">Publier ma chaîne uniquement sur Sista 2 Sisita</div>
            </div>
            </div>
            @endif

    </div>
    <div class="div-block-229">
        <div class="more-oiunt">
            <div class="div-block-233"></div>
            <div class="div-block-233"></div>
            <div class="div-block-233"></div>
        </div>
        <p class="text-block-256">Mes vidéos</p>
        <p class="text-block-254">Catégorie</p>
        <p class="text-block-254">date</p>
        <p class="text-block-254">Vues</p>
        <p class="text-block-254">Like</p>
        <p class="text-block-254">Evalutation</p>
    </div>

    <form action="{{route('deletes.videos')}}" method="POST">
    @csrf
    <input name="checkboxes[]" type="hidden" value="null" class="div-block-232" id="element1" >

    @foreach($videos as $video)
    @if(!$video->deleted_at)
    <div class="div-block-229">
        <input name="checkboxes[]" type="checkbox" value="{{$video->id}}" class="div-block-232" id="element1" >
        <a href="{{route('play',[$video->id])}}" for="elemnt1" class="div-block-230 w-inline-block">

        @php $user = App\User::find($video->user_id); @endphp

        @if($video->thumbnail)
            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" width="120" height="100" loading="lazy" alt="">
        @else
            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" width="120" height="100" loading="lazy" alt="">
        @endif
        </a>

        <div class="text-block-253">
            <a href="{{route('play',[$video->id])}}" class="link-18">{{$video->description}}</a><br>
        </div>
        @php 
        
        $created = explode("-", $video->created_at); 
        $day = explode(" ", $created[2]); 

        $maintopic = DB::Table('videos')->select('main_topics.*') 
                                        ->join('sub_topics', 'sub_topics.id', 'videos.subtopic_id')
                                        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
                                        ->where('sub_topics.id', $video->subtopic_id)
                                        ->get();
        $read = DB::Table('reads')
                        ->where('video_id', $video->id)
                        ->count();

        @endphp 
        <p class="text-block-254">{{$maintopic[0]->libelle}}</p>
        <p class="text-block-254">{{$day[0]}}/{{$created[1]}}/{{$created[0]}} </p>

        <p class="text-block-254">{{$read}}</p>
        <p class="text-block-254">0</p>
        <p class="text-block-254">Behavior (0%)</p>
    </div>
    @endif
    
    @endforeach
    <br>
    <button type="submit" stylle="margin-right:-30px;" class="btn btn-danger" onclick="return confirm('Etes vous sure de vouloir supprimer cette sélection')"> <i class="fas fa-trash"></i>&nbsp;Supprimer la sélection</button>
    </form>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/sidbar.js')}}"></script>
@endsection

