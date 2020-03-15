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

/* \homes\nosTraitements\chirurgiePlastique\augmentationFesses.twig */
class __TwigTemplate_6b1509b59428240a9fe4d8973dda24004c42cf2519d8f25facd9b4c923753d2d extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> abdo</title>
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
        // line 13
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 14
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/fr/chirurgiePlastique/augmentationFesses.twig", "\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig", 14)->display($context);
            // line 15
            echo "                            
                          ";
        }
        // line 17
        echo "
                          ";
        // line 18
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 19
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/en/chirurgiePlastique/augmentationFesses.twig", "\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig", 19)->display($context);
            // line 20
            echo "                            
                          ";
        }
        // line 22
        echo "
                          ";
        // line 23
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 24
            echo "                              ";
            $this->loadTemplate("/components/nosTraitements/gr/chirurgiePlastique/augmentationFesses.twig", "\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig", 24)->display($context);
            // line 25
            echo "                           
                          ";
        }
        // line 26
        echo "  

                          ";
        // line 28
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 29
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/ar/chirurgiePlastique/augmentationFesses.twig", "\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig", 29)->display($context);
            // line 30
            echo "                         
                          ";
        }
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return "\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  109 => 30,  106 => 29,  104 => 28,  100 => 26,  96 => 25,  93 => 24,  91 => 23,  88 => 22,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    <title> abdo</title>
    <style>
          

          </style>
{% endblock  %}

{% block content %}

                         {% if LANG == 'fr' %}
                            {% include('/components/nosTraitements/fr/chirurgiePlastique/augmentationFesses.twig') %}
                            
                          {% endif %}

                          {% if LANG == 'en' %}
                            {% include('/components/nosTraitements/en/chirurgiePlastique/augmentationFesses.twig') %}
                            
                          {% endif %}

                          {% if LANG == 'gr' %}
                              {% include('/components/nosTraitements/gr/chirurgiePlastique/augmentationFesses.twig') %}
                           
                          {% endif %}  

                          {% if LANG == 'ar' %}
                            {% include('/components/nosTraitements/ar/chirurgiePlastique/augmentationFesses.twig') %}
                         
                          {% endif %}


{% endblock  %}

", "\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\homes\\nosTraitements\\chirurgiePlastique\\augmentationFesses.twig");
    }
}
