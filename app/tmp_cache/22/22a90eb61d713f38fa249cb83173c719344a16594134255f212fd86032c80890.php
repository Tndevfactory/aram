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

/* /homes/solutions/fr/seins/lipofillingMammaire.twig */
class __TwigTemplate_6f69ae22940d26b5f8cf1f7dfd7d0963de34eec7d048514b0718844e56e30f14 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/solutions/fr/seins/lipofillingMammaire.twig", 1);
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
        echo "  <title> lipofilling Mammaires </title> ";
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

             <h1>Lipofilling seins en Turquie : augmenter la poitrine par injection de graisse </h1>
              <p>Pour augmenter la taille de sa poitrine de façon modérée, la femme peut recourir au lipofilling mammaire. C’est une alternative à la pose d’implants. En effet, certaines personnes redoutent l’insertion d’un corps étranger dans leur corps et préfèrent les moyens naturels. C’est d’ailleurs une opportunité en or qui est de remodeler son corps, en enlevant le surplus graisseux de certaines zones du corps pour l’injecter aux seins.</p>
              <h2>Le lipofilling mammaire, une double intervention : liposuccion + augmentation mammaire</h2>
              <p>Le chirurgien doit être capable dans un premier lieu de diagnostiquer si la patiente est éligible pour une telle intervention ou pas. Pour cela, il a besoin de :</p>
              <ul>
              <li>Déterminer la quantité approximative de graisse qu’il peut retirer des différentes zones du corps. En plus, il doit prendre en considération plusieurs facteurs comme la qualité de la peau avant de passer à la liposuccion.</li>

              <li>Discuter avec la patiente du volume qu’elle désire avoir et de vérifier si c’est possible en fonction de la quantité de graisse qu’il pourra extraire. </li>
              </ul>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                       <h2>Pourquoi privilégier l’augmentation mammaire sans pose d’implant ?</h2>
                <p>L’augmentation de la poitrine par injection de la graisse autologue permet un double objectif à la patiente. </p>
                <p>Premièrement, en délimitant les zones donneuses de graisse, le chirurgien peut sculpter le corps de la patiente. Il la débarrasse des poignées d’amour, de la culotte de cheval, de la face interne des cuisses, du ventre ou du dos… et permet, ainsi, de sculpter sa silhouette et d’en définir les contours.</p>
                <p>Deuxièmement, après traitement de la graisse extraite, il l’injecte directement aux seins, en quantité nécessaire et au bon endroit.</p>
                <h2>Comment se déroule le lipofilling mammaire ?</h2>
                <p>La chirurgie dure plus de 2 heures puisqu’elle est couplée d’une liposuccion. Elle nécessite toujours 1 ou 2 jours d’hospitalisation. L’intervention est généralement effectuée sous anesthésie générale, parfois sous anesthésie locale.</p>
                <p>Le tissu adipeux est aspiré à l’aide d’une canule via une petite incision pratiquée dans la peau (liposuccion) de l’abdomen, des fesses ou des cuisses. La graisse aspirée est ensuite centrifugée et purifiée.  Seules les cellules adipeuses sont réinjectées à l’endroit où l’on souhaite réaliser le lipofilling. </p>
                <p>Le lipofilling seins n’induit pas de grandes cicatrices, juste des mini-séquelles de 2 ou 3 millimètres. </p>



             </div>

             <div class=\"col-md-6 \">
              <h2>Quelles sont les suites opératoires du lipomodelage mammaire ? </h2>
                <p>Pour traiter les douleurs postopératoires au niveau de la poitrine et des zones liposucées, la patiente sera amenée à administrer des antalgiques. </p>
                <p>Le port de soutien-gorge de contention est obligatoire durant 3 ou 4 semaines afin d’améliorer la circulation sanguine et accélérer l’évacuation du liquide lymphatique. </p>
                <p>Il est recommandé de porter, durant quatre à six semaines, un bandage de soutien (ceinture ventrale gainante ou lipopanty) sur les zones liposucées afin d’obtenir un beau résultat et une peau uniforme.</p>

                <h2>Quel est le résultat du lipofilling mammaire ? </h2>
                <p>Le résultat définitif de l’augmentation mammaire par injection de graisse n’est visible qu’après trois mois après l’opération chirurgicale. Les seins devront être rebondis, volumineux et en parfaite harmonie avec la morphologie du corps. </p>



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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/solutions/fr/seins/lipofillingMammaire.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 136
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/solutions/fr/seins/lipofillingMammaire.twig", 137)->display($context);
        // line 138
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/solutions/fr/seins/lipofillingMammaire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 138,  235 => 137,  231 => 136,  227 => 71,  225 => 70,  219 => 69,  213 => 138,  211 => 136,  199 => 127,  163 => 94,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> lipofilling Mammaires </title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

             <h1>Lipofilling seins en Turquie : augmenter la poitrine par injection de graisse </h1>
              <p>Pour augmenter la taille de sa poitrine de façon modérée, la femme peut recourir au lipofilling mammaire. C’est une alternative à la pose d’implants. En effet, certaines personnes redoutent l’insertion d’un corps étranger dans leur corps et préfèrent les moyens naturels. C’est d’ailleurs une opportunité en or qui est de remodeler son corps, en enlevant le surplus graisseux de certaines zones du corps pour l’injecter aux seins.</p>
              <h2>Le lipofilling mammaire, une double intervention : liposuccion + augmentation mammaire</h2>
              <p>Le chirurgien doit être capable dans un premier lieu de diagnostiquer si la patiente est éligible pour une telle intervention ou pas. Pour cela, il a besoin de :</p>
              <ul>
              <li>Déterminer la quantité approximative de graisse qu’il peut retirer des différentes zones du corps. En plus, il doit prendre en considération plusieurs facteurs comme la qualité de la peau avant de passer à la liposuccion.</li>

              <li>Discuter avec la patiente du volume qu’elle désire avoir et de vérifier si c’est possible en fonction de la quantité de graisse qu’il pourra extraire. </li>
              </ul>

                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">

                       <h2>Pourquoi privilégier l’augmentation mammaire sans pose d’implant ?</h2>
                <p>L’augmentation de la poitrine par injection de la graisse autologue permet un double objectif à la patiente. </p>
                <p>Premièrement, en délimitant les zones donneuses de graisse, le chirurgien peut sculpter le corps de la patiente. Il la débarrasse des poignées d’amour, de la culotte de cheval, de la face interne des cuisses, du ventre ou du dos… et permet, ainsi, de sculpter sa silhouette et d’en définir les contours.</p>
                <p>Deuxièmement, après traitement de la graisse extraite, il l’injecte directement aux seins, en quantité nécessaire et au bon endroit.</p>
                <h2>Comment se déroule le lipofilling mammaire ?</h2>
                <p>La chirurgie dure plus de 2 heures puisqu’elle est couplée d’une liposuccion. Elle nécessite toujours 1 ou 2 jours d’hospitalisation. L’intervention est généralement effectuée sous anesthésie générale, parfois sous anesthésie locale.</p>
                <p>Le tissu adipeux est aspiré à l’aide d’une canule via une petite incision pratiquée dans la peau (liposuccion) de l’abdomen, des fesses ou des cuisses. La graisse aspirée est ensuite centrifugée et purifiée.  Seules les cellules adipeuses sont réinjectées à l’endroit où l’on souhaite réaliser le lipofilling. </p>
                <p>Le lipofilling seins n’induit pas de grandes cicatrices, juste des mini-séquelles de 2 ou 3 millimètres. </p>



             </div>

             <div class=\"col-md-6 \">
              <h2>Quelles sont les suites opératoires du lipomodelage mammaire ? </h2>
                <p>Pour traiter les douleurs postopératoires au niveau de la poitrine et des zones liposucées, la patiente sera amenée à administrer des antalgiques. </p>
                <p>Le port de soutien-gorge de contention est obligatoire durant 3 ou 4 semaines afin d’améliorer la circulation sanguine et accélérer l’évacuation du liquide lymphatique. </p>
                <p>Il est recommandé de porter, durant quatre à six semaines, un bandage de soutien (ceinture ventrale gainante ou lipopanty) sur les zones liposucées afin d’obtenir un beau résultat et une peau uniforme.</p>

                <h2>Quel est le résultat du lipofilling mammaire ? </h2>
                <p>Le résultat définitif de l’augmentation mammaire par injection de graisse n’est visible qu’après trois mois après l’opération chirurgicale. Les seins devront être rebondis, volumineux et en parfaite harmonie avec la morphologie du corps. </p>



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
  ", "/homes/solutions/fr/seins/lipofillingMammaire.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/solutions/fr/seins/lipofillingMammaire.twig");
    }
}
