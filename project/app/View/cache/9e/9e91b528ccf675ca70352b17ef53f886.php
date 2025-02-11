<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* front/booking.twig */
class __TwigTemplate_dc94af873f46f4979d5c37af2141460a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Book Modern Downtown Apartment - Real Homes</title>
    <link href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
    <script src=\"https://js.stripe.com/v3/\"></script>
</head>
<body class=\"bg-gray-50\">
    <!-- Navigation -->
    <nav class=\"bg-white shadow-md\">
        <div class=\"container mx-auto px-6 py-4 flex justify-between items-center\">
            <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" 
                 alt=\"Real Homes Logo\" class=\"h-10\">
            <div class=\"flex items-center space-x-6\">
                <a href=\"#\" class=\"text-gray-600 hover:text-blue-600 transition\">Help</a>
                <a href=\"#\" class=\"text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-full transition\">Contact Support</a>
            </div>
        </div>
    </nav>

    <!-- Booking Container -->
    <div class=\"container mx-auto px-6 py-12\">
        <!-- Step Indicators -->
        <ul class=\"flex justify-between items-center mb-12\">
            <li class=\"step-indicator text-center flex-1 active\" data-step=\"1\">
                <div class=\"step-circle bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">1</div>
                <span class=\"text-sm\">Property Details</span>
            </li>
            <li class=\"step-indicator text-center flex-1\" data-step=\"2\">
                <div class=\"step-circle bg-gray-300 text-gray-600 rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">2</div>
                <span class=\"text-sm\">Guest Information</span>
            </li>
            <li class=\"step-indicator text-center flex-1\" data-step=\"3\">
                <div class=\"step-circle bg-gray-300 text-gray-600 rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">3</div>
                <span class=\"text-sm\">Payment</span>
            </li>
            <li class=\"step-indicator text-center flex-1\" data-step=\"4\">
                <div class=\"step-circle bg-gray-300 text-gray-600 rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">4</div>
                <span class=\"text-sm\">Confirmation</span>
            </li>
        </ul>

        <!-- Booking Steps Container -->
        <div class=\"booking-steps\">
            <!-- Step 1: Property Details -->
            <div id=\"step-1\" class=\"step-container active\">
                <div class=\"bg-white rounded-xl shadow-lg p-8\">
                    <h2 class=\"text-2xl font-bold mb-6\">Property Details</h2>
                    
                    <div class=\"grid md:grid-cols-2 gap-8\">
                        <!-- Property Image and Details -->
                        <div>
                            <img src=\"https://images.unsplash.com/photo-1512917774080-9991f1c4c750\" 
                                 class=\"w-full h-96 object-cover rounded-lg mb-6\">
                            <h3 class=\"text-xl font-semibold\">Modern Downtown Apartment</h3>
                            <p class=\"text-gray-600 mb-4\">San Francisco, California</p>
                            
                            <div class=\"grid grid-cols-3 gap-4 mb-6\">
                                <div class=\"bg-blue-50 p-4 rounded-lg text-center\">
                                    <i class=\"fas fa-bed text-blue-600 mb-2 text-2xl\"></i>
                                    <span class=\"block\">3 Beds</span>
                                </div>
                                <div class=\"bg-green-50 p-4 rounded-lg text-center\">
                                    <i class=\"fas fa-bath text-green-600 mb-2 text-2xl\"></i>
                                    <span class=\"block\">2 Baths</span>
                                </div>
                                <div class=\"bg-purple-50 p-4 rounded-lg text-center\">
                                    <i class=\"fas fa-ruler-combined text-purple-600 mb-2 text-2xl\"></i>
                                    <span class=\"block\">1,200 sqft</span>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Form -->
                        <div>
                            <h3 class=\"text-xl font-semibold mb-6\">Booking Information</h3>
                            <form id=\"booking-form\">
                                <div class=\"mb-4\">
                                    <label class=\"block mb-2\">Check-in Date</label>
                                    <input type=\"date\" id=\"check-in-date\" 
                                           class=\"w-full border rounded-lg px-4 py-2\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label class=\"block mb-2\">Check-out Date</label>
                                    <input type=\"date\" id=\"check-out-date\" 
                                           class=\"w-full border rounded-lg px-4 py-2\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label class=\"block mb-2\">Number of Guests</label>
                                    <select id=\"guests\" 
                                            class=\"w-full border rounded-lg px-4 py-2\" required>
                                        <option value=\"1\">1 Guest</option>
                                        <option value=\"2\" selected>2 Guests</option>
                                        <option value=\"3\">3 Guests</option>
                                        <option value=\"4\">4 Guests</option>
                                        <option value=\"5\">5+ Guests</option>
                                    </select>
                                </div>
                                <div class=\"mb-6\">
                                    <label class=\"block mb-2\">Special Requests</label>
                                    <textarea 
                                        class=\"w-full border rounded-lg px-4 py-2\"
                                        rows=\"4\"
                                        placeholder=\"Any special requirements or notes\"
                                    ></textarea>
                                </div>
                                
                                <div class=\"flex justify-end\">
                                    <button type=\"button\" onclick=\"nextStep()\" 
                                            class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                                        Continue to Guest Information
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Guest Information -->
            <div id=\"step-2\" class=\"step-container\">
                <div class=\"bg-white rounded-xl shadow-lg p-8\">
                    <h2 class=\"text-2xl font-bold mb-6\">Guest Information</h2>
                    
                    <form id=\"guest-form\">
                        <div class=\"grid md:grid-cols-2 gap-6\">
                            <div>
                                <label class=\"block mb-2\">First Name</label>
                                <input type=\"text\" id=\"first-name\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter first name\" required>
                            </div>
                            <div>
                                <label class=\"block mb-2\">Last Name</label>
                                <input type=\"text\" id=\"last-name\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter last name\" required>
                            </div>
                            <div>
                                <label class=\"block mb-2\">Email Address</label>
                                <input type=\"email\" id=\"email\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter email\" required>
                            </div>
                            <div>
                                <label class=\"block mb-2\">Phone Number</label>
                                <input type=\"tel\" id=\"phone\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter phone number\" required>
                            </div>
                        </div>

                        <div class=\"mt-6 flex justify-between\">
                            <button type=\"button\" onclick=\"prevStep()\" 
                                    class=\"border text-gray-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition\">
                                Previous
                            </button>
                            <button type=\"button\" onclick=\"nextStep()\" 
                                    class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                                Continue to Payment
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Step 3: Payment -->
            <div id=\"step-3\" class=\"step-container\">
                <div class=\"bg-white rounded-xl shadow-lg p-8\">
                    <h2 class=\"text-2xl font-bold mb-6\">Payment Details</h2>
                    
                    <div class=\"grid md:grid-cols-2 gap-8\">
                        <!-- Price Summary -->
                        <div>
                            <h3 class=\"text-xl font-semibold mb-4\">Booking Summary</h3>
                            <div class=\"bg-gray-50 p-6 rounded-lg\">
                                <div class=\"flex justify-between mb-2\">
                                    <span>Nightly Rate</span>
                                    <span>\$129 x 3 nights</span>
                                </div>
                                <div class=\"flex justify-between mb-2\">
                                    <span>Cleaning Fee</span>
                                    <span>\$50</span>
                                </div>
                                <div class=\"flex justify-between mb-2\">
                                    <span>Service Fee</span>
                                    <span>\$45</span>
                                </div>
                                <hr class=\"my-4 border-gray-200\">
                                <div class=\"flex justify-between font-bold text-xl\">
                                    <span>Total</span>
                                    <span>\$482</span>
                                </div>
                            </div>
                        </div>

                        <!-- Stripe Payment Form -->
                        <div>
                            <h3 class=\"text-xl font-semibold mb-4\">Payment Method</h3>
                            <div class=\"mb-4\">
                                <div id=\"card-element\" class=\"border rounded-lg p-3\">
                                    <!-- Stripe Elements Placeholder -->
                                </div>
                                <div id=\"card-errors\" role=\"alert\" class=\"text-red-500 mt-2\"></div>
                            </div>
                            
                            <div class=\"flex items-center mb-4\">
                                <input type=\"checkbox\" id=\"terms\" class=\"mr-2\" required>
                                <label for=\"terms\" class=\"text-sm text-gray-600\">
                                    I agree to the terms and conditions
                                </label>
                            </div>

                            <div class=\"flex justify-between\">
                                <button type=\"button\" onclick=\"prevStep()\" 
                                        class=\"border text-gray-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition\">
                                    Previous
                                </button>
                                <button id=\"submit-payment\" 
                                        class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                                    Pay Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Confirmation -->
            <div id=\"step-4\" class=\"step-container\">
                <div class=\"bg-white rounded-xl shadow-lg p-12 text-center\">
                    <i class=\"fas fa-check-circle text-6xl text-green-500 mb-6\"></i>
                    <h2 class=\"text-3xl font-bold mb-4\">Booking Confirmed!</h2>
                    <p class=\"text-gray-600 mb-6\">
                        Your reservation is complete. A confirmation email has been sent to your email address.
                    </p>
                    
                    <div class=\"bg-blue-50 p-6 rounded-lg mb-6\">
                        <h3 class=\"font-semibold mb-4\">Booking Details</h3>
                        <div id=\"confirmation-details\" class=\"text-left space-y-2\">
                            <p><strong>Property:</strong> Modern Downtown Apartment</p>
                            <p><strong>Location:</strong> San Francisco, California</p>
                            <p id=\"confirm-dates\"></p>
                            <p id=\"confirm-guests\"></p>
                            <p><strong>Confirmation Number:</strong> #<span id=\"confirm-number\"></span></p>
                        </div>
                    </div>

                    <div class=\"flex justify-center space-x-4\">
                        <a href=\"#\" class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                            View Booking
                        </a>
                        <a href=\"#\" class=\"border text-gray-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition\">
                            Return to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Step Management
        let currentStep = 1;
        const totalSteps = 4;

        function updateStepIndicators() {
            // Reset all indicators
            document.querySelectorAll('.step-indicator').forEach(indicator => {
                const circle = indicator.querySelector('.step-circle');
                circle.classList.remove('bg-blue-600', 'text-white');
                circle.classList.add('bg-gray-300', 'text-gray-600');
            });

            // Update current and previous steps
            for (let i = 1; i <= currentStep; i++) {
                const indicator = document.querySelector(`.step-indicator[data-step=\"\${i}\"]`);
                const circle = indicator.querySelector('.step-circle');
                circle.classList.remove('bg-gray-300', 'text-gray-600');
                circle.classList.add('bg-blue-600', 'text-white');
            }
        }

