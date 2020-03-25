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

/* /inc/navbar.html.twig */
class __TwigTemplate_f40c2992e2dc4dff3e6e4200b6355e5b62c14ccebaed05efab0778568b99edc8 extends Template
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
        echo "
";
        // line 4
        echo "
";
        // line 6
        echo "
<style>
#mynav.navbar-nav a {transition: background-color .2s ease-in-out;}
#mynav .navbar-nav a:hover {
  background-color: #ffbb33;
  border-radius:5px;
  color:black;
  
}

#mynav .dropdown-menu li a:hover {
  background-color: #ffbb33;
  
}
  #mynav .dropdown-menu {
  position: relative;
  top:46px;
  background-color: #1c2331;
  color: #fff;
  border-radius:5px;
  line-height:1.5rem;
}  
  #mynav .dropdown-menu a {
  
  color: #fff;
}  

#mynav .dropdown-submenu {
  position: relative;
  
}

#mynav .dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: 26px;
}

#mynav .dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}

#mynavAr ul li a  {
 
  font-size: 100%;
  text-align:right;
}



</style>


                    
  ";
        // line 64
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 65
            echo "                              <nav  id=\"mynav\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                              <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                      <span class=\"text-capitalize h4\" > 
                                          <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                      </span> 
                               
                              </a>
                          
                              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
                                <span class=\"navbar-toggler-icon\"></span>
                              </button>
                  
                              <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
                                <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">


                                  <li class=\"nav-item \"> <a class=\"nav-link\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">Accueilfr</a></li>
                                
                                  <li class=\"nav-item dropdown\">
                          
                                      <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Nos traitements
                                          </a>
                                      
                                          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">Soins dentaires</a></li>
                                          
                                            
                                            <li class=\"dropdown-submenu\">

                                                <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                                              
                                                <ul class=\"dropdown-menu\">
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">Rhinoplastie </a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">Blépharoplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">Lifting visage</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">Génioplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">Réduction mammaire</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">Lifting Seins</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 107
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">Liposuccion</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">abdominoplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">augmentation fesses</a></li>
                                                </ul>

                                            </li>

                                            <li><a class=\"dropdown-item\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">Greffe cheveux </a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">Médecine esthétique</a></li>
                                        
                                          </ul>

                                        
                                      
                                    </li>
                                  
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 123
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                                  Qui Sommes Nous </a></li> 
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                                  Contact </a></li>


                                  <li class=\"nav-item d-flex pl-5\">

                                      <a class=\"mr-1 pr-0\" href=\"";
            // line 131
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                                      src=\"";
            // line 132
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                        <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                        </a>

                                      <a class=\"mr-1 pr-0\" href=\"";
            // line 136
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                                      src=\"";
            // line 137
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                        </a>

                                      <a class=\"mr-0 pr-0\" href=\"";
            // line 141
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                                      src=\"";
            // line 142
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                        </a>  
                                        
                                        <a class=\"mr-0 pl-1\" href=\"";
            // line 146
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                                      src=\"";
            // line 147
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                        </a>

                                  </li>

                                </ul>

                              </div>
                          


                  </nav>

";
        }
        // line 162
        echo "
 ";
        // line 163
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 164
            echo "                               <nav dir=\"rtl\" id=\"mynavAr\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                            <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                    <span class=\"text-capitalize h4\" > 
                                        <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                    </span> 
                              
                            </a>
        
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
                          <span class=\"navbar-toggler-icon\"></span>
                        </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  mr-auto pr-5 mr-4\">
                <li class=\"nav-item \"> <a  class=\"nav-link\" dir=\"rtl\" href=\"";
            // line 180
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">
الرئيسية</a></li>
                <li class=\"nav-item dropdown\">
                    <a  dir=\"rtl\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          العلاجات
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 188
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">علاج الأسنان</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a  dir=\"rtl\" class=\"dropdown-item dropdown-toggle\" >الجراحة البلاستيكية </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 196
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">رينوبلاستي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 197
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">رأب الجفن</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 198
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">رفع البصر</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 199
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">جراحة الوراثة</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 200
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">تكبير الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 201
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">تصغير الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 202
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">رفع الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 203
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">ملء الدهون</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 204
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">شفط الدهون</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 205
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">شد البطن</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 206
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">تكبير الأرداف</a></li>
                              </ul>

                          </li>

                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 211
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">زرع الشعر </a></li>
                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 212
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">الطب التجميلي</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a  dir=\"rtl\" class=\"nav-link\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                من نحن </a></li> 
                <li class=\"nav-item\"><a dir=\"rtl\"  class=\"nav-link\" href=\"";
            // line 222
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                اتصل</a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"";
            // line 228
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 229
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"";
            // line 233
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 234
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"";
            // line 238
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 239
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"";
            // line 243
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 244
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                      </a>

                </li>

              </ul>

            </div>
        


