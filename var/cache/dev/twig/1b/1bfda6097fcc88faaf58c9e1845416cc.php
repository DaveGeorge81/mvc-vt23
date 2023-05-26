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

/* books/all-books.html.twig */
class __TwigTemplate_e74259c1eba05ae21ce7b762069781d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/all-books.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/all-books.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "books/all-books.html.twig", 1);
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

        echo "All books";
        
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
        echo "<h1>All books in library<hr></h1>
";
        // line 7
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "
<div class=\"two-col-layout\">
    <aside class=\"aside\">
    <div class=\"cards\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        echo "\"><button>To landing page</button></a><hr>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_book");
        echo "\"><button>Add new book</button></a><hr>
</div>
    </aside>
<main class=\"main\">
<table>
<th>Cover:</th>
<th>Title:</th>
<th>Author:</th>
<th>ISBN:</th>
<th>Edit/Delete:</th>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 23
            echo "    <tr>
    <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 24)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/books/" . twig_get_attribute($this->env, $this->source, $context["book"], "getCover", [], "method", false, false, false, 24)) . ".png")), "html", null, true);
            echo "\" width=\"75px\"></a></td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getTitle", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getAuthor", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getIsbn", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
    <td><h2><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 28)]), "html", null, true);
            echo "\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a> / 
    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 29)]), "html", null, true);
            echo "\"> <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></h2></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table><hr>
</main>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "books/all-books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 32,  144 => 29,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  122 => 24,  119 => 23,  115 => 22,  102 => 12,  98 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}All books{% endblock %}

{% block body %}
<h1>All books in library<hr></h1>
{{ include('flash.html.twig') }}
<div class=\"two-col-layout\">
    <aside class=\"aside\">
    <div class=\"cards\">
        <a href=\"{{ path('library') }}\"><button>To landing page</button></a><hr>
    <a href=\"{{ path('add_book') }}\"><button>Add new book</button></a><hr>
</div>
    </aside>
<main class=\"main\">
<table>
<th>Cover:</th>
<th>Title:</th>
<th>Author:</th>
<th>ISBN:</th>
<th>Edit/Delete:</th>
{% for book in books %}
    <tr>
    <td><a href=\"{{ path('book_by_id', {'id' : book.getId()}) }}\"><img src=\"{{ asset('img/books/'~ book.getCover() ~'.png') }}\" width=\"75px\"></a></td>
    <td>{{ book.getTitle() }}</td>
    <td>{{ book.getAuthor() }}</td>
    <td>{{ book.getIsbn() }}</td>
    <td><h2><a href=\"{{ path('update_by_id', {'id' : book.getId()}) }}\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a> / 
    <a href=\"{{ path('delete_by_id', {'id' : book.getId()}) }}\"> <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></h2></td>
    </tr>
    {% endfor %}
</table><hr>
</main>
</div>
{% endblock %}", "books/all-books.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/books/all-books.html.twig");
    }
}
