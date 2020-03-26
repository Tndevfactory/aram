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

/* /homes/besoins/fr/dents/dentsJaunies.twig */
class __TwigTemplate_d14a00ccd1c92e618c401c3f7b01070ca92f84c936484f6ffe08f84b85fbf848 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/dents/dentsJaunies.twig", 1);
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
        echo "  <title> dents Jaunies </title> ";
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

            <h1>Dents jaunies</h1>

            <p>Les dents jaunies se traduisent par un sourire inesthétique, qui peut être un frein au bien-être et à l’épanouissement du patient qui en souffre. Pour cette raison, le jaunissement dentaire constitue un motif de consultation récurrent en dentisterie esthétique. </p>




                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Quelles sont les causes du jaunissement des dents ? </h2>
            <p>Les dents jaunies résultent d’une coloration de la couche externe de l’émail. Celle-ci est souvent due à la consommation récurrente de certains aliments, éventuellement associée à l’accumulation de plaque dentaire. Parmi les causes des dents jaunies, on peut trouver : </p>
            <h3><ul>
            <li>Le tabagisme excessif</li>
            <li>Les boissons telles que le café, le thé, le vin rouge et les sodas</li>
            <li>Certaines épices comme le curcuma et le curry </li>
            <li>Une mauvaise hygiène dentaire : l’accumulation de la plaque dentaire et la prolifération de certaines bactéries sont à l’origine d’une coloration inesthétique des dents</li>
            <li>L’âge et l’état de santé : l’usure naturelle de l’émail s’accélère avec l’âge et expose la dentine, la couche dentaire sous-jacente de couleur jaunâtre. De même, certains traitements médicaux peuvent fragiliser l’émail et favoriser le jaunissement dentaire. </li>
            </ul></h3>






             </div>

             <div class=\"col-md-6 \">

              <h2>Comment traiter les dents jaunes ? </h2>
                <p>Le blanchiment dentaire et la pose de facettes dentaires sont les meilleurs traitements pour les dents jaunies. Le blanchiment dentaire doit être renouvelé régulièrement dans le cabinet du dentiste, tandis que le résultat des facettes peut durer jusqu’à 20 ans.</p>




            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 133
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 135
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/dents/dentsJaunies.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 133
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/dents/dentsJaunies.twig", 134)->display($context);
        // line 135
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/dents/dentsJaunies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 135,  232 => 134,  228 => 133,  224 => 71,  222 => 70,  216 => 69,  210 => 135,  208 => 133,  196 => 124,  160 => 91,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> dents Jaunies </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

            <h1>Dents jaunies</h1>

            <p>Les dents jaunies se traduisent par un sourire inesthétique, qui peut être un frein au bien-être et à l’épanouissement du patient qui en souffre. Pour cette raison, le jaunissement dentaire constitue un motif de consultation récurrent en dentisterie esthétique. </p>




                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h2>Quelles sont les causes du jaunissement des dents ? </h2>
            <p>Les dents jaunies résultent d’une coloration de la couche externe de l’émail. Celle-ci est souvent due à la consommation récurrente de certains aliments, éventuellement associée à l’accumulation de plaque dentaire. Parmi les causes des dents jaunies, on peut trouver : </p>
            <h3><ul>
            <li>Le tabagisme excessif</li>
            <li>Les boissons telles que le café, le thé, le vin rouge et les sodas</li>
            <li>Certaines épices comme le curcuma et le curry </li>
            <li>Une mauvaise hygiène dentaire : l’accumulation de la plaque dentaire et la prolifération de certaines bactéries sont à l’origine d’une coloration inesthétique des dents</li>
            <li>L’âge et l’état de santé : l’usure naturelle de l’émail s’accélère avec l’âge et expose la dentine, la couche dentaire sous-jacente de couleur jaunâtre. De même, certains traitements médicaux peuvent fragiliser l’émail et favoriser le jaunissement dentaire. </li>
            </ul></h3>






             </div>

             <div class=\"col-md-6 \">

              <h2>Comment traiter les dents jaunes ? </h2>
                <p>Le blanchiment dentaire et la pose de facettes dentaires sont les meilleurs traitements pour les dents jaunies. Le blanchiment dentaire doit être renouvelé régulièrement dans le cabinet du dentiste, tandis que le résultat des facettes peut durer jusqu’à 20 ans.</p>




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
  ", "/homes/besoins/fr/dents/dentsJaunies.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/dents/dentsJaunies.twig");
    }
}
