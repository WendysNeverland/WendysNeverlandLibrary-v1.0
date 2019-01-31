
    <div class="small-6 medium-6 large-6 cell">
            <ul class="menu">
                <li><a href="/admin/book">Book</a></li>
                <li><a href="/admin/audiobook">Audiobook</a></li>
            </ul>
    </div>
    <div class="small-4 medium-4 large-4 cell">
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

