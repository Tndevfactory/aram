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

/* /homes/besoins/fr/fertilite/grossesse.twig */
class __TwigTemplate_724dfc59a49f7056dda863943f77df56a2e7184e4540a516b6e0e7c34517a013 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/besoins/fr/fertilite/grossesse.twig", 1);
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
        echo "  <title> grossesse</title> ";
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

            <h1>Grossesse </h1>
            <p>La reproduction humaine est un processus complexe et délicat. Certaines femmes ont du mal à tomber enceintes ou à rester enceintes. En effet, une femme est considérée comme infertile si elle n’arrive pas à tomber enceinte après 1 an ou après plusieurs essais ou si elle faisait plusieurs fausses couches. Cependant, les problèmes de fertilité peuvent survenir chez les femmes et les hommes et peuvent être dus à des causes multiples. Ainsi, comprendre les causes de l'infertilité est l'une des parties les plus importantes du traitement.</p>
            <h2>Quelles sont les causes d’infertilité ? </h2>
            <p>De nombreuses étapes d'une grossesse reposent sur le bon fonctionnement du corps féminin. Les causes courantes d'infertilité féminine comprennent :</p>





                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
          <h3><ul>
          <li>Endométriose</li>
          <li>Fibromes utérins</li>
          <li>Blocages ou troubles des trompes</li>
          <li>Anomalies de la phase lutéale (LPD) </li>
          <li>Anovulation</li>
          <li>Forme utérine irrégulière</li>
          <li>Maladie inflammatoire pelvienne</li>
          <li>Cancer</li>
          <li>Problèmes thyroïdiens</li>
          <li>Médicaments</li>
          <li>Mode de vie malsain</li>
          </ul></h3>

          <p>Les hommes peuvent également souffrir de conditions qui rendent la grossesse difficile. En fait, l'infertilité masculine affecte jusqu'à la moitié des couples qui ont des difficultés à concevoir. En règle générale, les problèmes de fertilité masculine proviennent des spermatozoïdes à faible mobilité (vitesse et efficacité du mouvement), morphologie (forme) ou concentration (nombre global). Les conditions qui peuvent précipiter l'infertilité masculine sont :</p>





             </div>

             <div class=\"col-md-6 \">

              <h3><ul>
              <li>Diabète</li>
              <li>Traumatisme de la région testiculaire</li>
              <li>Infection</li>
              <li>Chimiothérapie et radiothérapie</li>
              <li>Fibrose kystique</li>
              <li>Toxines environnementales, telles que le plomb ou les pesticides</li>
              <li>Varicocèles, lorsque les veines des testicules sont élargies, ce qui provoque une surchauffe des spermatozoïdes</li>
              <li>Prendre des stéroïdes anabolisants</li>
              <li>Fumeur</li>
              <li>Consommation abusive d'alcool</li>
              <li>Utiliser des suppléments de testostérone</li>
              <li>Éjaculation incorrecte comme l'éjaculation rétrograde</li>
              </ul></h3>

              <h2>Qu'est-ce qui pourrait augmenter les risques d’infertilité ? </h2>
              <p>Certains facteurs liés à la santé et au mode de vie peuvent augmenter les chances d'avoir des problèmes de fertilité. Ils incluent :</p>
              <h3><ul>
              <li>Avoir plus de 35 ans (pour les femmes) </li>
              <li>Être en surpoids ou insuffisance pondérale</li>
              <li>Chimiothérapie ou radiothérapie</li>
              <li>Consommation excessive de drogues ou d'alcool</li>
              <li>Fumer des cigarettes</li>
              <li>Ne pas obtenir les tests recommandés pour la chlamydia / gonorrhée</li>
              <li>Des antécédents de maladie inflammatoire pelvienne (MIP) </li>
              <li>Blessure au scrotum et aux testicules</li>
              <li>Testicules surchauffés (en portant des vêtements trop serrés, ou en nageant ou en se 
              baignant dans de l'eau chaude souvent et récemment </li>
              <li>Ayant un testicule non descendu : cryptorchidie</li>
              </ul></h3>




            </div>

             <div class=\"col-md-6\">
               <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid pt-5 rounded-circle d-none d-md-block about-img\">
            </div>

          </div>
        </div>

      </section>

                        ";
        // line 168
        $this->displayBlock('leadFormFixBottomtfr', $context, $blocks);
        // line 170
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat2.twig", "/homes/besoins/fr/fertilite/grossesse.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 168
    public function block_leadFormFixBottomtfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/besoins/fr/fertilite/grossesse.twig", 169)->display($context);
        // line 170
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/besoins/fr/fertilite/grossesse.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 170,  267 => 169,  263 => 168,  259 => 71,  257 => 70,  251 => 69,  245 => 170,  243 => 168,  231 => 159,  162 => 93,  139 => 72,  137 => 69,  133 => 67,  129 => 66,  122 => 64,  62 => 9,  51 => 3,  40 => 1,);
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

