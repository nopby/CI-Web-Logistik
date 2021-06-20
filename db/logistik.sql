-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 03:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistik`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `berat` int(11) NOT NULL,
  `no_kurir` varchar(100) NOT NULL,
  `tgl_keluar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `pengirim`, `penerima`, `asal`, `tujuan`, `berat`, `no_kurir`, `tgl_keluar`) VALUES
(18, 'asdas', 'asdas', 'asd', 'asdas', 5, 'B 1420 AE', '2020-04-25 09:27:47'),
(19, 'asdaseA', 'asdase', 'asd', 'asdas', 5, 'A 1453 UC', '2020-04-25 11:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `berat` int(11) NOT NULL,
  `ukuran` enum('Besar','Sedang','Kecil') NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_masuk` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `id_layanan`, `pengirim`, `penerima`, `asal`, `tujuan`, `berat`, `ukuran`, `harga`, `tgl_masuk`) VALUES
(1, 1, 'Dummy', 'Liar', 'Jakarta', 'Jatinegara', 5, 'Besar', 50000, '2020-04-02 06:13:29'),
(2, 2, 'Spartan', 'Gondar', 'Jakarta', 'Bandung', 5, 'Besar', 75000, '2020-04-25 06:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `layanan`, `harga`) VALUES
(1, 'Regular', 10000),
(2, 'Flash', 15000),
(3, 'Exprezz', 20000),
(4, 'Blitkrieg', 22000),
(5, 'Super Exprezz', 200000),
(6, 'Exprezz Dhuafa', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `subject`, `email`, `message`) VALUES
('byron', 'Hello', 'byronharnope@gmail.com', 'Hello World');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(22) NOT NULL,
  `description` text NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `author`, `description`, `thumb`, `isi`) VALUES
(1, 'Pembunuh Kurir Akhirnya Ditangkap !', '2020-01-16', 'Joko Salim', 'Kita Akhirnya Bisa Bernapas Lega Setelah Pembunuh 32 Kurir Yang Berhasil Kabur Untuk ke 9 Kalinya Itu Akhirnya Tertangkap, Semua Duka Dan Rasa Penderitaan Yang Semua Keluarga Rasakan, Begitu Pula Dengan Kami Yang Kehilangan 13 Kurir Kami Ditangan Pembunuh Keji Itu Akhirnya Bisa Membalaskan Dendam Dengan Menuntut Mati Sang Pembunuh.', 'Killer.jpg', '\r\n    <main class=\"page blog-post\">\r\n        <section class=\"clean-block clean-post dark\">\r\n            <div class=\"container\">\r\n                <div class=\"block-content\">\r\n                    <div class=\"post-image\" style=\"background-image:url(&quot;http://localhost/ProjectAkhir/assets/img/scenery/image3.jpg&quot;);\"></div>\r\n                    <div class=\"post-body\">\r\n                        <h3>Pembunuh Kurir Akhirnya Ditangkap !</h3>\r\n                        <div class=\"post-info\"><span>By Joko Salim</span><span>Jan 16, 2020</span></div>\r\n                        <p>Kita Akhirnya Bisa Bernapas Lega Setelah Pembunuh 32 Kurir Yang Berhasil Kabur Untuk ke 9 Kalinya Itu Akhirnya Tertangkap, Semua Duka Dan Rasa Penderitaan Yang Semua Keluarga Rasakan, Begitu Pula Dengan Kami Yang Kehilangan 13 Kurir Kami Ditangan Pembunuh Keji Itu Akhirnya Bisa Membalaskan Dendam Dengan Menuntut Mati Sang Pembunuh.</p>\r\n                        <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/kill.png\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                            <figcaption class=\"figure-caption\">Ilustrasi Pembunuhan</figcaption>\r\n                        </figure>\r\n                        <h4>Pertama Kali Terjadi Kapan ?</h4>\r\n                        <p>\"Dimulai Dari Sekitar 36 hari Yang Lalu, Saat Itu Kami Mengira Bahwa Kurir Kami Kabur Dan Membawa Pergi Produk Konsumen, Tapi Yang Kami Temukan Adalah Sang Kurir Tergantung Diatas Pohon Dan Produk Yang Harusnya Dikirimkan Dijadikan Pijakan. Kami Mengira Bahwa Dia Bunuh Diri, Sampai Kejadian Pada Kurir Kedua, Lalu Ketiga, Dan Sampai keempat Hanya Dalam Jangka Waktu 9 Hari, Disitulah Kami Mulai Melakukan Penyelidikan Pribadi.\", Ungkap Felix Dalam Wawancaranya.</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Bukti.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Produk yang Dijadikan Pijakan</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                            <div class=\"col\">\r\n                                <p>Kejadian Ini Juga Dialami Jasa Pengiriman Yang Lain, Jadi Semua Pihak Jasa Pengiriman Berusaha Meminimalisir Pengiriman Barang, Akan Tetapi Masih Kurang Efektif.&nbsp;</p>\r\n                            </div>\r\n                        </div>\r\n                        <h4>Bagaimana Tertangkapnya</h4>\r\n                        <p>\"Aksi Sang Pembunuh Diketahui Oleh Kurir Kami Yang Ke 13, Sayangnya Dia Berhasil Dibunuh Sebelum Bisa Berteriak Minta Tolong, Hanya Saja Waktu Itu Semua Kurir Kami Pantau Pergeraknnya Lewat GPS, Dan Kami Melihat Kurir Kami Yang Terdiam Didaerah Terpencil, Dengan Sigap Kami Menuju Kesana Membawa 4 Orang Polisi.\", Jawaban Dari Felix Cukup Membungkam Seluruh Wartawan Yang Ada.</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col\">\r\n                                <p>Saat Ini Berita Ditulis, Sang Pembunuh Sedang Menjalani Sidang Hukuman, Dan Sanksi Hukuman Mati Sudah Pasti Dijatuhkan. Eksekusi Dimulai Minggu Depan.</p>\r\n                            </div>\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Pelaku.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Usainya Pembunuhan Telah Dikumandangkan</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n    </main>'),
(2, 'Adanya Gagasan Special Member', '2020-02-02', 'Samuel Sinagara', 'Setelah Terjadinya Rapat Antara CEO dan Founder Dari Send Exprezz, Hasil Rapat Ada Bocoran Bahwa Akan Ada Program Special Member Yang Ditujukan Untuk Meningkatkan Jumlah Pengguna Jasa Pengiriman Send Exprezz, Akan Tetapi Hal Ini Dibantah Oleh Co-Founder Send Exprezz, Byron Harnope.', 'idea.png', '\r\n    <main class=\"page blog-post\">\r\n        <section class=\"clean-block clean-post dark\">\r\n            <div class=\"container\">\r\n                <div class=\"block-content\">\r\n                    <div class=\"post-image\" style=\"background-image:url(&quot;http://localhost/ProjectAkhir/assets/img/scenery/image3.jpg&quot;);\"></div>\r\n                    <div class=\"post-body\">\r\n                        <h3>Adanya Gagasan Special Member</h3>\r\n                        <div class=\"post-info\"><span>By Samuel Sinagara</span><span>Feb 2, 2020</span></div>\r\n                        <p>Setelah Terjadinya Rapat Antara CEO dan Founder Dari Send Exprezz, Hasil Rapat Ada Bocoran Bahwa Akan Ada Program Special Member Yang Ditujukan Untuk Meningkatkan Jumlah Pengguna Jasa Pengiriman Send Exprezz, Akan Tetapi Hal Ini Dibantah Oleh Co-Founder Send Exprezz, Byron Harnope.</p>\r\n                        <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Profile/B.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                            <figcaption class=\"figure-caption\">Byron harnope</figcaption>\r\n                        </figure>\r\n                        <h4>Hoax ?</h4>\r\n                        <p>\"Bukannya Hoax, Tapi Kita Perlu Benar Benar Kepastian Bahwa Special Member Ini Berguna Atau Tidak. Nanti Yang Ada Kita Hidup Dalam Kesia-Siaan\" Tangkas Cepat Co-Founder Send Exprezz Ketika Mendapat Pertanyaan Yang Menikam Jantung.</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Gagasan.png\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Gagasan Special Member</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                            <div class=\"col\">\r\n                                <p>Sampai Saat Ini Tidak Ada Kepastian Penuh Apakah Itu Special Member Ataupun Cara Kerja Special Member, Yang Hanya Kita Ketahui Bahwa Hal Ini Akan Menjadi Sesuatu Yang Luar Biasa Nantinya.&nbsp;</p>\r\n                            </div>\r\n                        </div>\r\n                        <h4>Kehebatan Program Ini</h4>\r\n                        <p>Melalui Kebocoran Dari Rapat Send Exprezz, Di Ungkap Bahwa Program Ini Akan Berupa Pendaftaran 3 Buah Member. Terdiri Dari Silver, Gold, dan Platinum. Belum Diketahui Untuk Apa Ketiga Member Tersebut Diciptakan.</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col\">\r\n                                <p>Ada Juga Yang Menyatakan Akan Program Lucky Wheel, Dimana Anda Bisa Mendapatkan Mobil Langsung Dari Pihak Send Exprezz Apabila Anda Beruntung, Tapi Hal Ini Masih Belum Diketahui Kejelasannya.</p>\r\n                            </div>\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Bocor.png\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Bocoran Special Member</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n    </main>'),
(3, 'Peserta Platinum Pertama Yang Dapat Mobil !', '2020-03-03', 'Vanessia Fitri', 'Setelah Muncul Program Lucky Wheels Dari CEO Send Exprezz, Mikael, Tampak Banyak Peningkatan Penguna Membership Platinum Dari Waktu Ke Waktu, Dan Ketika Hadiah Utama Yang Disertakan Berupa Mobil Alphard Senilai Ratusan Juta, Makin Banyak Nih Yang Kepengen Jadi Member Platinum, Apalagi Hal Yang Tidak Pernah Disangka Terjadi Kepada Toko Alat Tulis Kantor Yang Berhasil Mendapatkan Mobil, Bapak Iwan.', 'Winner.jpg', '\r\n    <main class=\"page blog-post\">\r\n        <section class=\"clean-block clean-post dark\">\r\n            <div class=\"container\">\r\n                <div class=\"block-content\">\r\n                    <div class=\"post-image\" style=\"background-image:url(&quot;http://localhost/ProjectAkhir/assets/img/scenery/image3.jpg&quot;);\"></div>\r\n                    <div class=\"post-body\">\r\n                        <h3>Peserta Platinum Pertama Yang Dapat Mobil !</h3>\r\n                        <div class=\"post-info\"><span>By Vanessia Fitri</span><span>Mar 03, 2020</span></div>\r\n                        <p>Setelah Muncul Program Lucky Wheels Dari CEO Send Exprezz, Mikael, Tampak Banyak Peningkatan Penguna Membership Platinum Dari Waktu Ke Waktu, Dan Ketika Hadiah Utama Yang Disertakan Berupa Mobil Alphard Senilai Ratusan Juta, Makin Banyak Nih Yang Kepengen Jadi Member Platinum, Apalagi Hal Yang Tidak Pernah Disangka Terjadi Kepada Toko Alat Tulis Kantor Yang Berhasil Mendapatkan Mobil, Bapak Iwan.</p>\r\n                        <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Winner.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                            <figcaption class=\"figure-caption\">Mobil Alphard Dan Pak Iwan</figcaption>\r\n                        </figure>\r\n                        <h4>Menang Hoki ?</h4>\r\n                        <p>Bapak Iwan Ketika Ditanya Punya Jawaban Yang Hebat, Yaitu \"Saya Sih Emang Dari Dulu Hoki, Mbak. Makanya Mobil Begini Juga Gak Ada Apa Apanya Bagi Saya, Bisa Jadi Minggu Depan Saya Menang Liburan Keliling Dunia.\" Hal Ini Cukup Menantang Banyak Orang Untuk Berusaha Mendapatkan Hadiah Mobil Dari Lucky Wheels Tersebut.</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Lucky.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Pemenang Lucky Wheels Lainnya</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                            <div class=\"col\">\r\n                                <p>Ketika Semakin Banyak Orang Bersaing Semakin Banyak Pula Kesempatan Menang Dari Lucky Wheels, Maka Hadiah Ditambahkan Khusus Bagi Para Platinum User.&nbsp;</p>\r\n                            </div>\r\n                        </div>\r\n                        <h4>Menang Curang ?</h4>\r\n                        <p>\"Saya Bisa Pastikan, Jika Ada Yang Satu Menang Curang Maka Anda Tidak Akan Bisa Melihatnya Lagi Besok\", Ungkap Mikael Selaku CEO Send Exprezz Kepada Para Wartawan.</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col\">\r\n                                <p>Kejadian Curang Hanya Pernah Terjadi Sekitar 2 Minggu Yang Lalu, Sang Pemenang Yang Bernama Joni Bron Mendapatkan Hukuman Khusus Dari Sang CEO. Sampai Sekarang Kami Belum Tahu Kabar Dari Sang Pemenang Curang Tersebut.</p>\r\n                            </div>\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Curang.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Hukuman Bagi Mereka Yang Curang</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n    </main>'),
(4, 'Sekarang Send Exprezz Bisa Keluar Negeri Loh', '2020-04-04', 'Sukmanto Apriladi', 'Setelah Lama Founder Send Exprezz Berusaha Untuk Bisa Tembus Go International, Ada Kabar Baik Untuk Kita Semua Loh. Felix berhasil Mendapatkan Izin Dari Kemenhub Untuk Bisa Membentangkan Sayap Pengiriman Keseluruh Penjuru Dunia !', 'World.png', '\r\n    <main class=\"page blog-post\">\r\n        <section class=\"clean-block clean-post dark\">\r\n            <div class=\"container\">\r\n                <div class=\"block-content\">\r\n                    <div class=\"post-image\" style=\"background-image:url(&quot;http://localhost/ProjectAkhir/assets/img/scenery/image3.jpg&quot;);\"></div>\r\n                    <div class=\"post-body\">\r\n                        <h3>Go Internasional</h3>\r\n                        <div class=\"post-info\"><span>By Sukmanto Apriladi</span><span>Apr 4, 2020</span></div>\r\n                        <p>Setelah Lama Founder Send Exprezz Berusaha Untuk Bisa Tembus Go International, Ada Kabar Baik Untuk Kita Semua Loh. Felix berhasil Mendapatkan Izin Dari Kemenhub Untuk Bisa Membentangkan Sayap Pengiriman Keseluruh Penjuru Dunia !</p>\r\n                        <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Dirjen.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                            <figcaption class=\"figure-caption\">Dirjen Hub Udara</figcaption>\r\n                        </figure>\r\n                        <h4>Hubungan Dengan Kemenhub</h4>\r\n                        <p>Selama Pertemuan Dengan Bapak Menhub, Founder Send Exprezz, Felix Berusaha Untuk Bisa Mendapatkan Perhatian Agar Bisa Mendapatkan Izin Pengiriman Internasional, Sekian Lama Membujuk, Hati Yang Alot Berubah Garing, Dan Felix Berhasil Mengubah Send Express Menjadi Salah Satu Jasa Pengiriman Yang Bisa Go Internasional</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Ex.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Diberlakukannya Super Exprezz</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                            <div class=\"col\">\r\n                                <p>\"Hal Ini Perlu Dimasukkan Kedalam Rapat Dahulu, Lalu Kita Coba Proses Kedepannya, Siapa Tau Dengan Ini Kita Bisa Menjangkau Lebih Banyak Daerah Di Dunia\", Ucapan Felix Ketika Ditanya Khusus Seperti Apa Super Exprezz ini.&nbsp;</p>\r\n                            </div>\r\n                        </div>\r\n                        <h4>Apa Yang Akan Terjadi Berikutnya ?</h4>\r\n                        <p>Untuk Saat Ini, Felix Masih Belum Yakin, Tapi Kedepannya ? Kemungkinan Yang Cukup Besar Bagi Kita Untuk Terus Berkembang Mengikuti Kemajuan Jaman.</p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col\">\r\n                                <p>Setelah Semua Berhasil Dirundingkan, Super Exprezz Sudah Mulai Dijalankan Dan Semua Partner Sudah Bisa Mencoba Secara Langsung Jasa Pengiriman Internasional !</p>\r\n                            </div>\r\n                            <div class=\"col-md-6\">\r\n                                <figure class=\"figure\"><img class=\"rounded img-fluid figure-img\" src=\"http://localhost/ProjectAkhir/assets/img/Brand/Inter.jpg\" alt=\"A generic square placeholder image with rounded corners in a figure.\">\r\n                                    <figcaption class=\"figure-caption\">Pengiriman Internasional</figcaption>\r\n                                </figure>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n    </main>');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` enum('Pria','Wanita') DEFAULT NULL,
  `religion` enum('Islam','Kristen','Katolik','Hindu','Buddha','Other') DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `image`, `fullname`, `gender`, `religion`, `address`, `email`, `phone`) VALUES
