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

/* /inc/header.html.twig */
class __TwigTemplate_1ff1b5d284fa0018f686edadd374645f2cd4c894df5823f9095dcf81fd6840ff extends Template
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
        // line 5
        echo "
";
        // line 7
        echo "<div class=\"jumbotron py-2 mb-0 grey darken-4 \">
<div class=\"row\">
<i class=\"\"></i>

             <span  class=\"h4 px-3 white-text text-uppercase \"> Aram Clinic</span > 
             <span> <i class=\"animated tada  white-text fas fa-phone-volume fa-2x  \"> </i> </span>
             <span class=\" h3 pl-2 white-text\"> +262 269 33 87 99 </span> 


            <a href=\"#\" >  <span class=\" h6 pl-2 white-text \"> <i class=\"fab fa-facebook-messenger fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" h6 pl-2 white-text\"> <i class=\" far fa-envelope fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" h6 pl-2 white-text\"><i class=\" fab fa-whatsapp fa-2x\"></i></span> </a>
           
 
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/inc/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}

{# style=\"background-color:#1A5EA4\"  #}
<div class=\"jumbotron py-2 mb-0 grey darken-4 \">
<div class=\"row\">
<i class=\"\"></i>

             <span  class=\"h4 px-3 white-text text-uppercase \"> Aram Clinic</span > 
             <span> <i class=\"animated tada  white-text fas fa-phone-volume fa-2x  \"> </i> </span>
             <span class=\" h3 pl-2 white-text\"> +262 269 33 87 99 </span> 


            <a href=\"#\" >  <span class=\" h6 pl-2 white-text \"> <i class=\"fab fa-facebook-messenger fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" h6 pl-2 white-text\"> <i class=\" far fa-envelope fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" h6 pl-2 white-text\"><i class=\" fab fa-whatsapp fa-2x\"></i></span> </a>
           
 
</div>
</div>", "/inc/header.html.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/inc/header.html.twig");
    }
}
