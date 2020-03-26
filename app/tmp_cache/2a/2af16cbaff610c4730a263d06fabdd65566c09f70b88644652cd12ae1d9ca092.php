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

/* /homes/solutions/fr/seins/liftingSeins.twig */
class __TwigTemplate_9d2e74ea65dd6b91196a252a5af17047149b3203de66257a0f539e1ae33a0c07 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/seins/liftingSeins.twig", 1);
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
        echo "  <title> lifting seins</title> ";
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

             <h1>Le lifting mammaire pour corriger la ptose des seins</h1>
              <p>La ptose mammaire est un défaut inesthétique qui se manifeste par un affaissement des seins. Ces derniers, sont flasques, tombants et inspirent un vide au niveau de la partie supérieure et une pesanteur au niveau de la zone inférieure. La ptose mammaire peut aussi intervenir après une grossesse, un allaitement ou suite à un amaigrissement. Le vieillissement de la peau est aussi responsable de l’affaissement des seins. Le lifting des seins est la seule solution pour y remédier. </p>
              <p>Cette chirurgie esthétique est souvent associée à une augmentation ou une réduction mammaire si la patiente souffre d’une hypotrophie ou hypertrophie de la poitrine. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                       <h2>Comment se déroule le lifting des seins ? </h2>

                    <p>Le lifting mammaire est réalisé par l’un de nos chirurgiens turcs, il se pratique sous anesthésie générale et dure entre 01h30 et 03h. Il requiert généralement 02 jours d’hospitalisation.</p>
                    <p>Le principe de l’intervention est simple. Posez-vous cette question et vous allez comprendre de quoi il s’agit : comment seront les seins tombants et affaissés après les avoir traités par une chirurgie esthétique ? La réponse est évidente : ils seront rehaussés. C’est bien là que se situe l’objectif du lifting mammaire.</p>
                    <p>Pour ce faire, le chirurgien esthétique, repositionne le mamelon et l’aréole, ascensionne la glande mammaire et retire la peau en surplus. Cette technique permet d’offrir des seins harmonieux, symétriques et donc une belle poitrine.</p>
                    <p>On distingue trois types de ptoses mammaires : la ptose importante, la ptose moyenne et la ptose légère. À chaque type indiqué correspond une technique d’incision :</p>
                    <ul>
                    <li>Une incision autour de l’aréole suivie d’une autre allant de la limite de l’aréole jusqu’au sillon et d’une troisième effectuée horizontalement dans le pli du sein. Cette incision assez importante prend la forme d’un T inversé. Elle est utilisée dans le cas d’une grande ptose mammaire.</li>
                    <li>Si la ptose est moyenne, la troisième incision n’est plus nécessaire.</li>
                    <li>Dans le cas d’une ptose légère, le chirurgien réalise seulement une incision autour de la zone aréolaire.
                    Si les seins de la patiente présentent une hypotrophie mammaire, le chirurgien procède à la mise en place d’une prothèse mammaire.</li>
                    </ul>



             </div>

             <div class=\"col-md-6 \">
              <p>Dans tous les cas, quelle que soit l’incision pratiquée, le lifting mammaire ne nuit pas à la sensibilité des seins.</p>
              <h2>Les suites opératoires du lifting mammaire ?</h2> 
              <p>Les douleurs pressenties sont apaisées par des antalgiques classiques prescrits par le chirurgien. Les ecchymoses et l’œdème ne persistent que quelques jours après l’intervention de lifting mammaire en Turquie.</p>
              <p>Le bandage posé à la fin de l’intervention est remplacé après 48h par un bustier élastique sur mesure. La patiente peut alors quitter la clinique. Un soutien-gorge de contention lui sera fourni lors de la prochaine consultation. Ce soutien-gorge doit être porté 24/24 h durant un mois. Un congé minimum de 7 jours est obligatoire.</p>
              <p>Les fils de sutures sont enlevés par le chirurgien pactisant après 08 jours de l’intervention.</p>

              <h2>Résultat du lifting des seins</h2>
              <p>Le résultat est percevable dès le début. Il continue à s’améliorer progressivement jusqu’à atteindre son stade final un an après l’intervention. Les seins de la patiente ont un meilleur galbe. Ceci, lui apporte satisfaction et joie. La patiente a finalement fait un lifting mammaire dans les règles de l’art sans avoir vidé ses poches.</p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 136
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 138
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/seins/liftingSeins.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 136
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/seins/liftingSeins.twig", 137)->display($context);
        // line 138
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/seins/liftingSeins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 138,  235 => 137,  231 => 136,  227 => 71,  225 => 70,  219 => 69,  213 => 138,  211 => 136,  199 => 127,  158 => 89,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> lifting seins</title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Le lifting mammaire pour corriger la ptose des seins</h1>
              <p>La ptose mammaire est un défaut inesthétique qui se manifeste par un affaissement des seins. Ces derniers, sont flasques, tombants et inspirent un vide au niveau de la partie supérieure et une pesanteur au niveau de la zone inférieure. La ptose mammaire peut aussi intervenir après une grossesse, un allaitement ou suite à un amaigrissement. Le vieillissement de la peau est aussi responsable de l’affaissement des seins. Le lifting des seins est la seule solution pour y remédier. </p>
              <p>Cette chirurgie esthétique est souvent associée à une augmentation ou une réduction mammaire si la patiente souffre d’une hypotrophie ou hypertrophie de la poitrine. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                       <h2>Comment se déroule le lifting des seins ? </h2>

                    <p>Le lifting mammaire est réalisé par l’un de nos chirurgiens turcs, il se pratique sous anesthésie générale et dure entre 01h30 et 03h. Il requiert généralement 02 jours d’hospitalisation.</p>
                    <p>Le principe de l’intervention est simple. Posez-vous cette question et vous allez comprendre de quoi il s’agit : comment seront les seins tombants et affaissés après les avoir traités par une chirurgie esthétique ? La réponse est évidente : ils seront rehaussés. C’est bien là que se situe l’objectif du lifting mammaire.</p>
                    <p>Pour ce faire, le chirurgien esthétique, repositionne le mamelon et l’aréole, ascensionne la glande mammaire et retire la peau en surplus. Cette technique permet d’offrir des seins harmonieux, symétriques et donc une belle poitrine.</p>
                    <p>On distingue trois types de ptoses mammaires : la ptose importante, la ptose moyenne et la ptose légère. À chaque type indiqué correspond une technique d’incision :</p>
                    <ul>
                    <li>Une incision autour de l’aréole suivie d’une autre allant de la limite de l’aréole jusqu’au sillon et d’une troisième effectuée horizontalement dans le pli du sein. Cette incision assez importante prend la forme d’un T inversé. Elle est utilisée dans le cas d’une grande ptose mammaire.</li>
                    <li>Si la ptose est moyenne, la troisième incision n’est plus nécessaire.</li>
                    <li>Dans le cas d’une ptose légère, le chirurgien réalise seulement une incision autour de la zone aréolaire.
                    Si les seins de la patiente présentent une hypotrophie mammaire, le chirurgien procède à la mise en place d’une prothèse mammaire.</li>
                    </ul>



             </div>

             <div class=\"col-md-6 \">
              <p>Dans tous les cas, quelle que soit l’incision pratiquée, le lifting mammaire ne nuit pas à la sensibilité des seins.</p>
              <h2>Les suites opératoires du lifting mammaire ?</h2> 
              <p>Les douleurs pressenties sont apaisées par des antalgiques classiques prescrits par le chirurgien. Les ecchymoses et l’œdème ne persistent que quelques jours après l’intervention de lifting mammaire en Turquie.</p>
              <p>Le bandage posé à la fin de l’intervention est remplacé après 48h par un bustier élastique sur mesure. La patiente peut alors quitter la clinique. Un soutien-gorge de contention lui sera fourni lors de la prochaine consultation. Ce soutien-gorge doit être porté 24/24 h durant un mois. Un congé minimum de 7 jours est obligatoire.</p>
              <p>Les fils de sutures sont enlevés par le chirurgien pactisant après 08 jours de l’intervention.</p>

              <h2>Résultat du lifting des seins</h2>
              <p>Le résultat est percevable dès le début. Il continue à s’améliorer progressivement jusqu’à atteindre son stade final un an après l’intervention. Les seins de la patiente ont un meilleur galbe. Ceci, lui apporte satisfaction et joie. La patiente a finalement fait un lifting mammaire dans les règles de l’art sans avoir vidé ses poches.</p>



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
  ", "/homes/solutions/fr/seins/liftingSeins.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/seins/liftingSeins.twig");
    }
}
