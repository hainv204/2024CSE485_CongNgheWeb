-- Thêm dữ liệu vào bảng categories
INSERT INTO categories (name) VALUES
('Thể thao'),
('Công nghệ'),
('Sức khoẻ'),
('Giải trí'),
('Thời sự');

-- Thêm dữ liệu vào bảng news
INSERT INTO news (title, content, image, created_at, category_id) VALUES
('Tăng cường an toàn giao thông', 'Nhiều biện pháp được triển khai nhằm giảm tai nạn giao thông.', '/2024CSE485_CongNgheWeb/tlunews/assets/images/1-2.jpg', '2024-12-04 08:00:00', 1),
('Công nghiệp 4.0 tại Việt Nam', 'Những bước tiến mới trong lĩnh vực công nghiệp.', '/2024CSE485_CongNgheWeb/tlunews/assets/images/2.jpg', '2024-12-03 13:00:00', 2),
('Giảm thiểu rác thải nhựa', 'Phong trào xanh đang lan rộng khắp cả nước.', '/2024CSE485_CongNgheWeb/tlunews/assets/images/3.jpg', '2024-12-02 10:00:00', 3),
('Xu hướng thời trang mùa đông', 'Những bộ sưu tập mới cho mùa đông năm nay.', '/2024CSE485_CongNgheWeb/tlunews/assets/images/D4.jpg', '2024-11-30 16:00:00', 4),
('Ẩm thực đường phố Việt Nam', 'Những món ăn đường phố hấp dẫn du khách.', '/2024CSE485_CongNgheWeb/tlunews/assets/images/daidiencacbon.jpg', '2024-12-01 12:00:00', 5),
('Hội nghị quốc tế về biến đổi khí hậu', 'Các nhà lãnh đạo thế giới thảo luận về khí hậu.', '/2024CSE485_CongNgheWeb/tlunews/assets/images/hung2.jpg', '2024-11-29 14:00:00', 5),
('Giải vô địch bóng đá quốc gia', 'Giải đấu bóng đá lớn nhất nước ta chuẩn bị khởi tranh với sự tham gia của các đội bóng mạnh.', '/images/football_national_league.jpg', '2024-12-05 08:30:00', 1),
('Thể thao điện tử phát triển mạnh mẽ tại Việt Nam', 'Các giải đấu thể thao điện tử đang thu hút sự chú ý mạnh mẽ từ cộng đồng trẻ.', '/images/esports_growth.jpg', '2024-12-02 14:00:00', 1),
('Cuộc đua marathon quốc tế', 'Hàng nghìn vận động viên quốc tế tham gia cuộc đua marathon lớn tại Hà Nội.', '/images/marathon.jpg', '2024-11-28 09:00:00', 1),
('Cách chăm sóc sức khoẻ trong mùa đông', 'Mùa đông là thời điểm dễ mắc các bệnh về hô hấp, cần chú ý đến chế độ ăn uống và luyện tập.', '/images/winter_healthcare.jpg', '2024-12-01 10:00:00', 3),
('Lợi ích của việc tập yoga hàng ngày', 'Yoga không chỉ giúp thư giãn mà còn cải thiện sức khoẻ thể chất và tinh thần.', '/images/yoga_benefits.jpg', '2024-11-28 17:00:00', 3),
('Cảnh giác với các bệnh truyền nhiễm mùa lạnh', 'Mùa lạnh là thời điểm các bệnh truyền nhiễm dễ bùng phát, cần thực hiện các biện pháp phòng ngừa.', '/images/infectious_diseases_winter.jpg', '2024-11-27 14:00:00', 3),
('AI đang thay đổi mọi lĩnh vực', 'Trí tuệ nhân tạo đang được áp dụng trong nhiều ngành, từ y tế đến giáo dục.', '/images/ai_technology.jpg', '2024-12-04 11:00:00', 2),
('5G - Kỷ nguyên mới của công nghệ mạng', 'Mạng 5G đang mở ra những khả năng mới cho Internet vạn vật (IoT).', '/images/5g_network.jpg', '2024-12-03 15:00:00', 2),
('Chuyển đổi số trong ngành y tế', 'Ứng dụng công nghệ số giúp cải thiện chất lượng khám chữa bệnh.', '/images/digital_healthcare.jpg', '2024-11-29 16:30:00', 2),
('Lễ hội âm nhạc mùa đông tại Hà Nội', 'Lễ hội âm nhạc mùa đông thu hút hàng nghìn khán giả đến thưởng thức những tiết mục đặc sắc.', '/images/winter_music_festival.jpg', '2024-12-05 19:00:00', 4),
('Phim mới nhất của Hollywood thu hút khán giả Việt', 'Phim hành động mới từ Hollywood được đông đảo người xem yêu thích tại các rạp chiếu phim Việt Nam.', '/images/hollywood_movie.jpg', '2024-12-02 20:00:00', 4),
('Triển lãm nghệ thuật tại TP.HCM', 'Triển lãm nghệ thuật đương đại thu hút nhiều nghệ sĩ và người yêu nghệ thuật tham gia.', '/images/art_exhibition.jpg', '2024-11-30 16:30:00', 4),
('Kinh tế Việt Nam trong quý IV năm 2024', 'Tình hình kinh tế Việt Nam có sự tăng trưởng mạnh mẽ trong quý IV năm 2024.', '/images/vietnam_economy_q4_2024.jpg', '2024-12-05 12:00:00', 5),
('Biến đổi khí hậu và những tác động toàn cầu', 'Các chuyên gia cảnh báo về những tác động nghiêm trọng của biến đổi khí hậu đối với môi trường toàn cầu.', '/images/climate_change.jpg', '2024-12-03 08:00:00', 5),
('Cuộc bầu cử tổng thống Mỹ 2024', 'Cuộc bầu cử tổng thống Mỹ 2024 đang diễn ra gay cấn với sự tham gia của nhiều ứng cử viên mạnh.', '/images/us_presidential_election_2024.jpg', '2024-11-29 13:00:00', 5);
