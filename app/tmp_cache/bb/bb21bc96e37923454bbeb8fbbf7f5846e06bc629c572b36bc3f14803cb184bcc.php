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

/* /components/index/fr/searchForm.twig */
class __TwigTemplate_b10fc6549f2596f8006e6a496d66d6acb160a9801170fb8e93f15223840a5873 extends Template
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
        echo "<!-- search form-->

<style>
#searchForm {
  position:static;
  

}

#searchForm #searchButton{
  background:transparent;
  box-shadow:none;
  display:inline;
  margin-left:-18px;
  margin-top:-6px;
  padding:5px;

}
#searchForm #searchButton i{
  font-size:22px;
  
}

 </style>

";
        // line 27
        echo "<div class=\"row\">
  <div class=\"container\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">

          <form id=\"searchForm\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" 
          method=\"post\" class=\" box text-center form  py-4 px-3 grey z-depth-1 \" >
            
             <div class=\"input-group \">
                
                <input type=\"text\" class=\"form-control\" placeholder=\"search...\" >
               
                <div class=\"input-group-append\">
                  <button id=\"searchButton\" class=\"btn z-depth-0\" type=\"button\"><i  class=\"fas fa-search \"></i></button>
                </div>
                
              </div>    
             
               
          </form>
    </div> 
  </div> 
</div> 
 <script>
     
 </script>";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/searchForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 31,  64 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- search form-->

<style>
#searchForm {
  position:static;
  

}

#searchForm #searchButton{
  background:transparent;
  box-shadow:none;
  display:inline;
  margin-left:-18px;
  margin-top:-6px;
  padding:5px;

}
#searchForm #searchButton i{
  font-size:22px;
  
}

 </style>

{# visible on md and up and below d-none d-lg-block #}
<div class=\"row\">
  <div class=\"container\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">

          <form id=\"searchForm\" action=\"{{URLROOT}}/homes/newsletter\" 
          method=\"post\" class=\" box text-center form  py-4 px-3 grey z-depth-1 \" >
            
             <div class=\"input-group \">
                
                <input type=\"text\" class=\"form-control\" placeholder=\"search...\" >
               
                <div class=\"input-group-append\">
                  <button id=\"searchButton\" class=\"btn z-depth-0\" type=\"button\"><i  class=\"fas fa-search \"></i></button>
                </div>
                
              </div>    
             
               
          </form>
    </div> 
  </div> 
</div> 
 <script>
     
 </script>", "/components/index/fr/searchForm.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/searchForm.twig");
    }
}
