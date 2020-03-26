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

/* /homes/solutions/fr/silhouette/abdominoplastie.twig */
class __TwigTemplate_8593ef5183e7521cd0004399f17dd25148d92edc6e20c990dc797773bd39ae6e extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/silhouette/abdominoplastie.twig", 1);
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

             <h1>Abdominoplastie</h1>
              <p>A partir des premiers mois de la grossesse, la peau abdominale commence à subir une tension qui s’accentue progressivement pour atteindre son apogée au neuvième mois.  Après l’accouchement, cette peau   se relâche complètement et entraîne ainsi, la manifestation de plusieurs vergetures. Ces dernières apparaissent sous forme de couleurs rose ou rouge.  Elles ont généralement plusieurs tailles et sont superposées parallèlement l’une contre l’autre.  Ce phénomène produit est associé à l’élongation des fibres élastiques qui constituent notre derme. </p>

              <p>Les régimes à répétition, eux aussi, induisent un relâchement abdominal. En effet, après la perte d’une surcharge pondérale assez importante, la peau s’allonge pour préserver son rôle en tant qu’enveloppe corporelle. N’oublions pas également, les répercussions de l’âge qui contribuent naturellement à la détenions de la peau de l’abdomen. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         
              <p>Malheureusement, les activités sportives, malgré tous leurs avantages, ne donnent pas un résultat performant. En effet, selon, de nombreuses recherches faites par des spécialistes, il reste toujours un surplus de graisse et une quantité de peau excédentaire. La meilleure solution est d’opter donc, pour une autre alternative plus efficace : L’Abdominoplastie en Tunisie. </p>

              <h2>ABDOMINOPLASTIE TUNISIE</h2>
              <p>La plastie abdominale est une intervention esthétique très fréquente en Tunisie pratiquement au Centre International Carthage médical, la Clinique Hannibal et la Clinique Pasteur. L’objectif de cette intervention réalisée par les chirurgiens esthétiques tunisiens Dr Houda Kbaili, Dr Sami Mezhoud, Dr Hatem Zili et Dr Hedi Abidi est d’enlever la peau abdominale excessivement flasque et vergeturée. </p>

              <p>Il s’agit d’une ancienne pratique devenue actuellement plus performante et plus simplifiée : développement des techniques utilisées, des procédures anesthésiques, et des méthodes de sutures. Ce progrès remarquable a permis de réduire considérablement les risques auparavant liés à cette intervention et de garantir la qualité du résultat attendu. </p>

              <h2>DANS QUEL CAS EST INDIQUÉE UNE ABDOMINOPLASTIE EN TUNISIE</h2>
              <p>Pour faire une abdominoplastie en Tunisie, le patient doit impérativement être en bonne santé. La surcharge de poids ne doit pas dépasser un certain seuil. Cette opération esthétique, est déconseillée voir même interdite aux personnes ayant subi des chirurgies au niveau de la partie haute du ventre. En effet, l’étirement de la peau abdominale ne peut se faire en présence de certaines anciennes cicatrices. </p>

              <p>L’abdominoplastie peut aussi être indiquée comme une solution esthétique pour les patients qui ne souhaitent plus garder une peau abdominale flasque et très relâchée. En effet, ce défaut physique, lorsqu’il se manifeste outrageusement devient très insupportable à percevoir et même difficile à vivre avec. Nous pouvons dire donc, que ces patients cherchent à travers cette intervention esthétique à avoir un certain soulagement moral et une certaine paix psychologique. Dans plusieurs pays du monde, les femmes s’intéressent plus que les hommes à ce genre d’intervention esthétique. </p>

              <h2>DEROULEMENT DE L’INTERVENTION ABDOMINOPLASTIE</h2>
              <p>Rappelons que l’adominoplastie en Tunisie débarrasse l’abdomen de la peau excédentaire, et des amas graisseux et qu’elle permet également de resserrer la musculature abdominale. Le résultat obtenu ne peut être que satisfaisant car il permet d’avoir un ventre plat doté d’une peau ferme et non flasque. </p>

              <p>Au cours de cette intervention, il est fort probable de procéder à une lipoaspiration   pour aspirer la graisse rebelle située dans les zones sécuritaires.  Cette technique présente la prérogative d’améliorer encore plus la forme de l’abdomen. L’abdominoplastie se pratique généralement sous anesthésie générale et dure approximativement 03 heures. </p>

              <p>L’incision pratiquée lors d’une intervention abdominoplastie en Tunisie est très discrète. Elle se situe au-dessus de la zone pubienne ce qui fait qu’elle sera parfaitement dissimulée par la culotte. Le chirurgien esthétique tunisien, tire soigneusement la peau vers le haut. S’il repère un relâchement cutané au-dessus de l’ombilic, il réalise autour de celui-ci une fine incision afin de faciliter l’enlèvement de la peau excédentaire. Cette deuxième incision ne doit pas inquiéter les personnes désirant faire une abdominoplastie car, elle ne présente aucune répercussion sur le nombril. Celui-ci reste stable et ne change pas de position. L’étape suivante, consiste à enlever la graisse cumulée et à réaliser des points de sutures au niveau des muscles abdominaux pour qu’ils se resserrent comme avant et pour qu’ils retrouvent leur ancienne fonctionnalité. On parle d’une distension des muscles abdominaux.   Ayant ressoudé les muscles, le chirurgien étire la peau vers le bas.  Grâce à ce geste d’étirement les vergetures seront remarquablement atténuées. </p>

              <p>Porter une gaine de contention est vivement recommandé durant les 4 ou 6 semaines après l’intervention. Le patient ne devra pas faire des efforts physiques importants durant le tout le premier mois qui suit l’intervention.  Le chirurgien examinera les cicatrices pour évaluer le processus de la cicatrisation. </p>


             </div>

             <div class=\"col-md-6 \">

              <h2>CICATRICES D’UNE ABDOMINOPLASTIE</h2>
              <p>Nos chirurgiens esthétiques tunisiens procèdent à des méthodes très récentes permettant de réaliser des cicatrices très fines. Dans le cas d’un relâchement excessif, des sutures spéciales seront réalisées afin d’optimiser le nouvel aspect de la peau. Les cicatrices seront entourées de quelques lésions légères mais elles disparaitront après quelques mois. Dans le cas contraire, une simple intervention peut être faite sous anesthésie locale.   Cette solution séduit un grand nombre de nos patients. </p>

              <h2>RÉSULTAT D’UNE ABDOMINOPLASTIE</h2>
              <p>Généralement, tous nos patients veulent apercevoir le résultat final d’une abdominoplastie juste après l’intervention. Ils n’ont pas tort. Car, ils ont hâte de retrouver l’abdomen des « bons vieux temps ». Cependant, comme pour toute chirurgie, une période de convalescence demeure nécessaire pour que la peau se réadapte et pour que les cicatrices s’estompent parfaitement. La période estimée pour pouvoir évaluer les effets d’une abdominoplasie en Tunisie varie approximativement entre 2 et 4 mois. Cela, ne signifie pas que les améliorations ne seront pas perceptibles avant ces délais : le lendemain de l’intervention, quelques changements seront remarquables mais, pas complets. </p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 143
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 145
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/silhouette/abdominoplastie.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 143
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/silhouette/abdominoplastie.twig", 144)->display($context);
        // line 145
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/silhouette/abdominoplastie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 145,  242 => 144,  238 => 143,  234 => 71,  232 => 70,  226 => 69,  220 => 145,  218 => 143,  206 => 134,  159 => 90,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

             <h1>Abdominoplastie</h1>
              <p>A partir des premiers mois de la grossesse, la peau abdominale commence à subir une tension qui s’accentue progressivement pour atteindre son apogée au neuvième mois.  Après l’accouchement, cette peau   se relâche complètement et entraîne ainsi, la manifestation de plusieurs vergetures. Ces dernières apparaissent sous forme de couleurs rose ou rouge.  Elles ont généralement plusieurs tailles et sont superposées parallèlement l’une contre l’autre.  Ce phénomène produit est associé à l’élongation des fibres élastiques qui constituent notre derme. </p>

              <p>Les régimes à répétition, eux aussi, induisent un relâchement abdominal. En effet, après la perte d’une surcharge pondérale assez importante, la peau s’allonge pour préserver son rôle en tant qu’enveloppe corporelle. N’oublions pas également, les répercussions de l’âge qui contribuent naturellement à la détenions de la peau de l’abdomen. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         
              <p>Malheureusement, les activités sportives, malgré tous leurs avantages, ne donnent pas un résultat performant. En effet, selon, de nombreuses recherches faites par des spécialistes, il reste toujours un surplus de graisse et une quantité de peau excédentaire. La meilleure solution est d’opter donc, pour une autre alternative plus efficace : L’Abdominoplastie en Tunisie. </p>

              <h2>ABDOMINOPLASTIE TUNISIE</h2>
              <p>La plastie abdominale est une intervention esthétique très fréquente en Tunisie pratiquement au Centre International Carthage médical, la Clinique Hannibal et la Clinique Pasteur. L’objectif de cette intervention réalisée par les chirurgiens esthétiques tunisiens Dr Houda Kbaili, Dr Sami Mezhoud, Dr Hatem Zili et Dr Hedi Abidi est d’enlever la peau abdominale excessivement flasque et vergeturée. </p>

              <p>Il s’agit d’une ancienne pratique devenue actuellement plus performante et plus simplifiée : développement des techniques utilisées, des procédures anesthésiques, et des méthodes de sutures. Ce progrès remarquable a permis de réduire considérablement les risques auparavant liés à cette intervention et de garantir la qualité du résultat attendu. </p>

              <h2>DANS QUEL CAS EST INDIQUÉE UNE ABDOMINOPLASTIE EN TUNISIE</h2>
              <p>Pour faire une abdominoplastie en Tunisie, le patient doit impérativement être en bonne santé. La surcharge de poids ne doit pas dépasser un certain seuil. Cette opération esthétique, est déconseillée voir même interdite aux personnes ayant subi des chirurgies au niveau de la partie haute du ventre. En effet, l’étirement de la peau abdominale ne peut se faire en présence de certaines anciennes cicatrices. </p>

              <p>L’abdominoplastie peut aussi être indiquée comme une solution esthétique pour les patients qui ne souhaitent plus garder une peau abdominale flasque et très relâchée. En effet, ce défaut physique, lorsqu’il se manifeste outrageusement devient très insupportable à percevoir et même difficile à vivre avec. Nous pouvons dire donc, que ces patients cherchent à travers cette intervention esthétique à avoir un certain soulagement moral et une certaine paix psychologique. Dans plusieurs pays du monde, les femmes s’intéressent plus que les hommes à ce genre d’intervention esthétique. </p>

              <h2>DEROULEMENT DE L’INTERVENTION ABDOMINOPLASTIE</h2>
              <p>Rappelons que l’adominoplastie en Tunisie débarrasse l’abdomen de la peau excédentaire, et des amas graisseux et qu’elle permet également de resserrer la musculature abdominale. Le résultat obtenu ne peut être que satisfaisant car il permet d’avoir un ventre plat doté d’une peau ferme et non flasque. </p>

              <p>Au cours de cette intervention, il est fort probable de procéder à une lipoaspiration   pour aspirer la graisse rebelle située dans les zones sécuritaires.  Cette technique présente la prérogative d’améliorer encore plus la forme de l’abdomen. L’abdominoplastie se pratique généralement sous anesthésie générale et dure approximativement 03 heures. </p>

              <p>L’incision pratiquée lors d’une intervention abdominoplastie en Tunisie est très discrète. Elle se situe au-dessus de la zone pubienne ce qui fait qu’elle sera parfaitement dissimulée par la culotte. Le chirurgien esthétique tunisien, tire soigneusement la peau vers le haut. S’il repère un relâchement cutané au-dessus de l’ombilic, il réalise autour de celui-ci une fine incision afin de faciliter l’enlèvement de la peau excédentaire. Cette deuxième incision ne doit pas inquiéter les personnes désirant faire une abdominoplastie car, elle ne présente aucune répercussion sur le nombril. Celui-ci reste stable et ne change pas de position. L’étape suivante, consiste à enlever la graisse cumulée et à réaliser des points de sutures au niveau des muscles abdominaux pour qu’ils se resserrent comme avant et pour qu’ils retrouvent leur ancienne fonctionnalité. On parle d’une distension des muscles abdominaux.   Ayant ressoudé les muscles, le chirurgien étire la peau vers le bas.  Grâce à ce geste d’étirement les vergetures seront remarquablement atténuées. </p>

              <p>Porter une gaine de contention est vivement recommandé durant les 4 ou 6 semaines après l’intervention. Le patient ne devra pas faire des efforts physiques importants durant le tout le premier mois qui suit l’intervention.  Le chirurgien examinera les cicatrices pour évaluer le processus de la cicatrisation. </p>


             </div>

             <div class=\"col-md-6 \">

              <h2>CICATRICES D’UNE ABDOMINOPLASTIE</h2>
              <p>Nos chirurgiens esthétiques tunisiens procèdent à des méthodes très récentes permettant de réaliser des cicatrices très fines. Dans le cas d’un relâchement excessif, des sutures spéciales seront réalisées afin d’optimiser le nouvel aspect de la peau. Les cicatrices seront entourées de quelques lésions légères mais elles disparaitront après quelques mois. Dans le cas contraire, une simple intervention peut être faite sous anesthésie locale.   Cette solution séduit un grand nombre de nos patients. </p>

              <h2>RÉSULTAT D’UNE ABDOMINOPLASTIE</h2>
              <p>Généralement, tous nos patients veulent apercevoir le résultat final d’une abdominoplastie juste après l’intervention. Ils n’ont pas tort. Car, ils ont hâte de retrouver l’abdomen des « bons vieux temps ». Cependant, comme pour toute chirurgie, une période de convalescence demeure nécessaire pour que la peau se réadapte et pour que les cicatrices s’estompent parfaitement. La période estimée pour pouvoir évaluer les effets d’une abdominoplasie en Tunisie varie approximativement entre 2 et 4 mois. Cela, ne signifie pas que les améliorations ne seront pas perceptibles avant ces délais : le lendemain de l’intervention, quelques changements seront remarquables mais, pas complets. </p>



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
  ", "/homes/solutions/fr/silhouette/abdominoplastie.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/silhouette/abdominoplastie.twig");
    }
}
