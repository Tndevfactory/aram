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
class __TwigTemplate_1e17d5aedc6b85f04106dafb48dc4e76ef1d75204737137c70fc853acead19e6 extends Template
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
  
   
  }
}



 </style>

";
        // line 26
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
        // line 41
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" 
          method=\"post\" 
          class=\"bg-light box text-center form d-none d-lg-block p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 48
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 48), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom complet \">
                          <div class=\"invalid-feedback \"> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 49), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 53
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 53), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback \">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 54), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 ";
        // line 58
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 58), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback \">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 59), "html", null, true);
        echo "</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 ";
        // line 63
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 63), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback \">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 64), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;\" 
                        class=\"ml-4 rounded btn darken-1 grey z-depth-0 text-white\">
                        Envoyer
                        </button>
          </form>
   
 <script>
        document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
      
        window.addEventListener('load', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
          pos=w-600;
          document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });

        window.addEventListener('resize', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
           pos=w-600;
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });

  ";
        // line 94
        echo "  ";
        // line 95
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
        return array (  162 => 95,  160 => 94,  128 => 64,  124 => 63,  117 => 59,  113 => 58,  106 => 54,  102 => 53,  95 => 49,  91 => 48,  81 => 41,  64 => 26,  44 => 7,  41 => 5,  37 => 1,);
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
                        class=\"ml-4 rounded btn darken-1 grey z-depth-0 text-white\">
                        Envoyer
                        </button>
          </form>
   
 <script>
        document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
      
        window.addEventListener('load', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
          pos=w-600;
          document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });

        window.addEventListener('resize', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
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
 </script>", "/components/index/fr/leadFormFloat.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\components\\index\\fr\\leadFormFloat.twig");
    }
}
