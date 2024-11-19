@extends('layouts.app')

@section('link')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('content')
    {{-- breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Acceuil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('users.index') }}">Liste des fournisseurs</a>
            </li>
            <li class="breadcrumb-item active">{{ $supplier->supplier_name }}</li>
        </ol>
    </nav>

    {{-- success message --}}
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible" role="alert">
            <h4 class="alert-heading d-flex align-items-center">
                <span class="alert-icon rounded">
                    <i class="ti ti-square-rounded-check"></i>
                </span>Succès
            </h4>
            <p class="mb-0">{{ session('success') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="supplier_name">Nom <span class="text-danger">*</span></label>
                        <input type="text" name="supplier_name" class="form-control" id="supplier_name"
                            placeholder="John Doe" required value="{{ $supplier->supplier_name }}" />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="john@example.com" value="{{ $supplier->email }}" />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="phone_number">Numéro de téléphone</label>
                        <input type="text" name="phone_number" class="form-control" id="phone_number"
                            placeholder="+2126-123-456-78" value="{{ $supplier->phone_number }}" />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="address">Addresse</label>
                        <textarea name="address" class="form-control" id="address" rows="1" placeholder="Casablanca, Maroc">{{ $supplier->address }}</textarea>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="notes">Remarques</label>
                        <textarea name="notes" class="form-control" id="notes" rows="1" placeholder="Remarques">{{ $supplier->notes }}</textarea>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="supplier_image">Image</label>
                        <input type="file" name="supplier_image" class="form-control" id="supplier_image"
                            value="{{ $supplier->image }}" />
                    </div>

                </div>

                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
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
