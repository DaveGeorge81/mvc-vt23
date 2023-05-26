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

/* /proj/features.html.twig */
class __TwigTemplate_d45d177465209caa3b7feda0c4fd43ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/proj/features.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/proj/features.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "/proj/features.html.twig", 1);
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

        echo "Advanced Features";
        
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
        echo "    <h1>Advanced Features<hr></h1>
    <p>Jag har funderat över vad som varit de mest avancerade features i detta projekt och det var inte helt lätt att välja ut.
    Man kan ju tycka att jag tog en väldigt enkel väg med att bara bygga om mitt 21-spel till ett BlackJack, men det visade sig vara
    bra mycket mer jobb än vad jag föreställde mig. Mycket av tiden la jag på själva bettingsystemet. Jag ville att summan man har tillgänglig
    skulle fördelas över antalet händer man valt att spela med. Alltså om jag har 100kr och satsar 80kr i den första handen så ska nästa hands
    maximala insats vara 20kr. Det absolut enklaste hade ju varit att man gör sin insats en hand i taget och då minskar ens totalsumma. Men jag
    ville att det skulle ske samtidigt för att ge ett lite proffsigare intryck. Det krävdes lite hjälp av JavaScript, och lite testande fram och
    tillbaka samt lite guidning från intenet fick jag till ett ganska bra resultat som ändrar max-värdet beroende på värdet på de olika inputsen även
    innan man tryckt på submit.</p>

    <p>Att lägga scriptet rakt i twig-filen var dock inte helt optimalt, men det var enda sättet jag lyckades få in max-värdet då det hämtas från sessionen.</p>

    <p>En annan sak jag tänkte jag skulle implementera var kodräkning, men valde istället en light-variant av detta som visar hur stor procents chans man
    har att dra ett kort med värdet 10 eller högre. Lösningen bestod av en loop genom kortleken där varje kort med som har värde 10 eller högre läggs i en ny
    variabel. Sedan divideras den variabeln med antal kort i leken och mulitipliceras sedan med 100 för att få fram procentsatsen.</p>

    <p>När det gällde bankens intelligens så valde jag att följa de vanligaste BlackJack-reglerna. Banken måste spela upp till 17. Det löste jag genom en while-loop,
    så länge bankens hand har ett värde mindre än 17 måste den dra ett nytt kort. Detta var ett funktion jag redan implementerat i mitt 21-spel, så det var egentligen
    inget jag reflekterade över.</p>

    <p>Statistik är alltid trevligt så en annan sak jag valde att göra var att med hjälp av databasen föra statistik över olika spelares spelade rundor och hur
    mycket de vunnit. Jag förde även statiskt över banken, men här valde jag istället att hålla koll på hur många gånger banken vunnit, förlorat eller fått samma
    resultat som spelaren. Att jag valde att implementera detta som krav 5 var dels för att statistiken annars inte skulle sparas annat än i sessionen. Men samtidigt
    tyckte jag det var svårt att veta vad jag skulle använda databasen till annars i ett kortspel än just statistik.</p>


<img style=\"margin: auto; display: block\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/proj/joker.png"), "html", null, true);
        echo "\" width=\"600\" alt=\"joker cards\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/proj/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}Advanced Features{% endblock %}

{% block body %}
    <h1>Advanced Features<hr></h1>
    <p>Jag har funderat över vad som varit de mest avancerade features i detta projekt och det var inte helt lätt att välja ut.
    Man kan ju tycka att jag tog en väldigt enkel väg med att bara bygga om mitt 21-spel till ett BlackJack, men det visade sig vara
    bra mycket mer jobb än vad jag föreställde mig. Mycket av tiden la jag på själva bettingsystemet. Jag ville att summan man har tillgänglig
    skulle fördelas över antalet händer man valt att spela med. Alltså om jag har 100kr och satsar 80kr i den första handen så ska nästa hands
    maximala insats vara 20kr. Det absolut enklaste hade ju varit att man gör sin insats en hand i taget och då minskar ens totalsumma. Men jag
    ville att det skulle ske samtidigt för att ge ett lite proffsigare intryck. Det krävdes lite hjälp av JavaScript, och lite testande fram och
    tillbaka samt lite guidning från intenet fick jag till ett ganska bra resultat som ändrar max-värdet beroende på värdet på de olika inputsen även
    innan man tryckt på submit.</p>

    <p>Att lägga scriptet rakt i twig-filen var dock inte helt optimalt, men det var enda sättet jag lyckades få in max-värdet då det hämtas från sessionen.</p>

    <p>En annan sak jag tänkte jag skulle implementera var kodräkning, men valde istället en light-variant av detta som visar hur stor procents chans man
    har att dra ett kort med värdet 10 eller högre. Lösningen bestod av en loop genom kortleken där varje kort med som har värde 10 eller högre läggs i en ny
    variabel. Sedan divideras den variabeln med antal kort i leken och mulitipliceras sedan med 100 för att få fram procentsatsen.</p>

    <p>När det gällde bankens intelligens så valde jag att följa de vanligaste BlackJack-reglerna. Banken måste spela upp till 17. Det löste jag genom en while-loop,
    så länge bankens hand har ett värde mindre än 17 måste den dra ett nytt kort. Detta var ett funktion jag redan implementerat i mitt 21-spel, så det var egentligen
    inget jag reflekterade över.</p>

    <p>Statistik är alltid trevligt så en annan sak jag valde att göra var att med hjälp av databasen föra statistik över olika spelares spelade rundor och hur
    mycket de vunnit. Jag förde även statiskt över banken, men här valde jag istället att hålla koll på hur många gånger banken vunnit, förlorat eller fått samma
    resultat som spelaren. Att jag valde att implementera detta som krav 5 var dels för att statistiken annars inte skulle sparas annat än i sessionen. Men samtidigt
    tyckte jag det var svårt att veta vad jag skulle använda databasen till annars i ett kortspel än just statistik.</p>


<img style=\"margin: auto; display: block\" src=\"{{ asset('img/proj/joker.png') }}\" width=\"600\" alt=\"joker cards\">

{% endblock %}", "/proj/features.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/proj/features.html.twig");
    }
}
