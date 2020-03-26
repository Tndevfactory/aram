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

/* /homes/besoins/fr/poitrine/hypertrophieMammaire.twig */
class __TwigTemplate_5b81f759f78219f29fe444eab1545c8c5502741f37261dbf6784037217bf5bfd extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/poitrine/hypertrophieMammaire.twig", 1);
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

           
            <h1>Hypertrophie mammaire ou macromastie : quelles sont les causes ? </h1>
            <p>Des seins trop volumineux peuvent induire un sérieux handicap physique, fonctionnel et même psychique. En effet, une forte poitrine disproportionnée par rapport à la morphologie globale de la femme provoque des gênes dans la pratique d’une activité physique normale. Douleurs dorsales, maux au niveau des épaules et du cou, irritations cutanées, … sans oublier les difficultés de trouver des soutiens-gorge adaptés à la taille de la poitrine.  </p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Causes de l’hypertrophie mammaire chez la femme </h2>
              <p>L’hypertrophie mammaire est une pathologie bénigne provoquée par le développement excessif des glandes mammaires au cours ou après une grossesse, après une prise de poids ou dès l’adolescence. </p>
              
              <p>L’augmentation anormale de la taille de la poitrine peut causer une asymétrie des seins par rapport au reste de la silhouette. </p>
              
              <p>La principale source de développement excessif des seins est la production exagérée des hormones sexuelles chez la femme, telle que la prolactine, qui est sécrétée abondamment durant les premières menstruations et pendant l’allaitement.</p>
              
              <p>Le traitement qui s’est avéré le plus efficace est la réduction mammaire et, dans certains cas très spécifiques, la liposuccion.</p>


             </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>


             <div class=\"col-md-6\">
               <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/poitrine/hypertrophieMammaire.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 123
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/poitrine/hypertrophieMammaire.twig", 124)->display($context);
        // line 125
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/poitrine/hypertrophieMammaire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 125,  225 => 124,  221 => 123,  217 => 71,  215 => 70,  209 => 69,  203 => 125,  201 => 123,  189 => 114,  180 => 108,  159 => 90,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

           
            <h1>Hypertrophie mammaire ou macromastie : quelles sont les causes ? </h1>
            <p>Des seins trop volumineux peuvent induire un sérieux handicap physique, fonctionnel et même psychique. En effet, une forte poitrine disproportionnée par rapport à la morphologie globale de la femme provoque des gênes dans la pratique d’une activité physique normale. Douleurs dorsales, maux au niveau des épaules et du cou, irritations cutanées, … sans oublier les difficultés de trouver des soutiens-gorge adaptés à la taille de la poitrine.  </p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Causes de l’hypertrophie mammaire chez la femme </h2>
              <p>L’hypertrophie mammaire est une pathologie bénigne provoquée par le développement excessif des glandes mammaires au cours ou après une grossesse, après une prise de poids ou dès l’adolescence. </p>
              
              <p>L’augmentation anormale de la taille de la poitrine peut causer une asymétrie des seins par rapport au reste de la silhouette. </p>
              
              <p>La principale source de développement excessif des seins est la production exagérée des hormones sexuelles chez la femme, telle que la prolactine, qui est sécrétée abondamment durant les premières menstruations et pendant l’allaitement.</p>
              
              <p>Le traitement qui s’est avéré le plus efficace est la réduction mammaire et, dans certains cas très spécifiques, la liposuccion.</p>


             </div>

             <div class=\"col-md-6\">
               <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
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
  ", "/homes/besoins/fr/poitrine/hypertrophieMammaire.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/poitrine/hypertrophieMammaire.twig");
    }
}
