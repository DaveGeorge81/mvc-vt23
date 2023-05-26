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

/* metrics.html.twig */
class __TwigTemplate_6199e3ea3740b842c332bef907a0a4c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metrics.html.twig", 1);
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

        echo "Metrics";
        
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
        echo "    <h1>Metric-Analys<hr></h1>
    <h2>Introduktion</h2>
    När vi pratar om kodkvalitet benämner vi dem med de 6 C:en.
    <h4>Codestyle:</h4>
    Att hålla god codestyle innebär kort och gott att man följer de allmäna riktlinjer för hur man skriver koden. Exempel på detta är t ex intabbningar, whitespace m.m. Stilen kan skilja mellan språken. I vissa
    språk använder man t ex cameCase i metoder och i andra bindestreck.
    <h4>Coverage:</h4>
    Coverage sammanfattast enklast som hur mycket av den skrivna koden som testas. Man bör sikta på så hög coverage som möjligt genom att testa metoder och if-satser. Låg coverage anses riskabelt då man inte testat möjliga 
    scenario och då inte kan garantera utgången.
    <h4>Complexity:</h4>
    Complexity analyserar hur komplex koden är. Med det menas att man kollar på indentering. Ju större indentering en metod har desto mer komplex är den. Hög komplexitet kan innebära att det blir svårare att
    underhålla koden då en liten förändring kan påverka stora delar.
    <h4>Cohesion:</h4>
    Cohesion, eller snarare \"lack of cohesion (LCON)\" kan beskrivas som \"rätt sak på rätt plats\". Ett hög värde här är lika med låg cohesion och då kan det tänkas att man har metoder i en klass som kanske istället hade varit 
    bättre att ha i en egen klass. Målet är att en klass ska ha ett ansvarsområde.
    <h4>Coupling:</h4>
    Coupling är ett sätt att mäta hur mycket en klass påverkar eller påverkas av andra klasser. Man mäter i två olika kategorier AC (Afferent Coupling) är det utgående värdet, alltså hur många andra klasser som påverkas av
    klassen. Det andra värdert är EC (Efferent Coupling) som är tvärtom. Här mäter man hur många andra klasser som påverkar den specifika klassen. 
    <h4>CRAP:</h4>
    CRAP står för Change Risk Analyzer and Predictor och jämför hur complex koden är mot hur många tester man utför. För att få ett lågt CRAP-värde bör man alltså ha fler tester ju mer komplex ens kod är.<hr>
    <h2>Phpmetrics</h2>
    <p>När jag analyserar min webbplats med phpmetrics är det komplexiteten som är det första jag reagerar på. Där finner jag tre stora röda cirklar. Gemensamt för dessa är att samtliga är controllerklasser. Den cyklomatiska komplexiteten
    i dessa tre klasser ligger mellan 9 och 12, vilket är ganska högt. Man ska försöka hålla värdet under 10. Likaså har dessa tre klasser ett relativt låg maintainability index då de varierar mellan ca 62-68. Det tyder på att det skulle
    kunna vara svårt att underhålla koden i dessa klasser. Man brukar anse att detta värde bör ligga över 70. Som synes i bilden finns det även ett par klasser som är gulmarkerade, även de har ett relativt lågt maintainability index. Den
    främsta anledningen till detta torde vara att jag har många metoder i de olika klasserna. Men ser man till coheishon så ligger ändå LCON lågt i de flesta klasser så metodena ligger trots detta på \"rätt\" plats.</p>

    Jag noterar att jag har sex violations. Fyra av dessa är teoretiska buggar med samtliga värden under 1, så de tror jag inte jag kan göra så mycket åt. Finner ingen riktig förklaring på vad det kan vara. De sista två är 
    Stable Abstractions Principle vialations i Card och Entity. \"This package is instable and abstract\", jag försökte googla mig till vad det innebar och hur jag i så fall löser det. Jag förstår att mina klasser är abstrakta i och med att 
    de använder sympfonys abstractController. Men jag lyckades inte klura ut vad som gör dem instabila. Kanske hänger det ihop med att de har så pass låga maintainability index? Dessa saker är de jag främst ser som flaskhalsar i min kod,
    jag är dock osäker på om jag har möjlighet att förbättra den utan att göra allt för stora omskrivningar.</p>
    <div class=\"cards\">
    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/phpmetrics2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/phpmetrics2.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"phpmetrics result 2\"></a>
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/phpmetrics1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/phpmetrics1.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"phpmetrics result 1\"></a></div><hr>
    <h2>Scrutinizer</h2>
    <a href=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/?branch=main\">
    <img src=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/quality-score.png?b=main\"><img src=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/coverage.png?b=main\"><img src=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/build.png?b=main\"></a>
    <p>Om jag tittar på min webbplats med verktyget Scrutinizer så ser resultatet på 9.94 väldigt bra ut. Där finns 13 issues, men 9 av dem är små bagateller som att jag skrivit \"==\" istället för \"===\" i mina if-satser. De sista 4 däremot är i filer där jag själv
    skrivit koden (autogenererade) som t ex Kernel.php och .php.cs-fixer.dist.php. Den sistnämnda kan ha att göra med att tools-mappen inte laddas till GitHub och jag vet faktiskt inte hur jag ska kunna lösa dem. Alla filer utom en får betyget A vilket jag är väldigt
    nöjd över. Den sista får B för att där är en metod med 3 if-satser och en while-loop. Förmodligen kan man skriva om denna för att få ner komplexiteten lite. Det är även här jag hittar det högsta CRAP-resultatet på 72. I övrig ligger CRAP-resultatet lågt med de flesta under 10. 
    De som ligger över 10 är även samma klasser som hade issues med if-satserna, om det hänger ihop återstår väl att se när jag korrigerat dessa issues. Coheision och Coupling-värden kunde jag dessvärre inte få fram i Scrutinizer.</p>

    <p>Om Scrutinizer-poängen var hög så står kodtäckningen i klar kontrast med detta. Endast 16% kan låta väldigt lågt och det är det ju också. Men, då läses mina controller-filer in också vilket jag inte gjort några tester för. Jag har heller inte skrivit några
    tester för library-delen av sidan så även där saknas kodtäckning. Controller-filerna står för en stor del av den totala koden, vilket gör att om jag inte testar dem kommer jag få nöja mig med en låg kodtäckning. Jag har läst lite om hur man testar controller-klasser.
    Det verkade fungera lite annorlunda än vanliga enhetstester, får se om jag reder upp dessa tester. Annars får nöja mig med ett lägre resultat i kodtäckning. Tester för book-klasserna ska jag i alla fall göra.</p>

    <div class=\"cards\"></a>
    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/scrutinizer1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/scrutinizer1.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"scrutinizer result\"></a>
    </div><hr>
    <h2>Förbrättringar</h2>
    <p>De förbättringar jag kommer fokusera på är:</p>
    <Ul>
    <li>Förbättra min kodtäckning.</li>
    <li>Försöka få ner CRAP-poängen där CRAP-värdet var som högst.</li>
    <li>Försöka få ner komplexiteten och maintainability indexet.</li>
    <li>Fixa de issues jag har möjlighet att lösa.</li>
    </ul>
    <p>Anledningen till att jag valde att just fokusera på dessa tre områden är att som jag tolkar analysen har jag en relativt god konstruerad webbplats, men att det krävs mer tester för att öka kodtäckningen. En del klasser ligger lite högt i komplexiteten vilket jag hoppas
    kunna få ner genom att försöka skriva om koden, eventuellt lyfta ut något i en egen metod. En annan tanke är att göra controllerklasserna mindre. Jag är dock inte säker på att jag kommer lyckas då vissa delar i koden behövs för att uppnå önskat resultat, men jag ska försöka.
    Slutligen valde jag att försöka korrigera de issues jag har för att de flesta av dem endast var irriterande småsaker vilket kanske kan få min redan höga scrutinzer-poäng ännu lite högre. Jag hoppas samtidgt att dessa förändringar kommer påverka CRAP-resultatet positivt.</p>

    <p>Efter att ha genomfört de förbättringar jag föreslog ovan har jag fått ner medelvärdet på den cyklomatiska complexiteten från 4.29 till 3.42. Den relativa systemkomplexibiliteten sjönk även den från 75.08 till 63.08. Detta tack vare att jag delat upp mina controllerklasser
    till mindre klasser, men också att jag lyft viss kod till en egen metod. Den nya klassen Helper (den lilla röda cirkeln i sista bilden) har dock ett ganska lågt maintainability index, men det beror på att den är beroende av två andra klasser. Om det var bättre att göra på det här sättet än att inte lyfta ut koden ur
    controllerklassen låter jag vara osagt, men controllerklassen blir åtminstone magrare och det är ju alltid postivt. Som följd av detta fick jag även ner CRAP-värdet lite i den metod där det var som högst. </p>

    <div class=\"cards\">
    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/complexity1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/complexity1.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"complexity before\"></a>
    <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/complexity2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/complexity2.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"complexity after\"></a><br>
    <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/crap1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/crap1.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"crap before\"></a>
    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/crap2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/crap2.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"crap after\"></a>
    </div>

    <p>Av de 13 issues jag hade löste jag 10, vilket tillsammans med mina andra åtgärder höjde min scrutinizer-poäng till 9.95.</p>
    <div class=\"cards\">
    <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/issues1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/issues1.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"issues before\"></a>
    <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/issues2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/issues2.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"issues after\"></a><br>
    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/phpmetrics3.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/phpmetrics3.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"phpmetrics result 3\"></a>
    </div>

    <p>Något jag däremot inte lyckades förbättra nämnvärt var kodtäckning, jag försökte verkligen testa controllerklasserna, men phpunit protesterade över att det inte var någon KERNEL_CLASS satt (trots att jag följt alla instruktioner), så efter ett par timmars ihärdigt mekande fick jag
    erkänna mig besegrad. Att testa book-klasserna skulle också visa sig klurigare än vad jag först förväntat mig då det innebar att testa mot databasen. Jag försökte sätta mig in i hur man skulle kunna göra detta, men fick aldrig rätsida på det, så även här fick jag överge dessa tester.
    Jag testade dock min nya Helper-klass, så jag fick trots allt upp kodtäckningen från 16% till 18%. Inte mycket men alltid något.</p>

    <div class=\"cards\">
    <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/scrutinizer2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics/scrutinizer2.png"), "html", null, true);
        echo "\" width=\"300px\" alt=\"scrutinizer after\"></a>
    </div><hr>


    <h2>Diskussion</h2>
    <p>Så efter att ha gjort denna analys har jag blivit ännu lite klarare över begreppet \"clean code\". Att ha clean code som ett tankesätt är absolut ett bra sätt att jobba på då det underlättar för utomstående att kunna sätta sig in i din kod. Att tänka i termer som komplexibilitet
    coheison och CRAP när man kodar är dock lätt att man glömmer bort, framförallt nu så här i början av ens karriär då målet oftast är att få koden att fungera som tänkt. Då blir snarare clean code en sekundär tanke. Däremot tror jag att det är bra att man redan nu i början försöker
    åtminstone försöker få in delar av clean code-konceptet då det är betydligt enklare att skriva koden med detta i bakhuvudet än att försöka justera den i efterhand. Det största argumentet för clean code torde vara att den är relativt lätt att underhålla och att kod som uppdateras inte 
    förstör annan kod eftersom man försöker hålla var sak på sin plats. Det främsta som kan ses negativt är att det tar rätt mycket längre tid att klura ut hur koden skrivs på bästa sätt så att mätresultaten blir goda. Men det är väl främst en vanesak kan jag tänka mig. Att ha god
    kodtäckning däremot är något jag tycker är viktigt. Lite lustigt kan tyckas med tanke på mitt relativt låga resultat på just det området. Men i mitt fall handlar det ju färmst om controller-filerna och sättet testa dem mest går ut på att kolla så att de faktiskt går till rätt sida på
    webbplatsen gör att jag tycker att det kan vara okej om dessa inte testas.</p>

    <p>Clean code är alltså något att sträva efter, det gör livet som programmerare enklare då det är lättare att reda ut buggar (om det skulle dyka upp någon). Som jag skrev ovan så blir koden mer lättläst vilket gör att man sparar mycket tid vid underhåll då det är lättare att sätta sig in i
    som utomstående eller om man inte jobbat med koden på ett tag. Jag ser clean code som en stor möjlighet att underlätta t ex grupp-projekt eller låt säga något open-source där många andra kommer läsa koden.</p><hr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 89,  210 => 81,  204 => 80,  198 => 79,  188 => 74,  182 => 73,  176 => 72,  170 => 71,  146 => 52,  127 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Metrics{% endblock %}

