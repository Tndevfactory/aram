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

/* /homes/data/index/fr/infoSection.twig */
class __TwigTemplate_cc98230f6ba6ad281dcb70f30abd228e589952836c6637b66fa521ca6634211c extends Template
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
 <!-- info_section -->
  <section id=\"info\" class=\"py-5\">
    <div class=\"container\">

      <div class=\"row\">
       
        <div class=\"col-md-6 align-self-center\" data-aos=\"fade-right\">
          <h3>Les docteurs de ARAM CLINIC</h3>
          <p>Hair Expert a choisit les meilleurs médecins turcs spécialisés dans la greffe cheveux. Nos médecins partenaires opèrent dans la meilleure clinjque d'Istanbul</p>
          <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/qui_sommes_nous\" class=\" z-depth-2 btn btn-outline-amber  darken-3 btn-lg\">En savoir plus </a>
        </div>

        <div class=\"col-md-6 p-2\" data-aos=\"fade-left\">
          <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/info_section/expert.jpg\" alt=\"\" class=\"img-fluid\">
        </div>

      </div>

    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/homes/data/index/fr/infoSection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 <!-- info_section -->
  <section id=\"info\" class=\"py-5\">
    <div class=\"container\">

      <div class=\"row\">
       
        <div class=\"col-md-6 align-self-center\" data-aos=\"fade-right\">
          <h3>Les docteurs de ARAM CLINIC</h3>
          <p>Hair Expert a choisit les meilleurs médecins turcs spécialisés dans la greffe cheveux. Nos médecins partenaires opèrent dans la meilleure clinjque d'Istanbul</p>
          <a href=\"{{URLROOT}}/homes/qui_sommes_nous\" class=\" z-depth-2 btn btn-outline-amber  darken-3 btn-lg\">En savoir plus </a>
        </div>

        <div class=\"col-md-6 p-2\" data-aos=\"fade-left\">
          <img src=\"{{URLROOT}}/public/img/info_section/expert.jpg\" alt=\"\" class=\"img-fluid\">
        </div>

      </div>

    </div>
  </section>", "/homes/data/index/fr/infoSection.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/fr/infoSection.twig");
    }
}
