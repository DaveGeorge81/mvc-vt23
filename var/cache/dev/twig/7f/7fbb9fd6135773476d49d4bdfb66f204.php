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

/* about.html.twig */
class __TwigTemplate_0b553117ac9abc5431418232ba9fa3cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 1);
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
        echo "<h1>About<hr></h1>
<div class=\"two-col-layout\">
    <aside class=\"aside\">
        <h4>Länkar:</h4>
        <li><a href=\"https://github.com/dbwebb-se/mvc\">MVC-kursens repo</a></li>
        <li><a href=\"https://github.com/DaveGeorge81/mvc-vt23.git\">Mitt repo</a></li>
    </aside>
    <main class=\"main\">
        <h2 style=\"text-align: center\">MVC</h2>
        <p>Den här kursen fokuserar på objektorienterade programmeringstekniker i språket PHP. Utöver klassiska
        objektorienterade konstruktioner kommer kursen även arbeta med objektorienterad programmering i ett webbbaserat
        ramverk där databasen har en central roll. Detta tillsammans med en blandning av HTML, CSS javascript och SQL.</p>

        <p>Tanken är att man efter kursens slut ska kunna skapa en fullgod webbaplikation byggd med hjälp av objektorienterad
        programmering och kunna hantera de verktyg och miljöer som används vid databasdrivna webbaplikationer i ett ramverk
        för webbutveckling </p>
        <img style=\"margin: auto; display: block\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about.png"), "html", null, true);
        echo "\" width=\"400\" alt=\"Php-code\">
</section>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}About{% endblock %}

{% block body %}
<h1>About<hr></h1>
<div class=\"two-col-layout\">
    <aside class=\"aside\">
        <h4>Länkar:</h4>
        <li><a href=\"https://github.com/dbwebb-se/mvc\">MVC-kursens repo</a></li>
        <li><a href=\"https://github.com/DaveGeorge81/mvc-vt23.git\">Mitt repo</a></li>
    </aside>
    <main class=\"main\">
        <h2 style=\"text-align: center\">MVC</h2>
        <p>Den här kursen fokuserar på objektorienterade programmeringstekniker i språket PHP. Utöver klassiska
        objektorienterade konstruktioner kommer kursen även arbeta med objektorienterad programmering i ett webbbaserat
        ramverk där databasen har en central roll. Detta tillsammans med en blandning av HTML, CSS javascript och SQL.</p>

        <p>Tanken är att man efter kursens slut ska kunna skapa en fullgod webbaplikation byggd med hjälp av objektorienterad
        programmering och kunna hantera de verktyg och miljöer som används vid databasdrivna webbaplikationer i ett ramverk
        för webbutveckling </p>
        <img style=\"margin: auto; display: block\" src=\"{{ asset('img/about.png') }}\" width=\"400\" alt=\"Php-code\">
</section>
        </main>
    </div>
{% endblock %}", "about.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/about.html.twig");
    }
}
