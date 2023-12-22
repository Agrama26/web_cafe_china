-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2023 at 04:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kafe_cina`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(6, 1, 3, 1),
(7, 1, 1, 4),
(13, 1, 2, 3),
(16, 1, 7, 5),
(21, 1, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int DEFAULT NULL,
  `product_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `name`, `comment`, `created_at`, `rating`, `product_id`) VALUES
(15, 'ramadhanagung1122@gmail.com', 'Agung', 'klepon yang kenyal dan manis sangat sulit dilupakan', '2023-12-17 06:17:45', 5, 1),
(16, 'asukalangley2233@gmail.com', 'Asuka Langley', 'saya paling suka dengan cemilan yang bernama klepon karena kenyal dimulut dan lumer', '2023-12-17 06:49:29', 4, 1),
(17, 'jabalostjr22@gmail.com', 'Jabal Keren Ost Jr', 'Kopi Cina Sangat Enak. Kopi tersebut membuat saya merasa dekat dengan kampung halaman saya', '2023-12-17 07:56:14', 5, 2),
(18, 'alfitrahcosmetic@gmail.com', 'Fitrah Cosmetic', 'Dicafe ini ada makanan dan minuman yang sangat baik untuk kulit. Btw soal kulit kalian bisa mencoba skincare dari Fitrah Cosmetic ya ges lagi ada promo', '2023-12-17 08:20:33', 5, 9),
(19, 'dimashayukmabar@gmail.com', 'Dimas Anjay Mabar Sleebw', 'Saya terpesona dengan pelayan wanitanya. Btw 08 berapa?', '2023-12-17 08:21:27', 5, 12),
(20, 'abayhayuqmabar@gmail.com', '~-_Abay Haayyyuuqq_-~', 'Yang paling penting adalah wifi nya ya ges ya sangat bagus sehingga peforma gwe bermain epep menjadi meningkat', '2023-12-17 08:22:19', 5, 18),
(21, 'abilrepperoktavia@gmail.com', 'Abil Repper Ganas', 'Saya sangat suka dengan fasilitas karaoke yang ada pada cafe cina ini dan pelayanannya juga baik, minumanya juga sangat menyegarkan', '2023-12-17 08:23:23', 4, 13),
(22, 'reyhanbaikkadang@gmail.com', 'Reyhan Sok Baik', 'Dim Sum nya sangat recomended ya sahabat', '2023-12-17 08:24:23', 5, 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `country_origin` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `imagePath`, `category`, `price`, `description`, `country_origin`) VALUES
(1, 'Klepon', '../assets/images/Lokal/Klepon_1.jpeg', 'Makanan', 10000.00, 'Klepon adalah salah satu jajanan tradisional Indonesia yang memiliki rasa manis dan unik. Biasanya dihidangkan sebagai kudapan ringan, klepon memiliki ciri khas yang membuatnya dicintai oleh banyak orang. Artikel ini akan membahas asal-usul, bahan-bahan, proses pembuatan, dan tentu saja, kenikmatan klepon dalam budaya Indonesia. \r\nAsal-usul Klepon : \r\nKlepon memiliki sejarah panjang di Indonesia dan sering dihubungkan dengan tradisi Jawa. Diperkirakan berasal dari Jawa Tengah, klepon menjadi populer dan menyebar ke berbagai wilayah di Indonesia. Nama \"klepon\" sendiri berasal dari kata Jawa yang berarti \"mengejar\" atau \"menyusul,\" mungkin merujuk pada sensasi kenyal klepon yang mendorong orang untuk mencari lebih banyak.', 'Lokal'),
(2, 'Coffee', '../assets/images/Western/coffee_1.jpg', 'Minuman', 15000.00, 'Coffe atau kopi adalah minuman yang berasal dari biji kopi yang telah dipanggang dan digiling. Kopi telah menjadi minuman yang sangat populer di seluruh dunia dan memiliki tempat yang khusus dalam budaya berbagai masyarakat. Kopi pertama kali ditemukan di wilayah Etiopia, Afrika. Menurut legenda, seorang gembala yang bernama Kaldi menyadari bahwa kambingnya menjadi lebih bersemangat setelah memakan buah dari tanaman kopi. Hal ini menginspirasi orang-orang untuk menciptakan minuman dari biji tanaman kopi.', 'Western'),
(3, 'Takoyaki', '../assets/images/Japanese/Takoyaki1.jpeg', 'Makanan', 25000.00, 'Takoyaki adalah hidangan gurih asal Jepang yang terkenal dengan bola-bola kecil berisi gurita (tako), yang dibuat dari adonan tepung dengan berbagai bahan tambahan. Hidangan ini populer di Jepang dan juga telah meraih penggemar di berbagai belahan dunia. Artikel ini akan menjelaskan asal-usul, bahan-bahan, proses pembuatan, dan pengalaman menyantap Takoyaki. Takoyaki pertama kali diciptakan di Osaka, Jepang, pada pertengahan abad ke-20. Meskipun berasal dari kota pelabuhan ini, Takoyaki dengan cepat menyebar ke seluruh Jepang dan menjadi hidangan populer di pasar malam dan festival. Nama \"Takoyaki\" mengacu pada bahan utamanya, yakni gurita (\"tako\") yang diletakkan dalam adonan tepung.', 'Japanese'),
(4, 'Sakura Tea', '../assets/images/Japanese/Sakura Tea.jpg', 'Minuman', 20000.00, 'Sakura Tea adalah minuman yang diperoleh dari bunga sakura (bunga ceri Jepang) dan memberikan nuansa dan rasa yang khas. Minuman ini sering kali dianggap sebagai simbol musim semi di Jepang dan menyajikan pengalaman minum teh yang unik. Mari kita bahas asal-usul, bahan-bahan, proses pembuatan, dan pengalaman menyantap Sakura Tea. Sakura Tea berasal dari Jepang, di mana bunga sakura adalah simbol musim semi yang sangat dihormati. Tradisi menyeduh teh bunga sakura di Jepang telah ada sejak lama dan umumnya dihubungkan dengan perayaan Hanami, saat orang-orang berkumpul untuk menikmati keindahan bunga sakura yang mekar.', 'Japanese'),
(5, 'Xi Boba', '../assets/images/Chinese/boba1.jpg', 'Minuman', 15000.00, 'Boba, juga dikenal sebagai bubble tea atau pearl milk tea, adalah minuman populer yang berasal dari Taiwan dan telah meraih popularitas global. Minuman ini terkenal karena taburan mutiara kenyal (boba) yang ada di dalamnya. Artikel ini akan membahas asal-usul, bahan-bahan, proses pembuatan, dan fenomena budaya di sekitar minuman boba yang lezat ini. Minuman boba pertama kali dihidangkan di Taiwan pada tahun 1980-an. Penjual makanan jalanan Chen Shui-Tsung dikreditkan sebagai orang yang menciptakan minuman ini dengan menambahkan bola kenyal ke dalam teh susu manis. Dari sana, minuman boba cepat menjadi tren dan merambah ke seluruh dunia.', 'Chinese'),
(6, 'Nian Gao', '../assets/images/Chinese/Nian-Gao1.jpg', 'Makanan', 10000.00, 'Nian Gao, juga dikenal sebagai kue tahun baru atau kue ketan, merupakan salah satu hidangan tradisional yang tak terpisahkan dari perayaan Tahun Baru Imlek di Tiongkok. Lezatnya kue yang kenyal ini tidak hanya menjadi hidangan penutup yang menggugah selera, tetapi juga membawa makna simbolis yang mendalam. Artikel ini akan membahas asal-usul, bahan-bahan, proses pembuatan, dan signifikansi budaya dari Nian Gao. Istilah \"Nian\" berarti \"tahun,\" sementara \"Gao\" berarti \"tinggi\" atau \"naik.\" Gabungan kata ini menciptakan makna harafiah \"meningkatkan tahun demi tahun,\" melambangkan harapan untuk kemakmuran, keberuntungan, dan pertumbuhan dalam setahun yang akan datang.', 'Chinese'),
(7, 'Burger', '../assets/images/Western/burger1.jpg', 'Makanan', 15000.00, 'Burger, atau hamburger, adalah salah satu hidangan yang sangat dicintai dan dikenal di seluruh dunia. Dari stand pinggir jalan hingga restoran mewah, burger memiliki daya tarik yang tak terbantahkan. Artikel ini akan membahas asal-usul, variasi, proses pembuatan, dan tempat burger dalam dunia kuliner global. Asal-usul burger dapat dilacak kembali ke abad ke-18 di kota Hamburg, Jerman, di mana daging cincang diberi nama \"Hamburg-style beef.\" Namun, burger modern seperti yang kita kenal hari ini berasal dari Amerika Serikat. Kredit sering kali diberikan pada Charles and Frank Menches, dua pedagang panganan yang pertama kali menyajikan daging cincang dalam roti di Pameran Dunia St. Louis pada tahun 1904.', 'Western'),
(8, 'Es Cendol Dawet', '../assets/images/Lokal/Es Cendol 1.jpg', 'Minuman', 5000.00, 'Es Cendol Dawet adalah minuman segar tradisional yang populer di Indonesia, khususnya di musim panas yang hangat. Terbuat dari campuran cendol, dawet, santan, dan gula merah, minuman ini memberikan sensasi segar dan manis yang tak terlupakan. Mari kita bahas lebih lanjut tentang asal-usul, bahan-bahan, proses pembuatan, dan pengalaman menikmati Es Cendol Dawet. Es Cendol Dawet adalah bagian integral dari warisan kuliner Indonesia. Minuman ini sering ditemui di berbagai daerah di Indonesia, dengan variasi resep dan penyajian yang khas setiap wilayahnya. Tradisi menyajikan minuman segar dengan bahan-bahan lokal yang lezat telah menjadi ciri khas kuliner Indonesia.', 'Lokal'),
(9, 'Sakura Tea Latte', '../assets/images/Japanese/Sakura Tea Latte.jpg', 'Minuman', 25000.00, 'Sakura Tea Latte adalah varian minuman yang memadukan kelembutan bunga sakura dengan kelezatan susu dalam format latte yang populer. Minuman ini menciptakan keselarasan rasa yang menawan, memberikan sentuhan musim semi yang lembut dan kreami. Mari kita eksplorasi lebih lanjut tentang asal-usul, bahan-bahan, proses pembuatan, dan pengalaman menikmati Sakura Tea Latte. Sakura Tea Latte muncul sebagai inovasi dalam dunia minuman yang memanfaatkan keunikan rasa bunga sakura. Dalam upaya untuk menciptakan minuman yang lebih berselera, campuran bunga sakura dengan susu dalam format latte menjadi pilihan yang populer di kafe-kafe dan kedai minuman modern.', 'Japanese'),
(10, 'Kibi Dango', '../assets/images/Japanese/Kibi Dango.jpeg', 'Makanan', 5000.00, 'Kibi Dango adalah kudapan tradisional Jepang yang terbuat dari tepung ketan yang dibentuk menjadi bola-bola kecil dan dilumuri oleh berbagai macam taburan manis. Hidangan ini tidak hanya memberikan kenikmatan rasa, tetapi juga menyajikan sejumput warisan budaya Jepang. Mari kita jelajahi lebih lanjut tentang asal-usul, bahan-bahan, proses pembuatan, dan pengalaman menyantap Kibi Dango. Dango, atau bola-bola ketan, adalah hidangan tradisional di Jepang yang sudah ada sejak zaman dulu. Kibi Dango sendiri mungkin mendapatkan namanya dari Kibi no Makibi, seorang pejabat dan sarjana pada zaman Nara yang konon menciptakan bola ketan ini.', 'Japanese'),
(11, 'Niku Udon', '../assets/images/Japanese/Niku Udon.jpg', 'Makanan', 25000.00, 'Niku Udon adalah hidangan Jepang yang menggabungkan mi udon yang lezat dengan irisan daging sapi, sayuran, dan kadang-kadang telur. Hidangan ini terkenal karena kuah kaldu yang kaya dan lezat, membuatnya menjadi pilihan yang sangat populer di berbagai restoran Jepang. Mari kita jelajahi lebih lanjut tentang asal-usul, bahan-bahan, dan pengalaman menyantap Niku Udon. Udon adalah jenis mi yang terbuat dari tepung terigu dan air, dan hidangan mi ini telah ada di Jepang sejak zaman dulu. Niku Udon adalah salah satu variasi yang menggabungkan kelezatan mi udon dengan protein daging sapi, menciptakan hidangan yang memuaskan dan menghangatkan.', 'Japanese'),
(12, 'Oat side', '../assets/images/Japanese/Oatside.jpg', 'Minuman', 10000.00, 'Oatside bisa dinikmati langsung atau dijadikan sebagai bahan tambahan untuk membuat aneka makanan dan minuman.\r\nSelain rendah lemak dan gula, Benedict menuturkan, susu oat Oatside juga lebih ramah lingkungan ketimbang susu sapi. Proses pembuatan susu oat Oatside menggunakan 90 persen lebih sedikit tanah, 90 persen lebih sedikit air, dan 70 persen lebih sedikit emisi karbon.\r\n', 'Japanese'),
(13, 'Matcha Latte', '../assets/images/Japanese/Matcha Latte 1.jpg', 'Minuman', 15000.00, 'Matcha Latte adalah minuman yang memadukan bubuk matcha, atau teh hijau Jepang yang dihaluskan, dengan susu dan kadang-kadang pemanis seperti gula atau sirup vanila. Minuman ini telah menjadi sangat populer di seluruh dunia karena rasa unik matcha dan kombinasi kelezatan susu yang kreami. Mari kita bahas lebih lanjut tentang asal-usul, bahan-bahan, proses pembuatan, dan pengalaman menikmati Matcha Latte. Matcha, yang telah menjadi bagian integral dari tradisi minum teh Jepang selama berabad-abad, mendapati dirinya dihidangkan dengan cara yang baru dan segar dalam bentuk Matcha Latte. Seiring dengan kepopuleran teh hijau yang meningkat di dunia, minuman ini membawa harmoni rasa hijau dan kreami susu ke dalam tatanan kafe modern.', 'Japanese'),
(14, 'Dim Sum', '../assets/images/Chinese/Dim Sum1.jpg', 'Makanan', 20000.00, 'Dim Sum, yang berasal dari kata-kata dalam bahasa Kanton yang berarti \"sesuatu yang memuaskan hati,\" adalah tradisional hidangan ringan Cina yang meraih popularitas di seluruh dunia. Penuh dengan rasa yang beragam, tekstur yang unik, dan variasi yang melimpah, Dim Sum tidak hanya memanjakan lidah para penikmatnya tetapi juga mencerminkan kekayaan warisan kuliner Tiongkok. Artikel ini akan membahas asal-usul, variasi, proses pembuatan, dan budaya di sekitar hidangan yang penuh gaya ini. Dim Sum awalnya dikenal sebagai \"dianxin\" atau \"tian dian,\" yang artinya \"kudapan\" atau \"hidangan manis.\" Hidangan ini berkembang dan meluas di berbagai provinsi di Tiongkok seiring berjalannya waktu.', 'Chinese'),
(15, 'Hainan Jifan', '../assets/images/Chinese/Hainan-jifan1.jpg', 'Makanan', 25000.00, 'Hainan Jifan atau yang dikenal juga dengan nasi ayam hainan adalah makanan tradisional khas Cina yang sangat disukai banyak masyarakat Indonesia. Untuk Anda yang belum tahu, nasi hainan sebenarnya beras yang ditanak dengan bumbu dan kaldu ayam, kemudian dimasak lalu disajikan dengan lauk pauk, seperti ayam. Rasa nasinya sangat gurih sehingga Anda tidak akan menyesal untuk mencobanya. ', 'Chinese'),
(16, 'Jiaozi', '../assets/images/Chinese/Jiaozi1.jpg', 'Makanan', 20000.00, 'Jiaozi, juga dikenal sebagai pangsit atau dumpling, adalah hidangan tradisional Tiongkok yang terdiri dari adonan tepung dan isian yang beragam. Hidangan ini terkenal karena bentuknya yang unik dan berbagai variasi rasa yang dapat disajikan baik dalam keadaan direbus, dikukus, atau digoreng. Artikel ini akan membahas asal-usul, proses pembuatan, variasi rasa, serta makna budaya Jiaozi dalam masyarakat Tiongkok. Beberapa legenda menyebutkan bahwa Jiaozi diciptakan oleh Zhang Zhongjing, seorang tabib terkenal, untuk mengatasi masalah masuk angin pada pasien-pasiennya selama musim dingin.', 'Chinese'),
(17, 'Krisan Tea', '../assets/images/Chinese/Krisan Tea 1.jpg', 'Minuman', 10000.00, 'Minuman dari China yang merupakan sebuah teh daNegeri Cina sangat dikenal dengan variasi tehnya yang beragam dan merupakan salah satu pelopor dari berbagai jenis teh di seluruh dunia. Teh krisan atau teh chrysanthemum adalah salah satu jenis teh bunga dari Cina yang sering dikonsumsi sampai sekarang. Teh bunga ini sudah lama digunakan sebagai obat tradisional Cina dan dianggap memiliki berbagai manfaat untuk kesehatan. Berbeda dengan teh pada umumnya, teh krisan tidak memiliki kandungan kafein karena tidak berasal dari daun teh Camellia sinensis.', 'Chinese'),
(18, 'Bubble Thai Tea', '../assets/images/Chinese/Bubble Thai Tea.jpg', 'Minuman', 15000.00, 'Thai Tea, atau Cha Yen, adalah minuman segar dan manis yang berasal dari Thailand. Terkenal dengan warna jingga cerahnya dan rasa uniknya, Thai Tea menjadi salah satu minuman yang sangat dicari dan dinikmati baik di dalam negeri maupun di berbagai belahan dunia. Artikel ini akan membahas asal-usul, bahan-bahan, proses pembuatan, dan kepopuleran Thai Tea. Thai Tea memiliki akar dalam tradisi minum teh Thailand yang kaya. Minuman ini diperkirakan pertama kali muncul pada abad ke-20 sebagai hasil dari inovasi dalam cara menyajikan teh. Sejak itu, Thai Tea telah menjadi ikon kuliner Thailand.', 'Chinese'),
(19, 'Baijiu', '../assets/images/Chinese/baiju1.jpg', 'Minuman', 15000.00, 'Minuman baijiu, yang merupakan salah satu minuman beralkohol tradisional terkenal di Cina, telah menjadi bagian integral dari budaya dan sejarahnya. Baijiu secara harfiah berarti \"minuman putih\" dalam bahasa Mandarin, dan minuman ini telah memikat lidah para penikmatnya selama berabad-abad. Artikel ini akan membahas sejarah, proses pembuatan, serta keunikan dan rasanya yang khas.\r\n\r\nSejarah Baijiu : Tradisi yang Terpelihara\r\n\r\nBaijiu memiliki akar yang dalam dalam sejarah Cina, dengan catatan pembuatan minuman ini yang dapat ditelusuri lebih dari seribu tahun yang lalu. Pada awalnya, baijiu dianggap sebagai obat herbal yang diolah untuk tujuan medis. Namun, seiring waktu, minuman ini berkembang menjadi minuman keras yang dihargai dalam berbagai acara keagamaan, upacara pernikahan, dan festival.', 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `promo_id` int NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `product_id` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`promo_id`, `type`, `product_id`, `description`, `created_at`, `updated_at`) VALUES
(5, 'diskon', 1, 'Diskon 5% untuk pembelian 2 porsi klepon', '2023-12-12 07:41:37', '2023-12-12 07:41:37'),
(6, 'bonus', 2, 'Beli 1 gratis ??? Gratis bertanya dan memberi saran', '2023-12-12 07:41:58', '2023-12-12 07:41:58'),
(8, 'diskon', 5, 'Diskon 50% untuk pembelian 2 buah xi boba', '2023-12-12 11:31:43', '2023-12-12 11:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `passwordd` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `no_hp`, `passwordd`, `created_at`) VALUES
(1, 'Agung RS', 'ramadhanagung2611@gmail.com', '089623277568', '$2y$10$2Xxb5CSGIWiQu6bi9cbUQeBqH91P5IioKIqwPsJu.ACwoO8fel2h6', '2023-11-25 21:43:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promo_id`),
  ADD KEY `fk_promotions_products` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `fk_promotions_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
