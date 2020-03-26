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

/* /homes/solutions/fr/silhouette/liposuccion.twig */
class __TwigTemplate_f0a9cc65b7aeb2ebd722473b7753124788a2bbfd30165dfb0361a1043d140b78 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/silhouette/liposuccion.twig", 1);
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
        echo "  <title> liposuccion </title> ";
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

            <h1>Liposuccion</h1>
              <p>Auparavant, les patients considéraient la chirurgie comme un mal nécessaire pour traiter certaines pathologies ou pour réparer quelques malformations génétiques. L’avancée spectaculaire de la recherche scientifique et des moyens technologiques a complètement changé la donne. Aujourd’hui l’acte chirurgical s’engage dans une mission supplémentaire et fait surprendre par l’adaptation de nouvelles techniques concentrées sur l’esthétisation et la perfection de l’apparence physique du corps. </p>
              <p>Parmi les interventions esthétiques les plus sollicitées dans le monde entier et pratiquement en Tunisie, on cite la liposuccion encore appelée lipoaspiration, liposculpture ou lipoplastie. Il s’agit d’un procédé chirurgical simplifié destiné à supprimer la surcharge graisseuse demeurant persistante malgré le sport et les régimes alimentaires. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                          <h2>LIPOSUCCION TUNISIE : POURQUOI LA GRAISSE S’ACCUMULE DANS LE CORPS ? </h2>
                      <p>Les adipocytes se définissent comme des cellules responsables du stockage de la graisse dans notre corps. L’accumulation de la graisse est en fait une énergie qui assure le bon fonctionnement de notre organisme. Mais si la quantité de la graisse crée dépasse la limite de la quantité requise, les adipocytes procèdent naturellement à la création d’autres cellules pour stocker la graisse excédentaire. </p>
                      <p>Le rôle des adipocytes se déroule entre la période de l’enfance et de l’adolescence. Raison pour laquelle, nous recommandons aux parents de prêter attention à l’alimentation de leurs enfants et de les inciter à faire des activités physiques. Car, le non-respect d’une certaine hygiène de vie, favorise la manifestation de l’obésité qui trouvera ainsi les conditions favorables. </p>
                      <h2>DANS QUELS CAS INDIQUER UNE LIPOSUCCION EN TUNISIE ? </h2>
                      <p>La liposuccion est une intervention esthétique recommandée pour des raisons esthétiques quand les régimes alimentaires et le sport ne parviennent pas à supprimer la surcharge graisseuse. Mais, il est important de mentionner que ces deux méthodes même si elles peuvent diminuer le poids du patient, elles ne permettent pas des débarrasser le corps des cellules graisseuses précisément des adipocytes qui restent malgré tout localisées dans le tissu adipeux. La liposuccion est une solution plus efficace dans ce sens. Car, elle permet de prélever définitivement ces adipocytes.
                      Les zones pouvant être traitées par une liposuccion sont les hanches, le ventre, les fesses et les cuisses. </p>
                      <h2>POUR QUI EST INDIQUÉE LA LIPOSUCCION EN TUNISIE ? </h2>
                      <p>Les femmes est les hommes en bonne santé peuvent subir une liposuccion. Mais, ils doivent dans tous les cas remplir trois conditions :</p>
                      <h3><ul>
                      <li>Les amas graisseux doivent être concentrés et non dispersés</li>
                      <li> La peau doit être ferme et suffisamment élastique : plus on est jeune, plus l’intervention est réussie</li>
                      <li>La différence entre le poids idéal et le poids à diminuer ne doit pas être très grande. La liposuccion par exemple, n’est pas un remède à l’obésité</li>
                      </ul></h3>
                      <p>Avant l’intervention liposuccion en Tunisie, le patient est appelé à fournir un bilan médical complet. Ce bilan est prescrit par le chirurgien esthétique tunisien lors de la première consultation. Il est aussi mené à bien préciser ses objectifs et à répondre clairement aux questions posées par le chirurgien notamment celles en rapport avec ses antécédents chirurgicaux. Une fois la décision d’effectuer l’intervention est prise, le patient sera mis en contact avec l’anesthésiste pour parler de tous les détails relatifs à l’anesthésie. </p>



             </div>

             <div class=\"col-md-12 \">
             <h2>TECHNIQUE DE LA LIPOSUCCION EN TUNISIE</h2>
                <p>La liposuccion est souvent réalisée sous anesthésie générale. Si les zones à traiter son petites, elle requiert uniquement une anesthésie locale. La durée de l’hospitalisation dépend de l’importance du procédé chirurgicale. Autrement dit, elle est tributaire de la quantité de graisse extraite. Elle varie entre une demi-journée et une journée complète. </p>
                <p>La liposuccion est une intervention esthétique non compliquée dans le vrai sens du terme. Le principe de l’opération est très simple : Il consiste à créer de très fines incisions à travers lesquelles le chirurgien insert des canules de petit calibre. Ces dernières sont connectées à un circuit émettant une pression négative. Elles offrent deux principaux avantages : d’une part elles ne nécessitent pas la réalisation de points de sutures. D’une autre part, elles permettent l’évacuation du liquide anesthésique. De plus, ces canulent pénètrent bien dans le tissu graisseux et offrent un résultat précis et moins traumatisant. C’est cette technique qui permet de faire une aspiration de graisse non traumatisante. </p>
                <p>Un très bon chirurgien gardera une certaine quantité graisseuse dans la partie traitée. En effet, même si elles sont inappréciées par la plus part des personnes, les cellules graisseuses jouent un rôle primordial assurant la préservation de certaines fonction de l’organisme. Elles ne doivent pas donc, être enlevées à cent pour cent. </p>
                Ajoutons également, que cette technique n’affecte pas la peau. Bien au contraire, la rétraction cutanée provoquée par cette intervention permet d’améliorer l’aspect de la peau. </p>
                <p>La liposuccion agit sur plusieurs zones du corps : les hanches, la culotte cheval, l’abdomen, les genoux, les cuisses, les bras, les chevilles. L’intervention a aussi élargi son champ d’application en permettant d’agir sur le visage et le cou également (Par exemple, le cas d’un patient ayant un double menton). </p>
                Il arrive dans certaines interventions que le chirurgien associe la liposuccion à une lipolyse laser pour améliorer le résultat de la liposuccion dans les zones ou la peau est moins ferme. Par exemple au niveau de la face interne des bras, et de la face interne des cuisses. </p>
                <p><b>Principe de la technique Lipolyse laser : </b> la technique consiste à placer sous la peau une fibre laser. Cette fibre émet des rayonnements de température élevée. La chaleur atteignant directement le tissu adipeux entraine un éclatement des adipocytes qui libèrent par conséquence la graisse enfermée. </p>
                Ajoutons également qu’une liposuccion peut être combinée à une autre intervention esthétique appelé le lipofilling. </p>
                <p><b>Le lipofilling : </b> consiste à réinjecter la graisse extraite dans d’autres partie du corps n’ayant pas une quantité de graisse insuffisante. Cette technique est surtout indiquée pour augmenter la taille des seins. Elle est privilégiée par les personnes qui veulent éviter l’insertion de corps étranger dans leur corps. On parle dans ce cas, d’un lipofilling mammaire. </p>
                <p>Certains patients se posent la question sur la quantité de graisse enlevée grâce à une liposuccion. Généralement cette quantité est limitée à quatre litre par opération ce qui est équivalent à 4 kg de graisse. Mais nos chirurgiens esthéticiens très compétents arrivent parfois jusqu’à extraire 5 litre de graisse c’est-à-dire 5 kg d’amas graisseux. </p>
                <h2>SUITES DE L’INTERVENTION LIPOASPIRATION EN TUNISIE</h2>
                <p>Après l’intervention, le chirurgien cherchera à s’assurer si ‘il n’y a pas eu de complications. Un bandage sera posé sur la partie traitée et le patient devra porter un panty de contention quelques semaines après l’intervention. </p>
                <p>Il est très normal de voir se manifester les premiers jours des bleus et des traces de saignement.
                La liposuccion n’induit pas des douleurs atroces. Mais pour que le patient soit plus à l’aise en période de convalescence, le chirurgien prescrit des antalgiques classiques pour apaiser les douleurs éventuelles. </p>
                <h2>RÉSULTAT D’UNE LIPOSUCCION EN TUNISIE</h2>
                <p>Le résultat sera observé dès le premier mois après l’intervention. Après la cicatrisation complète et la disparition des gonflements et des bleus, il sera nettement amélioré. La période estimée pour atteindre le résultat définitif est estimée entre 3 et 4 mois. En ce qui concerne la durabilité, le résultat de la liposuccion est durable. En effet, suite à cette intervention esthétique en Tunisie, les cellules ne pourront plus se multiplier. Mais, il reste toujours très important de suivre une hygiène de vie. </p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 147
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 149
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/silhouette/liposuccion.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 147
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/silhouette/liposuccion.twig", 148)->display($context);
        // line 149
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/silhouette/liposuccion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 149,  246 => 148,  242 => 147,  238 => 71,  236 => 70,  230 => 69,  224 => 149,  222 => 147,  210 => 138,  158 => 89,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> liposuccion </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

            <h1>Liposuccion</h1>
              <p>Auparavant, les patients considéraient la chirurgie comme un mal nécessaire pour traiter certaines pathologies ou pour réparer quelques malformations génétiques. L’avancée spectaculaire de la recherche scientifique et des moyens technologiques a complètement changé la donne. Aujourd’hui l’acte chirurgical s’engage dans une mission supplémentaire et fait surprendre par l’adaptation de nouvelles techniques concentrées sur l’esthétisation et la perfection de l’apparence physique du corps. </p>
              <p>Parmi les interventions esthétiques les plus sollicitées dans le monde entier et pratiquement en Tunisie, on cite la liposuccion encore appelée lipoaspiration, liposculpture ou lipoplastie. Il s’agit d’un procédé chirurgical simplifié destiné à supprimer la surcharge graisseuse demeurant persistante malgré le sport et les régimes alimentaires. </p>


                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                          <h2>LIPOSUCCION TUNISIE : POURQUOI LA GRAISSE S’ACCUMULE DANS LE CORPS ? </h2>
                      <p>Les adipocytes se définissent comme des cellules responsables du stockage de la graisse dans notre corps. L’accumulation de la graisse est en fait une énergie qui assure le bon fonctionnement de notre organisme. Mais si la quantité de la graisse crée dépasse la limite de la quantité requise, les adipocytes procèdent naturellement à la création d’autres cellules pour stocker la graisse excédentaire. </p>
                      <p>Le rôle des adipocytes se déroule entre la période de l’enfance et de l’adolescence. Raison pour laquelle, nous recommandons aux parents de prêter attention à l’alimentation de leurs enfants et de les inciter à faire des activités physiques. Car, le non-respect d’une certaine hygiène de vie, favorise la manifestation de l’obésité qui trouvera ainsi les conditions favorables. </p>
                      <h2>DANS QUELS CAS INDIQUER UNE LIPOSUCCION EN TUNISIE ? </h2>
                      <p>La liposuccion est une intervention esthétique recommandée pour des raisons esthétiques quand les régimes alimentaires et le sport ne parviennent pas à supprimer la surcharge graisseuse. Mais, il est important de mentionner que ces deux méthodes même si elles peuvent diminuer le poids du patient, elles ne permettent pas des débarrasser le corps des cellules graisseuses précisément des adipocytes qui restent malgré tout localisées dans le tissu adipeux. La liposuccion est une solution plus efficace dans ce sens. Car, elle permet de prélever définitivement ces adipocytes.
                      Les zones pouvant être traitées par une liposuccion sont les hanches, le ventre, les fesses et les cuisses. </p>
                      <h2>POUR QUI EST INDIQUÉE LA LIPOSUCCION EN TUNISIE ? </h2>
                      <p>Les femmes est les hommes en bonne santé peuvent subir une liposuccion. Mais, ils doivent dans tous les cas remplir trois conditions :</p>
                      <h3><ul>
                      <li>Les amas graisseux doivent être concentrés et non dispersés</li>
                      <li> La peau doit être ferme et suffisamment élastique : plus on est jeune, plus l’intervention est réussie</li>
                      <li>La différence entre le poids idéal et le poids à diminuer ne doit pas être très grande. La liposuccion par exemple, n’est pas un remède à l’obésité</li>
                      </ul></h3>
                      <p>Avant l’intervention liposuccion en Tunisie, le patient est appelé à fournir un bilan médical complet. Ce bilan est prescrit par le chirurgien esthétique tunisien lors de la première consultation. Il est aussi mené à bien préciser ses objectifs et à répondre clairement aux questions posées par le chirurgien notamment celles en rapport avec ses antécédents chirurgicaux. Une fois la décision d’effectuer l’intervention est prise, le patient sera mis en contact avec l’anesthésiste pour parler de tous les détails relatifs à l’anesthésie. </p>



             </div>

             <div class=\"col-md-12 \">
             <h2>TECHNIQUE DE LA LIPOSUCCION EN TUNISIE</h2>
                <p>La liposuccion est souvent réalisée sous anesthésie générale. Si les zones à traiter son petites, elle requiert uniquement une anesthésie locale. La durée de l’hospitalisation dépend de l’importance du procédé chirurgicale. Autrement dit, elle est tributaire de la quantité de graisse extraite. Elle varie entre une demi-journée et une journée complète. </p>
                <p>La liposuccion est une intervention esthétique non compliquée dans le vrai sens du terme. Le principe de l’opération est très simple : Il consiste à créer de très fines incisions à travers lesquelles le chirurgien insert des canules de petit calibre. Ces dernières sont connectées à un circuit émettant une pression négative. Elles offrent deux principaux avantages : d’une part elles ne nécessitent pas la réalisation de points de sutures. D’une autre part, elles permettent l’évacuation du liquide anesthésique. De plus, ces canulent pénètrent bien dans le tissu graisseux et offrent un résultat précis et moins traumatisant. C’est cette technique qui permet de faire une aspiration de graisse non traumatisante. </p>
                <p>Un très bon chirurgien gardera une certaine quantité graisseuse dans la partie traitée. En effet, même si elles sont inappréciées par la plus part des personnes, les cellules graisseuses jouent un rôle primordial assurant la préservation de certaines fonction de l’organisme. Elles ne doivent pas donc, être enlevées à cent pour cent. </p>
                Ajoutons également, que cette technique n’affecte pas la peau. Bien au contraire, la rétraction cutanée provoquée par cette intervention permet d’améliorer l’aspect de la peau. </p>
                <p>La liposuccion agit sur plusieurs zones du corps : les hanches, la culotte cheval, l’abdomen, les genoux, les cuisses, les bras, les chevilles. L’intervention a aussi élargi son champ d’application en permettant d’agir sur le visage et le cou également (Par exemple, le cas d’un patient ayant un double menton). </p>
                Il arrive dans certaines interventions que le chirurgien associe la liposuccion à une lipolyse laser pour améliorer le résultat de la liposuccion dans les zones ou la peau est moins ferme. Par exemple au niveau de la face interne des bras, et de la face interne des cuisses. </p>
                <p><b>Principe de la technique Lipolyse laser : </b> la technique consiste à placer sous la peau une fibre laser. Cette fibre émet des rayonnements de température élevée. La chaleur atteignant directement le tissu adipeux entraine un éclatement des adipocytes qui libèrent par conséquence la graisse enfermée. </p>
                Ajoutons également qu’une liposuccion peut être combinée à une autre intervention esthétique appelé le lipofilling. </p>
                <p><b>Le lipofilling : </b> consiste à réinjecter la graisse extraite dans d’autres partie du corps n’ayant pas une quantité de graisse insuffisante. Cette technique est surtout indiquée pour augmenter la taille des seins. Elle est privilégiée par les personnes qui veulent éviter l’insertion de corps étranger dans leur corps. On parle dans ce cas, d’un lipofilling mammaire. </p>
                <p>Certains patients se posent la question sur la quantité de graisse enlevée grâce à une liposuccion. Généralement cette quantité est limitée à quatre litre par opération ce qui est équivalent à 4 kg de graisse. Mais nos chirurgiens esthéticiens très compétents arrivent parfois jusqu’à extraire 5 litre de graisse c’est-à-dire 5 kg d’amas graisseux. </p>
                <h2>SUITES DE L’INTERVENTION LIPOASPIRATION EN TUNISIE</h2>
                <p>Après l’intervention, le chirurgien cherchera à s’assurer si ‘il n’y a pas eu de complications. Un bandage sera posé sur la partie traitée et le patient devra porter un panty de contention quelques semaines après l’intervention. </p>
                <p>Il est très normal de voir se manifester les premiers jours des bleus et des traces de saignement.
                La liposuccion n’induit pas des douleurs atroces. Mais pour que le patient soit plus à l’aise en période de convalescence, le chirurgien prescrit des antalgiques classiques pour apaiser les douleurs éventuelles. </p>
                <h2>RÉSULTAT D’UNE LIPOSUCCION EN TUNISIE</h2>
                <p>Le résultat sera observé dès le premier mois après l’intervention. Après la cicatrisation complète et la disparition des gonflements et des bleus, il sera nettement amélioré. La période estimée pour atteindre le résultat définitif est estimée entre 3 et 4 mois. En ce qui concerne la durabilité, le résultat de la liposuccion est durable. En effet, suite à cette intervention esthétique en Tunisie, les cellules ne pourront plus se multiplier. Mais, il reste toujours très important de suivre une hygiène de vie. </p>



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
  ", "/homes/solutions/fr/silhouette/liposuccion.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/silhouette/liposuccion.twig");
    }
}
