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
            'home_icon_sectionfr' => [$this, 'block_home_icon_sectionfr'],
            'home_heading_section1fr' => [$this, 'block_home_heading_section1fr'],
            'info_sectionfr' => [$this, 'block_info_sectionfr'],
            'homeHeadingSectionCurved2fr' => [$this, 'block_homeHeadingSectionCurved2fr'],
            'photo_gallery_sectionBEFOREAFTERfr' => [$this, 'block_photo_gallery_sectionBEFOREAFTERfr'],
            'home_heading_section3fr' => [$this, 'block_home_heading_section3fr'],
            'video_gallery_sectionvidfr' => [$this, 'block_video_gallery_sectionvidfr'],
            'home_heading_section4fr' => [$this, 'block_home_heading_section4fr'],
            'home_isoLogo' => [$this, 'block_home_isoLogo'],
            'home_counterUp' => [$this, 'block_home_counterUp'],
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\lab\\index.twig", 2);
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
        $this->displayBlock('home_isoLogo', $context, $blocks);
        // line 94
        echo "
                            ";
        // line 95
        $this->displayBlock('home_counterUp', $context, $blocks);
        // line 98
        echo "
                            ";
        // line 99
        $this->displayBlock('home_headingSectionCurved', $context, $blocks);
        // line 102
        echo "
                            ";
        // line 103
        $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
        // line 108
        echo "
                           

                            ";
        // line 114
        echo "                            
                            ";
        // line 115
        $this->displayBlock('leadFormFixBottomfr', $context, $blocks);
        // line 117
        echo "  

        ";
        // line 120
        echo "      
 
      ";
        // line 260
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

    // line 29
    public function block_searchForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 30
        $this->loadTemplate("/components/index/fr/searchForm.twig", "\\homes\\lab\\index.twig", 30)->display($context);
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
        $this->loadTemplate("/components/index/fr/homeIconSection.twig", "\\homes\\lab\\index.twig", 40)->display($context);
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
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved.twig", "\\homes\\lab\\index.twig", 48)->display($context);
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
        $this->loadTemplate("/components/index/fr/infoSection.twig", "\\homes\\lab\\index.twig", 53)->display($context);
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
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved2.twig", "\\homes\\lab\\index.twig", 62)->display($context);
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
        $this->loadTemplate("/components/index/fr/photoGallerySectionBeforeAfter.twig", "\\homes\\lab\\index.twig", 73)->display($context);
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
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved.twig", "\\homes\\lab\\index.twig", 78)->display($context);
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
        $this->loadTemplate("/components/index/fr/videoGallerySection.twig", "\\homes\\lab\\index.twig", 83)->display($context);
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
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved2.twig", "\\homes\\lab\\index.twig", 88)->display($context);
        // line 89
        echo "                            ";
    }

    // line 91
    public function block_home_isoLogo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeIsoAward.twig", "\\homes\\lab\\index.twig", 92)->display($context);
        // line 93
        echo "                            ";
    }

    // line 95
    public function block_home_counterUp($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                ";
        $this->loadTemplate("/components/index/fr/counterUp.twig", "\\homes\\lab\\index.twig", 96)->display($context);
        // line 97
        echo "                            ";
    }

    // line 99
    public function block_home_headingSectionCurved($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeHeadingSectionCurved.twig", "\\homes\\lab\\index.twig", 100)->display($context);
        // line 101
        echo "                            ";
    }

    // line 103
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                              <div class=\"container \">
                                ";
        // line 105
        $this->loadTemplate("/components/index/fr/testimonials.twig", "\\homes\\lab\\index.twig", 105)->display($context);
        // line 106
        echo "                              </div>
                            ";
    }

    // line 115
    public function block_leadFormFixBottomfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                              ";
        $this->loadTemplate("/components/index/fr/leadFormFixBottom.twig", "\\homes\\lab\\index.twig", 116)->display($context);
        // line 117
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
        return array (  383 => 117,  380 => 116,  376 => 115,  371 => 106,  369 => 105,  366 => 104,  362 => 103,  358 => 101,  355 => 100,  351 => 99,  347 => 97,  344 => 96,  340 => 95,  336 => 93,  333 => 92,  329 => 91,  325 => 89,  322 => 88,  318 => 87,  313 => 84,  311 => 83,  308 => 82,  304 => 81,  300 => 79,  297 => 78,  293 => 77,  288 => 74,  286 => 73,  283 => 72,  279 => 71,  275 => 63,  272 => 62,  268 => 61,  263 => 54,  261 => 53,  258 => 52,  254 => 51,  250 => 49,  247 => 48,  243 => 47,  238 => 41,  236 => 40,  233 => 39,  229 => 38,  225 => 31,  223 => 30,  217 => 29,  213 => 23,  211 => 22,  205 => 21,  201 => 19,  198 => 18,  194 => 17,  189 => 260,  185 => 120,  181 => 117,  179 => 115,  176 => 114,  171 => 108,  169 => 103,  166 => 102,  164 => 99,  161 => 98,  159 => 95,  156 => 94,  154 => 91,  151 => 90,  149 => 87,  146 => 86,  144 => 81,  141 => 80,  139 => 77,  136 => 76,  134 => 71,  131 => 70,  128 => 64,  126 => 61,  123 => 60,  120 => 56,  118 => 51,  115 => 50,  112 => 47,  109 => 43,  107 => 38,  104 => 37,  101 => 32,  99 => 29,  96 => 28,  93 => 24,  91 => 21,  88 => 20,  86 => 17,  83 => 16,  80 => 12,  77 => 8,  74 => 6,  70 => 5,  63 => 3,  52 => 2,);
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
                                {% include('/components/index/fr/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}

                             {% block home_isoLogo %}
                                {% include('/components/index/fr/homeIsoAward.twig') %}
                            {% endblock  %}

                            {% block home_counterUp %}
                                {% include('/components/index/fr/counterUp.twig') %}
                            {% endblock  %}

                            {% block home_headingSectionCurved %}
                                {% include('/components/index/fr/homeHeadingSectionCurved.twig') %}
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
", "\\homes\\lab\\index.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\homes\\lab\\index.twig");
    }
}
