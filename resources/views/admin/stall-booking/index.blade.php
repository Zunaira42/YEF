@extends('admin.layouts.app')
@section('title', 'stall Bookings')
@section('page-title', 'stall Bookings')
@section('page-description', 'View and manage all stall bookings.')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-1">stall Bookings</h3>
            <p class="text-muted mb-0">
                View and manage all stall bookings.
            </p>
        </div>
        <a href="{{ route('admin.stall-booking.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            New Booking
        </a>
    </div>
    <div class="dashboard-card">
        <div class="card-header-custom">
            <div>
                <h5>All Bookings</h5>
                <span>
                    List of stall bookings
                </span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Number</th>
                        <th class="text-center">City</th>
                        <th class="text-center">Total stalls</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($stalls as $stall)
                    <tr>
                        <td class="text-center">{{$stall->id}}</td>
                        <td class="text-center">{{$stall-> name}}</td>
                        <td class="text-center">{{$stall-> email}}</td>
                        <td class="text-center">{{$stall-> number}}</td>
                        <td class="text-center">{{$stall-> city}}</td>
                        <td class="text-center">{{$stall-> stalls_count}}</td>
                        <td class="text-center mx-auto">
                            <div class="d-block gap-2">

                                <a href="{{ route('admin.stall-booking.show', $stall->id) }}"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="{{ route('admin.stall-booking.edit', $stall->id) }}"
                                    class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('admin.stall-booking.destroy', $stall->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this stall booking?')" style="display:inline;">
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