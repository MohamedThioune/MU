@extends('layouts.sidbarDashboard')
@section('head')
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<link rel="stylesheet" type="text/css" href="{{asset('css/video.css')}}" />
@endsection

@section('content-sidbar-element')
    <div class="webVideoContent" style="width:100%" >
    @include('flash::message')
    @if($videos)
        @if(count($videos) > 0)
        <div class="div-block-229 popup_main">
            <div class="more-oiunt">
                <div class="div-block-233"></div>
                <div class="div-block-233"></div>
                <div class="div-block-233"></div>
            </div>
            <!--                               début modal notification-->
            <div class="modalSelection modal2">
                <div class="popup_back"></div>
                <div class="popup_contain">
                    <label class="dropdownItemInput"><input  type="checkbox" class="select-all" />Choose all</label>
                </div>
            </div>
            <!--            fin modal-->
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
        
        @if($videos && count($videos)) 
        @foreach($videos as $video)
        @if(!$video->deleted_at)
        <div class="div-block-229">
            <input name="checkboxes[]" type="checkbox" value="{{$video->id}}" class="div-block-232" id="element1" >
            <a href="{{route('play',[$video->id])}}" for="elemnt1" class="div-block-230 w-inline-block">

            @php $user = App\User::find($video->user_id); @endphp

            @if($video->thumbnail)
                <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}"  class="ImgVideoSelect" alt="">
            @elseif($user->age <= 15)
                <img class="ImgVideoSelect" src="{{asset('images/kids_preloader.png')}}" alt="">
            @elseif($user->age > 15 && $user->sex == '1')
                <img class="ImgVideoSelect" src="{{asset('images/flow_preloader.png')}}" alt=""/>
            @elseif($user->age > 15 && $user->sex == '0')
                <img class="ImgVideoSelect" src="{{asset('images/sista_preloader.png')}}" alt="">
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
            @if($day && count($day) && $created && count($created))
            <p class="text-block-254">{{$day[0]}}/{{$created[1]}}/{{$created[0]}} </p>
            @endif

            <p class="text-block-254">{{$read}}</p>
            <p class="text-block-254">0</p>
            <p class="text-block-254">Behavior (0%)</p>
        </div>
        @endif
        @endforeach
        @endif
        <br>
        <button type="submit" stylle="margin-right:-30px;" class="btn btnSupprimer" onclick="return confirm('Etes vous sure de vouloir supprimer cette sélection')">Supprimer</button>
        </form>
        @else
            <center><br>
            <div class="publish-notif" style="border-radius: 8px;">
                <a href="{{route('video.create')}}" class="cam-publier w-inline-block" style="font-size:1.1em; border-radius: 8px; padding:15px; color:white;background: black;margin-bottom:-18px">
                    {{__('Publish your first videos and share them with our community')}}&nbsp;&nbsp;&nbsp;<img src="{{ asset('img/Mu-upload-cloud-blanc2x.png') }}" class="imgCloud2" alt="">
                </a>
            </div>
            </center>
        @endif
    @endif
</div>

    <div class="mobileVideoContent" style="width:100%" >
    @include('flash::message')
    <div class="div-block-229 fixeElement2">
        <div class="blockVideo1 popup_main">
            <div class="more-oiunt ">
                <div class="div-block-233"></div>
                <div class="div-block-233"></div>
                <div class="div-block-233"></div>
            </div>
            <!--                               début modal notification-->
            <div class="modalSelection modal2">
                <div class="popup_back"></div>
                <div class="popup_contain">
                    <label class="dropdownItemInput"><input  type="checkbox" class="select-all" />Choose all</label>
                </div>
            </div>
<!--            fin modal-->
            <p class="text-block-256">Mes vidéos</p>
        </div>
        <div class="blockVideo2">
            <p class="text-block-254 cat">Cat</p>
            <p class="text-block-254">date</p>
            <p class="text-block-254">Vues</p>
            <p class="text-block-254">Like</p>
            <p class="text-block-254">Eval</p>
        </div>

    </div>

    <form action="{{route('deletes.videos')}}" method="POST">
    @csrf
    <input name="checkboxes[]" type="hidden" value="null" class="div-block-232" id="element1" >

    @if($videos && count($videos))
    @foreach($videos as $video)
    @if(!$video->deleted_at)
    <div class="div-block-229">
        <input name="checkboxes[]" type="checkbox" value="{{$video->id}}" class="div-block-232" id="element1" >
        <a href="{{route('play',[$video->id])}}" for="elemnt1" class="div-block-230 w-inline-block">

        @php $user = App\User::find($video->user_id); @endphp

        @if($video->thumbnail)
            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}"  class="ImgVideoSelect" alt="">
        @elseif($user->age <= 15)
            <img class="ImgVideoSelect" src="{{asset('images/kids_preloader.png')}}" alt="">
        @elseif($user->age > 15 && $user->sex == '1')
            <img class="ImgVideoSelect" src="{{asset('images/flow_preloader.png')}}" alt=""/>
        @elseif($user->age > 15 && $user->sex == '0')
            <img class="ImgVideoSelect" src="{{asset('images/sista_preloader.png')}}" alt="">
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
        <div class="contentMesVideos">
            <p class="text-block-254">{{$maintopic[0]->libelle}}</p>
            @if($day && count($day) && $created && count($created))
            <p class="text-block-254">{{$day[0]}}.{{$created[1]}}.{{$created[0]}} </p>
            @endif

            <p class="text-block-254">{{$read}}</p>
            <p class="text-block-254">0</p>
            <p class="text-block-254">Behavior (0%)</p>
        </div>
    </div>
    @endif
    @endforeach
    @endif
    <br>
    <button type="submit" stylle="margin-right:-30px;" class="btn btnSupprimer" onclick="return confirm('Etes vous sure de vouloir supprimer cette sélection')">Supprimer</button>
    </form>
</div>
@endsection
@section('scripts')
<script>
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
</script>
<script>
    $(".more-oiunt").click(function () {
        $(this).parent(".popup_main").children(".modalSelection ").addClass("modalNotification_show");
    });
    $(".popup_close").click(function () {
        $(".modalSelection ").removeClass("modalNotification_show");
    });
    $(".popup_back").click(function () {
        $(".modalSelection ").removeClass("modalNotification_show");
    });
</script>

@endsection



