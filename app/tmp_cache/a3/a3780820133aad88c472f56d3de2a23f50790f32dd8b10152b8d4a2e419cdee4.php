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

/* /components/index/lead_form_float.twig */
class __TwigTemplate_567c535507f4fd02bfc33f6734130c34f16e7917cf6289e1c53bef9ecbb03789 extends Template
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
        // line 25
        echo "   
  }
}

 </style>

";
        // line 32
        echo "


     
          <form 
          style=\" 
            width:500px;
            position:relative;
            top:-90px;
            left:1200px;
            ";
        // line 43
        echo "            z-index:900;
            border-radius:10px;
            color:black;
             ";
        // line 47
        echo "            \" 

          id=\"lead_form_float\" 
          action=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" 
          method=\"post\" 
          class=\"box text-center form d-none d-lg-block p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center white-text mb-4 \" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 57
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 57), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom complet \">
                          <div class=\"invalid-feedback white-text\"> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 58), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 62
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 62), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback white-text\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 63), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 ";
        // line 67
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 67), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback white-text\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 68), "html", null, true);
        echo "</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 ";
        // line 72
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 72), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback white-text\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 73), "html", null, true);
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
gsap.to(\".box\", {rotation: -2, x: 10, duration: 4});


";
        // line 112
        echo " </script>";
    }

    public function getTemplateName()
    {
        return "/components/index/lead_form_float.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 112,  141 => 73,  137 => 72,  130 => 68,  126 => 67,  119 => 63,  115 => 62,  108 => 58,  104 => 57,  94 => 50,  89 => 47,  84 => 43,  72 => 32,  64 => 25,  55 => 17,  44 => 7,  41 => 5,  37 => 1,);
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
            {# background:#ff8f00  ; #}
            z-index:900;
            border-radius:10px;
            color:black;
             {# grey darken-3 #}
            \" 

          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes/newsletter\" 
          method=\"post\" 
          class=\"box text-center form d-none d-lg-block p-3 z-depth-1 \"
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
gsap.to(\".box\", {rotation: -2, x: 10, duration: 4});


{# window.onscroll = function() {myFunction()};

function myFunction() {
  console.log(document.documentElement.scrollTop  );
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById(\"lead_form_float\").style.background= \"orange\";
  } else {
    document.getElementById(\"lead_form_float\").style.background= \"blue\";
  }
} #}
 </script>", "/components/index/lead_form_float.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/components/index/lead_form_float.twig");
    }
}
