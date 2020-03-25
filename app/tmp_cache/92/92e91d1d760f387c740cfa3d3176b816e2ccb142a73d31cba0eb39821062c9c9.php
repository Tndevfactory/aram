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

/* /components/index/ar/lead_form_float.twig */
class __TwigTemplate_b5acd5ec4bb7650c6d10d49381c618bc9731d0148934eb309f4aa8946ea97d43 extends Template
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
            width:500px;
            position:relative;
            top:-90px;
            left:1200px;
            z-index:900;
            border-radius:10px;
            color:black;
             
            \" 

          id=\"lead_form_float\" 
          action=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" 
          method=\"post\" 
          class=\"grey darken-3 box text-center form d-none d-lg-block p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center white-text mb-4 \" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 54
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 54), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom complet \">
                          <div class=\"invalid-feedback white-text\"> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 55), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 59
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 59), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback white-text\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 60), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 ";
        // line 64
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 64), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback white-text\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 65), "html", null, true);
        echo "</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 ";
        // line 69
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 69), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback white-text\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 70), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn  white-text z-depth-1 amber darken-3\">
                        Envoyer
                        </button>
          </form>
   
 <script>
 
 window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
   pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
    pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 });
gsap.to(\".box\", {rotation: -1, x: 10, duration: 4});


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
        return "/components/index/ar/lead_form_float.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 70,  132 => 69,  125 => 65,  121 => 64,  114 => 60,  110 => 59,  103 => 55,  99 => 54,  89 => 47,  73 => 33,  65 => 26,  55 => 17,  44 => 7,  41 => 5,  37 => 1,);
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
            width:500px;
            position:relative;
            top:-90px;
            left:1200px;
            z-index:900;
            border-radius:10px;
            color:black;
             
            \" 

          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes/newsletter\" 
          method=\"post\" 
          class=\"grey darken-3 box text-center form d-none d-lg-block p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center white-text mb-4 \" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"Veuillez entrer votre nom complet \">
                          <div class=\"invalid-feedback white-text\"> {{data.name_err }} </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback white-text\">{{data.email_err }}</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback white-text\">{{data.email_err }}</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback white-text\">{{data.email_err }}</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn  white-text z-depth-1 amber darken-3\">
                        Envoyer
                        </button>
          </form>
   
 <script>
 
 window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
   pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
    pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 });
gsap.to(\".box\", {rotation: -1, x: 10, duration: 4});


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
 </script>", "/components/index/ar/lead_form_float.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\index\\ar\\lead_form_float.twig");
    }
}