</nav>

 ";
        }
        // line 259
        echo "
";
        // line 260
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 261
            echo "                                <nav  id=\"mynav\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                            <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                    <span class=\"text-capitalize h4\" > 
                                        <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                    </span> 
                              
                            </a>
        
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">

                <li class=\"nav-item \"> <a class=\"nav-link\" href=\"";
            // line 278
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">Accueil en</a></li>
              
                <li class=\"nav-item dropdown\">
        
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          Nos traitements
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a class=\"dropdown-item\" href=\"";
            // line 287
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">Soins dentaires</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 295
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">Rhinoplastie </a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 296
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">Blépharoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 297
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">Lifting visage</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 298
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">Génioplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 299
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 300
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">Réduction mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 301
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">Lifting Seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 302
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 303
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">Liposuccion</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 304
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">abdominoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 305
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">augmentation fesses</a></li>
                              </ul>

                          </li>

                          <li><a class=\"dropdown-item\" href=\"";
            // line 310
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">Greffe cheveux </a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 311
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">Médecine esthétique</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 319
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                Qui Sommes Nous </a></li> 
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 321
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                Contact </a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 327
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 328
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 332
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 333
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"";
            // line 337
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 338
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"";
            // line 342
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 343
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                      </a>

                </li>

              </ul>

            </div>
        


</nav>


";
        }
        // line 358
        echo " 

";
        // line 360
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 361
            echo "                              <nav  id=\"mynav\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                            <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                    <span class=\"text-capitalize h4\" > 
                                        <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                    </span> 
                              
                            </a>
        
                          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
                            <span class=\"navbar-toggler-icon\"></span>
                          </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">


                <li class=\"nav-item \"> <a class=\"nav-link\" href=\"";
            // line 379
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">Accueil gr</a></li>
              
                <li class=\"nav-item dropdown\">
        
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          Nos traitements
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a class=\"dropdown-item\" href=\"";
            // line 388
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">Soins dentaires</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 396
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">Rhinoplastie </a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 397
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">Blépharoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 398
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">Lifting visage</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 399
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">Génioplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 400
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 401
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">Réduction mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 402
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">Lifting Seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 403
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 404
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">Liposuccion</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 405
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">abdominoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 406
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">augmentation fesses</a></li>
                              </ul>

                          </li>

                          <li><a class=\"dropdown-item\" href=\"";
            // line 411
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">Greffe cheveux </a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 412
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">Médecine esthétique</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 420
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                Qui Sommes Nous </a></li> 
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 422
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                Contact </a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 428
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 429
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 433
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 434
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"";
            // line 438
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 439
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"";
            // line 443
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                    src=\"";
            // line 444
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                      </a>

                </li>

              </ul>

            </div>
        


</nav>

