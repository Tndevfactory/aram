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

/* /homes/solutions/fr/visage/blepharoplastie.twig */
class __TwigTemplate_347c4c0949bb7aafbe97daa17c45feab596e640e5d973df263eca3429461acd4 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/visage/blepharoplastie.twig", 1);
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

             <h1>Blépharoplastie en Turquie : Chirurgie esthétique des paupières</h1>
              <p>La blépharoplastie en Turquie est une opération esthétique qui permet d’améliorer l’apparence des paupières inférieures ou des paupières supérieures par l’extraction de la peau excédentaire et de la graisse située au niveau de la périphérie des yeux. Dans certains cas, ces deux zones sont traitées simultanément.</p>
              <h2>Consultations préopératoires à la chirurgie esthétique des paupières</h2>
              <p>Une consultation avec le chirurgien plasticien turque est faite pour examiner les yeux et les paupières et pour s’assurer qu’il n’existe pas une anomalie pouvant compliquer l’opération esthétique de blépharoplastie.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                          <p>Le chirurgien esthétique prescrit un examen ophtalmologique afin de détecter une éventuelle pathologie oculaire. Il demande au patient de ne prendre aucun médicament contenant de l’aspirine dix jours avant l’opération.</p>
              <p>Après avoir bien discuté avec le patient et examiné son dossier médical, un médecin anesthésiste précisera le type de l’anesthésie. Il peut demander au patient de se présenter à jeun le jour de l’intervention. </p>
              <h2>Déroulement de l’intervention de blépharoplastie</h2>
              <p>La chirurgie esthétique des paupières peut se pratiquer en ambulatoire. Le patient pourra dans ce cas quitter la clinique le jour même.</p>
              <p>La chirurgie de blépharoplastie dure entre 30 minutes et 2 heures.</p>
              <p>Si le traitement chirurgical est effectué au niveau des paupières supérieures, les incisions cutanées seront faites d’une manière très discrète dans le sillon qui se trouve entre la partie fixe et la partie mobile de la paupière.</p>
              <p>Lorsque l’intervention se réalise au niveau des paupières inférieures, les incisions seront alors faites sous les cils et peuvent parfois se prolonger vers l’extérieur.</p>
              <p>Les incisions pratiquées lors d’une blépharoplastie servent à extraire les hernies graisseuses ainsi qu’à retirer le muscle en surplus et la peau excédentaire. Lorsque le cas traité ne présente pas un excès cutané mais seulement des poches isolées, les incisions se font à l’intérieur des paupières sans laisser apparaître aucune cicatrice.</p>
              <p>La suture des incisions se fait à l’aide de fils non résorbables qui seront enlevés deux semaines après l’intervention de blépharoplastie en Turquie.</p>


             </div>

             <div class=\"col-md-6 \">
              <h2>Suites opératoires de la blépharoplastie</h2>
              <p>La blépharoplastie est une intervention peu douloureuse. Le patient peut ressentir une certaine tension au niveau des paupières. Quant aux yeux, ils seront légèrement irrités. Les troubles de vision sont aussi envisageables. </p>
              <p>Durant la période de convalescence, le patient est appelé à bien se reposer les premiers jours suivants l’intervention. Il devra aussi faire très attention à ne pas se pencher la tête en bas.</p>
              <p>Un œdème et des ecchymoses seront évidemment présents. Mais, ils s'atténuent après quelques jours.</p>
              <p>Aux premiers temps, le patient sentira un certain inconfort provenant du fait de ne pas pouvoir fermer les paupières. Pas de craintes à avoir, tous ces signes sont passagers.</p>
              <p>Après 20 jours au maximum, le patient pourra reprendre sa vie quotidienne.</p>
              <h2>Résultat de la blépharoplastie</h2>
              <p>Le résultat sera apprécié au bout de 3 à 6 mois, temps nécessaires aux cicatrices pour s’estomper et aux tissus pour s’assouplir.</p>
              <p>La blépharoplastie pratiquée en Turquie corrige le relâchement des paupières et garantit l’obtention d’un regard frais et rajeuni. Le patient obtient alors un air reposé et bien rafraichi, il parait même plus jeune. Il gagne en : confort, confiance en soi et esthétisme.</p>
              <p>C’est un résultat définitif. En effet, les poches de graisse sous les yeux, une fois éliminés, ne reviennent jamais.</p>


            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 133
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 135
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/visage/blepharoplastie.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 133
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/visage/blepharoplastie.twig", 134)->display($context);
        // line 135
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/visage/blepharoplastie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 135,  232 => 134,  228 => 133,  224 => 71,  222 => 70,  216 => 69,  210 => 135,  208 => 133,  196 => 124,  158 => 89,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

             <h1>Blépharoplastie en Turquie : Chirurgie esthétique des paupières</h1>
              <p>La blépharoplastie en Turquie est une opération esthétique qui permet d’améliorer l’apparence des paupières inférieures ou des paupières supérieures par l’extraction de la peau excédentaire et de la graisse située au niveau de la périphérie des yeux. Dans certains cas, ces deux zones sont traitées simultanément.</p>
              <h2>Consultations préopératoires à la chirurgie esthétique des paupières</h2>
              <p>Une consultation avec le chirurgien plasticien turque est faite pour examiner les yeux et les paupières et pour s’assurer qu’il n’existe pas une anomalie pouvant compliquer l’opération esthétique de blépharoplastie.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                          <p>Le chirurgien esthétique prescrit un examen ophtalmologique afin de détecter une éventuelle pathologie oculaire. Il demande au patient de ne prendre aucun médicament contenant de l’aspirine dix jours avant l’opération.</p>
              <p>Après avoir bien discuté avec le patient et examiné son dossier médical, un médecin anesthésiste précisera le type de l’anesthésie. Il peut demander au patient de se présenter à jeun le jour de l’intervention. </p>
              <h2>Déroulement de l’intervention de blépharoplastie</h2>
              <p>La chirurgie esthétique des paupières peut se pratiquer en ambulatoire. Le patient pourra dans ce cas quitter la clinique le jour même.</p>
              <p>La chirurgie de blépharoplastie dure entre 30 minutes et 2 heures.</p>
              <p>Si le traitement chirurgical est effectué au niveau des paupières supérieures, les incisions cutanées seront faites d’une manière très discrète dans le sillon qui se trouve entre la partie fixe et la partie mobile de la paupière.</p>
              <p>Lorsque l’intervention se réalise au niveau des paupières inférieures, les incisions seront alors faites sous les cils et peuvent parfois se prolonger vers l’extérieur.</p>
              <p>Les incisions pratiquées lors d’une blépharoplastie servent à extraire les hernies graisseuses ainsi qu’à retirer le muscle en surplus et la peau excédentaire. Lorsque le cas traité ne présente pas un excès cutané mais seulement des poches isolées, les incisions se font à l’intérieur des paupières sans laisser apparaître aucune cicatrice.</p>
              <p>La suture des incisions se fait à l’aide de fils non résorbables qui seront enlevés deux semaines après l’intervention de blépharoplastie en Turquie.</p>


             </div>

             <div class=\"col-md-6 \">
              <h2>Suites opératoires de la blépharoplastie</h2>
              <p>La blépharoplastie est une intervention peu douloureuse. Le patient peut ressentir une certaine tension au niveau des paupières. Quant aux yeux, ils seront légèrement irrités. Les troubles de vision sont aussi envisageables. </p>
              <p>Durant la période de convalescence, le patient est appelé à bien se reposer les premiers jours suivants l’intervention. Il devra aussi faire très attention à ne pas se pencher la tête en bas.</p>
              <p>Un œdème et des ecchymoses seront évidemment présents. Mais, ils s'atténuent après quelques jours.</p>
              <p>Aux premiers temps, le patient sentira un certain inconfort provenant du fait de ne pas pouvoir fermer les paupières. Pas de craintes à avoir, tous ces signes sont passagers.</p>
              <p>Après 20 jours au maximum, le patient pourra reprendre sa vie quotidienne.</p>
              <h2>Résultat de la blépharoplastie</h2>
              <p>Le résultat sera apprécié au bout de 3 à 6 mois, temps nécessaires aux cicatrices pour s’estomper et aux tissus pour s’assouplir.</p>
              <p>La blépharoplastie pratiquée en Turquie corrige le relâchement des paupières et garantit l’obtention d’un regard frais et rajeuni. Le patient obtient alors un air reposé et bien rafraichi, il parait même plus jeune. Il gagne en : confort, confiance en soi et esthétisme.</p>
              <p>C’est un résultat définitif. En effet, les poches de graisse sous les yeux, une fois éliminés, ne reviennent jamais.</p>


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
  ", "/homes/solutions/fr/visage/blepharoplastie.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/visage/blepharoplastie.twig");
    }
}
