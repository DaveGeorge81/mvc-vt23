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

/* db/update-db.html.twig */
class __TwigTemplate_80c4ad421a7a684b08534f4163b2d38a extends Template
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
        return "/proj/projbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "db/update-db.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "db/update-db.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "db/update-db.html.twig", 1);
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

        echo "Update database";
        
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
        echo "    <h1>Update database<hr></h1>
<main class=\"main\">
    <form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("db_update");
        echo "\">
    <div><input type=\"number\" name=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dealer"]) || array_key_exists("dealer", $context) ? $context["dealer"] : (function () { throw new RuntimeError('Variable "dealer" does not exist.', 9, $this->source); })()), "getid", [], "method", false, false, false, 9), "html", null, true);
        echo "\" readonly hidden></div>

    <div><input type=\"number\" name=\"played\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 11, $this->source); })()), "getHandsPlayed", [], "method", false, false, false, 11), "html", null, true);
        echo "\" readonly hidden></div>

    <input type=\"number\" name=\"won\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 13, $this->source); })()), "getHandsWon", [], "method", false, false, false, 13), "html", null, true);
        echo "\" readonly hidden>

    <input type=\"number\" name=\"lost\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 15, $this->source); })()), "getHandsLost", [], "method", false, false, false, 15), "html", null, true);
        echo "\" readonly hidden>

    <input type=\"number\" name=\"push\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 17, $this->source); })()), "getHandsPush", [], "method", false, false, false, 17), "html", null, true);
        echo "\" readonly hidden>

    <div><input type=\"text\" name=\"name\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" readonly hidden></div>

    <input type=\"number\" name=\"money\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 21, $this->source); })()), "getMoney", [], "method", false, false, false, 21), "html", null, true);
        echo "\" readonly hidden>

    <input type=\"number\" name=\"rounds\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" readonly hidden>

    <div class=\"cards\"><br><input type=\"submit\" class=\"btn\" name=\"do_it\" value=\"Update Database\"></div>
    </form><hr>
</main>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "db/update-db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 23,  126 => 21,  121 => 19,  116 => 17,  111 => 15,  106 => 13,  101 => 11,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}Update database{% endblock %}

{% block body %}
    <h1>Update database<hr></h1>
<main class=\"main\">
    <form method=\"post\" action=\"{{ path('db_update') }}\">
    <div><input type=\"number\" name=\"id\" value=\"{{ dealer.getid() }}\" readonly hidden></div>

    <div><input type=\"number\" name=\"played\" value=\"{{ db_dealer.getHandsPlayed() }}\" readonly hidden></div>

    <input type=\"number\" name=\"won\" value=\"{{ db_dealer.getHandsWon() }}\" readonly hidden>

    <input type=\"number\" name=\"lost\" value=\"{{ db_dealer.getHandsLost() }}\" readonly hidden>

    <input type=\"number\" name=\"push\" value=\"{{ db_dealer.getHandsPush() }}\" readonly hidden>

    <div><input type=\"text\" name=\"name\" value=\"{{ name }}\" readonly hidden></div>

    <input type=\"number\" name=\"money\" value=\"{{ player.getMoney() }}\" readonly hidden>

    <input type=\"number\" name=\"rounds\" value=\"{{ games }}\" readonly hidden>

    <div class=\"cards\"><br><input type=\"submit\" class=\"btn\" name=\"do_it\" value=\"Update Database\"></div>
    </form><hr>
</main>
</div>


{% endblock %}", "db/update-db.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/db/update-db.html.twig");
    }
}
