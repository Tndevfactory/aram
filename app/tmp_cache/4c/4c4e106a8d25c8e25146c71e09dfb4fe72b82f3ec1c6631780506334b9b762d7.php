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
class __TwigTemplate_7a66a2c5c7977337e4459c7543c08f1ed20b55f7524f666941066d72843bb29d extends Template
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
        // line 26
        echo "        ";
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 26)->display($context);
        echo " 

    </body>
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
        return array (  89 => 23,  82 => 13,  72 => 26,  69 => 24,  67 => 23,  64 => 22,  62 => 21,  57 => 14,  54 => 13,  52 => 12,  39 => 1,);
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
        {% include('/inc/social.html.twig') %}
        {% include('/inc/chatPopUp.html.twig') %} #}
        {# {% include('/inc/rightSidedNav.twig') %} #}

        {% block content %} {% endblock  %}

        {# {% include('./inc/footer.html.twig') %}#}
        {% include('./inc/scripts.html.twig') %} 

    </body>
    </html>
", "layout.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\layout.twig");
    }
}