{% block title %}  <title> grossesse</title> {% endblock  %}
  
{% block content %}
 <!-- besoins/fr/visage/ride-->
                      
                        {% block lead_form_floattfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat2.twig') %}
                            {% endblock  %}
   
      <section id=\"ridesec\" class=\"py-3\">

        <div class=\"container\">
          <div class=\"row\">
          
            <div class=\"col-md-6\">

            <h1>Grossesse </h1>
            <p>La reproduction humaine est un processus complexe et délicat. Certaines femmes ont du mal à tomber enceintes ou à rester enceintes. En effet, une femme est considérée comme infertile si elle n’arrive pas à tomber enceinte après 1 an ou après plusieurs essais ou si elle faisait plusieurs fausses couches. Cependant, les problèmes de fertilité peuvent survenir chez les femmes et les hommes et peuvent être dus à des causes multiples. Ainsi, comprendre les causes de l'infertilité est l'une des parties les plus importantes du traitement.</p>
            <h2>Quelles sont les causes d’infertilité ? </h2>
            <p>De nombreuses étapes d'une grossesse reposent sur le bon fonctionnement du corps féminin. Les causes courantes d'infertilité féminine comprennent :</p>





                          
            </div>

            <div class=\"col-md-6\">
              <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" 
              class=\"img-fluid rounded-circle d-none d-md-block about-img\">
            </div>

            <div class=\"col-md-12\">
          <h3><ul>
          <li>Endométriose</li>
          <li>Fibromes utérins</li>
          <li>Blocages ou troubles des trompes</li>
          <li>Anomalies de la phase lutéale (LPD) </li>
          <li>Anovulation</li>
          <li>Forme utérine irrégulière</li>
          <li>Maladie inflammatoire pelvienne</li>
          <li>Cancer</li>
          <li>Problèmes thyroïdiens</li>
          <li>Médicaments</li>
          <li>Mode de vie malsain</li>
          </ul></h3>

          <p>Les hommes peuvent également souffrir de conditions qui rendent la grossesse difficile. En fait, l'infertilité masculine affecte jusqu'à la moitié des couples qui ont des difficultés à concevoir. En règle générale, les problèmes de fertilité masculine proviennent des spermatozoïdes à faible mobilité (vitesse et efficacité du mouvement), morphologie (forme) ou concentration (nombre global). Les conditions qui peuvent précipiter l'infertilité masculine sont :</p>





             </div>

             <div class=\"col-md-6 \">

              <h3><ul>
              <li>Diabète</li>
              <li>Traumatisme de la région testiculaire</li>
              <li>Infection</li>
              <li>Chimiothérapie et radiothérapie</li>
              <li>Fibrose kystique</li>
              <li>Toxines environnementales, telles que le plomb ou les pesticides</li>
              <li>Varicocèles, lorsque les veines des testicules sont élargies, ce qui provoque une surchauffe des spermatozoïdes</li>
              <li>Prendre des stéroïdes anabolisants</li>
              <li>Fumeur</li>
              <li>Consommation abusive d'alcool</li>
              <li>Utiliser des suppléments de testostérone</li>
              <li>Éjaculation incorrecte comme l'éjaculation rétrograde</li>
              </ul></h3>

              <h2>Qu'est-ce qui pourrait augmenter les risques d’infertilité ? </h2>
              <p>Certains facteurs liés à la santé et au mode de vie peuvent augmenter les chances d'avoir des problèmes de fertilité. Ils incluent :</p>
              <h3><ul>
              <li>Avoir plus de 35 ans (pour les femmes) </li>
              <li>Être en surpoids ou insuffisance pondérale</li>
              <li>Chimiothérapie ou radiothérapie</li>
              <li>Consommation excessive de drogues ou d'alcool</li>
              <li>Fumer des cigarettes</li>
              <li>Ne pas obtenir les tests recommandés pour la chlamydia / gonorrhée</li>
              <li>Des antécédents de maladie inflammatoire pelvienne (MIP) </li>
              <li>Blessure au scrotum et aux testicules</li>
              <li>Testicules surchauffés (en portant des vêtements trop serrés, ou en nageant ou en se 
              baignant dans de l'eau chaude souvent et récemment </li>
              <li>Ayant un testicule non descendu : cryptorchidie</li>
              </ul></h3>




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
  ", "/homes/besoins/fr/fertilite/grossesse.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/besoins/fr/fertilite/grossesse.twig");
    }
}
