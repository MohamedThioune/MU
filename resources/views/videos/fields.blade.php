
<!-- Main Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_title', 'Donner le titre principale de votre video : ') !!}
    {!! Form::text('main_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Donner un titre secondaire : ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description :') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivation', 'Quel est votre motivation à mettre en ligne cette video ?') !!}
    {!! Form::text('motivation', null, ['class' => 'form-control']) !!}
</div>

<!-- Request monetize Field -->
<div class="form-group col-sm-6">
    {!! Form::label('request_monetize', 'Voulez-vous faire monétiser cette vidéo ? ') !!}<br>
   <span>Oui, pourquoi pas</span> {!! Form::radio('request_monetize' , '1', true) !!}&nbsp;&nbsp;&nbsp;
   <span>Non, merci</span> {!! Form::radio('request_monetize' , '0') !!}
</div>

<!-- Sub Topic id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtopic_id', 'De quoi parle votre video ? ') !!}
    <select name="subtopic_id" class="form-control">
        <option value="none" selected="" disabled="">Select the topic</option>
        @foreach($subtopics as $subtopic) 
            <option value="{{$subtopic->id}}"> {{$subtopic->libelle}}</option>
        @endforeach
    </select>
</div>
        
<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Insérer une image qui sera représenter votre vidéo') !!}
    {!! Form::file('thumbnail', ['class' => 'form-control']) !!}
</div> 

<!-- Vid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vid', 'Uploader votre vidéo 😎 👇🏾 :') !!}
    {!! Form::file('vid', ['class' => 'form-control']) !!}
</div>

{{ Form::hidden('user_id', Auth::id()) }}
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('videos.index') }}" class="btn btn-default">Cancel</a>
</div>