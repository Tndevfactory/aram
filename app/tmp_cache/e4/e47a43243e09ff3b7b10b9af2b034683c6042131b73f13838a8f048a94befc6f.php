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

/* /inc/navbarMegaMenu.html.twig */
class __TwigTemplate_447972d4faa92072a832449626b83d1edb1085f141e5500c014c0f37a5104990 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- sowcaseVideoCoverSHOWCASE SLIDER -->
<style>

/* ––––––––––––––––––––––––––––––––––––––––––––––––––
megamenu.js STYLE STARTS HERE
–––––––––––––––––––––––––––––––––––––––––––––––––– */


/* ––––––––––––––––––––––––––––––––––––––––––––––––––
Screen style's
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.menu-container {
    width: 80%;
    margin: 0 auto;
    background: #e9e9e9;

    
}

.menu-container a {
    color:steelblue;
    
    
}

.menu-mobile {
    display: none;
    padding: 20px;
}

.menu-mobile:after {
    content: \"\\f394\";
    font-family: \"Ionicons\";
    font-size: 2.5rem;
    padding: 0;
    float: right;
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-25%);
    -ms-transform: translateY(-25%);
    transform: translateY(-25%);
}

.menu-dropdown-icon:before {
    content: \"\\f489\";
    font-family: \"Ionicons\";
    display: none;
    cursor: pointer;
    float: right;
    padding: 1.5em 2em;
    background: #fff;
    color: #333;
}

.menu > ul {
    margin: 0 auto;
    width: 100%;
    list-style: none;
    padding: 0;
    position: relative;
    / IF .menu position=relative -> ul = container width, ELSE ul = 100% width /
    box-sizing: border-box;
}

.menu > ul:before,
.menu > ul:after {
    content: \"\";
    display: table;
}

.menu > ul:after {
    clear: both;
}

.menu > ul > li {
    float: left;
    background: #e9e9e9;
    padding: 0;
    margin: 0;
}

.menu > ul > li a {
    text-decoration: none;
    padding: 1.5em 3em;
    display: block;
}



.menu > ul > li > ul {
    display: none;
    width: 95%;
     /*background: #f0f0f0; */
    background: #f0f0f0;
    padding: 20px;
    position: absolute;
    z-index: 99;
    left: 0;
    margin: 0;
    list-style: none;
    box-sizing: border-box;
}

.menu > ul > li > ul:before,
.menu > ul > li > ul:after {
    content: \"\";
    display: table;
}

.menu > ul > li > ul:after {
    clear: both;
}

.menu > ul > li > ul > li {
    margin: 0;
    padding-bottom: 0;
    list-style: none;
    /* li width */
    width: 15%;
    background: none;
    float: left;
}

.menu > ul > li > ul > li a {
    /* color: #777; */
    color: black;
    padding: .2em 0;
    width: 95%;
    display: block;
    border-bottom: 1px solid #ccc;
}

.menu > ul > li > ul > li > ul {
    display: block;
    padding: 0;
    margin: 10px 0 0;
    list-style: none;
    box-sizing: border-box;
}

.menu > ul > li > ul > li > ul:before,
.menu > ul > li > ul > li > ul:after {
    content: \"\";
    display: table;
}

.menu > ul > li > ul > li > ul:after {
    clear: both;
}

.menu > ul > li > ul > li > ul > li {
    float: left;
    width: 100%;
    padding: 10px 0;
    margin: 0;
    font-size: .8em;
}

.menu > ul > li > ul > li > ul > li a {
    border: 0;
}

.menu > ul > li > ul.normal-sub {
    width: 300px;
   
    left: auto;
    padding: 10px 20px;
}

.menu > ul > li > ul.normal-sub > li {
    width: 100%;
}

.menu > ul > li > ul.normal-sub > li a {
    border: 0;
    padding: 1em 0;
}

/* ch add ; */

/* target link line title ; */

