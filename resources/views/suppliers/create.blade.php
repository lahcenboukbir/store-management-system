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
                <a href="{{ route('users.index') }}">Liste des fournisseurs</a>
            </li>
            <li class="breadcrumb-item active">Ajouter un fournisseur</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="supplier_name">Nom <span class="text-danger">*</span></label>
                        <input type="text" name="supplier_name" class="form-control" id="supplier_name"
                            placeholder="John Doe" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="john@example.com" />
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
                        <label class="form-label" for="notes">Remarques</label>
                        <textarea name="notes" class="form-control" id="notes" rows="1" placeholder="Remarques"></textarea>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="supplier_image">Image</label>
                        <input type="file" name="supplier_image" class="form-control" id="supplier_image" />
                    </div>

                </div>

                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-label-secondary">Retour</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/forms-pickers.js') }}"></script>
@endsection
