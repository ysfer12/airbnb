<?php
// App/Services/EmailService.php
namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailService
{
    private $mailer;
    private $contractService;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
        $this->contractService = new ContractService();

        // Configure SMTP
        $this->mailer->isSMTP();
        $this->mailer->Host = $_ENV['SMTP_HOST'];
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $_ENV['SMTP_USERNAME'];
        $this->mailer->Password = $_ENV['SMTP_PASSWORD'];
        $this->mailer->Port = $_ENV['SMTP_PORT'];
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }

    public function sendBookingConfirmation($booking)
    {
        try {
            // Generate contract PDF
            $pdfContract = $this->contractService->generateContract($booking);

            // Configure email
            $this->mailer->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
            $this->mailer->addAddress($booking['email']);
            $this->mailer->Subject = 'Booking Confirmation #' . $booking['id'];

            // Email body
            $this->mailer->isHTML(true);
            $this->mailer->Body = $this->getBookingConfirmationTemplate($booking);

            // Attach PDF contract
            $this->mailer->addStringAttachment(
                $pdfContract,
                'booking_contract_' . $booking['id'] . '.pdf',
                'base64',
                'application/pdf'
            );

            return $this->mailer->send();
        } catch (Exception $e) {
            error_log('Failed to send email: ' . $e->getMessage());
            return false;
        }
    }

    private function getBookingConfirmationTemplate($booking)
    {
        $formattedStartDate = date('F j, Y', strtotime($booking['start_date']));
        $formattedEndDate = date('F j, Y', strtotime($booking['end_date']));

        return "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
                    <h1 style='color: #2563eb; text-align: center;'>Booking Confirmation</h1>
                    
                    <div style='background-color: #f3f4f6; padding: 20px; border-radius: 8px; margin: 20px 0;'>
                        <h2 style='color: #1f2937;'>Booking Details</h2>
                        <p><strong>Booking Reference:</strong> #{$booking['id']}</p>
                        <p><strong>Check-in:</strong> {$formattedStartDate}</p>
                        <p><strong>Check-out:</strong> {$formattedEndDate}</p>
                        <p><strong>Number of Guests:</strong> {$booking['guest_count']}</p>
                        <p><strong>Total Amount:</strong> €{$booking['total_price']}</p>
                    </div>

                    <div style='background-color: #f3f4f6; padding: 20px; border-radius: 8px; margin: 20px 0;'>
                        <h2 style='color: #1f2937;'>Important Information</h2>
                        <p><strong>Check-in Time:</strong> After 3:00 PM</p>
                        <p><strong>Check-out Time:</strong> Before 11:00 AM</p>
                        <p><strong>Address:</strong> Beautiful apartment in the heart of the city</p>
                    </div>

                    <div style='text-align: center; margin-top: 30px;'>
                        <p>Your booking contract is attached to this email.</p>
                        <p>Please keep this email for your records.</p>
                    </div>

                    <div style='text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #e5e7eb;'>
                        <p style='font-size: 12px; color: #6b7280;'>
                            If you have any questions about your booking, please contact us at support@example.com
                        </p>
                    </div>
                </div>
            </body>
            </html>
        ";
    }
}