<div id="HEADER">
    @if (Auth::guest())
        <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
    @else
        <?php echo($UIelements->render_top_menu()); ?>
    @endif
</div>