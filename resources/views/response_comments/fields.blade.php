<!-- Response Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('response_value', 'Response Value:') !!}
    {!! Form::text('response_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('responseComments.index') }}" class="btn btn-default">Cancel</a>
</div>
