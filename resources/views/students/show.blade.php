@extends('layouts.app')

@section('content')
    <div class="bg-white p-8 rounded-xl shadow-md text-center">
        <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
        <p class="text-gray-500 text-sm">@{{ $student['username'] }}</p>
        <h2 class="text-2xl font-bold">{{ $student['nama'] }}</h2>
        <p class="text-gray-600">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        <p class="mt-4">{{ $student['deskripsi'] }}</p>

        <div class="flex justify-center gap-4 mt-6">
            <a href="#" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Edit Profile</a>
            <a href="#" class="bg-red-200 px-4 py-2 rounded hover:bg-red-300">Delete Account</a>
        </div>
    </div>
@endsection
