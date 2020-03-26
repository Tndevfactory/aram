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

/* /homes/besoins/fr/poitrine/seinsTombants.twig */
class __TwigTemplate_02f0be362f697da40fda1a85de5ae0357e1de153b6b74cf1b5e4fc60b5a7fd11 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/poitrine/seinsTombants.twig", 1);
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

             <h1>Les seins tombants : symptômes et causes</h1>
                <p>Les grossesses successives, l’âge, les fluctuations pondérales ou encore les facteurs génétiques sont capables d’affaisser la peau des seins au niveau du pli sous-mammaire. Cette anomalie est connue sous le nom de ptose mammaire.</p>
                <h2>Les symptômes de la poitrine ptosée </h2>
                <p>Avant tout, il serait bon à savoir que la ptose mammaire ne provoque aucune douleur, le désagrément est seulement esthétique. La femme constate ou ressent une sensation d’un sein tombant, une perte de volume, des mamelons mal positionnés, une asymétrie plus ou moins importante, …</p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <h2>Les causes des seins tombants </h2>
              <h3>Ptôse congénitale</h3>
              <p>La ptôse mammaire peut survenir dès l’adolescence : l'origine est alors génétique ou congénitale. Elle peut également être associée à un dérèglement hormonal et qui peut être corrigée par traitement médicamenteux.</p>
              <h3>Hypertrophie mammaire</h3>
              <p>Dans la plupart des cas, la ptôse est liée à une hypertrophie mammaire. Le développement anormal de la glande mammaire ne peut être assuré par la poche cutanée, provoque ainsi une distension et un relâchement systématique de la peau des seins.</p>
              <h3>Grossesse et allaitement</h3>
              <p>L’affaissement des seins est souvent la conséquence d’une ou plusieurs grossesses, suivies ou non par un allaitement.</p>
              <h3>Les variations du poids </h3>
              <p>La perte importante du poids peut causer une fonte mammaire, et comme la peau de la poitrine ne peut se rétracter correctement avec le volume amoindri des seins, la femme ayant subi un régime d’amincissement peut se trouver avec une poitrine tombante.</p>


             </div>

             <div class=\"col-md-6 \">

              <h3>L’âge </h3>
              <p>En vieillissant, les tissus cutanés perdent de leur élasticité et de leur fermeté, par manque de production de collagène. De plus, l’infiltration de la graisse sous-cutanée au niveau des seins impacte négativement la forme et la symétrie des seins.</p>
              <h2>Les solutions pour traiter les seins tombants </h2>
              <p>Aucun produit cosmétique ou traitement médicamenteux peut corriger efficacement la ptose mammaire. Seul le lifting mammaire peut la traiter, qu’il soit couplé d’une chirurgie d’augmentation ou de réduction mammaire.</p>

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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/poitrine/seinsTombants.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 127
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/poitrine/seinsTombants.twig", 128)->display($context);
        // line 129
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/poitrine/seinsTombants.twig";
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

             <h1>Les seins tombants : symptômes et causes</h1>
                <p>Les grossesses successives, l’âge, les fluctuations pondérales ou encore les facteurs génétiques sont capables d’affaisser la peau des seins au niveau du pli sous-mammaire. Cette anomalie est connue sous le nom de ptose mammaire.</p>
                <h2>Les symptômes de la poitrine ptosée </h2>
                <p>Avant tout, il serait bon à savoir que la ptose mammaire ne provoque aucune douleur, le désagrément est seulement esthétique. La femme constate ou ressent une sensation d’un sein tombant, une perte de volume, des mamelons mal positionnés, une asymétrie plus ou moins importante, …</p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <h2>Les causes des seins tombants </h2>
              <h3>Ptôse congénitale</h3>
              <p>La ptôse mammaire peut survenir dès l’adolescence : l'origine est alors génétique ou congénitale. Elle peut également être associée à un dérèglement hormonal et qui peut être corrigée par traitement médicamenteux.</p>
              <h3>Hypertrophie mammaire</h3>
              <p>Dans la plupart des cas, la ptôse est liée à une hypertrophie mammaire. Le développement anormal de la glande mammaire ne peut être assuré par la poche cutanée, provoque ainsi une distension et un relâchement systématique de la peau des seins.</p>
              <h3>Grossesse et allaitement</h3>
              <p>L’affaissement des seins est souvent la conséquence d’une ou plusieurs grossesses, suivies ou non par un allaitement.</p>
              <h3>Les variations du poids </h3>
              <p>La perte importante du poids peut causer une fonte mammaire, et comme la peau de la poitrine ne peut se rétracter correctement avec le volume amoindri des seins, la femme ayant subi un régime d’amincissement peut se trouver avec une poitrine tombante.</p>


             </div>

             <div class=\"col-md-6 \">

              <h3>L’âge </h3>
              <p>En vieillissant, les tissus cutanés perdent de leur élasticité et de leur fermeté, par manque de production de collagène. De plus, l’infiltration de la graisse sous-cutanée au niveau des seins impacte négativement la forme et la symétrie des seins.</p>
              <h2>Les solutions pour traiter les seins tombants </h2>
              <p>Aucun produit cosmétique ou traitement médicamenteux peut corriger efficacement la ptose mammaire. Seul le lifting mammaire peut la traiter, qu’il soit couplé d’une chirurgie d’augmentation ou de réduction mammaire.</p>

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
  ", "/homes/besoins/fr/poitrine/seinsTombants.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/poitrine/seinsTombants.twig");
    }
}
