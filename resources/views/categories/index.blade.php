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
            <li class="breadcrumb-item active">Liste des catégories</li>
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

    {{-- table --}}
    <div class="card">
        <div class="card-header">
            <div>
                {{-- add --}}
                <button type="button" class="btn btn-secondary create-new btn-primary waves-effect waves-light"
                    data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="ti ti-plus me-sm-1"></i>
                    Ajouter
                </button>

                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Créer une catégorie</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label for="category_name" class="form-label">Nom</label>
                                            <input type="text" name="category_name" id="category_name" class="form-control"
                                                placeholder="Jacket" required>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" id="description" rows="1" placeholder="Description"></textarea>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label for="category_image" class="form-label">Image</label>
                                            <input type="file" name="category_image" class="form-control" id="category_image" />
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-label-secondary"
                                        data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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
                            <th>Decription</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($categories as $category)
                            <tr class="align-middle">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="Avatar" class="rounded"
                                        width="50px">
                                </td>
                                <td>{{ $category->description ?? 'N/A' }}</td>
                                <td>
                                    <div class="d-inline-block">
                                        {{-- edit --}}
                                        <button type="button" class="btn btn-icon btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            <i class="ti ti-edit"></i>
                                        </button>

                                        <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Modifier la
                                                            catégorie</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>

                                                    <form action="{{ route('categories.update', $category->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12 mb-4">
                                                                    <label for="category_name" class="form-label">Nom</label>
                                                                    <input type="text" name="category_name" id="category_name"
                                                                        class="form-control" placeholder="Jacket"
                                                                        value="{{ $category->category_name }}" required>
                                                                </div>

                                                                <div class="col-12 mb-4">
                                                                    <label for="description"
                                                                        class="form-label">Description</label>
                                                                    <textarea name="description" class="form-control" id="description" rows="1" placeholder="Description">{{ $category->description }}</textarea>
                                                                </div>

                                                                <div class="col-12 mb-4">
                                                                    <label for="category_image" class="form-label">Image</label>
                                                                    <input type="file" name="category_image"
                                                                        class="form-control" id="category_image"
                                                                        value="{{ $category->image }}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer justify-content-center">
                                                            <button type="button" class="btn btn-label-secondary"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Modifier</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- delete --}}
                                        <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $category->id }}">
                                            <i class="ti ti-trash"></i>
                                        </button>

                                        <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1"
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
                                                                <p class="text-muted mx-4 mb-0 text-wrap">Êtes-vous sûr
                                                                    de
                                                                    vouloir
                                                                    supprimer ceci ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <div>
                                                            <form
                                                                action="{{ route('categories.destroy', $category->id) }}"
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
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables/datatables.js') }}"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
@endsection

