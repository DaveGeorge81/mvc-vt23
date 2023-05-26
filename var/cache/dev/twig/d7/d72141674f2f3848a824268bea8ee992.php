<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* books/new-book.html.twig */
class __TwigTemplate_e66c71938a0ea4c128cef3ba39fe7b9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/new-book.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/new-book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "books/new-book.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Add new book";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add new book<hr></h1>
    <div class=\"two-col-layout\">
    <aside class=\"aside\">
    <div class=\"cards\">
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        echo "\"><button>To landing page</button></a><hr>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books_show_all");
        echo "\"><button>Show all books</button></a><hr></div>
    </aside>
<main class=\"main\">
    <form method=\"post\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_create");
        echo "\">
    <fieldset>
    <legend>Enter title:</legend>
    <div><input type=\"text\" name=\"title\"></div></fieldset>
    <fieldset>
    <legend>Enter author:</legend>
    <input type=\"text\" name=\"author\"></fieldset>
    <fieldset>
    <legend>Enter ISBN:</legend>
    <input type=\"number\" name=\"isbn\"></fieldset>
    <fieldset>
    <legend>Enter name for cover picture (or go with stock-cover):</legend>
    <input type=\"text\" name=\"cover\" value=\"stock-cover\"></fieldset>
    <div class=\"cards\"><br><input type=\"submit\" name=\"do_it\" value=\"Add book\"></div>
    </form><hr>
</main>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "books/new-book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 14,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Add new book{% endblock %}

{% block body %}
    <h1>Add new book<hr></h1>
    <div class=\"two-col-layout\">
    <aside class=\"aside\">
    <div class=\"cards\">
    <a href=\"{{ path('library') }}\"><button>To landing page</button></a><hr>
    <a href=\"{{ path('books_show_all') }}\"><button>Show all books</button></a><hr></div>
    </aside>
<main class=\"main\">
    <form method=\"post\" action=\"{{ path('book_create') }}\">
    <fieldset>
    <legend>Enter title:</legend>
    <div><input type=\"text\" name=\"title\"></div></fieldset>
    <fieldset>
    <legend>Enter author:</legend>
    <input type=\"text\" name=\"author\"></fieldset>
    <fieldset>
    <legend>Enter ISBN:</legend>
    <input type=\"number\" name=\"isbn\"></fieldset>
    <fieldset>
    <legend>Enter name for cover picture (or go with stock-cover):</legend>
    <input type=\"text\" name=\"cover\" value=\"stock-cover\"></fieldset>
    <div class=\"cards\"><br><input type=\"submit\" name=\"do_it\" value=\"Add book\"></div>
    </form><hr>
</main>
</div>


{% endblock %}", "books/new-book.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/books/new-book.html.twig");
    }
}
