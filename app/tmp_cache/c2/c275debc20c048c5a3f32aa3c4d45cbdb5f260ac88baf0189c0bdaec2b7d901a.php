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

/* /homes/besoins/fr/cheuveux/trousBarbe.twig */
class __TwigTemplate_a2f8c5bf8dbedf9777b0af2f2bc7e1f0aa8584dd612fe2ad655daa1b745e0ebe extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/cheuveux/trousBarbe.twig", 1);
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
        echo "  <title> Trous Barbe</title> ";
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
            <h1>Trous barbe</h1>
            <p>Si une zone chauve apparaît soudainement sur votre barbe, vous souffrez peut-être d'alopécie ou de calvitie. Cette condition peut également toucher la barbe et les moustaches, pas seulement le cuir chevelu.  En effet, l’alopécie provoque la perte de cheveux qui se traduit par l’apparition des petites taches rondes clairsemée sur le visage et plus précisément dans la barbe, donnant lieu à des trous dans la barbe. Ces trous peuvent disparaître ou peuvent durer de nombreuses années. </p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

             <h2>Quelles sont les causes des trous dans la barbe ?</h2>
              <p>L’alopécie n'est pas contagieuse. Il s'agit d'une maladie auto-immune dans laquelle le système immunitaire du corps s'attaque, dans ce cas, les follicules pileux.</p>
              <p>Ainsi, de minuscules cellules du système immunitaire, appelées cellules T, se rassemblent autour de la base d'un follicule pileux et tentent de le tuer. Cela provoque la chute des cheveux. Mais à un moment donné, l'attaque immunitaire doit cesser et les cheveux repoussent.</p>
              <p>Les trous dans la barbe peuvent être déclenchés par : </p>




             </div>

             <div class=\"col-md-6 \">

              <h3>Déséquilibre hormonal </h3>
              <p>Les hormones équilibrées dans le corps jouent un rôle essentiel dans la croissance de la barbe. Mais, une réduction considérable des hormones peut avoir un impact sur l'attribut masculin, ce qui peut entraîner le processus d'alopécie.
              <h3>Problèmes dentaires </h3>
              <p> Les maladies dentaires ignorées peuvent être à l'origine du développement des trous dans la barbe.
              <h3>Changements mentaux </h3>
              <p>La disparité mentale et le stress intense peuvent être à l'origine du développement des trou dans la barbe.
              <h3>Génétique </h3>
              <p>La perte des follicules pileux peut être génétique
              <h3>Infection </h3>
              <p>Habituellement, la cause légendaire des trous dans la barbe est la contamination fongique.
              <h3>Manque d'acide aminé et des vitamines</h3>
              <p>La barbe est faite de kératine, c'est une sorte d'acide aminé. L'acide aminé peut être obtenu à partir d'autres sources comme les animaux et les organismes qui sont riches en protéines Par exemple : les œufs, le soja, les algues comestibles. Aussi, la carence en vitamines A et bêta A, qui porte le rôle vital de faire pousser la barbe plus rapidement, peut causer les trous dans la barbe.</p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 131
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 133
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/cheuveux/trousBarbe.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 131
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/cheuveux/trousBarbe.twig", 132)->display($context);
        // line 133
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/cheuveux/trousBarbe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 133,  230 => 132,  226 => 131,  222 => 71,  220 => 70,  214 => 69,  208 => 133,  206 => 131,  194 => 122,  155 => 86,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> Trous Barbe</title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">
            <h1>Trous barbe</h1>
            <p>Si une zone chauve apparaît soudainement sur votre barbe, vous souffrez peut-être d'alopécie ou de calvitie. Cette condition peut également toucher la barbe et les moustaches, pas seulement le cuir chevelu.  En effet, l’alopécie provoque la perte de cheveux qui se traduit par l’apparition des petites taches rondes clairsemée sur le visage et plus précisément dans la barbe, donnant lieu à des trous dans la barbe. Ces trous peuvent disparaître ou peuvent durer de nombreuses années. </p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

             <h2>Quelles sont les causes des trous dans la barbe ?</h2>
              <p>L’alopécie n'est pas contagieuse. Il s'agit d'une maladie auto-immune dans laquelle le système immunitaire du corps s'attaque, dans ce cas, les follicules pileux.</p>
              <p>Ainsi, de minuscules cellules du système immunitaire, appelées cellules T, se rassemblent autour de la base d'un follicule pileux et tentent de le tuer. Cela provoque la chute des cheveux. Mais à un moment donné, l'attaque immunitaire doit cesser et les cheveux repoussent.</p>
              <p>Les trous dans la barbe peuvent être déclenchés par : </p>




             </div>

             <div class=\"col-md-6 \">

              <h3>Déséquilibre hormonal </h3>
              <p>Les hormones équilibrées dans le corps jouent un rôle essentiel dans la croissance de la barbe. Mais, une réduction considérable des hormones peut avoir un impact sur l'attribut masculin, ce qui peut entraîner le processus d'alopécie.
              <h3>Problèmes dentaires </h3>
              <p> Les maladies dentaires ignorées peuvent être à l'origine du développement des trous dans la barbe.
              <h3>Changements mentaux </h3>
              <p>La disparité mentale et le stress intense peuvent être à l'origine du développement des trou dans la barbe.
              <h3>Génétique </h3>
              <p>La perte des follicules pileux peut être génétique
              <h3>Infection </h3>
              <p>Habituellement, la cause légendaire des trous dans la barbe est la contamination fongique.
              <h3>Manque d'acide aminé et des vitamines</h3>
              <p>La barbe est faite de kératine, c'est une sorte d'acide aminé. L'acide aminé peut être obtenu à partir d'autres sources comme les animaux et les organismes qui sont riches en protéines Par exemple : les œufs, le soja, les algues comestibles. Aussi, la carence en vitamines A et bêta A, qui porte le rôle vital de faire pousser la barbe plus rapidement, peut causer les trous dans la barbe.</p>



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
  ", "/homes/besoins/fr/cheuveux/trousBarbe.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/cheuveux/trousBarbe.twig");
    }
}
