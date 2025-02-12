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
        return array (  42 => 1,);
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

</body>
</html>
", "front/home.twig", "/var/www/html/app/View/front/home.twig");
    }
}
