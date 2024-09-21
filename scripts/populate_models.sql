-- Populate Users table (10 users)
INSERT INTO users (name, lastName, address, email, username, password, rol, state, balance)
VALUES
('John', 'Doe', '123 Main St', 'john@example.com', 'johndoe', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Jane', 'Smith', '456 Elm St', 'jane@example.com', 'janesmith', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Bob', 'Johnson', '789 Oak St', 'bob@example.com', 'bobjohnson', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Alice', 'Williams', '321 Pine St', 'alice@example.com', 'alicewilliams', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Charlie', 'Brown', '654 Maple St', 'charlie@example.com', 'charliebrown', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Eva', 'Davis', '987 Cedar St', 'eva@example.com', 'evadavis', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Frank', 'Miller', '147 Birch St', 'frank@example.com', 'frankmiller', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Grace', 'Wilson', '258 Walnut St', 'grace@example.com', 'gracewilson', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Henry', 'Taylor', '369 Ash St', 'henry@example.com', 'henrytaylor', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Ivy', 'Anderson', '741 Spruce St', 'ivy@example.com', 'ivyanderson', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'CUSTOMER', 'ACTIVE', FLOOR(RAND() * (10000 - 100 + 1) + 100)),
('Admin', 'GymStore', 'springfield', 'admin@gymstore.com', 'admin', '$2y$12$ObbZLrl2vSwyNZtQ/nB./.ksC1kYNExgsYU4rXBkrvdzWYRgq630y', 'ADMIN', 'ACTIVE', 5000);

-- Populate Categories table (20 categories)
INSERT INTO categories (name, description, image) VALUES
('Training Equipment', 'Dumbbells, resistance bands, yoga mats, exercise machines, etc.', 'images/default_image.png'),
('Sports Apparel', 'T-shirts, pants, jackets, sports underwear, etc.', 'images/default_image.png'),
('Sports Footwear', 'Running shoes, soccer cleats, basketball shoes, hiking boots, etc.', 'images/default_image.png'),
('Sports Accessories', 'Water bottles, caps, backpacks, socks, wristbands, etc.', 'images/default_image.png'    ),
('Outdoor Sports', 'Cycling, camping, hiking, water sports, etc.', 'images/default_image.png'),
('Team Sports', 'Soccer balls, basketballs, volleyballs, baseball equipment, etc.', 'images/default_image.png'),
('Racquet Sports', 'Tennis, padel, badminton, squash, racquets, balls, etc.', 'images/default_image.png'),
('Combat Sports', 'Boxing gloves, mouthguards, punching bags, kimono, etc.', 'images/default_image.png'),
('Sports Supplements & Nutrition', 'Proteins, vitamins, energy drinks, energy bars, etc.', 'images/default_image.png'),
('Sports Technology', 'Smartwatches, heart rate monitors, sports earbuds, fitness apps, etc.', 'images/default_image.png'),
('Weights', 'Various weights for strength training', 'images/default_image.png'),
('Cardio Equipment', 'Machines for cardiovascular exercise', 'images/default_image.png'),
('Yoga & Pilates', 'Equipment for yoga and pilates practices', 'images/default_image.png'),
('Resistance Bands', 'Elastic bands for resistance training', 'images/default_image.png'),
('Fitness Accessories', 'Various accessories for fitness routines', 'images/default_image.png'),
('Gym Machines', 'Large equipment for gym use', 'images/default_image.png'  ),
('Recovery & Wellness', 'Products for post-workout recovery', 'images/default_image.png'),
('Sports Nutrition', 'Supplements and nutrition products', 'images/default_image.png'),
('Workout Apparel', 'Clothing for exercise and fitness', 'images/default_image.png'),
('Home Gym Essentials', 'Essential equipment for home gyms', 'images/default_image.png');

-- Populate Products table (80 products)
INSERT INTO products (name, description, price, stock, image, sumReviews, totalReviews, category_id, state) VALUES
('T-shirts', 'Breathable and comfortable shirts designed for various physical activities.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/41.jpg', 0, 0, 2, 'active'),
('Pants', 'Fitted or loose pants ideal for running, yoga, or workout sessions.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 2, 'active'),
('Jackets', 'Lightweight or waterproof jackets for outdoor training and protection.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 9, 'images/default_image.png', 0, 0, 2, 'active'),
('Sports underwear', 'Sports bras and underwear designed for better support and comfort.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 1, 'images/default_image.png', 0, 0, 2, 'active'),
('Running shoes', 'Cushioned shoes that reduce impact during running or jogging.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 10, 'images/default_image.png', 0, 0, 3, 'active'),
('Soccer cleats', 'Shoes with studs for better grip on grass or artificial turf fields.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 1, 'images/default_image.png', 0, 0, 3, 'active'),
('Basketball shoes', 'Shoes with extra ankle support and traction for playing on courts.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 3, 'active'),
('Hiking boots', 'Durable footwear offering support for walking on rugged terrains.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 4, 'images/default_image.png', 0, 0, 3, 'active'),
('Dumbbells', 'Adjustable weights for strength training and muscle building.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 10, 'images/default_image.png', 0, 0, 1, 'active'),
('Resistance bands', 'Versatile tools for strength and flexibility exercises.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 4, 'images/default_image.png', 0, 0, 1, 'active'),
('Yoga mats', 'Cushioned mats for comfort during floor exercises and yoga.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 9, 'images/default_image.png', 0, 0, 1, 'active'),
('Exercise machines', 'Equipment like treadmills, stationary bikes, and rowing machines.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 2, 'images/default_image.png', 0, 0, 1, 'active'),
('Water bottles', 'Reusable bottles to stay hydrated during exercise and outdoor activities.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 1, 'images/default_image.png', 0, 0, 4, 'active'),
('Caps', 'Sports caps for sun protection during outdoor sports or training sessions.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 9, 'images/default_image.png', 0, 0, 4, 'active'),
('Backpacks', 'Durable backpacks to carry sports gear, shoes, and other essentials.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 2, 'images/default_image.png', 0, 0, 4, 'active'),
('Wristbands', 'Absorbent wristbands to keep hands dry during intense workouts.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 9, 'images/default_image.png', 0, 0, 4, 'active'),
('Bicycles', 'Road and mountain bikes for recreational or competitive cycling.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 7, 'images/default_image.png', 0, 0, 5, 'active'),
('Camping tents', 'Lightweight and weather-resistant tents for outdoor camping trips.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 5, 'active'),
('Hiking gear', 'Accessories like trekking poles and backpacks for hiking on difficult trails.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 5, 'active'),
('Water sports equipment', 'Surfboards, wetsuits, and accessories for aquatic sports and activities.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 10, 'images/default_image.png', 0, 0, 5, 'active'),
('Soccer balls', 'Soccer balls of various sizes and materials for grass or indoor play.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 6, 'active'),
('Basketballs', 'Balls with improved grip for indoor and outdoor basketball games.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 9, 'images/default_image.png', 0, 0, 6, 'active'),
('Volleyball equipment', 'Includes volleyballs and nets for beach or indoor volleyball.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 2, 'images/default_image.png', 0, 0, 6, 'active'),
('Baseball gear', 'Gloves, balls, and bats for baseball or softball players.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 3, 'images/default_image.png', 0, 0, 6, 'active'),
('Tennis rackets', 'Lightweight and balanced rackets for players of all skill levels.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 7, 'active'),
('Padel rackets', 'Perforated surface rackets for better control in padel matches.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 7, 'active'),
('Tennis/padel balls', 'Balls designed for durability and optimal bounce on different surfaces.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 3, 'images/default_image.png', 0, 0, 7, 'active'),
('Squash rackets', 'Smaller, lighter rackets for fast-paced squash games.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 5, 'images/default_image.png', 0, 0, 7, 'active'),
('Boxing gloves', 'Padded gloves to protect hands during boxing training and matches.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 10, 'images/default_image.png', 0, 0, 8, 'active'),
('Mouthguards', 'Protective gear to safeguard teeth and mouth during combat sports.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 5, 'images/default_image.png', 0, 0, 8, 'active'),
('Punching bags', 'Heavy bags in different sizes for boxing and kickboxing training.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 8, 'images/default_image.png', 0, 0, 8, 'active'),
('Kimonos', 'Specialized clothing for martial arts such as judo, karate, or jiu-jitsu.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 3, 'images/default_image.png', 0, 0, 8, 'active'),
('Protein supplements', 'Supplements to aid muscle recovery and growth after workouts.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 2, 'images/default_image.png', 0, 0, 9, 'active'),
('Vitamins', 'Multivitamins formulated to meet athletes nutritional needs.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 5, 'images/default_image.png', 0, 0, 9, 'active'),
('Energy drinks', 'Beverages designed to boost performance and aid post-exercise recovery.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 1, 'images/default_image.png', 0, 0, 9, 'active'),
('Energy bars', 'Nutritious bars to refuel during or after workouts.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 2, 'images/default_image.png', 0, 0, 9, 'active'),
('Smartwatches', 'Devices that track physical activity and monitor health metrics.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 6, 'images/default_image.png', 0, 0, 10, 'active'),
('Heart rate monitors', 'Devices that track heart rate during workouts for optimal performance.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 6, 'images/default_image.png', 0, 0, 10, 'active'),
('Sports earbuds', 'Sweat-resistant earbuds designed for high-intensity physical activities.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 4, 'images/default_image.png', 0, 0, 10, 'active'),
('Fitness apps', 'Programs and apps that monitor progress and provide workout guidance.', FLOOR(RAND() * (1000 - 10 + 1) + 10), 3, 'images/default_image.png', 0, 0, 10, 'active'),
('Dumbbells Set', 'Set of adjustable dumbbells for strength training', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Treadmill Pro', 'Professional grade treadmill for home or gym use', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Yoga Mat', 'Non-slip yoga mat for comfortable practice', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Resistance Band Set', 'Set of 5 resistance bands for versatile workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Jump Rope', 'Adjustable jump rope for cardio exercises', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Leg Press Machine', 'Commercial grade leg press machine for lower body workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Foam Roller', 'High-density foam roller for muscle recovery', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Whey Protein', 'High-quality whey protein powder for muscle growth', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Compression Shorts', 'Men compression shorts for improved performance', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Pull-up Bar', 'Doorway pull-up bar for upper body strength', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Kettlebell', '16kg kettlebell for functional strength training', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Exercise Bike', 'Stationary exercise bike for indoor cycling', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Pilates Ring', 'Pilates toning ring for core and arm exercises', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Ankle Weights', 'Adjustable ankle weights for leg workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Ab Roller', 'Ab roller wheel for core strengthening', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Smith Machine', 'All-in-one Smith machine for various exercises', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Massage Gun', 'Percussion massage device for muscle recovery', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('BCAA Supplement', 'BCAA amino acid supplement for muscle support', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Sports Bra', 'High-impact sports bra for intense workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Resistance Tubes', 'Set of resistance tubes with handles for strength training', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Barbell Set', 'Olympic barbell set for weightlifting', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Rowing Machine', 'Indoor rowing machine for full-body workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Yoga Block', 'High-density foam yoga block for support and stability', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Resistance Loop Bands', 'Set of 3 loop resistance bands for various exercises', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Gym Gloves', 'Weightlifting gloves for hand protection', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Cable Crossover Machine', 'Dual pulley cable crossover machine for versatile workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Compression Socks', 'Knee-high compression socks for improved circulation', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Pre-workout Supplement', 'Pre-workout energy supplement for enhanced performance', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Workout Tank Top', 'Moisture-wicking tank top for comfortable workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Adjustable Bench', 'Adjustable weight bench for various exercises', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Medicine Ball', '10lb medicine ball for functional training', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Elliptical Trainer', 'Low-impact elliptical trainer for cardio workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Yoga Strap', 'Cotton yoga strap for improved flexibility', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Wrist Weights', 'Adjustable wrist weights for arm workouts', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Fitness Tracker', 'Smart fitness tracking watch for monitoring activities', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Lat Pulldown Machine', 'Commercial lat pulldown machine for back exercises', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Foam Massage Ball', 'Deep tissue massage ball for muscle relief', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Protein Bar', 'High-protein snack bar for post-workout nutrition', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Compression Sleeves', 'Arm compression sleeves for improved circulation', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active'),
('Stability Ball', '65cm anti-burst stability ball for core exercises', FLOOR(RAND() * (1000 - 10 + 1) + 10), FLOOR(RAND() * 10) + 1, 'images/default_image.png', 0, 0, FLOOR(RAND() * 20) + 1, 'active');


-- Populate Orders table (200 orders)
INSERT INTO orders (orderDate, status, totalOrder, cusPayment, user_id)
SELECT 
    DATE_SUB(CURDATE(), INTERVAL FLOOR(RAND() * 365) DAY),
    CASE FLOOR(RAND() * 3)
        WHEN 0 THEN 'pending'
        WHEN 1 THEN 'shipped'
        ELSE 'delivered'
    END,
    FLOOR(RAND() * 100000) + 5000,  -- Random total between 5000 and 104999
    CASE FLOOR(RAND() * 3)
        WHEN 0 THEN 'Credit Card'
        WHEN 1 THEN 'PayPal'
        ELSE 'Bank Transfer'
    END,
    FLOOR(RAND() * 10) + 1  -- User IDs 1-10
FROM 
    (SELECT @row := 0) r,
    (SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5) t1,
    (SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5) t2,
    (SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5) t3,
    (SELECT 1 UNION SELECT 2) t4
LIMIT 200;

-- Populate Items table (for the 200 orders)
INSERT INTO items (price, quantity, order_id, product_id)
SELECT 
    p.price,                          -- Price extracted from the products table
    FLOOR(RAND() * 3) + 1 AS quantity, -- Random quantity between 1 and 3
    o.id AS order_id,                 -- Order ID
    p.id AS product_id                -- Product ID extracted from the products table
FROM 
    orders o
JOIN (
    SELECT orders.id, FLOOR(RAND() * 3) + 1 AS num_items
    FROM orders
    WHERE id <= 200  -- Limit to the first 200 orders
) AS randomized_items ON o.id = randomized_items.id
JOIN (
    SELECT id, price FROM products
) p ON p.id = FLOOR(RAND() * 80) + 1  -- Select a random product between 1 and 80
CROSS JOIN (
    SELECT 1 AS multiplier UNION ALL SELECT 2 UNION ALL SELECT 3
) t1 
WHERE t1.multiplier <= randomized_items.num_items  -- Control the number of items per order
ORDER BY 
    o.id;


-- Populate Reviews table (200 reviews)
INSERT INTO reviews (rating, comment, approved, user_id, product_id)
SELECT 
    rating,
    CASE 
        WHEN rating = 5 THEN 'Excellent product, highly recommend!'
        WHEN rating = 4 THEN 'Good quality for the price.'
        WHEN rating = 3 THEN 'Does the job, but could be better.'
        WHEN rating = 2 THEN 'Not quite what I expected, but okay.'
        ELSE 'Terrible product, do not buy.'
    END AS comment,
    TRUE AS approved,
    o.user_id,
    i.product_id
FROM (
    SELECT FLOOR(RAND() * 5) + 1 AS rating
    FROM 
        (SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5) t1,
        (SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5) t2,
        (SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4) t3
    LIMIT 200
) AS subquery
JOIN items i ON i.id IS NOT NULL  -- Asegúrate de que hay ítems disponibles
JOIN orders o ON o.id = i.order_id  -- Obtener el user_id de la tabla orders
ORDER BY RAND()  -- Mezclar los resultados para evitar sesgos
LIMIT 200;  -- Limitar a 200 registros


-- Update order totals based on actual item prices and quantities
UPDATE orders o
SET o.totalOrder = (
    SELECT SUM(i.price)
    FROM items i
    WHERE i.order_id = o.id
);

-- Update product review counts
UPDATE products p
SET 
    p.sumReviews = (SELECT COALESCE(SUM(rating), 0) FROM reviews WHERE product_id = p.id),
    p.totalReviews = (SELECT COUNT(*) FROM reviews WHERE product_id = p.id);