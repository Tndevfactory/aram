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
class __TwigTemplate_1e84d6bcb72dd2ef891b6a6f29e3e031a2b5ee70f9a5f8a8f22a8ef81b6794da extends Template
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

<footer  class=\"footer  mt-auto  py-4  font-small \" style=\"color:#E1AD21;background-color:#010203\">
 
      <div class=\"footer-copyright text-center py-2 \">
         <span class=\"font-small \"> Copyright &copy; 
         <span id=\"year\"> </span> 
         <span class=\"font-small \" > <a  class=\"font-small \" href=\"https://tndevfactory.com\" style=\"color:#E1AD21\">  Tn DEV FACTORY </a> </span>
        </span>
        <img class=\"ml-2\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/logo/dmca_premi_badge.png\">
        
  </div>

 

</footer>






 ";
    }

    public function getTemplateName()
    {
        return "./inc/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->

<footer  class=\"footer  mt-auto  py-4  font-small \" style=\"color:#E1AD21;background-color:#010203\">
 
      <div class=\"footer-copyright text-center py-2 \">
         <span class=\"font-small \"> Copyright &copy; 
         <span id=\"year\"> </span> 
         <span class=\"font-small \" > <a  class=\"font-small \" href=\"https://tndevfactory.com\" style=\"color:#E1AD21\">  Tn DEV FACTORY </a> </span>
        </span>
        <img class=\"ml-2\" src=\"{{URLROOT}}/public/img/logo/dmca_premi_badge.png\">
        
  </div>

 

</footer>






 ", "./inc/footer.html.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\inc\\footer.html.twig");
    }
}