.menu > ul > li:hover {
   /* background: #f0f0f0; */
   color: steelblue;
    font-weight: bold;
}



.menu > ul > li > ul > li > a {
   
    color: steelblue;

}

/* hover sublink link secondary ; */
.menu > ul > li > ul > li > ul > li a:hover {
   /* background: #f0f0f0; */
    color: steelblue;
    font-weight: bold;

}


/* hover link secondary ; */
.menu > ul > li > ul > li    {
   /* background: #f0f0f0; */
    color: red;
}
/* ––––––––––––––––––––––––––––––––––––––––––––––––––
Mobile style's
–––––––––––––––––––––––––––––––––––––––––––––––––– */

@media only screen and (max-width: 959px) {
    .menu-container {
        width: 100%;
    }
    .menu-mobile {
        display: block;
    }
    .menu-dropdown-icon:before {
        display: block;
    }
    .menu > ul {
        display: none;
    }
    .menu > ul > li {
        width: 100%;
        float: none;
        display: block;
    }
    .menu > ul > li a {
        padding: 1.5em;
        width: 100%;
        display: block;
    }
    .menu > ul > li > ul {
        position: relative;
    }
    .menu > ul > li > ul.normal-sub {
        width: 100%;
    }
    .menu > ul > li > ul > li {
        float: none;
        width: 100%;
        margin-top: 20px;
    }
    .menu > ul > li > ul > li:first-child {
        margin: 0;
    }
    .menu > ul > li > ul > li > ul {
        position: relative;
    }
    .menu > ul > li > ul > li > ul > li {
        float: none;
    }
    .menu .show-on-mobile {
        display: block;
    }
}
</style>



  <section id=\"megaMenu \" style=\"background-color:#e9e9e9;\" class=\"sticky\">
  
  <div class=\"row\"> 
    <div class=\"col-2\">
            <a class=\"navbar-brand ml-4\" href=\"#\"> 
                <span class=\"text-capitalize h4\" > 
                    <i class=\"text-center black-text fab fa-asymmetrik fa-2x\"></i>
                </span> 
                               
              </a>
    </div>
    <div class=\"col-10\">
        <div class=\"menu-container \">
            <div class=\"menu pl-md-5\">
                <ul>
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"#\">Vos besoins</a>
                        <ul>
                            <li><a href=\"#\">Visage</a>
                                <ul>
                                    <li><a href=\"#\">Rides</a></li>
                                    <li><a href=\"#\">Paupières tombantes</a></li>
                                    <li><a href=\"#\">Complexes nez</a></li>
                                    <li><a href=\"#\">Menton</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Poitrine</a>
                                <ul>
                                    <li><a href=\"#\">Seins tombants</a></li>
                                    <li><a href=\"#\">Hypotrophie mammaire</a></li>
                                    <li><a href=\"#\">Hypertrophie mammaire</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Corps</a>
                                <ul>
                                    <li><a href=\"#\">Graisse en trop</a></li>
                                    <li><a href=\"#\">Relâchement peau</a></li>
                                    <li><a href=\"#\">Hypertrophie mammaire</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Cheveux</a>
                                <ul>
                                    <li><a href=\"#\">Chute de cheveux</a></li>
                                    <li><a href=\"#\">Trous barbe</a></li>
                                    <li><a href=\"#\">Alopécie sourcils</a></li>
                                </ul>
                            </li> <li><a href=\"#\">Dents</a>
                                <ul>
                                    <li><a href=\"#\">Dents manquantes</a></li>
                                    <li><a href=\"#\">Dents ébrechées</a></li>
                                    <li><a href=\"#\">Dents jaunies </a></li>
                                </ul>
                            </li> <li><a href=\"#\">Fertilité</a>
                                <ul>
                                    <li><a href=\"#\">Grossesse</a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Nos solutions</a>
                    ";
        // line 331
        echo "
                    <ul>
                            <li><a href=\"#\">Visage</a>
                                <ul>
                                    <li><a href=\"#\">Lifting visage</a></li>
                                    <li><a href=\"#\">Blépharoplastie</a></li>
                                    <li><a href=\"#\">Rhinoplastie</a></li>
                                    <li><a href=\"#\">Génioplastie</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Seins </a>
                                <ul>
                                    <li><a href=\"#\">Lifting seins </a></li>
                                    <li><a href=\"#\">Prothèses mammaires</a></li>
                                    <li><a href=\"#\">Lipofilling mammaire</a></li>
                                    <li><a href=\"#\">Réduction mammaire</a></li>
                                </ul>
                            </li> 
                            <li><a href=\"#\">Silhouette</a>
                                <ul>
                                    <li><a href=\"#\">Liposuccion </a></li>
                                    <li><a href=\"#\">Abdominoplastie </a></li>
                                    <li><a href=\"#\">Augmentation fesses</a></li>
                                </ul>
                            </li> 
                            <li><a href=\"#\">Greffe capillaire</a>
                                <ul>
                                    <li><a href=\"#\">Greffe cheveux</a></li>
                                    <li><a href=\"#\">Greffe barbe</a></li>
                                    <li><a href=\"#\">Greffe sourcils</a></li>
                                </ul>
                            </li> 
                            <li><a href=\"#\">Soins dentaires</a>
                                <ul>
                                    <li><a href=\"#\">Implants dentaires</a></li>
                                    <li><a href=\"#\">Facettes dentaires</a></li>
                                    <li><a href=\"#\">Blanchiment dentaire</a></li>
                                </ul>
                            </li>  
                            <li><a href=\"#\">Fiv</a>
                                <ul>
                                    <li><a href=\"#\">Fécondation in vitr</a></li>
                                </ul>
                            </li>
                    </ul>
                        
                    ";
        // line 378
        echo "                    </li>
                    <li><a href=\"#\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
  
  
  </section>

  <script>
