-- Populate Users table (10 users)
INSERT INTO users (name, lastName, address, email, username, password, rol, state, balance, created_at, updated_at)
VALUES
('John', 'Doe', '123 Main St', 'john@example.com', 'johndoe', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Jane', 'Smith', '456 Elm St', 'jane@example.com', 'janesmith', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Bob', 'Johnson', '789 Oak St', 'bob@example.com', 'bobjohnson', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Alice', 'Williams', '321 Pine St', 'alice@example.com', 'alicewilliams', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Charlie', 'Brown', '654 Maple St', 'charlie@example.com', 'charliebrown', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Eva', 'Davis', '987 Cedar St', 'eva@example.com', 'evadavis', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Frank', 'Miller', '147 Birch St', 'frank@example.com', 'frankmiller', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Grace', 'Wilson', '258 Walnut St', 'grace@example.com', 'gracewilson', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Henry', 'Taylor', '369 Ash St', 'henry@example.com', 'henrytaylor', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),
('Ivy', 'Anderson', '741 Spruce St', 'ivy@example.com', 'ivyanderson', '$2y$12$9htEQcednR9c3cI/PDC/veEZ4YPXqqY.ae2ngZn5pgFJBZuc91Lee', 'Customer', 'ACTIVE', FLOOR(RAND() * (500 - 100 + 1) + 100), NOW(), NOW()),    
('Admin', 'GymStore', 'springfield', 'admin@gymstore.com', 'admin', '$2y$12$ObbZLrl2vSwyNZtQ/nB./.ksC1kYNExgsYU4rXBkrvdzWYRgq630y', 'Admin', 'ACTIVE', 5000, NOW(), NOW());

-- Populate Categories table (20 categories)
INSERT INTO categories (name, description, image,created_at, updated_at) VALUES
('Training Equipment', 'Dumbbells, resistance bands, yoga mats, exercise machines, etc.', 'categories/default_image.png',NOW(), NOW()),
('Sports Apparel', 'T-shirts, pants, jackets, sports underwear, etc.', 'categories/default_image.png',NOW(), NOW()),
('Sports Footwear', 'Running shoes, soccer cleats, basketball shoes, hiking boots, etc.', 'categories/default_image.png',NOW(), NOW()),
('Sports Accessories', 'Water bottles, caps, backpacks, socks, wristbands, etc.', 'categories/default_image.png',NOW(), NOW()),
('Outdoor Sports', 'Cycling, camping, hiking, water sports, etc.', 'categories/default_image.png',NOW(), NOW()),
('Team Sports', 'Soccer balls, basketballs, volleyballs, baseball equipment, etc.', 'categories/default_image.png',NOW(), NOW()),
('Racquet Sports', 'Tennis, padel, badminton, squash, racquets, balls, etc.', 'categories/default_image.png',NOW(), NOW()),
('Combat Sports', 'Boxing gloves, mouthguards, punching bags, kimono, etc.', 'categories/default_image.png',NOW(), NOW()),
('Sports Supplements & Nutrition', 'Proteins, vitamins, energy drinks, energy bars, etc.', 'categories/default_image.png',NOW(), NOW()),
('Sports Technology', 'Smartwatches, heart rate monitors, sports earbuds, fitness apps, etc.', 'categories/default_image.png',NOW(), NOW()),
('Weights', 'Various weights for strength training', 'categories/default_image.png',NOW(), NOW()),
('Cardio Equipment', 'Machines for cardiovascular exercise', 'categories/default_image.png',NOW(), NOW()),
('Yoga & Pilates', 'Equipment for yoga and pilates practices', 'categories/default_image.png',NOW(), NOW()),
('Resistance Bands', 'Elastic bands for resistance training', 'categories/default_image.png',NOW(), NOW()),
('Fitness Accessories', 'Various accessories for fitness routines', 'categories/default_image.png',NOW(), NOW()),
('Gym Machines', 'Large equipment for gym use', 'categories/default_image.png',NOW(), NOW()),
('Recovery & Wellness', 'Products for post-workout recovery', 'categories/default_image.png',NOW(), NOW()),
('Sports Nutrition', 'Supplements and nutrition products', 'categories/default_image.png',NOW(), NOW()),
('Workout Apparel', 'Clothing for exercise and fitness', 'categories/default_image.png',NOW(), NOW()),
('Home Gym Essentials', 'Essential equipment for home gyms', 'categories/default_image.png',NOW(), NOW());

