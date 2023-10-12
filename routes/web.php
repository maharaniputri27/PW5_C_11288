<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
    });
    Route::get('/dashboard', function () {
    return view('Dashboard');
    });
    Route::get('/gyms', function () {
        return view('Gyms/index', [
            'kelas' => [
                [
                    'no' => 1,
                    "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
                    "nama" => "Body Combat",
                    'instruktur' => 'Jolly',
                    'ruang' => 'Kelas A',
                    'rating' => '5'
                ],
                [
                    'no' => 2,
                    'gambar' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/dc/83/bc.jpg',
                    'nama' => 'Bungee ',
                    'instruktur' => 'Agung',
                    'ruang' => 'Kelas B',
                    'rating' => '3',
                ],
                [
                    'no' => 3,
                    'gambar' => 'https://fitbod.me/wp-content/uploads/2021/07/yoga-and-the-gym-on-the-same-day.jpg',
                    'nama' => 'Yogalates ',
                    'instruktur' => 'Raka',
                    'ruang' => 'Kelas C',
                    'rating' => '4',
                ],
                [
                    'no' => 4,
                    'gambar' => 'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg',
                    'nama' => 'Boxing ',
                    'instruktur' => 'Tebri',
                    'ruang' => 'Kelas D',
                    'rating' => '5',
                ],
                
              ],

              'promo' => [
                [
                  'judul' => 'Promo Kelas Reguler',
                  'jenis' => "Kelas Reguler",
                  'minPem' => "Rp 3.000.000",
                  'bonus' => "Rp 300.000",
                  'isiPromo' => "Setiap Deposit Rp 3.000.000,- Mendapat bonus deposit Rp 300.000,-"

                ],
                 [
                  'judul' => 'Promo Kelas Paket 1',
                  'jenis' => "Kelas Paket",
                  'minPem' => "5",
                  'bonus' => "gratis 1 kelas",
                  'isiPromo' => "Bayar 5 sesi gratis 1. Berlaku 1 bulan sejak pembayaran."

                ],
                 [
                  'judul' => 'Promo Kelas Paket 2',
                  'jenis' => "Kelas Paket",
                  'minPem' => "10",
                  'bonus' => "gratis 3 kelas",
                  'isiPromo' => "Bayar 10 sesi gratis 3. Berlaku 2 bulan sejak pembayaran."
                ],

              ]
        ]);
    });

     Route::get('/tampilanPresensi', function () {
    return view('Gyms/presensi',[
        'isian'=>[
            [
                'instruktur' => 'Maharani',
                'judul' => 'Body Combat',
                'ruang' => 'Kelas A',
                'gambar' => 'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg',
                'total' => "6",
                'rating' => '4',
                'kode' => '210711288',

            ]
            ],
            'member' =>[
                [
                  'judul' => 'Jaehyun 1',
                  'email' => 'email1@.com ' ,
                  'NoTelp' => '123',
                  'jenisKartu' => 'Gold',
                  'metode' => 'Deposit Kelas',
                  'gambar' => 'https://i.pinimg.com/564x/63/73/6d/63736d1289e987d59fa14107f7412bbf.jpg'
                ],
                  [
                  'judul' => 'Jaehyun 2',
                  'email' => 'email2@.com ' ,
                  'NoTelp' => '122',
                  'jenisKartu' => 'Silver',
                  'metode' => 'Deposit Uang',
                  'gambar' => 'https://i.pinimg.com/564x/63/73/6d/63736d1289e987d59fa14107f7412bbf.jpg'
                ],
                  [
                  'judul' => 'Jaehyun 3',
                  'email' => 'email3@.com ' ,
                  'NoTelp' => '133',
                  'jenisKartu' => 'Black',
                  'metode' => 'Deposit Kelas',
                  'gambar' => 'https://i.pinimg.com/564x/63/73/6d/63736d1289e987d59fa14107f7412bbf.jpg'
                ],
                  [
                  'judul' => 'Jaehyun 4',
                  'email' => 'email4@.com ' ,
                  'NoTelp' => '144',
                  'jenisKartu' => 'Black',
                  'metode' => 'Deposit Uang',
                  'gambar' => 'https://i.pinimg.com/564x/63/73/6d/63736d1289e987d59fa14107f7412bbf.jpg'
                ],
                [
                  'judul' => 'Jaehyun 5',
                  'email' => 'email5@.com ' ,
                  'NoTelp' => '155',
                  'jenisKartu' => 'Gold',
                  'metode' => 'Deposit Kelas',
                  'gambar' => 'https://i.pinimg.com/564x/63/73/6d/63736d1289e987d59fa14107f7412bbf.jpg'
                ],
                [
                  'judul' => 'Jaehyun 6',
                  'email' => 'email6@.com ' ,
                  'NoTelp' => '166',
                  'jenisKartu' => 'Silver',
                  'metode' => 'Deposit Uang',
                  'gambar' => 'https://i.pinimg.com/564x/63/73/6d/63736d1289e987d59fa14107f7412bbf.jpg'
                ],
            ]
    ]);

    });