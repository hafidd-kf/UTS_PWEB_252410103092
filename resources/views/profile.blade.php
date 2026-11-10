@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<h1>Profile Pengguna</h1>
<div class="card" style="max-width:600px">
    <h2>Informasi Akun</h2>
    <p>Nama Pengguna:</p>
    <h3>{{ $username }}</h3>
    <hr>
    <p>Username:</p>
    <h3>{{ $username }}</h3>
    <hr>
    <p>Status Akun:</p>
    <span style="color:green">Aktif</span>
    <hr>
    <p>Aplikasi:</p>
    <strong>FreshWash Laundry Management System</strong>
</div>
@endsection
