INSERT INTO categories (id,name, home) VALUES
(1, "Tổ yến tinh chế",0),
(2, "Tổ yến thô",0),
(3, "Tổ yến chưng sẵn",1),
(4, "Món soup",0),
(5, "Nước yến",0),

INSERT INTO products (id, name, price, thumbnail, id_category, discount_percentage, des,quantity) VALUES
(1,'Tổ yến tinh chế loại 2', 2350000, 'toyentinhche1.webp', 1, 9, "aaaa"),
(2,'Tổ yến tinh chế loại 1', 2350000, 'toyentinhche2.webp', 1, 9, "aaaa"),
(3,'Tổ yến rút lông xuất khẩu', 5600000, 'toyentinhche3.webp', 1, 5, "aaaa"),
(4,'Tổ yến rút lông thường', 5500000, 'toyentinhche4.webp', 1, 5, "aaaa"),
(5,'Tổ yến tinh chế', 2100000, 'toyentinhche5.webp', 1, 10, "aaaa"),
(6,'Tổ yến tinh chế VIP độc quyền', 2700000, 'toyentinhche6.webp', 1, 6, "aaaa"),
(7,'Tổ yến tinh chế cho bé BaBy(loại 2)', 3100000, 'toyentinhche7.webp', 1, 6, "aaaa"),
(8,'Tổ yến tinh chế cho bé BaBy(loại 1)', 1950000, 'toyentinhche8.webp', 1, 15, "aaaa"),

(9,'Tổ yến thô loại 4', 1499000, 'toyentho1.webp', 2, 13, "aaaa"),
(10,'Tổ yến thô loại 3', 1649000, 'toyentho2.webp', 2, 12, "aaaa"),
(11,'Tổ yến thô loại 2', 2000000, 'toyentho3.webp', 2, 10, "aaaa"),
(12,'Tổ yến thô loại 1', 2350000, 'toyentho4.webp', 2, 9, "aaaa"),

(13,'Yến chưng khang phục 2', 260000, 'toyenchungsan1.webp', 3, 0, "aaaa"),
(14,'Yến chưng khang phục 1', 250000, 'toyenchungsan2.webp', 3, 0, "aaaa"),
(15,'Yến chưng bách niên 2', 255000, 'toyenchungsan3.webp', 3, 0, "aaaa"),
(16,'Yến chưng bách niên 1', 225000, 'toyenchungsan4.webp', 3, 0, "aaaa"),
(17,'Yến chưng ngọc nữ', 250000, 'toyenchungsan5.webp', 3, 0, "aaaa"),
(18,'Yến chưng vương dược', 350000, 'toyenchungsan6.webp', 3, 27, "aaaa"),
(19,'Yến chưng long thai', 460000, 'toyenchungsan7.webp', 3, 0, "aaaa"),
(20,'Yến chưng Minh Nhãn Yến', 350000, 'toyenchungsan8.webp', 3, 29, "aaaa"),

(21,'Soup vi cá', 360000, 'monsoup1.webp', 4, 0, "aaaa"),
(22,'Bát trân uy uy ngự thiên', 399000, 'monsoup2.webp', 4, 25, "aaaa"),
(23,'Bát trân ngư xí ngự thiện', 299000, 'monsoup3.webp', 4, 0, "aaaa"),

(24,'Nước Yến sào Sanest lọ Nhân sâm Fucoidan 70ml, 1 lọ', 44000, 'nuocyen1.webp', 5, 0, "aaaa"),
(25,'Nước Yến sào Sanest lọ Nhân sâm Fucoidan 70ml, Hộp 6 Lọ', 286000, 'nuocyen2.webp', 5, 0, "aaaa"),
(26,'Nước Yến sào Sanest lọ 70ml, Hộp 8 lọ', 330000, 'nuocyen3.webp', 5, 11, "aaaa"),
(27,'Nước Yến sào Sanest lọ 70ml, Hộp 6 lọ', 265000, 'nuocyen4.webp', 5, 16, "aaaa"),
(28,'Nước Yến sào Sanest lọ 70ml, 1 lọ', 35000, 'nuocyen5.webp', 5, 0, "aaaa"),
(29,'Set 6 Thượng Vy Yến Đảo',799000,'nuocyen6.webp',5,0,'aaaa',0),

