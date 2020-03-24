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

/* \homes\besoins\fr\visage\rides.twig */
class __TwigTemplate_537ce187e3d2df259903b7378481e7a13dfd126e85980720fadf2c513163aedc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo " 
 
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo " <!-- besoins/fr/ride-->
  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
                
          <h1>";
        // line 10
        echo twig_escape_filter($this->env, ($context["LANG"] ?? null), "html", null, true);
        echo "</h1>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
        </div>
        <div class=\"col-md-6\">
          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" class=\"img-fluid rounded-circle d-none d-md-block about-img\">
        </div>
      </div>
    </div>
  </section>

  ";
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> besoins/fr/ride </title> ";
    }

    public function getTemplateName()
    {
        return "\\homes\\besoins\\fr\\visage\\rides.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 3,  67 => 22,  52 => 10,  44 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 
 
{% block title %}  <title> besoins/fr/ride </title> {% endblock  %}
 <!-- besoins/fr/ride-->
  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
                
          <h1>{{LANG}}</h1>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
        </div>
        <div class=\"col-md-6\">
          <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" class=\"img-fluid rounded-circle d-none d-md-block about-img\">
        </div>
      </div>
    </div>
  </section>

  ", "\\homes\\besoins\\fr\\visage\\rides.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\homes\\besoins\\fr\\visage\\rides.twig");
    }
}
