<div class="table-responsive">
    <table class="table" id="responseComments-table">
        <thead>
            <tr>
                <th>Response Value</th>
        <th>Comment Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($responseComments as $responseComment)
            <tr>
                <td>{{ $responseComment->response_value }}</td>
            <td>{{ $responseComment->comment_id }}</td>
                <td>
                    {!! Form::open(['route' => ['responseComments.destroy', $responseComment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('responseComments.show', [$responseComment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('responseComments.edit', [$responseComment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
