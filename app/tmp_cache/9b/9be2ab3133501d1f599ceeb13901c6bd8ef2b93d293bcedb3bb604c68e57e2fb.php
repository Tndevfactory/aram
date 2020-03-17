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
            'lead_form_fixfr' => [$this, 'block_lead_form_fixfr'],
            'home_icon_sectionfr' => [$this, 'block_home_icon_sectionfr'],
            'home_heading_sectionfr' => [$this, 'block_home_heading_sectionfr'],
            'info_sectionfr' => [$this, 'block_info_sectionfr'],
            'video_play_sectionfr' => [$this, 'block_video_play_sectionfr'],
            'photo_gallery_sectionfr' => [$this, 'block_photo_gallery_sectionfr'],
            'video_gallery_sectionfr' => [$this, 'block_video_gallery_sectionfr'],
            'newsletter_sectionfr' => [$this, 'block_newsletter_sectionfr'],
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\lab\\index.twig", 2);
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
        // line 31
        $this->displayBlock('home_heading_sectionfr', $context, $blocks);
        // line 34
        echo "
                            ";
        // line 35
        $this->displayBlock('info_sectionfr', $context, $blocks);
        // line 40
        echo "
                            ";
        // line 41
        $this->displayBlock('video_play_sectionfr', $context, $blocks);
        // line 44
        echo "
                            ";
        // line 45
        $this->displayBlock('photo_gallery_sectionfr', $context, $blocks);
        // line 50
        echo "
                            ";
        // line 51
        $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
        // line 56
        echo "
                            ";
        // line 57
        $this->displayBlock('newsletter_sectionfr', $context, $blocks);
        // line 59
        echo "  

        ";
        // line 62
        echo "      
 
      ";
        // line 64
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 65
            echo "                            ";
            $this->displayBlock('carouselan', $context, $blocks);
            // line 68
            echo "                          
                            ";
            // line 69
            $this->displayBlock('lead_form_floaten', $context, $blocks);
            // line 72
            echo "
                            ";
            // line 73
            $this->displayBlock('lead_form_fixen', $context, $blocks);
            // line 76
            echo "                            
                            ";
            // line 77
            $this->displayBlock('home_icon_sectionen', $context, $blocks);
            // line 82
            echo "
                            ";
            // line 83
            $this->displayBlock('home_heading_sectionen', $context, $blocks);
            // line 86
            echo "
                            ";
            // line 87
            $this->displayBlock('info_sectionen', $context, $blocks);
            // line 92
            echo "
                            ";
            // line 93
            $this->displayBlock('video_play_sectionen', $context, $blocks);
            // line 96
            echo "
                            ";
            // line 97
            $this->displayBlock('photo_gallery_sectionen', $context, $blocks);
            // line 102
            echo "
                            ";
            // line 103
            $this->displayBlock('newsletter_sectionen', $context, $blocks);
            // line 106
            echo "

    ";
        }
        // line 109
        echo "

      ";
        // line 111
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 112
            echo "                            ";
            $this->displayBlock('carouselgr', $context, $blocks);
            // line 115
            echo "                          
                            ";
            // line 116
            $this->displayBlock('lead_form_floatgr', $context, $blocks);
            // line 119
            echo "
                            ";
            // line 120
            $this->displayBlock('lead_form_fixgr', $context, $blocks);
            // line 123
            echo "                            
                            ";
            // line 124
            $this->displayBlock('home_icon_sectiongr', $context, $blocks);
            // line 129
            echo "
                            ";
            // line 130
            $this->displayBlock('home_heading_sectiongr', $context, $blocks);
            // line 133
            echo "
                            ";
            // line 134
            $this->displayBlock('info_sectiongr', $context, $blocks);
            // line 139
            echo "
                            ";
            // line 140
            $this->displayBlock('video_play_sectiongr', $context, $blocks);
            // line 143
            echo "
                            ";
            // line 144
            $this->displayBlock('photo_gallery_sectiongr', $context, $blocks);
            // line 149
            echo "
                            ";
            // line 150
            $this->displayBlock('newsletter_sectiongr', $context, $blocks);
            // line 153
            echo "
    ";
        }
        // line 155
        echo "


      ";
        // line 158
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 159
            echo "                            ";
            $this->displayBlock('carouselar', $context, $blocks);
            // line 162
            echo "                          
                            ";
            // line 163
            $this->displayBlock('lead_form_floatar', $context, $blocks);
            // line 166
            echo "
                            ";
            // line 167
            $this->displayBlock('lead_form_fixar', $context, $blocks);
            // line 170
            echo "                            
                            ";
            // line 171
            $this->displayBlock('home_icon_sectionar', $context, $blocks);
            // line 176
            echo "
                            ";
            // line 177
            $this->displayBlock('home_heading_sectionar', $context, $blocks);
            // line 180
            echo "
                            ";
            // line 181
            $this->displayBlock('info_sectionar', $context, $blocks);
            // line 186
            echo "
                            ";
            // line 187
            $this->displayBlock('video_play_sectionar', $context, $blocks);
            // line 190
            echo "
                            ";
            // line 191
            $this->displayBlock('photo_gallery_sectionar', $context, $blocks);
            // line 196
            echo "
                            ";
            // line 197
            $this->displayBlock('newsletter_sectionar', $context, $blocks);
            // line 200
            echo "
    ";
        }
        // line 201
        echo " 

 ";
    }

    // line 13
    public function block_carouselfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                                ";
        $this->loadTemplate("/components/index/fr/showcaseBackgroundImage.twig", "\\homes\\lab\\index.twig", 14)->display($context);
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
        $this->loadTemplate("/components/index/fr/leadFormFloat.twig", "\\homes\\lab\\index.twig", 18)->display($context);
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
        $this->loadTemplate("/components/index/fr/leadFormFix.twig", "\\homes\\lab\\index.twig", 22)->display($context);
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
        $this->loadTemplate("/components/index/fr/homeIconSection.twig", "\\homes\\lab\\index.twig", 27)->display($context);
        // line 28
        echo "                                </div>
                            ";
    }

    // line 31
    public function block_home_heading_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeHeadingSection.twig", "\\homes\\lab\\index.twig", 32)->display($context);
        // line 33
        echo "                            ";
    }

    // line 35
    public function block_info_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                              <div class=\"container \">
                                ";
        // line 37
        $this->loadTemplate("/components/index/fr/infoSection.twig", "\\homes\\lab\\index.twig", 37)->display($context);
        // line 38
        echo "                              </div>
                            ";
    }

    // line 41
    public function block_video_play_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                            ";
        $this->loadTemplate("/components/index/fr/videoPlaySection.twig", "\\homes\\lab\\index.twig", 42)->display($context);
        // line 43
        echo "                            ";
    }

    // line 45
    public function block_photo_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                              <div class=\"container \">
                                ";
        // line 47
        $this->loadTemplate("/components/index/fr/photoGallerySection.twig", "\\homes\\lab\\index.twig", 47)->display($context);
        // line 48
        echo "                              </div>
                            ";
    }

    // line 51
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                              <div class=\"container \">
                                ";
        // line 53
        $this->loadTemplate("/components/index/fr/videoGallerySection.twig", "\\homes\\lab\\index.twig", 53)->display($context);
        // line 54
        echo "                              </div>
                            ";
    }

    // line 57
    public function block_newsletter_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                              ";
        $this->loadTemplate("/components/index/fr/newsletterSection.twig", "\\homes\\lab\\index.twig", 58)->display($context);
        // line 59
        echo "                            ";
    }

    // line 65
    public function block_carouselan($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                                ";
        $this->loadTemplate("/components/index/en/showcase_caroussel.twig", "\\homes\\lab\\index.twig", 66)->display($context);
        // line 67
        echo "                            ";
    }

    // line 69
    public function block_lead_form_floaten($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 70
        $this->loadTemplate("/components/index/en/lead_form_float.twig", "\\homes\\lab\\index.twig", 70)->display($context);
        // line 71
        echo "                            ";
    }

    // line 73
    public function block_lead_form_fixen($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 74
        $this->loadTemplate("/components/index/en/lead_form_fix.twig", "\\homes\\lab\\index.twig", 74)->display($context);
        // line 75
        echo "                            ";
    }

    // line 77
    public function block_home_icon_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                <div class=\"container \">
                                ";
        // line 79
        $this->loadTemplate("/components/index/en/home_icon_section.twig", "\\homes\\lab\\index.twig", 79)->display($context);
        // line 80
        echo "                                </div>
                            ";
    }

    // line 83
    public function block_home_heading_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                                ";
        $this->loadTemplate("/components/index/en/home_heading_section.twig", "\\homes\\lab\\index.twig", 84)->display($context);
        // line 85
        echo "                            ";
    }

    // line 87
    public function block_info_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                              <div class=\"container \">
                                ";
        // line 89
        $this->loadTemplate("/components/index/en/info_section.twig", "\\homes\\lab\\index.twig", 89)->display($context);
        // line 90
        echo "                              </div>
                            ";
    }

    // line 93
    public function block_video_play_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                            ";
        $this->loadTemplate("/components/index/en/video_play_section.twig", "\\homes\\lab\\index.twig", 94)->display($context);
        // line 95
        echo "                            ";
    }

    // line 97
    public function block_photo_gallery_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                              <div class=\"container \">
                                ";
        // line 99
        $this->loadTemplate("/components/index/en/photo_gallery_section.twig", "\\homes\\lab\\index.twig", 99)->display($context);
        // line 100
        echo "                              </div>
                            ";
    }

    // line 103
    public function block_newsletter_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                              ";
        $this->loadTemplate("/components/index/en/newsletter_section.twig", "\\homes\\lab\\index.twig", 104)->display($context);
        // line 105
        echo "                            ";
    }

    // line 112
    public function block_carouselgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "                                ";
        $this->loadTemplate("/components/index/gr/showcase_caroussel.twig", "\\homes\\lab\\index.twig", 113)->display($context);
        // line 114
        echo "                            ";
    }

    // line 116
    public function block_lead_form_floatgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 117
        $this->loadTemplate("/components/index/gr/lead_form_float.twig", "\\homes\\lab\\index.twig", 117)->display($context);
        // line 118
        echo "                            ";
    }

    // line 120
    public function block_lead_form_fixgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 121
        $this->loadTemplate("/components/index/gr/lead_form_fix.twig", "\\homes\\lab\\index.twig", 121)->display($context);
        // line 122
        echo "                            ";
    }

    // line 124
    public function block_home_icon_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                                <div class=\"container \">
                                ";
        // line 126
        $this->loadTemplate("/components/index/gr/home_icon_section.twig", "\\homes\\lab\\index.twig", 126)->display($context);
        // line 127
        echo "                                </div>
                            ";
    }

    // line 130
    public function block_home_heading_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                                ";
        $this->loadTemplate("/components/index/gr/home_heading_section.twig", "\\homes\\lab\\index.twig", 131)->display($context);
        // line 132
        echo "                            ";
    }

    // line 134
    public function block_info_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                              <div class=\"container \">
                                ";
        // line 136
        $this->loadTemplate("/components/index/gr/info_section.twig", "\\homes\\lab\\index.twig", 136)->display($context);
        // line 137
        echo "                              </div>
                            ";
    }

    // line 140
    public function block_video_play_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                            ";
        $this->loadTemplate("/components/index/gr/video_play_section.twig", "\\homes\\lab\\index.twig", 141)->display($context);
        // line 142
        echo "                            ";
    }

    // line 144
    public function block_photo_gallery_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                              <div class=\"container \">
                                ";
        // line 146
        $this->loadTemplate("/components/index/gr/photo_gallery_section.twig", "\\homes\\lab\\index.twig", 146)->display($context);
        // line 147
        echo "                              </div>
                            ";
    }

    // line 150
    public function block_newsletter_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                              ";
        $this->loadTemplate("/components/index/gr/newsletter_section.twig", "\\homes\\lab\\index.twig", 151)->display($context);
        // line 152
        echo "                            ";
    }

    // line 159
    public function block_carouselar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "                                ";
        $this->loadTemplate("/components/index/ar/showcase_caroussel.twig", "\\homes\\lab\\index.twig", 160)->display($context);
        // line 161
        echo "                            ";
    }

    // line 163
    public function block_lead_form_floatar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 164
        $this->loadTemplate("/components/index/ar/lead_form_float.twig", "\\homes\\lab\\index.twig", 164)->display($context);
        // line 165
        echo "                            ";
    }

    // line 167
    public function block_lead_form_fixar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 168
        $this->loadTemplate("/components/index/ar/lead_form_fix.twig", "\\homes\\lab\\index.twig", 168)->display($context);
        // line 169
        echo "                            ";
    }

    // line 171
    public function block_home_icon_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "                                <div class=\"container \">
                                ";
        // line 173
        $this->loadTemplate("/components/index/ar/home_icon_section.twig", "\\homes\\lab\\index.twig", 173)->display($context);
        // line 174
        echo "                                </div>
                            ";
    }

    // line 177
    public function block_home_heading_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "                                ";
        $this->loadTemplate("/components/index/ar/home_heading_section.twig", "\\homes\\lab\\index.twig", 178)->display($context);
        // line 179
        echo "                            ";
    }

    // line 181
    public function block_info_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "                              <div class=\"container \">
                                ";
        // line 183
        $this->loadTemplate("/components/index/ar/info_section.twig", "\\homes\\lab\\index.twig", 183)->display($context);
        // line 184
        echo "                              </div>
                            ";
    }

    // line 187
    public function block_video_play_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "                            ";
        $this->loadTemplate("/components/index/ar/video_play_section.twig", "\\homes\\lab\\index.twig", 188)->display($context);
        // line 189
        echo "                            ";
    }

    // line 191
    public function block_photo_gallery_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "                              <div class=\"container \">
                                ";
        // line 193
        $this->loadTemplate("/components/index/ar/photo_gallery_section.twig", "\\homes\\lab\\index.twig", 193)->display($context);
        // line 194
        echo "                              </div>
                            ";
    }

    // line 197
    public function block_newsletter_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "                              ";
        $this->loadTemplate("/components/index/ar/newsletter_section.twig", "\\homes\\lab\\index.twig", 198)->display($context);
        // line 199
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
        return array (  772 => 199,  769 => 198,  765 => 197,  760 => 194,  758 => 193,  755 => 192,  751 => 191,  747 => 189,  744 => 188,  740 => 187,  735 => 184,  733 => 183,  730 => 182,  726 => 181,  722 => 179,  719 => 178,  715 => 177,  710 => 174,  708 => 173,  705 => 172,  701 => 171,  697 => 169,  695 => 168,  689 => 167,  685 => 165,  683 => 164,  677 => 163,  673 => 161,  670 => 160,  666 => 159,  662 => 152,  659 => 151,  655 => 150,  650 => 147,  648 => 146,  645 => 145,  641 => 144,  637 => 142,  634 => 141,  630 => 140,  625 => 137,  623 => 136,  620 => 135,  616 => 134,  612 => 132,  609 => 131,  605 => 130,  600 => 127,  598 => 126,  595 => 125,  591 => 124,  587 => 122,  585 => 121,  579 => 120,  575 => 118,  573 => 117,  567 => 116,  563 => 114,  560 => 113,  556 => 112,  552 => 105,  549 => 104,  545 => 103,  540 => 100,  538 => 99,  535 => 98,  531 => 97,  527 => 95,  524 => 94,  520 => 93,  515 => 90,  513 => 89,  510 => 88,  506 => 87,  502 => 85,  499 => 84,  495 => 83,  490 => 80,  488 => 79,  485 => 78,  481 => 77,  477 => 75,  475 => 74,  469 => 73,  465 => 71,  463 => 70,  457 => 69,  453 => 67,  450 => 66,  446 => 65,  442 => 59,  439 => 58,  435 => 57,  430 => 54,  428 => 53,  425 => 52,  421 => 51,  416 => 48,  414 => 47,  411 => 46,  407 => 45,  403 => 43,  400 => 42,  396 => 41,  391 => 38,  389 => 37,  386 => 36,  382 => 35,  378 => 33,  375 => 32,  371 => 31,  366 => 28,  364 => 27,  361 => 26,  357 => 25,  353 => 23,  351 => 22,  345 => 21,  341 => 19,  339 => 18,  333 => 17,  329 => 15,  326 => 14,  322 => 13,  316 => 201,  312 => 200,  310 => 197,  307 => 196,  305 => 191,  302 => 190,  300 => 187,  297 => 186,  295 => 181,  292 => 180,  290 => 177,  287 => 176,  285 => 171,  282 => 170,  280 => 167,  277 => 166,  275 => 163,  272 => 162,  269 => 159,  267 => 158,  262 => 155,  258 => 153,  256 => 150,  253 => 149,  251 => 144,  248 => 143,  246 => 140,  243 => 139,  241 => 134,  238 => 133,  236 => 130,  233 => 129,  231 => 124,  228 => 123,  226 => 120,  223 => 119,  221 => 116,  218 => 115,  215 => 112,  213 => 111,  209 => 109,  204 => 106,  202 => 103,  199 => 102,  197 => 97,  194 => 96,  192 => 93,  189 => 92,  187 => 87,  184 => 86,  182 => 83,  179 => 82,  177 => 77,  174 => 76,  172 => 73,  169 => 72,  167 => 69,  164 => 68,  161 => 65,  159 => 64,  155 => 62,  151 => 59,  149 => 57,  146 => 56,  144 => 51,  141 => 50,  139 => 45,  136 => 44,  134 => 41,  131 => 40,  129 => 35,  126 => 34,  124 => 31,  121 => 30,  119 => 25,  116 => 24,  114 => 21,  111 => 20,  109 => 17,  106 => 16,  104 => 13,  101 => 12,  98 => 8,  95 => 6,  91 => 5,  84 => 3,  73 => 2,);
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
", "\\homes\\lab\\index.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\homes\\lab\\index.twig");
    }
}
