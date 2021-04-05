<div class="table-responsive">
    <table class="table" id="playlists-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Video Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($playlists as $playlist)
            <tr>
                <td>{{ $playlist->user_id }}</td>
            <td>{{ $playlist->video_id }}</td>
                <td>
                    {!! Form::open(['route' => ['playlists.destroy', $playlist->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('playlists.show', [$playlist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('playlists.edit', [$playlist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
