<p align="center"><img src="public/logo.png" width="400"></p>

## Apa itu Loak.in?

LOAK.IN merupakan sebuah aplikasi berbasis website untuk memanggil tukang loak untuk menjual barang bekas. Selain itu, aplikasi LOAK.IN ini juga menyediakan suatu fitur untuk membeli barang bekas yang sudah di daur ulang. Aplikasi ini diciptakan dengan melihat keadaan masyarakat yang sulit untuk menemukan tukang loak dan menyalurkan barang bekas agar dapat didaur ulang.

Disini kami membuat Loak.in untuk user, driver dan juga admin.

## Fitur apa saja yang ada di Loak.in?

Terdapat dua fitur utama pada Loak.in diantaranya
1. Order Loak.in
Order Loak.in merupakan fitur yang berguna untuk memanggil tukang loak terdekat. Fitur ini bisa digunakan kapan saja dan dimana saja

2. Loak.in Shop 
Loak.in Shop merupakan fitur yang berguna untuk pembelian dan penjualan barang bekas yang masih layak pakai ataupun hasil daur ulang barang bekas.

Sementara fitur lainnya yaitu :
- Activity : Fitur ini berfungsi untuk melakukan tracking pesanan kita baik Order Loak.in maupun Loak.in Shop
- Account : fitur ini dapat melihat profil dari pengguna serta menambahkan alamat untuk melakukan Order Loak.in


## Bagaimana Cara Menjalankan Loak.In?

1. Git clone https://github.com/SI-RPL-2022/SI4304_D_LOAKIN.git
2. php artisan migrate atau php artisan migrate:refresh
3. php artisan db:seed --class=DatabaseSeeder
4. php artisan db:seed --class=UserSeeder
5. php artisan db:seed --class=DriverSeeder
6. composer require barryvdh/laravel-dompdf

*Note : Untuk melihat email dan password driver dan admin dapat di cek di database ya!

## Flowchart Loak.In

Berikut merupakan flow saat user melakukan Order Loak.in

<p align="center"><img src="https://drive.google.com/uc?export=view&id=1K9FPscJWoHZGUgctrhvVPcIn6Lz7ikfm" width="400"></p>


Berikut merupakan flow saat user malakukan pembelian barang di loak.in shop

<p align="center"><img src="https://drive.google.com/uc?export=view&id=1xZVcJ5tncuBikZSFMfSoYGy96CdLz29v" width="400"></p>

## Design System

Berikut merupakan beberapa design system yang digunakan 

<p align="center"><img src="https://drive.google.com/uc?export=view&id=1NXmDWLUdNPmRmGc3V6Y_-mo-DNuJ8NyZ" width="1000"></p>

## Figma Prototype

Berikut merupakan link figma yang digunakan

<p>Link Figma : <a href="https://www.figma.com/file/LyOc2PdEPCIPduiADECwaX/LOAK.IN?node-id=1446%3A529" target="_blank">https://www.figma.com/file/LyOc2PdEPCIPduiADECwaX/LOAK.IN?node-id=1446%3A529</a></p>

