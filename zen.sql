-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 11:21 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zen`
--

-- --------------------------------------------------------

--
-- Table structure for table `cari`
--

CREATE TABLE IF NOT EXISTS `cari` (
  `id` int(50) NOT NULL,
  `cari` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cari`
--

INSERT INTO `cari` (`id`, `cari`) VALUES
(1, 'html'),
(2, 'php'),
(3, 'jquery'),
(4, 'python'),
(5, 'assembly'),
(6, 'dart'),
(7, 'flutter'),
(8, 'mongo db'),
(9, 'tes'),
(10, 'a'),
(11, 'pemrograman'),
(12, 'blog'),
(13, 'Pahala'),
(14, 'Markdown'),
(15, 'Teknologi'),
(16, 'Javascript'),
(17, 'Github'),
(18, 'revolusi Harapan'),
(19, 'Website'),
(20, 'menulis'),
(21, 'Koding'),
(22, 'Codeigniter'),
(23, 'Index'),
(24, 'micin'),
(25, 'google'),
(26, 'skripsi'),
(27, 'Cemas');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `komentar` text NOT NULL,
  `komentar_plain` text NOT NULL,
  `waktu` datetime NOT NULL,
  `slug` varchar(200) NOT NULL,
  `slug_komentar` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `komentar`, `komentar_plain`, `waktu`, `slug`, `slug_komentar`) VALUES
