

<div class="form-group col-sm-6">
    {!! Form::label("Libelle", "Libelle de l'evenement :") !!}
    {!! Form::text('libelle', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label("text", "Texte de l'evenement  :") !!}
    {!! Form::text('text', null, ['class' => 'form-control']) !!}
    {!! Form::hidden('channel_id', $channel->id) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('events.index') }}" class="btn btn-default">Cancel</a>
</div>
