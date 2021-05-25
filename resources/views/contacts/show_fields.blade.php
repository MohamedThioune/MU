<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $contact->id }}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{{ $contact->adresse }}</p>
</div>

<!-- Site Web Field -->
<div class="form-group">
    {!! Form::label('site_web', 'Site Web:') !!}
    <p>{{ $contact->site_web }}</p>
</div>

<!-- Code Postale Field -->
<div class="form-group">
    {!! Form::label('code_postale', 'Code Postale:') !!}
    <p>{{ $contact->code_postale }}</p>
</div>

<!-- Ville Field -->
<div class="form-group">
    {!! Form::label('ville', 'Ville:') !!}
    <p>{{ $contact->ville }}</p>
</div>

<!-- Pays Field -->
<div class="form-group">
    {!! Form::label('pays', 'Pays:') !!}
    <p>{{ $contact->pays }}</p>
</div>

<!-- Open Door Field -->
<div class="form-group">
    {!! Form::label('open_door', 'Open Door:') !!}
    <p>{{ $contact->open_door }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $contact->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $contact->updated_at }}</p>
</div>

