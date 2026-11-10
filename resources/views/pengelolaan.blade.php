@extends('layouts.app')
@section('title', 'Pengelolaan')
@section('content')
<h1>Pengelolaan Laundry</h1>
<p>Daftar layanan dan informasi pesanan laundry.</p>
<div class="card">
    <h2>Daftar Layanan Laundry</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Layanan</th>
                <th>Harga / Kg</th>
                <th>Estimasi Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service['name'] }}</td>
                <td>
                    Rp{{ number_format($service['price'], 0, ',', '.') }}
                </td>
                <td>{{ $service['duration'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card">
    <h2>Daftar Pesanan</h2>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Pelanggan</th>
                <th>Layanan</th>
                <th>Berat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order['code'] }}</td>
                <td>{{ $order['customer'] }}</td>
                <td>{{ $order['service'] }}</td>
                <td>{{ $order['weight'] }}</td>
                <td>{{ $order['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
