@extends('admin.layouts.app')

@section('title', 'Edit Ticket Booking')

@section('page-title', 'Edit Ticket Booking')

@section('page-description', 'Update an existing ticket booking.')

@section('content')

<div class="container-fluid">

    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Edit Ticket Booking</h3>

            <p class="text-muted mb-0">
                Update an existing ticket booking.
            </p>
        </div>

        <a href="{{ route('admin.ticket-booking.index') }}"
            class="btn btn-light border">
            <i class="bi bi-arrow-left"></i>
            Back to Bookings
        </a>

    </div>


    <div class="dashboard-card">
        <form action="{{ route('admin.ticket-booking.update', $ticketbooking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label">
                            Name
                        </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', $ticketbooking->name) }}">
                        @error('name')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $ticketbooking->email) }}">
                        @error('email')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="number" name="number" class="form-control" value="{{ old('number', $ticketbooking->number) }}">
                        @error('number')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" value="{{ old('city', $ticketbooking->city) }}">
                        @error('city')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="tickets_count" class="form-label">Tickets Count</label>
                        <input type="number" name="tickets_count" class="form-control" value="{{ old('tickets_count', $ticketbooking->tickets_count) }}">
                        @error('tickets_count')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end gap-2 mt-5">

                <a href="{{ route('admin.ticket-booking.index') }}"
                    class="btn btn-light border">
                    Cancel
                </a>
                <button type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-check-lg"></i>
                    Update Booking
                </button>
            </div>
        </form>

    </div>

</div>

@endsection


@push('styles')

<style>
    .form-label {
        font-size: 18px;
        font-weight: 600;
        color: #334155;
        margin-bottom: 8px;
    }

    .form-control {
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 11px 13px;
        font-size: 15px;
        color: #334155;
    }

    .form-control:focus {
        border-color: #f05c2f;
        box-shadow: 0 0 0 3px rgba(240, 92, 47, 0.10);
    }

    .form-control::placeholder {
        color: #94a3b8;
    }

    .btn-primary {
        background: #f05c2f;
        border-color: #f05c2f;
    }

    .btn-primary:hover {
        background: #d94d2b;
        border-color: #d94d2b;
    }
</style>

@endpush