<script>
    // Continued from previous script...
    function hideAllSteps() {
        document.querySelectorAll('.step-container').forEach(step => {
            step.classList.remove('active');
        });
    }

    function nextStep() {
        // Validate current step before proceeding
        let isValid = true;
        
        switch(currentStep) {
            case 1:
                // Validate booking details
                const checkIn = document.getElementById('check-in-date');
                const checkOut = document.getElementById('check-out-date');
                if (!checkIn.value || !checkOut.value) {
                    alert('Please select check-in and check-out dates');
                    isValid = false;
                }
                break;
            
            case 2:
                // Validate guest information
                const firstName = document.getElementById('first-name');
                const lastName = document.getElementById('last-name');
                const email = document.getElementById('email');
                const phone = document.getElementById('phone');
                
                if (!firstName.value || !lastName.value || !email.value || !phone.value) {
                    alert('Please fill in all guest information fields');
                    isValid = false;
                }
                break;
            
            case 3:
                // Validate payment (will be handled by Stripe)
                const termsCheckbox = document.getElementById('terms');
                if (!termsCheckbox.checked) {
                    alert('Please agree to the terms and conditions');
                    isValid = false;
                }
                break;
        }

        if (isValid) {
            // Hide current step
            hideAllSteps();
            
            // Increment step
            currentStep = Math.min(currentStep + 1, totalSteps);
            
            // Show next step
            document.getElementById(`step-\${currentStep}`).classList.add('active');
            
            // Update step indicators
            updateStepIndicators();

            // Special handling for final step
            if (currentStep === 4) {
                // Generate confirmation details
                document.getElementById('confirm-dates').innerHTML = 
                    `<strong>Dates:</strong> \${document.getElementById('check-in-date').value} to \${document.getElementById('check-out-date').value}`;
                
                document.getElementById('confirm-guests').innerHTML = 
                    `<strong>Guests:</strong> \${document.getElementById('guests').value}`;
                
                document.getElementById('confirm-number').textContent = 
                    Math.floor(Math.random() * 1000000);
            }
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            // Hide current step
            hideAllSteps();
            
            // Decrement step
            currentStep--;
            
            // Show previous step
            document.getElementById(`step-\${currentStep}`).classList.add('active');
            
            // Update step indicators
            updateStepIndicators();
        }
    }

    // Stripe Payment Integration
    document.addEventListener('DOMContentLoaded', () => {
        // This is a placeholder - you would replace with your actual Stripe publishable key
        const stripe = Stripe('pk_test_your_publishable_key');
        const elements = stripe.elements();

        // Create an instance of the card Element
        const cardElement = elements.create('card', {
            style: {
                base: {
                    fontSize: '16px',
                    color: '#32325d',
                    fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                }
            }
        });

        // Mount the card Element into the DOM
        cardElement.mount('#card-element');

        // Handle real-time validation errors from the card Element
        cardElement.addEventListener('change', function(event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission
        const submitButton = document.getElementById('submit-payment');
        submitButton.addEventListener('click', async (event) => {
            event.preventDefault();

            // Disable the submit button to prevent multiple submissions
            submitButton.disabled = true;

            // Here you would typically send the card details to your server
            // The server would create a PaymentIntent and return a client secret
            // For this example, we'll just simulate a successful payment
            try {
                // In a real implementation, you'd call your backend to create a PaymentIntent
                // const {clientSecret} = await response.json();
                
                // Simulate payment processing
                setTimeout(() => {
                    // Move to confirmation step
                    nextStep();
                }, 2000);

                // In a real Stripe implementation, you'd use:
                // const result = await stripe.confirmCardPayment(clientSecret, {
                //     payment_method: {
                //         card: cardElement,
                //         billing_details: {
                //             name: `\${firstName.value} \${lastName.value}`
                //         }
                //     }
                // });
            } catch (error) {
                // Show error to your customer
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
                submitButton.disabled = false;
            }
        });
    });
</script>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/booking.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Book Modern Downtown Apartment - Real Homes</title>
    <link href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
    <script src=\"https://js.stripe.com/v3/\"></script>
</head>
<body class=\"bg-gray-50\">
    <!-- Navigation -->
    <nav class=\"bg-white shadow-md\">
        <div class=\"container mx-auto px-6 py-4 flex justify-between items-center\">
            <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" 
                 alt=\"Real Homes Logo\" class=\"h-10\">
            <div class=\"flex items-center space-x-6\">
                <a href=\"#\" class=\"text-gray-600 hover:text-blue-600 transition\">Help</a>
                <a href=\"#\" class=\"text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-full transition\">Contact Support</a>
            </div>
        </div>
    </nav>

    <!-- Booking Container -->
    <div class=\"container mx-auto px-6 py-12\">
        <!-- Step Indicators -->
        <ul class=\"flex justify-between items-center mb-12\">
            <li class=\"step-indicator text-center flex-1 active\" data-step=\"1\">
                <div class=\"step-circle bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">1</div>
                <span class=\"text-sm\">Property Details</span>
            </li>
            <li class=\"step-indicator text-center flex-1\" data-step=\"2\">
                <div class=\"step-circle bg-gray-300 text-gray-600 rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">2</div>
                <span class=\"text-sm\">Guest Information</span>
            </li>
            <li class=\"step-indicator text-center flex-1\" data-step=\"3\">
                <div class=\"step-circle bg-gray-300 text-gray-600 rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">3</div>
                <span class=\"text-sm\">Payment</span>
            </li>
            <li class=\"step-indicator text-center flex-1\" data-step=\"4\">
                <div class=\"step-circle bg-gray-300 text-gray-600 rounded-full w-10 h-10 flex items-center justify-center mx-auto mb-2\">4</div>
                <span class=\"text-sm\">Confirmation</span>
            </li>
        </ul>

        <!-- Booking Steps Container -->
        <div class=\"booking-steps\">
            <!-- Step 1: Property Details -->
            <div id=\"step-1\" class=\"step-container active\">
                <div class=\"bg-white rounded-xl shadow-lg p-8\">
                    <h2 class=\"text-2xl font-bold mb-6\">Property Details</h2>
                    
                    <div class=\"grid md:grid-cols-2 gap-8\">
                        <!-- Property Image and Details -->
                        <div>
                            <img src=\"https://images.unsplash.com/photo-1512917774080-9991f1c4c750\" 
                                 class=\"w-full h-96 object-cover rounded-lg mb-6\">
                            <h3 class=\"text-xl font-semibold\">Modern Downtown Apartment</h3>
                            <p class=\"text-gray-600 mb-4\">San Francisco, California</p>
                            
                            <div class=\"grid grid-cols-3 gap-4 mb-6\">
                                <div class=\"bg-blue-50 p-4 rounded-lg text-center\">
                                    <i class=\"fas fa-bed text-blue-600 mb-2 text-2xl\"></i>
                                    <span class=\"block\">3 Beds</span>
                                </div>
                                <div class=\"bg-green-50 p-4 rounded-lg text-center\">
                                    <i class=\"fas fa-bath text-green-600 mb-2 text-2xl\"></i>
                                    <span class=\"block\">2 Baths</span>
                                </div>
                                <div class=\"bg-purple-50 p-4 rounded-lg text-center\">
                                    <i class=\"fas fa-ruler-combined text-purple-600 mb-2 text-2xl\"></i>
                                    <span class=\"block\">1,200 sqft</span>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Form -->
                        <div>
                            <h3 class=\"text-xl font-semibold mb-6\">Booking Information</h3>
                            <form id=\"booking-form\">
                                <div class=\"mb-4\">
                                    <label class=\"block mb-2\">Check-in Date</label>
                                    <input type=\"date\" id=\"check-in-date\" 
                                           class=\"w-full border rounded-lg px-4 py-2\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label class=\"block mb-2\">Check-out Date</label>
                                    <input type=\"date\" id=\"check-out-date\" 
                                           class=\"w-full border rounded-lg px-4 py-2\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label class=\"block mb-2\">Number of Guests</label>
                                    <select id=\"guests\" 
                                            class=\"w-full border rounded-lg px-4 py-2\" required>
                                        <option value=\"1\">1 Guest</option>
                                        <option value=\"2\" selected>2 Guests</option>
                                        <option value=\"3\">3 Guests</option>
                                        <option value=\"4\">4 Guests</option>
                                        <option value=\"5\">5+ Guests</option>
                                    </select>
                                </div>
                                <div class=\"mb-6\">
                                    <label class=\"block mb-2\">Special Requests</label>
                                    <textarea 
                                        class=\"w-full border rounded-lg px-4 py-2\"
                                        rows=\"4\"
                                        placeholder=\"Any special requirements or notes\"
                                    ></textarea>
                                </div>
                                
                                <div class=\"flex justify-end\">
                                    <button type=\"button\" onclick=\"nextStep()\" 
                                            class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                                        Continue to Guest Information
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Guest Information -->
            <div id=\"step-2\" class=\"step-container\">
                <div class=\"bg-white rounded-xl shadow-lg p-8\">
                    <h2 class=\"text-2xl font-bold mb-6\">Guest Information</h2>
                    
                    <form id=\"guest-form\">
                        <div class=\"grid md:grid-cols-2 gap-6\">
                            <div>
                                <label class=\"block mb-2\">First Name</label>
                                <input type=\"text\" id=\"first-name\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter first name\" required>
                            </div>
                            <div>
                                <label class=\"block mb-2\">Last Name</label>
                                <input type=\"text\" id=\"last-name\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter last name\" required>
                            </div>
                            <div>
                                <label class=\"block mb-2\">Email Address</label>
                                <input type=\"email\" id=\"email\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter email\" required>
                            </div>
                            <div>
                                <label class=\"block mb-2\">Phone Number</label>
                                <input type=\"tel\" id=\"phone\" 
                                       class=\"w-full border rounded-lg px-4 py-2\" 
                                       placeholder=\"Enter phone number\" required>
                            </div>
                        </div>

                        <div class=\"mt-6 flex justify-between\">
                            <button type=\"button\" onclick=\"prevStep()\" 
                                    class=\"border text-gray-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition\">
                                Previous
                            </button>
                            <button type=\"button\" onclick=\"nextStep()\" 
                                    class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                                Continue to Payment
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Step 3: Payment -->
            <div id=\"step-3\" class=\"step-container\">
                <div class=\"bg-white rounded-xl shadow-lg p-8\">
                    <h2 class=\"text-2xl font-bold mb-6\">Payment Details</h2>
                    
                    <div class=\"grid md:grid-cols-2 gap-8\">
                        <!-- Price Summary -->
                        <div>
                            <h3 class=\"text-xl font-semibold mb-4\">Booking Summary</h3>
                            <div class=\"bg-gray-50 p-6 rounded-lg\">
                                <div class=\"flex justify-between mb-2\">
                                    <span>Nightly Rate</span>
                                    <span>\$129 x 3 nights</span>
                                </div>
                                <div class=\"flex justify-between mb-2\">
                                    <span>Cleaning Fee</span>
                                    <span>\$50</span>
                                </div>
                                <div class=\"flex justify-between mb-2\">
                                    <span>Service Fee</span>
                                    <span>\$45</span>
                                </div>
                                <hr class=\"my-4 border-gray-200\">
                                <div class=\"flex justify-between font-bold text-xl\">
                                    <span>Total</span>
                                    <span>\$482</span>
                                </div>
                            </div>
                        </div>

                        <!-- Stripe Payment Form -->
                        <div>
                            <h3 class=\"text-xl font-semibold mb-4\">Payment Method</h3>
                            <div class=\"mb-4\">
                                <div id=\"card-element\" class=\"border rounded-lg p-3\">
                                    <!-- Stripe Elements Placeholder -->
                                </div>
                                <div id=\"card-errors\" role=\"alert\" class=\"text-red-500 mt-2\"></div>
                            </div>
                            
                            <div class=\"flex items-center mb-4\">
                                <input type=\"checkbox\" id=\"terms\" class=\"mr-2\" required>
                                <label for=\"terms\" class=\"text-sm text-gray-600\">
                                    I agree to the terms and conditions
                                </label>
                            </div>

                            <div class=\"flex justify-between\">
                                <button type=\"button\" onclick=\"prevStep()\" 
                                        class=\"border text-gray-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition\">
                                    Previous
                                </button>
                                <button id=\"submit-payment\" 
                                        class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                                    Pay Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Confirmation -->
            <div id=\"step-4\" class=\"step-container\">
                <div class=\"bg-white rounded-xl shadow-lg p-12 text-center\">
                    <i class=\"fas fa-check-circle text-6xl text-green-500 mb-6\"></i>
                    <h2 class=\"text-3xl font-bold mb-4\">Booking Confirmed!</h2>
                    <p class=\"text-gray-600 mb-6\">
                        Your reservation is complete. A confirmation email has been sent to your email address.
                    </p>
                    
                    <div class=\"bg-blue-50 p-6 rounded-lg mb-6\">
                        <h3 class=\"font-semibold mb-4\">Booking Details</h3>
                        <div id=\"confirmation-details\" class=\"text-left space-y-2\">
                            <p><strong>Property:</strong> Modern Downtown Apartment</p>
                            <p><strong>Location:</strong> San Francisco, California</p>
                            <p id=\"confirm-dates\"></p>
                            <p id=\"confirm-guests\"></p>
                            <p><strong>Confirmation Number:</strong> #<span id=\"confirm-number\"></span></p>
                        </div>
                    </div>

                    <div class=\"flex justify-center space-x-4\">
                        <a href=\"#\" class=\"bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition\">
                            View Booking
                        </a>
                        <a href=\"#\" class=\"border text-gray-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition\">
                            Return to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Step Management
        let currentStep = 1;
        const totalSteps = 4;

        function updateStepIndicators() {
            // Reset all indicators
            document.querySelectorAll('.step-indicator').forEach(indicator => {
                const circle = indicator.querySelector('.step-circle');
                circle.classList.remove('bg-blue-600', 'text-white');
                circle.classList.add('bg-gray-300', 'text-gray-600');
            });

            // Update current and previous steps
            for (let i = 1; i <= currentStep; i++) {
                const indicator = document.querySelector(`.step-indicator[data-step=\"\${i}\"]`);
                const circle = indicator.querySelector('.step-circle');
                circle.classList.remove('bg-gray-300', 'text-gray-600');
                circle.classList.add('bg-blue-600', 'text-white');
            }
        }

<script>
    // Continued from previous script...
    function hideAllSteps() {
        document.querySelectorAll('.step-container').forEach(step => {
            step.classList.remove('active');
        });
    }

    function nextStep() {
        // Validate current step before proceeding
        let isValid = true;
        
        switch(currentStep) {
            case 1:
                // Validate booking details
                const checkIn = document.getElementById('check-in-date');
                const checkOut = document.getElementById('check-out-date');
                if (!checkIn.value || !checkOut.value) {
                    alert('Please select check-in and check-out dates');
                    isValid = false;
                }
                break;
            
            case 2:
                // Validate guest information
                const firstName = document.getElementById('first-name');
                const lastName = document.getElementById('last-name');
                const email = document.getElementById('email');
                const phone = document.getElementById('phone');
                
                if (!firstName.value || !lastName.value || !email.value || !phone.value) {
                    alert('Please fill in all guest information fields');
                    isValid = false;
                }
                break;
            
            case 3:
                // Validate payment (will be handled by Stripe)
                const termsCheckbox = document.getElementById('terms');
                if (!termsCheckbox.checked) {
                    alert('Please agree to the terms and conditions');
                    isValid = false;
                }
                break;
        }

        if (isValid) {
            // Hide current step
            hideAllSteps();
            
            // Increment step
            currentStep = Math.min(currentStep + 1, totalSteps);
            
            // Show next step
            document.getElementById(`step-\${currentStep}`).classList.add('active');
            
            // Update step indicators
            updateStepIndicators();

            // Special handling for final step
            if (currentStep === 4) {
                // Generate confirmation details
                document.getElementById('confirm-dates').innerHTML = 
                    `<strong>Dates:</strong> \${document.getElementById('check-in-date').value} to \${document.getElementById('check-out-date').value}`;
                
                document.getElementById('confirm-guests').innerHTML = 
                    `<strong>Guests:</strong> \${document.getElementById('guests').value}`;
                
                document.getElementById('confirm-number').textContent = 
                    Math.floor(Math.random() * 1000000);
            }
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            // Hide current step
            hideAllSteps();
            
            // Decrement step
            currentStep--;
            
            // Show previous step
            document.getElementById(`step-\${currentStep}`).classList.add('active');
            
            // Update step indicators
            updateStepIndicators();
        }
    }

    // Stripe Payment Integration
    document.addEventListener('DOMContentLoaded', () => {
        // This is a placeholder - you would replace with your actual Stripe publishable key
        const stripe = Stripe('pk_test_your_publishable_key');
        const elements = stripe.elements();

        // Create an instance of the card Element
        const cardElement = elements.create('card', {
            style: {
                base: {
                    fontSize: '16px',
                    color: '#32325d',
                    fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                }
            }
        });

        // Mount the card Element into the DOM
        cardElement.mount('#card-element');

        // Handle real-time validation errors from the card Element
        cardElement.addEventListener('change', function(event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission
        const submitButton = document.getElementById('submit-payment');
        submitButton.addEventListener('click', async (event) => {
            event.preventDefault();

            // Disable the submit button to prevent multiple submissions
            submitButton.disabled = true;

            // Here you would typically send the card details to your server
            // The server would create a PaymentIntent and return a client secret
            // For this example, we'll just simulate a successful payment
            try {
                // In a real implementation, you'd call your backend to create a PaymentIntent
                // const {clientSecret} = await response.json();
                
                // Simulate payment processing
                setTimeout(() => {
                    // Move to confirmation step
                    nextStep();
                }, 2000);

                // In a real Stripe implementation, you'd use:
                // const result = await stripe.confirmCardPayment(clientSecret, {
                //     payment_method: {
                //         card: cardElement,
                //         billing_details: {
                //             name: `\${firstName.value} \${lastName.value}`
                //         }
                //     }
                // });
            } catch (error) {
                // Show error to your customer
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
                submitButton.disabled = false;
            }
        });
    });
</script>
</body>
</html>", "front/booking.twig", "/var/www/html/app/View/front/booking.twig");
    }
}
