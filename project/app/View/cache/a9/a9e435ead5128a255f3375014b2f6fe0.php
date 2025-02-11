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
    <title>Real Homes</title>
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" />
<style>
  @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }
    .animate-fade-in-delay {
        animation: fadeIn 1s ease-out 0.5s forwards;
        opacity: 0;
    }
    .animate-fade-in-delay2 {
        animation: fadeIn 1s ease-out 1s forwards;
        opacity: 0;
    }
    .slider-container {
        position: relative;
        overflow: hidden;
        height : 100vh;
    }
    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
    }
    .slide.active {
        opacity: 1;
    }
    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* This ensures images cover the entire slide */
        object-position: center; /* Centers the image */
    }
    .search-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }
</style>
</head>
<body>
<!-- Enhanced Navigation Menu -->
<nav class=\"bg-white shadow-sm fixed w-full z-50\">
    <div class=\"container mx-auto px-6\">
        <div class=\"flex items-center justify-between h-20\">
            <!-- Logo -->
            <div class=\"flex items-center\">
                <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" alt=\"Logo\" class=\"h-14\">
            </div>

            <!-- Main Navigation -->
            <div class=\"hidden lg:flex items-center space-x-1\">
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-blue-600 bg-blue-50 font-medium\">Home</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Properties</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Become a Host</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Blog</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Contact</a>
            </div>

            <!-- Right Side -->
            <div class=\"flex items-center space-x-6\">
                <div class=\"hidden md:flex items-center space-x-2 text-gray-600\">
                    <i class=\"fas fa-phone text-blue-600\"></i>
                    <span class=\"font-medium\">1-800-555-1234</span>
                </div>
                <div class=\"flex items-center space-x-3\">
                    <button class=\"p-2 rounded-full hover:bg-gray-100 text-gray-600\">
                        <i class=\"fas fa-user-circle text-xl\"></i>
                    </button>
                    <button class=\"bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-md font-medium transition-colors\">
                        Registre
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class=\"relative h-screen overflow-hidden\">
    <!-- Slider -->
    <div class=\"slider-container h-full\">
        <!-- Slides -->
        <div class=\"slide active\">
            <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/khach-s-n-tinh-nhan-venice-1-hotel-FL2cq-GgnWQ-unsplash.jpg\" 
                 alt=\"Luxury Home\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Discover Your Perfect Stay
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Explore unique properties that transform your travel experience
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Start Your Journey
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://images.unsplash.com/photo-1512917774080-9991f1c4c750\" 
                 alt=\"Modern House\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Luxury Meets Comfort
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Curated properties that redefine your travel expectations
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Explore Properties
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://images.unsplash.com/photo-1613490493576-7fde63acd811\" 
                 alt=\"Beach House\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Your Home Away From Home
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Exceptional stays that feel just like home
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Find Your Space
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://images.unsplash.com/photo-1582719478250-c89cae4dc85b\" 
                 alt=\"Luxury Home\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Unforgettable Experiences
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Every property tells a unique story
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/kenny-eliason-mGZX2MOPR-s-unsplash-1.jpg\" 
                 alt=\"Luxury Home\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Seamless Travel Experiences
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Discover properties that exceed your expectations
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Discover More
                    </a>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <div class=\"absolute inset-0 flex items-center justify-between p-4 z-20\">
            <button onclick=\"prevSlide()\" 
                    class=\"p-3 rounded-full bg-white/80 hover:bg-white transition shadow-lg\">
                <i class=\"fas fa-chevron-left text-2xl text-gray-700\"></i>
            </button>
            <button onclick=\"nextSlide()\" 
                    class=\"p-3 rounded-full bg-white/80 hover:bg-white transition shadow-lg\">
                <i class=\"fas fa-chevron-right text-2xl text-gray-700\"></i>
            </button>
        </div>

        <!-- Slide Indicators -->
        <div class=\"absolute bottom-16 left-1/2 -translate-x-1/2 flex space-x-2 z-20\">
            <button onclick=\"goToSlide(0)\" class=\"w-3 h-3 rounded-full bg-white\"></button>
            <button onclick=\"goToSlide(1)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
            <button onclick=\"goToSlide(2)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
            <button onclick=\"goToSlide(3)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
            <button onclick=\"goToSlide(4)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
        </div>
    </div>

    <!-- Search Form - Maintained from original code -->
    <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/40 pt-20\">
        <!-- Previous search form code remains the same -->
        <div class=\"container mx-auto px-6 pb-8\">
            <div class=\"bg-white/95 backdrop-blur-md rounded-xl shadow-xl max-w-6xl mx-auto\">
                <!-- Search form content from previous code -->
                <div class=\"flex flex-wrap items-center p-4\">
                    <!-- Location input -->
                    <div class=\"flex-1 min-w-[200px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"fas fa-map-marker-alt text-blue-600 mr-2\"></i>Location
                            </label>
                            <input type=\"text\" 
                                   placeholder=\"Where are you going?\" 
                                   class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent\">
                        </div>
                    </div>

                    <!-- Check In -->
                    <div class=\"flex-1 min-w-[200px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"far fa-calendar text-blue-600 mr-2\"></i>Check In
                            </label>
                            <input type=\"date\" 
                                   class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent\">
                        </div>
                    </div>

                    <!-- Check Out -->
                    <div class=\"flex-1 min-w-[200px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"far fa-calendar text-blue-600 mr-2\"></i>Check Out
                            </label>
                            <input type=\"date\" 
                                   class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent\">
                        </div>
                    </div>

                    <!-- Guests -->
                    <div class=\"flex-1 min-w-[160px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"fas fa-user-friends text-blue-600 mr-2\"></i>Guests
                            </label>
                            <select class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none\">
                                <option>2 Guests</option>
                                <option>3 Guests</option>
                                <option>4 Guests</option>
                                <option>5+ Guests</option>
                            </select>
                            <div class=\"absolute right-3 top-[32px] pointer-events-none\">
                                <i class=\"fas fa-chevron-down text-gray-400\"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <div class=\"px-2 mt-6\">
                        <button class=\"bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-lg transition-colors\">
                            <i class=\"fas fa-search mr-2\"></i>Search
                        </button>
                    </div>
                </div>

                <!-- Advanced Search Link -->
                <div class=\"px-6 py-3 border-t\">
                    <button class=\"text-blue-600 hover:text-blue-700 text-sm font-medium flex items-center\">
                        <i class=\"fas fa-sliders-h mr-2\"></i>
                        Advanced Search Options
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add these sections after the hero section div -->



