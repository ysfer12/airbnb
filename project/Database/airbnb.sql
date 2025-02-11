-- Enable pgcrypto for password hashing
CREATE EXTENSION IF NOT EXISTS pgcrypto;

-- Create enum types
CREATE TYPE booking_status AS ENUM ('pending', 'confirmed', 'cancelled', 'completed');
CREATE TYPE payment_status AS ENUM ('pending', 'completed', 'refunded');
CREATE TYPE payment_method_type AS ENUM ('stripe', 'paypal');

-- Create roles table
CREATE TABLE roles (
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create users table
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    role_id INTEGER REFERENCES roles(id),
    is_active BOOLEAN DEFAULT true,
    profile_picture VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP
);

-- Create categories table
CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create properties table with integrated availability
CREATE TABLE properties (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category_id INTEGER REFERENCES categories(id),
    photos TEXT[],
    is_validated BOOLEAN DEFAULT false,
    is_available BOOLEAN DEFAULT true,
    owner_id INTEGER REFERENCES users(id),
    address TEXT NOT NULL,
    latitude DECIMAL(10,8),
    longitude DECIMAL(11,8),
    max_guests INTEGER NOT NULL,
    bedrooms INTEGER NOT NULL,
    bathrooms INTEGER NOT NULL,
    amenities TEXT[],
    house_rules TEXT,
    -- New availability and pricing fields
    availability_dates JSONB,
    base_price DECIMAL(10,2),
    minimum_stay INTEGER DEFAULT 1,
    maximum_stay INTEGER,
    cancellation_policy VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP
);

-- Create bookings table
CREATE TABLE bookings (
    id SERIAL PRIMARY KEY,
    property_id INTEGER REFERENCES properties(id),
    traveler_id INTEGER REFERENCES users(id),
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    guest_count INTEGER NOT NULL,
    total_price DECIMAL(10,2) NOT NULL,
    status booking_status DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    cancellation_reason TEXT,
    special_requests TEXT
);

-- Create payments table with PayPal support
CREATE TABLE payments (
    id SERIAL PRIMARY KEY,
    booking_id INTEGER REFERENCES bookings(id),
    amount DECIMAL(10,2) NOT NULL,
    status payment_status DEFAULT 'pending',
    payment_method payment_method_type NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    stripe_payment_id VARCHAR(100),
    paypal_transaction_id VARCHAR(100),
    refund_amount DECIMAL(10,2),
    refund_reason TEXT
);

