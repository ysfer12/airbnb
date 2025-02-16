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
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
        yield "</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
</head>
<body class=\"bg-gray-100\">
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <!-- Property Details Section -->
        <div class=\"property-info bg-white p-6 rounded-lg shadow-md\">
            <img src=\"";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "image_url", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "image_url", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "image_url", [], "any", false, false, false, 16), "html", null, true)) : ("https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/khach-s-n-tinh-nhan-venice-1-hotel-FL2cq-GgnWQ-unsplash.jpg"));
        yield "\"
                 alt=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
                 class=\"w-full h-64 object-cover rounded-lg mb-4\">

            <h2 class=\"text-2xl font-bold text-blue-600 mb-2\">€";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "price_per_night", [], "any", false, false, false, 20), 2), "html", null, true);
        yield " per night</h2>
            <p class=\"text-gray-700 mb-4\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>

            <div class=\"grid grid-cols-3 gap-4 mb-4 text-center\">
                <div class=\"bg-gray-50 p-3 rounded-md\">
                    <i class=\"fas fa-bed text-blue-500 mb-2 block\"></i>
                    <span class=\"font-medium\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "bedrooms", [], "any", false, false, false, 26), "html", null, true);
        yield " Bedrooms</span>
                </div>
                <div class=\"bg-gray-50 p-3 rounded-md\">
                    <i class=\"fas fa-bath text-blue-500 mb-2 block\"></i>
                    <span class=\"font-medium\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "bathrooms", [], "any", false, false, false, 30), "html", null, true);
        yield " Bathrooms</span>
                </div>
                <div class=\"bg-gray-50 p-3 rounded-md\">
                    <i class=\"fas fa-users text-blue-500 mb-2 block\"></i>
                    <span class=\"font-medium\">Max ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "max_guests", [], "any", false, false, false, 34), "html", null, true);
        yield " Guests</span>
                </div>
            </div>
        </div>

        <!-- Booking Form Section -->
        <div class=\"booking-form bg-white p-6 rounded-lg shadow-md\">
            <h2 class=\"text-2xl font-semibold mb-6 text-center text-gray-800\">Book Your Stay</h2>

            <form id=\"bookingForm\" class=\"space-y-4\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                    <div class=\"form-group\">
                        <label for=\"startDate\" class=\"block text-sm font-medium text-gray-700 mb-1\">Check-in Date</label>
                        <input type=\"date\" id=\"startDate\"
                               class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                               required>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"endDate\" class=\"block text-sm font-medium text-gray-700 mb-1\">Check-out Date</label>
                        <input type=\"date\" id=\"endDate\"
                               class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                               required>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"guestCount\" class=\"block text-sm font-medium text-gray-700 mb-1\">Number of Guests</label>
                    <select id=\"guestCount\"
                            class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                            required>
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "max_guests", [], "any", false, false, false, 65)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 66
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            yield ((($context["i"] == 1)) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " Guest";
            yield ((($context["i"] > 1)) ? ("s") : (""));
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"specialRequests\" class=\"block text-sm font-medium text-gray-700 mb-1\">Special Requests (Optional)</label>
                    <textarea id=\"specialRequests\" rows=\"3\"
                              class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                              placeholder=\"Any special requirements or notes\"></textarea>
                </div>

                <!-- Price Summary -->
                <div class=\"price-summary bg-gray-50 p-4 rounded-md\">
                    <h3 class=\"font-semibold mb-3 text-gray-800\">Price Breakdown</h3>
                    <div class=\"space-y-2\">
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Nightly Rate:</span>
                            <span>€";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "price_per_night", [], "any", false, false, false, 84), 2), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Total Nights:</span>
                            <span id=\"totalNights\">-</span>
                        </div>
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Subtotal:</span>
                            <span id=\"subtotalPrice\">-</span>
                        </div>
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Taxes & Fees (10%):</span>
                            <span id=\"taxesAndFees\">-</span>
                        </div>
                        <div class=\"flex justify-between font-bold text-xl text-blue-600\">
                            <span>Total:</span>
                            <span id=\"totalPrice\">-</span>
                        </div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class=\"payment-method space-y-3\">
                    <h3 class=\"font-semibold text-gray-800\">Select Payment Method</h3>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"flex items-center bg-gray-50 p-3 rounded-md cursor-pointer hover:bg-blue-50
                                     ";
        // line 110
        yield ((($context["stripe_public_key"] ?? null)) ? ("") : ("opacity-50 cursor-not-allowed"));
        yield "\">
                            <input type=\"radio\" name=\"paymentMethod\" value=\"stripe\"
                                    ";
        // line 112
        yield ((($context["stripe_public_key"] ?? null)) ? ("checked") : ("disabled"));
        yield "
                                   class=\"mr-2\">
                            <span class=\"flex-grow\">Credit Card</span>
                            <i class=\"fas fa-credit-card text-blue-500\"></i>
                        </label>
                        <label class=\"flex items-center bg-gray-50 p-3 rounded-md cursor-pointer hover:bg-blue-50
                                     ";
        // line 118
        yield ((($context["paypal_client_id"] ?? null)) ? ("") : ("opacity-50 cursor-not-allowed"));
        yield "\">
                            <input type=\"radio\" name=\"paymentMethod\" value=\"paypal\"
                                    ";
        // line 120
        yield ((($context["paypal_client_id"] ?? null)) ? ("") : ("disabled"));
        yield "
                                   class=\"mr-2\">
                            <span class=\"flex-grow\">PayPal</span>
                            <i class=\"fab fa-paypal text-blue-500\"></i>
                        </label>
                    </div>
                </div>

                <!-- Stripe Card Element (Initially Hidden) -->
                <div id=\"card-element\" class=\"mt-4 hidden\">
                    <!-- A Stripe Element will be inserted here -->
                </div>

                <!-- Error Message Display -->
                <div id=\"card-errors\" role=\"alert\" class=\"text-red-600 mt-2 hidden\"></div>

                <div class=\"error-message hidden text-red-600 bg-red-100 border border-red-400 p-3 rounded mt-4\"></div>

                <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-3 px-4 rounded-md
                                             hover:bg-blue-700 transition-colors font-semibold\">
                    Complete Booking
                </button>
            </form>
        </div>
    </div>
</div>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookingForm = document.getElementById('bookingForm');
        const startDateInput = document.getElementById('startDate');
        const endDateInput = document.getElementById('endDate');
        const guestCountInput = document.getElementById('guestCount');
        const errorMessageDiv = document.querySelector('.error-message');
        const pricePerNight = ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "price_per_night", [], "any", false, false, false, 156), "html", null, true);
        yield ";

        // Stripe setup if available
        let stripe, elements, cardElement;
        ";
        // line 160
        if (($context["stripe_public_key"] ?? null)) {
            // line 161
            yield "        stripe = Stripe('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["stripe_public_key"] ?? null), "html", null, true);
            yield "');
        elements = stripe.elements();
        cardElement = elements.create('card');
        cardElement.mount('#card-element');
        ";
        }
        // line 166
        yield "
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        startDateInput.min = today;
        endDateInput.min = today;

        function showError(message) {
            errorMessageDiv.textContent = message;
            errorMessageDiv.classList.remove('hidden');
            setTimeout(() => {
                errorMessageDiv.classList.add('hidden');
            }, 5000);
        }

        function calculatePrice() {
            if (!startDateInput.value || !endDateInput.value) return null;

            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);
            const nights = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));

            if (nights < 1) return null;

            const guestCount = parseInt(guestCountInput.value);
            const basePrice = pricePerNight * nights;
            const subtotal = basePrice + (guestCount > 2 ? (guestCount - 2) * 10 * nights : 0);
            const taxesAndFees = subtotal * 0.1;
            const totalPrice = subtotal + taxesAndFees;

            document.getElementById('totalNights').textContent = nights;
            document.getElementById('subtotalPrice').textContent = `€\${basePrice.toFixed(2)}`;
            document.getElementById('taxesAndFees').textContent = `€\${taxesAndFees.toFixed(2)}`;
            document.getElementById('totalPrice').textContent = `€\${totalPrice.toFixed(2)}`;

            return {
                nights,
                totalPrice,
                guestCount
            };
        }

        // Update price when inputs change
        [startDateInput, endDateInput, guestCountInput].forEach(input => {
            input.addEventListener('change', calculatePrice);
        });

        // Payment method toggle
        const paymentMethodInputs = document.querySelectorAll('input[name=\"paymentMethod\"]');
        paymentMethodInputs.forEach(radio => {
            radio.addEventListener('change', function() {
                const cardElementContainer = document.getElementById('card-element');
                const cardErrorsContainer = document.getElementById('card-errors');

                if (this.value === 'stripe' && stripe) {
                    cardElementContainer.classList.remove('hidden');
                } else {
                    cardElementContainer.classList.add('hidden');
                    cardErrorsContainer.classList.add('hidden');
                }
            });
        });

