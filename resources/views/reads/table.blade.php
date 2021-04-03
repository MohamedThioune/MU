<div class="table-responsive">
    <table class="table" id="reads-table">
        <thead>
            <tr>
                <th>Time Read</th>
        <th>Video Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reads as $read)
            <tr>
                <td>{{ $read->time_read }}</td>
            <td>{{ $read->video_id }}</td>
            <td>{{ $read->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['reads.destroy', $read->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reads.show', [$read->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('reads.edit', [$read->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
