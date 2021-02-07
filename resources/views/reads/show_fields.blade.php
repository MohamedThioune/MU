<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $read->id }}</p>
</div>

<!-- Time Read Field -->
<div class="form-group">
    {!! Form::label('time_read', 'Time Read:') !!}
    <p>{{ $read->time_read }}</p>
</div>

<!-- Video Id Field -->
<div class="form-group">
    {!! Form::label('video_id', 'Video Id:') !!}
    <p>{{ $read->video_id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $read->user_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $read->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $read->updated_at }}</p>
</div>

