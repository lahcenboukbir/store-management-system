@extends('layouts.app')

@section('link')
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Acceuil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('users.index') }}">Liste des utilisateurs</a>
            </li>
            <li class="breadcrumb-item active">{{ $user->name }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12">
            <div class="card mb-6">
                <div class="user-profile-header-banner">
                    <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top">
                </div>
                <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/img/avatars/1.png') }}"
                            alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-lg-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4 class="mb-2 mt-lg-6">{{ $user->name }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 my-2">
                                    <li class="list-inline-item d-flex gap-2 align-items-center">
                                        <i class='ti ti-briefcase ti-lg'></i>
                                        <span class="fw-medium">{{ $user->job_title }}</span>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary mb-1">
                                <i class='ti ti-settings ti-xs me-2'></i>Modifier le profil
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5">
            <div class="card mb-6">
                <div class="card-body">
                    <small class="card-text text-uppercase text-muted small">À propos</small>
                    <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-user ti-lg"></i>
                            <span class="fw-medium mx-2">Nom:</span>
                            <span>{{ $user->name }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-check ti-lg"></i>
                            <span class="fw-medium mx-2">Statut:</span>
                            <span>{{ $user->status }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-crown ti-lg"></i>
                            <span class="fw-medium mx-2">Rôle:</span>
                            <span>Admin</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-map ti-lg"></i>
                            <span class="fw-medium mx-2">Adresse:</span>
                            <span>{{ $user->address ?? 'N/A' }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="ti ti-calendar-plus ti-lg"></i>
                            <span class="fw-medium mx-2">Date d'embauche:</span>
                            <span>{{ $user->hire_date }}</span>
                        </li>
                    </ul>

                    <small class="card-text text-uppercase text-muted small">Contacts</small>
                    <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-phone-call ti-lg"></i>
                            <span class="fw-medium mx-2">Tél.:</span>
                            <span>{{ $user->phone_number ?? 'N/A' }}</span>
                        </li>

                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-mail ti-lg"></i>
                            <span class="fw-medium mx-2">Email:</span>
                            <span>{{ $user->email }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Page JS -->
    <script src="{{ asset('assets/js/pages-profile.js') }}"></script>
@endsection