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
  
  
}

#counterUP .counter {
  animation-duration: 1s;
  animation-delay: 0s;
  color:orange;
  font-size:33px;
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

<section id=\"counterUP\" class=\"pt-5\">

  <div class=\"container\">
    <h1 class=\"text-center\">Numbers of clients  </h1>
    <div class=\"row\">
      <div class=\"col-md-4\"  data-aos=\"zoom-in-right\">
        <p class=\"counter\">0</p>
        <h3>Customers</h3>
        <i class=\"fa fa-users\"></i>
      </div> 
      <div class=\"col-md-4\"  data-aos=\"zoom-in\">
        <p class=\"counter\">0</p>
        <h3>Total Web Pages</h3>
        <i class=\"fa fa-desktop\"></i>
      </div>
      <div class=\"col-md-4\"  data-aos=\"zoom-in-left\">
        <p class=\"counter\">0</p>
        <h3>Cups Of Coffee</h3>
        <i class=\"fa fa-coffee\"></i>
      </div>
    </div>
  </div>
</section>



";
        // line 57
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "  <script>

let count=document.querySelectorAll(\".counter\");
let counter = 0 , idSetInterval;

idSetInterval = setInterval(valueCount, 80)

function valueCount(){

  counter++;
  //count.innerHTML=counter;
  count[0].innerHTML=counter;
  count[1].innerHTML=counter;
  count[2].innerHTML=counter;


  if(counter > 150){
    
    console.log('end counter');
    clearInterval(idSetInterval);
  }
}

       
  </script>
";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/counterUp.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 58,  96 => 57,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- counterup jquery animated counter -->
<style>

#counterUP .col-md-4 {
  text-align: center;
  padding-bottom: 50px;
  
  
}

#counterUP .counter {
  animation-duration: 1s;
  animation-delay: 0s;
  color:orange;
  font-size:33px;
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

<section id=\"counterUP\" class=\"pt-5\">

  <div class=\"container\">
    <h1 class=\"text-center\">Numbers of clients  </h1>
    <div class=\"row\">
      <div class=\"col-md-4\"  data-aos=\"zoom-in-right\">
        <p class=\"counter\">0</p>
        <h3>Customers</h3>
        <i class=\"fa fa-users\"></i>
      </div> 
      <div class=\"col-md-4\"  data-aos=\"zoom-in\">
        <p class=\"counter\">0</p>
        <h3>Total Web Pages</h3>
        <i class=\"fa fa-desktop\"></i>
      </div>
      <div class=\"col-md-4\"  data-aos=\"zoom-in-left\">
        <p class=\"counter\">0</p>
        <h3>Cups Of Coffee</h3>
        <i class=\"fa fa-coffee\"></i>
      </div>
    </div>
  </div>
</section>



{% block script %}
  <script>

let count=document.querySelectorAll(\".counter\");
let counter = 0 , idSetInterval;

idSetInterval = setInterval(valueCount, 80)

function valueCount(){

  counter++;
  //count.innerHTML=counter;
  count[0].innerHTML=counter;
  count[1].innerHTML=counter;
  count[2].innerHTML=counter;


  if(counter > 150){
    
    console.log('end counter');
    clearInterval(idSetInterval);
  }
}

       
  </script>
{% endblock  %}
", "/components/index/fr/counterUp.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/counterUp.twig");
    }
}
