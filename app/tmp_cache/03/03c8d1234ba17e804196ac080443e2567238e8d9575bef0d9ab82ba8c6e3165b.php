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

/* /components/index/fr/leadFormFloat.twig */
class __TwigTemplate_4a56735cb54121c75ca0b0b9538e007c4272b4c0dd534b364391ef9bee1e21c1 extends Template
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
        echo "<!-- lead_form_float-->

";
        // line 5
        echo "
";
        // line 7
        echo "<style>
form#lead_form_float {
  background-color: yellow;
}

@media only screen and (min-width:1000px) {
 form#lead_form_float{
    
   background-color: red;
   ";
        // line 17
        echo "   
  }
}

@media only screen and (min-width:1500px) {
 form#lead_form_float{
    
   background-color: lightblue;
   ";
        // line 26
        echo "   
  }
}

 </style>

";
        // line 33
        echo "
          <form 
          style=\" 
            width:450px;
            position:relative;
            top:-90px;
            visibility = \"hidden\";
            z-index:900;
            border-radius:2px;
            color:black;
            
             
            \" 

          id=\"lead_form_float\" 
          action=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" 
          method=\"post\" 
          class=\"bg-light box text-center form d-none d-lg-block p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 55
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 55), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom complet \">
                          <div class=\"invalid-feedback \"> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 56), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 60
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 60), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback \">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 61), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 ";
        // line 65
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 65), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback \">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 66), "html", null, true);
        echo "</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 ";
        // line 70
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 70), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback \">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 71), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;\" 
                        class=\"ml-4 btn darken-3 grey text-white\">
                        Envoyer
                        </button>
          </form>
   
 <script>
 document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
 window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
 var h = parseInt(window.innerHeight);
 console.log(w);
 console.log(h);
   pos=w-600;
  document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
 var h = parseInt(window.innerHeight);
  console.log(w);
 console.log(h);
    pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

";
        // line 105
        echo "

/* window.onscroll = function() {myFunction()};

function myFunction() {
  console.log(document.documentElement.scrollTop  );
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById(\"lead_form_float\").style.background= \"orange\";
  } else {
    document.getElementById(\"lead_form_float\").style.background= \"blue\";
  }
} 

*/
 </script>";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/leadFormFloat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 105,  137 => 71,  133 => 70,  126 => 66,  122 => 65,  115 => 61,  111 => 60,  104 => 56,  100 => 55,  90 => 48,  73 => 33,  65 => 26,  55 => 17,  44 => 7,  41 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_float-->

{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}

{# #ff8f00 amber darken-3 #}
<style>
form#lead_form_float {
  background-color: yellow;
}

@media only screen and (min-width:1000px) {
 form#lead_form_float{
    
   background-color: red;
   {# visibility:hidden; #}
   
  }
}

@media only screen and (min-width:1500px) {
 form#lead_form_float{
    
   background-color: lightblue;
   {# visibility:hidden; #}
   
  }
}

 </style>

{# visible on md and up and below  #}

          <form 
          style=\" 
            width:450px;
            position:relative;
            top:-90px;
            visibility = \"hidden\";
            z-index:900;
            border-radius:2px;
            color:black;
            
             
            \" 

          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes/newsletter\" 
          method=\"post\" 
          class=\"bg-light box text-center form d-none d-lg-block p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"Veuillez entrer votre nom complet \">
                          <div class=\"invalid-feedback \"> {{data.name_err }} </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback \">{{data.email_err }}</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback \">{{data.email_err }}</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback \">{{data.email_err }}</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;\" 
                        class=\"ml-4 btn darken-3 grey text-white\">
                        Envoyer
                        </button>
          </form>
   
 <script>
 document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
 window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
 var h = parseInt(window.innerHeight);
 console.log(w);
 console.log(h);
   pos=w-600;
  document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
 var h = parseInt(window.innerHeight);
  console.log(w);
 console.log(h);
    pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

{# gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 }); #}
{# gsap.to(\".box\", {rotation: -55, x: 10, duration: 4}); #}


/* window.onscroll = function() {myFunction()};

function myFunction() {
  console.log(document.documentElement.scrollTop  );
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById(\"lead_form_float\").style.background= \"orange\";
  } else {
    document.getElementById(\"lead_form_float\").style.background= \"blue\";
  }
} 

*/
 </script>", "/components/index/fr/leadFormFloat.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/leadFormFloat.twig");
    }
}
