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
class __TwigTemplate_d47b2834d2f6c9e7de43585908f4b3482a8fedcb074fecc610df1ff12415feac extends Template
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
        echo "<footer  class=\"footer  mt-auto  py-4  font-small \" style=\"color:#E1AD21;background-color:#010203\">
 
      <div class=\"footer-copyright text-center py-2 \">
         <span class=\"font-small \"> Copyright &copy; 
         <span id=\"year\"> </span> 
         <span class=\"font-small \" > <a  class=\"font-small \" href=\"https://tndevfactory.com\" style=\"color:#E1AD21\">  Tn DEV FACTORY </a> </span>
        </span>
        
  </div>

 <!--<div class=\"mt-1 text-center\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
        </div>-->

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
<footer  class=\"footer  mt-auto  py-4  font-small \" style=\"color:#E1AD21;background-color:#010203\">
 
      <div class=\"footer-copyright text-center py-2 \">
         <span class=\"font-small \"> Copyright &copy; 
         <span id=\"year\"> </span> 
         <span class=\"font-small \" > <a  class=\"font-small \" href=\"https://tndevfactory.com\" style=\"color:#E1AD21\">  Tn DEV FACTORY </a> </span>
        </span>
        
  </div>

 <!--<div class=\"mt-1 text-center\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
        </div>-->

</footer>






 ", "./inc/footer.html.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/inc/footer.html.twig");
    }
}
