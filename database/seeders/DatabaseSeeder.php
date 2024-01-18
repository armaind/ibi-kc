<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'judul' => 'Pelantikan Pengurus Pusat Ikatan Bidan Indonesia (IBI) Masa Bakti 2023-2028',
            'headline' => 'Pelantikan Pengurus Pusat',
            'thumbnail' => 'images/pelantikan.jpg',
            'kategori' => 'NEWS',
            'tanggal' => '14-01-2024',
            'name' => 'Admin',
            'isi_berita' => 'Dalam menjalankan amanah yang tertuang di AD-ART, maka setelah terpilihnya Ketua Umum Ikatan Bidan Indonesia setelah Kongres IBI ke 17 Tahun 2023, Ketua Umum IBI Pusat Dr. Ade Jubaedah, SSiT, MM, melantik pengurus pusat IBI Periode 2023-2028, pada tanggal 29 November 2023 di Gedung Tribrata Ballroom Dharmawangsa Jakarta.

            Dalam rangka memperkuat sinergitas IBI dengan berbagai stakeholder, maka pengurus IBI Periode 2023-2028 ini adalah bidan yang berasal dari berbagai sektor, antara lain dari fasilitas kesehatan, Institusi Pendidikan, Kementerian Kesehatan, Kemendikbud dan lainnya.
            
            Berdasarkan Riskesdas, Pelayanan Kebidanan 86% diberikan oleh bidan, sehingga menjadikan bidan sebagai profesi yang strategis, maka dengan kepungurusan yang baru, IBI terus berkomitmen mendukung semua pihak, menjadi satu bagian untuk berkolaborasi dengan berbagai profesi dalam menurunkan Angka Kematian Ibu, mengeliminasi praktik-praktik buruk pada perempuan, dan siap mendukung terjadinya transformasi kesehatan di Indonesia.
            
            Pelantikan Pengurus IBI ini dihadiri oleh Kementerian Kesehatan, berbagai perwakilan dari organisasi profesi kesehatan, UNFPA, Global Affair Canada, Yayasan IPAS Indonesia. Dalam kesempatan ini juga Ibu Dr. Ade Jubaedah, SSiT, MM, memohon dukungan kepada semua pihak untuk menguatkan peran bidan dalam berbagai lini.',
        ]);

        // Adding user that has admin roles
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@aibic.com',
            'password' => Hash::make('admin'),
            'roles' => 'ADMIN',
        ]);
        // Adding user that has bidan roles
        DB::table('users')->insert([
            // 'alamatrumah' => 'Jl RA Kartini 26 Ventura Bldg Lt 8,Cilandak Barat',
            // 'telp_rumah' => '0217504417',
            'name' => 'Bidan',
            'username' => 'bidan',
            'email' => 'bidan@aibic.com',
            'password' => Hash::make('bidan'),
            'roles' => 'BIDAN',
        ]);
        // Adding user that has staff roles
        DB::table('users')->insert([
            'name' => 'Koordinator',
            'username' => 'koordinator',
            'email' => 'koordinator@aibic.com',
            'password' => Hash::make('koordinator'),
            'roles' => 'STAFF',
        ]);

        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'WALED',
            'kodepuskesmas' => 'P3209010201',
            'alamatpuskesmas' => 'Jl. Dewi Sartika No. 124 Ds. Waled Kota, Kec. Waled',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'CIBOGO',
            'kodepuskesmas' => 'P3209010202',
            'alamatpuskesmas' => 'Jl. Raya KH Zaenal Arifin Ds. Cibogo No.12, Kec. Waled',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PASALEMAN',
            'kodepuskesmas' => 'P3209011201',
            'alamatpuskesmas' => 'Jl. Cilengkrang Induk- Pasaleman Ds. Pasaleman, Kec. Pasaleman',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'CILEDUG',
            'kodepuskesmas' => 'P3209020201',
            'alamatpuskesmas' => 'Jl. Alun-Alun No.20, Kec. Ciledug',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PABUARAN',
            'kodepuskesmas' => 'P3209021201',
            'alamatpuskesmas' => 'Jl. Pangeran Sutajaya No. 192 Pabuaran Lor, Kec. Pabuaran',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'LOSARI',
            'kodepuskesmas' => 'P3209030101',
            'alamatpuskesmas' => 'Jl. KH Dulngalim Panggangsari, Kec. Losari',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'ASTANALANGGAR',
            'kodepuskesmas' => 'P3209030202',
            'alamatpuskesmas' => 'Jl. Siliwangi Rt. 01/06 Ds. Astana Langgar, Kec. Losari',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'TERSANA',
            'kodepuskesmas' => 'P3209031201',
            'alamatpuskesmas' => 'Jl. Mayjen Sutoyo No.4, Kec. Pabedilan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KALIBUNTU',
            'kodepuskesmas' => 'P3209031202',
            'alamatpuskesmas' => 'Jl. DI Panjaitan Km 5.5 Ds. Kalibuntu, Kec. Pabedilan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'BABAKAN',
            'kodepuskesmas' => 'P3209040201',
            'alamatpuskesmas' => 'Jl. Pangeran Sutajaya No.48, Kec. Babakan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'GEMBONGAN',
            'kodepuskesmas' => 'P3209040202',
            'alamatpuskesmas' => 'Ds. Gembongan, Kec. Babakan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'GEBANG',
            'kodepuskesmas' => 'P3209041201',
            'alamatpuskesmas' => 'Jl. Raya Gebang Km 21 Ds. Gebang Kulon, Kec. Gebang',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KARANG SEMBUNG',
            'kodepuskesmas' => 'P3209050201',
            'alamatpuskesmas' => 'Jl. Raya Karangtengah No.02, Kec. Karangsembung',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KUBANGDELEG',
            'kodepuskesmas' => 'P3209051201',
            'alamatpuskesmas' => 'Jl. Raya Kubangdeleg No.01 Karangwareng, Kec. Karangwareng',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SINDANG LAUT',
            'kodepuskesmas' => 'P3209060101',
            'alamatpuskesmas' => 'Jl. Letjen Mt Haryono No.02 Lemah Abang, Kec. Lemahabang',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SUSUKAN LEBAK',
            'kodepuskesmas' => 'P3209061201',
            'alamatpuskesmas' => 'Jl. Letkol HM Hassan M Yoesoef, Kec. Susukan Lebak',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SEDONG',
            'kodepuskesmas' => 'P3209070201',
            'alamatpuskesmas' => 'Jl. Kapten Mustofa No.06, Kec. Sedong',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'ASTANA JAPURA',
            'kodepuskesmas' => 'P3209080201',
            'alamatpuskesmas' => 'Jl. Raya KH Wahid Hasyim, Kec. Astanajapura',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SIDAMULYA',
            'kodepuskesmas' => 'P3209080202',
            'alamatpuskesmas' => 'Jl. Sidamulya No. 375. Dsa. Sidamulya, Kec. Astanajapura',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PANGENAN',
            'kodepuskesmas' => 'P3209081101',
            'alamatpuskesmas' => 'Jl. Raya Cirebon – Losari Km 17 Ds. Ender, Kec. Pangenan',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'MUNDU',
            'kodepuskesmas' => 'P3209090201',
            'alamatpuskesmas' => 'Jl. Raya Luwung No.32, Kec. Mundu',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'BEBER',
            'kodepuskesmas' => 'P3209100101',
            'alamatpuskesmas' => 'Jl. Jend. Sudirman No.33, Kec. Beber',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KAMARANG',
            'kodepuskesmas' => 'P3209101201',
            'alamatpuskesmas' => 'Jl. Jend. A. Yani No.17, Kec. Greged',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'TALUN',
            'kodepuskesmas' => 'P3209111201',
            'alamatpuskesmas' => 'Jl. Pangeran Cakrabuana Ds. Kecomberan, Kec. Talun',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'CIPERNA',
            'kodepuskesmas' => 'P3209111202',
            'alamatpuskesmas' => 'Ds. Ciperna, Kec. Talun',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SUMBER',
            'kodepuskesmas' => 'P3209120201',
            'alamatpuskesmas' => 'Jl. Pangeran Kejaksaan No.49, Kec. Sumber',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'WATU BELAH',
            'kodepuskesmas' => 'P3209120202',
            'alamatpuskesmas' => 'Jl. Tangkil Gede No. 5 Kel. Watu Belah, Kec. Sumber',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SENDANG',
            'kodepuskesmas' => 'P3209120203',
            'alamatpuskesmas' => 'Jl. Syech Nurjati No. 351, Kec. Sumber',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'DUKU PUNTANG',
            'kodepuskesmas' => 'P3209121101',
            'alamatpuskesmas' => 'Jl. Imam Bonjol Ds. Cikalahang, Kec. Dukupuntang',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SINDANG JAWA',
            'kodepuskesmas' => 'P3209121202',
            'alamatpuskesmas' => 'Jl. Nyi Ageng Serang D. Sindang Jawa Kec. Duku Puntang',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PALIMANAN',
            'kodepuskesmas' => 'P3209130101',
            'alamatpuskesmas' => 'Jl. Otto Iskandardinata No. 07, Kec. Palimanan',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KEPUH',
            'kodepuskesmas' => 'P3209130202',
            'alamatpuskesmas' => 'Jl. Ki Ageng Tepak No.147 Blok Kemadu Kulon, Kec. Palimanan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PLUMBON',
            'kodepuskesmas' => 'P3209140101',
            'alamatpuskesmas' => 'Jl. Raya Plumbon Km.12, Kec. Plumbon',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'LURAH',
            'kodepuskesmas' => 'P3209140202',
            'alamatpuskesmas' => 'Jl. Lurah – Keduanan No. 1, Kec. Plumbon',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'WARUROYOM',
            'kodepuskesmas' => 'P3209141201',
            'alamatpuskesmas' => 'Jl. Warukawung, Kec. Depok',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KARANGSARI',
            'kodepuskesmas' => 'P3209150201',
            'alamatpuskesmas' => 'Jl. Ki Sabalanang No.01, Kec. Weru',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PANGKALAN',
            'kodepuskesmas' => 'P3209151201',
            'alamatpuskesmas' => 'Jl. Nyi Gede Cangkring No. 06, Kec. Plered',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PLERED',
            'kodepuskesmas' => 'P3209151202',
            'alamatpuskesmas' => 'Jl. Otto Iskandardinata No.40 Plered, Kec. Plered',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'ASTAPADA',
            'kodepuskesmas' => 'P3209161201',
            'alamatpuskesmas' => 'Jl. Ki Ageng Tapa Ds. Astapada, Kec. Tengah Tani',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KEDAWUNG',
            'kodepuskesmas' => 'P3209162201',
            'alamatpuskesmas' => 'Jl. Ir H. Juanda No. 248, Kec. Kedawung',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'GUNUNG JATI',
            'kodepuskesmas' => 'P3209171201',
            'alamatpuskesmas' => 'Jl. Sunan Gunung Jati No.56 Ds. Mertasinga, Kec. Gunungjati',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'MAYUNG',
            'kodepuskesmas' => 'P3209171202',
            'alamatpuskesmas' => 'Jl. Ki Gede Mayung No. 36, Kec. Gunungjati',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KEDATON',
            'kodepuskesmas' => 'P3209180201',
            'alamatpuskesmas' => 'Jl. Sunan Gunung Jati Ds Kapetakan, Kec. Kapetakan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SURANENGGALA',
            'kodepuskesmas' => 'P3209181101',
            'alamatpuskesmas' => 'Jl. Raya Sunan Gunungjati DS. Suranenggala, Kec. Suranenggala',
            'jenispuskesmas' => 'Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KLANGENAN',
            'kodepuskesmas' => 'P3209190201',
            'alamatpuskesmas' => 'Jl. Otto Iskandardinata, Kec. Klangenan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'JEMARAS',
            'kodepuskesmas' => 'P3209190202',
            'alamatpuskesmas' => 'Jl. Nyi Mas Endang Geulis No. 88, Kec. Klangenan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'WANGUN HARJA',
            'kodepuskesmas' => 'P3209191201',
            'alamatpuskesmas' => 'Jl. Moh. Ramdan Ds Wangunharja, Kec. Jamblang',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'TEGAL GUBUG',
            'kodepuskesmas' => 'P3209200201',
            'alamatpuskesmas' => 'Jl. Lapangan Bola Ds Tegalgubug, Kec. Arjawinangun',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'PANGURAGAN',
            'kodepuskesmas' => 'P3209201201',
            'alamatpuskesmas' => 'Jl. Nyi Mas Gandasari No. 85, Kec. Panguragan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'CIWARINGIN',
            'kodepuskesmas' => 'P3209210201',
            'alamatpuskesmas' => 'Jl. Raya Ciwaringin No. 35, Kec. Ciwaringin',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'WINONG',
            'kodepuskesmas' => 'P3209211201',
            'alamatpuskesmas' => 'Jl. By Pass Winong – Arjawinangun , Kec. Gempol',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'GEMPOL',
            'kodepuskesmas' => 'P3209211202',
            'alamatpuskesmas' => 'Ds. Gempol, Kec.Gempol',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'SUSUKAN',
            'kodepuskesmas' => 'P3209220201',
            'alamatpuskesmas' => 'Jl. Raya Susukan No.27, Kec. Susukan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'BUNDER',
            'kodepuskesmas' => 'P3209220202',
            'alamatpuskesmas' => 'Jl. Raya By Pass Bunder , Kec. Susukan',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'GEGESIK',
            'kodepuskesmas' => 'P3209230201',
            'alamatpuskesmas' => 'Jl. Gegesik – Arjawinangun No.20, Kec. Gegesik',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'JAGAPURA',
            'kodepuskesmas' => 'P3209230202',
            'alamatpuskesmas' => 'Jl. Raya Jagapura – Arjawinangun, Kec. Gegesik',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
        DB::table('lokasi_puskesmas')->insert([
            'puskesmas' => 'KALIWEDI',
            'kodepuskesmas' => 'P3209231201',
            'alamatpuskesmas' => 'Jl. Ki Gesang No.01 Kaliwedi Lor, Kec. Kaliwedi',
            'jenispuskesmas' => 'Non Rawat Inap',
        ]);
    }
}
