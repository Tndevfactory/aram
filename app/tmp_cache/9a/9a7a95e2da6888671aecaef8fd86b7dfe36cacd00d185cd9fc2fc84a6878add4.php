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

/* /homes/lab/index.twig */
class __TwigTemplate_1decbdd7cc17bef8fefdb03d7fa4de4eb827550f812b47356e228f07bf4805a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'testnavbarSubmenuOnscrollHover' => [$this, 'block_testnavbarSubmenuOnscrollHover'],
            'carouselfr' => [$this, 'block_carouselfr'],
            'lead_form_floatfr' => [$this, 'block_lead_form_floatfr'],
            'lead_form_fixfr' => [$this, 'block_lead_form_fixfr'],
            'home_icon_sectionfr' => [$this, 'block_home_icon_sectionfr'],
            'video_gallery_sectionfr' => [$this, 'block_video_gallery_sectionfr'],
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/lab/index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> LAB  </title> ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        ";
        // line 7
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
            // line 8
            echo "
                          ";
            // line 9
            $this->displayBlock('testnavbarSubmenuOnscrollHover', $context, $blocks);
            // line 12
            echo "
                            ";
            // line 13
            $this->displayBlock('carouselfr', $context, $blocks);
            // line 16
            echo "                          
                             ";
            // line 17
            $this->displayBlock('lead_form_floatfr', $context, $blocks);
            // line 20
            echo "
                            ";
            // line 21
            $this->displayBlock('lead_form_fixfr', $context, $blocks);
            // line 24
            echo "                            
                           ";
            // line 25
            $this->displayBlock('home_icon_sectionfr', $context, $blocks);
            // line 30
            echo "

                             ";
            // line 32
            $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
            // line 37
            echo "
                             ";
            // line 61
            echo "
        ";
        }
        // line 63
        echo "      
