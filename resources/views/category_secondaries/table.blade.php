<div class="table-responsive">
    <table class="table" id="categorySecondaries-table">
        <thead>
            <tr>
                <th>Libelle</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorySecondaries as $categorySecondary)
            <tr>
                <td>{{ $categorySecondary->libelle }}</td>
                <td>
                    {!! Form::open(['route' => ['categorySecondaries.destroy', $categorySecondary->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categorySecondaries.show', [$categorySecondary->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categorySecondaries.edit', [$categorySecondary->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
