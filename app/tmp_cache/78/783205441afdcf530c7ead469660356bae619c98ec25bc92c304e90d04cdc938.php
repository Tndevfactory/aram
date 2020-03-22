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

/* layout.twig */
class __TwigTemplate_1baa0f440f3f554180d483a760c6a7c8661831e7abb3f4d75c225e33e65dd4e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Developer: Chawki   -->
<!-- phone: 00216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
    <html lang=\"ar\">  
    <head> 
           <meta charset=\"UTF-8\">
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            ";
        // line 13
        $this->displayBlock('meta', $context, $blocks);
        // line 16
        echo "             
           ";
        // line 17
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 17)->display($context);
        // line 18
        echo "            ";
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "    </head>
    <body class=\"d-flex flex-column \" >
       
        ";
        // line 22
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 22)->display($context);
        // line 23
        echo "        ";
        $this->loadTemplate("/inc/megamenu-responsive.html.twig", "layout.twig", 23)->display($context);
        // line 24
        echo "        
        ";
        // line 25
        $this->loadTemplate("/inc/chatPopUp.html.twig", "layout.twig", 25)->display($context);
        echo " 
        

        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "         ";
        $this->loadTemplate("./inc/footer.html.twig", "layout.twig", 29)->display($context);
        // line 30
        echo "         ";
        // line 31
        echo "         ";
        $this->loadTemplate("/inc/social.v2html.twig", "layout.twig", 31)->display($context);
        echo " 
        ";
        // line 32
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 32)->display($context);
        echo " 
        ";
        // line 33
        $this->displayBlock('script', $context, $blocks);
        // line 34
        echo "    </body>
    </html>
";
    }

    // line 13
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
            
             ";
    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> ch</title>  ";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 33
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 33,  124 => 28,  117 => 18,  108 => 13,  102 => 34,  100 => 33,  96 => 32,  91 => 31,  89 => 30,  86 => 29,  84 => 28,  78 => 25,  75 => 24,  72 => 23,  70 => 22,  65 => 19,  62 => 18,  60 => 17,  57 => 16,  55 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Developer: Chawki   -->
<!-- phone: 00216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
    <html lang=\"ar\">  
    <head> 
           <meta charset=\"UTF-8\">
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            {% block meta %}  
            
             {% endblock  %}
             
           {% include('./inc/styles.html.twig') %}
            {% block title %}  <title> ch</title>  {% endblock  %}
    </head>
    <body class=\"d-flex flex-column \" >
       
        {% include('/inc/header.html.twig') %}
        {% include('/inc/megamenu-responsive.html.twig') %}
        
        {% include('/inc/chatPopUp.html.twig') %} 
        

        {% block content %} {% endblock  %}
         {% include('./inc/footer.html.twig') %}
         {# {% include('/inc/social.html.twig') %}  #}
         {% include('/inc/social.v2html.twig') %} 
        {% include('./inc/scripts.html.twig') %} 
        {% block script %} {% endblock  %}
    </body>
    </html>
", "layout.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\layout.twig");
    }
}
