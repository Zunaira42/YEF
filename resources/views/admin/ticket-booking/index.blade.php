@extends('admin.layouts.app')

@section('title', 'Ticket Bookings')

@section('page-title', 'Ticket Bookings')

@section('page-description', 'View and manage all ticket bookings.')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-1">Ticket Bookings</h3>
            <p class="text-muted mb-0">
                View and manage all ticket bookings.
            </p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            New Booking
        </a>
    </div>
    <div class="dashboard-card">
        <div class="card-header-custom">
            <div>
                <h5>All Bookings</h5>
                <span>
                    List of ticket bookings
                </span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                </thead>

                <tbody>

                    {{-- Static demo rows for now --}}

                    <tr>
                        <td>1</td>
                        <td>#TB-1001</td>
                        <td>John Doe</td>
                        <td>New York</td>
                        <td>Boston</td>
                        <td>31 Aug 2026</td>
                        <td>A12</td>
                        <td>$120</td>
                        <td>
                            <span class="badge bg-success">
                                Confirmed
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">

                                <a href="#"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="#"
                                    class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <a href="#"
                                    class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>2</td>
                        <td>#TB-1002</td>
                        <td>Sarah Smith</td>
                        <td>Chicago</td>
                        <td>Detroit</td>
                        <td>02 Sep 2026</td>
                        <td>B05</td>
                        <td>$95</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                Pending
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">

                                <a href="#"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="#"
                                    class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <a href="#"
                                    class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>3</td>
                        <td>#TB-1003</td>
                        <td>Michael Brown</td>
                        <td>Dallas</td>
                        <td>Houston</td>
                        <td>05 Sep 2026</td>
                        <td>C08</td>
                        <td>$75</td>
                        <td>
                            <span class="badge bg-danger">
                                Cancelled
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">

                                <a href="#"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="#"
                                    class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <a href="#"
                                    class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </div>
                        </td>
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
        color: #64748b;
        font-size: 12px;
        font-weight: 700;
        padding: 14px 12px;
        border-bottom: 1px solid #e5e7eb;
        white-space: nowrap;
    }

    .table tbody td {
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