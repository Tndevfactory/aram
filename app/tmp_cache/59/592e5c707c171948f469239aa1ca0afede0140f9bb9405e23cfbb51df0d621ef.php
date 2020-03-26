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
#banner-area .menu-area, #banner-areaen .menu-area, #banner-areagr .menu-area{
    position:static;
        
}

#banner-area .mega-area,#banner-areaen .mega-area,#banner-areagr .mega-area{
    position:absolute;
    width:90%;
    left:10%;
    /*right:50%;*/
    padding:15px;
    

}

#banner-area .dropdow-item, #banner-areaen .dropdow-item, #banner-areagr .dropdow-item{
    padding:2px 0px;
    background:red;
}

#banner-area .navbar .dropdown-menu a, #banner-areaen .navbar .dropdown-menu a, #banner-areagr .navbar .dropdown-menu a{
    padding: 3px;
    font-size: .9375rem;
    font-weight: 300;
}

#banner-area  a.nav-link, #banner-areaen  a.nav-link, #banner-areagr  a.nav-link{
    color:#E1AD21;
    font-size:18px;

}

#banner-area .dropdown-menu.mega-area, #banner-areaen .dropdown-menu.mega-area, #banner-areagr .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-area .navbar .dropdown-menu a, #banner-areaen .navbar .dropdown-menu a, #banner-areagr .navbar .dropdown-menu a{
    color:#010203;
    font-size:17px;
}

#banner-area .dropdown-item:hover, #banner-areaen .dropdown-item:hover, #banner-areagr .dropdown-item:hover{
    background-color:#E1AD21 !important;;
    color:#fff !important;;
}

#banner-area h5, #banner-areaen h5, #banner-areagr h5{
font-family:BigNoodleTitling;
letter-spacing:2px;
font-weight:900;
}

#banner-area .navbar, #banner-areaen .navbar, #banner-areagr .navbar{
    margin-top:0%;
}



/* banner arab ///////////////////////////*/
/* banner arab ///////////////////////////*/
/* banner arab ///////////////////////////*/
#banner-areaar .menu-area{
    position:static;
        
}

#banner-areaar .mega-area{
    position:absolute;
    width:90%;
    left:10%;
    /*right:50%;*/
    padding:15px;
    

}

#banner-areaar .dropdow-item{
    padding:2px 0px;
    background:red;
}

#banner-areaar .navbar .dropdown-menu a{
    padding: 3px;
    font-size: .9375rem;
    font-weight: 300;
}

#banner-areaar  a.nav-link{
    color:#E1AD21;
    font-size:18px;

}

#banner-areaar .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-areaar .navbar .dropdown-menu a{
    color:#010203;
    font-size:17px;
}

#banner-areaar .dropdown-item:hover{
    background-color:#E1AD21 !important;;
    color:#fff !important;;
}

#banner-areaar h5{
font-family:BigNoodleTitling;
letter-spacing:2px;
font-weight:900;
}

#banner-areaar .navbar{
    margin-top:0%;
}



