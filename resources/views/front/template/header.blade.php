<body>
    <header class="chello-header" data-site-header>
        <div class="chello-header__inner">
            <a href="{{ route('webanasayfa') }}" class="chello-logo" aria-label="Pelin Rende ana sayfa">
                <img src="{{ asset('assets/images/logo/logom.png') }}" alt="Pelin Rende logo">
            </a>

            <nav class="chello-nav" id="primary-navigation" aria-label="Ana navigasyon">
                <ul>
                    <li>
                        <a href="{{ route('webanasayfa') }}"
                            @class(['is-active' => request()->routeIs('webanasayfa')])
                            @if (request()->routeIs('webanasayfa')) aria-current="page" @endif>
                            AnaSayfa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('hakkimda') }}"
                            @class(['is-active' => request()->routeIs('hakkimda')])
                            @if (request()->routeIs('hakkimda')) aria-current="page" @endif>
                            Hakkımda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projeler') }}"
                            @class(['is-active' => request()->routeIs('projeler')])
                            @if (request()->routeIs('projeler')) aria-current="page" @endif>
                            Projelerim
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('makaleler') }}"
                            @class(['is-active' => request()->routeIs('makaleler', 'article.show')])
                            @if (request()->routeIs('makaleler', 'article.show')) aria-current="page" @endif>
                            Makaleler
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('iletisim') }}"
                            @class(['is-active' => request()->routeIs('iletisim')])
                            @if (request()->routeIs('iletisim')) aria-current="page" @endif>
                            İletişim
                        </a>
                    </li>
                </ul>
            </nav>

            <a href="{{ route('mesaj.sayfasi') }}" class="chello-contact">
                Benimle iletişime geç
                <span aria-hidden="true">↗</span>
            </a>

            <button class="chello-menu-toggle" type="button" aria-expanded="false"
                aria-controls="primary-navigation" aria-label="Menüyü aç">
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <script>
        (() => {
            const header = document.querySelector('[data-site-header]');
            const toggle = header?.querySelector('.chello-menu-toggle');

            if (!header || !toggle) return;

            const closeMenu = () => {
                header.classList.remove('menu-is-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Menüyü aç');
            };

            toggle.addEventListener('click', () => {
                const isOpen = header.classList.toggle('menu-is-open');
                toggle.setAttribute('aria-expanded', String(isOpen));
                toggle.setAttribute('aria-label', isOpen ? 'Menüyü kapat' : 'Menüyü aç');
            });

            header.querySelectorAll('.chello-nav a').forEach((link) => {
                link.addEventListener('click', closeMenu);
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') closeMenu();
            });
        })();
    </script>
