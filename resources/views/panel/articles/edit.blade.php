<x-app-layout>
    <style>
        .creative-card {
            border-radius: 2rem !important;
            border: none !important;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
        }

        .form-control {
            border-radius: 1rem;
            padding: 0.8rem 1.2rem;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.1);
        }

        .gradient-btn {
            background: linear-gradient(45deg, #4e73df, #224abe);
            border: none;
            border-radius: 1rem;
            padding: 0.8rem 2rem;
            font-weight: bold;
            transition: 0.3s;
        }

        .gradient-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
        }
    </style>

    <div class="container-fluid py-5 bg-light" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="d-flex align-items-center justify-content-between mb-4 px-2">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">
                        <i class="fas fa-edit text-primary mr-2"></i> Makaleyi Düzenle
                    </h1>
                    <a href="{{ route('makale.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                        <i class="fas fa-arrow-left mr-2"></i> Listeye Dön
                    </a>
                </div>

                <div class="card creative-card p-5">
                    <form action="{{ route('makale.update', $article->id) }}" method="POST">
                        @csrf
                        @method('PUT') {{-- Güncelleme için Laravel bunu bekler --}}

                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label class="form-label font-weight-bold text-gray-700">Makale Başlığı</label>
                                <input type="text" name="title" value="{{ $article->title }}" class="form-control"
                                    placeholder="Etkileyici bir başlık yazın...">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label font-weight-bold text-gray-700">Kategori</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ $article->category_id == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label font-weight-bold text-gray-700">Yayın Durumu</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $article->status == 1 ? 'selected' : '' }}>✅ Yayında /
                                        Aktif</option>
                                    <option value="0" {{ $article->status == 0 ? 'selected' : '' }}>❌ Pasif /
                                        Taslak</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-4">
                                <label class="form-label font-weight-bold text-gray-700">Makale İçeriği</label>
                                <textarea name="content" rows="10" class="form-control" placeholder="Düşüncelerinizi buraya dökün...">{{ $article->content }}</textarea>
                            </div>

                            <div class="col-md-12 text-right mt-3">
                                <button type="submit" class="btn gradient-btn text-white shadow-lg">
                                    <i class="fas fa-save mr-2"></i> Değişiklikleri Kaydet
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
