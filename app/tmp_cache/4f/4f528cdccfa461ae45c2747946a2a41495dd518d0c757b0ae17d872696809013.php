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

/* \homes\index.twig */
class __TwigTemplate_64bacbde23ce13cbcd823b5177ca05f1e5c037bca5227fd41ee401078b7a5433 extends Template
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
            'home_isoLogo' => [$this, 'block_home_isoLogo'],
            'home_headingSectionCurved' => [$this, 'block_home_headingSectionCurved'],
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> prod </title> ";
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
        $this->displayBlock('home_isoLogo', $context, $blocks);
        // line 98
        echo "
                            

                            ";
        // line 101
        $this->displayBlock('home_headingSectionCurved', $context, $blocks);
        // line 104
        echo "
                            ";
        // line 105
        $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
        // line 110
        echo "
                           

                            ";
        // line 116
        echo "                            
                            ";
        // line 117
        $this->displayBlock('leadFormFixBottomfr', $context, $blocks);
        // line 119
        echo "  

        ";
        // line 122
        echo "      
 
      ";
        // line 262
        echo "
 ";
    }

    // line 17
    public function block_carouselfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/showcaseVideo.twig", "\\homes\\index.twig", 18)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat.twig", "\\homes\\index.twig", 22)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/searchForm.twig", "\\homes\\index.twig", 30)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/homeIconSection.twig", "\\homes\\index.twig", 40)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved.twig", "\\homes\\index.twig", 48)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/infoSection.twig", "\\homes\\index.twig", 53)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved2.twig", "\\homes\\index.twig", 62)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/photoGallerySectionBeforeAfter.twig", "\\homes\\index.twig", 73)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved.twig", "\\homes\\index.twig", 78)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/videoGallerySection.twig", "\\homes\\index.twig", 83)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved2.twig", "\\homes\\index.twig", 88)->display($context);
        // line 89
        echo "                            ";
    }

    // line 91
    public function block_home_counterUp($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/counterUp.twig", "\\homes\\index.twig", 92)->display($context);
        // line 93
        echo "                            ";
    }

    // line 95
    public function block_home_isoLogo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/homeIsoAward.twig", "\\homes\\index.twig", 96)->display($context);
        // line 97
        echo "                            ";
    }

    // line 101
    public function block_home_headingSectionCurved($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved.twig", "\\homes\\index.twig", 102)->display($context);
        // line 103
        echo "                            ";
    }

    // line 105
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                              <div class=\"container \">
                                ";
        // line 107
        $this->loadTemplate("/homes/data/index/fr/testimonials.twig", "\\homes\\index.twig", 107)->display($context);
        // line 108
        echo "                              </div>
                            ";
    }

    // line 117
    public function block_leadFormFixBottomfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "                              ";
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "\\homes\\index.twig", 118)->display($context);
        // line 119
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "\\homes\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 119,  382 => 118,  378 => 117,  373 => 108,  371 => 107,  368 => 106,  364 => 105,  360 => 103,  357 => 102,  353 => 101,  349 => 97,  346 => 96,  342 => 95,  338 => 93,  335 => 92,  331 => 91,  327 => 89,  324 => 88,  320 => 87,  315 => 84,  313 => 83,  310 => 82,  306 => 81,  302 => 79,  299 => 78,  295 => 77,  290 => 74,  288 => 73,  285 => 72,  281 => 71,  277 => 63,  274 => 62,  270 => 61,  265 => 54,  263 => 53,  260 => 52,  256 => 51,  252 => 49,  249 => 48,  245 => 47,  240 => 41,  238 => 40,  235 => 39,  231 => 38,  227 => 31,  225 => 30,  219 => 29,  215 => 23,  213 => 22,  207 => 21,  203 => 19,  200 => 18,  196 => 17,  191 => 262,  187 => 122,  183 => 119,  181 => 117,  178 => 116,  173 => 110,  171 => 105,  168 => 104,  166 => 101,  161 => 98,  159 => 95,  156 => 94,  154 => 91,  151 => 90,  149 => 87,  146 => 86,  144 => 81,  141 => 80,  139 => 77,  136 => 76,  134 => 71,  131 => 70,  128 => 64,  126 => 61,  123 => 60,  120 => 56,  118 => 51,  115 => 50,  112 => 47,  109 => 43,  107 => 38,  104 => 37,  101 => 32,  99 => 29,  96 => 28,  93 => 24,  91 => 21,  88 => 20,  86 => 17,  83 => 16,  80 => 12,  77 => 8,  74 => 6,  70 => 5,  63 => 3,  52 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> prod </title> {% endblock  %}
  
{% block content %}

        {# {% if LANG == 'fr' %} #}

                        {# {% block simpleMegamenu %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}  #}

                            {# {% block carouselfr %}
                                {% include('/components/index/fr/showcaseBackgroundImage.twig') %}
                            {% endblock  %}  #}
                          
                            {% block carouselfr %}
                                {% include('/homes/data/index/fr/showcaseVideo.twig') %}
                            {% endblock  %}
                          
                            {% block lead_form_floatfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_floatzoho %} 
                                  {% include('/components/index/fr/leadFormFloatzoho.twig') %}
                            {% endblock  %} #}
                           
                            {% block searchForm %} 
                                  {% include('/homes/data/index/fr/searchForm.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_fixfr %} 
                                  {% include('/components/index/fr/leadFormFix.twig') %}
                            {% endblock  %}
                             #}

                           {% block home_icon_sectionfr %}
                                <div class=\"container \">
                                {% include('/homes/data/index/fr/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}

                             {# {% block home_heading_sectionfr %}
                                {% include('/components/index/fr/homeHeadingSection.twig') %}
                            {% endblock  %} #}
                             {% block home_heading_section1fr %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block info_sectionfr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/fr/infoSection.twig') %}
                              </div>
                            {% endblock  %}

                            {# {% block video_play_sectionfr %}
                            {% include('/components/index/fr/videoPlaySection.twig') %}
                            {% endblock  %} #}

                            {% block homeHeadingSectionCurved2fr %}
                            {% include('/homes/data/index/fr/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}

                            {# {% block photo_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/photoGallerySection.twig') %}
                              </div>
                            {% endblock  %} #}

                            {% block photo_gallery_sectionBEFOREAFTERfr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/fr/photoGallerySectionBeforeAfter.twig') %}
                              </div>
                            {% endblock  %}

                            {% block home_heading_section3fr %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block video_gallery_sectionvidfr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/fr/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                             {% block home_heading_section4fr %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}
                            
                           {% block home_counterUp %}
                                {% include('/homes/data/index/fr/counterUp.twig') %}
                            {% endblock  %}

                             {% block home_isoLogo %}
                                {% include('/homes/data/index/fr/homeIsoAward.twig') %}
                            {% endblock  %}

                            

                            {% block home_headingSectionCurved %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block video_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/fr/testimonials.twig') %}
                              </div>
                            {% endblock  %}

                           

                            {# {% block newsletter_sectionfr %}
                              {% include('/components/index/fr/newsletterSection.twig') %}
                            {% endblock  %}   #}
                            
                            {% block leadFormFixBottomfr %}
                              {% include('/homes/data/index/fr/leadFormFixBottom.twig') %}
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
", "\\homes\\index.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\homes\\index.twig");
    }
}
