@extends('front.app.webapp')
@section('webtitle')
    content
@endsection
@section('webcontent')
    <div class="iletisim-kart">
        <h1>Content</h1>

        <table>
            <tr>
                <td class="etiket">📞Phone</td>
                <td class="icerik"><a href="tel:+905343656222">+90 534 365 62 22</a></td>
            </tr>
            <tr>
                <td class="etiket">✉️ E-posta</td>
                <td class="icerik"><a href="mailto:pelinrende@icloud.com">pelinrende@icloud.com</a></td>
            </tr>
            <tr>
                <td class="etiket">📍 Location</td>
                <td class="icerik"><a
                        href="https://www.google.com/maps/place/Do%C4%9Fu%C5%9F+%C3%9Cniversitesi/@41.001717,29.1735141,17z/data=!3m1!4b1!4m6!3m5!1s0x14cac7f63b1068af:0xd2bca6ca8c60ef84!8m2!3d41.001717!4d29.176089!16s%2Fm%2F02qgp_m?entry=ttu&g_ep=EgoyMDI2MDExOS4wIKXMDSoKLDEwMDc5MjA2N0gBUAM%3D">İstanbul,
                        Türkiye<br>
                        <a
                            href="https://www.google.com/maps/dir//36.2025341,36.1602698/@36.2023687,36.1587162,17.7z?entry=ttu&g_ep=EgoyMDI2MDExOS4wIKXMDSoKLDEwMDc5MjA2N0gBUAM%3D">Hatay,
                            Türkiye</a></td>
            </tr>
            <tr>
                <td class="etiket">🔗 GitHub</td>
                <td class="icerik"><a href="https://github.com/pelinrende" target="_blank">github.com/pelinrende</a></td>
            </tr>
            <tr>
                <td class="etiket">💼 LinkedIn</td>
                <td class="icerik"><a
                        href="https://www.linkedin.com/in/pelin-rende-569566314?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                        target="_blank">linkedin.com/in/pelinrende</a></td>
            </tr>
        </table>

        <a href="{{ route('webanasayfa') }}" class="donus-linki">← Go To Homepage</a>
    </div>
@endsection
