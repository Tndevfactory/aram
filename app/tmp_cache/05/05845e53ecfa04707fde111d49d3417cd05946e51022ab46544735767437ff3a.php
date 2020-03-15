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

/* \homes\qui_sommes_nous.twig */
class __TwigTemplate_90a7f2df3a0680585e233600042c6795081a249c530ab3c2fe6606f4fa70b141 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\qui_sommes_nous.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> QUI SOMMES NOUS </title>
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
        // line 14
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 15
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/fr/page_header.twig", "\\homes\\qui_sommes_nous.twig", 15)->display($context);
            // line 16
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/fr/about_section.twig", "\\homes\\qui_sommes_nous.twig", 16)->display($context);
            // line 17
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/fr/icons_boxes.twig", "\\homes\\qui_sommes_nous.twig", 17)->display($context);
            // line 18
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/fr/testimonial.twig", "\\homes\\qui_sommes_nous.twig", 18)->display($context);
            // line 19
            echo "                          ";
        }
        // line 20
        echo "
                          ";
        // line 21
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 22
            echo "                             ";
            $this->loadTemplate("/components/qui_somme_nous/en/page_header.twig", "\\homes\\qui_sommes_nous.twig", 22)->display($context);
            // line 23
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/en/about_section.twig", "\\homes\\qui_sommes_nous.twig", 23)->display($context);
            // line 24
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/en/icons_boxes.twig", "\\homes\\qui_sommes_nous.twig", 24)->display($context);
            // line 25
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/en/testimonial.twig", "\\homes\\qui_sommes_nous.twig", 25)->display($context);
            // line 26
            echo "                          ";
        }
        // line 27
        echo "
                          ";
        // line 28
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 29
            echo "                              ";
            $this->loadTemplate("/components/qui_somme_nous/gr/page_header.twig", "\\homes\\qui_sommes_nous.twig", 29)->display($context);
            // line 30
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/gr/about_section.twig", "\\homes\\qui_sommes_nous.twig", 30)->display($context);
            // line 31
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/gr/icons_boxes.twig", "\\homes\\qui_sommes_nous.twig", 31)->display($context);
            // line 32
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/gr/testimonial.twig", "\\homes\\qui_sommes_nous.twig", 32)->display($context);
            // line 33
            echo "
                          ";
        }
        // line 34
        echo "  

                          ";
        // line 36
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 37
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/ar/page_header.twig", "\\homes\\qui_sommes_nous.twig", 37)->display($context);
            // line 38
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/ar/about_section.twig", "\\homes\\qui_sommes_nous.twig", 38)->display($context);
            // line 39
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/ar/icons_boxes.twig", "\\homes\\qui_sommes_nous.twig", 39)->display($context);
            // line 40
            echo "                            ";
            $this->loadTemplate("/components/qui_somme_nous/ar/testimonial.twig", "\\homes\\qui_sommes_nous.twig", 40)->display($context);
            // line 41
            echo "                          ";
        }
        // line 42
        echo "


 

";
    }

    public function getTemplateName()
    {
        return "\\homes\\qui_sommes_nous.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  144 => 41,  141 => 40,  138 => 39,  135 => 38,  132 => 37,  130 => 36,  126 => 34,  122 => 33,  119 => 32,  116 => 31,  113 => 30,  110 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  68 => 14,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    <title> QUI SOMMES NOUS </title>
    <style>
          

          </style>
{% endblock  %}

{% block content %}


                         {% if LANG == 'fr' %}
                            {% include('/components/qui_somme_nous/fr/page_header.twig') %}
                            {% include('/components/qui_somme_nous/fr/about_section.twig') %}
                            {% include('/components/qui_somme_nous/fr/icons_boxes.twig') %}
                            {% include('/components/qui_somme_nous/fr/testimonial.twig') %}
                          {% endif %}

                          {% if LANG == 'en' %}
                             {% include('/components/qui_somme_nous/en/page_header.twig') %}
                            {% include('/components/qui_somme_nous/en/about_section.twig') %}
                            {% include('/components/qui_somme_nous/en/icons_boxes.twig') %}
                            {% include('/components/qui_somme_nous/en/testimonial.twig') %}
                          {% endif %}

                          {% if LANG == 'gr' %}
                              {% include('/components/qui_somme_nous/gr/page_header.twig') %}
                            {% include('/components/qui_somme_nous/gr/about_section.twig') %}
                            {% include('/components/qui_somme_nous/gr/icons_boxes.twig') %}
                            {% include('/components/qui_somme_nous/gr/testimonial.twig') %}

                          {% endif %}  

                          {% if LANG == 'ar' %}
                            {% include('/components/qui_somme_nous/ar/page_header.twig') %}
                            {% include('/components/qui_somme_nous/ar/about_section.twig') %}
                            {% include('/components/qui_somme_nous/ar/icons_boxes.twig') %}
                            {% include('/components/qui_somme_nous/ar/testimonial.twig') %}
                          {% endif %}



 

{% endblock  %}

", "\\homes\\qui_sommes_nous.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\homes\\qui_sommes_nous.twig");
    }
}
