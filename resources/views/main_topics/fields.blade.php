<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('libelle', 'Libelle:') !!}
    {!! Form::text('libelle', null, ['class' => 'form-control']) !!}<br>

    <!-- Sub Topic id Field -->
    {!! Form::label('subTopic_id', 'Catégorie fille :') !!}
        <select name="subTopic_id" class="form-control">
            <option value="none" selected="" disabled="">Select the child category</option>
            @foreach($subTopics as $subtopic) 
            <option value="{{$subtopic->id}}"> {{$subtopic->libelle}}</option>
            @endforeach
        </select>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mainTopics.index') }}" class="btn btn-default">Cancel</a>
</div>
