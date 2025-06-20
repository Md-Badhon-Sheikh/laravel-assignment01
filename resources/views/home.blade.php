<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">daisyUI</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Home</a></li>

                <li><a>About</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a href="login" class="mx-12 bg-green-700 px-4 py-1 rounded font-semibold text-white">login</a>
        </div>
    </div>


 <!-- Table -->
<div class="overflow-x-auto mt-5 mx-5 rounded-lg border border-gray-200 bg-white shadow">
    <table class="min-w-full divide-y divide-gray-200 text-center">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase">Id</th>
                <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase">Name</th>
                <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase">Position</th>
                <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase">Email</th>
                <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase">Image</th>
                <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase">Phone</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($posts as $key => $post)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 text-sm text-gray-700 font-medium">{{ $key + 1 }}</td>
                <td class="px-6 py-4 text-sm text-gray-700">{{ $post->name }}</td>
                <td class="px-6 py-4 text-sm text-gray-700">{{ $post->position }}</td>
                <td class="px-6 py-4 text-sm text-gray-700">{{ $post->email }}</td>
                <td class="px-6 py-4">
                    <img src="{{ asset('images/'.$post->image) }}" alt="Photo" class="w-12 h-12 rounded-full mx-auto object-cover">
                </td>
                <td class="px-6 py-4 text-sm text-gray-700">{{ $post->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>

</html>