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

/* /homes/solutions/fr/silhouette/liftingBras.twig */
class __TwigTemplate_5d0b93018a1c1b3dfc4d741a0208aaeded1a7e3fd2a96ddbd77b0f3a490dba1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'style' => [$this, 'block_style'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'lead_form_floattfr' => [$this, 'block_lead_form_floattfr'],
            'leadFormFixBottomtfr' => [$this, 'block_leadFormFixBottomtfr'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/silhouette/liftingBras.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
            
           <meta name=\"description\" content=\" besoins/fr/ride \">
           
 ";
    }

    // line 9
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
        #ridesec h1{
              font-weight:600;
              color:rgb(0,128,128);
              font-size:33px;
                                      
            }

          #ridesec h2{
              font-weight:600;
              color:rgb(0,139,139);
              font-size:28px;
            }

          #ridesec h3{
              font-weight:600;
              color:rgb(32,178,170);
              font-size:24px;
            }

          #ridesec p{
                color:#010203;
               font-size:1rem;
            }

           #ridesec ul{list-style-type: disc;}
     

      @media(max-width:900px){
      
          #ridesec h1{
              font-size:25px;
              
            }

          #ridesec h2{
              font-size:20px;
            }

          #ridesec h3{
              font-size:18px;
            }

          #ridesec p{
              font-size:16px;
            }
          }
          
      </style>
 
";
    }

    // line 64
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> lifting bras </title> ";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo " <!-- besoins/fr/visage/ride-->
                      
                        ";
        // line 69
        $this->displayBlock('lead_form_floattfr', $context, $blocks);
        // line 72
        echo "   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Lifting bras</h1>
            <p>Certaines femmes acceptent volontiers les défauts physiques que marque le vieillissement sur leurs corps : Rides, relâchements cutanées, ptose mammaire, affaissement des paupières etc. Ceci n’est pas reprochable tant qu’elles se sentent à l’aise et bien dans leur peau. D’autres femmes ne trouvent aucune raison pour céder rapidement au fantôme de la vieillesse. Elles cherchent donc, toutes les solutions possibles pour paraître encore jeunes et pleines de vie : les produits cosmétiques, le sport, le changement du style vestimentaire, le recours à des séances de thérapie de bonheur etc. </p>

            <p>Ces femmes n’ont pas tort. Elles répondent, en fin de compte, aux exigences d’une société dans laquelle est favorisé ce qui est plus beau par rapport à ce qui est moins beau. Citons par exemple, la discrimination sociale vis-à-vis des personnes obèses. Mais, ce n’est pas seulement pour plaire aux autres ou pour se distinguer dans la société que ces femmes cherchent à se débarrasser des signes de l’âge. C’est aussi pour préserver la formidable sensation de bien-être et pour se sentir encore jeune moralement et physiquement. </p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                  <p>Les symptômes les plus inappréciés par cette catégorie féminine, sont l’apparition des rides au niveau du visage, l’affaissement des seins, la détention de la peau abdominale et le relâchement de la peau des bras. </p>

                  <p>La chirurgie plastique en Tunisie permet de réparer chacun de ces défauts inesthétiques : un lifting visage pour améliorer l’aspect de la vue faciale, un lifting mammaire pour rehausser les seins, une abdominoplastie pour traiter le relâchement cutané du ventre et une brachioplastie pour corriger la forme des bras flasques. </p>

                  <p>S’agissant de la brachioplastie en Tunisie, elle peut être indiquée, pour des motivations esthétiques, lorsque les bras de la patiente présentent un grand surplus de peau et une importante quantité de graisse au niveau de la partie interne du bras. Cette dégradation disgracieuse de l’état des bras peut être dûe au déroulement naturel du processus de vieillissement, à un facteur héréditaire, ou bien à des régimes alimentaires successifs. </p>

                  <h2>LIFTING BRAS TUNISIE : INTERVENTION</h2>
                  <p>Le principe l’intervention lifting des bras consiste à aspirer les amas graisseux localisés dans le bras et à réaliser un lifting pour redraper la peau. Le prélèvement de la graisse en excès se pratique à l’aide d’une liposuccion. Si les bras de la patiente sont vidés et ne présentent aucun surplus graisseux, seul un lifting des bras peut faire l’affaire. Il existe trois types d’incisions possibles à réaliser lors d’une brachioplastie : une incision au niveau de l’aisselle, une incision dans la zone intérieure du bras et une incision qui combine les deux techniques. La longueur de l’incision est tributaire de la quantité de peau éliminée : Plus la quantité de peau enlevée est importante, plus l’incision est longue. </p>



             </div>

             <div class=\"col-md-6 \">
             
             <p>Après avoir examiné les bras de la patiente, lors de la première consultation, le chirurgien esthétique tunisien choisit l’intervention esthétique qui donnera le meilleur résultat. </p>
            <p>L’intervention lifting des bras en Tunisie est réalisée au Centre International Carthage médical, à la Clinique Pasteur ou à la Clinique Hannibal. Elle est ambulatoire et dure généralement une heure. Au cours de cette intervention, le patient est mis soit sous anesthésie générale soit sous anesthésie locale. Cela dépend de la décision prise par le médecin anesthésiste et par le chirurgien plasticien tunisien. </p>

            <p>Pareillement à chaque opération esthétique pratiquée en Tunisie, la brachioplastie nécessite quelques examens préopératoires. Ces examens sont prescrits par le chirurgien plasticien tunisien dès la première consultation. </p>

            <h2>SUITES OPERATOIRES ET RESULAT</h2>
            <p>La brachioplastie en Tunisie ne provoque pas des douleurs importantes. L’apparition d’un l’œdème et de plusieurs ecchymoses est évidente les premiers jours suivants l’intervention. Les troubles de sensibilités pressentis seront atténués à partir du 3ème mois. Il est très recommandé de ne pas faire du sport deux semaines après la brachioplastie. L’exposition au soleil est aussi fortement déconseillée. Les cicatrices effectuées lors d’une brachioplastie seront atténuées progressivement. A partir du troisième mois suivant l’intervention, elles auront un aspect rosé qui s’éclaircira progressivement. Le résultat final d’un lifting des bras en Tunisie peut être observé après trois mois. </p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 132
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 134
        echo "  

