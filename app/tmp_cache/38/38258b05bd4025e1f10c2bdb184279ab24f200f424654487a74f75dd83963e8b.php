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

/* /inc/social.html.twig */
class __TwigTemplate_8ee2ce4ba263937bebcc8f3406b3299b914747fdc4a28f5e2bfcaab7f5bec7bb extends Template
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


.social-shares {
    position: fixed;
    top: 50%;
  
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index:9999;
    visibility:hidden;
}

@media only screen and (min-width:1000px) {
 #blank{
    
   background-color: red;
   ";
        // line 20
        echo "   
  }
}
@media only screen and (min-width:1500px) {
  #blank{
    
   background-color: lightblue;
   ";
        // line 28
        echo "   
  }
}

 </style>

<div class=\"mt-1 d-flex flex-column text-center social-shares blue-text accent-1 pl-1 \" id=\"social\">
        
          <a href=\"#\" >   <span class=\"blue-text text-darken-3 \"> <i class=\" fab fa-facebook-square fa-2x\" title=\"facebook\"></i></span> </a>
          <a href=\"#\" >   <span class=\"purple-text text-darken-3\"><i class=\" fab fa-instagram fa-2x\" title=\"instagram\"></i> </span> </a>
           <a href=\"#\" >  <span class=\" red-text text-darken-3\" title=\"youtube\"><i class=\" fab fa-youtube fa-2x\"></i> </span> </a>
            <a href=\"#\" > <span class=\" yellow-text\" title=\"snapchat\"><i class=\" fab fa-snapchat-square fa-2x\"></i>    </span></a>
 </div>

<script>
 
 /*window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
   pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
    pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 });
gsap.to(\".box\", {rotation: -2, x: 10, duration: 4});*/


window.onscroll = function() {myFunction()};

function myFunction() {
  var social=document.getElementById(\"social\")

  console.log(document.documentElement.scrollTop  );

  if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
   
        if (document.body.scrollTop > 3200 || document.documentElement.scrollTop > 3200) {
        social.style.visibility= \"hidden\";
      }else{
        social.style.visibility= \"visible\";
      }
    

  } else {
    social.style.visibility= \"hidden\";
  }

  
}
 </script>
 ";
    }

    public function getTemplateName()
    {
        return "/inc/social.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 28,  57 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>


.social-shares {
    position: fixed;
    top: 50%;
  
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index:9999;
    visibility:hidden;
}

@media only screen and (min-width:1000px) {
 #blank{
    
   background-color: red;
   {# visibility:hidden; #}
   
  }
}
@media only screen and (min-width:1500px) {
  #blank{
    
   background-color: lightblue;
   {# visibility:hidden; #}
   
  }
}

 </style>

<div class=\"mt-1 d-flex flex-column text-center social-shares blue-text accent-1 pl-1 \" id=\"social\">
        
          <a href=\"#\" >   <span class=\"blue-text text-darken-3 \"> <i class=\" fab fa-facebook-square fa-2x\" title=\"facebook\"></i></span> </a>
          <a href=\"#\" >   <span class=\"purple-text text-darken-3\"><i class=\" fab fa-instagram fa-2x\" title=\"instagram\"></i> </span> </a>
           <a href=\"#\" >  <span class=\" red-text text-darken-3\" title=\"youtube\"><i class=\" fab fa-youtube fa-2x\"></i> </span> </a>
            <a href=\"#\" > <span class=\" yellow-text\" title=\"snapchat\"><i class=\" fab fa-snapchat-square fa-2x\"></i>    </span></a>
 </div>

<script>
 
 /*window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
   pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
    pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 });
gsap.to(\".box\", {rotation: -2, x: 10, duration: 4});*/


window.onscroll = function() {myFunction()};

function myFunction() {
  var social=document.getElementById(\"social\")

  console.log(document.documentElement.scrollTop  );

  if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
   
        if (document.body.scrollTop > 3200 || document.documentElement.scrollTop > 3200) {
        social.style.visibility= \"hidden\";
      }else{
        social.style.visibility= \"visible\";
      }
    

  } else {
    social.style.visibility= \"hidden\";
  }

  
}
 </script>
 ", "/inc/social.html.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\inc\\social.html.twig");
    }
}
