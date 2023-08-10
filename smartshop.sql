-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2023 at 07:02 AM
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
-- Database: `smartshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `describe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `describe_detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `id_list_blog` int DEFAULT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `img`, `describe`, `describe_detail`, `date`, `view`, `id_list_blog`, `id_user`) VALUES
(47, '3 bước giúp bạn tra cứu thần số học online để bạn có thể hiểu rõ hơn về bản thân', 'thumbnailreview2021-recovered-re.jpg', 'Hiện nay thần số học đã trở thành một trào lưu ở lĩnh vực tâm linh mới của giới trẻ. Thần số học thực chất là khoa học tâm linh chuyên nghiên cứu về các con số và ý nghĩa của chúng đối với cuộc đời của mỗi người. Chúng ta đều sinh ra với một con số riêng, từ đó nói lên tính cách, sở trường và sở đoản của người đó. Dưới đây mình sẽ hướng dẫn các bạn cách tra cứu thần số học online trên điện thoại.', '<h2>Hiện nay thần số học đ&atilde; trở th&agrave;nh một tr&agrave;o lưu ở lĩnh vực t&acirc;m linh mới của giới trẻ. Thần số học thực chất l&agrave; khoa học t&acirc;m linh chuy&ecirc;n nghi&ecirc;n cứu về c&aacute;c con số v&agrave; &yacute; nghĩa của ch&uacute;ng đối với cuộc đời của mỗi người. Ch&uacute;ng ta đều sinh ra với một con số ri&ecirc;ng, từ đ&oacute; n&oacute;i l&ecirc;n t&iacute;nh c&aacute;ch, sở trường v&agrave; sở đoản của người đ&oacute;. Dưới đ&acirc;y m&igrave;nh sẽ hướng dẫn c&aacute;c bạn&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cach-tra-cuu-than-so-hoc-online-1504075\" target=\"_blank\">c&aacute;ch tra cứu thần số học online</a>&nbsp;tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>.</h2>\r\n\r\n<h3><strong>C&aacute;ch tra cứu thần số học online</strong></h3>\r\n\r\n<p><strong>Bước 1</strong>: C&aacute;c bạn truy cập trang&nbsp;<strong>Tra cứu thần số học online</strong>&nbsp;<a href=\"https://tracuuthansohoc.com/\" target=\"_blank\">tại đ&acirc;y</a>.</p>\r\n\r\n<p><strong>Bước 2</strong>: Sau khi đ&atilde; truy cập v&agrave;o trang, bạn chọn&nbsp;<strong>Tra cứu c&aacute;c chỉ số của bạn ngay</strong>. Sau đ&oacute; bạn nhập c&aacute;c th&ocirc;ng tin m&agrave; trang y&ecirc;u cầu, rồi chọn&nbsp;<strong>Tra cứu ngay</strong>.</p>\r\n\r\n<p><img alt=\"Cách tra cứu thần số học online\" src=\"https://cdn.tgdd.vn/Files/2023/01/18/1504075/than_so_hoc_1_2560x2560-800-resize.jpg\" /></p>\r\n\r\n<p><strong>Bước 3</strong>: Hệ thống sẽ t&iacute;nh to&aacute;n con số chủ đạo của bạn, bạn bấm&nbsp;<strong>Xem ngay</strong>&nbsp;để xem luận giải. Cuối c&ugrave;ng chọn&nbsp;<strong>Xem chi tiết luận giải&nbsp;</strong>để biết cụ thể hơn về đường đời, điểm mạnh điểm yếu của bản th&acirc;n nh&eacute;.</p>\r\n\r\n<p><img alt=\"Cách tra cứu thần số học online\" src=\"https://cdn.tgdd.vn/Files/2023/01/18/1504075/than_so_hoc_2_2560x2560-800-resize.jpg\" /></p>\r\n\r\n<p>Như vậy m&igrave;nh đ&atilde; hướng dẫn c&aacute;c bạn c&aacute;ch&nbsp;tra cứu thần số học online, ch&uacute;c c&aacute;c bạn thực hiện th&agrave;nh c&ocirc;ng. Hi vọng b&agrave;i viết n&agrave;y sẽ hữu &iacute;ch đối với c&aacute;c bạn. Đừng qu&ecirc;n chia sẻ b&agrave;i viết đến với mọi người nh&eacute;.</p>\r\n', '2023-02-19 17:43:14', '0', 5, NULL),
(48, '24h công nghệ có gì HOT 19/2: Tổ chức uy tín chấm điểm camera Galaxy S23 Ultra, màn hình iPhone 14 Pro Max gặp sự cố', 'thumbnailreview2021-recovered-re.jpg', 'iPhone 14 Pro và iPhone 14 Pro Max là những chiếc Flagship mới nhất của Apple. Một trong những tính năng chính được công ty quảng cáo trên bộ đôi này là chế độ Always on Display. Tuy nhiên, đã có những sự cố về việc điện thoại bị lưu ảnh màn hình (hiện tượng Burn-in) vì tính năng này. Vậy thực hư ra sao, cùng tìm hiểu nhé!', '<h3><strong>1.&nbsp;Tổ chức uy t&iacute;n chấm điểm camera Galaxy S23 Ultra</strong></h3>\r\n\r\n<p><img alt=\"Galaxy S23 Ultra sẽ đạt hạng mấy theo DxOMark?\" src=\"https://cdn.tgdd.vn/Files/2023/02/18/1511297/samsung-galaxy-s23-ultra-1-3-180223-145830-800-resize.jpg\" /></p>\r\n\r\n<p><a href=\"https://thegioididong.com/dtdd/samsung-galaxy-s23-ultra\" target=\"_blank\">Galaxy S23 Ultra 5G</a>&nbsp;ch&iacute;nh l&agrave; mẫu&nbsp;<a href=\"http://thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;mới c&oacute; camera tốt nhất trong tất cả c&aacute;c d&ograve;ng&nbsp;<a href=\"http://thegioididong.com/dtdd-samsung\" target=\"_blank\">smartphone Samsung</a>. Tuy nhi&ecirc;n nếu đối đầu với c&aacute;c t&ecirc;n tuổi kh&aacute;c th&igrave; m&aacute;y sẽ như thế n&agrave;o?</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/dxomark-xep-hang-camera-samsung-galaxy-s23-ultra-1511297\" target=\"_blank\">Tổ chức uy t&iacute;n chấm điểm camera Samsung Galaxy S23 Ultra</a></p>\r\n\r\n<h3><strong>2.&nbsp;M&agrave;n h&igrave;nh của iPhone 14 Pro Max tiếp tục gặp sự cố</strong></h3>\r\n\r\n<p><img alt=\"Lộ thông tin Flagship iPhone 14 Pro Max gặp sự cố cháy ảnh, liệu có thật?\" src=\"https://cdn.tgdd.vn/Files/2023/02/18/1511346/iphone-notch-tgdd-12331312312-3-180223-194150-800-resize1-180223-211521-800-resize.jpg\" /></p>\r\n\r\n<p><a href=\"http://thegioididong.com/dtdd/iphone-14-pro\" target=\"_blank\">iPhone 14 Pro</a>&nbsp;v&agrave;&nbsp;<a href=\"http://thegioididong.com/dtdd/iphone-14-pro-max\" target=\"_blank\">iPhone 14 Pro Max</a>&nbsp;l&agrave; những chiếc Flagship mới nhất của&nbsp;<a href=\"http://thegioididong.com/apple\" target=\"_blank\">Apple</a>. Một trong những t&iacute;nh năng ch&iacute;nh được c&ocirc;ng ty quảng c&aacute;o tr&ecirc;n bộ đ&ocirc;i n&agrave;y l&agrave; chế độ Always on Display. Tuy nhi&ecirc;n, đ&atilde; c&oacute; những sự cố về việc điện thoại bị lưu ảnh m&agrave;n h&igrave;nh (hiện tượng Burn-in) v&igrave; t&iacute;nh năng n&agrave;y. Vậy thực hư ra sao, c&ugrave;ng t&igrave;m hiểu nh&eacute;!</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/man-hinh-iphone-14-pro-max-gap-su-co-1511346\" target=\"_blank\">M&agrave;n h&igrave;nh iPhone 14 Pro Max tiếp tục gặp sự cố, c&oacute; phải do phần mềm?</a></p>\r\n\r\n<h3><strong>3.&nbsp;ASUS ROG Phone 7 Pro r&ograve; rỉ cấu h&igrave;nh</strong></h3>\r\n\r\n<p><img alt=\"ASUS ROG Phone 7 Pro rò rỉ thông số kỹ thuật, sức mạnh \" src=\"https://cdn.tgdd.vn/Files/2023/02/18/1511345/background109-180223-203347-800-resize.jpg\" /></p>\r\n\r\n<p>Hiện nay, d&ograve;ng&nbsp;smartphone&nbsp;gaming đang c&oacute; xu hướng ph&aacute;t triển mạnh. ROG Phone 7 Pro sắp được&nbsp;<a href=\"http://thegioididong.com/laptop-asus\" target=\"_blank\">ASUS</a>&nbsp;cho ra mắt hứa hẹn sẽ &quot;đ&aacute;nh bại&quot; ho&agrave;n to&agrave;n chiếc Red Magic 8 Pro trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/asus-rog-phone-7-pro-ro-ri-cau-hinh-co-dang-la-ong-trum-1511345\" target=\"_blank\">ASUS ROG Phone 7 Pro r&ograve; rỉ : C&oacute; đ&aacute;ng l&agrave; &#39;&ocirc;ng tr&ugrave;m&#39; l&agrave;ng gaming phone?</a></p>\r\n\r\n<h3><strong>4.&nbsp;Tr&ecirc;n tay POCO X5 Pro 5G</strong></h3>\r\n\r\n<p><img alt=\"Cuối cùng là nhân vật chính - POCO X5 Pro 5G\" src=\"https://cdn.tgdd.vn/Files/2023/02/08/1507956/19-090223-082141-800-resize.jpg\" /></p>\r\n\r\n<p>Về ngoại h&igrave;nh,&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-poco-x5-pro\" target=\"_blank\">POCO X5 Pro 5G</a>&nbsp;sở hữu tr&ecirc;n m&igrave;nh thiết kế vu&ocirc;ng vắn kh&aacute; giống với thế hệ tiền nhiệm l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-poco-x4-pro-5g\" target=\"_blank\">POCO X4 Pro 5G</a>&nbsp;nhưng lại trở n&ecirc;n mỏng, nhẹ hơn trước đ&acirc;y.</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/tren-tay-poco-x5-pro-5g-1507956\" target=\"_blank\">Tr&ecirc;n tay POCO X5 Pro 5G: Thiết kế vu&ocirc;ng vắn, camera 108 MP ấn tượng</a></p>\r\n\r\n<h3><strong>5. C&aacute;ch chặn email th&ocirc;ng b&aacute;o từ Instagram</strong></h3>\r\n\r\n<p><img alt=\"Cách ngăn thông báo Instagram gửi đến email\" src=\"https://cdn.tgdd.vn/Files/2023/02/13/1509500/instagram-3jpg-130223-195703-800-resize.jpg\" /></p>\r\n\r\n<p>Trong b&agrave;i viết n&agrave;y m&igrave;nh sẽ gi&uacute;p c&aacute;c bạn biết c&aacute;ch chặn email th&ocirc;ng b&aacute;o từ Instagram cực kỳ đơn giản lu&ocirc;n nha, bạn kh&ocirc;ng n&ecirc;n bỏ qua b&agrave;i viết n&agrave;y đ&acirc;u đ&oacute;.</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cach-chan-email-thong-bao-tu-instagram-1509500\" target=\"_blank\">Hướng dẫn c&aacute;ch chặn email th&ocirc;ng b&aacute;o từ Instagram để tr&aacute;nh bị l&agrave;m phiền</a></p>\r\n\r\n<h3><strong>6.&nbsp;Galaxy S23 Ultra l&agrave; điện thoại Samsung &quot;xanh nhất&quot;</strong></h3>\r\n\r\n<p><img alt=\"Galaxy S23 Ultra - điện thoại xanh nhất\" src=\"https://cdn.tgdd.vn/Files/2023/02/16/1510869/galaxys23ultra-dienthoaixanhnhat9-170223-175630.jpg\" /></p>\r\n', '2023-02-19 17:45:03', '0', 6, NULL),
(51, 'Lộ thời điểm ra mắt và trang bị trên Xiaomi 13T, sẽ không có chip mới nhất?', 'xiaomi_13_pro_3_91-190223-222717-800-resize.jpg', 'Dòng Xiaomi 13 ra mắt gần đây có thể được xem là chiếc điện thoại nổi bật và mới nhất của Xiaomi nhưng mới đây công ty thông báo sẽ phát hành một loạt mẫu điện thoại cao cấp khác trong năm nay. Theo một nguồn tin bị rò rỉ cho hay, Xiaomi đang chuẩn bị tung ra hai dòng điện thoại mới là Xiaomi 13S và Xiaomi 13T.', '<h3><strong>1.&nbsp;Tổ chức uy t&iacute;n chấm điểm camera Galaxy S23 Ultra</strong></h3>\r\n\r\n<p><img alt=\"Galaxy S23 Ultra sẽ đạt hạng mấy theo DxOMark?\" src=\"https://cdn.tgdd.vn/Files/2023/02/18/1511297/samsung-galaxy-s23-ultra-1-3-180223-145830-800-resize.jpg\" /></p>\r\n\r\n<p><a href=\"https://thegioididong.com/dtdd/samsung-galaxy-s23-ultra\" target=\"_blank\">Galaxy S23 Ultra 5G</a>&nbsp;ch&iacute;nh l&agrave; mẫu&nbsp;<a href=\"http://thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;mới c&oacute; camera tốt nhất trong tất cả c&aacute;c d&ograve;ng&nbsp;<a href=\"http://thegioididong.com/dtdd-samsung\" target=\"_blank\">smartphone Samsung</a>. Tuy nhi&ecirc;n nếu đối đầu với c&aacute;c t&ecirc;n tuổi kh&aacute;c th&igrave; m&aacute;y sẽ như thế n&agrave;o?</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/dxomark-xep-hang-camera-samsung-galaxy-s23-ultra-1511297\" target=\"_blank\">Tổ chức uy t&iacute;n chấm điểm camera Samsung Galaxy S23 Ultra</a></p>\r\n\r\n<h3><strong>2.&nbsp;M&agrave;n h&igrave;nh của iPhone 14 Pro Max tiếp tục gặp sự cố</strong></h3>\r\n\r\n<p><img alt=\"Lộ thông tin Flagship iPhone 14 Pro Max gặp sự cố cháy ảnh, liệu có thật?\" src=\"https://cdn.tgdd.vn/Files/2023/02/18/1511346/iphone-notch-tgdd-12331312312-3-180223-194150-800-resize1-180223-211521-800-resize.jpg\" /></p>\r\n\r\n<p><a href=\"http://thegioididong.com/dtdd/iphone-14-pro\" target=\"_blank\">iPhone 14 Pro</a>&nbsp;v&agrave;&nbsp;<a href=\"http://thegioididong.com/dtdd/iphone-14-pro-max\" target=\"_blank\">iPhone 14 Pro Max</a>&nbsp;l&agrave; những chiếc Flagship mới nhất của&nbsp;<a href=\"http://thegioididong.com/apple\" target=\"_blank\">Apple</a>. Một trong những t&iacute;nh năng ch&iacute;nh được c&ocirc;ng ty quảng c&aacute;o tr&ecirc;n bộ đ&ocirc;i n&agrave;y l&agrave; chế độ Always on Display. Tuy nhi&ecirc;n, đ&atilde; c&oacute; những sự cố về việc điện thoại bị lưu ảnh m&agrave;n h&igrave;nh (hiện tượng Burn-in) v&igrave; t&iacute;nh năng n&agrave;y. Vậy thực hư ra sao, c&ugrave;ng t&igrave;m hiểu nh&eacute;!</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/man-hinh-iphone-14-pro-max-gap-su-co-1511346\" target=\"_blank\">M&agrave;n h&igrave;nh iPhone 14 Pro Max tiếp tục gặp sự cố, c&oacute; phải do phần mềm?</a></p>\r\n\r\n<h3><strong>3.&nbsp;ASUS ROG Phone 7 Pro r&ograve; rỉ cấu h&igrave;nh</strong></h3>\r\n\r\n<p><img alt=\"ASUS ROG Phone 7 Pro rò rỉ thông số kỹ thuật, sức mạnh \" src=\"https://cdn.tgdd.vn/Files/2023/02/18/1511345/background109-180223-203347-800-resize.jpg\" /></p>\r\n\r\n<p>Hiện nay, d&ograve;ng&nbsp;smartphone&nbsp;gaming đang c&oacute; xu hướng ph&aacute;t triển mạnh. ROG Phone 7 Pro sắp được&nbsp;<a href=\"http://thegioididong.com/laptop-asus\" target=\"_blank\">ASUS</a>&nbsp;cho ra mắt hứa hẹn sẽ &quot;đ&aacute;nh bại&quot; ho&agrave;n to&agrave;n chiếc Red Magic 8 Pro trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/asus-rog-phone-7-pro-ro-ri-cau-hinh-co-dang-la-ong-trum-1511345\" target=\"_blank\">ASUS ROG Phone 7 Pro r&ograve; rỉ : C&oacute; đ&aacute;ng l&agrave; &#39;&ocirc;ng tr&ugrave;m&#39; l&agrave;ng gaming phone?</a></p>\r\n\r\n<h3><strong>4.&nbsp;Tr&ecirc;n tay POCO X5 Pro 5G</strong></h3>\r\n\r\n<p><img alt=\"Cuối cùng là nhân vật chính - POCO X5 Pro 5G\" src=\"https://cdn.tgdd.vn/Files/2023/02/08/1507956/19-090223-082141-800-resize.jpg\" /></p>\r\n\r\n<p>Về ngoại h&igrave;nh,&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-poco-x5-pro\" target=\"_blank\">POCO X5 Pro 5G</a>&nbsp;sở hữu tr&ecirc;n m&igrave;nh thiết kế vu&ocirc;ng vắn kh&aacute; giống với thế hệ tiền nhiệm l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-poco-x4-pro-5g\" target=\"_blank\">POCO X4 Pro 5G</a>&nbsp;nhưng lại trở n&ecirc;n mỏng, nhẹ hơn trước đ&acirc;y.</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/tren-tay-poco-x5-pro-5g-1507956\" target=\"_blank\">Tr&ecirc;n tay POCO X5 Pro 5G: Thiết kế vu&ocirc;ng vắn, camera 108 MP ấn tượng</a></p>\r\n\r\n<h3><strong>5. C&aacute;ch chặn email th&ocirc;ng b&aacute;o từ Instagram</strong></h3>\r\n\r\n<p><img alt=\"Cách ngăn thông báo Instagram gửi đến email\" src=\"https://cdn.tgdd.vn/Files/2023/02/13/1509500/instagram-3jpg-130223-195703-800-resize.jpg\" /></p>\r\n\r\n<p>Trong b&agrave;i viết n&agrave;y m&igrave;nh sẽ gi&uacute;p c&aacute;c bạn biết c&aacute;ch chặn email th&ocirc;ng b&aacute;o từ Instagram cực kỳ đơn giản lu&ocirc;n nha, bạn kh&ocirc;ng n&ecirc;n bỏ qua b&agrave;i viết n&agrave;y đ&acirc;u đ&oacute;.</p>\r\n\r\n<p>Xem tiếp:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cach-chan-email-thong-bao-tu-instagram-1509500\" target=\"_blank\">Hướng dẫn c&aacute;ch chặn email th&ocirc;ng b&aacute;o từ Instagram để tr&aacute;nh bị l&agrave;m phiền</a></p>\r\n\r\n<h3><strong>6.&nbsp;Galaxy S23 Ultra l&agrave; điện thoại Samsung &quot;xanh nhất&quot;</strong></h3>\r\n\r\n<p><img alt=\"Galaxy S23 Ultra - điện thoại xanh nhất\" src=\"https://cdn.tgdd.vn/Files/2023/02/16/1510869/galaxys23ultra-dienthoaixanhnhat9-170223-175630.jpg\" /></p>\r\n', '2023-02-19 18:04:55', '0', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cmt`
--

