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

/* /inc/navbarMegaMenu-responsive.html.twig */
class __TwigTemplate_cac3b4993ddf0e1e8a78e93c5c0f28563c7c5c7df22edc529405ddf2addc9b6f extends Template
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
        echo "<!-- Mega menu responsive  -->

<div class=\"banner-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-s12\">
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark rounded\">
                    <a class=\"navbar-brand\" href=\"#\">Mouri Theme</a>
                   
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbar\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"#\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">about</a>
                            </li>
                            <li class=\"nav-item dropdown menu-area\">
                                <a class=\"nav-link dropdown-toggle\" 
                                href=\"#\" id=\"mega-one\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Services
                                </a>
                                    <div class=\"dropdown-menu mega-area\" aria-labelledby=\"mega-one\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> Web Design </h5>
                                                <a href=\"#\" class=\"dropdown-item\"> html template</a>
                                                <a href=\"#\" class=\"dropdown-item\"> wordpress template</a><a href=\"#\" class=\"dropdown-item\"> joomla template</a>
                                                <a href=\"#\" class=\"dropdown-item\"> blogger template</a>
                                            </div> 
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> Graphics design </h5>
                                                <a href=\"#\" class=\"dropdown-item\"> logo design</a>
                                                <a href=\"#\" class=\"dropdown-item\"> brochure design</a>
                                                <a href=\"#\" class=\"dropdown-item\"> card Design</a>
                                            </div> 
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> company profile</h5>
                                                <p> We are reputed multinational company </p>
                                            </div> 
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> image</h5>
                                                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/showcase/1.jpg\" alt=\"\" style=\"width:100%\">
                                            </div>
                                        </div>
                                        
                                    </div>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
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

    public function getTemplateName()
    {
        return "/inc/navbarMegaMenu-responsive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 47,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Mega menu responsive  -->

<div class=\"banner-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-s12\">
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark rounded\">
                    <a class=\"navbar-brand\" href=\"#\">Mouri Theme</a>
                   
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbar\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"#\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">about</a>
                            </li>
                            <li class=\"nav-item dropdown menu-area\">
                                <a class=\"nav-link dropdown-toggle\" 
                                href=\"#\" id=\"mega-one\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Services
                                </a>
                                    <div class=\"dropdown-menu mega-area\" aria-labelledby=\"mega-one\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> Web Design </h5>
                                                <a href=\"#\" class=\"dropdown-item\"> html template</a>
                                                <a href=\"#\" class=\"dropdown-item\"> wordpress template</a><a href=\"#\" class=\"dropdown-item\"> joomla template</a>
                                                <a href=\"#\" class=\"dropdown-item\"> blogger template</a>
                                            </div> 
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> Graphics design </h5>
                                                <a href=\"#\" class=\"dropdown-item\"> logo design</a>
                                                <a href=\"#\" class=\"dropdown-item\"> brochure design</a>
                                                <a href=\"#\" class=\"dropdown-item\"> card Design</a>
                                            </div> 
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> company profile</h5>
                                                <p> We are reputed multinational company </p>
                                            </div> 
                                            <div class=\"col-sm-6 col-lg-3\">
                                                <h5> image</h5>
                                                <img src=\"{{URLROOT}}/public/img/showcase/1.jpg\" alt=\"\" style=\"width:100%\">
                                            </div>
                                        </div>
                                        
                                    </div>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
                            </li>
                        </ul>
                       
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
", "/inc/navbarMegaMenu-responsive.html.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\inc\\navbarMegaMenu-responsive.html.twig");
    }
}
