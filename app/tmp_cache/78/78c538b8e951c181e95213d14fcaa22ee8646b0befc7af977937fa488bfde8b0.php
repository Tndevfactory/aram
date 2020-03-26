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

/* /homes/solutions/fr/seins/prothesesMammaires.twig */
class __TwigTemplate_8bf9a07b89fc24805a06fd485d863e9afb8739e5ed13c77e76287bb50e05a649 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/seins/prothesesMammaires.twig", 1);
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
        echo "  <title> protheses mammaires</title> ";
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

             <h1>Augmentation mammaire par implants en Turquie </h1>
              <p>Décider à faire une augmentation mammaire en Turquie pour embellir la forme de vos seins est certainement un choix judicieux. Cette chirurgie esthétique permet à la fois de traiter l’hypotrophie et la ptose de la poitrine. Elle est généralement effectuée à l’aide de prothèses rondes ou anatomiques et se fait selon les principes de l’éthique médicale. </p>
              <h2>Quels sont les divers types de prothèses mammaires ?</h2>
              <p>Il existe deux types de prothèses mammaires : les prothèses en silicone et les prothèses remplies de sérum physiologique. Ces deux catégories d’implants mammaires sont enveloppées par une couche en élastomère de silicone. Elles peuvent avoir une forme ronde (destinée à une forte augmentation mammaire) ou une forme anatomique semblable à celle d’une goutte ou d’une poire.</p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         <p>Les chirurgiens esthétiques turcs optent généralement pour les prothèses en gel de silicone, étant donné qu’elles paraissent très naturelles au toucher et qu’elles ne présentent surtout pas le risque de dévier de son emplacement une période après l’intervention. D’autre part, l’usage de ses prothèses ne s’est jamais associé à une maladie particulière ou à un cancer des seins.</p>
                    <p>Concernant les patientes qui veulent allaiter après une augmentation mammaire, il n’existe également aucune contre-indication en rapport avec l’insertion de ces prothèses. Ajoutons aussi que les implants mammaires en silicone ont une durée de vie très prolongée (plus de 10 ans). </p>
                    <p>L’usage des implants salins n’est pas vraiment très recommandé par les chirurgiens plasticiens. Car, ce type de prothèse risque de se dégonfler après un certain temps. De plus, contrairement au gel de silicone, le sérum physiologique ne permet pas donner à la poitrine un aspect parfaitement naturel. </p>
                    <h2>Déroulement de l’augmentation mammaire par implants</h2>
                    <ul>
                    <li>Durée : 1h :30</li>      
                    <li>Anesthésie : Générale</li>      
                    <li>Hospitalisation : 1 ou 2 jour</li>
                    </ul>
                    <p>Comme pour n’importe quelle opération chirurgicale, les entretiens avec le chirurgien et le médecin anesthésiste sont toujours primordiaux. Lors de ces premières consultations, seront déterminés tous les détails relatifs à votre intervention esthétique en Turquie comme : le choix de la prothèse mammaire et du volume adéquat, le type des incisions, la durée de la cicatrisation. Une mammographie et un bilan sanguin seront notamment demandés par votre chirurgien esthétique.</p>
                    <p>Les risques liés à cette intervention sont très rares, mais ils seront tout de même évoqués pour permettre à la patiente d’avoir une vision exhaustive sur toutes les informations liées à son opération esthétique.</p>
                    <h3>Zones d’insertion de la prothèse mammaire</h3>
                    <p>Le chirurgien choisit selon le cas traité, l’emplacement de la loge dans laquelle il posera la prothèse mammaire. Cet emplacement peut être derrière le muscle pectoral et on parle dans ce cas d’une position rétro-musculaire ou devant le muscle pectoral, ce qui implique une position rétro-glandulaire. La position rétro-musculaire est généralement indiquée aux femmes minces ayant de très petits seins. Le chirurgien expliquera à la patiente les avantages et les inconvénients de chaque type d’emplacement.</p>



             </div>

             <div class=\"col-md-6 \">
              <h3>Types d’incisions </h3>
                <h4>Une incision périaréolaire</h4>
                <p>Cette incision se réalise autour du mamelon. Malgré sa discrétion, elle n’est pas recommandée aux femmes qui désirent allaiter après l’intervention car elle nécessite la résection de certains conduits mammaires.</p>
                <h4>Une incision infra-mammaire</h4>
                <p>La zone d’incision est dans ce cas, située au niveau du sillon mammaire.  Le choix de cette incision, permet d’éviter les risques induisant des problèmes d’allaitement. Il permet également d’accéder facilement à la zone d’implantation.</p>
                <h4>Une incision axillaire</h4>
                <p>Cette incision se fait au niveau de l’aisselle. Malgré qu’elle n’engendre pas des effets négatifs sur la qualité de l’allaitement, elle est généralement évitée par les chirurgiens car elle ne permet pas de bien camoufler les traces des incisions faites.</p>
                <h2>Augmentation mammaire : suites opératoires et résultat</h2>
                <p>Un drain sera placé par le chirurgien pactisant sur la partie opérée. Ce drain sera gardé seulement 24 heures. Puis, il sera remplacé par un soutien-gorge de contention. Ce dernier sert à bien maintenir les prothèses et à protéger la poitrine. </p>
                <p>Le résultat de l’augmentation mammaire sera très satisfaisant après deux ou trois mois. A partir du 6ème mois, il devient définitif. Six mois, est en fait, la période nécessaire pour que les réactions inflammatoires disparaissent et pour que la peau s’adapte au nouveau volume des seins.</p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 140
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 142
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/seins/prothesesMammaires.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 140
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/seins/prothesesMammaires.twig", 141)->display($context);
        // line 142
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/seins/prothesesMammaires.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 142,  239 => 141,  235 => 140,  231 => 71,  229 => 70,  223 => 69,  217 => 142,  215 => 140,  203 => 131,  159 => 90,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> protheses mammaires</title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Augmentation mammaire par implants en Turquie </h1>
              <p>Décider à faire une augmentation mammaire en Turquie pour embellir la forme de vos seins est certainement un choix judicieux. Cette chirurgie esthétique permet à la fois de traiter l’hypotrophie et la ptose de la poitrine. Elle est généralement effectuée à l’aide de prothèses rondes ou anatomiques et se fait selon les principes de l’éthique médicale. </p>
              <h2>Quels sont les divers types de prothèses mammaires ?</h2>
              <p>Il existe deux types de prothèses mammaires : les prothèses en silicone et les prothèses remplies de sérum physiologique. Ces deux catégories d’implants mammaires sont enveloppées par une couche en élastomère de silicone. Elles peuvent avoir une forme ronde (destinée à une forte augmentation mammaire) ou une forme anatomique semblable à celle d’une goutte ou d’une poire.</p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         <p>Les chirurgiens esthétiques turcs optent généralement pour les prothèses en gel de silicone, étant donné qu’elles paraissent très naturelles au toucher et qu’elles ne présentent surtout pas le risque de dévier de son emplacement une période après l’intervention. D’autre part, l’usage de ses prothèses ne s’est jamais associé à une maladie particulière ou à un cancer des seins.</p>
                    <p>Concernant les patientes qui veulent allaiter après une augmentation mammaire, il n’existe également aucune contre-indication en rapport avec l’insertion de ces prothèses. Ajoutons aussi que les implants mammaires en silicone ont une durée de vie très prolongée (plus de 10 ans). </p>
                    <p>L’usage des implants salins n’est pas vraiment très recommandé par les chirurgiens plasticiens. Car, ce type de prothèse risque de se dégonfler après un certain temps. De plus, contrairement au gel de silicone, le sérum physiologique ne permet pas donner à la poitrine un aspect parfaitement naturel. </p>
                    <h2>Déroulement de l’augmentation mammaire par implants</h2>
                    <ul>
                    <li>Durée : 1h :30</li>      
                    <li>Anesthésie : Générale</li>      
                    <li>Hospitalisation : 1 ou 2 jour</li>
                    </ul>
                    <p>Comme pour n’importe quelle opération chirurgicale, les entretiens avec le chirurgien et le médecin anesthésiste sont toujours primordiaux. Lors de ces premières consultations, seront déterminés tous les détails relatifs à votre intervention esthétique en Turquie comme : le choix de la prothèse mammaire et du volume adéquat, le type des incisions, la durée de la cicatrisation. Une mammographie et un bilan sanguin seront notamment demandés par votre chirurgien esthétique.</p>
                    <p>Les risques liés à cette intervention sont très rares, mais ils seront tout de même évoqués pour permettre à la patiente d’avoir une vision exhaustive sur toutes les informations liées à son opération esthétique.</p>
                    <h3>Zones d’insertion de la prothèse mammaire</h3>
                    <p>Le chirurgien choisit selon le cas traité, l’emplacement de la loge dans laquelle il posera la prothèse mammaire. Cet emplacement peut être derrière le muscle pectoral et on parle dans ce cas d’une position rétro-musculaire ou devant le muscle pectoral, ce qui implique une position rétro-glandulaire. La position rétro-musculaire est généralement indiquée aux femmes minces ayant de très petits seins. Le chirurgien expliquera à la patiente les avantages et les inconvénients de chaque type d’emplacement.</p>



             </div>

             <div class=\"col-md-6 \">
              <h3>Types d’incisions </h3>
                <h4>Une incision périaréolaire</h4>
                <p>Cette incision se réalise autour du mamelon. Malgré sa discrétion, elle n’est pas recommandée aux femmes qui désirent allaiter après l’intervention car elle nécessite la résection de certains conduits mammaires.</p>
                <h4>Une incision infra-mammaire</h4>
                <p>La zone d’incision est dans ce cas, située au niveau du sillon mammaire.  Le choix de cette incision, permet d’éviter les risques induisant des problèmes d’allaitement. Il permet également d’accéder facilement à la zone d’implantation.</p>
                <h4>Une incision axillaire</h4>
                <p>Cette incision se fait au niveau de l’aisselle. Malgré qu’elle n’engendre pas des effets négatifs sur la qualité de l’allaitement, elle est généralement évitée par les chirurgiens car elle ne permet pas de bien camoufler les traces des incisions faites.</p>
                <h2>Augmentation mammaire : suites opératoires et résultat</h2>
                <p>Un drain sera placé par le chirurgien pactisant sur la partie opérée. Ce drain sera gardé seulement 24 heures. Puis, il sera remplacé par un soutien-gorge de contention. Ce dernier sert à bien maintenir les prothèses et à protéger la poitrine. </p>
                <p>Le résultat de l’augmentation mammaire sera très satisfaisant après deux ou trois mois. A partir du 6ème mois, il devient définitif. Six mois, est en fait, la période nécessaire pour que les réactions inflammatoires disparaissent et pour que la peau s’adapte au nouveau volume des seins.</p>



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
  ", "/homes/solutions/fr/seins/prothesesMammaires.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/seins/prothesesMammaires.twig");
    }
}
