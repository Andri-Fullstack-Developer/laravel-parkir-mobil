<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        \App\Models\Admin::insert([
            [
                'name'=>'pegawai',
                'email'=>'pegaiwai@domain.com',
                'password'=>bcrypt('222'),
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            
        ]);
    }
}