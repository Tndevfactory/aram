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
class __TwigTemplate_5f77b01a7f723f917a5ba1c34b5c89c5bb1b318d0a7814d56f943ec5e9b88996 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
        // line 12
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 12)->display($context);
        // line 13
        echo "            ";
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "    </head>
    <body class=\"d-flex flex-column \" >
       
        ";
        // line 17
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 17)->display($context);
        // line 18
        echo "        ";
        $this->loadTemplate("/inc/megamenu-responsive.html.twig", "layout.twig", 18)->display($context);
        // line 19
        echo "        
        ";
        // line 20
        $this->loadTemplate("/inc/chatPopUp.html.twig", "layout.twig", 20)->display($context);
        echo " 
        

        ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "         ";
        $this->loadTemplate("./inc/footer.html.twig", "layout.twig", 24)->display($context);
        // line 25
        echo "         ";
        // line 26
        echo "         ";
        $this->loadTemplate("/inc/social.v2html.twig", "layout.twig", 26)->display($context);
        echo " 
        ";
        // line 27
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 27)->display($context);
        echo " 
        ";
        // line 28
        $this->displayBlock('script', $context, $blocks);
        // line 29
        echo "    </body>
    </html>
";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> ch</title>  ";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 28
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
        return array (  115 => 28,  108 => 23,  101 => 13,  95 => 29,  93 => 28,  89 => 27,  84 => 26,  82 => 25,  79 => 24,  77 => 23,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  58 => 14,  55 => 13,  53 => 12,  40 => 1,);
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
", "layout.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/layout.twig");
    }
}
