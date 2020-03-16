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

/* \homes\lab\index.twig */
class __TwigTemplate_a6383ec9a4229ca50e4980c0565df620cbeac26b29d85eea9a07b3ffb3b76436 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\lab\\index.twig", 2);
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
            // line 12
            echo "
                             ";
            // line 13
            $this->displayBlock('testnavbarSubmenuOnscrollHover', $context, $blocks);
            // line 16
            echo "
                            ";
            // line 41
            echo "
                             ";
            // line 65
            echo "
        ";
        }
        // line 67
        echo "      
";
        // line 207
        echo "
 ";
    }

    // line 13
    public function block_testnavbarSubmenuOnscrollHover($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                                ";
        $this->loadTemplate("/inc/navbarMegaMenu-responsive.html.twig", "\\homes\\lab\\index.twig", 14)->display($context);
        // line 15
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "\\homes\\lab\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 15,  94 => 14,  90 => 13,  85 => 207,  82 => 67,  78 => 65,  75 => 41,  72 => 16,  70 => 13,  67 => 12,  64 => 8,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> LAB  </title> {% endblock  %}
  
{% block content %}

        {% if LANG == 'fr' %}

                          {# {% block testnavbarSubmenuOnscrollHover %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %} #}

                             {% block testnavbarSubmenuOnscrollHover %}
                                {% include('/inc/navbarMegaMenu-responsive.html.twig') %}
                            {% endblock  %}

                            {# {% block carouselfr %}
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
                            {% endblock  %} #}

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
", "\\homes\\lab\\index.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\homes\\lab\\index.twig");
    }
}