";
        }
        // line 459
        echo "                     ";
    }

    public function getTemplateName()
    {
        return "/inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  817 => 459,  799 => 444,  795 => 443,  788 => 439,  784 => 438,  777 => 434,  773 => 433,  766 => 429,  762 => 428,  753 => 422,  748 => 420,  737 => 412,  733 => 411,  725 => 406,  721 => 405,  717 => 404,  713 => 403,  709 => 402,  705 => 401,  701 => 400,  697 => 399,  693 => 398,  689 => 397,  685 => 396,  674 => 388,  662 => 379,  642 => 361,  640 => 360,  636 => 358,  617 => 343,  613 => 342,  606 => 338,  602 => 337,  595 => 333,  591 => 332,  584 => 328,  580 => 327,  571 => 321,  566 => 319,  555 => 311,  551 => 310,  543 => 305,  539 => 304,  535 => 303,  531 => 302,  527 => 301,  523 => 300,  519 => 299,  515 => 298,  511 => 297,  507 => 296,  503 => 295,  492 => 287,  480 => 278,  461 => 261,  459 => 260,  456 => 259,  438 => 244,  434 => 243,  427 => 239,  423 => 238,  416 => 234,  412 => 233,  405 => 229,  401 => 228,  392 => 222,  387 => 220,  376 => 212,  372 => 211,  364 => 206,  360 => 205,  356 => 204,  352 => 203,  348 => 202,  344 => 201,  340 => 200,  336 => 199,  332 => 198,  328 => 197,  324 => 196,  313 => 188,  302 => 180,  284 => 164,  282 => 163,  279 => 162,  261 => 147,  257 => 146,  250 => 142,  246 => 141,  239 => 137,  235 => 136,  228 => 132,  224 => 131,  215 => 125,  210 => 123,  199 => 115,  195 => 114,  187 => 109,  183 => 108,  179 => 107,  175 => 106,  171 => 105,  167 => 104,  163 => 103,  159 => 102,  155 => 101,  151 => 100,  147 => 99,  136 => 91,  124 => 82,  105 => 65,  103 => 64,  43 => 6,  40 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}

{# #ff8f00 amber darken-3 #}

<style>
#mynav.navbar-nav a {transition: background-color .2s ease-in-out;}
#mynav .navbar-nav a:hover {
  background-color: #ffbb33;
  border-radius:5px;
  color:black;
  
}

#mynav .dropdown-menu li a:hover {
  background-color: #ffbb33;
  
}
  #mynav .dropdown-menu {
  position: relative;
  top:46px;
  background-color: #1c2331;
  color: #fff;
  border-radius:5px;
  line-height:1.5rem;
}  
  #mynav .dropdown-menu a {
  
  color: #fff;
}  

#mynav .dropdown-submenu {
  position: relative;
  
}

#mynav .dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: 26px;
}

#mynav .dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}

#mynavAr ul li a  {
 
  font-size: 100%;
  text-align:right;
}



</style>


                    
  {% if LANG == 'fr' %}
                              <nav  id=\"mynav\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                              <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                      <span class=\"text-capitalize h4\" > 
                                          <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                      </span> 
                               
                              </a>
                          
                              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
                                <span class=\"navbar-toggler-icon\"></span>
                              </button>
                  
                              <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
                                <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">


                                  <li class=\"nav-item \"> <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Accueilfr</a></li>
                                
                                  <li class=\"nav-item dropdown\">
                          
                                      <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Nos traitements
                                          </a>
                                      
                                          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/soinsDentaires\">Soins dentaires</a></li>
                                          
                                            
                                            <li class=\"dropdown-submenu\">

                                                <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                                              
                                                <ul class=\"dropdown-menu\">
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/rhinoplastie\">Rhinoplastie </a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/blepharoplastie\">Blépharoplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingVisage\">Lifting visage</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/genioplastie\">Génioplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/reductionMammaire\">Réduction mammaire</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingSeins\">Lifting Seins</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liposuccion\">Liposuccion</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/abdominoplastie\">abdominoplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationFesses\">augmentation fesses</a></li>
                                                </ul>

                                            </li>

                                            <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/greffeCheveux\">Greffe cheveux </a></li>
                                            <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/medecineEsthetique\">Médecine esthétique</a></li>
                                        
                                          </ul>

                                        
                                      
                                    </li>
                                  
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{URLROOT}}/homes/qui_sommes_nous\">
                                  Qui Sommes Nous </a></li> 
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{URLROOT}}/homes/contact\">
                                  Contact </a></li>


                                  <li class=\"nav-item d-flex pl-5\">

                                      <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                                      src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                        <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                        </a>

                                      <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                                      src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                        </a>

                                      <a class=\"mr-0 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                                      src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                        </a>  
                                        
                                        <a class=\"mr-0 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                                      src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                                        </a>

                                  </li>

                                </ul>

                              </div>
                          


                  </nav>

{% endif %}

 {% if LANG == 'ar' %}
                               <nav dir=\"rtl\" id=\"mynavAr\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                            <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                    <span class=\"text-capitalize h4\" > 
                                        <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                    </span> 
                              
                            </a>
        
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
                          <span class=\"navbar-toggler-icon\"></span>
                        </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  mr-auto pr-5 mr-4\">
                <li class=\"nav-item \"> <a  class=\"nav-link\" dir=\"rtl\" href=\"{{URLROOT}}/homes\">
