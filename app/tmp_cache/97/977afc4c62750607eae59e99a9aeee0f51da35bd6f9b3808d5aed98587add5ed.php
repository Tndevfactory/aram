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

/* /inc/megamenu-responsive.html.twig */
class __TwigTemplate_06ad2124d2683f90ddb1f508b795e7f7a63b26eb9e881a20853407c7a1661fae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Mega menu responsive  -->
<style>
#banner-area .menu-area{
    position:static;
        
}

#banner-area .mega-area{
    position:absolute;
    width:90%;
    left:10%;
    /*right:50%;*/
    padding:15px;
    

}

#banner-area .dropdow-item{
    padding:2px 0px;
    background:red;
}

#banner-area .navbar .dropdown-menu a{
    padding: 3px;
    font-size: .9375rem;
    font-weight: 300;
}

#banner-area  a.nav-link{
    color:#C3922E;

}

#banner-area .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-area .navbar .dropdown-menu a{
    color:#0C3537;
}

#banner-area .dropdown-item:hover{
    background-color:#0C3537 !important;;
    color:#fff !important;;
}

#banner-area h5{
font-family:BigNoodleTitling;
letter-spacing:2px;
font-weight:900;
}

#banner-area .navbar{
    margin-top:0%;
}

</style>

<div id=\"banner-area\">
    <div class=\"container-fluid-\">
        <div class=\"row\">
            <div class=\"col\">
                <nav class=\"navbar navbar-expand-md \" style=\"background:#0C3537;color:#fff;\">
                
                     <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                   
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                   <!-- <span class=\"navbar-toggler-icon\"></span>-->
                    <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                    </button> 

                     <div class=\"collapse navbar-collapse\" id=\"navbar\">

                        <ul class=\"navbar-nav mx-auto\">

                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"#\">Acceuil </a>
                            </li>

                            <li class=\"nav-item dropdown menu-area\">
                               
                                <a class=\"nav-link dropdown-toggle\" 
                                href=\"#\" id=\"mega-one\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Vos besoins
                                </a>

                                    <div class=\"dropdown-menu mega-area\" aria-labelledby=\"mega-one\">
                                        <div id=\"visage\" class=\"row mb-3\" style=\"background:white\">
                                           
                                                <div class=\"col-sm-6 col-lg-2\" >
                                                    <h5>Visage</h5>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"brides\">Rides</a>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"bPaupiere-tombantes\">Paupières tombantes</a><a href=\"#\" class=\"dropdown-item\" id=\"bcomplexe-nez\">Complexes nez</a>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"bmenton\">Menton</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Poitrine</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Seins tombants</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Hypotrophie mammaire</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Hypertrophie mammaire</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Corps</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Graisse en trop</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Relâchement peau ventre</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Fesses plates </a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Cheveux</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Chute de cheveux</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Trous barbe</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Alopécie sourcils</a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Dents</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Dents manquantes</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Dents ébrechées</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Dents jaunies </a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Fertilité</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Grossesse</a>
                                                    <a  class=\"dropdown-item\"></a>
                                                    <a  class=\"dropdown-item\"></a>
                                                </div> 
                                            
                                           
                                        </div>
                                        <div class=\"row \" id=\"vitrinebesoins\" style=\"background:white\">  </div>
                                    </div>
                            </li>

                            <li class=\"nav-item dropdown menu-area\">

                                <a class=\"nav-link dropdown-toggle\" 
                                href=\"#\" id=\"mega-two\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Nos solutions
                                </a>
                                   <div class=\"dropdown-menu mega-area\" aria-labelledby=\"mega-one\">
                                        <div class=\"row mb-3\" style=\"background:white\">
                                           
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Visage</h5>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"sliftingvisage\" >Lifting visage</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Blépharoplastie </a><a href=\"#\" class=\"dropdown-item\">Rhinoplastie</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Génioplastie </a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Seins</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Lifting seins</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Prothèses mammaires</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Lipofilling mammaire</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Réduction mammaire</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Silhouette</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Liposuccion </a>
                                                    <a href=\"#\" class=\"dropdown-item\">Abdominoplastie </a>
                                                    <a href=\"#\" class=\"dropdown-item\">Augmentation fesses</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Greffe capillaire</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Greffe cheveux </a>
                                                    <a href=\"#\" class=\"dropdown-item\">Greffe barbe</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Greffe sourcils</a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Soins dentaires</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Implants dentaires</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Facettes dentaires</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Blanchiment dentaire</a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Fiv</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Fécondation in vitro</a>
                                                    <a class=\"dropdown-item\"></a>
                                                    <a class=\"dropdown-item\"></a>
                                                </div> 
                                            
                                           
                                        </div>
                                      <div class=\"row \" id=\"vitrinesolutions\" style=\"background:white\">  </div>
                                    </div>
                            </li>

                            
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\" >Contact</a>
                            </li>
                        </ul>
                       
                    </div> 
                </nav>
            </div>
        </div>
    </div>
