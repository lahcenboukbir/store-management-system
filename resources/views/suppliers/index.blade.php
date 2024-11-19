@extends('layouts.app')

@section('link')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables/datatables.css') }}">
@endsection

@section('content')
    {{-- breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Acceuil</a>
            </li>
            <li class="breadcrumb-item active">Liste des fournisseurs</li>
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
        <div class="card-header">
            <div>
                <a href="{{ route('suppliers.create') }}"
                    class="btn btn-secondary create-new btn-primary waves-effect waves-light">
                    <i class="ti ti-plus me-sm-1"></i>
                    Ajouter
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Numéro de téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($suppliers as $supplier)
                            <tr class="align-middle">
                                <td>{{ $supplier->id }}</td>
                                <td>{{ $supplier->supplier_name }}</td>
                                <td>{{ $supplier->email ?? 'N/A'}}</td>
                                <td>{{ $supplier->phone_number ?? 'N/A' }}</td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-icon btn-primary">
                                            <i class="ti ti-eye"></i>
                                        </a>

                                        <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-icon btn-warning">
                                            <i class="ti ti-edit"></i>
                                        </a>

                                        <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $supplier->id }}">
                                            <i class="ti ti-trash"></i>
                                        </button>

                                        <div class="modal fade" id="deleteModal{{ $supplier->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                                                                style="width:120px;height:120px">
                                                            </lord-icon>
                                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                <h4>Êtes-vous sûr ? </h4>
                                                                <p class="text-muted mx-4 mb-0 text-wrap">Êtes-vous sûr de
                                                                    vouloir
                                                                    supprimer ceci ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-center ">
                                                        <div>
                                                            <form action="{{ route('suppliers.destroy', $supplier->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-label-secondary"
                                                                    data-bs-dismiss="modal">Fermer</button>
                                                                <button type="submit" class="btn btn-danger">
                                                                    Oui, supprimez-le !
                                                                </button>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>


@endsection

@section('script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables/datatables.js') }}"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
@endsection
