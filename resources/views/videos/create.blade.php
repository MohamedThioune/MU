
@extends('layouts.sidbarDashboard')
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/video.css')}}" />
<link rel="stylesheet" href="{{asset('swiper/swiper-bundle.min.css')}}">
@php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
@endsection

@section('content-sidbar-element')
    <form action="/videos" method="POST" class="formpublier2" enctype="multipart/form-data">
        @csrf
        @include('adminlte-templates::common.errors')
        <div class="mes-videos">
            <div class="div-block-219">
                <div class="bandeau-chaine"></div>
                <div class="nom-de-la-chaine">
                    <h1 class="text-name-title-creator">{{$channel->name}}</h1>
                </div>
                <div class="div-block-220">
                    <div class="div-block-224">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>

                        <p class="text-publier-cette-video">{{__('Publish this video only on Sista 2 Sista')}}</p>
                        <input type="hidden" name="sistas" value="1">
                    </div>
                </div>
            </div>
            <div class="div-block-235">
                <p class=" text-title-video">{{__('Download a video')}}</p>
                <div class="div-block-254">
                    <div class="div-block-237">
                        <div class="form-group titre-video">
                            <label for="titre-video" class="text-la-video2">{{__('Title of the video')}}</label>
                            <input type="text" class="form-control div-block-236" id="main_title" name="main_title">
                        </div>
                        <p class="text-number-element">0/120</p>
                        <div class="data-video">
                            <div class="form-group">
                                <div class="box">
                                    <input type="file" name="vid" id="vid" class="inputfile inputFile1 inputfile-4"/>
                                    <label for="vid">
                                        <figure> <img src="{{ asset('img/outline-cloud_upload-24px.png') }}" class="img-cloud" alt=""></figure>
                                        <span class="text2-telecharger-la-video">{{__('Download my video')}}</span>
                                    </label>
                                </div>

                                <div class="div-block-255"></div>
                            </div>
                            <!-- <p class="text-detail-fichier">Nom du fichier<br>Taille<br>Durée<br>Format<br>Date de téléchargement <br></p> -->
                        </div>
                        <!-- <p class="text-ref-fichier">Ref : mu/…</p> -->
                    </div>
                    <div class="div-block-239">
                        <div class="content2-2">
                            <label class="label-22" for="input">
                                <img src="{{ asset('img/Mu-Vignette-video-400x250-plato.jpg') }}" class="image-98">
                            </label>
                            <div class="input inputModifeVignette">
                                <input class="btn btn-default" name="thumbnail" id="thumbnail" type="file" />
                                <label for="thumbnail">{{__('Change video thumbnail')}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-block-241">
                <div class="div-block-248">
                    <p class=" text-title-video">{{__('Description of a video')}}</p>
                    <div class="div-block-249">
                        <div class="form-group titre-video">
                            <label class="text-la-video2">{{__('Description of my video')}}</label>
                            <textarea class="form-control div-block-240" name="description" id="description" cols="30" rows="5">
                            </textarea>
                        </div>
                        <div class="form-group titre-video">
                            <label class="text-title-video">{{__('Objectives of the video')}}</label>
                            <p class="text-block-263">{{__('\'Acts are only as good as their intentions\' so be clear about your goals. And remember that the first intention is to please your Creator. May the Most Merciful reward you for this.')}}</p>
                            <div class="btnCategorieWeb">
                                <div class="div-block-310">
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="informer" class="btn-check" id="informer"  autocomplete="off">
                                        <label class="btn text-block-311" for="informer">{{__('Inform')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="partager" class="btn-check" id="partager"  autocomplete="off">
                                        <label class="btn text-block-311" for="partager">{{__('Share')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="faire-rire" class="btn-check" id="faire-rire"  autocomplete="off">
                                        <label class="btn text-block-311" for="faire-rire">{{__('Making you laugh')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="sensibiliser" class="btn-check" id="sensibiliser"  autocomplete="off">
                                        <label class="btn text-block-311" for="sensibiliser">{{__('Sensitize')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="inspirer" class="btn-check" id="inspirer"  autocomplete="off">
                                        <label class="btn text-block-311" for="inspirer">{{__('Inspire')}}</label>
                                    </div>
                                </div>
                                <div class="div-block-310">
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="avertir" class="btn-check" id="avertir"  autocomplete="off">
                                        <label class="btn text-block-311" for="avertir">{{__('Notify')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="soutenir" class="btn-check" id="soutenir"  autocomplete="off">
                                        <label class="btn text-block-311" for="soutenir">{{__('Support')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="vendre" class="btn-check" id="vendre"  autocomplete="off">
                                        <label class="btn text-block-311" for="vendre">{{__('Sell')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="rappeler" class="btn-check" id="rappeler"  autocomplete="off">
                                        <label class="btn text-block-311" for="rappeler">{{__('Call back')}}</label>
                                    </div>
                                    <div class="divChekElement">
                                        <input type="checkbox" name="motivation" value="expliquer" class="btn-check" id="expliquer"  autocomplete="off">
                                        <label class="btn text-block-311" for="expliquer">{{__('Explain')}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="btnCategorieMobile">
                                <div class="swiper-container swipeContainermodife1">
                                    <div class="swiper-wrapper">
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="informer" value="informer" class="btn-check" id="informer"  autocomplete="off">
                                                <label class="btn text-block-311" for="informer">{{__('Inform')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="partager" value="partager" class="btn-check" id="partager"  autocomplete="off">
                                                <label class="btn text-block-311" for="partager">{{__('Share')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="faire-rire" value="faire-rire" class="btn-check" id="faire-rire"  autocomplete="off">
                                                <label class="btn text-block-311" for="faire-rire">{{__('Making you laugh')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="sensibiliser" value="sensibiliser" class="btn-check" id="sensibiliser"  autocomplete="off">
                                                <label class="btn text-block-311" for="sensibiliser">{{__('Sensitize')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="inspirer" value="inspirer" class="btn-check" id="inspirer"  autocomplete="off">
                                                <label class="btn text-block-311" for="inspirer">{{__('Inspire')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="avertir" value="avertir" class="btn-check" id="avertir"  autocomplete="off">
                                                <label class="btn text-block-311" for="avertir">{{__('Notify')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="soutenir" value="soutenir" class="btn-check" id="soutenir"  autocomplete="off">
                                                <label class="btn text-block-311" for="soutenir">{{__('Support')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="vendre" value="vendre" class="btn-check" id="vendre"  autocomplete="off">
                                                <label class="btn text-block-311" for="vendre">{{__('Sell')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="rappeler" value="rappeler" class="btn-check" id="rappeler"  autocomplete="off">
                                                <label class="btn text-block-311" for="rappeler">{{__('Call back')}}</label>
                                            </div>
                                        </div>
                                        <div class=" swiper-slide ">
                                            <div class="divChekElement">
                                                <input type="checkbox" name="expliquer" value="expliquer" class="btn-check" id="expliquer"  autocomplete="off">
                                                <label class="btn text-block-311" for="expliquer">{{__('Explain')}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-block-250">
                <p class="text-la-video2">{{__('Category of the video')}}</p>
                <div class="div-block-247">
                    <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                <img style="width:30px;height:30px" src="{{ asset('img/Mu-lune-pink2x.png') }}" alt="">
                            </div>
                            <p>Santé</p>
                        </div>

                        @foreach($subtopics_health as $subtopic)
                        <div class="div-block-245">
                            <!-- <div class="div-block-244"></div> -->
                            <input class="div-block-244" type="radio" width="50" height="30" id="link" name="subtopic_id" value="{{$subtopic->id}}">
                            <label for="link" class="link-20">{{$subtopic->libelle}}</label>
                            <!-- <a href="#" class="link-20">Topic 1</a> -->
                        </div>
                        @endforeach

                    </div>
                    <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                <img style="width:30px;height:30px" src="{{ asset('img/Groupe-9272x.png') }}" alt="">
                            </div>
                            <p>Life</p>
                        </div>

                        @foreach($subtopics_life as $subtopic)
                        <div class="div-block-245">
                            <!-- <div class="div-block-244"></div> -->
                            <input  class="div-block-244" type="radio" id="link" name="subtopic_id" value="{{$subtopic->id}}">
                            <label for="link" class="link-20">{{$subtopic->libelle}}</label>
                            <!-- <a href="#" class="link-20">Topic 1</a> -->
                        </div>
                        @endforeach

                    </div>
                    <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                <img style="width:30px;height:30px" src="{{ asset('img/Groupe-9262x.png') }}" alt="">
                            </div>
                            <p>Tuto</p>
                        </div>

                        @foreach($subtopics_healthcare as $subtopic)
                        <div class="div-block-245">
                            <!-- <div class="div-block-244"></div> -->
                            <input  class="div-block-244" type="radio" id="link" name="subtopic_id" value="{{$subtopic->id}}">
                            <label for="link" class="link-20">{{$subtopic->libelle}}</label>
                            <!-- <a href="#" class="link-20">Topic 1</a> -->
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                <img src="{{ asset('img/Groupe-928.png') }}" alt="">
                            </div>
                            <p>Sport</p>
                        </div>
                        <div class="div-block-245">
                            <div class="div-block-244"></div>
                            <a href="#" class="link-20">Topic 1</a>
                        </div>

                    </div> -->
                </div>
                <div class="div-block-247">
                    <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                <img style="width:30px;height:30px" src="{{ asset('img/Groupe-9292x.png') }}" alt="">
                            </div>
                            <p>Education</p>
                        </div>

                        @foreach($subtopics_education as $subtopic)
                        <div class="div-block-245">
                            <!-- <div class="div-block-244"></div> -->
                            <input  class="div-block-244" type="radio" id="link" name="subtopic_id" value="{{$subtopic->id}}">
                            <label for="link" class="link-20">{{$subtopic->libelle}}</label>
                            <!-- <a href="#" class="link-20">Topic 1</a> -->
                        </div>
                        @endforeach

                    </div>
                    <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                <img style="width:30px;height:30px" src="{{ asset('img/Groupe-9302x.png') }}" alt=""></div>
                            <p>Business</p>
                        </div>

                        @foreach($subtopics_business as $subtopic)
                        <div class="div-block-245">
                            <!-- <div class="div-block-244"></div> -->
                            <input  class="div-block-244" type="radio" id="link" name="subtopic_id" value="{{$subtopic->id}}">
                            <label for="link" class="link-20">{{$subtopic->libelle}}</label>
                            <!-- <a href="#" class="link-20">Topic 1</a> -->
                        </div>
                        @endforeach

                    </div>
                    <!-- <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                <img src="{{ asset('img/Groupe-1242x.png') }}" alt="">
                            </div>
                            <p>Tech</p>
                        </div>
                        <div class="div-block-245">
                            <div class="div-block-244"></div>
                            <a href="#" class="link-20">Topic 1</a>
                        </div>

                    </div> -->
                    <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                 <img style="width:30px;height:30px" src="{{ asset('img/Groupe-928.png') }}" alt="">
                            </div>
                            <p>News</p>
                        </div>

                         @foreach($subtopics_new as $subtopic)
                        <div class="div-block-245">
                            <!-- <div class="div-block-244"></div> -->
                            <input  class="div-block-244" type="radio" id="link" name="subtopic_id" value="{{$subtopic->id}}">
                            <label for="link" class="link-20">{{$subtopic->libelle}}</label>
                            <!-- <a href="#" class="link-20">Topic 1</a> -->
                        </div>
                        @endforeach

                    </div>

                    <div class="div-block-246">
                        <div class="div-block-242">
                            <div class="div-block-243">
                                 <img style="width:30px;height:30px" src="{{ asset('img/Groupe-928.png') }}" alt="">
                            </div>
                            <p>Insha'allah</p>
                        </div>

                        @foreach($subtopics_inshaallah as $subtopic)
                        <div class="div-block-245">
                            <!-- <div class="div-block-244"></div> -->
                            <input  class="div-block-244" type="radio" id="link" name="subtopic_id" value="{{$subtopic->id}}">
                            <label for="link" class="link-20">{{$subtopic->libelle}}</label>
                            <!-- <a href="#" class="link-20">Topic 1</a> -->
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="div-block-261">
                <div>
                    <p class="text-la-video2">{{__('Date of publication')}}</p>
                </div>
                <div class="div-block-262">
                    <div class="div-block-265">
                        <p class="text-publication-immediat">{{__('Immediate publication')}}</p>
                        <div class="div-block-264"></div>
                    </div>
                    <p>{{__('Publication schedule for the')}}</p>
                    <div class="div-block-263">
                        <div>
                            <div class="text-block-279">Date</div>
                            <div>
                                <input class="text-block-277" id="date" type="date" value="2017-06-01">
                            </div>
                        </div>
                        <div>
                            <div class="text-block-278">{{__('Hour')}}</div>
                            <div>
                                <input class="text-block-277" id="date" type="time" value="00 : 00">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button-14 w-button">{{__('Approve')}}</a>
                </div>
            </div>
            <!-- <div class="div-block-256">
                <p class="text-la-video2">Résumé</p>
                <div class="div-block-258">
                    <div class="div-block-257">
                        <img src="{{ asset('img/Mu-Vignette-video-400x250-plato.jpg') }}" class="image-99">
                    </div>
                    <div class="div-block-260">
                        <div>
                            <p class="text-title-element2">Titre </p>
                            <p class="text-description-resume">Description </p>
                            <p class="text-description-resume">Objectif</p>
                            <p class="text-description-resume">Catégorie </p>
                            <p class="text-description-resume">Durée</p>
                            <p class="text-description-resume">Date de publication</p>
                            <p class="text-ref2">Ref : mu/…</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="button-14 w-button">Confirmer</a>
            </div> -->

            <div class="div-block-251">
                <p class="text-la-video2">Validation Publication</p>
                <div class="div-block-253">
                    <p class="text-alhamdoulila2">Al hamdulillah ! {{__('You are about to publish your videos.')}}<br>{{__('May Allah the Merciful make you enjoy all the good that is in your work and preserve you from the evil that it may hold. Here below and in the Hereafter !')}}</p>
                    <button type="submit" value="Save" class="btn div-block-252">
                        <span class="text-bismillah-publication">BISMILLAH</span>
                        <span class="text-publie">{{__('I publish my video')}}</span>
                    </button>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swipeContainermodife1', {
                slidesPerView: 3.1,
                spaceBetween: 10,

            });
        </script>
@endsection
@section('scripts')

@endsection


