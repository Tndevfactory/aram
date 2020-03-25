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
class __TwigTemplate_5b3dd34dec02a4e1f3f1472bfcafe6be445d57cc4374a22aa1ad2b5e720b2433 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> ch override by block  </title> ";
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
            echo "                            ";
            $this->displayBlock('carouselfr', $context, $blocks);
            // line 11
            echo "                          
                            ";
            // line 12
            $this->displayBlock('lead_form_floatfr', $context, $blocks);
            // line 15
            echo "
                            ";
            // line 16
            $this->displayBlock('lead_form_fixfr', $context, $blocks);
            // line 19
            echo "                            
                            ";
            // line 20
            $this->displayBlock('home_icon_sectionfr', $context, $blocks);
            // line 25
            echo "
                            ";
            // line 26
            $this->displayBlock('home_heading_sectionfr', $context, $blocks);
            // line 29
            echo "
                            ";
            // line 30
            $this->displayBlock('info_sectionfr', $context, $blocks);
            // line 35
            echo "
                            ";
            // line 36
            $this->displayBlock('video_play_sectionfr', $context, $blocks);
            // line 39
            echo "
                            ";
            // line 40
            $this->displayBlock('photo_gallery_sectionfr', $context, $blocks);
            // line 45
            echo "
                            ";
            // line 46
            $this->displayBlock('newsletter_sectionfr', $context, $blocks);
            // line 49
            echo "
        ";
        }
        // line 51
        echo "      

      ";
        // line 53
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 54
            echo "                            ";
            $this->displayBlock('carouselan', $context, $blocks);
            // line 57
            echo "                          
                            ";
            // line 58
            $this->displayBlock('lead_form_floaten', $context, $blocks);
            // line 61
            echo "
                            ";
            // line 62
            $this->displayBlock('lead_form_fixen', $context, $blocks);
            // line 65
            echo "                            
                            ";
            // line 66
            $this->displayBlock('home_icon_sectionen', $context, $blocks);
            // line 71
            echo "
                            ";
            // line 72
            $this->displayBlock('home_heading_sectionen', $context, $blocks);
            // line 75
            echo "
                            ";
            // line 76
            $this->displayBlock('info_sectionen', $context, $blocks);
            // line 81
            echo "
                            ";
            // line 82
            $this->displayBlock('video_play_sectionen', $context, $blocks);
            // line 85
            echo "
                            ";
            // line 86
            $this->displayBlock('photo_gallery_sectionen', $context, $blocks);
            // line 91
            echo "
                            ";
            // line 92
            $this->displayBlock('newsletter_sectionen', $context, $blocks);
            // line 95
            echo "

    ";
        }
        // line 98
        echo "

      ";
        // line 100
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 101
            echo "                            ";
            $this->displayBlock('carouselgr', $context, $blocks);
            // line 104
            echo "                          
                            ";
            // line 105
            $this->displayBlock('lead_form_floatgr', $context, $blocks);
            // line 108
            echo "
                            ";
            // line 109
            $this->displayBlock('lead_form_fixgr', $context, $blocks);
            // line 112
            echo "                            
                            ";
            // line 113
            $this->displayBlock('home_icon_sectiongr', $context, $blocks);
            // line 118
            echo "
                            ";
            // line 119
            $this->displayBlock('home_heading_sectiongr', $context, $blocks);
            // line 122
            echo "
                            ";
            // line 123
            $this->displayBlock('info_sectiongr', $context, $blocks);
            // line 128
            echo "
                            ";
            // line 129
            $this->displayBlock('video_play_sectiongr', $context, $blocks);
            // line 132
            echo "
                            ";
            // line 133
            $this->displayBlock('photo_gallery_sectiongr', $context, $blocks);
            // line 138
            echo "
                            ";
            // line 139
            $this->displayBlock('newsletter_sectiongr', $context, $blocks);
            // line 142
            echo "
    ";
        }
        // line 144
        echo "


      ";
        // line 147
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 148
            echo "                            ";
            $this->displayBlock('carouselar', $context, $blocks);
            // line 151
            echo "                          
                            ";
            // line 152
            $this->displayBlock('lead_form_floatar', $context, $blocks);
            // line 155
            echo "
                            ";
            // line 156
            $this->displayBlock('lead_form_fixar', $context, $blocks);
            // line 159
            echo "                            
                            ";
            // line 160
            $this->displayBlock('home_icon_sectionar', $context, $blocks);
            // line 165
            echo "
                            ";
            // line 166
            $this->displayBlock('home_heading_sectionar', $context, $blocks);
            // line 169
            echo "
                            ";
            // line 170
            $this->displayBlock('info_sectionar', $context, $blocks);
            // line 175
            echo "
                            ";
            // line 176
            $this->displayBlock('video_play_sectionar', $context, $blocks);
            // line 179
            echo "
                            ";
            // line 180
            $this->displayBlock('photo_gallery_sectionar', $context, $blocks);
            // line 185
            echo "
                            ";
            // line 186
            $this->displayBlock('newsletter_sectionar', $context, $blocks);
            // line 189
            echo "
    ";
        }
        // line 191
        echo "
 ";
    }

    // line 8
    public function block_carouselfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                                ";
        $this->loadTemplate("/components/index/fr/showcase_caroussel.twig", "\\homes\\index.twig", 9)->display($context);
        // line 10
        echo "                            ";
    }

    // line 12
    public function block_lead_form_floatfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 13
        $this->loadTemplate("/components/index/fr/lead_form_float.twig", "\\homes\\index.twig", 13)->display($context);
        // line 14
        echo "                            ";
    }

    // line 16
    public function block_lead_form_fixfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 17
        $this->loadTemplate("/components/index/fr/lead_form_fix.twig", "\\homes\\index.twig", 17)->display($context);
        // line 18
        echo "                            ";
    }

    // line 20
    public function block_home_icon_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                <div class=\"container \">
                                ";
        // line 22
        $this->loadTemplate("/components/index/fr/home_icon_section.twig", "\\homes\\index.twig", 22)->display($context);
        // line 23
        echo "                                </div>
                            ";
    }

    // line 26
    public function block_home_heading_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                ";
        $this->loadTemplate("/components/index/fr/home_heading_section.twig", "\\homes\\index.twig", 27)->display($context);
        // line 28
        echo "                            ";
    }

    // line 30
    public function block_info_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                              <div class=\"container \">
                                ";
        // line 32
        $this->loadTemplate("/components/index/fr/info_section.twig", "\\homes\\index.twig", 32)->display($context);
        // line 33
        echo "                              </div>
                            ";
    }

    // line 36
    public function block_video_play_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                            ";
        $this->loadTemplate("/components/index/fr/video_play_section.twig", "\\homes\\index.twig", 37)->display($context);
        // line 38
        echo "                            ";
    }

    // line 40
    public function block_photo_gallery_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                              <div class=\"container \">
                                ";
        // line 42
        $this->loadTemplate("/components/index/fr/photo_gallery_section.twig", "\\homes\\index.twig", 42)->display($context);
        // line 43
        echo "                              </div>
                            ";
    }

    // line 46
    public function block_newsletter_sectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                              ";
        $this->loadTemplate("/components/index/fr/newsletter_section.twig", "\\homes\\index.twig", 47)->display($context);
        // line 48
        echo "                            ";
    }

    // line 54
    public function block_carouselan($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                ";
        $this->loadTemplate("/components/index/en/showcase_caroussel.twig", "\\homes\\index.twig", 55)->display($context);
        // line 56
        echo "                            ";
    }

    // line 58
    public function block_lead_form_floaten($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 59
        $this->loadTemplate("/components/index/en/lead_form_float.twig", "\\homes\\index.twig", 59)->display($context);
        // line 60
        echo "                            ";
    }

    // line 62
    public function block_lead_form_fixen($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 63
        $this->loadTemplate("/components/index/en/lead_form_fix.twig", "\\homes\\index.twig", 63)->display($context);
        // line 64
        echo "                            ";
    }

    // line 66
    public function block_home_icon_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                <div class=\"container \">
                                ";
        // line 68
        $this->loadTemplate("/components/index/en/home_icon_section.twig", "\\homes\\index.twig", 68)->display($context);
        // line 69
        echo "                                </div>
                            ";
    }

    // line 72
    public function block_home_heading_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                                ";
        $this->loadTemplate("/components/index/en/home_heading_section.twig", "\\homes\\index.twig", 73)->display($context);
        // line 74
        echo "                            ";
    }

    // line 76
    public function block_info_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                              <div class=\"container \">
                                ";
        // line 78
        $this->loadTemplate("/components/index/en/info_section.twig", "\\homes\\index.twig", 78)->display($context);
        // line 79
        echo "                              </div>
                            ";
    }

    // line 82
    public function block_video_play_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                            ";
        $this->loadTemplate("/components/index/en/video_play_section.twig", "\\homes\\index.twig", 83)->display($context);
        // line 84
        echo "                            ";
    }

    // line 86
    public function block_photo_gallery_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                              <div class=\"container \">
                                ";
        // line 88
        $this->loadTemplate("/components/index/en/photo_gallery_section.twig", "\\homes\\index.twig", 88)->display($context);
        // line 89
        echo "                              </div>
                            ";
    }

    // line 92
    public function block_newsletter_sectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                              ";
        $this->loadTemplate("/components/index/en/newsletter_section.twig", "\\homes\\index.twig", 93)->display($context);
        // line 94
        echo "                            ";
    }

    // line 101
    public function block_carouselgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "                                ";
        $this->loadTemplate("/components/index/gr/showcase_caroussel.twig", "\\homes\\index.twig", 102)->display($context);
        // line 103
        echo "                            ";
    }

    // line 105
    public function block_lead_form_floatgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 106
        $this->loadTemplate("/components/index/gr/lead_form_float.twig", "\\homes\\index.twig", 106)->display($context);
        // line 107
        echo "                            ";
    }

    // line 109
    public function block_lead_form_fixgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 110
        $this->loadTemplate("/components/index/gr/lead_form_fix.twig", "\\homes\\index.twig", 110)->display($context);
        // line 111
        echo "                            ";
    }

    // line 113
    public function block_home_icon_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                                <div class=\"container \">
                                ";
        // line 115
        $this->loadTemplate("/components/index/gr/home_icon_section.twig", "\\homes\\index.twig", 115)->display($context);
        // line 116
        echo "                                </div>
                            ";
    }

    // line 119
    public function block_home_heading_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                                ";
        $this->loadTemplate("/components/index/gr/home_heading_section.twig", "\\homes\\index.twig", 120)->display($context);
        // line 121
        echo "                            ";
    }

    // line 123
    public function block_info_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                              <div class=\"container \">
                                ";
        // line 125
        $this->loadTemplate("/components/index/gr/info_section.twig", "\\homes\\index.twig", 125)->display($context);
        // line 126
        echo "                              </div>
                            ";
    }

    // line 129
    public function block_video_play_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "                            ";
        $this->loadTemplate("/components/index/gr/video_play_section.twig", "\\homes\\index.twig", 130)->display($context);
        // line 131
        echo "                            ";
    }

    // line 133
    public function block_photo_gallery_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                              <div class=\"container \">
                                ";
        // line 135
        $this->loadTemplate("/components/index/gr/photo_gallery_section.twig", "\\homes\\index.twig", 135)->display($context);
        // line 136
        echo "                              </div>
                            ";
    }

    // line 139
    public function block_newsletter_sectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "                              ";
        $this->loadTemplate("/components/index/gr/newsletter_section.twig", "\\homes\\index.twig", 140)->display($context);
        // line 141
        echo "                            ";
    }

    // line 148
    public function block_carouselar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                                ";
        $this->loadTemplate("/components/index/ar/showcase_caroussel.twig", "\\homes\\index.twig", 149)->display($context);
        // line 150
        echo "                            ";
    }

    // line 152
    public function block_lead_form_floatar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 153
        $this->loadTemplate("/components/index/ar/lead_form_float.twig", "\\homes\\index.twig", 153)->display($context);
        // line 154
        echo "                            ";
    }

    // line 156
    public function block_lead_form_fixar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 157
        $this->loadTemplate("/components/index/ar/lead_form_fix.twig", "\\homes\\index.twig", 157)->display($context);
        // line 158
        echo "                            ";
    }

    // line 160
    public function block_home_icon_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "                                <div class=\"container \">
                                ";
        // line 162
        $this->loadTemplate("/components/index/ar/home_icon_section.twig", "\\homes\\index.twig", 162)->display($context);
        // line 163
        echo "                                </div>
                            ";
    }

    // line 166
    public function block_home_heading_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                                ";
        $this->loadTemplate("/components/index/ar/home_heading_section.twig", "\\homes\\index.twig", 167)->display($context);
        // line 168
        echo "                            ";
    }

    // line 170
    public function block_info_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "                              <div class=\"container \">
                                ";
        // line 172
        $this->loadTemplate("/components/index/ar/info_section.twig", "\\homes\\index.twig", 172)->display($context);
        // line 173
        echo "                              </div>
                            ";
    }

    // line 176
    public function block_video_play_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                            ";
        $this->loadTemplate("/components/index/ar/video_play_section.twig", "\\homes\\index.twig", 177)->display($context);
        // line 178
        echo "                            ";
    }

    // line 180
    public function block_photo_gallery_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "                              <div class=\"container \">
                                ";
        // line 182
        $this->loadTemplate("/components/index/ar/photo_gallery_section.twig", "\\homes\\index.twig", 182)->display($context);
        // line 183
        echo "                              </div>
                            ";
    }

    // line 186
    public function block_newsletter_sectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "                              ";
        $this->loadTemplate("/components/index/ar/newsletter_section.twig", "\\homes\\index.twig", 187)->display($context);
        // line 188
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
        return array (  748 => 188,  745 => 187,  741 => 186,  736 => 183,  734 => 182,  731 => 181,  727 => 180,  723 => 178,  720 => 177,  716 => 176,  711 => 173,  709 => 172,  706 => 171,  702 => 170,  698 => 168,  695 => 167,  691 => 166,  686 => 163,  684 => 162,  681 => 161,  677 => 160,  673 => 158,  671 => 157,  665 => 156,  661 => 154,  659 => 153,  653 => 152,  649 => 150,  646 => 149,  642 => 148,  638 => 141,  635 => 140,  631 => 139,  626 => 136,  624 => 135,  621 => 134,  617 => 133,  613 => 131,  610 => 130,  606 => 129,  601 => 126,  599 => 125,  596 => 124,  592 => 123,  588 => 121,  585 => 120,  581 => 119,  576 => 116,  574 => 115,  571 => 114,  567 => 113,  563 => 111,  561 => 110,  555 => 109,  551 => 107,  549 => 106,  543 => 105,  539 => 103,  536 => 102,  532 => 101,  528 => 94,  525 => 93,  521 => 92,  516 => 89,  514 => 88,  511 => 87,  507 => 86,  503 => 84,  500 => 83,  496 => 82,  491 => 79,  489 => 78,  486 => 77,  482 => 76,  478 => 74,  475 => 73,  471 => 72,  466 => 69,  464 => 68,  461 => 67,  457 => 66,  453 => 64,  451 => 63,  445 => 62,  441 => 60,  439 => 59,  433 => 58,  429 => 56,  426 => 55,  422 => 54,  418 => 48,  415 => 47,  411 => 46,  406 => 43,  404 => 42,  401 => 41,  397 => 40,  393 => 38,  390 => 37,  386 => 36,  381 => 33,  379 => 32,  376 => 31,  372 => 30,  368 => 28,  365 => 27,  361 => 26,  356 => 23,  354 => 22,  351 => 21,  347 => 20,  343 => 18,  341 => 17,  335 => 16,  331 => 14,  329 => 13,  323 => 12,  319 => 10,  316 => 9,  312 => 8,  307 => 191,  303 => 189,  301 => 186,  298 => 185,  296 => 180,  293 => 179,  291 => 176,  288 => 175,  286 => 170,  283 => 169,  281 => 166,  278 => 165,  276 => 160,  273 => 159,  271 => 156,  268 => 155,  266 => 152,  263 => 151,  260 => 148,  258 => 147,  253 => 144,  249 => 142,  247 => 139,  244 => 138,  242 => 133,  239 => 132,  237 => 129,  234 => 128,  232 => 123,  229 => 122,  227 => 119,  224 => 118,  222 => 113,  219 => 112,  217 => 109,  214 => 108,  212 => 105,  209 => 104,  206 => 101,  204 => 100,  200 => 98,  195 => 95,  193 => 92,  190 => 91,  188 => 86,  185 => 85,  183 => 82,  180 => 81,  178 => 76,  175 => 75,  173 => 72,  170 => 71,  168 => 66,  165 => 65,  163 => 62,  160 => 61,  158 => 58,  155 => 57,  152 => 54,  150 => 53,  146 => 51,  142 => 49,  140 => 46,  137 => 45,  135 => 40,  132 => 39,  130 => 36,  127 => 35,  125 => 30,  122 => 29,  120 => 26,  117 => 25,  115 => 20,  112 => 19,  110 => 16,  107 => 15,  105 => 12,  102 => 11,  99 => 8,  97 => 7,  94 => 6,  90 => 5,  83 => 3,  72 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> ch override by block  </title> {% endblock  %}
  
{% block content %}

        {% if LANG == 'fr' %}
                            {% block carouselfr %}
                                {% include('/components/index/fr/showcase_caroussel.twig') %}
                            {% endblock  %}
                          
                            {% block lead_form_floatfr %} 
                                  {% include('/components/index/fr/lead_form_float.twig') %}
                            {% endblock  %}

                            {% block lead_form_fixfr %} 
                                  {% include('/components/index/fr/lead_form_fix.twig') %}
                            {% endblock  %}
                            
                            {% block home_icon_sectionfr %}
                                <div class=\"container \">
                                {% include('/components/index/fr/home_icon_section.twig') %}
                                </div>
                            {% endblock  %}

                            {% block home_heading_sectionfr %}
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
                            {% endblock  %}

        {% endif %}
      

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
", "\\homes\\index.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\homes\\index.twig");
    }
}
