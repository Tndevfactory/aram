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

/* /components/index/ar/lead_form_fix.twig */
class __TwigTemplate_e4a973eb83fc2b41b52913627f9d368acd197f027a61d6988d1bfb877ad3c99c extends Template
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
          style=\" 
           
            
            background:#ff8f00;
            
            border-radius:10px;
            
            \" 
          id=\"lead_form_float\" 
          action=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" method=\"post\"
           class=\"form p-3 d-block d-lg-none grey darken-3\">
      
                
                 <h4 class=\"text-center white-text mb-4\" >Demander un devis </h4>
                 
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 29
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 29), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom complet\">
                          <div class=\"invalid-feedback white-text\"> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 30), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 34
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 34), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback white-text\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 35), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 ";
        // line 39
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 39), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback white-text\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 40), "html", null, true);
        echo "</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 ";
        // line 44
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 44), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback white-text\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 45), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                      <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn   orange darken-3 white-text  z-depth-1 amber darken-3 \">
                        Envoyer
                        </button>
          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      ";
        // line 58
        echo twig_escape_filter($this->env, ($context["register_success"] ?? null), "html", null, true);
        echo "
                  </div>
        </div>
      </div>
    </div>
  </section>

        
";
    }

    public function getTemplateName()
    {
        return "/components/index/ar/lead_form_fix.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 58,  107 => 45,  103 => 44,  96 => 40,  92 => 39,  85 => 35,  81 => 34,  74 => 30,  70 => 29,  60 => 22,  45 => 9,  42 => 7,  37 => 1,);
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
          style=\" 
           
            
            background:#ff8f00;
            
            border-radius:10px;
            
            \" 
          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes/newsletter\" method=\"post\"
           class=\"form p-3 d-block d-lg-none grey darken-3\">
      
                
                 <h4 class=\"text-center white-text mb-4\" >Demander un devis </h4>
                 
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"Veuillez entrer votre nom complet\">
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
                        class=\"ml-4 btn   orange darken-3 white-text  z-depth-1 amber darken-3 \">
                        Envoyer
                        </button>
          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      {{register_success}}
                  </div>
        </div>
      </div>
    </div>
  </section>

        
", "/components/index/ar/lead_form_fix.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/components/index/ar/lead_form_fix.twig");
    }
}
