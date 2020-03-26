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

/* /homes/solutions/fr/visage/rhinoplastie.twig */
class __TwigTemplate_0bcbb10bb7063853bbd3603999fbab1788e4e12fcf032460d801183e6149a2d5 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/visage/rhinoplastie.twig", 1);
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
              <h1>Rhinoplastie en Turquie : correction de la forme du nez </h1>
              <p>La rhinoplastie est une chirurgie esthétique qui permet de remodeler le nez ou de le reconstruire. Lors d’un séjour médical en Turquie, le patient aura accès à une structure hospitalière de haut niveau et une assistance médicale personnalisée.</p>
              <p>La rhinoplastie est une très ancienne pratique déjà connue depuis longtemps. Devenue très simplifiée et beaucoup plus prometteuse, cette intervention esthétique prend actuellement les premiers rangs parmi les opérations esthétiques les plus sollicitées dans le monde entier.</p>
              <h2>Rhinoplastie : Rôle</h2>
              <p>On entend par rhinoplastie l’intervention esthétique qui agit sur le nez par la modification complète ou partielle de sa morphologie. Les patients sollicitent une rhinoplastie pour des motivations esthétiques. Leur cas peut solliciter dans certains cas la combinaison de la rhinoplastie avec une génioplastie : chirurgie esthétique qui traite le menton. Cette profiloplastie permet de corriger et d’harmoniser le profil du patient.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
                          <p>La rhinoplastie en Turquie et la génioplastie sont considérées comme deux interventions esthétiques très prometteuses car elles modifient remarquablement les traits et l’aspect du visage qui devient plus fin et plus attrayant. </p>
              <h2>Déroulement de l’intervention de rhinoplastie en Turquie</h2>
              <p>Après un examen minutieux des structures du nez, du défaut à corriger et de la technique à adopter le chirurgien pourra commencer son acte chirurgical.</p>
              <p>Le chirurgien esthétique commence par décoller la peau du nez et examine les déformations osseuses et les défauts cartilagineux. </p>
              <p>L’une des principales prérogatives d’une rhinoplastie consiste à faire des incisions discrètes réalisées sous les narines ou bien sous la ligne qui les sépare. Cette partie du nez, qui est la ligne séparatrice, s’appelle la columelle. Comme vous l’avez probablement constaté, une Rhinoplastie ne laisse pas apparaître les cicatrices de l’opération esthétique.</p>
              <p>Pour ôter une bosse du nez très apparente, il diminue la masse osseuse. La suppression de la bosse permet d’avoir un nez d’une forme très affinée. </p>
              <p>Pour corriger la forme de la pointe du nez, plusieurs techniques sont possibles : la diminution du cartilage alaire, la réalisation d’une greffe de cartilage ou bien la jointure des cartilages à l’aide des fils de suture.</p>


             </div>

             <div class=\"col-md-6 \">
              <p>On parle d’une rhinoplastie partielle, quand l’acte chirurgical se focalise sur une seule partie du nez. Lorsque l’intervention agit sur toutes les composantes nasales, on parle dans ce cas, d’une Rhinoplastie complète.</p>
              <p>À la fin de l’opération, un pansement spécial et une attelle de maintien seront posés sur le nez du patient.</p>
              <h2>Suites opératoires et résultat de la rhinoplastie</h2>
              <p>Le deuxième jour après l’intervention de rhinoplastie, le chirurgien effectue plusieurs soins nécessaires comme le changement du pansement et il retire les mèches. </p>
              <p>Vers le cinquième jour, il enlève l’attelle. Cette dernière pourra être remplacée par une tierce personne selon le cas.</p>
              <p>Le patient pourra reprendre sa vie normale. Mais, il ne devra faire aucune activité sportive durant les trois premiers mois.</p>
              <p>Le résultat d’une rhinoplastie en Turquie, peut être observé après trois mois. Il sera final et définitif après une période de 6 mois au total après la chirurgie de rhinoplastie.</p>


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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/visage/rhinoplastie.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 127
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/visage/rhinoplastie.twig", 128)->display($context);
        // line 129
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/visage/rhinoplastie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 129,  226 => 128,  222 => 127,  218 => 71,  216 => 70,  210 => 69,  204 => 129,  202 => 127,  190 => 118,  158 => 89,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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
              <h1>Rhinoplastie en Turquie : correction de la forme du nez </h1>
              <p>La rhinoplastie est une chirurgie esthétique qui permet de remodeler le nez ou de le reconstruire. Lors d’un séjour médical en Turquie, le patient aura accès à une structure hospitalière de haut niveau et une assistance médicale personnalisée.</p>
              <p>La rhinoplastie est une très ancienne pratique déjà connue depuis longtemps. Devenue très simplifiée et beaucoup plus prometteuse, cette intervention esthétique prend actuellement les premiers rangs parmi les opérations esthétiques les plus sollicitées dans le monde entier.</p>
              <h2>Rhinoplastie : Rôle</h2>
              <p>On entend par rhinoplastie l’intervention esthétique qui agit sur le nez par la modification complète ou partielle de sa morphologie. Les patients sollicitent une rhinoplastie pour des motivations esthétiques. Leur cas peut solliciter dans certains cas la combinaison de la rhinoplastie avec une génioplastie : chirurgie esthétique qui traite le menton. Cette profiloplastie permet de corriger et d’harmoniser le profil du patient.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
                          <p>La rhinoplastie en Turquie et la génioplastie sont considérées comme deux interventions esthétiques très prometteuses car elles modifient remarquablement les traits et l’aspect du visage qui devient plus fin et plus attrayant. </p>
              <h2>Déroulement de l’intervention de rhinoplastie en Turquie</h2>
              <p>Après un examen minutieux des structures du nez, du défaut à corriger et de la technique à adopter le chirurgien pourra commencer son acte chirurgical.</p>
              <p>Le chirurgien esthétique commence par décoller la peau du nez et examine les déformations osseuses et les défauts cartilagineux. </p>
              <p>L’une des principales prérogatives d’une rhinoplastie consiste à faire des incisions discrètes réalisées sous les narines ou bien sous la ligne qui les sépare. Cette partie du nez, qui est la ligne séparatrice, s’appelle la columelle. Comme vous l’avez probablement constaté, une Rhinoplastie ne laisse pas apparaître les cicatrices de l’opération esthétique.</p>
              <p>Pour ôter une bosse du nez très apparente, il diminue la masse osseuse. La suppression de la bosse permet d’avoir un nez d’une forme très affinée. </p>
              <p>Pour corriger la forme de la pointe du nez, plusieurs techniques sont possibles : la diminution du cartilage alaire, la réalisation d’une greffe de cartilage ou bien la jointure des cartilages à l’aide des fils de suture.</p>


             </div>

             <div class=\"col-md-6 \">
              <p>On parle d’une rhinoplastie partielle, quand l’acte chirurgical se focalise sur une seule partie du nez. Lorsque l’intervention agit sur toutes les composantes nasales, on parle dans ce cas, d’une Rhinoplastie complète.</p>
              <p>À la fin de l’opération, un pansement spécial et une attelle de maintien seront posés sur le nez du patient.</p>
              <h2>Suites opératoires et résultat de la rhinoplastie</h2>
              <p>Le deuxième jour après l’intervention de rhinoplastie, le chirurgien effectue plusieurs soins nécessaires comme le changement du pansement et il retire les mèches. </p>
              <p>Vers le cinquième jour, il enlève l’attelle. Cette dernière pourra être remplacée par une tierce personne selon le cas.</p>
              <p>Le patient pourra reprendre sa vie normale. Mais, il ne devra faire aucune activité sportive durant les trois premiers mois.</p>
              <p>Le résultat d’une rhinoplastie en Turquie, peut être observé après trois mois. Il sera final et définitif après une période de 6 mois au total après la chirurgie de rhinoplastie.</p>


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
  ", "/homes/solutions/fr/visage/rhinoplastie.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/visage/rhinoplastie.twig");
    }
}
