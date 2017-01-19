<div id="HEADER">
    <ul class="nav navbar-nav navbar-left">
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
        @endif
    </ul>
</div>