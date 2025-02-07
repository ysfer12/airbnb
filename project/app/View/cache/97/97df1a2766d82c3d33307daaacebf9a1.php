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

/* errors/404.twig */
class __TwigTemplate_d307bafe9c98f34323434bfd9e0391e6 extends Template
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
    <title>404 Not Found</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #343a40;
            color: #ffffff;
        }
        .error-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"error-container\">
                    <h1 class=\"display-1 fw-bold text-danger\">404</h1>
                    <h2 class=\"mb-3\">Oops! Page Not Found</h2>
                    <p class=\"text-light\">The page you're looking for doesn't exist or has been moved.</p>
                    <a href=\"home\" class=\"btn btn-light mt-3\">Go Back Home</a>
                </div>
            </div>
        </div>
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
        return "errors/404.twig";
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
    <title>404 Not Found</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #343a40;
            color: #ffffff;
        }
        .error-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"error-container\">
                    <h1 class=\"display-1 fw-bold text-danger\">404</h1>
                    <h2 class=\"mb-3\">Oops! Page Not Found</h2>
                    <p class=\"text-light\">The page you're looking for doesn't exist or has been moved.</p>
                    <a href=\"home\" class=\"btn btn-light mt-3\">Go Back Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
", "errors/404.twig", "/var/www/html/app/View/errors/404.twig");
    }
}
