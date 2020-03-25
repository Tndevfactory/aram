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

/* /components/index/fr/info_section.twig */
class __TwigTemplate_58562522820369d17f255d3cd936510da57dbffbd76c0dd0943f564303d0f105 extends Template
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
";
        // line 4
        echo "
";
        // line 6
        echo "
 <!-- info_section -->
  <section id=\"info\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 align-self-center\">
          <h3>Les docteurs de ARAM CLINIC</h3>
          <p>Hair Expert a choisit les meilleurs médecins turcs spécialisés dans la greffe cheveux. Nos médecins partenaires opèrent dans la meilleure clinjque d'Istanbul</p>
         
         
          <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/qui_sommes_nous\" class=\" z-depth-2 btn btn-outline-amber  darken-3 btn-lg\">En savoir plus </a>
         
        </div>
        <div class=\"col-md-6 p-2\">
        
          <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/info_section/expert.jpg\" alt=\"\" class=\"img-fluid\">
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/info_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  55 => 16,  43 => 6,  40 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}

{# #ff8f00 amber darken-3 #}

 <!-- info_section -->
  <section id=\"info\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 align-self-center\">
          <h3>Les docteurs de ARAM CLINIC</h3>
          <p>Hair Expert a choisit les meilleurs médecins turcs spécialisés dans la greffe cheveux. Nos médecins partenaires opèrent dans la meilleure clinjque d'Istanbul</p>
         
         
          <a href=\"{{URLROOT}}/homes/qui_sommes_nous\" class=\" z-depth-2 btn btn-outline-amber  darken-3 btn-lg\">En savoir plus </a>
         
        </div>
        <div class=\"col-md-6 p-2\">
        
          <img src=\"{{URLROOT}}/public/img/info_section/expert.jpg\" alt=\"\" class=\"img-fluid\">
        </div>
      </div>
    </div>
  </section>", "/components/index/fr/info_section.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/components/index/fr/info_section.twig");
    }
}