<!-- Popular Categories -->
<section class=\"py-16 bg-gray-50\">
    <div class=\"container mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <h2 class=\"text-3xl font-bold mb-4 text-gray-800\">Popular Categories</h2>
            <p class=\"text-gray-600 max-w-2xl mx-auto\">Explore our diverse range of property types tailored to your unique stay preferences</p>
        </div>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8\">
            <!-- Category Card 1 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://plus.unsplash.com/premium_photo-1684175656320-5c3f701c082c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Apartments</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-blue-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">120 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-blue-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Card 2 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Maisons</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-green-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">330 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-green-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Card 3 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://images.unsplash.com/photo-1613977257365-aaae5a9817ff?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Villas</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-purple-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">513 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-purple-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Card 4 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Cabanes</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-red-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">111 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-red-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Featured Properties -->
<section class=\"py-16\">
    <div class=\"container mx-auto px-6\">
        <div class=\"flex justify-between items-center mb-12\">
            <h2 class=\"text-3xl font-bold\">Featured Properties</h2>
            <a href=\"#\" class=\"text-blue-600 hover:text-blue-700 font-medium\">View All Properties →</a>
        </div>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
            <!-- Property Card -->
            <div class=\"bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition\">
                <div class=\"relative\">
                    <img src=\"https://images.unsplash.com/photo-1512917774080-9991f1c4c750\" 
                         class=\"w-full h-64 object-cover\">
                    <span class=\"absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm\">
                        Featured
                    </span>
                    <span class=\"absolute top-4 right-4 bg-white text-gray-800 px-3 py-1 rounded-full text-sm font-semibold\">
                        \$1,200/mo
                    </span>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-semibold mb-2\">Modern Apartment in Downtown</h3>
                    <p class=\"text-gray-600 mb-4\"><i class=\"fas fa-map-marker-alt mr-2\"></i>123 Main St, City</p>
                    <div class=\"flex justify-between text-gray-500 text-sm\">
                        <span><i class=\"fas fa-bed mr-2\"></i>3 Beds</span>
                        <span><i class=\"fas fa-bath mr-2\"></i>2 Baths</span>
                        <span><i class=\"fas fa-ruler-combined mr-2\"></i>1,200 sqft</span>
                    </div>
                </div>
            </div>
            <div class=\"bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition\">
                <div class=\"relative\">
                    <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/khach-s-n-tinh-nhan-venice-1-hotel-FL2cq-GgnWQ-unsplash.jpg\" 
                         class=\"w-full h-64 object-cover\">
                    <span class=\"absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm\">
                        Featured
                    </span>
                    <span class=\"absolute top-4 right-4 bg-white text-gray-800 px-3 py-1 rounded-full text-sm font-semibold\">
                        \$1,200/mo
                    </span>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-semibold mb-2\">Modern Apartment in Downtown</h3>
                    <p class=\"text-gray-600 mb-4\"><i class=\"fas fa-map-marker-alt mr-2\"></i>123 Main St, City</p>
                    <div class=\"flex justify-between text-gray-500 text-sm\">
                        <span><i class=\"fas fa-bed mr-2\"></i>3 Beds</span>
                        <span><i class=\"fas fa-bath mr-2\"></i>2 Baths</span>
                        <span><i class=\"fas fa-ruler-combined mr-2\"></i>1,200 sqft</span>
                    </div>
                </div>
            </div>
            <div class=\"bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition\">
                <div class=\"relative\">
                    <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/11/apartment-11-488x326.jpg\" 
                         class=\"w-full h-64 object-cover\">
                    <span class=\"absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm\">
                        Featured
                    </span>
                    <span class=\"absolute top-4 right-4 bg-white text-gray-800 px-3 py-1 rounded-full text-sm font-semibold\">
                        \$1,200/mo
                    </span>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-semibold mb-2\">Modern Apartment in Downtown</h3>
                    <p class=\"text-gray-600 mb-4\"><i class=\"fas fa-map-marker-alt mr-2\"></i>123 Main St, City</p>
                    <div class=\"flex justify-between text-gray-500 text-sm\">
                        <span><i class=\"fas fa-bed mr-2\"></i>3 Beds</span>
                        <span><i class=\"fas fa-bath mr-2\"></i>2 Baths</span>
                        <span><i class=\"fas fa-ruler-combined mr-2\"></i>1,200 sqft</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Future Rental Section -->
