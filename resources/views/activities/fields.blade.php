
<div class="form-group col-sm-6">
    {!! Form::label('Text', 'Libelle :') !!}
    {!! Form::text('text', null, ['class' => 'form-control']) !!}
    {!! Form::hidden('channel_id', $channel->id) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('activities.index') }}" class="btn btn-default">Cancel</a>
</div>
 