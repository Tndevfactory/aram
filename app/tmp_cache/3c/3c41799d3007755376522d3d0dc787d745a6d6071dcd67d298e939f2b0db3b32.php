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

/* ./inc/footer.html.twig */
class __TwigTemplate_de0dfe677166c0bba4a6e3362f880182bd0ed7e8bc57a260c22b9750e29f4911 extends Template
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
        echo "<!-- Footer -->


";
        // line 6
        echo "
";
        // line 8
        echo "<footer  class=\"footer  mt-auto  py-4 white-text font-small grey darken-4\">
 
      <div class=\"footer-copyright text-center py-2 white-text\">
         <span class=\"text-muted\"> Copyright &copy; 
         <span id=\"year\"> </span> 
         <span class=\"text-muted\" > <a  class=\"text-muted\" href=\"https://tndevfactory.com\">  Tn DEV FACTORY </a> </span>
        </span>
        
  </div>

 <div class=\"mt-1 text-center\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
        </div>

</footer>






 ";
    }

    public function getTemplateName()
    {
        return "./inc/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->


{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}

{# footer fixed-bottom mt-auto  py-4 white-text font-small #}
<footer  class=\"footer  mt-auto  py-4 white-text font-small grey darken-4\">
 
      <div class=\"footer-copyright text-center py-2 white-text\">
         <span class=\"text-muted\"> Copyright &copy; 
         <span id=\"year\"> </span> 
         <span class=\"text-muted\" > <a  class=\"text-muted\" href=\"https://tndevfactory.com\">  Tn DEV FACTORY </a> </span>
        </span>
        
  </div>

 <div class=\"mt-1 text-center\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
        </div>

</footer>






 ", "./inc/footer.html.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/inc/footer.html.twig");
    }
}
