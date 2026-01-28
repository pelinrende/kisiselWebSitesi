@extends('back.layouts.master')

@section('title', 'Proje Yönetimi')

@section('content')
    <div class="container-fluid py-4">
        <div class="card shadow-lg border-0" style="border-radius: 1.2rem; background: #f8f9fc;">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center"
                style="border-radius: 1.2rem 1.2rem 0 0;">
                <h4 class="m-0 font-weight-bold text-primary">📂 Yayınlanan Projelerim</h4>
                <a href="{{ route('projects.create') }}" class="btn btn-primary btn-icon-split rounded-pill shadow-sm">
                    <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                    <span class="text px-3">Yeni Proje Ekle</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0"
                        style="border-radius: 10px; overflow: hidden;">
                        <thead class="bg-light text-dark">
                            <tr>
                                <th style="width: 80px;">Görsel</th>
                                <th>Proje Başlığı</th>
                                <th>Link</th>
                                <th>Eklenme Tarihi</th>
                                <th class="text-center">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <img src="{{ asset($project->image) }}" class="img-profile rounded shadow-sm"
                                            style="width: 60px; height: 45px; object-fit: cover;"
                                            onerror="this.src='https://via.placeholder.com/60x45?text=Yok'">
                                    </td>
                                    <td class="font-weight-bold text-dark">{{ $project->title }}</td>
                                    <td>
                                        <a href="{{ $project->link }}" target="_blank"
                                            class="badge badge-info p-2 px-3 rounded-pill">
                                            <i class="fas fa-external-link-alt mr-1"></i> Git
                                        </a>
                                    </td>
                                    <td>{{ $project->created_at->format('d M Y') }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('projects.edit', $project->id) }}"
                                                class="btn btn-sm btn-outline-primary mr-2 rounded">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                                onsubmit="return confirm('Pelin, bu projeyi silmek istediğine emin misin?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger rounded">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5">
                                        <p class="text-muted">Henüz hiç proje eklenmemiş. Hemen bir tane ekleyelim mi?</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <a href="{{ route('projeler') }}" class="btn btn-primary btn-icon-split rounded-pill shadow-sm">
                        <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                        <span class="text px-3">Yayınlanan Projelerim</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
