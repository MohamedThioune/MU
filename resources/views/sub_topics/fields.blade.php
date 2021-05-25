<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('libelle', 'Libelle:') !!}
    {!! Form::text('libelle', null, ['class' => 'form-control']) !!}

    <!-- Sub Topic id Field -->
    {!! Form::label('subTopic_id', 'Catégorie fille :') !!}
    <select name="mainTopic_id" class="form-control">
        <option value="none" selected="" disabled="">Select the Main Category</option>
        @foreach($maintopics as $maintopic) 
        <option value="{{$maintopic->id}}"> {{$maintopic->libelle}}</option>
        @endforeach
    </select> 
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('subTopics.index') }}" class="btn btn-default">Cancel</a>
</div>
