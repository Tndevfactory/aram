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

/* /components/index/en/home_heading_section.twig */
class __TwigTemplate_524c2ff45a8c94fd82fdd1375fe26eae14d1161b0c5b75a9d6d4b6a4e09ef95d extends Template
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
        echo "<!-- home_heading_section -->
  <section id=\"home-heading\" class=\"p-5 img-fluid\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container pt-5\">
            <h1> Commencez maintenant à retrouver vos cheveux</h1>
            <p class=\"d-none d-md-block\">Votre devis greffe en moins d'une minute</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    ";
    }

    public function getTemplateName()
    {
        return "/components/index/en/home_heading_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- home_heading_section -->
  <section id=\"home-heading\" class=\"p-5 img-fluid\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container pt-5\">
            <h1> Commencez maintenant à retrouver vos cheveux</h1>
            <p class=\"d-none d-md-block\">Votre devis greffe en moins d'une minute</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    ", "/components/index/en/home_heading_section.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/components/index/en/home_heading_section.twig");
    }
}
