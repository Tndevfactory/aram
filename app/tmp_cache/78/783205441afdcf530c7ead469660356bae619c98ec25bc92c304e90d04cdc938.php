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
             <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/favicon.png\" >
           ";
        // line 18
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 18)->display($context);
        // line 19
        echo "            ";
        $this->displayBlock('title', $context, $blocks);
        // line 20
        echo "    </head>
    <body class=\"d-flex flex-column \" >
       
        ";
        // line 23
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 23)->display($context);
        // line 24
        echo "        ";
        $this->loadTemplate("/inc/megamenu-responsive.html.twig", "layout.twig", 24)->display($context);
        // line 25
        echo "        
        ";
        // line 26
        $this->loadTemplate("/inc/chatPopUp.html.twig", "layout.twig", 26)->display($context);
        echo " 
        

        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "         ";
        $this->loadTemplate("./inc/footer.html.twig", "layout.twig", 30)->display($context);
        // line 31
        echo "         ";
        // line 32
        echo "         ";
        $this->loadTemplate("/inc/social.v2html.twig", "layout.twig", 32)->display($context);
        echo " 
        ";
        // line 33
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 33)->display($context);
        echo " 
        ";
        // line 34
        $this->displayBlock('script', $context, $blocks);
        // line 35
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

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  <title> ch</title>  ";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 34
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
        return array (  135 => 34,  128 => 29,  121 => 19,  112 => 13,  106 => 35,  104 => 34,  100 => 33,  95 => 32,  93 => 31,  90 => 30,  88 => 29,  82 => 26,  79 => 25,  76 => 24,  74 => 23,  69 => 20,  66 => 19,  64 => 18,  60 => 17,  57 => 16,  55 => 13,  41 => 1,);
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
             
             <link rel=\"shortcut icon\" href=\"{{URLROOT}}/public/img/favicon.png\" >
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
