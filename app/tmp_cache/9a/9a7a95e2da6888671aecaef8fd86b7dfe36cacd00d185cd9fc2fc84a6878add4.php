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
            'MegamenuResponsive' => [$this, 'block_MegamenuResponsive'],
            'video_gallery_sectionfr' => [$this, 'block_video_gallery_sectionfr'],
            'carouselan' => [$this, 'block_carouselan'],
            'lead_form_floaten' => [$this, 'block_lead_form_floaten'],
            'lead_form_fixen' => [$this, 'block_lead_form_fixen'],
            'home_icon_sectionen' => [$this, 'block_home_icon_sectionen'],
            'home_heading_sectionen' => [$this, 'block_home_heading_sectionen'],
            'info_sectionen' => [$this, 'block_info_sectionen'],
            'video_play_sectionen' => [$this, 'block_video_play_sectionen'],
            'photo_gallery_sectionen' => [$this, 'block_photo_gallery_sectionen'],
            'newsletter_sectionen' => [$this, 'block_newsletter_sectionen'],
            'carouselgr' => [$this, 'block_carouselgr'],
            'lead_form_floatgr' => [$this, 'block_lead_form_floatgr'],
            'lead_form_fixgr' => [$this, 'block_lead_form_fixgr'],
            'home_icon_sectiongr' => [$this, 'block_home_icon_sectiongr'],
            'home_heading_sectiongr' => [$this, 'block_home_heading_sectiongr'],
            'info_sectiongr' => [$this, 'block_info_sectiongr'],
            'video_play_sectiongr' => [$this, 'block_video_play_sectiongr'],
            'photo_gallery_sectiongr' => [$this, 'block_photo_gallery_sectiongr'],
            'newsletter_sectiongr' => [$this, 'block_newsletter_sectiongr'],
            'carouselar' => [$this, 'block_carouselar'],
            'lead_form_floatar' => [$this, 'block_lead_form_floatar'],
            'lead_form_fixar' => [$this, 'block_lead_form_fixar'],
            'home_icon_sectionar' => [$this, 'block_home_icon_sectionar'],
            'home_heading_sectionar' => [$this, 'block_home_heading_sectionar'],
            'info_sectionar' => [$this, 'block_info_sectionar'],
            'video_play_sectionar' => [$this, 'block_video_play_sectionar'],
            'photo_gallery_sectionar' => [$this, 'block_photo_gallery_sectionar'],
            'newsletter_sectionar' => [$this, 'block_newsletter_sectionar'],
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
        echo "  <title> LAB --- </title> ";
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
        // line 13
        $this->displayBlock('MegamenuResponsive', $context, $blocks);
        // line 15
        echo " 

                           

                             ";
        // line 36
        echo "

                             ";
        // line 38
        $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
        // line 42
        echo " 

                            ";
        // line 67
        echo "
        ";
        // line 69
        echo "      
 
      ";
        // line 71
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 72
            echo "                            ";
            $this->displayBlock('carouselan', $context, $blocks);
            // line 75
            echo "                          
                            ";
            // line 76
            $this->displayBlock('lead_form_floaten', $context, $blocks);
            // line 79
            echo "
                            ";
            // line 80
            $this->displayBlock('lead_form_fixen', $context, $blocks);
            // line 83
            echo "                            
                            ";
            // line 84
            $this->displayBlock('home_icon_sectionen', $context, $blocks);
            // line 89
            echo "
                            ";
            // line 90
            $this->displayBlock('home_heading_sectionen', $context, $blocks);
            // line 93
            echo "
                            ";
            // line 94
            $this->displayBlock('info_sectionen', $context, $blocks);
            // line 99
            echo "
                            ";
            // line 100
            $this->displayBlock('video_play_sectionen', $context, $blocks);
            // line 103
            echo "
                            ";
            // line 104
            $this->displayBlock('photo_gallery_sectionen', $context, $blocks);
            // line 109
            echo "
                            ";
            // line 110
            $this->displayBlock('newsletter_sectionen', $context, $blocks);
            // line 113
            echo "

    ";
        }
        // line 116
        echo "

      ";
        // line 118
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 119
            echo "                            ";
            $this->displayBlock('carouselgr', $context, $blocks);
            // line 122
            echo "                          
                            ";
            // line 123
            $this->displayBlock('lead_form_floatgr', $context, $blocks);
            // line 126
            echo "
                            ";
            // line 127
            $this->displayBlock('lead_form_fixgr', $context, $blocks);
            // line 130
            echo "                            
                            ";
            // line 131
            $this->displayBlock('home_icon_sectiongr', $context, $blocks);
            // line 136
            echo "
                            ";
            // line 137
            $this->displayBlock('home_heading_sectiongr', $context, $blocks);
            // line 140
            echo "
                            ";
            // line 141
            $this->displayBlock('info_sectiongr', $context, $blocks);
            // line 146
            echo "
                            ";
            // line 147
            $this->displayBlock('video_play_sectiongr', $context, $blocks);
            // line 150
            echo "
                            ";
            // line 151
            $this->displayBlock('photo_gallery_sectiongr', $context, $blocks);
            // line 156
            echo "
                            ";
            // line 157
            $this->displayBlock('newsletter_sectiongr', $context, $blocks);
            // line 160
            echo "
    ";
        }
        // line 162
        echo "


      ";
        // line 165
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 166
            echo "                            ";
            $this->displayBlock('carouselar', $context, $blocks);
            // line 169
            echo "                          
                            ";
            // line 170
            $this->displayBlock('lead_form_floatar', $context, $blocks);
            // line 173
            echo "
                            ";
            // line 174
            $this->displayBlock('lead_form_fixar', $context, $blocks);
            // line 177
            echo "                            
                            ";
            // line 178
            $this->displayBlock('home_icon_sectionar', $context, $blocks);
            // line 183
            echo "
                            ";
            // line 184
            $this->displayBlock('home_heading_sectionar', $context, $blocks);
            // line 187
            echo "
                            ";
            // line 188
            $this->displayBlock('info_sectionar', $context, $blocks);
            // line 193
            echo "
                            ";
            // line 194
            $this->displayBlock('video_play_sectionar', $context, $blocks);
            // line 197
            echo "
                            ";
            // line 198
            $this->displayBlock('photo_gallery_sectionar', $context, $blocks);
            // line 203
            echo "
                            ";
            // line 204
            $this->displayBlock('newsletter_sectionar', $context, $blocks);
            // line 207
            echo "
    ";
        }
        // line 208
        echo " 

 ";
    }

    // line 13
    public function block_MegamenuResponsive($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                                 ";
        $this->loadTemplate("/inc/megamenu-responsive.html.twig", "/homes/lab/index.twig", 14)->display($context);
        // line 15
        echo "                            ";
    }

    // line 38
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                              <div class=\"container \">
                                ";
        // line 40
        $this->loadTemplate("/components/index/fr/videoGallerySection.twig", "/homes/lab/index.twig", 40)->display($context);
        // line 41
        echo "                              </div>
                            ";
    }

    // line 72
    public function block_carouselan($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                                ";
        $this->loadTemplate("/components/index/en/showcase_caroussel.twig", "/homes/lab/index.twig", 73)->display($context);
        // line 74
        echo "                            ";
    }

    // line 76
    public function block_lead_form_floaten($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 77
        $this->loadTemplate("/components/index/en/lead_form_float.twig", "/homes/lab/index.twig", 77)->display($context);
        // line 78
        echo "                            ";
    }

    // line 80
    public function block_lead_form_fixen($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 81
        $this->loadTemplate("/components/index/en/lead_form_fix.twig", "/homes/lab/index.twig", 81)->display($context);
        // line 82
        echo "                            ";
    }

    // line 84
    public function block_home_icon_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                <div class=\"container \">
                                ";
        // line 86
        $this->loadTemplate("/components/index/en/home_icon_section.twig", "/homes/lab/index.twig", 86)->display($context);
        // line 87
        echo "                                </div>
                            ";
    }

    // line 90
    public function block_home_heading_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                ";
        $this->loadTemplate("/components/index/en/home_heading_section.twig", "/homes/lab/index.twig", 91)->display($context);
        // line 92
        echo "                            ";
    }

    // line 94
    public function block_info_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "                              <div class=\"container \">
                                ";
        // line 96
        $this->loadTemplate("/components/index/en/info_section.twig", "/homes/lab/index.twig", 96)->display($context);
        // line 97
        echo "                              </div>
                            ";
    }

    // line 100
    public function block_video_play_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                            ";
        $this->loadTemplate("/components/index/en/video_play_section.twig", "/homes/lab/index.twig", 101)->display($context);
        // line 102
        echo "                            ";
    }

    // line 104
    public function block_photo_gallery_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                              <div class=\"container \">
                                ";
        // line 106
        $this->loadTemplate("/components/index/en/photo_gallery_section.twig", "/homes/lab/index.twig", 106)->display($context);
        // line 107
        echo "                              </div>
                            ";
    }

    // line 110
    public function block_newsletter_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                              ";
        $this->loadTemplate("/components/index/en/newsletter_section.twig", "/homes/lab/index.twig", 111)->display($context);
        // line 112
        echo "                            ";
    }

    // line 119
    public function block_carouselgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                                ";
        $this->loadTemplate("/components/index/gr/showcase_caroussel.twig", "/homes/lab/index.twig", 120)->display($context);
        // line 121
        echo "                            ";
    }

    // line 123
    public function block_lead_form_floatgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 124
        $this->loadTemplate("/components/index/gr/lead_form_float.twig", "/homes/lab/index.twig", 124)->display($context);
        // line 125
        echo "                            ";
    }

    // line 127
    public function block_lead_form_fixgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 128
        $this->loadTemplate("/components/index/gr/lead_form_fix.twig", "/homes/lab/index.twig", 128)->display($context);
        // line 129
        echo "                            ";
    }

    // line 131
    public function block_home_icon_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                                <div class=\"container \">
                                ";
        // line 133
        $this->loadTemplate("/components/index/gr/home_icon_section.twig", "/homes/lab/index.twig", 133)->display($context);
        // line 134
        echo "                                </div>
                            ";
    }

    // line 137
    public function block_home_heading_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                                ";
        $this->loadTemplate("/components/index/gr/home_heading_section.twig", "/homes/lab/index.twig", 138)->display($context);
        // line 139
        echo "                            ";
    }

    // line 141
    public function block_info_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "                              <div class=\"container \">
                                ";
        // line 143
        $this->loadTemplate("/components/index/gr/info_section.twig", "/homes/lab/index.twig", 143)->display($context);
        // line 144
        echo "                              </div>
                            ";
    }

    // line 147
    public function block_video_play_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                            ";
        $this->loadTemplate("/components/index/gr/video_play_section.twig", "/homes/lab/index.twig", 148)->display($context);
        // line 149
        echo "                            ";
    }

    // line 151
    public function block_photo_gallery_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                              <div class=\"container \">
                                ";
        // line 153
        $this->loadTemplate("/components/index/gr/photo_gallery_section.twig", "/homes/lab/index.twig", 153)->display($context);
        // line 154
        echo "                              </div>
                            ";
    }

    // line 157
    public function block_newsletter_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "                              ";
        $this->loadTemplate("/components/index/gr/newsletter_section.twig", "/homes/lab/index.twig", 158)->display($context);
        // line 159
        echo "                            ";
    }

    // line 166
    public function block_carouselar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                                ";
        $this->loadTemplate("/components/index/ar/showcase_caroussel.twig", "/homes/lab/index.twig", 167)->display($context);
        // line 168
        echo "                            ";
    }

    // line 170
    public function block_lead_form_floatar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 171
        $this->loadTemplate("/components/index/ar/lead_form_float.twig", "/homes/lab/index.twig", 171)->display($context);
        // line 172
        echo "                            ";
    }

    // line 174
    public function block_lead_form_fixar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 175
        $this->loadTemplate("/components/index/ar/lead_form_fix.twig", "/homes/lab/index.twig", 175)->display($context);
        // line 176
        echo "                            ";
    }

    // line 178
    public function block_home_icon_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                                <div class=\"container \">
                                ";
        // line 180
        $this->loadTemplate("/components/index/ar/home_icon_section.twig", "/homes/lab/index.twig", 180)->display($context);
        // line 181
        echo "                                </div>
                            ";
    }

    // line 184
    public function block_home_heading_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                                ";
        $this->loadTemplate("/components/index/ar/home_heading_section.twig", "/homes/lab/index.twig", 185)->display($context);
        // line 186
        echo "                            ";
    }

    // line 188
    public function block_info_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "                              <div class=\"container \">
                                ";
        // line 190
        $this->loadTemplate("/components/index/ar/info_section.twig", "/homes/lab/index.twig", 190)->display($context);
        // line 191
        echo "                              </div>
                            ";
    }

    // line 194
    public function block_video_play_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "                            ";
        $this->loadTemplate("/components/index/ar/video_play_section.twig", "/homes/lab/index.twig", 195)->display($context);
        // line 196
        echo "                            ";
    }

    // line 198
    public function block_photo_gallery_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        echo "                              <div class=\"container \">
                                ";
        // line 200
        $this->loadTemplate("/components/index/ar/photo_gallery_section.twig", "/homes/lab/index.twig", 200)->display($context);
        // line 201
        echo "                              </div>
                            ";
    }

    // line 204
    public function block_newsletter_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "                              ";
        $this->loadTemplate("/components/index/ar/newsletter_section.twig", "/homes/lab/index.twig", 205)->display($context);
        // line 206
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
        return array (  635 => 206,  632 => 205,  628 => 204,  623 => 201,  621 => 200,  618 => 199,  614 => 198,  610 => 196,  607 => 195,  603 => 194,  598 => 191,  596 => 190,  593 => 189,  589 => 188,  585 => 186,  582 => 185,  578 => 184,  573 => 181,  571 => 180,  568 => 179,  564 => 178,  560 => 176,  558 => 175,  552 => 174,  548 => 172,  546 => 171,  540 => 170,  536 => 168,  533 => 167,  529 => 166,  525 => 159,  522 => 158,  518 => 157,  513 => 154,  511 => 153,  508 => 152,  504 => 151,  500 => 149,  497 => 148,  493 => 147,  488 => 144,  486 => 143,  483 => 142,  479 => 141,  475 => 139,  472 => 138,  468 => 137,  463 => 134,  461 => 133,  458 => 132,  454 => 131,  450 => 129,  448 => 128,  442 => 127,  438 => 125,  436 => 124,  430 => 123,  426 => 121,  423 => 120,  419 => 119,  415 => 112,  412 => 111,  408 => 110,  403 => 107,  401 => 106,  398 => 105,  394 => 104,  390 => 102,  387 => 101,  383 => 100,  378 => 97,  376 => 96,  373 => 95,  369 => 94,  365 => 92,  362 => 91,  358 => 90,  353 => 87,  351 => 86,  348 => 85,  344 => 84,  340 => 82,  338 => 81,  332 => 80,  328 => 78,  326 => 77,  320 => 76,  316 => 74,  313 => 73,  309 => 72,  304 => 41,  302 => 40,  299 => 39,  295 => 38,  291 => 15,  288 => 14,  284 => 13,  278 => 208,  274 => 207,  272 => 204,  269 => 203,  267 => 198,  264 => 197,  262 => 194,  259 => 193,  257 => 188,  254 => 187,  252 => 184,  249 => 183,  247 => 178,  244 => 177,  242 => 174,  239 => 173,  237 => 170,  234 => 169,  231 => 166,  229 => 165,  224 => 162,  220 => 160,  218 => 157,  215 => 156,  213 => 151,  210 => 150,  208 => 147,  205 => 146,  203 => 141,  200 => 140,  198 => 137,  195 => 136,  193 => 131,  190 => 130,  188 => 127,  185 => 126,  183 => 123,  180 => 122,  177 => 119,  175 => 118,  171 => 116,  166 => 113,  164 => 110,  161 => 109,  159 => 104,  156 => 103,  154 => 100,  151 => 99,  149 => 94,  146 => 93,  144 => 90,  141 => 89,  139 => 84,  136 => 83,  134 => 80,  131 => 79,  129 => 76,  126 => 75,  123 => 72,  121 => 71,  117 => 69,  114 => 67,  110 => 42,  108 => 38,  104 => 36,  98 => 15,  96 => 13,  93 => 12,  90 => 8,  87 => 6,  83 => 5,  76 => 3,  65 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> LAB --- </title> {% endblock  %}
  
{% block content %}

        {# {% if LANG == 'fr' %} #}

                        {# {% block simpleMegamenu %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}  #}

                            {% block MegamenuResponsive %}
                                 {% include('/inc/megamenu-responsive.html.twig') %}
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
                            {% endblock  %}#}


                             {% block video_gallery_sectionfr %}
                              <div class=\"container \">
                                {% include('/components/index/fr/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %} 

                            {# {% block home_heading_sectionfr %}
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
                            {% endblock  %}  #}

        {# {% endif %} #}
      
 
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

    {% endif %} 

 {% endblock  %}
", "/homes/lab/index.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/lab/index.twig");
    }
}
