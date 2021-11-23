<li class="nav-item">
    <a href="{{ route('joyControllers.index') }}"
       class="nav-link {{ Request::is('joyControllers*') ? 'active' : '' }}">
        <p>Joy Controllers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


