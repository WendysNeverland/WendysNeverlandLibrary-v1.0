<div>
    <ul class="menu align-right">
        <li><a href="/admin/book">Book</li>
        <li><a href="/admin/audiobook">Audiobook</a></li>
    </ul>
    <ul class="menu align-right">
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