";
    }

    // line 69
    public function block_lead_form_floattfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 70
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/silhouette/liftingBras.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 132
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/silhouette/liftingBras.twig", 133)->display($context);
        // line 134
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/silhouette/liftingBras.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 134,  231 => 133,  227 => 132,  223 => 71,  221 => 70,  215 => 69,  209 => 134,  207 => 132,  195 => 123,  158 => 89,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'layout.twig' %}

{% block meta %}  
            
           <meta name=\"description\" content=\" besoins/fr/ride \">
           
 {% endblock  %}

 {% block style %}   
      <style>

     
        #ridesec h1{
              font-weight:600;
              color:rgb(0,128,128);
              font-size:33px;
                                      
            }

          #ridesec h2{
              font-weight:600;
              color:rgb(0,139,139);
              font-size:28px;
            }

          #ridesec h3{
              font-weight:600;
              color:rgb(32,178,170);
              font-size:24px;
            }

          #ridesec p{
                color:#010203;
               font-size:1rem;
            }

           #ridesec ul{list-style-type: disc;}
     

      @media(max-width:900px){
      
          #ridesec h1{
              font-size:25px;
              
            }

          #ridesec h2{
              font-size:20px;
            }

          #ridesec h3{
              font-size:18px;
            }

          #ridesec p{
              font-size:16px;
            }
          }
          
      </style>
 
{% endblock  %}

