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

/* /components/index/en/video_play_section.twig */
class __TwigTemplate_ff06fe26a447bcb8fe5fd8824f25563fd06ee99a87f8b1d50f2207a61c4ee379 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- VIDEO PLAY -->
<!-- video_play_section -->
  <section id=\"video-play\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
        
          <div class=\"container p-5\">
            <a href=\"#\" class=\"video\" data-video=\"https://www.youtube.com/embed/UA8Yd7a08HM\" data-toggle=\"modal\" data-target=\"#videoModal\">
              <i class=\"fas fa-play fa-3x\"></i>
            </a>
            <h1>Notre Savoir Faire</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- video_modal -->
  <div class=\"modal fade\" id=\"videoModal\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <button class=\"close\" data-dismiss=\"modal\">
            <span>&times;</span>
          </button>
          <iframe src=\"\" frameborder=\"0\" height=\"350\" width=\"100%\" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


";
    }

    public function getTemplateName()
    {
        return "/components/index/en/video_play_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- VIDEO PLAY -->
<!-- video_play_section -->
  <section id=\"video-play\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
        
          <div class=\"container p-5\">
            <a href=\"#\" class=\"video\" data-video=\"https://www.youtube.com/embed/UA8Yd7a08HM\" data-toggle=\"modal\" data-target=\"#videoModal\">
              <i class=\"fas fa-play fa-3x\"></i>
            </a>
            <h1>Notre Savoir Faire</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- video_modal -->
  <div class=\"modal fade\" id=\"videoModal\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <button class=\"close\" data-dismiss=\"modal\">
            <span>&times;</span>
          </button>
          <iframe src=\"\" frameborder=\"0\" height=\"350\" width=\"100%\" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


{# <iframe width=\"1195\" height=\"672\" src=\"https://www.youtube.com/embed/UA8Yd7a08HM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> #}", "/components/index/en/video_play_section.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\index\\en\\video_play_section.twig");
    }
}
