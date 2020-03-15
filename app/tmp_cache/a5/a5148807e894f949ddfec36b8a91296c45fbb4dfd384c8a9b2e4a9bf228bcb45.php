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
class __TwigTemplate_a8c1104eca82f59b12a86dea3e25d3bac4ffc29aac5ab98bb82810d83571c760 extends Template
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
#mynav .navbar-nav a {transition: background-color .2s ease-in-out;}
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

";
        // line 52
        echo "
#mynavAr ul li a  {
 
  font-size: 100%;
  text-align:right;
  padding-right:15px;
}

#mynavAr .navbar-nav a {transition: background-color .2s ease-in-out;}
#mynavAr .navbar-nav a:hover {
  background-color: #ffbb33;
  border-radius:5px;
  color:black;
  
}
#mynavAr .dropdown-menu li a:hover {
  background-color: #ffbb33;
  
}
  #mynavAr .dropdown-menu {
  position: relative;
  top:36px;
  right:-13px;
  background-color: #1c2331;
  color: #fff;
  border-radius:5px;
  line-height:1.5rem;
}  
 #mynavAr .dropdown-menu a {
    color: #fff;
}  

#mynavAr .dropdown-submenu .sub {
  position: relative;
  right:153px;
}

#mynavAr .dropdown-submenu a::after {
  transform: rotate(90deg);
  position: absolute;
  left: 4px;
  top: 20px;
  
}

#mynavAr .dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}


</style>


                    
  ";
        // line 109
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 110
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
            // line 127
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">Accueil</a></li>
                                
                                  <li class=\"nav-item dropdown\">
                          
                                      <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Nos traitements
                                          </a>
                                      
                                          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 136
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">Soins dentaires</a></li>
                                          
                                            
                                            <li class=\"dropdown-submenu\">

                                                <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique</a>
                                              
                                                <ul class=\"dropdown-menu\">
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 144
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">Rhinoplastie </a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">Blépharoplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 146
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">Lifting visage</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 147
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">Génioplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 148
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">Réduction mammaire</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 150
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">Lifting Seins</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 151
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 152
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">Liposuccion</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">abdominoplastie</a></li>
                                                  <li><a class=\"dropdown-item\" href=\"";
            // line 154
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">augmentation fesses</a></li>
                                                </ul>

                                            </li>

                                            <li><a class=\"dropdown-item\" href=\"";
            // line 159
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">Greffe cheveux </a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 160
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">Médecine esthétique</a></li>
                                        
                                          </ul>

                                        
                                      
                                    </li>
                                  
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 168
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                                  Qui Sommes Nous </a></li> 
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 170
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                                  Contact </a></li>


                                  <li class=\"nav-item d-flex pl-5\">

                                      <a class=\"mr-1 pr-0\" href=\"";
            // line 176
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                      src=\"";
            // line 177
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                        <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                        </a>

                                      <a class=\"mr-1 pr-0\" href=\"";
            // line 181
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                      src=\"";
            // line 182
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                        </a>

                                      <a class=\"mr-0 pr-0\" href=\"";
            // line 186
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                      src=\"";
            // line 187
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                        </a>  
                                        
                                        <a class=\"mr-0 pl-1\" href=\"";
            // line 191
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                                      src=\"";
            // line 192
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
        // line 207
        echo "
 ";
        // line 208
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 209
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
            // line 225
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">
الرئيسية</a></li>
                <li class=\"nav-item dropdown\">
                    <a  dir=\"rtl\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          العلاجات
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 233
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">علاج الأسنان</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a  dir=\"rtl\" class=\"dropdown-item dropdown-toggle\" >الجراحة البلاستيكية </a>
                             
                              <ul class=\"dropdown-menu sub\">
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 241
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">رينوبلاستي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 242
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">رأب الجفن</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 243
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">رفع البصر</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 244
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">جراحة الوراثة</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 245
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">تكبير الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 246
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">تصغير الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 247
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">رفع الثدي</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 248
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">ملء الدهون</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 249
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">شفط الدهون</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 250
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">شد البطن</a></li>
                                <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 251
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">تكبير الأرداف</a></li>
                              </ul>

                          </li>

                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 256
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">زرع الشعر </a></li>
                          <li><a  dir=\"rtl\" class=\"dropdown-item\" href=\"";
            // line 257
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">الطب التجميلي</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a  dir=\"rtl\" class=\"nav-link\" href=\"";
            // line 265
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                من نحن </a></li> 
                <li class=\"nav-item\"><a dir=\"rtl\"  class=\"nav-link\" href=\"";
            // line 267
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                اتصل</a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"";
            // line 273
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 274
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"";
            // line 278
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 279
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"";
            // line 283
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 284
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"";
            // line 288
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 289
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
        // line 304
        echo "
