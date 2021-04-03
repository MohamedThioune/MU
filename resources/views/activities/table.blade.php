<div class="table-responsive">
    <table class="table" id="activities-table">
        <thead>
            <tr>
                <th>Text</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($activities as $activity)
            <tr>
                <td>{{ $activity->text }}</td>
                <td>
                    {!! Form::open(['route' => ['activities.destroy', $activity->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('activities.show', [$activity->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('activities.edit', [$activity->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
