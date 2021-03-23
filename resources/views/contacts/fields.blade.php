<div class="form-group col-sm-6">
    {!! Form::label('adresse', 'Adresse :') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('site_web', 'Site Web :') !!}
    {!! Form::text('site_web', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('code_postale', 'Code postale :') !!}
    {!! Form::text('code_postale', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('ville', 'Ville :') !!}
    {!! Form::text('ville', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('pays', 'Pays :') !!}
    {!! Form::text('pays', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label("open_door", "Heure d'ouverture :") !!}
    {!! Form::text('open_door', null, ['class' => 'form-control']) !!}
    {!! Form::hidden('channel_id', $channel->id) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contacts.index') }}" class="btn btn-default">Cancel</a>
</div>
