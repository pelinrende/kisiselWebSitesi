@extends('front.app.webapp')

@section('webcontent')
    <div class="container-fluid py-4"
        style="min-height: 100vh; background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(32, 1, 47, 0.85)); background-attachment: fixed;">
        <section class="message-section" style=" min-height: 100vh; display: flex; align-items: center; padding: 50px 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card message-card"
                            style="backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 30px; box-shadow: 0 25px 50px rgba(0,0,0,0.3);">

                            <div class="card-body p-5">
                                <div class="text-center mb-5">
                                    <h2 style=" font-weight: 700; letter-spacing: -1px;">Bana Mesaj Gönder 🥰</h2>
                                    <p style="color: #a29bfe; font-size: 0.9rem;">Seninle tanışmak için sabırsızlanıyorum!
                                    </p>
                                </div>

                                <form action="{{ route('iletisim.gonder') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label
                                            style="font-size: 0.8rem; margin-left: 10px; margin-bottom: 5px; display: block;">Ad
                                            Soyad</label>
                                        <input type="text" name="name" class="custom-input" placeholder="..."
                                            required>
                                    </div>

                                    <div class="mb-4">
                                        <label
                                            style=" font-size: 0.8rem; margin-left: 10px; margin-bottom: 5px; display: block;">E-posta
                                            Adresi</label>
                                        <input type="email" name="email" class="custom-input" placeholder="..."
                                            required>
                                    </div>

                                    <div class="mb-4">
                                        <label
                                            style=" font-size: 0.8rem; margin-left: 10px; margin-bottom: 5px; display: block;">Mesajın</label>
                                        <textarea name="content" class="custom-input" rows="4" placeholder="..." required></textarea>
                                    </div>

                                    <button type="submit" class="send-btn"
                                        style="box-shadow: 0 10px 20px rgba(62, 14, 107, 0.3); display: flex;justify-content: center;
           align-items: center;
           gap: 10px;border: none;
           border-radius: 12px;
           font-weight: 700;
           font-size: 16px; widht:%50">
                                        <span>Gönder 🚀</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
