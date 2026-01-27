<body>

    <header class="header-style-one" style="z-index: 1000; background: #fff; position: relative;">
        <div class="container-fluid" style="padding: 0 40px;">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-wrapper-1"
                        style="display: flex; justify-content: space-between; align-items: center; min-height: 160px; position: relative;">

                        <a href="{{ route('webanasayfa') }}" class="logo-area" style="display: block; z-index: 10;">
                            <img src="{{ asset('assets/images/logo/logom.png') }}" alt="logo"
                                style="width: 500px; height: auto; border-radius: 50%; display: block;">
                        </a>

                        <div class="nav-area"
                            style="position: absolute; left: 50%; transform: translateX(-50%); width: auto; z-index: 5;">
                            <nav>
                                <ul
                                    style="display: flex; gap: 40px; list-style: none; margin: 0; padding: 0; white-space: nowrap;">
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('webanasayfa') }}">HomePage</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('hakkimda') }}">About</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('iletisim') }}">Contact</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('projeler') }}">Projects</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600;"
                                            href="{{ route('makaleler') }}">Articles</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="button-area-right-header" style="z-index: 10;">
                            <a href="{{ route('mesaj.sayfasi') }}" class="rts-btn btn-border"
                                style="padding: 16px 35px; border-radius: 5px; font-weight: 700; border: 2px solid #1c1c1c; white-space: nowrap;">
                                Get in touch
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <header class="header-style-one header--sticky" style="z-index: 1000; position: fixed; top: 0; width: 100%;">
        <div class="container-fluid" style="padding: 0 40px;">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-wrapper-1"
                        style="display: flex; justify-content: space-between; align-items: center; min-height: 90px; position: relative;">

                        <a href="{{ route('webanasayfa') }}" class="logo-area" style="z-index: 10;">
                            <img src="{{ asset('assets/images/logo/logom.png') }}" alt="logo"
                                style="width: 500px; height: auto; border-radius: 50%;">
                        </a>

                        <div class="nav-area"
                            style="position: absolute; left: 50%; transform: translateX(-50%); z-index: 5;">
                            <nav>
                                <ul
                                    style="display: flex; gap: 40px; list-style: none; margin: 0; padding: 0; white-space: nowrap;">
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('webanasayfa') }}">HomePage</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('hakkimda') }}">About</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('iletisim') }}">Contact</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600; "
                                            href="{{ route('projeler') }}">Projects</a></li>
                                    <li><a class="nav-link" style="font-size: 18px; font-weight: 600;"
                                            href="{{ route('makaleler') }}">Articles</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="button-area-right-header" style="z-index: 10;">
                            <a href="{{ route('mesaj.sayfasi') }}" class="rts-btn btn-border"
                                style="padding: 10px 25px;">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
