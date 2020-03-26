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

/* /homes/besoins/fr/cheuveux/chuteDeCheuveux.twig */
class __TwigTemplate_7d2f73266f2dd5b4399f1b64a9740dba9701cb5276f7005da371f297ca165b08 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/cheuveux/chuteDeCheuveux.twig", 1);
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
        echo "  <title> chute De Cheuveux </title> ";
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

            <h1>Chute de cheveux</h1>

            <p>La chute de cheveux peut générer des complexes et affecter l’estime de soi, en particulier si elle évolue en calvitie. Même si elle est souvent dictée par des facteurs génétiques, la calvitie est loin d’être incurable. Encore faut-il identifier la cause de la chute de cheveux afin de la traiter efficacement.</p>
            <h2>Quelles sont les causes de la chute des cheveux ?</h2>
            <p>La chute de cheveux peut être consécutive à :</p>




                          
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
                <li>Des facteurs génétiques et héréditaires </li>
                <li>Des fluctuations hormonales : elles peuvent être liées au stress, la grossesse, la ménopause ou encore des troubles de la thyroïde. De même, le changement des saisons a un retentissement sur les sécrétions hormonales, d’où la chute de cheveux saisonnière.  </li>
                <li>Des carences nutritionnelles, notamment en fer</li>
                <li>Certaines maladies auto-immunes</li>
                <li>Un traitement par chimiothérapie</li>
              </ul>


             </div>

             <div class=\"col-md-6 \">

            <p>Lorsque la chute de cheveux est minime ou passagère, certains traitements vitaminés (compléments alimentaires, injection PRP cheveux…) peuvent renforcer le bulbe capillaire et limiter la perte de cheveux. Des sprays adaptés et des shampoings anti-chute peuvent également atténuer la perte de cheveux. Toutefois, en cas d’alopécie ou de calvitie androgénique, seule la greffe de cheveux permet de stimuler la repousse capillaire et de remplir les zones dégarnies de la chevelure.</p>


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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/cheuveux/chuteDeCheuveux.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 126
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/cheuveux/chuteDeCheuveux.twig", 127)->display($context);
        // line 128
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/cheuveux/chuteDeCheuveux.twig";
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

{% block title %}  <title> chute De Cheuveux </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

            <h1>Chute de cheveux</h1>

            <p>La chute de cheveux peut générer des complexes et affecter l’estime de soi, en particulier si elle évolue en calvitie. Même si elle est souvent dictée par des facteurs génétiques, la calvitie est loin d’être incurable. Encore faut-il identifier la cause de la chute de cheveux afin de la traiter efficacement.</p>
            <h2>Quelles sont les causes de la chute des cheveux ?</h2>
            <p>La chute de cheveux peut être consécutive à :</p>




                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
              <ul>
                <li>Des facteurs génétiques et héréditaires </li>
                <li>Des fluctuations hormonales : elles peuvent être liées au stress, la grossesse, la ménopause ou encore des troubles de la thyroïde. De même, le changement des saisons a un retentissement sur les sécrétions hormonales, d’où la chute de cheveux saisonnière.  </li>
                <li>Des carences nutritionnelles, notamment en fer</li>
                <li>Certaines maladies auto-immunes</li>
                <li>Un traitement par chimiothérapie</li>
              </ul>


             </div>

             <div class=\"col-md-6 \">

            <p>Lorsque la chute de cheveux est minime ou passagère, certains traitements vitaminés (compléments alimentaires, injection PRP cheveux…) peuvent renforcer le bulbe capillaire et limiter la perte de cheveux. Des sprays adaptés et des shampoings anti-chute peuvent également atténuer la perte de cheveux. Toutefois, en cas d’alopécie ou de calvitie androgénique, seule la greffe de cheveux permet de stimuler la repousse capillaire et de remplir les zones dégarnies de la chevelure.</p>


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
  ", "/homes/besoins/fr/cheuveux/chuteDeCheuveux.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/cheuveux/chuteDeCheuveux.twig");
    }
}
