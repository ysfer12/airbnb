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

/* front/addInformation.twig */
class __TwigTemplate_2978462263e7e5c4c80f95e926e1fc54 extends Template
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
    <title>User Registration</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-blue-100 flex items-center justify-center min-h-screen\">
    <div class=\"bg-white p-8 rounded-2xl shadow-xl w-full max-w-md\">
        <h2 class=\"text-2xl font-bold text-blue-600 text-center mb-6\">Create an Account</h2>
        <form>
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Full Name</label>
                <input type=\"text\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["givenName"] ?? null), "html", null, true);
        yield "\"  class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your full name\">
            </div>
            
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Email</label>
                <input type=\"email\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your email\">
            </div>
            
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Password</label>
                <input type=\"password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your password\">
            </div>
            
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Phone Number</label>
                <input type=\"tel\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your phone number\">
            </div>
            
            <div class=\"mb-6\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Role</label>
                <select class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\">
                    <option value=\"traveler\">Traveler</option>
                    <option value=\"owner\">Owner</option>
                </select>
            </div>
            
            <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition\">Register</button>
        </form>
    </div>
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
        return "front/addInformation.twig";
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
        return array (  66 => 20,  58 => 15,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User Registration</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-blue-100 flex items-center justify-center min-h-screen\">
    <div class=\"bg-white p-8 rounded-2xl shadow-xl w-full max-w-md\">
        <h2 class=\"text-2xl font-bold text-blue-600 text-center mb-6\">Create an Account</h2>
        <form>
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Full Name</label>
                <input type=\"text\" value=\"{{givenName}}\"  class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your full name\">
            </div>
            
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Email</label>
                <input type=\"email\" value=\"{{email}}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your email\">
            </div>
            
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Password</label>
                <input type=\"password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your password\">
            </div>
            
            <div class=\"mb-4\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Phone Number</label>
                <input type=\"tel\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your phone number\">
            </div>
            
            <div class=\"mb-6\">
                <label class=\"block text-gray-700 font-semibold mb-2\">Role</label>
                <select class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\">
                    <option value=\"traveler\">Traveler</option>
                    <option value=\"owner\">Owner</option>
                </select>
            </div>
            
            <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition\">Register</button>
        </form>
    </div>
</body>
</html>
", "front/addInformation.twig", "/var/www/html/app/View/front/addInformation.twig");
    }
}
