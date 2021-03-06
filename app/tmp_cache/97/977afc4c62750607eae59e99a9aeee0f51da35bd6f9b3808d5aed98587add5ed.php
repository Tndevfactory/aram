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
    color:#E1AD21;
    font-size:18px;

}

#banner-area .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-area .navbar .dropdown-menu a{
    color:#010203;
    font-size:17px;
}

#banner-area .dropdown-item:hover{
    background-color:#E1AD21 !important;;
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


    ";
        // line 65
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 66
            echo "            <div id=\"banner-area\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-area\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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
                                                                <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/ridesfr\" class=\"dropdown-item\" id=\"brides\">Rides</a>
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

                                        <li class=\"nav-item d-flex pl-3 \" style=\"margin-top:8px\">

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 201
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 202
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 206
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 207
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 211
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 212
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 216
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 217
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    ";
        }
        // line 233
        echo "
    ";
        // line 234
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 235
            echo "            <div id=\"banner-areaen\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-areaen\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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

                                        <li class=\"nav-item d-flex pl-3 pt-1\">

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 370
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 371
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 375
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 376
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 380
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 381
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 385
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 386
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    ";
        }
        // line 402
        echo "
    ";
        // line 403
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 404
            echo "            <div id=\"banner-areagr\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-areagr\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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

                                        <li class=\"nav-item d-flex pl-3 pt-1\">

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 539
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 540
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 544
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 545
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 549
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 550
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 554
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 555
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    ";
        }
        // line 571
        echo "
    ";
        // line 572
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 573
            echo "            <div id=\"banner-areaar\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-areaar\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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

                                        <li class=\"nav-item d-flex pl-3 pt-1\">

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 708
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 709
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 713
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 714
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 718
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 719
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 723
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 724
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    ";
        }
        // line 740
        echo "

";
        // line 742
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 743
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
        // line 765
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
        // line 787
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  956 => 787,  931 => 765,  907 => 743,  900 => 742,  896 => 740,  877 => 724,  873 => 723,  866 => 719,  862 => 718,  855 => 714,  851 => 713,  844 => 709,  840 => 708,  703 => 573,  701 => 572,  698 => 571,  679 => 555,  675 => 554,  668 => 550,  664 => 549,  657 => 545,  653 => 544,  646 => 540,  642 => 539,  505 => 404,  503 => 403,  500 => 402,  481 => 386,  477 => 385,  470 => 381,  466 => 380,  459 => 376,  455 => 375,  448 => 371,  444 => 370,  307 => 235,  305 => 234,  302 => 233,  283 => 217,  279 => 216,  272 => 212,  268 => 211,  261 => 207,  257 => 206,  250 => 202,  246 => 201,  142 => 100,  106 => 66,  104 => 65,  38 => 1,);
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
    color:#E1AD21;
    font-size:18px;

}

#banner-area .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-area .navbar .dropdown-menu a{
    color:#010203;
    font-size:17px;
}

#banner-area .dropdown-item:hover{
    background-color:#E1AD21 !important;;
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


    {% if LANG == 'fr' %}
            <div id=\"banner-area\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-area\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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
                                                                <a href=\"{{URLROOT}}/homes/besoinsVisage/ridesfr\" class=\"dropdown-item\" id=\"brides\">Rides</a>
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

                                        <li class=\"nav-item d-flex pl-3 \" style=\"margin-top:8px\">

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    {% endif  %}

    {% if LANG == 'en' %}
            <div id=\"banner-areaen\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-areaen\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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

                                        <li class=\"nav-item d-flex pl-3 pt-1\">

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    {% endif %}

    {% if LANG == 'gr' %}
            <div id=\"banner-areagr\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-areagr\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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

                                        <li class=\"nav-item d-flex pl-3 pt-1\">

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    {% endif  %}

    {% if LANG == 'ar' %}
            <div id=\"banner-areaar\" class=\"sticky-top\">
                <div class=\"container-fluid-\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <nav id=\"#banner-areaar\" class=\"navbar navbar-expand-lg \" style=\"background:#010203;color:#E1AD21;\">
                            
                                <a class=\"navbar-brand\" href=\"#\"><i style=\"color:#C3922E\" class=\"text-center fab fa-asymmetrik fa-2x\"></i></a>
                            
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <!-- <span class=\"navbar-toggler-icon\"></span>-->
                                <i style=\"color:#C3922E\" class=\"fas fa-bars fa-2x\"></i>
                                </button> 

                                <div class=\"collapse navbar-collapse\" id=\"navbar\">

                                    <ul class=\"navbar-nav mx-auto\">

                                        <li class=\"nav-item \">
                                            <a class=\"nav-link\" href=\"#\">Accueil </a>
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

                                        <li class=\"nav-item d-flex pl-3 pt-1\">

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                                    </a>

                                        </li>


                                    </ul>
                                
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    {% endif %}


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
