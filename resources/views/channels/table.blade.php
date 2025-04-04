<div class="table-responsive">
    <table class="table" id="channels-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Urlphoto</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($channel as $canal)
            <tr>
                <td>{{ $canal->name }}</td>
                <td>{{ $canal->description }}</td>
                <td>{{ $canal->urlPhoto }}</td>
                <td>{{ $canal->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['channels.destroy', $canal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('channels.show', [$canal->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('channels.edit', [$canal->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
