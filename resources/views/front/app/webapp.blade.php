@include('front.template.top-header')
<link rel="stylesheet" href="{{ asset('assets/css/front/footer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/front/iletisim.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/front/theme.css') }}">
@include('front.template.header')
@yield('webcontent')

@include('front.template.footer')
