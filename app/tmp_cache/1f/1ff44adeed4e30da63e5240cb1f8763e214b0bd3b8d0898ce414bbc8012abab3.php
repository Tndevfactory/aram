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

/* /homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig */
class __TwigTemplate_7d9fa1b9361b9e45b78fea8a9c343d817fc691aecf90ab49db8a2415517a72d3 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig", 1);
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
        echo "                         ";
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 13
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/fr/chirurgiePlastique/blepharoplastie.twig", "/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig", 13)->display($context);
            // line 14
            echo "                            
                          ";
        }
        // line 16
        echo "
                          ";
        // line 17
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 18
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/en/chirurgiePlastique/blepharoplastie.twig", "/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig", 18)->display($context);
            // line 19
            echo "                            
                          ";
        }
        // line 21
        echo "
                          ";
        // line 22
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 23
            echo "                              ";
            $this->loadTemplate("/components/nosTraitements/gr/chirurgiePlastique/blepharoplastie.twig", "/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig", 23)->display($context);
            // line 24
            echo "                           
                          ";
        }
        // line 25
        echo "  

                          ";
        // line 27
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 28
            echo "                            ";
            $this->loadTemplate("/components/nosTraitements/ar/chirurgiePlastique/blepharoplastie.twig", "/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig", 28)->display($context);
            // line 29
            echo "                         
                          ";
        }
        // line 31
        echo "

";
    }

    public function getTemplateName()
    {
        return "/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  107 => 29,  104 => 28,  102 => 27,  98 => 25,  94 => 24,  91 => 23,  89 => 22,  86 => 21,  82 => 19,  79 => 18,  77 => 17,  74 => 16,  70 => 14,  67 => 13,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
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
                            {% include('/components/nosTraitements/fr/chirurgiePlastique/blepharoplastie.twig') %}
                            
                          {% endif %}

                          {% if LANG == 'en' %}
                            {% include('/components/nosTraitements/en/chirurgiePlastique/blepharoplastie.twig') %}
                            
                          {% endif %}

                          {% if LANG == 'gr' %}
                              {% include('/components/nosTraitements/gr/chirurgiePlastique/blepharoplastie.twig') %}
                           
                          {% endif %}  

                          {% if LANG == 'ar' %}
                            {% include('/components/nosTraitements/ar/chirurgiePlastique/blepharoplastie.twig') %}
                         
                          {% endif %}


{% endblock  %}
", "/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/homes/nosTraitements/chirurgiePlastique/blepharoplastie.twig");
    }
}
