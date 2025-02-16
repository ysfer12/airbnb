<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\BookingMapper;

class BookingModel extends BaseModel
{
    public function createBooking($data)
    {
        $query = "INSERT INTO bookings (
            property_id, traveler_id, start_date, end_date, 
            guest_count, total_price, status, special_requests, 
            created_at, updated_at
        ) VALUES (
            :property_id, :traveler_id, :start_date, :end_date,
            :guest_count, :total_price, :status, :special_requests,
            CURRENT_TIMESTAMP, CURRENT_TIMESTAMP
        ) RETURNING id";

        $stmt = $this->query($query, $data);
        return $stmt->fetchColumn();
    }

    public function getBookingById($id)
    {
        $query = "SELECT 
            b.*, 
            p.title as property_title,
            p.address as property_address,
            p.photos as property_image,
            u.name as traveler_name,
            u.email as traveler_email
        FROM bookings b
        LEFT JOIN properties p ON p.id = b.property_id
        LEFT JOIN users u ON u.id = b.traveler_id
        WHERE b.id = :id";

        $stmt = $this->query($query, ['id' => $id]);
        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        return BookingMapper::mapBooking($data);
    }

    public function getUserBookings($userId)
    {
        $query = "SELECT 
            b.*, 
            p.title as property_title,
            p.address as property_address,
            p.photos as property_image,
            u.name as traveler_name,
            u.email as traveler_email
        FROM bookings b
        LEFT JOIN properties p ON p.id = b.property_id
        LEFT JOIN users u ON u.id = b.traveler_id
        WHERE b.traveler_id = :user_id
        ORDER BY b.created_at DESC";

        $stmt = $this->query($query, ['user_id' => $userId]);
        $bookings = [];

        while ($data = $stmt->fetch()) {
            $bookings[] = BookingMapper::mapBooking($data);
        }

        return $bookings;
    }

    public function updateBookingStatus($id, $status)
    {
        $query = "UPDATE bookings 
                 SET status = :status, 
                     updated_at = CURRENT_TIMESTAMP 
                 WHERE id = :id";

        $stmt = $this->query($query, [
            'id' => $id,
            'status' => $status
        ]);

        return $stmt->rowCount() > 0;
    }

    public function checkAvailability($propertyId, $startDate, $endDate)
    {
        $query = "SELECT COUNT(*) as booking_count
                 FROM bookings
                 WHERE property_id = :property_id
                 AND status != 'cancelled'
                 AND (
                     (start_date BETWEEN :start_date AND :end_date)
                     OR (end_date BETWEEN :start_date AND :end_date)
                     OR (:start_date BETWEEN start_date AND end_date)
                     OR (:end_date BETWEEN start_date AND end_date)
                 )";

        $stmt = $this->query($query, [
            'property_id' => $propertyId,
            'start_date' => $startDate,
            'end_date' => $endDate
        ]);

        $result = $stmt->fetch();
        return $result['booking_count'] == 0;
    }

    public function cancelBooking($id, $reason)
    {
        $query = "UPDATE bookings 
                 SET status = 'cancelled',
                     cancellation_reason = :reason,
                     updated_at = CURRENT_TIMESTAMP
                 WHERE id = :id";

        $stmt = $this->query($query, [
            'id' => $id,
            'reason' => $reason
        ]);

        return $stmt->rowCount() > 0;
    }

    public function getPropertyBookings($propertyId)
    {
        $query = "SELECT 
            b.start_date, 
            b.end_date
        FROM bookings b
        WHERE b.property_id = :property_id
        AND b.status != 'cancelled'
        ORDER BY b.start_date ASC";

        $stmt = $this->query($query, ['property_id' => $propertyId]);
        return $stmt->fetchAll();
    }

    public function getBookedDates($propertyId)
    {
        $query = "SELECT 
            b.start_date, 
            b.end_date,
            b.status
        FROM bookings b
        WHERE b.property_id = :property_id
        AND b.status IN ('confirmed', 'pending')
        AND b.end_date >= CURRENT_DATE
        ORDER BY b.start_date ASC";

        $stmt = $this->query($query, ['property_id' => $propertyId]);
        return $stmt->fetchAll();
    }
}