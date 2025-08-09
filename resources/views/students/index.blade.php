
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        @foreach($students as $student)
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="font-semibold">{{ $student['nama'] }}</h2>
                <p class="text-gray-500">{{ '@'.$student['username'] }}</p>
                <p>{{ $student['deskripsi'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
