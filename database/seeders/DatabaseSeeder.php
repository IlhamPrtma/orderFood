<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meja;
use App\Models\Bahan;
use App\Models\Kategori;
use App\Models\Menu;
use App\Models\DetailMenu;
use App\Models\Pesanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data for "meja" table
        Meja::create(['nama' => 'Meja 1']);
        Meja::create(['nama' => 'Meja 2']);
        Meja::create(['nama' => 'Meja 3']);
        // Add more meja records as needed

        // Seed data for "bahan" table
        Bahan::create(['nama' => 'Nutrisari Jeruk', 'jumlah' => 30]);
        Bahan::create(['nama' => 'Nutrisari Cincau', 'jumlah' => 25]);
        Bahan::create(['nama' => 'Good Day Cappuccino', 'jumlah' => 50]);
        Bahan::create(['nama' => 'Kopi Kapal Api', 'jumlah' => 50]);
        Bahan::create(['nama' => 'Susu Kental Manis', 'jumlah' => 10]);
        Bahan::create(['nama' => 'Susu Kental Manis Coklat', 'jumlah' => 15]);
        Bahan::create(['nama' => 'Drink Beng-Beng', 'jumlah' => 25]);
        Bahan::create(['nama' => 'Chocolatos Drink', 'jumlah' => 15]);
        // Add more bahan records as needed

        // Seed data for "kategori" table
        Kategori::create(['nama' => 'Makanan', 'deskripsi' => 'Hidangan yang dirancang untuk memenuhi kebutuhan nutrisi dan energi tubuh']);
        Kategori::create(['nama' => 'Minuman', 'deskripsi' => 'Berbagai jenis minuman yang disajikan untuk menghilangkan dahaga dan memberikan sensasi rasa yang menyegarkan']);
        Kategori::create(['nama' => 'Cemilan', 'deskripsi' => 'Makanan ringan yang biasanya dikonsumsi di antara waktu makan utama']);
        // Add more kategori records as needed

        // Seed data for "menu" table
        Menu::create(['nama' => 'Nasi Telur', 'id_kategori' => 1, 'harga' => 10000.0, 'id_bahan' => null, 'ketersediaan' => true]);
        Menu::create(['nama' => 'Nasi Ayam Bali', 'id_kategori' => 1, 'harga' => 12000.0, 'id_bahan' => null, 'ketersediaan' => true]);
        Menu::create(['nama' => 'Nasi Goreng', 'id_kategori' => 1, 'harga' => 10000.0, 'id_bahan' => null, 'ketersediaan' => true]);
        Menu::create(['nama' => 'Nutrisari Jeruk', 'id_kategori' => 2, 'harga' => 3000.0, 'id_bahan' => 1, 'ketersediaan' => true]);
        Menu::create(['nama' => 'Nutrisari Cincau', 'id_kategori' => 2, 'harga' => 3000.0, 'id_bahan' => 2, 'ketersediaan' => false]);
        Menu::create(['nama' => 'Chocolatos Drink', 'id_kategori' => 2, 'harga' => 3000.0, 'id_bahan' => 8, 'ketersediaan' => true]);
        Menu::create(['nama' => 'Mendoan', 'id_kategori' => 3, 'harga' => 1000.0, 'id_bahan' => null, 'ketersediaan' => false]);
        Menu::create(['nama' => 'Bakwan', 'id_kategori' => 3, 'harga' => 1000.0, 'id_bahan' => null, 'ketersediaan' => true]);
        // Add more menu records as needed

    }
}
