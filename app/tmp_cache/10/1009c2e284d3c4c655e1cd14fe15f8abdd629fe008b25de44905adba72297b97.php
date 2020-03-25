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

/* /homes/index.twig */
class __TwigTemplate_76c0648cb544f8370c3fb1d98ea08a92b5eb13dc14b5cc4ecc000c55f5b45b87 extends Template
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
            'showcaseVideofr' => [$this, 'block_showcaseVideofr'],
            'leadFormFloatfr' => [$this, 'block_leadFormFloatfr'],
            'searchFormfr' => [$this, 'block_searchFormfr'],
            'homeIconSectionfr' => [$this, 'block_homeIconSectionfr'],
            'homeHeadingSectionCurvedfr0' => [$this, 'block_homeHeadingSectionCurvedfr0'],
            'infoSectionfr' => [$this, 'block_infoSectionfr'],
            'homeHeadingSectionCurved2fr' => [$this, 'block_homeHeadingSectionCurved2fr'],
            'photoGallerySectionBeforeAfterfr' => [$this, 'block_photoGallerySectionBeforeAfterfr'],
            'homeHeadingSectionCurvedfr' => [$this, 'block_homeHeadingSectionCurvedfr'],
            'videoGallerySectionfr' => [$this, 'block_videoGallerySectionfr'],
            'homeHeadingSectionCurved2fr2' => [$this, 'block_homeHeadingSectionCurved2fr2'],
            'counterUpfr' => [$this, 'block_counterUpfr'],
            'homeIsoAwardfr' => [$this, 'block_homeIsoAwardfr'],
            'homeHeadingSectionCurvedfr2' => [$this, 'block_homeHeadingSectionCurvedfr2'],
            'testimonialsfr' => [$this, 'block_testimonialsfr'],
            'leadFormFixBottomfr' => [$this, 'block_leadFormFixBottomfr'],
            'showcaseVideoen' => [$this, 'block_showcaseVideoen'],
            'leadFormFloaten' => [$this, 'block_leadFormFloaten'],
            'searchFormen' => [$this, 'block_searchFormen'],
            'homeIconSectionen' => [$this, 'block_homeIconSectionen'],
            'homeHeadingSectionCurveden0' => [$this, 'block_homeHeadingSectionCurveden0'],
            'infoSectionen' => [$this, 'block_infoSectionen'],
            'homeHeadingSectionCurved2en' => [$this, 'block_homeHeadingSectionCurved2en'],
            'photoGallerySectionBeforeAfteren' => [$this, 'block_photoGallerySectionBeforeAfteren'],
            'homeHeadingSectionCurveden' => [$this, 'block_homeHeadingSectionCurveden'],
            'videoGallerySectionen' => [$this, 'block_videoGallerySectionen'],
            'homeHeadingSectionCurved2en2' => [$this, 'block_homeHeadingSectionCurved2en2'],
            'counterUpen' => [$this, 'block_counterUpen'],
            'homeIsoAwarden' => [$this, 'block_homeIsoAwarden'],
            'homeHeadingSectionCurveden2' => [$this, 'block_homeHeadingSectionCurveden2'],
            'testimonialsen' => [$this, 'block_testimonialsen'],
            'leadFormFixBottomen' => [$this, 'block_leadFormFixBottomen'],
            'showcaseVideogr' => [$this, 'block_showcaseVideogr'],
            'leadFormFloatgr' => [$this, 'block_leadFormFloatgr'],
            'searchFormgr' => [$this, 'block_searchFormgr'],
            'homeIconSectiongr' => [$this, 'block_homeIconSectiongr'],
            'homeHeadingSectionCurvedgr0' => [$this, 'block_homeHeadingSectionCurvedgr0'],
            'infoSectiongr' => [$this, 'block_infoSectiongr'],
            'homeHeadingSectionCurved2gr' => [$this, 'block_homeHeadingSectionCurved2gr'],
            'photoGallerySectionBeforeAftergr' => [$this, 'block_photoGallerySectionBeforeAftergr'],
            'homeHeadingSectionCurvedgr' => [$this, 'block_homeHeadingSectionCurvedgr'],
            'videoGallerySectiongr' => [$this, 'block_videoGallerySectiongr'],
            'homeHeadingSectionCurved2gr2' => [$this, 'block_homeHeadingSectionCurved2gr2'],
            'counterUpgr' => [$this, 'block_counterUpgr'],
            'homeIsoAwardgr' => [$this, 'block_homeIsoAwardgr'],
            'homeHeadingSectionCurvedgr2' => [$this, 'block_homeHeadingSectionCurvedgr2'],
            'testimonialsgr' => [$this, 'block_testimonialsgr'],
            'leadFormFixBottomgr' => [$this, 'block_leadFormFixBottomgr'],
            'showcaseVideoar' => [$this, 'block_showcaseVideoar'],
            'leadFormFloatar' => [$this, 'block_leadFormFloatar'],
            'searchFormar' => [$this, 'block_searchFormar'],
            'homeIconSectionar' => [$this, 'block_homeIconSectionar'],
            'homeHeadingSectionCurvedar0' => [$this, 'block_homeHeadingSectionCurvedar0'],
            'infoSectionar' => [$this, 'block_infoSectionar'],
            'homeHeadingSectionCurved2ar' => [$this, 'block_homeHeadingSectionCurved2ar'],
            'photoGallerySectionBeforeAfterar' => [$this, 'block_photoGallerySectionBeforeAfterar'],
            'homeHeadingSectionCurvedar' => [$this, 'block_homeHeadingSectionCurvedar'],
            'videoGallerySectionar' => [$this, 'block_videoGallerySectionar'],
            'homeHeadingSectionCurved2ar2' => [$this, 'block_homeHeadingSectionCurved2ar2'],
            'counterUpar' => [$this, 'block_counterUpar'],
            'homeIsoAwardar' => [$this, 'block_homeIsoAwardar'],
            'homeHeadingSectionCurvedar2' => [$this, 'block_homeHeadingSectionCurvedar2'],
            'testimonialsar' => [$this, 'block_testimonialsar'],
            'leadFormFixBottomar' => [$this, 'block_leadFormFixBottomar'],
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/index.twig", 2);
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
        // line 7
        if (0 === twig_compare(($context["LANG"] ?? null), "fr")) {
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
            $this->displayBlock('showcaseVideofr', $context, $blocks);
            // line 20
            echo "                          
                            ";
            // line 21
            $this->displayBlock('leadFormFloatfr', $context, $blocks);
            // line 24
            echo "
                            ";
            // line 28
            echo "                           
                            ";
            // line 29
            $this->displayBlock('searchFormfr', $context, $blocks);
            // line 32
            echo "
                            ";
            // line 37
            echo "
                           ";
            // line 38
            $this->displayBlock('homeIconSectionfr', $context, $blocks);
            // line 43
            echo "
                             ";
            // line 47
            echo "                             ";
            $this->displayBlock('homeHeadingSectionCurvedfr0', $context, $blocks);
            // line 50
            echo "
                            ";
            // line 51
            $this->displayBlock('infoSectionfr', $context, $blocks);
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
            $this->displayBlock('photoGallerySectionBeforeAfterfr', $context, $blocks);
            // line 76
            echo "
                            ";
            // line 77
            $this->displayBlock('homeHeadingSectionCurvedfr', $context, $blocks);
            // line 80
            echo "
                            ";
            // line 81
            $this->displayBlock('videoGallerySectionfr', $context, $blocks);
            // line 86
            echo "
                             ";
            // line 87
            $this->displayBlock('homeHeadingSectionCurved2fr2', $context, $blocks);
            // line 90
            echo "                            
                           ";
            // line 91
            $this->displayBlock('counterUpfr', $context, $blocks);
            // line 94
            echo "
                             ";
            // line 95
            $this->displayBlock('homeIsoAwardfr', $context, $blocks);
            // line 98
            echo "
                            

                            ";
            // line 101
            $this->displayBlock('homeHeadingSectionCurvedfr2', $context, $blocks);
            // line 104
            echo "
                            ";
            // line 105
            $this->displayBlock('testimonialsfr', $context, $blocks);
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
        }
        // line 122
        echo "      
        ";
        // line 123
        if (0 === twig_compare(($context["LANG"] ?? null), "en")) {
            // line 124
            echo "
                        ";
            // line 128
            echo "
                            ";
            // line 132
            echo "                          
                            ";
            // line 133
            $this->displayBlock('showcaseVideoen', $context, $blocks);
            // line 136
            echo "                          
                            ";
            // line 137
            $this->displayBlock('leadFormFloaten', $context, $blocks);
            // line 140
            echo "
                            ";
            // line 144
            echo "                           
                            ";
            // line 145
            $this->displayBlock('searchFormen', $context, $blocks);
            // line 148
            echo "
                            ";
            // line 153
            echo "
                           ";
            // line 154
            $this->displayBlock('homeIconSectionen', $context, $blocks);
            // line 159
            echo "
                             ";
            // line 163
            echo "                             ";
            $this->displayBlock('homeHeadingSectionCurveden0', $context, $blocks);
            // line 166
            echo "
                            ";
            // line 167
            $this->displayBlock('infoSectionen', $context, $blocks);
            // line 172
            echo "
                            ";
            // line 176
            echo "
                            ";
            // line 177
            $this->displayBlock('homeHeadingSectionCurved2en', $context, $blocks);
            // line 180
            echo "
                            ";
            // line 186
            echo "
                            ";
            // line 187
            $this->displayBlock('photoGallerySectionBeforeAfteren', $context, $blocks);
            // line 192
            echo "
                            ";
            // line 193
            $this->displayBlock('homeHeadingSectionCurveden', $context, $blocks);
            // line 196
            echo "
                            ";
            // line 197
            $this->displayBlock('videoGallerySectionen', $context, $blocks);
            // line 202
            echo "
                             ";
            // line 203
            $this->displayBlock('homeHeadingSectionCurved2en2', $context, $blocks);
            // line 206
            echo "                            
                           ";
            // line 207
            $this->displayBlock('counterUpen', $context, $blocks);
            // line 210
            echo "
                             ";
            // line 211
            $this->displayBlock('homeIsoAwarden', $context, $blocks);
            // line 214
            echo "
                            

                            ";
            // line 217
            $this->displayBlock('homeHeadingSectionCurveden2', $context, $blocks);
            // line 220
            echo "
                            ";
            // line 221
            $this->displayBlock('testimonialsen', $context, $blocks);
            // line 226
            echo "
                           

                            ";
            // line 232
            echo "                            
                            ";
            // line 233
            $this->displayBlock('leadFormFixBottomen', $context, $blocks);
            // line 235
            echo "  

       ";
        }
        // line 238
        echo "      
        ";
        // line 239
        if (0 === twig_compare(($context["LANG"] ?? null), "gr")) {
            // line 240
            echo "
                        ";
            // line 244
            echo "
                            ";
            // line 248
            echo "                          
                            ";
            // line 249
            $this->displayBlock('showcaseVideogr', $context, $blocks);
            // line 252
            echo "                          
                            ";
            // line 253
            $this->displayBlock('leadFormFloatgr', $context, $blocks);
            // line 256
            echo "
                            ";
            // line 260
            echo "                           
                            ";
            // line 261
            $this->displayBlock('searchFormgr', $context, $blocks);
            // line 264
            echo "
                            ";
            // line 269
            echo "
                           ";
            // line 270
            $this->displayBlock('homeIconSectiongr', $context, $blocks);
            // line 275
            echo "
                             ";
            // line 279
            echo "                             ";
            $this->displayBlock('homeHeadingSectionCurvedgr0', $context, $blocks);
            // line 282
            echo "
                            ";
            // line 283
            $this->displayBlock('infoSectiongr', $context, $blocks);
            // line 288
            echo "
                            ";
            // line 292
            echo "
                            ";
            // line 293
            $this->displayBlock('homeHeadingSectionCurved2gr', $context, $blocks);
            // line 296
            echo "
                            ";
            // line 302
            echo "
                            ";
            // line 303
            $this->displayBlock('photoGallerySectionBeforeAftergr', $context, $blocks);
            // line 308
            echo "
                            ";
            // line 309
            $this->displayBlock('homeHeadingSectionCurvedgr', $context, $blocks);
            // line 312
            echo "
                            ";
            // line 313
            $this->displayBlock('videoGallerySectiongr', $context, $blocks);
            // line 318
            echo "
                             ";
            // line 319
            $this->displayBlock('homeHeadingSectionCurved2gr2', $context, $blocks);
            // line 322
            echo "                            
                           ";
            // line 323
            $this->displayBlock('counterUpgr', $context, $blocks);
            // line 326
            echo "
                             ";
            // line 327
            $this->displayBlock('homeIsoAwardgr', $context, $blocks);
            // line 330
            echo "
                            

                            ";
            // line 333
            $this->displayBlock('homeHeadingSectionCurvedgr2', $context, $blocks);
            // line 336
            echo "
                            ";
            // line 337
            $this->displayBlock('testimonialsgr', $context, $blocks);
            // line 342
            echo "
                           

                            ";
            // line 348
            echo "                            
                            ";
            // line 349
            $this->displayBlock('leadFormFixBottomgr', $context, $blocks);
            // line 351
            echo "  

       ";
        }
        // line 354
        echo "      
        ";
        // line 355
        if (0 === twig_compare(($context["LANG"] ?? null), "ar")) {
            // line 356
            echo "
                        ";
            // line 360
            echo "
                            ";
            // line 364
            echo "                          
                            ";
            // line 365
            $this->displayBlock('showcaseVideoar', $context, $blocks);
            // line 368
            echo "                          
                            ";
            // line 369
            $this->displayBlock('leadFormFloatar', $context, $blocks);
            // line 372
            echo "
                            ";
            // line 376
            echo "                           
                            ";
            // line 377
            $this->displayBlock('searchFormar', $context, $blocks);
            // line 380
            echo "
                            ";
            // line 385
            echo "
                           ";
            // line 386
            $this->displayBlock('homeIconSectionar', $context, $blocks);
            // line 391
            echo "
                             ";
            // line 395
            echo "                             ";
            $this->displayBlock('homeHeadingSectionCurvedar0', $context, $blocks);
            // line 398
            echo "
                            ";
            // line 399
            $this->displayBlock('infoSectionar', $context, $blocks);
            // line 404
            echo "
                            ";
            // line 408
            echo "
                            ";
            // line 409
            $this->displayBlock('homeHeadingSectionCurved2ar', $context, $blocks);
            // line 412
            echo "
                            ";
            // line 418
            echo "
                            ";
            // line 419
            $this->displayBlock('photoGallerySectionBeforeAfterar', $context, $blocks);
            // line 424
            echo "
                            ";
            // line 425
            $this->displayBlock('homeHeadingSectionCurvedar', $context, $blocks);
            // line 428
            echo "
                            ";
            // line 429
            $this->displayBlock('videoGallerySectionar', $context, $blocks);
            // line 434
            echo "
                             ";
            // line 435
            $this->displayBlock('homeHeadingSectionCurved2ar2', $context, $blocks);
            // line 438
            echo "                            
                           ";
            // line 439
            $this->displayBlock('counterUpar', $context, $blocks);
            // line 442
            echo "
                             ";
            // line 443
            $this->displayBlock('homeIsoAwardar', $context, $blocks);
            // line 446
            echo "
                            

                            ";
            // line 449
            $this->displayBlock('homeHeadingSectionCurvedar2', $context, $blocks);
            // line 452
            echo "
                            ";
            // line 453
            $this->displayBlock('testimonialsar', $context, $blocks);
            // line 458
            echo "
                           

                            ";
            // line 464
            echo "                            
                            ";
            // line 465
            $this->displayBlock('leadFormFixBottomar', $context, $blocks);
            // line 467
            echo "  

       ";
        }
        // line 470
        echo "      

        
      
 

 ";
    }

    // line 17
    public function block_showcaseVideofr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/showcaseVideo.twig", "/homes/index.twig", 18)->display($context);
        // line 19
        echo "                            ";
    }

    // line 21
    public function block_leadFormFloatfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 22
        $this->loadTemplate("/homes/data/index/fr/leadFormFloat.twig", "/homes/index.twig", 22)->display($context);
        // line 23
        echo "                            ";
    }

    // line 29
    public function block_searchFormfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 30
        $this->loadTemplate("/homes/data/index/fr/searchForm.twig", "/homes/index.twig", 30)->display($context);
        // line 31
        echo "                            ";
    }

    // line 38
    public function block_homeIconSectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                                <div class=\"container \">
                                ";
        // line 40
        $this->loadTemplate("/homes/data/index/fr/homeIconSection.twig", "/homes/index.twig", 40)->display($context);
        // line 41
        echo "                                </div>
                            ";
    }

    // line 47
    public function block_homeHeadingSectionCurvedfr0($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved.twig", "/homes/index.twig", 48)->display($context);
        // line 49
        echo "                            ";
    }

    // line 51
    public function block_infoSectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                              <div class=\"container \">
                                ";
        // line 53
        $this->loadTemplate("/homes/data/index/fr/infoSection.twig", "/homes/index.twig", 53)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved2.twig", "/homes/index.twig", 62)->display($context);
        // line 63
        echo "                            ";
    }

    // line 71
    public function block_photoGallerySectionBeforeAfterfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                              <div class=\"container \">
                                ";
        // line 73
        $this->loadTemplate("/homes/data/index/fr/photoGallerySectionBeforeAfter.twig", "/homes/index.twig", 73)->display($context);
        // line 74
        echo "                              </div>
                            ";
    }

    // line 77
    public function block_homeHeadingSectionCurvedfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved.twig", "/homes/index.twig", 78)->display($context);
        // line 79
        echo "                            ";
    }

    // line 81
    public function block_videoGallerySectionfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                              <div class=\"container \">
                                ";
        // line 83
        $this->loadTemplate("/homes/data/index/fr/videoGallerySection.twig", "/homes/index.twig", 83)->display($context);
        // line 84
        echo "                              </div>
                            ";
    }

    // line 87
    public function block_homeHeadingSectionCurved2fr2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved2.twig", "/homes/index.twig", 88)->display($context);
        // line 89
        echo "                            ";
    }

    // line 91
    public function block_counterUpfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/counterUp.twig", "/homes/index.twig", 92)->display($context);
        // line 93
        echo "                            ";
    }

    // line 95
    public function block_homeIsoAwardfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/homeIsoAward.twig", "/homes/index.twig", 96)->display($context);
        // line 97
        echo "                            ";
    }

    // line 101
    public function block_homeHeadingSectionCurvedfr2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "                                ";
        $this->loadTemplate("/homes/data/index/fr/homeHeadingSectionCurved.twig", "/homes/index.twig", 102)->display($context);
        // line 103
        echo "                            ";
    }

    // line 105
    public function block_testimonialsfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                              <div class=\"container \">
                                ";
        // line 107
        $this->loadTemplate("/homes/data/index/fr/testimonials.twig", "/homes/index.twig", 107)->display($context);
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
        $this->loadTemplate("/homes/data/index/fr/leadFormFixBottom.twig", "/homes/index.twig", 118)->display($context);
        // line 119
        echo "                            ";
    }

    // line 133
    public function block_showcaseVideoen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                                ";
        $this->loadTemplate("/homes/data/index/en/showcaseVideo.twig", "/homes/index.twig", 134)->display($context);
        // line 135
        echo "                            ";
    }

    // line 137
    public function block_leadFormFloaten($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 138
        $this->loadTemplate("/homes/data/index/en/leadFormFloat.twig", "/homes/index.twig", 138)->display($context);
        // line 139
        echo "                            ";
    }

    // line 145
    public function block_searchFormen($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 146
        $this->loadTemplate("/homes/data/index/en/searchForm.twig", "/homes/index.twig", 146)->display($context);
        // line 147
        echo "                            ";
    }

    // line 154
    public function block_homeIconSectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                                <div class=\"container \">
                                ";
        // line 156
        $this->loadTemplate("/homes/data/index/en/homeIconSection.twig", "/homes/index.twig", 156)->display($context);
        // line 157
        echo "                                </div>
                            ";
    }

    // line 163
    public function block_homeHeadingSectionCurveden0($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                                ";
        $this->loadTemplate("/homes/data/index/en/homeHeadingSectionCurved.twig", "/homes/index.twig", 164)->display($context);
        // line 165
        echo "                            ";
    }

    // line 167
    public function block_infoSectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "                              <div class=\"container \">
                                ";
        // line 169
        $this->loadTemplate("/homes/data/index/en/infoSection.twig", "/homes/index.twig", 169)->display($context);
        // line 170
        echo "                              </div>
                            ";
    }

    // line 177
    public function block_homeHeadingSectionCurved2en($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "                            ";
        $this->loadTemplate("/homes/data/index/en/homeHeadingSectionCurved2.twig", "/homes/index.twig", 178)->display($context);
        // line 179
        echo "                            ";
    }

    // line 187
    public function block_photoGallerySectionBeforeAfteren($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "                              <div class=\"container \">
                                ";
        // line 189
        $this->loadTemplate("/homes/data/index/en/photoGallerySectionBeforeAfter.twig", "/homes/index.twig", 189)->display($context);
        // line 190
        echo "                              </div>
                            ";
    }

    // line 193
    public function block_homeHeadingSectionCurveden($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "                                ";
        $this->loadTemplate("/homes/data/index/en/homeHeadingSectionCurved.twig", "/homes/index.twig", 194)->display($context);
        // line 195
        echo "                            ";
    }

    // line 197
    public function block_videoGallerySectionen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "                              <div class=\"container \">
                                ";
        // line 199
        $this->loadTemplate("/homes/data/index/en/videoGallerySection.twig", "/homes/index.twig", 199)->display($context);
        // line 200
        echo "                              </div>
                            ";
    }

    // line 203
    public function block_homeHeadingSectionCurved2en2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "                                ";
        $this->loadTemplate("/homes/data/index/en/homeHeadingSectionCurved2.twig", "/homes/index.twig", 204)->display($context);
        // line 205
        echo "                            ";
    }

    // line 207
    public function block_counterUpen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        echo "                                ";
        $this->loadTemplate("/homes/data/index/en/counterUp.twig", "/homes/index.twig", 208)->display($context);
        // line 209
        echo "                            ";
    }

    // line 211
    public function block_homeIsoAwarden($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "                                ";
        $this->loadTemplate("/homes/data/index/en/homeIsoAward.twig", "/homes/index.twig", 212)->display($context);
        // line 213
        echo "                            ";
    }

    // line 217
    public function block_homeHeadingSectionCurveden2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "                                ";
        $this->loadTemplate("/homes/data/index/en/homeHeadingSectionCurved.twig", "/homes/index.twig", 218)->display($context);
        // line 219
        echo "                            ";
    }

    // line 221
    public function block_testimonialsen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "                              <div class=\"container \">
                                ";
        // line 223
        $this->loadTemplate("/homes/data/index/en/testimonials.twig", "/homes/index.twig", 223)->display($context);
        // line 224
        echo "                              </div>
                            ";
    }

    // line 233
    public function block_leadFormFixBottomen($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "                              ";
        $this->loadTemplate("/homes/data/index/en/leadFormFixBottom.twig", "/homes/index.twig", 234)->display($context);
        // line 235
        echo "                            ";
    }

    // line 249
    public function block_showcaseVideogr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "                                ";
        $this->loadTemplate("/homes/data/index/gr/showcaseVideo.twig", "/homes/index.twig", 250)->display($context);
        // line 251
        echo "                            ";
    }

    // line 253
    public function block_leadFormFloatgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 254
        $this->loadTemplate("/homes/data/index/gr/leadFormFloat.twig", "/homes/index.twig", 254)->display($context);
        // line 255
        echo "                            ";
    }

    // line 261
    public function block_searchFormgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 262
        $this->loadTemplate("/homes/data/index/gr/searchForm.twig", "/homes/index.twig", 262)->display($context);
        // line 263
        echo "                            ";
    }

    // line 270
    public function block_homeIconSectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 271
        echo "                                <div class=\"container \">
                                ";
        // line 272
        $this->loadTemplate("/homes/data/index/gr/homeIconSection.twig", "/homes/index.twig", 272)->display($context);
        // line 273
        echo "                                </div>
                            ";
    }

    // line 279
    public function block_homeHeadingSectionCurvedgr0($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 280
        echo "                                ";
        $this->loadTemplate("/homes/data/index/gr/homeHeadingSectionCurved.twig", "/homes/index.twig", 280)->display($context);
        // line 281
        echo "                            ";
    }

    // line 283
    public function block_infoSectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 284
        echo "                              <div class=\"container \">
                                ";
        // line 285
        $this->loadTemplate("/homes/data/index/gr/infoSection.twig", "/homes/index.twig", 285)->display($context);
        // line 286
        echo "                              </div>
                            ";
    }

    // line 293
    public function block_homeHeadingSectionCurved2gr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 294
        echo "                            ";
        $this->loadTemplate("/homes/data/index/gr/homeHeadingSectionCurved2.twig", "/homes/index.twig", 294)->display($context);
        // line 295
        echo "                            ";
    }

    // line 303
    public function block_photoGallerySectionBeforeAftergr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 304
        echo "                              <div class=\"container \">
                                ";
        // line 305
        $this->loadTemplate("/homes/data/index/gr/photoGallerySectionBeforeAfter.twig", "/homes/index.twig", 305)->display($context);
        // line 306
        echo "                              </div>
                            ";
    }

    // line 309
    public function block_homeHeadingSectionCurvedgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        echo "                                ";
        $this->loadTemplate("/homes/data/index/gr/homeHeadingSectionCurved.twig", "/homes/index.twig", 310)->display($context);
        // line 311
        echo "                            ";
    }

    // line 313
    public function block_videoGallerySectiongr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 314
        echo "                              <div class=\"container \">
                                ";
        // line 315
        $this->loadTemplate("/homes/data/index/gr/videoGallerySection.twig", "/homes/index.twig", 315)->display($context);
        // line 316
        echo "                              </div>
                            ";
    }

    // line 319
    public function block_homeHeadingSectionCurved2gr2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 320
        echo "                                ";
        $this->loadTemplate("/homes/data/index/gr/homeHeadingSectionCurved2.twig", "/homes/index.twig", 320)->display($context);
        // line 321
        echo "                            ";
    }

    // line 323
    public function block_counterUpgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 324
        echo "                                ";
        $this->loadTemplate("/homes/data/index/gr/counterUp.twig", "/homes/index.twig", 324)->display($context);
        // line 325
        echo "                            ";
    }

    // line 327
    public function block_homeIsoAwardgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 328
        echo "                                ";
        $this->loadTemplate("/homes/data/index/gr/homeIsoAward.twig", "/homes/index.twig", 328)->display($context);
        // line 329
        echo "                            ";
    }

    // line 333
    public function block_homeHeadingSectionCurvedgr2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 334
        echo "                                ";
        $this->loadTemplate("/homes/data/index/gr/homeHeadingSectionCurved.twig", "/homes/index.twig", 334)->display($context);
        // line 335
        echo "                            ";
    }

    // line 337
    public function block_testimonialsgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 338
        echo "                              <div class=\"container \">
                                ";
        // line 339
        $this->loadTemplate("/homes/data/index/gr/testimonials.twig", "/homes/index.twig", 339)->display($context);
        // line 340
        echo "                              </div>
                            ";
    }

    // line 349
    public function block_leadFormFixBottomgr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 350
        echo "                              ";
        $this->loadTemplate("/homes/data/index/gr/leadFormFixBottom.twig", "/homes/index.twig", 350)->display($context);
        // line 351
        echo "                            ";
    }

    // line 365
    public function block_showcaseVideoar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 366
        echo "                                ";
        $this->loadTemplate("/homes/data/index/ar/showcaseVideo.twig", "/homes/index.twig", 366)->display($context);
        // line 367
        echo "                            ";
    }

    // line 369
    public function block_leadFormFloatar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 370
        $this->loadTemplate("/homes/data/index/ar/leadFormFloat.twig", "/homes/index.twig", 370)->display($context);
        // line 371
        echo "                            ";
    }

    // line 377
    public function block_searchFormar($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
                                  ";
        // line 378
        $this->loadTemplate("/homes/data/index/ar/searchForm.twig", "/homes/index.twig", 378)->display($context);
        // line 379
        echo "                            ";
    }

    // line 386
    public function block_homeIconSectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 387
        echo "                                <div class=\"container \">
                                ";
        // line 388
        $this->loadTemplate("/homes/data/index/ar/homeIconSection.twig", "/homes/index.twig", 388)->display($context);
        // line 389
        echo "                                </div>
                            ";
    }

    // line 395
    public function block_homeHeadingSectionCurvedar0($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 396
        echo "                                ";
        $this->loadTemplate("/homes/data/index/ar/homeHeadingSectionCurved.twig", "/homes/index.twig", 396)->display($context);
        // line 397
        echo "                            ";
    }

    // line 399
    public function block_infoSectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 400
        echo "                              <div class=\"container \">
                                ";
        // line 401
        $this->loadTemplate("/homes/data/index/ar/infoSection.twig", "/homes/index.twig", 401)->display($context);
        // line 402
        echo "                              </div>
                            ";
    }

    // line 409
    public function block_homeHeadingSectionCurved2ar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        echo "                            ";
        $this->loadTemplate("/homes/data/index/ar/homeHeadingSectionCurved2.twig", "/homes/index.twig", 410)->display($context);
        // line 411
        echo "                            ";
    }

    // line 419
    public function block_photoGallerySectionBeforeAfterar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 420
        echo "                              <div class=\"container \">
                                ";
        // line 421
        $this->loadTemplate("/homes/data/index/ar/photoGallerySectionBeforeAfter.twig", "/homes/index.twig", 421)->display($context);
        // line 422
        echo "                              </div>
                            ";
    }

    // line 425
    public function block_homeHeadingSectionCurvedar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 426
        echo "                                ";
        $this->loadTemplate("/homes/data/index/ar/homeHeadingSectionCurved.twig", "/homes/index.twig", 426)->display($context);
        // line 427
        echo "                            ";
    }

    // line 429
    public function block_videoGallerySectionar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 430
        echo "                              <div class=\"container \">
                                ";
        // line 431
        $this->loadTemplate("/homes/data/index/ar/videoGallerySection.twig", "/homes/index.twig", 431)->display($context);
        // line 432
        echo "                              </div>
                            ";
    }

    // line 435
    public function block_homeHeadingSectionCurved2ar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 436
        echo "                                ";
        $this->loadTemplate("/homes/data/index/ar/homeHeadingSectionCurved2.twig", "/homes/index.twig", 436)->display($context);
        // line 437
        echo "                            ";
    }

    // line 439
    public function block_counterUpar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 440
        echo "                                ";
        $this->loadTemplate("/homes/data/index/ar/counterUp.twig", "/homes/index.twig", 440)->display($context);
        // line 441
        echo "                            ";
    }

    // line 443
    public function block_homeIsoAwardar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 444
        echo "                                ";
        $this->loadTemplate("/homes/data/index/ar/homeIsoAward.twig", "/homes/index.twig", 444)->display($context);
        // line 445
        echo "                            ";
    }

    // line 449
    public function block_homeHeadingSectionCurvedar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 450
        echo "                                ";
        $this->loadTemplate("/homes/data/index/ar/homeHeadingSectionCurved.twig", "/homes/index.twig", 450)->display($context);
        // line 451
        echo "                            ";
    }

    // line 453
    public function block_testimonialsar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 454
        echo "                              <div class=\"container \">
                                ";
        // line 455
        $this->loadTemplate("/homes/data/index/ar/testimonials.twig", "/homes/index.twig", 455)->display($context);
        // line 456
        echo "                              </div>
                            ";
    }

    // line 465
    public function block_leadFormFixBottomar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        echo "                              ";
        $this->loadTemplate("/homes/data/index/ar/leadFormFixBottom.twig", "/homes/index.twig", 466)->display($context);
        // line 467
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/homes/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1364 => 467,  1361 => 466,  1357 => 465,  1352 => 456,  1350 => 455,  1347 => 454,  1343 => 453,  1339 => 451,  1336 => 450,  1332 => 449,  1328 => 445,  1325 => 444,  1321 => 443,  1317 => 441,  1314 => 440,  1310 => 439,  1306 => 437,  1303 => 436,  1299 => 435,  1294 => 432,  1292 => 431,  1289 => 430,  1285 => 429,  1281 => 427,  1278 => 426,  1274 => 425,  1269 => 422,  1267 => 421,  1264 => 420,  1260 => 419,  1256 => 411,  1253 => 410,  1249 => 409,  1244 => 402,  1242 => 401,  1239 => 400,  1235 => 399,  1231 => 397,  1228 => 396,  1224 => 395,  1219 => 389,  1217 => 388,  1214 => 387,  1210 => 386,  1206 => 379,  1204 => 378,  1198 => 377,  1194 => 371,  1192 => 370,  1186 => 369,  1182 => 367,  1179 => 366,  1175 => 365,  1171 => 351,  1168 => 350,  1164 => 349,  1159 => 340,  1157 => 339,  1154 => 338,  1150 => 337,  1146 => 335,  1143 => 334,  1139 => 333,  1135 => 329,  1132 => 328,  1128 => 327,  1124 => 325,  1121 => 324,  1117 => 323,  1113 => 321,  1110 => 320,  1106 => 319,  1101 => 316,  1099 => 315,  1096 => 314,  1092 => 313,  1088 => 311,  1085 => 310,  1081 => 309,  1076 => 306,  1074 => 305,  1071 => 304,  1067 => 303,  1063 => 295,  1060 => 294,  1056 => 293,  1051 => 286,  1049 => 285,  1046 => 284,  1042 => 283,  1038 => 281,  1035 => 280,  1031 => 279,  1026 => 273,  1024 => 272,  1021 => 271,  1017 => 270,  1013 => 263,  1011 => 262,  1005 => 261,  1001 => 255,  999 => 254,  993 => 253,  989 => 251,  986 => 250,  982 => 249,  978 => 235,  975 => 234,  971 => 233,  966 => 224,  964 => 223,  961 => 222,  957 => 221,  953 => 219,  950 => 218,  946 => 217,  942 => 213,  939 => 212,  935 => 211,  931 => 209,  928 => 208,  924 => 207,  920 => 205,  917 => 204,  913 => 203,  908 => 200,  906 => 199,  903 => 198,  899 => 197,  895 => 195,  892 => 194,  888 => 193,  883 => 190,  881 => 189,  878 => 188,  874 => 187,  870 => 179,  867 => 178,  863 => 177,  858 => 170,  856 => 169,  853 => 168,  849 => 167,  845 => 165,  842 => 164,  838 => 163,  833 => 157,  831 => 156,  828 => 155,  824 => 154,  820 => 147,  818 => 146,  812 => 145,  808 => 139,  806 => 138,  800 => 137,  796 => 135,  793 => 134,  789 => 133,  785 => 119,  782 => 118,  778 => 117,  773 => 108,  771 => 107,  768 => 106,  764 => 105,  760 => 103,  757 => 102,  753 => 101,  749 => 97,  746 => 96,  742 => 95,  738 => 93,  735 => 92,  731 => 91,  727 => 89,  724 => 88,  720 => 87,  715 => 84,  713 => 83,  710 => 82,  706 => 81,  702 => 79,  699 => 78,  695 => 77,  690 => 74,  688 => 73,  685 => 72,  681 => 71,  677 => 63,  674 => 62,  670 => 61,  665 => 54,  663 => 53,  660 => 52,  656 => 51,  652 => 49,  649 => 48,  645 => 47,  640 => 41,  638 => 40,  635 => 39,  631 => 38,  627 => 31,  625 => 30,  619 => 29,  615 => 23,  613 => 22,  607 => 21,  603 => 19,  600 => 18,  596 => 17,  586 => 470,  581 => 467,  579 => 465,  576 => 464,  571 => 458,  569 => 453,  566 => 452,  564 => 449,  559 => 446,  557 => 443,  554 => 442,  552 => 439,  549 => 438,  547 => 435,  544 => 434,  542 => 429,  539 => 428,  537 => 425,  534 => 424,  532 => 419,  529 => 418,  526 => 412,  524 => 409,  521 => 408,  518 => 404,  516 => 399,  513 => 398,  510 => 395,  507 => 391,  505 => 386,  502 => 385,  499 => 380,  497 => 377,  494 => 376,  491 => 372,  489 => 369,  486 => 368,  484 => 365,  481 => 364,  478 => 360,  475 => 356,  473 => 355,  470 => 354,  465 => 351,  463 => 349,  460 => 348,  455 => 342,  453 => 337,  450 => 336,  448 => 333,  443 => 330,  441 => 327,  438 => 326,  436 => 323,  433 => 322,  431 => 319,  428 => 318,  426 => 313,  423 => 312,  421 => 309,  418 => 308,  416 => 303,  413 => 302,  410 => 296,  408 => 293,  405 => 292,  402 => 288,  400 => 283,  397 => 282,  394 => 279,  391 => 275,  389 => 270,  386 => 269,  383 => 264,  381 => 261,  378 => 260,  375 => 256,  373 => 253,  370 => 252,  368 => 249,  365 => 248,  362 => 244,  359 => 240,  357 => 239,  354 => 238,  349 => 235,  347 => 233,  344 => 232,  339 => 226,  337 => 221,  334 => 220,  332 => 217,  327 => 214,  325 => 211,  322 => 210,  320 => 207,  317 => 206,  315 => 203,  312 => 202,  310 => 197,  307 => 196,  305 => 193,  302 => 192,  300 => 187,  297 => 186,  294 => 180,  292 => 177,  289 => 176,  286 => 172,  284 => 167,  281 => 166,  278 => 163,  275 => 159,  273 => 154,  270 => 153,  267 => 148,  265 => 145,  262 => 144,  259 => 140,  257 => 137,  254 => 136,  252 => 133,  249 => 132,  246 => 128,  243 => 124,  241 => 123,  238 => 122,  233 => 119,  231 => 117,  228 => 116,  223 => 110,  221 => 105,  218 => 104,  216 => 101,  211 => 98,  209 => 95,  206 => 94,  204 => 91,  201 => 90,  199 => 87,  196 => 86,  194 => 81,  191 => 80,  189 => 77,  186 => 76,  184 => 71,  181 => 70,  178 => 64,  176 => 61,  173 => 60,  170 => 56,  168 => 51,  165 => 50,  162 => 47,  159 => 43,  157 => 38,  154 => 37,  151 => 32,  149 => 29,  146 => 28,  143 => 24,  141 => 21,  138 => 20,  136 => 17,  133 => 16,  130 => 12,  127 => 8,  125 => 7,  122 => 6,  118 => 5,  111 => 3,  100 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block title %}  <title> prod </title> {% endblock  %}
  
