@extends('admin.layouts.app')

@section('title', 'Create Ticket Booking')

@section('page-title', 'Create Ticket Booking')

@section('page-description', 'Create a new ticket booking.')

@section('content')

<div class="container-fluid">

    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Create Ticket Booking</h3>

            <p class="text-muted mb-0">
                Add a new ticket booking.
            </p>
        </div>

        <a href="{{ route('admin.ticket-booking.index') }}"
            class="btn btn-light border">

            <i class="bi bi-arrow-left"></i>
            Back to Bookings

        </a>

    </div>


    <div class="dashboard-card">
        <form action="{{ route('admin.ticket-booking.store') }}"
            method="POST">
            @csrf
            <div class="row g-4">
                <div class="col-md-6">
                    <label for="name" class="form-label">
                        Name
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        placeholder="Enter passenger name"
                        value="{{ old('name') }}"
                        required>

                    @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>


                {{-- Email --}}
                <div class="col-md-6">

                    <label for="email" class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Enter email address"
                        value="{{ old('email') }}"
                        required>

                    @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>


                {{-- Phone Number --}}
                <div class="col-md-6">

                    <label for="number" class="form-label">
                        Phone Number
                    </label>

                    <input
                        type="text"
                        name="number"
                        id="number"
                        class="form-control"
                        placeholder="Enter phone number"
                        value="{{ old('number') }}"
                        required>

                    @error('number')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>


                {{-- City --}}
                <div class="col-md-6">

                    <label for="city" class="form-label">
                        City
                    </label>

                    <input
                        type="text"
                        name="city"
                        id="city"
                        class="form-control"
                        placeholder="Enter city"
                        value="{{ old('city') }}"
                        required>

                    @error('city')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>


                {{-- Tickets Count --}}
                <div class="col-md-6">

                    <label for="tickets_count" class="form-label">
                        Number of Tickets
                    </label>

                    <input
                        type="number"
                        name="tickets_count"
                        id="tickets_count"
                        class="form-control"
                        placeholder="Enter number of tickets"
                        value="{{ old('tickets_count', 1) }}"
                        min="1"
                        required>

                    @error('tickets_count')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>

            </div>


            {{-- Buttons --}}
            <div class="d-flex justify-content-end gap-2 mt-5">

                <a href="{{ route('admin.ticket-booking.index') }}"
                    class="btn btn-light border">

                    Cancel

                </a>

                <button type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-check-lg"></i>
                    Create Booking

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