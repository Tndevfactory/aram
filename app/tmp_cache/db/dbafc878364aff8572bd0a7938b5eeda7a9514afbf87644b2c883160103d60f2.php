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

/* /components/index/fr/homeHeadingSectionCurved2.twig */
class __TwigTemplate_8503e5efa9b178cf86c1f3309a77674cd6d37f10daa02395e1123bf6a23bda55 extends Template
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
        echo "<!-- Curved home_heading_section -->

<style>

#homeHeadingCurved2{
position:relative;
width:100%;
height:30vh;
display:flex;
justify-content:center;
align-items:center;
overflow:hidden;

 }

#homeHeadingCurved2:before {
content:'';
position:absolute;
top:0;
left:0;
width:100%;
height:100%;

min-height: 200px;
background: url('http://localhost/ARAM/public/img/home_heading_section/lights.jpg');
background-attachment: fixed;
background-repeat: no-repeat;

border-radius:85% 0% 80% 0% / 40%  0% 40% 0%;
transform:scaleX(3);

 }

#homeHeadingCurved2 .over {

position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.7);
border-radius:85% 0% 80% 0% / 40%  0% 40% 0%;
transform:scaleX(3);

 }


#homeHeadingCurved2 .content{
position:relative;
z-index:1;
margin: 0 auto;
max-width:900px;
text-align:center;
  }

#homeHeadingCurved2 .content h2{
margin:0;
padding:0;
color: #fff;
font-size:3em;
  }

#homeHeadingCurved2 .content p{
color: #fff;
font-size:1.2em;
  }


 </style>


  <section id=\"homeHeadingCurved2\" class=\"p-5\">
      <div class=\"over\"></div>
      <div class=\"content\">
          <h2> ARAM PRO</h2>
          <p> Lorem ipsum dolor sit Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit! </p>
      </div>
    
  </section>
    ";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/homeHeadingSectionCurved2.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Curved home_heading_section -->

<style>

#homeHeadingCurved2{
position:relative;
width:100%;
height:30vh;
display:flex;
justify-content:center;
align-items:center;
overflow:hidden;

 }

#homeHeadingCurved2:before {
content:'';
position:absolute;
top:0;
left:0;
width:100%;
height:100%;

min-height: 200px;
background: url('http://localhost/ARAM/public/img/home_heading_section/lights.jpg');
background-attachment: fixed;
background-repeat: no-repeat;

border-radius:85% 0% 80% 0% / 40%  0% 40% 0%;
transform:scaleX(3);

 }

#homeHeadingCurved2 .over {

position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.7);
border-radius:85% 0% 80% 0% / 40%  0% 40% 0%;
transform:scaleX(3);

 }


#homeHeadingCurved2 .content{
position:relative;
z-index:1;
margin: 0 auto;
max-width:900px;
text-align:center;
  }

#homeHeadingCurved2 .content h2{
margin:0;
padding:0;
color: #fff;
font-size:3em;
  }

#homeHeadingCurved2 .content p{
color: #fff;
font-size:1.2em;
  }


 </style>


  <section id=\"homeHeadingCurved2\" class=\"p-5\">
      <div class=\"over\"></div>
      <div class=\"content\">
          <h2> ARAM PRO</h2>
          <p> Lorem ipsum dolor sit Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit! </p>
      </div>
    
  </section>
    ", "/components/index/fr/homeHeadingSectionCurved2.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/homeHeadingSectionCurved2.twig");
    }
}
