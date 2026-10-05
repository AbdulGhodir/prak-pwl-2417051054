@extends('layouts.app')

@section('content')
<div class="flex-1 bg-gray-100 p-8 flex items-center">
    <div class="w-1/3 mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        <div class="bg-gray-800 px-8 py-8">
            <h1 class="text-white text-xl font-semibold">Buat Pengguna Baru</h1>
        </div>

        <form action="{{ route('user.store') }}" method="POST" class="px-8 py-6 gap-5 flex flex-col">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">NPM</label>
                <input type="text" name="npm" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                <select name="kelas_id" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-400">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-2">
                <button type="submit" class="bg-gray-800 text-white font-bold py-2 px-6 rounded hover:bg-gray-700 text-sm">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection