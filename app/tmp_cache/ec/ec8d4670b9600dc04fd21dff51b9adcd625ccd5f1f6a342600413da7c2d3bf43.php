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

/* \homes\contact.twig */
class __TwigTemplate_69b7f63baef2f725eb391d27fa176119c0fedd84671710c8b6aab5c9be4a8192 extends Template
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
        // line 2
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\contact.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <title> CONTACT </title>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
 
 
                         ";
        // line 13
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 14
            echo "                            ";
            $this->loadTemplate("/components/contact/fr/page_header.twig", "\\homes\\contact.twig", 14)->display($context);
            // line 15
            echo "                            ";
            $this->loadTemplate("/components/contact/fr/contact_section.twig", "\\homes\\contact.twig", 15)->display($context);
            // line 16
            echo "                            ";
            $this->loadTemplate("/components/contact/fr/staff.twig", "\\homes\\contact.twig", 16)->display($context);
            // line 17
            echo "                          ";
        }
        // line 18
        echo "
                          ";
        // line 19
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 20
            echo "                               ";
            $this->loadTemplate("/components/contact/ar/page_header.twig", "\\homes\\contact.twig", 20)->display($context);
            // line 21
            echo "                                ";
            $this->loadTemplate("/components/contact/ar/contact_section.twig", "\\homes\\contact.twig", 21)->display($context);
            // line 22
            echo "                                ";
            $this->loadTemplate("/components/contact/ar/staff.twig", "\\homes\\contact.twig", 22)->display($context);
            // line 23
            echo "                          ";
        }
        // line 24
        echo "
                          ";
        // line 25
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 26
            echo "                               ";
            $this->loadTemplate("/components/contact/en/page_header.twig", "\\homes\\contact.twig", 26)->display($context);
            // line 27
            echo "                                ";
            $this->loadTemplate("/components/contact/en/contact_section.twig", "\\homes\\contact.twig", 27)->display($context);
            // line 28
            echo "                                ";
            $this->loadTemplate("/components/contact/en/staff.twig", "\\homes\\contact.twig", 28)->display($context);
            // line 29
            echo "
                          ";
        }
        // line 30
        echo "   ";
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 31
            echo "                              ";
            $this->loadTemplate("/components/contact/en/page_header.twig", "\\homes\\contact.twig", 31)->display($context);
            // line 32
            echo "                                ";
            $this->loadTemplate("/components/contact/en/contact_section.twig", "\\homes\\contact.twig", 32)->display($context);
            // line 33
            echo "                                ";
            $this->loadTemplate("/components/contact/en/staff.twig", "\\homes\\contact.twig", 33)->display($context);
            // line 34
            echo "                          ";
        }
        // line 35
        echo "                    

";
    }

    public function getTemplateName()
    {
        return "\\homes\\contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  114 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  60 => 10,  56 => 9,  51 => 5,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}

{% block head %}
    <title> CONTACT </title>
{% endblock  %}


{% block content %}

 
 
                         {% if LANG == 'fr' %}
                            {% include('/components/contact/fr/page_header.twig') %}
                            {% include('/components/contact/fr/contact_section.twig') %}
                            {% include('/components/contact/fr/staff.twig') %}
                          {% endif %}

                          {% if LANG == 'ar' %}
                               {% include('/components/contact/ar/page_header.twig') %}
                                {% include('/components/contact/ar/contact_section.twig') %}
                                {% include('/components/contact/ar/staff.twig') %}
                          {% endif %}

                          {% if LANG == 'en' %}
                               {% include('/components/contact/en/page_header.twig') %}
                                {% include('/components/contact/en/contact_section.twig') %}
                                {% include('/components/contact/en/staff.twig') %}

                          {% endif %}   {% if LANG == 'gr' %}
                              {% include('/components/contact/en/page_header.twig') %}
                                {% include('/components/contact/en/contact_section.twig') %}
                                {% include('/components/contact/en/staff.twig') %}
                          {% endif %}
                    

{% endblock  %}

", "\\homes\\contact.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\homes\\contact.twig");
    }
}
