

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Contribute to this video ...']) !!}
    {!! Form::hidden('video_id', session('video')->id ) !!}
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comments.index') }}" class="btn btn-default">Cancel</a>
</div>
