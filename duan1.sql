-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 06:31 AM
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
  `gio_chieu` time NOT NULL,
  `id_lichchieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `gio_chieu`, `id_lichchieu`) VALUES
(1, '07:30:00', 11),
(2, '10:00:00', 13),
(4, '13:20:00', 10),
(5, '15:40:00', 9),
(6, '20:10:00', 8),
(7, '12:00:00', 15),
(8, '10:00:00', 12),
(9, '10:20:00', 14),
(10, '19:00:00', 16),
(11, '11:30:00', 17),
(12, '08:10:00', 18),
(13, '22:20:00', 19),
(14, '21:40:00', 20),
(15, '06:30:00', 21),
(16, '23:10:00', 22),
(17, '19:30:00', 23),
(18, '10:20:00', 26),
(20, '12:00:00', 21),
(21, '20:00:00', 33),
(22, '19:30:00', 34),
(23, '18:20:00', 35),
(25, '10:20:00', 35);

-- --------------------------------------------------------

--
-- Table structure for table `lich_chieu`
--

CREATE TABLE `lich_chieu` (
  `id` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `ngay_chieu` date NOT NULL,
  `trang_thai` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lich_chieu`
--

INSERT INTO `lich_chieu` (`id`, `idphim`, `ngay_chieu`, `trang_thai`) VALUES
(8, 26, '2023-11-21', 0),
(9, 16, '2023-12-25', 1),
(10, 15, '2023-11-23', 0),
(11, 6, '2023-12-14', 1),
(12, 17, '2023-11-27', 0),
(13, 25, '2023-12-22', 1),
(14, 23, '2023-12-06', 0),
(15, 24, '2023-12-09', 1),
(16, 7, '2023-11-29', 1),
(17, 8, '2023-11-24', 0),
(18, 9, '2023-12-08', 1),
(19, 10, '2023-12-12', 1),
(20, 11, '2023-12-09', 0),
(21, 12, '2023-12-10', 1),
(22, 13, '2023-12-11', 1),
(23, 14, '2023-12-13', 1),
(25, 14, '2023-12-14', 0),
(26, 26, '2023-12-15', 1),
(33, 26, '2023-12-16', 0),
(34, 25, '2023-12-16', 1),
(35, 25, '2023-12-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `traller` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `thoi_luong` varchar(255) NOT NULL,
  `idtl` int(11) NOT NULL,
  `ngaychieu` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `name`, `traller`, `avatar`, `mota`, `thoi_luong`, `idtl`, `ngaychieu`, `status`) VALUES
