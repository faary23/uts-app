<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'Kode_jenis_barang' => '1',
            'nama' => 'Chana Barca',
            'deskripsi_detail' => 'Ikan jenis ini pertama kali ditemukan oleh warga negara Inggris bernama Francis Hamilton yang tinggal di India sekitar tahun 1822. Meski sudah dijual di pasaran, Francis Hamilton menemukan Channa Barca di sungai Brahmaputra yang berlokasi di daerah Golpara, negara bagian Assam. Diketahui dulunya ikan ini bisa ditemukan di beberapa area Sungai Brahmaputra bahkan ada yang ditemui di Bhutan. Karena memiliki corak yang unik pada tubuh ikan yang satu ini, kini membuat ikan channa barca sangat digemari dan banyak diburu oleh masyarakat India meskipun harus berhadap dengan resiko bilamana tertangkap basah polisi hutan India.
            Pasalnya, hampir setiap tahun, sejumlah masyarakat nekat masuk ke dalam hutan nasional untuk berburu ikan channa barca. Hal itu dilakukan karena upah minimum di India hanya 178 rupee atau setara Rp35.000.',
            'stock' => '2',
            'foto' => 'barca.jpg',
            'harga' => 'Rp. 21.000.000'
        ],
        [
            'Kode_jenis_barang' => '2',
            'nama' => 'Chana Auranti',
            'deskripsi_detail' => 'Channa aurantimaculata merupakan spesies snakehead berukuran sedang dan berwarna-warni. Ikan endemik di sungai Brahmaputra, timur laut India, tepatnya berasal dari wilayah Assam. Ikan gabus ini harus mampu menahan penurunan suhu musiman di bawah tingkat tropis. Pasalnya, suhu air turun drastis di musim dingin yang kering dan akan meningkat saat tropis di musim panas. Bagian atas tubuh berwarna coklat tua sampai hitam dengan 7 atau 8 bercak besar berwarna jingga tidak beraturan. Channa auranti mempunyai 5 pita hitam vertikal lebar yang jelas pada sirip dada dengan bercak hitam di dasarnya. Channa aurantimaculata tidak toleran terhadap spesies sejenisnya, tapi ikan Channa ini bisa hidup bersama dengan spesies lain seperti C. andrao dan C. bleheri dalam ekosistem mikro tidak bersahabat, yang terdiri dari hutan tropis dan monsun kuat.
            ',
            'stock' => '4',
            'foto' => 'auranti.jpg',
            'harga' => 'Rp. 900.000'
        ],
        [
            'Kode_jenis_barang' => '3',
            'nama' => 'Chana Maru',
            'deskripsi_detail' => 'channa maru mempunyai nama latin "channa marulioides", ikan ini merupakan ikan asli perairan indonesia. Habitat ikan channa maru biasanya ditemukan di perairan-perairan sungai gambut di pulau sumatera dan pulau kalimantan. Panjang maksimal ikan ini dapat mencapai lebih dari satu meter, makanan utama channa maru berupa ikan-ikan kecil, serangga, katak dan mamalia kecil. Dalam bahasa inggris ikan ini biasa disebut "Snakehead" atau ikan kepala ular. Pada dasarnya ikan channa maru ini masih sekerabat dengan ikan gabus, ikan toman dan ikan channa pulchra yang sudah dibahas pada artikel sebelumnya. Yang membedakan ikan channa maru dengan jenis channa lainnya adalah adanya corak seperti corak batik yang biasa disebut dengan "bunga", selain corak ada ciri lain yang menbedakan dengan channa jenis lain yaitu adanya "bar" atau garis-garis yang terdapat pada bagian tubuh channa maru.',
            'stock' => '6',
            'foto' => 'maru.jpg',
            'harga' => 'Rp. 750.000'
        ]
        ]);
    }
}
