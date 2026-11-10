<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function processLogin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:50',
        ]);

        return redirect()->route('dashboard', [
            'username' => $validated['username']
        ]);
    }
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengguna');
        $services = [
            ['name' => 'Cuci Kering', 'price' => 7000],
            ['name' => 'Cuci Setrika', 'price' => 10000],
            ['name' => 'Setrika Saja', 'price' => 5000],
            ['name' => 'Laundry Express', 'price' => 15000],
        ];
        $orders = [
            ['code' => 'FW-001', 'customer' => 'Andi', 'service' => 'Cuci Setrika', 'status' => 'Diproses'],
            ['code' => 'FW-002', 'customer' => 'Sinta', 'service' => 'Cuci Kering', 'status' => 'Selesai'],
            ['code' => 'FW-003', 'customer' => 'Budi', 'service' => 'Laundry Express', 'status' => 'Menunggu'],
        ];
        return view('dashboard', compact(
            'username', 'services', 'orders'
        ));
    }
    // Menampilkan halaman Pengelolaan
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Pengguna');
        $services = [
            ['name' => 'Cuci Kering', 'price' => 7000, 'duration' => '1 hari'],
            ['name' => 'Cuci Setrika', 'price' => 10000, 'duration' => '2 hari'],
            ['name' => 'Setrika Saja', 'price' => 5000, 'duration' => '1 hari'],
            ['name' => 'Laundry Express', 'price' => 15000, 'duration' => '6 jam'],
        ];
        $orders = [
            ['code' => 'FW-001', 'customer' => 'Andi', 'service' => 'Cuci Setrika', 'weight' => '3 kg', 'status' => 'Diproses'],
            ['code' => 'FW-002', 'customer' => 'Sinta', 'service' => 'Cuci Kering', 'weight' => '2 kg', 'status' => 'Selesai'],
            ['code' => 'FW-003', 'customer' => 'Budi', 'service' => 'Laundry Express', 'weight' => '1 kg', 'status' => 'Menunggu'],
        ];
        return view('pengelolaan', compact(
            'username', 'services', 'orders'
        ));
    }
    // Menampilkan halaman Profil
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengguna');
        return view('profile', compact('username'));
    }
}
