<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ambilantrian;
use App\Models\User;
use App\Models\Antrian;
use App\Models\Layanan;
use App\Models\Persyaratan;
use App\Models\SubLayanan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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

		Antrian::create([
			'nama_antrian' 	=> 'Kartu Keluarga',
			'kode'         	=> 'KK',
			'slug'         	=> 'antrian-kartu-keluarga',
			'batas_antrian' => 20,
			'deskripsi'    	=> 'Ambil antrian untuk mengurus Kartu Keluarga',
			'user_id'      	=> 1,
		]);

		Antrian::create([
			'nama_antrian' 	=> 'E-KTP',
			'kode'         	=> 'KTP',
			'slug'         	=> 'antrian-e-ktp',
			'batas_antrian' => 20,
			'deskripsi'    	=> 'Ambil antrian untuk mengurus E-KTP',
			'user_id'      	=> 1,
		]);

		Antrian::create([
			'nama_antrian' 	=> 'KIA',
			'kode'         	=> 'KIA',
			'slug'         	=> 'antrian-kia',
			'batas_antrian' => 20,
			'deskripsi'    	=> 'Ambil antrian untuk mengurus KIA',
			'user_id'      	=> 1,
		]);

		Antrian::create([
			'nama_antrian' 	=> 'Akta',
			'kode'         	=> 'AKT',
			'slug'         	=> 'antrian-akta',
			'batas_antrian' => 20,
			'deskripsi'    	=> 'Ambil antrian untuk mengurus Akta',
			'user_id'      	=> 1,
		]);

		Antrian::create([
			'nama_antrian' 	=> 'Surat Pindah',
			'kode'         	=> 'SP',
			'slug'         	=> 'antrian-surat-pindah',
			'batas_antrian' => 20,
			'deskripsi'    	=> 'Ambil antrian untuk mengurus Surat Pindah',
			'user_id'      	=> 1,
		]);

		Layanan::create([
			'antrian_id' 	=> 1,
			'nama_layanan' 	=> 'Pembaharuan KK',
			'user_id'      	=> 1
		]);

		Layanan::create([
			'antrian_id' 	=> 1,
			'nama_layanan' 	=> 'Penambahan Anak',
			'user_id'      	=> 1
		]);

		Layanan::create([
			'antrian_id' 	=> 2,
			'nama_layanan' 	=> 'Penerbitan E-KTP',
			'user_id'      	=> 1
		]);

		Layanan::create([
			'antrian_id' 	=> 3,
			'nama_layanan' 	=> 'Penerbitan KIA',
			'user_id'      	=> 1
		]);

		Layanan::create([
			'antrian_id' 	=> 4,
			'nama_layanan' 	=> 'Akta Kelahiran',
			'user_id'      	=> 1
		]);

		Layanan::create([
			'antrian_id' 	=> 5,
			'nama_layanan' 	=> 'Pindah Datang WNI',
			'user_id'      	=> 1
		]);

		Persyaratan::create([
			'antrian_id'	=> 1,
			'layanan_id' 	=> 1,
			'persyaratan'	=> 'Kartu Keluarga (KK) asli',
		]);

		Persyaratan::create([
			'antrian_id'	=> 1,
			'layanan_id' 	=> 1,
			'persyaratan'	=> 'Fotocopy Surat Nikah/Akte Perkawian',
		]);

		Persyaratan::create([
			'antrian_id'	=> 1,
			'layanan_id' 	=> 1,
			'persyaratan'	=> 'Fotocopy Ijazah',
		]);

		Persyaratan::create([
			'antrian_id'	=> 1,
			'layanan_id' 	=> 1,
			'persyaratan'	=> 'Biodata Penduduk (F1-01)',
		]);

		Persyaratan::create([
			'antrian_id'	=> 1,
			'layanan_id' 	=> 1,
			'persyaratan'	=> 'Keterangan Golongan Darah',
		]);

		User::create([
			'nik'       	=> 1234567891011123,
			'tempat_lahir'  => 'jeneponto',
			'tanggal_lahir' => Carbon::create('1995', '10', '26'),
			'jenis_kelamin' => 'laki-laki',
			'alamat'      	=> 'jl. pahlawan',
			'desa'      	=> 'empoang',
			'kec'      		=> 'binamu',
			'pekerjaan'     => 'admin',
			'name'      	=> 'Admin',
			'email'     	=> 'admin@gmail.com',
			'password'  	=> bcrypt('1234'),
			'roles'     	=> 'admin'
		]);
	}
}