";
        // line 398
        echo "  </script>";
    }

    public function getTemplateName()
    {
        return "/inc/navbarMegaMenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  431 => 398,  416 => 378,  368 => 331,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- sowcaseVideoCoverSHOWCASE SLIDER -->
<style>

/* ––––––––––––––––––––––––––––––––––––––––––––––––––
megamenu.js STYLE STARTS HERE
–––––––––––––––––––––––––––––––––––––––––––––––––– */


/* ––––––––––––––––––––––––––––––––––––––––––––––––––
Screen style's
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.menu-container {
    width: 80%;
    margin: 0 auto;
    background: #e9e9e9;

    
}

.menu-container a {
    color:steelblue;
    
    
}

.menu-mobile {
    display: none;
    padding: 20px;
}

.menu-mobile:after {
    content: \"\\f394\";
    font-family: \"Ionicons\";
    font-size: 2.5rem;
    padding: 0;
    float: right;
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-25%);
    -ms-transform: translateY(-25%);
    transform: translateY(-25%);
}

.menu-dropdown-icon:before {
    content: \"\\f489\";
    font-family: \"Ionicons\";
    display: none;
    cursor: pointer;
    float: right;
    padding: 1.5em 2em;
    background: #fff;
    color: #333;
}

.menu > ul {
    margin: 0 auto;
    width: 100%;
    list-style: none;
    padding: 0;
    position: relative;
    / IF .menu position=relative -> ul = container width, ELSE ul = 100% width /
    box-sizing: border-box;
}

.menu > ul:before,
.menu > ul:after {
    content: \"\";
    display: table;
}

.menu > ul:after {
    clear: both;
}

.menu > ul > li {
    float: left;
    background: #e9e9e9;
    padding: 0;
    margin: 0;
}

.menu > ul > li a {
    text-decoration: none;
    padding: 1.5em 3em;
    display: block;
}



.menu > ul > li > ul {
    display: none;
    width: 95%;
     /*background: #f0f0f0; */
    background: #f0f0f0;
    padding: 20px;
    position: absolute;
    z-index: 99;
    left: 0;
    margin: 0;
    list-style: none;
    box-sizing: border-box;
}

