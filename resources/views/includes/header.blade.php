<header>
    <div class="blue-block flex">
        <div class="txt container flex">
            <p class="text-uppercase">dc power</p>
        </div>
    </div>
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
