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

/* /homes/data/index/gr/videoGallerySection.twig */
class __TwigTemplate_0999475c9bdfef3851637c48df9cf0d1455d37355f27ec7166560622e996ffbf extends Template
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

#vidgallery img:hover {
  transform:scale(1.05, 1.05);
  box-shadow:1px 1px 5px 3px grey,-1px -1px 5px 3px grey;
}


</style>



<!-- video GALLERY -->
<!-- video gllery_section -->
  <section id=\"vidgallery\" class=\"py-5\">
    <div class=\"container\">
     
      <h1 class=\"text-center\">Videos AVANT APRES </h1>
      <p class=\"text-center\">Voyez les résultats</p>

    <div class=\"videos py-5\">  
      
      <div class=\"row mb-4\">
            <div class=\"col-md-4 mb-2\" data-aos=\"zoom-in-right\">
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                      <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
            
            <div class=\"col-md-4 mb-2\" data-aos=\"zoom-in\" >
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
            
            <div class=\"col-md-4 mb-2\" data-aos=\"zoom-in-left\">
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                      <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
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
        return "/homes/data/index/gr/videoGallerySection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 45,  77 => 36,  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

#vidgallery img:hover {
  transform:scale(1.05, 1.05);
  box-shadow:1px 1px 5px 3px grey,-1px -1px 5px 3px grey;
}


</style>



<!-- video GALLERY -->
<!-- video gllery_section -->
  <section id=\"vidgallery\" class=\"py-5\">
    <div class=\"container\">
     
      <h1 class=\"text-center\">Videos AVANT APRES </h1>
      <p class=\"text-center\">Voyez les résultats</p>

    <div class=\"videos py-5\">  
      
      <div class=\"row mb-4\">
            <div class=\"col-md-4 mb-2\" data-aos=\"zoom-in-right\">
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                      <img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
            
            <div class=\"col-md-4 mb-2\" data-aos=\"zoom-in\" >
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                      <img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
            
            <div class=\"col-md-4 mb-2\" data-aos=\"zoom-in-left\">
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/T6mMaHXTlHg\" data-gall=\"myGallery\">
                      <img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
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

  {% endblock  %} #}", "/homes/data/index/gr/videoGallerySection.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/gr/videoGallerySection.twig");
    }
}
