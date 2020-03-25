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

/* /homes/solutions/fr/visage/liftingVisage.twig */
class __TwigTemplate_dca13ad18957bb3cb398ab995bab25308dea0f5535a4ddd5bdd3a654cea76936 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/visage/liftingVisage.twig", 1);
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
            
            <h1>Lifting visage en Turquie </h1>
              <p>Le lifting visage pratiqué en Turquie garantit à ses patients un rajeunissement et un effet naturel. Le visage des patients est désormais dépourvu de ses rides, les structures sont redessinées et le plan cutanéo-musculaire est raffermi.</p>
              Le lifting visage en Turquie est indiqué comme solution radicale contre l’effet du vieillissement sur la peau de visage lorsque l’usage des crèmes et des produits cosmétiques ne répond pas aux espérances du patient. Cette intervention esthétique en Turquie est de plus en plus sollicitée notamment par les femmes.</p>

              
             

            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
                        <h2>Lifting visage : principes de l’opération</h2>
            <p>Avec l’âge, le processus de vieillissement de la peau du visage trouve les conditions favorables pour engendrer de nombreux défauts inesthétiques : les pommettes se relâchent et s’affaissent, les rides d’expressions deviennent de plus en plus profondes, les bas-joues apparaissent et un creux se manifeste au milieu des joues.  Le lifting visage s’effectue à partir de la quarantaine.</p>
            <h2>Déroulement de la chirurgie du lifting du visage</h2>
            <p>Le chirurgien plasticien Turque posera des questions sur l’âge du patient et sur ses antécédents médicaux. Il cherchera également à savoir si le patient est un grand fumeur ou pas. Il examinera ensuite le visage pour déterminer les caractéristiques de la peau. Le lifting du visage en Turquie offre un résultat probant grâce auquel le patient fera 10 ans de moins.</p>
            <p>Les gestes opératoires varient d’un chirurgien à un autre mais surtout d’un défaut à un autre. Le chirurgien ne peut pas traiter tous les défauts du relâchement facial de la même manière. Cela dit, il y a des standards et des gestes classiques à faire. </p>
            Parmi les principales interventions de lifting visage, nous citons :
            <h3>Le lifting cervico-facial</h3>
            <p>Cette intervention est fréquemment réalisée par les chirurgiens esthétiques Turques. Elle consiste à traiter le vieillissement du visage et du cou. La partie concernée se situe entre la région des tempes et la région des bajoues.</p>
            <h3>Le lifting temporal</h3>
            <p>Il sert à étirer la queue du sourcil vers le haut et à éliminer le surplus de peau responsable du relâchement excessif de la paupière supérieure. Cette technique permet aussi, d’atténuer la patte d’oie. Elle peut être réalisée isolément ou en association avec une blépharoplastie.</p>
            <h3>Le lifting frontal</h3>
            <p>Il sert à rehausser la peau et les muscles du front. Le lifting frontal est souvent associée au lifting cervico-facial ou la blépharoplastie. </p>
            <h3>La transformation morphologique</h3>
            <p>Il s’agit d’une intervention plus importante qui se pratique au niveau de la zone temporale et du coin de l’œil. Ses résultats agissent sur la forme des yeux et des pommettes. On appelle cette technique le mask-lift. La forme du visage se modifie complètement suite à une transformation morphologique. Cette intervention est rarement demandée par nos patients.</p>

             </div>
             <div class=\"col-md-6\">
               <h3>Le lifting complet</h3>
                <p>Cette intervention esthétique combine toutes les techniques citées ci-dessus : le lifting cervico-facial, le lifting temporal, le lifting frontal et le mask-lift.
                Le lifting complet est indiqué pour traiter un fort relâchement sur tout le visage.</p>
                <h2>Déroulement du lifting visage</h2>
                <p>Le lifting du visage est d’une durée qui varie entre 2 et 4 heures. Pour éliminer les rides, cette plastie de la face nécessite une hospitalisation de 1 ou 2 jours.</p>
                <p>Il n’existe pas une seule méthode pour réaliser un lifting du visage. Les solutions chirurgicales sont nombreuses et diversifiées. Par contre, les principes de base restent les mêmes. Le chirurgien réalise des incisions au niveau du pourtour de l’oreille. Ces incisions seront entièrement dissimulées par les cheveux. Il décolle ensuite la peau du visage et procède soigneusement à une remise en tension afin de réparer la texture de la peau. Celle-ci, prendra une meilleure forme créée grâce à la mobilisation musculaire. Le chirurgien élimine ensuite la peau excédentaire et réalise des sutures pour fermer les incisions.</p>
                <p>Le décollement de la peau n’est pas systématique, le chirurgien décide des gestes opératoires en fonction de l’état de relâchement aussi bien de la peau que des muscles et la zone la plus touchée par les rides.</p>
                 </div>
             

             <div class=\"col-md-6\">
               <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

             <div class=\"col-md-12\">
                <h2>Quelles sont les suites opératoires du lifting du visage ?</h2>
                <p>Le patient pourra quitter la clinique le lendemain de l’intervention ou bien le surlendemain. La période d’hospitalisation dépend de l’importance du procédé chirurgical effectué. Le patient devra bien se reposer les dix premiers jours suivants l’intervention. </p>
                <p>Durant la période de convalescence, le patient devra impérativement éviter tout type d’effort physique important. L’apparition d’un œdème accompagné de quelques ecchymoses est inévitable. Cela ne doit pas apeurer le patient car, il s’agit d’une réaction tout à fait normale qui se manifeste après toutes les interventions chirurgicales. Les bleus et les gonflements auront disparus après un mois. </p>
                <p>Il est fort probable de ressentir certaines douleurs en arrières des oreilles. Ces douleurs seront accompagnées de quelques sensations désagréables. Le patient remarquera aussi que ses oreilles et ses joues sont devenues moins sensibles. Tous ces symptômes sont passagers. Ils finiront par disparaître progressivement.</p>
                <h2>Résultat du lifting visage </h2>
                <p>Le résultat d’un lifting du visage commence à se faire voir après 3 mois. Mais il ne sera définitif qu’au bout de 6 mois. Son effet perdure jusqu’à dix ans. </p>
                <p>Il est préférable que cette intervention soit réalisée avant la soixantaine. Toutefois, il est important de clarifier le fait que bien que le lifting du visage permette d’améliorer significativement l’apparence du visage, il n’empêche pas, pour autant, le déroulement naturel du processus du vieillissement.</p>

            </div>

          </div>
        </div>

      </section>

                        ";
        // line 143
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 145
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/visage/liftingVisage.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 143
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/visage/liftingVisage.twig", 144)->display($context);
        // line 145
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/visage/liftingVisage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 145,  242 => 144,  238 => 143,  234 => 71,  232 => 70,  226 => 69,  220 => 145,  218 => 143,  195 => 123,  159 => 90,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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
            
            <h1>Lifting visage en Turquie </h1>
              <p>Le lifting visage pratiqué en Turquie garantit à ses patients un rajeunissement et un effet naturel. Le visage des patients est désormais dépourvu de ses rides, les structures sont redessinées et le plan cutanéo-musculaire est raffermi.</p>
              Le lifting visage en Turquie est indiqué comme solution radicale contre l’effet du vieillissement sur la peau de visage lorsque l’usage des crèmes et des produits cosmétiques ne répond pas aux espérances du patient. Cette intervention esthétique en Turquie est de plus en plus sollicitée notamment par les femmes.</p>

              
             

            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
                        <h2>Lifting visage : principes de l’opération</h2>
            <p>Avec l’âge, le processus de vieillissement de la peau du visage trouve les conditions favorables pour engendrer de nombreux défauts inesthétiques : les pommettes se relâchent et s’affaissent, les rides d’expressions deviennent de plus en plus profondes, les bas-joues apparaissent et un creux se manifeste au milieu des joues.  Le lifting visage s’effectue à partir de la quarantaine.</p>
            <h2>Déroulement de la chirurgie du lifting du visage</h2>
            <p>Le chirurgien plasticien Turque posera des questions sur l’âge du patient et sur ses antécédents médicaux. Il cherchera également à savoir si le patient est un grand fumeur ou pas. Il examinera ensuite le visage pour déterminer les caractéristiques de la peau. Le lifting du visage en Turquie offre un résultat probant grâce auquel le patient fera 10 ans de moins.</p>
            <p>Les gestes opératoires varient d’un chirurgien à un autre mais surtout d’un défaut à un autre. Le chirurgien ne peut pas traiter tous les défauts du relâchement facial de la même manière. Cela dit, il y a des standards et des gestes classiques à faire. </p>
            Parmi les principales interventions de lifting visage, nous citons :
            <h3>Le lifting cervico-facial</h3>
            <p>Cette intervention est fréquemment réalisée par les chirurgiens esthétiques Turques. Elle consiste à traiter le vieillissement du visage et du cou. La partie concernée se situe entre la région des tempes et la région des bajoues.</p>
            <h3>Le lifting temporal</h3>
            <p>Il sert à étirer la queue du sourcil vers le haut et à éliminer le surplus de peau responsable du relâchement excessif de la paupière supérieure. Cette technique permet aussi, d’atténuer la patte d’oie. Elle peut être réalisée isolément ou en association avec une blépharoplastie.</p>
            <h3>Le lifting frontal</h3>
            <p>Il sert à rehausser la peau et les muscles du front. Le lifting frontal est souvent associée au lifting cervico-facial ou la blépharoplastie. </p>
            <h3>La transformation morphologique</h3>
            <p>Il s’agit d’une intervention plus importante qui se pratique au niveau de la zone temporale et du coin de l’œil. Ses résultats agissent sur la forme des yeux et des pommettes. On appelle cette technique le mask-lift. La forme du visage se modifie complètement suite à une transformation morphologique. Cette intervention est rarement demandée par nos patients.</p>

             </div>
             <div class=\"col-md-6\">
               <h3>Le lifting complet</h3>
                <p>Cette intervention esthétique combine toutes les techniques citées ci-dessus : le lifting cervico-facial, le lifting temporal, le lifting frontal et le mask-lift.
                Le lifting complet est indiqué pour traiter un fort relâchement sur tout le visage.</p>
                <h2>Déroulement du lifting visage</h2>
                <p>Le lifting du visage est d’une durée qui varie entre 2 et 4 heures. Pour éliminer les rides, cette plastie de la face nécessite une hospitalisation de 1 ou 2 jours.</p>
                <p>Il n’existe pas une seule méthode pour réaliser un lifting du visage. Les solutions chirurgicales sont nombreuses et diversifiées. Par contre, les principes de base restent les mêmes. Le chirurgien réalise des incisions au niveau du pourtour de l’oreille. Ces incisions seront entièrement dissimulées par les cheveux. Il décolle ensuite la peau du visage et procède soigneusement à une remise en tension afin de réparer la texture de la peau. Celle-ci, prendra une meilleure forme créée grâce à la mobilisation musculaire. Le chirurgien élimine ensuite la peau excédentaire et réalise des sutures pour fermer les incisions.</p>
                <p>Le décollement de la peau n’est pas systématique, le chirurgien décide des gestes opératoires en fonction de l’état de relâchement aussi bien de la peau que des muscles et la zone la plus touchée par les rides.</p>
                 </div>
             

             <div class=\"col-md-6\">
               <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

             <div class=\"col-md-12\">
                <h2>Quelles sont les suites opératoires du lifting du visage ?</h2>
                <p>Le patient pourra quitter la clinique le lendemain de l’intervention ou bien le surlendemain. La période d’hospitalisation dépend de l’importance du procédé chirurgical effectué. Le patient devra bien se reposer les dix premiers jours suivants l’intervention. </p>
                <p>Durant la période de convalescence, le patient devra impérativement éviter tout type d’effort physique important. L’apparition d’un œdème accompagné de quelques ecchymoses est inévitable. Cela ne doit pas apeurer le patient car, il s’agit d’une réaction tout à fait normale qui se manifeste après toutes les interventions chirurgicales. Les bleus et les gonflements auront disparus après un mois. </p>
                <p>Il est fort probable de ressentir certaines douleurs en arrières des oreilles. Ces douleurs seront accompagnées de quelques sensations désagréables. Le patient remarquera aussi que ses oreilles et ses joues sont devenues moins sensibles. Tous ces symptômes sont passagers. Ils finiront par disparaître progressivement.</p>
                <h2>Résultat du lifting visage </h2>
                <p>Le résultat d’un lifting du visage commence à se faire voir après 3 mois. Mais il ne sera définitif qu’au bout de 6 mois. Son effet perdure jusqu’à dix ans. </p>
                <p>Il est préférable que cette intervention soit réalisée avant la soixantaine. Toutefois, il est important de clarifier le fait que bien que le lifting du visage permette d’améliorer significativement l’apparence du visage, il n’empêche pas, pour autant, le déroulement naturel du processus du vieillissement.</p>

            </div>

          </div>
        </div>

      </section>

                        {% block leadFormFixBottomtfr %}
                              {% include('/homes/data/index/fr/leadFormFixBottom.twig') %}
                            {% endblock  %}  

{% endblock  %}
  ", "/homes/solutions/fr/visage/liftingVisage.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/visage/liftingVisage.twig");
    }
}
