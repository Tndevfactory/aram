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
     
      <h1 class=\"text-center\">Videos AVANT APRES </h1>
      <p class=\"text-center\">Voyez les résultats</p>

    <div class=\"videos\">  
      
      <div class=\"row mb-4\">

            <div class=\"col-md-4  mb-2\" >
                <div class=\"video d-flex justify-content-center align-items-center \" style=\"position:relative\">
                 <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                    <a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:50%; color:#C3922E;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>

             <div class=\"col-md-4  mb-2\" >
                <div class=\"video d-flex justify-content-center align-items-center \" style=\"position:relative\">
                 <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                    <a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:50%; color:#C3922E;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>

            <div class=\"col-md-4  mb-2\" >
                <div class=\"video d-flex justify-content-center align-items-center \" style=\"position:relative\">
                 <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                    <a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:50%; color:#C3922E;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>


        </div>


    </div>

     
            <!--<div class=\"col-md-4  mb-2\">
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
            </div>-->



      

    </div>
  </section>


  ";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/videoGallerySection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  75 => 34,  63 => 25,  37 => 1,);
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
     
      <h1 class=\"text-center\">Videos AVANT APRES </h1>
      <p class=\"text-center\">Voyez les résultats</p>

    <div class=\"videos\">  
      
      <div class=\"row mb-4\">

            <div class=\"col-md-4  mb-2\" >
                <div class=\"video d-flex justify-content-center align-items-center \" style=\"position:relative\">
                 <img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                    <a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:50%; color:#C3922E;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>

             <div class=\"col-md-4  mb-2\" >
                <div class=\"video d-flex justify-content-center align-items-center \" style=\"position:relative\">
                 <img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                    <a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:50%; color:#C3922E;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>

            <div class=\"col-md-4  mb-2\" >
                <div class=\"video d-flex justify-content-center align-items-center \" style=\"position:relative\">
                 <img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                    <a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:50%; color:#C3922E;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>


        </div>


    </div>

     
            <!--<div class=\"col-md-4  mb-2\">
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
            </div>-->



      

    </div>
  </section>


  {# {% block script %}
    <script>
          \$(document).ready(function(){
              \$('.venobox').venobox(); 
          });


          
    </script>

  {% endblock  %} #}", "/components/index/fr/videoGallerySection.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\components\\index\\fr\\videoGallerySection.twig");
    }
}
