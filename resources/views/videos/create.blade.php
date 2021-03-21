@extends('layouts.sidbarDashboard')
@section('head')
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<link rel="stylesheet" type="text/css" href="../css/video.css" />
@endsection

@section('content-sidbar-element')
    <form action="/videos" method="POST" class="formpublier2" enctype="multipart/form-data">
        @csrf
        <div class="mes-videos">
            <div class="div-block-219">
                <div class="bandeau-chaine"></div>
                <div class="nom-de-la-chaine">
                    <h1 class="text-name-title-creator">{{$channel->name}}</h1>
                </div>
                @php $user = Auth::user(); @endphp

                @if($user->sex == 0)
                <div class="div-block-220">
                    <div class="div-block-224">
                        <div class="div-block-222"></div>

                        <div class="div-block-231">
                            <div class="bouton-activ-on">
                                <div class="div-block-227"></div>
                            </div>
                        </div>

                        <p class="text-publier-cette-video">Publier cette vidéo uniquement sur Sista 2 Sista</p>
                    </div>
                </div>
                @endif
            </div>
            <div class="div-block-235">
                <p class=" text-title-video">Télécharger ma vidéo</p>
                <div class="div-block-254">
                    <div class="div-block-237">
                        <div class="form-group titre-video">
                            <label for="titre-video" class="text-la-video2">Titre de la vidéo</label>
                            <input type="text" class="form-control div-block-236" id="main_title" name="main_title">
                        </div>
                        <p class="text-number-element">0/120</p>
                        <div class="data-video">
                            <div class="form-group">
                                <div class="box">
                                    <input type="file" name="vid" id="vid" class="inputfile inputFile1 inputfile-4"/>
                                    <label for="vid">
                                        <figure> <img src="{{ asset('img/outline-cloud_upload-24px.png') }}" class="img-cloud" alt=""></figure>
                                        <span class="text2-telecharger-la-video">Télécharger la vidéo</span>
                                    </label>
                                </div>

                                <div class="div-block-255"></div>
                            </div>
                            <!-- <p class="text-detail-fichier">Nom du fichier<br>Taille<br>Durée<br>Format<br>Date de téléchargement <br></p> -->
                        </div>
                        <!-- <p class="text-ref-fichier">Ref : mu/…</p> -->
                    </div>
                    <div class="div-block-239">
                        <div class="content2">
                            <label class="label-22" for="input">
                                <img src="{{ asset('img/Mu-Vignette-video-400x250-plato.jpg') }}" class="image-98">
                            </label>
                            <div class="input inputModifeVignette">
                                <input class="btn btn-default" name="thumbnail" id="thumbnail" type="file" />
                                <label for="thumbnail">Modifier vignette de la video</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-block-241">
                <div class="div-block-248">
                    <p class=" text-title-video">Description de ma vidéo</p>
                    <div class="div-block-249">
                        <div class="form-group titre-video">
                            <label class="text-la-video2">Description de la vidéo</label>
                            <textarea class="form-control div-block-240" name="description" id="description" cols="30" rows="5">
                            </textarea>
                        </div>
                        <div class="form-group titre-video">
                            <label class="text-title-video">Objectifs de la vidéo</label>
                            <p class="text-block-263">"Les acts ne valent que par leurs intentions" alors précise tes objectifs.
                                Et souviens toi que la première des intentions est de plaire à ton Créateur.
                                Que Le Très miséricordieux t'en récompense.</p>
                            <div class="div-block-310">
                                <div class="divChekElement">
                                    <input type="checkbox" value="informer" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Informer</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="partager" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Partager</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="faire-rire" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Faire rire</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="sensibiliser" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Sensibiliser</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="inspirer" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Inspirer</label>
                                </div>
                            </div>
                            <div class="div-block-310">
                                <div class="divChekElement">
                                    <input type="checkbox" value="avertir" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Avertir</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="soutenir" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Soutenir</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="vendre" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Vendre</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="rappeler" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Rappeler</label>
                                </div>
                                <div class="divChekElement">
                                    <input type="checkbox" value="expliquer" class="btn-check" id="btn-check-2-outlined"  autocomplete="off">
                                    <label class="btn text-block-311" for="btn-check-2-outlined">Expliquer</label>
                                </div>
                            </div>
                            <!--<textarea class="form-control div-block-240" name="motivation" id="motivation" cols="30" rows="5">
                            </textarea>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-block-250">
                <p class="text-la-video2">Catégorie de la vidéo</p>
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
                </div>
            </div>
            <div class="div-block-261">
                <div>
                    <p class="text-la-video2">Date de publication</p>
                </div>
                <div class="div-block-262">
                    <div class="div-block-265">
                        <p class="text-publication-immediat">Publication immédiate </p>
                        <div class="div-block-264"></div>
                    </div>
                    <p>Publication progammer pour le </p>
                    <div class="div-block-263">
                        <div>
                            <div class="text-block-279">Date</div>
                            <div>
                                <input class="text-block-277" id="date" type="date" value="2017-06-01">
                            </div>
                        </div>
                        <div>
                            <div class="text-block-278">Heure</div>
                            <div>
                                <input class="text-block-277" id="date" type="time" value="00 : 00">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button-14 w-button">Valider</a>
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
                    <p class="text-alhamdoulila2">Al hamdulillah ! Tu t&#x27;apprêtes à publier tes vidéos. <br>Qu&#x27;Allah Le Miséricordieux te fasse profiter de tout le bien qu&#x27;il y a dans ton oeuvre,<br> et qu&#x27;Il te préserve du mal qu&#x27;elle peut réserver. Ici-bas et dans l&#x27;au-delà !</p>
                    <button type="submit" value="Save" class="btn div-block-252">
                        <span class="text-bismillah-publication">BISMILLAH</span>
                        <span class="text-publie">Je publie ma vidéo</span>
                    </button>
                </div>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

@endsection
@section('scripts')

@endsection


