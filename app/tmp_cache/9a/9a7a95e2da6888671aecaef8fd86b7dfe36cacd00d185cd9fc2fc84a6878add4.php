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
            'carouselfr' => [$this, 'block_carouselfr'],
            'lead_form_floatfr' => [$this, 'block_lead_form_floatfr'],
            'searchForm' => [$this, 'block_searchForm'],
            'home_icon_sectionfr' => [$this, 'block_home_icon_sectionfr'],
            'home_heading_section1fr' => [$this, 'block_home_heading_section1fr'],
            'info_sectionfr' => [$this, 'block_info_sectionfr'],
            'homeHeadingSectionCurved2fr' => [$this, 'block_homeHeadingSectionCurved2fr'],
            'photo_gallery_sectionBEFOREAFTERfr' => [$this, 'block_photo_gallery_sectionBEFOREAFTERfr'],
            'home_heading_section3fr' => [$this, 'block_home_heading_section3fr'],
            'video_gallery_sectionvidfr' => [$this, 'block_video_gallery_sectionvidfr'],
            'home_heading_section4fr' => [$this, 'block_home_heading_section4fr'],
            'home_counterUp' => [$this, 'block_home_counterUp'],
            'video_gallery_sectionfr' => [$this, 'block_video_gallery_sectionfr'],
            'leadFormFixBottomfr' => [$this, 'block_leadFormFixBottomfr'],
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
        echo "  <title> LAB </title> ";
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
        // line 28
        echo "                           
                            ";
        // line 29
        $this->displayBlock('searchForm', $context, $blocks);
        // line 32
        echo "
                            ";
        // line 37
        echo "
                           ";
        // line 38
        $this->displayBlock('home_icon_sectionfr', $context, $blocks);
        // line 43
        echo "
                             ";
        // line 47
        echo "                             ";
        $this->displayBlock('home_heading_section1fr', $context, $blocks);
        // line 50
        echo "
                            ";
        // line 51
        $this->displayBlock('info_sectionfr', $context, $blocks);
        // line 56
        echo "
                            ";
        // line 60
        echo "
                            ";
        // line 61
        $this->displayBlock('homeHeadingSectionCurved2fr', $context, $blocks);
        // line 64
        echo "
                            ";
        // line 70
        echo "
                            ";
        // line 71
        $this->displayBlock('photo_gallery_sectionBEFOREAFTERfr', $context, $blocks);
        // line 76
        echo "
                            ";
        // line 77
        $this->displayBlock('home_heading_section3fr', $context, $blocks);
        // line 80
        echo "
                            ";
        // line 81
        $this->displayBlock('video_gallery_sectionvidfr', $context, $blocks);
        // line 86
        echo "
                             ";
        // line 87
        $this->displayBlock('home_heading_section4fr', $context, $blocks);
        // line 90
        echo "
                             ";
        // line 91
        $this->displayBlock('home_counterUp', $context, $blocks);
        // line 94
        echo "
                            ";
        // line 95
        $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
        // line 100
        echo "
                           

                            ";
        // line 106
        echo "                            
                            ";
        // line 107
        $this->displayBlock('leadFormFixBottomfr', $context, $blocks);
        // line 109
        echo "  

        ";
        // line 112
        echo "      
 
      ";
        // line 252
        echo "
 ";
    }

    // line 17
    public function block_carouselfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                                ";
        $this->loadTemplate("/components/index/fr/showcaseVideo.twig", "/homes/lab/index.twig", 18)->display($context);
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
        $this->loadTemplate("/components/index/fr/leadFormFloat.twig", "/homes/lab/index.twig", 22)->display($context);
        // line 23
        echo "                            ";
    }

    // line 29
    public function block_searchForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 30
        $this->loadTemplate("/components/index/fr/searchForm.twig", "/homes/lab/index.twig", 30)->display($context);
        // line 31
        echo "                            ";
    }

    // line 38
    public function block_home_icon_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                                <div class=\"container \">
                                ";
        // line 40
        $this->loadTemplate("/components/index/fr/homeIconSection.twig", "/homes/lab/index.twig", 40)->display($context);
        // line 41
        echo "                                </div>
                            ";
    }

    // line 47
    public function block_home_heading_section1fr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved.twig", "/homes/lab/index.twig", 48)->display($context);
        // line 49
        echo "                            ";
    }

    // line 51
    public function block_info_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                              <div class=\"container \">
                                ";
        // line 53
        $this->loadTemplate("/components/index/fr/infoSection.twig", "/homes/lab/index.twig", 53)->display($context);
        // line 54
        echo "                              </div>
                            ";
    }

    // line 61
    public function block_homeHeadingSectionCurved2fr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                            ";
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved2.twig", "/homes/lab/index.twig", 62)->display($context);
        // line 63
        echo "                            ";
    }

    // line 71
    public function block_photo_gallery_sectionBEFOREAFTERfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                              <div class=\"container \">
                                ";
        // line 73
        $this->loadTemplate("/components/index/fr/photoGallerySectionBeforeAfter.twig", "/homes/lab/index.twig", 73)->display($context);
        // line 74
        echo "                              </div>
                            ";
    }

    // line 77
    public function block_home_heading_section3fr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved.twig", "/homes/lab/index.twig", 78)->display($context);
        // line 79
        echo "                            ";
    }

    // line 81
    public function block_video_gallery_sectionvidfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                              <div class=\"container \">
                                ";
        // line 83
        $this->loadTemplate("/components/index/fr/videoGallerySection.twig", "/homes/lab/index.twig", 83)->display($context);
        // line 84
        echo "                              </div>
                            ";
    }

    // line 87
    public function block_home_heading_section4fr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved.twig", "/homes/lab/index.twig", 88)->display($context);
        // line 89
        echo "                            ";
    }

    // line 91
    public function block_home_counterUp($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                ";
        $this->loadTemplate("/components/index/fr/counterUp.twig", "/homes/lab/index.twig", 92)->display($context);
        // line 93
        echo "                            ";
    }

    // line 95
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                              <div class=\"container \">
                                ";
        // line 97
        $this->loadTemplate("/components/index/fr/testimonials.twig", "/homes/lab/index.twig", 97)->display($context);
        // line 98
        echo "                              </div>
                            ";
    }

    // line 107
    public function block_leadFormFixBottomfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "                              ";
        $this->loadTemplate("/components/index/fr/leadFormFixBottom.twig", "/homes/lab/index.twig", 108)->display($context);
        // line 109
        echo "                            ";
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
        return array (  349 => 109,  346 => 108,  342 => 107,  337 => 98,  335 => 97,  332 => 96,  328 => 95,  324 => 93,  321 => 92,  317 => 91,  313 => 89,  310 => 88,  306 => 87,  301 => 84,  299 => 83,  296 => 82,  292 => 81,  288 => 79,  285 => 78,  281 => 77,  276 => 74,  274 => 73,  271 => 72,  267 => 71,  263 => 63,  260 => 62,  256 => 61,  251 => 54,  249 => 53,  246 => 52,  242 => 51,  238 => 49,  235 => 48,  231 => 47,  226 => 41,  224 => 40,  221 => 39,  217 => 38,  213 => 31,  211 => 30,  205 => 29,  201 => 23,  199 => 22,  193 => 21,  189 => 19,  186 => 18,  182 => 17,  177 => 252,  173 => 112,  169 => 109,  167 => 107,  164 => 106,  159 => 100,  157 => 95,  154 => 94,  152 => 91,  149 => 90,  147 => 87,  144 => 86,  142 => 81,  139 => 80,  137 => 77,  134 => 76,  132 => 71,  129 => 70,  126 => 64,  124 => 61,  121 => 60,  118 => 56,  116 => 51,  113 => 50,  110 => 47,  107 => 43,  105 => 38,  102 => 37,  99 => 32,  97 => 29,  94 => 28,  91 => 24,  89 => 21,  86 => 20,  84 => 17,  81 => 16,  78 => 12,  75 => 8,  72 => 6,  68 => 5,  61 => 3,  50 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> LAB </title> {% endblock  %}
  
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

                            {# {% block lead_form_floatzoho %} 
                                  {% include('/components/index/fr/leadFormFloatzoho.twig') %}
                            {% endblock  %} #}
                           
                            {% block searchForm %} 
                                  {% include('/components/index/fr/searchForm.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_fixfr %} 
                                  {% include('/components/index/fr/leadFormFix.twig') %}
                            {% endblock  %}
                             #}

                           {% block home_icon_sectionfr %}
                                <div class=\"container \">
                                {% include('/components/index/fr/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}

                             {# {% block home_heading_sectionfr %}
                                {% include('/components/index/fr/homeHeadingSection.twig') %}
                            {% endblock  %} #}
                             {% block home_heading_section1fr %}
                                {% include('/components/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block info_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/infoSection.twig') %}
                              </div>
                            {% endblock  %}

                            {# {% block video_play_sectionfr %}
                            {% include('/components/index/fr/videoPlaySection.twig') %}
                            {% endblock  %} #}

                            {% block homeHeadingSectionCurved2fr %}
                            {% include('/components/index/fr/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}

                            {# {% block photo_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/photoGallerySection.twig') %}
                              </div>
                            {% endblock  %} #}

                            {% block photo_gallery_sectionBEFOREAFTERfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/photoGallerySectionBeforeAfter.twig') %}
                              </div>
                            {% endblock  %}

                            {% block home_heading_section3fr %}
                                {% include('/components/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block video_gallery_sectionvidfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                             {% block home_heading_section4fr %}
                                {% include('/components/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                             {% block home_counterUp %}
                                {% include('/components/index/fr/counterUp.twig') %}
                            {% endblock  %}

                            {% block video_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/testimonials.twig') %}
                              </div>
                            {% endblock  %}

                           

                            {# {% block newsletter_sectionfr %}
                              {% include('/components/index/fr/newsletterSection.twig') %}
                            {% endblock  %}   #}
                            
                            {% block leadFormFixBottomfr %}
                              {% include('/components/index/fr/leadFormFixBottom.twig') %}
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
", "/homes/lab/index.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/lab/index.twig");
    }
}
