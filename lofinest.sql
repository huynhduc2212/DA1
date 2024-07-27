-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 02:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lofinest`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `home`) VALUES
(1, 'Tổ yến tinh chế', 0),
(2, 'Tổ yến thô', 0),
(3, 'Tổ yến chưng sẵn', 1),
(4, 'Món soup', 0),
(5, 'Nước yến', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `display_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `id_product`, `img`, `display_order`) VALUES
(1, 1, 'toyentinhche1.webp', 0),
(2, 1, 'toyentinhche1_1.webp', 1),
(3, 1, 'toyentinhche1_2.webp', 2),
(4, 2, 'toyentinhche2.webp', 0),
(5, 2, 'toyentinhche2_1.webp', 1),
(6, 2, 'toyentinhche2_2.webp', 2),
(7, 3, 'toyentinhche3.webp', 0),
(8, 3, 'toyentinhche3_1.webp', 1),
(9, 3, 'toyentinhche3_2.webp', 2),
(10, 3, 'toyentinhche3_3.webp', 3),
(11, 4, 'toyentinhche4.webp', 0),
(12, 4, 'toyentinhche4_1.webp', 1),
(13, 4, 'toyentinhche4_2.webp', 2),
(14, 4, 'toyentinhche4_3.webp', 3),
(15, 5, 'toyentinhche5.webp', 0),
(16, 5, 'toyentinhche5_1.webp', 1),
(17, 5, 'toyentinhche5_2.webp', 2),
(18, 6, 'toyentinhche6.webp', 0),
(19, 6, 'toyentinhche6_1.webp', 1),
(20, 7, 'toyentinhche7.webp', 0),
(21, 7, 'toyentinhche7_1.webp', 1),
(22, 7, 'toyentinhche7_2.webp', 2),
(23, 8, 'toyentinhche8.webp', 0),
(24, 8, 'toyentinhche8_1.webp', 1),
(25, 8, 'toyentinhche8_2.webp', 2),
(26, 8, 'toyentinhche8_3.webp', 3),
(27, 9, 'toyentho1.webp', 0),
(28, 9, 'toyentho1_1.webp', 1),
(29, 9, 'toyentho1_2.webp', 2),
(30, 10, 'toyentho2.webp', 0),
(31, 10, 'toyentho2_1.webp', 1),
(32, 11, 'toyentho3.webp', 0),
(33, 11, 'toyentho3_1.webp', 1),
(34, 11, 'toyentho3_2.webp', 2),
(35, 12, 'toyentho4.webp', 0),
(36, 12, 'toyentho4_1.webp', 1),
(37, 12, 'toyentho4_2.webp', 2),
(38, 13, 'toyenchungsan1.webp', 0),
(39, 13, 'toyenchungsan1_1.webp', 1),
(40, 14, 'toyenchungsan2.webp', 0),
(41, 14, 'toyenchungsan2_1.webp', 1),
(42, 15, 'toyenchungsan3.webp', 0),
(43, 15, 'toyenchungsan3_1.webp', 1),
(44, 15, 'toyenchungsan3_2.webp', 2),
(45, 15, 'toyenchungsan3_3.webp', 3),
(46, 16, 'toyenchungsan4.webp', 0),
(47, 16, 'toyenchungsan4_1.webp', 1),
(48, 16, 'toyenchungsan4_2.webp', 2),
(49, 16, 'toyenchungsan4_3.webp', 3),
(50, 17, 'toyenchungsan5.webp', 0),
(51, 17, 'toyenchungsan5_1.webp', 1),
(52, 17, 'toyenchungsan5_2.webp', 2),
(53, 17, 'toyenchungsan5_3.webp', 3),
(54, 18, 'toyenchungsan6.webp', 0),
(55, 18, 'toyenchungsan6_1.webp', 1),
(56, 18, 'toyenchungsan6_2.webp', 2),
(57, 19, 'toyenchungsan7.webp', 0),
(58, 19, 'toyenchungsan7_1.webp', 1),
(59, 19, 'toyenchungsan7_2.webp', 2),
(60, 19, 'toyenchungsan7_3.webp', 3),
(61, 20, 'toyenchungsan8.webp', 0),
(62, 21, 'monsoup1.webp', 0),
(63, 22, 'monsoup2.webp', 0),
(64, 22, 'monsoup2_1.webp', 1),
(65, 23, 'monsoup3.webp', 0),
(66, 24, 'nuocyen1.webp', 0),
(67, 25, 'nuocyen2.webp', 0),
(68, 26, 'nuocyen3.webp', 0),
(69, 27, 'nuocyen4.webp', 0),
(70, 28, 'nuocyen5.webp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `img`, `des`) VALUES
(1, 'Ngọc yến kim miêu - set quà tết siêu tiết kiệm 2023', 'new1.webp', 'Kế thừa thành công của set quà Tết 2022 - Phụng Khởi Tân Xuân, CiCi Thượng Đỉnh Yến tiếp tục ra mắt hàng loạt set quà Tết sang trọng, đẳng cấp nhất 2023: Ngọc Yến Kim Miêu, Vạn Thế Vương Giả, Thượng Vy Yến Đảo, Fer Valley.\r\nNGỌC YẾN KIM MIÊU \r\nNgọc Yến Kim Miêu (9 món) - 989.000 đồng\r\n- 1 chai rượu Fer Valley vị dâu tằm \r\n- 6 hũ Thượng Vy Yến Biển\r\n- 1 hộp hoa quả sấy dẻo\r\n- 1 hộp trà thượng hạng \r\nNgọc Yến Kim Miêu (10 món) - 1.399.000 đồng \r\n- 1 chai rượu Fer Valley vị dâu tằm \r\n- 6 hũ Thượng Vy Yến Đảo\r\n- 1 hộp hoa quả sấy dẻo\r\n- 1 hộp trà thượng hạng\r\n- 1 hộp mật ong rừng\r\nNgọc Yến Kim Miêu (11 món) - 2.999.000 đồng \r\n- 30gr Tổ yến tinh chế Khánh Hòa \r\n- 1 chai rượu Fer Valley vị dâu tằm \r\n- 6 hũ Thượng Vy Yến Đảo\r\n- 1 hộp hoa quả sấy dẻo\r\n- 1 hộp Mắc ca cao cấp \r\n- 1 hộp cà phê thượng hạng \r\n\r\nFER VALLEY  \r\nHộp rượu Fer Valley 3 chai - 969.000 đồng \r\n- 1 chai rượu Fer Valley vị táo dứa thơm ngon\r\n- 1 chai rượu Fer Valley vị dâu tằm mới lạ\r\n- 1 chai rượu Fer Valley vị mận ngọt độc nhất\r\n1 chai rượu 525ml, được lên men từ hoa quả tự nhiên 100%, vị thơm ngon, thanh mát, tốt cho sức khỏe, dùng được cho cả người lớn và trẻ em. \r\n\r\nVẠN THẾ VƯƠNG GIẢ\r\nVạn Thế Vương Giả 3.589.000 đồng \r\n- 1 hộp yến khô 50g\r\n- 1 hộp vi cá 150g\r\n- 1 hộp táo đỏ 120g\r\n- 1 hộp đường phèn tinh khiết 200g\r\nVạn Thế Vương Giả 4.200.000 đồng - 24.000.000 đồng \r\n- 1 hộp yến khô tùy loại 50g or 100g\r\n- 1 hộp táo đỏ 200g\r\n- 1 hộp đường phèn tinh khiết 200g \r\n\r\nTHƯỢNG VY YẾN ĐẢO \r\n- Set 6 Thượng Vy Yến Đảo 722.000 đồng - 799.000 đồng\r\n- Set 12 Thượng Vy Yến Đảo 1.495.000 đồng - 1.656.000 đồng \r\n- Set 24 Thượng Vy Yến Đảo 2.948.000 đồng - 3.198.000 đồng \r\nThượng Vy Yến Đảo có các vị đông trùng hạ thảo, nhân sâm, saffron cực kì tốt cho sức khỏe, sợi yến dai giòn ăn cực đã.\r\nHộp quà Tết Quý Mão 2023 của CiCi Thượng Đỉnh Yến không những có hình thức sang trọng, bắt mắt mà còn tuyệt vời về chất lượng sản phẩm. Tất cả các sản phẩm đều là hàng tuyển chọn và có giá trị dinh dưỡng cao, tốt cho sức khỏe con người.\r\nNgoài giá thành hợp lí thì còn nhiều ưu đãi hấp dẫn đang chờ đón bạn.'),
(2, 'Bánh trung thu Nguyệt Dạ Yến', 'new2.webp', 'Bí mật “Nguyệt Dạ Yến”\r\nTương truyền, vào đêm trăng Rằm sáng tỏ xuất hiện một đôi chim yến thân phát ngũ quang chao liệng trên bầu trời, được lúc thì sà xuống mặt đất, nơi có khu vườn xanh tươi, cúc vàng bung nở tỏa hương thơm ngát. Đôi chim yến vờn quanh từng đóa cúc, xin hương về cho đồng loại và trao lại những giọt ngọc châu tinh túy. Cảnh tượng này được dân làng bắt gặp, ai nấy đều chắp tay cầu nguyện cho quốc thái dân an, chỉ cần có lòng thành lời nguyền sẽ ứng thực. Về sau, dân làng nơi đây gọi đêm trăng Rằm (15/8 Âm lịch) là Nguyệt Dạ Yến (Đêm trăng yến). Hằng năm, cứ đến ngày này, già trẻ trong làng đều ra khu vườn để gửi ngàn lời cầu nguyện theo cánh hải yến bay đi.\r\nLoại trứng muối được chọn là trứng gà ta, ấn nhẹ ngón tay vào sẽ cảm nhận được độ dẻo, lòng đỏ trứng không quá bóng bẩy đẹp mắt nhưng rất thơm ngon, không bị tanh.\r\n\r\nNguyên liệu đặc biệt nhất có trong nhân bánh chính là yến tươi nguyên chất. Yến tươi kết sợi phủ quanh trứng muối, nằm ở phía sâu nhân bánh, khi cắt bánh ra không dễ gì thấy được. Phải đợi đến khi miếng trứng muối được tách ra thì từng sợi yến tươi mới bắt đầu “lộ diện”. Sở dĩ chúng tôi phải “giấu” từng sợi yến ở tận phía trong là vì để giữ nguyên vẹn sợi yến, giúp sợi yến không bị hòa tan cùng nhân bánh dưới nhiệt độ cao.\r\n\r\nCho bánh ép khuôn\r\nSau khi hoàn thiện phần vỏ bánh và nhân bánh, chúng tôi sẽ đem nguyên liệu đi ép khuôn có logo của CiCi Thượng Đỉnh Yến. Khâu này chúng tôi sẽ sử dụng công nghệ máy móc hiện đại thực hiện để đảm bảo vệ sinh. Từng chiếc bánh sẽ lần lượt được đưa vào hệ thống máy nướng nhiệt độ cao kết hợp tia UV, giúp chiếc bánh vô trùng và bảo quản được lâu hơn.\r\nBánh Trung thu Nguyệt Dạ Yến tận dụng triệt để vị ngọt thanh đến từ các vị thảo mộc, có sử dụng thêm một chút đường phèn để tăng độ ngọt. Về cơ bản, bánh có độ ngọt vừa phải, rất dễ ăn, người có lượng đường huyết cao vẫn có thể sử dụng với lượng vừa đủ.\r\n\r\nBánh Trung thu Nguyệt Dạ Yến không chỉ là món quà trong tiết trăng Rằm mà còn là món ăn giàu giá trị dinh dưỡng. Sản phẩm được chúng tôi chắt chiu, nâng niu từng chút một, đảm bảo sẽ làm hài lòng khách hàng, kể cả những người khó tính nhất.'),
(3, 'SET quà ý nghĩa dành tặng cho đồng nghiệp, đối tác', 'new3.webp', 'Set Ngọc Yến Kim Miêu đầy ắp: Yến đảo chưng, yến biển chưng, tổ yến khô, hoa quả sấy, cà phê bột, hạt mắc ca, trà thảo mộc, mật ong rừng. Giá chỉ từ 9xx/set, quá đầy đủ cho một cái Tết ấm no.\r\n\r\n🧨 Set Vạn Thế Vương Giả sang trọng: Tổ yến khô Khánh Hòa, vi cá nguyên chất, táo đỏ Tân Cương, đường phèn tinh khiết độc quyền. Giá chỉ từ 3xxx/set, sang không thể sang hơn. \r\n\r\n🪔 Các set 6 hũ, 12 hũ, 24 hũ Thượng Vy Yến đảo cũng rất đẹp và sang, phù hợp biếu tặng. \r\nMón quà nhỏ nhưng ý nghĩa lớn. Thêm phần gắn kết, trọn vẹn yêu thương. \r\n\r\n🎀 ĐẶT HÀNG NGAY để nhận ƯU ĐÃI KHỦNG và những phần quà siêu hấp dẫn.\r\n'),
(4, 'Sự Thật: Sử Dụng Yến Sào Có Thực Sự Giảm Stress?', 'new4.webp', 'Tác dụng của tổ yến với sức khỏe tinh thần và hệ thần kinh\r\nThực tiễn từ các nghiên cứu cho thấy, ăn yến sào thường xuyên có tác dụng ổn định thần kinh và giúp cơ thể cảm thấy vui vẻ, nhẹ nhàng hơn. Người già dùng yến sẽ giảm hiện trạng mất ngủ, khó ngủ và khiến tinh thần sảng khoái. Vì vậy, yến sào mang tới công dụng to lớn với sức khỏe tinh thần khi giảm căng thẳng, mệt mỏi kéo dài.\r\n\r\nĐặc biệt, trong yến sào có chứa Threonine – chất tham gia trực tiếp vào quá trình sản xuất collagen và elastin. Điều này giúp làn da thêm mịn màng, tươi trẻ, giúp người dùng luôn tự tin và giảm căng thẳng, mệt mỏi hiệu quả.\r\nTác dụng của tổ yến với sức khỏe tinh thần và hệ thần kinh\r\nThực tiễn từ các nghiên cứu cho thấy, ăn yến sào thường xuyên có tác dụng ổn định thần kinh và giúp cơ thể cảm thấy vui vẻ, nhẹ nhàng hơn. Người già dùng yến sẽ giảm hiện trạng mất ngủ, khó ngủ và khiến tinh thần sảng khoái. Vì vậy, yến sào mang tới công dụng to lớn với sức khỏe tinh thần khi giảm căng thẳng, mệt mỏi kéo dài.\r\n\r\nĐặc biệt, trong yến sào có chứa Threonine – chất tham gia trực tiếp vào quá trình sản xuất collagen và elastin. Điều này giúp làn da thêm mịn màng, tươi trẻ, giúp người dùng luôn tự tin và giảm căng thẳng, mệt mỏi hiệu quả.'),
(5, 'Người Sau Phẫu Thuật Thẩm Mỹ Ăn Yến Tốt Không?', 'new5.webp', 'Hiện nay, nhu cầu thẩm mỹ làm đẹp đang là xu hướng thịnh hành của giới trẻ, được cả phụ nữ và nam giới ưa chuộng. Tuy nhiên, sau quá trình phẫu thuật thẩm mỹ, bạn cần phải được chăm sóc sức khỏe đúng cách với chế độ dinh dưỡng hợp lý, tránh viêm nhiễm hay biến chứng vết mổ. Vậy, người sau phẫu thuật thẩm mỹ ăn yến tốt không? Bài viết dưới đây của Ý An Yến sẽ giúp bạn đi tìm lời giải đáp.\r\n\r\nNgười sau phẫu thuật thẩm mỹ ăn yến tốt không?\r\nSau phẫu thuật, chú trọng vào việc bồi bổ sẽ giúp cơ thể nhanh chóng hồi phục, vết thương cũng chóng lành hơn. Tuy nhiên, bổ sung dưỡng chất sai cách có thể tăng nguy cơ nhiễm trùng.\r\n\r\nVậy, người sau phẫu thuật thẩm mỹ ăn yến tốt không? Các nghiên cứu cho thấy, yến sào là hợp chất bao gồm Glyco và Protein, cung cấp nhiều dưỡng chất thiết yếu cho cơ thể, đặc biệt là bệnh nhân sau phẫu thuật vì Protein cực kỳ cao (45 – 50%).\r\n\r\nBên cạnh đó, theo số liệu của trung tâm nghiên cứu công nghệ sinh học thuộc trung tâm khoa học tự nhiên và công nghệ quốc gia, trong yến sào có chứa 18 loại acid amin, nhất là acid valine và isoleucine giúp phục hồi và chữa lành vết thương, tăng cường miễn dịch, phòng ngừa nhiễm khuẩn sau phẫu thuật.\r\n\r\nVì vậy, sau phẫu thuật thẩm mỹ, bạn hoàn toàn có thể sử dụng yến sào để bồi bổ cơ thể.\r\nNhững ai không nên dùng yến sào sau phẫu thuật thẩm mỹ?\r\nYến sào giúp người sau phẫu thuật thẩm mỹ cải thiện đề kháng, nhanh lành vết thương nhưng không phải ai cũng có thể sử dụng nó để bồi bổ sức khỏe. Cụ thể:\r\n\r\nNgười có thể trạng yếu: Hàm lượng dinh dưỡng trong yến sào rất nhiều. Nếu sau cuộc đại phẫu thuật thẩm mỹ, thể trạng còn yếu mà bổ sung yến sẽ tạo gánh nặng cho hệ tiêu hóa.\r\nNgười có tỳ vị yếu: Tỳ vị yếu sẽ ảnh hưởng tới khả năng hấp thụ dưỡng chất từ yến sào, làm tăng áp lực cho hệ tiêu hóa nên bạn cần lưu ý.\r\nNgười bị đàm thấp, thống phong, tay chân lạnh: Cơ địa người này chuyển hóa kém, không hấp thụ được dưỡng chất mà còn khiến bệnh nặng hơn. Vì vậy, nếu bạn có thể trạng này thì không nên dùng yến sào tẩm bổ sau phẫu thuật thẩm mỹ.'),
(6, 'So sánh yến tinh chế và yến sơ chế – Loại nào tốt hơn?', 'new6.webp', 'Dựa theo cách thức chế biến, người ta chia yến sào thành 3 loại chính là yến thô, yến sơ chế và yến tinh chế. Với đặc điểm cùng mức giá thành có sự khác biệt rõ rệt, khi có nhu cầu sử dụng hầu hết người tiêu dùng đều so sánh yến tinh chế và yến sơ chế cũng như đặt ra câu hỏi nên chọn loại yến sào nào tốt hơn? Những chia sẻ trong bài viết dưới đây sẽ giúp bạn hiểu rõ về yến sào và chọn được sản phẩm tốt nhất cho gia đình mình. \r\n\r\nHướng dẫn phân biệt yến thô, yến sơ chế và yến tinh chế\r\nTheo nghiên cứu khoa học, trong tổ yến có chứa khoảng 42.8 – 54.9% protein; dồi dào glucose; Vitamin B, C, E, PP; muối Natri; Photpho; Sắt; một số acid amin cần thiết khó thay thế như: tyrosin, phenylalanin, cystein và các nguyên tố vi lượng cực kỳ tốt cho sức khỏe. Chính vì thế mà tổ yến trở thành sự lựa chọn hàng đầu của mọi người để bồi bổ, nâng cao hệ miễn dịch cho cơ thể và hồi phục sức khỏe.\r\n\r\nDựa trên quy trình chế biến, yến sào được phân chia thành yến thô, yến sơ chế và yến tinh chế với sự khác nhau hoàn toàn về chất lượng, mùi vị. Thông qua đặc điểm bên ngoài mà người tiêu dùng có thể dễ dàng phân biệt được 3 loại yến này. Cụ thể như sau:\r\n\r\nYến thô\r\nYến thô là những tổ yến nguyên thủy còn lông chim Yến, sau khi khai thác trực tiếp sẽ đóng gói thành sản phẩm luôn. Loại yến sào này ít bị tác động nhất từ quy trình thu hoạch đến khâu thành phẩm nên đảm bảo về chất lượng dinh dưỡng bên trong tổ yến cao. \r\nYến sào tinh chế\r\nNhững tổ yến bị gãy, vỡ trong quá trình thu hoạch hay khi xử lý lông để làm yến sơ chế sẽ được ngâm nước sạch và loại bỏ hết lông, tạp khuẩn. Sau đó, những sợi yến tươi được định hình lại bằng khuôn có dạng giống như tổ yến. Những tổ yến sau khi được định hình sẽ đưa vào hệ thống làm khô tự động đạt tiêu chuẩn. ');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `num_phone` varchar(20) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` enum('Pending','Processing','Shipped','Delivered','Cancelled') DEFAULT 'Pending',
  `address` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `num_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `thumbnail`, `id_category`, `discount_percentage`, `des`, `total`) VALUES
