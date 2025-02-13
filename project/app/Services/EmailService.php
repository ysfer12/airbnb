<?php
namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Entities\Booking;
use App\Entities\User;

class EmailService 
{
    private PHPMailer $mailer;
    
    public function __construct() 
    {
        $this->mailer = new PHPMailer(true);
        $this->configureMailer();
    }

    private function configureMailer(): void 
    {
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.gmail.com';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $_ENV['GMAIL_USER'];
        $this->mailer->Password = $_ENV['GMAIL_APP_PASSWORD'];
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = 587;
        $this->mailer->CharSet = 'UTF-8';
    }

    public function sendBookingConfirmation(Booking $booking, User $user): bool 
    {
        try {
            $this->mailer->setFrom($_ENV['GMAIL_USER'], 'Votre Plateforme');
            $this->mailer->addAddress($user->getEmail());
            $this->mailer->Subject = 'Confirmation de réservation #' . $booking->getId();
            
            $html = $this->generateBookingContract($booking);
            $this->mailer->isHTML(true);
            $this->mailer->Body = $html;
            
            return $this->mailer->send();
        } catch (Exception $e) {
            throw new Exception("Erreur d'envoi d'email: " . $e->getMessage());
        }
    }

    private function generateBookingContract(Booking $booking): string 
    {
        return "
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <title>Confirmation de Réservation</title>
            </head>
            <body>
                <h1>Confirmation de Réservation</h1>
                <div style='margin: 20px 0;'>
                    <p><strong>Numéro de réservation:</strong> {$booking->getId()}</p>
                    <p><strong>Dates du séjour:</strong> du {$booking->getStartDate()} au {$booking->getEndDate()}</p>
                    <p><strong>Nombre de voyageurs:</strong> {$booking->getGuestCount()}</p>
                    <p><strong>Montant total:</strong> {$booking->getTotalPrice()}€</p>
                    " . ($booking->getSpecialRequests() ? "<p><strong>Demandes spéciales:</strong> {$booking->getSpecialRequests()}</p>" : "") . "
                </div>
                <div style='margin-top: 30px;'>
                    <p>Pour toute question, n'hésitez pas à nous contacter.</p>
                    <p>Merci de votre confiance !</p>
                </div>
            </body>
            </html>
        ";
    }
}