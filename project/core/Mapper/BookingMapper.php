<?php

namespace Core\Mapper;

use App\Entities\Booking;

class BookingMapper
{
    public static function mapBooking($data): Booking
    {
        $booking = new Booking();

        // Map basic booking data
        $booking->setId($data['id'] ?? null);
        $booking->setPropertyId($data['property_id'] ?? null);
        $booking->setTravelerId($data['traveler_id'] ?? null);
        $booking->setStartDate($data['start_date'] ?? null);
        $booking->setEndDate($data['end_date'] ?? null);
        $booking->setGuestCount($data['guest_count'] ?? null);
        $booking->setTotalPrice($data['total_price'] ?? null);
        $booking->setStatus($data['status'] ?? null);
        $booking->setCreatedAt($data['created_at'] ?? null);
        $booking->setUpdatedAt($data['updated_at'] ?? null);
        $booking->setCancellationReason($data['cancellation_reason'] ?? null);
        $booking->setSpecialRequests($data['special_requests'] ?? null);

        // Map property relation data
        $booking->setPropertyTitle($data['property_title'] ?? null);
        $booking->setPropertyAddress($data['property_address'] ?? null);
        $booking->setPropertyImage($data['property_image'] ?? null);

        // Map traveler relation data
        $booking->setTravelerName($data['traveler_name'] ?? null);
        $booking->setTravelerEmail($data['traveler_email'] ?? null);

        return $booking;
    }
}