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

/* /homes/solutions/fr/seins/reductionMammaire.twig */
class __TwigTemplate_b8c0a88b4a6716702f7cbfd077b560060bdcb813eb9dae1e2afb0648d637e575 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/seins/reductionMammaire.twig", 1);
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
        echo "  <title> reduction mammaire </title> ";
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

             <h1> Réduction mammaire </h1>
              <p> Une poitrine très généreuse est un atout très apprécié par la plupart des femmes. Cependant lorsque le volume des seins devient excessif, il entraîne un retentissement physique et une gêne morale non négligeable. Nos cliniques, Centre International Carthage médical, Clinique Hannibal et Clinique Pasteur proposent des interventions réduction mammaires efficaces et très sécurisée. </p>
              <p> Pour les patients résidents à l’étranger, nous leurs facilitons toutes les tâches nécessaires à leurs séjours médicaux en Tunisie. Un service d’assistance assuré par une équipe très expérimentée est mis à la disposition de toutes personnes cherchant à savoir de plus amples renseignements sur nos cliniques esthétiques pluridisciplinaires et sur la chirurgie esthétique en Tunisie. </p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         <p> Nos chirurgiens esthétiques plasticiens, peuvent aussi être contactés pour répondre à toutes les questions liées aux interventions esthétiques proposées. Pour avoir un devis personnalisés, nous vous proposons de bien remplir le formulaire disponible sur ce site. </p>
                    <h2> REDUCTION MAMMAIRE TUNISIE </h2>
                    <p> La réduction mammaire traite l’hypertrophie des seins et retend la peau affaissée par le surpoids de la poitrine. Cette opération est une intervention esthétique réparatrice qui sert à améliorer l’aspect de la poitrine et à traiter des douleurs produites par l’hypertrophie mammaire. </p>
                    <p> On fait appel à l’intervention réduction mammaire en Tunisie lorsque le grand poids des seins devient très gênant. En effet, l’hypertrophie mammaire due à un grand excès hormonal, provoque plusieurs douleurs dorsales ou au niveau du cou et favorise la manifestation d’une ptose mammaire qui se manifeste par un affaissement des seins et par un relâchement excessif de la peau de la poitrine Ce phénomène débute généralement à la puberté, ou se déclenche après une grossesse. La surcharge pondérale peut aussi engendrer une hypertrophie mammaire. </p>
                    <h2> LA STRUCTURE DU SEIN EN BEF </h2>
                    <p> Situé au-dessus du muscle pectoral, le sein se forme de graisse, de glandes et de nombreux canaux. La quantité de chacun de ces éléments varie d’une femme à l’autre. </p>
                    <p> Le rôle de la glande consiste à produire du lait qui sera ensuite transporté par les canaux vers le mamelon. Le sein renferme plusieurs compartiments appelés lobules. Ces derniers, se composent également, d’autres lobules reliés par des canaux. Le sein se compose aussi, de nerfs, de vaisseaux sanguins, et de vaisseaux lymphatiques. </p>
                    <h2> INTERVENTION RÉDUCTION MAMMAIRE </h2>
                    <p> Anesthésie générale. ; 03 heures : 01 ou deux journées à la clinique. </p>
                    <p> Le chirurgien esthétique tunisien dessine sur les seins de la patiente des traits. Le travail à faire lors de l’intervention consiste à réaliser une ablation du tissu mammaire excédentaire puis à ascensionner l’enveloppe cutanée qui permettra d’améliorer la forme des seins et de leur donner le profil souhaité par la patiente </p>
                    <p> Tout dépend du cas qui se présente, le chirurgien peut réduire l’aréole et l’étirer avec le mamelon aussi, vers le haut. Durant l’intervention, le chirurgien prend toutes les précautions pour ne pas atteindre le bon fonctionnement des vaisseaux sanguins de la glande mammaire. La sensibilité des seins est aussi prise en considération. Les incisions réalisées sont fermées à l’aide de fils résorbables. </p>
                    <p> A la fin de l’intervention, le chirurgien procède à la mise en place des drains au niveau de la zone traitée. Ces drains permettent d’éviter le risque d’une ecchymose. Un pansement modelant formé de plusieurs bandes élastiques et ayant la forme d’un soutien-gorge sera ensuite posé. Ce pansement ne peut être utilisé que pour une période de 24 heures. Il sera remplacé par un soutien-gorge adapté que la patiente devra porter 24/24 h durant un mois. </p>
                    <p> Trois cicatrices sont faites au cours de cette intervention, deux parmi lesquelles sont essentielles alors que la troisième est facultative et ne se fait que lorsque l’hypertrophie mammaire est importante. Le nombre des incisions est déterminé par le chirurgien esthéticien tunisien lors de la première consultation. En ce qui concerne les formes et l’emplacement des deux incisions obligatoires, la première se réalise autour de l’aréole. La deuxième s’étend verticalement de la zone aréolaire jusqu’à au sillon sous mammaire. L’incision facultative se présente sous forme d’une ligne horizontale faite sous le sein, c’est-à-dire dans le sillon. </p>



             </div>

             <div class=\"col-md-6 \">
                          <p> En réponse à la question que posent toutes nos patientes : est-ce que les incisions faites lors d’une intervention réductions mammaire laisseront des cicatrices apparentes ?, nous précisions que la cicatrice péri-aréolaire sera complètement atténuée alors que les deux autres (la cicatrice verticale et la cicatrice horizontale) resteront légèrement apparentes. </p>
            <p> Le chirurgien esthéticien tunisien recommande à la patiente de se servir d’une crème hydratante pour atténuer les cicatrices. Ces derniers auront une couleur rose après 6 mois et deviendront très blanches après quatre mois de plus. Si l’aspect des cicatrices est très inesthétique, un traitement de laser CO2 peut être envisagé. </p>
            <h2> SUITES OPÉRATOIRES </h2>
            <p> Des antalgiques simples seront administrés pour apaiser les petites douleurs éventuelles. Les ecchymoses seront atténuées au bout de quelques jours. L’œdème sera disparu deux semaines après. La patiente devra faire attention à ne pas faire de très grands efforts physiques. </p>
            <h2> RÉSULTATS </h2>
            <p> Le lendemain de l’intervention de réduction mammaire en Tunisie, la nouvelle forme de la poitrine est déjà bien observée. La taille de la poitrine est bien réduite. Les seins sont redressés ayant un galbe en parfaite avec la morphologie de la patiente. Après trois mois, la peau se réadapte et l’aspect des seins s’améliore encore plus. A partir du 6ème mois, sera perçu le résultat final. </p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 134
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 136
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/seins/reductionMammaire.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 134
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/seins/reductionMammaire.twig", 135)->display($context);
        // line 136
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/seins/reductionMammaire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 136,  233 => 135,  229 => 134,  225 => 71,  223 => 70,  217 => 69,  211 => 136,  209 => 134,  197 => 125,  157 => 88,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> reduction mammaire </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1> Réduction mammaire </h1>
              <p> Une poitrine très généreuse est un atout très apprécié par la plupart des femmes. Cependant lorsque le volume des seins devient excessif, il entraîne un retentissement physique et une gêne morale non négligeable. Nos cliniques, Centre International Carthage médical, Clinique Hannibal et Clinique Pasteur proposent des interventions réduction mammaires efficaces et très sécurisée. </p>
              <p> Pour les patients résidents à l’étranger, nous leurs facilitons toutes les tâches nécessaires à leurs séjours médicaux en Tunisie. Un service d’assistance assuré par une équipe très expérimentée est mis à la disposition de toutes personnes cherchant à savoir de plus amples renseignements sur nos cliniques esthétiques pluridisciplinaires et sur la chirurgie esthétique en Tunisie. </p>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                         <p> Nos chirurgiens esthétiques plasticiens, peuvent aussi être contactés pour répondre à toutes les questions liées aux interventions esthétiques proposées. Pour avoir un devis personnalisés, nous vous proposons de bien remplir le formulaire disponible sur ce site. </p>
                    <h2> REDUCTION MAMMAIRE TUNISIE </h2>
                    <p> La réduction mammaire traite l’hypertrophie des seins et retend la peau affaissée par le surpoids de la poitrine. Cette opération est une intervention esthétique réparatrice qui sert à améliorer l’aspect de la poitrine et à traiter des douleurs produites par l’hypertrophie mammaire. </p>
                    <p> On fait appel à l’intervention réduction mammaire en Tunisie lorsque le grand poids des seins devient très gênant. En effet, l’hypertrophie mammaire due à un grand excès hormonal, provoque plusieurs douleurs dorsales ou au niveau du cou et favorise la manifestation d’une ptose mammaire qui se manifeste par un affaissement des seins et par un relâchement excessif de la peau de la poitrine Ce phénomène débute généralement à la puberté, ou se déclenche après une grossesse. La surcharge pondérale peut aussi engendrer une hypertrophie mammaire. </p>
                    <h2> LA STRUCTURE DU SEIN EN BEF </h2>
                    <p> Situé au-dessus du muscle pectoral, le sein se forme de graisse, de glandes et de nombreux canaux. La quantité de chacun de ces éléments varie d’une femme à l’autre. </p>
                    <p> Le rôle de la glande consiste à produire du lait qui sera ensuite transporté par les canaux vers le mamelon. Le sein renferme plusieurs compartiments appelés lobules. Ces derniers, se composent également, d’autres lobules reliés par des canaux. Le sein se compose aussi, de nerfs, de vaisseaux sanguins, et de vaisseaux lymphatiques. </p>
                    <h2> INTERVENTION RÉDUCTION MAMMAIRE </h2>
                    <p> Anesthésie générale. ; 03 heures : 01 ou deux journées à la clinique. </p>
                    <p> Le chirurgien esthétique tunisien dessine sur les seins de la patiente des traits. Le travail à faire lors de l’intervention consiste à réaliser une ablation du tissu mammaire excédentaire puis à ascensionner l’enveloppe cutanée qui permettra d’améliorer la forme des seins et de leur donner le profil souhaité par la patiente </p>
                    <p> Tout dépend du cas qui se présente, le chirurgien peut réduire l’aréole et l’étirer avec le mamelon aussi, vers le haut. Durant l’intervention, le chirurgien prend toutes les précautions pour ne pas atteindre le bon fonctionnement des vaisseaux sanguins de la glande mammaire. La sensibilité des seins est aussi prise en considération. Les incisions réalisées sont fermées à l’aide de fils résorbables. </p>
                    <p> A la fin de l’intervention, le chirurgien procède à la mise en place des drains au niveau de la zone traitée. Ces drains permettent d’éviter le risque d’une ecchymose. Un pansement modelant formé de plusieurs bandes élastiques et ayant la forme d’un soutien-gorge sera ensuite posé. Ce pansement ne peut être utilisé que pour une période de 24 heures. Il sera remplacé par un soutien-gorge adapté que la patiente devra porter 24/24 h durant un mois. </p>
                    <p> Trois cicatrices sont faites au cours de cette intervention, deux parmi lesquelles sont essentielles alors que la troisième est facultative et ne se fait que lorsque l’hypertrophie mammaire est importante. Le nombre des incisions est déterminé par le chirurgien esthéticien tunisien lors de la première consultation. En ce qui concerne les formes et l’emplacement des deux incisions obligatoires, la première se réalise autour de l’aréole. La deuxième s’étend verticalement de la zone aréolaire jusqu’à au sillon sous mammaire. L’incision facultative se présente sous forme d’une ligne horizontale faite sous le sein, c’est-à-dire dans le sillon. </p>



             </div>

             <div class=\"col-md-6 \">
                          <p> En réponse à la question que posent toutes nos patientes : est-ce que les incisions faites lors d’une intervention réductions mammaire laisseront des cicatrices apparentes ?, nous précisions que la cicatrice péri-aréolaire sera complètement atténuée alors que les deux autres (la cicatrice verticale et la cicatrice horizontale) resteront légèrement apparentes. </p>
            <p> Le chirurgien esthéticien tunisien recommande à la patiente de se servir d’une crème hydratante pour atténuer les cicatrices. Ces derniers auront une couleur rose après 6 mois et deviendront très blanches après quatre mois de plus. Si l’aspect des cicatrices est très inesthétique, un traitement de laser CO2 peut être envisagé. </p>
            <h2> SUITES OPÉRATOIRES </h2>
            <p> Des antalgiques simples seront administrés pour apaiser les petites douleurs éventuelles. Les ecchymoses seront atténuées au bout de quelques jours. L’œdème sera disparu deux semaines après. La patiente devra faire attention à ne pas faire de très grands efforts physiques. </p>
            <h2> RÉSULTATS </h2>
            <p> Le lendemain de l’intervention de réduction mammaire en Tunisie, la nouvelle forme de la poitrine est déjà bien observée. La taille de la poitrine est bien réduite. Les seins sont redressés ayant un galbe en parfaite avec la morphologie de la patiente. Après trois mois, la peau se réadapte et l’aspect des seins s’améliore encore plus. A partir du 6ème mois, sera perçu le résultat final. </p>



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
  ", "/homes/solutions/fr/seins/reductionMammaire.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/seins/reductionMammaire.twig");
    }
}
