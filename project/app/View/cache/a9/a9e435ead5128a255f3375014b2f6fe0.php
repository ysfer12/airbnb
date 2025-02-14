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

/* front/home.twig */
class __TwigTemplate_102434cd7d2327fcd291b339d4a26b7d extends Template
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
    <title>Airbnb Clone</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<<<<<<< HEAD
<body class=\"bg-gray-50\">
    
    <!-- Header -->
    <header class=\"bg-white shadow-md sticky top-0 z-50\">
        <div class=\"container mx-auto px-6 py-4 flex justify-between items-center\">
            <h1 class=\"text-2xl font-bold text-red-600 cursor-pointer\">Airbnb Clone</h1>
            
            <nav class=\"md:flex gap-6 hidden flex-col md:flex-row items-center\" id=\"nav-menu\">
                <a href=\"#\" class=\"text-gray-700 hover:text-red-600 font-medium\">Home</a>
                <a href=\"#\" class=\"text-gray-700 hover:text-red-600 font-medium\">Listings</a>
                <a href=\"#\" class=\"text-gray-700 hover:text-red-600 font-medium\">Contact</a>
                <button class=\"bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Sign In</button>
            </nav>
            
            <!-- Menu Button (Inside the Nav) -->
            <button id=\"menu-toggle\" class=\"md:hidden text-gray-700 text-3xl\">&#9776;</button>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class=\"relative bg-cover bg-center h-[500px] flex items-center justify-center text-center text-white\" style=\"background-image: url('path-to-your-image/homePageBackground.png');\">
        <div class=\"bg-black bg-opacity-50 p-10 rounded-lg\">
            <h2 class=\"text-5xl font-bold\">Find Your Perfect Stay</h2>
            <p class=\"mt-4 text-lg\">Book unique homes, apartments, and hotels worldwide.</p>
            <button class=\"mt-6 px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600\">Explore Now</button>
        </div>
    </section>

    <!-- Featured Listings -->
    <section class=\"py-16 container mx-auto px-6\">
        <h3 class=\"text-3xl font-bold text-gray-800 text-center mb-10\">Featured Listings</h3>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Property Card 1 -->
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300\">
                <img src=\"path-to-your-image/homePageBackground.png\" alt=\"Apartment\" class=\"w-full h-56 object-cover\">
                <div class=\"p-6\">
                    <h4 class=\"text-xl font-semibold\">Luxury Apartment</h4>
                    <p class=\"text-gray-600\">\$120 / night</p>
                    <button class=\"mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Book Now</button>
                </div>
            </div>

            <!-- Property Card 2 -->
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300\">
                <img src=\"path-to-your-image/homePageBackground.png\" alt=\"Villa\" class=\"w-full h-56 object-cover\">
                <div class=\"p-6\">
                    <h4 class=\"text-xl font-semibold\">Beachside Villa</h4>
                    <p class=\"text-gray-600\">\$250 / night</p>
                    <button class=\"mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Book Now</button>
                </div>
            </div>

            <!-- Property Card 3 -->
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300\">
                <img src=\"https://source.unsplash.com/400x300/?cabin\" alt=\"Cabin\" class=\"w-full h-56 object-cover\">
                <div class=\"p-6\">
                    <h4 class=\"text-xl font-semibold\">Cozy Mountain Cabin</h4>
                    <p class=\"text-gray-600\">\$180 / night</p>
                    <button class=\"mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Book Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"bg-gray-800 text-gray-200 py-6 mt-10\">
        <div class=\"container mx-auto text-center\">
            <p>&copy; 2025 Airbnb Clone. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            const menuToggle = document.getElementById(\"menu-toggle\");
            const navMenu = document.getElementById(\"nav-menu\");

            menuToggle.addEventListener(\"click\", function () {
                navMenu.classList.toggle(\"hidden\");
                navMenu.classList.toggle(\"flex\");
                navMenu.classList.toggle(\"flex-col\");
                navMenu.classList.toggle(\"absolute\");
                navMenu.classList.toggle(\"top-16\");
                navMenu.classList.toggle(\"left-0\");
                navMenu.classList.toggle(\"w-full\");
                navMenu.classList.toggle(\"bg-white\");
                navMenu.classList.toggle(\"shadow-md\");
                navMenu.classList.toggle(\"p-4\");
            });

            window.addEventListener(\"resize\", function () {
                if (window.innerWidth >= 768) {
                    navMenu.classList.add(\"flex\");
                    navMenu.classList.remove(\"hidden\", \"absolute\", \"top-16\", \"left-0\", \"w-full\", \"bg-white\", \"shadow-md\", \"p-4\");
                } else {
                    navMenu.classList.add(\"hidden\");
                }
            });
        });
    </script>

=======
<body>
    <h1>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>
    <p>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_name"] ?? null), "html", null, true);
        yield "</p>


    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["propertys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 13
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "
        ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 14), "html", null, true);
            yield "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['property'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
    



    
>>>>>>> cd1f5cbb091c1836479688908f79614593c2ca30
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/home.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
<<<<<<< HEAD
        return array (  42 => 1,);
=======
        return array (  82 => 17,  73 => 14,  68 => 13,  64 => 12,  58 => 9,  54 => 8,  48 => 5,  42 => 1,);
>>>>>>> cd1f5cbb091c1836479688908f79614593c2ca30
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Airbnb Clone</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<<<<<<< HEAD
<body class=\"bg-gray-50\">
    
    <!-- Header -->
    <header class=\"bg-white shadow-md sticky top-0 z-50\">
        <div class=\"container mx-auto px-6 py-4 flex justify-between items-center\">
            <h1 class=\"text-2xl font-bold text-red-600 cursor-pointer\">Airbnb Clone</h1>
            
            <nav class=\"md:flex gap-6 hidden flex-col md:flex-row items-center\" id=\"nav-menu\">
                <a href=\"#\" class=\"text-gray-700 hover:text-red-600 font-medium\">Home</a>
                <a href=\"#\" class=\"text-gray-700 hover:text-red-600 font-medium\">Listings</a>
                <a href=\"#\" class=\"text-gray-700 hover:text-red-600 font-medium\">Contact</a>
                <button class=\"bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Sign In</button>
            </nav>
            
            <!-- Menu Button (Inside the Nav) -->
            <button id=\"menu-toggle\" class=\"md:hidden text-gray-700 text-3xl\">&#9776;</button>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class=\"relative bg-cover bg-center h-[500px] flex items-center justify-center text-center text-white\" style=\"background-image: url('path-to-your-image/homePageBackground.png');\">
        <div class=\"bg-black bg-opacity-50 p-10 rounded-lg\">
            <h2 class=\"text-5xl font-bold\">Find Your Perfect Stay</h2>
            <p class=\"mt-4 text-lg\">Book unique homes, apartments, and hotels worldwide.</p>
            <button class=\"mt-6 px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600\">Explore Now</button>
        </div>
    </section>

    <!-- Featured Listings -->
    <section class=\"py-16 container mx-auto px-6\">
        <h3 class=\"text-3xl font-bold text-gray-800 text-center mb-10\">Featured Listings</h3>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Property Card 1 -->
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300\">
                <img src=\"path-to-your-image/homePageBackground.png\" alt=\"Apartment\" class=\"w-full h-56 object-cover\">
                <div class=\"p-6\">
                    <h4 class=\"text-xl font-semibold\">Luxury Apartment</h4>
                    <p class=\"text-gray-600\">\$120 / night</p>
                    <button class=\"mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Book Now</button>
                </div>
            </div>

            <!-- Property Card 2 -->
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300\">
                <img src=\"path-to-your-image/homePageBackground.png\" alt=\"Villa\" class=\"w-full h-56 object-cover\">
                <div class=\"p-6\">
                    <h4 class=\"text-xl font-semibold\">Beachside Villa</h4>
                    <p class=\"text-gray-600\">\$250 / night</p>
                    <button class=\"mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Book Now</button>
                </div>
            </div>

            <!-- Property Card 3 -->
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300\">
                <img src=\"https://source.unsplash.com/400x300/?cabin\" alt=\"Cabin\" class=\"w-full h-56 object-cover\">
                <div class=\"p-6\">
                    <h4 class=\"text-xl font-semibold\">Cozy Mountain Cabin</h4>
                    <p class=\"text-gray-600\">\$180 / night</p>
                    <button class=\"mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600\">Book Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"bg-gray-800 text-gray-200 py-6 mt-10\">
        <div class=\"container mx-auto text-center\">
            <p>&copy; 2025 Airbnb Clone. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            const menuToggle = document.getElementById(\"menu-toggle\");
            const navMenu = document.getElementById(\"nav-menu\");

            menuToggle.addEventListener(\"click\", function () {
                navMenu.classList.toggle(\"hidden\");
                navMenu.classList.toggle(\"flex\");
                navMenu.classList.toggle(\"flex-col\");
                navMenu.classList.toggle(\"absolute\");
                navMenu.classList.toggle(\"top-16\");
                navMenu.classList.toggle(\"left-0\");
                navMenu.classList.toggle(\"w-full\");
                navMenu.classList.toggle(\"bg-white\");
                navMenu.classList.toggle(\"shadow-md\");
                navMenu.classList.toggle(\"p-4\");
            });

            window.addEventListener(\"resize\", function () {
                if (window.innerWidth >= 768) {
                    navMenu.classList.add(\"flex\");
                    navMenu.classList.remove(\"hidden\", \"absolute\", \"top-16\", \"left-0\", \"w-full\", \"bg-white\", \"shadow-md\", \"p-4\");
                } else {
                    navMenu.classList.add(\"hidden\");
                }
            });
        });
    </script>

=======
<body>
    <h1>{{ title }}</h1>
    <p>{{ last_name }}</p>


    {% for property in propertys %}
        {{property.id}}
        {{property.title}}

    {% endfor %}

    



    
>>>>>>> cd1f5cbb091c1836479688908f79614593c2ca30
</body>
</html>
", "front/home.twig", "/var/www/html/app/View/front/home.twig");
    }
}
