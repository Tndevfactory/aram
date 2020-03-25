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

/* /inc/navbarBlocksubmenu.html.twig */
class __TwigTemplate_44d237401d0e3f65da942f536f66ab714b67502b5349dfe7a96582873306c1aa extends Template
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
        echo "<style>


.megamenu {
  position: static;
  width: 100%;
}

.megamenu .dropdown-menu {
  border: none;
  width: 100%;
  }

</style>



<nav id=\"navbarBlocksubmenu\" class=\"navbar navbar-expand-md navbar-dark bg-dark py-3 shadow-sm fixed-top\">

  <a href=\"#\" class=\"navbar-brand font-weight-bold mr-auto\">Logo</a>

  <div id=\"navbarContent\" class=\"collapse navbar-collapse order-sm-12 order-lg-1\">
    <div class=\"container\" >
      <ul class=\"navbar-nav ml-auto\">

        <!-- Megamenu1 LINK1 level0-->
        <li class=\"nav-item dropdown megamenu\">
        
          <a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">vos besoins
          </a>
          
          <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">
            <div id=\"sub\">
              <div class=\"row bg-dark text-light rounded-0 m-0 shadow-sm\">
                <div class=\"col-12\">
                  <div class=\"py-1\">
                    <div class=\"container\" id=\"subrow\">
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                         <!-- subMegamenu1 visage level1-->
                          <li class=\"nav-item dropdown-submenu megamenu\">
                            <a id=\"submegamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle \">Visage
                            </a>
                          
                            ";
        // line 58
        echo "                          </li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Poitrine</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Corps</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Cheveux</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Dents</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Fertilité</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </li>

        <!-- Megamenu2 LINK2 level0-->
        <li class=\"nav-item dropdown megamenu\">
        
          <a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">nos solutions
          </a>
          
          <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">

            <div id=\"sub\">
              <div class=\"row bg-dark text-light rounded-0 m-0 shadow-sm\">
                <div class=\"col-12\">
                  <div class=\"p-4\">
                    <div class=\"row\" id=\"subrow\">
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 1</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0\">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 2</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 3</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 4</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </li>

        <!-- Megamenu3 LINK3 level0-->
        <li class=\"nav-item dropdown megamenu\">
        
          <a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">contact 
          </a>
          
          <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">

            <div id=\"sub\">
              <div class=\"row bg-dark text-light rounded-0 m-0 shadow-sm\">
                <div class=\"col-12\">
                  <div class=\"p-4\">
                    <div class=\"row\" id=\"subrow\">
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 1</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0\">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 2</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 3</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 4</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </li>

      </ul>
    </div>  
  </div>  

  <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler order-md-1\">
          <span class=\"navbar-toggler-icon\"></span>
      </button>

</nav>



";
    }

    public function getTemplateName()
    {
        return "/inc/navbarBlocksubmenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 58,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>


.megamenu {
  position: static;
  width: 100%;
}

.megamenu .dropdown-menu {
  border: none;
  width: 100%;
  }

</style>



<nav id=\"navbarBlocksubmenu\" class=\"navbar navbar-expand-md navbar-dark bg-dark py-3 shadow-sm fixed-top\">

  <a href=\"#\" class=\"navbar-brand font-weight-bold mr-auto\">Logo</a>

  <div id=\"navbarContent\" class=\"collapse navbar-collapse order-sm-12 order-lg-1\">
    <div class=\"container\" >
      <ul class=\"navbar-nav ml-auto\">

        <!-- Megamenu1 LINK1 level0-->
        <li class=\"nav-item dropdown megamenu\">
        
          <a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">vos besoins
          </a>
          
          <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">
            <div id=\"sub\">
              <div class=\"row bg-dark text-light rounded-0 m-0 shadow-sm\">
                <div class=\"col-12\">
                  <div class=\"py-1\">
                    <div class=\"container\" id=\"subrow\">
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                         <!-- subMegamenu1 visage level1-->
                          <li class=\"nav-item dropdown-submenu megamenu\">
                            <a id=\"submegamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle \">Visage
                            </a>
                          
                            {# <div aria-labelledby=\"submegamenu\" class=\"dropdown-menu border-0 p-0 m-0\">
                              <div id=\"sub\">
                                <div class=\"row bg-dark text-light rounded-0 m-0 shadow-sm\">
                                  <div class=\"col-12\">
                                    <div class=\"py-1\">
                                      <div class=\"container\" id=\"subrow\">
                                          test
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> #}
                          </li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Poitrine</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Corps</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Cheveux</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Dents</a></li>
                        </ul>
                      </div>
                      <div class=\"col-sm-4 col-lg-2 mb-4\">
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Fertilité</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </li>

        <!-- Megamenu2 LINK2 level0-->
        <li class=\"nav-item dropdown megamenu\">
        
          <a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">nos solutions
          </a>
          
          <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">

            <div id=\"sub\">
              <div class=\"row bg-dark text-light rounded-0 m-0 shadow-sm\">
                <div class=\"col-12\">
                  <div class=\"p-4\">
                    <div class=\"row\" id=\"subrow\">
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 1</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0\">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 2</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 3</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 4</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </li>

        <!-- Megamenu3 LINK3 level0-->
        <li class=\"nav-item dropdown megamenu\">
        
          <a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">contact 
          </a>
          
          <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">

            <div id=\"sub\">
              <div class=\"row bg-dark text-light rounded-0 m-0 shadow-sm\">
                <div class=\"col-12\">
                  <div class=\"p-4\">
                    <div class=\"row\" id=\"subrow\">
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 1</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0\">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"#\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 2</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                        
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 3</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                      <div class=\"col-sm-6 col-lg-3 mb-4\">
                        <h6 class=\"font-weight-bold text-uppercase\">Heading 4</h6>
                        <ul class=\"list-unstyled\">
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Unique Features</a></li>
                          <li class=\"nav-item\"><a href=\"\" class=\"nav-link text-small pb-0 \">Image Responsive</a></li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </li>

      </ul>
    </div>  
  </div>  

  <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler order-md-1\">
          <span class=\"navbar-toggler-icon\"></span>
      </button>

</nav>



", "/inc/navbarBlocksubmenu.html.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\inc\\navbarBlocksubmenu.html.twig");
    }
}
