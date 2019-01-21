    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="/admin/book">Book</li>
            <li><a href="/admin/audiobook">Audiobook</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>
        </ul>
    </div>