CREATE TABLE `cmt` (
  `id` int NOT NULL,
  `content` varchar(255) NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `date_cmt` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cmt`
--

INSERT INTO `cmt` (`id`, `content`, `iduser`, `idpro`, `date_cmt`) VALUES
(38, '23r4tyt', 39, 31, '04/12/2022'),
(41, 'hay', 40, 23, '07/12/2022');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` text,
  `sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rep` text,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `iduser`, `name`, `email`, `content`, `sent_date`, `rep`, `status`) VALUES
(51, 39, 'Nguyễn Tuấn Kiệt', 'conbadung12603@gmail.com', 'dfdsgdhhgj', '2022-12-01 21:25:56', 'sfdfghh', 1),
(53, 0, 'Nguyễn Tuấn Kiệt', 'conbadung12603@gmail.com', 'fgdfhgjgh', '2022-12-04 03:59:53', '', 1),
(54, 71, 'hoai123', 'hoai@gmail.com', '123', '2022-12-14 05:55:16', 'FGDHJ', 1),
(61, 39, 'Tuấn Kiệt Nguyễn', 'conbadung12603@gmail.com', 'Kiet', '2023-02-22 01:20:40', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `opening_times` varchar(50) DEFAULT NULL,
  `closing_time` varchar(50) DEFAULT NULL,
  `map` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `address`, `phone`, `email`, `opening_times`, `closing_time`, `map`) VALUES
