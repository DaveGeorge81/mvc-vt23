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

/* proj/about.html.twig */
class __TwigTemplate_39bcc7de7a9ce058fdcd8740b67e933a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "proj/about.html.twig", 1);
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

        echo "About";
        
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
        echo "    <h1>About<hr></h1>

<p>Det här projektet bygger på det välkända kortspelet BlackJack. Det är en vidareutveckling av kortspelet 21 jag
gjort tidigare under kursen. Den största förändringen här är förutom ändrade regler även att man har möjlighet att spela
med upp till tre givar samtidigt mot banken. Jag har också valt att spara spelarens resultat i en databas. I databasen
lagras även statistik om banken, t ex hur många givar den spelat totalt och hur många av dessa den vunnit respektive förlorat.</p>

<p>Projektet är byggt med hjälp av Symfony och databasen med Symfonys Doctrine via ORM och SQLite. Hoppas att ni ska tycka sidan är lika rolig
att använda som jag tyckte det var att göra den.</p>

<h4>Krav 5</h4>
Min dokumentation om databasen (krav 5) hittar du <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proj_database");
        echo "\">här</a>.

<h4>Krav 6</h4>
Min dokumentation om Advanced Features (krav 6) hittar du <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proj_features");
        echo "\">här</a>.

<img style=\"margin: auto; display: block\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/proj/joker.png"), "html", null, true);
        echo "\" width=\"600\" alt=\"joker cards\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  107 => 20,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}About{% endblock %}

{% block body %}
    <h1>About<hr></h1>

<p>Det här projektet bygger på det välkända kortspelet BlackJack. Det är en vidareutveckling av kortspelet 21 jag
gjort tidigare under kursen. Den största förändringen här är förutom ändrade regler även att man har möjlighet att spela
med upp till tre givar samtidigt mot banken. Jag har också valt att spara spelarens resultat i en databas. I databasen
lagras även statistik om banken, t ex hur många givar den spelat totalt och hur många av dessa den vunnit respektive förlorat.</p>

<p>Projektet är byggt med hjälp av Symfony och databasen med Symfonys Doctrine via ORM och SQLite. Hoppas att ni ska tycka sidan är lika rolig
att använda som jag tyckte det var att göra den.</p>

<h4>Krav 5</h4>
Min dokumentation om databasen (krav 5) hittar du <a href=\"{{ path('proj_database') }}\">här</a>.

<h4>Krav 6</h4>
Min dokumentation om Advanced Features (krav 6) hittar du <a href=\"{{ path('proj_features') }}\">här</a>.

<img style=\"margin: auto; display: block\" src=\"{{ asset('img/proj/joker.png') }}\" width=\"600\" alt=\"joker cards\">

{% endblock %}", "proj/about.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/proj/about.html.twig");
    }
}