</div>

";
        // line 200
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "
    <script>

        \$(document).ready(function(){

        \$(\"#brides\").hover(function(){
                 \$(\"#vitrinebesoins\").html(bidRides);
            }, function(){
                 \$(\"#vitrinebesoins\").empty();
        }); 
        
         \$(\"#sliftingvisage\").hover(function(){
                 \$(\"#vitrinesolutions\").html(sidliftingvisage);
            }, function(){
                 \$(\"#vitrinesolutions\").empty();
        });


    // besoins

      var bidRides='';
        bidRides +='<div class=\" p-0 col-sm-6 col-lg-3 offset-sm-1\">';
        bidRides +='<img src=\"";
        // line 223
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\">';
        bidRides +='</div>';
        
        bidRides +='<div class=\"col-sm-6  col-lg-7 mt-3\">';
        
        bidRides +=' <h5 style=\"color:#0C3537;\">Besoins:</h5>';
        bidRides +='  <p class=\"pl-1\"> rideseeeeee dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsdlkjfhd';
        bidRides +='    fdfdfdfdfdfdsdlkfhsdkfhldsjklkjfhsdlkfhs';
        bidRides +='    dkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        bidRides +=' <h5 style=\"color:#C3922E;\">Solutions:</h5>';
        bidRides +=' <p class=\"pl-1\"> Rides dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsd';
        bidRides +=' lkjfhdfdfdfdfdfdfdsdlkfhsdkfhl';
        bidRides +='  dsjklkjfhsdlkfhsdkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        bidRides +=' </div>';


    // solutions

      var sidliftingvisage='';
        sidliftingvisage +='<div class=\" p-0 col-sm-6 col-lg-3 offset-sm-1\">';
        sidliftingvisage +='<img src=\"";
        // line 245
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe2.jpg\" alt=\"\" style=\"width:100%\">';
        sidliftingvisage +='</div>';
        
        sidliftingvisage +='<div class=\"col-sm-6  col-lg-7 mt-3\">';
        
        sidliftingvisage +=' <h5 style=\"color:#0C3537;\">Besoins:</h5>';
        sidliftingvisage +='  <p class=\"pl-1\"> lifting visage dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsdlkjfhd';
        sidliftingvisage +='    fdfdfdfdfdfdsdlkfhsdkfhldsjklkjfhsdlkfhs';
        sidliftingvisage +='    dkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        sidliftingvisage +=' <h5 style=\"color:#C3922E;\">Solutions:</h5>';
        sidliftingvisage +=' <p class=\"pl-1\"> Rides dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsd';
        sidliftingvisage +=' lkjfhdfdfdfdfdfdfdsdlkfhsdkfhl';
        sidliftingvisage +='  dsjklkjfhsdlkfhsdkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        sidliftingvisage +=' </div>';


        });//end \$(document).ready(function()

    </script>


 ";
    }

    public function getTemplateName()
    {
        return "/inc/megamenu-responsive.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  295 => 245,  270 => 223,  246 => 201,  239 => 200,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Mega menu responsive  -->
<style>
#banner-area .menu-area{
    position:static;
        
}

#banner-area .mega-area{
    position:absolute;
    width:90%;
    left:10%;
    /*right:50%;*/
    padding:15px;
    

}

