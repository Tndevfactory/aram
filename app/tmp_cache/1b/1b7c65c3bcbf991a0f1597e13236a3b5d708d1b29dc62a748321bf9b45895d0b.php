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

/* /homes/besoins/fr/visage/rides.twig */
class __TwigTemplate_5e9359bfe4c1361815afe14da696a506b4479c2847eafa0637d272c40ff73973 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/visage/rides.twig", 1);
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
            <h1>Les rides : Explication et causes de leur apparition</h1>
              <p>Les rides sont des plis, des sillons ou des stries sur la peau qui se manifestent avec l'âge. Les premières rides qui apparaissent sur le visage d'une personne sont généralement dues aux expressions faciales.</p>
              <p>La plupart des gens n'apprécient pas les rides, et cherchent par tous les moyens de les supprimer ou encore de retarder leur apparition par des traitements esthétiques.</p>
              
             

            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <h2>Causes d’apparition des rides</h2>
              <p>L’apparition des rides, en plus de l’âge, peut être accélérée par d’autres facteurs comme : Les dommages causés par le soleil, le tabagisme, la déshydratation, certains médicaments et des facteurs environnementaux et génétiques. Ces éléments déterminent quand et dans quelles zones du corps les gens vont développer des rides.</p>
              <p>La plupart des rides ont tendance à apparaître dans les parties du corps qui sont les plus exposées au soleil, en particulier le visage et le cou, le dos des mains et les bras.</p>
              <h3>Les rides font naturellement partie du processus de vieillissement </h3>
              <p>En vieillissant, la peau devient plus fine, plus sèche, moins élastique et moins capable de se protéger des dégradations. Cela entraîne l'apparition de rides, de plis et de ridules sur la peau.</p>
              <p>Les expressions du visage, par exemple, le fait de sourire, de froncer les sourcils ou de plisser les yeux de manière répétée peuvent entraîner l'apparition de rides et de ridules à un âge précoce. </p>
              <p>Chaque fois qu'une personne utilise un muscle facial, un sillon se forme sous la surface de la peau. Lorsqu'une personne est jeune, la peau se redresse, mais en vieillissant, la peau perd de sa souplesse. Les rebonds deviennent plus durs et moins fréquents, ce qui donne des sillons plus permanents.</p>
              <h3>Des facteurs externes, tels que le tabagisme et l’abus d’alcool</h3>
              <p>L’effet le plus notoire de la cigarette sur l’apparition des rides c’est celui des substances chimiques qu’elle contient. Ces derniers affectent la perte de la densité cutanée et des rides profondes apparaissent à cause de l’oxydation des tissus et l’assèchement de la peau.</p>
              <p>Le tabagisme régulier accélère le processus de vieillissement de la peau, en raison de la réduction de l'apport sanguin à la peau. </p>
             </div>
             <div class=\"col-md-6\">
               <p>L'alcool déshydrate la peau, et une peau sèche est plus susceptible de se rider.</p>
              <h3>Un certain nombre de facteurs environnementaux. </h3>
              <p>Par exemple, faire du sport en plein air ou encore des bains de soleil ou l’abus des séances dans des cabines de bronzage, augmente le risque de développer des rides plus tôt.</p>
              <p>En effet, La lumière UV décompose les fibres de collagène et d'élastine de la peau. Ces fibres forment le tissu conjonctif de la peau. Elles sont situées sous la surface de la peau et la soutiennent. La rupture de cette couche rend la peau plus faible et moins flexible. La peau commence à s'affaisser, et des rides apparaissent.</p>
              <p>Les personnes qui travaillent au soleil ont plus de chance d'avoir des rides précoces. Les emplois qui impliquent ce type d'exposition comprennent la pêche et l'agriculture. Les marins, les golfeurs, les sauveteurs de plage et les jardiniers peuvent également être plus sujets au vieillissement précoce et plus prononcé de la peau.</p>
            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 122
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 124
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/visage/rides.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 122
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/visage/rides.twig", 123)->display($context);
        // line 124
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/visage/rides.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 124,  221 => 123,  217 => 122,  213 => 71,  211 => 70,  205 => 69,  199 => 124,  197 => 122,  185 => 113,  157 => 88,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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
            <h1>Les rides : Explication et causes de leur apparition</h1>
              <p>Les rides sont des plis, des sillons ou des stries sur la peau qui se manifestent avec l'âge. Les premières rides qui apparaissent sur le visage d'une personne sont généralement dues aux expressions faciales.</p>
              <p>La plupart des gens n'apprécient pas les rides, et cherchent par tous les moyens de les supprimer ou encore de retarder leur apparition par des traitements esthétiques.</p>
              
             

            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <h2>Causes d’apparition des rides</h2>
              <p>L’apparition des rides, en plus de l’âge, peut être accélérée par d’autres facteurs comme : Les dommages causés par le soleil, le tabagisme, la déshydratation, certains médicaments et des facteurs environnementaux et génétiques. Ces éléments déterminent quand et dans quelles zones du corps les gens vont développer des rides.</p>
              <p>La plupart des rides ont tendance à apparaître dans les parties du corps qui sont les plus exposées au soleil, en particulier le visage et le cou, le dos des mains et les bras.</p>
              <h3>Les rides font naturellement partie du processus de vieillissement </h3>
              <p>En vieillissant, la peau devient plus fine, plus sèche, moins élastique et moins capable de se protéger des dégradations. Cela entraîne l'apparition de rides, de plis et de ridules sur la peau.</p>
              <p>Les expressions du visage, par exemple, le fait de sourire, de froncer les sourcils ou de plisser les yeux de manière répétée peuvent entraîner l'apparition de rides et de ridules à un âge précoce. </p>
              <p>Chaque fois qu'une personne utilise un muscle facial, un sillon se forme sous la surface de la peau. Lorsqu'une personne est jeune, la peau se redresse, mais en vieillissant, la peau perd de sa souplesse. Les rebonds deviennent plus durs et moins fréquents, ce qui donne des sillons plus permanents.</p>
              <h3>Des facteurs externes, tels que le tabagisme et l’abus d’alcool</h3>
              <p>L’effet le plus notoire de la cigarette sur l’apparition des rides c’est celui des substances chimiques qu’elle contient. Ces derniers affectent la perte de la densité cutanée et des rides profondes apparaissent à cause de l’oxydation des tissus et l’assèchement de la peau.</p>
              <p>Le tabagisme régulier accélère le processus de vieillissement de la peau, en raison de la réduction de l'apport sanguin à la peau. </p>
             </div>
             <div class=\"col-md-6\">
               <p>L'alcool déshydrate la peau, et une peau sèche est plus susceptible de se rider.</p>
              <h3>Un certain nombre de facteurs environnementaux. </h3>
              <p>Par exemple, faire du sport en plein air ou encore des bains de soleil ou l’abus des séances dans des cabines de bronzage, augmente le risque de développer des rides plus tôt.</p>
              <p>En effet, La lumière UV décompose les fibres de collagène et d'élastine de la peau. Ces fibres forment le tissu conjonctif de la peau. Elles sont situées sous la surface de la peau et la soutiennent. La rupture de cette couche rend la peau plus faible et moins flexible. La peau commence à s'affaisser, et des rides apparaissent.</p>
              <p>Les personnes qui travaillent au soleil ont plus de chance d'avoir des rides précoces. Les emplois qui impliquent ce type d'exposition comprennent la pêche et l'agriculture. Les marins, les golfeurs, les sauveteurs de plage et les jardiniers peuvent également être plus sujets au vieillissement précoce et plus prononcé de la peau.</p>
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
  ", "/homes/besoins/fr/visage/rides.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/visage/rides.twig");
    }
}
