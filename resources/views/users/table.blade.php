<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Sex</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Password</th>
        <th>State</th>
        <th>Type</th>
        <th>Adresse</th>
        <th>Town</th>
        <th>Postalcode</th>
        <th>Date</th>
        <th>Date</th>
        <th>Timeout</th>
        <th>Can Upload</th>
        <th>Country</th>
        <th>Is Valid</th>
        <th>Is Confirmed</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            <td>{{ $user->firstName }}</td>
            <td>{{ $user->lastName }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->sex }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->type }}</td>
            <td>{{ $user->adresse }}</td>
            <td>{{ $user->town }}</td>
            <td>{{ $user->postalCode }}</td>
            <td>{{ $user->date }}</td>
            <td>{{ $user->date }}</td>
            <td>{{ $user->timeout }}</td>
            <td>{{ $user->can_upload }}</td>
            <td>{{ $user->country }}</td>
            <td>{{ $user->is_valid }}</td>
            <td>{{ $user->is_confirmed }}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
