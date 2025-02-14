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

/* back/dashboardPropertiesAdmin/DashboardProperties.twig */
class __TwigTemplate_3f54dd40f6389df1d5aa74ae093e2c01 extends Template
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

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Property Owner Dashboard</title>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js\"></script>
\t\t<script src=\"https://cdn.tailwindcss.com\"></script>
\t\t<style>
\t\t\ttbody tr {
\t\t\t\ttransition: opacity 0.3s ease-in-out;
\t\t\t}
\t\t\t.scrollbar-hide::-webkit-scrollbar {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t.scrollbar-hide {
\t\t\t\t-ms-overflow-style: none;
\t\t\t\tscrollbar-width: none;
\t\t\t}
\t\t\t.overflow-x-auto::-webkit-scrollbar {
\t\t\t\theight: 8px;
\t\t\t}
\t\t\t.overflow-x-auto::-webkit-scrollbar-thumb {
\t\t\t\tbackground-color: #a0aec0;
\t\t\t\tborder-radius: 4px;
\t\t\t}
\t\t\t.overflow-x-auto::-webkit-scrollbar-thumb:hover {
\t\t\t\tbackground-color: #718096;
\t\t\t}
\t\t\t#imageModal .relative {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t}
\t\t\t#imageModal img {
\t\t\t\tmax-width: 70%;
\t\t\t\tmax-height: 70%;
\t\t\t}
\t\t\t#imageModal button {
\t\t\t\tbackground: transparent;
\t\t\t\tborder: none;
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t</style>
\t</head>

\t<body
\t\tclass=\"bg-gray-50\">
\t\t<!-- Sidebar -->
\t\t<div class=\"fixed left-0 top-0 w-64 h-full bg-white shadow-lg\">
\t\t\t<div class=\"p-4\">

\t\t\t\t<div class=\"flex items-center mb-8\">
\t\t\t\t\t<span class=\"ml-3 text-xl font-semibold text-gray-800\">AirHost Pro</span>
\t\t\t\t</div>

\t\t\t\t<nav>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 bg-red-50 text-red-600 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tDashboard
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tBookings
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tGuests
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tEarnings
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\"/>
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tSettings
\t\t\t\t\t</a>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main Content -->
\t\t<div
\t\t\tclass=\"ml-64 p-8\">
\t\t\t<!-- Header -->
\t\t\t<div class=\"flex justify-between items-center mb-8\">
\t\t\t\t<div>
\t\t\t\t\t<h1 class=\"text-2xl font-bold text-gray-800\">Welcome back, Sarah!</h1>
\t\t\t\t\t<p class=\"text-gray-600\">Here's what's happening with your properties today.</p>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Stats Grid -->
\t\t\t<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8\">

\t\t\t\t<div class=\"bg-white p-6 rounded-xl shadow-sm\">
\t\t\t\t\t<div class=\"flex items-center justify-between mb-4\">
\t\t\t\t\t\t<h3 class=\"text-2xl font-bold text-gray-800\">Total Properties</h3>
\t\t\t\t\t\t<span class=\"p-2 bg-green-100 rounded-lg\">
\t\t\t\t\t\t\t<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<p id=\"totalProperties\" class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dataStatic"] ?? null), "totalProperties", [], "any", false, false, false, 119), "total_properties", [], "any", false, false, false, 119), "html", null, true);
        yield "
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bg-white p-6 rounded-xl shadow-sm\">
\t\t\t\t\t<div class=\"flex items-center justify-between mb-4\">
\t\t\t\t\t\t<h3 class=\"text-2xl font-bold text-gray-800\">Available Properties</h3>
\t\t\t\t\t\t<span class=\"p-2 bg-blue-100 rounded-lg\">
\t\t\t\t\t\t\t<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<p id=\"availableProperties\" class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["dataStatic"] ?? null), "AvailabilityStats", [], "any", false, false, false, 133)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "available_properties", [], "any", false, false, false, 133), "html", null, true);
        yield "
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bg-white p-6 rounded-xl shadow-sm\">
\t\t\t\t\t<div class=\"flex items-center justify-between mb-4\">
\t\t\t\t\t\t<h3 class=\"text-2xl font-bold text-gray-800\">Average Price</h3>
\t\t\t\t\t\t<span class=\"p-2 bg-yellow-100 rounded-lg\">
\t\t\t\t\t\t\t<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<p id=\"averagePrice\" class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dataStatic"] ?? null), "AveragePrice", [], "any", false, false, false, 147), "avg_price", [], "any", false, false, false, 147), "html", null, true);
        yield "\$
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- table properties -->
\t\t\t<div class=\"container mx-auto bg-white shadow-md rounded-lg p-6\">
\t\t\t\t<h1 class=\"text-2xl font-bold mb-6\">Dashboard - Properties</h1>

