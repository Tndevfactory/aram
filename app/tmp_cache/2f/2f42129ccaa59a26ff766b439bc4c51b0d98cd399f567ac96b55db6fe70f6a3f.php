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

/* /homes/besoins/fr/visage/paupiereTombante.twig */
class __TwigTemplate_9547fef964ddfdb428bffd0eb615bb0cd05e401315e317f1dc4484b1e661f6e9 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/visage/paupiereTombante.twig", 1);
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

              <h1>Paupières tombantes</h1>
              <p>Le regard est très important, il est le miroir de l’âme et reflète toutes nos émotions. Mais parfois, il arrive que certaines dégradations puissent altérer le regard et conférer à la personne un air triste fatigué et vieilli.</p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

              <h2>Avoir les paupières qui tombent : qu’est-ce que c’est ?</h2>
              <p>On parle de paupières tombantes en cas d’affaissement des paupières supérieures qui forment un pli sur l’œil, une sorte de chapeau. </p>
              <p>Etant donné que la peau qui entoure les yeux est très fine et souple, elle vieillit en premier. En plus, le muscle qui permet le clignement des yeux est très sollicité, donc ce qui affecte encore plus l’élasticité de la peau du contour des yeux.</p>
              <p>Au fil des ans, la peau des paupières se relâche créant ainsi une ptose palpébrale. Cette ptose altère sévèrement la qualité de vie puisqu’elles alourdissent le regard et même la vue. Elles donnent plus l’air fatigué au regard ce qui donne un aspect plus vieux qu’il en est.</p>
              <h2>Qu’est ce qui cause le relâchement des paupières ?</h2>
              <p>La principale cause des paupières tombantes c’est le vieillissement naturel qui détériore l’élasticité de la peau mais surtout le muscle releveur. Une autre cause peut être notée, c’est lorsque le muscle de la paupière est moins développé. S’en suit alors, un détachement du tendon qui ne pourra plus soutenir la paupière. </p>
              <p>Les paupières tombantes est un problème qui affecte aussi les personnes qui suivent une mauvaise hygiène de vie ou tout simplement avec l’âge.</p>
              <p>Avoir une mauvaise hygiène de vie se traduit par :</p>
              <ul>
              <li>De longues nuits sans sommeil, </li>
              <li>L’alcool et le tabagisme, </li>
              <li>Une exposition au soleil sans protection, </li>
              <li>Le stress.</li>
              </ul>


             </div>

             <div class=\"col-md-6\">
               <h2>Comment corriger les paupières tombantes ?</h2>
                <p>Les problèmes qui touchent les paupières se corrigent soit par la médecine soit par la chirurgie esthétique. </p>
                <p>Pour dire adieu aux paupières tombantes, le médecin doit constater l’état du relâchement de la peau palpébrale afin de choisir la méthode adéquate. Donc, afin de contrer les effets du vieillissement alourdissant le regard, on a le choix entre la chirurgie de blépharoplastie ou la blépharoplastie laser.</p>


            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 130
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 132
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/visage/paupiereTombante.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 130
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/visage/paupiereTombante.twig", 131)->display($context);
        // line 132
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/visage/paupiereTombante.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 132,  229 => 131,  225 => 130,  221 => 71,  219 => 70,  213 => 69,  207 => 132,  205 => 130,  193 => 121,  157 => 88,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

              <h1>Paupières tombantes</h1>
              <p>Le regard est très important, il est le miroir de l’âme et reflète toutes nos émotions. Mais parfois, il arrive que certaines dégradations puissent altérer le regard et conférer à la personne un air triste fatigué et vieilli.</p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

              <h2>Avoir les paupières qui tombent : qu’est-ce que c’est ?</h2>
              <p>On parle de paupières tombantes en cas d’affaissement des paupières supérieures qui forment un pli sur l’œil, une sorte de chapeau. </p>
              <p>Etant donné que la peau qui entoure les yeux est très fine et souple, elle vieillit en premier. En plus, le muscle qui permet le clignement des yeux est très sollicité, donc ce qui affecte encore plus l’élasticité de la peau du contour des yeux.</p>
              <p>Au fil des ans, la peau des paupières se relâche créant ainsi une ptose palpébrale. Cette ptose altère sévèrement la qualité de vie puisqu’elles alourdissent le regard et même la vue. Elles donnent plus l’air fatigué au regard ce qui donne un aspect plus vieux qu’il en est.</p>
              <h2>Qu’est ce qui cause le relâchement des paupières ?</h2>
              <p>La principale cause des paupières tombantes c’est le vieillissement naturel qui détériore l’élasticité de la peau mais surtout le muscle releveur. Une autre cause peut être notée, c’est lorsque le muscle de la paupière est moins développé. S’en suit alors, un détachement du tendon qui ne pourra plus soutenir la paupière. </p>
              <p>Les paupières tombantes est un problème qui affecte aussi les personnes qui suivent une mauvaise hygiène de vie ou tout simplement avec l’âge.</p>
              <p>Avoir une mauvaise hygiène de vie se traduit par :</p>
              <ul>
              <li>De longues nuits sans sommeil, </li>
              <li>L’alcool et le tabagisme, </li>
              <li>Une exposition au soleil sans protection, </li>
              <li>Le stress.</li>
              </ul>


             </div>

             <div class=\"col-md-6\">
               <h2>Comment corriger les paupières tombantes ?</h2>
                <p>Les problèmes qui touchent les paupières se corrigent soit par la médecine soit par la chirurgie esthétique. </p>
                <p>Pour dire adieu aux paupières tombantes, le médecin doit constater l’état du relâchement de la peau palpébrale afin de choisir la méthode adéquate. Donc, afin de contrer les effets du vieillissement alourdissant le regard, on a le choix entre la chirurgie de blépharoplastie ou la blépharoplastie laser.</p>


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
  ", "/homes/besoins/fr/visage/paupiereTombante.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/visage/paupiereTombante.twig");
    }
}