(8, 'admin', 'B.jpg', 'admin', NULL, NULL, NULL, 'byronharnope@gmail.com', NULL),
(9, 'users', 'Default.jpg', 'users', NULL, NULL, NULL, 'users@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resi`
--

CREATE TABLE `resi` (
  `kode` int(11) NOT NULL,
  `layanan` enum('Regular','Flash','Exprezz','Blitzkrieg','Super Exprezz','Exprezz Dhuafa') NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `tgl_diterima` datetime DEFAULT NULL,
  `tgl_dikirim` datetime DEFAULT NULL,
  `no_kurir` varchar(10) NOT NULL,
  `status` enum('IN','OUT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resi`
--

INSERT INTO `resi` (`kode`, `layanan`, `tujuan`, `pengirim`, `penerima`, `tgl_diterima`, `tgl_dikirim`, `no_kurir`, `status`) VALUES
(1, 'Regular', 'Karawang', 'Dummy', 'Audrey', NULL, '2020-04-22 10:45:10', 'B 1432 OB', 'OUT'),
(2, 'Regular', 'nasi', 'masing', 'ness', NULL, '2020-04-22 00:00:00', '', 'OUT'),
(3, 'Flash', 'surabaya', 'beban', 'gila', NULL, NULL, '', 'IN'),
(4, 'Exprezz', 'nasi', 'padang', 'gurih', NULL, NULL, '', 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `created_at`, `is_active`) VALUES
(8, 'admin', '$2y$10$aWQJ/YFkrtoKGt1LbLQNTeHg6B/ntiSqkHt3RCsqJh4ppowCNo6KW', 'byronharnope@gmail.com', 1, '2020-04-23 06:06:36', 1),
(9, 'users', '$2y$10$mPpaC09e1Scf3FDolf4NgOEQBPCq8a2hnW.ET2mtyC0V21QEmUWZe', 'users@gmail.com', 2, '2020-04-23 14:50:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `level`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(11, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(10) NOT NULL,
  `menu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(10) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'Item', 'admin/item', 'fas fa-fw fa-box-open', 1),
(3, 1, 'User', 'admin/user', 'fas fa-fw fa-users', 1),
(4, 1, 'Message', 'admin/message', 'fas fa-fw fa-envelope', 1),
(5, 1, 'News', 'admin/news', 'far fa-fw fa-newspaper', 1),
(6, 2, 'Profile', 'user/profile', 'fas fa-fw fa-user', 1),
(7, 2, 'Logout', 'auth/logout', 'fas fa-fw fa-sign-out-alt', 1),
(16, 3, 'Manage', 'menu', 'fas fa-folder-open', 1),
(27, 1, 'Laporan', 'admin/laporan', 'fas fa-fw fa-file', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resi`
--
ALTER TABLE `resi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
