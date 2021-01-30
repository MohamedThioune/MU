
<!-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li> -->

<li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{{ route('profiles.index') }}"><i class="fa fa-edit"></i><span>Profiles</span></a>
</li>


<li class="{{ Request::is('channels*') ? 'active' : '' }}">
    <a href="{{ route('channels.index') }}"><i class="fa fa-edit"></i><span>Channels</span></a>
</li>

