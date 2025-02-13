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

/* back/admin/category/index.twig */
class __TwigTemplate_fda4c0cb63c8bb8cec0468996acd998a extends Template
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
        $this->parent = $this->loadTemplate("back/admin/layouts/base.twig", "back/admin/category/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    Categories - AirBnB Admin
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    Categories
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <div class=\"bg-white shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <!-- Header with Add Button -->
            <div class=\"sm:flex sm:items-center\">
                <div class=\"sm:flex-auto\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        Property Categories
                    </h2>
                    <p class=\"mt-2 text-sm text-gray-700\">
                        Manage all property categories in your system.
                    </p>
                </div>
                <div class=\"mt-4 sm:mt-0 sm:ml-16 sm:flex-none\">
                    <a href=\"\" class=\"inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                        Add Category
                    </a>
                </div>
            </div>
            <!-- Categories Table -->
            <div class=\"mt-8 flex flex-col\">
                <div class=\"-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                    <div class=\"inline-block min-w-full py-2 align-middle md:px-6 lg:px-8\">
                        <table class=\"min-w-full divide-y divide-gray-300\">
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900\">
                                        ID
                                    </th>
                                    <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                        Name
                                    </th>
                                    <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                        Description
                                    </th>
                                    <th scope=\"col\" class=\"relative py-3.5 pl-3 pr-4 sm:pr-6\">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=\"divide-y divide-gray-200\">
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 50
            yield "                                    <tr>
                                        <td class=\"whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-900\">
                                            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-900\">
                                            ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 58), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6\">
                                            <a href=\"\" class=\"text-indigo-600 hover:text-indigo-900 mr-4\">
                                                Edit
                                            </a>
                                            <button onclick=\"deleteCategory(";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield ")\" class=\"text-red-600 hover:text-red-900\">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

</script> ";
        // line 83
        yield "\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/admin/category/index.twig";
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
        return array (  180 => 83,  169 => 70,  157 => 64,  148 => 58,  142 => 55,  136 => 52,  132 => 50,  128 => 49,  86 => 9,  79 => 8,  73 => 6,  66 => 5,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"back/admin/layouts/base.twig\" %}
{% block title %}
    Categories - AirBnB Admin
{% endblock %}
{% block header %}
    Categories
{% endblock %}
{% block content %}
    <div class=\"bg-white shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <!-- Header with Add Button -->
            <div class=\"sm:flex sm:items-center\">
                <div class=\"sm:flex-auto\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        Property Categories
                    </h2>
                    <p class=\"mt-2 text-sm text-gray-700\">
                        Manage all property categories in your system.
                    </p>
                </div>
                <div class=\"mt-4 sm:mt-0 sm:ml-16 sm:flex-none\">
                    <a href=\"\" class=\"inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                        Add Category
                    </a>
                </div>
            </div>
            <!-- Categories Table -->
            <div class=\"mt-8 flex flex-col\">
                <div class=\"-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                    <div class=\"inline-block min-w-full py-2 align-middle md:px-6 lg:px-8\">
                        <table class=\"min-w-full divide-y divide-gray-300\">
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900\">
                                        ID
                                    </th>
                                    <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                        Name
                                    </th>
                                    <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                        Description
                                    </th>
                                    <th scope=\"col\" class=\"relative py-3.5 pl-3 pr-4 sm:pr-6\">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=\"divide-y divide-gray-200\">
                                {% for category in categories %}
                                    <tr>
                                        <td class=\"whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-900\">
                                            {{ category.id }}
                                        </td>
                                        <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-900\">
                                            {{ category.name }}
                                        </td>
                                        <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                            {{ category.description }}
                                        </td>
                                        <td class=\"relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6\">
                                            <a href=\"\" class=\"text-indigo-600 hover:text-indigo-900 mr-4\">
                                                Edit
                                            </a>
                                            <button onclick=\"deleteCategory({{ category.id }})\" class=\"text-red-600 hover:text-red-900\">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

</script> {# function deleteCategory(id) {
    if (confirm('Are you sure you want to delete this category?')) {
    window.location.href =\" \"\" + id;
    }
} #}\"
{% endblock %}
", "back/admin/category/index.twig", "/var/www/html/app/View/back/admin/category/index.twig");
    }
}
