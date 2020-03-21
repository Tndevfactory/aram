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

/* /components/index/fr/leadFormFix.twig */
class __TwigTemplate_3619fbd26145622182946a2be88aed518e5803dffd6b76c5f730250b5ba5bce8 extends Template
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
        echo "<!-- lead_form_fix-->


";
        // line 7
        echo "
";
        // line 9
        echo "   <section  class=\" text-center p-5 \">

          <form 
            style=\"  background:#B0B0B0; \" 
            id=\"lead_form_fix\" 
            action=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" method=\"post\"
            class=\"form p-3 d-block d-xl-none \">
      
                
            <h4 class=\"text-center  mb-3\">Demander un devis </h4><br>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\" 
                placeholder=\"Votre nom au complet\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\"
                placeholder=\"Votre numéro de téléphone\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
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

  </section>

        

";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/leadFormFix.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  45 => 9,  42 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_fix-->


{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}
{# #ff8f00 amber darken-3 #}

{# visible on xl and below  #}
   <section  class=\" text-center p-5 \">

          <form 
            style=\"  background:#B0B0B0; \" 
            id=\"lead_form_fix\" 
            action=\"{{URLROOT}}/homes/newsletter\" method=\"post\"
            class=\"form p-3 d-block d-xl-none \">
      
                
            <h4 class=\"text-center  mb-3\">Demander un devis </h4><br>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\" 
                placeholder=\"Votre nom au complet\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\"
                placeholder=\"Votre numéro de téléphone\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
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

  </section>

        

", "/components/index/fr/leadFormFix.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/leadFormFix.twig");
    }
}
