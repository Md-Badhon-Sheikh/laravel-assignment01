@extends('admin')
@section('content')


<div class="container my-5">
    <form action="{{route('update', $ourPost->id)}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="border border-success p-4 rounded">
            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name</label>
                <input type="text" name="name" value="{{$ourPost->name}}" class="form-control ">

            </div>
            <div class="mb-3">
                <label for="position" class="form-label fw-semibold">Position</label>
                <input type="text" name="position" value="{{$ourPost->position}}" class="form-control ">

            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" name="email" value="{{$ourPost->email}}" class="form-control ">

            </div>

            {{-- Image --}}
            <div class="mb-3">
                <label for="image" class="form-label fw-semibold">Image</label>
                <input type="file" value="{{$ourPost->image}}" name="image" class="form-control ">

            </div>

            <div class="mb-3">
                <label for="phone" class="form-label fw-semibold">Phone</label>
                <input type="text" name="phone" value="{{$ourPost->phone}}" class="form-control ">

            </div>

            {{-- Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-success fw-semibold w-100">Update</button>
            </div>
        </div>
    </form>
</div>


@endsection