.menu > ul > li > ul:before,
.menu > ul > li > ul:after {
    content: \"\";
    display: table;
}

.menu > ul > li > ul:after {
    clear: both;
}

.menu > ul > li > ul > li {
    margin: 0;
    padding-bottom: 0;
    list-style: none;
    /* li width */
    width: 15%;
    background: none;
    float: left;
}

.menu > ul > li > ul > li a {
    /* color: #777; */
    color: black;
    padding: .2em 0;
    width: 95%;
    display: block;
    border-bottom: 1px solid #ccc;
}

.menu > ul > li > ul > li > ul {
    display: block;
    padding: 0;
    margin: 10px 0 0;
    list-style: none;
    box-sizing: border-box;
}

.menu > ul > li > ul > li > ul:before,
.menu > ul > li > ul > li > ul:after {
    content: \"\";
    display: table;
}

.menu > ul > li > ul > li > ul:after {
    clear: both;
}

.menu > ul > li > ul > li > ul > li {
    float: left;
    width: 100%;
    padding: 10px 0;
    margin: 0;
    font-size: .8em;
}

.menu > ul > li > ul > li > ul > li a {
    border: 0;
}

.menu > ul > li > ul.normal-sub {
    width: 300px;
   
    left: auto;
    padding: 10px 20px;
}

.menu > ul > li > ul.normal-sub > li {
    width: 100%;
}

.menu > ul > li > ul.normal-sub > li a {
    border: 0;
    padding: 1em 0;
}

/* ch add ; */

/* target link line title ; */

.menu > ul > li:hover {
   /* background: #f0f0f0; */
   color: steelblue;
    font-weight: bold;
}



.menu > ul > li > ul > li > a {
   
    color: steelblue;

}

/* hover sublink link secondary ; */
.menu > ul > li > ul > li > ul > li a:hover {
   /* background: #f0f0f0; */
    color: steelblue;
    font-weight: bold;

}


/* hover link secondary ; */
.menu > ul > li > ul > li    {
   /* background: #f0f0f0; */
    color: red;
}
/* ––––––––––––––––––––––––––––––––––––––––––––––––––
Mobile style's
–––––––––––––––––––––––––––––––––––––––––––––––––– */

