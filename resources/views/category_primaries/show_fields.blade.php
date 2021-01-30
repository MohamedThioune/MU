<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $categoryPrimary->id }}</p>
</div>

<!-- Libelle Field -->
<div class="form-group">
    {!! Form::label('libelle', 'Libelle:') !!}
    <p>{{ $categoryPrimary->libelle }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $categoryPrimary->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $categoryPrimary->updated_at }}</p>
</div>

