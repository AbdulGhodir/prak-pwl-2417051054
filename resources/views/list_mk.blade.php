@extends('layouts.app')
@section('content')
<div class="flex-1 p-8 flex items-center">
    <div class="w-1/2 mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        <div class="bg-gray-800 px-8 py-8 flex justify-between items-center">
            <h1 class="text-white text-xl font-semibold">Daftar Mata Kuliah</h1>
            <a href="{{ route('matakuliah.create') }}" class="bg-white text-gray-800 hover:bg-gray-200 font-bold py-2 px-4 rounded text-sm">Tambah Mata Kuliah</a>
        </div>
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="px-8 py-3">ID</th>
                    <th class="px-8 py-3">Nama Mata Kuliah</th>
                    <th class="px-8 py-3">SKS</th>
                    <th class="px-8 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mks as $mk)
                <tr class="border-b {{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-blue-50">
                    <td class="px-8 py-3 max-w-48">{{ $mk->id }}</td>
                    <td class="px-8 py-3">{{ $mk->nama_mk }}</td>
                    <td class="px-8 py-3">{{ $mk->sks }}</td>
                    <td class="px-8 py-3 flex gap-2 justify-center items-center">
                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
