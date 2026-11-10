@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="card" style="max-width:450px;margin:60px auto">
    <h1>FreshWash</h1>
    <p>Selamat datang di Laundry Management System.</p>
    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <label>Username</label>
        <input
            type="text"
            name="username"
            placeholder="Masukkan username"
            value="{{ old('username') }}"
            required
        >
        @error('username')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn" style="width:100%">
            Login
        </button>
    </form>
</div>
@endsection