\t\t\t\t<!-- Search Bar -->
\t\t\t\t<div class=\"mb-6\">
\t\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
\t\t\t\t</div>

\t\t\t\t<!-- Table -->
\t\t\t\t<div class=\"overflow-x-auto\">
\t\t\t\t\t<table class=\"min-w-full bg-white\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"bg-gray-200\">
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Title</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Price</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Photos</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Address
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Created At
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Validated
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Rating</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Owner Name
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Category
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Actions
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
            
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["properties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 187
            yield "\t\t\t\t\t\t\t<tr class=\"hover:bg-gray-50\">
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 188), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">\$";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "price", [], "any", false, false, false, 189), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">
\t\t\t\t\t\t\t\t\t<div class=\"flex space-x-2 overflow-x-auto overflow-y-hidden scrollbar-hide\">
\t\t\t\t\t\t\t\t\t\t";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "photos", [], "any", false, false, false, 192), "{}"), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 193
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["photo"], "html", null, true);
                yield "\" alt=\"Image\" class=\"w-12 h-12 cursor-pointer\" onclick=\"showImageModal(this.src)\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "address", [], "any", false, false, false, 197), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "createdAt", [], "any", false, false, false, 198), "Y-m-d"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">";
            // line 199
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["property"], "isValidated", [], "any", false, false, false, 199)) ? ("Yes") : ("No"));
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">
\t\t\t\t\t\t\t\t\t";
            // line 201
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["property"], "rating", [], "any", false, false, false, 201)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "rating", [], "any", false, false, false, 201), "html", null, true)) : (0));
            yield "/5
\t\t\t\t\t\t\t\t\t<svg class=\"inline-block w-4 h-4 text-yellow-500\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["property"], "owner", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["property"], "category", [], "any", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm\">
\t\t\t\t\t\t\t\t\t<form action=\"/property/delete\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"property_id\" value=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 210), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"bg-red-100 text-red-500 hover:bg-red-200 hover:text-red-700 ml-4 px-3 py-1 rounded\">Delete</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['property'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Image Modal -->
\t\t\t<div id=\"imageModal\" class=\"fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 hidden\">
\t\t\t\t<div class=\"relative\">
\t\t\t\t\t<img id=\"modalImage\" src=\"\" alt=\"Large Image\" class=\"max-w-full max-h-full\" style=\"width: 70%; height: 70%;\">
\t\t\t\t\t<button onclick=\"closeImageModal()\" class=\"absolute top-0 right-0 mt-2 mr-2 text-white\">
\t\t\t\t\t\t<svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script>
\t\t\t\tfunction showImageModal(imageSrc) {
document.getElementById('modalImage').src = imageSrc;
document.getElementById('imageModal').classList.remove('hidden');
}

function closeImageModal() {
document.getElementById('imageModal').classList.add('hidden');
}

document.getElementById('searchInput').addEventListener('input', function () {
const filter = this.value.toLowerCase();
const rows = document.querySelectorAll('tbody tr');

rows.forEach(row => {
const title = row.querySelector('td').textContent.toLowerCase();
if (title.includes(filter)) {
row.style.display = '';
row.style.opacity = '1';
} else {
row.style.display = 'none';
row.style.opacity = '0';
}
});
});
\t\t\t</script>

\t\t</div>

