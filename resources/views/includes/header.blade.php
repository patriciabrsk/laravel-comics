<header>
    <div id="header" class="flex">
        <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo" />
        <ul class="flex">
            @foreach ($headerLinks as $headerLink)
            <li class="flex text-uppercase">
                <a class="active" href="{{ $headerLink['url'] }}">
                    {{ $headerLink['text'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</header>
