<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $profile->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $profile->name }}</p>
</div>

<!-- Can Stream Field -->
<div class="form-group">
    {!! Form::label('can_stream', 'Can Stream:') !!}
    <p>{{ $profile->can_stream }}</p>
</div>

<!-- Sex Field -->
<div class="form-group">
    {!! Form::label('sex', 'Sex:') !!}
    <p>{{ $profile->sex }}</p>
</div>

<!-- Age Field -->
<div class="form-group">
    {!! Form::label('age', 'Age:') !!}
    <p>{{ $profile->age }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $profile->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $profile->updated_at }}</p>
</div>

