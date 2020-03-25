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

/* /homes/data/index/ar/homeIconSection.twig */
class __TwigTemplate_8e2ba0d93686d3cce3b5f1cfd14c613d248dcfab3cad1bdc4116c9e6078c554b extends Template
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
  <section  id=\"home-icons\" class=\" my-lg-3 py-lg-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-12 col-xl-4 mb-4 text-center\" data-aos=\"fade-right\">
        
          <i class=\"fas fa-user-md fa-3x mb-2\"></i>
          <h3>Techniques de pointe</h3>
          <p>La technique de greffe DHI est rapide, efficace, sans cicatrices</p>
        </div>
       
        <div class=\"col-12 col-xl-4  text-center\" data-aos=\"fade-up\">
     
          <i class=\"fas fa-euro-sign fa-3x mb-2\"></i>
          <h3>Jusqu'à 70% moins cher</h3>
          <p>Votre greffe de cheveux moins chère pour un résultat parfait</p>
        </div>
       
         <div class=\"col-12 col-xl-4  text-center\" data-aos=\"fade-left\">
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
        return "/homes/data/index/ar/homeIconSection.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<!--home_icon_section  -->
  <section  id=\"home-icons\" class=\" my-lg-3 py-lg-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-12 col-xl-4 mb-4 text-center\" data-aos=\"fade-right\">
        
          <i class=\"fas fa-user-md fa-3x mb-2\"></i>
          <h3>Techniques de pointe</h3>
          <p>La technique de greffe DHI est rapide, efficace, sans cicatrices</p>
        </div>
       
        <div class=\"col-12 col-xl-4  text-center\" data-aos=\"fade-up\">
     
          <i class=\"fas fa-euro-sign fa-3x mb-2\"></i>
          <h3>Jusqu'à 70% moins cher</h3>
          <p>Votre greffe de cheveux moins chère pour un résultat parfait</p>
        </div>
       
         <div class=\"col-12 col-xl-4  text-center\" data-aos=\"fade-left\">
          <i class=\"fas fa-infinity fa-3x mb-2\"></i>
          <h3>Séjour 100% tout compris</h3>
          <p>Hair Expert assure votre prise en charge en Turquie de A à Z</p>
        </div>
      </div>
    </div>
  </section>", "/homes/data/index/ar/homeIconSection.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/ar/homeIconSection.twig");
    }
}