\t</body>

</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/dashboardPropertiesAdmin/DashboardProperties.twig";
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
        return array (  315 => 216,  303 => 210,  297 => 207,  293 => 206,  285 => 201,  280 => 199,  276 => 198,  272 => 197,  268 => 195,  259 => 193,  255 => 192,  249 => 189,  245 => 188,  242 => 187,  238 => 186,  196 => 147,  179 => 133,  162 => 119,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Property Owner Dashboard</title>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js\"></script>
\t\t<script src=\"https://cdn.tailwindcss.com\"></script>
\t\t<style>
\t\t\ttbody tr {
\t\t\t\ttransition: opacity 0.3s ease-in-out;
\t\t\t}
\t\t\t.scrollbar-hide::-webkit-scrollbar {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t.scrollbar-hide {
\t\t\t\t-ms-overflow-style: none;
\t\t\t\tscrollbar-width: none;
\t\t\t}
\t\t\t.overflow-x-auto::-webkit-scrollbar {
\t\t\t\theight: 8px;
\t\t\t}
\t\t\t.overflow-x-auto::-webkit-scrollbar-thumb {
\t\t\t\tbackground-color: #a0aec0;
\t\t\t\tborder-radius: 4px;
\t\t\t}
\t\t\t.overflow-x-auto::-webkit-scrollbar-thumb:hover {
\t\t\t\tbackground-color: #718096;
\t\t\t}
\t\t\t#imageModal .relative {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t}
\t\t\t#imageModal img {
\t\t\t\tmax-width: 70%;
\t\t\t\tmax-height: 70%;
\t\t\t}
\t\t\t#imageModal button {
\t\t\t\tbackground: transparent;
\t\t\t\tborder: none;
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t</style>
\t</head>

\t<body
\t\tclass=\"bg-gray-50\">
\t\t<!-- Sidebar -->
\t\t<div class=\"fixed left-0 top-0 w-64 h-full bg-white shadow-lg\">
\t\t\t<div class=\"p-4\">

\t\t\t\t<div class=\"flex items-center mb-8\">
\t\t\t\t\t<span class=\"ml-3 text-xl font-semibold text-gray-800\">AirHost Pro</span>
\t\t\t\t</div>

\t\t\t\t<nav>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 bg-red-50 text-red-600 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tDashboard
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tBookings
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tGuests
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tEarnings
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg\">
\t\t\t\t\t\t<svg class=\"w-5 h-5 mr-3\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\"/>
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tSettings
\t\t\t\t\t</a>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main Content -->
\t\t<div
\t\t\tclass=\"ml-64 p-8\">
\t\t\t<!-- Header -->
\t\t\t<div class=\"flex justify-between items-center mb-8\">
\t\t\t\t<div>
\t\t\t\t\t<h1 class=\"text-2xl font-bold text-gray-800\">Welcome back, Sarah!</h1>
\t\t\t\t\t<p class=\"text-gray-600\">Here's what's happening with your properties today.</p>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Stats Grid -->
\t\t\t<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8\">

\t\t\t\t<div class=\"bg-white p-6 rounded-xl shadow-sm\">
\t\t\t\t\t<div class=\"flex items-center justify-between mb-4\">
\t\t\t\t\t\t<h3 class=\"text-2xl font-bold text-gray-800\">Total Properties</h3>
\t\t\t\t\t\t<span class=\"p-2 bg-green-100 rounded-lg\">
\t\t\t\t\t\t\t<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<p id=\"totalProperties\" class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t{{ dataStatic.totalProperties.total_properties }}
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bg-white p-6 rounded-xl shadow-sm\">
\t\t\t\t\t<div class=\"flex items-center justify-between mb-4\">
\t\t\t\t\t\t<h3 class=\"text-2xl font-bold text-gray-800\">Available Properties</h3>
\t\t\t\t\t\t<span class=\"p-2 bg-blue-100 rounded-lg\">
\t\t\t\t\t\t\t<svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<p id=\"availableProperties\" class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t{{ dataStatic.AvailabilityStats[0].available_properties }}
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bg-white p-6 rounded-xl shadow-sm\">
\t\t\t\t\t<div class=\"flex items-center justify-between mb-4\">
\t\t\t\t\t\t<h3 class=\"text-2xl font-bold text-gray-800\">Average Price</h3>
\t\t\t\t\t\t<span class=\"p-2 bg-yellow-100 rounded-lg\">
\t\t\t\t\t\t\t<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<p id=\"averagePrice\" class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t{{ dataStatic.AveragePrice.avg_price }}\$
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- table properties -->
\t\t\t<div class=\"container mx-auto bg-white shadow-md rounded-lg p-6\">
\t\t\t\t<h1 class=\"text-2xl font-bold mb-6\">Dashboard - Properties</h1>

\t\t\t\t<!-- Search Bar -->
\t\t\t\t<div class=\"mb-6\">
\t\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
\t\t\t\t</div>

\t\t\t\t<!-- Table -->
\t\t\t\t<div class=\"overflow-x-auto\">
\t\t\t\t\t<table class=\"min-w-full bg-white\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"bg-gray-200\">
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Title</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Price</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Photos</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Address
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Created At
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Validated
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Rating</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Owner Name
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Category
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700\">Actions
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
            
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for property in properties %}
\t\t\t\t\t\t\t<tr class=\"hover:bg-gray-50\">
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">{{ property.title }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">\${{ property.price }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">
\t\t\t\t\t\t\t\t\t<div class=\"flex space-x-2 overflow-x-auto overflow-y-hidden scrollbar-hide\">
\t\t\t\t\t\t\t\t\t\t{% for photo in property.photos|trim('{}')|split(',') %}
                      <img src=\"{{ photo }}\" alt=\"Image\" class=\"w-12 h-12 cursor-pointer\" onclick=\"showImageModal(this.src)\">
                    {% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">{{ property.address }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">{{ property.createdAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">{{ property.isValidated ? 'Yes' : 'No' }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">
\t\t\t\t\t\t\t\t\t{{ property.rating ?: 0 }}/5
\t\t\t\t\t\t\t\t\t<svg class=\"inline-block w-4 h-4 text-yellow-500\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">{{ property.owner.name }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm text-gray-900\">{{ property.category.name }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-6 py-4 border-b border-gray-200 text-sm\">
\t\t\t\t\t\t\t\t\t<form action=\"/property/delete\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"property_id\" value=\"{{ property.id }}\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"bg-red-100 text-red-500 hover:bg-red-200 hover:text-red-700 ml-4 px-3 py-1 rounded\">Delete</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Image Modal -->
\t\t\t<div id=\"imageModal\" class=\"fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 hidden\">
\t\t\t\t<div class=\"relative\">
\t\t\t\t\t<img id=\"modalImage\" src=\"\" alt=\"Large Image\" class=\"max-w-full max-h-full\" style=\"width: 70%; height: 70%;\">
\t\t\t\t\t<button onclick=\"closeImageModal()\" class=\"absolute top-0 right-0 mt-2 mr-2 text-white\">
\t\t\t\t\t\t<svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script>
\t\t\t\tfunction showImageModal(imageSrc) {
document.getElementById('modalImage').src = imageSrc;
document.getElementById('imageModal').classList.remove('hidden');
}

function closeImageModal() {
document.getElementById('imageModal').classList.add('hidden');
}

document.getElementById('searchInput').addEventListener('input', function () {
const filter = this.value.toLowerCase();
const rows = document.querySelectorAll('tbody tr');

rows.forEach(row => {
const title = row.querySelector('td').textContent.toLowerCase();
if (title.includes(filter)) {
row.style.display = '';
row.style.opacity = '1';
} else {
row.style.display = 'none';
row.style.opacity = '0';
}
});
});
\t\t\t</script>

\t\t</div>

\t</body>

</html>
", "back/dashboardPropertiesAdmin/DashboardProperties.twig", "/var/www/html/app/View/back/dashboardPropertiesAdmin/DashboardProperties.twig");
    }
}
