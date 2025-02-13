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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
";
        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 64
        yield "
";
        // line 65
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Book Property";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"container mt-5\">
    <div class=\"booking-form\">
        <h2 class=\"text-center mb-4\">Book Your Stay</h2>
        
        <form id=\"bookingForm\" method=\"POST\">
            <input type=\"hidden\" name=\"traveler_id\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_id"] ?? null), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"property_id\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["property_id"] ?? null), "html", null, true);
        yield "\">

            <div class=\"form-group\">
                <label for=\"start_date\">Check-in Date</label>
                <input type=\"date\" 
                       id=\"start_date\" 
                       name=\"start_date\" 
                       class=\"form-control\" 
                       required 
                       min=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\">
            </div>

            <div class=\"form-group\">
                <label for=\"end_date\">Check-out Date</label>
                <input type=\"date\" 
                       id=\"end_date\" 
                       name=\"end_date\" 
                       class=\"form-control\" 
                       required>
            </div>

            <div class=\"form-group\">
                <label for=\"guest_count\">Number of Guests</label>
                <select id=\"guest_count\" 
                        name=\"guest_count\" 
                        class=\"form-control\" 
                        required>
                    <option value=\"1\">1 Guest</option>
                    <option value=\"2\" selected>2 Guests</option>
                    <option value=\"3\">3 Guests</option>
                    <option value=\"4\">4 Guests</option>
                    <option value=\"5\">5+ Guests</option>
                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"special_requests\">Special Requests (Optional)</label>
                <textarea 
                    id=\"special_requests\" 
                    name=\"special_requests\" 
                    class=\"form-control\" 
                    rows=\"4\" 
                    placeholder=\"Any special requirements or notes\"
                ></textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary btn-block\">
                Proceed to Payment
            </button>
        </form>
    </div>
</div>
";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const startDateInput = document.getElementById('start_date');
            const endDateInput = document.getElementById('end_date');

            startDateInput.addEventListener('change', function() {
                endDateInput.min = startDateInput.value;
                
                if (new Date(endDateInput.value) <= new Date(startDateInput.value)) {
                    endDateInput.value = '';
                }
            });

document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const startDate = new Date(startDateInput.value);
    const endDate = new Date(endDateInput.value);

    if (startDate >= endDate) {
        alert('Check-out date must be after check-in date');
        return;
    }

    const formData = new FormData(this);
    const jsonData = Object.fromEntries(formData.entries());

    console.log('Sending booking data:', jsonData);

    fetch('/bookings/create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(jsonData)
    })
    .then(response => {
        console.log('Response status:', response.status);
        return response.json(); 
    })
    .then(data => {
        console.log('Response data:', data);
        if (data.booking_id) {
            if (data.payment_url) {
                window.location.href = data.payment_url;
            } else {
                alert('Booking successful!');
            }
        } else {
            alert(data.error || 'Booking failed');
        }
    })
    .catch(error => {
        console.error('Full error:', error);
        alert('An error occurred while processing your booking');
    });
});

});
    </script>
";
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
        return array (  160 => 66,  153 => 65,  104 => 20,  92 => 11,  88 => 10,  81 => 5,  74 => 4,  63 => 2,  58 => 65,  55 => 64,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
{% block title %}Book Property{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"booking-form\">
        <h2 class=\"text-center mb-4\">Book Your Stay</h2>
        
        <form id=\"bookingForm\" method=\"POST\">
            <input type=\"hidden\" name=\"traveler_id\" value=\"{{ user_id }}\">
            <input type=\"hidden\" name=\"property_id\" value=\"{{ property_id }}\">

            <div class=\"form-group\">
                <label for=\"start_date\">Check-in Date</label>
                <input type=\"date\" 
                       id=\"start_date\" 
                       name=\"start_date\" 
                       class=\"form-control\" 
                       required 
                       min=\"{{ \"now\"|date('Y-m-d') }}\">
            </div>

            <div class=\"form-group\">
                <label for=\"end_date\">Check-out Date</label>
                <input type=\"date\" 
                       id=\"end_date\" 
                       name=\"end_date\" 
                       class=\"form-control\" 
                       required>
            </div>

            <div class=\"form-group\">
                <label for=\"guest_count\">Number of Guests</label>
                <select id=\"guest_count\" 
                        name=\"guest_count\" 
                        class=\"form-control\" 
                        required>
                    <option value=\"1\">1 Guest</option>
                    <option value=\"2\" selected>2 Guests</option>
                    <option value=\"3\">3 Guests</option>
                    <option value=\"4\">4 Guests</option>
                    <option value=\"5\">5+ Guests</option>
                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"special_requests\">Special Requests (Optional)</label>
                <textarea 
                    id=\"special_requests\" 
                    name=\"special_requests\" 
                    class=\"form-control\" 
                    rows=\"4\" 
                    placeholder=\"Any special requirements or notes\"
                ></textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary btn-block\">
                Proceed to Payment
            </button>
        </form>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const startDateInput = document.getElementById('start_date');
            const endDateInput = document.getElementById('end_date');

            startDateInput.addEventListener('change', function() {
                endDateInput.min = startDateInput.value;
                
                if (new Date(endDateInput.value) <= new Date(startDateInput.value)) {
                    endDateInput.value = '';
                }
            });

document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const startDate = new Date(startDateInput.value);
    const endDate = new Date(endDateInput.value);

    if (startDate >= endDate) {
        alert('Check-out date must be after check-in date');
        return;
    }

    const formData = new FormData(this);
    const jsonData = Object.fromEntries(formData.entries());

    console.log('Sending booking data:', jsonData);

    fetch('/bookings/create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(jsonData)
    })
    .then(response => {
        console.log('Response status:', response.status);
        return response.json(); 
    })
    .then(data => {
        console.log('Response data:', data);
        if (data.booking_id) {
            if (data.payment_url) {
                window.location.href = data.payment_url;
            } else {
                alert('Booking successful!');
            }
        } else {
            alert(data.error || 'Booking failed');
        }
    })
    .catch(error => {
        console.error('Full error:', error);
        alert('An error occurred while processing your booking');
    });
});

});
    </script>
{% endblock %}", "front/booking.twig", "/var/www/html/app/View/front/booking.twig");
    }
}
