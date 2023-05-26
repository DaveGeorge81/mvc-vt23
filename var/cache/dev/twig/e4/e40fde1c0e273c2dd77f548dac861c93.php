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

/* doc.html.twig */
class __TwigTemplate_cef1b0305657422e876e4db0494ccbc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "doc.html.twig", 1);
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

        echo "Game";
        
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
        echo "<h1>Dokumentation<hr></h1>
<h2>Flödesschema:</h2>
<p>Ett enkelt flödesschema som visar hur spelet går till i stora drag.</p>
    <div class=\"cards\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flowchart21.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flowchart21.png"), "html", null, true);
        echo "\" width=\"400px\" alt=\"flowchart\"></a><hr></div>

<h2>Psuedokod:</h2>
<p> Jag valde här att visa hur det går till när det är datorn tur att dra kort.</p>
    <div class=\"cards\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/psuedo.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/psuedo.png"), "html", null, true);
        echo "\" width=\"600px\" alt=\"psuedo code\"></a><hr></div>

<h2>Klasser:</h2>
<p>Jag valde främst att jobba efter de kortklasser jag tidigare skapat när jag programmerade kortspelet, så här kommer en kort sammanfattning.</p>

<p>Card: Klassen för alla spelkort. Jag la här till metoden getName för att plocka vad för typ av kort det var och inte bara kortets värde. Detta kom
sen till använding i en metod jag skapade i CardHand-klassen.</p>

<p>Cardgraphic: Visar korten som bilder, ärver av Card-klassen. </p>

<p>CardHand: Här läggs de kort spelaren har dragit ur leken. För att Ess skulle kunna ha både värde 1 och 14 skapade jag metoden Points som minskar
handens värde med 13 för varje Ess spelaren har sålänge handens totala värde överstiger 21. Skapde även metoden getNames som visar typen för alla kort i handen.</p>

<p>DeckOfCards: Själva kortleken. Det enda jag ändrade här var att lägga till medtoden hit för att dra kort som inte blandar leken efter varje dragning.</p>

<p>Player: Denna klassen skapade jag i samband med att jag implementerade förmågan att satsa pengar inför varje omgång. Den innehåller bara attributet money
och metoderna för att visa hur mycket pengar spelaren har samt metoder för att lägga till och ta bort pengar. Skapades främst för att kunna utvecklas mer i framtiden.</p><hr>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Game{% endblock %}

{% block body %}
<h1>Dokumentation<hr></h1>
<h2>Flödesschema:</h2>
<p>Ett enkelt flödesschema som visar hur spelet går till i stora drag.</p>
    <div class=\"cards\"><a href=\"{{ asset('img/flowchart21.png') }}\"><img src=\"{{ asset('img/flowchart21.png') }}\" width=\"400px\" alt=\"flowchart\"></a><hr></div>

<h2>Psuedokod:</h2>
<p> Jag valde här att visa hur det går till när det är datorn tur att dra kort.</p>
    <div class=\"cards\"><a href=\"{{ asset('img/psuedo.png') }}\"><img src=\"{{ asset('img/psuedo.png') }}\" width=\"600px\" alt=\"psuedo code\"></a><hr></div>

<h2>Klasser:</h2>
<p>Jag valde främst att jobba efter de kortklasser jag tidigare skapat när jag programmerade kortspelet, så här kommer en kort sammanfattning.</p>

<p>Card: Klassen för alla spelkort. Jag la här till metoden getName för att plocka vad för typ av kort det var och inte bara kortets värde. Detta kom
sen till använding i en metod jag skapade i CardHand-klassen.</p>

<p>Cardgraphic: Visar korten som bilder, ärver av Card-klassen. </p>

<p>CardHand: Här läggs de kort spelaren har dragit ur leken. För att Ess skulle kunna ha både värde 1 och 14 skapade jag metoden Points som minskar
handens värde med 13 för varje Ess spelaren har sålänge handens totala värde överstiger 21. Skapde även metoden getNames som visar typen för alla kort i handen.</p>

<p>DeckOfCards: Själva kortleken. Det enda jag ändrade här var att lägga till medtoden hit för att dra kort som inte blandar leken efter varje dragning.</p>

<p>Player: Denna klassen skapade jag i samband med att jag implementerade förmågan att satsa pengar inför varje omgång. Den innehåller bara attributet money
och metoderna för att visa hur mycket pengar spelaren har samt metoder för att lägga till och ta bort pengar. Skapades främst för att kunna utvecklas mer i framtiden.</p><hr>




{% endblock %}", "doc.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/doc.html.twig");
    }
}