{% block title %}  <title> lifting bras </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Lifting bras</h1>
            <p>Certaines femmes acceptent volontiers les défauts physiques que marque le vieillissement sur leurs corps : Rides, relâchements cutanées, ptose mammaire, affaissement des paupières etc. Ceci n’est pas reprochable tant qu’elles se sentent à l’aise et bien dans leur peau. D’autres femmes ne trouvent aucune raison pour céder rapidement au fantôme de la vieillesse. Elles cherchent donc, toutes les solutions possibles pour paraître encore jeunes et pleines de vie : les produits cosmétiques, le sport, le changement du style vestimentaire, le recours à des séances de thérapie de bonheur etc. </p>

            <p>Ces femmes n’ont pas tort. Elles répondent, en fin de compte, aux exigences d’une société dans laquelle est favorisé ce qui est plus beau par rapport à ce qui est moins beau. Citons par exemple, la discrimination sociale vis-à-vis des personnes obèses. Mais, ce n’est pas seulement pour plaire aux autres ou pour se distinguer dans la société que ces femmes cherchent à se débarrasser des signes de l’âge. C’est aussi pour préserver la formidable sensation de bien-être et pour se sentir encore jeune moralement et physiquement. </p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                  <p>Les symptômes les plus inappréciés par cette catégorie féminine, sont l’apparition des rides au niveau du visage, l’affaissement des seins, la détention de la peau abdominale et le relâchement de la peau des bras. </p>

                  <p>La chirurgie plastique en Tunisie permet de réparer chacun de ces défauts inesthétiques : un lifting visage pour améliorer l’aspect de la vue faciale, un lifting mammaire pour rehausser les seins, une abdominoplastie pour traiter le relâchement cutané du ventre et une brachioplastie pour corriger la forme des bras flasques. </p>

                  <p>S’agissant de la brachioplastie en Tunisie, elle peut être indiquée, pour des motivations esthétiques, lorsque les bras de la patiente présentent un grand surplus de peau et une importante quantité de graisse au niveau de la partie interne du bras. Cette dégradation disgracieuse de l’état des bras peut être dûe au déroulement naturel du processus de vieillissement, à un facteur héréditaire, ou bien à des régimes alimentaires successifs. </p>

                  <h2>LIFTING BRAS TUNISIE : INTERVENTION</h2>
                  <p>Le principe l’intervention lifting des bras consiste à aspirer les amas graisseux localisés dans le bras et à réaliser un lifting pour redraper la peau. Le prélèvement de la graisse en excès se pratique à l’aide d’une liposuccion. Si les bras de la patiente sont vidés et ne présentent aucun surplus graisseux, seul un lifting des bras peut faire l’affaire. Il existe trois types d’incisions possibles à réaliser lors d’une brachioplastie : une incision au niveau de l’aisselle, une incision dans la zone intérieure du bras et une incision qui combine les deux techniques. La longueur de l’incision est tributaire de la quantité de peau éliminée : Plus la quantité de peau enlevée est importante, plus l’incision est longue. </p>



             </div>

             <div class=\"col-md-6 \">
             
             <p>Après avoir examiné les bras de la patiente, lors de la première consultation, le chirurgien esthétique tunisien choisit l’intervention esthétique qui donnera le meilleur résultat. </p>
            <p>L’intervention lifting des bras en Tunisie est réalisée au Centre International Carthage médical, à la Clinique Pasteur ou à la Clinique Hannibal. Elle est ambulatoire et dure généralement une heure. Au cours de cette intervention, le patient est mis soit sous anesthésie générale soit sous anesthésie locale. Cela dépend de la décision prise par le médecin anesthésiste et par le chirurgien plasticien tunisien. </p>

            <p>Pareillement à chaque opération esthétique pratiquée en Tunisie, la brachioplastie nécessite quelques examens préopératoires. Ces examens sont prescrits par le chirurgien plasticien tunisien dès la première consultation. </p>

            <h2>SUITES OPERATOIRES ET RESULAT</h2>
            <p>La brachioplastie en Tunisie ne provoque pas des douleurs importantes. L’apparition d’un l’œdème et de plusieurs ecchymoses est évidente les premiers jours suivants l’intervention. Les troubles de sensibilités pressentis seront atténués à partir du 3ème mois. Il est très recommandé de ne pas faire du sport deux semaines après la brachioplastie. L’exposition au soleil est aussi fortement déconseillée. Les cicatrices effectuées lors d’une brachioplastie seront atténuées progressivement. A partir du troisième mois suivant l’intervention, elles auront un aspect rosé qui s’éclaircira progressivement. Le résultat final d’un lifting des bras en Tunisie peut être observé après trois mois. </p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        {% block leadFormFixBottomtfr %}
                              {% include('/homes/data/index/fr/leadFormFixBottom.twig') %}
                            {% endblock  %}  

{% endblock  %}
  ", "/homes/solutions/fr/silhouette/liftingBras.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/silhouette/liftingBras.twig");
    }
}