// ...existing code...

bookingForm.addEventListener('submit', async function(e) {
    e.preventDefault();

    // Validation
    if (!startDateInput.value || !endDateInput.value) {
        showError('Please select check-in and check-out dates');
        return;
    }

    const startDate = new Date(startDateInput.value);
    const endDate = new Date(endDateInput.value);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (startDate < today) {
        showError('Check-in date cannot be in the past');
        return;
    }

    if (endDate <= startDate) {
        showError('Check-out date must be after check-in date');
        return;
    }

    const priceDetails = calculatePrice();
    if (!priceDetails) {
        showError('Invalid dates');
        return;
    }

    try {
        // Prepare booking data
        const formData = {
            start_date: startDateInput.value,
            end_date: endDateInput.value,
            guest_count: priceDetails.guestCount,
            special_requests: document.getElementById('specialRequests').value || '',
            total_price: priceDetails.totalPrice
        };

        // Create booking
        const bookingResponse = await fetch('/booking/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(formData)
        });

        const bookingResult = await bookingResponse.text();

        let bookingData;
        try {
            bookingData = JSON.parse(bookingResult);
        } catch (error) {
            throw new Error('Invalid server response');
        }

        if (!bookingData.success) {
            throw new Error(bookingData.error || 'Booking failed');
        }

        // Get selected payment method
        const paymentMethod = document.querySelector('input[name=\"paymentMethod\"]:checked').value;

        // Process payment based on method
        if (paymentMethod === 'stripe' && stripe) {
            // Stripe payment processing
            const { error, paymentIntent } = await stripe.confirmCardPayment(
                bookingData.client_secret,
                {
                    payment_method: {
                        card: cardElement
                    }
                }
            );

            if (error) {
                const cardErrorsContainer = document.getElementById('card-errors');
                cardErrorsContainer.textContent = error.message;
                cardErrorsContainer.classList.remove('hidden');
                return;
            }
        } else {
            // PayPal or other payment method
            const paymentResponse = await fetch('/booking/process-payment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    booking_id: bookingData.booking_id,
                    payment_method: paymentMethod
                })
            });
            const paymentResult = await paymentResponse.json();

            if (!paymentResult.success) {
                throw new Error(paymentResult.error || 'Payment failed');
            }
        }

        // Redirect to success page
        window.location.href = `/booking/success/\${bookingData.booking_id}`;

    } catch (error) {
        console.error('Booking Error:', error);
        showError('An unexpected error occurred during booking');
    }
});

