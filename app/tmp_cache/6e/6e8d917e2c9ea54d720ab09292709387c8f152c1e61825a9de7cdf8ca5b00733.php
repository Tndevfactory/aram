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

/* /inc/navbarSubMenuOnhover.html.twig */
class __TwigTemplate_5bb43bbab6f2c5855abed6d099670891f6b43f70aa440e452095e5622ab3098e extends Template
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

.container-fluid {
  margin: 0;
  padding: 0;
  
}

.container-fluid .row {
    margin: 0;
    padding: 0;
  }


";
        // line 22
        echo "
";
        // line 28
        echo "


.megamenu {
  position: static;
  width: 100%;
}

.megamenu .dropdown-menu {
  border: none;
  width: 100%;
  }

</style>



<nav class=\"navbar navbar-expand-md navbar-dark bg-dark py-3 shadow-sm fixed-top\">

  <a href=\"#\" class=\"navbar-brand font-weight-bold mr-auto\">Logo</a>

  <div id=\"navbarContent\" class=\"collapse navbar-collapse order-sm-12 order-lg-1\">
    <ul class=\"navbar-nav ml-auto\">

      <!-- Megamenu-->
      <li class=\"nav-item dropdown megamenu\"><a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">Dropdown Menu</a>
        
        <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">

          <div class=\"\" id=\"sub\">
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
      <li class=\"nav-item\"><a href=\"\" class=\"nav-link font-weight-bold text-uppercase\">About</a></li>
      <li class=\"nav-item\"><a href=\"\" class=\"nav-link font-weight-bold text-uppercase\">Services</a></li>
      <li class=\"nav-item\"><a href=\"\" class=\"nav-link font-weight-bold text-uppercase\">Contact</a></li>
    </ul>
  </div>  

  <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler order-md-1\">
          <span class=\"navbar-toggler-icon\"></span>
      </button>

</nav>



<script>
/*
function toggleDropdown (e) {
  const _d = \$(e.target).closest('.dropdown'),
    _m = \$('.dropdown-menu', _d);
  setTimeout(function(){
    const shouldOpen = e.type !== 'click' && _d.is(':hover');
    _m.toggleClass('show', shouldOpen);
    _d.toggleClass('show', shouldOpen);
    \$('[data-toggle=\"dropdown\"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
}

\$('body')
  .on('mouseenter mouseleave','.dropdown',toggleDropdown)
  .on('click', '.dropdown-menu a', toggleDropdown);*/

  </script>";
    }

    public function getTemplateName()
    {
        return "/inc/navbarSubMenuOnhover.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  53 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

.container-fluid {
  margin: 0;
  padding: 0;
  
}

.container-fluid .row {
    margin: 0;
    padding: 0;
  }


{# .dropdown {
  &:hover {
    > .dropdown-menu {
      display: block;
    }
  }
} #}

{# .dropdown:hover >.dropdown-menu{
  
      display: block;
   
} #}



.megamenu {
  position: static;
  width: 100%;
}

.megamenu .dropdown-menu {
  border: none;
  width: 100%;
  }

</style>



<nav class=\"navbar navbar-expand-md navbar-dark bg-dark py-3 shadow-sm fixed-top\">

  <a href=\"#\" class=\"navbar-brand font-weight-bold mr-auto\">Logo</a>

  <div id=\"navbarContent\" class=\"collapse navbar-collapse order-sm-12 order-lg-1\">
    <ul class=\"navbar-nav ml-auto\">

      <!-- Megamenu-->
      <li class=\"nav-item dropdown megamenu\"><a id=\"megamenu\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle font-weight-bold text-uppercase\">Dropdown Menu</a>
        
        <div aria-labelledby=\"megamenu\" class=\"dropdown-menu border-0 p-0 m-0\">

          <div class=\"\" id=\"sub\">
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
      <li class=\"nav-item\"><a href=\"\" class=\"nav-link font-weight-bold text-uppercase\">About</a></li>
      <li class=\"nav-item\"><a href=\"\" class=\"nav-link font-weight-bold text-uppercase\">Services</a></li>
      <li class=\"nav-item\"><a href=\"\" class=\"nav-link font-weight-bold text-uppercase\">Contact</a></li>
    </ul>
  </div>  

  <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler order-md-1\">
          <span class=\"navbar-toggler-icon\"></span>
      </button>

</nav>



<script>
/*
function toggleDropdown (e) {
  const _d = \$(e.target).closest('.dropdown'),
    _m = \$('.dropdown-menu', _d);
  setTimeout(function(){
    const shouldOpen = e.type !== 'click' && _d.is(':hover');
    _m.toggleClass('show', shouldOpen);
    _d.toggleClass('show', shouldOpen);
    \$('[data-toggle=\"dropdown\"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
}

\$('body')
  .on('mouseenter mouseleave','.dropdown',toggleDropdown)
  .on('click', '.dropdown-menu a', toggleDropdown);*/

  </script>", "/inc/navbarSubMenuOnhover.html.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\inc\\navbarSubMenuOnhover.html.twig");
    }
}
