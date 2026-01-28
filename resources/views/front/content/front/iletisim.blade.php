@extends('front.app.webapp')

@section('webtitle', 'İletişim | Pelin Rende')

@section('webcontent')
    <section class="contact-area"
        style="position: relative; background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(32, 1, 47, 0.85)), url('{{ asset('assets/images/bg/arka-plan.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center; overflow: hidden;">


        <div class="container" style="position: relative; z-index: 10;">
            <div class="iletisim-kart"
                style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); padding: 40px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.1); color: white; max-width: 600px; margin: 0 auto;">
                <h1 style="margin-bottom: 30px; font-weight: 700;">Get In Touch</h1>

                <table style="width: 100%; border-collapse: separate; border-spacing: 0 15px;">
                    <tr>
                        <td class="etiket" style="font-weight: 600; width: 30%;">📞 Phone</td>
                        <td class="icerik"><a href="tel:+905343656222" style="color:black; text-decoration: none;">+90 534
                                365 62 22</a></td>
                    </tr>
                    <tr>
                        <td class="etiket" style="font-weight: 600;">✉️ E-mail</td>
                        <td class="icerik"><a href="mailto:pelinrende@icloud.com"
                                style="color:black; text-decoration: none;">pelinrende@icloud.com</a></td>
                    </tr>
                    <tr>
                        <td class="etiket" style="font-weight: 600;">📍 Location</td>
                        <td class="icerik">
                            <a href="https://www.google.com/maps/place/Doğuş+Üniversitesi/@41.001717,29.1735141,895m/data=!3m2!1e3!4b1!4m6!3m5!1s0x14cac7f63b1068af:0xd2bca6ca8c60ef84!8m2!3d41.001717!4d29.176089!16s%2Fm%2F02qgp_m?entry=ttu&g_ep=EgoyMDI2MDEyNS4wIKXMDSoASAFQAw%3D%3D"
                                style="color:black; text-decoration: none;">İstanbul,Türkiye</a>
                            <br>
                            <a href="https://www.google.com/maps/place/Atatürk+anıtı/@36.2026011,36.1585635,478m/data=!3m2!1e3!4b1!4m9!1m2!2m1!1zTcO8emVsZXI!3m5!1s0x1525c309963a2f15:0xbef54f9353e378a0!8m2!3d36.2026011!4d36.1602619!16s%2Fg%2F11fs8l9fdr?entry=ttu&g_ep=EgoyMDI2MDEyNS4wIKXMDSoASAFQAw%3D%3D"
                                style="color:black; text-decoration: none;">Antakya,TÜRKİYE</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="etiket" style="font-weight: 600;">🔗 GitHub</td>
                        <td class="icerik"><a href="https://github.com/pelinrende" target="_blank"
                                style="color:black; text-decoration: none;">github.com/pelinrende</a></td>
                    </tr>
                    <tr>
                        <td class="etiket" style="font-weight: 600;">LinkedIn</td>
                        <td class="icerik"><a href="https://www.linkedin.com/in/pelin-rende-569566314/" target="_blank"
                                style="color:black; text-decoration: none;">LinkedIn.com/pelinrende</a></td>
                    </tr>
                </table>

                <div style="margin-top: 30px;">
                    <a href="{{ route('webanasayfa') }}" class="donus-linki"
                        style="color: #150e7c; text-decoration: none; font-weight: 500;">← Back to Homepage</a>
                </div>
            </div>
        </div>
    </section>
@endsection
