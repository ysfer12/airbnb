<?php
namespace App\Utilities;

class ErrorHandler {
    public static function handleDeprecations()
    {
        set_error_handler(function($severity, $message, $file, $line) {
            // Ignore specific PayPal deprecation warning
            if (strpos($message, 'Creation of dynamic property PayPalCheckoutSdk\Core\PayPalHttpClient::$curlCls') !== false) {
                return true;
            }

            // For other deprecation warnings, log or handle as needed
            error_log("Deprecation Warning: $message in $file on line $line");

            // Return false to allow default error handling for other warnings
            return false;
        }, E_DEPRECATED | E_USER_DEPRECATED);
    }
}