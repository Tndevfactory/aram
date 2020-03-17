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

/* /components/index/fr/homeHeadingSection.twig */
class __TwigTemplate_3695150fe762da9db51870392123e5a6711dd34fced0ec1261d1d8e7acd46ebf extends Template
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
        return "/components/index/fr/homeHeadingSection.twig";
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
    ", "/components/index/fr/homeHeadingSection.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\components\\index\\fr\\homeHeadingSection.twig");
    }
}
