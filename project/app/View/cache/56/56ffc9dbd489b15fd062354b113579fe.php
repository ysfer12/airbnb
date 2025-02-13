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

/* back/admin/layouts/base.twig */
class __TwigTemplate_716098f95c5d650c0799ccb03c35d932 extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
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
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-gray-100\">
    <div class=\"min-h-screen flex\">
        <!-- Sidebar -->
        <aside class=\"fixed inset-y-0 left-0 bg-gray-800 w-64 flex flex-col\">
            <div class=\"flex items-center justify-center h-16 px-4 bg-gray-900\">
                <h1 class=\"text-white text-xl font-semibold\">AirBnB Admin</h1>
            </div>
            <nav class=\"flex-1 px-4 py-4 space-y-1\">
                <a href=\"/dashboard/index\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\"/>
                    </svg>
                    Properties
                </a>
                <a href=\"/category/index\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\"/>
                    </svg>
                    Categories
                </a>
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\"/>
                    </svg>
                    Users
                </a>
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                    </svg>
                    Bookings
                </a>
            </nav>
            <div class=\"px-4 py-4 border-t border-gray-700\">
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                    </svg>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <div class=\"flex-1 ml-64\">
            <!-- Top Navigation -->
            <header class=\"bg-white shadow\">
                <div class=\"px-4 py-6 mx-auto\">
                    <h1 class=\"text-2xl font-semibold text-gray-900\">";
        // line 64
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        yield "</h1>
                </div>
            </header>

            <!-- Page Content -->
            <main class=\"p-6\">
                ";
        // line 70
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 71
        yield "            </main>
        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "AirBnB Admin";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/admin/layouts/base.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 70,  143 => 64,  132 => 7,  123 => 71,  121 => 70,  112 => 64,  52 => 7,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# File: /app/View/back/admin/base.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}AirBnB Admin{% endblock %}</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-gray-100\">
    <div class=\"min-h-screen flex\">
        <!-- Sidebar -->
        <aside class=\"fixed inset-y-0 left-0 bg-gray-800 w-64 flex flex-col\">
            <div class=\"flex items-center justify-center h-16 px-4 bg-gray-900\">
                <h1 class=\"text-white text-xl font-semibold\">AirBnB Admin</h1>
            </div>
            <nav class=\"flex-1 px-4 py-4 space-y-1\">
                <a href=\"/dashboard/index\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\"/>
                    </svg>
                    Properties
                </a>
                <a href=\"/category/index\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\"/>
                    </svg>
                    Categories
                </a>
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\"/>
                    </svg>
                    Users
                </a>
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                    </svg>
                    Bookings
                </a>
            </nav>
            <div class=\"px-4 py-4 border-t border-gray-700\">
                <a href=\"\" class=\"flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg\">
                    <svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                    </svg>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <div class=\"flex-1 ml-64\">
            <!-- Top Navigation -->
            <header class=\"bg-white shadow\">
                <div class=\"px-4 py-6 mx-auto\">
                    <h1 class=\"text-2xl font-semibold text-gray-900\">{% block header %}{% endblock %}</h1>
                </div>
            </header>

            <!-- Page Content -->
            <main class=\"p-6\">
                {% block content %}{% endblock %}
            </main>
        </div>
    </div>
</body>
</html>", "back/admin/layouts/base.twig", "/var/www/html/app/View/back/admin/layouts/base.twig");
    }
}
