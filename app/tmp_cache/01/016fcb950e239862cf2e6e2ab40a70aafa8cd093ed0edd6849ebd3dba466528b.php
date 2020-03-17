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

<style>
form#lead_form_float {
            width:400px;
            position:relative;
            top:-90px;
            z-index:900;
            border-radius:10px;
           /* background:#010203;*/
          background:#B0B0B0;
            color:black;
             border: 1px solid grey;;
             
}

 form#lead_form_float input{
    
   background-color: #E0E0E0;
   color:black;
   border-radius:1px;
   /*border:1px solid #E1AD21;*/
   border:none;
   /*border-bottom: 0.5px solid #E1AD21;*/
   margin-bottom:5px;
   
  } 
  form#lead_form_float input:focus{
    
   
   border:1px solid #E0E0E0;
   outline: 1px solid #E0E0E0;
   
  }

";
        // line 49
        echo "


 </style>

";
        // line 55
        echo "
          <form 
          id=\"lead_form_float\" 
          action=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" 
          method=\"post\" 
          class=\" box text-center form d-none d-lg-block p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 65
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 65), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom complet \">
                          <div class=\"invalid-feedback \"> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 66), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 70
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 70), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback \">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 71), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 ";
        // line 75
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 75), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback \">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 76), "html", null, true);
        echo "</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 ";
        // line 80
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 80), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback \">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 81), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px; border:1px solid grey; border-radius:10px; color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn\">
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
        // line 111
        echo "  ";
        // line 112
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
        return array (  167 => 112,  165 => 111,  133 => 81,  129 => 80,  122 => 76,  118 => 75,  111 => 71,  107 => 70,  100 => 66,  96 => 65,  86 => 58,  81 => 55,  74 => 49,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_float-->

<style>
form#lead_form_float {
            width:400px;
            position:relative;
            top:-90px;
            z-index:900;
            border-radius:10px;
           /* background:#010203;*/
          background:#B0B0B0;
            color:black;
             border: 1px solid grey;;
             
}

 form#lead_form_float input{
    
   background-color: #E0E0E0;
   color:black;
   border-radius:1px;
   /*border:1px solid #E1AD21;*/
   border:none;
   /*border-bottom: 0.5px solid #E1AD21;*/
   margin-bottom:5px;
   
  } 
  form#lead_form_float input:focus{
    
   
   border:1px solid #E0E0E0;
   outline: 1px solid #E0E0E0;
   
  }

{# 
@media only screen and (min-width:1000px) {
 form#lead_form_float{
    
   background-color: #010203;
   color:#E1AD21;
   border-radius:10px;
   
   
  }

 
} #}



 </style>

{# visible on md and up and below  #}

          <form 
          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes/newsletter\" 
          method=\"post\" 
          class=\" box text-center form d-none d-lg-block p-3 z-depth-1 \"
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
                        style=\"margin-top:-4px; border:1px solid grey; border-radius:10px; color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn\">
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
