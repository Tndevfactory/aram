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

/* /homes/besoins/fr/corps/relachementPeauVentre.twig */
class __TwigTemplate_3fe505abdba374caf51d519d835d55ff9a553129354ca5d989f7c8499629ad23 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/corps/relachementPeauVentre.twig", 1);
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
        echo "  <title> relachement peau ventre </title> ";
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

             <h1>Relâchement de la peau du ventre</h1>

              <p>Le relâchement cutané peut s’observer sur différentes parties du corps et spécialement le ventre.  L'âge et la perte de poids soudaine sont les principales causes du relâchement de la peau au niveau de l’abdomen. </p>
              <p>Il existe différents traitements pour remodeler et corriger le relâchement de la peau du ventre. Mais la chirurgie esthétique demeure le moyen le plus efficace pour remédier à ce problème. </p>
              <h2>Quelles sont les causes du relâchement de la peau du ventre ?</h2>
              <p>Outre l’alimentation malsaine et déséquilibrée et le manque d’exercice physique, plusieurs facteurs entrainent l’affaissement de la peau du ventre. Les plus courants sont :   </p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <ul>
              <li>L’âge : en vieillissant, la peau a tendance à perdre du collagène et de l'élastine, le tissu conjonctif de soutien qui lui donne une apparence ferme et jeune. Ce processus peut entraîner un affaissement de la peau. En plus de cela, les muscles s'affaiblissent avec l'âge, réduisant l’élasticité de la peau et provoquant son affaissement. </li>
              <li>Une perte de poids soudaine : la perte de beaucoup de poids en une courte période peut être une cause de l'affaissement de la peau au niveau de l'abdomen et d'autres zones du corps. En effet après une perte de poids rapide, la peau n'a pas le temps de s'adapter et de revenir à son état initial, ce qui entraine un relâchement de peau excédentaire. </li>
              <li>Grossesse et accouchement : pendant la grossesse, l’utérus exerce une pression sur les muscles abdominaux qui vont s’étirer. La peau perd donc son élasticité.  </li>
              </ul>



             </div>

             <div class=\"col-md-6 \">

             <h2>Comment corriger le relâchement de la peau du ventre ?</h2>
              <p>L'une des questions les plus fréquemment posées pas nos patients est de savoir comment resserrer la peau du ventre. Effectivement, il est très difficile de se débarrasser de la peau excédentaire localisée au niveau de l’abdomen avec de l’exercice physique. Nous proposons ainsi de nombreuses options de traitement qui permettent de corriger le relâchement cutané et de retendre et raffermir les tissus de la peau.   </p>


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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/corps/relachementPeauVentre.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 126
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/corps/relachementPeauVentre.twig", 127)->display($context);
        // line 128
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/corps/relachementPeauVentre.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 128,  225 => 127,  221 => 126,  217 => 71,  215 => 70,  209 => 69,  203 => 128,  201 => 126,  189 => 117,  162 => 93,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> relachement peau ventre </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Relâchement de la peau du ventre</h1>

              <p>Le relâchement cutané peut s’observer sur différentes parties du corps et spécialement le ventre.  L'âge et la perte de poids soudaine sont les principales causes du relâchement de la peau au niveau de l’abdomen. </p>
              <p>Il existe différents traitements pour remodeler et corriger le relâchement de la peau du ventre. Mais la chirurgie esthétique demeure le moyen le plus efficace pour remédier à ce problème. </p>
              <h2>Quelles sont les causes du relâchement de la peau du ventre ?</h2>
              <p>Outre l’alimentation malsaine et déséquilibrée et le manque d’exercice physique, plusieurs facteurs entrainent l’affaissement de la peau du ventre. Les plus courants sont :   </p>



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <ul>
              <li>L’âge : en vieillissant, la peau a tendance à perdre du collagène et de l'élastine, le tissu conjonctif de soutien qui lui donne une apparence ferme et jeune. Ce processus peut entraîner un affaissement de la peau. En plus de cela, les muscles s'affaiblissent avec l'âge, réduisant l’élasticité de la peau et provoquant son affaissement. </li>
              <li>Une perte de poids soudaine : la perte de beaucoup de poids en une courte période peut être une cause de l'affaissement de la peau au niveau de l'abdomen et d'autres zones du corps. En effet après une perte de poids rapide, la peau n'a pas le temps de s'adapter et de revenir à son état initial, ce qui entraine un relâchement de peau excédentaire. </li>
              <li>Grossesse et accouchement : pendant la grossesse, l’utérus exerce une pression sur les muscles abdominaux qui vont s’étirer. La peau perd donc son élasticité.  </li>
              </ul>



             </div>

             <div class=\"col-md-6 \">

             <h2>Comment corriger le relâchement de la peau du ventre ?</h2>
              <p>L'une des questions les plus fréquemment posées pas nos patients est de savoir comment resserrer la peau du ventre. Effectivement, il est très difficile de se débarrasser de la peau excédentaire localisée au niveau de l’abdomen avec de l’exercice physique. Nous proposons ainsi de nombreuses options de traitement qui permettent de corriger le relâchement cutané et de retendre et raffermir les tissus de la peau.   </p>


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
  ", "/homes/besoins/fr/corps/relachementPeauVentre.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/corps/relachementPeauVentre.twig");
    }
}