-- Populate Products table (80 products)
INSERT INTO products (name, description, price, stock, image, sumReviews, totalReviews, category_id, state, created_at, updated_at) VALUES
('T-shirts', 'Breathable and comfortable shirts designed for various physical activities.', 29.99, 8, 'products/default_image.png', 0, 0, 2, 'active', NOW(), NOW()),
('Pants', 'Fitted or loose pants ideal for running, yoga, or workout sessions.', 49.99, 8, 'products/default_image.png', 0, 0, 2, 'active', NOW(), NOW()),
('Jackets', 'Lightweight or waterproof jackets for outdoor training and protection.', 79.99, 9, 'products/default_image.png', 0, 0, 2, 'active', NOW(), NOW()),
('Sports underwear', 'Sports bras and underwear designed for better support and comfort.', 24.99, 1, 'products/default_image.png', 0, 0, 2, 'active', NOW(), NOW()),
('Running shoes', 'Cushioned shoes that reduce impact during running or jogging.', 119.99, 10, 'products/default_image.png', 0, 0, 3, 'active', NOW(), NOW()),
('Soccer cleats', 'Shoes with studs for better grip on grass or artificial turf fields.', 89.99, 1, 'products/default_image.png', 0, 0, 3, 'active', NOW(), NOW()),
('Basketball shoes', 'Shoes with extra ankle support and traction for playing on courts.', 129.99, 8, 'products/default_image.png', 0, 0, 3, 'active', NOW(), NOW()),
('Hiking boots', 'Durable footwear offering support for walking on rugged terrains.', 149.99, 4, 'products/default_image.png', 0, 0, 3, 'active', NOW(), NOW()),
('Dumbbells', 'Adjustable weights for strength training and muscle building.', 59.99, 10, 'products/default_image.png', 0, 0, 1, 'active', NOW(), NOW()),
('Resistance bands', 'Versatile tools for strength and flexibility exercises.', 19.99, 4, 'products/default_image.png', 0, 0, 1, 'active', NOW(), NOW()),
('Yoga mats', 'Cushioned mats for comfort during floor exercises and yoga.', 34.99, 9, 'products/default_image.png', 0, 0, 1, 'active', NOW(), NOW()),
('Exercise machines', 'Equipment like treadmills, stationary bikes, and rowing machines.', 799.99, 2, 'products/default_image.png', 0, 0, 1, 'active', NOW(), NOW()),
('Water bottles', 'Reusable bottles to stay hydrated during exercise and outdoor activities.', 14.99, 1, 'products/default_image.png', 0, 0, 4, 'active', NOW(), NOW()),
('Caps', 'Sports caps for sun protection during outdoor sports or training sessions.', 24.99, 9, 'products/default_image.png', 0, 0, 4, 'active', NOW(), NOW()),
('Backpacks', 'Durable backpacks to carry sports gear, shoes, and other essentials.', 69.99, 2, 'products/default_image.png', 0, 0, 4, 'active', NOW(), NOW()),
('Wristbands', 'Absorbent wristbands to keep hands dry during intense workouts.', 9.99, 9, 'products/default_image.png', 0, 0, 4, 'active', NOW(), NOW()),
('Bicycles', 'Road and mountain bikes for recreational or competitive cycling.', 599.99, 7, 'products/default_image.png', 0, 0, 5, 'active', NOW(), NOW()),
('Camping tents', 'Lightweight and weather-resistant tents for outdoor camping trips.', 199.99, 8, 'products/default_image.png', 0, 0, 5, 'active', NOW(), NOW()),
('Hiking gear', 'Accessories like trekking poles and backpacks for hiking on difficult trails.', 149.99, 8, 'products/default_image.png', 0, 0, 5, 'active', NOW(), NOW()),
('Water sports equipment', 'Surfboards, wetsuits, and accessories for aquatic sports and activities.', 299.99, 10, 'products/default_image.png', 0, 0, 5, 'active', NOW(), NOW()),
('Soccer balls', 'Soccer balls of various sizes and materials for grass or indoor play.', 29.99, 8, 'products/default_image.png', 0, 0, 6, 'active', NOW(), NOW()),
('Basketballs', 'Balls with improved grip for indoor and outdoor basketball games.', 34.99, 9, 'products/default_image.png', 0, 0, 6, 'active', NOW(), NOW()),
('Volleyball equipment', 'Includes volleyballs and nets for beach or indoor volleyball.', 79.99, 2, 'products/default_image.png', 0, 0, 6, 'active', NOW(), NOW()),
('Baseball gear', 'Gloves, balls, and bats for baseball or softball players.', 129.99, 3, 'products/default_image.png', 0, 0, 6, 'active', NOW(), NOW()),
('Tennis rackets', 'Lightweight and balanced rackets for players of all skill levels.', 89.99, 8, 'products/default_image.png', 0, 0, 7, 'active', NOW(), NOW()),
('Padel rackets', 'Perforated surface rackets for better control in padel matches.', 79.99, 8, 'products/default_image.png', 0, 0, 7, 'active', NOW(), NOW()),
('Tennis/padel balls', 'Balls designed for durability and optimal bounce on different surfaces.', 14.99, 3, 'products/default_image.png', 0, 0, 7, 'active', NOW(), NOW()),
('Squash rackets', 'Smaller, lighter rackets for fast-paced squash games.', 69.99, 5, 'products/default_image.png', 0, 0, 7, 'active', NOW(), NOW()),
('Boxing gloves', 'Padded gloves to protect hands during boxing training and matches.', 59.99, 10, 'products/default_image.png', 0, 0, 8, 'active', NOW(), NOW()),
('Mouthguards', 'Protective gear to safeguard teeth and mouth during combat sports.', 19.99, 5, 'products/default_image.png', 0, 0, 8, 'active', NOW(), NOW()),
('Punching bags', 'Heavy bags in different sizes for boxing and kickboxing training.', 129.99, 8, 'products/default_image.png', 0, 0, 8, 'active', NOW(), NOW()),
('Kimonos', 'Specialized clothing for martial arts such as judo, karate, or jiu-jitsu.', 89.99, 3, 'products/default_image.png', 0, 0, 8, 'active', NOW(), NOW()),
('Protein supplements', 'Supplements to aid muscle recovery and growth after workouts.', 39.99, 2, 'products/default_image.png', 0, 0, 9, 'active', NOW(), NOW()),
('Vitamins', 'Multivitamins formulated to meet athletes nutritional needs.', 24.99, 5, 'products/default_image.png', 0, 0, 9, 'active', NOW(), NOW()),
('Energy drinks', 'Beverages designed to boost performance and aid post-exercise recovery.', 2.99, 1, 'products/default_image.png', 0, 0, 9, 'active', NOW(), NOW()),
('Energy bars', 'Nutritious bars to refuel during or after workouts.', 1.99, 2, 'products/default_image.png', 0, 0, 9, 'active', NOW(), NOW()),
('Smartwatches', 'Devices that track physical activity and monitor health metrics.', 199.99, 6, 'products/default_image.png', 0, 0, 10, 'active', NOW(), NOW()),
('Heart rate monitors', 'Devices that track heart rate during workouts for optimal performance.', 79.99, 6, 'products/default_image.png', 0, 0, 10, 'active', NOW(), NOW()),
('Sports earbuds', 'Sweat-resistant earbuds designed for high-intensity physical activities.', 129.99, 4, 'products/default_image.png', 0, 0, 10, 'active', NOW(), NOW()),
('Fitness apps', 'Programs and apps that monitor progress and provide workout guidance.', 4.99, 3, 'products/default_image.png', 0, 0, 10, 'active', NOW(), NOW()),
('Dumbbells Set', 'Set of adjustable dumbbells for strength training', 249.99, 5, 'products/default_image.png', 0, 0, 11, 'active', NOW(), NOW()),
('Treadmill Pro', 'Professional grade treadmill for home or gym use', 1299.99, 3, 'products/default_image.png', 0, 0, 12, 'active', NOW(), NOW()),
('Yoga Mat', 'Non-slip yoga mat for comfortable practice', 29.99, 8, 'products/default_image.png', 0, 0, 13, 'active', NOW(), NOW()),
('Resistance Band Set', 'Set of 5 resistance bands for versatile workouts', 24.99, 7, 'products/default_image.png', 0, 0, 14, 'active', NOW(), NOW()),
('Jump Rope', 'Adjustable jump rope for cardio exercises', 14.99, 9, 'products/default_image.png', 0, 0, 15, 'active', NOW(), NOW()),
('Leg Press Machine', 'Commercial grade leg press machine for lower body workouts', 1999.99, 2, 'products/default_image.png', 0, 0, 16, 'active', NOW(), NOW()),
('Foam Roller', 'High-density foam roller for muscle recovery', 34.99, 6, 'products/default_image.png', 0, 0, 17, 'active', NOW(), NOW()),
('Whey Protein', 'High-quality whey protein powder for muscle growth', 59.99, 4, 'products/default_image.png', 0, 0, 18, 'active', NOW(), NOW()),
('Compression Shorts', 'Men compression shorts for improved performance', 39.99, 7, 'products/default_image.png', 0, 0, 19, 'active', NOW(), NOW()),
('Pull-up Bar', 'Doorway pull-up bar for upper body strength', 49.99, 5, 'products/default_image.png', 0, 0, 20, 'active', NOW(), NOW()),
('Kettlebell', '16kg kettlebell for functional strength training', 69.99, 6, 'products/default_image.png', 0, 0, 11, 'active', NOW(), NOW()),
('Exercise Bike', 'Stationary exercise bike for indoor cycling', 399.99, 3, 'products/default_image.png', 0, 0, 12, 'active', NOW(), NOW()),
('Pilates Ring', 'Pilates toning ring for core and arm exercises', 19.99, 8, 'products/default_image.png', 0, 0, 13, 'active', NOW(), NOW()),
('Ankle Weights', 'Adjustable ankle weights for leg workouts', 29.99, 7, 'products/default_image.png', 0, 0, 14, 'active', NOW(), NOW()),
('Ab Roller', 'Ab roller wheel for core strengthening', 24.99, 9, 'products/default_image.png', 0, 0, 15, 'active', NOW(), NOW()),
('Smith Machine', 'All-in-one Smith machine for various exercises', 1499.99, 2, 'products/default_image.png', 0, 0, 16, 'active', NOW(), NOW()),
('Massage Gun', 'Percussion massage device for muscle recovery', 149.99, 5, 'products/default_image.png', 0, 0, 17, 'active', NOW(), NOW()),
('BCAA Supplement', 'BCAA amino acid supplement for muscle support', 34.99, 6, 'products/default_image.png', 0, 0, 18, 'active', NOW(), NOW()),
('Sports Bra', 'High-impact sports bra for intense workouts', 44.99, 8, 'products/default_image.png', 0, 0, 19, 'active', NOW(), NOW()),
('Resistance Tubes', 'Set of resistance tubes with handles for strength training', 29.99, 7, 'products/default_image.png', 0, 0, 20, 'active', NOW(), NOW()),
('Barbell Set', 'Olympic barbell set for weightlifting', 299.99, 4, 'products/default_image.png', 0, 0, 11, 'active', NOW(), NOW()),
('Rowing Machine', 'Indoor rowing machine for full-body workouts', 799.99, 3, 'products/default_image.png', 0, 0, 12, 'active', NOW(), NOW()),
('Yoga Block', 'High-density foam yoga block for support and stability', 14.99, 9, 'products/default_image.png', 0, 0, 13, 'active', NOW(), NOW()),
('Resistance Loop Bands', 'Set of 3 loop resistance bands for various exercises', 19.99, 8, 'products/default_image.png', 0, 0, 14, 'active', NOW(), NOW()),
('Gym Gloves', 'Weightlifting gloves for hand protection', 24.99, 7, 'products/default_image.png', 0, 0, 15, 'active', NOW(), NOW()),
('Cable Crossover Machine', 'Dual pulley cable crossover machine for versatile workouts', 1799.99, 2, 'products/default_image.png', 0, 0, 16, 'active', NOW(), NOW()),
('Compression Socks', 'Knee-high compression socks for improved circulation', 29.99, 6, 'products/default_image.png', 0, 0, 17, 'active', NOW(), NOW()),
('Pre-workout Supplement', 'Pre-workout energy supplement for enhanced performance', 39.99, 5, 'products/default_image.png', 0, 0, 18, 'active', NOW(), NOW()),
('Workout Tank Top', 'Moisture-wicking tank top for comfortable workouts', 24.99, 8, 'products/default_image.png', 0, 0, 19, 'active', NOW(), NOW()),
('Adjustable Bench', 'Adjustable weight bench for various exercises', 199.99, 4, 'products/default_image.png', 0, 0, 20, 'active', NOW(), NOW()),
('Medicine Ball', '10lb medicine ball for functional training', 49.99, 6, 'products/default_image.png', 0, 0, 11, 'active', NOW(), NOW()),
('Elliptical Trainer', 'Low-impact elliptical trainer for cardio workouts', 699.99, 3, 'products/default_image.png', 0, 0, 12, 'active', NOW(), NOW()),
('Yoga Strap', 'Cotton yoga strap for improved flexibility', 9.99, 9, 'products/default_image.png', 0, 0, 13, 'active', NOW(), NOW()),
('Wrist Weights', 'Adjustable wrist weights for arm workouts', 19.99, 7, 'products/default_image.png', 0, 0, 14, 'active', NOW(), NOW()),
('Fitness Tracker', 'Smart fitness tracking watch for monitoring activities', 129.99, 5, 'products/default_image.png', 0, 0, 15, 'active', NOW(), NOW()),
('Lat Pulldown Machine', 'Commercial lat pulldown machine for back exercises', 999.99, 2, 'products/default_image.png', 0, 0, 16, 'active', NOW(), NOW()),
('Foam Massage Ball', 'Deep tissue massage ball for muscle relief', 14.99, 8, 'products/default_image.png', 0, 0, 17, 'active', NOW(), NOW()),
('Protein Bar', 'High-protein snack bar for post-workout nutrition', 2.99, 10, 'products/default_image.png', 0, 0, 18, 'active', NOW(), NOW()),
('Compression Sleeves', 'Arm compression sleeves for improved circulation', 24.99, 7, 'products/default_image.png', 0, 0, 19, 'active', NOW(), NOW()),
('Stability Ball', '65cm anti-burst stability ball for core exercises', 29.99, 6, 'products/default_image.png', 0, 0, 20, 'active', NOW(), NOW());


