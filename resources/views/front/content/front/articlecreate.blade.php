<x-app-layout>
    <div class="container-fluid py-5">
        <div class="card creative-card p-4 shadow-sm mx-auto" style="max-width: 900px;">
            <h2 class="h4 font-weight-bold text-gray-800 mb-4">✍️ Yeni Makale Hazırla</h2>

            <form action="{{ route('makale.kaydet') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Makale Başlığı</label>
                    <input type="text" name="title" class="form-control form-control-user shadow-sm"
                        placeholder="Başlığı buraya yaz..." required>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">İçerik</label>
                    <textarea id="editor" name="content" class="form-control" rows="10"></textarea>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary px-5 py-2 shadow rounded-pill font-weight-bold">
                        Yayına Al 🚀
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