{% block body %}
    <h1>Metric-Analys<hr></h1>
    <h2>Introduktion</h2>
    När vi pratar om kodkvalitet benämner vi dem med de 6 C:en.
    <h4>Codestyle:</h4>
    Att hålla god codestyle innebär kort och gott att man följer de allmäna riktlinjer för hur man skriver koden. Exempel på detta är t ex intabbningar, whitespace m.m. Stilen kan skilja mellan språken. I vissa
    språk använder man t ex cameCase i metoder och i andra bindestreck.
    <h4>Coverage:</h4>
    Coverage sammanfattast enklast som hur mycket av den skrivna koden som testas. Man bör sikta på så hög coverage som möjligt genom att testa metoder och if-satser. Låg coverage anses riskabelt då man inte testat möjliga 
    scenario och då inte kan garantera utgången.
    <h4>Complexity:</h4>
    Complexity analyserar hur komplex koden är. Med det menas att man kollar på indentering. Ju större indentering en metod har desto mer komplex är den. Hög komplexitet kan innebära att det blir svårare att
    underhålla koden då en liten förändring kan påverka stora delar.
    <h4>Cohesion:</h4>
    Cohesion, eller snarare \"lack of cohesion (LCON)\" kan beskrivas som \"rätt sak på rätt plats\". Ett hög värde här är lika med låg cohesion och då kan det tänkas att man har metoder i en klass som kanske istället hade varit 
    bättre att ha i en egen klass. Målet är att en klass ska ha ett ansvarsområde.
    <h4>Coupling:</h4>
    Coupling är ett sätt att mäta hur mycket en klass påverkar eller påverkas av andra klasser. Man mäter i två olika kategorier AC (Afferent Coupling) är det utgående värdet, alltså hur många andra klasser som påverkas av
    klassen. Det andra värdert är EC (Efferent Coupling) som är tvärtom. Här mäter man hur många andra klasser som påverkar den specifika klassen. 
    <h4>CRAP:</h4>
    CRAP står för Change Risk Analyzer and Predictor och jämför hur complex koden är mot hur många tester man utför. För att få ett lågt CRAP-värde bör man alltså ha fler tester ju mer komplex ens kod är.<hr>
    <h2>Phpmetrics</h2>
    <p>När jag analyserar min webbplats med phpmetrics är det komplexiteten som är det första jag reagerar på. Där finner jag tre stora röda cirklar. Gemensamt för dessa är att samtliga är controllerklasser. Den cyklomatiska komplexiteten
    i dessa tre klasser ligger mellan 9 och 12, vilket är ganska högt. Man ska försöka hålla värdet under 10. Likaså har dessa tre klasser ett relativt låg maintainability index då de varierar mellan ca 62-68. Det tyder på att det skulle
    kunna vara svårt att underhålla koden i dessa klasser. Man brukar anse att detta värde bör ligga över 70. Som synes i bilden finns det även ett par klasser som är gulmarkerade, även de har ett relativt lågt maintainability index. Den
    främsta anledningen till detta torde vara att jag har många metoder i de olika klasserna. Men ser man till coheishon så ligger ändå LCON lågt i de flesta klasser så metodena ligger trots detta på \"rätt\" plats.</p>

    Jag noterar att jag har sex violations. Fyra av dessa är teoretiska buggar med samtliga värden under 1, så de tror jag inte jag kan göra så mycket åt. Finner ingen riktig förklaring på vad det kan vara. De sista två är 
    Stable Abstractions Principle vialations i Card och Entity. \"This package is instable and abstract\", jag försökte googla mig till vad det innebar och hur jag i så fall löser det. Jag förstår att mina klasser är abstrakta i och med att 
    de använder sympfonys abstractController. Men jag lyckades inte klura ut vad som gör dem instabila. Kanske hänger det ihop med att de har så pass låga maintainability index? Dessa saker är de jag främst ser som flaskhalsar i min kod,
    jag är dock osäker på om jag har möjlighet att förbättra den utan att göra allt för stora omskrivningar.</p>
    <div class=\"cards\">
    <a href=\"{{ asset('img/metrics/phpmetrics2.png') }}\"><img src=\"{{ asset('img/metrics/phpmetrics2.png') }}\" width=\"300px\" alt=\"phpmetrics result 2\"></a>
    <a href=\"{{ asset('img/metrics/phpmetrics1.png') }}\"><img src=\"{{ asset('img/metrics/phpmetrics1.png') }}\" width=\"300px\" alt=\"phpmetrics result 1\"></a></div><hr>
    <h2>Scrutinizer</h2>
    <a href=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/?branch=main\">
    <img src=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/quality-score.png?b=main\"><img src=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/coverage.png?b=main\"><img src=\"https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/build.png?b=main\"></a>
    <p>Om jag tittar på min webbplats med verktyget Scrutinizer så ser resultatet på 9.94 väldigt bra ut. Där finns 13 issues, men 9 av dem är små bagateller som att jag skrivit \"==\" istället för \"===\" i mina if-satser. De sista 4 däremot är i filer där jag själv
    skrivit koden (autogenererade) som t ex Kernel.php och .php.cs-fixer.dist.php. Den sistnämnda kan ha att göra med att tools-mappen inte laddas till GitHub och jag vet faktiskt inte hur jag ska kunna lösa dem. Alla filer utom en får betyget A vilket jag är väldigt
    nöjd över. Den sista får B för att där är en metod med 3 if-satser och en while-loop. Förmodligen kan man skriva om denna för att få ner komplexiteten lite. Det är även här jag hittar det högsta CRAP-resultatet på 72. I övrig ligger CRAP-resultatet lågt med de flesta under 10. 
    De som ligger över 10 är även samma klasser som hade issues med if-satserna, om det hänger ihop återstår väl att se när jag korrigerat dessa issues. Coheision och Coupling-värden kunde jag dessvärre inte få fram i Scrutinizer.</p>

    <p>Om Scrutinizer-poängen var hög så står kodtäckningen i klar kontrast med detta. Endast 16% kan låta väldigt lågt och det är det ju också. Men, då läses mina controller-filer in också vilket jag inte gjort några tester för. Jag har heller inte skrivit några
    tester för library-delen av sidan så även där saknas kodtäckning. Controller-filerna står för en stor del av den totala koden, vilket gör att om jag inte testar dem kommer jag få nöja mig med en låg kodtäckning. Jag har läst lite om hur man testar controller-klasser.
    Det verkade fungera lite annorlunda än vanliga enhetstester, får se om jag reder upp dessa tester. Annars får nöja mig med ett lägre resultat i kodtäckning. Tester för book-klasserna ska jag i alla fall göra.</p>

    <div class=\"cards\"></a>
    <a href=\"{{ asset('img/metrics/scrutinizer1.png') }}\"><img src=\"{{ asset('img/metrics/scrutinizer1.png') }}\" width=\"300px\" alt=\"scrutinizer result\"></a>
    </div><hr>
    <h2>Förbrättringar</h2>
    <p>De förbättringar jag kommer fokusera på är:</p>
    <Ul>
    <li>Förbättra min kodtäckning.</li>
    <li>Försöka få ner CRAP-poängen där CRAP-värdet var som högst.</li>
    <li>Försöka få ner komplexiteten och maintainability indexet.</li>
    <li>Fixa de issues jag har möjlighet att lösa.</li>
    </ul>
    <p>Anledningen till att jag valde att just fokusera på dessa tre områden är att som jag tolkar analysen har jag en relativt god konstruerad webbplats, men att det krävs mer tester för att öka kodtäckningen. En del klasser ligger lite högt i komplexiteten vilket jag hoppas
    kunna få ner genom att försöka skriva om koden, eventuellt lyfta ut något i en egen metod. En annan tanke är att göra controllerklasserna mindre. Jag är dock inte säker på att jag kommer lyckas då vissa delar i koden behövs för att uppnå önskat resultat, men jag ska försöka.
    Slutligen valde jag att försöka korrigera de issues jag har för att de flesta av dem endast var irriterande småsaker vilket kanske kan få min redan höga scrutinzer-poäng ännu lite högre. Jag hoppas samtidgt att dessa förändringar kommer påverka CRAP-resultatet positivt.</p>

    <p>Efter att ha genomfört de förbättringar jag föreslog ovan har jag fått ner medelvärdet på den cyklomatiska complexiteten från 4.29 till 3.42. Den relativa systemkomplexibiliteten sjönk även den från 75.08 till 63.08. Detta tack vare att jag delat upp mina controllerklasser
    till mindre klasser, men också att jag lyft viss kod till en egen metod. Den nya klassen Helper (den lilla röda cirkeln i sista bilden) har dock ett ganska lågt maintainability index, men det beror på att den är beroende av två andra klasser. Om det var bättre att göra på det här sättet än att inte lyfta ut koden ur
    controllerklassen låter jag vara osagt, men controllerklassen blir åtminstone magrare och det är ju alltid postivt. Som följd av detta fick jag även ner CRAP-värdet lite i den metod där det var som högst. </p>

    <div class=\"cards\">
    <a href=\"{{ asset('img/metrics/complexity1.png') }}\"><img src=\"{{ asset('img/metrics/complexity1.png') }}\" width=\"300px\" alt=\"complexity before\"></a>
    <a href=\"{{ asset('img/metrics/complexity2.png') }}\"><img src=\"{{ asset('img/metrics/complexity2.png') }}\" width=\"300px\" alt=\"complexity after\"></a><br>
    <a href=\"{{ asset('img/metrics/crap1.png') }}\"><img src=\"{{ asset('img/metrics/crap1.png') }}\" width=\"300px\" alt=\"crap before\"></a>
    <a href=\"{{ asset('img/metrics/crap2.png') }}\"><img src=\"{{ asset('img/metrics/crap2.png') }}\" width=\"300px\" alt=\"crap after\"></a>
    </div>

    <p>Av de 13 issues jag hade löste jag 10, vilket tillsammans med mina andra åtgärder höjde min scrutinizer-poäng till 9.95.</p>
    <div class=\"cards\">
    <a href=\"{{ asset('img/metrics/issues1.png') }}\"><img src=\"{{ asset('img/metrics/issues1.png') }}\" width=\"300px\" alt=\"issues before\"></a>
    <a href=\"{{ asset('img/metrics/issues2.png') }}\"><img src=\"{{ asset('img/metrics/issues2.png') }}\" width=\"300px\" alt=\"issues after\"></a><br>
    <a href=\"{{ asset('img/metrics/phpmetrics3.png') }}\"><img src=\"{{ asset('img/metrics/phpmetrics3.png') }}\" width=\"300px\" alt=\"phpmetrics result 3\"></a>
    </div>

    <p>Något jag däremot inte lyckades förbättra nämnvärt var kodtäckning, jag försökte verkligen testa controllerklasserna, men phpunit protesterade över att det inte var någon KERNEL_CLASS satt (trots att jag följt alla instruktioner), så efter ett par timmars ihärdigt mekande fick jag
    erkänna mig besegrad. Att testa book-klasserna skulle också visa sig klurigare än vad jag först förväntat mig då det innebar att testa mot databasen. Jag försökte sätta mig in i hur man skulle kunna göra detta, men fick aldrig rätsida på det, så även här fick jag överge dessa tester.
    Jag testade dock min nya Helper-klass, så jag fick trots allt upp kodtäckningen från 16% till 18%. Inte mycket men alltid något.</p>

    <div class=\"cards\">
    <a href=\"{{ asset('img/metrics/scrutinizer2.png') }}\"><img src=\"{{ asset('img/metrics/scrutinizer2.png') }}\" width=\"300px\" alt=\"scrutinizer after\"></a>
    </div><hr>


    <h2>Diskussion</h2>
    <p>Så efter att ha gjort denna analys har jag blivit ännu lite klarare över begreppet \"clean code\". Att ha clean code som ett tankesätt är absolut ett bra sätt att jobba på då det underlättar för utomstående att kunna sätta sig in i din kod. Att tänka i termer som komplexibilitet
    coheison och CRAP när man kodar är dock lätt att man glömmer bort, framförallt nu så här i början av ens karriär då målet oftast är att få koden att fungera som tänkt. Då blir snarare clean code en sekundär tanke. Däremot tror jag att det är bra att man redan nu i början försöker
    åtminstone försöker få in delar av clean code-konceptet då det är betydligt enklare att skriva koden med detta i bakhuvudet än att försöka justera den i efterhand. Det största argumentet för clean code torde vara att den är relativt lätt att underhålla och att kod som uppdateras inte 
    förstör annan kod eftersom man försöker hålla var sak på sin plats. Det främsta som kan ses negativt är att det tar rätt mycket längre tid att klura ut hur koden skrivs på bästa sätt så att mätresultaten blir goda. Men det är väl främst en vanesak kan jag tänka mig. Att ha god
    kodtäckning däremot är något jag tycker är viktigt. Lite lustigt kan tyckas med tanke på mitt relativt låga resultat på just det området. Men i mitt fall handlar det ju färmst om controller-filerna och sättet testa dem mest går ut på att kolla så att de faktiskt går till rätt sida på
    webbplatsen gör att jag tycker att det kan vara okej om dessa inte testas.</p>

    <p>Clean code är alltså något att sträva efter, det gör livet som programmerare enklare då det är lättare att reda ut buggar (om det skulle dyka upp någon). Som jag skrev ovan så blir koden mer lättläst vilket gör att man sparar mycket tid vid underhåll då det är lättare att sätta sig in i
    som utomstående eller om man inte jobbat med koden på ett tag. Jag ser clean code som en stor möjlighet att underlätta t ex grupp-projekt eller låt säga något open-source där många andra kommer läsa koden.</p><hr>
{% endblock %}", "metrics.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/metrics.html.twig");
    }
}
