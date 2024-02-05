<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class IconMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ///tabel harus diberi "s" c/o icon_menus menjadi icon_menuss
        // \DB::table('users')->insert([
        //     'name' => 'Aris Hadisopiyan',
        //     'email' => 'aris.hadisopiyan@gmail.com',
        //     'password' => Hash::make('24121993'),
        //     'posisi' => 'Website Programmer',
        // ]);
        // \DB::table('categories')->insert([
        //     'name' => 'Alat Olahraga',
        // ]);
        \DB::table('icon_menus')->insert([
            'icon_name' => 'flaticon-030-crayons',
            'name' => 'Crayons',
        ]);
    }
}
