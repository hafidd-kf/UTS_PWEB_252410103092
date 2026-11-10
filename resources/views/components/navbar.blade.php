@props(['username' => ''])
<div class="navbar">
    <div class="logo">
        FreshWash
    </div>
    <div>
        @if($username)
            <a href="{{ route('dashboard', ['username' => $username]) }}">
                Dashboard
            </a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}">
                Pengelolaan
            </a>
            <a href="{{ route('profile', ['username' => $username]) }}">
                Profile
            </a>
        @else
            <a href="{{ route('login') }}">
                Login
            </a>
        @endif
    </div>
</div>