-- Create reviews table
CREATE TABLE reviews (
    id SERIAL PRIMARY KEY,
    booking_id INTEGER REFERENCES bookings(id),
    user_id INTEGER REFERENCES users(id),
    rating INTEGER CHECK (rating >= 1 AND rating <= 5),
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create messages table
CREATE TABLE messages (
    id SERIAL PRIMARY KEY,
    sender_id INTEGER REFERENCES users(id),
    receiver_id INTEGER REFERENCES users(id),
    content TEXT NOT NULL,
    is_read BOOLEAN DEFAULT false,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    booking_id INTEGER REFERENCES bookings(id)
);
-- Insert roles
INSERT INTO roles (name) VALUES
    ('admin'),
    ('owner'),
    ('traveler');

-- Insert users with hashed passwords
INSERT INTO users (name, email, password, phone, role_id, profile_picture) VALUES
    ('Admin User', 'admin@airbnb.com', crypt('admin123', gen_salt('bf')), '+1234567890', 1, 'admin-profile.jpg'),
    ('John Smith', 'john@owner.com', crypt('owner123', gen_salt('bf')), '+1234567891', 2, 'john-profile.jpg'),
    ('Emma Davis', 'emma@owner.com', crypt('owner123', gen_salt('bf')), '+1234567892', 2, 'emma-profile.jpg'),
    ('Michael Brown', 'michael@owner.com', crypt('owner123', gen_salt('bf')), '+1234567893', 2, 'michael-profile.jpg'),
    ('Sarah Wilson', 'sarah@traveler.com', crypt('traveler123', gen_salt('bf')), '+1234567894', 3, 'sarah-profile.jpg'),
    ('David Miller', 'david@traveler.com', crypt('traveler123', gen_salt('bf')), '+1234567895', 3, 'david-profile.jpg'),
    ('Lisa Anderson', 'lisa@traveler.com', crypt('traveler123', gen_salt('bf')), '+1234567896', 3, 'lisa-profile.jpg'),
    ('James Wilson', 'james@owner.com', crypt('owner123', gen_salt('bf')), '+1234567897', 2, 'james-profile.jpg'),
    ('Maria Garcia', 'maria@traveler.com', crypt('traveler123', gen_salt('bf')), '+1234567898', 3, 'maria-profile.jpg'),
    ('Robert Taylor', 'robert@traveler.com', crypt('traveler123', gen_salt('bf')), '+1234567899', 3, 'robert-profile.jpg');

-- Insert categories
INSERT INTO categories (name, description) VALUES
    ('Apartment', 'Modern urban living spaces perfect for city stays'),
    ('House', 'Spacious standalone properties for families'),
    ('Villa', 'Luxury vacation homes with premium amenities'),
    ('Cabin', 'Cozy woodland retreats for nature lovers'),
    ('Studio', 'Efficient compact spaces for solo travelers'),
    ('Beach House', 'Waterfront properties with ocean views'),
    ('Mountain Chalet', 'Alpine accommodations for ski enthusiasts'),
    ('Townhouse', 'Multi-level urban homes with modern comfort');

-- Insert properties
INSERT INTO properties (
    title, description, price, category_id, photos, is_validated,
    owner_id, address, latitude, longitude, max_guests, bedrooms,
    bathrooms, amenities, house_rules, base_price, minimum_stay,
    maximum_stay, cancellation_policy, availability_dates
) VALUES
    (
        'Luxury Downtown Apartment',
        'Stunning modern apartment in the heart of the city with panoramic views',
        200.00,
        1,
        ARRAY['apt1.jpg', 'apt2.jpg', 'apt3.jpg'],
        true,
        2,
        '123 Downtown St, New York, NY',
        40.7128,
        -74.0060,
        4,
        2,
        2,
        ARRAY['wifi', 'pool', 'gym', 'parking'],
        'No smoking, No parties',
        200.00,
        2,
        30,
        'flexible',
        '{"blocked_dates": ["2024-03-01", "2024-03-02"], "special_prices": {"2024-12-31": 300.00}}'
    ),
    (
        'Mountain View Cabin',
        'Cozy cabin with breathtaking mountain views and hot tub',
        150.00,
        4,
        ARRAY['cabin1.jpg', 'cabin2.jpg'],
        true,
        3,
        '456 Mountain Rd, Denver, CO',
        39.7392,
        -104.9903,
        6,
        3,
        2,
        ARRAY['wifi', 'hot_tub', 'fireplace', 'hiking_trails'],
        'Quiet hours after 10PM',
        150.00,
        2,
        14,
        'moderate',
        '{"blocked_dates": ["2024-04-01", "2024-04-02"], "special_prices": {"2024-12-24": 250.00}}'
    ),
    (
        'Beachfront Paradise',
        'Stunning beachfront villa with private pool',
        500.00,
        6,
        ARRAY['beach1.jpg', 'beach2.jpg', 'beach3.jpg'],
        true,
        4,
        '789 Ocean Dr, Miami, FL',
        25.7617,
        -80.1918,
        8,
        4,
        3,
        ARRAY['wifi', 'pool', 'beach_access', 'bbq'],
        'No pets allowed',
        500.00,
        3,
        21,
        'strict',
        '{"blocked_dates": ["2024-07-01", "2024-07-02"], "special_prices": {"2024-07-04": 600.00}}'
    ),
    (
        'Urban Studio Loft',
        'Modern studio in artistic district',
        120.00,
        5,
        ARRAY['studio1.jpg', 'studio2.jpg'],
        true,
        2,
        '101 Arts District, Portland, OR',
        45.5155,
        -122.6789,
        2,
        1,
        1,
        ARRAY['wifi', 'workspace', 'city_view'],
        'No smoking',
        120.00,
        1,
        30,
        'flexible',
        '{"blocked_dates": ["2024-05-01"], "special_prices": {"2024-06-01": 150.00}}'
    );

-- Insert bookings
INSERT INTO bookings (
    property_id, traveler_id, start_date, end_date,
    guest_count, total_price, status, special_requests
) VALUES
    (1, 5, '2024-03-15', '2024-03-20', 2, 1000.00, 'confirmed', 'Early check-in requested'),
    (2, 6, '2024-04-10', '2024-04-15', 4, 750.00, 'pending', 'Late check-out if possible'),
    (3, 7, '2024-07-15', '2024-07-20', 6, 2500.00, 'confirmed', 'Airport pickup needed'),
    (4, 9, '2024-06-01', '2024-06-03', 2, 240.00, 'confirmed', 'Extra towels please'),
    (1, 10, '2024-08-01', '2024-08-05', 3, 800.00, 'pending', NULL);

-- Insert payments
INSERT INTO payments (
    booking_id, amount, status, payment_method, 
    stripe_payment_id, paypal_transaction_id
) VALUES
    (1, 1000.00, 'completed', 'stripe', 'stripe_123456', NULL),
    (2, 750.00, 'pending', 'paypal', NULL, 'paypal_123456'),
    (3, 2500.00, 'completed', 'stripe', 'stripe_789012', NULL),
    (4, 240.00, 'completed', 'paypal', NULL, 'paypal_789012'),
    (5, 800.00, 'pending', 'stripe', 'stripe_345678', NULL);

-- Insert reviews
INSERT INTO reviews (booking_id, user_id, rating, comment) VALUES
    (1, 5, 5, 'Perfect location and amazing views! Host was very responsive.'),
    (3, 7, 4, 'Beautiful beach house, great amenities. Slightly expensive but worth it.'),
    (4, 9, 5, 'Cozy studio in a great location. Perfect for my short stay.');

-- Insert messages
INSERT INTO messages (sender_id, receiver_id, content, booking_id, is_read) VALUES
    (5, 2, 'Hi, is early check-in possible?', 1, true),
    (2, 5, 'Yes, you can check in at 2 PM.', 1, true),
    (6, 3, 'What time is check-out?', 2, false),
    (7, 4, 'Where can I find parking?', 3, true),
    (4, 7, 'There is a dedicated parking spot in front of the house.', 3, false);