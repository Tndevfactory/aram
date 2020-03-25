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

/* /homes/data/index/ar/homeIsoAward.twig */
class __TwigTemplate_f60a14bfa1ba9ee7b8025f07e0f78bf06bfd19aada44010dd1ad521bc54cc5cb extends Template
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
<!-- counterup jquery animated counter -->
<style>

#home-IsoLogo img {
    width: 50%;
  }
  

@media (max-width: 991px) {
  #home-IsoLogo {
    width: 100%;
    margin: auto auto;
  }
  
}
</style>

<!--home_icon_section  -->
  <section  id=\"home-IsoLogo\" class=\"  my-lg-3 py-lg-5\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-right\">
          <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/isoLogo/award-logo.png\" class=\" img-fluid\"/>
        </div>
       
        <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-up\">
          <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/isoLogo/iso-logo.png\" class=\"img-fluid\"/>
        </div>
      
         <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-up\">
           <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/isoLogo/realself-logo.png\" class=\" img-fluid\"/>
        </div>
       
         <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-left\">
           <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/isoLogo/medicalpark.png\" class=\" img-fluid\"/>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/homes/data/index/ar/homeIsoAward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  76 => 32,  69 => 28,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- counterup jquery animated counter -->
<style>

#home-IsoLogo img {
    width: 50%;
  }
  

@media (max-width: 991px) {
  #home-IsoLogo {
    width: 100%;
    margin: auto auto;
  }
  
}
</style>

<!--home_icon_section  -->
  <section  id=\"home-IsoLogo\" class=\"  my-lg-3 py-lg-5\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-right\">
          <img src=\"{{URLROOT}}/public/img/isoLogo/award-logo.png\" class=\" img-fluid\"/>
        </div>
       
        <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-up\">
          <img src=\"{{URLROOT}}/public/img/isoLogo/iso-logo.png\" class=\"img-fluid\"/>
        </div>
      
         <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-up\">
           <img src=\"{{URLROOT}}/public/img/isoLogo/realself-logo.png\" class=\" img-fluid\"/>
        </div>
       
         <div class=\"col-sm-3 col-xl-3 mb-4 text-center\" data-aos=\"fade-left\">
           <img src=\"{{URLROOT}}/public/img/isoLogo/medicalpark.png\" class=\" img-fluid\"/>
        </div>
      </div>
    </div>
  </section>", "/homes/data/index/ar/homeIsoAward.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/ar/homeIsoAward.twig");
    }
}
