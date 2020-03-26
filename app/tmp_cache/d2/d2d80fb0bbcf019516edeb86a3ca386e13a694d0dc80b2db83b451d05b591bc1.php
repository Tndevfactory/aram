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

/* /homes/besoins/fr/dents/dentsManquantes.twig */
class __TwigTemplate_7242acb270a8b2c04647cc77c2ff02565a3ecd137f9aa4270830cbfd67b37e95 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/dents/dentsManquantes.twig", 1);
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
        echo "  <title> dents Manquantes</title> ";
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

             <h1>Dents manquantes</h1>

          <p>Avoir des dents manquantes peut impacter négativement la vie quotidienne. Cela peut d’une part, affecter la santé générale, l’apparence et l’estime de soi. Et d’autre part, les dents manquantes peuvent engendrer des problèmes dentaires. En effet, les dents entourant la dent manquante sont moins stables, de sorte qu'elles peuvent se déplacer dans l'espace manquant et même vers l'avant. Les dents manquantes peuvent également nuire au soutien de la mâchoire et à la capacité de mâcher et de parler. Il est alors impératif de les remplacer.</p>




                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Qu’est-ce qui cause les dents manquantes ? </h2>
              <p>Certaines des causes les plus courantes de la perte des dents sont :</p>
              
              <h3><ul>
              <li>La carie dentaire </li>
              <li>La maladie des gencives</li>
              <li>Les blessures dentaires</li>
              <li>Les extractions dentaires </li>
              <li>La génétique </li>
              </ul></h3>


              <p>Les troubles génétiques peuvent empêcher vos dents permanentes de pousser. Lorsque six dents permanentes ou moins ne se développent pas, on parle d'hypodontie. Lorsque plus de six dents permanentes ne se développent pas, on parle d'oligodontie.</p>





             </div>

             <div class=\"col-md-6 \">

              <h2>Comment remplacer les dents manquantes ? </h2>
                <p>Plusieurs options existent d'aujourd'hui afin de prévenir les complications liées aux dents manquantes et de préserver votre santé buccale. Nos dentistes vous recommanderont l'option qui vous convient le mieux pour que vous n'ayez plus à en souffrir. </p>
                <p>Voici les principales solutions qui s’offrent à vous : </p>
                <h3><ul>
                <li>La couronne sur implant pour remplacer une seule dent manquante</li>
                <li>La prothèse dentaire pour remplacer plusieurs dents manquantes</li>
                <li>Les ponts fixes ou sur implants afin de remplacer une ou plusieurs dents manquantes</li>
                <ul></h3>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 141
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 143
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/dents/dentsManquantes.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 141
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/dents/dentsManquantes.twig", 142)->display($context);
        // line 143
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/dents/dentsManquantes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 143,  240 => 142,  236 => 141,  232 => 71,  230 => 70,  224 => 69,  218 => 143,  216 => 141,  204 => 132,  160 => 91,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> dents Manquantes</title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Dents manquantes</h1>

          <p>Avoir des dents manquantes peut impacter négativement la vie quotidienne. Cela peut d’une part, affecter la santé générale, l’apparence et l’estime de soi. Et d’autre part, les dents manquantes peuvent engendrer des problèmes dentaires. En effet, les dents entourant la dent manquante sont moins stables, de sorte qu'elles peuvent se déplacer dans l'espace manquant et même vers l'avant. Les dents manquantes peuvent également nuire au soutien de la mâchoire et à la capacité de mâcher et de parler. Il est alors impératif de les remplacer.</p>




                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Qu’est-ce qui cause les dents manquantes ? </h2>
              <p>Certaines des causes les plus courantes de la perte des dents sont :</p>
              
              <h3><ul>
              <li>La carie dentaire </li>
              <li>La maladie des gencives</li>
              <li>Les blessures dentaires</li>
              <li>Les extractions dentaires </li>
              <li>La génétique </li>
              </ul></h3>


              <p>Les troubles génétiques peuvent empêcher vos dents permanentes de pousser. Lorsque six dents permanentes ou moins ne se développent pas, on parle d'hypodontie. Lorsque plus de six dents permanentes ne se développent pas, on parle d'oligodontie.</p>





             </div>

             <div class=\"col-md-6 \">

              <h2>Comment remplacer les dents manquantes ? </h2>
                <p>Plusieurs options existent d'aujourd'hui afin de prévenir les complications liées aux dents manquantes et de préserver votre santé buccale. Nos dentistes vous recommanderont l'option qui vous convient le mieux pour que vous n'ayez plus à en souffrir. </p>
                <p>Voici les principales solutions qui s’offrent à vous : </p>
                <h3><ul>
                <li>La couronne sur implant pour remplacer une seule dent manquante</li>
                <li>La prothèse dentaire pour remplacer plusieurs dents manquantes</li>
                <li>Les ponts fixes ou sur implants afin de remplacer une ou plusieurs dents manquantes</li>
                <ul></h3>



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
  
  ", "/homes/besoins/fr/dents/dentsManquantes.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/dents/dentsManquantes.twig");
    }
}
