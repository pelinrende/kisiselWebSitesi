@extends('front.app.webapp')
@section('webtitle')
    Let's think
@endsection
@section('webcontent')
    <div class="container-large">
        <!-- service area start -->
        <div class="service-single-area-banner bg_image jarallax" data-jarallax="1.5"
            style="background-image: url('{{ asset('assets/images/banner/letsthink.jpg') }}');">

        </div>
        <!-- service area end -->
    </div>

    <div class="service-area-details-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">

                        <div class="top">
                            <h1 class="title">Let's Think</h1>
                            <p class="disc">
                                Let's consider together how different expectations and realities are.
                            </p>
                        </div>
                        <div class="mid-content">
                            <h6>
                                When I chose software engineering, I had almost no doubts in my mind. Everything felt clear.
                                I was a child who enjoyed spending time in front of a computer. I thought writing code was
                                something easy. Without fully understanding what software really was, I set this path as my
                                goal with my eyes closed. I imagined software developers who earn money in a short time,
                                work with flexible hours, and build “cool” projects.
                            </h6>
                            <h6>
                                When I started university, however, I realized that a large part of this picture did not
                                truly align with reality. And like many others, I experienced a sense of disappointment at
                                that point.
                            </h6>
                            <h6>
                                Most of the time, our expectations are not truly our own. The success stories we see on
                                social media create the perception that everyone is moving forward very quickly and that we
                                should progress at the same pace. However, no one talks about the months spent struggling
                                with simple errors that make no sense, the unfinished projects, or the difficult periods
                                behind the scenes. We only see the result — the success — not the process. This pushes our
                                expectations into an unrealistic space.
                            </h6>
                            <h6>
                                During my early days at university, I thought software engineering was mostly about building
                                applications. Instead, until the end of my education, I encountered algorithms, mathematics,
                                physics, and many theoretical courses. I often asked myself, “I want to write code — why am
                                I constantly dealing with theory?” In reality, the issue came from misunderstanding what the
                                university aims to provide. University does not offer a ready-made profession; it tries to
                                teach a way of thinking. But because we expect fast results, we often perceive this process
                                as meaningless.
                            </h6>
                            <h6>
                                Another reality is that learning software is mentally exhausting. From the outside, it may
                                look like simply sitting in front of a computer, but in truth, it requires constant
                                thinking, making mistakes, and learning how to deal with them. There were days when I spent
                                hours on the same problem without making any progress. At that point, you inevitably start
                                questioning yourself. Yet most of the time, the problem is not a lack of ability, but the
                                fact that the process itself is inherently difficult.
                            </h6>
                            <h6>
                                There is also the expectation of fast success. We believe that the more we work, the faster
                                we will progress. However, learning software does not follow a straight line. There were
                                times when I felt like I understood nothing for weeks, only to suddenly experience moments
                                when many things clicked into place. The real issue is seeing slow and irregular progress as
                                failure. In reality, these ups and downs are the process itself.
                            </h6>
                            <h6>
                                Looking back, I realize this: the disappointment I experienced did not come from software
                                engineering itself, but from the meaning I had attached to it. Software does not promise
                                fast money, easy success, or constant motivation. But for those who learn with patience,
                                think deeply, and refuse to give up, it is a truly powerful field. Perhaps disappointment is
                                a natural part of this journey. Because it is in those moments, when our expectations break,
                                that we face reality. And that is exactly where real learning begins.
                            </h6>
                            <p style="text-align: center; font-weight: bold; margin: 40px 0; color: #000000;">
                                Türkçe Çevirisi
                            </p>
                            <h6>
                                Yazılım mühendisliğini seçerken kafamda neredeyse hiçbir soru yoktu. Her şey netti.
                                Bilgisayar başında vakit geçirmeyi seven bir çocuktum. Kod yazmanın kolay bir şey olduğunu
                                düşünüyordum. Yazılımın ne olduğunu tam olarak bilmeden, gözüm kapalı bu yolu hedeflemiştim.
                                Kısa sürede para kazanan, esnek çalışma saatleri olan, “cool” projeler yapan yazılımcılar
                                hayal ediyordum.
                                Üniversiteye başladığımda ise bu tablonun büyük bir kısmının gerçeklerle birebir
                                örtüşmediğini fark ettim. Ve herkes gibi ben de bu noktada bir hayal kırıklığı yaşadım.
                            </h6>
                            <h6 class="disc">
                                Beklentilerimiz çoğu zaman bize ait değil. Sosyal medyada gördüğümüz başarı hikâyeleri,
                                herkesin çok hızlı ilerlediği ve bizim de aynı hızda yol almamız gerektiği algısını
                                oluşturuyor. Ancak kimse o videolarda aylarca anlam verilemeyen basit hatalardan, yarım
                                bırakılan projelerden ya da zor geçen süreçlerden bahsetmiyor. Biz sadece sonucu, yani
                                başarıyı görüyoruz; süreci değil. Bu da beklentilerimizi gerçekçi olmayan bir noktaya
                                taşıyor.
                            </h6>
                            <h6 class="disc">
                                Üniversiteye başladığım ilk dönemlerde yazılım mühendisliğinin daha çok uygulama
                                geliştirmekten ibaret olduğunu sanıyordum. Oysa okul bitene kadar algoritmalar, matematik,
                                fizik ve birçok teorik dersle karşılaştım. “Ben kod yazmak istiyorum, neden sürekli teori
                                görüyorum?” sorusunu kendime sık sık sordum. Aslında buradaki sorun, üniversitenin bize neyi
                                amaçladığını yanlış anlamamızdan kaynaklanıyordu. Üniversite bize hazır bir meslek sunmuyor;
                                düşünme biçimi kazandırmaya çalışıyor. Ancak biz hızlı sonuç beklediğimiz için bu süreci
                                çoğu zaman anlamsız görüyoruz.
                            </h6>
                            <h6>Bir başka gerçek ise yazılım öğrenmenin zihinsel olarak yorucu olması. Dışarıdan
                                bakıldığında sadece bilgisayar başında oturmak gibi görünse de, aslında sürekli
                                düşünmeyi,
                                hata yapmayı ve o hatalarla baş etmeyi gerektiriyor. Saatlerce aynı problem üzerinde
                                düşünüp
                                ilerleyemediğim günler oldu. Bu noktada insan ister istemez kendini sorguluyor. Oysa
                                çoğu
                                zaman sorun yeterlilik değil, sürecin doğası gereği zor olması.
                                Bir de hızlı başarı beklentisi var. Ne kadar çok çalışırsak o kadar hızlı
                                ilerleyeceğimizi
                                düşünüyoruz. Ancak yazılımda öğrenme süreci düz bir çizgi gibi ilerlemiyor. Bazen
                                haftalarca
                                hiçbir şey anlamadığımı düşünüp, bir anda birçok şeyin yerine oturduğu anlar yaşadım.
                                Sorun,
                                bu yavaş ve düzensiz ilerlemeyi başarısızlık sanmamız. Oysa bu inişler ve çıkışlar
                                sürecin
                                kendisi.
                            </h6>
                            <h6>
                                Dönüp baktığımda şunu fark ediyorum: Yaşadığım hayal kırıklığı yazılım mühendisliğinden
                                değil, ona yüklediğim anlamdan kaynaklanıyordu. Yazılım; hızlı para, kolay başarı ya da
                                sürekli motivasyon vadeden bir alan değil. Ama sabırla öğrenen, düşünen ve pes etmeyenler
                                için gerçekten güçlü bir alan. Belki de hayal kırıklığı bu yolun doğal bir parçası. Çünkü
                                beklentilerimizin kırıldığı o anlarda gerçeklerle yüzleşiyoruz. Ve asıl öğrenme, tam da
                                orada başlıyor
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-area-details-wrapper border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="mid-content  pt--0">
                            <p class="disc">
                            </p>
                            <p class="disc">
                            </p>
                            <p class="disc">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-about rts-section-gapTop">
        <div class="container pb--80">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">Other Articles</h2>
                    <a href="{{ route('makaleler') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                        View Article
                        <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
