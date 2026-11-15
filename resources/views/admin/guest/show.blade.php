@extends('admin.layouts.app')

@section('title', 'Guest Details')

@section('page-title', 'Guest Details')

@section('page-description', 'View guest information.')

@section('content')

<div class="container-fluid">

    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Guest Details</h3>
            <p class="text-muted mb-0">
                View complete guest information.
            </p>
        </div>

        <div class="d-flex gap-2">

            <a href="{{ route('admin.guest.index') }}"
                class="btn btn-light border">
                <i class="bi bi-arrow-left"></i>
                Back
            </a>

            <a href="{{ route('admin.guest.edit', $guest->id) }}"
                class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Edit Guest
            </a>

        </div>

    </div>


    {{-- Guest Details Table --}}
    <div class="dashboard-card">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h4 class="mb-1 fw-bold">
                    <i class="bi bi-person-lines-fill me-2 text-orange"></i>
                    Guest Information
                </h4>

                <p class="text-muted mb-0">
                    Complete details of the selected guest.
                </p>
            </div>

            <span class="guest-status">
                Guest #{{ $guest->id }}
            </span>

        </div>


        <div class="table-responsive">

            <table class="table guest-details-table align-middle">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Guest Name</th>
                        <th>Designation</th>
                        <th>Guest Type</th>
                        <th>Logo Image</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>

                        {{-- ID --}}
                        <td>
                            <span class="id-badge">
                                #{{ $guest->id }}
                            </span>
                        </td>


                        {{-- Name --}}
                        <td>
                            <div class="designation-text text-center">
                                <strong>
                                    {{ $guest->name ?? 'N/A' }}
                                </strong>
                            </div>
                        </td>


                        {{-- Designation --}}
                        <td>
                            <span class="designation-text">
                                {{ $guest->designation ?? 'N/A' }}
                            </span>
                        </td>


                        {{-- Guest Type --}}
                        <td>
                            <span class="guest-type-badge">
                                {{ $guest->guest_type ?? 'N/A' }}
                            </span>
                        </td>


                        {{-- Logo Image --}}
                        <td>

                            @if($guest->logo_image_path)

                            <div class="guest-logo">
                                <img
                                    src="{{ asset('storage/' . $guest->logo_image_path) }}"
                                    alt="{{ $guest->name }}">
                            </div>

                            @else

                            <span class="text-muted">
                                <i class="bi bi-image me-1"></i>
                                No Image
                            </span>

                            @endif

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
    .text-orange {
        color: #f05c2f;
    }

    .dashboard-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 25px;
        border: 1px solid #eef0f3;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.03);
        height: fit-content !important;
    }

    .guest-status {
        background: #fff0e9;
        color: #f05c2f;
        padding: 8px 15px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
    }

    .guest-details-table {
        margin-bottom: 0;
        min-width: 750px;
        border-collapse: separate;
        border-spacing: 0;
    }

    .guest-details-table thead th {
        background: #f8fafc;
        color: #64748b;
        font-size: 16px !important;
        text-align: center;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        padding: 17px 15px;
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
        white-space: nowrap;
    }

    .guest-details-table tbody td {
        padding: 22px 15px;
        border-bottom: 1px solid #edf0f4;
        color: #334155;
        font-size: 14px;
    }

    .guest-details-table tbody tr {
        transition: 0.2s ease;
    }

    .guest-details-table tbody tr:hover {
        background: #fffaf8;
    }

    .guest-details-table tbody tr:last-child td {
        border-bottom: none;
        text-align: center;
    }

    .id-badge {
        background: #f1f5f9;
        color: #475569;
        padding: 7px 12px;
        border-radius: 7px;
        font-weight: 700;
        font-size: 13px;
        text-align: center;
    }

    .guest-name-cell {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .guest-avatar {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: #fff0e9;
        color: #f05c2f;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        flex-shrink: 0;
    }

    .guest-name-cell strong {
        display: block;
        color: #1e293b;
        font-size: 14px;
        font-weight: 700;
    }

    .guest-name-cell small {
        display: block;
        color: #94a3b8;
        font-size: 12px;
        margin-top: 3px;
    }

    .designation-text {
        color: #475569;
        font-weight: 500;
        font-size: 16px;
    }

    .guest-type-badge {
        display: inline-block;
        background: #fff0e9;
        color: #e65c32;
        padding: 7px 13px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        white-space: nowrap;
    }

    .guest-logo {
        width: 75px;
        height: 60px;
        padding: 5px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 9px;
        display: flex;
        margin: auto;
        align-items: center;
        justify-content: center;
    }

    .guest-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .guest-table-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #edf0f4;
        margin-top: 10px;
        padding-top: 18px;
        color: #64748b;
        font-size: 13px;
    }

    .guest-table-footer i {
        color: #16a34a;
    }

    .btn-primary {
        background: #f05c2f;
        border-color: #f05c2f;
    }

    .btn-primary:hover {
        background: #d94d2b;
        border-color: #d94d2b;
    }

    @media(max-width: 767px) {

        .dashboard-card {
            padding: 15px;
        }

        .guest-table-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

    }
</style>

@endpush
```