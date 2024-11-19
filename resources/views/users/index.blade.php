@extends('layouts.app')

@section('link')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables/datatables.css') }}">
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Acceuil</a>
            </li>
            <li class="breadcrumb-item active">Liste des utilisateurs</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <div>
                <a href="{{ route('users.create') }}"
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
                            <th>Image</th>
                            <th>Email</th>
                            <th>Numéro de téléphone</th>
                            <th>Dernière connexion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                            <tr class="align-middle">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Avatar"
                                            class="rounded" width="50px">
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number ?? 'N/A' }}</td>
                                <td>{{ $user->last_login ?? 'N/A' }}</td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-icon btn-primary">
                                            <i class="ti ti-eye"></i>
                                        </a>

                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-icon btn-warning">
                                            <i class="ti ti-edit"></i>
                                        </a>

                                        <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $user->id }}">
                                            <i class="ti ti-trash"></i>
                                        </button>

                                        <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1"
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
                                                            <form action="{{ route('users.destroy', $user->id) }}"
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
