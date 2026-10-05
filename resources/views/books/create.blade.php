@extends('layouts.app')

@section('content')

<h1>Tambah Buku</h1>

<form action="{{ route('books.store') }}" method="POST">

    @csrf

    <label>Judul</label>
    <input
        type="text"
        name="title"
        value="{{ old('title') }}"
    >

    @error('title')
        <p class="error">{{ $message }}</p>
    @enderror

    <label>ISBN</label>

    <input
        type="text"
        name="isbn"
        value="{{ old('isbn') }}"
    >

    @error('isbn')
        <p class="error">{{ $message }}</p>
    @enderror

    <label>Penulis</label>
    <input
        type="text"
        name="author"
        value="{{ old('author') }}"
    >

    @error('author')
        <p class="error">{{ $message }}</p>
    @enderror


    <label>Tahun</label>
    <input
        type="number"
        name="year"
        value="{{ old('year') }}"
    >

    @error('year')
        <p class="error">{{ $message }}</p>
    @enderror


    <button type="submit">
        Simpan
    </button>

</form>

<a href="{{ route('books.index') }}">
    Kembali
</a>

@endsection