<div class="table-responsive">
    <table class="table" id="reports-table">
        <thead>
            <tr>
                <th>Reason</th>
        <th>Photo</th>
        <th>Video Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reports as $report)
            <tr>
                <td>{{ $report->reason }}</td>
            <td>{{ $report->photo }}</td>
            <td>{{ $report->video_id }}</td>
                <td>
                    {!! Form::open(['route' => ['reports.destroy', $report->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reports.show', [$report->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('reports.edit', [$report->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
