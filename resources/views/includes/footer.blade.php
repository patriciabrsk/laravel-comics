<footer>
    <div id="footer">
        <div class="footer-wrapper flex">
            <div class="links-wrapper container flex">
                <div class="links-list">
                    <h4 class="text-uppercase">DC Comics</h4>
                    <nav>
                        <ul>
                            {{-- <li v-for="(link, index) in dcComicsLinks" :key="index">
                                <a :href="link.url">{{ link.text }}</a>
                            </li> --}}
                        </ul>
                    </nav>

                    <div>
                        <h4 class="text-uppercase">Shop</h4>
                        <nav>
                            <ul>
                                {{-- <li v-for="(link, index) in shopLinks" :key="index">
                                    <a :href="link.url">{{ link.text }}</a>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="links-list">
                    <h4 class="text-uppercase">DC</h4>
                    <nav>
                        <ul>
                            {{-- <li v-for="(link, index) in dcLinks" :key="index">
                            <a :href="link.url">{{ link.text }}</a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>

                <div class="links-list">
                    <h4 class="text-uppercase">Sites</h4>
                    <nav>
                        <ul>
                                {{-- <li v-for="(link, index) in sitesLinks" :key="index">
                                <a :href="link.url">{{ link.text }}</a>
                                </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-nav">
        <div class="nav-wrapper container flex">
          <div class="sign-up">
            <a class="text-uppercase" href="#">Sign-up now!</a>
          </div>

          <div class="social-wrapper flex">
            <div class="follow">
              <p class="text-uppercase">Follow us</p>
            </div>
            <div class="icons flex">
              <img src="{{ asset('img/footer-facebook.png') }}" alt="FB logo" />
              <img src="{{ asset('img/footer-twitter.png') }}" alt="Twitter logo" />
              <img src="{{ asset('/img/footer-youtube.png') }}" alt="YT logo" />
              <img src="{{ asset('img/footer-pinterest.png') }}" alt="Pinterest logo" />
              <img src="{{ asset('img/footer-periscope.png') }}" alt="Gmaps logo" />
            </div>
          </div>
        </div>
      </div>
</footer>
