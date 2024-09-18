--
-- Data to populate table `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `address`, `email`, `username`, `password`, `rol`, `state`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'ADMIN', 'springfield', 'admin@gymstore.com', 'admin', '$2y$12$ObbZLrl2vSwyNZtQ/nB./.ksC1kYNExgsYU4rXBkrvdzWYRgq630y', 'ADMIN', 'ACTIVE', 5000, '2024-09-18 08:01:52', '2024-09-18 08:01:52'),
(2, 'CUSTOMER', 'CUSTOMER', 'springfield', 'customer@gymstore.com', 'customer', '$2y$12$w7Rdc.53L3F5rUMXWNdX/.RyMKlZkMuW2SapbgQZVrenu6c9CsjvC', 'CUSTOMER', 'ACTIVE', 5000, '2024-09-18 08:04:27', '2024-09-18 08:04:27');


--
-- Data to populate table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Training Equipment', 'Dumbbells, resistance bands, yoga mats, exercise machines, etc.', '2024-09-16 10:12:20', '2024-09-16 10:12:20'),
(2, 'Sports Apparel', 'T-shirts, pants, jackets, sports underwear, etc.', '2024-09-16 10:50:41', '2024-09-16 10:50:41'),
(3, 'Sports Footwear', 'Running shoes, soccer cleats, basketball shoes, hiking boots, etc.', '2024-09-16 10:51:04', '2024-09-16 10:51:04'),
(4, 'Sports Accessories', 'Water bottles, caps, backpacks, socks, wristbands, etc.', '2024-09-16 10:51:25', '2024-09-16 10:51:25'),
(5, 'Outdoor Sports', 'Cycling, camping, hiking, water sports, etc.', '2024-09-16 10:51:47', '2024-09-16 10:51:47'),
(6, 'Team Sports', 'Soccer balls, basketballs, volleyballs, baseball equipment, etc.', '2024-09-16 10:52:26', '2024-09-16 10:52:26'),
(7, 'Racquet Sports', 'Tennis, padel, badminton, squash, racquets, balls, etc.', '2024-09-16 10:53:07', '2024-09-16 10:53:07'),
(8, 'Combat Sports', 'Boxing gloves, mouthguards, punching bags, kimono, etc.', '2024-09-16 10:53:25', '2024-09-16 10:53:25'),
(9, 'Sports Supplements & Nutrition', 'Proteins, vitamins, energy drinks, energy bars, etc.', '2024-09-16 10:53:43', '2024-09-16 10:53:43'),
(10, 'Sports Technology', 'Smartwatches, heart rate monitors, sports earbuds, fitness apps, etc.', '2024-09-16 10:54:02', '2024-09-16 10:54:02');


--
-- Data to populate table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`, `sumReviews`, `totalReviews`, `category_id`, `state`, `created_at`, `updated_at`) VALUES
(41, 'T-shirts', 'Breathable and comfortable shirts designed for various physical activities.', 17, 8, 'images/41.jpg', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 08:37:18'),
(42, 'Pants', 'Fitted or loose pants ideal for running, yoga, or workout sessions.', 60, 8, 'images/default_image.png', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(43, 'Jackets', 'Lightweight or waterproof jackets for outdoor training and protection.', 10, 9, 'images/default_image.png', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(44, 'Sports underwear', 'Sports bras and underwear designed for better support and comfort.', 53, 1, 'images/default_image.png', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(45, 'Running shoes', 'Cushioned shoes that reduce impact during running or jogging.', 84, 10, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(46, 'Soccer cleats', 'Shoes with studs for better grip on grass or artificial turf fields.', 84, 1, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(47, 'Basketball shoes', 'Shoes with extra ankle support and traction for playing on courts.', 82, 8, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(48, 'Hiking boots', 'Durable footwear offering support for walking on rugged terrains.', 41, 4, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(49, 'Dumbbells', 'Adjustable weights for strength training and muscle building.', 80, 10, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(50, 'Resistance bands', 'Versatile tools for strength and flexibility exercises.', 48, 4, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(51, 'Yoga mats', 'Cushioned mats for comfort during floor exercises and yoga.', 81, 9, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(52, 'Exercise machines', 'Equipment like treadmills, stationary bikes, and rowing machines.', 31, 2, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(53, 'Water bottles', 'Reusable bottles to stay hydrated during exercise and outdoor activities.', 25, 1, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(54, 'Caps', 'Sports caps for sun protection during outdoor sports or training sessions.', 36, 9, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(55, 'Backpacks', 'Durable backpacks to carry sports gear, shoes, and other essentials.', 56, 2, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(56, 'Wristbands', 'Absorbent wristbands to keep hands dry during intense workouts.', 89, 9, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(57, 'Bicycles', 'Road and mountain bikes for recreational or competitive cycling.', 64, 7, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(58, 'Camping tents', 'Lightweight and weather-resistant tents for outdoor camping trips.', 66, 8, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(59, 'Hiking gear', 'Accessories like trekking poles and backpacks for hiking on difficult trails.', 88, 8, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(60, 'Water sports equipment', 'Surfboards, wetsuits, and accessories for aquatic sports and activities.', 12, 10, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(61, 'Soccer balls', 'Soccer balls of various sizes and materials for grass or indoor play.', 37, 8, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(62, 'Basketballs', 'Balls with improved grip for indoor and outdoor basketball games.', 31, 9, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(63, 'Volleyball equipment', 'Includes volleyballs and nets for beach or indoor volleyball.', 92, 2, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(64, 'Baseball gear', 'Gloves, balls, and bats for baseball or softball players.', 97, 3, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(65, 'Tennis rackets', 'Lightweight and balanced rackets for players of all skill levels.', 11, 8, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(66, 'Padel rackets', 'Perforated surface rackets for better control in padel matches.', 73, 8, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(67, 'Tennis/padel balls', 'Balls designed for durability and optimal bounce on different surfaces.', 15, 3, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(68, 'Squash rackets', 'Smaller, lighter rackets for fast-paced squash games.', 11, 5, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(69, 'Boxing gloves', 'Padded gloves to protect hands during boxing training and matches.', 21, 10, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(70, 'Mouthguards', 'Protective gear to safeguard teeth and mouth during combat sports.', 21, 5, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(71, 'Punching bags', 'Heavy bags in different sizes for boxing and kickboxing training.', 80, 8, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(72, 'Kimonos', 'Specialized clothing for martial arts such as judo, karate, or jiu-jitsu.', 21, 3, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(73, 'Protein supplements', 'Supplements to aid muscle recovery and growth after workouts.', 30, 2, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(74, 'Vitamins', 'Multivitamins formulated to meet athletes nutritional needs.', 73, 5, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(75, 'Energy drinks', 'Beverages designed to boost performance and aid post-exercise recovery.', 11, 1, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(76, 'Energy bars', 'Nutritious bars to refuel during or after workouts.', 88, 2, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(77, 'Smartwatches', 'Devices that track physical activity and monitor health metrics.', 28, 6, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(78, 'Heart rate monitors', 'Devices that track heart rate during workouts for optimal performance.', 77, 6, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(79, 'Sports earbuds', 'Sweat-resistant earbuds designed for high-intensity physical activities.', 19, 4, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(80, 'Fitness apps', 'Programs and apps that monitor progress and provide workout guidance.', 51, 3, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22');