{% block content %}

        {% if LANG == 'fr' %}

                        {# {% block simpleMegamenu %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}  #}

                            {# {% block carouselfr %}
                                {% include('/components/index/fr/showcaseBackgroundImage.twig') %}
                            {% endblock  %}  #}
                          
                            {% block showcaseVideofr %}
                                {% include('/homes/data/index/fr/showcaseVideo.twig') %}
                            {% endblock  %}
                          
                            {% block leadFormFloatfr %} 
                                  {% include('/homes/data/index/fr/leadFormFloat.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_floatzoho %} 
                                  {% include('/components/index/fr/leadFormFloatzoho.twig') %}
                            {% endblock  %} #}
                           
                            {% block searchFormfr %} 
                                  {% include('/homes/data/index/fr/searchForm.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_fixfr %} 
                                  {% include('/components/index/fr/leadFormFix.twig') %}
                            {% endblock  %}
                             #}

                           {% block homeIconSectionfr %}
                                <div class=\"container \">
                                {% include('/homes/data/index/fr/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}

                             {# {% block home_heading_sectionfr %}
                                {% include('/components/index/fr/homeHeadingSection.twig') %}
                            {% endblock  %} #}
                             {% block homeHeadingSectionCurvedfr0 %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block infoSectionfr %}
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

                            {% block photoGallerySectionBeforeAfterfr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/fr/photoGallerySectionBeforeAfter.twig') %}
                              </div>
                            {% endblock  %}

                            {% block homeHeadingSectionCurvedfr %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block videoGallerySectionfr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/fr/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                             {% block homeHeadingSectionCurved2fr2 %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}
                            
                           {% block counterUpfr %}
                                {% include('/homes/data/index/fr/counterUp.twig') %}
                            {% endblock  %}

                             {% block homeIsoAwardfr %}
                                {% include('/homes/data/index/fr/homeIsoAward.twig') %}
                            {% endblock  %}

                            

                            {% block homeHeadingSectionCurvedfr2 %}
                                {% include('/homes/data/index/fr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block testimonialsfr %}
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

       {% endif %}
      
        {% if LANG == 'en' %}

                        {# {% block simpleMegamenu %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}  #}

                            {# {% block carouselen %}
                                {% include('/components/index/en/showcaseBackgroundImage.twig') %}
                            {% endblock  %}  #}
                          
                            {% block showcaseVideoen %}
                                {% include('/homes/data/index/en/showcaseVideo.twig') %}
                            {% endblock  %}
                          
                            {% block leadFormFloaten %} 
                                  {% include('/homes/data/index/en/leadFormFloat.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_floatzoho %} 
                                  {% include('/components/index/en/leadFormFloatzoho.twig') %}
                            {% endblock  %} #}
                           
                            {% block searchFormen %} 
                                  {% include('/homes/data/index/en/searchForm.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_fixen %} 
                                  {% include('/components/index/en/leadFormFix.twig') %}
                            {% endblock  %}
                             #}

                           {% block homeIconSectionen %}
                                <div class=\"container \">
                                {% include('/homes/data/index/en/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}

                             {# {% block home_heading_sectionen %}
                                {% include('/components/index/en/homeHeadingSection.twig') %}
                            {% endblock  %} #}
                             {% block homeHeadingSectionCurveden0 %}
                                {% include('/homes/data/index/en/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block infoSectionen %}
                              <div class=\"container \">
                                {% include('/homes/data/index/en/infoSection.twig') %}
                              </div>
                            {% endblock  %}

                            {# {% block video_play_sectionen %}
                            {% include('/components/index/en/videoPlaySection.twig') %}
                            {% endblock  %} #}

                            {% block homeHeadingSectionCurved2en %}
                            {% include('/homes/data/index/en/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}

                            {# {% block photo_gallery_sectionen %}
                              <div class=\"container \">
                                {% include('/components/index/en/photoGallerySection.twig') %}
                              </div>
                            {% endblock  %} #}

                            {% block photoGallerySectionBeforeAfteren %}
                              <div class=\"container \">
                                {% include('/homes/data/index/en/photoGallerySectionBeforeAfter.twig') %}
                              </div>
                            {% endblock  %}

                            {% block homeHeadingSectionCurveden %}
                                {% include('/homes/data/index/en/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block videoGallerySectionen %}
                              <div class=\"container \">
                                {% include('/homes/data/index/en/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                             {% block homeHeadingSectionCurved2en2 %}
                                {% include('/homes/data/index/en/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}
                            
                           {% block counterUpen %}
                                {% include('/homes/data/index/en/counterUp.twig') %}
                            {% endblock  %}

                             {% block homeIsoAwarden %}
                                {% include('/homes/data/index/en/homeIsoAward.twig') %}
                            {% endblock  %}

                            

                            {% block homeHeadingSectionCurveden2 %}
                                {% include('/homes/data/index/en/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block testimonialsen %}
                              <div class=\"container \">
                                {% include('/homes/data/index/en/testimonials.twig') %}
                              </div>
                            {% endblock  %}

                           

                            {# {% block newsletter_sectionen %}
                              {% include('/components/index/en/newsletterSection.twig') %}
                            {% endblock  %}   #}
                            
                            {% block leadFormFixBottomen %}
                              {% include('/homes/data/index/en/leadFormFixBottom.twig') %}
                            {% endblock  %}  

       {% endif %}
      
        {% if LANG == 'gr' %}

                        {# {% block simpleMegamenu %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}  #}

                            {# {% block carouselgr %}
                                {% include('/components/index/gr/showcaseBackgroundImage.twig') %}
                            {% endblock  %}  #}
                          
                            {% block showcaseVideogr %}
                                {% include('/homes/data/index/gr/showcaseVideo.twig') %}
                            {% endblock  %}
                          
                            {% block leadFormFloatgr %} 
                                  {% include('/homes/data/index/gr/leadFormFloat.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_floatzoho %} 
                                  {% include('/components/index/gr/leadFormFloatzoho.twig') %}
                            {% endblock  %} #}
                           
                            {% block searchFormgr %} 
                                  {% include('/homes/data/index/gr/searchForm.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_fixgr %} 
                                  {% include('/components/index/gr/leadFormFix.twig') %}
                            {% endblock  %}
                             #}

                           {% block homeIconSectiongr %}
                                <div class=\"container \">
                                {% include('/homes/data/index/gr/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}

                             {# {% block home_heading_sectiongr %}
                                {% include('/components/index/gr/homeHeadingSection.twig') %}
                            {% endblock  %} #}
                             {% block homeHeadingSectionCurvedgr0 %}
                                {% include('/homes/data/index/gr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block infoSectiongr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/gr/infoSection.twig') %}
                              </div>
                            {% endblock  %}

                            {# {% block video_play_sectiongr %}
                            {% include('/components/index/gr/videoPlaySection.twig') %}
                            {% endblock  %} #}

                            {% block homeHeadingSectionCurved2gr %}
                            {% include('/homes/data/index/gr/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}

                            {# {% block photo_gallery_sectiongr %}
                              <div class=\"container \">
                                {% include('/components/index/gr/photoGallerySection.twig') %}
                              </div>
                            {% endblock  %} #}

                            {% block photoGallerySectionBeforeAftergr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/gr/photoGallerySectionBeforeAfter.twig') %}
                              </div>
                            {% endblock  %}

                            {% block homeHeadingSectionCurvedgr %}
                                {% include('/homes/data/index/gr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block videoGallerySectiongr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/gr/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                             {% block homeHeadingSectionCurved2gr2 %}
                                {% include('/homes/data/index/gr/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}
                            
                           {% block counterUpgr %}
                                {% include('/homes/data/index/gr/counterUp.twig') %}
                            {% endblock  %}

                             {% block homeIsoAwardgr %}
                                {% include('/homes/data/index/gr/homeIsoAward.twig') %}
                            {% endblock  %}

                            

                            {% block homeHeadingSectionCurvedgr2 %}
                                {% include('/homes/data/index/gr/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block testimonialsgr %}
                              <div class=\"container \">
                                {% include('/homes/data/index/gr/testimonials.twig') %}
                              </div>
                            {% endblock  %}

                           

                            {# {% block newsletter_sectiongr %}
                              {% include('/components/index/gr/newsletterSection.twig') %}
                            {% endblock  %}   #}
                            
                            {% block leadFormFixBottomgr %}
                              {% include('/homes/data/index/gr/leadFormFixBottom.twig') %}
                            {% endblock  %}  

       {% endif %}
      
        {% if LANG == 'ar' %}

                        {# {% block simpleMegamenu %}
                                {% include('/inc/navbarMegaMenu.html.twig') %}
                            {% endblock  %}  #}

                            {# {% block carouselar %}
                                {% include('/components/index/ar/showcaseBackgroundImage.twig') %}
                            {% endblock  %}  #}
                          
                            {% block showcaseVideoar %}
                                {% include('/homes/data/index/ar/showcaseVideo.twig') %}
                            {% endblock  %}
                          
                            {% block leadFormFloatar %} 
                                  {% include('/homes/data/index/ar/leadFormFloat.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_floatzoho %} 
                                  {% include('/components/index/ar/leadFormFloatzoho.twig') %}
                            {% endblock  %} #}
                           
                            {% block searchFormar %} 
                                  {% include('/homes/data/index/ar/searchForm.twig') %}
                            {% endblock  %}

                            {# {% block lead_form_fixar %} 
                                  {% include('/components/index/ar/leadFormFix.twig') %}
                            {% endblock  %}
                             #}

                           {% block homeIconSectionar %}
                                <div class=\"container \">
                                {% include('/homes/data/index/ar/homeIconSection.twig') %}
                                </div>
                            {% endblock  %}

                             {# {% block home_heading_sectionar %}
                                {% include('/components/index/ar/homeHeadingSection.twig') %}
                            {% endblock  %} #}
                             {% block homeHeadingSectionCurvedar0 %}
                                {% include('/homes/data/index/ar/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block infoSectionar %}
                              <div class=\"container \">
                                {% include('/homes/data/index/ar/infoSection.twig') %}
                              </div>
                            {% endblock  %}

                            {# {% block video_play_sectionar %}
                            {% include('/components/index/ar/videoPlaySection.twig') %}
                            {% endblock  %} #}

                            {% block homeHeadingSectionCurved2ar %}
                            {% include('/homes/data/index/ar/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}

                            {# {% block photo_gallery_sectionar %}
                              <div class=\"container \">
                                {% include('/components/index/ar/photoGallerySection.twig') %}
                              </div>
                            {% endblock  %} #}

                            {% block photoGallerySectionBeforeAfterar %}
                              <div class=\"container \">
                                {% include('/homes/data/index/ar/photoGallerySectionBeforeAfter.twig') %}
                              </div>
                            {% endblock  %}

                            {% block homeHeadingSectionCurvedar %}
                                {% include('/homes/data/index/ar/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block videoGallerySectionar %}
                              <div class=\"container \">
                                {% include('/homes/data/index/ar/videoGallerySection.twig') %}
                              </div>
                            {% endblock  %}

                             {% block homeHeadingSectionCurved2ar2 %}
                                {% include('/homes/data/index/ar/homeHeadingSectionCurved2.twig') %}
                            {% endblock  %}
                            
                           {% block counterUpar %}
                                {% include('/homes/data/index/ar/counterUp.twig') %}
                            {% endblock  %}

                             {% block homeIsoAwardar %}
                                {% include('/homes/data/index/ar/homeIsoAward.twig') %}
                            {% endblock  %}

                            

                            {% block homeHeadingSectionCurvedar2 %}
                                {% include('/homes/data/index/ar/homeHeadingSectionCurved.twig') %}
                            {% endblock  %}

                            {% block testimonialsar %}
                              <div class=\"container \">
                                {% include('/homes/data/index/ar/testimonials.twig') %}
                              </div>
                            {% endblock  %}

                           

                            {# {% block newsletter_sectionar %}
                              {% include('/components/index/ar/newsletterSection.twig') %}
                            {% endblock  %}   #}
                            
                            {% block leadFormFixBottomar %}
                              {% include('/homes/data/index/ar/leadFormFixBottom.twig') %}
                            {% endblock  %}  

       {% endif %}
      

        
      
 

 {% endblock  %}
", "/homes/index.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/index.twig");
    }
}