</style>


    ";
        // line 127
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 128
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
            // line 147
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
            // line 162
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/ridesfr\" class=\"dropdown-item\" id=\"brides\">Rides</a>
                                                                <a href=\"";
            // line 163
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/paupiereTombantefr\" class=\"dropdown-item\" id=\"bPaupiere-tombantes\">Paupières tombantes</a>
                                                                <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/complexeNezfr\" class=\"dropdown-item\" id=\"bcomplexe-nez\">Complexes nez</a>
                                                                <a href=\"";
            // line 165
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsVisage/mentonfr\" class=\"dropdown-item\" id=\"bmenton\">Menton</a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Poitrine</h5>
                                                                <a href=\"";
            // line 169
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsPoitrine/seinsTombantsfr\" class=\"dropdown-item\">Seins tombants</a>
                                                                <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsPoitrine/hypotrophieMammairefr\" class=\"dropdown-item\">Hypotrophie mammaire</a>
                                                                <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsPoitrine/hypertrophieMammairefr\" class=\"dropdown-item\">Hypertrophie mammaire</a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Corps</h5>
                                                                <a href=\"";
            // line 175
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsCorps/graisseEnTropfr\" class=\"dropdown-item\">Graisse en trop</a>
                                                                <a href=\"";
            // line 176
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsCorps/relachementPeauVentrefr\" class=\"dropdown-item\">Relâchement peau ventre</a>
                                                                <a href=\"";
            // line 177
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsCorps/fessesPlatesfr\" class=\"dropdown-item\">Fesses plates </a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Cheveux</h5>
                                                                <a href=\"";
            // line 181
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsCheuveux/chuteDeCheuveuxfr\" class=\"dropdown-item\">Chute de cheveux</a>
                                                                <a href=\"";
            // line 182
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsCheuveux/trousBarbefr\" class=\"dropdown-item\">Trous barbe</a>
                                                                <a href=\"";
            // line 183
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsCheuveux/alopecieSourcilsfr\" class=\"dropdown-item\">Alopécie sourcils</a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Dents</h5>
                                                                <a href=\"";
            // line 187
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsDents/dentsManquantesfr\" class=\"dropdown-item\">Dents manquantes</a>
                                                                <a href=\"";
            // line 188
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsDents/dentsEbrecheesfr\" class=\"dropdown-item\">Dents ébrechées</a>
                                                                <a href=\"";
            // line 189
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsDents/dentsJauniesfr\" class=\"dropdown-item\">Dents jaunies </a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Fertilité</h5>
                                                                <a href=\"";
            // line 193
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/besoinsFertilite/grossessefr\" class=\"dropdown-item\">Grossesse</a>
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
            // line 215
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/solutionsVisage/liftingVisagefr\" class=\"dropdown-item\" id=\"sliftingvisage\" >Lifting visage</a>
                                                                <a href=\"";
            // line 216
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/solutionsVisage/blepharoplastiefr\" class=\"dropdown-item\">Blépharoplastie </a>
                                                                <a href=\"";
            // line 217
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/solutionsVisage/rhinoplastiefr\" class=\"dropdown-item\">Rhinoplastie</a>
                                                                <a href=\"";
            // line 218
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
            // line 260
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\" >Contact</a>
                                        </li>

                                        <li class=\"nav-item d-flex pl-3 \" style=\"margin-top:8px\">

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 265
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 266
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 270
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 271
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 275
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 276
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 280
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 281
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
        // line 297
        echo "
    ";
        // line 298
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 299
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
            // line 434
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 435
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 439
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 440
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 444
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 445
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 449
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 450
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
        // line 466
        echo "
    ";
        // line 467
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 468
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
            // line 603
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 604
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 608
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 609
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 613
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 614
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 618
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 619
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
        // line 635
        echo "
    ";
        // line 636
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 637
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
            // line 772
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 773
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 777
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 778
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                                    </a>

                                                <a class=\"mr-2 pr-0\" href=\"";
            // line 782
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 783
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                                    <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                                    </a>  
                                                    
                                                    <a class=\"mr-2 pl-1\" href=\"";
            // line 787
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                                src=\"";
            // line 788
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
        // line 804
        echo "

";
        // line 806
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 807
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
        // line 829
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
        // line 851
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
        return array (  1086 => 851,  1061 => 829,  1037 => 807,  1030 => 806,  1026 => 804,  1007 => 788,  1003 => 787,  996 => 783,  992 => 782,  985 => 778,  981 => 777,  974 => 773,  970 => 772,  833 => 637,  831 => 636,  828 => 635,  809 => 619,  805 => 618,  798 => 614,  794 => 613,  787 => 609,  783 => 608,  776 => 604,  772 => 603,  635 => 468,  633 => 467,  630 => 466,  611 => 450,  607 => 449,  600 => 445,  596 => 444,  589 => 440,  585 => 439,  578 => 435,  574 => 434,  437 => 299,  435 => 298,  432 => 297,  413 => 281,  409 => 280,  402 => 276,  398 => 275,  391 => 271,  387 => 270,  380 => 266,  376 => 265,  368 => 260,  323 => 218,  319 => 217,  315 => 216,  311 => 215,  286 => 193,  279 => 189,  275 => 188,  271 => 187,  264 => 183,  260 => 182,  256 => 181,  249 => 177,  245 => 176,  241 => 175,  234 => 171,  230 => 170,  226 => 169,  219 => 165,  215 => 164,  211 => 163,  207 => 162,  189 => 147,  168 => 128,  166 => 127,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Mega menu responsive  -->
<style>
#banner-area .menu-area, #banner-areaen .menu-area, #banner-areagr .menu-area{
    position:static;
        
}

#banner-area .mega-area,#banner-areaen .mega-area,#banner-areagr .mega-area{
    position:absolute;
    width:90%;
    left:10%;
    /*right:50%;*/
    padding:15px;
    

}

