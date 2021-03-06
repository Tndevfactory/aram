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

/* /components/contact/ar/staff.twig */
class __TwigTemplate_c83617711ef6046b5b0f58b19c55cb7428c5439a17052e47773209a70452cf87 extends Template
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
        echo "<!-- STAFF -->
  <section id=\"staff\" class=\"py-5 text-center bg-dark text-white\">
    <div class=\"container\">
      <h1>Notre Equipe</h1>
      <hr>
      <div class=\"row\">
        <div class=\"col-md-3\">
          <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person1.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Jane Doe</h4>
          <small>Marketing Manager</small>
        </div>
        <div class=\"col-md-3\">
          <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person2.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Sara Williams</h4>
          <small>Business Manager</small>
        </div>
        <div class=\"col-md-3\">
          <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person3.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>John Doe</h4>
          <small>CEO</small>
        </div>
        <div class=\"col-md-3\">
          <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person4.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Steve Smith</h4>
          <small>Web Developer</small>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/contact/ar/staff.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  62 => 18,  54 => 13,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- STAFF -->
  <section id=\"staff\" class=\"py-5 text-center bg-dark text-white\">
    <div class=\"container\">
      <h1>Notre Equipe</h1>
      <hr>
      <div class=\"row\">
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person1.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Jane Doe</h4>
          <small>Marketing Manager</small>
        </div>
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person2.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Sara Williams</h4>
          <small>Business Manager</small>
        </div>
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person3.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>John Doe</h4>
          <small>CEO</small>
        </div>
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person4.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Steve Smith</h4>
          <small>Web Developer</small>
        </div>
      </div>
    </div>
  </section>", "/components/contact/ar/staff.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\contact\\ar\\staff.twig");
    }
}