#banner-area .dropdow-item{
    padding:2px 0px;
    background:red;
}

#banner-area .navbar .dropdown-menu a{
    padding: 3px;
    font-size: .9375rem;
    font-weight: 300;
}

#banner-area  a.nav-link{
    color:#C3922E;

}

#banner-area .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-area .navbar .dropdown-menu a{
    color:#0C3537;
}

#banner-area .dropdown-item:hover{
    background-color:#0C3537 !important;;
    color:#fff !important;;
}

#banner-area h5{
font-family:BigNoodleTitling;
letter-spacing:2px;
font-weight:900;
}

#banner-area .navbar{
    margin-top:0%;
}

</style>

<div id=\"banner-area\">
    <div class=\"container-fluid-\">
        <div class=\"row\">
            <div class=\"col\">
                <nav class=\"navbar navbar-expand-md \" style=\"background:#0C3537;color:#fff;\">
                
                     <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                   
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                   <!-- <span class=\"navbar-toggler-icon\"></span>-->
                    <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                    </button> 

                     <div class=\"collapse navbar-collapse\" id=\"navbar\">

                        <ul class=\"navbar-nav mx-auto\">

                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"#\">Acceuil </a>
                            </li>

                            <li class=\"nav-item dropdown menu-area\">
                               
                                <a class=\"nav-link dropdown-toggle\" 
                                href=\"#\" id=\"mega-one\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Vos besoins
                                </a>

                                    <div class=\"dropdown-menu mega-area\" aria-labelledby=\"mega-one\">
                                        <div id=\"visage\" class=\"row mb-3\" style=\"background:white\">
                                           
                                                <div class=\"col-sm-6 col-lg-2\" >
                                                    <h5>Visage</h5>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"brides\">Rides</a>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"bPaupiere-tombantes\">Paupières tombantes</a><a href=\"#\" class=\"dropdown-item\" id=\"bcomplexe-nez\">Complexes nez</a>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"bmenton\">Menton</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Poitrine</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Seins tombants</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Hypotrophie mammaire</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Hypertrophie mammaire</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Corps</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Graisse en trop</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Relâchement peau ventre</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Fesses plates </a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Cheveux</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Chute de cheveux</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Trous barbe</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Alopécie sourcils</a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Dents</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Dents manquantes</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Dents ébrechées</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Dents jaunies </a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Fertilité</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Grossesse</a>
                                                    <a  class=\"dropdown-item\"></a>
                                                    <a  class=\"dropdown-item\"></a>
                                                </div> 
                                            
                                           
                                        </div>
                                        <div class=\"row \" id=\"vitrinebesoins\" style=\"background:white\">  </div>
                                    </div>
                            </li>

                            <li class=\"nav-item dropdown menu-area\">

                                <a class=\"nav-link dropdown-toggle\" 
                                href=\"#\" id=\"mega-two\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Nos solutions
                                </a>
                                   <div class=\"dropdown-menu mega-area\" aria-labelledby=\"mega-one\">
                                        <div class=\"row mb-3\" style=\"background:white\">
                                           
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Visage</h5>
                                                    <a href=\"#\" class=\"dropdown-item\" id=\"sliftingvisage\" >Lifting visage</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Blépharoplastie </a><a href=\"#\" class=\"dropdown-item\">Rhinoplastie</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Génioplastie </a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Seins</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Lifting seins</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Prothèses mammaires</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Lipofilling mammaire</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Réduction mammaire</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Silhouette</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Liposuccion </a>
                                                    <a href=\"#\" class=\"dropdown-item\">Abdominoplastie </a>
                                                    <a href=\"#\" class=\"dropdown-item\">Augmentation fesses</a>
                                                </div> 
                                                <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Greffe capillaire</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Greffe cheveux </a>
                                                    <a href=\"#\" class=\"dropdown-item\">Greffe barbe</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Greffe sourcils</a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Soins dentaires</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Implants dentaires</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Facettes dentaires</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Blanchiment dentaire</a>
                                                </div> 
                                                 <div class=\"col-sm-6 col-lg-2\">
                                                    <h5>Fiv</h5>
                                                    <a href=\"#\" class=\"dropdown-item\">Fécondation in vitro</a>
                                                    <a class=\"dropdown-item\"></a>
                                                    <a class=\"dropdown-item\"></a>
                                                </div> 
                                            
                                           
                                        </div>
                                      <div class=\"row \" id=\"vitrinesolutions\" style=\"background:white\">  </div>
                                    </div>
                            </li>

                            
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\" >Contact</a>
                            </li>
                        </ul>
                       
                    </div> 
                </nav>
            </div>
        </div>
    </div>
