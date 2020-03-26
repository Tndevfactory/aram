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

/* /homes/besoins/fr/poitrine/hypotrophieMammaire.twig */
class __TwigTemplate_7db7e82b86eb547bf8deeea8ef561faf79da5eeb3f140ce8ebeb2c254d6a2a7e extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/poitrine/hypotrophieMammaire.twig", 1);
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

            <h1>L’hypotrophie mammaire : ses causes et ses traitements</h1>
            <p>L’hypoplasie ou l’hypotrophie mammaire est un déficit du volume des seins. Il peut être constaté dès l’âge adulte, à la fin de la puberté ou en vieillissant. Pouvant être perçue comme un manque de féminité, cette anomalie induit souvent des gênes psychologiques et une altération de la confiance en soi chez la femme atteinte.</p>
            <h2>Quelles sont les causes de l’hypotrophie mammaire ?</h2>
            <p>Les causes de l’hypoplasie mammaire sont souvent génétiques ou secondaires.</p>
            <h3>Causes génétiques</h3>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <p>L’hypoplasie mammaire est majoritairement induite par des pathologies génétiques qui provoquent une atrophie de volume des glandes mammaires. Ces maladies dites génétiques sont causées par des aberrations chromosomiques, l’exposition de l’embryon à des substances nocives, favorisant ainsi les malformations et engendrant l’hypoplasie mammaire qui survient au moment de la puberté.</p>
            <h3>Causes secondaires</h3>
            <p>La mauvaise alimentation, l’alcoolisme et le tabagisme peuvent freiner le développement des glandes et réduire la taille des seins. Ces causes ne sont pas bien encore cernées par les médecins et les chercheurs, mais elles semblent influencer le volume des seins, particulièrement chez les femmes ayant une puberté assez perturbée.</p>
            <p>Autre cause très fréquente, la perte brutale de poids qui fera perdre à la poitrine de la femme toute la graisse qui lui donnait ses rondeurs.</p>


             </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 120
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 122
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/poitrine/hypotrophieMammaire.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 120
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/poitrine/hypotrophieMammaire.twig", 121)->display($context);
        // line 122
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/poitrine/hypotrophieMammaire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 122,  222 => 121,  218 => 120,  214 => 71,  212 => 70,  206 => 69,  200 => 122,  198 => 120,  186 => 111,  178 => 106,  161 => 92,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

            <h1>L’hypotrophie mammaire : ses causes et ses traitements</h1>
            <p>L’hypoplasie ou l’hypotrophie mammaire est un déficit du volume des seins. Il peut être constaté dès l’âge adulte, à la fin de la puberté ou en vieillissant. Pouvant être perçue comme un manque de féminité, cette anomalie induit souvent des gênes psychologiques et une altération de la confiance en soi chez la femme atteinte.</p>
            <h2>Quelles sont les causes de l’hypotrophie mammaire ?</h2>
            <p>Les causes de l’hypoplasie mammaire sont souvent génétiques ou secondaires.</p>
            <h3>Causes génétiques</h3>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <p>L’hypoplasie mammaire est majoritairement induite par des pathologies génétiques qui provoquent une atrophie de volume des glandes mammaires. Ces maladies dites génétiques sont causées par des aberrations chromosomiques, l’exposition de l’embryon à des substances nocives, favorisant ainsi les malformations et engendrant l’hypoplasie mammaire qui survient au moment de la puberté.</p>
            <h3>Causes secondaires</h3>
            <p>La mauvaise alimentation, l’alcoolisme et le tabagisme peuvent freiner le développement des glandes et réduire la taille des seins. Ces causes ne sont pas bien encore cernées par les médecins et les chercheurs, mais elles semblent influencer le volume des seins, particulièrement chez les femmes ayant une puberté assez perturbée.</p>
            <p>Autre cause très fréquente, la perte brutale de poids qui fera perdre à la poitrine de la femme toute la graisse qui lui donnait ses rondeurs.</p>


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
  ", "/homes/besoins/fr/poitrine/hypotrophieMammaire.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/poitrine/hypotrophieMammaire.twig");
    }
}