-- Populate Orders table (200 orders)
INSERT INTO orders (orderDate, status, totalOrder, cusPayment, user_id,created_at, updated_at)
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
    FLOOR(RAND() * 10) + 1,  -- User IDs 1-10
    NOW(),
    NOW()
FROM 
    (SELECT @row := 0) r,
    (SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5) t1,
    (SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5) t2,
    (SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5) t3,
    (SELECT 1 UNION SELECT 2) t4
LIMIT 200;

-- Populate Items table (for the 200 orders)
-- Create a temporary stored procedure to insert items
DELIMITER //
CREATE PROCEDURE temp_insert_items()
BEGIN
    DECLARE done INT DEFAULT FALSE;
    DECLARE v_order_id INT;
    DECLARE v_num_items INT;
    DECLARE v_product_id INT;
    DECLARE v_price DECIMAL(10, 2);
    DECLARE v_quantity INT;

    -- Cursor to loop through orders
    DECLARE cur CURSOR FOR 
        SELECT id, FLOOR(RAND() * 3) + 1 AS num_items
        FROM orders
        WHERE id <= 200;  -- Limitar a las primeras 200 órdenes

    -- Cursor handler for end of cursor
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

    -- Open the cursor
    OPEN cur;

    -- Start the insertion loop
    read_loop: LOOP
        FETCH cur INTO v_order_id, v_num_items;
        IF done THEN
            LEAVE read_loop;
        END IF;

        -- Insert items for each order
        SET @i = 0;
        WHILE @i < v_num_items DO
            -- Select a random product
            SELECT id, price INTO v_product_id, v_price
            FROM products
            ORDER BY RAND()
            LIMIT 1;

            -- Generate a random quantity
            SET v_quantity = FLOOR(RAND() * 3) + 1;

            -- Insert the item
            INSERT INTO items (price, quantity, order_id, product_id, created_at, updated_at)
            VALUES (v_price, v_quantity, v_order_id, v_product_id, NOW(), NOW());

            SET @i = @i + 1;
        END WHILE;
    END LOOP;

    -- Close the cursor
    CLOSE cur;
END //
DELIMITER ;

-- Execute the procedure
CALL temp_insert_items();

-- Delete the temporary procedure
DROP PROCEDURE IF EXISTS temp_insert_items;


-- Populate Reviews table (200 reviews)
INSERT INTO reviews (rating, comment, approved, user_id, product_id, created_at, updated_at)
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
    i.product_id,
    NOW(),
    NOW()
FROM (
    SELECT FLOOR(RAND() * 5) + 1 AS rating
    FROM 
        (SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5) t1,
        (SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5) t2,
        (SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4) t3
    LIMIT 200
) AS subquery
JOIN items i ON i.id IS NOT NULL  
JOIN orders o ON o.id = i.order_id  
ORDER BY RAND() 
LIMIT 500; 


-- Update order totals based on actual item prices and quantities
UPDATE orders o
JOIN (
    SELECT order_id, SUM(price * quantity) AS total
    FROM items
    GROUP BY order_id
) i ON o.id = i.order_id
SET o.totalOrder = i.total;

-- Update product review counts
UPDATE products p
SET 
    p.sumReviews = (SELECT COALESCE(SUM(rating), 0) FROM reviews WHERE product_id = p.id),
    p.totalReviews = (SELECT COUNT(*) FROM reviews WHERE product_id = p.id);