<section class=\"py-16 bg-gray-50\">
    <div class=\"container mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-block px-4 py-1 bg-blue-50 text-blue-600 rounded-full text-sm font-medium mb-4\">Discover Your Next Stay</span>
            <h2 class=\"text-4xl font-bold mb-4 text-gray-800\">Your Future Rental Awaits</h2>
            <p class=\"text-gray-600 max-w-2xl mx-auto text-lg\">
                Explore unique properties that tell a story, 
                <br class=\"hidden md:block\">
                crafted to make your stay extraordinary
            </p>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Location Card -->
            <div class=\"relative group overflow-hidden rounded-3xl shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"relative h-80 overflow-hidden\">
                    <img src=\"https://images.unsplash.com/photo-1600596542815-ffad4c1539a9\" 
                         alt=\"Amazing Location\" 
                         class=\"w-full h-full object-cover transition-transform duration-300 group-hover:scale-110\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                </div>
                <div class=\"absolute bottom-0 left-0 right-0 p-6 z-10\">
                    <div class=\"bg-white/90 backdrop-blur-sm rounded-xl p-4 flex items-center space-x-4 transform transition-transform duration-300 group-hover:-translate-y-2\">
                        <div class=\"bg-green-100 text-green-600 p-3 rounded-full\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                            </svg>
                        </div>
                        <div>
                            <h3 class=\"text-xl font-bold text-gray-800\">Amazing Location</h3>
                            <p class=\"text-sm text-gray-600\">Discover breathtaking destinations</p>
                        </div>
                        <a href=\"#\" class=\"ml-auto text-blue-600 hover:text-blue-800 transition\">
                            <i class=\"fas fa-arrow-right text-xl\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Amenities Card -->
            <div class=\"relative group overflow-hidden rounded-3xl shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"relative h-80 overflow-hidden\">
                    <img src=\"https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7\" 
                         alt=\"Exclusive Amenities\" 
                         class=\"w-full h-full object-cover transition-transform duration-300 group-hover:scale-110\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                </div>
                <div class=\"absolute bottom-0 left-0 right-0 p-6 z-10\">
                    <div class=\"bg-white/90 backdrop-blur-sm rounded-xl p-4 flex items-center space-x-4 transform transition-transform duration-300 group-hover:-translate-y-2\">
                        <div class=\"bg-purple-100 text-purple-600 p-3 rounded-full\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z\" />
                            </svg>
                        </div>
                        <div>
                            <h3 class=\"text-xl font-bold text-gray-800\">Exclusive Amenities</h3>
                            <p class=\"text-sm text-gray-600\">Luxurious comfort at your fingertips</p>
                        </div>
                        <a href=\"#\" class=\"ml-auto text-blue-600 hover:text-blue-800 transition\">
                            <i class=\"fas fa-arrow-right text-xl\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Luxury Spaces Card -->
            <div class=\"relative group overflow-hidden rounded-3xl shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"relative h-80 overflow-hidden\">
                    <img src=\"https://images.unsplash.com/photo-1600607687939-ce8a6c25118c\" 
                         alt=\"Luxury Spaces\" 
                         class=\"w-full h-full object-cover transition-transform duration-300 group-hover:scale-110\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                </div>
                <div class=\"absolute bottom-0 left-0 right-0 p-6 z-10\">
                    <div class=\"bg-white/90 backdrop-blur-sm rounded-xl p-4 flex items-center space-x-4 transform transition-transform duration-300 group-hover:-translate-y-2\">
                        <div class=\"bg-blue-100 text-blue-600 p-3 rounded-full\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\" />
                            </svg>
                        </div>
                        <div>
                            <h3 class=\"text-xl font-bold text-gray-800\">Luxury Spaces</h3>
                            <p class=\"text-sm text-gray-600\">Elegance meets comfort</p>
                        </div>
                        <a href=\"#\" class=\"ml-auto text-blue-600 hover:text-blue-800 transition\">
                            <i class=\"fas fa-arrow-right text-xl\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class=\"py-16 bg-gray-50\">
    <div class=\"container mx-auto px-6\">
        <h2 class=\"text-3xl font-bold text-center mb-16\">How It Works</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-12\">
            <!-- Step 1 -->
            <div class=\"text-center\">
                <div class=\"w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6\">
                    <i class=\"fas fa-search text-3xl text-blue-600\"></i>
                </div>
                <h3 class=\"text-xl font-semibold mb-4\">Search Location</h3>
                <p class=\"text-gray-600\">Find your perfect stay by searching through our curated properties.</p>
            </div>
            
            <!-- Step 2 -->
            <div class=\"text-center\">
                <div class=\"w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6\">
                    <i class=\"fas fa-calendar-check text-3xl text-green-600\"></i>
                </div>
                <h3 class=\"text-xl font-semibold mb-4\">Select & Book</h3>
                <p class=\"text-gray-600\">Choose your ideal property and book with just a few clicks, hassle-free.</p>
            </div>
            
            <!-- Step 3 -->
            <div class=\"text-center\">
                <div class=\"w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6\">
                    <i class=\"fas fa-home text-3xl text-purple-600\"></i>
                </div>
                <h3 class=\"text-xl font-semibold mb-4\">Enjoy Your Stay</h3>
                <p class=\"text-gray-600\">Arrive at your perfect rental and enjoy a memorable experience with top-notch amenities.</p>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us -->
<!-- Why Choose Us -->
<section class=\"py-16\">
    <div class=\"container mx-auto px-6\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-12 items-center\">
            <div>
                <h2 class=\"text-3xl font-bold mb-6\">Why Choose Our Platform</h2>
                <p class=\"text-gray-600 mb-8\">Experience the best in vacation rentals with our carefully curated properties and exceptional service.</p>
                <div class=\"space-y-6\">
                    <!-- Feature 1 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-check text-blue-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">Verified Properties</h3>
                            <p class=\"text-gray-600\">All our properties are carefully verified for quality and comfort.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-shield-alt text-green-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">Secure Bookings</h3>
                            <p class=\"text-gray-600\">Advanced security measures to protect your personal and payment information.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-life-ring text-purple-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">24/7 Customer Support</h3>
                            <p class=\"text-gray-600\">Our dedicated team is always available to assist you with any queries or concerns.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-tags text-yellow-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">Best Price Guarantee</h3>
                            <p class=\"text-gray-600\">We promise the most competitive rates with no hidden fees.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"relative group\">
                <img src=\"https://images.unsplash.com/photo-1564013799919-ab600027ffc6\" 
                     class=\"rounded-xl shadow-lg transform transition-transform duration-300 group-hover:scale-105\">
                <div class=\"absolute inset-0 bg-blue-600 opacity-20 rounded-xl group-hover:opacity-10 transition-opacity duration-300\"></div>
            </div>
        </div>
    </div>
