@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-xl shadow-md p-8 text-center max-w-2xl mx-auto">
        <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">

        <p class="text-gray-500 text-sm mb-1">
            @{{ $student['username'] }}
        </p>

        <h2 class="text-2xl font-semibold mb-1">
            {{ $student['nama'] }} ✍️
        </h2>

        <p class="text-gray-600 font-medium mb-1">
            {{ $student['kelas'] }} | {{ $student['hobi'] }}
        </p>

        <p class="text-gray-700 mt-2 mb-6">
            {{ $student['deskripsi'] }}
        </p>

        <div class="flex justify-center gap-4">
            <a href="#" class="bg-gray-200 px-4 py-2 rounded-md hover:bg-gray-300 transition">Edit Profile</a>
            <a href="#" class="bg-gray-200 px-4 py-2 rounded-md hover:bg-red-300 transition">Delete Account</a>
        </div>
    </div>
@endsection