";
        // line 305
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 306
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
            // line 323
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">Accueil</a></li>
              
                <li class=\"nav-item dropdown\">
        
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          Nos traitements
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a class=\"dropdown-item\" href=\"";
            // line 332
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">Soins dentaires</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 340
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">Rhinoplastie </a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 341
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">Blépharoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 342
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">Lifting visage</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 343
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">Génioplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 344
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 345
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">Réduction mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 346
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">Lifting Seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 347
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 348
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">Liposuccion</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 349
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">abdominoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 350
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">augmentation fesses</a></li>
                              </ul>

                          </li>

                          <li><a class=\"dropdown-item\" href=\"";
            // line 355
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">Greffe cheveux </a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 356
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">Médecine esthétique</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 364
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                Qui Sommes Nous </a></li> 
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 366
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                Contact </a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 372
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 373
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 377
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 378
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"";
            // line 382
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 383
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"";
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


";
        }
        // line 403
        echo " 

";
        // line 405
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 406
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
            // line 424
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes\">Accueil</a></li>
              
                <li class=\"nav-item dropdown\">
        
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          Nos traitements
                        </a>
                    
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                          <li><a class=\"dropdown-item\" href=\"";
            // line 433
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/soinsDentaires\">Soins dentaires</a></li>
                         
                          
                          <li class=\"dropdown-submenu\">

                              <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique </a>
                             
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 441
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/rhinoplastie\">Rhinoplastie </a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 442
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/blepharoplastie\">Blépharoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 443
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingVisage\">Lifting visage</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 444
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/genioplastie\">Génioplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 445
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationImplantsMammaire\">Augmentation implants mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 446
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/reductionMammaire\">Réduction mammaire</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 447
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liftingSeins\">Lifting Seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 448
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/lipofillingSeins\">Lipofilling seins</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 449
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/liposuccion\">Liposuccion</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 450
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/abdominoplastie\">abdominoplastie</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 451
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/augmentationFesses\">augmentation fesses</a></li>
                              </ul>

                          </li>

                          <li><a class=\"dropdown-item\" href=\"";
            // line 456
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/greffeCheveux\">Greffe cheveux </a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 457
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/medecineEsthetique\">Médecine esthétique</a></li>
                      
                        </ul>

                      
                    
                  </li>
                
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 465
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/qui_sommes_nous\">
                Qui Sommes Nous </a></li> 
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 467
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/contact\">
                Contact </a></li>


                <li class=\"nav-item d-flex pl-5\">

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 473
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 474
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"";
            // line 478
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 479
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"";
            // line 483
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 484
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"";
            // line 488
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                    src=\"";
            // line 489
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
        // line 504
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
        return array (  863 => 504,  845 => 489,  841 => 488,  834 => 484,  830 => 483,  823 => 479,  819 => 478,  812 => 474,  808 => 473,  799 => 467,  794 => 465,  783 => 457,  779 => 456,  771 => 451,  767 => 450,  763 => 449,  759 => 448,  755 => 447,  751 => 446,  747 => 445,  743 => 444,  739 => 443,  735 => 442,  731 => 441,  720 => 433,  708 => 424,  688 => 406,  686 => 405,  682 => 403,  663 => 388,  659 => 387,  652 => 383,  648 => 382,  641 => 378,  637 => 377,  630 => 373,  626 => 372,  617 => 366,  612 => 364,  601 => 356,  597 => 355,  589 => 350,  585 => 349,  581 => 348,  577 => 347,  573 => 346,  569 => 345,  565 => 344,  561 => 343,  557 => 342,  553 => 341,  549 => 340,  538 => 332,  526 => 323,  507 => 306,  505 => 305,  502 => 304,  484 => 289,  480 => 288,  473 => 284,  469 => 283,  462 => 279,  458 => 278,  451 => 274,  447 => 273,  438 => 267,  433 => 265,  422 => 257,  418 => 256,  410 => 251,  406 => 250,  402 => 249,  398 => 248,  394 => 247,  390 => 246,  386 => 245,  382 => 244,  378 => 243,  374 => 242,  370 => 241,  359 => 233,  348 => 225,  330 => 209,  328 => 208,  325 => 207,  307 => 192,  303 => 191,  296 => 187,  292 => 186,  285 => 182,  281 => 181,  274 => 177,  270 => 176,  261 => 170,  256 => 168,  245 => 160,  241 => 159,  233 => 154,  229 => 153,  225 => 152,  221 => 151,  217 => 150,  213 => 149,  209 => 148,  205 => 147,  201 => 146,  197 => 145,  193 => 144,  182 => 136,  170 => 127,  151 => 110,  149 => 109,  90 => 52,  43 => 6,  40 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}

