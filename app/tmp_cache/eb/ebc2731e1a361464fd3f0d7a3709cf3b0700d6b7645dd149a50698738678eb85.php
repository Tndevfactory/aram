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

/* /components/nosTtraitements/gr/soinsDentaires.twig */
class __TwigTemplate_a9f1dbcd017dc365556db50804204ca904c7cdd8be738929b0185271e7d56070 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/components/nosTtraitements/gr/soinsDentaires.twig", 1);
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

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"container \">
         ";
        // line 9
        $this->loadTemplate("/components/soinsDentaires/soinsDentaires.twig", "/components/nosTtraitements/gr/soinsDentaires.twig", 9)->display($context);
        // line 10
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "/components/nosTtraitements/gr/soinsDentaires.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
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

", "/components/nosTtraitements/gr/soinsDentaires.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\nosTtraitements\\gr\\soinsDentaires.twig");
    }
}
