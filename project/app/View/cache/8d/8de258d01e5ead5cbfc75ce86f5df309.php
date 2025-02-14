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

/* front/auth.twig */
class __TwigTemplate_866deb58c3eca9d7840abaa04cf17fc2 extends Template
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
    <script src=\"https://unpkg.com/@tailwindcss/browser@4\"></script>
    <title>Login/Register</title>
</head>
<body class=\"bg-gray-100 font-sans antialiased\">

  <header class=\"bg-white shadow-md sticky top-0 z-50 px-6 py-4 flex justify-between items-center\">
    <a href=\"../home/index.php\" class=\"text-gray-700 text-2xl font-semibold flex items-center\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"></path>
      </svg>
    </a>
    <h1 class=\"text-2xl font-semibold text-gray-800\">Airbinb</h1>
    <div></div> 
  </header>

  <div class=\"min-h-screen bg-gray-200 flex items-center justify-center py-6 px-4 sm:px-6 lg:px-8\">

    <div class=\"w-full max-w-md bg-white rounded-lg shadow-xl p-8 space-y-6\">
      <h2 class=\"tite text-3xl font-semibold text-center text-gray-800\">Welcome Back!</h2>
      <p class=\"signuptext text-center text-gray-600\">Please sign in to continue.</p>

      <form id=\"login-form\" action=\"login\" method=\"POST\" class=\"space-y-6\">
        <div>
          <label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Email Address</label>
          <input type=\"email\" id=\"email\" name=\"email\" required
            class=\"mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none\">
        </div>

        <div>
          <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
          <input type=\"password\" id=\"password\" name=\"password\" required
            class=\"mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none\">
        </div>

        <div class=\"flex justify-end\">
          <a href=\"#\" class=\"text-sm text-blue-600 hover:text-blue-500\">Forgot Password?</a>
        </div>

        <div>
          <button type=\"submit\" name=\"submitSignIn\"
            class=\"w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50\">
            Sign In
          </button>
        </div>
        <div class=\"space-y-4 mt-6\">
          <button class=\"w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50\">
             <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
        yield "\">Sign in with Google</a>
          </button>
          <button class=\"w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50\">
            Sign in with Facebook
          </button>
        </div> 

      </form>


      <!-- Social Login Buttons -->



      <form id=\"register-form\" action=\"register\" method=\"POST\" enctype=\"multipart/form-data\" class=\"space-y-6 hidden\">
          <!-- Profile Image Upload -->
          <div class=\"flex justify-center mb-4\">
            <label for=\"profileImage\" class=\"cursor-pointer flex flex-col items-center\">
                <div class=\"w-24 h-24 rounded-full border-4 border-gray-300 flex items-center justify-center bg-gray-100\">
                    <span class=\"text-gray-500 text-sm\">Upload</span>
                </div>
                <input type=\"file\" id=\"profileImage\" name=\"profileImage\" class=\"hidden\" accept=\"image/*\">
                <span class=\"text-sm text-gray-600 mt-2\">Choose a profile picture</span>
            </label>
        </div>

        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Full Name</label>
            <input type=\"text\" name=\"fullname\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your full name\">
        </div>
        
        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Email</label>
            <input type=\"email\" name=\"email\" value=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your email\">
        </div>
        
        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Password</label>
            <input type=\"password\" name=\"password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your password\">
        </div>
        
        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Phone Number</label>
            <input type=\"tel\" name=\"phonenumber\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your phone number\">
        </div>
        
        <div class=\"mb-6\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Role</label>
            <select class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" name=\"role\">
                <option value=\"traveler\">Traveler</option>
                <option value=\"owner\">Owner</option>
            </select>
        </div>
        
        <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition\">Register</button>
            ";
        // line 107
        if (($context["error"] ?? null)) {
            // line 108
            yield "            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 110
        yield "
      </form>

      <div class=\"text-center\">
        <p class=\"text-sm text-gray-600\">
          <a href=\"#\" id=\"toggle-link\" onclick=\"toggleForm()\" class=\"text-blue-600 hover:text-blue-500 font-semibold\">Don't have an account? Sign Up</a>
        </p>
      </div>
    </div>
  </div>

  <script src=\"../../../public/Assets/script/registerPage.js\">

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
        return "front/auth.twig";
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
        return array (  167 => 110,  161 => 108,  159 => 107,  134 => 85,  126 => 80,  95 => 52,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <script src=\"https://unpkg.com/@tailwindcss/browser@4\"></script>
    <title>Login/Register</title>
</head>
<body class=\"bg-gray-100 font-sans antialiased\">

  <header class=\"bg-white shadow-md sticky top-0 z-50 px-6 py-4 flex justify-between items-center\">
    <a href=\"../home/index.php\" class=\"text-gray-700 text-2xl font-semibold flex items-center\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"></path>
      </svg>
    </a>
    <h1 class=\"text-2xl font-semibold text-gray-800\">Airbinb</h1>
    <div></div> 
  </header>

  <div class=\"min-h-screen bg-gray-200 flex items-center justify-center py-6 px-4 sm:px-6 lg:px-8\">

    <div class=\"w-full max-w-md bg-white rounded-lg shadow-xl p-8 space-y-6\">
      <h2 class=\"tite text-3xl font-semibold text-center text-gray-800\">Welcome Back!</h2>
      <p class=\"signuptext text-center text-gray-600\">Please sign in to continue.</p>

      <form id=\"login-form\" action=\"login\" method=\"POST\" class=\"space-y-6\">
        <div>
          <label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Email Address</label>
          <input type=\"email\" id=\"email\" name=\"email\" required
            class=\"mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none\">
        </div>

        <div>
          <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
          <input type=\"password\" id=\"password\" name=\"password\" required
            class=\"mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none\">
        </div>

        <div class=\"flex justify-end\">
          <a href=\"#\" class=\"text-sm text-blue-600 hover:text-blue-500\">Forgot Password?</a>
        </div>

        <div>
          <button type=\"submit\" name=\"submitSignIn\"
            class=\"w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50\">
            Sign In
          </button>
        </div>
        <div class=\"space-y-4 mt-6\">
          <button class=\"w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50\">
             <a href=\"{{url}}\">Sign in with Google</a>
          </button>
          <button class=\"w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50\">
            Sign in with Facebook
          </button>
        </div> 

      </form>


      <!-- Social Login Buttons -->



      <form id=\"register-form\" action=\"register\" method=\"POST\" enctype=\"multipart/form-data\" class=\"space-y-6 hidden\">
          <!-- Profile Image Upload -->
          <div class=\"flex justify-center mb-4\">
            <label for=\"profileImage\" class=\"cursor-pointer flex flex-col items-center\">
                <div class=\"w-24 h-24 rounded-full border-4 border-gray-300 flex items-center justify-center bg-gray-100\">
                    <span class=\"text-gray-500 text-sm\">Upload</span>
                </div>
                <input type=\"file\" id=\"profileImage\" name=\"profileImage\" class=\"hidden\" accept=\"image/*\">
                <span class=\"text-sm text-gray-600 mt-2\">Choose a profile picture</span>
            </label>
        </div>

        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Full Name</label>
            <input type=\"text\" name=\"fullname\" value=\"{{name}}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your full name\">
        </div>
        
        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Email</label>
            <input type=\"email\" name=\"email\" value=\"{{email}}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your email\">
        </div>
        
        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Password</label>
            <input type=\"password\" name=\"password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your password\">
        </div>
        
        <div class=\"mb-4\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Phone Number</label>
            <input type=\"tel\" name=\"phonenumber\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" placeholder=\"Enter your phone number\">
        </div>
        
        <div class=\"mb-6\">
            <label class=\"block text-gray-700 font-semibold mb-2\">Role</label>
            <select class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400\" name=\"role\">
                <option value=\"traveler\">Traveler</option>
                <option value=\"owner\">Owner</option>
            </select>
        </div>
        
        <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition\">Register</button>
            {% if error%}
            <p>{{error}}</p>
            {% endif %}

      </form>

      <div class=\"text-center\">
        <p class=\"text-sm text-gray-600\">
          <a href=\"#\" id=\"toggle-link\" onclick=\"toggleForm()\" class=\"text-blue-600 hover:text-blue-500 font-semibold\">Don't have an account? Sign Up</a>
        </p>
      </div>
    </div>
  </div>

  <script src=\"../../../public/Assets/script/registerPage.js\">

  </script>

</body>
</html>
", "front/auth.twig", "/var/www/html/app/View/front/auth.twig");
    }
}
