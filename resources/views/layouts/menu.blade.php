<div class="grid-x">
    <div class="small-2 medium-2 large-2 cell">
            <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
    @guest
        @include('layouts/guestmenu')
    @else
        @include('layouts/usermenu')
    @endguest
    </div>
</div>
