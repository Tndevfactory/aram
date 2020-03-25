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

/* /homes/nosTraitements/soinsDentaires.twig */
class __TwigTemplate_691c6c1573fd1e62a54f7bd340889096ec1ebf34dc511f92522977ad1d9bc621 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/nosTraitements/soinsDentaires.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> soins Dentaires </title>
    <style>
          

          </style>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "


                         ";
        // line 15
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 16
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/fr/soinsDentaires.twig", "/homes/nosTraitements/soinsDentaires.twig", 16)->display($context);
            // line 17
            echo "                            
                          ";
        }
        // line 19
        echo "
                          ";
        // line 20
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 21
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/en/soinsDentaires.twig", "/homes/nosTraitements/soinsDentaires.twig", 21)->display($context);
            // line 22
            echo "                            
                          ";
        }
        // line 24
        echo "
                          ";
        // line 25
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 26
            echo "                             ";
            $this->loadTemplate("/components/nosTraitements/gr/soinsDentaires.twig", "/homes/nosTraitements/soinsDentaires.twig", 26)->display($context);
            // line 27
            echo "                           

                          ";
        }
        // line 29
        echo "  

                          ";
        // line 31
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 32
            echo "                           ";
            $this->loadTemplate("/components/nosTraitements/ar/soinsDentaires.twig", "/homes/nosTraitements/soinsDentaires.twig", 32)->display($context);
            // line 33
            echo "                         
                          ";
        }
        // line 35
        echo "




";
    }

    public function getTemplateName()
    {
        return "/homes/nosTraitements/soinsDentaires.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  112 => 33,  109 => 32,  107 => 31,  103 => 29,  98 => 27,  95 => 26,  93 => 25,  90 => 24,  86 => 22,  83 => 21,  81 => 20,  78 => 19,  74 => 17,  71 => 16,  69 => 15,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    <title> soins Dentaires </title>
    <style>
          

          </style>
{% endblock  %}

{% block content %}



                         {% if LANG == 'fr' %}
                            {% include('/components/nosTraitements/fr/soinsDentaires.twig') %}
                            
                          {% endif %}

                          {% if LANG == 'en' %}
                            {% include('/components/nosTraitements/en/soinsDentaires.twig') %}
                            
                          {% endif %}

                          {% if LANG == 'gr' %}
                             {% include('/components/nosTraitements/gr/soinsDentaires.twig') %}
                           

                          {% endif %}  

                          {% if LANG == 'ar' %}
                           {% include('/components/nosTraitements/ar/soinsDentaires.twig') %}
                         
                          {% endif %}





{% endblock  %}

{# {% switch test %}
\t{% case 1 %}
\t\ttest is 1
\t{% case 2 %}
\t\t{% if othervar == 2 %}
\t\t\ttest is 2
\t\t{% else %}
\t\t\ttest is 2
\t\t{% endif %}
\t{% case 0 %}
\t\ttest is 2
{% endswitch %} #}", "/homes/nosTraitements/soinsDentaires.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/homes/nosTraitements/soinsDentaires.twig");
    }
}
