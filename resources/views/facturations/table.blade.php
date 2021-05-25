<div class="table-responsive">
    <table class="table" id="facturations-table">
        <thead>
            <tr>
                <th>Month</th>
        <th>State</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturations as $facturation)
            <tr>
                <td>{{ $facturation->month }}</td>
            <td>{{ $facturation->state }}</td>
            <td>{{ $facturation->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['facturations.destroy', $facturation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturations.show', [$facturation->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('facturations.edit', [$facturation->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
