
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name :') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description :') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>




<!-- Category First Field -->
<div class="form-group col-sm-6">
    
    {!! Form::label('categoryprimary_id', 'Category representative of your channel :') !!}
    <select name="categoryprimary_id" class="form-control">
        <option value="none" selected="" disabled="">Select the main category</option>
        @foreach($category_primaries as $category) 
            <option value="{{$category->id}}"> {{$category->libelle}}</option>
        @endforeach
    </select>
</div>

<!-- Category Second Field -->
<div class="form-group col-sm-6">
{!! Form::label('categorysecondary_id', '&nbsp;') !!}
    <select name="categorysecondary_id" class="form-control">
        <option value="none" selected="" disabled="">Select the secondary category</option>
        @foreach($category_secondaries as $category) 
          <option value="{{$category->id}}"> {{$category->libelle}}</option>
        @endforeach
    </select>
</div>



<!-- User_id Field -->
{!! Form::hidden('user_id', Auth::id())!!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('channels.index') }}" class="btn btn-default">Cancel</a>
</div>
