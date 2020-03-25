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

/* /components/index/fr/Waypoint.twig */
class __TwigTemplate_c2989576ef720a4d67cfc81387ceac8bf80f6c359d9d3d1d98ae9ddf2b423b19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- waypoint jquery animated counter -->
<style>

#waypoint .col-md-4 {
  text-align: center;
  padding-bottom: 50px;
  border-right: 1px dashed black;
}

#waypoint .col-md-4:last-child {
  border-right: 0px solid black;
}

#waypoint .counter {
  animation-duration: 1s;
  animation-delay: 0s;
}

#waypoint i {
  font-size: 20px !Important;
}

@media (max-width: 991px) {
  #waypoint.col-md-4 {
    border-right: 0px dashed black;
    border-bottom: 1px dashed black;
    width: 50%;
    margin: auto auto;
  }
  
  #waypoint.col-md-4:last-child {
    border-bottom: 0px dashed black;
  }
}
</style>

<section id=\"waypoint\" class=\"my-5 py-3 py-lg-0\">
    <div class=\"container\">
        <div class=\"row\">
                <div class=\"col-md-4\" >
                  <h1><span class=\"counter\">2,523</span></h1>
                  <h3>Customers</h3>
                  <i class=\"fa fa-users\"></i>
                </div> 
                <div class=\"col-md-4\">
                  <h1><span class=\"counter\">63,075</span></h1>
                  <h3>Total Web Pages</h3>
                  <i class=\"fa fa-desktop\"></i>
                </div>
                <div class=\"col-md-4\">
                  <h1><span class=\"counter\">12,218</span></h1>
                  <h3>Cups Of Coffee</h3>
                  <i class=\"fa fa-coffee\"></i>
                </div>
        </div>
     </div> 
</section>

";
        // line 59
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "  <script>
         \$('.counter').counterUp({
            delay: 10,
            time: 2000
          });
          \$('.counter').addClass('animated fadeInDownBig');
          \$('h3').addClass('animated fadeIn');
  </script>
";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/Waypoint.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  98 => 59,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- waypoint jquery animated counter -->
<style>

#waypoint .col-md-4 {
  text-align: center;
  padding-bottom: 50px;
  border-right: 1px dashed black;
}

#waypoint .col-md-4:last-child {
  border-right: 0px solid black;
}

#waypoint .counter {
  animation-duration: 1s;
  animation-delay: 0s;
}

#waypoint i {
  font-size: 20px !Important;
}

@media (max-width: 991px) {
  #waypoint.col-md-4 {
    border-right: 0px dashed black;
    border-bottom: 1px dashed black;
    width: 50%;
    margin: auto auto;
  }
  
  #waypoint.col-md-4:last-child {
    border-bottom: 0px dashed black;
  }
}
</style>

<section id=\"waypoint\" class=\"my-5 py-3 py-lg-0\">
    <div class=\"container\">
        <div class=\"row\">
                <div class=\"col-md-4\" >
                  <h1><span class=\"counter\">2,523</span></h1>
                  <h3>Customers</h3>
                  <i class=\"fa fa-users\"></i>
                </div> 
                <div class=\"col-md-4\">
                  <h1><span class=\"counter\">63,075</span></h1>
                  <h3>Total Web Pages</h3>
                  <i class=\"fa fa-desktop\"></i>
                </div>
                <div class=\"col-md-4\">
                  <h1><span class=\"counter\">12,218</span></h1>
                  <h3>Cups Of Coffee</h3>
                  <i class=\"fa fa-coffee\"></i>
                </div>
        </div>
     </div> 
</section>

{% block script %}
  <script>
         \$('.counter').counterUp({
            delay: 10,
            time: 2000
          });
          \$('.counter').addClass('animated fadeInDownBig');
          \$('h3').addClass('animated fadeIn');
  </script>
{% endblock  %}
", "/components/index/fr/Waypoint.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/Waypoint.twig");
    }
}