// ...existing code...
        // Initial price calculation on page load
        calculatePrice();
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  273 => 166,  264 => 161,  262 => 160,  255 => 156,  216 => 120,  211 => 118,  202 => 112,  197 => 110,  168 => 84,  150 => 68,  135 => 66,  131 => 65,  97 => 34,  90 => 30,  83 => 26,  75 => 21,  71 => 20,  65 => 17,  61 => 16,  49 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# App/View/front/booking.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ page_title }}</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
</head>
<body class=\"bg-gray-100\">
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <!-- Property Details Section -->
        <div class=\"property-info bg-white p-6 rounded-lg shadow-md\">
            <img src=\"{{ property.image_url ?? 'https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/khach-s-n-tinh-nhan-venice-1-hotel-FL2cq-GgnWQ-unsplash.jpg' }}\"
                 alt=\"{{ property.title }}\"
                 class=\"w-full h-64 object-cover rounded-lg mb-4\">

            <h2 class=\"text-2xl font-bold text-blue-600 mb-2\">€{{ property.price_per_night|number_format(2) }} per night</h2>
            <p class=\"text-gray-700 mb-4\">{{ property.description }}</p>

            <div class=\"grid grid-cols-3 gap-4 mb-4 text-center\">
                <div class=\"bg-gray-50 p-3 rounded-md\">
                    <i class=\"fas fa-bed text-blue-500 mb-2 block\"></i>
                    <span class=\"font-medium\">{{ property.bedrooms }} Bedrooms</span>
                </div>
                <div class=\"bg-gray-50 p-3 rounded-md\">
                    <i class=\"fas fa-bath text-blue-500 mb-2 block\"></i>
                    <span class=\"font-medium\">{{ property.bathrooms }} Bathrooms</span>
                </div>
                <div class=\"bg-gray-50 p-3 rounded-md\">
                    <i class=\"fas fa-users text-blue-500 mb-2 block\"></i>
                    <span class=\"font-medium\">Max {{ property.max_guests }} Guests</span>
                </div>
            </div>
        </div>

        <!-- Booking Form Section -->
        <div class=\"booking-form bg-white p-6 rounded-lg shadow-md\">
            <h2 class=\"text-2xl font-semibold mb-6 text-center text-gray-800\">Book Your Stay</h2>

            <form id=\"bookingForm\" class=\"space-y-4\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                    <div class=\"form-group\">
                        <label for=\"startDate\" class=\"block text-sm font-medium text-gray-700 mb-1\">Check-in Date</label>
                        <input type=\"date\" id=\"startDate\"
                               class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                               required>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"endDate\" class=\"block text-sm font-medium text-gray-700 mb-1\">Check-out Date</label>
                        <input type=\"date\" id=\"endDate\"
                               class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                               required>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"guestCount\" class=\"block text-sm font-medium text-gray-700 mb-1\">Number of Guests</label>
                    <select id=\"guestCount\"
                            class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                            required>
                        {% for i in 1..property.max_guests %}
                            <option value=\"{{ i }}\" {{ i == 1 ? 'selected' : '' }}>{{ i }} Guest{{ i > 1 ? 's' : '' }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"specialRequests\" class=\"block text-sm font-medium text-gray-700 mb-1\">Special Requests (Optional)</label>
                    <textarea id=\"specialRequests\" rows=\"3\"
                              class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                              placeholder=\"Any special requirements or notes\"></textarea>
                </div>

                <!-- Price Summary -->
                <div class=\"price-summary bg-gray-50 p-4 rounded-md\">
                    <h3 class=\"font-semibold mb-3 text-gray-800\">Price Breakdown</h3>
                    <div class=\"space-y-2\">
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Nightly Rate:</span>
                            <span>€{{ property.price_per_night|number_format(2) }}</span>
                        </div>
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Total Nights:</span>
                            <span id=\"totalNights\">-</span>
                        </div>
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Subtotal:</span>
                            <span id=\"subtotalPrice\">-</span>
                        </div>
                        <div class=\"flex justify-between text-gray-700\">
                            <span>Taxes & Fees (10%):</span>
                            <span id=\"taxesAndFees\">-</span>
                        </div>
                        <div class=\"flex justify-between font-bold text-xl text-blue-600\">
                            <span>Total:</span>
                            <span id=\"totalPrice\">-</span>
                        </div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class=\"payment-method space-y-3\">
                    <h3 class=\"font-semibold text-gray-800\">Select Payment Method</h3>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"flex items-center bg-gray-50 p-3 rounded-md cursor-pointer hover:bg-blue-50
                                     {{ stripe_public_key ? '' : 'opacity-50 cursor-not-allowed' }}\">
                            <input type=\"radio\" name=\"paymentMethod\" value=\"stripe\"
                                    {{ stripe_public_key ? 'checked' : 'disabled' }}
                                   class=\"mr-2\">
                            <span class=\"flex-grow\">Credit Card</span>
                            <i class=\"fas fa-credit-card text-blue-500\"></i>
                        </label>
                        <label class=\"flex items-center bg-gray-50 p-3 rounded-md cursor-pointer hover:bg-blue-50
                                     {{ paypal_client_id ? '' : 'opacity-50 cursor-not-allowed' }}\">
                            <input type=\"radio\" name=\"paymentMethod\" value=\"paypal\"
                                    {{ paypal_client_id ? '' : 'disabled' }}
                                   class=\"mr-2\">
                            <span class=\"flex-grow\">PayPal</span>
                            <i class=\"fab fa-paypal text-blue-500\"></i>
                        </label>
                    </div>
                </div>

                <!-- Stripe Card Element (Initially Hidden) -->
                <div id=\"card-element\" class=\"mt-4 hidden\">
                    <!-- A Stripe Element will be inserted here -->
                </div>

                <!-- Error Message Display -->
                <div id=\"card-errors\" role=\"alert\" class=\"text-red-600 mt-2 hidden\"></div>

                <div class=\"error-message hidden text-red-600 bg-red-100 border border-red-400 p-3 rounded mt-4\"></div>

                <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-3 px-4 rounded-md
                                             hover:bg-blue-700 transition-colors font-semibold\">
                    Complete Booking
                </button>
            </form>
        </div>
    </div>