(6, 'Người vợ cuối cùng ', 'nguoivocuoicung.mp4', 'nguoivocuoicung.jpg', 'NGƯỜI VỢ CUỐI CÙNG bao gồm 5 câu chuyện kinh dị: Ding-dong Challenge: Xoay quanh 3 người bạn Bora, Haeyul và Youngbi. Mỗi người đều có một mong muốn riêng và quyết định tham gia vào một cuộc thi nguy hiểm, chấp nhận thử thách thực hiện những vũ đạo trên m', '90', 3, '2023-10-11', '2'),
(7, 'Cuộc chiến Vô cực ', 'cuocchienvocuc.mp4', 'Avengers-Infinity_War-Official-Poster.jpg', 'Avengers: Cuộc chiến vô cực (tựa gốc tiếng Anh: Avengers: Infinity War) là một bộ phim điện ảnh đề tài siêu anh hùng của Mỹ năm 2018 dựa trên các nhân vật của Marvel Comics. Phim do Marvel Studios sản xuất và Walt Disney Studios Motion Pictures chịu trách', '80', 4, '2023-12-10', '1'),
(8, 'Người nhện ', 'spiderman.mp4', 'nguoinhen.jpg', 'Spider-Man: Across the Spider-Verse là bộ phim Người Nhện được đánh giá cao nhất trong 20 năm qua. Danh tính bí mật của Người Nhện là Peter Benjamin Parker, một học sinh trung học tuổi teen và một đứa trẻ mồ côi được nuôi dưỡng bởi Dì May và Chú Ben của a', '120', 4, '2021-04-10', '1'),
(9, 'Moon fall', 'moonfall.mp4', 'superman.jpg', 'Bộ phim bắt đầu với việc tìm cách cứu nhân loại khỏi thảm họa “trăng rơi” với Jocinda (Halle Berry đóng) - Giám đốc NASA trong buồng lái của một tàu không gian cũ kỹ cùng phi hành gia Brian Harper (Patrick Wilson) và chuyên gia vũ trụ nghiệp dư Houseman (John Bradley). Khán giả nhìn thấy các địa điểm quen thuộc trên màn ảnh rộng, ngay cả khi chúng bị xóa mờ như Nhà Trắng, tòa nhà Empire State… bị tàn phá nặng nề.\r\n\r\nHouseman tin rằng Mặt trăng là một “siêu cấu trúc”, khối cầu rỗng được xây dựng cho một số mục đích mà bộ não của con người có thể tưởng tượng. Đạo diễn tiếp tục khắc họa tình trạng lộn xộn có thể xảy ra sau thảm họa nếu Mặt trăng thực sự thoát khỏi quỹ đạo: thủy triều dâng, trọng lực thay đổi và một thứ gọi là “sự chênh lệch khí quyển”…', '10h', 4, '2020-12-01', '2'),
(10, 'Nhà bà nữ', 'nhabanu.mp4', 'nhabanu1.jpg', 'Batman v Superman: Dawn of Justice is a 2016 American superhero film based on the DC Comics characters Batman and Superman. Distributed by Warner Bros. Pictures, it is a follow-up to the 2013 film Man of Steel and the second film in the DC Extended Univer', '10h', 2, '2023-12-01', '1'),
(11, 'Tiếng vọng từ địa ngục', 'tiengvongtudianguc.mp4', 'tiengvong.jpg', 'Phim ma là phim gì?\r\nPhim kinh dị thường khám phá chủ đề đen tối và có thể liên quan đến các đề tài xúc phạm. Những yếu tố rộng bao gồm quái vật, sự kiện khải huyền và tín ngưỡng tôn giáo hoặc dân gian. Những kỹ thuật làm phim kinh dị đã được chứng minh l', '135', 1, '2022-06-02', '1'),
(12, 'Ma quỷ ám ', 'thenun.mp4', 'quyam.jpg', 'Phim ma là phim gì?\r\nPhim kinh dị thường khám phá chủ đề đen tối và có thể liên quan đến các đề tài xúc phạm. Những yếu tố rộng bao gồm quái vật, sự kiện khải huyền và tín ngưỡng tôn giáo hoặc dân gian. Những kỹ thuật làm phim kinh dị đã được chứng minh l', '12', 1, '2023-12-01', '1'),
(13, 'Love at First Sight', 'loveatfirstSight.mp4', 'download (2).jpg', 'Love at First Sight xoay quanh mối tình của Hadley (Haley Lu Richardson) và Oliver (Ben Hardy). Khi Hadley trễ chuyến bay, cô vô tình gặp Oliver và được anh cho mượn sạc điện thoại. Trong thời gian ở sân bay và ngồi cạnh nhau trên máy bay, cả hai nảy sinh', '122', 3, '2023-12-01', '2'),
(14, 'Through My Window', 'throughmywindow.mp4', 'throughmywindow.jpg', 'Through My Window, bộ phim là bản chuyển thể bằng tiếng Tây Ban Nha từ tiểu thuyết dành cho tuổi teen của tác giả người Venezuela Ariana Godoy. Tiểu thuyết ban đầu được tạo trên trang web nổi tiếng Wattpad, đây cũng là nguồn của bộ tiểu thuyết và bộ phim ', '150', 3, '2023-12-01', '2'),
(15, 'Bố già', 'bogia.mp4', 'download (3).jpg', 'Bố già là một bộ phim điện ảnh hài chính kịch của Việt Nam năm 2021 do Trấn Thành và Vũ Ngọc Đãng đồng đạo diễn. Bộ phim do Thảo Nguyễn đảm nhiệm vai trò sản xuất, dựa trên phần kịch bản do Trấn Thành, Kalei An Nhi và Aquay chấp bút. Bộ phim Bố già kể xoay quanh một xóm nghèo có bộ tứ nhiều chuyện Giàu - Sang - Phú - Quý, nhưng nhân vật chính là ông Ba Sang (do Trấn Thành thủ vai) và cậu con trai cứng đầu của mình tên là Quắn (do Tuấn Trần thủ vai).\r\nMặc dù Ba Sang và cậu con trai Quắn hết mực thương yêu nhau, nhưng lại xảy ra nhiều bất đồng trong quan điểm, không thể thấu hiểu nhau vì chênh lệch thế hệ. Mạch phim dẫn dắt đưa bạn đến những câu chuyện cảm động rơi nước mắt giữa hai ba con, đảm bảo là một bộ phim hấp dẫn không thể bỏ qua.', '140', 2, '2022-12-01', '1'),
(16, 'Lừa Đểu Gặp Lừa Đảo ', 'luadeugapluadao.mp4', 'luadao.jpg', 'Lừa Đểu Gặp Lừa Đảo xoay quanh câu chuyện của Ina (Baifern Pimchanok) - một nữ nhân viên ngân hàng xinh đẹp, thông minh, hoạt bát nhưng lại nghèo đến thảm thương. Hẳn là nhiều khán giả sẽ phải thắc mắc một chị gái có công việc ổn định lại thêm nghề tay trái là YouTuber, đã thế rất thông minh và xinh đẹp, tại sao lại nghèo? Vâng, là bởi chị mê trai, đem cả gia tài của mẹ đi thế chấp ngân hàng để lấy tiền cho bồ trẻ - Petch (Bank Thiti) mà nào có ngờ, Petch là một \"phi công\" chuyên đào mỏ, chỉ cần lấy được tiền từ tay chị đẹp là sẽ cao chạy xa bay. Kết quả, Ina nghèo thảm thương, lo cho mình không xong còn phải nói dối gia đình về Petch. Giữa thời điểm bi kịch nhất cuộc đời, Ina vô tình biết Tower (Nadech Kugimiya) - một trùm lửa đảo khi anh có ý định lừa tiền cô nhưng lại bị cô nắm thóp, kết quả Tower bất đắc dĩ phải tham gia vào một phi vụ, giúp Ina lấy lại tiền từ Petch.', '110', 2, '2023-12-01', '2'),
(17, 'The nun', 'thenun.mp4', 'thenun1.jpg', 'Bộ phim lấy bối cảnh vào năm 1952 tại România, hai nữ tu Công giáo Rôma sống tại Tu viện Cârța đi vào một đường hầm tăm tối, họ cầm theo một chiếc chìa khóa với mục đích lấy lại một di tích Thiên Chúa giáo cổ đại, họ đã bị tấn công bởi một thế lực vô hình. Nữ tu Victoria may mắn sống sót đã cầm theo chiếc chìa khóa và chạy trốn khỏi kẻ tấn công, đó là một con ác quỷ xuất hiện với hình dạng một nữ tu, sau đó sơ Victoria đã tự treo cổ mình khi trong tay vẫn còn cầm chặt chiếc chìa khóa. Thi thể của cô được phát hiện bởi Frenchie, một người Pháp gốc Canada sinh sống tại România, anh là một dân làng chở vật tư cho các nữ tu tại tu viện Cârța.\r\nVatican muốn tìm hiểu về cái chết của sơ Victoria vì tự tử là một tội lớn, họ đã triệu tập Cha Burke đến Roma, nơi họ yêu cầu ông đi điều tra cái chết của sơ Victoria nhưng thực chất là họ muốn điều tra về các thế lực siêu nhiên, họ muốn cha Burke đi cùng với sơ Irene đến România để điều tra tình hình. Trong khi sơ Irene đang dạy trẻ em về mối quan hệ giữa tôn giáo và khoa học trong một trường học, viện trưởng của cô đã thông báo với cô rằng cha Burke đã đến để yêu cầu cô đi cùng đến România.', '120', 1, '2023-10-12', '3'),
(23, 'Con tàu chiến thắng', 'contauchienthang.mp4', 'cont.jpg', 'Con tàu Chiến Thắng (tên gốc Tiếng Hàn: 승리호, còn được biết đến với tên tiếng Anh: Space Sweepers) là phim điện ảnh không gian của Hàn Quốc năm 2021 do Jo Sung-hee đạo diễn. Bộ phim do Yoon In-beom và Kim Soo-jin đảm nhiệm vai trò sản xuất, dựa trên phần kịch bản do Yoon Seung-min, Yoo-kang Seo-ae và Jo Sung-hee chấp bút. Tác phẩm do Bidangil Pictures và Dexter Studios chịu trách nhiệm sản xuất, với sự tham gia diễn xuất của Song Joong-ki, Kim Tae-ri, Jin Seon-kyu và Yoo Hae-jin.[2] Được coi là bom tấn lấy bối cảnh ngoài không gian đầu tiên của Hàn Quốc, Con tàu Chiến Thắng lấy bối cảnh năm 2092, với nội dung xoay quanh cuộc phiêu lưu của bốn kẻ lạc loài trên tàu Chiến Thắng sau khi vô tình phát hiện ra một bé gái mang trong mình vũ khí hủy diệt hàng loạt.', '120', 4, '2023-09-04', '1'),
(24, 'Muốn gặp anh', 'muongapanh.mp4', 'muon-gap-anh-4.jpg', 'Tác phẩm dựa trên loạt phim Đài Loan Someday or Oneday (2019) từng gây tiếng vang. Vài năm sau khi hẹn hò, đôi tình nhân phải yêu xa lúc Hoàng Vũ Huyên chuyển công tác đến Thượng Hải. Mỗi ngày, cô đều nhắn tin và facetime với người yêu.\r\n\r\nMột ngày nọ, Hoàng Vũ Huyên nhận ra Lý Tử Duy đã qua đời khi cứu sống cô bảy năm trước, thời gian qua cô chỉ sống trong ảo mộng. Vết thương do vụ tai nạn khiến cô không thể nhớ chuyện gì đã xảy ra hôm đó. Trong quá trình tìm kiếm sự thật, Hoàng Vũ Huyên nhận được một cuốn băng cassette có thể đưa cô trở về quá khứ với thân phận Trần Vận Như - bạn học cấp ba của Lý Tử Duy có ngoại hình giống cô. Hoàng Vũ Huyên quyết định dùng cơ hội đó nhằm cố gắng cứu mạng Lý Tử Duy.', '130', 3, '2022-12-04', '4'),
(25, 'Dân chơi không sợ con rơi', 'danchoikhongsoconroi.mp4', 'danchoi.jpg', 'Dân Chơi Không Sợ Con Rơi là bộ phim hài chiếu rạp được sản xuất bởi bộ đôi đình đám Thu Trang - Tiến Luật. Bộ phim được giới phê bình đánh giá như bản thi ca tôn vinh giá trị tình cảm gia đình, đặc biệt là tình cha con. Theo chân bộ phim, chúng ta sẽ chứng kiến sự “trưởng thành” của một dân chơi lãng tử miền Tây (do Tiến Luật thủ vai) đột nhiên trở thành người cha bất đắc dĩ. Bộ phim khắc họa rất rõ nét và chân thật đời sống người dân tại miền Tây Nam Bộ với những hình ảnh gần gũi, quen thuộc và đậm chất chân quê Việt Nam.', '90', 2, '2022-11-24', '2'),
(26, 'Bóng đè', 'bongde.mp4', 'bongde.jpg', 'Bóng Đè kể về việc ba cha con Thành (Quang Tuấn), Linh (Lâm Thanh Mỹ) và Yến (Mai Cát Vi) trở về sống tại một vùng quê sau khi gia đình trải qua một biến cố lớn là vợ của Thành, tức mẹ của Linh và Yến qua đời. Họ không ngờ rằng chính quyết định này lại đẩy họ đến với chuỗi ngày ám ảnh nhất cuộc đời. Mỗi khi ba không có mặt, Linh và Yến luôn gặp phải những hiện tượng kì lạ, căn nhà im ắng trở nên ồn ào với sự xuất hiện của những vị khách bí ẩn. Không những thế, cả hai chị em liên tục gặp phải hiện tượng bóng đè kể cả ban ngày khiến cả hai vô cùng hoảng sợ. Bác sĩ tâm lý Hạnh (Diệu Nhi) được mời đến để giúp đỡ hai chị em, nhưng chính cô cũng bị cuốn vào những bí ẩn kinh hoàng xảy ra trong ngôi nhà này. ', '110', 1, '2023-01-24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `phong_chieu`
--

CREATE TABLE `phong_chieu` (
  `id` int(11) NOT NULL,
  `ten_phong` varchar(255) NOT NULL,
  `so_ghe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phong_chieu`
--

INSERT INTO `phong_chieu` (`id`, `ten_phong`, `so_ghe`) VALUES
(1, 'Phòng 1', 50),
(2, 'Phòng 2', 40),
(3, 'Phòng 3', 60);

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

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `dia_chi`, `sdt`, `vai_tro`) VALUES
(1, 'nguyet', '123456', 'nguyet1110@gmail.com', '191 Hoàng Mai', 398535275, 0),
(2, 'minh', '123456', 'dinhnguyet11102004@gmail.com', '', 0, 1),
(4, 'minhnguyet', '123456', 'nguyetdtmph33245@fpt.edu.vn', '', 0, 0),
(6, 'huong', '123456', 'vuhuong@gmail.com', '', 0, 0),
(7, 'admin', '123456', 'dinhnguyet11102004@gmail.com', '', 0, 1);

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
-- Indexes for table `phong_chieu`
--
ALTER TABLE `phong_chieu`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `lich_chieu`
--
ALTER TABLE `lich_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `phong_chieu`
--
ALTER TABLE `phong_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
