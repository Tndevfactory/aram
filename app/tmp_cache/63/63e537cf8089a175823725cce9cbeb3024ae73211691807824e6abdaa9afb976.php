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

/* /homes/data/index/gr/counterUp.twig */
class __TwigTemplate_f8a26767e456d92815e27243bc6f83ca183041ad8a3ab5b2f1e035deb976dd78 extends Template
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

#counterUP i {
    color:#E1AD21;
  }
  

@media (max-width: 991px) {
  #counterUP .col-md-4 {
    width: 50%;
    margin: auto auto;
  }
  
}
</style>

<section id=\"counterUP\" class=\"py-3\">

  <div class=\"container text-center\">
    <h1 class=\"text-center\"> </h1>
    <div class=\"row\">
      <div class=\"col-md-3\"  data-aos=\"zoom-in-right\">
       
        <h3 class=\"h2\">Patients</h3>
        <i class=\"fa fa-users fa-3x\"></i>
         <p class=\"counter h1\">0</p>

      </div> 
      <div class=\"col-md-3\"  data-aos=\"zoom-in\">
       
        <h3 class=\"h2\">Interventions</h3>
        <i class=\"fas fa-file-medical-alt fa-3x\"></i>
         <p class=\"counter h1 \">0</p>

      </div>
      <div class=\"col-md-3\"  data-aos=\"zoom-in-left\">

        <h3 class=\"h2\">Clinics</h3>
        <i class=\"fas fa-hospital-symbol fa-3x\"></i>
         <p class=\"counter h1 \">0</p>

      </div>
      <div class=\"col-md-3\"  data-aos=\"zoom-in-left\">
       
        <h3 class=\"h2\">Doctors</h3>
        <i class=\"fas fa-user-md fa-3x\"></i>
        <p class=\"counter h1\">0</p>

      </div>
    </div>
  </div>
</section>



";
        // line 57
        $this->displayBlock('script', $context, $blocks);
        // line 95
        echo "
";
    }

    // line 57
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "  <script>

    let count=document.querySelectorAll(\".counter\");
    let counter = 0 , idSetInterval;

   window.addEventListener('scroll', function(e){});


            var docScrollHeight=document.documentElement.scrollHeight;
            var windowScrollHeight=window.innerHeight;
            var endScrollDoc=docScrollHeight - windowScrollHeight;
            var scrolled=Math.ceil(window.scrollY);
            var posDown=endScrollDoc - 700;

            if(scrolled = posDown){ };   

                              idSetInterval = setInterval(valueCount, 80);

                              function valueCount(){
                                counter++;
                                count[0].innerHTML=counter + 3499;
                                count[1].innerHTML=counter + 66698;
                                count[2].innerHTML=counter + 5;
                                count[3].innerHTML=counter + 1200;

                                if(counter > 150){
                                  clearInterval(idSetInterval);
                                }
                              };
                      
                       

     

       
  </script>
";
    }

    public function getTemplateName()
    {
        return "/homes/data/index/gr/counterUp.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 58,  103 => 57,  98 => 95,  96 => 57,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- counterup jquery animated counter -->
<style>

#counterUP i {
    color:#E1AD21;
  }
  

@media (max-width: 991px) {
  #counterUP .col-md-4 {
    width: 50%;
    margin: auto auto;
  }
  
}
</style>

<section id=\"counterUP\" class=\"py-3\">

  <div class=\"container text-center\">
    <h1 class=\"text-center\"> </h1>
    <div class=\"row\">
      <div class=\"col-md-3\"  data-aos=\"zoom-in-right\">
       
        <h3 class=\"h2\">Patients</h3>
        <i class=\"fa fa-users fa-3x\"></i>
         <p class=\"counter h1\">0</p>

      </div> 
      <div class=\"col-md-3\"  data-aos=\"zoom-in\">
       
        <h3 class=\"h2\">Interventions</h3>
        <i class=\"fas fa-file-medical-alt fa-3x\"></i>
         <p class=\"counter h1 \">0</p>

      </div>
      <div class=\"col-md-3\"  data-aos=\"zoom-in-left\">

        <h3 class=\"h2\">Clinics</h3>
        <i class=\"fas fa-hospital-symbol fa-3x\"></i>
         <p class=\"counter h1 \">0</p>

      </div>
      <div class=\"col-md-3\"  data-aos=\"zoom-in-left\">
       
        <h3 class=\"h2\">Doctors</h3>
        <i class=\"fas fa-user-md fa-3x\"></i>
        <p class=\"counter h1\">0</p>

      </div>
    </div>
  </div>
</section>



{% block script %}
  <script>

    let count=document.querySelectorAll(\".counter\");
    let counter = 0 , idSetInterval;

   window.addEventListener('scroll', function(e){});


            var docScrollHeight=document.documentElement.scrollHeight;
            var windowScrollHeight=window.innerHeight;
            var endScrollDoc=docScrollHeight - windowScrollHeight;
            var scrolled=Math.ceil(window.scrollY);
            var posDown=endScrollDoc - 700;

            if(scrolled = posDown){ };   

                              idSetInterval = setInterval(valueCount, 80);

                              function valueCount(){
                                counter++;
                                count[0].innerHTML=counter + 3499;
                                count[1].innerHTML=counter + 66698;
                                count[2].innerHTML=counter + 5;
                                count[3].innerHTML=counter + 1200;

                                if(counter > 150){
                                  clearInterval(idSetInterval);
                                }
                              };
                      
                       

     

       
  </script>
{% endblock  %}

", "/homes/data/index/gr/counterUp.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/gr/counterUp.twig");
    }
}