";
        // line 203
        echo "
 ";
    }

    // line 9
    public function block_testnavbarSubmenuOnscrollHover($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                                ";
        $this->loadTemplate("/inc/navbarMegaMenu.html.twig", "/homes/lab/index.twig", 10)->display($context);
        // line 11
        echo "                            ";
    }

    // line 13
    public function block_carouselfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                                ";
        $this->loadTemplate("/components/index/fr/showcaseBackgroundImage.twig", "/homes/lab/index.twig", 14)->display($context);
        // line 15
        echo "                            ";
    }

    // line 17
    public function block_lead_form_floatfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 18
        $this->loadTemplate("/components/index/fr/leadFormFloat.twig", "/homes/lab/index.twig", 18)->display($context);
        // line 19
        echo "                            ";
    }

    // line 21
    public function block_lead_form_fixfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 22
        $this->loadTemplate("/components/index/fr/leadFormFix.twig", "/homes/lab/index.twig", 22)->display($context);
        // line 23
        echo "                            ";
    }

    // line 25
    public function block_home_icon_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                                <div class=\"container \">
                                ";
        // line 27
        $this->loadTemplate("/components/index/fr/homeIconSection.twig", "/homes/lab/index.twig", 27)->display($context);
        // line 28
        echo "                                </div>
                            ";
    }

    // line 32
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                              <div class=\"container \">
                                ";
        // line 34
        $this->loadTemplate("/components/index/fr/videoGallerySection.twig", "/homes/lab/index.twig", 34)->display($context);
        // line 35
        echo "                              </div>
                            ";
    }

    public function getTemplateName()
    {
        return "/homes/lab/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 35,  182 => 34,  179 => 33,  175 => 32,  170 => 28,  168 => 27,  165 => 26,  161 => 25,  157 => 23,  155 => 22,  149 => 21,  145 => 19,  143 => 18,  137 => 17,  133 => 15,  130 => 14,  126 => 13,  122 => 11,  119 => 10,  115 => 9,  110 => 203,  107 => 63,  103 => 61,  100 => 37,  98 => 32,  94 => 30,  92 => 25,  89 => 24,  87 => 21,  84 => 20,  82 => 17,  79 => 16,  77 => 13,  74 => 12,  72 => 9,  69 => 8,  67 => 7,  64 => 6,  60 => 5,  53 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> LAB  </title> {% endblock  %}
  
{% block content %}

        {% if LANG == 'fr' %}

                          {% block testnavbarSubmenuOnscrollHover %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}

                            {% block carouselfr %}
                                {% include('/components/index/fr/showcaseBackgroundImage.twig') %}
                            {% endblock  %}
                          
                             {% block lead_form_floatfr %} 
                                  {% include('/components/index/fr/leadFormFloat.twig') %}
                            {% endblock  %}

                            {% block lead_form_fixfr %} 
                                  {% include('/components/index/fr/leadFormFix.twig') %}
                            {% endblock  %}
                            
                           {% block home_icon_sectionfr %}
                                <div class=\"container \">
                                {% include('/components/index/fr/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}


                             {% block video_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                             {#{% block home_heading_sectionfr %}
                                {% include('/components/index/fr/home_heading_section.twig') %}
                            {% endblock  %}

                            {% block info_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/info_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block video_play_sectionfr %}
                            {% include('/components/index/fr/video_play_section.twig') %}
                            {% endblock  %}

                            {% block photo_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/photo_gallery_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block newsletter_sectionfr %}
                              {% include('/components/index/fr/newsletter_section.twig') %}
                            {% endblock  %} #}

        {% endif %}
      
{# 
      {% if LANG == 'en' %}
                            {% block carouselan %}
                                {% include('/components/index/en/showcase_caroussel.twig') %}
                            {% endblock  %}
                          
                            {% block lead_form_floaten %} 
                                  {% include('/components/index/en/lead_form_float.twig') %}
                            {% endblock  %}

                            {% block lead_form_fixen %} 
                                  {% include('/components/index/en/lead_form_fix.twig') %}
                            {% endblock  %}
                            
                            {% block home_icon_sectionen %}
                                <div class=\"container \">
                                {% include('/components/index/en/home_icon_section.twig') %}
                                </div>
                            {% endblock  %}

                            {% block home_heading_sectionen %}
                                {% include('/components/index/en/home_heading_section.twig') %}
                            {% endblock  %}

                            {% block info_sectionen %}
                              <div class=\"container \">
                                {% include('/components/index/en/info_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block video_play_sectionen %}
                            {% include('/components/index/en/video_play_section.twig') %}
                            {% endblock  %}

                            {% block photo_gallery_sectionen %}
                              <div class=\"container \">
                                {% include('/components/index/en/photo_gallery_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block newsletter_sectionen %}
                              {% include('/components/index/en/newsletter_section.twig') %}
                            {% endblock  %}


    {% endif %}


      {% if LANG == 'gr' %}
                            {% block carouselgr %}
                                {% include('/components/index/gr/showcase_caroussel.twig') %}
                            {% endblock  %}
                          
                            {% block lead_form_floatgr %} 
                                  {% include('/components/index/gr/lead_form_float.twig') %}
                            {% endblock  %}

                            {% block lead_form_fixgr %} 
                                  {% include('/components/index/gr/lead_form_fix.twig') %}
                            {% endblock  %}
                            
                            {% block home_icon_sectiongr %}
                                <div class=\"container \">
                                {% include('/components/index/gr/home_icon_section.twig') %}
                                </div>
                            {% endblock  %}

                            {% block home_heading_sectiongr %}
                                {% include('/components/index/gr/home_heading_section.twig') %}
                            {% endblock  %}

                            {% block info_sectiongr %}
                              <div class=\"container \">
                                {% include('/components/index/gr/info_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block video_play_sectiongr %}
                            {% include('/components/index/gr/video_play_section.twig') %}
                            {% endblock  %}

                            {% block photo_gallery_sectiongr %}
                              <div class=\"container \">
                                {% include('/components/index/gr/photo_gallery_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block newsletter_sectiongr %}
                              {% include('/components/index/gr/newsletter_section.twig') %}
                            {% endblock  %}

    {% endif %}



      {% if LANG == 'ar' %}
                            {% block carouselar %}
                                {% include('/components/index/ar/showcase_caroussel.twig') %}
                            {% endblock  %}
                          
                            {% block lead_form_floatar %} 
                                  {% include('/components/index/ar/lead_form_float.twig') %}
                            {% endblock  %}

                            {% block lead_form_fixar %} 
                                  {% include('/components/index/ar/lead_form_fix.twig') %}
                            {% endblock  %}
                            
                            {% block home_icon_sectionar %}
                                <div class=\"container \">
                                {% include('/components/index/ar/home_icon_section.twig') %}
                                </div>
                            {% endblock  %}

                            {% block home_heading_sectionar %}
                                {% include('/components/index/ar/home_heading_section.twig') %}
                            {% endblock  %}

                            {% block info_sectionar %}
                              <div class=\"container \">
                                {% include('/components/index/ar/info_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block video_play_sectionar %}
                            {% include('/components/index/ar/video_play_section.twig') %}
                            {% endblock  %}

                            {% block photo_gallery_sectionar %}
                              <div class=\"container \">
                                {% include('/components/index/ar/photo_gallery_section.twig') %}
                              </div>
                            {% endblock  %}

                            {% block newsletter_sectionar %}
                              {% include('/components/index/ar/newsletter_section.twig') %}
                            {% endblock  %}

    {% endif %} #}

 {% endblock  %}
", "/homes/lab/index.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/lab/index.twig");
    }
}