</div>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookingForm = document.getElementById('bookingForm');
        const startDateInput = document.getElementById('startDate');
        const endDateInput = document.getElementById('endDate');
        const guestCountInput = document.getElementById('guestCount');
        const errorMessageDiv = document.querySelector('.error-message');
        const pricePerNight = {{ property.price_per_night }};

        // Stripe setup if available
        let stripe, elements, cardElement;
        {% if stripe_public_key %}
        stripe = Stripe('{{ stripe_public_key }}');
        elements = stripe.elements();
        cardElement = elements.create('card');
        cardElement.mount('#card-element');
        {% endif %}

        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        startDateInput.min = today;
        endDateInput.min = today;

        function showError(message) {
            errorMessageDiv.textContent = message;
            errorMessageDiv.classList.remove('hidden');
            setTimeout(() => {
                errorMessageDiv.classList.add('hidden');
            }, 5000);
        }

        function calculatePrice() {
            if (!startDateInput.value || !endDateInput.value) return null;

            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);
            const nights = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));

            if (nights < 1) return null;

            const guestCount = parseInt(guestCountInput.value);
            const basePrice = pricePerNight * nights;
            const subtotal = basePrice + (guestCount > 2 ? (guestCount - 2) * 10 * nights : 0);
            const taxesAndFees = subtotal * 0.1;
            const totalPrice = subtotal + taxesAndFees;

            document.getElementById('totalNights').textContent = nights;
            document.getElementById('subtotalPrice').textContent = `€\${basePrice.toFixed(2)}`;
            document.getElementById('taxesAndFees').textContent = `€\${taxesAndFees.toFixed(2)}`;
            document.getElementById('totalPrice').textContent = `€\${totalPrice.toFixed(2)}`;

            return {
                nights,
                totalPrice,
                guestCount
            };
        }

        // Update price when inputs change
        [startDateInput, endDateInput, guestCountInput].forEach(input => {
            input.addEventListener('change', calculatePrice);
        });

        // Payment method toggle
        const paymentMethodInputs = document.querySelectorAll('input[name=\"paymentMethod\"]');
        paymentMethodInputs.forEach(radio => {
            radio.addEventListener('change', function() {
                const cardElementContainer = document.getElementById('card-element');
                const cardErrorsContainer = document.getElementById('card-errors');

                if (this.value === 'stripe' && stripe) {
                    cardElementContainer.classList.remove('hidden');
                } else {
                    cardElementContainer.classList.add('hidden');
                    cardErrorsContainer.classList.add('hidden');
                }
            });
        });

