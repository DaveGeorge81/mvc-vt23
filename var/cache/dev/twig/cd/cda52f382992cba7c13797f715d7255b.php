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

/* card.html.twig */
class __TwigTemplate_4f3bd675eb58afbb1eb1048d6c823dc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card.html.twig", 1);
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

        echo "Card";
        
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
        echo "<h1> Card Game<hr></h1>
<p> Klicka på någon av knapparna för följande:
    <div class=\"cards\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        echo "\"><button>Show sorted deck</button></a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        echo "\"><button>Shuffle deck</button></a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        echo "\"><button>Draw a single card</button></a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_many", ["num" => 5]);
        echo "\"><button>Draw mulitple (5) cards</button></a></div>

    <h2>Klasser och UML:<hr></h2>
    <div class=\"cards\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cardgame.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cardgame.png"), "html", null, true);
        echo "\" width=\"250px\" alt=\"UML-schema\"></a></div>
    <p>Klassen Card representerar ett spelkort. Det har properties för färg, valör/namn, om det är rött eller svart samt vilket
    nummer kortet har i leken när det är sorterat efter valör och färg. Jag har två metoder förutom konstruktorn, getValue hämtar kortets värde (2-14) och
    getAsString hämtar färg och valör.</p>

    <p>CardGraphic använder sig av arv från Card och används för att visa bilder på de olika korten. En array kallad \"representation\" har namnen på de olika kortens
    bilder, vilket kopplas samman med kortens nummer från card-klassen.</p> 

    <p>CardHand är en klass som består av ett antal kort dragna från leken. Den har ingen konstruktor utan man lägger till kort till handen med hjälp av metoden \"add\".
    Även här har vi metoder för att visa kortets värde (2-14). I denna ger getAsString en referens till kortets bild och getAsStringJson används för att skriva ut färg
    och valör, vilket passar bra till API-delen.</p>

    <p>DeckOfCards är klassen för själva kortleken. Den har en rad arrayer som properties med de olika valörer och färger som finns tillgängliga.
    Konstruktorn består av en nästlad foreach-loop som först loopar färgerna och skapar kort av varje valör för varje färg. Metoderna jag använder i klassen
    är utöver de som återfinns i cardHand även getNumberCards som räknar hur många kort leken har, shuffleDeck som sorterar leken, removeCard som tar bort ett kort,
    drawSingle som drar ett slumpässigt kort och slutligen en metod för att sortera leken efter färg och valör.</p>






";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 14,  104 => 11,  100 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card{% endblock %}

{% block body %}
<h1> Card Game<hr></h1>
<p> Klicka på någon av knapparna för följande:
    <div class=\"cards\"><a href=\"{{ path('deck') }}\"><button>Show sorted deck</button></a>
    <a href=\"{{ path('shuffle') }}\"><button>Shuffle deck</button></a>
    <a href=\"{{ path('draw') }}\"><button>Draw a single card</button></a>
    <a href=\"{{ path('draw_many', {num: 5}) }}\"><button>Draw mulitple (5) cards</button></a></div>

    <h2>Klasser och UML:<hr></h2>
    <div class=\"cards\"><a href=\"{{ asset('img/cardgame.png') }}\"><img src=\"{{ asset('img/cardgame.png') }}\" width=\"250px\" alt=\"UML-schema\"></a></div>
    <p>Klassen Card representerar ett spelkort. Det har properties för färg, valör/namn, om det är rött eller svart samt vilket
    nummer kortet har i leken när det är sorterat efter valör och färg. Jag har två metoder förutom konstruktorn, getValue hämtar kortets värde (2-14) och
    getAsString hämtar färg och valör.</p>

    <p>CardGraphic använder sig av arv från Card och används för att visa bilder på de olika korten. En array kallad \"representation\" har namnen på de olika kortens
    bilder, vilket kopplas samman med kortens nummer från card-klassen.</p> 

    <p>CardHand är en klass som består av ett antal kort dragna från leken. Den har ingen konstruktor utan man lägger till kort till handen med hjälp av metoden \"add\".
    Även här har vi metoder för att visa kortets värde (2-14). I denna ger getAsString en referens till kortets bild och getAsStringJson används för att skriva ut färg
    och valör, vilket passar bra till API-delen.</p>

    <p>DeckOfCards är klassen för själva kortleken. Den har en rad arrayer som properties med de olika valörer och färger som finns tillgängliga.
    Konstruktorn består av en nästlad foreach-loop som först loopar färgerna och skapar kort av varje valör för varje färg. Metoderna jag använder i klassen
    är utöver de som återfinns i cardHand även getNumberCards som räknar hur många kort leken har, shuffleDeck som sorterar leken, removeCard som tar bort ett kort,
    drawSingle som drar ett slumpässigt kort och slutligen en metod för att sortera leken efter färg och valör.</p>






{% endblock %}", "card.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/card.html.twig");
    }
}
