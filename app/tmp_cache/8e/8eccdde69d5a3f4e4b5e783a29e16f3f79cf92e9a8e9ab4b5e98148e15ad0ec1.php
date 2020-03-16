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
        // line 21
        echo "        ";
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "
        ";
        // line 27
        echo "        ";
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
        return array (  100 => 28,  93 => 23,  86 => 13,  80 => 29,  78 => 28,  73 => 27,  70 => 24,  68 => 23,  65 => 22,  63 => 21,  58 => 14,  55 => 13,  53 => 12,  40 => 1,);
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
       
        {# {% include('/inc/header.html.twig') %}
        {% include('/inc/navbar.html.twig') %}
        
        {% include('/inc/chatPopUp.html.twig') %} #}
        {# {% include('/inc/rightSidedNav.twig') %} #}

        {% block content %} {% endblock  %}

        {# {% include('./inc/footer.html.twig') %}
         {% include('/inc/social.html.twig') %} #}
        {% include('./inc/scripts.html.twig') %} 
        {% block script %} {% endblock  %}
    </body>
    </html>
", "layout.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/layout.twig");
    }
}
