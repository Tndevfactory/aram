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

/* /homes/besoins/fr/cheuveux/alopecieSourcils.twig */
class __TwigTemplate_13aba45a64cb7aa97eaeb87a0853985c4e7c2c093aa10564f4253d312031e232 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/cheuveux/alopecieSourcils.twig", 1);
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
        echo "  <title> alopecie Sourcils </title> ";
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

             <h1>Alopécie sourcils</h1>
              <p>La perte de cheveux des sourcils est un phénomène assez courant. Cela peut être dû à un certain nombre de raisons, allant des changements hormonaux ou des carences nutritionnelles à une infection, une affection cutanée, le stress ou même un système immunitaire hyperactif qui attaque les follicules pileux. Ce type de perte de cheveux a un certain nombre de traitements possibles différents, selon la cause.</p>
              <h2>Quelles sont les causes de l’alopécie sourcils ?</h2>
              <p>Les causes spécifiques de la perte de cheveux des sourcils comprennent :



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h3>L’alopécie areata </h3>
              <p>La même maladie auto-immune qui est souvent responsable de la perte de cheveux du cuir chevelu peut également affecter vos sourcils. Dans ce cas, votre système immunitaire cible et attaque vos follicules capillaires des sourcils, ralentissant ou arrêtant ainsi la production de poils et causant l’alopécie des sourcils.</p>
              <h3>Les carences nutritionnelles </h3>
              <p>Votre corps a besoin d'un régime alimentaire sain assurant l’équilibre entre glucides, protéines, lipides, acides aminés, vitamines et minéraux. Étant donné que certains de ces nutriments assurent ou influencent la croissance des cheveux, leur absence pourrait entraîner une perte de cheveux. Par exemple, une carence en vitamines C, E, B-12, D, en fer, en cystéine et / ou en oméga-3 pourrait entraîner une chute des cheveux, y compris les cheveux des sourcils.</p>
              <h3>La dermatite </h3>
              <p>Les affections cutanées, comme l'eczéma et le psoriasis, peuvent nuire à la bonne croissance des cheveux. Tout type de dermatite peut empêcher les follicules pileux de pousser normalement.</p>
              <h3>Les maladies thyroïdiennes </h3>
              <p>La glande thyroïde, située à l'avant du cou, produit des hormones qui régulent le métabolisme. Quand elle produit trop ou trop peu d'hormone, les processus normaux de votre corps, y compris la croissance des cheveux, peuvent être perturbés.</p>

              <h3>Le stress ou l’anxiété excessifs </h3>
              <p>Les problèmes psychologiques sont connus pour contribuer à la chute des cheveux des sourcils. Si vous avez récemment vécu un événement traumatisant ou un changement de style de vie majeur, cela peut être la cause de la perte des cheveux des sourcils.</p>
              <h3>L’effluvium télogène </h3>
              <p>Il s'agit d'une perte de cheveux temporaire, mais dramatique, qui se produit lorsque votre cycle normal de croissance des cheveux est interrompu. Cela peut être dû au stress, à des changements dans votre alimentation, à des médicaments, à des changements hormonaux ou autres.</p>
              <h3>L’épilation excessive</h3>
              <p>Cette pratique crée un traumatisme mineur au follicule, ce qui peut empêcher les cheveux de pousser à cet endroit répétitivement épilé. </p>





             </div>

             <div class=\"col-md-6 \">

              <h3>Le tissu cicatriciel </h3>
              <p>La perte des sourcils peut être le résultat d'un traumatisme, de brûlures (chimiques ou thermiques) et d'affections cutanées impliquant généralement des problèmes avec le système immunitaire attaquant les propres tissus du corps et induisant la formation de tissu cicatriciel affectant la repousse des cheveux dans la zone touchée.</p>
              <h3>Le vieillissement </h3>
              <p>En général, à partir de la quarantaine, alors que les niveaux d'œstrogène chez les femmes et de testostérone chez les hommes diminuent, les deux sexes peuvent commencer à ressentir un amincissement des cheveux sur le cuir chevelu et au niveau des sourcils.</p>
              <h3>La chimiothérapie </h3>
              <p>La chimio est spécialement conçue pour affecter toutes les cellules à division rapide, y compris les follicules pileux. Par conséquent, la chimiothérapie peut étouffer s’attaquer au follicule pileux et causer la perte de cheveux dans les sourcils.</p>
              <h3>Comment récupérer mes sourcils ?</h3>
              <p>Une fois que le médecin a diagnostiqué la cause de la perte de vos sourcils, il recommandera le traitement le plus approprié pour restaurer vos sourcils à leur état naturel.</p>
              <p>L'une des options les plus efficaces pour cela est la greffe de sourcils. Semblable à la restauration des cheveux du cuir chevelu, cette procédure implique l’extraction des follicules pileux du cuir chevelu et de déplacer ces follicules dans la zone clairsemée des sourcils.</p>



            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 144
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 146
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/cheuveux/alopecieSourcils.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 144
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/cheuveux/alopecieSourcils.twig", 145)->display($context);
        // line 146
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/cheuveux/alopecieSourcils.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 146,  243 => 145,  239 => 144,  235 => 71,  233 => 70,  227 => 69,  221 => 146,  219 => 144,  207 => 135,  160 => 91,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> alopecie Sourcils </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Alopécie sourcils</h1>
              <p>La perte de cheveux des sourcils est un phénomène assez courant. Cela peut être dû à un certain nombre de raisons, allant des changements hormonaux ou des carences nutritionnelles à une infection, une affection cutanée, le stress ou même un système immunitaire hyperactif qui attaque les follicules pileux. Ce type de perte de cheveux a un certain nombre de traitements possibles différents, selon la cause.</p>
              <h2>Quelles sont les causes de l’alopécie sourcils ?</h2>
              <p>Les causes spécifiques de la perte de cheveux des sourcils comprennent :



                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
            <h3>L’alopécie areata </h3>
              <p>La même maladie auto-immune qui est souvent responsable de la perte de cheveux du cuir chevelu peut également affecter vos sourcils. Dans ce cas, votre système immunitaire cible et attaque vos follicules capillaires des sourcils, ralentissant ou arrêtant ainsi la production de poils et causant l’alopécie des sourcils.</p>
              <h3>Les carences nutritionnelles </h3>
              <p>Votre corps a besoin d'un régime alimentaire sain assurant l’équilibre entre glucides, protéines, lipides, acides aminés, vitamines et minéraux. Étant donné que certains de ces nutriments assurent ou influencent la croissance des cheveux, leur absence pourrait entraîner une perte de cheveux. Par exemple, une carence en vitamines C, E, B-12, D, en fer, en cystéine et / ou en oméga-3 pourrait entraîner une chute des cheveux, y compris les cheveux des sourcils.</p>
              <h3>La dermatite </h3>
              <p>Les affections cutanées, comme l'eczéma et le psoriasis, peuvent nuire à la bonne croissance des cheveux. Tout type de dermatite peut empêcher les follicules pileux de pousser normalement.</p>
              <h3>Les maladies thyroïdiennes </h3>
              <p>La glande thyroïde, située à l'avant du cou, produit des hormones qui régulent le métabolisme. Quand elle produit trop ou trop peu d'hormone, les processus normaux de votre corps, y compris la croissance des cheveux, peuvent être perturbés.</p>

              <h3>Le stress ou l’anxiété excessifs </h3>
              <p>Les problèmes psychologiques sont connus pour contribuer à la chute des cheveux des sourcils. Si vous avez récemment vécu un événement traumatisant ou un changement de style de vie majeur, cela peut être la cause de la perte des cheveux des sourcils.</p>
              <h3>L’effluvium télogène </h3>
              <p>Il s'agit d'une perte de cheveux temporaire, mais dramatique, qui se produit lorsque votre cycle normal de croissance des cheveux est interrompu. Cela peut être dû au stress, à des changements dans votre alimentation, à des médicaments, à des changements hormonaux ou autres.</p>
              <h3>L’épilation excessive</h3>
              <p>Cette pratique crée un traumatisme mineur au follicule, ce qui peut empêcher les cheveux de pousser à cet endroit répétitivement épilé. </p>





             </div>

             <div class=\"col-md-6 \">

              <h3>Le tissu cicatriciel </h3>
              <p>La perte des sourcils peut être le résultat d'un traumatisme, de brûlures (chimiques ou thermiques) et d'affections cutanées impliquant généralement des problèmes avec le système immunitaire attaquant les propres tissus du corps et induisant la formation de tissu cicatriciel affectant la repousse des cheveux dans la zone touchée.</p>
              <h3>Le vieillissement </h3>
              <p>En général, à partir de la quarantaine, alors que les niveaux d'œstrogène chez les femmes et de testostérone chez les hommes diminuent, les deux sexes peuvent commencer à ressentir un amincissement des cheveux sur le cuir chevelu et au niveau des sourcils.</p>
              <h3>La chimiothérapie </h3>
              <p>La chimio est spécialement conçue pour affecter toutes les cellules à division rapide, y compris les follicules pileux. Par conséquent, la chimiothérapie peut étouffer s’attaquer au follicule pileux et causer la perte de cheveux dans les sourcils.</p>
              <h3>Comment récupérer mes sourcils ?</h3>
              <p>Une fois que le médecin a diagnostiqué la cause de la perte de vos sourcils, il recommandera le traitement le plus approprié pour restaurer vos sourcils à leur état naturel.</p>
              <p>L'une des options les plus efficaces pour cela est la greffe de sourcils. Semblable à la restauration des cheveux du cuir chevelu, cette procédure implique l’extraction des follicules pileux du cuir chevelu et de déplacer ces follicules dans la zone clairsemée des sourcils.</p>



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
  ", "/homes/besoins/fr/cheuveux/alopecieSourcils.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/cheuveux/alopecieSourcils.twig");
    }
}
