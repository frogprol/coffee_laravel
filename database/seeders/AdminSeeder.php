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
     *
     * @return void
     */
    public function run()
    {
        // Admin это новая модель из списка моделей
        $admin = new Admin();
        $admin->login = 'qwerty';
        $admin->password = Hash::make('123456');
        $admin->save();
    }
}
