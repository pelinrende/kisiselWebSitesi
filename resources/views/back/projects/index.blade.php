@extends('back.layouts.master')

@section('title', 'Tüm Projelerim')

@section('content')
    <div class="container-fluid py-4">
        <div class="card shadow-sm border-0" style="border-radius: 1.5rem;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="font-weight-bold text-primary">📂 Proje Listesi</h3>
                    <a href="{{ route('projects.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
                        <i class="fas fa-plus mr-2"></i> Yeni Proje Ekle
                    </a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success border-0 shadow-sm rounded-pill px-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="thead-light">
                            <tr>
                                <th>Görsel</th>
                                <th>Proje Başlığı</th>
                                <th>Link</th>
                                <th>Oluşturma Tarihi</th>
                                <th class="text-center">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                                <tr>
                                    <td>
                                        <img src="{{ asset($project->image) }}" width="60" height="40"
                                            class="rounded shadow-sm" style="object-fit: cover;"
                                            onerror="this.src='https://via.placeholder.com/60x40?text=Yok'">
                                    </td>
                                    <td class="font-weight-bold">{{ $project->title }}</td>
                                    <td>
                                        @if ($project->link)
                                            <a href="{{ $project->link }}" target="_blank"
                                                class="btn btn-sm btn-outline-info rounded-pill">
                                                <i class="fas fa-external-link-alt mr-1"></i> Git
                                            </a>
                                        @else
                                            <span class="text-muted">Link yok</span>
                                        @endif
                                    </td>
                                    <td>{{ $project->created_at->format('d.m.Y') }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('projects.edit', $project->id) }}"
                                                class="btn btn-sm btn-light text-primary mr-2 shadow-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                                onsubmit="return confirm('Projeyi silmek istediğine emin misin?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-light text-danger shadow-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <i class="fas fa-folder-open fa-3x mb-3"></i><br>
                                        Henüz hiç proje eklememişsin Pelin. Hemen bir tane ekleyelim!
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="card-footer bg-white border-0 pb-4">
                        <div class="d-flex justify-content-end">
                            {{-- Yeni Proje Ekleme Sayfasına Giden Şık Buton --}}
                            <a href="{{ route('projeler') }}"
                                class="btn btn-primary px-5 py-3 shadow-lg rounded-pill font-weight-bold">
                                <i class="fas fa-plus-circle mr-2"></i> Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
