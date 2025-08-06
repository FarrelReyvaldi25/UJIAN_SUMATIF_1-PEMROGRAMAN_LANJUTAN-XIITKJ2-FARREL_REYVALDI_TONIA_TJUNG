@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Daftar Siswa</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
        @foreach ($students)
            <x-student-card
                :nama="$students['nama']"
                :username="$students['username']"
                :deskripsi="$students['deskripsi']"
                :foto="$students['foto']"
            />
        @endforeach
    </div>
@endsection
