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

/* /homes/besoins/fr/visage/complexeNez.twig */
class __TwigTemplate_fd070523e1cea1df3dfc39662e2f4e71574c60c9de4e4c1b5271a971703c38eb extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/visage/complexeNez.twig", 1);
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

              <h1>Les défauts du nez</h1>
              <p>au bon milieu du visage, le moindre défaut nasal saute aux yeux et peut devenir source de complexe. Grâce à la chirurgie esthétique, il est désormais possible de refaire son nez. Mais à chaque problème et à chaque déformation nasale, il existe une technique chirurgicale adaptée.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <p>Il existe plusieurs défauts qui nécessitent une intervention chirurgicale. Cela dit, les formes de nez varient d’une personne à une autre et il se trouve qu’une personne souhaite en modifier les traits sans pour autant qu’il y ait une malformation. Juste par convenance et par souhait d’en affiner les traits que la rhinoplastie esthétique peut être pratiquée. </p>
              <p>Voyons les différents types de nez : </p>
              <ul>
              <li>Bossu : c’est un nez qui dispose d’une bosse au niveau de l’arrête nasale. </li>
              <li>Crochu : c’est le nez Aquilin. Il est fin avec la pointe nasale qui pointe vers le bas. </li>
              <li>Tombant : comme son nom l’indique, il est étiré vers le bas du visage. </li>
              <li>Aplati : c’est le nez Camus, il est court et aplati. </li>
              <li>Épaté : ce type de nez est caractéristique des africains et des asiatiques qui possèdent généralement un nez court et large surtout au niveau des narines. </li>
              <li>En trompette, c’est lorsque la pointe du nez est retroussée vers le haut. </li>
              </ul>
              <p>Pour ces principaux types de nez la rhinoplastie, qui permet de les affiner et de les remodeler, peut être soit médicale soit chirurgicale.</p>
              <p>La déformation du nez peut aussi résulter d’un accident. Dans ce cas, la chirurgie réparatrice peut contribuer à le corriger. </p>
              <h2>Comment refaire son nez ?</h2>

              <p>Constitué de tissus mous, de cartilage et d’os, le nez peut être remodelé aux bons vouloirs du patient mais dans la limite du faisable. Un nez africain ne peut pas devenir un nez européen. Il faut respecter l’harmonie des traits du visage, les spécificités socioculturelles et génétiques pour avoir un résultat qui parait naturel.</p>


             </div>

             <div class=\"col-md-6 \">
               <p>Les techniques chirurgicales de la rhinoplastie permettent d’apporter les modifications nécessaires. Les actes chirurgicaux sont adaptés à chaque défaut pour un geste précis et pertinent. </p>

              <p>Par exemple, pour affiner un nez épaté, il faut faire une rhinoplastie ethnique ; et pour modifier un nez aplati, le chirurgien peut faire des greffes de cartilages ou d’os.</p>

              <p>De simples déformations peuvent être redressées par la rhinoplastie médicale. Des injections d’acide hyaluronique permettent de combler un creux ou une légère bosse par exemple.</p>

            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 130
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 132
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/visage/complexeNez.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 130
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/visage/complexeNez.twig", 131)->display($context);
        // line 132
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/visage/complexeNez.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 132,  229 => 131,  225 => 130,  221 => 71,  219 => 70,  213 => 69,  207 => 132,  205 => 130,  193 => 121,  156 => 87,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

              <h1>Les défauts du nez</h1>
              <p>au bon milieu du visage, le moindre défaut nasal saute aux yeux et peut devenir source de complexe. Grâce à la chirurgie esthétique, il est désormais possible de refaire son nez. Mais à chaque problème et à chaque déformation nasale, il existe une technique chirurgicale adaptée.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <p>Il existe plusieurs défauts qui nécessitent une intervention chirurgicale. Cela dit, les formes de nez varient d’une personne à une autre et il se trouve qu’une personne souhaite en modifier les traits sans pour autant qu’il y ait une malformation. Juste par convenance et par souhait d’en affiner les traits que la rhinoplastie esthétique peut être pratiquée. </p>
              <p>Voyons les différents types de nez : </p>
              <ul>
              <li>Bossu : c’est un nez qui dispose d’une bosse au niveau de l’arrête nasale. </li>
              <li>Crochu : c’est le nez Aquilin. Il est fin avec la pointe nasale qui pointe vers le bas. </li>
              <li>Tombant : comme son nom l’indique, il est étiré vers le bas du visage. </li>
              <li>Aplati : c’est le nez Camus, il est court et aplati. </li>
              <li>Épaté : ce type de nez est caractéristique des africains et des asiatiques qui possèdent généralement un nez court et large surtout au niveau des narines. </li>
              <li>En trompette, c’est lorsque la pointe du nez est retroussée vers le haut. </li>
              </ul>
              <p>Pour ces principaux types de nez la rhinoplastie, qui permet de les affiner et de les remodeler, peut être soit médicale soit chirurgicale.</p>
              <p>La déformation du nez peut aussi résulter d’un accident. Dans ce cas, la chirurgie réparatrice peut contribuer à le corriger. </p>
              <h2>Comment refaire son nez ?</h2>

              <p>Constitué de tissus mous, de cartilage et d’os, le nez peut être remodelé aux bons vouloirs du patient mais dans la limite du faisable. Un nez africain ne peut pas devenir un nez européen. Il faut respecter l’harmonie des traits du visage, les spécificités socioculturelles et génétiques pour avoir un résultat qui parait naturel.</p>


             </div>

             <div class=\"col-md-6 \">
               <p>Les techniques chirurgicales de la rhinoplastie permettent d’apporter les modifications nécessaires. Les actes chirurgicaux sont adaptés à chaque défaut pour un geste précis et pertinent. </p>

              <p>Par exemple, pour affiner un nez épaté, il faut faire une rhinoplastie ethnique ; et pour modifier un nez aplati, le chirurgien peut faire des greffes de cartilages ou d’os.</p>

              <p>De simples déformations peuvent être redressées par la rhinoplastie médicale. Des injections d’acide hyaluronique permettent de combler un creux ou une légère bosse par exemple.</p>

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
  ", "/homes/besoins/fr/visage/complexeNez.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/visage/complexeNez.twig");
    }
}
