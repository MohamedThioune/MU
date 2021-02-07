
<!-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li> -->

<li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{{ route('profiles.index') }}"><i class="fa fa-edit"></i><span>Profiles</span></a>
</li>


<li class="{{ Request::is('channels*') ? 'active' : '' }}">
    <a href="{{ route('channels.index') }}"><i class="fa fa-edit"></i><span>Channels</span></a>
</li>

<li class="{{ Request::is('subTopics*') ? 'active' : '' }}">
    <a href="{{ route('subTopics.index') }}"><i class="fa fa-edit"></i><span>Sub Topics</span></a>
</li>

<li class="{{ Request::is('mainTopics*') ? 'active' : '' }}">
    <a href="{{ route('mainTopics.index') }}"><i class="fa fa-edit"></i><span>Main Topics</span></a>
</li>

<!-- <li class="{{ Request::is('videos*') ? 'active' : '' }}">
    <a href="{{ route('videos.index') }}"><i class="fa fa-edit"></i><span>Videos</span></a>
</li> -->

<li class="{{ Request::is('reports*') ? 'active' : '' }}">
    <a href="{{ route('reports.index') }}"><i class="fa fa-edit"></i><span>Reports</span></a>
</li>

<li class="{{ Request::is('shares*') ? 'active' : '' }}">
    <a href="{{ route('shares.index') }}"><i class="fa fa-edit"></i><span>Shares</span></a>
</li>

<li class="{{ Request::is('reads*') ? 'active' : '' }}">
    <a href="{{ route('reads.index') }}"><i class="fa fa-edit"></i><span>Reads</span></a>
</li>

