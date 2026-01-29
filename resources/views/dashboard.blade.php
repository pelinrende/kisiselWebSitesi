<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .chart-container {
            position: relative;
            height: 300px;
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
            margin-right: 15px;

        }

        .creative-card {
            border: none;
            border-radius: 20px;
            transition: transform 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .creative-card:hover {
            transform: translateY(-5px);
        }
    </style>

    <div class="container-fluid bg-light py-5"
        style="min-height: 100vh; background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(32, 1, 47, 0.85)); background-attachment: fixed;">

        <div class="d-flex align-items-center justify-content-between mb-5 px-4 flex-wrap">
            <div>
                <p class="text-muted">Bugün verilerin harika görünüyor! ✨</p> <br><br>
            </div>

            <div class="d-none d-xl-block" style="flex-grow: 1; display: flex; justify-content: center;">
                <nav class="bg-dark rounded-pill px-4 py-2 shadow-sm" style="min-width: fit-content;">
                    <ul class="nav list-unstyled mb-0 flex-nowrap"
                        style="display: flex; gap: 30px; justify-content: center;">
                        <li><a class="nav-link px-2 font-weight-bold" style="color:red;"
                                href="{{ route('panel.mesajlar') }}">Mesajlar</a>
                        </li>
                        <li><a class="nav-link px-2 font-weight-bold" style="color:red;"
                                href="{{ route('projects.create') }}">Proje oluştur</a></li>
                        <li><a class="nav-link px-2 font-weight-bold" style="color:red;"
                                href="{{ route('makale.create') }}">Makale Oluştur</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="d-flex flex-row px-3 mb-4" style="gap: 20px; display: flex !important;">
            <div style="flex: 1;">
                <div class="card creative-card shadow h-100 p-4">
                    <h6 class="font-weight-bold text-primary mb-4">İçerik Dağılımı</h6>
                    <div class="chart-container">
                        <canvas id="categoryChart"></canvas>
                    </div>
                </div>
            </div>

            <div style="flex: 2;">
                <div class="card creative-card shadow h-100 p-4">
                    <h6 class="font-weight-bold text-primary mb-4">Haftalık Ziyaretçi Akışı</h6>
                    <div class="chart-container">
                        <canvas id="visitorLineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>



        <div
            style="display: flex; flex-direction: row; gap: 15px; width: 100%; padding: 0 15px; margin-top: 25px; flex-wrap: nowrap;">

            <div style="flex: 1; min-width: 0;">
                <div class="card creative-card p-4 shadow-sm h-100">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-info" style="min-width: 50px;">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div style="overflow: hidden;">
                            <div class="text-xs font-weight-bold text-info text-uppercase"
                                style="font-size: 0.65rem; white-space: nowrap;">Okunma</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($totalHit) }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="flex: 1; min-width: 0;">
                <a href="{{ route('panel.mesajlar') }}" class="text-decoration-none">
                    <div class="card creative-card p-4 shadow-sm h-100">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-success" style="min-width: 50px;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div style="overflow: hidden;">
                                <div class="text-xs font-weight-bold text-success text-uppercase"
                                    style="font-size: 0.65rem; white-space: nowrap;">Mesajlar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $messageCount }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div style="flex: 1; min-width: 0;">
                <a href="{{ route('makale.index') }}" class="text-decoration-none">
                    <div class="card creative-card p-4 shadow-sm h-100">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-primary" style="min-width: 50px;">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div style="overflow: hidden;">
                                <div class="text-xs font-weight-bold text-primary text-uppercase"
                                    style="font-size: 0.65rem; white-space: nowrap;">Makaleler</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $articleCount }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div style="flex: 1; min-width: 0;">
                <a href="{{ route('projects.index') }}" class="text-decoration-none">
                    <div class="card creative-card p-4 shadow-sm h-100">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-warning" style="min-width: 50px;">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div style="overflow: hidden;">
                                <div class="text-xs font-weight-bold text-warning text-uppercase"
                                    style="font-size: 0.65rem; white-space: nowrap;">Projeler</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $projectCount }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>

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

        new Chart(document.getElementById('visitorLineChart'), {
            type: 'line',
            data: {
                labels: ["Pzt", "Sal", "Çar", "Per", "Cum", "Cmt", "Paz"],
                datasets: [{
                    label: 'Ziyaretçi',
                    data: [100, 250, 200, 450, 380, 500, 600],
                    borderColor: '#4e73df',
                    tension: 0.3,
                    fill: true,
                    backgroundColor: 'rgba(78, 115, 223, 0.05)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</x-app-layout>
