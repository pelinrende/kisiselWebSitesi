<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        new Chart(document.getElementById('categoryChart'), {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($catLabels) !!},
                datasets: [{
                    data: {!! json_encode($catCounts) !!},
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
    <style>
        .creative-card {
            border-radius: 2rem !important;
            border: none !important;
            transition: all 0.4s;
            background: #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03) !important;
        }

        .creative-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(78, 115, 223, 0.12) !important;
        }

        .chart-container {
            position: relative;
            margin: auto;
            height: 250px;
            width: 100%;
        }

        .icon-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
    </style>

    <div class="container-fluid bg-light py-5" style="min-height: 100vh;">

        {{-- HEADER --}}
        <div class="d-flex align-items-center justify-content-between mb-5 px-4">
            <div>
                <h1 class="h2 mb-0 text-gray-800 font-weight-bold">Analiz Paneli</h1>
                <p class="text-muted">Hoş geldin Pelin, bugün verilerin harika görünüyor! ✨</p>
            </div>
            <div class="text-right">
                <a href="{{ route('makale.create') }}" class="btn btn-lg rounded-pill shadow-lg px-4 text-white"
                    style="background: linear-gradient(45deg, #ff416c, #ff4b2b); border-radius: 8px; transition: 0.3s;">
                    <i class="fas fa-plus mr-2"></i> Yeni İçerik
                </a>
            </div>
        </div>


        <div class="row px-3">
            <div class="col-xl-4 col-lg-5">
                <div class="card creative-card shadow mb-4 p-4">
                    <h6 class="font-weight-bold text-primary mb-4">İçerik Dağılımı</h6>
                    <div class="chart-container">
                        <canvas id="categoryChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-7">
                <div class="card creative-card shadow mb-4 p-4">
                    <h6 class="font-weight-bold text-primary mb-4">Haftalık Ziyaretçi Akışı</h6>
                    <div class="chart-container">
                        <canvas id="visitorLineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <div class="row px-3 mt-4">
            <div class="col-md-4">
                <div class="card creative-card p-4 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-info mr-3">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Toplam Okunma</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ number_format($totalHit) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card creative-card p-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-success mr-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Yeni Mesajlar
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $messageCount }}
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('panel.mesajlar') }}" class="btn btn-sm btn-light rounded-pill px-3">
                            Oku
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card creative-card p-4 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-primary mr-3">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Aktif Makale
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $articleCount }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--     <div class="row px-3 mt-5">
            <div class="col-12">
                <div class="card creative-card p-4">
                    <h5 class="font-weight-bold text-primary mb-4">
                        📝 Son Yazılan Makaleler
                    </h5>
                    @forelse ($latestArticles as $article)
<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                            <div>
                                <div class="font-weight-bold text-dark">
                                    {{ $article->title }}
                                </div>
                                <small class="text-muted">
                                    {{ $article->created_at->format('d M Y') }}
                                </small>
                            </div>

                            <a href="{{ route('article.show', $article->slug) }}"
                                class="btn btn-sm btn-outline-primary rounded-pill px-4">
                                Görüntüle
                            </a>
                        </div>
@empty
                        <p class="text-muted">Henüz makale yok.</p>
@endforelse
                </div>
            </div>
        </div>
    </div>
-->
        <div class="col-md-3">
            <a href="{{ route('projects.index') }}" class="text-decoration-none">
                <div class="card creative-card p-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-warning mr-3">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div>
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Projelerim
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $projectCount }}
                                </div>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right text-gray-300"></i>
                    </div>
                </div>
            </a>
        </div>
        <script>
            new Chart(document.getElementById('categoryChart'), {
                type: 'doughnut',
                data: {
                    labels: ['AI', 'Motivation', 'Error', 'The Delay'],
                    datasets: [{
                        data: [30, 45, 15, 10],
                    }]
                }
            });

            new Chart(document.getElementById('visitorLineChart'), {
                type: 'line',
                data: {
                    labels: ["Pzt", "Sal", "Çar", "Per", "Cum", "Cmt", "Paz"],
                    datasets: [{
                        data: [100, 250, 200, 450, 380, 500, 600],
                    }]
                }
            });
        </script>
</x-app-layout>
