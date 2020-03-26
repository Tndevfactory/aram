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

/* /homes/solutions/fr/silhouette/augmentationFesses.twig */
class __TwigTemplate_dca62e2ffb4e74e87e65257c03a11cbd190458fff09ebe900058addbe083ee85 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/silhouette/augmentationFesses.twig", 1);
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
        echo "  <title> besoins/fr/ride </title> ";
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

             <h1>Augmentation fesses</h1>
              <p>La forme des cuisses des animaux quadrupèdes nous fait croire qu’ils ont des fesses semblables à celles des êtres humains. Or, contrairement à ce que l’on pense, avoir des fesses est une caractéristique que seule l’espèce humaine se réjouit d’en avoir. </p>

              <p>Les fesses se composent de muscles ayant une forme saillante ou une forme arrondie. Ces muscles sont appelés dans le jargon médical le petit fessier, le moyen fessier et le grand fessier. Ils ont chacun un rôle bien déterminé.  Grâce au grand fessier, situé derrière le bassin, nous pouvons bouger notre jambe que ce soit en arrière ou vers l’extérieur.  Le deuxième muscle qui est le moyen fessier, prend la forme d’un éventail. Son rôle consiste à nous faciliter les mouvements de rotation au niveau des hanches. Il trace le galbe et le haut des fesses. Le petit fessier, quant à lui se localise dans une zone plus profonde en comparaison avec les autres muscles. Il forme la rondeur de la hanche et permet de stabiliser la position des fesses. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         <h2>AUGMENTATION FESSES TUNISIE : HISTOIRE</h2>
                <p>Les années 60 l’augmentation des fesses était encore un sujet tabou. Seules les célébrités connues par leur audace se permettaient de subir ce genre d’intervention esthétique. Pour les imiter, leurs fans prenaient les mêmes risques qu’eux. Nous pouvons dire donc, qu’en dépit des efforts fournis à cette époque-là, les travaux esthétiques sur les fesses n’ont jamais pu éveiller l’intérêt des gens. Le manque de motivation, n’était pas seulement lié à des croyances culturelles ou dogmatiques mais plutôt, à des craintes justifiées. En effet, l’intervention augmentation des fesses était extrêmement compliquée et nouée à l’échec dans la plupart des cas. Rien ne valait donc la peine de mettre sa santé en péril ou de risquer sa vie. </p>

                <p>Au début de l’année 1969, les pratiques de l’opération augmentation des fesses se sont nettement améliorées et l’insertion des implants fessiers par voie cutanée a retrouvé un nouveau souffle. Cependant, ces travaux, ne pouvait pas encore atteindre l’objectif souhaité : avoir un résultat satisfaisant sans entraîner des complications. </p>

                <p>En 1969 aussi, le Dr RJ Bertlet procédait selon une nouvelle méthode. Pour augmenter le volume des fesses, il se servait des implants mammaires arrondis. Le résultat n’était pas assez performant car les fesses traitées reflétaient une allure artificielle et un aspect très ridicule. </p>

                <p>L’année suivante en 1970, Dr Mario Gonzales pensait que le fait de changer la forme des prothèses offrirait   un meilleur résultat.  Il concevait donc, des implants de volumes plus importants ayant la forme d’une amande. Pour une autre fois, le résultat n’était pas probant. L’intervention, ne permettait pas de garder le rapport de symétrie entre les fesses ni d’éviter les risques d’infection. </p>

                <p>En 1984 José Roblès change le type de l’implant et décide de créer une loge intermusculaire pour poser les prothèses.  L’emplacement choisis se situait entre le petit et le moyen fessier. Cette technique a eu un grand succès car elle permettait aux patientes d’avoir des fesses « pulpées » sans déclencher des complications comme la contraction capsulaire. </p>

                <p>La pose des implants fessiers aux années 80 a pu relever les principaux défis. Mais, il fallait améliorer cette méthode encore plus car, le procédé utilisé était un acte à la fois compliqué et critique. </p>

                <p>Plusieurs recherches se sont ainsi, concentrées sur le développement de cette intervention comme les travaux réalisés par les chirurgiens mexicains et les chirurgiens sud-américains et le rapport publié par Raphael Gonzales en 2004. </p>

                <p>Au fil du temps, de nombreux essais chirurgicaux se sont donc succédés pour simplifier l’opération augmentation des fesses et pour améliorer la qualité des résultats obtenus. Grâce aux travaux   de José de la Péra, ces objectifs  fussent enfin réalisés. Sa méthode innovée consistait à créer des implants fessiers texturés et à les insérer au-dessus des muscles. L’intervention était spectaculairement simplifiée et il devenait possible de poser des implants fessiers bien discrets. </p>

                <h2>INTERVENTION AUGMENTATION DES FESSES EN TUNISIE</h2>
                <p>Certains patients croient que l’augmentation des fesses se réalise seulement à l’aide des implants fessiers. Or, il existe bel et bien une autre solution complètement différente : le lipofilling des fesses. Nous mettons à votre disposition une description explicative pour connaître les techniques adaptées par chacune de ces interventions esthétiques. </p>

                <p>L’opération esthétique, augmentation des fesses par des prothèses fessières s’effectue dans tous les cas sous anesthésie générale. Le procédé chirurgical se résume ainsi : le chirurgien esthétique tunisien réalise une incision inter-fessière dissimulée à l’intérieur du pli fessier. L’incision sert à créer des loges entre les muscles fessiers pour pouvoir insérer les implants.  L’emplacement de ces derniers se fait selon, des mesures bien précises pour s’assurer d’avoir un très bon résultat. </p>

                <p>Le résultat est considéré parfait lorsque les fesses augmentent de volume symétriquement et lorsqu’ils paraissent en parfaite harmonie avec la silhouette de la patiente. La fermeture de l’incision se fait méticuleusement ce qui permet d’éviter la mise en place d’un drainage. </p>

                <p>Les suites post-opératoires d’une augmentation des fesses induisent des douleurs qui vont disparaître progressivement les jours suivant l’opération.   La patiente ne devra pas s’appuyer sur les prothèses notamment en position assise.  Ceci, pourra créer une gêne importante. Mais le confort sera retrouvé à partir de la troisième semaine. </p>




             </div>

             <div class=\"col-md-6 \">
             
              <p>Quant au lipofilling des fesses, il ressemble énormément au lipomodelage mammaire en Tunisie. Le chirurgien prélève une quantité de   graisse de plusieurs parties du corps par exemple des hanches et de la partie intérieure des cuisses. Puis, il réinjecte cette quantité au niveau des fesses. Le lipofilling des fesses en Tunisie intéresse particulièrement les personnes qui n’apprécient pas l’usage des implants fessiers. </p>

              <p>Cependant, cette technique ne peut être appliquée si le corps de la patiente ne possède pas assez de réserves graisseuses. En effet, la quantité prélevée doit être assez importante pour pouvoir changer remarquablement le volume des fesses. Cette intervention s’effectue également sous anesthésie générale. </p>

              <p>Concernant les suites opératoires liées au lipofilling des fesses, des ecchymoses et des œdèmes seront apparus sur les zones traitées par une liposuccion. Des gonflements se manifestent aussi au niveau de la partie réparée. Tous ces symptômes sont passagers et disparaîtront au bout de quelques jours. </p>


            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 148
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 150
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/silhouette/augmentationFesses.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 148
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/silhouette/augmentationFesses.twig", 149)->display($context);
        // line 150
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/silhouette/augmentationFesses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 150,  247 => 149,  243 => 148,  239 => 71,  237 => 70,  231 => 69,  225 => 150,  223 => 148,  211 => 139,  159 => 90,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> besoins/fr/ride </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Augmentation fesses</h1>
              <p>La forme des cuisses des animaux quadrupèdes nous fait croire qu’ils ont des fesses semblables à celles des êtres humains. Or, contrairement à ce que l’on pense, avoir des fesses est une caractéristique que seule l’espèce humaine se réjouit d’en avoir. </p>

              <p>Les fesses se composent de muscles ayant une forme saillante ou une forme arrondie. Ces muscles sont appelés dans le jargon médical le petit fessier, le moyen fessier et le grand fessier. Ils ont chacun un rôle bien déterminé.  Grâce au grand fessier, situé derrière le bassin, nous pouvons bouger notre jambe que ce soit en arrière ou vers l’extérieur.  Le deuxième muscle qui est le moyen fessier, prend la forme d’un éventail. Son rôle consiste à nous faciliter les mouvements de rotation au niveau des hanches. Il trace le galbe et le haut des fesses. Le petit fessier, quant à lui se localise dans une zone plus profonde en comparaison avec les autres muscles. Il forme la rondeur de la hanche et permet de stabiliser la position des fesses. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         <h2>AUGMENTATION FESSES TUNISIE : HISTOIRE</h2>
                <p>Les années 60 l’augmentation des fesses était encore un sujet tabou. Seules les célébrités connues par leur audace se permettaient de subir ce genre d’intervention esthétique. Pour les imiter, leurs fans prenaient les mêmes risques qu’eux. Nous pouvons dire donc, qu’en dépit des efforts fournis à cette époque-là, les travaux esthétiques sur les fesses n’ont jamais pu éveiller l’intérêt des gens. Le manque de motivation, n’était pas seulement lié à des croyances culturelles ou dogmatiques mais plutôt, à des craintes justifiées. En effet, l’intervention augmentation des fesses était extrêmement compliquée et nouée à l’échec dans la plupart des cas. Rien ne valait donc la peine de mettre sa santé en péril ou de risquer sa vie. </p>

                <p>Au début de l’année 1969, les pratiques de l’opération augmentation des fesses se sont nettement améliorées et l’insertion des implants fessiers par voie cutanée a retrouvé un nouveau souffle. Cependant, ces travaux, ne pouvait pas encore atteindre l’objectif souhaité : avoir un résultat satisfaisant sans entraîner des complications. </p>

                <p>En 1969 aussi, le Dr RJ Bertlet procédait selon une nouvelle méthode. Pour augmenter le volume des fesses, il se servait des implants mammaires arrondis. Le résultat n’était pas assez performant car les fesses traitées reflétaient une allure artificielle et un aspect très ridicule. </p>

                <p>L’année suivante en 1970, Dr Mario Gonzales pensait que le fait de changer la forme des prothèses offrirait   un meilleur résultat.  Il concevait donc, des implants de volumes plus importants ayant la forme d’une amande. Pour une autre fois, le résultat n’était pas probant. L’intervention, ne permettait pas de garder le rapport de symétrie entre les fesses ni d’éviter les risques d’infection. </p>

                <p>En 1984 José Roblès change le type de l’implant et décide de créer une loge intermusculaire pour poser les prothèses.  L’emplacement choisis se situait entre le petit et le moyen fessier. Cette technique a eu un grand succès car elle permettait aux patientes d’avoir des fesses « pulpées » sans déclencher des complications comme la contraction capsulaire. </p>

                <p>La pose des implants fessiers aux années 80 a pu relever les principaux défis. Mais, il fallait améliorer cette méthode encore plus car, le procédé utilisé était un acte à la fois compliqué et critique. </p>

                <p>Plusieurs recherches se sont ainsi, concentrées sur le développement de cette intervention comme les travaux réalisés par les chirurgiens mexicains et les chirurgiens sud-américains et le rapport publié par Raphael Gonzales en 2004. </p>

                <p>Au fil du temps, de nombreux essais chirurgicaux se sont donc succédés pour simplifier l’opération augmentation des fesses et pour améliorer la qualité des résultats obtenus. Grâce aux travaux   de José de la Péra, ces objectifs  fussent enfin réalisés. Sa méthode innovée consistait à créer des implants fessiers texturés et à les insérer au-dessus des muscles. L’intervention était spectaculairement simplifiée et il devenait possible de poser des implants fessiers bien discrets. </p>

                <h2>INTERVENTION AUGMENTATION DES FESSES EN TUNISIE</h2>
                <p>Certains patients croient que l’augmentation des fesses se réalise seulement à l’aide des implants fessiers. Or, il existe bel et bien une autre solution complètement différente : le lipofilling des fesses. Nous mettons à votre disposition une description explicative pour connaître les techniques adaptées par chacune de ces interventions esthétiques. </p>

                <p>L’opération esthétique, augmentation des fesses par des prothèses fessières s’effectue dans tous les cas sous anesthésie générale. Le procédé chirurgical se résume ainsi : le chirurgien esthétique tunisien réalise une incision inter-fessière dissimulée à l’intérieur du pli fessier. L’incision sert à créer des loges entre les muscles fessiers pour pouvoir insérer les implants.  L’emplacement de ces derniers se fait selon, des mesures bien précises pour s’assurer d’avoir un très bon résultat. </p>

                <p>Le résultat est considéré parfait lorsque les fesses augmentent de volume symétriquement et lorsqu’ils paraissent en parfaite harmonie avec la silhouette de la patiente. La fermeture de l’incision se fait méticuleusement ce qui permet d’éviter la mise en place d’un drainage. </p>

                <p>Les suites post-opératoires d’une augmentation des fesses induisent des douleurs qui vont disparaître progressivement les jours suivant l’opération.   La patiente ne devra pas s’appuyer sur les prothèses notamment en position assise.  Ceci, pourra créer une gêne importante. Mais le confort sera retrouvé à partir de la troisième semaine. </p>




             </div>

             <div class=\"col-md-6 \">
             
              <p>Quant au lipofilling des fesses, il ressemble énormément au lipomodelage mammaire en Tunisie. Le chirurgien prélève une quantité de   graisse de plusieurs parties du corps par exemple des hanches et de la partie intérieure des cuisses. Puis, il réinjecte cette quantité au niveau des fesses. Le lipofilling des fesses en Tunisie intéresse particulièrement les personnes qui n’apprécient pas l’usage des implants fessiers. </p>

              <p>Cependant, cette technique ne peut être appliquée si le corps de la patiente ne possède pas assez de réserves graisseuses. En effet, la quantité prélevée doit être assez importante pour pouvoir changer remarquablement le volume des fesses. Cette intervention s’effectue également sous anesthésie générale. </p>

              <p>Concernant les suites opératoires liées au lipofilling des fesses, des ecchymoses et des œdèmes seront apparus sur les zones traitées par une liposuccion. Des gonflements se manifestent aussi au niveau de la partie réparée. Tous ces symptômes sont passagers et disparaîtront au bout de quelques jours. </p>


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
  ", "/homes/solutions/fr/silhouette/augmentationFesses.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/silhouette/augmentationFesses.twig");
    }
}