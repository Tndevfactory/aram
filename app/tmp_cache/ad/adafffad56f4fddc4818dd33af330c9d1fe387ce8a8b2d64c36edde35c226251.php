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

/* /homes/data/index/fr/showcaseVideo.twig */
class __TwigTemplate_1dc1da9f10c710828d61448a3f59117a7ef149632c8c648c0a9b4df3c6f161f2 extends Template
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
        echo "<!-- showcase Video -->

<style>
#showcaseVideo header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

#showcaseVideo header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

#showcaseVideo header .container {
  position: relative;
  z-index: 2;
}

#showcaseVideo header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('http://localhost/ARAM/public/video/aram--.mp4') black no-repeat center center scroll;
  }

  header video {
    display: none;
  }
}
</style>


  <section id=\"showcaseVideo\">
   
      <header>
        <div class=\"overlay\"></div>
        <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
          <source src=\"http://localhost/ARAM/public/video/aram-.mp4\" type=\"video/mp4\">
          <source src=\"http://localhost/ARAM/public/video/aram-.webm\" type=\"video/webm\">
          <source src=\"http://localhost/ARAM/public/video/aram-.ogg\" type=\"video/ogg\">
        </video>

        <div class=\"container h-100\">
          <div class=\"d-flex h-100 text-center align-items-center\">
            <div class=\"w-100 text-white\">
              <h1 class=\"display-3\">ARAM CLINIC</h1>
              <p class=\"lead mb-0\">Clinique de chirurgie et médecine esthétique</p>
            </div>
          </div>
        </div>

    </header>

  </section>


   ";
    }

    public function getTemplateName()
    {
        return "/homes/data/index/fr/showcaseVideo.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- showcase Video -->

<style>
#showcaseVideo header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

#showcaseVideo header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

#showcaseVideo header .container {
  position: relative;
  z-index: 2;
}

#showcaseVideo header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('http://localhost/ARAM/public/video/aram--.mp4') black no-repeat center center scroll;
  }

  header video {
    display: none;
  }
}
</style>


  <section id=\"showcaseVideo\">
   
      <header>
        <div class=\"overlay\"></div>
        <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
          <source src=\"http://localhost/ARAM/public/video/aram-.mp4\" type=\"video/mp4\">
          <source src=\"http://localhost/ARAM/public/video/aram-.webm\" type=\"video/webm\">
          <source src=\"http://localhost/ARAM/public/video/aram-.ogg\" type=\"video/ogg\">
        </video>

        <div class=\"container h-100\">
          <div class=\"d-flex h-100 text-center align-items-center\">
            <div class=\"w-100 text-white\">
              <h1 class=\"display-3\">ARAM CLINIC</h1>
              <p class=\"lead mb-0\">Clinique de chirurgie et médecine esthétique</p>
            </div>
          </div>
        </div>

    </header>

  </section>


   ", "/homes/data/index/fr/showcaseVideo.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\homes\\data\\index\\fr\\showcaseVideo.twig");
    }
}