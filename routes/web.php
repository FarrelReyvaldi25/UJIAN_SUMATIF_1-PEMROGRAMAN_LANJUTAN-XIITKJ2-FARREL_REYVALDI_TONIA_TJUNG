<?php

Route::get('/', function () {
    return view('welcome');
});

// Load routes dari file students.php
require __DIR__.'/students.php';

Route::get('/students', function () {
    $students = [
        [
            'id' => 1,
            'username' => 'andi_tkj',
            'nama' => 'Andi Pratama',
            'kelas' => '12 TKJ 1',
            'hobi' => 'Futsal',
            'foto' => 'https://placehold.co/400/png',
            'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
        ],
        [
            'id' => 2,
            'username' => 'bella_code',
            'nama' => 'Bella Arumsari',
            'kelas' => '12 TKJ 1',
            'hobi' => 'Ngoding',
            'foto' => 'https://placehold.co/400/png',
            'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
        ],
        // dst...
    ];

    return view('students.index', ['students' => $students]);
});
