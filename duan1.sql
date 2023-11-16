-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 05:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan11`
--

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

CREATE TABLE `ghe` (
  `id` int(11) NOT NULL,
  `loai_ghe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khung_gio_chieu`
--

CREATE TABLE `khung_gio_chieu` (
  `id` int(11) NOT NULL,
  `gio_bat_dau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `gio_bat_dau`) VALUES
(1, '20h30'),
(2, '7h30'),
(5, '14h'),
(6, '11h20p');

-- --------------------------------------------------------

--
-- Table structure for table `lich_chieu`
--

CREATE TABLE `lich_chieu` (
  `id` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `ngay_chieu` date NOT NULL,
  `idgio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lich_chieu`
--

INSERT INTO `lich_chieu` (`id`, `idphim`, `ngay_chieu`, `idgio`) VALUES
(8, 26, '2023-11-14', 2),
(9, 16, '2023-11-14', 1),
(10, 15, '2023-12-14', 5),
(11, 6, '2023-11-14', 6),
(12, 17, '2023-12-20', 5),
(13, 25, '2023-10-25', 5),
(14, 23, '2023-09-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `traller` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `thoi_luong` varchar(255) NOT NULL,
  `idtl` int(11) NOT NULL,
  `ngaychieu` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `name`, `traller`, `avatar`, `mota`, `thoi_luong`, `idtl`, `ngaychieu`, `status`) VALUES
(6, 'Người vợ cuối cùng ', '22', 'nguoivocuoicung.jpg', 'NGƯỜI VỢ CUỐI CÙNG bao gồm 5 câu chuyện kinh dị: Ding-dong Challenge: Xoay quanh 3 người bạn Bora, Haeyul và Youngbi. Mỗi người đều có một mong muốn riêng và quyết định tham gia vào một cuộc thi nguy hiểm, chấp nhận thử thách thực hiện những vũ đạo trên m', '90', 3, '2023-10-11', '2'),
(7, 'Cuộc chiến Vô cực ', '1', 'Avengers-Infinity_War-Official-Poster.jpg', 'Avengers: Cuộc chiến vô cực (tựa gốc tiếng Anh: Avengers: Infinity War) là một bộ phim điện ảnh đề tài siêu anh hùng của Mỹ năm 2018 dựa trên các nhân vật của Marvel Comics. Phim do Marvel Studios sản xuất và Walt Disney Studios Motion Pictures chịu trách', '80', 4, '2023-12-10', '1'),
(8, 'Người nhện ', '1', 'nguoinhen.jpg', 'Spider-Man: Across the Spider-Verse là bộ phim Người Nhện được đánh giá cao nhất trong 20 năm qua. Danh tính bí mật của Người Nhện là Peter Benjamin Parker, một học sinh trung học tuổi teen và một đứa trẻ mồ côi được nuôi dưỡng bởi Dì May và Chú Ben của a', '120', 4, '2021-04-10', '1'),
(9, 'Siêu nhân cân hết ', '22', 'superman.jpg', 'Batman v Superman: Dawn of Justice is a 2016 American superhero film based on the DC Comics characters Batman and Superman. Distributed by Warner Bros. Pictures, it is a follow-up to the 2013 film Man of Steel and the second film in the DC Extended Univer', '10h', 4, '2020-12-01', '2'),
(10, 'Nhà bà nữ', '4324', 'luadao.jpg', 'Batman v Superman: Dawn of Justice is a 2016 American superhero film based on the DC Comics characters Batman and Superman. Distributed by Warner Bros. Pictures, it is a follow-up to the 2013 film Man of Steel and the second film in the DC Extended Univer', '10h', 2, '2023-12-01', '1'),
(11, 'Tiếng vọng từ địa ngục', '4324', 'tiengvong.jpg', 'Phim ma là phim gì?\r\nPhim kinh dị thường khám phá chủ đề đen tối và có thể liên quan đến các đề tài xúc phạm. Những yếu tố rộng bao gồm quái vật, sự kiện khải huyền và tín ngưỡng tôn giáo hoặc dân gian. Những kỹ thuật làm phim kinh dị đã được chứng minh l', '135', 1, '2022-06-02', '1'),
(12, 'Ma quỷ ám ', '4324', 'quyam.jpg', 'Phim ma là phim gì?\r\nPhim kinh dị thường khám phá chủ đề đen tối và có thể liên quan đến các đề tài xúc phạm. Những yếu tố rộng bao gồm quái vật, sự kiện khải huyền và tín ngưỡng tôn giáo hoặc dân gian. Những kỹ thuật làm phim kinh dị đã được chứng minh l', '12', 1, '2023-12-01', '1'),
(13, 'Love at First Sight', '22', 'download (2).jpg', 'Love at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at First SightLove at ', '122', 3, '2023-12-01', '2'),
(14, 'Through My Window', '22', 'throughmywindow.jpg', 'Through My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My WindowThrough My Window', '150', 3, '2023-12-01', '2'),
(15, 'Bố già', '22', 'download (3).jpg', 'Bố già là một bộ phim điện ảnh hài chính kịch của Việt Nam năm 2021 do Trấn Thành và Vũ Ngọc Đãng đồng đạo diễn. Bộ phim do Thảo Nguyễn đảm nhiệm vai trò sản xuất, dựa trên phần kịch bản do Trấn Thành, Kalei An Nhi và Aquay chấp bút. Phim được Trấn Thành ', '140', 2, '2023-12-01', '1'),
(16, 'Lừa Đểu Gặp Lừa Đảo ', '1', 'luadao.jpg', 'Một câu chuyện tình đầy hài hước xoay quanh cô nhân viên ngân hàng Ina (Baifern). Sau khi bị Petch (Bank) – người bạn trai cũ của mình bỏ trốn và để lại cho mình một món nợ, Ina lại gặp đen đủi một lần nữa khi tiếp tục bị lừa bởi một chuyên gia lừa đảo kh', '110', 2, '2023-12-01', '2'),
(17, 'The nun', '22', 'thenun1.jpg', 'Bộ phim lấy bối cảnh vào năm 1952 tại România, hai nữ tu Công giáo Rôma sống tại Tu viện Cârța đi vào một đường hầm tăm tối, họ cầm theo một chiếc chìa khóa với mục đích lấy lại một di tích Thiên Chúa giáo cổ đại, họ đã bị tấn công bởi một thế lực vô hình', '120', 1, '2023-10-12', '3'),
(23, 'Con tàu chiến thắng', 'jgndt', 'cont.jpg', 'Năm 2092, Trái Đất gần như không thể ở được. Tập đoàn UTS xây dựng một nơi lưu trú mới ngoài vũ rụ cho nhân loại mô phỏng hệ sinh thái trên Trái Đất; tuy nhiên, chỉ một số ít người ưu tú được phép lên và trở thành công dân UTS, trong khi những người còn l', '120', 4, '2023-09-04', '1'),
(24, 'Hôn lễ của em', 'gfh', 'honlecuaem.jpg', 'Thời trung học, vận động viên bơi lội Châu Tiêu Tề đã yêu một nữ sinh mới chuyển trường đến - Vưu Vịnh Từ ngay từ cái nhìn đầu tiên. Cuộc sống sau đó, 15 năm tình yêu dài dằng dặc, tình yêu trong sáng của thời niên thiếu và khờ khạo, chàng trai âm thầm bả', '130', 3, '2022-12-04', '4'),
(25, 'Dân chơi không sợ con rơi', 'g', 'danchoi.jpg', 'Dân Chơi Không Sợ Con Rơi là bộ phim hài chiếu rạp được sản xuất bởi bộ đôi đình đám Thu Trang - Tiến Luật. Bộ phim được giới phê bình đánh giá như bản thi ca tôn vinh giá trị tình cảm gia đình, đặc biệt là tình cha con. Theo chân bộ phim, chúng ta sẽ chứ', '90', 2, '2022-11-24', '2'),
(26, 'Bóng đè', 'fh', 'bongde.jpg', 'Bóng đè là trải nghiệm xảy ra khi tâm trí đã thức giấc nhưng cơ thể vẫn còn trong giấc ngủ. Đa số trường hợp không thể phân biệt được giữa thực và mơ. Theo thống kê, 40% dân số thế giới từng bị bóng đè ít nhất một lần t', '110', 1, '2023-01-24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` int(15) NOT NULL,
  `vai_tro` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int(11) NOT NULL,
  `nametl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`id`, `nametl`) VALUES
(1, 'Kinh dị'),
(2, 'Hài hước'),
(3, 'Tình cảm'),
(4, 'Khoa học viễn tưởng ');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ghe` varchar(255) NOT NULL,
  `ten_phim` varchar(255) NOT NULL,
  `gia` double NOT NULL,
  `ngay_mua_ve` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lich_chieu`
--
ALTER TABLE `lich_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lich_chieu`
--
ALTER TABLE `lich_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
