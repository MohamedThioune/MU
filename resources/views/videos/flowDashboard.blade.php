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