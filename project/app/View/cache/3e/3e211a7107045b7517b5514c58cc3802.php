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

/* front/property_details.twig */
class __TwigTemplate_ecd4117f83d246256a7eee21e8b7e90b extends Template
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
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        yield " | Details</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .glassmorphism {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
        .custom-shadow { box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body class=\"bg-gray-50\">
<!-- Navigation -->
<nav class=\"bg-white shadow-sm\">
    <div class=\"container mx-auto px-6\">
        <div class=\"flex items-center justify-between h-20\">
            <a href=\"/\" class=\"flex items-center\">
                <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" alt=\"Logo\" class=\"h-14\">
            </a>
        </div>
    </div>
</nav>

<!-- Property Details -->
<div class=\"container mx-auto px-4 py-8\">
    <!-- Property Title & Price -->
    <div class=\"flex justify-between items-start mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "title", [], "any", false, false, false, 36), "html", null, true);
        yield "</h1>
            <p class=\"text-gray-600 flex items-center\">
                <i class=\"fas fa-map-marker-alt text-blue-500 mr-2\"></i>
                ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "address", [], "any", false, false, false, 39), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"text-right\">
            <div class=\"text-3xl font-bold text-blue-600\">\$";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "price", [], "any", false, false, false, 43), "html", null, true);
        yield "<span class=\"text-lg text-gray-500\">/night</span></div>
            ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "rating", [], "any", false, false, false, 44)) {
            // line 45
            yield "                <div class=\"flex items-center justify-end mt-2\">
                    <i class=\"fas fa-star text-yellow-400 mr-1\"></i>
                    <span class=\"font-semibold\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "rating", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
                </div>
            ";
        }
        // line 50
        yield "        </div>
    </div>

    <!-- Image Gallery -->
    <div class=\"grid grid-cols-4 gap-4 mb-8\">
        ";
        // line 55
        $context["photos"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "photos", [], "any", false, false, false, 55), ["{" => "", "}" => ""]), ",");
        // line 56
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["photos"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 57
            yield "            <div class=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57)) {
                yield "col-span-2 row-span-2";
            }
            yield " overflow-hidden rounded-xl\">
                <img src=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["photo"]), "html", null, true);
            yield "\"
                     alt=\"Property image ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
            yield "\"
                     class=\"w-full h-full object-cover hover:scale-105 transition-transform duration-300\"
                     onerror=\"this.src='https://via.placeholder.com/800x600?text=No+Image+Available'\">
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "    </div>

    <!-- Main Content Grid -->
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
        <!-- Left Content -->
        <div class=\"lg:col-span-2 space-y-8\">
            <!-- Property Features -->
            <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                <h2 class=\"text-2xl font-bold mb-6\">Features</h2>
                <div class=\"grid grid-cols-2 md:grid-cols-4 gap-6\">
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-bed text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "bedrooms", [], "any", false, false, false, 76), "html", null, true);
        yield " Bedrooms</span>
                    </div>
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-bath text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "bathrooms", [], "any", false, false, false, 80), "html", null, true);
        yield " Bathrooms</span>
                    </div>
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-users text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "max_guests", [], "any", false, false, false, 84), "html", null, true);
        yield " Guests</span>
                    </div>
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-home text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "category_name", [], "any", false, false, false, 88), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                <h2 class=\"text-2xl font-bold mb-4\">About this place</h2>
                <p class=\"text-gray-700 leading-relaxed\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "description", [], "any", false, false, false, 96), "html", null, true);
        yield "</p>
            </div>

            <!-- Amenities -->
            ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "amenities", [], "any", false, false, false, 100)) {
            // line 101
            yield "                <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                    <h2 class=\"text-2xl font-bold mb-6\">Amenities</h2>
                    <div class=\"grid grid-cols-2 md:grid-cols-3 gap-4\">
                        ";
            // line 104
            $context["amenities"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "amenities", [], "any", false, false, false, 104), ["{" => "", "}" => ""]), ",");
            // line 105
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["amenities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 106
                yield "                            <div class=\"flex items-center p-4 bg-gray-50 rounded-xl\">
                                <i class=\"fas fa-check text-green-500 mr-3\"></i>
                                <span class=\"text-gray-700\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::trim($context["amenity"])), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['amenity'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "                    </div>
                </div>
            ";
        }
        // line 114
        yield "
            <!-- House Rules -->
            ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "house_rules", [], "any", false, false, false, 116)) {
            // line 117
            yield "                <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                    <h2 class=\"text-2xl font-bold mb-4\">House Rules</h2>
                    <div class=\"prose max-w-none text-gray-700\">
                        ";
            // line 120
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "house_rules", [], "any", false, false, false, 120), "html", null, true));
            yield "
                    </div>
                </div>
            ";
        }
        // line 124
        yield "        </div>

        <!-- Right Sidebar - Booking Form -->
        <div class=\"lg:col-span-1\">
            <div class=\"sticky top-8\">
                <form id=\"bookingForm\" class=\"bg-white rounded-xl p-6 custom-shadow\">
                    <input type=\"hidden\" name=\"property_id\" value=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "id", [], "any", false, false, false, 130), "html", null, true);
        yield "\">

                    <!-- Price Display -->
                    <div class=\"text-center mb-6\">
                        <span class=\"text-3xl font-bold text-blue-600\">\$";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "price", [], "any", false, false, false, 134), "html", null, true);
        yield "</span>
                        <span class=\"text-gray-500\">/night</span>
                    </div>

                    <!-- Dates -->
                    <div class=\"grid grid-cols-2 gap-4 mb-4\">
                        <div>
                            <label class=\"block text-gray-700 font-medium mb-2\">Check-in</label>
                            <input type=\"date\"
                                   name=\"check_in\"
                                   required
                                   min=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\"
                                   class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\">
                        </div>
                        <div>
                            <label class=\"block text-gray-700 font-medium mb-2\">Check-out</label>
                            <input type=\"date\"
                                   name=\"check_out\"
                                   required
                                   min=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\"
                                   class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\">
                        </div>
                    </div>

                    <!-- Guests -->
                    <div class=\"mb-6\">
                        <label class=\"block text-gray-700 font-medium mb-2\">Guests</label>
                        <select name=\"guests\"
                                class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\"
                                required>
                            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "max_guests", [], "any", false, false, false, 164)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 165
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " guest";
            if (($context["i"] > 1)) {
                yield "s";
            }
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                        </select>
                    </div>

                    <!-- Special Requests -->
                    <div class=\"mb-6\">
                        <label class=\"block text-gray-700 font-medium mb-2\">Special Requests</label>
                        <textarea name=\"special_requests\"
                                  rows=\"3\"
                                  class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\"
                                  placeholder=\"Any special requirements?\"></textarea>
                    </div>

                    <!-- Price Calculation -->
                    <div class=\"border-t pt-4 space-y-2 mb-6\">
                        <div class=\"flex justify-between text-gray-600\">
                            <span>\$";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "price", [], "any", false, false, false, 182), "html", null, true);
        yield " × <span id=\"nightCount\">0</span> nights</span>
                            <span id=\"subtotal\">\$0</span>
                        </div>
                        <div class=\"flex justify-between text-gray-600\">
                            <span>Service fee</span>
                            <span id=\"serviceFee\">\$0</span>
                        </div>
                        <div class=\"flex justify-between font-bold text-lg border-t pt-2\">
                            <span>Total</span>
                            <span id=\"total\">\$0</span>
                        </div>
                    </div>

                    <button type=\"submit\"
                            class=\"w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl transition duration-300 font-semibold\">
                        Book Now
                    </button>

                    <p class=\"text-sm text-gray-600 mt-4\">
                        <i class=\"fas fa-shield-alt mr-2\"></i>
                        Your payment will be securely processed
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Price calculation
    function calculatePrice() {
        const checkIn = new Date(document.querySelector('input[name=\"check_in\"]').value);
        const checkOut = new Date(document.querySelector('input[name=\"check_out\"]').value);

        if (checkIn && checkOut && checkOut > checkIn) {
            const nights = Math.ceil((checkOut - checkIn) / (1000 * 60 * 60 * 24));
            const pricePerNight = ";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "price", [], "any", false, false, false, 218), "html", null, true);
        yield ";
            const subtotal = nights * pricePerNight;
            const serviceFee = subtotal * 0.10; // 10% service fee
            const total = subtotal + serviceFee;

            document.getElementById('nightCount').textContent = nights;
            document.getElementById('subtotal').textContent = `\$\${subtotal}`;
            document.getElementById('serviceFee').textContent = `\$\${serviceFee.toFixed(2)}`;
            document.getElementById('total').textContent = `\$\${total.toFixed(2)}`;

            return { nights, subtotal, serviceFee, total };
        }
        return null;
    }

    // Add event listeners
    document.querySelector('input[name=\"check_in\"]').addEventListener('change', calculatePrice);
    document.querySelector('input[name=\"check_out\"]').addEventListener('change', calculatePrice);

    // Form submission
    document.getElementById('bookingForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const checkIn = new Date(document.querySelector('input[name=\"check_in\"]').value);
        const checkOut = new Date(document.querySelector('input[name=\"check_out\"]').value);

        // Validation
        if (checkOut <= checkIn) {
            alert('Check-out date must be after check-in date');
            return;
        }

        const nights = Math.ceil((checkOut - checkIn) / (1000 * 60 * 60 * 24));
        if (nights < ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "minimum_stay", [], "any", false, false, false, 251), "html", null, true);
        yield ") {
            alert(`Minimum stay is ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "minimum_stay", [], "any", false, false, false, 252), "html", null, true);
        yield " nights`);
            return;
        }

        const prices = calculatePrice();
        if (!prices) {
            alert('Please select valid dates');
            return;
        }

        // Prepare booking data
        const formData = new FormData(this);
        const bookingData = {
            property_id: ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["property"] ?? null), "id", [], "any", false, false, false, 265), "html", null, true);
        yield ",
            check_in: formData.get('check_in'),
            check_out: formData.get('check_out'),
            guests: formData.get('guests'),
            special_requests: formData.get('special_requests'),
            total_price: prices.total
        };

        try {
            // Create booking
            const response = await fetch('/booking/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(bookingData)
            });

            const result = await response.json();

            if (result.success) {
                // Redirect to payment page
                window.location.href = `/payment/process/\${result.booking_id}`;
            } else {
                alert(result.message || 'An error occurred. Please try again.');
            }
        } catch (error) {
            alert('An error occurred. Please try again later.');
        }
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
        return "front/property_details.twig";
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
        return array (  456 => 265,  440 => 252,  436 => 251,  400 => 218,  361 => 182,  344 => 167,  329 => 165,  325 => 164,  311 => 153,  300 => 145,  286 => 134,  279 => 130,  271 => 124,  264 => 120,  259 => 117,  257 => 116,  253 => 114,  248 => 111,  239 => 108,  235 => 106,  230 => 105,  228 => 104,  223 => 101,  221 => 100,  214 => 96,  203 => 88,  196 => 84,  189 => 80,  182 => 76,  168 => 64,  149 => 59,  145 => 58,  138 => 57,  120 => 56,  118 => 55,  111 => 50,  105 => 47,  101 => 45,  99 => 44,  95 => 43,  88 => 39,  82 => 36,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ property.title }} | Details</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .glassmorphism {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
        .custom-shadow { box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body class=\"bg-gray-50\">
<!-- Navigation -->
<nav class=\"bg-white shadow-sm\">
    <div class=\"container mx-auto px-6\">
        <div class=\"flex items-center justify-between h-20\">
            <a href=\"/\" class=\"flex items-center\">
                <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" alt=\"Logo\" class=\"h-14\">
            </a>
        </div>
    </div>
</nav>

<!-- Property Details -->
<div class=\"container mx-auto px-4 py-8\">
    <!-- Property Title & Price -->
    <div class=\"flex justify-between items-start mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">{{ property.title }}</h1>
            <p class=\"text-gray-600 flex items-center\">
                <i class=\"fas fa-map-marker-alt text-blue-500 mr-2\"></i>
                {{ property.address }}
            </p>
        </div>
        <div class=\"text-right\">
            <div class=\"text-3xl font-bold text-blue-600\">\${{ property.price }}<span class=\"text-lg text-gray-500\">/night</span></div>
            {% if property.rating %}
                <div class=\"flex items-center justify-end mt-2\">
                    <i class=\"fas fa-star text-yellow-400 mr-1\"></i>
                    <span class=\"font-semibold\">{{ property.rating }}</span>
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Image Gallery -->
    <div class=\"grid grid-cols-4 gap-4 mb-8\">
        {% set photos = property.photos|replace({'{': '', '}': ''})|split(',') %}
        {% for photo in photos %}
            <div class=\"{% if loop.first %}col-span-2 row-span-2{% endif %} overflow-hidden rounded-xl\">
                <img src=\"{{ photo|trim }}\"
                     alt=\"Property image {{ loop.index }}\"
                     class=\"w-full h-full object-cover hover:scale-105 transition-transform duration-300\"
                     onerror=\"this.src='https://via.placeholder.com/800x600?text=No+Image+Available'\">
            </div>
        {% endfor %}
    </div>

    <!-- Main Content Grid -->
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
        <!-- Left Content -->
        <div class=\"lg:col-span-2 space-y-8\">
            <!-- Property Features -->
            <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                <h2 class=\"text-2xl font-bold mb-6\">Features</h2>
                <div class=\"grid grid-cols-2 md:grid-cols-4 gap-6\">
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-bed text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">{{ property.bedrooms }} Bedrooms</span>
                    </div>
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-bath text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">{{ property.bathrooms }} Bathrooms</span>
                    </div>
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-users text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">{{ property.max_guests }} Guests</span>
                    </div>
                    <div class=\"flex flex-col items-center p-4 bg-gray-50 rounded-xl\">
                        <i class=\"fas fa-home text-2xl text-blue-500 mb-2\"></i>
                        <span class=\"font-semibold\">{{ property.category_name }}</span>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                <h2 class=\"text-2xl font-bold mb-4\">About this place</h2>
                <p class=\"text-gray-700 leading-relaxed\">{{ property.description }}</p>
            </div>

            <!-- Amenities -->
            {% if property.amenities %}
                <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                    <h2 class=\"text-2xl font-bold mb-6\">Amenities</h2>
                    <div class=\"grid grid-cols-2 md:grid-cols-3 gap-4\">
                        {% set amenities = property.amenities|replace({'{': '', '}': ''})|split(',') %}
                        {% for amenity in amenities %}
                            <div class=\"flex items-center p-4 bg-gray-50 rounded-xl\">
                                <i class=\"fas fa-check text-green-500 mr-3\"></i>
                                <span class=\"text-gray-700\">{{ amenity|trim|capitalize }}</span>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}

            <!-- House Rules -->
            {% if property.house_rules %}
                <div class=\"bg-white rounded-xl p-6 custom-shadow\">
                    <h2 class=\"text-2xl font-bold mb-4\">House Rules</h2>
                    <div class=\"prose max-w-none text-gray-700\">
                        {{ property.house_rules|nl2br }}
                    </div>
                </div>
            {% endif %}
        </div>

        <!-- Right Sidebar - Booking Form -->
        <div class=\"lg:col-span-1\">
            <div class=\"sticky top-8\">
                <form id=\"bookingForm\" class=\"bg-white rounded-xl p-6 custom-shadow\">
                    <input type=\"hidden\" name=\"property_id\" value=\"{{ property.id }}\">

                    <!-- Price Display -->
                    <div class=\"text-center mb-6\">
                        <span class=\"text-3xl font-bold text-blue-600\">\${{ property.price }}</span>
                        <span class=\"text-gray-500\">/night</span>
                    </div>

                    <!-- Dates -->
                    <div class=\"grid grid-cols-2 gap-4 mb-4\">
                        <div>
                            <label class=\"block text-gray-700 font-medium mb-2\">Check-in</label>
                            <input type=\"date\"
                                   name=\"check_in\"
                                   required
                                   min=\"{{ 'now'|date('Y-m-d') }}\"
                                   class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\">
                        </div>
                        <div>
                            <label class=\"block text-gray-700 font-medium mb-2\">Check-out</label>
                            <input type=\"date\"
                                   name=\"check_out\"
                                   required
                                   min=\"{{ 'now'|date('Y-m-d') }}\"
                                   class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\">
                        </div>
                    </div>

                    <!-- Guests -->
                    <div class=\"mb-6\">
                        <label class=\"block text-gray-700 font-medium mb-2\">Guests</label>
                        <select name=\"guests\"
                                class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\"
                                required>
                            {% for i in 1..property.max_guests %}
                                <option value=\"{{ i }}\">{{ i }} guest{% if i > 1 %}s{% endif %}</option>
                            {% endfor %}
                        </select>
                    </div>

                    <!-- Special Requests -->
                    <div class=\"mb-6\">
                        <label class=\"block text-gray-700 font-medium mb-2\">Special Requests</label>
                        <textarea name=\"special_requests\"
                                  rows=\"3\"
                                  class=\"w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none\"
                                  placeholder=\"Any special requirements?\"></textarea>
                    </div>

                    <!-- Price Calculation -->
                    <div class=\"border-t pt-4 space-y-2 mb-6\">
                        <div class=\"flex justify-between text-gray-600\">
                            <span>\${{ property.price }} × <span id=\"nightCount\">0</span> nights</span>
                            <span id=\"subtotal\">\$0</span>
                        </div>
                        <div class=\"flex justify-between text-gray-600\">
                            <span>Service fee</span>
                            <span id=\"serviceFee\">\$0</span>
                        </div>
                        <div class=\"flex justify-between font-bold text-lg border-t pt-2\">
                            <span>Total</span>
                            <span id=\"total\">\$0</span>
                        </div>
                    </div>

                    <button type=\"submit\"
                            class=\"w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl transition duration-300 font-semibold\">
                        Book Now
                    </button>

                    <p class=\"text-sm text-gray-600 mt-4\">
                        <i class=\"fas fa-shield-alt mr-2\"></i>
                        Your payment will be securely processed
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Price calculation
    function calculatePrice() {
        const checkIn = new Date(document.querySelector('input[name=\"check_in\"]').value);
        const checkOut = new Date(document.querySelector('input[name=\"check_out\"]').value);

        if (checkIn && checkOut && checkOut > checkIn) {
            const nights = Math.ceil((checkOut - checkIn) / (1000 * 60 * 60 * 24));
            const pricePerNight = {{ property.price }};
            const subtotal = nights * pricePerNight;
            const serviceFee = subtotal * 0.10; // 10% service fee
            const total = subtotal + serviceFee;

            document.getElementById('nightCount').textContent = nights;
            document.getElementById('subtotal').textContent = `\$\${subtotal}`;
            document.getElementById('serviceFee').textContent = `\$\${serviceFee.toFixed(2)}`;
            document.getElementById('total').textContent = `\$\${total.toFixed(2)}`;

            return { nights, subtotal, serviceFee, total };
        }
        return null;
    }

    // Add event listeners
    document.querySelector('input[name=\"check_in\"]').addEventListener('change', calculatePrice);
    document.querySelector('input[name=\"check_out\"]').addEventListener('change', calculatePrice);

    // Form submission
    document.getElementById('bookingForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const checkIn = new Date(document.querySelector('input[name=\"check_in\"]').value);
        const checkOut = new Date(document.querySelector('input[name=\"check_out\"]').value);

        // Validation
        if (checkOut <= checkIn) {
            alert('Check-out date must be after check-in date');
            return;
        }

        const nights = Math.ceil((checkOut - checkIn) / (1000 * 60 * 60 * 24));
        if (nights < {{ property.minimum_stay }}) {
            alert(`Minimum stay is {{ property.minimum_stay }} nights`);
            return;
        }

        const prices = calculatePrice();
        if (!prices) {
            alert('Please select valid dates');
            return;
        }

        // Prepare booking data
        const formData = new FormData(this);
        const bookingData = {
            property_id: {{ property.id }},
            check_in: formData.get('check_in'),
            check_out: formData.get('check_out'),
            guests: formData.get('guests'),
            special_requests: formData.get('special_requests'),
            total_price: prices.total
        };

        try {
            // Create booking
            const response = await fetch('/booking/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(bookingData)
            });

            const result = await response.json();

            if (result.success) {
                // Redirect to payment page
                window.location.href = `/payment/process/\${result.booking_id}`;
            } else {
                alert(result.message || 'An error occurred. Please try again.');
            }
        } catch (error) {
            alert('An error occurred. Please try again later.');
        }
    });
</script>
</body>
</html>", "front/property_details.twig", "/var/www/html/app/View/front/property_details.twig");
    }
}
