<div class="top-bar">

            {{-- <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> --}}

            <div>
                @guest
                    @include('layouts/guestmenu')
                @else
                    @include('layouts/usermenu')
                @endguest
            </div>
</div>
