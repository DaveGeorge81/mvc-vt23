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

/* books/delete-book.html.twig */
class __TwigTemplate_7ed2c07aa954bdbb41b04d9b7a73c91a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/delete-book.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/delete-book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "books/delete-book.html.twig", 1);
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

        echo "Delete book";
        
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
        echo "    <h1>Delete book<hr></h1>
    <div class=\"two-col-layout\">
    <aside class=\"aside\">
    <div class=\"cards\">
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        echo "\"><button>To landing page</button></a><hr>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_book");
        echo "\"><button>Add new book</button></a><hr>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books_show_all");
        echo "\"><button>Show all books</button></a><hr></div>
    </aside>
<main class=\"main\">
    <form method=\"post\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_delete");
        echo "\">
    <fieldset>
    <legend>Title:</legend>
    <div><input type=\"number\" name=\"id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 18, $this->source); })()), "getid", [], "method", false, false, false, 18), "html", null, true);
        echo "\" readonly hidden></div>
    <div><input type=\"text\" name=\"title\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 19, $this->source); })()), "getTitle", [], "method", false, false, false, 19), "html", null, true);
        echo "\" readonly></div></fieldset>
    <fieldset>
    <legend>Author:</legend>
    <input type=\"text\" name=\"author\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 22, $this->source); })()), "getAuthor", [], "method", false, false, false, 22), "html", null, true);
        echo "\" readonly></fieldset>
    <fieldset>
    <legend>ISBN:</legend>
    <input type=\"number\" name=\"isbn\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 25, $this->source); })()), "getIsbn", [], "method", false, false, false, 25), "html", null, true);
        echo "\" readonly></fieldset>
    <fieldset>
    <legend>Cover:</legend>
    <input type=\"text\" name=\"cover\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 28, $this->source); })()), "getCover", [], "method", false, false, false, 28), "html", null, true);
        echo "\" readonly></fieldset>
    <div class=\"cards\"><br><input type=\"submit\" name=\"do_it\" value=\"Delete book\"></div>
    </form><hr>
</main>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "books/delete-book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 28,  130 => 25,  124 => 22,  118 => 19,  114 => 18,  108 => 15,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Delete book{% endblock %}

{% block body %}
    <h1>Delete book<hr></h1>
    <div class=\"two-col-layout\">
    <aside class=\"aside\">
    <div class=\"cards\">
    <a href=\"{{ path('library') }}\"><button>To landing page</button></a><hr>
    <a href=\"{{ path('add_book') }}\"><button>Add new book</button></a><hr>
    <a href=\"{{ path('books_show_all') }}\"><button>Show all books</button></a><hr></div>
    </aside>
<main class=\"main\">
    <form method=\"post\" action=\"{{ path('book_delete') }}\">
    <fieldset>
    <legend>Title:</legend>
    <div><input type=\"number\" name=\"id\" value=\"{{ book.getid() }}\" readonly hidden></div>
    <div><input type=\"text\" name=\"title\" value=\"{{ book.getTitle() }}\" readonly></div></fieldset>
    <fieldset>
    <legend>Author:</legend>
    <input type=\"text\" name=\"author\" value=\"{{ book.getAuthor() }}\" readonly></fieldset>
    <fieldset>
    <legend>ISBN:</legend>
    <input type=\"number\" name=\"isbn\" value=\"{{ book.getIsbn() }}\" readonly></fieldset>
    <fieldset>
    <legend>Cover:</legend>
    <input type=\"text\" name=\"cover\" value=\"{{ book.getCover() }}\" readonly></fieldset>
    <div class=\"cards\"><br><input type=\"submit\" name=\"do_it\" value=\"Delete book\"></div>
    </form><hr>
</main>
</div>


{% endblock %}", "books/delete-book.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/books/delete-book.html.twig");
    }
}