</section>
<!-- Amenities Section -->
<section class=\"py-16 bg-white\">
    <div class=\"container mx-auto px-6\">
        <div data-aos=\"fade-up\">
            <h3 class=\"text-sm font-medium text-blue-600 mb-2\">Amenities</h3>
            <h2 class=\"text-3xl font-bold mb-4\">Enjoy of Exclusive Amenities</h2>
            <p class=\"text-gray-600 mb-12 max-w-2xl\">Vestibulum pulvinar ante auctor, vulputate dui sed condimentum ex nullam pharetra suscipit entum integer vitae sapien vel est commodo</p>
        </div>
        
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
            <!-- Amenity Items -->
            <div data-aos=\"fade-up\" data-aos-delay=\"100\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🏊‍♂️</span>
                <span class=\"font-medium text-blue-800\">Swimming Pool</span>
            </div>
            
            <div data-aos=\"fade-up\" data-aos-delay=\"150\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">👑</span>
                <span class=\"font-medium text-blue-800\">Premium Perks</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"200\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">⛺</span>
                <span class=\"font-medium text-blue-800\">Camping Areas</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"250\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🐕</span>
                <span class=\"font-medium text-blue-800\">Pet Friendly</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"300\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🛁</span>
                <span class=\"font-medium text-blue-800\">Full Bathrooms</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"350\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🛏️</span>
                <span class=\"font-medium text-blue-800\">Cozy Bedrooms</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"400\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🛎️</span>
                <span class=\"font-medium text-blue-800\">Concierge Service</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"450\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🎉</span>
                <span class=\"font-medium text-blue-800\">Holidays Available</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"500\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">👨‍👩‍👦</span>
                <span class=\"font-medium text-blue-800\">Family Atmosphere</span>
            </div>
        </div>

        <div data-aos=\"fade-up\" data-aos-delay=\"550\" class=\"mt-8\">
            <button class=\"bg-blue-600 text-white px-6 py-3 rounded-full flex items-center hover:bg-blue-700 transition\">
                Learn more
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 ml-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
                </svg>
            </button>
        </div>
    </div>
</section>

                
       

<!-- Footer -->
<footer class=\"bg-gray-900 text-white\">
    <div class=\"container mx-auto px-6 py-16\">
        <div class=\"grid grid-cols-1 md:grid-cols-4 gap-12\">
            <!-- Company Info -->
            <div>
                <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" 
                     alt=\"Real Homes Logo\" 
                     class=\"h-12 mb-6 filter brightness-0 invert\">
                <p class=\"text-gray-400 mb-6\">
                    Discover your perfect stay with our curated selection of unique properties around the world.
                </p>
                <div class=\"flex space-x-4\">
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class=\"text-xl font-bold mb-6\">Quick Links</h4>
                <ul class=\"space-y-4\">
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Home</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Properties</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">About Us</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Contact</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Blog</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class=\"text-xl font-bold mb-6\">Support</h4>
                <ul class=\"space-y-4\">
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Help Center</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Cancellation Options</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Safety Information</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">FAQs</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Customer Support</a></li>
                </ul>
            </div>

            <!-- Contact & Newsletter -->
            <div>
                <h4 class=\"text-xl font-bold mb-6\">Contact Us</h4>
                <div class=\"mb-6\">
                    <p class=\"text-gray-400 mb-2\">
                        <i class=\"fas fa-phone mr-2\"></i> +1 (800) 555-1234
                    </p>
                    <p class=\"text-gray-400\">
                        <i class=\"fas fa-envelope mr-2\"></i> support@realhomes.com
                    </p>
                </div>

                <h5 class=\"text-lg font-semibold mb-4\">Newsletter</h5>
                <div class=\"flex\">
                    <input type=\"email\" 
                           placeholder=\"Enter your email\" 
                           class=\"w-full px-4 py-2 rounded-l-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500\">
                    <button class=\"bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition\">
                        <i class=\"fas fa-paper-plane\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Payment & Legal -->
        <div class=\"mt-16 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center\">
            <!-- Payment Methods -->
            <div class=\"flex space-x-6 mb-4 md:mb-0\">
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg\" alt=\"PayPal\" class=\"h-6 w-auto\">
                </div>
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/5/5e/Stripe_logo%2C_revised_2016.png\" alt=\"Stripe\" class=\"h-6 w-auto\">
                </div>
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_Pay_logo.svg\" alt=\"Apple Pay\" class=\"h-6 w-auto\">
                </div>
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/a/a0/Google_Pay_Logo.svg\" alt=\"Google Pay\" class=\"h-6 w-auto\">
                </div>
            </div>

            <!-- Copyright & Legal Links -->
            <div class=\"text-gray-400 text-sm text-center md:text-right\">
                <p>&copy; 2024 Real Homes. All Rights Reserved</p>
                <div class=\"mt-2\">
                    <a href=\"#\" class=\"hover:text-white mr-4\">Privacy Policy</a>
                    <a href=\"#\" class=\"hover:text-white\">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        let slideInterval;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            currentSlide = (n + totalSlides) % totalSlides;
            slides[currentSlide].classList.add('active');
            updateIndicators();
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
            resetInterval();
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
            resetInterval();
        }

        function goToSlide(n) {
            showSlide(n);
            resetInterval();
        }

        function updateIndicators() {
            const indicators = document.querySelectorAll('.bottom-32 button');
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('bg-white/60', index !== currentSlide);
                indicator.classList.toggle('bg-white', index === currentSlide);
            });
        }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Start automatic slideshow
        resetInterval();

          AOS.init({
        duration: 800,
        once: true,
        offset: 100
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
    <title>Real Homes</title>
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" />
<style>
  @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }
    .animate-fade-in-delay {
        animation: fadeIn 1s ease-out 0.5s forwards;
        opacity: 0;
    }
    .animate-fade-in-delay2 {
        animation: fadeIn 1s ease-out 1s forwards;
        opacity: 0;
    }
    .slider-container {
        position: relative;
        overflow: hidden;
        height : 100vh;
    }
    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
    }
    .slide.active {
        opacity: 1;
    }
    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* This ensures images cover the entire slide */
        object-position: center; /* Centers the image */
    }
    .search-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }
