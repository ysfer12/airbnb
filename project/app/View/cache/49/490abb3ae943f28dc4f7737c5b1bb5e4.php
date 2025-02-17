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
        yield "    <div class=\"bg-white shadow-lg rounded-xl overflow-hidden\">
        <div class=\"px-6 py-8 sm:p-8\">
            <!-- Header with Add Button -->
            <div class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between\">
                <div class=\"flex-1\">
                    <h2 class=\"text-2xl font-bold text-gray-900\">
                        Property Categories
                    </h2>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Manage all property categories in your system.
                    </p>
                </div>
                <div class=\"mt-4 sm:mt-0 sm:ml-4\">
                    <button onclick='openAddModal()' class=\"inline-flex items-center justify-center rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-medium text-white transition-all hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                        <svg class=\"mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"></path>
                        </svg>
                        Add Category
                    </button>
                </div>
            </div>
            <!-- Categories Table -->
            <div class=\"mt-8 flow-root\">
                <div class=\"-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                    <div class=\"inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8\">
                        <div class=\"overflow-hidden rounded-lg border border-gray-200 shadow-sm\">
                            <table class=\"min-w-full divide-y divide-gray-200\">
                                <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6\">
                                            ID
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Name
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Description
                                        </th>
                                        <th scope=\"col\" class=\"relative py-3.5 pl-3 pr-4 sm:pr-6\">
                                            <span class=\"sr-only\">
                                                Actions
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-200 bg-white\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 56
            yield "                                        <tr class=\"transition-all hover:bg-gray-50\">
                                            <td class=\"whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6\">
                                                ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 58), "html", null, true);
            yield "
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-900\">
                                                ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61), "html", null, true);
            yield "
                                            </td>
                                            <td class=\"px-3 py-4 text-sm text-gray-500\">
                                                ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 64), "html", null, true);
            yield "
                                            </td>
                                            <td class=\"relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6\">
                                                <div class=\"flex items-center space-x-4\">
                                                    <button type=\"button\" onclick=\"openEditModal('";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 68), "html", null, true);
            yield "')\" class=\"text-indigo-600 hover:text-indigo-900 transition-all\">
                                                        <svg class=\"h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\"></path>
                                                        </svg>
                                                    </button>
                                                    <form method=\"POST\" action=\"/delete-category\" class=\"inline-block\">
                                                        <input type=\"hidden\" name=\"delete_category\" value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" />
                                                        <button type=\"submit\" class=\"text-red-600 hover:text-red-900 transition-all\">
                                                            <svg class=\"h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"></path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Category Modal -->
            <div id=\"editCategoryModal\" class=\"fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-900 bg-opacity-50\">
                <div class=\"bg-white rounded-lg shadow-xl w-full max-w-md p-6\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        Edit Category
                    </h2>
                    <form id=\"editCategoryForm\" method=\"POST\" action=\"/update-category\">
                        <input type=\"hidden\" name=\"category_id\" id=\"editCategoryId\">
                            <div class=\"mt-4\">
                                <label for=\"editCategoryName\" class=\"block text-sm font-medium text-gray-700\">
                                    Category Name
                                </label>
                                <input type=\"text\" name=\"name\" id=\"editCategoryName\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></div>
                                <div class=\"mt-4\">
                                    <label for=\"editCategoryDescription\" class=\"block text-sm font-medium text-gray-700\">
                                        Description
                                    </label>
                                    <textarea name=\"description\" id=\"editCategoryDescription\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></textarea>
                                </div>
                                <div class=\"mt-6 flex justify-end space-x-4\">
                                    <button type=\"button\" onclick=\"closeEditModal()\" class=\"px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300\">
                                        Cancel
                                    </button>
                                    <button type=\"submit\" class=\"px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700\">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Category Modal -->
            <div id=\"addCategoryModal\" class=\"fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-900 bg-opacity-50\">
                <div class=\"bg-white rounded-lg shadow-xl w-full max-w-md p-6\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        Add Category
                    </h2>
                    <form id=\"editCategoryForm\" method=\"POST\" action=\"/Add-category\">
                        <input type=\"hidden\" name=\"category_id\" id=\"editCategoryId\">
                            <div class=\"mt-4\">
                                <label for=\"addCategoryName\" class=\"block text-sm font-medium text-gray-700\">
                                    Category Name
                                </label>
                                <input type=\"text\" name=\"name\" id=\"addCategoryName\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></div>
                                <div class=\"mt-4\">
                                    <label for=\"addCategoryDescription\" class=\"block text-sm font-medium text-gray-700\">
                                        Description
                                    </label>
                                    <textarea name=\"description\" id=\"addCategoryDescription\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></textarea>
                                </div>
                                <div class=\"mt-6 flex justify-end space-x-4\">
                                    <button type=\"button\" onclick=\"closeAddModal()\" class=\"px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300\">
                                        Cancel
                                    </button>
                                    <button type=\"submit\" class=\"px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700\">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>

                function openEditModal(categoryId, categoryName, categoryDescription) {
                    document.getElementById('editCategoryId').value = categoryId;
                    document.getElementById('editCategoryName').value = categoryName;
                    document.getElementById('editCategoryDescription').value = categoryDescription;
                    document.getElementById('editCategoryModal').classList.remove('hidden');
                }
                
                function closeEditModal() {
                    document.getElementById('editCategoryModal').classList.add('hidden');
                }


                function openAddModal() {
                    document.getElementById('addCategoryModal').classList.remove('hidden');
                }

                function closeAddModal() {
                    document.getElementById('addCategoryModal').classList.add('hidden');
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
        return array (  191 => 85,  174 => 74,  161 => 68,  154 => 64,  148 => 61,  142 => 58,  138 => 56,  134 => 55,  86 => 9,  79 => 8,  73 => 6,  66 => 5,  60 => 3,  53 => 2,  42 => 1,);
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
    <div class=\"bg-white shadow-lg rounded-xl overflow-hidden\">
        <div class=\"px-6 py-8 sm:p-8\">
            <!-- Header with Add Button -->
            <div class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between\">
                <div class=\"flex-1\">
                    <h2 class=\"text-2xl font-bold text-gray-900\">
                        Property Categories
                    </h2>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Manage all property categories in your system.
                    </p>
                </div>
                <div class=\"mt-4 sm:mt-0 sm:ml-4\">
                    <button onclick='openAddModal()' class=\"inline-flex items-center justify-center rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-medium text-white transition-all hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                        <svg class=\"mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"></path>
                        </svg>
                        Add Category
                    </button>
                </div>
            </div>
            <!-- Categories Table -->
            <div class=\"mt-8 flow-root\">
                <div class=\"-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                    <div class=\"inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8\">
                        <div class=\"overflow-hidden rounded-lg border border-gray-200 shadow-sm\">
                            <table class=\"min-w-full divide-y divide-gray-200\">
                                <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6\">
                                            ID
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Name
                                        </th>
                                        <th scope=\"col\" class=\"px-3 py-3.5 text-left text-sm font-semibold text-gray-900\">
                                            Description
                                        </th>
                                        <th scope=\"col\" class=\"relative py-3.5 pl-3 pr-4 sm:pr-6\">
                                            <span class=\"sr-only\">
                                                Actions
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-200 bg-white\">
                                    {% for category in categories %}
                                        <tr class=\"transition-all hover:bg-gray-50\">
                                            <td class=\"whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6\">
                                                {{ category.id }}
                                            </td>
                                            <td class=\"whitespace-nowrap px-3 py-4 text-sm text-gray-900\">
                                                {{ category.name }}
                                            </td>
                                            <td class=\"px-3 py-4 text-sm text-gray-500\">
                                                {{ category.description }}
                                            </td>
                                            <td class=\"relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6\">
                                                <div class=\"flex items-center space-x-4\">
                                                    <button type=\"button\" onclick=\"openEditModal('{{ category.id }}', '{{ category.name }}', '{{ category.description }}')\" class=\"text-indigo-600 hover:text-indigo-900 transition-all\">
                                                        <svg class=\"h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\"></path>
                                                        </svg>
                                                    </button>
                                                    <form method=\"POST\" action=\"/delete-category\" class=\"inline-block\">
                                                        <input type=\"hidden\" name=\"delete_category\" value=\"{{ category.id }}\" />
                                                        <button type=\"submit\" class=\"text-red-600 hover:text-red-900 transition-all\">
                                                            <svg class=\"h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"></path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Category Modal -->
            <div id=\"editCategoryModal\" class=\"fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-900 bg-opacity-50\">
                <div class=\"bg-white rounded-lg shadow-xl w-full max-w-md p-6\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        Edit Category
                    </h2>
                    <form id=\"editCategoryForm\" method=\"POST\" action=\"/update-category\">
                        <input type=\"hidden\" name=\"category_id\" id=\"editCategoryId\">
                            <div class=\"mt-4\">
                                <label for=\"editCategoryName\" class=\"block text-sm font-medium text-gray-700\">
                                    Category Name
                                </label>
                                <input type=\"text\" name=\"name\" id=\"editCategoryName\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></div>
                                <div class=\"mt-4\">
                                    <label for=\"editCategoryDescription\" class=\"block text-sm font-medium text-gray-700\">
                                        Description
                                    </label>
                                    <textarea name=\"description\" id=\"editCategoryDescription\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></textarea>
                                </div>
                                <div class=\"mt-6 flex justify-end space-x-4\">
                                    <button type=\"button\" onclick=\"closeEditModal()\" class=\"px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300\">
                                        Cancel
                                    </button>
                                    <button type=\"submit\" class=\"px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700\">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Category Modal -->
            <div id=\"addCategoryModal\" class=\"fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-900 bg-opacity-50\">
                <div class=\"bg-white rounded-lg shadow-xl w-full max-w-md p-6\">
                    <h2 class=\"text-xl font-semibold text-gray-900\">
                        Add Category
                    </h2>
                    <form id=\"editCategoryForm\" method=\"POST\" action=\"/Add-category\">
                        <input type=\"hidden\" name=\"category_id\" id=\"editCategoryId\">
                            <div class=\"mt-4\">
                                <label for=\"addCategoryName\" class=\"block text-sm font-medium text-gray-700\">
                                    Category Name
                                </label>
                                <input type=\"text\" name=\"name\" id=\"addCategoryName\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></div>
                                <div class=\"mt-4\">
                                    <label for=\"addCategoryDescription\" class=\"block text-sm font-medium text-gray-700\">
                                        Description
                                    </label>
                                    <textarea name=\"description\" id=\"addCategoryDescription\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500\"></textarea>
                                </div>
                                <div class=\"mt-6 flex justify-end space-x-4\">
                                    <button type=\"button\" onclick=\"closeAddModal()\" class=\"px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300\">
                                        Cancel
                                    </button>
                                    <button type=\"submit\" class=\"px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700\">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>

                function openEditModal(categoryId, categoryName, categoryDescription) {
                    document.getElementById('editCategoryId').value = categoryId;
                    document.getElementById('editCategoryName').value = categoryName;
                    document.getElementById('editCategoryDescription').value = categoryDescription;
                    document.getElementById('editCategoryModal').classList.remove('hidden');
                }
                
                function closeEditModal() {
                    document.getElementById('editCategoryModal').classList.add('hidden');
                }


                function openAddModal() {
                    document.getElementById('addCategoryModal').classList.remove('hidden');
                }

                function closeAddModal() {
                    document.getElementById('addCategoryModal').classList.add('hidden');
                } 
    </script>
        {% endblock %}
        ", "back/admin/category/index.twig", "/var/www/html/app/View/back/admin/category/index.twig");
    }
}