(1, 'Zen', 'muhzaini30@gmail.com', '<p>Tentunya memang harus sabar sih kalau sudah begini.</p>\n', 'Tentunya memang harus sabar sih kalau sudah begini.', '2019-05-17 23:38:16', 'artikel-nggak-terindex-google-apakah-masalah-vdgLx', 'komentar-t8Y2I');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE IF NOT EXISTS `postingan` (
  `id` int(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `publish` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `gambar`, `isi`, `slug`, `created_at`, `updated_at`, `publish`) VALUES
(12, 'Apakah Belajar Pemrograman Itu Sulit?', '', 'Apakah menguasai pemrograman itu sulit? Apakah memahami berbagai sintaks yang asing itu rumit? Apakah memahami rangkaian if else endif itu luar biasa susahnya? Apakah meneliti setiap titik koma di akhir setiap statement itu ribet?\r\n\r\nRibet, susah, sulit itu semua berawal dan berasal dari mindset kita. Maka, untuk mengubahnya menjadi menyenangkan, tentu saja yang pertama kita ubah adalah mindset kita; bukan bahasa pemrogramannya karena kan kita sebagai pemula di dunia pemrograman yang keras ini belum memiliki kuasa untuk memudahkannya.\r\n\r\nPadahal, bahasa pemrograman sekarang ini banyak lo yang mudah-mudah. Contohnya aja Python.\r\n\r\nBerikut ini adalah contoh program Hello World yang ditulis dengan bahasa Python:\r\n\r\n```\r\nprint(''Hello World'')\r\n```\r\n\r\nMudah kan? Nah, coba sekarang kita buat yang sederhana yaitu penjumlahan dengan bahasa pemrograman Python:\r\n\r\n```\r\nangka_pertama = 2\r\nangka_kedua = 3\r\njumlah = angka_pertama + angka_kedua\r\nprint(jumlah)\r\n```\r\n\r\nWow. Ternyata mudah sekali ya!\r\n\r\nNah, terus apa sih yang membuatmu berpikir bahwa belajar pemrograman itu sulit? Apakah karena kamu melihat begitu canggihnya aplikasi-aplikasi yang kita pakai sehari-hari macam Gojek, Grab, Tokopedia, hingga aplikasi yang berputar di dalamnya uang ratusan juta rupiah setiap hari macam Traveloka. Memang sih kalau kita memandang itu semua kita bakalan merasa sangat takjub dan merasa sangat rendah diri, "Eh, apa sih yang bisa aku buat?"\r\n\r\nTapi jangan sedih kawan, buatlah aplikasi sederhana untuk memudahkan kehidupanmu sehari-hari. Aku juga awalnya gitu kok. Belajar pemrograman dari membuat aplikasi-aplikasi sederhana seperti program penjumlahan di atas tadi. Cuma memang waktu awal-awal dulu aku buatnya bukan pakai Python sih karena memang agak susah mendapatkannya di Warnet. Akhirnya aku belajar pemrograman dari utak-atik gadget Blogspot. Hmmm... kurasa yang baca ini senyum-senyum sendiri karena sama ya? Hehehehe. Seru sih memang waktu itu bisa ubah-ubah tampilan Blogspot; dikasih kolam ikan, dikasih jam bentuk kucing, dikasih Shoutbox. Dan sekarang, alhamdulillah aku sudah bisa membuat CMS sendiri dari Codeigniter dan Blade. Ya, blog yang kamu pandang ini.', 'apakah-belajar-pemrograman-itu-sulit-1K8pU', '2019-05-14 17:16:52', '2019-05-14 18:08:46', 'on'),
(14, 'Mengapa Aplikasi Berbasis Website Lebih Diminati?', '', '"Dibuat macam website aja ya Mas."\r\n\r\nSontak kata-kata itu membuatku kaget. Apakah proposal aplikasi Androidku ditolak? Apakah aku kurang kompeten dengan kampuanku sebagai developer?\r\n\r\nTernyata tidak. Kami berdua pun berdiskusi soal "mengapa website lebih dipilih dibandingkan dengan aplikasi Android". Ternyata, yang membuat owner salah satu perusahaan tersebut memilih website daripada aplikasi Android adalah karena **kemudahannya**; user cukup meng-klik link yang diberikan maka akan langsung tampil aplikasi website yang sudah disediakan. Memang sih lebih praktis. Apalagi kan, yang namanya bisnis itu kecepatan lebih utama.\r\n\r\nNah, coba misalnya kalau menggunakan aplikasi Android. Tentu lebih ribet. Yang pertama kan, kita harus download dulu aplikasinya di Play Store. Nah, kalau memori HP kita habis, tentunya nggak bisa install aplikasi baru, terus kadang kita cuma make sekali aja. Habis itu apa? Ya nggak dipakai lagi. Rugi banget kan ya?', 'mengapa-aplikasi-berbasis-website-lebih-diminati-iafQM', '2019-05-14 18:47:47', '2019-05-16 01:21:50', NULL),
(15, 'Catatan Perbaikan Blog', '', '- Highlight\r\n- Statistik\r\n- Kasih gambar (input dari luar aja)', 'catatan-perbaikan-blog-vAzl1', '2019-05-14 21:21:54', '2019-05-18 06:58:29', NULL),
(16, 'Meraih Pahala dengan Membuat Aplikasi? Wah, Boleh Juga', '', '.', 'meraih-pahala-dengan-membuat-aplikasi-wah-boleh-juga-S5rIM', '2019-05-14 21:35:48', '2019-05-14 21:35:48', NULL),
(17, 'Menulis Aplikasi', '', '.', 'menulis-aplikasi-rZ197', '2019-05-14 21:39:12', '2019-05-14 21:39:12', NULL),
(18, 'Bagaimana Cara Menulis Teks Arab Padahal di Word Berantakan?', '', 'Kamu pernah nggak mengalami suatu insiden di mana pas ngetik teks arab di Word, ketulisnya nggak beraturan. Harusnya tulisannya itu bismillahirrahmanirrahim malah kebalik tuh, bismi-nya di akhir. Pas pengen nyoba ngetik di aplikasi lainnya, bingung dah ngetiknya di aplikasi mana. Kalau ngetik di Notepad, dia nggak bisa ngebaca teks arab. Terus nyoba di Power Point atau Excel, hasilnya sama aja. Terus mau dicoba di aplikasi mana lagi? Paint? Nggak mungkin lok?\r\n\r\nNah, aku ada cara nih untuk mengatasi kebimbangammu. Bagaimana kalau kita ngetiknya di browser aja.\r\n\r\nEh. Beneran kah wal?\r\n\r\nIya. Bisa loh. Coba aja kamu buka browser kamu terus ketikkan skrip di bawah ini di dalam address bar browser:\r\n\r\n```\r\ndata:text/html, <body contenteditable>\r\n```\r\n\r\nSetelah kamu ketikkan dan tekan Enter, apa yang terjadi? Wah, ternyata halaman browser yang putih itu bisa kita gunakan untuk mengetik. Coba aja untuk mengetik teks arab. Bisa kan? Nah, memang sih ini solusi yang biasa aku gunakan jika Word lagi error.\r\n\r\n![](https://i.postimg.cc/7hp4Fv7h/Screenshot-2019-05-15-00-27-19.png)\r\n\r\n_Itu hasilnya ketika skrip dijalankan._', 'bagaimana-cara-menulis-teks-arab-padahal-di-word-berantakan-CSHnP', '2019-05-14 22:28:13', '2019-05-15 00:34:29', 'on'),
(19, 'Perlukah Aplikasi untuk Men-Tracking Murajaah Hafalan Alquran?', '', '.', 'perlukah-aplikasi-untuk-men-tracking-murajaaj-hafalan-alquran-YUoO1', '2019-05-14 22:34:40', '2019-05-14 22:35:15', NULL),
(21, 'Belajar CSS: Memformat Huruf', '', 'Assalamualaikum warahmatullahi wabarakatuh. Alhamdulillah kita bisa berjumpa kembali di rumah yang sederhana ini tanpa kurang suatu apa pun.\r\n\r\nOke gaes, kali ini kita akan belajar memformat huruf atau teks menggunakan CSS.\r\n\r\nSebelumnya, sudah tau kah kamu apa itu CSS? CSS adalah singkatan dari cascading style sheet merupakan suatu aturan baku yang digunakan untuk membuat tampilan atau mendesain suatu website. Semua website yang kamu lihat di jagat Google ini (atau Google universe), semuanya terdiri dari tiga komponen dasar untuk bagian front end-nya; HTML sebagai kerangkanya, Javascript sebagai behaviornya, dan CSS sebagai make up-nya.\r\n\r\nOke, langsung kita mulai ya.\r\n\r\n# Mendeklarasikan Teks\r\n\r\nOke, sekarang kita akan mendeklarasikan teks yang akan kita desain. Hmmm... bagaimana kalau **Hello World**? Oke, jadi pertama buat file bernama `hello.html` lalu isikan dengan skrip di bawah ini:\r\n\r\n```\r\n<style>\r\n\r\n</style>\r\n<p>Hello World</p>\r\n```\r\n\r\n<style>\r\n.contoh {\r\nwidth: 100%;\r\nborder: 1px solid #ddd;\r\npadding: 5px;\r\nmargin-bottom: 15px;\r\n}\r\n</style>\r\n\r\n<div class=''contoh''>\r\nHalo\r\n</div>\r\n\r\nTes', 'belajar-css-memformat-huruf-iZ3Ir', '2019-05-15 08:27:15', '2019-05-15 08:43:40', NULL),
(22, 'Yuk Belajar Markdown', '', '![situs markdown interpreter](https://i.postimg.cc/s2YKBh7d/Screenshot-2019-05-15-08-50-28.png)', 'yuk-belajar-markdown-wb06s', '2019-05-15 08:52:46', '2019-05-15 08:52:46', NULL),
(23, 'Dampak Teknologi', '', 'Mengapa zaman sekarang ini disebut dengan era milenial? Mengapa remaja-remaja saat ini disebut dengan anak-anak milenial; kalau emak-emak berarti emak-emak milenial, kalau bapak-bapak berarti bapak-bapak milenial. Kenapa ya? \r\n\r\nAku sebenarnya awalnya agak risih mendengarnya.\r\n\r\nWhy?\r\n\r\nKan gini ya, milenial itu berarti meleburnya dua kepribadian yang saling terpisah yaitu manusia dan robot (atau teknologi). Ngeri nggak? Masih nggak ngerasa ngeri? Jadi gini kawan, manusia memiliki kepribadian tersendiri, begitu pula dengan teknologi. Nah, harusnya kan kedua kepribadian ini **nggak boleh** bertemu. Why? Karena ditakutkan dari akulturasi kedua kepribadian tersebut menyebabkan lumpuhnya satu kepribadian dan berkuasanya kepribadian satunya. Maka kita melihat bahwa manusia-manusia _milenial_ ini telah melepaskan kepribadiannya sebagai manusia dan merobotkan dirinya sehingga segala sesuatunya dipandang dan diukur ala robot seperti harus efisien, terukur, bertahap, pengumpulan bug error, dan berbagai istilah teknologi lainnya.\r\n\r\nHal inilah yang telah dipikirkan oleh Erich Fromm dalam bukunya yang berjudul Revolusi Harapan. Di bukunya itu, Fromm menyayangkan sikap ambisi manusia dalam era revolusi industri yang bertindak secara teknis dalam segala sendi kehidupan.\r\n\r\nUjung dari pandangan ini dikhawatirkan akan membuat manusia mendewakan teknis, empirisme, dan mengesampingkan moral, etika, dan agama. Padahal secara psikologis, manusia membutuhkan spiritual sebagai pembentukan alasan yang kuat bagi eksistensi kehadiran dirinya di dunia ini. Maka, seharusnya memang kita ini patut banyak bersyukur karena diberikan pendidikan agama oleh orangtua kita sejak dini sehingga membentuk pondasi pemikiran kita dalam menyikapi milenialisme yang mewabah di abad ke-21 ini.\r\n\r\nUntuk memahami tulisan Fromm dalam buku Revolusi Harapan, bisa dibaca tulisan salah satu Kompasianer berikut: <https://www.kompasiana.com/syarif_dhien/585fc41c5f23bded08038b42/berguru-pada-revolusi-harapan-eric-fromm> atau bisa juga langsung baca bukunya di perpustakaan atau taman baca terdekat. Fromm ini adalah salah satu dari sekian banyak pemikir bidang keilmuan psikologi yang aku kagumi karyanya.\r\n\r\n# Lalu Apa Sikap Kita Sebagai Orangtua dalam Menghadapi Milenialisme yang Begitu Masif?\r\n\r\nYang pertama tentu saja berikan **pendidikan agama** yang kuat kepada anak karena pendidikan agama adalah pondasi yang paling kokoh dalam menangkal berbagai bentuk virus pemikiran yang menyimpangkan jalan berpikir yang lurus. \r\n\r\nKemudian, beri pengertian kepada anak bahwa **teknologi hanyalah alat**, bukan segalanya. Bagaimana cara memberikan pengertian kepada anak? Tentu saja dengan memberikan contoh kepada anak bahwa _tidak segalanya diselesaikan dengan teknologi_ sehingga ketika teknologi tersebut lenyap, anak terbiasa.\r\n\r\nContoh berikutnya dari pemberian pemahaman kepada anak adalah dengan pengadaan **waktu keluarga**. Sehingga dengan waktu keluarga ini, masing-masing anggota keluarga bisa memanfaatkan waktunya dalam meningkatkan intensi hubungan yang baik antar anggota keluarga.\r\n\r\nYap, tentu saja tips-tips itu baru sekedar di dalam pikiranku, belum kupraktekan karena belum punya anak (istri aja belum). Tapi buat kamu yang sudah berhasil mempraktekkannya pada keluarga masing-masing, saya mohon untuk membagikannya kepada keluarga-keluarga yang lain lewat kolom komentar di bawah agar bisa memberikan inspirasi bagi yang lain.\r\n\r\nSemoga bermanfaat ya.', 'dampak-teknologi-tDWw0', '2019-05-15 08:57:27', '2019-05-15 13:20:26', 'on'),
(24, 'Mengapa Harus Belajar Markdown?', '', '.', 'mengapa-harus-belajar-markdown-rUTNB', '2019-05-15 09:05:07', '2019-05-15 09:05:07', NULL),
(25, 'Apa Sih Keunggulannya Javascript?', '', '.', 'apa-sih-keunggulannya-javascript-fNtwk', '2019-05-15 09:05:40', '2019-05-15 09:05:40', NULL),
(26, 'Keuntungan Memiliki Akun Github', '', '.', 'keuntungan-memiliki-akun-github-rDqjw', '2019-05-15 09:19:41', '2019-05-15 09:19:41', NULL),
(27, 'Cheatsheet Markdown', '', '# Paragraf\r\n\r\nKode:\r\n\r\n```\r\nAku adalah anak gembala\r\n\r\nSelalu riang serta gembira\r\n```\r\n\r\nHasil:\r\n\r\nAku adalah anak gembala\r\n\r\nSelalu riang serta gembira\r\n\r\n# Heading\r\n\r\nKode:\r\n\r\n```\r\n# Heading 1\r\n## Heading 2\r\n### Heading 3\r\n```\r\n\r\nHasil:\r\n\r\n# Heading 1\r\n## Heading 2\r\n### Heading 3\r\n\r\n# Tebal\r\n\r\nKode:\r\n\r\n```\r\nIni tulisan **tebal**\r\n```\r\n\r\nHasil:\r\n\r\nIni tulisan **tebal**\r\n\r\n# Miring\r\n\r\nKode:\r\n\r\n```\r\nIni tulisan _miring_\r\n```\r\n\r\nHasil:\r\n\r\nIni tulisan _miring_\r\n\r\n# Garis\r\n\r\nKode:\r\n\r\n```\r\n---\r\n```\r\n\r\nHasil:\r\n\r\n---\r\n\r\n# Ordered List\r\n\r\nKode:\r\n\r\n```\r\n1. Mengaji\r\n2. Menghafal\r\n3. Murajaah\r\n```\r\n\r\nHasil:\r\n\r\n1. Mengaji\r\n2. Menghafal\r\n3. Murajaah\r\n\r\n# Unordered List\r\n\r\nKode:\r\n\r\n```\r\n- Al-Fatihah\r\n- Al-Baqarah\r\n- Ali Imran\r\n```\r\n\r\nHasil:\r\n\r\n- Al-Fatihah\r\n- Al-Baqarah\r\n- Ali Imran\r\n\r\n# Quote\r\n\r\nKode:\r\n\r\n```\r\n> Ingatlah Allah pada waktu ramai. Maka Allah akan menjagamu di waktu sepi.\r\n```\r\n\r\nHasil:\r\n\r\n> Ingatlah Allah pada waktu ramai. Maka Allah akan menjagamu di waktu sepi.\r\n\r\n# Tabel\r\n\r\nKode:\r\n\r\n```\r\n| No. | Nama |\r\n|---|---|\r\n| 1 | Ahad |\r\n| 2 | Senin |\r\n```\r\n\r\nHasil:\r\n\r\n| No. | Nama |\r\n|---|---|\r\n| 1 | Ahad |\r\n| 2 | Senin |\r\n\r\n# Kode\r\n\r\nKode:\r\n\r\n    ```\r\n    Kode akan tampil di sini\r\n    ```\r\n\r\nHasil:\r\n\r\n```\r\nKode akan tampil di sini\r\n```', 'cheatsheet-markdown-shxuA', '2019-05-15 15:58:14', '2019-05-16 07:48:28', 'on'),
(28, 'Berbagai Tools yang Akan Membuatmu Lebih Cepat dalam Koding di Codeigniter', '', '# Blade\r\n\r\nSiapa sih yang nggak kenal sama Blade? Itu loh Template Engine-nya Laravel. Selama ini kan kita sebagai developer mengenal Laravel dengan istilah artisan, eloquent, dan berbagai istilah berbau seni yang dilekatkan dengannya. Termasuk Blade yang memiliki sintaks yang sangat elegan dan khasnya sintaks markup kekinian seperti Liquid, React, dan Vue. Dan akhirnya kita beruntung karena sudah ada developer yang menyatukan Codeigniter dengan Blade yang biasanya identik dengan Laravel.\r\n\r\n<https://github.com/jenssegers/blade>\r\n\r\n# Markdown\r\n\r\n<https://github.com/jonlabelle/ci-markdown>\r\n\r\n# Compress and Resize Image\r\n\r\n<https://github.com/joaquinmarti/CodeIgniter-Image-Cache>', 'berbagai-tools-yang-akan-membuatmu-lebih-cepat-dalam-koding-di-codeigniter-KOUgB', '2019-05-16 22:41:11', '2019-05-17 06:55:32', 'on'),
(29, 'Artikel Nggak Terindex Google? Apakah Masalah?', '', 'Mendapatkan visitor yang banyak, blog ramai, selalu teratas di hasil pencarian Google, nama blog selalu disebut di berbagai akun media sosial adalah sekelumit dari impian setiap bloger. Aku juga sih. Ketika merintis blog baru ini, aku merasa galau karena suda sekian hari, Google nggak mengindex blog ini sama sekali padahal sudah kudaftarin di Google Search Console beserta dengan RSS-nya. Lalu di mana salahnya?\r\n\r\nSalahnya adalah ketika aku terpengaruh dengan kekurangan tersebut, terpuruk, dan tidak meningkatkan kualitas.\r\n\r\nManusia boleh saja salah, lemah, tak berdaya. Namun, manusia haruslah sadar bahwa dia punya kekuatan untuk memperbaiki keadaan dan meningkatkan kualitas.\r\n\r\nLalu, apa yang akan kulakukan pada blog ini?\r\n\r\n- Meningkatkan kualitas tulisan\r\n- Meningkatkan kualitas kode sehingga meningkatkan experience user\r\n\r\nJadi, intinya itu sih, kan blog itu ibarat rumah kita. Maka, kita buat aja senyaman mungkin untuk tinggal di rumah kita. Kita pajang artikel-artikel yang sesuai dengan pandangan kita, kita atur penampilannya dengan konfigurasi CSS, kita buat sistemnya semudah mungkin menggunakan framework Codeigniter + Blade, kita buat interaksi yang menyenangkan dengan sedikit bumbu jQuery, kita tampilkan filosofi-filosofi, teknik-teknik. Dan ketika suatu saat nanti ada tamu yang berkunjung, kita sapa dan sambut dengan hangat serta jangan lupa siapkan teh Sariwangi supaya lebih hangat suasananya.\r\n\r\nKalau jarnya dosenku lah, psikolog kuga beliau:\r\n\r\n> Zen, Zen, kamu ni tipe bapak-bapak yang lebih suka di rumah.\r\n\r\nHehehehe.', 'artikel-nggak-terindex-google-apakah-masalah-vdgLx', '2019-05-17 07:09:31', '2019-05-17 07:33:04', 'on'),
(30, 'Berapa Estimasi Biaya yang Diperlukan untuk Membangun Sebuah Website? ', '', 'Untuk membuat sebuah website tentu saja biayanya ditentukan oleh seberapa besar **usaha** yang diperlukan untuk membuat website tersebut. Jika hanya diperlukan usaha yang sedikit, maka biaya yang diperlukan pun sedikit. Jika memerlukan upaya yang besar, biayanya pun besar. Maka, yang pertama harus diperhatikan tentu saja seberapa besar usaha yang harus dikerahkan untuk mengerjakan suatu website.\r\n\r\nFaktor berikutnya adalah **jumlah**. Tentu berbeda biaya yang diperlukan untuk pembuatan website yang hanya dikerjakan oleh satu orang jika dibandingkan dengan pengerjaan secara tim. Secara kan pasti kalau dikerjakan ramai-ramai biayanya lebih mahal dibandingkan dikerjakan sendiri. Mengapa? Soalnya mengerjakan website itu nggak seketika jadi. Perlu waktu. Nah, dari sekian waktu yang dihabiskan itu tentu saja istri dan anak perlu makan. Itu yang membuat mahal.\r\n\r\nLalu yang mempengaruhi biaya berikutnya adalah **kualitas** website yang dihasilkan. Tentu berbeda biaya yang diperlukan dalam membuat website yang memiliki keamanan berlapis-lapis dibandingkan dengan website yang memiliki keamanan satu lapis. Lalu, pasti beda juga biaya yanh diperlukan untuk membuat website dengan tampilan elegan dibandingkan dengan website tampilan standar.\r\n\r\nMaka, jangan heran kalau harga website itu bervariasi. Ada yang memberikan harga 7 juta untuk website yang _hanya_ berbasis Wordpress. Ada pula website standar dengan harga termurah 4 juta. Kalau saya sih _paling murah_ tak kasih harga cuma **1 juta** soalnya aku nggak tegaan orangnya kalau ngasih harga mahal-mahal.', 'berapa-estimasi-biaya-yang-diperlukan-membangun-sebuah-website-If7ZO', '2019-05-17 07:52:11', '2019-05-18 06:30:36', 'on'),
(32, 'Apa yang Membuat Pemrograman Terasa Sangat Menyenangkan?', '', '.', 'apa-yang-membuat-pemrograman-terasa-sangat-menyenangkan-KPmAQ', '2019-05-17 08:30:40', '2019-05-17 08:30:40', NULL),
(33, 'Javascript Itu Micin!', '', '.', 'javascript-itu-micin-mG57U', '2019-05-17 08:32:27', '2019-05-17 08:32:27', NULL),
(35, 'Semangat Skripsi', '', 'Semangaat...', 'semangat-skripsi-Xloju', '2019-05-17 22:58:21', '2019-05-17 22:58:21', NULL),
(36, 'Aku Sangat Cemas', '', 'Mungkin bisa dibilang kalau aku baru kali ini cemas.\r\n\r\n- Masalah skripsi. Kok aku belum selesai-selesai\r\n- Masalah nikah dan keluarga. Sanggupkah aku jadi imam? Kerja aja aku nggak ada\r\n- Masalah website Panglima. Tinggal satu itu aja tapi masih bingung\r\n\r\nLalu, apa yang harus aku lakukan dengan masalah-masalah itu? Diam? Nggak! Masalah harus dihadapi!', 'aku-sangat-cemas-POyqw', '2019-05-18 00:34:12', '2019-05-18 00:34:12', NULL),
(37, 'Halooo', 'https://www.tes.com/cdn/app-homepage/2b969c9/images/inspire-7.jpg', 'Tes', 'halooo-Ms406', '2019-05-18 07:12:18', '2019-05-18 07:19:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cari`
--
ALTER TABLE `cari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cari`
--
ALTER TABLE `cari`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