</style>
</head>
<body>
<!-- Enhanced Navigation Menu -->
<nav class=\"bg-white shadow-sm fixed w-full z-50\">
    <div class=\"container mx-auto px-6\">
        <div class=\"flex items-center justify-between h-20\">
            <!-- Logo -->
            <div class=\"flex items-center\">
                <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" alt=\"Logo\" class=\"h-14\">
            </div>

            <!-- Main Navigation -->
            <div class=\"hidden lg:flex items-center space-x-1\">
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-blue-600 bg-blue-50 font-medium\">Home</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Properties</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Become a Host</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Blog</a>
                <a href=\"#\" class=\"px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 font-medium transition-colors\">Contact</a>
            </div>

            <!-- Right Side -->
            <div class=\"flex items-center space-x-6\">
                <div class=\"hidden md:flex items-center space-x-2 text-gray-600\">
                    <i class=\"fas fa-phone text-blue-600\"></i>
                    <span class=\"font-medium\">1-800-555-1234</span>
                </div>
                <div class=\"flex items-center space-x-3\">
                    <button class=\"p-2 rounded-full hover:bg-gray-100 text-gray-600\">
                        <i class=\"fas fa-user-circle text-xl\"></i>
                    </button>
                    <button class=\"bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-md font-medium transition-colors\">
                        Registre
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class=\"relative h-screen overflow-hidden\">
    <!-- Slider -->
    <div class=\"slider-container h-full\">
        <!-- Slides -->
        <div class=\"slide active\">
            <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/khach-s-n-tinh-nhan-venice-1-hotel-FL2cq-GgnWQ-unsplash.jpg\" 
                 alt=\"Luxury Home\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Discover Your Perfect Stay
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Explore unique properties that transform your travel experience
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Start Your Journey
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://images.unsplash.com/photo-1512917774080-9991f1c4c750\" 
                 alt=\"Modern House\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Luxury Meets Comfort
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Curated properties that redefine your travel expectations
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Explore Properties
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://images.unsplash.com/photo-1613490493576-7fde63acd811\" 
                 alt=\"Beach House\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Your Home Away From Home
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Exceptional stays that feel just like home
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Find Your Space
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://images.unsplash.com/photo-1582719478250-c89cae4dc85b\" 
                 alt=\"Luxury Home\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Unforgettable Experiences
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Every property tells a unique story
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
        <div class=\"slide\">
            <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/kenny-eliason-mGZX2MOPR-s-unsplash-1.jpg\" 
                 alt=\"Luxury Home\" 
                 class=\"absolute inset-0 w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black/40 flex items-center justify-center text-center\">
                <div class=\"text-white max-w-3xl px-6\">
                    <h1 class=\"text-5xl font-bold mb-6 animate-fade-in\">
                        Seamless Travel Experiences
                    </h1>
                    <p class=\"text-xl mb-10 animate-fade-in-delay\">
                        Discover properties that exceed your expectations
                    </p>
                    <a href=\"#\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-lg text-lg transition-colors animate-fade-in-delay2\">
                        Discover More
                    </a>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <div class=\"absolute inset-0 flex items-center justify-between p-4 z-20\">
            <button onclick=\"prevSlide()\" 
                    class=\"p-3 rounded-full bg-white/80 hover:bg-white transition shadow-lg\">
                <i class=\"fas fa-chevron-left text-2xl text-gray-700\"></i>
            </button>
            <button onclick=\"nextSlide()\" 
                    class=\"p-3 rounded-full bg-white/80 hover:bg-white transition shadow-lg\">
                <i class=\"fas fa-chevron-right text-2xl text-gray-700\"></i>
            </button>
        </div>

        <!-- Slide Indicators -->
        <div class=\"absolute bottom-16 left-1/2 -translate-x-1/2 flex space-x-2 z-20\">
            <button onclick=\"goToSlide(0)\" class=\"w-3 h-3 rounded-full bg-white\"></button>
            <button onclick=\"goToSlide(1)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
            <button onclick=\"goToSlide(2)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
            <button onclick=\"goToSlide(3)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
            <button onclick=\"goToSlide(4)\" class=\"w-3 h-3 rounded-full bg-white/60\"></button>
        </div>
    </div>

    <!-- Search Form - Maintained from original code -->
    <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/40 pt-20\">
        <!-- Previous search form code remains the same -->
        <div class=\"container mx-auto px-6 pb-8\">
            <div class=\"bg-white/95 backdrop-blur-md rounded-xl shadow-xl max-w-6xl mx-auto\">
                <!-- Search form content from previous code -->
                <div class=\"flex flex-wrap items-center p-4\">
                    <!-- Location input -->
                    <div class=\"flex-1 min-w-[200px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"fas fa-map-marker-alt text-blue-600 mr-2\"></i>Location
                            </label>
                            <input type=\"text\" 
                                   placeholder=\"Where are you going?\" 
                                   class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent\">
                        </div>
                    </div>

                    <!-- Check In -->
                    <div class=\"flex-1 min-w-[200px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"far fa-calendar text-blue-600 mr-2\"></i>Check In
                            </label>
                            <input type=\"date\" 
                                   class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent\">
                        </div>
                    </div>

                    <!-- Check Out -->
                    <div class=\"flex-1 min-w-[200px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"far fa-calendar text-blue-600 mr-2\"></i>Check Out
                            </label>
                            <input type=\"date\" 
                                   class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent\">
                        </div>
                    </div>

                    <!-- Guests -->
                    <div class=\"flex-1 min-w-[160px] px-2\">
                        <div class=\"relative\">
                            <label class=\"text-sm font-medium text-gray-700 mb-1 block\">
                                <i class=\"fas fa-user-friends text-blue-600 mr-2\"></i>Guests
                            </label>
                            <select class=\"w-full pl-4 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none\">
                                <option>2 Guests</option>
                                <option>3 Guests</option>
                                <option>4 Guests</option>
                                <option>5+ Guests</option>
                            </select>
                            <div class=\"absolute right-3 top-[32px] pointer-events-none\">
                                <i class=\"fas fa-chevron-down text-gray-400\"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <div class=\"px-2 mt-6\">
                        <button class=\"bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-lg transition-colors\">
                            <i class=\"fas fa-search mr-2\"></i>Search
                        </button>
                    </div>
                </div>

                <!-- Advanced Search Link -->
                <div class=\"px-6 py-3 border-t\">
                    <button class=\"text-blue-600 hover:text-blue-700 text-sm font-medium flex items-center\">
                        <i class=\"fas fa-sliders-h mr-2\"></i>
                        Advanced Search Options
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add these sections after the hero section div -->



