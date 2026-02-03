<body>

    <header class="header-style-one" style="z-index: 1000; background: #3e0e6b; position: relative; width: 100%;">
        <div class="container-fluid" style="padding: 0 10px;">
            <div class="header-wrapper-1"
                style="display: flex; align-items: center; justify-content: space-between; min-height: 100px; width: 100%;">

                <div style="flex: 0 0 20%; max-width: 500px;">
                    <a href="{{ route('webanasayfa') }}" style="display: block;">
                        <img src="{{ asset('assets/images/logo/logom.png') }}" alt="logo"
                            style="width: 100%; height: auto; border-radius: 50%; display: block;">
                    </a>
                </div>

                <div style="flex: 0 0 55%; padding: 0 5px;">
                    <nav>
                        <ul
                            style="display: flex; justify-content: space-evenly; align-items: center; list-style: none; margin: 0; padding: 0; gap: 5px;">
                            <li><a href="{{ route('webanasayfa') }}"
                                    style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">HomePage</a>
                            </li>
                            <li><a href="{{ route('hakkimda') }}"
                                    style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">About</a>
                            </li>
                            <li><a href="{{ route('iletisim') }}"
                                    style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">Contact</a>
                            </li>
                            <li><a href="{{ route('projeler') }}"
                                    style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">Projects</a>
                            </li>
                            <li><a href="{{ route('makaleler') }}"
                                    style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">Articles</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div style="flex: 0 0 25%; text-align: right;">
                    <a href="{{ route('mesaj.sayfasi') }}"
                        style="display: inline-block; padding: 6px 8px; border: 1.5px solid white; border-radius: 4px; color: white; font-weight: 700; text-decoration: none; font-size: clamp(8px, 1.6vw, 14px); white-space: nowrap;">
                        Get in touch
                    </a>
                </div>

            </div>
        </div>
    </header>
    <!--    <header class="header-style-one header--sticky"
        style="z-index: 1000; position: fixed; background: #3e0e6b; top: 0; width: 100%;">
        <div class="container-fluid" style="padding: 0 10px;">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-wrapper-1"
                        style="display: flex; align-items: center; justify-content: space-between; min-height: 100px; width: 100%;">

                        <a href="{{ route('webanasayfa') }}" class="logo-area" style="z-index: 10;">
                            <img src="{{ asset('assets/images/logo/logom.png') }}" alt="logo"
                                style="width: 100%; height: auto; border-radius: 50%; display: block;">
                        </a>

                        <div style="flex: 0 0 55%; padding: 0 5px;">
                            <nav>
                                <ul
                                    style="display: flex; justify-content: space-evenly; align-items: center; list-style: none; margin: 0; padding: 0; gap: 5px;">
                                    <li><a href="{{ route('webanasayfa') }}"
                                            style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">HomePage</a>
                                    </li>
                                    <li><a href="{{ route('hakkimda') }}"
                                            style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">About</a>
                                    </li>
                                    <li><a href="{{ route('iletisim') }}"
                                            style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">Contact</a>
                                    </li>
                                    <li><a href="{{ route('projeler') }}"
                                            style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">Projects</a>
                                    </li>
                                    <li><a href="{{ route('makaleler') }}"
                                            style="color: white; font-weight: 600; text-decoration: none; font-size: clamp(9px, 1.8vw, 16px); white-space: nowrap;">Articles</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="button-area-right-header" style="z-index: 10;">
                            <a href="{{ route('mesaj.sayfasi') }}" class="rts-btn btn-border"
                                style="padding: 16px 35px; border-radius: 5px; font-weight: 700; border: 2px solid white; white-space: nowrap; color: white;">
                                Get in touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
-->
