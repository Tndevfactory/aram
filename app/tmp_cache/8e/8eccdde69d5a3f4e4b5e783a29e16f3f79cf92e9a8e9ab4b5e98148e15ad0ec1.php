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
            'meta' => [$this, 'block_meta'],
            'style' => [$this, 'block_style'],
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
<!-- phone: +216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, 
     flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
    <html lang=\"ar\">  

    <head> 
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 15
        $this->displayBlock('meta', $context, $blocks);
        // line 16
        echo "            
        <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/favicon.png\" >

        ";
        // line 19
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 19)->display($context);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('style', $context, $blocks);
        // line 22
        echo "        
        ";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        // line 24
        echo "    </head>

    <body class=\"d-flex flex-column \" >
       
        ";
        // line 28
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 28)->display($context);
        // line 29
        echo "        ";
        $this->loadTemplate("/inc/megamenu-responsive.html.twig", "layout.twig", 29)->display($context);
        // line 30
        echo "        ";
        $this->loadTemplate("/inc/chatPopUp.html.twig", "layout.twig", 30)->display($context);
        echo " 
        
        ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->loadTemplate("./inc/footer.html.twig", "layout.twig", 34)->display($context);
        // line 35
        echo "        ";
        $this->loadTemplate("/inc/social.v2html.twig", "layout.twig", 35)->display($context);
        echo " 
        ";
        // line 36
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 36)->display($context);
        echo " 
        ";
        // line 37
        $this->displayBlock('script', $context, $blocks);
        // line 38
        echo "    </body>
    </html>
";
    }

    // line 15
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "       ";
    }

    // line 21
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "       ";
    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> ch</title>  ";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 37
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
        return array (  149 => 37,  142 => 32,  135 => 23,  128 => 21,  121 => 15,  115 => 38,  113 => 37,  109 => 36,  104 => 35,  102 => 34,  99 => 33,  97 => 32,  91 => 30,  88 => 29,  86 => 28,  80 => 24,  78 => 23,  75 => 22,  73 => 21,  70 => 20,  68 => 19,  63 => 17,  60 => 16,  58 => 15,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Developer: Chawki   -->
<!-- phone: +216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, 
     flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
    <html lang=\"ar\">  

    <head> 
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        {% block meta %}       {% endblock  %}
            
        <link rel=\"shortcut icon\" href=\"{{URLROOT}}/public/img/favicon.png\" >

        {% include('./inc/styles.html.twig') %}

        {% block style %}       {% endblock  %}
        
        {% block title %}  <title> ch</title>  {% endblock  %}
    </head>

    <body class=\"d-flex flex-column \" >
       
        {% include('/inc/header.html.twig') %}
        {% include('/inc/megamenu-responsive.html.twig') %}
        {% include('/inc/chatPopUp.html.twig') %} 
        
        {% block content %} {% endblock  %}

        {% include('./inc/footer.html.twig') %}
        {% include('/inc/social.v2html.twig') %} 
        {% include('./inc/scripts.html.twig') %} 
        {% block script %} {% endblock  %}
    </body>
    </html>
", "layout.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/layout.twig");
    }
}