#banner-area .dropdow-item, #banner-areaen .dropdow-item, #banner-areagr .dropdow-item{
    padding:2px 0px;
    background:red;
}

#banner-area .navbar .dropdown-menu a, #banner-areaen .navbar .dropdown-menu a, #banner-areagr .navbar .dropdown-menu a{
    padding: 3px;
    font-size: .9375rem;
    font-weight: 300;
}

#banner-area  a.nav-link, #banner-areaen  a.nav-link, #banner-areagr  a.nav-link{
    color:#E1AD21;
    font-size:18px;

}

#banner-area .dropdown-menu.mega-area, #banner-areaen .dropdown-menu.mega-area, #banner-areagr .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-area .navbar .dropdown-menu a, #banner-areaen .navbar .dropdown-menu a, #banner-areagr .navbar .dropdown-menu a{
    color:#010203;
    font-size:17px;
}

#banner-area .dropdown-item:hover, #banner-areaen .dropdown-item:hover, #banner-areagr .dropdown-item:hover{
    background-color:#E1AD21 !important;;
    color:#fff !important;;
}

#banner-area h5, #banner-areaen h5, #banner-areagr h5{
font-family:BigNoodleTitling;
letter-spacing:2px;
font-weight:900;
}

#banner-area .navbar, #banner-areaen .navbar, #banner-areagr .navbar{
    margin-top:0%;
}



/* banner arab ///////////////////////////*/
/* banner arab ///////////////////////////*/
/* banner arab ///////////////////////////*/
#banner-areaar .menu-area{
    position:static;
        
}

#banner-areaar .mega-area{
    position:absolute;
    width:90%;
    left:10%;
    /*right:50%;*/
    padding:15px;
    

}

#banner-areaar .dropdow-item{
    padding:2px 0px;
    background:red;
}

#banner-areaar .navbar .dropdown-menu a{
    padding: 3px;
    font-size: .9375rem;
    font-weight: 300;
}

#banner-areaar  a.nav-link{
    color:#E1AD21;
    font-size:18px;

}

#banner-areaar .dropdown-menu.mega-area{
background-color:#fff !important;
    top: 98%
}

#banner-areaar .navbar .dropdown-menu a{
    color:#010203;
    font-size:17px;
}

#banner-areaar .dropdown-item:hover{
    background-color:#E1AD21 !important;;
    color:#fff !important;;
}

#banner-areaar h5{
font-family:BigNoodleTitling;
letter-spacing:2px;
font-weight:900;
}

#banner-areaar .navbar{
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
                                                                <a href=\"{{URLROOT}}/homes/besoinsPoitrine/seinsTombantsfr\" class=\"dropdown-item\">Seins tombants</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsPoitrine/hypotrophieMammairefr\" class=\"dropdown-item\">Hypotrophie mammaire</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsPoitrine/hypertrophieMammairefr\" class=\"dropdown-item\">Hypertrophie mammaire</a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Corps</h5>
                                                                <a href=\"{{URLROOT}}/homes/besoinsCorps/graisseEnTropfr\" class=\"dropdown-item\">Graisse en trop</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsCorps/relachementPeauVentrefr\" class=\"dropdown-item\">Relâchement peau ventre</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsCorps/fessesPlatesfr\" class=\"dropdown-item\">Fesses plates </a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Cheveux</h5>
                                                                <a href=\"{{URLROOT}}/homes/besoinsCheuveux/chuteDeCheuveuxfr\" class=\"dropdown-item\">Chute de cheveux</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsCheuveux/trousBarbefr\" class=\"dropdown-item\">Trous barbe</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsCheuveux/alopecieSourcilsfr\" class=\"dropdown-item\">Alopécie sourcils</a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Dents</h5>
                                                                <a href=\"{{URLROOT}}/homes/besoinsDents/dentsManquantesfr\" class=\"dropdown-item\">Dents manquantes</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsDents/dentsEbrecheesfr\" class=\"dropdown-item\">Dents ébrechées</a>
                                                                <a href=\"{{URLROOT}}/homes/besoinsDents/dentsJauniesfr\" class=\"dropdown-item\">Dents jaunies </a>
                                                            </div> 
                                                            <div class=\"col-sm-6 col-lg-2\">
                                                                <h5>Fertilité</h5>
                                                                <a href=\"{{URLROOT}}/homes/besoinsFertilite/grossessefr\" class=\"dropdown-item\">Grossesse</a>
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
