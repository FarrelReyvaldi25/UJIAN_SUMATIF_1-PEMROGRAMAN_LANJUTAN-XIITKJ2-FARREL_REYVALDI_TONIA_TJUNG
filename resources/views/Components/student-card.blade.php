<div class="bg-white p-4 rounded-xl shadow-md border hover:border-blue-500 transition-all">
    <div class="flex items-center space-x-4">
        <img src="{{ $foto }}" alt="{{ $nama }}" class="w-14 h-14 rounded-full object-cover">
        <div>
            <h2 class="text-lg font-semibold">{{ $nama }}</h2>
            <p class="text-sm text-gray-500">{{ '@' . $username }}</p>
        </div>
    </div>
    <p class="mt-2 text-gray-600 text-sm">{{ $deskripsi }}</p>
</div>