<!-- Popular Categories -->
<section class=\"py-16 bg-gray-50\">
    <div class=\"container mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <h2 class=\"text-3xl font-bold mb-4 text-gray-800\">Popular Categories</h2>
            <p class=\"text-gray-600 max-w-2xl mx-auto\">Explore our diverse range of property types tailored to your unique stay preferences</p>
        </div>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8\">
            <!-- Category Card 1 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://plus.unsplash.com/premium_photo-1684175656320-5c3f701c082c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Apartments</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-blue-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">120 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-blue-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Card 2 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Maisons</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-green-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">330 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-green-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Card 3 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://images.unsplash.com/photo-1613977257365-aaae5a9817ff?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Villas</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-purple-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">513 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-purple-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Card 4 -->
            <div class=\"category-card relative rounded-2xl overflow-hidden group cursor-pointer shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent opacity-50\"></div>
                <img src=\"https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" 
                     class=\"w-full h-64 object-cover group-hover:scale-110 transition duration-300\">
                <div class=\"absolute inset-0 flex flex-col justify-end p-6 z-20\">
                    <div>
                        <h3 class=\"text-2xl font-bold text-white mb-2\">Cabanes</h3>
                        <div class=\"flex items-center justify-between\">
                            <span class=\"text-sm text-white bg-red-600 px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300\">111 Properties</span>
                            <a href=\"#\" class=\"text-white opacity-0 group-hover:opacity-100 hover:text-red-300 transition\">
                                <i class=\"fas fa-arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Featured Properties -->
<section class=\"py-16\">
    <div class=\"container mx-auto px-6\">
        <div class=\"flex justify-between items-center mb-12\">
            <h2 class=\"text-3xl font-bold\">Featured Properties</h2>
            <a href=\"#\" class=\"text-blue-600 hover:text-blue-700 font-medium\">View All Properties →</a>
        </div>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
            <!-- Property Card -->
            <div class=\"bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition\">
                <div class=\"relative\">
                    <img src=\"https://images.unsplash.com/photo-1512917774080-9991f1c4c750\" 
                         class=\"w-full h-64 object-cover\">
                    <span class=\"absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm\">
                        Featured
                    </span>
                    <span class=\"absolute top-4 right-4 bg-white text-gray-800 px-3 py-1 rounded-full text-sm font-semibold\">
                        \$1,200/mo
                    </span>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-semibold mb-2\">Modern Apartment in Downtown</h3>
                    <p class=\"text-gray-600 mb-4\"><i class=\"fas fa-map-marker-alt mr-2\"></i>123 Main St, City</p>
                    <div class=\"flex justify-between text-gray-500 text-sm\">
                        <span><i class=\"fas fa-bed mr-2\"></i>3 Beds</span>
                        <span><i class=\"fas fa-bath mr-2\"></i>2 Baths</span>
                        <span><i class=\"fas fa-ruler-combined mr-2\"></i>1,200 sqft</span>
                    </div>
                </div>
            </div>
            <div class=\"bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition\">
                <div class=\"relative\">
                    <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2023/09/khach-s-n-tinh-nhan-venice-1-hotel-FL2cq-GgnWQ-unsplash.jpg\" 
                         class=\"w-full h-64 object-cover\">
                    <span class=\"absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm\">
                        Featured
                    </span>
                    <span class=\"absolute top-4 right-4 bg-white text-gray-800 px-3 py-1 rounded-full text-sm font-semibold\">
                        \$1,200/mo
                    </span>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-semibold mb-2\">Modern Apartment in Downtown</h3>
                    <p class=\"text-gray-600 mb-4\"><i class=\"fas fa-map-marker-alt mr-2\"></i>123 Main St, City</p>
                    <div class=\"flex justify-between text-gray-500 text-sm\">
                        <span><i class=\"fas fa-bed mr-2\"></i>3 Beds</span>
                        <span><i class=\"fas fa-bath mr-2\"></i>2 Baths</span>
                        <span><i class=\"fas fa-ruler-combined mr-2\"></i>1,200 sqft</span>
                    </div>
                </div>
            </div>
            <div class=\"bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition\">
                <div class=\"relative\">
                    <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/11/apartment-11-488x326.jpg\" 
                         class=\"w-full h-64 object-cover\">
                    <span class=\"absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm\">
                        Featured
                    </span>
                    <span class=\"absolute top-4 right-4 bg-white text-gray-800 px-3 py-1 rounded-full text-sm font-semibold\">
                        \$1,200/mo
                    </span>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-semibold mb-2\">Modern Apartment in Downtown</h3>
                    <p class=\"text-gray-600 mb-4\"><i class=\"fas fa-map-marker-alt mr-2\"></i>123 Main St, City</p>
                    <div class=\"flex justify-between text-gray-500 text-sm\">
                        <span><i class=\"fas fa-bed mr-2\"></i>3 Beds</span>
                        <span><i class=\"fas fa-bath mr-2\"></i>2 Baths</span>
                        <span><i class=\"fas fa-ruler-combined mr-2\"></i>1,200 sqft</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Future Rental Section -->
