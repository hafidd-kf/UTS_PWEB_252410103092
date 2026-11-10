@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<h1>Dashboard</h1>
<p>Selamat datang, <strong>{{ $username }}</strong>!</p>
<p>Berikut ringkasan informasi laundry.</p>
<div class="grid">
    <div class="card">
        <p>Jumlah Layanan</p>
        <div class="stat">{{ count($services) }}</div>
    </div>
    <div class="card">
        <p>Total Pesanan</p>
        <div class="stat">{{ count($orders) }}</div>
    </div>
    <div class="card">
        <p>Pesanan Diproses</p>
        <div class="stat">
            {{ collect($orders)->where('status', 'Diproses')->count() }}
        </div>
    </div>
    <div class="card">
        <p>Pesanan Selesai</p>
        <div class="stat">
            {{ collect($orders)->where('status', 'Selesai')->count() }}
        </div>
    </div>
</div>
<div class="card">
    <h2>Daftar Pesanan Terbaru</h2>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Pelanggan</th>
                <th>Layanan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order['code'] }}</td>
                <td>{{ $order['customer'] }}</td>
                <td>{{ $order['service'] }}</td>
                <td>{{ $order['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
