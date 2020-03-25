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
class __TwigTemplate_8ffa1535eca3a58d091ce83b01aa3e46e2329a174495ef0d738a96eb22cafb40 extends Template
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
                                            <a class=\"nav-link\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">Accueil </a>
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
                                                                <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/paupiereTombantefr\" class=\"dropdown-item\" id=\"bPaupiere-tombantes\">Paupières tombantes</a>
                                                                <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/complexeNezfr\" class=\"dropdown-item\" id=\"bcomplexe-nez\">Complexes nez</a>
                                                                <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/mentonfr\" class=\"dropdown-item\" id=\"bmenton\">Menton</a>
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
                                                                <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/solutionsVisage/liftingVisagefr\" class=\"dropdown-item\" id=\"sliftingvisage\" >Lifting visage</a>
                                                                <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/solutionsVisage/blepharoplastiefr\" class=\"dropdown-item\">Blépharoplastie </a>
                                                                <a href=\"";
            // line 155
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/solutionsVisage/rhinoplastiefr\" class=\"dropdown-item\">Rhinoplastie</a>
                                                                <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/solutionsVisage/genioplastiefr\" class=\"dropdown-item\">Génioplastie </a>
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
                                            <a class=\"nav-link\" href=\"";
            // line 198
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\" >Contact</a>
                                        </li>

                                        <li class=\"nav-item d-flex pl-3 \" style=\"margin-top:8px\">

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 203
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 204
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 208
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 209
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 213
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 214
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 218
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 219
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
        // line 235
        echo "
    ";
        // line 236
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 237
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
            // line 372
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 373
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 377
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 378
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 382
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 383
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 387
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 388
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
        // line 404
        echo "
    ";
        // line 405
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 406
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
            // line 541
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 542
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 546
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 547
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 551
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 552
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 556
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 557
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
        // line 573
        echo "
    ";
        // line 574
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 575
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
            // line 710
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 711
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 715
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 716
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 720
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 721
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 725
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 726
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
        // line 742
        echo "

";
        // line 744
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 745
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
        // line 767
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
        // line 789
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
        return array (  985 => 789,  960 => 767,  936 => 745,  929 => 744,  925 => 742,  906 => 726,  902 => 725,  895 => 721,  891 => 720,  884 => 716,  880 => 715,  873 => 711,  869 => 710,  732 => 575,  730 => 574,  727 => 573,  708 => 557,  704 => 556,  697 => 552,  693 => 551,  686 => 547,  682 => 546,  675 => 542,  671 => 541,  534 => 406,  532 => 405,  529 => 404,  510 => 388,  506 => 387,  499 => 383,  495 => 382,  488 => 378,  484 => 377,  477 => 373,  473 => 372,  336 => 237,  334 => 236,  331 => 235,  312 => 219,  308 => 218,  301 => 214,  297 => 213,  290 => 209,  286 => 208,  279 => 204,  275 => 203,  267 => 198,  222 => 156,  218 => 155,  214 => 154,  210 => 153,  157 => 103,  153 => 102,  149 => 101,  145 => 100,  127 => 85,  106 => 66,  104 => 65,  38 => 1,);
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
                                            <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Accueil </a>
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
                                                                <a href=\"{{URLROOT}}/homes/besoinsVisage/paupiereTombantefr\" class=\"dropdown-item\" id=\"bPaupiere-tombantes\">Paupières tombantes</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsVisage/complexeNezfr\" class=\"dropdown-item\" id=\"bcomplexe-nez\">Complexes nez</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsVisage/mentonfr\" class=\"dropdown-item\" id=\"bmenton\">Menton</a>
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
                                                                <a href=\"{{URLROOT}}/homes/solutionsVisage/liftingVisagefr\" class=\"dropdown-item\" id=\"sliftingvisage\" >Lifting visage</a>
                                                                <a href=\"{{URLROOT}}/homes/solutionsVisage/blepharoplastiefr\" class=\"dropdown-item\">Blépharoplastie </a>
                                                                <a href=\"{{URLROOT}}/homes/solutionsVisage/rhinoplastiefr\" class=\"dropdown-item\">Rhinoplastie</a>
                                                                <a href=\"{{URLROOT}}/homes/solutionsVisage/genioplastiefr\" class=\"dropdown-item\">Génioplastie </a>
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
                                            <a class=\"nav-link\" href=\"{{URLROOT}}/homes/contact\" >Contact</a>
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


 {% endblock  %}", "/inc/megamenu-responsive.html.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/inc/megamenu-responsive.html.twig");
    }
}