<section class=\"py-16 bg-gray-50\">
    <div class=\"container mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-block px-4 py-1 bg-blue-50 text-blue-600 rounded-full text-sm font-medium mb-4\">Discover Your Next Stay</span>
            <h2 class=\"text-4xl font-bold mb-4 text-gray-800\">Your Future Rental Awaits</h2>
            <p class=\"text-gray-600 max-w-2xl mx-auto text-lg\">
                Explore unique properties that tell a story, 
                <br class=\"hidden md:block\">
                crafted to make your stay extraordinary
            </p>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Location Card -->
            <div class=\"relative group overflow-hidden rounded-3xl shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"relative h-80 overflow-hidden\">
                    <img src=\"https://images.unsplash.com/photo-1600596542815-ffad4c1539a9\" 
                         alt=\"Amazing Location\" 
                         class=\"w-full h-full object-cover transition-transform duration-300 group-hover:scale-110\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                </div>
                <div class=\"absolute bottom-0 left-0 right-0 p-6 z-10\">
                    <div class=\"bg-white/90 backdrop-blur-sm rounded-xl p-4 flex items-center space-x-4 transform transition-transform duration-300 group-hover:-translate-y-2\">
                        <div class=\"bg-green-100 text-green-600 p-3 rounded-full\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                            </svg>
                        </div>
                        <div>
                            <h3 class=\"text-xl font-bold text-gray-800\">Amazing Location</h3>
                            <p class=\"text-sm text-gray-600\">Discover breathtaking destinations</p>
                        </div>
                        <a href=\"#\" class=\"ml-auto text-blue-600 hover:text-blue-800 transition\">
                            <i class=\"fas fa-arrow-right text-xl\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Amenities Card -->
            <div class=\"relative group overflow-hidden rounded-3xl shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"relative h-80 overflow-hidden\">
                    <img src=\"https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7\" 
                         alt=\"Exclusive Amenities\" 
                         class=\"w-full h-full object-cover transition-transform duration-300 group-hover:scale-110\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                </div>
                <div class=\"absolute bottom-0 left-0 right-0 p-6 z-10\">
                    <div class=\"bg-white/90 backdrop-blur-sm rounded-xl p-4 flex items-center space-x-4 transform transition-transform duration-300 group-hover:-translate-y-2\">
                        <div class=\"bg-purple-100 text-purple-600 p-3 rounded-full\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z\" />
                            </svg>
                        </div>
                        <div>
                            <h3 class=\"text-xl font-bold text-gray-800\">Exclusive Amenities</h3>
                            <p class=\"text-sm text-gray-600\">Luxurious comfort at your fingertips</p>
                        </div>
                        <a href=\"#\" class=\"ml-auto text-blue-600 hover:text-blue-800 transition\">
                            <i class=\"fas fa-arrow-right text-xl\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Luxury Spaces Card -->
            <div class=\"relative group overflow-hidden rounded-3xl shadow-lg transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl\">
                <div class=\"relative h-80 overflow-hidden\">
                    <img src=\"https://images.unsplash.com/photo-1600607687939-ce8a6c25118c\" 
                         alt=\"Luxury Spaces\" 
                         class=\"w-full h-full object-cover transition-transform duration-300 group-hover:scale-110\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                </div>
                <div class=\"absolute bottom-0 left-0 right-0 p-6 z-10\">
                    <div class=\"bg-white/90 backdrop-blur-sm rounded-xl p-4 flex items-center space-x-4 transform transition-transform duration-300 group-hover:-translate-y-2\">
                        <div class=\"bg-blue-100 text-blue-600 p-3 rounded-full\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\" />
                            </svg>
                        </div>
                        <div>
                            <h3 class=\"text-xl font-bold text-gray-800\">Luxury Spaces</h3>
                            <p class=\"text-sm text-gray-600\">Elegance meets comfort</p>
                        </div>
                        <a href=\"#\" class=\"ml-auto text-blue-600 hover:text-blue-800 transition\">
                            <i class=\"fas fa-arrow-right text-xl\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class=\"py-16 bg-gray-50\">
    <div class=\"container mx-auto px-6\">
        <h2 class=\"text-3xl font-bold text-center mb-16\">How It Works</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-12\">
            <!-- Step 1 -->
            <div class=\"text-center\">
                <div class=\"w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6\">
                    <i class=\"fas fa-search text-3xl text-blue-600\"></i>
                </div>
                <h3 class=\"text-xl font-semibold mb-4\">Search Location</h3>
                <p class=\"text-gray-600\">Find your perfect stay by searching through our curated properties.</p>
            </div>
            
            <!-- Step 2 -->
            <div class=\"text-center\">
                <div class=\"w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6\">
                    <i class=\"fas fa-calendar-check text-3xl text-green-600\"></i>
                </div>
                <h3 class=\"text-xl font-semibold mb-4\">Select & Book</h3>
                <p class=\"text-gray-600\">Choose your ideal property and book with just a few clicks, hassle-free.</p>
            </div>
            
            <!-- Step 3 -->
            <div class=\"text-center\">
                <div class=\"w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6\">
                    <i class=\"fas fa-home text-3xl text-purple-600\"></i>
                </div>
                <h3 class=\"text-xl font-semibold mb-4\">Enjoy Your Stay</h3>
                <p class=\"text-gray-600\">Arrive at your perfect rental and enjoy a memorable experience with top-notch amenities.</p>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us -->
<!-- Why Choose Us -->
<section class=\"py-16\">
    <div class=\"container mx-auto px-6\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-12 items-center\">
            <div>
                <h2 class=\"text-3xl font-bold mb-6\">Why Choose Our Platform</h2>
                <p class=\"text-gray-600 mb-8\">Experience the best in vacation rentals with our carefully curated properties and exceptional service.</p>
                <div class=\"space-y-6\">
                    <!-- Feature 1 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-check text-blue-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">Verified Properties</h3>
                            <p class=\"text-gray-600\">All our properties are carefully verified for quality and comfort.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-shield-alt text-green-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">Secure Bookings</h3>
                            <p class=\"text-gray-600\">Advanced security measures to protect your personal and payment information.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-life-ring text-purple-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">24/7 Customer Support</h3>
                            <p class=\"text-gray-600\">Our dedicated team is always available to assist you with any queries or concerns.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class=\"flex items-start\">
                        <div class=\"w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0\">
                            <i class=\"fas fa-tags text-yellow-600\"></i>
                        </div>
                        <div class=\"ml-4\">
                            <h3 class=\"text-lg font-semibold mb-2\">Best Price Guarantee</h3>
                            <p class=\"text-gray-600\">We promise the most competitive rates with no hidden fees.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"relative group\">
                <img src=\"https://images.unsplash.com/photo-1564013799919-ab600027ffc6\" 
                     class=\"rounded-xl shadow-lg transform transition-transform duration-300 group-hover:scale-105\">
                <div class=\"absolute inset-0 bg-blue-600 opacity-20 rounded-xl group-hover:opacity-10 transition-opacity duration-300\"></div>
            </div>
        </div>
    </div>
