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

/* report.html.twig */
class __TwigTemplate_650b070136375238094c0adee138600b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
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

        echo "Report";
        
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
        echo "<h1>Redovisningstexter<hr></h1>
<div class=\"two-col-layout\">
    <aside class=\"aside\">
        <h4>Innehåll:</h4>
    <ul>
        <li><a href=\"#kmom01\">kmom01</a></li>
        <li><a href=\"#kmom02\">kmom02</a></li>
        <li><a href=\"#kmom03\">kmom03</a></li>
        <li><a href=\"#kmom04\">kmom04</a></li>
        <li><a href=\"#kmom05\">kmom05</a></li>
        <li><a href=\"#kmom06\">kmom06</a></li>
        <li><a href=\"#kmom10\">kmom10</a></li>
    </ul>
    </aside>
    <main class=\"main\">
        <section><h2 id=\"kmom01\">kmom01</h2>
        <p>Första veckan i kursen Objektorienterade webbteknoligier, eller som den även förkortas till; mvc. Mina förkunskaper gällande objektoriernterad programmering
        är relativt begränsade. Jag läste oopython-kursen tidigare i vår, och det var i början ganska krångligt att greppa. Men känner ändå att jag fick rätsida på
        det under kursens gång. Det är ett litet annat tankesätt när man jobbar obejktorienterat, men tror ändå att jag har kommit att föredra det.</p>

        <p>I PHP räcker det inte med att bara skapa klasser, man måste även skapa ett så kallat namespace. Man kan se namespace som en mapp eller katalog vari koden körs. Detta 
        för att klassnamnen inte ska krocka med andra klasser. Detta är något jag inte kände igen från oopython-kursen, men verkar hittills inte krångligare än att man anger sitt
        namespace i början i sina controller-filer. I detta första kursmoment uppelver jag inte att vi mer än skrapat på ytan då de klasser vi skapat i princip enbart består av routes
        till de olika sidorna vi skapat. Men antar att vi kommer gå djupare med att skapa objekt i våra klasser i framtida kursmoment.</p>

        <p>Den struktur som vi byggt upp med hjälp av Symfony påminner en del om express som vi använde i databaskursen, men jag kan även se vissa likheter med flask som vi använde i 
        oopython. Det är alltid lite rörigt i början när man inte är helt van vid kodstrukturen, men det ska nog inte vara några problem att använda detta. En del av kraven var dock lite
        kluriga att få till. Var tvungen att gå tillbaka och titta på en och två gånger hur jag gjort i webtec-kursen i höstas. Man glömmer ganska snabbt när man inte använder något, och 
        PHP har jag knappt använt sedan dess. Men samtidigt är inte startsträckan särskilt lång när väl börjar tänka tillbaka på vad man lärt sig tidigare. </p>

        <p>Artikeln \"PHP The Right Way\" var ganska överväldigande och handen på hjärtat läste jag inte igenom den rad för rad. Något jag fann intressant var varför vi använder templates,
        det är inte första gången vi arbetar med detta och har väl egentligen aldrig reflekterat över varför vi faktiskt gör det. Jag fick här en ganska bra förklaring att det underlättar
        att separera koden och det som presenteras på webbsidan då det blir mer överskådlig, inte minst om man jobbar i team och en sitter med koden på serversidan och en annan med designen
        på klientsidan. Jag fick även lite mer kött på benen gällande det här med namespace, som jag bekrev ovan.</p>

        <p>Veckans TIL har precis som alltid vid kursuppstart varit en hel del. Men det jag nog känner mest för är att jag ökat min förståelse för GIT. Vi använde det i design-kursen i höstas,
        men jag kände mig väldigt osäker varenda vecka på hur jag skulle göra, och den skrivna guiden var ganska rörig att leta sig igenom vecka efter vecka. Mikales git-guide på youtube var
        väldigt mycket enklare att ta till sig och jag känner mig betydligt säkrare på git efter att ha sett den.</p>


        <hr>
        <h2 id=\"kmom02\">kmom02</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        
        <hr>
        <h2 id=\"kmom03\">kmom03</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom04\">kmom04</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom05\">kmom05</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom06\">kmom06</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom10\">kmom10</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <hr></section>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block body %}
