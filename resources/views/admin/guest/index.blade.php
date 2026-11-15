@extends('admin.layouts.app')
@section('title', 'Guests')
@section('page-title', 'Guests')
@section('page-description', 'View and manage all guests.')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-1">Guests</h3>
            <p class="text-muted mb-0">
                View and manage all guests.
            </p>
        </div>
        <a href="{{ route('admin.guest.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            New Guest
        </a>
    </div>
    <div class="dashboard-card">
        <div class="card-header-custom">
            <div>
                <h5>All Guests</h5>
                <span>
                    List of all guests
                </span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Designation</th>
                        <th class="text-center">Logo Image</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($guests as $guest)
                    <tr>
                        <td class="text-center">{{$guest->id}}</td>
                        <td class="text-center">{{$guest-> name}}</td>
                        <td class="text-center">{{$guest-> designation}}</td>
                        <td class="text-center">



                            @if ($guest->logo_image_path)
                                <img src="{{ Storage::url($guest->logo_image_path) }}" alt="Logo" class="img-thumbnail" style="max-width: 70px; max-height: 70px;">
                            @else
                                <span class="text-muted">No image</span>
                            @endif
                        </td>
                        <td class="text-center mx-auto">
                            <div class="d-block gap-2">

                                <a href="{{ route('admin.guest.show', $guest->id) }}"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="{{ route('admin.guest.edit', $guest->id) }}"
                                    class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('admin.guest.destroy', $guest->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this guest?')" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                        @endforeach
                    </tr>


                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection


@push('styles')

<style>
    .table {
        font-size: 13px;
    }

    .table thead th {
        background: #f8fafc;
        color: black !important;
        font-size: 18px !important;
        font-weight: 700;
        padding: 14px 15px !important;
        border-bottom: 1px solid #e5e7eb;
        white-space: nowrap;
    }

    .table tbody td {
        font-size: 15px !important;
        padding: 15px 12px;
        border-bottom: 1px solid #f1f5f9;
        color: #475569;
        white-space: nowrap;
    }

    .table tbody tr:hover {
        background: #fafafa;
    }

    .table tbody td:first-child {
        font-weight: 600;
        color: #1e293b;
    }

    .table .badge {
        font-size: 11px;
        padding: 6px 9px;
        border-radius: 6px;
    }
</style>

@endpush