</section>
<!-- Amenities Section -->
<section class=\"py-16 bg-white\">
    <div class=\"container mx-auto px-6\">
        <div data-aos=\"fade-up\">
            <h3 class=\"text-sm font-medium text-blue-600 mb-2\">Amenities</h3>
            <h2 class=\"text-3xl font-bold mb-4\">Enjoy of Exclusive Amenities</h2>
            <p class=\"text-gray-600 mb-12 max-w-2xl\">Vestibulum pulvinar ante auctor, vulputate dui sed condimentum ex nullam pharetra suscipit entum integer vitae sapien vel est commodo</p>
        </div>
        
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
            <!-- Amenity Items -->
            <div data-aos=\"fade-up\" data-aos-delay=\"100\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🏊‍♂️</span>
                <span class=\"font-medium text-blue-800\">Swimming Pool</span>
            </div>
            
            <div data-aos=\"fade-up\" data-aos-delay=\"150\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">👑</span>
                <span class=\"font-medium text-blue-800\">Premium Perks</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"200\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">⛺</span>
                <span class=\"font-medium text-blue-800\">Camping Areas</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"250\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🐕</span>
                <span class=\"font-medium text-blue-800\">Pet Friendly</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"300\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🛁</span>
                <span class=\"font-medium text-blue-800\">Full Bathrooms</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"350\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🛏️</span>
                <span class=\"font-medium text-blue-800\">Cozy Bedrooms</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"400\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🛎️</span>
                <span class=\"font-medium text-blue-800\">Concierge Service</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"450\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">🎉</span>
                <span class=\"font-medium text-blue-800\">Holidays Available</span>
            </div>

            <div data-aos=\"fade-up\" data-aos-delay=\"500\" 
                 class=\"bg-blue-50 hover:bg-blue-100 rounded-full py-3 px-6 flex items-center space-x-3 transition-all duration-300 cursor-pointer\">
                <span class=\"text-blue-600 bg-white p-2 rounded-full\">👨‍👩‍👦</span>
                <span class=\"font-medium text-blue-800\">Family Atmosphere</span>
            </div>
        </div>

        <div data-aos=\"fade-up\" data-aos-delay=\"550\" class=\"mt-8\">
            <button class=\"bg-blue-600 text-white px-6 py-3 rounded-full flex items-center hover:bg-blue-700 transition\">
                Learn more
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 ml-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
                </svg>
            </button>
        </div>
    </div>
</section>

                
       

<!-- Footer -->
<footer class=\"bg-gray-900 text-white\">
    <div class=\"container mx-auto px-6 py-16\">
        <div class=\"grid grid-cols-1 md:grid-cols-4 gap-12\">
            <!-- Company Info -->
            <div>
                <img src=\"https://ultra-vacation-rentals.b-cdn.net/wp-content/uploads/sites/9/2020/09/Realhomes-logo-svg-blue-with-black-svg.png\" 
                     alt=\"Real Homes Logo\" 
                     class=\"h-12 mb-6 filter brightness-0 invert\">
                <p class=\"text-gray-400 mb-6\">
                    Discover your perfect stay with our curated selection of unique properties around the world.
                </p>
                <div class=\"flex space-x-4\">
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a href=\"#\" class=\"text-gray-400 hover:text-white transition\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class=\"text-xl font-bold mb-6\">Quick Links</h4>
                <ul class=\"space-y-4\">
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Home</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Properties</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">About Us</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Contact</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Blog</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class=\"text-xl font-bold mb-6\">Support</h4>
                <ul class=\"space-y-4\">
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Help Center</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Cancellation Options</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Safety Information</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">FAQs</a></li>
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white transition\">Customer Support</a></li>
                </ul>
            </div>

            <!-- Contact & Newsletter -->
            <div>
                <h4 class=\"text-xl font-bold mb-6\">Contact Us</h4>
                <div class=\"mb-6\">
                    <p class=\"text-gray-400 mb-2\">
                        <i class=\"fas fa-phone mr-2\"></i> +1 (800) 555-1234
                    </p>
                    <p class=\"text-gray-400\">
                        <i class=\"fas fa-envelope mr-2\"></i> support@realhomes.com
                    </p>
                </div>

                <h5 class=\"text-lg font-semibold mb-4\">Newsletter</h5>
                <div class=\"flex\">
                    <input type=\"email\" 
                           placeholder=\"Enter your email\" 
                           class=\"w-full px-4 py-2 rounded-l-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500\">
                    <button class=\"bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition\">
                        <i class=\"fas fa-paper-plane\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Payment & Legal -->
        <div class=\"mt-16 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center\">
            <!-- Payment Methods -->
            <div class=\"flex space-x-6 mb-4 md:mb-0\">
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg\" alt=\"PayPal\" class=\"h-6 w-auto\">
                </div>
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/5/5e/Stripe_logo%2C_revised_2016.png\" alt=\"Stripe\" class=\"h-6 w-auto\">
                </div>
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_Pay_logo.svg\" alt=\"Apple Pay\" class=\"h-6 w-auto\">
                </div>
                <div class=\"bg-white rounded-lg p-2 shadow-lg\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/a/a0/Google_Pay_Logo.svg\" alt=\"Google Pay\" class=\"h-6 w-auto\">
                </div>
            </div>

            <!-- Copyright & Legal Links -->
            <div class=\"text-gray-400 text-sm text-center md:text-right\">
                <p>&copy; 2024 Real Homes. All Rights Reserved</p>
                <div class=\"mt-2\">
                    <a href=\"#\" class=\"hover:text-white mr-4\">Privacy Policy</a>
                    <a href=\"#\" class=\"hover:text-white\">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        let slideInterval;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            currentSlide = (n + totalSlides) % totalSlides;
            slides[currentSlide].classList.add('active');
            updateIndicators();
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
            resetInterval();
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
            resetInterval();
        }

        function goToSlide(n) {
            showSlide(n);
            resetInterval();
        }

        function updateIndicators() {
            const indicators = document.querySelectorAll('.bottom-32 button');
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('bg-white/60', index !== currentSlide);
                indicator.classList.toggle('bg-white', index === currentSlide);
            });
        }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Start automatic slideshow
        resetInterval();

          AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
    </script>
</body>
</html>
", "front/home.twig", "/var/www/html/app/View/front/home.twig");
    }
}
