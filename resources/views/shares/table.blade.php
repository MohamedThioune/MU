<div class="table-responsive">
    <table class="table" id="shares-table">
        <thead>
            <tr>
                <th>Url</th>
        <th>User Id</th>
        <th>Video Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shares as $share)
            <tr>
                <td>{{ $share->url }}</td>
            <td>{{ $share->user_id }}</td>
            <td>{{ $share->video_id }}</td>
                <td>
                    {!! Form::open(['route' => ['shares.destroy', $share->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shares.show', [$share->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('shares.edit', [$share->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
