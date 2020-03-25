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

/* /inc/social.v2html.twig */
class __TwigTemplate_27f80e8bffeb22db6d1752d50895f8fe11ea5b66bb1400ed67aa3cba9b3bbc64 extends Template
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
        // line 2
        echo "
<style>
#socialFixedBarre.social{
    position:fixed;
    top:66%;
    margin:0px;
    z-index: 999;
   
}

#socialFixedBarre.social ul{
   list-style-type:none;
   padding:0px;
   transform:translateX(0px);
   margin:0px; 
   
}
#socialFixedBarre.social ul li{
  display:block;
  margin:0px;
  width:40px;
  text-align:right;
  padding:0px;
  border-radius: 0 20px 20px 0;
  transition: all 0.1s;
}
#socialFixedBarre.social ul li:hover{
  transform:translateX(5px);
}
#socialFixedBarre.social ul li.twitter:hover{
  background-color:#55acee;
}
#socialFixedBarre.social ul li.facebook:hover{
  background-color:#3d5999;
}
#socialFixedBarre.social ul li.google-plus:hover{
  background-color:#dd4b39;
}
#socialFixedBarre.social ul li.instagram:hover{
  background-color:#e4405f;
}

#socialFixedBarre.social ul li i.twitter{
  background-color:#55acee;
  
}
#socialFixedBarre.social ul li i.facebook{
  background-color:#3d5999;
}
#socialFixedBarre.social ul li i.google-plus{
  background-color:#dd4b39;
}
#socialFixedBarre.social ul li i.instagram{
  background-color:#e4405f;
}
#socialFixedBarre.social ul li a{
  color:white;
  text-decoration:none;
  padding:0px;
  margin:0px;
}
#socialFixedBarre.social ul li i{
  text-align:center;
    
  background-color:white;
  padding:5px;
  border-bottom: 0.4px solid white ;
  
  /*border-radius:50%; */
  width:55px;
  height:55px;
  transform:rotate(0deg);

}

#socialFixedBarre.social ul li:hover i{
 /* transform:rotate(360deg); */
  transform:translateX(5px);
  transition: all 1s;
}


 </style>


<nav id=\"socialFixedBarre\" class=\"social\">
    <ul>
        <li class=\"twitter\">
            <a href=\"#\">
                <i class=\"twitter fab fa-twitter fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul> <ul>
        <li class=\"facebook\">
            <a href=\"#\">
                <i class=\" facebook fab fa-facebook fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul> <ul>
        <li class=\"google-plus\">
            <a href=\"#\">
                <i class=\"google-plus fab fa-google-plus fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul> <ul>
        <li class=\"instagram\">
            <a href=\"#\"> 
                <i class=\"instagram fab fa-instagram fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "/inc/social.v2html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# social media barre v2 #}

<style>
#socialFixedBarre.social{
    position:fixed;
    top:66%;
    margin:0px;
    z-index: 999;
   
}

#socialFixedBarre.social ul{
   list-style-type:none;
   padding:0px;
   transform:translateX(0px);
   margin:0px; 
   
}
#socialFixedBarre.social ul li{
  display:block;
  margin:0px;
  width:40px;
  text-align:right;
  padding:0px;
  border-radius: 0 20px 20px 0;
  transition: all 0.1s;
}
#socialFixedBarre.social ul li:hover{
  transform:translateX(5px);
}
#socialFixedBarre.social ul li.twitter:hover{
  background-color:#55acee;
}
#socialFixedBarre.social ul li.facebook:hover{
  background-color:#3d5999;
}
#socialFixedBarre.social ul li.google-plus:hover{
  background-color:#dd4b39;
}
#socialFixedBarre.social ul li.instagram:hover{
  background-color:#e4405f;
}

#socialFixedBarre.social ul li i.twitter{
  background-color:#55acee;
  
}
#socialFixedBarre.social ul li i.facebook{
  background-color:#3d5999;
}
#socialFixedBarre.social ul li i.google-plus{
  background-color:#dd4b39;
}
#socialFixedBarre.social ul li i.instagram{
  background-color:#e4405f;
}
#socialFixedBarre.social ul li a{
  color:white;
  text-decoration:none;
  padding:0px;
  margin:0px;
}
#socialFixedBarre.social ul li i{
  text-align:center;
    
  background-color:white;
  padding:5px;
  border-bottom: 0.4px solid white ;
  
  /*border-radius:50%; */
  width:55px;
  height:55px;
  transform:rotate(0deg);

}

#socialFixedBarre.social ul li:hover i{
 /* transform:rotate(360deg); */
  transform:translateX(5px);
  transition: all 1s;
}


 </style>


<nav id=\"socialFixedBarre\" class=\"social\">
    <ul>
        <li class=\"twitter\">
            <a href=\"#\">
                <i class=\"twitter fab fa-twitter fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul> <ul>
        <li class=\"facebook\">
            <a href=\"#\">
                <i class=\" facebook fab fa-facebook fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul> <ul>
        <li class=\"google-plus\">
            <a href=\"#\">
                <i class=\"google-plus fab fa-google-plus fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul> <ul>
        <li class=\"instagram\">
            <a href=\"#\"> 
                <i class=\"instagram fab fa-instagram fa-2x\" aria-hidden=\"true\"> </i>
            </a>
        </li>
    </ul>
</nav>", "/inc/social.v2html.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\inc\\social.v2html.twig");
    }
}
