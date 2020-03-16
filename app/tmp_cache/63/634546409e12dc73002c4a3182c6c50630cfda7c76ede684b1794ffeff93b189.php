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
class __TwigTemplate_c982b606aace8e804f62d2ca9ab9ccc64d34adc6b83a8760ae558b7ac7eef6b4 extends Template
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

<style>
.headerAR {
 
  font-size: 100%;
  text-align:right;
  padding-right:15px;
}

";
        // line 12
        echo "
</style>


";
        // line 16
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 17
            echo "
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
            </div>

";
        }
        // line 36
        echo "
";
        // line 37
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 38
            echo "
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
            </div>


";
        }
        // line 58
        echo "
";
        // line 59
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 60
            echo "
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
</div>


";
        }
        // line 80
        echo "
";
        // line 81
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 82
            echo "            <div dir=\"rtl\" class=\"jumbotron py-2 mb-0 grey darken-4 headerAR\">
            <div class=\"row\">
            <i class=\"\"></i>

             <span  dir=\"rtl\" class=\"h4 mr-2 pr-3 white-text text-uppercase \"> مستشفى ارام</span > 
             <span> <i style=\"font-size:24px\"  class=\" pr-2 animated tada  white-text fas fa-phone  \"> </i> </span>
             <span  style=\"font-size:29px\" dir=\"ltr\" class=\" px-2  h3 pr-2 white-text\"> +262 269 33 87 99 </span> 


            <a href=\"#\" >  <span class=\" pl-2 white-text \"> <i  class=\"fab fa-facebook-messenger fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" pl-2 white-text\"> <i class=\" far fa-envelope fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" pl-2 white-text\"><i class=\" fab fa-whatsapp fa-2x\"></i></span> </a>
           
 
            </div>
            </div>


";
        }
    }

    public function getTemplateName()
    {
        return "/inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 82,  135 => 81,  132 => 80,  110 => 60,  108 => 59,  105 => 58,  83 => 38,  81 => 37,  78 => 36,  57 => 17,  55 => 16,  49 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<style>
.headerAR {
 
  font-size: 100%;
  text-align:right;
  padding-right:15px;
}

{# dir=\"rtl\"  #}

</style>


{% if LANG == 'fr' %}

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
            </div>

{% endif %}

{% if LANG == 'en' %}

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
            </div>


{% endif %}

{% if LANG == 'gr' %}

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
</div>


{% endif %}

{% if LANG == 'ar' %}
            <div dir=\"rtl\" class=\"jumbotron py-2 mb-0 grey darken-4 headerAR\">
            <div class=\"row\">
            <i class=\"\"></i>

             <span  dir=\"rtl\" class=\"h4 mr-2 pr-3 white-text text-uppercase \"> مستشفى ارام</span > 
             <span> <i style=\"font-size:24px\"  class=\" pr-2 animated tada  white-text fas fa-phone  \"> </i> </span>
             <span  style=\"font-size:29px\" dir=\"ltr\" class=\" px-2  h3 pr-2 white-text\"> +262 269 33 87 99 </span> 


            <a href=\"#\" >  <span class=\" pl-2 white-text \"> <i  class=\"fab fa-facebook-messenger fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" pl-2 white-text\"> <i class=\" far fa-envelope fa-2x\"></i> </span> </a>
            <a href=\"#\" >  <span class=\" pl-2 white-text\"><i class=\" fab fa-whatsapp fa-2x\"></i></span> </a>
           
 
            </div>
            </div>


{% endif %}
", "/inc/header.html.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/inc/header.html.twig");
    }
}
