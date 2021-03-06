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
class __TwigTemplate_1e9fd02017b1b90c200d8314492098978d7e0a7bf4cbeff4d6802a85e547832b extends Template
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

<script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js\"></script>

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">
<!-- Google Fonts -->
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">

<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
";
        // line 25
        echo "<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i,900&display=swap\" rel=\"stylesheet\">
";
        // line 27
        echo "<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
  
<link rel=\"stylesheet\" href=\"";
        // line 36
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
        return array (  70 => 36,  59 => 27,  56 => 25,  42 => 12,  39 => 6,  37 => 1,);
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

<script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js\"></script>

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">
<!-- Google Fonts -->
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">

<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
{# font-family: 'Cairo', sans-serif; #}
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i,900&display=swap\" rel=\"stylesheet\">
{# font-family: 'Roboto', sans-serif; #}
<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
  
<link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/main.css\"> 

", "./inc/styles.html.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\inc\\styles.html.twig");
    }
}
