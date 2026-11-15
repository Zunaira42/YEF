@extends('admin.layouts.app')

@section('title', 'Create guest')

@section('page-title', 'Create Guest')

@section('page-description', 'Create a new guest.')


@section('content')

<div class="container-fluid">

    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Create Guest</h3>

            <p class="text-muted mb-0">
                Add a new guest.
            </p>
        </div>

        <a href="{{ route('admin.guest.index') }}"
            class="btn btn-light border">

            <i class="bi bi-arrow-left"></i>
            Back to Bookings

        </a>

    </div>


    <div class="dashboard-card">
        <form action="{{ route('admin.guest.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row g-4">

                <!-- NAME -->
                <div class="col-md-6">
                    <label for="name" class="form-label">
                        Name
                    </label>
                    <input type="text" name="name" id="name" class="form-control"
                        placeholder="Enter name" value="{{ old('name') }}" required>


                    @error('name')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>


                {{-- DESIGNATION --}}
                <div class="col-md-6">

                    <label for="designation" class="form-label">
                        Designation
                    </label>

                    <input type="text" name="designation" id="designation" class="form-control"
                        placeholder="Enter designation" value="{{ old('designation') }}" required>

                    @error('designation')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror

                </div>

                {{-- logo img path --}}
                <div class="col-md-6">
                    <label for="logo_image_path" class="form-label">
                        Logo Image
                    </label>
                    <input type="file" name="logo_image_path" id="logo_image_path"
                        class="form-control" accept="image/*" value="{{ old('logo_image_path') }}">

                    @error('logo_image_path')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror

                </div>
                <div class="col-md-6">
                    <label for="guest_type" class="form-label">
                        Guest Type
                    </label>

                    <input
                        type="text"
                        name="guest_type"
                        id="guest_type"
                        class="form-control"
                        placeholder="Enter guest type"
                        value="{{ old('guest_type') }}"
                        required>

                    @error('guest_type')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>


            </div>

    </div>


    {{-- Buttons --}}
    <div class="d-flex justify-content-end gap-2 mt-5">

        <a href="{{ route('admin.guest.index') }}"
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