<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa tất cả admin hiện có (tùy chọn)
        Admin::truncate();

        // Tạo admin mặc định
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
        ]);

        // Tạo thêm admin khác nếu cần
        Admin::create([
            'name' => 'Manager Admin',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('123123'),
        ]);
    }
}