الرئيسية</a></li>
                <li class=\"nav-item dropdown\">
                    <a  dir=\"rtl\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          العلاجات
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/soinsDentaires\">علاج الأسنان</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a  dir=\"rtl\" class=\"dropdown-item dropdown-toggle\" >الجراحة البلاستيكية </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/rhinoplastie\">رينوبلاستي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/blepharoplastie\">رأب الجفن</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingVisage\">رفع البصر</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/genioplastie\">جراحة الوراثة</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationImplantsMammaire\">تكبير الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/reductionMammaire\">تصغير الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingSeins\">رفع الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/lipofillingSeins\">ملء الدهون</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liposuccion\">شفط الدهون</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/abdominoplastie\">شد البطن</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationFesses\">تكبير الأرداف</a></li>
                              </ul>

                          </li>

                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/greffeCheveux\">زرع الشعر </a></li>
                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"{{URLROOT}}/homes/medecineEsthetique\">الطب التجميلي</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a  dir=\"rtl\" class=\"nav-link\" href=\"{{URLROOT}}/homes/qui_sommes_nous\">
                من نحن </a></li> 
                <li class=\"nav-item\"><a dir=\"rtl\"  class=\"nav-link\" href=\"{{URLROOT}}/homes/contact\">
                اتصل</a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                      </a>

                </li>

              </ul>

            </div>
        


</nav>

 {% endif %}

{% if LANG == 'en' %}
                                <nav  id=\"mynav\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                            <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                    <span class=\"text-capitalize h4\" > 
                                        <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                    </span> 
                              
                            </a>
        
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">

                <li class=\"nav-item \"> <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Accueil en</a></li>
              
                <li class=\"nav-item dropdown\">
        
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          Nos traitements
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/soinsDentaires\">Soins dentaires</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/rhinoplastie\">Rhinoplastie </a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/blepharoplastie\">Blépharoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingVisage\">Lifting visage</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/genioplastie\">Génioplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/reductionMammaire\">Réduction mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingSeins\">Lifting Seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liposuccion\">Liposuccion</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/abdominoplastie\">abdominoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationFesses\">augmentation fesses</a></li>
                              </ul>

                          </li>

                          <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/greffeCheveux\">Greffe cheveux </a></li>
                          <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/medecineEsthetique\">Médecine esthétique</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{URLROOT}}/homes/qui_sommes_nous\">
                Qui Sommes Nous </a></li> 
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{URLROOT}}/homes/contact\">
                Contact </a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                      </a>

                </li>

              </ul>

            </div>
        


</nav>


{% endif %} 

{% if LANG == 'gr' %}
                              <nav  id=\"mynav\" class=\"navbar navbar-expand-lg navbar-light heavy-rain-gradient sticky-top \">

                            <a class=\"navbar-brand pl-3\" href=\"#\"> 
                                    <span class=\"text-capitalize h4\" > 
                                        <i class=\"fab fa-asymmetrik fa-2x\"></i>
                                    </span> 
                              
                            </a>
        
                          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
                            <span class=\"navbar-toggler-icon\"></span>
                          </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"line-height:1.9em;\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">


                <li class=\"nav-item \"> <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Accueil gr</a></li>
              
                <li class=\"nav-item dropdown\">
        
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          Nos traitements
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/soinsDentaires\">Soins dentaires</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/rhinoplastie\">Rhinoplastie </a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/blepharoplastie\">Blépharoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingVisage\">Lifting visage</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/genioplastie\">Génioplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/reductionMammaire\">Réduction mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liftingSeins\">Lifting Seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/liposuccion\">Liposuccion</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/abdominoplastie\">abdominoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/augmentationFesses\">augmentation fesses</a></li>
                              </ul>

                          </li>

                          <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/greffeCheveux\">Greffe cheveux </a></li>
                          <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/medecineEsthetique\">Médecine esthétique</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{URLROOT}}/homes/qui_sommes_nous\">
                Qui Sommes Nous </a></li> 
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{URLROOT}}/homes/contact\">
                Contact </a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"30\" width=\"30\" 
                    src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                      </a>

                </li>

              </ul>

            </div>
        


</nav>

{% endif %}
                     ", "/inc/navbar.html.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/inc/navbar.html.twig");
    }
}
