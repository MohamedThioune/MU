<div class="table-responsive">
    <table class="table" id="subTopics-table">
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Main Topic</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subTopics as $subTopic)
            <tr>
                <td>{{ $subTopic->libelle }}</td>
                
                @foreach($maintopics as $maintopic)
                    @if($maintopic->id == $subTopic->maintopic_id)
                        <td>{{ $maintopic->libelle }}</td>
                    @endif
                @endforeach
                
                <td>
                    {!! Form::open(['route' => ['subTopics.destroy', $subTopic->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subTopics.show', [$subTopic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('subTopics.edit', [$subTopic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
