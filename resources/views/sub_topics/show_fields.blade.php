<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $subTopic->id }}</p>
</div>

<!-- Libelle Field -->
<div class="form-group">
    {!! Form::label('libelle', 'Libelle:') !!}
    <p>{{ $subTopic->libelle }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $subTopic->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $subTopic->updated_at }}</p>
</div>