{# #ff8f00 amber darken-3 #}

<style>
#mynav .navbar-nav a {transition: background-color .2s ease-in-out;}
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

{# ---arabic navbar style----------------------------- #}

#mynavAr ul li a  {
 
  font-size: 100%;
  text-align:right;
  padding-right:15px;
}

#mynavAr .navbar-nav a {transition: background-color .2s ease-in-out;}
#mynavAr .navbar-nav a:hover {
  background-color: #ffbb33;
  border-radius:5px;
  color:black;
  
}
#mynavAr .dropdown-menu li a:hover {
  background-color: #ffbb33;
  
}
  #mynavAr .dropdown-menu {
  position: relative;
  top:36px;
  right:-13px;
  background-color: #1c2331;
  color: #fff;
  border-radius:5px;
  line-height:1.5rem;
}  
 #mynavAr .dropdown-menu a {
    color: #fff;
}  

#mynavAr .dropdown-submenu .sub {
  position: relative;
  right:153px;
}

#mynavAr .dropdown-submenu a::after {
  transform: rotate(90deg);
  position: absolute;
  left: 4px;
  top: 20px;
  
}

#mynavAr .dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
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


                                  <li class=\"nav-item \"> <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Accueil</a></li>
                                
                                  <li class=\"nav-item dropdown\">
                          
                                      <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Nos traitements
                                          </a>
                                      
                                          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"{{URLROOT}}/homes/soinsDentaires\">Soins dentaires</a></li>
                                          
                                            
                                            <li class=\"dropdown-submenu\">

                                                <a class=\"dropdown-item dropdown-toggle\" >Chirurgie plastique</a>
                                              
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

                                      <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                                      src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                                        <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                                        </a>

                                      <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                                      src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                                        </a>

                                      <a class=\"mr-0 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                                      src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                                        <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                                        </a>  
                                        
                                        <a class=\"mr-0 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
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
                             
                              <ul class=\"dropdown-menu sub\">
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

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a  dir=\"rtl\" class=\"mr-0 px-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
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

                <li class=\"nav-item \"> <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Accueil</a></li>
              
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

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
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


                <li class=\"nav-item \"> <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Accueil</a></li>
              
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

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/ar\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/ar2.png\" class=\"img-fluid rounded-circle\" alt=\"arabic lang\">  
                      <h6 style=\"font-size:15px;\" class=\" black-text text-center\" >AR</h6> 
                      </a>

                    <a class=\"mr-1 pr-0\" href=\"{{URLROOT}}/homes/langue/fr\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/fr.png\" class=\"img-fluid rounded-circle\" alt=\"french lang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text   text-center\" >FR</h6> 
                      </a>

                    <a class=\"mr-0 pr-0\" href=\"{{URLROOT}}/homes/langue/en\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/en.png\" class=\"img-fluid rounded-circle\" alt=\"englishlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >EN</h6> 
                      </a>  
                      
                      <a class=\"mr-0 pl-1\" href=\"{{URLROOT}}/homes/langue/gr\"> <img height=\"25\" width=\"25\" 
                    src=\"{{URLROOT}}/public/img/lang/gr.png\" class=\"img-fluid rounded-circle\" alt=\"germanlang\">  
                      <h6 style=\"font-size:15px;\" class=\"black-text text-center\" >GR</h6> 
                      </a>

                </li>

              </ul>

            </div>
        


</nav>

{% endif %}
                     ", "/inc/navbar.html.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\inc\\navbar.html.twig");
    }
}
