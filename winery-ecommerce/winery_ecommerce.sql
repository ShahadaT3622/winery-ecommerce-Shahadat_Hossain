-- Disable foreign key checks
SET FOREIGN_KEY_CHECKS = 0;

-- Drop tables if they already exist
DROP TABLE IF EXISTS order_items;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS blog;

-- Enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

-- Create the necessary tables
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    gender VARCHAR(10),
    address TEXT,
    city VARCHAR(255),
    state VARCHAR(255),
    zip_code VARCHAR(10),
    phone_number VARCHAR(20)
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data into users table
INSERT INTO users (username, email, password, first_name, last_name, gender, address, city, state, zip_code, phone_number)
VALUES ('john_doe', 'john@example.com', 'password123', 'John', 'Doe', 'Male', '123 Main St', 'Anytown', 'CA', '12345', '123-456-7890');

-- Insert sample data into products table
INSERT INTO products (name, description, price, image)
VALUES ('Red Wine', 'A fine red wine.', 29.99, 'product1.jpg'),
       ('White Wine', 'A crisp white wine.', 24.99, 'product2.jpg');

-- Insert sample data into blog table
INSERT INTO blog (title, content, image)
VALUES ('Wine Tasting Event', 'Join us for a wine tasting event.', 'blog1.jpg'),
       ('New Arrivals', 'Check out our new arrivals.', 'blog2.jpg');