@media only screen and (max-width: 959px) {
    .menu-container {
        width: 100%;
    }
    .menu-mobile {
        display: block;
    }
    .menu-dropdown-icon:before {
        display: block;
    }
    .menu > ul {
        display: none;
    }
    .menu > ul > li {
        width: 100%;
        float: none;
        display: block;
    }
    .menu > ul > li a {
        padding: 1.5em;
        width: 100%;
        display: block;
    }
    .menu > ul > li > ul {
        position: relative;
    }
    .menu > ul > li > ul.normal-sub {
        width: 100%;
    }
    .menu > ul > li > ul > li {
        float: none;
        width: 100%;
        margin-top: 20px;
    }
    .menu > ul > li > ul > li:first-child {
        margin: 0;
    }
    .menu > ul > li > ul > li > ul {
        position: relative;
    }
    .menu > ul > li > ul > li > ul > li {
        float: none;
    }
    .menu .show-on-mobile {
        display: block;
    }
}
</style>



  <section id=\"megaMenu \" style=\"background-color:#e9e9e9;\" class=\"sticky\">
  
  <div class=\"row\"> 
    <div class=\"col-2\">
            <a class=\"navbar-brand ml-4\" href=\"#\"> 
                <span class=\"text-capitalize h4\" > 
                    <i class=\"text-center black-text fab fa-asymmetrik fa-2x\"></i>
                </span> 
                               
              </a>
    </div>
    <div class=\"col-10\">
        <div class=\"menu-container \">
            <div class=\"menu pl-md-5\">
                <ul>
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"#\">Vos besoins</a>
                        <ul>
                            <li><a href=\"#\">Visage</a>
                                <ul>
                                    <li><a href=\"#\">Rides</a></li>
                                    <li><a href=\"#\">Paupières tombantes</a></li>
                                    <li><a href=\"#\">Complexes nez</a></li>
                                    <li><a href=\"#\">Menton</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Poitrine</a>
                                <ul>
                                    <li><a href=\"#\">Seins tombants</a></li>
                                    <li><a href=\"#\">Hypotrophie mammaire</a></li>
                                    <li><a href=\"#\">Hypertrophie mammaire</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Corps</a>
                                <ul>
                                    <li><a href=\"#\">Graisse en trop</a></li>
                                    <li><a href=\"#\">Relâchement peau</a></li>
                                    <li><a href=\"#\">Hypertrophie mammaire</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Cheveux</a>
                                <ul>
                                    <li><a href=\"#\">Chute de cheveux</a></li>
                                    <li><a href=\"#\">Trous barbe</a></li>
                                    <li><a href=\"#\">Alopécie sourcils</a></li>
                                </ul>
                            </li> <li><a href=\"#\">Dents</a>
                                <ul>
                                    <li><a href=\"#\">Dents manquantes</a></li>
                                    <li><a href=\"#\">Dents ébrechées</a></li>
                                    <li><a href=\"#\">Dents jaunies </a></li>
                                </ul>
                            </li> <li><a href=\"#\">Fertilité</a>
                                <ul>
                                    <li><a href=\"#\">Grossesse</a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Nos solutions</a>
                    {# ************************************ #}

                    <ul>
                            <li><a href=\"#\">Visage</a>
                                <ul>
                                    <li><a href=\"#\">Lifting visage</a></li>
                                    <li><a href=\"#\">Blépharoplastie</a></li>
                                    <li><a href=\"#\">Rhinoplastie</a></li>
                                    <li><a href=\"#\">Génioplastie</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Seins </a>
                                <ul>
                                    <li><a href=\"#\">Lifting seins </a></li>
                                    <li><a href=\"#\">Prothèses mammaires</a></li>
                                    <li><a href=\"#\">Lipofilling mammaire</a></li>
                                    <li><a href=\"#\">Réduction mammaire</a></li>
                                </ul>
                            </li> 
                            <li><a href=\"#\">Silhouette</a>
                                <ul>
                                    <li><a href=\"#\">Liposuccion </a></li>
                                    <li><a href=\"#\">Abdominoplastie </a></li>
                                    <li><a href=\"#\">Augmentation fesses</a></li>
                                </ul>
                            </li> 
                            <li><a href=\"#\">Greffe capillaire</a>
                                <ul>
                                    <li><a href=\"#\">Greffe cheveux</a></li>
                                    <li><a href=\"#\">Greffe barbe</a></li>
                                    <li><a href=\"#\">Greffe sourcils</a></li>
                                </ul>
                            </li> 
                            <li><a href=\"#\">Soins dentaires</a>
                                <ul>
                                    <li><a href=\"#\">Implants dentaires</a></li>
                                    <li><a href=\"#\">Facettes dentaires</a></li>
                                    <li><a href=\"#\">Blanchiment dentaire</a></li>
                                </ul>
                            </li>  
                            <li><a href=\"#\">Fiv</a>
                                <ul>
                                    <li><a href=\"#\">Fécondation in vitr</a></li>
                                </ul>
                            </li>
                    </ul>
                        
                    {# ********************************** #}
                    </li>
                    <li><a href=\"#\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
  
  
  </section>

  <script>
{# 
  \$(function () {
  \$(\".sticky\").sticky({
    topSpacing: 90,
    zIndex: 2,
    stopper: \"#YourStopperId\"});
}); #}
  </script>", "/inc/navbarMegaMenu.html.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\inc\\navbarMegaMenu.html.twig");
    }
}
