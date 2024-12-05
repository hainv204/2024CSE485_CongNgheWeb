-- Thêm dữ liệu vào bảng users
INSERT INTO users (username, password, role) VALUES
('user1', 'password1', 0),
('user2', 'password2', 0),
('user3', 'password3', 0),
('user4', 'password4', 0),
('user5', 'password5', 0),
('admin1', 'adminpassword1', 1),
('admin2', 'adminpassword2', 1),
('user6', 'password6', 0),
('user7', 'password7', 0),
('admin3', 'adminpassword3', 1);

-- Thêm dữ liệu vào bảng categories
INSERT INTO categories (name) VALUES
('Technology'),
('Science'),
('Health'),
('Entertainment'),
('Business'),
('Sports'),
('Education'),
('Politics'),
('Culture'),
('Environment');

-- Thêm dữ liệu vào bảng news
INSERT INTO news (title, content, image,created_at, category_id) VALUES
('Thúc đẩy mối quan hệ hợp tác giáo dục Việt Nam và Romania
', 'Việt Nam và Rumania đã có mối quan hệ hợp tác lâu dài nhiều năm qua trong lĩnh vực giáo dục đào tạo. Hơn 3000 kỹ sư, thạc sỹ, tiến sỹ do Rumania đào tạo giúp Việt Nam đã có những đóng góp tích cực cho sự phát triển kinh tế xã hội của đất nước.
Trong khuôn khổ chuyến công tác và làm việc tại 1 số nước Châu Âu, trong 3 ngày (20, 21, 22/1), Thủ tướng Chính phủ Phạm Minh Chính và Phu nhân có chuyến công tác thăm chính thức nước Cộng hòa Romania. Bộ trưởng Bộ Giáo dục và Đào tạo (GD-ĐT) Nguyễn Kim Sơn và một số lãnh đạo các trường Đại học cùng tham gia đoàn công tác.
Dưới sự chứng kiến của Thủ tướng hai nước, 3 biên bản hợp tác của các Bộ, ngành và 15 biên bản hợp tác giữa các cơ sở giáo dục đại học của Việt Nam và Romania đã được ký kết.', '', 1),
('New Scientific Discoveries', 'Content about recent scientific discoveries...', 'science_image.jpg', 2),
('Health Tips for a Better Life', 'Content about health tips...', 'health_image.jpg', 3),
('Movie Reviews 2024', 'Content about movie reviews...', 'entertainment_image.jpg', 4),
('Business Growth Strategies', 'Content about business strategies...', 'business_image.jpg', 5),
('Top Sports Events', 'Content about upcoming sports events...', 'sports_image.jpg', 6),
('Educational Reforms in 2024', 'Content about educational reforms...', 'education_image.jpg', 7),
('Political Landscape of 2024', 'Content about the political situation...', 'politics_image.jpg', 8),
('Cultural Trends', 'Content about cultural trends...', 'culture_image.jpg', 9),
('Climate Change and Its Impact', 'Content about climate change...', 'environment_image.jpg', 10);