(1, '137 Nguyễn Thị Thập, Thanh Khê Tây, Liên Chiểu, Đà Nẵng', '0918362940', 'kietntpd06323@fpt.edu.vn', '07:00', '18:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8020435024496!2d108.16773891461536!3d16.07575904353352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6e72e66f5%3A0x46619a0e2d55370a!2zMTM3IE5ndXnhu4VuIFRo4buLIFRo4bqtcCwgVGhhbmggS2jDqiBUw6J5LCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1669260133415!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT '',
  `active` tinyint(1) DEFAULT '1' COMMENT '0 là khóa 1 là kích hoạt',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `code` int DEFAULT NULL,
  `verify` tinyint(1) DEFAULT '0' COMMENT '0 chua xm 1 da xm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user`, `pass`, `name`, `tel`, `address`, `active`, `email`, `code`, `verify`) VALUES
(39, 'admin', '202cb962ac59075b964b07152d234b70', 'Tuấn Kiệt Nguyễn', '0918362940', 'Quế Phong, Quế Sơn, Quảng Nam', 1, 'conbadung12603@gmail.com', 0, 0),
(79, 'kietdb12603', '202cb962ac59075b964b07152d234b70', 'Nguyễn Tuấn Kiệt', '0918362940', 'Thôn Tân Phong, Xã Quế Phong', 1, 'tuankiet.aye24@gmail.com', NULL, 0),
(93, 'kietdb2003', '827ccb0eea8a706c4c34a16891f84e7b', 'Tuấn Kiệt Nguyễn', NULL, '', 1, 'tuankiet.aye24@gmail.com', NULL, 0),
(94, 'abc', '827ccb0eea8a706c4c34a16891f84e7b', 'Tuấn Kiệt Nguyễn', NULL, '', 1, 'conbadung12603@gmail.com', NULL, 0),
(95, 'admin12345', '202cb962ac59075b964b07152d234b70', 'Kiet', NULL, '', 1, 'con@gmail.com', NULL, 0),
(106, 'admin123', '202cb962ac59075b964b07152d234b70', 'Tuấn Kiệt Nguyễn', NULL, '', 1, 'kietntpd06323@fpt.edu.vn', NULL, 0),
(107, 'lesjnh', '202cb962ac59075b964b07152d234b70', 'Tuấn Kiệt Nguyễn', '0918362940', 'kakvsk', 1, 'conbadung12603@gmail.com', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `list_blog`
--

CREATE TABLE `list_blog` (
  `id` int NOT NULL,
  `title_list_blog` varchar(255) NOT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `list_blog`
--

INSERT INTO `list_blog` (`id`, `title_list_blog`, `id_user`) VALUES
(1, 'điện thoại', 4),
(5, 'Công Nghệ', 4),
(6, 'Xiaomi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `list_product`
--

CREATE TABLE `list_product` (
  `id` int NOT NULL,
  `namelistpro` varchar(50) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `filter` varchar(50) DEFAULT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `list_product`
--

INSERT INTO `list_product` (`id`, `namelistpro`, `img`, `filter`, `id_user`) VALUES
(220, 'Iphone', 'avt.jpg', 'iphone', NULL),
(221, 'SamSung', 'avt.jpg', 'samsung', NULL),
(222, 'Vivo', 'avt.jpg', 'vivo', NULL),
(223, 'Realme', 'avt.jpg', 'realme', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `id` int NOT NULL,
  `id_cus` int DEFAULT NULL,
  `name_cus` varchar(255) NOT NULL,
  `phone_cus` varchar(255) NOT NULL,
  `email_cus` varchar(255) NOT NULL,
  `address_cus` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int DEFAULT '0' COMMENT '0.chưa xử lí,1.đã xử lí,2.đang giao hàng,3.giao hàng thành công,4. Đã Thanh Toán ,5.hủy',
  `total` int NOT NULL,
  `id_vnpay` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`id`, `id_cus`, `name_cus`, `phone_cus`, `email_cus`, `address_cus`, `payment`, `pay_date`, `status`, `total`, `id_vnpay`) VALUES
(226, 79, 'Nguyễn Tuấn Kiệt', '0918362940', 'tuankiet.aye24@gmail.com', 'Thôn Tân Phong, Xã Quế Phong', 'Trả tiền khi nhận hàng', '2023-02-23 21:51:23', 5, 266900, NULL),
(227, 39, 'Tuấn Kiệt Nguyễn', '0918362940', 'conbadung12603@gmail.com', 'Quế Phong, Quế Sơn, Quảng Nam', 'Trả tiền khi nhận hàng', '2023-02-24 01:43:42', 5, 254555, NULL),
(228, 39, 'Tuấn Kiệt Nguyễn', '0918362940', 'conbadung12603@gmail.com', 'Quế Phong, Quế Sơn, Quảng Nam', 'Trả tiền khi nhận hàng', '2023-02-24 01:46:41', 0, 266900, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int NOT NULL,
  `id_prod` int NOT NULL,
  `quanlity` int NOT NULL,
  `price` int NOT NULL,
  `id_order` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_prod`, `quanlity`, `price`, `id_order`) VALUES
(147, 57, 5, 12345, 225),
(148, 62, 5, 12345, 225),
(149, 62, 10, 12345, 226),
(150, 57, 10, 12345, 226),
(151, 57, 9, 12345, 227),
(152, 62, 10, 12345, 227),
(153, 62, 10, 12345, 228),
(154, 57, 10, 12345, 228);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `price_sale` int DEFAULT '0',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `describe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `describe_detail` text,
  `view` int DEFAULT '0',
  `id_list_prod` int DEFAULT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `price_sale`, `img`, `date`, `describe`, `describe_detail`, `view`, `id_list_prod`, `id_user`) VALUES
(57, 'Iphone', 123456, 12345, 'avt.jpg', '2023-02-18 09:49:04', 'scdvfbgnhmjk', '<p>fhghjkl;</p>\r\n', 110, 221, NULL),
(62, 'Iphone14 Pro Max', 123456, 12345, 'avt.jpg', '2023-02-20 05:57:54', 'Cấu hình Điện thoại iPhone 14 Pro Max\r\n\r\nMàn hình: OLED6.7\"Super Retina XDR\r\n\r\nHệ điều hành: IOS 16\r\n\r\nCamera sau:   Chính 48 MP & Phụ 12 MP, 12 MP\r\n\r\nCamera trước:  12 MP\r\n\r\nChip:  Apple A16 Bionic\r\n\r\nRAM:  6 GB\r\n\r\nDung lượng lưu trữ:  128 GB\r\n\r\nSIM:  1 Nano SIM & 1 eSIMHỗ trợ 5G\r\n\r\nPin, Sạc:  4323 mAh20 W\r\n\r\n', '<h3>Cuối c&ugrave;ng th&igrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-14-pro-max\" target=\"_blank\">iPhone 14 Pro Max</a>&nbsp;cũng đ&atilde; ch&iacute;nh thức lộ diện tại sự kiện ra mắt thường ni&ecirc;n v&agrave;o ng&agrave;y 08/09 đến từ nh&agrave; Apple, kết th&uacute;c bao lời đồn đo&aacute;n bằng một bộ th&ocirc;ng số cực kỳ ấn tượng c&ugrave;ng vẻ ngo&agrave;i đẹp mắt sang trọng.&nbsp;Từ ng&agrave;y 14/10/2022 người d&ugrave;ng đ&atilde; c&oacute; thể mua sắm c&aacute;c sản phẩm iPhone 14 series&nbsp;với đầy đủ phi&ecirc;n bản tại Thế Giới Di Động.</h3>\r\n\r\n<h3>Thiết kế cao cấp v&agrave; vẻ ngo&agrave;i s&agrave;nh điệu</h3>\r\n\r\n<p>Sản phẩm c&oacute; trong m&igrave;nh một diện mạo bắt mắt nhờ lối tạo h&igrave;nh vu&ocirc;ng vức bắt trend tương tự thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone-13-series\" target=\"_blank\">iPhone 13 series</a>, đ&acirc;y được xem l&agrave; kiểu thiết kế rất th&agrave;nh c&ocirc;ng tr&ecirc;n c&aacute;c thế hệ trước khi tạo n&ecirc;n cơn sốt to&agrave;n cầu về kiểu d&aacute;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;cho đến nay.&nbsp;</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101659.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế vuông vức - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101659.jpg\" /></a></p>\r\n\r\n<p>Mặt lưng l&agrave;m từ k&iacute;nh c&ugrave;ng khung th&eacute;p kh&ocirc;ng gỉ gi&uacute;p cho iPhone c&oacute; th&ecirc;m độ bền bỉ để đồng h&agrave;nh c&ugrave;ng bạn được l&acirc;u d&agrave;i hơn, kh&ocirc;ng những thế n&oacute; c&ograve;n l&agrave;m cho thiết bị của bạn trở n&ecirc;n sang trọng v&agrave; đẳng cấp hơn.</p>\r\n\r\n<h3>Đột ph&aacute; với thiết kế Dynamic island</h3>\r\n\r\n<p>Để tối ưu được kh&ocirc;ng gian hiển thị th&igrave; Apple cũng đ&atilde; ch&iacute;nh thức loại bỏ tai thỏ huyền thoại để thay thế v&agrave;o đ&oacute; l&agrave; kiểu bố tr&iacute; h&igrave;nh vi&ecirc;n thuốc độc đ&aacute;o, vừa đem lại v&ugrave;ng hiển thị rộng r&atilde;i hơn m&agrave; đ&acirc;y c&ograve;n l&agrave; một đặc điểm nhận diện dễ d&agrave;ng tr&ecirc;n chiếc iPhone 14 Pro Max.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-030207.jpg\" onclick=\"return false;\"><img alt=\"Hình notch mới mẻ - iPhone 14 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-030207.jpg\" /></a></p>\r\n\r\n<p>Đ&acirc;y được xem l&agrave; một điểm mới về phần m&agrave;n h&igrave;nh tr&ecirc;n d&ograve;ng sản phẩm Pro Max năm nay v&igrave; cụm tai thỏ đ&atilde; được lược bỏ v&agrave; thay thế v&agrave;o đ&oacute; l&agrave; thiết kế h&igrave;nh notch vi&ecirc;n thuốc, đi k&egrave;m với đ&oacute; sẽ l&agrave; t&iacute;nh năng&nbsp;Dynamic Island để biến cụm n&agrave;y trở n&ecirc;n th&uacute; vị hơn qua những th&ocirc;ng b&aacute;o hay th&ocirc;ng tin trạng th&aacute;i.</p>\r\n\r\n<h3>iPhone 14 Pro Max với nhiều m&agrave;u sắc rực rỡ</h3>\r\n\r\n<p><strong>T&iacute;m - iPhone 14 Pro Max Deep Purple</strong></p>\r\n\r\n<p>Một điểm đặc biệt tr&ecirc;n phi&ecirc;n bản n&agrave;y l&agrave; m&agrave;u Deep Purple (t&iacute;m) mới chưa từng c&oacute; tr&ecirc;n những phi&ecirc;n bản trước đ&acirc;y, v&igrave; thế đ&acirc;y chắc hẳn l&agrave; một đặc điểm nhận diện dễ d&agrave;ng tr&ecirc;n iPhone 14 Pro Max, điều n&agrave;y gi&uacute;p bạn trở th&agrave;nh một người d&ugrave;ng rất c&oacute; sức h&uacute;t khi sở hữu cho m&igrave;nh một thiết bị mới nhất đến từ nh&agrave; Apple.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054600.jpg\" onclick=\"return false;\"><img alt=\"Phiên bản màu tím - iPhone 14 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054600.jpg\" /></a></p>\r\n\r\n<p><strong>V&agrave;ng - Gold&nbsp;</strong></p>\r\n\r\n<p>Đối với phi&ecirc;n bản m&agrave;u v&agrave;ng n&agrave;y ta thấy được một diện mạo đẳng cấp v&agrave; cực kỳ sang trọng khi đi k&egrave;m với một bộ khung b&oacute;ng bẩy, tất cả điều n&agrave;y l&agrave;m cho người d&ugrave;ng cảm gi&aacute;c như m&aacute;y được ho&agrave;n thiện với bộ khung từ v&agrave;ng nguy&ecirc;n chất, mang lại một c&aacute;i nh&igrave;n thời thượng hơn mỗi khi bạn cầm nắm điện thoại tr&ecirc;n tay.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054558.jpg\" onclick=\"return false;\"><img alt=\"Phiên bản màu vàng - iPhone 14 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054558.jpg\" /></a></p>\r\n\r\n<p><strong>Bạc - Silver</strong></p>\r\n\r\n<p>M&agrave;u bạc c&oacute; lẽ l&agrave; một phi&ecirc;n bản kh&aacute; được ưa chuộng tr&ecirc;n thị trường điện thoại iPhone trong khoảng thời gian gần đ&acirc;y, bởi tone m&agrave;u trẻ trung c&ugrave;ng phong c&aacute;ch tối giản n&ecirc;n phi&ecirc;n bản n&agrave;y rất dễ phối m&agrave;u với c&aacute;c m&oacute;n phụ kiện như ốp lưng hay d&acirc;y đeo, cho d&ugrave; m&oacute;n phụ kiện của bạn l&agrave; m&agrave;u n&agrave;o đi chăng nữa th&igrave; kết quả sau khi trang bị vẫn sẽ cực kỳ ưng &yacute;.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054556.jpg\" onclick=\"return false;\"><img alt=\"Phiên bản màu bạc - iPhone 14 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054556.jpg\" /></a></p>\r\n\r\n<p><strong>Đen - Space Black</strong></p>\r\n\r\n<p>Từ trước cho đến n&agrave;y th&igrave; c&aacute;c d&ograve;ng điện thoại iPhone lu&ocirc;n c&oacute; sự xuất hiện của phi&ecirc;n bản m&agrave;u đen bởi độ h&uacute;t kh&aacute;ch của n&oacute; phải n&oacute;i l&agrave; cực kỳ đ&ocirc;ng đảo, với c&aacute;c t&iacute;n đồ thời trang theo những tone m&agrave;u tối hay những ai bị m&ecirc; hoặc bởi sự huyền b&iacute; m&agrave; m&agrave;u đen mang lại th&igrave; đ&acirc;y chắc hẳn l&agrave; phi&ecirc;n bản m&agrave; người d&ugrave;ng kh&oacute; l&ograve;ng bỏ qua của d&ograve;ng điện thoại iPhone 14 Pro Max.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054554.jpg\" onclick=\"return false;\"><img alt=\"Phiên bản màu đen - iPhone 14 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-054554.jpg\" /></a></p>\r\n\r\n<h3>M&agrave;n h&igrave;nh chất lượng cho những trải nghiệm xem tuyệt vời</h3>\r\n\r\n<p>M&aacute;y sẽ được sử dụng&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-oled-la-gi-905762\" target=\"_blank\">c&ocirc;ng nghệ m&agrave;n h&igrave;nh OLED</a>&nbsp;với k&iacute;ch thước lớn l&ecirc;n đến 6.7 inch, mang lại kh&ocirc;ng gian rộng r&atilde;i để bạn thao t&aacute;c chơi game dễ d&agrave;ng hơn hay thưởng thức nội dung một c&aacute;ch to r&otilde;.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101705.jpg\" onclick=\"return false;\"><img alt=\"Màn hình chất lượng - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101705.jpg\" /></a></p>\r\n\r\n<p>V&igrave; được trang bị m&agrave;n h&igrave;nh c&oacute; khả năng t&aacute;i hiện m&agrave;u sắc với độ ch&iacute;nh x&aacute;c cao n&ecirc;n đ&acirc;y chắc hẳn sẽ l&agrave; một thiết bị rất ph&ugrave; hợp cho c&aacute;c bạn đang l&agrave;m những c&ocirc;ng việc về đồ họa - thiết kế v&agrave; in ấn sản phẩm tr&ecirc;n điện thoại.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101711.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế hình notch mới - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101711.jpg\" /></a></p>\r\n\r\n<p>Phi&ecirc;n bản lần n&agrave;y c&ograve;n được hỗ trợ th&ecirc;m t&iacute;nh năng m&agrave;n h&igrave;nh AOD (Always On Display) để người d&ugrave;ng c&oacute; thể xem trực tiếp th&ocirc;ng b&aacute;o hay ng&agrave;y, giờ m&agrave; kh&ocirc;ng cần phải k&iacute;ch hoạt m&agrave;n h&igrave;nh thiết bị.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/always-on-display-la-gi-co-hao-pin-khong-huong-dan-1169208\" target=\"_blank\">Always On Display l&agrave; g&igrave;? C&oacute; tốn pin kh&ocirc;ng? C&aacute;ch bật, tắt</a></p>\r\n\r\n<h3>iPhone 14 Pro Max sở hữu cụm camera chất lượng</h3>\r\n\r\n<p><strong>Camera sau 48 MP bắt trọn mọi khung h&igrave;nh cho h&igrave;nh ảnh sắc n&eacute;t</strong></p>\r\n\r\n<p>Về phần chụp ảnh th&igrave; sản phẩm lần n&agrave;y sẽ được trang bị 3 camera sau với camera ch&iacute;nh c&oacute; độ ph&acirc;n giải 48 MP gi&uacute;p bạn bắt trọn mọi khung h&igrave;nh được sắc n&eacute;t, b&ecirc;n cạnh sẽ l&agrave; camera g&oacute;c si&ecirc;u rộng 12 MP v&agrave; cảm biến cuối c&ugrave;ng c&oacute; độ ph&acirc;n giải 12 MP. Đi k&egrave;m với đ&oacute; sẽ l&agrave; cảm biến quad-pixel cao cấp gi&uacute;p n&acirc;ng độ ph&acirc;n giải tr&ecirc;n từng bức h&igrave;nh bạn chụp.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101707.jpg\" onclick=\"return false;\"><img alt=\"Trang bị 3 camera - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101707.jpg\" /></a></p>\r\n\r\n<p>Kh&ocirc;ng chỉ tăng độ ph&acirc;n giải camera m&agrave; lần n&agrave;y Apple c&ograve;n n&acirc;ng cao thuật to&aacute;n xử l&yacute; ảnh gi&uacute;p cho iPhone c&oacute; thể cho ra những bức h&igrave;nh chụp đ&ecirc;m c&oacute; chất lượng tốt hơn, giảm thiểu t&igrave;nh trạng nhiễu hạt hay l&oacute;e s&aacute;ng so với những thế hệ trước đ&acirc;y.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101709.jpg\" onclick=\"return false;\"><img alt=\"Chụp ảnh thiếu sáng tốt - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101709.jpg\" /></a></p>\r\n\r\n<p>T&iacute;ch hợp khả năng quay video đạt chuẩn l&ecirc;n tới 4K HDR ở tốc độ 24, 30 khung h&igrave;nh/gi&acirc;y gi&uacute;p cho người d&ugrave;ng c&oacute; thể sở hữu được nhiều thước phim sắc n&eacute;t v&agrave; cực kỳ chất lượng, ph&ugrave; hợp với những bạn l&agrave;m những c&ocirc;ng việc quay - dựng phim tr&ecirc;n c&aacute;c thiết bị di động.</p>\r\n\r\n<p><strong>Camera selfie g&oacute;c rộng bắt trọn mọi khung h&igrave;nh</strong></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, mặt trước được t&iacute;ch hợp&nbsp;Camera TrueDepth 12 MP c&oacute; hỗ trợ Face ID, điều n&agrave;y để đảm bảo mọi th&ocirc;ng tin của bạn c&oacute; thể an to&agrave;n trước những kẻ x&acirc;m nhập.&nbsp;</p>\r\n\r\n<h3>iPhone 14 Pro Max với chip xử l&yacute; A16 Bionic mang lại sức mạnh đ&aacute;ng kinh ngạc</h3>\r\n\r\n<p>Được trang bị&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/chip-a16-bionic-giup-iphone-14-lan-at-hieu-nang-1461587\" target=\"_blank\">bộ vi xử l&yacute; A16 Bionic</a>&nbsp;sản xuất tr&ecirc;n quy tr&igrave;nh ti&ecirc;n tiến gi&uacute;p cải thiện hiệu suất v&agrave; giảm điện năng ti&ecirc;u thụ so với thế hệ trước đ&oacute;, đ&aacute;p ứng ho&agrave;n hảo trong c&ocirc;ng việc cũng như trong giải tr&iacute;.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101704.jpg\" onclick=\"return false;\"><img alt=\"Hiệu năng mạnh mẽ - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101704.jpg\" /></a></p>\r\n\r\n<p>Kh&ocirc;ng chỉ đ&aacute;p ứng tốt khả năng chơi game m&agrave; đ&acirc;y c&ograve;n l&agrave; thiết bị c&oacute; thể gi&uacute;p bạn xử l&yacute; nhiều c&ocirc;ng việc nhanh ch&oacute;ng, đặc biệt l&agrave; những t&aacute;c vụ xử l&yacute; v&agrave; xuất video h&igrave;nh ảnh. L&agrave; một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-ram-6gb\" target=\"_blank\">điện thoại RAM 6 GB</a>&nbsp;n&ecirc;n người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể an t&acirc;m hơn tr&ecirc;n c&aacute;c t&aacute;c vụ đa nhiệm khi mở c&ugrave;ng l&uacute;c nhiều ứng dụng.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101702.jpg\" onclick=\"return false;\"><img alt=\"Hiệu năng mạnh mẽ - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101702.jpg\" /></a></p>\r\n\r\n<h3>iPhone 14 Pro Max chạy hệ điều h&agrave;nh mới nhất iOS 16</h3>\r\n\r\n<p>Chiếc điện thoại n&agrave;y sẽ được hỗ trợ hệ điều h&agrave;nh iOS 16 kể từ khi k&iacute;ch hoạt m&aacute;y, được bổ sung h&agrave;ng loạt c&aacute;c t&iacute;nh năng mới mẻ để mang đến cho người d&ugrave;ng những ph&uacute;t gi&acirc;y sử dụng v&ocirc; c&ugrave;ng th&uacute; vị.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-030506.jpg\" onclick=\"return false;\"><img alt=\"Tích hợp hệ điều hành iOS 16 - iPhone 14 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-030506.jpg\" /></a></p>\r\n\r\n<p>Những t&iacute;nh năng nổi bật v&agrave; cực kỳ hữu &iacute;ch tr&ecirc;n iOS 16 c&oacute; thể kể đến như: T&ugrave;y chỉnh m&agrave;n h&igrave;nh kh&oacute;a, th&ecirc;m widget mới cho m&agrave;n h&igrave;nh kh&oacute;a, Live Text, t&aacute;ch nền ảnh,...</p>\r\n\r\n<h3>Pin đ&aacute;p ứng đủ cho cả ng&agrave;y d&agrave;i</h3>\r\n\r\n<p>B&ecirc;n trong&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">điện thoại iPhone</a>&nbsp;sẽ được t&iacute;ch hợp vi&ecirc;n pin c&oacute; dung lượng lớn n&ecirc;n người d&ugrave;ng c&oacute; thể an t&acirc;m hơn trong việc sử dụng m&aacute;y phục vụ c&aacute;c t&aacute;c vụ cơ bản cả ng&agrave;y. Đi k&egrave;m với đ&oacute; sẽ l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cong-nghe-sac-nhanh-tren-smartphone-755549\" target=\"_blank\">c&ocirc;ng nghệ sạc nhanh</a>&nbsp;gi&uacute;p bạn c&oacute; thể tối ưu được kha kh&aacute; thời gian chờ đợi thiết bị nạp đầy.</p>\r\n\r\n<p>H&atilde;ng c&ocirc;ng bố iPhone 14 Pro Max c&oacute; khả năng duy tr&igrave; việc xem video li&ecirc;n tục trong 29 giờ, quả thực l&agrave; con số rất ấn tượng để đ&aacute;p ứng tốt c&aacute;c nhu cầu giải tr&iacute; cho d&agrave;nh cho bạn.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101701.jpg\" onclick=\"return false;\"><img alt=\"Sử dụng dài lâu - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-080922-101701.jpg\" /></a></p>\r\n\r\n<h3>Đ&aacute;p ứng mọi nhu cầu lưu trữ với nhiều phi&ecirc;n bản bộ nhớ</h3>\r\n\r\n<p>B&ecirc;n cạnh phi&ecirc;n bản 128 GB th&ocirc;ng thường th&igrave; lần ra mắt n&agrave;y Apple c&ograve;n đưa đến tay người d&ugrave;ng th&ecirc;m 3 sự lựa chọn như: 256 GB, 512 GB v&agrave; 1 TB, điều n&agrave;y nhằm đ&aacute;p ứng c&aacute;c nhu cầu lưu trữ th&ocirc;ng tin với số lượng lớn tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone-14-series\" target=\"_blank\">iPhone 14</a>&nbsp;để đ&aacute;p ứng c&ocirc;ng việc của bạn tốt hơn.&nbsp;</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-150922-105451.jpg\" onclick=\"return false;\"><img alt=\"Đa dạng tùy chọn bộ nhớ - iPhone 14 Pro Max 128GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-150922-105451.jpg\" /></a></p>\r\n\r\n<h3>V&igrave; sao bạn n&ecirc;n chọn mua iPhone 14 Pro Max?</h3>\r\n\r\n<p>Nhờ được trang bị một con chip c&oacute; hiệu năng mạnh mẽ v&agrave; mới nhất đến từ Apple n&ecirc;n iPhone 14 Pro Max c&oacute; thể sẽ đem lại cho người d&ugrave;ng sự mượt m&agrave; tr&ecirc;n mọi t&aacute;c vụ sử dụng, đi k&egrave;m đ&oacute; sẽ l&agrave; cụm camera c&oacute; khả năng ghi h&igrave;nh si&ecirc;u sắc n&eacute;t v&agrave; thu lại những thước phim mượt m&agrave; ổn định.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-031659.jpg\" onclick=\"return false;\"><img alt=\"Sở hữu bên trong nhiều công nghệ hàng đầu - iPhone 14 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-300922-031659.jpg\" /></a></p>\r\n\r\n<h3>So s&aacute;nh th&ocirc;ng số kỹ thuật iPhone 14 Pro Max với iPhone 13 Pro Max</h3>\r\n\r\n<p>Dưới đ&acirc;y sẽ l&agrave; bảng t&oacute;m gọn th&ocirc;ng số kỹ thuật giữa hai phi&ecirc;n bản iPhone 14 Pro Max v&agrave; iPhone 13 Pro Max để người d&ugrave;ng c&oacute; thể đối chiếu một c&aacute;ch trực quan.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Thuộc t&iacute;nh</strong></td>\r\n			<td><strong>iPhone 14 Pro Max</strong></td>\r\n			<td><strong>iPhone 13 Pro Max</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;n h&igrave;nh&nbsp;</strong></td>\r\n			<td>OLED</td>\r\n			<td>OLED</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Hiệu năng</strong></td>\r\n			<td>Apple A16 Bionic 6 nh&acirc;n</td>\r\n			<td>Apple A15 Bionic 6 nh&acirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera sau</strong></td>\r\n			<td>Camera ch&iacute;nh 48 MP &amp; Phụ 12 MP, 12 MP</td>\r\n			<td>3 camera 12 MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera trước</strong></td>\r\n			<td>Camera TrueDepth 12 MP</td>\r\n			<td>Camera TrueDepth 12 MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Bảo mật</strong></td>\r\n			<td>Face ID</td>\r\n			<td>Face ID</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Cổng kết nối</strong></td>\r\n			<td>Lightning</td>\r\n			<td>Lightning</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Đ&acirc;y chắc hẳn l&agrave; một chiếc điện thoại rất ph&ugrave; hợp cho những bạn đang l&agrave;m c&aacute;c c&ocirc;ng việc chuy&ecirc;n về s&aacute;ng tạo nội dung chơi game hay nhiếp ảnh. Ngo&agrave;i ra khi cầm tr&ecirc;n tay chiếc iPhone 14 Pro Max th&igrave; người d&ugrave;ng cũng được to&aacute;t l&ecirc;n một vẻ ngo&agrave;i cực kỳ sang trọng v&agrave; đẳng cấp khi sở hữu cho m&igrave;nh một sản phẩm mới nhất đến từ nh&agrave; Apple.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với một con chip c&oacute; hiệu năng đỉnh cao được trang bị c&ugrave;ng khả năng quay phim chụp ảnh sắc n&eacute;t tr&ecirc;n iPhone 14 Pro Max, gi&uacute;p cho đ&acirc;y hứa hẹn sẽ trở th&agrave;nh chiếc smartphone g&acirc;y được sự ch&uacute; &yacute; v&agrave; săn đ&oacute;n nhất thị trường di động trong năm 2022.</p>\r\n', 20, 220, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'avt.jpg',
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int NOT NULL DEFAULT '1' COMMENT '1.nhân viên, 2.admin',
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `name`, `image`, `phone`, `address`, `email`, `role`, `active`) VALUES
(4, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Tuấn Kiệt Nguyễn', 'Mixigaming-Logo.jpg', '0918362940', '137 Nguyễn Thị Thập', 'conbadung12603@gmail.com', 2, 1),
(16, 'kietdb12603', '827ccb0eea8a706c4c34a16891f84e7b', 'Tuấn Kiệt Nguyễn', 'avt.jpg', '0918362940', '137 Nguyễn Thị Thập', 'Hello@gmail.com123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vnpay`
--

CREATE TABLE `vnpay` (
  `id_vnpay` int NOT NULL,
  `vnp_Amount` varchar(255) NOT NULL,
  `vnp_BankCode` varchar(255) NOT NULL,
  `vnp_BankTranNo` varchar(255) NOT NULL,
  `vnp_CardType` varchar(255) NOT NULL,
  `vnp_OrderInfo` varchar(255) NOT NULL,
  `vnp_PayDate` varchar(255) NOT NULL,
  `code_cart` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vnpay`
--

INSERT INTO `vnpay` (`id_vnpay`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `code_cart`) VALUES
(1, '2001000000', 'NCB', 'VNP13886974', 'ATM', 'thanh toán tại web', '20221125115248', 9107),
(2, '2001000000', 'NCB', 'VNP13888565', 'ATM', 'thanh toán tại web', '20221128094524', 4472),
(3, '2001000000', 'NCB', 'VNP13888565', 'ATM', 'thanh toán tại web', '20221128094524', 4472),
(4, '2501000000', 'NCB', 'VNP13888568', 'ATM', 'thanh toán tại web', '20221128094723', 5964),
(5, '2501000000', 'NCB', 'VNP13888568', 'ATM', 'thanh toán tại web', '20221128094723', 5964),
(6, '2501000000', 'NCB', 'VNP13888575', 'ATM', 'thanh toán tại web', '20221128095241', 3543),
(7, '2501000000', 'NCB', 'VNP13888581', 'ATM', 'thanh toán tại web', '20221128095335', 112),
(8, '2501000000', 'NCB', 'VNP13889359', 'ATM', 'thanh toán tại web', '20221128210640', 1653),
(9, '1000000', 'NCB', 'VNP13889842', 'ATM', 'thanh toán tại web', '20221129130901', 8288),
(10, '1000000', 'NCB', 'VNP13890180', 'ATM', 'thanh toán tại web', '20221129162453', 2916),
(11, '2501000000', 'NCB', 'VNP13890182', 'ATM', 'thanh toán tại web', '20221129162547', 7480),
(12, '7501000000', 'NCB', 'VNP13890291', 'ATM', 'thanh toán tại web', '20221129171325', 7480),
(13, '10001000000', 'NCB', 'VNP13892972', 'ATM', 'thanh toán tại web', '20221202110822', 7434),
(14, '8199000000', 'NCB', 'VNP13894240', 'ATM', 'thanh toán tại web', '20221204094105', 6432),
(15, '5001000000', 'NCB', 'VNP13894346', 'ATM', 'thanh toán tại web', '20221204160814', 1897),
(16, '6298000000', 'NCB', 'VNP13894351', 'ATM', 'thanh toán tại web', '20221204161948', 9401),
(17, '13199000000', 'NCB', 'VNP13894361', 'ATM', 'thanh toán tại web', '20221204162759', 8475),
(18, '6600000000', 'NCB', 'VNP13894363', 'ATM', 'thanh toán tại web', '20221204162901', 741),
(19, '4001000000', 'NCB', 'VNP13894414', 'ATM', 'thanh toán tại web', '20221204184141', 1360),
(20, '2001000000', 'NCB', 'VNP13894417', 'ATM', 'thanh toán tại web', '20221204184352', 1321),
(21, '4001000000', 'NCB', 'VNP13894419', 'ATM', 'thanh toán tại web', '20221204184625', 9458),
(22, '5001000000', 'NCB', 'VNP13894422', 'ATM', 'thanh toán tại web', '20221204184919', 7080),
(23, '9001000000', 'NCB', 'VNP13894440', 'ATM', 'thanh toán tại web', '20221204202609', 1949),
(24, '2501000000', 'NCB', 'VNP13894691', 'ATM', 'thanh toán tại web', '20221205101251', 2898),
(25, '5001000000', 'NCB', 'VNP13896861', 'ATM', 'thanh toán tại web', '20221207001021', 2872),
(26, '4001000000', 'NCB', 'VNP13897058', 'ATM', 'thanh toán tại web', '20221207100121', 5289),
(27, '4001000000', 'NCB', 'VNP13901964', 'ATM', 'thanh toán tại web', '20221212200401', 7916),
(28, '2001000000', 'NCB', 'VNP13903861', 'ATM', 'thanh toán tại web', '20221214125000', 4444);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_blog_user` (`id_user`),
  ADD KEY `FK_blog_listblog` (`id_list_blog`);

--
-- Indexes for table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BL_US` (`iduser`),
  ADD KEY `FK_BL_SP` (`idpro`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_blog`
--
ALTER TABLE `list_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_listblog_user` (`id_user`);

--
-- Indexes for table `list_product`
--
ALTER TABLE `list_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `namelistpro` (`namelistpro`),
  ADD KEY `FK_loai_user` (`id_user`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_order_customer` (`id_cus`),
  ADD KEY `FK_order_vnpay` (`id_vnpay`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_order_detail_order` (`id_order`),
  ADD KEY `FK_order_detail_product` (`id_prod`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sp_loai` (`id_list_prod`),
  ADD KEY `FK_sp_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `list_blog`
--
ALTER TABLE `list_blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `list_product`
--
ALTER TABLE `list_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id_vnpay` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_sp_dmsp` FOREIGN KEY (`id_list_prod`) REFERENCES `list_product` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
