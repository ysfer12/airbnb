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

/* back/admin/dashboard.twig */
class __TwigTemplate_c2aeb4162f4b2af89b2650515d467f0f extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/admin/layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("back/admin/layouts/base.twig", "back/admin/dashboard.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Admin Dashboard";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Dashboard Overview";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3\">
    <!-- Stats Cards -->
    <div class=\"bg-white overflow-hidden shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <dt class=\"text-sm font-medium text-gray-500 truncate\">Total Users</dt>
            <dd class=\"mt-1 text-3xl font-semibold text-gray-900\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_users"] ?? null), "html", null, true);
        yield "</dd>
        </div>
    </div>
    <div class=\"bg-white overflow-hidden shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <dt class=\"text-sm font-medium text-gray-500 truncate\">Active Listings</dt>
            <dd class=\"mt-1 text-3xl font-semibold text-gray-900\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_listings"] ?? null), "html", null, true);
        yield "</dd>
        </div>
    </div>
    <div class=\"bg-white overflow-hidden shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <dt class=\"text-sm font-medium text-gray-500 truncate\">Pending Approvals</dt>
            <dd class=\"mt-1 text-3xl font-semibold text-gray-900\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pending_approvals"] ?? null), "html", null, true);
        yield "</dd>
        </div>
    </div>
</div>

<!-- Recent Activities -->
<div class=\"mt-8\">
    <div class=\"bg-white shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <h3 class=\"text-lg font-medium text-gray-900\">Recent Activities</h3>
            <div class=\"mt-4\">
                <ul class=\"divide-y divide-gray-200\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recent_activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 38
            yield "                    <li class=\"py-3\">
                        <div class=\"flex items-center space-x-4\">
                            <div class=\"flex-1 min-w-0\">
                                <p class=\"text-sm font-medium text-gray-900\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["activity"], "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </ul>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/admin/dashboard.twig";
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
        return array (  142 => 46,  131 => 41,  126 => 38,  122 => 37,  107 => 25,  98 => 19,  89 => 13,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"back/admin/layouts/base.twig\" %}

{% block title %}Admin Dashboard{% endblock %}

{% block header %}Dashboard Overview{% endblock %}

{% block content %}
<div class=\"grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3\">
    <!-- Stats Cards -->
    <div class=\"bg-white overflow-hidden shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <dt class=\"text-sm font-medium text-gray-500 truncate\">Total Users</dt>
            <dd class=\"mt-1 text-3xl font-semibold text-gray-900\">{{ total_users }}</dd>
        </div>
    </div>
    <div class=\"bg-white overflow-hidden shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <dt class=\"text-sm font-medium text-gray-500 truncate\">Active Listings</dt>
            <dd class=\"mt-1 text-3xl font-semibold text-gray-900\">{{ active_listings }}</dd>
        </div>
    </div>
    <div class=\"bg-white overflow-hidden shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <dt class=\"text-sm font-medium text-gray-500 truncate\">Pending Approvals</dt>
            <dd class=\"mt-1 text-3xl font-semibold text-gray-900\">{{ pending_approvals }}</dd>
        </div>
    </div>
</div>

<!-- Recent Activities -->
<div class=\"mt-8\">
    <div class=\"bg-white shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <h3 class=\"text-lg font-medium text-gray-900\">Recent Activities</h3>
            <div class=\"mt-4\">
                <ul class=\"divide-y divide-gray-200\">
                    {% for activity in recent_activities %}
                    <li class=\"py-3\">
                        <div class=\"flex items-center space-x-4\">
                            <div class=\"flex-1 min-w-0\">
                                <p class=\"text-sm font-medium text-gray-900\">{{ activity }}</p>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "back/admin/dashboard.twig", "/var/www/html/app/View/back/admin/dashboard.twig");
    }
}
