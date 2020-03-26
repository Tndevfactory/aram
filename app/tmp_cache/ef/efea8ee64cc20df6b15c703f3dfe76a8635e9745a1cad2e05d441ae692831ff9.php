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

/* /homes/besoins/fr/corps/graisseEnTrop.twig */
class __TwigTemplate_0e863fd1f8f3bc27441aeadd9bf8f382fb6332dc1113cba227f039e85a216f95 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/corps/graisseEnTrop.twig", 1);
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
        echo "  <title> graisse en trop</title> ";
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

            <h1>La graisse en trop</h1>
            <p>Presque tout le monde a sur son corps un peu d'excès de graisse indésirable. Si vous avez tout essayé mais n'avez toujours pas réussi à sculpter votre silhouette et atteindre le physique idéal, vous voudrez peut-être envisager de subir un traitement esthétique pour éliminer la graisse en trop et corriger ce problème.</p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Quelles sont les causes de la formation de l'excès de graisse ? </h2>
              <p>Le gain de poids qui provoque un excès de graisse peut être le résultat d'une variété de facteurs. À mesure que les gens vieillissent, leur métabolisme commence à ralentir et il leur faut moins de nourriture pour commencer à prendre un excès de poids. </p>
              <p>Les facteurs génétiques et les hormones peuvent également jouer un rôle important dans la formation de masses de graisse localisée, et rendent certaines personnes plus susceptibles de stocker les graisses et moins susceptibles de les brûler.</p>

              <h2>Quels sont les dangers de l’accumulation de graisse en excès dans le corps ?</h2>
              <p>La graisse en trop dans le corps augmente le risque de diabète, de maladies cardiaques, de stéatose hépatique et de certaines formes de cancer. </p>
              <p>Quelle que soit la cause, l'excès de graisse peut être un problème esthétique frustrant et peut conduire à la dépression et à nombreux troubles psychologiques. </p>
              <p>L'obésité présente un problème de santé majeur dans les pays développés et un problème croissant dans les pays en voie de développement. Une meilleure compréhension des bases biologiques de l'obésité devrait faciliter sa prévention et son traitement.</p>



             </div>

             <div class=\"col-md-6 \">

              <h2>Comment éliminer la graisse en trop ? </h2>
              <p>Bien que de nombreuses personnes essaient de se débarrasser de la graisse en trop qu'elles accumulent sur leur abdomen, leurs jambes, leurs fesses, leurs bras, leur cou et leur visage par une alimentation équilibrée et des exercices physiques réguliers, elles échouent souvent. Même si elles sont capables de s'en débarrasser dans certaines zones du corps, d'autres zones peuvent obstinément conserver l'excès de graisse. Dans ces cas, la meilleure option d'un patient peut être d'envisager de subir un traitement esthétique.</p>
              <p>Nous savons à quel point les graisses tenaces peuvent être frustrantes. C'est pourquoi nous sommes fiers d'offrir à nos patients une large gamme de traitements qui peuvent les aider à corriger cette préoccupation esthétique et à obtenir le corps qu'ils ont toujours voulu avoir. </p>


            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 126
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 128
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/corps/graisseEnTrop.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 126
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/corps/graisseEnTrop.twig", 127)->display($context);
        // line 128
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/corps/graisseEnTrop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 128,  225 => 127,  221 => 126,  217 => 71,  215 => 70,  209 => 69,  203 => 128,  201 => 126,  189 => 117,  158 => 89,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> graisse en trop</title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

            <h1>La graisse en trop</h1>
            <p>Presque tout le monde a sur son corps un peu d'excès de graisse indésirable. Si vous avez tout essayé mais n'avez toujours pas réussi à sculpter votre silhouette et atteindre le physique idéal, vous voudrez peut-être envisager de subir un traitement esthétique pour éliminer la graisse en trop et corriger ce problème.</p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Quelles sont les causes de la formation de l'excès de graisse ? </h2>
              <p>Le gain de poids qui provoque un excès de graisse peut être le résultat d'une variété de facteurs. À mesure que les gens vieillissent, leur métabolisme commence à ralentir et il leur faut moins de nourriture pour commencer à prendre un excès de poids. </p>
              <p>Les facteurs génétiques et les hormones peuvent également jouer un rôle important dans la formation de masses de graisse localisée, et rendent certaines personnes plus susceptibles de stocker les graisses et moins susceptibles de les brûler.</p>

              <h2>Quels sont les dangers de l’accumulation de graisse en excès dans le corps ?</h2>
              <p>La graisse en trop dans le corps augmente le risque de diabète, de maladies cardiaques, de stéatose hépatique et de certaines formes de cancer. </p>
              <p>Quelle que soit la cause, l'excès de graisse peut être un problème esthétique frustrant et peut conduire à la dépression et à nombreux troubles psychologiques. </p>
              <p>L'obésité présente un problème de santé majeur dans les pays développés et un problème croissant dans les pays en voie de développement. Une meilleure compréhension des bases biologiques de l'obésité devrait faciliter sa prévention et son traitement.</p>



             </div>

             <div class=\"col-md-6 \">

              <h2>Comment éliminer la graisse en trop ? </h2>
              <p>Bien que de nombreuses personnes essaient de se débarrasser de la graisse en trop qu'elles accumulent sur leur abdomen, leurs jambes, leurs fesses, leurs bras, leur cou et leur visage par une alimentation équilibrée et des exercices physiques réguliers, elles échouent souvent. Même si elles sont capables de s'en débarrasser dans certaines zones du corps, d'autres zones peuvent obstinément conserver l'excès de graisse. Dans ces cas, la meilleure option d'un patient peut être d'envisager de subir un traitement esthétique.</p>
              <p>Nous savons à quel point les graisses tenaces peuvent être frustrantes. C'est pourquoi nous sommes fiers d'offrir à nos patients une large gamme de traitements qui peuvent les aider à corriger cette préoccupation esthétique et à obtenir le corps qu'ils ont toujours voulu avoir. </p>


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
  ", "/homes/besoins/fr/corps/graisseEnTrop.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/corps/graisseEnTrop.twig");
    }
}
