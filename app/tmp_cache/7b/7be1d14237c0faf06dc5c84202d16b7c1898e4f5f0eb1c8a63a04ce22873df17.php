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

/* /homes/solutions/fr/silhouette/liftingCuisses.twig */
class __TwigTemplate_d285e9222fde8b4c274c3fcbbde77eb7bdb628dca363af5608b53ac4d41d8d68 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/silhouette/liftingCuisses.twig", 1);
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
        echo " <title> lifting cuisses </title> ";
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

            <h1>Lifting cuisses</h1>
            <p>Formée d’un ensemble de fibres élastiques très fragiles, la peau des cuisses se caractérise par une grande sensibilité. Un lifting des cuisses en Tunisie n’est est indiqué par le chirurgien esthéticien tunisien que lorsque les cuisses de la patiente présentent une importante perte d’élasticité. En effet, dans le cas contraire, c’est-à-dire lorsque la peau est de bonne qualité une liposuccion peut être largement suffisante. </p>

            <h2>LIFTING DES CUISSES EN TUNISIE</h2>
            <p>L’intervention lifting des cuisses en Tunisie, encore appelé cruroplastie en Tunisie est destinée aux femmes ayant un relâchement cutané et graisseux au niveau de la partie interne des cuisses. On parle dans ce cas, d’une ptôse cutanée associée au processus naturel de vieillissement, à des régimes à répétition, à une grossesse ou bien à un ou plusieurs facteurs héréditaires. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         
              <p>Mise à part le défaut inesthétique qu’entraîne le relâchement des cuisses, la ptose cutanée entraîne des irritations dues au frottement des cuisses l’une contre l’autre et provoque ainsi une gêne importante notamment lorsque les cuisses de la patiente sont de nature trop serrés. </p>
              <p>Le lifting des cuisses est une intervention esthétique très délicate. Le chirurgien esthéticien tunisien pose de nombreuses questions à la patiente à propos de ses antécédents médicaux, lui demande de faire plusieurs examens nécessaires et lui prescrit un traitement anticoagulant. </p>

              <h2>CONSULTATIONS</h2>
              <p>Une consultation préopératoire est nécessaire. Au cours de cette consultation, la patiente s’entretient avec son chirurgien esthétique pour discuter à propos des détails relatifs à l’intervention lifting des cuisses et pour se renseigner sur les suites opératoires et les précautions à prendre durant toute la période de la convalescence. Un autre rendez-vous sera organisé avec l’anesthésiste dans 48 heures au maximum. </p>

              <h2>DÉROULEMENT DE L’OPÉRATION</h2>
              Le lifting des cuisses se pratique sous anesthésie générale. L’hospitalisation dure un ou deux jours tout dépend l’importance de l’intervention esthétique effectués. Quant à l’opération, elle dure presque une heure mais, peut prendre plus de temps lorsque les actes chirurgicaux sont un peu compliqués. </p>
              Une liposuccion est nécessaire au début de l’intervention pour prélever le surplus graisseux. L’excédent de graisse est extrait à l’aide de canules très fines ne dépassant pas les 4mm de diamètre. </p>
              <p>À propos des incisions faites lors d’un lifting des cuisses, les caractéristiques de chaque incision varient selon le cas qui se présente (relâchement cutané modéré ou relâchement cutané très important). Le choix privilégié dépend aussi de la décision prise par la pertinente après avoir discuté avec son chirurgien esthétique tunisien. </p>

              <h3>L’incision verticale : </h3>
              cette technique est adaptée lorsque les cuisses de la patiente souffrent d’un relâchement cutané très avancé. Dans ce cas l’incision prend la forme d’un T : elle se réalise au niveau de la zone interne de la cuisse et se prolonge du haut vers le bas. </p>

              <h3>L’incision horizontale : </h3>
              <p>Lorsque le surplus cutané est moins important, il suffit juste de faire une incision en haut. Cette incision débute au niveau du sillon sous fessier et se prolonge jusqu’au sillon de l’aine. La cicatrice est dans ce cas très discrète et sera bien dissimulée entre les deux plis. (pli sous fessiers et pli de l’aine). </p>

              <p>Le chirurgien esthétique tunisien étire la peau dans deux sens simultanés : le haut et l’intérieur de la cuisse. L’excédent cutané sera ensuite éliminé. Des sutures profondes sont réalisées pour suspendre la peau. Ces sutures permettent de tendre la peau pour qu’elle ne se relâche pas de nouveau. À la fin de l’intervention, le chirurgien plasticien tunisien couvre la zone traitée à l’aide d’un panty de contention ou bien à l’aide de plusieurs bandes élastiques. </p>

              <h2>SUITES OPÉRATOIRES</h2>
              <p>Les douleurs ressentis suite à un lifting des cuisses en Tunisie sont semblables à des courbatures. La patiente se sentira un peu affaiblie la première semaine suivant l’intervention. Mais, cela est tout à fait normal vu l’importance de la quantité de graisse prélevée. Le chirurgien prescrit des antalgiques classiques pour éviter les douleurs éventuelles. </p>
              <p>Comme suite à chaque acte chirurgical, un œdème et des ecchymoses vont surgir les trois premières semaines suivants l’intervention. </p>

              <p>Des soins réguliers sont nécessaires quelques jours après l’opération lifting des cuisses en Tunisie. La patiente devra se doucher régulièrement sans omettre de sécher les zones opérées à l’aide d’un sèche-cheveux. Ce geste est très important car, il permet d’éviter l’humidification de l’incision et de ne pas nuire au bon déroulement de la cicatrisation. Il est très recommandé d’éviter le port de vêtements trop serrés au cours de la période de convalescence et de ne pas s’exposer au soleil. </p>

              <p>Le premier mois, la patiente devra porter quotidiennement son panty de contention. Dans certains cas, cette période pourra être prolongée afin d’éviter tout risque d’embolie ou de phlébite. </p>
              <p>Le sport et les mouvements forts sont strictement interdits. Pourtant, faire de la marche au cours de cette période est vivement recommandé malgré la gêne que pourra pressentir la patiente. Cette activité, permet en fait d’éviter de risque d’une phlébite (la manifestation d’un caillou de sang dans une veine). </p>



             </div>

             <div class=\"col-md-6 \">
             <p>Le chirurgien plasticien tunisien administre un traitement anticoagulant pour une durée de dix jours ou plus. </p>

              <p>Les complications d’un lifting des cuisses en Tunisie sont très rares. Mais, le chirurgien esthétique tunisien informe sa patiente sur tous les détails de l’intervention y compris les risques éventuels comme l’hématome, l’écoulement lymphatique, l’infection et dans certains cas plus rares l’atteinte à la sensibilité des cuisses. </p>
              <p>Comme nous l’avons signalé au début de cet article, le lifting des cuisses est une opération délicate qui nécessite l’intervention d’un chirurgien très bien expérimenté. </p>

              <p>Si vous songez à un lifting des cuisses, choisissez l’une de nos polycliniques : Clinique Pasteur, Clinique Hannibal, Centre International Carthage médical. Sans sombrer dans l’exagération, nous vous affirmons fièrement que nous disposons des meilleures compétences en chirurgie de la silhouette. Nos tarifs très raisonnables englobent tout un package (accueil à l’aéroport, consultations, honoraires chirurgien et anesthésiste, hébergement dans un hôtel de luxe, hospitalisation, soins post opératoires, matériels acquis, examens médicaux, assistance sociale etc). </p>
              <p>Contactez-nous, notre équipe se chargera de vous faciliter toutes les procédures d’un séjour médical en Tunisie. </p>

              <h2>RÉSULTATS</h2>
              <p>S’agissant des résultats d’un lifting des cuisses en Tunisie, ils sont perceptibles malgré la manifestation des bleus et des gonflements. L’aspect final des cuisses sera observé après une période de 6 mois. C’est la période requise pour que la cicatrisation s’achève complètement et pour que la forme des cuisses soit bien dessinée. </p>


            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 155
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 157
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/silhouette/liftingCuisses.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 155
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/silhouette/liftingCuisses.twig", 156)->display($context);
        // line 157
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/silhouette/liftingCuisses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 157,  254 => 156,  250 => 155,  246 => 71,  244 => 70,  238 => 69,  232 => 157,  230 => 155,  218 => 146,  160 => 91,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %} <title> lifting cuisses </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

            <h1>Lifting cuisses</h1>
            <p>Formée d’un ensemble de fibres élastiques très fragiles, la peau des cuisses se caractérise par une grande sensibilité. Un lifting des cuisses en Tunisie n’est est indiqué par le chirurgien esthéticien tunisien que lorsque les cuisses de la patiente présentent une importante perte d’élasticité. En effet, dans le cas contraire, c’est-à-dire lorsque la peau est de bonne qualité une liposuccion peut être largement suffisante. </p>

            <h2>LIFTING DES CUISSES EN TUNISIE</h2>
            <p>L’intervention lifting des cuisses en Tunisie, encore appelé cruroplastie en Tunisie est destinée aux femmes ayant un relâchement cutané et graisseux au niveau de la partie interne des cuisses. On parle dans ce cas, d’une ptôse cutanée associée au processus naturel de vieillissement, à des régimes à répétition, à une grossesse ou bien à un ou plusieurs facteurs héréditaires. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         
              <p>Mise à part le défaut inesthétique qu’entraîne le relâchement des cuisses, la ptose cutanée entraîne des irritations dues au frottement des cuisses l’une contre l’autre et provoque ainsi une gêne importante notamment lorsque les cuisses de la patiente sont de nature trop serrés. </p>
              <p>Le lifting des cuisses est une intervention esthétique très délicate. Le chirurgien esthéticien tunisien pose de nombreuses questions à la patiente à propos de ses antécédents médicaux, lui demande de faire plusieurs examens nécessaires et lui prescrit un traitement anticoagulant. </p>

              <h2>CONSULTATIONS</h2>
              <p>Une consultation préopératoire est nécessaire. Au cours de cette consultation, la patiente s’entretient avec son chirurgien esthétique pour discuter à propos des détails relatifs à l’intervention lifting des cuisses et pour se renseigner sur les suites opératoires et les précautions à prendre durant toute la période de la convalescence. Un autre rendez-vous sera organisé avec l’anesthésiste dans 48 heures au maximum. </p>

              <h2>DÉROULEMENT DE L’OPÉRATION</h2>
              Le lifting des cuisses se pratique sous anesthésie générale. L’hospitalisation dure un ou deux jours tout dépend l’importance de l’intervention esthétique effectués. Quant à l’opération, elle dure presque une heure mais, peut prendre plus de temps lorsque les actes chirurgicaux sont un peu compliqués. </p>
              Une liposuccion est nécessaire au début de l’intervention pour prélever le surplus graisseux. L’excédent de graisse est extrait à l’aide de canules très fines ne dépassant pas les 4mm de diamètre. </p>
              <p>À propos des incisions faites lors d’un lifting des cuisses, les caractéristiques de chaque incision varient selon le cas qui se présente (relâchement cutané modéré ou relâchement cutané très important). Le choix privilégié dépend aussi de la décision prise par la pertinente après avoir discuté avec son chirurgien esthétique tunisien. </p>

              <h3>L’incision verticale : </h3>
              cette technique est adaptée lorsque les cuisses de la patiente souffrent d’un relâchement cutané très avancé. Dans ce cas l’incision prend la forme d’un T : elle se réalise au niveau de la zone interne de la cuisse et se prolonge du haut vers le bas. </p>

              <h3>L’incision horizontale : </h3>
              <p>Lorsque le surplus cutané est moins important, il suffit juste de faire une incision en haut. Cette incision débute au niveau du sillon sous fessier et se prolonge jusqu’au sillon de l’aine. La cicatrice est dans ce cas très discrète et sera bien dissimulée entre les deux plis. (pli sous fessiers et pli de l’aine). </p>

              <p>Le chirurgien esthétique tunisien étire la peau dans deux sens simultanés : le haut et l’intérieur de la cuisse. L’excédent cutané sera ensuite éliminé. Des sutures profondes sont réalisées pour suspendre la peau. Ces sutures permettent de tendre la peau pour qu’elle ne se relâche pas de nouveau. À la fin de l’intervention, le chirurgien plasticien tunisien couvre la zone traitée à l’aide d’un panty de contention ou bien à l’aide de plusieurs bandes élastiques. </p>

              <h2>SUITES OPÉRATOIRES</h2>
              <p>Les douleurs ressentis suite à un lifting des cuisses en Tunisie sont semblables à des courbatures. La patiente se sentira un peu affaiblie la première semaine suivant l’intervention. Mais, cela est tout à fait normal vu l’importance de la quantité de graisse prélevée. Le chirurgien prescrit des antalgiques classiques pour éviter les douleurs éventuelles. </p>
              <p>Comme suite à chaque acte chirurgical, un œdème et des ecchymoses vont surgir les trois premières semaines suivants l’intervention. </p>

              <p>Des soins réguliers sont nécessaires quelques jours après l’opération lifting des cuisses en Tunisie. La patiente devra se doucher régulièrement sans omettre de sécher les zones opérées à l’aide d’un sèche-cheveux. Ce geste est très important car, il permet d’éviter l’humidification de l’incision et de ne pas nuire au bon déroulement de la cicatrisation. Il est très recommandé d’éviter le port de vêtements trop serrés au cours de la période de convalescence et de ne pas s’exposer au soleil. </p>

              <p>Le premier mois, la patiente devra porter quotidiennement son panty de contention. Dans certains cas, cette période pourra être prolongée afin d’éviter tout risque d’embolie ou de phlébite. </p>
              <p>Le sport et les mouvements forts sont strictement interdits. Pourtant, faire de la marche au cours de cette période est vivement recommandé malgré la gêne que pourra pressentir la patiente. Cette activité, permet en fait d’éviter de risque d’une phlébite (la manifestation d’un caillou de sang dans une veine). </p>



             </div>

             <div class=\"col-md-6 \">
             <p>Le chirurgien plasticien tunisien administre un traitement anticoagulant pour une durée de dix jours ou plus. </p>

              <p>Les complications d’un lifting des cuisses en Tunisie sont très rares. Mais, le chirurgien esthétique tunisien informe sa patiente sur tous les détails de l’intervention y compris les risques éventuels comme l’hématome, l’écoulement lymphatique, l’infection et dans certains cas plus rares l’atteinte à la sensibilité des cuisses. </p>
              <p>Comme nous l’avons signalé au début de cet article, le lifting des cuisses est une opération délicate qui nécessite l’intervention d’un chirurgien très bien expérimenté. </p>

              <p>Si vous songez à un lifting des cuisses, choisissez l’une de nos polycliniques : Clinique Pasteur, Clinique Hannibal, Centre International Carthage médical. Sans sombrer dans l’exagération, nous vous affirmons fièrement que nous disposons des meilleures compétences en chirurgie de la silhouette. Nos tarifs très raisonnables englobent tout un package (accueil à l’aéroport, consultations, honoraires chirurgien et anesthésiste, hébergement dans un hôtel de luxe, hospitalisation, soins post opératoires, matériels acquis, examens médicaux, assistance sociale etc). </p>
              <p>Contactez-nous, notre équipe se chargera de vous faciliter toutes les procédures d’un séjour médical en Tunisie. </p>

              <h2>RÉSULTATS</h2>
              <p>S’agissant des résultats d’un lifting des cuisses en Tunisie, ils sont perceptibles malgré la manifestation des bleus et des gonflements. L’aspect final des cuisses sera observé après une période de 6 mois. C’est la période requise pour que la cicatrisation s’achève complètement et pour que la forme des cuisses soit bien dessinée. </p>


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
  ", "/homes/solutions/fr/silhouette/liftingCuisses.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/silhouette/liftingCuisses.twig");
    }
}
