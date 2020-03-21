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

/* /components/index/fr/counterUp.twig */
class __TwigTemplate_ed24d8b4537c9fbc6eff6f87baa27a14aaed187ab07d27613f6c4380ce5f7c14 extends Template
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
        echo "<!-- counterup jquery animated counter -->
<style>

#counterUP .col-md-4 {
  text-align: center;
  padding-bottom: 50px;
  background:red;
  
}


#counterUP .counter {
  animation-duration: 1s;
  animation-delay: 0s;
  color:orange;
}

#counterUP i {
  font-size:30px !Important;
}

@media (max-width: 991px) {
  #counterUP .col-md-4 {
    width: 50%;
    margin: auto auto;
  }
  
}
</style>

<section id=\"counterUP\">

  <div class=\"container\">

    <div class=\"row\">

      <div class=\"col-md-4\" >
        <h1><span class=\"counter\">0</span></h1>
        <h3>Customers</h3>
        <i class=\"fa fa-users\"></i>
      </div> 

      <div class=\"col-md-4\">
        <h1><span class=\"counter\">0</span></h1>
        <h3>Total Web Pages</h3>
        <i class=\"fa fa-desktop\"></i>
      </div>

      <div class=\"col-md-4\">
        <h1><span class=\"counter\">0</span></h1>
        <h3>Cups Of Coffee</h3>
        <i class=\"fa fa-coffee\"></i>
      </div>

    </div>

  </div>

</section>



";
        // line 63
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "  <script>



       
  </script>
";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/counterUp.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 64,  102 => 63,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- counterup jquery animated counter -->
<style>

#counterUP .col-md-4 {
  text-align: center;
  padding-bottom: 50px;
  background:red;
  
}


#counterUP .counter {
  animation-duration: 1s;
  animation-delay: 0s;
  color:orange;
}

#counterUP i {
  font-size:30px !Important;
}

@media (max-width: 991px) {
  #counterUP .col-md-4 {
    width: 50%;
    margin: auto auto;
  }
  
}
</style>

<section id=\"counterUP\">

  <div class=\"container\">

    <div class=\"row\">

      <div class=\"col-md-4\" >
        <h1><span class=\"counter\">0</span></h1>
        <h3>Customers</h3>
        <i class=\"fa fa-users\"></i>
      </div> 

      <div class=\"col-md-4\">
        <h1><span class=\"counter\">0</span></h1>
        <h3>Total Web Pages</h3>
        <i class=\"fa fa-desktop\"></i>
      </div>

      <div class=\"col-md-4\">
        <h1><span class=\"counter\">0</span></h1>
        <h3>Cups Of Coffee</h3>
        <i class=\"fa fa-coffee\"></i>
      </div>

    </div>

  </div>

</section>



{% block script %}
  <script>



       
  </script>
{% endblock  %}
", "/components/index/fr/counterUp.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/counterUp.twig");
    }
}