</div>

{% block script %}

    <script>

        \$(document).ready(function(){

        \$(\"#brides\").hover(function(){
                 \$(\"#vitrinebesoins\").html(bidRides);
            }, function(){
                 \$(\"#vitrinebesoins\").empty();
        }); 
        
         \$(\"#sliftingvisage\").hover(function(){
                 \$(\"#vitrinesolutions\").html(sidliftingvisage);
            }, function(){
                 \$(\"#vitrinesolutions\").empty();
        });


    // besoins

      var bidRides='';
        bidRides +='<div class=\" p-0 col-sm-6 col-lg-3 offset-sm-1\">';
        bidRides +='<img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\">';
        bidRides +='</div>';
        
        bidRides +='<div class=\"col-sm-6  col-lg-7 mt-3\">';
        
        bidRides +=' <h5 style=\"color:#0C3537;\">Besoins:</h5>';
        bidRides +='  <p class=\"pl-1\"> rideseeeeee dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsdlkjfhd';
        bidRides +='    fdfdfdfdfdfdsdlkfhsdkfhldsjklkjfhsdlkfhs';
        bidRides +='    dkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        bidRides +=' <h5 style=\"color:#C3922E;\">Solutions:</h5>';
        bidRides +=' <p class=\"pl-1\"> Rides dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsd';
        bidRides +=' lkjfhdfdfdfdfdfdfdsdlkfhsdkfhl';
        bidRides +='  dsjklkjfhsdlkfhsdkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        bidRides +=' </div>';


    // solutions

      var sidliftingvisage='';
        sidliftingvisage +='<div class=\" p-0 col-sm-6 col-lg-3 offset-sm-1\">';
        sidliftingvisage +='<img src=\"{{URLROOT}}/public/img/barbe/barbe2.jpg\" alt=\"\" style=\"width:100%\">';
        sidliftingvisage +='</div>';
        
        sidliftingvisage +='<div class=\"col-sm-6  col-lg-7 mt-3\">';
        
        sidliftingvisage +=' <h5 style=\"color:#0C3537;\">Besoins:</h5>';
        sidliftingvisage +='  <p class=\"pl-1\"> lifting visage dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsdlkjfhd';
        sidliftingvisage +='    fdfdfdfdfdfdsdlkfhsdkfhldsjklkjfhsdlkfhs';
        sidliftingvisage +='    dkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        sidliftingvisage +=' <h5 style=\"color:#C3922E;\">Solutions:</h5>';
        sidliftingvisage +=' <p class=\"pl-1\"> Rides dsflhdfkjhdslkfhsd dsflhdfkjhdslkfhsd';
        sidliftingvisage +=' lkjfhdfdfdfdfdfdfdsdlkfhsdkfhl';
        sidliftingvisage +='  dsjklkjfhsdlkfhsdkfhldsdsfdsfdsfdsfdsfdfdfdfdfddfddjk</p> ';
       
        sidliftingvisage +=' </div>';


        });//end \$(document).ready(function()

    </script>


 {% endblock  %}", "/inc/megamenu-responsive.html.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\inc\\megamenu-responsive.html.twig");
    }
}
