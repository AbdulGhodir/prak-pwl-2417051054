<nav class="bg-gray-800 text-white px-8 py-6 flex justify-between items-center">
    <a href="/" class="text-lg font-bold tracking-wide hover:text-gray-300">PWL-PRAK</a>
    <ul class="flex gap-8 text-sm font-medium">
        <li><a href="{{ route('user.index') }}" class="hover:text-gray-300">List Pengguna</a></li>
        <li><a href="{{ route('user.create') }}" class="hover:text-gray-300">Tambah Pengguna</a></li>
        <li><a href="{{ route('matakuliah.index') }}" class="hover:text-gray-300">List Matkul</a></li>
        <li><a href="/profile" class="hover:text-gray-300">About Me</a></li>
    </ul>
</nav>