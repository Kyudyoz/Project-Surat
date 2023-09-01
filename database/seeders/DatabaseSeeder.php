<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Penduduk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Penduduk::create([
            'nik' => '1234567890',
            'nama' => 'John Doe',
            'nama_ayah' => 'Doe Sr.',
            'alamat' => 'Jl. Contoh No. 123',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2003-01-15',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'pekerjaan' => 'Mahasiswa',
            'role' => 'Warga',
        ]);
        Penduduk::create([
            'nik' => '1234567891',
            'nama' => 'Budi',
            'nama_ayah' => 'Budiono',
            'alamat' => 'Jl. Contoh No. 1231',
            'tempat_lahir' => 'Jambi',
            'tanggal_lahir' => '1990-01-15',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'pekerjaan' => '-',
            'role' => 'Warga',
        ]);
        Penduduk::create([
            'nik' => '1234567892',
            'nama' => 'Eko Prayitno',
            'nama_ayah' => 'Parto',
            'alamat' => 'Jl. Contoh No. 1232',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '1970-07-22',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'pekerjaan' => 'Ketua RT',
            'role' => 'Ketua RT',
        ]);
        Penduduk::create([
            'nik' => '1234567893',
            'nama' => 'Elli',
            'nama_ayah' => 'Anhar',
            'alamat' => 'Jl. Contoh No. 1233',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1983-02-28',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Kristen',
            'pekerjaan' => 'Ibu Rumah Tangga',
            'role' => 'Warga',
        ]);
        Penduduk::create([
            'nik' => '1234567894',
            'nama' => 'Yanti',
            'nama_ayah' => 'Taryo',
            'alamat' => 'Jl. Contoh No. 1234',
            'tempat_lahir' => 'Jambi',
            'tanggal_lahir' => '2002-10-20',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'pekerjaan' => 'Mahasiswa',
            'role' => 'Warga',
        ]);
        Penduduk::create([
            'nik' => '1234567895',
            'nama' => 'Rani',
            'nama_ayah' => 'Ahmad',
            'alamat' => 'Jl. Contoh No. 1235',
            'tempat_lahir' => 'Batam',
            'tanggal_lahir' => '1987-05-21',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'pekerjaan' => 'Bidan',
            'role' => 'Warga',
        ]);
        
    }
}
