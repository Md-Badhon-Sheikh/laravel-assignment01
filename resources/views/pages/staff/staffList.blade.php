 @extends('admin')
 @section('content')
 <!-- Create Button -->
 <div class="d-flex justify-content-end mt-1 mx-5">
     <a href="/addStaff" class="btn btn-success px-4 py-2 text-white">Create New Post</a>
 </div>

 <!-- Table -->
 <div class="table-responsive mt-3 border rounded bg-white">
     <table class="table table-bordered table-striped align-middle text-center">
         <thead class="table-dark">
             <tr>
                <th>Id</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Phone</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             @foreach($posts as $key => $post)
             <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$post->name}}</td>
                 <td>{{$post->position}}</td>
                 <td>{{$post->email}}</td>
                 <td>
                     <img src="images/{{$post->image}}" alt="Photo" class="rounded-circle" width="50" height="50">
                 </td>
                 <td>{{$post->phone}}</td>
                 <td>
                     <!-- You can add Edit/Delete buttons here -->
                     <div class="d-flex gap-2 justify-content-center">
                         <!-- Example -->
                         <a href="{{route('edit', $post->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{route('delete', $post->id)}}" class="btn btn-sm btn-danger">Delete</a>
                     </div>
                 </td>
             </tr>
             @endforeach
         </tbody>
     </table>
 </div>


 @endsection