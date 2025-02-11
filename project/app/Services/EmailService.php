<?php
namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailService {
    private $mailer;

    public function __construct() {
        $this->mailer = new PHPMailer(true);
        $this->configureMailer();
    }

    private function configureMailer() {
        $this->mailer->isSMTP();
        $this->mailer->Host = $_ENV['SMTP_HOST'];
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $_ENV['SMTP_USERNAME'];
        $this->mailer->Password = $_ENV['SMTP_PASSWORD'];
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = $_ENV['SMTP_PORT'];
    }

    public function sendBookingConfirmation($bookingId) {
        try {
            // Fetch booking details 
            $bookingDetails = $this->getBookingDetails($bookingId);

            $this->mailer->setFrom('bookings@yoursite.com', 'Booking Confirmation');
            $this->mailer->addAddress($bookingDetails['email']);
            $this->mailer->isHTML(true);
            $this->mailer->Subject = 'Booking Confirmation';
            
            $this->mailer->Body = $this->generateEmailBody($bookingDetails);

            $this->mailer->send();
            return true;
        } catch (Exception $e) {
            error_log("Email send error: " . $this->mailer->ErrorInfo);
            return false;
        }
    }

    private function getBookingDetails($bookingId) {
        // TODO: Implement actual database retrieval of booking details
        return [
            'email' => 'user@example.com',
            'booking_id' => $bookingId,
        ];
    }

    private function generateEmailBody($bookingDetails) {
        return "
            <h1>Booking Confirmation</h1>
            <p>Your booking #" . $bookingDetails['booking_id'] . " is confirmed!</p>
        ";
    }
}