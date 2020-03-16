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
        // line 34
        $this->displayBlock('home_heading_sectionfr', $context, $blocks);
        // line 37
        echo "
                            ";
        // line 38
        $this->displayBlock('info_sectionfr', $context, $blocks);
        // line 43
        echo "
                            ";
        // line 44
        $this->displayBlock('video_play_sectionfr', $context, $blocks);
        // line 47
        echo "
                            ";
        // line 48
        $this->displayBlock('photo_gallery_sectionfr', $context, $blocks);
        // line 53
        echo "
                            ";
        // line 54
        $this->displayBlock('video_gallery_sectionfr', $context, $blocks);
        // line 59
        echo "
                            ";
        // line 60
        $this->displayBlock('newsletter_sectionfr', $context, $blocks);
        // line 62
        echo "  

        ";
        // line 65
        echo "      
 
      ";
        // line 67
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 68
            echo "                            ";
            $this->displayBlock('carouselan', $context, $blocks);
            // line 71
            echo "                          
                            ";
            // line 72
            $this->displayBlock('lead_form_floaten', $context, $blocks);
            // line 75
            echo "
                            ";
            // line 76
            $this->displayBlock('lead_form_fixen', $context, $blocks);
            // line 79
            echo "                            
                            ";
            // line 80
            $this->displayBlock('home_icon_sectionen', $context, $blocks);
            // line 85
            echo "
                            ";
            // line 86
            $this->displayBlock('home_heading_sectionen', $context, $blocks);
            // line 89
            echo "
                            ";
            // line 90
            $this->displayBlock('info_sectionen', $context, $blocks);
            // line 95
            echo "
                            ";
            // line 96
            $this->displayBlock('video_play_sectionen', $context, $blocks);
            // line 99
            echo "
                            ";
            // line 100
            $this->displayBlock('photo_gallery_sectionen', $context, $blocks);
            // line 105
            echo "
                            ";
            // line 106
            $this->displayBlock('newsletter_sectionen', $context, $blocks);
            // line 109
            echo "

    ";
        }
        // line 112
        echo "

      ";
        // line 114
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 115
            echo "                            ";
            $this->displayBlock('carouselgr', $context, $blocks);
            // line 118
            echo "                          
                            ";
            // line 119
            $this->displayBlock('lead_form_floatgr', $context, $blocks);
            // line 122
            echo "
                            ";
            // line 123
            $this->displayBlock('lead_form_fixgr', $context, $blocks);
            // line 126
            echo "                            
                            ";
            // line 127
            $this->displayBlock('home_icon_sectiongr', $context, $blocks);
            // line 132
            echo "
                            ";
            // line 133
            $this->displayBlock('home_heading_sectiongr', $context, $blocks);
            // line 136
            echo "
                            ";
            // line 137
            $this->displayBlock('info_sectiongr', $context, $blocks);
            // line 142
            echo "
                            ";
            // line 143
            $this->displayBlock('video_play_sectiongr', $context, $blocks);
            // line 146
            echo "
                            ";
            // line 147
            $this->displayBlock('photo_gallery_sectiongr', $context, $blocks);
            // line 152
            echo "
                            ";
            // line 153
            $this->displayBlock('newsletter_sectiongr', $context, $blocks);
            // line 156
            echo "
    ";
        }
        // line 158
        echo "


      ";
        // line 161
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 162
            echo "                            ";
            $this->displayBlock('carouselar', $context, $blocks);
            // line 165
            echo "                          
                            ";
            // line 166
            $this->displayBlock('lead_form_floatar', $context, $blocks);
            // line 169
            echo "
                            ";
            // line 170
            $this->displayBlock('lead_form_fixar', $context, $blocks);
            // line 173
            echo "                            
                            ";
            // line 174
            $this->displayBlock('home_icon_sectionar', $context, $blocks);
            // line 179
            echo "
                            ";
            // line 180
            $this->displayBlock('home_heading_sectionar', $context, $blocks);
            // line 183
            echo "
                            ";
            // line 184
            $this->displayBlock('info_sectionar', $context, $blocks);
            // line 189
            echo "
                            ";
            // line 190
            $this->displayBlock('video_play_sectionar', $context, $blocks);
            // line 193
            echo "
                            ";
            // line 194
            $this->displayBlock('photo_gallery_sectionar', $context, $blocks);
            // line 199
            echo "
                            ";
            // line 200
            $this->displayBlock('newsletter_sectionar', $context, $blocks);
            // line 203
            echo "
    ";
        }
        // line 204
        echo " 

 ";
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

    // line 34
    public function block_home_heading_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                                ";
        $this->loadTemplate("/components/index/fr/homeHeadingSection.twig", "/homes/lab/index.twig", 35)->display($context);
        // line 36
        echo "                            ";
    }

    // line 38
    public function block_info_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                              <div class=\"container \">
                                ";
        // line 40
        $this->loadTemplate("/components/index/fr/infoSection.twig", "/homes/lab/index.twig", 40)->display($context);
        // line 41
        echo "                              </div>
                            ";
    }

    // line 44
    public function block_video_play_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                            ";
        $this->loadTemplate("/components/index/fr/videoPlaySection.twig", "/homes/lab/index.twig", 45)->display($context);
        // line 46
        echo "                            ";
    }

    // line 48
    public function block_photo_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                              <div class=\"container \">
                                ";
        // line 50
        $this->loadTemplate("/components/index/fr/photoGallerySection.twig", "/homes/lab/index.twig", 50)->display($context);
        // line 51
        echo "                              </div>
                            ";
    }

    // line 54
    public function block_video_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                              <div class=\"container \">
                                ";
        // line 56
        $this->loadTemplate("/components/index/fr/videoGallerySection.twig", "/homes/lab/index.twig", 56)->display($context);
        // line 57
        echo "                              </div>
                            ";
    }

    // line 60
    public function block_newsletter_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                              ";
        $this->loadTemplate("/components/index/fr/newsletterSection.twig", "/homes/lab/index.twig", 61)->display($context);
        // line 62
        echo "                            ";
    }

    // line 68
    public function block_carouselan($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                ";
        $this->loadTemplate("/components/index/en/showcase_caroussel.twig", "/homes/lab/index.twig", 69)->display($context);
        // line 70
        echo "                            ";
    }

    // line 72
    public function block_lead_form_floaten($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 73
        $this->loadTemplate("/components/index/en/lead_form_float.twig", "/homes/lab/index.twig", 73)->display($context);
        // line 74
        echo "                            ";
    }

    // line 76
    public function block_lead_form_fixen($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 77
        $this->loadTemplate("/components/index/en/lead_form_fix.twig", "/homes/lab/index.twig", 77)->display($context);
        // line 78
        echo "                            ";
    }

    // line 80
    public function block_home_icon_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                                <div class=\"container \">
                                ";
        // line 82
        $this->loadTemplate("/components/index/en/home_icon_section.twig", "/homes/lab/index.twig", 82)->display($context);
        // line 83
        echo "                                </div>
                            ";
    }

    // line 86
    public function block_home_heading_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                                ";
        $this->loadTemplate("/components/index/en/home_heading_section.twig", "/homes/lab/index.twig", 87)->display($context);
        // line 88
        echo "                            ";
    }

    // line 90
    public function block_info_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                              <div class=\"container \">
                                ";
        // line 92
        $this->loadTemplate("/components/index/en/info_section.twig", "/homes/lab/index.twig", 92)->display($context);
        // line 93
        echo "                              </div>
                            ";
    }

    // line 96
    public function block_video_play_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                            ";
        $this->loadTemplate("/components/index/en/video_play_section.twig", "/homes/lab/index.twig", 97)->display($context);
        // line 98
        echo "                            ";
    }

    // line 100
    public function block_photo_gallery_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                              <div class=\"container \">
                                ";
        // line 102
        $this->loadTemplate("/components/index/en/photo_gallery_section.twig", "/homes/lab/index.twig", 102)->display($context);
        // line 103
        echo "                              </div>
                            ";
    }

    // line 106
    public function block_newsletter_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                              ";
        $this->loadTemplate("/components/index/en/newsletter_section.twig", "/homes/lab/index.twig", 107)->display($context);
        // line 108
        echo "                            ";
    }

    // line 115
    public function block_carouselgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                                ";
        $this->loadTemplate("/components/index/gr/showcase_caroussel.twig", "/homes/lab/index.twig", 116)->display($context);
        // line 117
        echo "                            ";
    }

    // line 119
    public function block_lead_form_floatgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 120
        $this->loadTemplate("/components/index/gr/lead_form_float.twig", "/homes/lab/index.twig", 120)->display($context);
        // line 121
        echo "                            ";
    }

    // line 123
    public function block_lead_form_fixgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 124
        $this->loadTemplate("/components/index/gr/lead_form_fix.twig", "/homes/lab/index.twig", 124)->display($context);
        // line 125
        echo "                            ";
    }

    // line 127
    public function block_home_icon_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                                <div class=\"container \">
                                ";
        // line 129
        $this->loadTemplate("/components/index/gr/home_icon_section.twig", "/homes/lab/index.twig", 129)->display($context);
        // line 130
        echo "                                </div>
                            ";
    }

    // line 133
    public function block_home_heading_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                                ";
        $this->loadTemplate("/components/index/gr/home_heading_section.twig", "/homes/lab/index.twig", 134)->display($context);
        // line 135
        echo "                            ";
    }

    // line 137
    public function block_info_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                              <div class=\"container \">
                                ";
        // line 139
        $this->loadTemplate("/components/index/gr/info_section.twig", "/homes/lab/index.twig", 139)->display($context);
        // line 140
        echo "                              </div>
                            ";
    }

    // line 143
    public function block_video_play_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "                            ";
        $this->loadTemplate("/components/index/gr/video_play_section.twig", "/homes/lab/index.twig", 144)->display($context);
        // line 145
        echo "                            ";
    }

    // line 147
    public function block_photo_gallery_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                              <div class=\"container \">
                                ";
        // line 149
        $this->loadTemplate("/components/index/gr/photo_gallery_section.twig", "/homes/lab/index.twig", 149)->display($context);
        // line 150
        echo "                              </div>
                            ";
    }

    // line 153
    public function block_newsletter_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "                              ";
        $this->loadTemplate("/components/index/gr/newsletter_section.twig", "/homes/lab/index.twig", 154)->display($context);
        // line 155
        echo "                            ";
    }

    // line 162
    public function block_carouselar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "                                ";
        $this->loadTemplate("/components/index/ar/showcase_caroussel.twig", "/homes/lab/index.twig", 163)->display($context);
        // line 164
        echo "                            ";
    }

    // line 166
    public function block_lead_form_floatar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 167
        $this->loadTemplate("/components/index/ar/lead_form_float.twig", "/homes/lab/index.twig", 167)->display($context);
        // line 168
        echo "                            ";
    }

    // line 170
    public function block_lead_form_fixar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 171
        $this->loadTemplate("/components/index/ar/lead_form_fix.twig", "/homes/lab/index.twig", 171)->display($context);
        // line 172
        echo "                            ";
    }

    // line 174
    public function block_home_icon_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "                                <div class=\"container \">
                                ";
        // line 176
        $this->loadTemplate("/components/index/ar/home_icon_section.twig", "/homes/lab/index.twig", 176)->display($context);
        // line 177
        echo "                                </div>
                            ";
    }

    // line 180
    public function block_home_heading_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "                                ";
        $this->loadTemplate("/components/index/ar/home_heading_section.twig", "/homes/lab/index.twig", 181)->display($context);
        // line 182
        echo "                            ";
    }

    // line 184
    public function block_info_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                              <div class=\"container \">
                                ";
        // line 186
        $this->loadTemplate("/components/index/ar/info_section.twig", "/homes/lab/index.twig", 186)->display($context);
        // line 187
        echo "                              </div>
                            ";
    }

    // line 190
    public function block_video_play_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "                            ";
        $this->loadTemplate("/components/index/ar/video_play_section.twig", "/homes/lab/index.twig", 191)->display($context);
        // line 192
        echo "                            ";
    }

    // line 194
    public function block_photo_gallery_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "                              <div class=\"container \">
                                ";
        // line 196
        $this->loadTemplate("/components/index/ar/photo_gallery_section.twig", "/homes/lab/index.twig", 196)->display($context);
        // line 197
        echo "                              </div>
                            ";
    }

    // line 200
    public function block_newsletter_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "                              ";
        $this->loadTemplate("/components/index/ar/newsletter_section.twig", "/homes/lab/index.twig", 201)->display($context);
        // line 202
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
        return array (  775 => 202,  772 => 201,  768 => 200,  763 => 197,  761 => 196,  758 => 195,  754 => 194,  750 => 192,  747 => 191,  743 => 190,  738 => 187,  736 => 186,  733 => 185,  729 => 184,  725 => 182,  722 => 181,  718 => 180,  713 => 177,  711 => 176,  708 => 175,  704 => 174,  700 => 172,  698 => 171,  692 => 170,  688 => 168,  686 => 167,  680 => 166,  676 => 164,  673 => 163,  669 => 162,  665 => 155,  662 => 154,  658 => 153,  653 => 150,  651 => 149,  648 => 148,  644 => 147,  640 => 145,  637 => 144,  633 => 143,  628 => 140,  626 => 139,  623 => 138,  619 => 137,  615 => 135,  612 => 134,  608 => 133,  603 => 130,  601 => 129,  598 => 128,  594 => 127,  590 => 125,  588 => 124,  582 => 123,  578 => 121,  576 => 120,  570 => 119,  566 => 117,  563 => 116,  559 => 115,  555 => 108,  552 => 107,  548 => 106,  543 => 103,  541 => 102,  538 => 101,  534 => 100,  530 => 98,  527 => 97,  523 => 96,  518 => 93,  516 => 92,  513 => 91,  509 => 90,  505 => 88,  502 => 87,  498 => 86,  493 => 83,  491 => 82,  488 => 81,  484 => 80,  480 => 78,  478 => 77,  472 => 76,  468 => 74,  466 => 73,  460 => 72,  456 => 70,  453 => 69,  449 => 68,  445 => 62,  442 => 61,  438 => 60,  433 => 57,  431 => 56,  428 => 55,  424 => 54,  419 => 51,  417 => 50,  414 => 49,  410 => 48,  406 => 46,  403 => 45,  399 => 44,  394 => 41,  392 => 40,  389 => 39,  385 => 38,  381 => 36,  378 => 35,  374 => 34,  369 => 28,  367 => 27,  364 => 26,  360 => 25,  356 => 23,  354 => 22,  348 => 21,  344 => 19,  342 => 18,  336 => 17,  332 => 15,  329 => 14,  325 => 13,  319 => 204,  315 => 203,  313 => 200,  310 => 199,  308 => 194,  305 => 193,  303 => 190,  300 => 189,  298 => 184,  295 => 183,  293 => 180,  290 => 179,  288 => 174,  285 => 173,  283 => 170,  280 => 169,  278 => 166,  275 => 165,  272 => 162,  270 => 161,  265 => 158,  261 => 156,  259 => 153,  256 => 152,  254 => 147,  251 => 146,  249 => 143,  246 => 142,  244 => 137,  241 => 136,  239 => 133,  236 => 132,  234 => 127,  231 => 126,  229 => 123,  226 => 122,  224 => 119,  221 => 118,  218 => 115,  216 => 114,  212 => 112,  207 => 109,  205 => 106,  202 => 105,  200 => 100,  197 => 99,  195 => 96,  192 => 95,  190 => 90,  187 => 89,  185 => 86,  182 => 85,  180 => 80,  177 => 79,  175 => 76,  172 => 75,  170 => 72,  167 => 71,  164 => 68,  162 => 67,  158 => 65,  154 => 62,  152 => 60,  149 => 59,  147 => 54,  144 => 53,  142 => 48,  139 => 47,  137 => 44,  134 => 43,  132 => 38,  129 => 37,  127 => 34,  121 => 30,  119 => 25,  116 => 24,  114 => 21,  111 => 20,  109 => 17,  106 => 16,  104 => 13,  101 => 12,  98 => 8,  95 => 6,  91 => 5,  84 => 3,  73 => 2,);
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
", "/homes/lab/index.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/lab/index.twig");
    }
}
