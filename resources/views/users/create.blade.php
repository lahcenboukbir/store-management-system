@extends('layouts.app')

@section('link')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
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
            <li class="breadcrumb-item active">Créer un utilisateur</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="name">Nom <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="John Doe"
                            required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="john@example.com" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-password-toggle">
                            <label class="form-label" for="password">Mot de passe <span class="text-danger">*</span></label>
                            <div class="input-group input-group-merge">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="********" required />
                                <span class="input-group-text cursor-pointer">
                                    <i class="ti ti-eye-off"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-password-toggle">
                            <label class="form-label" for="password_confirmation">Confirmer le mot de passe <span
                                    class="text-danger">*</span></label>
                            <div class="input-group input-group-merge">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" placeholder="********" required />
                                <span class="input-group-text cursor-pointer">
                                    <i class="ti ti-eye-off"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="phone_number">Numéro de téléphone</label>
                        <input type="text" name="phone_number" class="form-control" id="phone_number"
                            placeholder="+2126-123-456-78" />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="address">Addresse</label>
                        <textarea name="address" class="form-control" id="address" rows="1" placeholder="Casablanca, Maroc"></textarea>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="flatpickr-date" class="form-label">Date d'embauche</label>
                        <input type="text" name="hire_date" class="form-control" placeholder="YYYY-MM-DD"
                            id="flatpickr-date" />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="job_title">Intitulé du poste</label>
                        <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Vendeur" />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="user_image">Image</label>
                        <input type="file" name="user_image" class="form-control" id="user_image" />
                    </div>

                </div>

                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a href="{{ route('users.index') }}" class="btn btn-label-secondary">Retour</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/forms-pickers.js') }}"></script>
@endsection