// ...existing code...

bookingForm.addEventListener('submit', async function(e) {
    e.preventDefault();

    // Validation
    if (!startDateInput.value || !endDateInput.value) {
        showError('Please select check-in and check-out dates');
        return;
    }

    const startDate = new Date(startDateInput.value);
    const endDate = new Date(endDateInput.value);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (startDate < today) {
        showError('Check-in date cannot be in the past');
        return;
    }

    if (endDate <= startDate) {
        showError('Check-out date must be after check-in date');
        return;
    }

    const priceDetails = calculatePrice();
    if (!priceDetails) {
        showError('Invalid dates');
        return;
    }

    try {
        // Prepare booking data
        const formData = {
            start_date: startDateInput.value,
            end_date: endDateInput.value,
            guest_count: priceDetails.guestCount,
            special_requests: document.getElementById('specialRequests').value || '',
            total_price: priceDetails.totalPrice
        };

        // Create booking
        const bookingResponse = await fetch('/booking/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(formData)
        });

        const bookingResult = await bookingResponse.text();

        let bookingData;
        try {
            bookingData = JSON.parse(bookingResult);
        } catch (error) {
            throw new Error('Invalid server response');
        }

        if (!bookingData.success) {
            throw new Error(bookingData.error || 'Booking failed');
        }

        // Get selected payment method
        const paymentMethod = document.querySelector('input[name=\"paymentMethod\"]:checked').value;

        // Process payment based on method
        if (paymentMethod === 'stripe' && stripe) {
            // Stripe payment processing
            const { error, paymentIntent } = await stripe.confirmCardPayment(
                bookingData.client_secret,
                {
                    payment_method: {
                        card: cardElement
                    }
                }
            );

            if (error) {
                const cardErrorsContainer = document.getElementById('card-errors');
                cardErrorsContainer.textContent = error.message;
                cardErrorsContainer.classList.remove('hidden');
                return;
            }
        } else {
            // PayPal or other payment method
            const paymentResponse = await fetch('/booking/process-payment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    booking_id: bookingData.booking_id,
                    payment_method: paymentMethod
                })
            });
            const paymentResult = await paymentResponse.json();

            if (!paymentResult.success) {
                throw new Error(paymentResult.error || 'Payment failed');
            }
        }

        // Redirect to success page
        window.location.href = `/booking/success/\${bookingData.booking_id}`;

    } catch (error) {
        console.error('Booking Error:', error);
        showError('An unexpected error occurred during booking');
    }
});

// ...existing code...
        // Initial price calculation on page load
        calculatePrice();
    });
</script>
</body>
</html>", "front/booking.twig", "/var/www/html/app/View/front/booking.twig");
    }
}
