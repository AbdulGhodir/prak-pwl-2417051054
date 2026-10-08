@extends('layouts.app')

@section('content')

<div class="flex-1 p-8 flex items-center">
    <div class="w-1/3 mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        <div class="bg-gray-800 px-8 py-8">
            <h1 class="text-white text-xl font-semibold">Edit Mata Kuliah</h1>
        </div>
    
    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" class="px-8 py-6 gap-5 flex flex-col">
        @csrf
        @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="nama_mk">Nama Matkul</label>
                <input type="text" id="nama_mk" name="nama_mk" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-400" required value="{{ $mk->nama_mk }}"><br><br>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="sks">SKS</label>
                <input type="number" id="sks" name="sks" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-400" required value="{{ $mk->sks }}"><br><br>
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full bg-gray-800 text-white font-bold py-2 px-6 rounded hover:bg-gray-700 text-sm">Submit</button>
            </div>
        </form>

        </div>
    </div>
</div>
@endsection