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

/* /homes/soinsDentaires.twig */
class __TwigTemplate_44a7638d3beedcffdc3136f2d51db107a66db5abe0df47422f12430fc87cf755 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "/homes/soinsDentaires.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> GREFFE SOURCILS</title>
     
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"container \">
 ";
        // line 10
        $this->loadTemplate("/components/soinsDentaires/soinsDentaires.twig", "/homes/soinsDentaires.twig", 10)->display($context);
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/homes/soinsDentaires.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  64 => 10,  61 => 9,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    <title> GREFFE SOURCILS</title>
     
{% endblock  %}

{% block content %}
<div class=\"container \">
 {% include('/components/soinsDentaires/soinsDentaires.twig') %}
</div>
{% endblock  %}

", "/homes/soinsDentaires.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/homes/soinsDentaires.twig");
    }
}