(1, 'Tổ yến tinh chế loại 2', 2350000, 'toyentinhche1.webp', 1, 9, 'Tổ yến tinh chế 2 có ưu điểm gì?\r\nTổ yến tinh chế 2 được làm sạch hoàn toàn từ thiên nhiên dựa theo quy chuẩn vệ sinh an toàn thực phẩm có đầy đủ chứng nhận của Bộ Y tế.\r\nYến trưởng thành 12 năm tuổi, được thả tự nhiên tại vùng đảo Nha Trang – Khánh Hòa. Sản phẩm có thương hiệu lớn cho chất lượng tổ yến tốt nhất cả nước.\r\nDây chuyển chế hiện đại, tiệt trùng. Sản phẩm không có chất phụ gia bảo quản, được sấy khô hoàn toàn – bảo đảm đúng khối lượng và bảo quản rất lâu.\r\nTổ yến tinh chế 2 có thể được chia nhỏ để sử dụng, phần còn lại có thể bảo quản nơi khô ráo hoặc trong tủ lạnh. Chính vì vậy, sản phẩm tổ yến không còn quá “đắt đỏ” như trước đây mà phù hợp với nhiều điều kiện kinh tế hơn.\r\nQuy trình sản xuất Tổ yến tinh chế 2\r\nTổ yến thô được trực tiếp khai thác từ các vách đá và hang động ở vùng đảo Nha Trang – Khánh Hòa.\r\nTổ yến thô sau khi được thu hoạch sẽ chọn lọc tổ to và đẹp nhất, làm sạch và sơ chế tỷ mỷ và kỹ lưỡng.\r\nSau đó, tổ yến sẽ được trực tiếp làm sạch thủ công 3 lần để đảm bảo sạch toàn bộ lông và tạp chất.\r\nTiếp tục cho yến sào vào lò sấy khô với nhiệt độ thích hợp để giữ được độ tươi ngon tự nhiên nhất mà không mất đi một chút dưỡng chất nào.\r\nBước cuối cùng là kiểm duyệt chất lượng sản phẩm. Công đoạn này được thực hiện bằng máy móc hiện đại.\r\nDinh dưỡng bên trong Tổ yến tinh chế 2\r\nCông dụng Tổ yến tinh chế 2\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(2, 'Tổ yến tinh chế loại 1', 2350000, 'toyentinhche2.webp', 1, 9, 'Tổ yến tinh chế 1 có ưu điểm gì?\r\nTổ yến tinh chế 1 được làm sạch hoàn toàn từ thiên nhiên dựa theo quy chuẩn vệ sinh an toàn thực phẩm có đầy đủ chứng nhận của Bộ Y tế.\r\nYến trưởng thành 12 năm tuổi, được thả tự nhiên tại vùng đảo Nha Trang – Khánh Hòa. Sản phẩm có thương hiệu lớn cho chất lượng tổ yến tốt nhất cả nước.\r\nDây chuyển chế hiện đại, tiệt trùng. Sản phẩm không có chất phụ gia bảo quản, được sấy khô hoàn toàn – bảo đảm đúng khối lượng và bảo quản rất lâu.\r\nTổ yến tinh chế 1 có thể được chia nhỏ để sử dụng, phần còn lại có thể bảo quản nơi khô ráo hoặc trong tủ lạnh. Chính vì vậy, sản phẩm tổ yến không còn quá “đắt đỏ” như trước đây mà phù hợp với nhiều điều kiện kinh tế hơn.\r\nQuy trình sản xuất Tổ yến tinh chế 1\r\nTổ yến thô được trực tiếp khai thác từ các vách đá và hang động ở vùng đảo Nha Trang – Khánh Hòa.\r\nTổ yến thô sau khi được thu hoạch sẽ chọn lọc tổ to và đẹp nhất, làm sạch và sơ chế tỷ mỷ và kỹ lưỡng.\r\nSau đó, tổ yến sẽ được trực tiếp làm sạch thủ công 3 lần để đảm bảo sạch toàn bộ lông và tạp chất.\r\nTiếp tục cho yến sào vào lò sấy khô với nhiệt độ thích hợp để giữ được độ tươi ngon tự nhiên nhất mà không mất đi một chút dưỡng chất nào.\r\nBước cuối cùng là kiểm duyệt chất lượng sản phẩm. Công đoạn này được thực hiện bằng máy móc hiện đại.\r\nCông dụng Tổ yến tinh chế 1\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.\r\n', 0),
(3, 'Tổ yến rút lông xuất khẩu', 5600000, 'toyentinhche3.webp', 1, 5, 'Tổ yến rút lông xuất khẩu sản phẩm được dùng cho vua ngày xưa thưởng thức có giá trị dinh dưỡng cao hiện nay để bồi bổ sức khỏe cho phụ nữ mang thai, em bé và người già. Yến sào là một trong số những món ăn Bát trân thịnh hành cho vua chúa xưa và qua đó ngày nay yến đang được ưu chuộng.Lượng dinh dưỡng của Tổ yến rút lông xuất khẩu\r\nTheo báo cáo của Trung tâm Khoa học tự nhiên và Công nghệ Quốc gia, tổ yến sào có chứa tới 18 loại Acid amin có hàm lượng cao như Aspartic acid, Serine, Tyrosine, Phenylalanine, Valine, Arginine, Leucine, … Đặc biệt trong đó có một số loại acid amin cơ thể không tự tổng hợp được có hàm lượng rất cao như: Threonine, Phenylalanine, Leucine, Valine, Isoleucine, Arginine, Methionine.\r\n\r\nBên cạnh đó, tổ yến sào có 31 loại nguyên tố đa – vi lượng cần thiết cho cơ thể con người như Mn, Br, Cu, Zn, Cr, Se …\r\n\r\nCông dụng Tổ yến rút lông xuất khẩu\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(4, 'Tổ yến rút lông thường', 5500000, 'toyentinhche4.webp', 1, 5, 'Thành phần:\r\nTổ Yến thô nguyên chất được loại bỏ 98% tạp chất, giữ nguyên được hình dáng ban đầu.\r\nTrọng lượng:\r\nTổ yến được đóng gói với trọng lượng 100gr\r\nQuy cách đóng gói:\r\nĐóng trong hộp nhựa trong, lớp ngoài túi giấy, kèm theo 1 hộp táo đỏ, 1 hộp đường phèn.\r\nXuất sứ:\r\nNha Trang – Khánh Hoà\r\nHạn sử dụng: 01 năm \r\nĐối tượng sử dụng: \r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy\r\nPhụ nữ mang thai từ 3 tháng trở lên, mẹ bỉm sau sinh từ 1 tháng.Tác dụng:\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(5, 'Tổ yến tinh chế', 2100000, 'toyentinhche5.webp', 1, 10, 'Tổ yến tinh chế có ưu điểm gì?\r\nLà sản phẩm đã được làm sạch hoàn toàn từ thiên nhiên dựa theo quy chuẩn vệ sinh an toàn thực phẩm có đầy đủ chứng nhận của Bộ Y tế.\r\nTổ yến tinh chế được sơ chế và làm sạch toàn bộ tạp chất và lông theo tiêu chuẩn của Bộ Y tế.\r\nYến trưởng thành 12 năm tuổi, được thả tự nhiên tại vùng đảo Nha Trang – Khánh Hòa. Sản phẩm có thương hiệu lớn cho chất lượng tổ yến tốt nhất cả nước.\r\nDây chuyển chế chế hiện đại, tiệt trùng. Sản phẩm không có chất phụ gia bảo quản, được sấy khô hoàn toàn – bảo đảm đúng khối lượng và bảo quản rất lâu.\r\nTổ yến tinh chế có thể được chia nhỏ để sử dụng, phần còn lại có thể bảo quản nơi khô ráo hoặc trong tủ lạnh. Chính vì vậy, sản phẩm tổ yến không còn quá “đắt đỏ” như trước đây mà phù hợp với nhiều điều kiện kinh tế hơn.\r\nQuy trình sản xuất sản phẩm Tổ yến tinh chế \r\nTổ yến thô được trực tiếp khai thác từ các vách đá và hang động ở vùng đảo Nha Trang – Khánh Hòa.\r\nTổ yến thô sau khi được thu hoạch sẽ chọn lọc tổ to và đẹp nhất, làm sạch và sơ chế tỷ mỷ và kỹ lưỡng.\r\nSau đó, tổ yến sẽ được trực tiếp làm sạch thủ công 3 lần để đảm bảo sạch toàn bộ lông và tạp chất.\r\nTiếp tục cho yến sào vào lò sấy khô với nhiệt độ thích hợp để giữ được độ tươi ngon tự nhiên nhất mà không mất đi một chút dưỡng chất nào.\r\nBước cuối cùng là kiểm duyệt chất lượng sản phẩm. Công đoạn này được thực hiện bằng máy móc hiện đại.\r\nCông dụng Tổ yến tinh chế\r\n\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(6, 'Tổ yến tinh chế VIP độc quyền', 2700000, 'toyentinhche6.webp', 1, 6, 'Tổ yến tinh chế vip Độc Quyền có ưu điểm gì?\r\nTổ yến là một trong những sản vật quý hiếm nhất của vùng biển Nha Trang – Khánh Hòa. Tổ yến tinh chế vip Độc Quyền chắc chắn sẽ mang nhiều điểm nổi bật hơn các sản phẩm khác trong phân khúc. Sản phẩm có những ưu điểm chính sau:\r\n\r\nLà sản phẩm đã được làm sạch hoàn toàn từ thiên nhiên dựa theo quy chuẩn vệ sinh an toàn thực phẩm có đầy đủ chứng nhận của Bộ Y tế.\r\nTổ yến tinh chế vip Độc Quyền được sơ chế và làm sạch toàn bộ tạp chất và lông theo tiêu chuẩn của Bộ Y tế.\r\nYến trưởng thành 12 năm tuổi, được thả tự nhiên tại vùng đảo Nha Trang – Khánh Hòa. Sản phẩm có thương hiệu lớn cho chất lượng tổ yến tốt nhất cả nước.\r\nDây chuyển chế chế hiện đại, tiệt trùng. Sản phẩm không có chất phụ gia bảo quản, được sấy khô hoàn toàn – bảo đảm đúng khối lượng và bảo quản rất lâu.\r\nTổ yến tinh chế vip Độc Quyền có thể được chia nhỏ để sử dụng, phần còn lại có thể bảo quản nơi khô ráo hoặc trong tủ lạnh. Chính vì vậy, sản phẩm tổ yến không còn quá “đắt đỏ” như trước đây mà phù hợp với nhiều điều kiện kinh tế hơn.\r\nQuy trình sản xuất sản phẩm tổ yến tinh chế vip Độc Quyền\r\n\r\nTổ yến thô được trực tiếp khai thác từ các vách đá và hang động ở vùng đảo Nha Trang – Khánh Hòa.\r\nTổ yến thô sau khi được thu hoạch sẽ chọn lọc tổ to và đẹp nhất, làm sạch và sơ chế tỷ mỷ và kỹ lưỡng.\r\nSau đó, tổ yến sẽ được trực tiếp làm sạch thủ công 3 lần để đảm bảo sạch toàn bộ lông và tạp chất.\r\nTiếp tục cho yến sào vào lò sấy khô với nhiệt độ thích hợp để giữ được độ tươi ngon tự nhiên nhất mà không mất đi một chút dưỡng chất nào.\r\nBước cuối cùng là kiểm duyệt chất lượng sản phẩm. Công đoạn này được thực hiện bằng máy móc hiện đại. Và tổ yến vượt qua khâu kiểm định mới là Tổ yến tinh chế Vip Độc Quyền\r\nCông dụng Tổ yến tinh chế VIP độc quyền\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(7, 'Tổ yến tinh chế cho bé BaBy(loại 2)', 3100000, 'toyentinhche7.webp', 1, 6, 'Tổ yến tinh chế cho bé Baby 2 là tổ yến đã qua công đoạn tinh tế, bao gồm 100% vụn yến thiên nhiên Nha Trang. Tổ yến tươi nguyên chất, không pha tạp và qua kiểm định nghiêm ngặt theo tiêu chuẩn bộ y tế. Tổ yến nguyên thiên nhiên sau khi tinh chế (nhặt lông, loại bỏ tạp chất, …) sẽ sót lại vụn yến. Vụn yến sau đó được làm sạch và định hình lại thành hình dạng tổ yến.\r\nDo đó giá thành của tổ yến tinh chế Baby 2 sẽ thấp hơn khá nhiều tổ yến nguyên sợi, phù hợp với điều kiện kinh tế với nhiều khách hàng. Nhưng không vì thế mà tổ yến tinh chế baby mất đi giá trị của mình. Sản phẩm của chúng tôi đảm bảo 100% chất lượng ban đầu, cả dinh dưỡng lẫn hương vị.\r\n\r\nSản phẩm này phù hợp hơn khi chăm sóc người cao tuổi, trẻ em, bà bầu và người ốm. Bởi vụn yến sẽ tạo cảm giác dễ ăn hơn và dễ dàng được tiêu hóa và hấp thụ dinh dưỡng. Dành cho bạn nào chưa biết thì tổ yến có chứa tới 18 loại Acid Amin quý, có cả những loại cơ thể không thể tự tổng hợp được. Cùng với đó là 31 loại nguyên tố đa – vi lượng thiết yếu cho sự phát triển của cơ thể.\r\nYến sào từ xưa đến nay luôn là một trong những món ăn quý hiểm, “Bát Trân” được ưa chuộng bởi các bậc đế vương với công dụng bồi bổ sức khỏe rất lớn.Ngày nay, tổ yến vẫn giữ nguyên được giá trị của mình nhưng đã phù hợp rộng rãi với nhiều khách hàng hơn bởi quy trình khai thác dễ dàng hơn xưa rất nhiều.\r\nCông dụng Tổ tinh chế cho bé Baby 2\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(8, 'Tổ yến tinh chế cho bé BaBy(loại 1)', 1950000, 'toyentinhche8.webp', 1, 15, 'Tổ yến tinh chế cho bé Baby 1 có đặc điểm gì?\r\n\r\nTổ yến tinh chế cho bé Baby 1 là tổ yến đã qua công đoạn tinh tế, bao gồm 100% vụn yến thiên nhiên Nha Trang. Tổ yến tươi nguyên chất, không pha tạp và qua kiểm định nghiêm ngặt theo tiêu chuẩn bộ y tế. Tổ yến nguyên thiên nhiên sau khi tinh chế (nhặt lông, loại bỏ tạp chất, …) sẽ sót lại vụn yến. Tuy nhiên, vụn yến được lựa chọn cho yến tinh chế Baby 1 là vụn sơ mướp (không phải vụn hoàn toàn). Vụn yến sau đó được làm sạch và định hình lại thành hình dạng tổ yến.\r\nChất lượng tổ yến tinh chế cho bé Baby 1Sản phẩm tổ yến được sấy khô 100%, nói không với cân thiếu, dối trá khách hàng.\r\nNói không với chất tăng trọng, độn tạp chất phụ gia độc hại.\r\nPhát hiện yến giả - Bồi đền 500% giá trị sản phẩm cho khách hàng.\r\nHàng cân đủ 100% (thường dư cho khách 1-2gr). ', 0),
(9, 'Tổ yến thô loại 4', 1499000, 'toyentho1.webp', 2, 13, 'Tổ Yến thô loại 4 là loại tổ yến còn lông được tuyển chọn từ các tổ góc AB, già tổ, được thu hoạch từ các nhà yến 6 năm tuổi.\r\n\r\nThành phần: Tổ Yến thô Nha Trang 4 nguyên chất 100% chưa qua sơ chế, còn nguyên tình trạng mới thu hoạch.\r\nTrọng lượng: Tổ yến được đóng gói với trọng lượng 50gr và 100gr.\r\nQuy cách đóng gói: Đóng trong hộp nhựa trong (10-13 tổ/hộp), lớp ngoài túi giấy, kèm theo 1 hộp táo đỏ, 1 hộp đường phèn.\r\nXuất sứ: Nha Trang – Khánh Hoà.\r\nHạn sử dụng: Có thể bảo quản và sử dụng trong 01 năm.\r\nUy tín: Không pha trộn tạp chất, mủ trôm; không độn đường, muối; không sử dụng các chất tẩy trấng, làm màu; bảo hành lỗi 1 đổi 1 do nhà sản xuất. \r\nĐối tượng sử dụng: Phụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, bà bầu từ 3 tháng trở lên, mẹ bỉm sau sinh từ 1 tháng.\r\nCông dụng:\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(10, 'Tổ yến thô loại 3', 1649000, 'toyentho2.webp', 2, 12, 'Tổ yến thô nha trang 3 nguồn thực phẩm sạch, chứa nhiều chất dinh dưỡng cần thiết cho sức khỏe. Một vài công dụng như:\r\n\r\nTổ Yến Thô Nha Trang 3 có nhiều khoáng chất quan trọng và 18 loại Acid Amin cơ thể không tự tổng hợp được.\r\nYến thô tổ AB, không tạp chất, nhà yến 6 năm tuổi.\r\nGiúp tăng cường sức khỏe, tăng sức đề kháng cho cơ thể.\r\nCICI Thượng Đỉnh Yến đảm bảo về chất lượng sản phẩm.\r\n1. Công dụng của tổ yến đối với sức khỏe\r\n\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(11, 'Tổ yến thô loại 2', 2000000, 'toyentho3.webp', 2, 10, '1. Tổ yến thô nha trang VIP 2 đặc điểm và phân loại?\r\nTổ yến chứa rất nhiều chất dinh dưỡng có lợi cho sức khỏe, và tổ yến thô có thể chế biến được nhiều món và hương vị tự nhiên nhất. Vì vậy, yến sào luôn là sự lựa chọn hàng đầu trong các thực phẩm bồi bổ sức khỏe, đặc biệt là phụ mang thai và sau sinh, người già hay người ốm sử dụng yến đều đặn tăng khả năng hồi phục rất nhanh.\r\n\r\nYến sào hiện nay trên thị trường được phân ra nhiều loại, dựa vào nguồn gốc, nơi hình thành (Yến nhà, Yến đảo) và xuất xứ, màu sắc (Bạch yến, Hồng yến, Huyết yến và Yến vàng). Tùy vào độ khan hiếm của chúng và hàm lượng dinh dưỡng, các loại yến sào sẽ có giá trị kinh tế khác nhau trên thị trường.\r\n\r\nTổ yến thô trên thị trường có sự chênh lệch giá do chất lượng, nhu cầu của khách hàng và sự khác biệt giữa các loại. Điều này gây nên hoang mang cho người tiêu dùng, cao quá thì sợ mình mua đắt còn rẻ quá thì sợ hàng giả, hàng nhái.\r\n\r\nTổ yến thô đảo nói chung và Tổ yến thô đảo Nha Trang nói riêng là món ăn cao cấp, từ xưa chỉ dành cho giới quý tộc, quan lại và vua chúa. Ngày nay, tổ yến vẫn giữ được sự cao cấp của mình nhưng đã phổ biến hơn trên thị trường, mọi người đều có thể sử dụng. Và hơn hết, món ăn này rất ngon miệng cùng với giá trị dinh dưỡng vô cùng lớn.\r\n\r\nĐúng như tên gọi, Tổ yến thô Nha Trang là loại yến nguyên chất 100% chưa qua sơ chế, xử lý và, còn nguyên trạng từ trên vách đá mang về. Tổ yến thô nguyên lông có mùi thơm đặc trưng, sợi yến rất dai và nở nhiều hơn tổ yến tinh chế. Đặc biệt, tổ yến thô dễ dàng để phân biệt hàng thật và hàng giả.\r\n\r\nNếu có nhiều thời gian rảnh rỗi thì hãy chọn tổ yến còn lông để nhặt thay cho tổ yến tinh chế, tránh những trường hợp mất chất dinh dưỡng trong yến, nhưng chú ý phải nhặt lông tổ yến thật sạch bạn nhé vì ăn phải lông yến sẽ mất đi cảm giác ngon miệng.\r\n\r\nNếu bạn không có thời gian rảnh, luôn phải dành thời gian cho công việc nhưng vẫn muốn chăm sóc tổ ấm của mình, hãy tham khảo các sản phẩm tổ yến tinh chế 100% yến tươi tự nhiên!2. Tổ yến thô nha trang VIP 2 có những công dụng gì?\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(12, 'Tổ yến thô loại 1', 2350000, 'toyentho4.webp', 2, 9, 'Đặc điểm Tổ yến thô nha trang VIP loại 1\r\nTổ yến thô Nha Trang nguyên lông được phân loại tùy thuộc và kích thước và lượng tạp chất bên trong. Đặc điểm củaTổ yến thô Nha Trang 1:\r\n\r\nTổ yến Nha Trang thô nguyên lông, từ chim yến 12 năm tuổi.\r\nLoại tổ chữ A, ít lông, không bụng và ít tạp chất.\r\nSợi yến to và dày, có mùi thơm đặc trưng.\r\nLà loại tổ yến thô có chất lượng cao cấp nhất.\r\nTổ yến Nha Trang từ xa xưa đã được coi là “mỹ thực” chỉ dành cho vua chúa, quý tộc bởi sự quý hiếm và dinh dưỡng mà nó mang lại. Hiện tại Tổ yến Nha Trang đã trở nên phổ biến và dễ tiếp cận hơn với khách hàng. Nhưng không vì thế mà nó mất đi giá trị vốn có. Tổ yến chứa rất nhiều chất dinh dưỡng có lợi, trong đó có những vi chất mà cơ thể không tự tổng hợp được, cùng hương vị thơm ngon. Chính vì vậy, Tổ yến luôn là sản phẩm được lựa chọn nhiều nhất để bồi bổ sức cơ thể.Công dụng Tổ yến tinh chế VIP loại 1Tổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.', 0),
(13, 'Yến chưng khang phục 2', 260000, 'toyenchungsan1.webp', 3, 0, 'Khang Phục 2 được chế tác từ tổ yến đảo Nha Trang tự nhiên 100%. Chim yến trưởng thành được lựa chọn từ 6 – 12 năm tuổi, cho sản phẩm yến sào chất lượng nhất, ngon nhất và bổ dưỡng nhất.\r\nCông thức Khang phục 1 độc quyền với 18 vị thảo mộc quý hiếm. Tất cả nguyên liệu được hòa quyện với nhau theo tỉ lệ vàng về hương vị. Sợi yến nở to, dai, thơm mùi thảo mộc. Vị dai giòn hòa với hương vị thanh mát, vị thơm bùi dịu nhẹ của Kim Bài khó cưỡng, hương vị khó quên.\r\nSản xuất yến chưng bằng máy móc tiêu chuẩn hiện đại, nói không với chất bảo quản và phụ gia độc hại, kéo dài hạn sử dụng.\r\nCông dụng:\r\n\r\nLàm chậm quá trình lão hóa, giảm nám, tàn nhang, làm đầy các nếp nhăn, bổ máu, mát gan, cải thiện thị lực, lưu thông khí huyết.\r\nHướng dẫn bảo quản\r\n\r\nSản phẩm khi nhận vẫn còn nóng ấm, để nguội, và bảo quản ở ngăn mát tủ lạnh ( hũ đã mở nắp mình sử dụng hết trong ngày).\r\nSản phẩm Yến Chưng Tươi của Cici Thượng Đỉnh Yến sử dụng ngon và bổ dưỡng nhất trong vòng 10 ngày\r\nCách dùng\r\n\r\nThời gian ăn Yến tốt nhất trong ngày :\r\nBuổi sáng trước khi ăn sáng\r\nBuổi tối trước khi đi ngủ 30 phút đến 1 tiếng ( không ăn yến sau 9h30 tối )\r\nGiữa 2 bữa chính\r\nLưu ý mình nên ăn yến khi bụng đói\r\n\r\nQuy cách đóng gói:\r\n\r\nSản phẩm được đựng bằng hũ thuỷ tinh tiệt trùng và hút chân không cùng túi giấy bên ngoài.\r\nGiao hàng:\r\n\r\nGiao hàng và thanh toán linh hoạt trong 2h từ khi đặt hàng tại nội thành Hà Nội/ Hồ Chí Minh.\r\nĐối tượng sử dụng:\r\n\r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, nam giới (bà bầu dưới 7 tháng không sử dụng được sản phầm này).', 0),
(14, 'Yến chưng khang phục 1', 250000, 'toyenchungsan2.webp', 3, 0, 'Khang Phục 1 được chế tác từ tổ yến đảo Nha Trang tự nhiên 100%. Chim yến trưởng thành được lựa chọn từ 6 – 12 năm tuổi, cho sản phẩm yến sào chất lượng nhất, ngon nhất và bổ dưỡng nhất.\r\nCông thức chưng yến tươi Ngọc Nữ 1 độc quyền với 18 vị thảo mộc quý hiếm. Tất cả nguyên liệu được hòa quyện với nhau theo tỉ lệ vàng về hương vị. Sợi yến nở to, dai, thơm mùi thảo mộc. Vị dai giòn hòa với hương vị thanh mát, vị thơm bùi dịu nhẹ của Kim Bài khó cưỡng, hương vị khó quên.\r\nSản xuất yến chưng bằng máy móc tiêu chuẩn hiện đại, nói không với chất bảo quản và phụ gia độc hại, kéo dài hạn sử dụng.\r\nCông dụng:\r\n\r\nLàm chậm quá trình lão hóa, giảm nám, tàn nhang, làm đầy các nếp nhăn, bổ máu, mát gan, cải thiện thị lực, lưu thông khí huyết.\r\nHướng dẫn bảo quản\r\n\r\nSản phẩm khi nhận vẫn còn nóng ấm, để nguội, và bảo quản ở ngăn mát tủ lạnh ( hũ đã mở nắp mình sử dụng hết trong ngày).\r\nSản phẩm Yến Chưng Tươi của Cici Thượng Đỉnh Yến sử dụng ngon và bổ dưỡng nhất trong vòng 10 ngày\r\nCách dùng\r\n\r\nThời gian ăn Yến tốt nhất trong ngày :\r\nBuổi sáng trước khi ăn sáng\r\nBuổi tối trước khi đi ngủ 30 phút đến 1 tiếng ( không ăn yến sau 9h30 tối )\r\nGiữa 2 bữa chính\r\nLưu ý mình nên ăn yến khi bụng đói\r\n\r\nQuy cách đóng gói:\r\n\r\nSản phẩm được đựng bằng hũ thuỷ tinh tiệt trùng và hút chân không cùng túi giấy bên ngoài.\r\nGiao hàng:\r\n\r\nGiao hàng và thanh toán linh hoạt trong 2h từ khi đặt hàng tại nội thành Hà Nội/ Hồ Chí Minh.\r\nĐối tượng sử dụng:\r\n\r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, nam giới (bà bầu dưới 7 tháng không sử dụng được sản phầm này).', 0),
(15, 'Yến chưng bách niên 2', 255000, 'toyenchungsan3.webp', 3, 0, 'Đặc điểm sản phẩm:\r\n\r\nBách Niên 2 được chế tác từ tổ yến đảo Nha Trang tự nhiên 100%. Chim yến trưởng thành được lựa chọn từ 6 – 12 năm tuổi, cho sản phẩm yến sào chất lượng nhất, ngon nhất và bổ dưỡng nhất.\r\nCông thức chưng yến tươi Bách Niên 2 độc quyền với 18 vị thảo mộc quý hiếm. Tất cả nguyên liệu được hòa quyện với nhau theo tỉ lệ vàng về hương vị. Sợi yến nở to, dai, thơm mùi thảo mộc. Vị dai giòn hòa với hương vị thanh mát, hương vị khó quên.\r\nSản xuất yến chưng bằng máy móc tiêu chuẩn hiện đại, nói không với chất bảo quản và phụ gia độc hại, kéo dài hạn sử dụng.\r\nCông dụng:\r\n\r\nGiúp hỗ trợ hồi phục sinh lực, cân bằng đường huyết, chống mỡ trong máu, đại bổ nguyên khí, chắc gân khỏe xương, tăng cường trí nhớ...\r\nHướng dẫn bảo quản\r\n\r\nSản phẩm khi nhận vẫn còn nóng ấm, để nguội, và bảo quản ở ngăn mát tủ lạnh ( hũ đã mở nắp mình sử dụng hết trong ngày).\r\nSản phẩm Yến Chưng Tươi của Cici Thượng Đỉnh Yến sử dụng ngon và bổ dưỡng nhất trong vòng 10 ngày\r\nCách dùng\r\n\r\nThời gian ăn Yến tốt nhất trong ngày :\r\nBuổi sáng trước khi ăn sáng\r\nBuổi tối trước khi đi ngủ 30 phút đến 1 tiếng ( không ăn yến sau 9h30 tối )\r\nGiữa 2 bữa chính\r\nLưu ý mình nên ăn yến khi bụng đói\r\n\r\n \r\n\r\nQuy cách đóng gói:\r\n\r\nSản phẩm được đựng bằng hũ thuỷ tinh tiệt trùng và hút chân không cùng túi giấy bên ngoài.\r\nGiao hàng:\r\n\r\nGiao hàng và thanh toán linh hoạt trong 2h từ khi đặt hàng tại nội thành Hà Nội/ Hồ Chí Minh.\r\nBảo hành:\r\n\r\nLỗi 1 ĐỔI 1 nếu không hài lòng.\r\nĐối tượng sử dụng:\r\n\r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, nam giới (bà bầu dưới 7 tháng không sử dụng được sản phầm này).', 0),
(16, 'Yến chưng bách niên 1', 225000, 'toyenchungsan4.webp', 3, 0, 'Đặc điểm sản phẩm:\r\n\r\nBách Niên 1 được chế tác từ tổ yến đảo Nha Trang tự nhiên 100%. Chim yến trưởng thành được lựa chọn từ 6 – 12 năm tuổi, cho sản phẩm yến sào chất lượng nhất, ngon nhất và bổ dưỡng nhất.\r\nCông thức chưng yến tươi Bách Niên 1 độc quyền với 18 vị thảo mộc quý hiếm. Tất cả nguyên liệu được hòa quyện với nhau theo tỉ lệ vàng về hương vị. Sợi yến nở to, dai, thơm mùi thảo mộc. Vị dai giòn hòa với hương vị thanh mát, hương vị khó quên.\r\nSản xuất yến chưng bằng máy móc tiêu chuẩn hiện đại, nói không với chất bảo quản và phụ gia độc hại, kéo dài hạn sử dụng.\r\nCông dụng:\r\n\r\nGiúp hỗ trợ hồi phục sinh lực, cân bằng đường huyết, chống mỡ trong máu, đại bổ nguyên khí, chắc gân khỏe xương, tăng cường trí nhớ...\r\nHướng dẫn bảo quản\r\n\r\nSản phẩm khi nhận vẫn còn nóng ấm, để nguội, và bảo quản ở ngăn mát tủ lạnh ( hũ đã mở nắp mình sử dụng hết trong ngày).\r\nSản phẩm Yến Chưng Tươi của Cici Thượng Đỉnh Yến sử dụng ngon và bổ dưỡng nhất trong vòng 10 ngày\r\nCách dùng\r\n\r\nThời gian ăn Yến tốt nhất trong ngày :\r\nBuổi sáng trước khi ăn sáng\r\nBuổi tối trước khi đi ngủ 30 phút đến 1 tiếng ( không ăn yến sau 9h30 tối )\r\nGiữa 2 bữa chính\r\nLưu ý mình nên ăn yến khi bụng đói\r\n\r\nQuy cách đóng gói:\r\n\r\nSản phẩm được đựng bằng hũ thuỷ tinh tiệt trùng và hút chân không cùng túi giấy bên ngoài.\r\nGiao hàng:\r\n\r\nGiao hàng và thanh toán linh hoạt trong 2h từ khi đặt hàng tại nội thành Hà Nội/ Hồ Chí Minh.\r\nĐối tượng sử dụng:\r\n\r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, nam giới (bà bầu dưới 7 tháng không sử dụng được sản phầm này).', 0),
(17, 'Yến chưng ngọc nữ', 250000, 'toyenchungsan5.webp', 3, 0, 'Đặc điểm sản phẩm:\r\n\r\nNgọc Nữ 1 được chế tác từ tổ yến đảo Nha Trang tự nhiên 100%. Chim yến trưởng thành được lựa chọn từ 6 – 12 năm tuổi, cho sản phẩm yến sào chất lượng nhất, ngon nhất và bổ dưỡng nhất.\r\nCông thức chưng yến tươi Ngọc Nữ 1 độc quyền với 18 vị thảo mộc quý hiếm. Tất cả nguyên liệu được hòa quyện với nhau theo tỉ lệ vàng về hương vị. Sợi yến nở to, dai, thơm mùi thảo mộc. Vị dai giòn hòa với hương vị thanh mát, vị thơm bùi dịu nhẹ của Kim Bài khó cưỡng, hương vị khó quên.\r\nSản xuất yến chưng bằng máy móc tiêu chuẩn hiện đại, nói không với chất bảo quản và phụ gia độc hại, kéo dài hạn sử dụng.\r\nCông dụng:\r\n\r\nLàm chậm quá trình lão hóa, giảm nám, tàn nhang, làm đầy các nếp nhăn, bổ máu, mát gan, cải thiện thị lực, lưu thông khí huyết.\r\nHướng dẫn bảo quản\r\n\r\nSản phẩm khi nhận vẫn còn nóng ấm, để nguội, và bảo quản ở ngăn mát tủ lạnh ( hũ đã mở nắp mình sử dụng hết trong ngày).\r\nSản phẩm Yến Chưng Tươi  sử dụng ngon và bổ dưỡng nhất trong vòng 10 ngày\r\nCách dùng\r\n\r\nThời gian ăn Yến tốt nhất trong ngày :\r\nBuổi sáng trước khi ăn sáng\r\nBuổi tối trước khi đi ngủ 30 phút đến 1 tiếng ( không ăn yến sau 9h30 tối )\r\nGiữa 2 bữa chính\r\nLưu ý mình nên ăn yến khi bụng đói\r\n\r\nQuy cách đóng gói:\r\n\r\nSản phẩm được đựng bằng hũ thuỷ tinh tiệt trùng và hút chân không cùng túi giấy bên ngoài.\r\nGiao hàng:\r\n\r\nGiao hàng và thanh toán linh hoạt trong 2h từ khi đặt hàng tại nội thành Hà Nội/ Hồ Chí Minh.\r\nĐối tượng sử dụng:\r\n\r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, nam giới (bà bầu dưới 7 tháng không sử dụng được sản phầm này).', 0),
(18, 'Yến chưng vương dược', 350000, 'toyenchungsan6.webp', 3, 27, 'Đặc điểm sản phẩm:\r\n\r\nVương Dược 1 được chế tác từ tổ yến đảo Nha Trang tự nhiên 100%. Chim yến trưởng thành được lựa chọn từ 6 – 12 năm tuổi, cho sản phẩm yến sào chất lượng nhất, ngon nhất và bổ dưỡng nhất.\r\nCông thức chưng yến tươi Vương Dược 1 độc quyền với 18 vị thảo mộc quý hiếm. Tất cả nguyên liệu được hòa quyện với nhau theo tỉ lệ vàng về hương vị. Sợi yến nở to, dai, thơm mùi thảo mộc. Vị dai giòn hòa với hương vị thanh mát, vị thơm bùi dịu nhẹ của Kim Bài khó cưỡng, hương vị khó quên.\r\nSản xuất yến chưng bằng máy móc tiêu chuẩn hiện đại, nói không với chất bảo quản và phụ gia độc hại, kéo dài hạn sử dụng.\r\nCông dụng:\r\n\r\nTăng cường sinh lý, tăng khả năng cương dương, bổ thận, lưu thông khí huyết, tốt cho cơ và xương.\r\nHướng dẫn bảo quản\r\n\r\nSản phẩm khi nhận vẫn còn nóng ấm, để nguội, và bảo quản ở ngăn mát tủ lạnh ( hũ đã mở nắp mình sử dụng hết trong ngày).\r\nSản phẩm Yến Chưng Tươi sử dụng ngon và bổ dưỡng nhất trong vòng 10 ngày\r\nCách dùng\r\n\r\nThời gian ăn Yến tốt nhất trong ngày :\r\nBuổi sáng trước khi ăn sáng\r\nBuổi tối trước khi đi ngủ 30 phút đến 1 tiếng ( không ăn yến sau 9h30 tối )\r\nGiữa 2 bữa chính\r\nLưu ý mình nên ăn yến khi bụng đói\r\n\r\nQuy cách đóng gói:\r\n\r\nSản phẩm được đựng bằng hũ thuỷ tinh tiệt trùng và hút chân không cùng túi giấy bên ngoài.\r\nGiao hàng:\r\n\r\nGiao hàng và thanh toán linh hoạt trong 2h từ khi đặt hàng tại nội thành Hà Nội/ Hồ Chí Minh.\r\nBảo hành:\r\n\r\nLỗi 1 ĐỔI 1 nếu không hài lòng.\r\nĐối tượng sử dụng:\r\n\r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, nam giới (bà bầu dưới 7 tháng không sử dụng được sản phầm này).', 0),
(19, 'Yến chưng long thai', 460000, 'toyenchungsan7.webp', 3, 0, 'Đặc điểm sản phẩm:\r\n\r\nLong Thai 1 được chế tác từ tổ yến đảo Nha Trang tự nhiên 100%. Chim yến trưởng thành được lựa chọn từ 6 – 12 năm tuổi, cho sản phẩm yến sào chất lượng nhất, ngon nhất và bổ dưỡng nhất.\r\nCông thức chưng yến tươi Long Thai 1 độc quyền với 18 vị thảo mộc quý hiếm. Tất cả nguyên liệu được hòa quyện với nhau theo tỉ lệ vàng về hương vị. Sợi yến nở to, dai, thơm mùi thảo mộc. Vị dai giòn hòa với hương vị thanh mát, hương vị khó quên.\r\nSản xuất yến chưng bằng máy móc tiêu chuẩn hiện đại, nói không với chất bảo quản và phụ gia độc hại, kéo dài hạn sử dụng.\r\nCông dụng:\r\n\r\nGiúp an thần, bồi bổ trí não thai nhi bổ sung chất xơ, giảm nguy cơ tiểu đường thai kì, giảm ốm nghén, bổ thai, khắc phục rạn da, thâm da,...\r\nHướng dẫn bảo quản\r\n\r\nSản phẩm khi nhận vẫn còn nóng ấm, để nguội, và bảo quản ở ngăn mát tủ lạnh ( hũ đã mở nắp mình sử dụng hết trong ngày).\r\nSản phẩm Yến Chưng Tươi  sử dụng ngon và bổ dưỡng nhất trong vòng 10 ngày\r\nCách dùng\r\n\r\nThời gian ăn Yến tốt nhất trong ngày :\r\nBuổi sáng trước khi ăn sáng\r\nBuổi tối trước khi đi ngủ 30 phút đến 1 tiếng ( không ăn yến sau 9h30 tối )\r\nGiữa 2 bữa chính\r\nLưu ý mình nên ăn yến khi bụng đói\r\n\r\nQuy cách đóng gói:\r\n\r\nSản phẩm được đựng bằng hũ thuỷ tinh tiệt trùng và hút chân không cùng túi giấy bên ngoài.\r\nGiao hàng:\r\n\r\nGiao hàng và thanh toán linh hoạt trong 2h từ khi đặt hàng tại nội thành Hà Nội/ Hồ Chí Minh.\r\nĐối tượng sử dụng:\r\n\r\nPhụ nữ, người già, trẻ nhỏ từ 1 tuổi trở lên, người mới ốm dậy, nam giới (bà bầu dưới 7 tháng không sử dụng được sản phầm này).', 0),
(20, 'Yến chưng Minh Nhãn Yến', 350000, 'toyenchungsan8.webp', 3, 29, 'Sản phẩm có công dụng chuyên sâu chăm sóc đôi mắt khỏe, sáng, tinh anh.\r\n\r\nBên cạnh các vị thảo mộc quen thuộc như kỷ tử, hạt sen đã từng xuất hiện ở các vị yến chưng trước đó thì ở sản phẩm Minh Nhãn yến lần này có thêm nhiều vị thảo mộc mới như: bạch cúc, thảo quyết minh, màng gấc,... đều có công dụng chăm sóc đôi mắt cực kì tốt\r\n\r\nYến chưng Minh Nhãn giúp hỗ trợ cải thiện các vấn đề mắt như: cận thị, viễn thị, loạn thị, đau mắt, viêm giác mạc,... Ngoài ra còn giúp an thần, chống oxy hóa. Sản phẩm dành cho trẻ từ 5 tuổi trở lên và người lớn. Duy trì đều đặn mỗi ngày để đạt hiệu quả nhanh nhất\r\n', 0),
(21, 'Soup vi cá', 360000, 'monsoup1.webp', 4, 0, 'Công dụng:\r\n\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.\r\nCách đóng gói: \r\n\r\nSoup Vi Cá được đựng trong bát hoặc niêu bọc kín, bên ngoài là túi giấy.\r\nĐối tượng sử dụng:\r\n\r\nNgười già, phụ nữ, người mới ốm dậy, trẻ em trên 1 tuổi.\r\nNam giới, người suy nhược cơ thể, mệt mỏi hay mất ngủ.\r\nHướng dẫn sử dụng:\r\n\r\nSản phẩm Phụng Phụng Ngự Thiện mới chế biến còn nóng, có thể bật nắp sử dụng ngay.\r\nHướng dẫn bảo quản:\r\n\r\nKhách hàng có thể bảo quản yến chưng trong ngăn mát tủ lạnh dưới 5 độ.\r\nHạn sử dụng:\r\n\r\nSản phẩm Phụng Phụng Ngự Thiện bảo quản 24h trong nhiệt độ phòng hoặc trong 15 ngày kể từ ngày sản xuất trong ngăn mát tủ lạnh.\r\nXuất sứ: \r\n\r\nCiCi Thượng Đỉnh Yến - Thương hiệu yến chưng sẵn số 1 Việt Nam', 0),
(22, 'Bát trân uy uy ngự thiên', 399000, 'monsoup2.webp', 4, 25, 'Công dụng:\r\n\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.\r\nCách đóng gói: \r\n\r\nBát Trân Uy Uy Ngự Thiện được đựng trong bát hoặc niêu bọc kín, bên ngoài là túi giấy.\r\nĐối tượng sử dụng:\r\n\r\nNgười già, phụ nữ, người mới ốm dậy, trẻ em trên 1 tuổi.\r\nNam giới, người suy nhược cơ thể, mệt mỏi hay mất ngủ.\r\nHướng dẫn sử dụng:\r\n\r\nSản phẩm Phụng Phụng Ngự Thiện mới chế biến còn nóng, có thể bật nắp sử dụng ngay.\r\nHướng dẫn bảo quản:\r\n\r\nKhách hàng có thể bảo quản yến chưng trong ngăn mát tủ lạnh dưới 5 độ.\r\nHạn sử dụng:\r\n\r\nSản phẩm Phụng Phụng Ngự Thiện bảo quản 24h trong nhiệt độ phòng hoặc trong 15 ngày kể từ ngày sản xuất trong ngăn mát tủ lạnh.\r\nXuất sứ: \r\n\r\nCiCi Thượng Đỉnh Yến - Thương hiệu yến chưng sẵn số 1 Việt Nam', 0),
(23, 'Bát trân ngư xí ngự thiện', 299000, 'monsoup3.webp', 4, 0, 'Công dụng:\r\n\r\nTổ yến là món \"bát trân trong bát trân\" có nguồn gốc tự nhiên rất quý từ xưa, chỉ được dùng cho vua chúa. Đến nay, sản phẩm tổ yến vẫn không mất đi sự quý giá của nó và được nhiều khách hàng lựa chọn bởi tác dụng bồi bổ rất lớn.\r\nTrong tổ yến chưa 50% Protein tự nhiên, 18 loại Acid Amin và hơn 31 nguyên tố vi lượng. Phần lớn trong số này là các chất cơ thể con người không tự tổng hợp được, cần phải nạp từ bên ngoài. Chính vì vậy, tổ yến có tác dụng rất tốt với cơ thể.\r\nCách đóng gói: \r\n\r\nBát Trân Ngư Xí Ngự Thiện được đựng trong bát hoặc niêu bọc kín, bên ngoài là túi giấy.\r\nĐối tượng sử dụng:\r\n\r\nNgười già, phụ nữ, người mới ốm dậy, trẻ em trên 1 tuổi.\r\nNam giới, người suy nhược cơ thể, mệt mỏi hay mất ngủ.\r\nHướng dẫn sử dụng:\r\n\r\nSản phẩm Bát Trân Ngư Xí Ngự Thiện mới chế biến còn nóng, có thể bật nắp sử dụng ngay.\r\nHướng dẫn bảo quản:\r\n\r\nKhách hàng có thể bảo quản yến chưng trong ngăn mát tủ lạnh dưới 5 độ.\r\nHạn sử dụng:\r\n\r\nSản phẩm Phụng Phụng Ngự Thiện bảo quản 24h trong nhiệt độ phòng hoặc trong 15 ngày kể từ ngày sản xuất trong ngăn mát tủ lạnh.', 0),
(24, 'Nước Yến sào Sanest lọ Nhân sâm Fucoidan 70ml, 1 lọ', 44000, 'nuocyen1.webp', 5, 0, 'Cách dùng:\r\n\r\n- Lắc nhẹ trước khi uống, ngon hơn khi uống lạnh, tránh đun nóng sản phẩm trước khi sử dụng.\r\n\r\n- Uống trực tiếp từ lọ.\r\n\r\n- Uống từ 1 -2  lọ/ngày.\r\n\r\n- Thích hợp cho mọi độ tuổi.\r\n\r\n- Phải sử dụng hết khi đã mở nắp.\r\n\r\nBảo quản ở nhiệt độ thường, tại nơi khô ráo, thoáng mát.\r\n\r\nNSX & HSD: In trên bao bì.\r\n\r\nThể tích thực: 70ml.\r\n\r\nGTN: 12/2013/YTKH-TNCB\r\n\r\nSố: 770-Sanest/YSKH\r\n\r\nSản xuất tại: Nhà máy Nước giải khát cao cấp Yến sào trực thuộc Công ty Yến sào Khánh Hòa.', 0),
(25, 'Nước Yến sào Sanest lọ Nhân sâm Fucoidan 70ml, Hộp 6 Lọ', 286000, 'nuocyen2.webp', 5, 0, 'Cách dùng:\r\n\r\n- Lắc nhẹ trước khi uống, ngon hơn khi uống lạnh, tránh đun nóng sản phẩm trước khi sử dụng.\r\n\r\n- Uống trực tiếp từ lọ.\r\n\r\n- Uống từ 1 -2  lọ/ngày.\r\n\r\n- Thích hợp cho mọi độ tuổi.\r\n\r\n- Phải sử dụng hết khi đã mở nắp.\r\n\r\nBảo quản ở nhiệt độ thường, tại nơi khô ráo, thoáng mát.\r\n\r\nNSX & HSD: In trên bao bì.\r\n\r\nThể tích thực: 70ml.\r\n\r\nGTN: 12/2013/YTKH-TNCB\r\n\r\nSố: 770-Sanest/YSKH\r\n\r\nSản xuất tại: Nhà máy Nước giải khát cao cấp Yến sào trực thuộc Công ty Yến sào Khánh Hòa.', 0),
(26, 'Nước Yến sào Sanest lọ 70ml, Hộp 8 lọ', 330000, 'nuocyen3.webp', 5, 11, 'Cách dùng:\r\n\r\n- Lắc nhẹ trước khi uống, ngon hơn khi uống lạnh, tránh đun nóng sản phẩm trước khi sử dụng.\r\n\r\n- Uống trực tiếp từ lọ.\r\n\r\n- Uống từ 1 -2  lọ/ngày.\r\n\r\n- Thích hợp cho mọi độ tuổi.\r\n\r\n- Phải sử dụng hết khi đã mở nắp.\r\n\r\nBảo quản ở nhiệt độ thường, tại nơi khô ráo, thoáng mát.\r\n\r\nNSX & HSD: In trên bao bì.\r\n\r\nThể tích thực: 70ml.\r\n\r\nGTN: 12/2013/YTKH-TNCB\r\n\r\nSố: 770-Sanest/YSKH\r\n\r\nSản xuất tại: Nhà máy Nước giải khát cao cấp Yến sào trực thuộc Công ty Yến sào Khánh Hòa.', 0),
(27, 'Nước Yến sào Sanest lọ 70ml, Hộp 6 lọ', 265000, 'nuocyen4.webp', 5, 16, 'Cách dùng:\r\n\r\n- Lắc nhẹ trước khi uống, ngon hơn khi uống lạnh, tránh đun nóng sản phẩm trước khi sử dụng.\r\n\r\n- Uống trực tiếp từ lọ.\r\n\r\n- Uống từ 1 -2  lọ/ngày.\r\n\r\n- Thích hợp cho mọi độ tuổi.\r\n\r\n- Phải sử dụng hết khi đã mở nắp.\r\n\r\nBảo quản ở nhiệt độ thường, tại nơi khô ráo, thoáng mát.\r\n\r\nNSX & HSD: In trên bao bì.\r\n\r\nThể tích thực: 70ml.\r\n\r\nGTN: 12/2013/YTKH-TNCB\r\n\r\nSố: 770-Sanest/YSKH\r\n\r\nSản xuất tại: Nhà máy Nước giải khát cao cấp Yến sào trực thuộc Công ty Yến sào Khánh Hòa.', 0),
(28, 'Nước Yến sào Sanest lọ 70ml, 1 lọ', 35000, 'nuocyen5.webp', 5, 0, 'Cách dùng:\r\n\r\n- Lắc nhẹ trước khi uống, ngon hơn khi uống lạnh, tránh đun nóng sản phẩm trước khi sử dụng.\r\n\r\n- Uống trực tiếp từ lọ.\r\n\r\n- Uống từ 1 -2  lọ/ngày.\r\n\r\n- Thích hợp cho mọi độ tuổi.\r\n\r\n- Phải sử dụng hết khi đã mở nắp.\r\n\r\nBảo quản ở nhiệt độ thường, tại nơi khô ráo, thoáng mát.\r\n\r\nNSX & HSD: In trên bao bì.\r\n\r\nThể tích thực: 70ml.\r\n\r\nGTN: 12/2013/YTKH-TNCB\r\n\r\nSố: 770-Sanest/YSKH\r\n\r\nSản xuất tại: Nhà máy Nước giải khát cao cấp Yến sào trực thuộc Công ty Yến sào Khánh Hòa.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','User') DEFAULT 'User',
  `is_verified` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
