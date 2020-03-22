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
            'carouselfr' => [$this, 'block_carouselfr'],
            'lead_form_floatfr' => [$this, 'block_lead_form_floatfr'],
            'searchForm' => [$this, 'block_searchForm'],
            'lead_form_fixfr' => [$this, 'block_lead_form_fixfr'],
            'home_icon_sectionfr' => [$this, 'block_home_icon_sectionfr'],
            'home_heading_sectionfr' => [$this, 'block_home_heading_sectionfr'],
            'info_sectionfr' => [$this, 'block_info_sectionfr'],
            'video_play_sectionfr' => [$this, 'block_video_play_sectionfr'],
            'photo_gallery_sectionfr' => [$this, 'block_photo_gallery_sectionfr'],
            'video_gallery_sectionfr' => [$this, 'block_video_gallery_sectionfr'],
            'newsletter_sectionfr' => [$this, 'block_newsletter_sectionfr'],
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
        echo "  <title> in progress by CH </title> ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        ";
        // line 8
        echo "
                        ";
        // line 12
        echo "
                            ";
        // line 16
        echo "                           
                            ";
        // line 17
        $this->displayBlock('carouselfr', $context, $blocks);
        // line 20
        echo "                          
                            ";
        // line 21
        $this->displayBlock('lead_form_floatfr', $context, $blocks);
        // line 24
        echo "                           
                            ";
        // line 25
        $this->displayBlock('searchForm', $context, $blocks);
        // line 28
        echo "
                            ";
        // line 29
        $this->displayBlock('lead_form_fixfr', $context, $blocks);
        // line 32
        echo "                            
                           ";
        // line 33
        $this->displayBlock('home_icon_sectionfr', $context, $blocks);
        // line 38
        echo "
                             ";
        // line 39
        $this->displayBlock('home_heading_sectionfr', $context, $blocks);
        // line 42
        echo "
                            ";
        // line 43
        $this->displayBlock('info_sectionfr', $context, $blocks);
        // line 48
        echo "
                            ";
        // line 49
        $this->displayBlock('video_play_sectionfr', $context, $blocks);
        // line 52
        echo "
                            ";
        // line 53
        $this->displayBlock('photo_gallery_sectionfr', $context, $blocks);
        // line 58
        echo "
                            ";
        // line 59
        $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
        // line 64
        echo "
                            ";
        // line 65
        $this->displayBlock('newsletter_sectionfr', $context, $blocks);
        // line 67
        echo "  

        ";
        // line 70
        echo "      
 
      ";
        // line 210
        echo "
 ";
    }

    // line 17
    public function block_carouselfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                                ";
        $this->loadTemplate("/components/index/fr/showcaseVideo.twig", "\\homes\\lab\\index.twig", 18)->display($context);
        // line 19
        echo "                            ";
    }

    // line 21
    public function block_lead_form_floatfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 22
        $this->loadTemplate("/components/index/fr/leadFormFloat.twig", "\\homes\\lab\\index.twig", 22)->display($context);
        // line 23
        echo "                            ";
    }

    // line 25
    public function block_searchForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 26
        $this->loadTemplate("/components/index/fr/searchForm.twig", "\\homes\\lab\\index.twig", 26)->display($context);
        // line 27
        echo "                            ";
    }

    // line 29
    public function block_lead_form_fixfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 30
        $this->loadTemplate("/components/index/fr/leadFormFix.twig", "\\homes\\lab\\index.twig", 30)->display($context);
        // line 31
        echo "                            ";
    }

    // line 33
    public function block_home_icon_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                <div class=\"container \">
                                ";
        // line 35
        $this->loadTemplate("/components/index/fr/homeIconSection.twig", "\\homes\\lab\\index.twig", 35)->display($context);
        // line 36
        echo "                                </div>
                            ";
    }

    // line 39
    public function block_home_heading_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeHeadingSection.twig", "\\homes\\lab\\index.twig", 40)->display($context);
        // line 41
        echo "                            ";
    }

    // line 43
    public function block_info_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                              <div class=\"container \">
                                ";
        // line 45
        $this->loadTemplate("/components/index/fr/infoSection.twig", "\\homes\\lab\\index.twig", 45)->display($context);
        // line 46
        echo "                              </div>
                            ";
    }

    // line 49
    public function block_video_play_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                            ";
        $this->loadTemplate("/components/index/fr/videoPlaySection.twig", "\\homes\\lab\\index.twig", 50)->display($context);
        // line 51
        echo "                            ";
    }

    // line 53
    public function block_photo_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                              <div class=\"container \">
                                ";
        // line 55
        $this->loadTemplate("/components/index/fr/photoGallerySection.twig", "\\homes\\lab\\index.twig", 55)->display($context);
        // line 56
        echo "                              </div>
                            ";
    }

    // line 59
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                              <div class=\"container \">
                                ";
        // line 61
        $this->loadTemplate("/components/index/fr/videoGallerySection.twig", "\\homes\\lab\\index.twig", 61)->display($context);
        // line 62
        echo "                              </div>
                            ";
    }

    // line 65
    public function block_newsletter_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                              ";
        $this->loadTemplate("/components/index/fr/newsletterSection.twig", "\\homes\\lab\\index.twig", 66)->display($context);
        // line 67
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
        return array (  278 => 67,  275 => 66,  271 => 65,  266 => 62,  264 => 61,  261 => 60,  257 => 59,  252 => 56,  250 => 55,  247 => 54,  243 => 53,  239 => 51,  236 => 50,  232 => 49,  227 => 46,  225 => 45,  222 => 44,  218 => 43,  214 => 41,  211 => 40,  207 => 39,  202 => 36,  200 => 35,  197 => 34,  193 => 33,  189 => 31,  187 => 30,  181 => 29,  177 => 27,  175 => 26,  169 => 25,  165 => 23,  163 => 22,  157 => 21,  153 => 19,  150 => 18,  146 => 17,  141 => 210,  137 => 70,  133 => 67,  131 => 65,  128 => 64,  126 => 59,  123 => 58,  121 => 53,  118 => 52,  116 => 49,  113 => 48,  111 => 43,  108 => 42,  106 => 39,  103 => 38,  101 => 33,  98 => 32,  96 => 29,  93 => 28,  91 => 25,  88 => 24,  86 => 21,  83 => 20,  81 => 17,  78 => 16,  75 => 12,  72 => 8,  69 => 6,  65 => 5,  58 => 3,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> in progress by CH </title> {% endblock  %}
  
{% block content %}

        {# {% if LANG == 'fr' %} #}

                        {# {% block simpleMegamenu %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}  #}

                            {# {% block carouselfr %}
                                {% include('/components/index/fr/showcaseBackgroundImage.twig') %}
                            {% endblock  %}  #}
                           
                            {% block carouselfr %}
                                {% include('/components/index/fr/showcaseVideo.twig') %}
                            {% endblock  %}
                          
                            {% block lead_form_floatfr %} 
                                  {% include('/components/index/fr/leadFormFloat.twig') %}
                            {% endblock  %}
                           
                            {% block searchForm %} 
                                  {% include('/components/index/fr/searchForm.twig') %}
                            {% endblock  %}

                            {% block lead_form_fixfr %} 
                                  {% include('/components/index/fr/leadFormFix.twig') %}
                            {% endblock  %}
                            
                           {% block home_icon_sectionfr %}
                                <div class=\"container \">
                                {% include('/components/index/fr/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}

                             {% block home_heading_sectionfr %}
                                {% include('/components/index/fr/homeHeadingSection.twig') %}
                            {% endblock  %}

                            {% block info_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/infoSection.twig') %}
                              </div>
                            {% endblock  %}

                            {% block video_play_sectionfr %}
                            {% include('/components/index/fr/videoPlaySection.twig') %}
                            {% endblock  %}

                            {% block photo_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/photoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                            {% block video_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                            {% block newsletter_sectionfr %}
                              {% include('/components/index/fr/newsletterSection.twig') %}
                            {% endblock  %}  

        {# {% endif %} #}
      
 
      {# {% if LANG == 'en' %}
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

    {% endif %}  #}

 {% endblock  %}
", "\\homes\\lab\\index.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\homes\\lab\\index.twig");
    }
}
