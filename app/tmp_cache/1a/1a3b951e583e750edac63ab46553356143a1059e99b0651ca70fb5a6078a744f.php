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

/* /homes/besoins/fr/visage/menton.twig */
class __TwigTemplate_055f972db1c181eb40d2a3b67cbfbfe92238c2841150f952fbc6f30a3be2b24c extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/visage/menton.twig", 1);
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

              <h1>Les problèmes du menton : progénie, rétrogénie et double menton </h1>
              <p>Pour chaque partie du corps, il existe des problèmes et des techniques de chirurgie ou de médecine esthétique pour les solutionner. Le menton est la partie protubérante de l’os mandibulaire du visage. Pour certains, il est très avancé, pour d’autres il est reculé. Parfois, une couche de graisse peut venir alourdir les contours du visage pour créer l’effet d’un double menton.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <h2>Un menton avancé</h2> 
              <p>Il est aussi appelé menton en galoche. Il est caractérisé par une projection vers l’avant plus prononcée du menton, c’est la progénie. </p>
              <p>Le menton en galoche peut être causé par le fait que la mâchoire inférieure est avancée beaucoup plus que la mâchoire supérieure. Dans ce cas, il faut vérifier les radios et voir avec le chirurgien-dentiste si le traitement de cette malformation nécessite une chirurgie parodontale seule ou associée à un acte de chirurgie esthétique.</p>
              <p>Il peut aussi être due à une protubérance osseuse ou par une proéminence des parties molles du visage dans son tiers inférieur. Afin de remédier à ce complexe, il n’y a que la chirurgie de mentoplastie qui permet de le faire.</p>
              <p>La progénie est généralement héréditaire et son traitement ne se fait qu’après la consultation d’un chirurgien spécialisé. Un examen minutieux des radios est nécessaire pour établir un diagnostic précis.</p>
              <h2>Un menton reculé </h2>
              <p>La rétrogénie s’explique par le fait d’avoir l’os mandibulaire fuyant vers l’arrière. C’est lorsque la mâchoire inférieure est reculée par rapport à la mâchoire supérieure. Une gêne aussi bien sur le plan esthétique que fonctionnel puisque cela engendre des problèmes de mastication et même de respiration. Une vérification des radios est nécessaire à ce niveau.</p>
              <p>Lorsque le menton est en retrait par rapport au tiers supérieur du visage, la personne peut être sujette à plusieurs complexes.</p>
              <p>Afin d’y remédier une pose de prothèse ou de greffe osseuse est possible en cas de recul du menton. Mais il faut avant tout vérifier l’état de la mâchoire avant tout.</p>

             </div>

             <div class=\"col-md-6\">
               <h2>Le double menton</h2>
                <p>Lorsqu’un amas graisseux se localise sous la mâchoire cela donne naissance à ce qu’on appelle « le double menton ». Les principales causes de l’apparition du double menton sont :</p>
                <ul>
                <li>Le relâchement de la peau qui devient plus fine, </li>
                <li>L’âge, </li>
                <li>La prise de poids, </li>
                <li>L’effet de la gravite et</li>
                <li>L’infiltration graisseuse.</li>
                </ul>
                <p>L’ovale du visage n’est plus clairement dessiné et le visage parait vieilli et fatigué. On peut affiner les contours du visage et redessiner son ovale par la liposuccion et/ou la chirurgie.</p>
                <p>Si la peau possède un pouvoir de rétraction important, il est possible d’aspirer cette graisse sous-cutanée par de fines canules adaptées. Si la peau est beaucoup trop relâchée, il faut enlever chirurgicalement le surplus cutané.</p>

            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 129
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 131
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/visage/menton.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 129
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/visage/menton.twig", 130)->display($context);
        // line 131
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/visage/menton.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 131,  228 => 130,  224 => 129,  220 => 71,  218 => 70,  212 => 69,  206 => 131,  204 => 129,  192 => 120,  156 => 87,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

              <h1>Les problèmes du menton : progénie, rétrogénie et double menton </h1>
              <p>Pour chaque partie du corps, il existe des problèmes et des techniques de chirurgie ou de médecine esthétique pour les solutionner. Le menton est la partie protubérante de l’os mandibulaire du visage. Pour certains, il est très avancé, pour d’autres il est reculé. Parfois, une couche de graisse peut venir alourdir les contours du visage pour créer l’effet d’un double menton.</p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
             <h2>Un menton avancé</h2> 
              <p>Il est aussi appelé menton en galoche. Il est caractérisé par une projection vers l’avant plus prononcée du menton, c’est la progénie. </p>
              <p>Le menton en galoche peut être causé par le fait que la mâchoire inférieure est avancée beaucoup plus que la mâchoire supérieure. Dans ce cas, il faut vérifier les radios et voir avec le chirurgien-dentiste si le traitement de cette malformation nécessite une chirurgie parodontale seule ou associée à un acte de chirurgie esthétique.</p>
              <p>Il peut aussi être due à une protubérance osseuse ou par une proéminence des parties molles du visage dans son tiers inférieur. Afin de remédier à ce complexe, il n’y a que la chirurgie de mentoplastie qui permet de le faire.</p>
              <p>La progénie est généralement héréditaire et son traitement ne se fait qu’après la consultation d’un chirurgien spécialisé. Un examen minutieux des radios est nécessaire pour établir un diagnostic précis.</p>
              <h2>Un menton reculé </h2>
              <p>La rétrogénie s’explique par le fait d’avoir l’os mandibulaire fuyant vers l’arrière. C’est lorsque la mâchoire inférieure est reculée par rapport à la mâchoire supérieure. Une gêne aussi bien sur le plan esthétique que fonctionnel puisque cela engendre des problèmes de mastication et même de respiration. Une vérification des radios est nécessaire à ce niveau.</p>
              <p>Lorsque le menton est en retrait par rapport au tiers supérieur du visage, la personne peut être sujette à plusieurs complexes.</p>
              <p>Afin d’y remédier une pose de prothèse ou de greffe osseuse est possible en cas de recul du menton. Mais il faut avant tout vérifier l’état de la mâchoire avant tout.</p>

             </div>

             <div class=\"col-md-6\">
               <h2>Le double menton</h2>
                <p>Lorsqu’un amas graisseux se localise sous la mâchoire cela donne naissance à ce qu’on appelle « le double menton ». Les principales causes de l’apparition du double menton sont :</p>
                <ul>
                <li>Le relâchement de la peau qui devient plus fine, </li>
                <li>L’âge, </li>
                <li>La prise de poids, </li>
                <li>L’effet de la gravite et</li>
                <li>L’infiltration graisseuse.</li>
                </ul>
                <p>L’ovale du visage n’est plus clairement dessiné et le visage parait vieilli et fatigué. On peut affiner les contours du visage et redessiner son ovale par la liposuccion et/ou la chirurgie.</p>
                <p>Si la peau possède un pouvoir de rétraction important, il est possible d’aspirer cette graisse sous-cutanée par de fines canules adaptées. Si la peau est beaucoup trop relâchée, il faut enlever chirurgicalement le surplus cutané.</p>

            </div>

             <div class=\"col-md-6\">
               <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        {% block leadFormFixBottomtfr %}
                              {% include('/homes/data/index/fr/leadFormFixBottom.twig') %}
                            {% endblock  %}  

{% endblock  %}
  ", "/homes/besoins/fr/visage/menton.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/visage/menton.twig");
    }
}
