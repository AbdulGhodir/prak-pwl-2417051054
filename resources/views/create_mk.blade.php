@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Buat Mata Kuliah Baru</h1>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <label for="nama_mk">Nama Mata Kuliah:</label><br>
        <input type="text" id="nama_mk" name="nama_mk" class="border border-black" required><br><br>

        <label for="sks">SKS:</label><br>
        <input type="number" id="sks" name="sks" class="border border-black" required><br><br>

        <button type="submit" class="border border-black">Submit</button>
    </form>
</div>
@endsection