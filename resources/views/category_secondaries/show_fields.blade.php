<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $categorySecondary->id }}</p>
</div>

<!-- Libelle Field -->
<div class="form-group">
    {!! Form::label('libelle', 'Libelle:') !!}
    <p>{{ $categorySecondary->libelle }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $categorySecondary->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $categorySecondary->updated_at }}</p>
</div>

