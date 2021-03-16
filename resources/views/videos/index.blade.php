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
            <h1 class="heading-45">Halimatou créatrice de douceurs</h1>
            <a href="#" class="link-17">Modifier le nom de ma chaîne</a>
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
                    <textarea class="div-block-225" placeholder="Bien plus chaine de gourmandise et de régale. Vous trouverez ici les recettes les petites astuces pour gagner du temps et ne plus rater vos mets préférés."></textarea>
                </div>
            </div>
            <div class="div-block-224">
           <div class="div-block-222"></div>
                <div class="div-block-231">
                    <div class="div-block-226">
                        <div class="div-block-227"></div>
                    </div>
                </div>
                <div class="text-block-246">Publier ma chaîne uniquement  sur Sista 2 Sisita</div>
            </div>
        </div>
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
    <div class="div-block-229">
        <input type="checkbox" class="div-block-232 id="element1">
        <a href="#" for="elemnt1" class="div-block-230 w-inline-block">
            <img src="{{ asset('img/Mu-chaine-video-vignette.jpg') }}" loading="lazy" alt=""></a>
        <div class="text-block-253">
            <a href="#" class="link-18">Quand il y a poulet, il y a ça !<br>Le poulet iassa incontournable...</a><br>
        </div>
        <p class="text-block-254">Food</p>
        <p class="text-block-254">20/02/2021</p>
        <p class="text-block-254">23 k</p>
        <p class="text-block-254">4 k</p>
        <p class="text-block-254">FUN (75%)</p>
    </div>
    <div class="div-block-229">
        <input type="checkbox" class="div-block-232 id="element2">
        <a href="#" for="elemnt2" class="div-block-230 w-inline-block">
            <img src="{{ asset('img/Mu-chaine-video-vignette-burger.jpg') }}" loading="lazy" alt=""></a>
        <div class="text-block-253">
            <a href="#" class="link-19">Ma pâte burger est la Qeen dans son royaume !<br>Burger fait maison à ma façon...</a><br>
        </div>
        <p class="text-block-254">Food</p>
        <p class="text-block-254">20/02/2021</p>
        <p class="text-block-254">23 k</p>
        <p class="text-block-254">4 k</p>
        <p class="text-block-254">FUN (75%)</p>
    </div>
    <div class="div-block-229">
        <input type="checkbox" class="div-block-232 id="element3">
        <a href="#" for="elemnt3" class="div-block-230 w-inline-block">
            <img src="{{ asset('img/Mu-chaine-video-vignette-olive.jpg') }}" loading="lazy" alt=""></a>
        <div class="text-block-253">
            <a href="#" class="link-19">Ma pâte burger est la Qeen dans son royaume !<br>Burger fait maison à ma façon...</a><br>
        </div>
        <p class="text-block-254">Food</p>
        <p class="text-block-254">20/02/2021</p>
        <p class="text-block-254">23 k</p>
        <p class="text-block-254">4 k</p>
        <p class="text-block-254">FUN (75%)</p>
    </div>
    <div class="div-block-229">
        <input type="checkbox"  class="div-block-232 id="element3">
        <a href="#" for="elemnt3" class="div-block-230 w-inline-block">
            <img src="{{ asset('img/Mu-chaine-video-vignette-nouille.jpg') }}" loading="lazy" alt=""></a>
        <div class="text-block-253">
            <a href="#" class="link-19">Ma pâte burger est la Qeen dans son royaume !<br>Burger fait maison à ma façon...</a><br>
        </div>
        <p class="text-block-254">Food</p>
        <p class="text-block-254">20/02/2021</p>
        <p class="text-block-254">23 k</p>
        <p class="text-block-254">4 k</p>
        <p class="text-block-254">FUN (75%)</p>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/sidbar.js')}}"></script>
@endsection

