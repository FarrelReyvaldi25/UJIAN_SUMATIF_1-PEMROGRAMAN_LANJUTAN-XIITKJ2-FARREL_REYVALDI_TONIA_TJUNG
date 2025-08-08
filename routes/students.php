<?php

use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return view('students.index');
});

Route::get('/students/{id}', function ($id) {
    $students = [
        ['id' => 1, 'username' => 'andi_tkj', 'nama' => 'Andi Pratama', 'kelas' => '12 TKJ 1', 'hobi' => 'Futsal', 'foto' => 'https://placehold.co/200x200', 'deskripsi' => 'Senang olahraga'],
        ['id' => 2, 'username' => 'bella_code', 'nama' => 'Bella Arumsari', 'kelas' => '12 TKJ 1', 'hobi' => 'Ngoding', 'foto' => 'https://placehold.co/200x200', 'deskripsi' => 'Suka ngoding'],
    ];

    $student = collect($students)->firstWhere('id', (int) $id);
    if (!$student) abort(404);

    return view('students.show', compact('student'));
});
