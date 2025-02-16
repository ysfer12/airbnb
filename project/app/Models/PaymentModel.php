<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\PaymentMapper;

class PaymentModel extends BaseModel
{
    public function createPayment($data)
    {
        $query = "INSERT INTO payments (
            booking_id, amount, status, payment_method,
            stripe_payment_id, paypal_transaction_id, timestamp
        ) VALUES (
            :booking_id, :amount, :status, :payment_method,
            :stripe_payment_id, :paypal_transaction_id, CURRENT_TIMESTAMP
        ) RETURNING id";

        $params = [
            'booking_id' => $data['booking_id'],
            'amount' => $data['amount'],
            'status' => $data['status'],
            'payment_method' => $data['payment_method'],
            'stripe_payment_id' => $data['stripe_payment_id'] ?? null,
            'paypal_transaction_id' => $data['paypal_transaction_id'] ?? null
        ];

        $stmt = $this->query($query, $params);
        return $stmt->fetchColumn();
    }

    public function getPaymentById($id)
    {
        $query = "SELECT 
            p.*,
            b.id as booking_reference,
            prop.title as property_title,
            u.name as traveler_name
        FROM payments p
        LEFT JOIN bookings b ON b.id = p.booking_id
        LEFT JOIN properties prop ON prop.id = b.property_id
        LEFT JOIN users u ON u.id = b.traveler_id
        WHERE p.id = :id";

        $stmt = $this->query($query, ['id' => $id]);
        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        return PaymentMapper::mapPayment($data);
    }

    public function getPaymentByBookingId($bookingId)
    {
        $query = "SELECT 
            p.*,
            b.id as booking_reference,
            prop.title as property_title,
            u.name as traveler_name
        FROM payments p
        LEFT JOIN bookings b ON b.id = p.booking_id
        LEFT JOIN properties prop ON prop.id = b.property_id
        LEFT JOIN users u ON u.id = b.traveler_id
        WHERE p.booking_id = :booking_id
        ORDER BY p.timestamp DESC
        LIMIT 1";

        $stmt = $this->query($query, ['booking_id' => $bookingId]);
        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        return PaymentMapper::mapPayment($data);
    }

    public function updatePaymentStatus($id, $status, $transactionId = null)
    {
        $params = [
            'id' => $id,
            'status' => $status
        ];

        $queryParts = ["status = :status"];

        if (str_contains($transactionId ?? '', 'pi_')) {
            $params['stripe_payment_id'] = $transactionId;
            $queryParts[] = "stripe_payment_id = :stripe_payment_id";
        } elseif ($transactionId) {
            $params['paypal_transaction_id'] = $transactionId;
            $queryParts[] = "paypal_transaction_id = :paypal_transaction_id";
        }

        $query = "UPDATE payments 
                 SET " . implode(", ", $queryParts) . " 
                 WHERE id = :id";

        $stmt = $this->query($query, $params);
        return $stmt->rowCount() > 0;
    }

    public function processRefund($id, $amount, $reason)
    {
        $query = "UPDATE payments 
                 SET status = 'refunded',
                     refund_amount = :amount,
                     refund_reason = :reason
                 WHERE id = :id";

        $stmt = $this->query($query, [
            'id' => $id,
            'amount' => $amount,
            'reason' => $reason
        ]);

        return $stmt->rowCount() > 0;
    }

    public function getPaymentsByUserId($userId)
    {
        $query = "SELECT 
            p.*,
            b.id as booking_reference,
            prop.title as property_title,
            u.name as traveler_name
        FROM payments p
        LEFT JOIN bookings b ON b.id = p.booking_id
        LEFT JOIN properties prop ON prop.id = b.property_id
        LEFT JOIN users u ON u.id = b.traveler_id
        WHERE b.traveler_id = :user_id
        ORDER BY p.timestamp DESC";

        $stmt = $this->query($query, ['user_id' => $userId]);
        $payments = [];

        while ($data = $stmt->fetch()) {
            $payments[] = PaymentMapper::mapPayment($data);
        }

        return $payments;
    }
}