<h1>Redovisningstexter<hr></h1>
<div class=\"two-col-layout\">
    <aside class=\"aside\">
        <h4>Innehåll:</h4>
    <ul>
        <li><a href=\"#kmom01\">kmom01</a></li>
        <li><a href=\"#kmom02\">kmom02</a></li>
        <li><a href=\"#kmom03\">kmom03</a></li>
        <li><a href=\"#kmom04\">kmom04</a></li>
        <li><a href=\"#kmom05\">kmom05</a></li>
        <li><a href=\"#kmom06\">kmom06</a></li>
        <li><a href=\"#kmom10\">kmom10</a></li>
    </ul>
    </aside>
    <main class=\"main\">
        <section><h2 id=\"kmom01\">kmom01</h2>
        <p>Första veckan i kursen Objektorienterade webbteknoligier, eller som den även förkortas till; mvc. Mina förkunskaper gällande objektoriernterad programmering
        är relativt begränsade. Jag läste oopython-kursen tidigare i vår, och det var i början ganska krångligt att greppa. Men känner ändå att jag fick rätsida på
        det under kursens gång. Det är ett litet annat tankesätt när man jobbar obejktorienterat, men tror ändå att jag har kommit att föredra det.</p>

        <p>I PHP räcker det inte med att bara skapa klasser, man måste även skapa ett så kallat namespace. Man kan se namespace som en mapp eller katalog vari koden körs. Detta 
        för att klassnamnen inte ska krocka med andra klasser. Detta är något jag inte kände igen från oopython-kursen, men verkar hittills inte krångligare än att man anger sitt
        namespace i början i sina controller-filer. I detta första kursmoment uppelver jag inte att vi mer än skrapat på ytan då de klasser vi skapat i princip enbart består av routes
        till de olika sidorna vi skapat. Men antar att vi kommer gå djupare med att skapa objekt i våra klasser i framtida kursmoment.</p>

        <p>Den struktur som vi byggt upp med hjälp av Symfony påminner en del om express som vi använde i databaskursen, men jag kan även se vissa likheter med flask som vi använde i 
        oopython. Det är alltid lite rörigt i början när man inte är helt van vid kodstrukturen, men det ska nog inte vara några problem att använda detta. En del av kraven var dock lite
        kluriga att få till. Var tvungen att gå tillbaka och titta på en och två gånger hur jag gjort i webtec-kursen i höstas. Man glömmer ganska snabbt när man inte använder något, och 
        PHP har jag knappt använt sedan dess. Men samtidigt är inte startsträckan särskilt lång när väl börjar tänka tillbaka på vad man lärt sig tidigare. </p>

        <p>Artikeln \"PHP The Right Way\" var ganska överväldigande och handen på hjärtat läste jag inte igenom den rad för rad. Något jag fann intressant var varför vi använder templates,
        det är inte första gången vi arbetar med detta och har väl egentligen aldrig reflekterat över varför vi faktiskt gör det. Jag fick här en ganska bra förklaring att det underlättar
        att separera koden och det som presenteras på webbsidan då det blir mer överskådlig, inte minst om man jobbar i team och en sitter med koden på serversidan och en annan med designen
        på klientsidan. Jag fick även lite mer kött på benen gällande det här med namespace, som jag bekrev ovan.</p>

        <p>Veckans TIL har precis som alltid vid kursuppstart varit en hel del. Men det jag nog känner mest för är att jag ökat min förståelse för GIT. Vi använde det i design-kursen i höstas,
        men jag kände mig väldigt osäker varenda vecka på hur jag skulle göra, och den skrivna guiden var ganska rörig att leta sig igenom vecka efter vecka. Mikales git-guide på youtube var
        väldigt mycket enklare att ta till sig och jag känner mig betydligt säkrare på git efter att ha sett den.</p>


        <hr>
        <h2 id=\"kmom02\">kmom02</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        
        <hr>
        <h2 id=\"kmom03\">kmom03</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom04\">kmom04</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom05\">kmom05</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom06\">kmom06</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom10\">kmom10</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <hr></section>
        </main>
    </div>
{% endblock %}", "report.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
