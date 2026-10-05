@extends('layouts.app')

@section('content')

<h1>Edit Buku</h1>

<form action="{{ route('books.update', $book) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Judul</label>
    <input
        type="text"
        name="title"
        value="{{ old('title', $book->title) }}"
    >

    @error('title')
        <p class="error">{{ $message }}</p>
    @enderror


    <label>Penulis</label>
    <input
        type="text"
        name="author"
        value="{{ old('author', $book->author) }}"
    >

    <label>ISBN</label>

    <input
        type="text"
        name="isbn"
        value="{{ old('isbn', $book->isbn) }}"
    >

    @error('isbn')
        <p class="error">{{ $message }}</p>
    @enderror

    @error('author')
        <p class="error">{{ $message }}</p>
    @enderror


    <label>Tahun</label>
    <input
        type="number"
        name="year"
        value="{{ old('year', $book->year) }}"
    >

    @error('year')
        <p class="error">{{ $message }}</p>
    @enderror


    <button type="submit">
        Update
    </button>

</form>

<a href="{{ route('books.index') }}">
    Kembali
</a>

@endsection