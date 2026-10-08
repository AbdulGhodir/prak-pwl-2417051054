@extends('layouts.app')
@section('content')
<div class="flex-1 p-8 flex items-center">
    <div class="w-1/2 mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        <div class="bg-gray-800 px-8 py-8 flex justify-between items-center">
            <h1 class="text-white text-xl font-semibold">Daftar Pengguna</h1>
            <a href="{{ route('user.create') }}" class="bg-white text-gray-800 hover:bg-gray-200 font-bold py-2 px-4 rounded text-sm">Tambah Pengguna</a>
        </div>
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="px-8 py-3">ID</th>
                    <th class="px-8 py-3">Nama</th>
                    <th class="px-8 py-3">NPM</th>
                    <th class="px-8 py-3">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-b {{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-blue-50">
                    <td class="px-8 py-3">{{ $user->id }}</td>
                    <td class="px-8 py-3">{{ $user->nama }}</td>
                    <td class="px-8 py-3">{{ $user->nim }}</td>
                    <td class="px-8 py-3">{{ $user->nama_kelas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection