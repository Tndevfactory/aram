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

/* ./inc/styles.html.twig */
class __TwigTemplate_6efdd6b9d1b4826ad57d615676871b90af8bd997dc27e10e09879bbd9dc8d5a0 extends Template
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
        echo "  ";
        // line 6
        echo "
  ";
        // line 12
        echo "
  
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/js/megamenu.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/css/venobox.min.css\"/>

<script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/css/ionicons.min.css\">
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" >
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">
<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i,900&display=swap\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/css/main.css\"> 

";
    }

    public function getTemplateName()
    {
        return "./inc/styles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  57 => 19,  51 => 16,  47 => 15,  42 => 12,  39 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {# <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/font/css/all.css\">
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/mdb.min.css\" >
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/mdb.min.css\" >
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/main.css\"> #}

  {# <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" /> #}

  
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/megamenu.js\"></script>
<link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/venobox.min.css\"/>

<script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js\"></script>
<link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/ionicons.min.css\">
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" >
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">
<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i,900&display=swap\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
<link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/main.css\"> 

", "./inc/styles.html.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/inc/styles.html.twig");
    }
}
