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

/* /components/index/ar/home_icon_section.twig */
class __TwigTemplate_bcaa06c4af53a3e11a575d837c6b4e3b3217260ffe0cd855de397f1555c8c0c0 extends Template
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


<!--home_icon_section  -->
  <section  id=\"home-icons\" class=\" pb-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-md-4 mb-4 text-center\">
        
          <i class=\"fas fa-user-md fa-3x mb-2\"></i>
          <h3>Techniques de pointe</h3>
          <p>La technique de greffe DHI est rapide, efficace, sans cicatrices</p>
        </div>
       
        <div class=\"col-md-4 mb-4 text-center\">
     
          <i class=\"fas fa-euro-sign fa-3x mb-2\"></i>
          <h3>Jusqu'à 70% moins cher</h3>
          <p>Votre greffe de cheveux moins chère pour un résultat parfait</p>
        </div>
       
         <div class=\"col-md-4 mb-4 text-center\">
          <i class=\"fas fa-infinity fa-3x mb-2\"></i>
          <h3>Séjour 100% tout compris</h3>
          <p>Hair Expert assure votre prise en charge en Turquie de A à Z</p>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/index/ar/home_icon_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<!--home_icon_section  -->
  <section  id=\"home-icons\" class=\" pb-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-md-4 mb-4 text-center\">
        
          <i class=\"fas fa-user-md fa-3x mb-2\"></i>
          <h3>Techniques de pointe</h3>
          <p>La technique de greffe DHI est rapide, efficace, sans cicatrices</p>
        </div>
       
        <div class=\"col-md-4 mb-4 text-center\">
     
          <i class=\"fas fa-euro-sign fa-3x mb-2\"></i>
          <h3>Jusqu'à 70% moins cher</h3>
          <p>Votre greffe de cheveux moins chère pour un résultat parfait</p>
        </div>
       
         <div class=\"col-md-4 mb-4 text-center\">
          <i class=\"fas fa-infinity fa-3x mb-2\"></i>
          <h3>Séjour 100% tout compris</h3>
          <p>Hair Expert assure votre prise en charge en Turquie de A à Z</p>
        </div>
      </div>
    </div>
  </section>", "/components/index/ar/home_icon_section.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\index\\ar\\home_icon_section.twig");
    }
}
