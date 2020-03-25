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

/* /components/index/fr/showcaseBackgroundImage.twig */
class __TwigTemplate_41757a2995660df4b75b150b7aae564872d7236cd84031e2a470de0e8429bf2f extends Template
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
        echo "<!-- showcase background Image -->

<style>
#showcaseBackgroundImage .bg {

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 500px; 
  width:100%;  
  /* local */
  background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url('http://localhost/ARAM/public/img/showcase/image1.jpg');
  /* server 
  background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url('https://www.aram-clinic.com/public/img/showcase/image1.jpg');*/
  /*background-image: url(\"https://source.unsplash.com/random/800x600\");*/
  /*background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url(\"https://source.unsplash.com/random/1800x1200\");*/

}

";
        // line 22
        echo "#showcaseBackgroundImage .workspaceImage{
  position:relative;
  display:flex;
  justify-content:center;
  align-items:center;
  z-index:-999;
  
}

#showcaseBackgroundImage .captionShowcaseImage{
  position:absolute;
  color:white;
  font-weight:bold;
  font-size:2.5em;
  text-align:center;
  
}


</style>


  <section id=\"showcaseBackgroundImage\">
    <div class=\"workspaceImage\">
      
        <div class=\"bg\"></div>
      
        <div class=\"captionShowcaseImage\"> 
            <p> Welcome to ARAM CLINIC </p>
        </div>


    </div>
        
        


  </section>


   ";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/showcaseBackgroundImage.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- showcase background Image -->

<style>
#showcaseBackgroundImage .bg {

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 500px; 
  width:100%;  
  /* local */
  background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url('http://localhost/ARAM/public/img/showcase/image1.jpg');
  /* server 
  background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url('https://www.aram-clinic.com/public/img/showcase/image1.jpg');*/
  /*background-image: url(\"https://source.unsplash.com/random/800x600\");*/
  /*background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url(\"https://source.unsplash.com/random/1800x1200\");*/

}

{# {{URLROOT}} #}
{# 'http://localhost/ARAM/public/img/showcase/image1.jpg' #}
#showcaseBackgroundImage .workspaceImage{
  position:relative;
  display:flex;
  justify-content:center;
  align-items:center;
  z-index:-999;
  
}

#showcaseBackgroundImage .captionShowcaseImage{
  position:absolute;
  color:white;
  font-weight:bold;
  font-size:2.5em;
  text-align:center;
  
}


</style>


  <section id=\"showcaseBackgroundImage\">
    <div class=\"workspaceImage\">
      
        <div class=\"bg\"></div>
      
        <div class=\"captionShowcaseImage\"> 
            <p> Welcome to ARAM CLINIC </p>
        </div>


    </div>
        
        


  </section>


   ", "/components/index/fr/showcaseBackgroundImage.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/showcaseBackgroundImage.twig");
    }
}
