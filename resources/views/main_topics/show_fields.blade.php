<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $mainTopic->id }}</p>
</div>

<!-- Libelle Field -->
<div class="form-group">
    {!! Form::label('libelle', 'Libelle:') !!}
    <p>{{ $mainTopic->libelle }}</p>
</div>

<!-- Subtopic Id Field -->
<div class="form-group">
    {!! Form::label('subTopic_id', 'Subtopic Id:') !!}
    <p>{{ $mainTopic->subTopic_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mainTopic->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mainTopic->updated_at }}</p>
</div>

