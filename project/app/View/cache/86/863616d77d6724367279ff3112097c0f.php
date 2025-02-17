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

/* back/admin/user/index.twig */
class __TwigTemplate_4b219e684e436622ef1c60cf3666e716 extends Template
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
        $this->parent = $this->loadTemplate("back/admin/layouts/base.twig", "back/admin/user/index.twig", 1);
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
        yield "    Users - AirBnB Admin
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
        yield "    Users
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
            <div class=\"sm:flex sm:items-center\">
                <div class=\"sm:flex-auto\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        All Users
                    </h2>
                    <p class=\"mt-2 text-sm text-gray-700\">
                        A list of all users in your system including their name, email and management options.
                    </p>
                </div>
            </div>
            <div class=\"mt-8 flex flex-col\">
                <div class=\"-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                    <div class=\"inline-block min-w-full py-2 align-middle md:px-6 lg:px-8\">
                        <div class=\"overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg\">
                            <table class=\"min-w-full divide-y divide-gray-300\">
                                <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6\">
                                            ID
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Name
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Email
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            phone
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            user role
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-200 bg-white\">
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 50
            yield "                                        <tr>
                                            <td class=\"whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-900 sm:pl-6\">
                                                ";
            // line 52
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52), "html", null, true)) : ("ID non disponible"));
            yield "
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4\">
                                                <div class=\"flex items-center\">
                                                    <div class=\"h-10 w-10 flex-shrink-0\">
                                                        <img class=\"h-10 w-10 rounded-full\" src=\"https://ui-avatars.com/api/?name=";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 57), "html", null, true);
            yield "\" alt=\"\">
                                                    </div>
                                                    <div class=\"ml-4\">
                                                        <div class=\"font-medium text-gray-900\">
                                                            ";
            // line 61
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 61)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 61), "html", null, true)) : ("name non disponible"));
            yield "
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                                ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 67), "html", null, true);
            yield "
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                                ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 70), "html", null, true);
            yield "
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                                ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 73), "html", null, true);
            yield "
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm\">
                                                ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "user_isActive", [], "any", false, false, false, 76)) {
                // line 77
                yield "                                                    <span class=\"inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800\">
                                                        Active
                                                    </span>
                                                ";
            } else {
                // line 81
                yield "                                                    <div class=\"flex items-center gap-2\">
                                                        <span class=\"inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800\">
                                                            Inactive
                                                        </span>
                                                        <button onclick=\"activateUser(";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 85), "html", null, true);
                yield ")\" 
                                                                class=\"text-indigo-600 hover:text-indigo-900 text-xs font-medium\">
                                                            Activate Account
                                                        </button>
                                                    </div>
                                                ";
            }
            // line 91
            yield "                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination section remains the same -->
        <div class=\"bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6\">
            <!-- Your existing pagination code -->
        </div>
    </div>

    <script>
    function activateUser(userId) {
        if(!userId) return;
        
        if(confirm('Are you sure you want to activate this user?')) {
            fetch(`/admin/users/\${userId}/activate`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    window.location.reload();
                } else {
                    alert('Failed to activate user');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while activating user');
            });
        }
    }
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/admin/user/index.twig";
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
        return array (  209 => 94,  201 => 91,  192 => 85,  186 => 81,  180 => 77,  178 => 76,  172 => 73,  166 => 70,  160 => 67,  151 => 61,  144 => 57,  136 => 52,  132 => 50,  128 => 49,  86 => 9,  79 => 8,  73 => 6,  66 => 5,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"back/admin/layouts/base.twig\" %}
{% block title %}
    Users - AirBnB Admin
{% endblock %}
{% block header %}
    Users
{% endblock %}
{% block content %}
    <div class=\"bg-white shadow rounded-lg\">
        <div class=\"px-4 py-5 sm:p-6\">
            <div class=\"sm:flex sm:items-center\">
                <div class=\"sm:flex-auto\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        All Users
                    </h2>
                    <p class=\"mt-2 text-sm text-gray-700\">
                        A list of all users in your system including their name, email and management options.
                    </p>
                </div>
            </div>
            <div class=\"mt-8 flex flex-col\">
                <div class=\"-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                    <div class=\"inline-block min-w-full py-2 align-middle md:px-6 lg:px-8\">
                        <div class=\"overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg\">
                            <table class=\"min-w-full divide-y divide-gray-300\">
                                <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6\">
                                            ID
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Name
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Email
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            phone
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            user role
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-200 bg-white\">
                                    {% for user in users %}
                                        <tr>
                                            <td class=\"whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-900 sm:pl-6\">
                                                {{ user.id ?? 'ID non disponible' }}
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4\">
                                                <div class=\"flex items-center\">
                                                    <div class=\"h-10 w-10 flex-shrink-0\">
                                                        <img class=\"h-10 w-10 rounded-full\" src=\"https://ui-avatars.com/api/?name={{ user.name }}\" alt=\"\">
                                                    </div>
                                                    <div class=\"ml-4\">
                                                        <div class=\"font-medium text-gray-900\">
                                                            {{ user.name ?? 'name non disponible' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                                {{ user.email }}
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                                {{ user.phone }}
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-500\">
                                                {{ user.role }}
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm\">
                                                {% if user.user_isActive %}
                                                    <span class=\"inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800\">
                                                        Active
                                                    </span>
                                                {% else %}
                                                    <div class=\"flex items-center gap-2\">
                                                        <span class=\"inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800\">
                                                            Inactive
                                                        </span>
                                                        <button onclick=\"activateUser({{ user.user_id }})\" 
                                                                class=\"text-indigo-600 hover:text-indigo-900 text-xs font-medium\">
                                                            Activate Account
                                                        </button>
                                                    </div>
                                                {% endif %}
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
        <!-- Pagination section remains the same -->
        <div class=\"bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6\">
            <!-- Your existing pagination code -->
        </div>
    </div>

    <script>
    function activateUser(userId) {
        if(!userId) return;
        
        if(confirm('Are you sure you want to activate this user?')) {
            fetch(`/admin/users/\${userId}/activate`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    window.location.reload();
                } else {
                    alert('Failed to activate user');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while activating user');
            });
        }
    }
    </script>
{% endblock %}", "back/admin/user/index.twig", "/var/www/html/app/View/back/admin/user/index.twig");
    }
}
