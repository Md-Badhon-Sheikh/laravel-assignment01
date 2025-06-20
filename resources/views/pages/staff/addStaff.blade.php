@extends('admin')
@section('content')


<div class="container my-5">
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="border border-success p-4 rounded">
            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control ">

            </div>
            <div class="mb-3">
                <label for="position" class="form-label fw-semibold">Position</label>
                <input type="text" name="position" value="{{ old('position') }}" class="form-control ">

            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control ">

            </div>

            {{-- Image --}}
            <div class="mb-3">
                <label for="image" class="form-label fw-semibold">Image</label>
                <input type="file" name="image" class="form-control ">

            </div>

            <div class="mb-3">
                <label for="phone" class="form-label fw-semibold">Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control ">

            </div>

            {{-- Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-success fw-semibold w-100">Submit</button>
            </div>
        </div>
    </form>
</div>


@endsection