<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ade Chintia Juliawati',
            'username' => 'adejuliawati',
            'email' => 'adejuliawati@gmail.com',
            'password' => bcrypt('password123')
        ]);

        Category::create([
            'name' => 'Wisata Religi',
            'slug' => 'wisata-religi'
        ]);

        Category::create([
            'name' => 'Wisata Alam',
            'slug' => 'wisata-alam'
        ]);

        Category::create([
            'name' => 'Wisata Bahari',
            'slug' => 'wisata-bahari'
        ]);

        Kecamatan::create([
            'name' => 'Beji',
        ]);
        Kecamatan::create([
            'name' => 'Bojongsari',
        ]);
        Kecamatan::create([
            'name' => 'Cilodong',
        ]);
        Kecamatan::create([
            'name' => 'Cimanggis',
        ]);
        Kecamatan::create([
            'name' => 'Cinere',
        ]);
        Kecamatan::create([
            'name' => 'Cipayung',
        ]);
        Kecamatan::create([
            'name' => 'Limo',
        ]);
        Kecamatan::create([
            'name' => 'Pancoran Mas',
        ]);
        Kecamatan::create([
            'name' => 'Sawangan',
        ]);
        Kecamatan::create([
            'name' => 'Sukmajaya',
        ]);
        Kecamatan::create([
            'name' => 'Tapos',
        ]);

        Post::create([
            'title' => 'Taman Bunga Wiladatika',
            'slug' => 'taman-bunga-wiladatika',
            'excerpt' => 'Tempat wisata di Depok pertama yang wajib Anda kunjungi adalah Taman Bunga Wiladatika.',
            'body' => '<p>Tempat wisata di Depok pertama yang wajib Anda kunjungi adalah Taman Bunga Wiladatika. Membentang seluas 15 ha, Taman Bunga Wiladatika merupakan tempat wisata di Depok yang cocok untuk dewasa ataupun keluarga dengan anak-anak.</p> <p>Telah berusia cukup tua karena telah didirikan sejak tahun 1980, taman ini memiliki pepohonan yang sudah tumbuh tinggi dan rindang. Taman pun terasa teduh dan sejuk sehingga para pengunjung akan merasa nyaman untuk berjalan-jalan di sini.</p> <p>Selain pepohonan, Taman Bunga Wiladatika juga ditumbuhi rumput hijau dan bunga berwarna-warni. Area tempat bunga-bungaan tumbuh dikelilingi oleh tanaman perdu, membentuk desain taman yang sangat cantik. Di salah satu bagian taman, terdapat air mancur yang membuat pemandangan semakin menawan hati. Anda dapat mengambil foto di tempat ini.</p> <p>Taman Bunga Wiladatika terletak di Hajarmukti, Cimanggis. Selain bisa menikmati keindahan taman, berjalan-jalan, dan berfoto, Anda juga dapat melakukan piknik bersama keluarga atau berkunjung ke kolam renang. Harga tiket masuk taman bunga dan kolam renang dijual terpisah.</p>',
            'category_id' => 2,
            'kecamatan_id' => 4,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Masjid Dian Al Mahri',
            'slug' => 'masjid-dian-al-mahri',
            'excerpt' => 'Bagi Anda yang ingin berwisata religi, khususnya untuk Anda yang beragama Islam, di Depok terdapat',
            'body' => '<p>Bagi Anda yang ingin berwisata religi, khususnya untuk Anda yang beragama Islam, di Depok terdapat masjid dengan arsitektur yang sangat indah. Masjid Dian Al Mahri namanya; kadang disebut juga dengan Masjid Kubah Emas.</p> <p>Masjid Dian Al Mahri memiliki satu kubah besar dan empat kubah kecil di sisinya, semuanya dilapisi dengan emas. Kubah utamanya didesain mirip Taj Mahal dengan diameter 20 m dan tinggi 25 m. Masjid tersebut juga memiliki enam menara setinggi 40 m, dilapisi granit, dan berwarna abu-abu.</p> <p>Pada bagian interior, Masjid Dian Al Mahri juga tampak mewah dan indah. Terdapat lampu gantung yang diimpor dari Italia, hiasan dari emas di tempat imam, dan kaligrafi di langit-langit masjid. Dengan desain interior dan eksterior seperti ini, Masjid Dian Al Mahri pun berhasil menjadi salah satu masjid termegah di Asia Tenggara.</p> <p>Masjid yang berada di Meruyung, Limo ini terbuka untuk umum, tetapi setiap pengunjung yang datang ke sini harus mejaga ketertiban agar tidak mengganggu kegiatan ibadah.</p>',
            'category_id' => 1,
            'kecamatan_id' => 7,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Taman Wisata Pasir Putih',
            'slug' => 'taman-wisata-pasir-putih',
            'excerpt' => 'Ingin merasakan liburan menyenangkan di taman rekreasi air? Anda bisa mendapat pengalaman tersebut',
            'body' => '<p>Ingin merasakan liburan menyenangkan di taman rekreasi air?</p> <p>Anda bisa mendapat pengalaman tersebut di Taman Wisata Pasir Putih. Terletak di Pasir Putih, Sawangan, Kota Depok, tempat wisata di Depok ini memiliki berbagai wahana permainan air untuk pengunjung dewasa dan anak. Selain itu, terdapat fasilitas pendukung lainnya seperti bungalow, pemancingan, dan taman bermain. Aktivitas di darat yang bisa dilakukan pengunjung di antaranya adalah flying fox dan ATV.</p> <p>Taman Wisata Pasir Putih tutup setiap hari Jumat. Pada hari lain, Anda dapat melakukan berbagai aktivitas seru di tempat wisata di Depok ini, baik dalam rombongan besar atau kecil. Untuk rombongan besar, tersedia penginapan dan aula yang bisa Anda sewa. Kalau rombongan Anda perlu melakukan outbound, Anda juga dapat melakukannya di dalam kawasan tempat wisata ini</p>',
            'category_id' => 3,
            'kecamatan_id' => 9,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Situ Pengasinan Depok',
            'slug' => 'situ-pengasinan-depok',
            'excerpt' => 'Situ Pengasinan adalah tempat wisata alam di Depok berupa danau yang berada di Kelurahan Pengasinan, Kecamatan Sawangan, Depok. Ada banyak aktivitas m...',
            'body' => '<div>Situ Pengasinan adalah tempat wisata alam di Depok berupa danau yang berada di Kelurahan Pengasinan, Kecamatan Sawangan, Depok. Ada banyak aktivitas menarik yang bisa Anda lakukan di danau yang membentang seluas 6 ha ini. Misalnya, flying fox, berkeliling danau menggunakan perahu bebek, atau memancing.<br><br>Untuk yang memiliki hobi memancing, Anda sebaiknya membawa perlengkapan memancing sendiri. Belum ada tempat penyewaan alat memancing di tempat rekreasi ini. Di lokasi, terdapat area memancing umum atau gratis dan area berbayar, Anda tinggal memilih sendiri mana yang paling disukai.<br><br>Di tepi danau, terdapat taman hijau tempat Anda dan keluarga dapat berjalan-jalan atau menggelar tikar untuk piknik. Di sana juga terdapat warung-warung yang biasanya menawarkan makanan dan minuman sehingga Anda tidak perlu jauh-jauh membelinya. Secara umum, Situ Pengasinan adalah tempat wisata di Depok yang sangat murah sehingga siapa saja bisa berkunjung ke tempat ini tanpa perlu mengeluarkan biaya besar.</div>',
            'category_id' => 3,
            'kecamatan_id' => 9,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'D’Kandang Amazing Farm',
            'slug' => 'd-kandang-amazing-farm',
            'excerpt' => 'Ingin mengajak anak-anak ke tempat wisata edukasi agar mereka bisa liburan sekaligus belajar? Berkunjunglah ke D’Kandang Amazing Farm yang terletak di...',
            'body' => '<div>Ingin mengajak anak-anak ke tempat wisata edukasi agar mereka bisa liburan sekaligus belajar? Berkunjunglah ke D’Kandang Amazing Farm yang terletak di Pasir Putih, Sawangan, Kota Depok.<br><br>Meskipun bernama D’Kandang Amazing Farm, tempat ini bukanlah peternakan biasa. Di tempat wisata di Depok ini, terdapat berbagai aktivitas menarik yang bisa dilakukan oleh anak-anak. Buah hati Anda dapat berinteraksi langsung dengan hewan ternak seperti sapi, kambing, atau kuda. Mereka juga dapat mencoba melakukan kegiatan bercocok tanam.<br><br>Tak berhenti sampai di situ saja, masih ada banyak kegiatan bermanfaat lain yang bisa dilakukan di D’Kandang Amazing Farm. Misalnya, para pengunjung dapat belajar tentang cara memerah susu, cara membuat pupuk, atau cara memetik sayur dengan benar. Tentunya, Anda juga bisa berfoto atau mengambil foto kegiatan anak-anak untuk dijadikan kenang-kenangan.<br><br>Yang tak kalah menarik, anak-anak dapat mencoba kegiatan lain yang lebih aktif dan bermanfaat untuk perkembangan motorik. Mereka dapat berkeliling area seluas 8 ha ini dengan menunggangi kuda. Pilihan lainnya, mereka dapat berlomba untuk menangkap ikan di kolam atau melakukan outbound. Sangat menarik dan bermanfaat, bukan?<br><br>Buat kamu yang kurang puas dengan wisata untuk anak di Depok, Bandung juga memiliki banyak tempat wisata yang cocok untuk dikunjungi oleh anak-anak.&nbsp;</div>',
            'category_id' => 2,
            'kecamatan_id' => 9,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Arung Jeram Sungai Ciliwung',
            'slug' => 'arung-jeram-sungai-ciliwung',
            'excerpt' => 'Nah, kalau Anda menyukai olahraga menantang, jangan sampai melewatkan kesempatan melakukan arung jeram di Sungai Ciliwung. Tidak perlu berkendara jauh...',
            'body' => '<div>Nah, kalau Anda menyukai olahraga menantang, jangan sampai melewatkan kesempatan melakukan arung jeram di Sungai Ciliwung. Tidak perlu berkendara jauh dari Jakarta untuk melakukan arung jeram, sekarang Anda bisa melakukannya di Depok.<br><br>Baru dimulai dikerjakan pada awal 2017 oleh pemerintah Kota Depok, tawaran menarik ini merupakan tempat wisata baru di Depok. Rencananya akan ada empat dermaga yang dibuat. Untuk saat ini, pengunjung biasanya berkumpul di Pos Pantau Ciliwung Ratujaya atau di bawah jembatan Grand Depok City. Dari kedua titik inilah, arung jeram Sungai Ciliwung dimulai.<br><br>Menariknya, adanya pengembangan Sungai Ciliwung Depok menjadi tempat wisata membuat pemerintah dan warga setempat semakin gencar menjaga kebersihan sungai ini. Jadi, tidak seperti aliran Sungai Ciliwung setelah sampai Jakarta, Sungai Ciliwung di Bogor dan Depok masih cukup bersih dan aman untuk kegiatan arung jeram. Berani mencoba?<br><br><br></div>',
            'category_id' => 3,
            'kecamatan_id' => 6,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Agrowisata Belimbing Dewa',
            'slug' => 'agrowisata-belimbing-dewa',
            'excerpt' => 'Sesuai namanya, Agrowisata Belimbing Dewa merupakan kebun belimbing. Mulanya, setiap kecamatan di Depok memiliki pohon belimbing dan ini merupakan asa...',
            'body' => '<div>Sesuai namanya, Agrowisata Belimbing Dewa merupakan kebun belimbing. Mulanya, setiap kecamatan di Depok memiliki pohon belimbing dan ini merupakan asal mula kota ini dijuluki sebagai “Kota Belimbing”. Namun, dengan adanya pembangunan, area kebun telah banyak digunakan untuk mendirikan bangunan. Namun, di wilayah Pasir Putih, masih terdapat banyak pohon belimbing sehingga pemerintah lokal menetapkannya sebagai Agrowisata Belimbing Dewa.<br><br>Di tempat wisata di Depok tersebut, Anda dapat melihat ratusan pohon belimbing dengan buahnya yang besar, segar, dan memiliki ‘rasa dewa’ atau sangat enak. Para wisatawan dapat berjalan-jalan di antara pohon belimbing dan belajar tentang seluk-beluk buah ini. Tentunya, Anda juga dapat memetik langsung buah tersebut dari pohonnya. Berbagai olahan makanan dari belimbing juga dapat Anda beli di tempat wisata di Depok ini, misalnya manisan, kerupuk, sirup, dodol, dan wingko.<br><br>Menariknya, Agrowisata Belimbing Dewa bukanlah satu perkebunan tunggal. Di sepanjang jalan di Pasir Putih, Anda bisa melihat pohon belimbing tumbuh di halaman rumah-rumah warga. Ada banyak petani belimbing di daerah ini dan Anda bisa membeli belimbing langsung dari mereka.</div>',
            'category_id' => 2,
            'kecamatan_id' => 9,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Cagar Alam Kota Depok',
            'slug' => 'cagar-alam-kota-depok',
            'excerpt' => 'Cagar Alam Kota Depok atau dikenal juga dengan nama Taman Hutan Raya (Tahura) Pancoran Mas merupakan cagar alam dengan sejarah panjang. Bagaimana tida...',
            'body' => '<div>Cagar Alam Kota Depok atau dikenal juga dengan nama Taman Hutan Raya (Tahura) Pancoran Mas merupakan cagar alam dengan sejarah panjang. Bagaimana tidak, cagar alam ini telah ada sejak abad ke-17, lebih tua dari Kebun Raya Bogor.<br><br>Pada saat itu, Kota Depok merupakan kawasan hutan yang rimbun, sebelum kemudian berubah menjadi area hunian. Untuk mencegah hilangnya wilayah hutan, pemerintah kolonial Belanda saat itu menetapkan area seluas 30 ha di tepi Kampung Pitara sebagai hutan lindung.<br><br>Cagar Alam Kota Depok pada masa itu memiliki pepohonan yang menjulang tinggi dan menjadi habitat bagi aneka jenis burung. Hewan-hewan langka pada masa itu juga masih tinggal di hutan ini, misalnya harimau jawa, kijang, monyet, bangau putih, dan lainnya. Selain itu, sekitar 40.000 jenis tanaman herbal juga tumbuh di area ini.<br><br>Seiring dengan bertambahnya jumlah penduduk, area cagar alam ini semakin menyempit. Sekarang ini, luas cagar alam ini hanya sekitar 6 ha. Meskipun demikian, tempat ini masih rimbun oleh pepohonan dan menjadi tempat tinggal beberapa jenis hewan dan burung. Berbagai jenis tanaman pun masih ada di sini, misalnya kemiri, damar, saninten, dan puspa.</div>',
            'category_id' => 2,
            'kecamatan_id' => 8,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Fantasy Waterpark',
            'slug' => 'fantasy-waterpark',
            'excerpt' => 'Fantasy Waterpark, atau dikenal juga dengan nama Aladin Waterpark, merupakan tempat wisata di Depok yang ideal untuk keluarga. Lokasinya berada di Gra...',
            'body' => '<div>Fantasy Waterpark, atau dikenal juga dengan nama Aladin Waterpark, merupakan tempat wisata di Depok yang ideal untuk keluarga. Lokasinya berada di Grand Depok City, Cibuluh, dan buka setiap hari. Apa yang menarik dari tempat wisata di Depok yang satu ini?<br><br>Hal menarik pertama adalah konsep tempatnya. Fantasy Waterpark mengusung konsep Negeri 1001 malam sehingga desain di dalamnya tampak seperti negeri dongeng. Konsep ini tentunya sangat menarik bagi penggemar dongeng, khususnya anak-anak.<br><br>Hal menarik berikutnya, tentu saja, adalah wahana yang tersedia di Fantasy Waterpark. Tersedia wahana untuk anak-anak dan dewasa, di antaranya Giant Slide, Waterplay, dan Kiddy Park. Fasilitas pendukung di tempat wisata di Depok ini juga cukup lengkap, mulai dari gazebo dan pujasera sampai panggung hiburan gratis, sehingga menghabiskan waktu liburan di sini akan terasa semakin nyaman dan menyenangkan.<br><br></div>',
            'category_id' => 3,
            'kecamatan_id' => 10,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Godong Ijo Depok',
            'slug' => 'godong-ijo-depok',
            'excerpt' => 'Rekomendasi tempat wisata di Depok terakhir yang wajib dikunjungi adalah Godong Ijo yang berada di Desa Serua, Bojongsari. Nama Godong Ijo berarti “da...',
            'body' => '<div>Rekomendasi tempat wisata di Depok terakhir yang wajib dikunjungi adalah Godong Ijo yang berada di Desa Serua, Bojongsari. Nama Godong Ijo berarti “daun hijau” yang menunjukkan kalau tempat ini memang merupakan area hijau yang sejuk dan asri. Area ini kemudian berkembang menjadi sebuah tempat wisata edukasi.<br><br>Selain bisa berjalan-jalan menikmati udara segar, di Godong Ijo tersedia fasilitas pemancingan, kafe botani, dan aula dome yang bisa dipakai untuk menggelar pertemuan atau resepsi. Anak-anak juga dapat melakukan berbagai aktivitas di Godong Ijo, misalnya melukis, membatik, melakukan permainan tradisional, outbound, bermain angklung, menjadi dokter cilik atau koki cilik, dan masih banyak lagi.</div>',
            'category_id' => 2,
            'kecamatan_id' => 2,
            'user_id' => 1
        ]);

    }
}
