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

/* /homes/besoins/fr/dents/dentsEbrechees.twig */
class __TwigTemplate_0e3c0c55bc998103c465dd4f8ea95be3f00a3ead4edb84c242681e8a742d9cbc extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/dents/dentsEbrechees.twig", 1);
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
        echo "  <title> dents Ebrechees</title> ";
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

             <h1>Dents ébréchées : causes et remèdes ! </h1>
              <h2>Dents ébréchées : quelles sont les causes ? </h2>
              <p>Les chutes accidentelles et les accidents de la route sont certainement les principales causes de blessures ou d'écaillage d'une ou plusieurs dents.</p>
              <p>D’autres causes peuvent entrainer les dents ébréchées : </p>




                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
           <h3><ul>
            <li>Chutes accidentelles</li>
            <li>Accidents de la route</li>
            <li>Mâcher des aliments durs</li>
            <li>Lésions de l'émail</li>
            <li>Bruxisme</li>
            <li>Caries</li>
            <ul></h3>
            <p>Il suffit de penser aux sourires souvent ébréchés dans la bouche des enfants dont les dents de lait, qui sont structurellement moins résistantes que les dents permanentes, peuvent facilement se casser ou se blesser à la suite de chutes entre les jeux de plein air, de poursuites ou d'accidents de vélo.</p>
            <p>Tout comme les dents des enfants, les dents des personnes âgées sont plus exposées aux risques de blessures. Après de nombreuses années, les dents sont plus fragiles et donc plus sujettes aux fractures, surtout lorsqu'on mâche des aliments durs ou croquants.</p>
            <p>Cependant, même les adultes ne sont pas exemptés de ces épisodes. Les accidents de la route en voiture ou en moto, ou même les activités sportives impliquant un contact physique, sont souvent la cause la plus fréquente d'ébréchures de dents.</p>





             </div>

             <div class=\"col-md-6 \">

              <h2>Les dents ébréchées : comment ça se manifeste ? </h2>
              <p>Vous pensez peut-être qu'une petite puce n'est pas très importante, mais elle peut quand même causer des dégâts. Les petits copeaux peuvent être tranchants, coupant l'intérieur de votre chèque, votre langue et vos gencives, et peuvent également entraîner des copeaux plus gros à l'avant. Un plus gros éclat peut affecter la racine de votre dent, provoquer de la douleur et une sensibilité à la température, et entraîner une carie dentaire qui se traduit par une mauvaise haleine.</p>
              <p>Les dents ébréchées sont l'une des principales conséquences des chutes accidentelles depuis l'enfance. La dentisterie et les traitements esthétiques contribuent désormais efficacement à réparer les dégâts.</p>
              <p>En plus de l'embarras, surtout lorsque les incisives sont ébréchées ou endommagées, ce qui cause un grand inconfort est aussi la douleur qui peut résulter d'un traumatisme à la bouche.</p>




            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 137
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 139
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/dents/dentsEbrechees.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 137
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/dents/dentsEbrechees.twig", 138)->display($context);
        // line 139
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/dents/dentsEbrechees.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 139,  236 => 138,  232 => 137,  228 => 71,  226 => 70,  220 => 69,  214 => 139,  212 => 137,  200 => 128,  161 => 92,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> dents Ebrechees</title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Dents ébréchées : causes et remèdes ! </h1>
              <h2>Dents ébréchées : quelles sont les causes ? </h2>
              <p>Les chutes accidentelles et les accidents de la route sont certainement les principales causes de blessures ou d'écaillage d'une ou plusieurs dents.</p>
              <p>D’autres causes peuvent entrainer les dents ébréchées : </p>




                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
           <h3><ul>
            <li>Chutes accidentelles</li>
            <li>Accidents de la route</li>
            <li>Mâcher des aliments durs</li>
            <li>Lésions de l'émail</li>
            <li>Bruxisme</li>
            <li>Caries</li>
            <ul></h3>
            <p>Il suffit de penser aux sourires souvent ébréchés dans la bouche des enfants dont les dents de lait, qui sont structurellement moins résistantes que les dents permanentes, peuvent facilement se casser ou se blesser à la suite de chutes entre les jeux de plein air, de poursuites ou d'accidents de vélo.</p>
            <p>Tout comme les dents des enfants, les dents des personnes âgées sont plus exposées aux risques de blessures. Après de nombreuses années, les dents sont plus fragiles et donc plus sujettes aux fractures, surtout lorsqu'on mâche des aliments durs ou croquants.</p>
            <p>Cependant, même les adultes ne sont pas exemptés de ces épisodes. Les accidents de la route en voiture ou en moto, ou même les activités sportives impliquant un contact physique, sont souvent la cause la plus fréquente d'ébréchures de dents.</p>





             </div>

             <div class=\"col-md-6 \">

              <h2>Les dents ébréchées : comment ça se manifeste ? </h2>
              <p>Vous pensez peut-être qu'une petite puce n'est pas très importante, mais elle peut quand même causer des dégâts. Les petits copeaux peuvent être tranchants, coupant l'intérieur de votre chèque, votre langue et vos gencives, et peuvent également entraîner des copeaux plus gros à l'avant. Un plus gros éclat peut affecter la racine de votre dent, provoquer de la douleur et une sensibilité à la température, et entraîner une carie dentaire qui se traduit par une mauvaise haleine.</p>
              <p>Les dents ébréchées sont l'une des principales conséquences des chutes accidentelles depuis l'enfance. La dentisterie et les traitements esthétiques contribuent désormais efficacement à réparer les dégâts.</p>
              <p>En plus de l'embarras, surtout lorsque les incisives sont ébréchées ou endommagées, ce qui cause un grand inconfort est aussi la douleur qui peut résulter d'un traumatisme à la bouche.</p>




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
  ", "/homes/besoins/fr/dents/dentsEbrechees.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/dents/dentsEbrechees.twig");
    }
}
