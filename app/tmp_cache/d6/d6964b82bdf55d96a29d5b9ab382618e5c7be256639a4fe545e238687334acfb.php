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

/* /homes/besoins/fr/corps/fessesPlates.twig */
class __TwigTemplate_9cc702a4d54a23f3716c516972fc1a86aa781144c851378f6c48ce94b5f272fb extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/corps/fessesPlates.twig", 1);
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
        echo "  <title> fesses plates </title> ";
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

             <h1> Fesses plates </h1>
              <h2> Quelles sont les causes ? </h1>  
              <p>Des fesses plates résultent de plusieurs facteurs, dont la génétique et le vieillissement. Ce sont les gènes qui dictent la forme générale des fesses. Les femmes plus jeunes stockent de la graisse dans leurs fesses pendant la jeunesse, ce qui leur donne une apparence plus pleine. Des changements hormonaux se produisent au cours du processus de vieillissement qui déplacent le stockage des graisses de l'arrière vers l'estomac. Le résultat peut être des fesses plates plat qui ne remplit pas les vêtements.</p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <p>Un développement musculaire insuffisant ou une perte de poids importante peuvent engendrer des fesses aplaties. 
              Le relief fessier se compose de :</p>
              <ul>
              <li>Muscle grand fessier</li>
              <li>Moyen fessier</li>
              <li>Petit fessier</li>
              </ul>
              <p>Les fesses plates sont caractérisées par l’insuffisance ou l’absence de muscle et de masse graisseuse. </p>



             </div>

             <div class=\"col-md-6 \">

              <h2> Comment vérifier la posture ? </h2>
                <p>Les femmes qui ont une bonne posture verront un relief fessier plus arrondi car la courbe naturelle du bas du dos soulève les fesses. Pour vérifier votre posture, tenez-vous droit, le dos contre un mur, les épaules vers le bas et le dos, tout en veillant à ce que le bas de votre dos conserve une courbe naturelle. Le bas de votre dos ne doit pas toucher le mur. </p>
                <p>La génétique et le vieillissement des femmes peuvent vous donner une croupe plate. La ménopause entraîne une baisse des niveaux d'œstrogènes, ce qui diminue la quantité de graisse stockée dans les fesses. La construction de muscles donne une forme considérable à vos fesses. </p>


            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 127
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 129
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/corps/fessesPlates.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 127
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/corps/fessesPlates.twig", 128)->display($context);
        // line 129
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/corps/fessesPlates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 129,  226 => 128,  222 => 127,  218 => 71,  216 => 70,  210 => 69,  204 => 129,  202 => 127,  190 => 118,  159 => 90,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> fesses plates </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1> Fesses plates </h1>
              <h2> Quelles sont les causes ? </h1>  
              <p>Des fesses plates résultent de plusieurs facteurs, dont la génétique et le vieillissement. Ce sont les gènes qui dictent la forme générale des fesses. Les femmes plus jeunes stockent de la graisse dans leurs fesses pendant la jeunesse, ce qui leur donne une apparence plus pleine. Des changements hormonaux se produisent au cours du processus de vieillissement qui déplacent le stockage des graisses de l'arrière vers l'estomac. Le résultat peut être des fesses plates plat qui ne remplit pas les vêtements.</p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <p>Un développement musculaire insuffisant ou une perte de poids importante peuvent engendrer des fesses aplaties. 
              Le relief fessier se compose de :</p>
              <ul>
              <li>Muscle grand fessier</li>
              <li>Moyen fessier</li>
              <li>Petit fessier</li>
              </ul>
              <p>Les fesses plates sont caractérisées par l’insuffisance ou l’absence de muscle et de masse graisseuse. </p>



             </div>

             <div class=\"col-md-6 \">

              <h2> Comment vérifier la posture ? </h2>
                <p>Les femmes qui ont une bonne posture verront un relief fessier plus arrondi car la courbe naturelle du bas du dos soulève les fesses. Pour vérifier votre posture, tenez-vous droit, le dos contre un mur, les épaules vers le bas et le dos, tout en veillant à ce que le bas de votre dos conserve une courbe naturelle. Le bas de votre dos ne doit pas toucher le mur. </p>
                <p>La génétique et le vieillissement des femmes peuvent vous donner une croupe plate. La ménopause entraîne une baisse des niveaux d'œstrogènes, ce qui diminue la quantité de graisse stockée dans les fesses. La construction de muscles donne une forme considérable à vos fesses. </p>


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
  ", "/homes/besoins/fr/corps/fessesPlates.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/corps/fessesPlates.twig");
    }
}
