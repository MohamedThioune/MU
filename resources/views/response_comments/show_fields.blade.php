<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $responseComment->id }}</p>
</div>

<!-- Response Value Field -->
<div class="form-group">
    {!! Form::label('response_value', 'Response Value:') !!}
    <p>{{ $responseComment->response_value }}</p>
</div>

<!-- Comment Id Field -->
<div class="form-group">
    {!! Form::label('comment_id', 'Comment Id:') !!}
    <p>{{ $responseComment->comment_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $responseComment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $responseComment->updated_at }}</p>
</div>

