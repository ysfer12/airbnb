
-- get last 10 property:

SELECT
    properties.id, 
    properties.title, 
    properties.price, 
    properties.address, 
    properties.bedrooms, 
    properties.bathrooms,
    properties.created_at,
    MAX(reviews.rating)
FROM properties
    LEFT JOIN bookings ON bookings.property_id = properties.id
    LEFT JOIN reviews ON reviews.booking_id = bookings.id
GROUP BY
    properties.id, properties.title
ORDER BY properties.created_at DESC
LIMIT 10;


