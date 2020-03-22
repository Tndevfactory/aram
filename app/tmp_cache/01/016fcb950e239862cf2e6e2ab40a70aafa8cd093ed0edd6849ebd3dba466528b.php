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
           /*background:#010203;*/
          background:#B0B0B0;
            color:black;
             border: 1px solid grey;;
             
}

 ";
        // line 35
        echo "
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
                 <br>
                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom au complet\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                     </div>

                      <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <label class=\"input-group-text\" for=\"inputGroupSelect01\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\">
                          <option selected>Intervention souhaitée...</option>
                          <option value=\"1\">Lifting visage</option>
                          <option value=\"2\">Blépharoplastie </option>
                          <option value=\"3\">Rhinoplastie</option>
                          <option value=\"1\">Lifting seins</option>
                          <option value=\"2\">Prothèses mammaires</option>
                          <option value=\"3\">Lipofilling mammaire</option>
                          <option value=\"1\">Liposuccion</option>
                          <option value=\"2\">Abdominoplastie  </option>
                          <option value=\"3\">Augmentation fesses</option>
                          <option value=\"1\">Greffe cheveux </option>
                          <option value=\"2\">Greffe barbe </option>
                          <option value=\"3\">Greffe sourcils</option>
                        </select>
                      </div>


                      <br>
                        <button 
                        style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn  z-depth-0 grey accent-3\">
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
        // line 135
        echo "  ";
        // line 136
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
        return array (  151 => 136,  149 => 135,  70 => 58,  65 => 55,  58 => 49,  55 => 35,  37 => 1,);
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
           /*background:#010203;*/
          background:#B0B0B0;
            color:black;
             border: 1px solid grey;;
             
}

 {# form#lead_form_float input{
    
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
   
  } #}

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
                 <br>
                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom au complet\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                     </div>

                      <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <label class=\"input-group-text\" for=\"inputGroupSelect01\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\">
                          <option selected>Intervention souhaitée...</option>
                          <option value=\"1\">Lifting visage</option>
                          <option value=\"2\">Blépharoplastie </option>
                          <option value=\"3\">Rhinoplastie</option>
                          <option value=\"1\">Lifting seins</option>
                          <option value=\"2\">Prothèses mammaires</option>
                          <option value=\"3\">Lipofilling mammaire</option>
                          <option value=\"1\">Liposuccion</option>
                          <option value=\"2\">Abdominoplastie  </option>
                          <option value=\"3\">Augmentation fesses</option>
                          <option value=\"1\">Greffe cheveux </option>
                          <option value=\"2\">Greffe barbe </option>
                          <option value=\"3\">Greffe sourcils</option>
                        </select>
                      </div>


                      <br>
                        <button 
                        style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn  z-depth-0 grey accent-3\">
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
