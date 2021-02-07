<div class="table-responsive">
    <table class="table" id="mainTopics-table">
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Sub topic</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mainTopics as $mainTopic)
            <tr>
                <td>{{ $mainTopic->libelle }}</td>
                @foreach($subTopics as $subTopic)
                    @if($subTopic->id == $mainTopic->subTopic_id)
                    <td>{{ $subTopic->libelle }}</td>
                    @endif
                @endforeach
                <td>
                    {!! Form::open(['route' => ['mainTopics.destroy', $mainTopic->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mainTopics.show', [$mainTopic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('mainTopics.edit', [$mainTopic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            
        @endforeach
        </tbody>
    </table>
</div>