INSERT INTO products (id, name, price, thumbnail, id_category, discount_percentage, des,quantity) VALUES
(30,'Set 12 Thượng Vy Yến Đảo',2200000,'nuocyen7.webp',5,9,'aaaa',0),
(31,'Set 24 Thượng Vy Yến Đảo',3120000,'nuocyen8.webp',5,0,'aaaa',0),
(32,'Thượng Vy Yến biển - Kid's Cam',57000,'nuocyen9.webp',5,0,'aaaa',0),
(33,'Thượng Vy Yến đảo Saffron',95000,'nuocyen10.webp',5,0,'aaaa',0),
(34,'Thượng Vy Yến biển - Gừng',57000,'nuocyen11.webp',5,0,'aaaa',0),
(35,'Thượng Vy Yến Đảo Nhân Sâm',135000,'nuocyen12.webp',5,0,'aaaa',0),
(36,'Yến đảo Đông trùng hạ thảo,150000,'nuocyen13.webp',5,0,'aaaa',0),

INSERT INTO products (id, name, price, thumbnail, id_category, discount_percentage, des,quantity) VALUES
(37,'Soup Vi cá - bào ngư - tổ yến,699000,'monsoup4.webp',4,0,'aaaa',0);

INSERT INTO Images (id_product, img, display_order) VALUES
(1, 'toyentinhche1.webp', 0),
(1, 'toyentinhche1_1.webp', 1),
(1, 'toyentinhche1_2.webp', 2),

(2, 'toyentinhche2.webp', 0),
(2, 'toyentinhche2_1.webp', 1),
(2, 'toyentinhche2_2.webp', 2),

(3, 'toyentinhche3.webp', 0),
(3, 'toyentinhche3_1.webp', 1),
(3, 'toyentinhche3_2.webp', 2),
(3, 'toyentinhche3_3.webp', 3),

(4, 'toyentinhche4.webp', 0),
(4, 'toyentinhche4_1.webp', 1),
(4, 'toyentinhche4_2.webp', 2),
(4, 'toyentinhche4_3.webp', 3),

(5, 'toyentinhche5.webp', 0),
(5, 'toyentinhche5_1.webp', 1),
(5, 'toyentinhche5_2.webp', 2),

(6, 'toyentinhche6.webp', 0),
(6, 'toyentinhche6_1.webp', 1),

(7, 'toyentinhche7.webp', 0),
(7, 'toyentinhche7_1.webp', 1),
(7, 'toyentinhche7_2.webp', 2),

(8, 'toyentinhche8.webp', 0),
(8, 'toyentinhche8_1.webp', 1),
(8, 'toyentinhche8_2.webp', 2),
(8, 'toyentinhche8_3.webp', 3),

(9, 'toyentho1.webp', 0),
(9, 'toyentho1_1.webp', 1),
(9, 'toyentho1_2.webp', 2),

(10, 'toyentho2.webp', 0),
(10, 'toyentho2_1.webp', 1),

(11, 'toyentho3.webp', 0),
(11, 'toyentho3_1.webp', 1),
(11, 'toyentho3_2.webp', 2),

(12, 'toyentho4.webp', 0),
(12, 'toyentho4_1.webp', 1),
(12, 'toyentho4_2.webp', 2),

(13, 'toyenchungsan1.webp', 0),
(13, 'toyenchungsan1_1.webp', 1),

(14, 'toyenchungsan2.webp', 0),
(14, 'toyenchungsan2_1.webp', 1),

(15, 'toyenchungsan3.webp', 0),
(15, 'toyenchungsan3_1.webp', 1),
(15, 'toyenchungsan3_2.webp', 2),
(15, 'toyenchungsan3_3.webp', 3),

(16, 'toyenchungsan4.webp', 0),
(16, 'toyenchungsan4_1.webp', 1),
(16, 'toyenchungsan4_2.webp', 2),
(16, 'toyenchungsan4_3.webp', 3),

(17, 'toyenchungsan5.webp', 0),
(17, 'toyenchungsan5_1.webp', 1),
(17, 'toyenchungsan5_2.webp', 2),
(17, 'toyenchungsan5_3.webp', 3),

(18, 'toyenchungsan6.webp', 0),
(18, 'toyenchungsan6_1.webp', 1),
(18, 'toyenchungsan6_2.webp', 2),

(19, 'toyenchungsan7.webp', 0),
(19, 'toyenchungsan7_1.webp', 1),
(19, 'toyenchungsan7_2.webp', 2),
(19, 'toyenchungsan7_3.webp', 3),

(20, 'toyenchungsan8.webp', 0),

(21, 'monsoup1.webp', 0),
(22, 'monsoup2.webp', 0),
(22, 'monsoup2_1.webp', 1),
(23, 'monsoup3.webp', 0),

(24, 'nuocyen1.webp', 0),
(25, 'nuocyen2.webp', 0),
(26, 'nuocyen3.webp', 0),
(27, 'nuocyen4.webp', 0),
(28, 'nuocyen5.webp', 0),

INSERT INTO Images (id_product, img, display_order) VALUES
(29, 'nuocyen6.webp', 0),
(30, 'nuocyen7.webp', 0),
(31, 'nuocyen8.webp', 0),

(32, 'nuocyen9.webp', 0),
(32, 'nuocyen9_1.webp', 1),

(33, 'nuocyen10.webp', 0),
(33, 'nuocyen10_1.webp', 1),

(34, 'nuocyen11.webp', 0),
(34, 'nuocyen11_1.webp', 1),

(35, 'nuocyen12.webp', 0),
(35, 'nuocyen12_1.webp', 1),

(36, 'nuocyen13.webp', 0),
(36, 'nuocyen13_1.webp', 1);

INSERT INTO Images (id_product, img, display_order) VALUES
(37, 'monsoup4.webp', 0),
(37, 'monsoup4_1.webp', 1);
