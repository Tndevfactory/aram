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

/* /components/index/fr/videoGallerySection.twig */
class __TwigTemplate_63eef26c3db6252830c1b1f724e7578afc29c7fa4a76a547ef0ad89fba1ef6af extends Template
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
        echo "<style>
.video-fluid {
  width: 100%;
  /*height: auto; */
  height: 100%;
}
</style>



<!-- video GALLERY -->
<!-- video gllery_section -->
  <section id=\"gallery\" class=\"py-5\">
    <div class=\"container\">
     
      <h1 class=\"text-center\">PHOTOS AVANT APRES </h1>
      <p class=\"text-center\">Voyez les résultats</p>

      <div class=\"row mb-4\">

        <div class=\"col-md-4  mb-2\">
            <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4  mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4  mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

      </div>

      <div class=\"row mb-4\">

        <div class=\"col-md-4 mb-2\">
            <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4 mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4 mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

      </div>


      

    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/videoGallerySection.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
.video-fluid {
  width: 100%;
  /*height: auto; */
  height: 100%;
}
</style>



<!-- video GALLERY -->
<!-- video gllery_section -->
  <section id=\"gallery\" class=\"py-5\">
    <div class=\"container\">
     
      <h1 class=\"text-center\">PHOTOS AVANT APRES </h1>
      <p class=\"text-center\">Voyez les résultats</p>

      <div class=\"row mb-4\">

        <div class=\"col-md-4  mb-2\">
            <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4  mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4  mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

      </div>

      <div class=\"row mb-4\">

        <div class=\"col-md-4 mb-2\">
            <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4 mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

        <div class=\"col-md-4 mb-2\">
          <video class=\"video-fluid z-depth-1\" controls loop muted>
              <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
            </video>
        </div>

      </div>


      

    </div>
  </section>", "/components/index/fr/videoGallerySection.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\components\\index\\fr\\videoGallerySection.twig");
    }
}
