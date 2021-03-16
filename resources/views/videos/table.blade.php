
<div class="table-responsive">
    <table class="table" id="videos-table">
        <thead>
            <tr>
                <th>Main Title</th>
                <th>Title</th>
                <th>Description</th>
                <th>Motivation</th>
                <th>Vid</th>
                <th>Thumbnail</th>
                <th>Duration</th>
                <th>Topic</th>
                <th>Request Monetize</th>
                <th>Is Monetize</th>
                <th>Online</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{ $video->main_title }}</td>
                <td>{{ $video->title }}</td>
                <td>{{ $video->description }}</td>
                <td>{{ $video->motivation }}</td>
                <td><a href="{{asset('vids/uploads/')}}/{{$video->vid}}" target="blank">Your video 👉🏽 </a></td>
                <td><a href="{{asset('vids/thumbnails')}}/{{$video->thumbnail}}" target="blank">🌉 Picture </a></td>
                <td>{{ $video->duration}}</td>

                @foreach($subtopics as $subtopic)
                    @if($subtopic->id == $video->subtopic_id)
                        <td>{{ $subtopic->libelle }}</td>
                    @endif
                @endforeach

                @if(!$video->subtopic_id)
                    <td>None</td>
                @endif

                <td>{{ $video->request_monetize }}</td>
                <td>{{ $video->is_monetize }}</td>
                <td>{{ $video->online }}</td>
                <td>
                    {!! Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{asset('vids/uploads/')}}/{{$video->vid}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('videos.edit', [$video->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
