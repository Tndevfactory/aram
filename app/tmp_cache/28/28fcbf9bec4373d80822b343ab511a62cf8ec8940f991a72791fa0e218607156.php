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

/* /homes/solutions/fr/visage/genioplastie.twig */
class __TwigTemplate_3f6b3121e9a85382765c8ba475c17dfe9f80aef56ad4686a062493d8f0eb1324 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/visage/genioplastie.twig", 1);
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

            <h1>Génioplastie ou mentoplastie réalisée en Turquie</h1> 
            <p>La génioplastie pratiquée en Turquie sert à corriger la forme disgracieuse d’un menton et à améliorer les deux vues du visage : la vue de face et la vue de profil. L’acte chirurgical au cours d’une génioplastie consiste à remodeler la forme d’un menton en galoche ou la forme d’un menton fuyant. </p>
            <p>La détermination de la nature du menton se fait à l’aide d’une ligne verticale qui débute du front, passe par le nez et s’arrête au niveau de la surface horizontale du menton.</p>

             

            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

             <p>En effet, si cette ligne s’arrête avant la limite du menton celui-ci est alors saillant. Si cette même ligne dépasse le menton, il est dans ce cas, fuyant. Le chirurgien peut détecter, lors de l’examen une graisse excédentaire au niveau de la zone du menton. Avant de faire une génioplastie, il procèdera à une liposuccion pour aspirer la graisse rebelle.</p>
              <h2>Comment se déroule la génioplastie ?</h2> 
              <p>Le chirurgien, après avoir examiné le patient décidera du type de l’anesthésie à faire et de la durée de l’hospitalisation. Une génioplastie peut être pratiquée sous anesthésie générale ou bien sous anesthésie locale. Elle peut nécessiter une nuit d’hospitalisation comme elle peut se dérouler en ambulatoire. La génioplastie en Turquie dure 30 minutes ou une heure.</p>

              <p>L’incision réalisée au cours de cette intervention est très discrète. Elle se réalise soigneusement à l’intérieur de l’appareil buccal au niveau de la gencive inférieure ou bien à l’externe du menton à l’aide d’une technique très avancée. </p>
              <p>Pour améliorer la forme d’un menton en galoche, le chirurgien procède à un rabotage de l’os ou bien à une ostéotomie de recul. La première technique requiert juste de limer la partie traitée alors que la deuxième technique consiste à couper carrément l’excès osseux et à se servir de palettes et de vis métalliques pour fixer le devant du menton. Cette méthode est appelée ostéotomie de recul.</p>

             </div>
             <div class=\"col-md-6\">
               <p>La réparation de la forme inesthétique d’un menton fuyant, se traite par la pose d’une prothèse, par une greffe osseuse ou par une ostéotomie d’avancement. Cette dernière consiste à créer un fragment osseux puis à le repositionner vers l’avant à l’aide de palettes et de vis métalliques.</p>
              <p>Pour réaliser une greffe osseuse, le chirurgien prélève une quantité d’os de l’une de ces parties : le nez ou le bassin puis il s’en sert pour remodeler la forme du menton. Cette technique, bien étudiée et très fréquente n’altère pas les parties donneuses.</p>
              <h2>Suites opératoires de la chirurgie esthétique du menton</h2> 
              <p>La génioplastie est une opération esthétique peu douloureuse. Quelle que soit la méthode utilisée lors de l’intervention, le patient pourra dans tous les cas bouger sa mâchoire sans aucune crainte. Il portera un pansement modelant sous le menton durant 05 ou 08 jours. Des bleus et un œdème seront observés les premiers.</p>
              <h2>Résultat de la mentoplastie </h2>
              <p>Le résultat d’une génioplastie est immédiat. Il s’améliore davantage après 03 mois quand l’œdème sera complètement résorbé. </p>

            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 123
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 125
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/visage/genioplastie.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 123
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/visage/genioplastie.twig", 124)->display($context);
        // line 125
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/visage/genioplastie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 125,  222 => 124,  218 => 123,  214 => 71,  212 => 70,  206 => 69,  200 => 125,  198 => 123,  186 => 114,  158 => 89,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

            <h1>Génioplastie ou mentoplastie réalisée en Turquie</h1> 
            <p>La génioplastie pratiquée en Turquie sert à corriger la forme disgracieuse d’un menton et à améliorer les deux vues du visage : la vue de face et la vue de profil. L’acte chirurgical au cours d’une génioplastie consiste à remodeler la forme d’un menton en galoche ou la forme d’un menton fuyant. </p>
            <p>La détermination de la nature du menton se fait à l’aide d’une ligne verticale qui débute du front, passe par le nez et s’arrête au niveau de la surface horizontale du menton.</p>

             

            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

             <p>En effet, si cette ligne s’arrête avant la limite du menton celui-ci est alors saillant. Si cette même ligne dépasse le menton, il est dans ce cas, fuyant. Le chirurgien peut détecter, lors de l’examen une graisse excédentaire au niveau de la zone du menton. Avant de faire une génioplastie, il procèdera à une liposuccion pour aspirer la graisse rebelle.</p>
              <h2>Comment se déroule la génioplastie ?</h2> 
              <p>Le chirurgien, après avoir examiné le patient décidera du type de l’anesthésie à faire et de la durée de l’hospitalisation. Une génioplastie peut être pratiquée sous anesthésie générale ou bien sous anesthésie locale. Elle peut nécessiter une nuit d’hospitalisation comme elle peut se dérouler en ambulatoire. La génioplastie en Turquie dure 30 minutes ou une heure.</p>

              <p>L’incision réalisée au cours de cette intervention est très discrète. Elle se réalise soigneusement à l’intérieur de l’appareil buccal au niveau de la gencive inférieure ou bien à l’externe du menton à l’aide d’une technique très avancée. </p>
              <p>Pour améliorer la forme d’un menton en galoche, le chirurgien procède à un rabotage de l’os ou bien à une ostéotomie de recul. La première technique requiert juste de limer la partie traitée alors que la deuxième technique consiste à couper carrément l’excès osseux et à se servir de palettes et de vis métalliques pour fixer le devant du menton. Cette méthode est appelée ostéotomie de recul.</p>

             </div>
             <div class=\"col-md-6\">
               <p>La réparation de la forme inesthétique d’un menton fuyant, se traite par la pose d’une prothèse, par une greffe osseuse ou par une ostéotomie d’avancement. Cette dernière consiste à créer un fragment osseux puis à le repositionner vers l’avant à l’aide de palettes et de vis métalliques.</p>
              <p>Pour réaliser une greffe osseuse, le chirurgien prélève une quantité d’os de l’une de ces parties : le nez ou le bassin puis il s’en sert pour remodeler la forme du menton. Cette technique, bien étudiée et très fréquente n’altère pas les parties donneuses.</p>
              <h2>Suites opératoires de la chirurgie esthétique du menton</h2> 
              <p>La génioplastie est une opération esthétique peu douloureuse. Quelle que soit la méthode utilisée lors de l’intervention, le patient pourra dans tous les cas bouger sa mâchoire sans aucune crainte. Il portera un pansement modelant sous le menton durant 05 ou 08 jours. Des bleus et un œdème seront observés les premiers.</p>
              <h2>Résultat de la mentoplastie </h2>
              <p>Le résultat d’une génioplastie est immédiat. Il s’améliore davantage après 03 mois quand l’œdème sera complètement résorbé. </p>

            </div>

             <div class=\"col-md-6\">
               <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        {% block leadFormFixBottomtfr %}
                              {% include('/homes/data/index/fr/leadFormFixBottom.twig') %}
                            {% endblock  %}  

{% endblock  %}
  ", "/homes/solutions/fr/visage/genioplastie.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/visage/genioplastie.twig");
    }
}
