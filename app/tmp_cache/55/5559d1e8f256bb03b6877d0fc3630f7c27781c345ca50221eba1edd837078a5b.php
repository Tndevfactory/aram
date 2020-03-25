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

/* /components/index/fr/newsletterSection.twig */
class __TwigTemplate_7e0bfbff0a0917d916fc9953f6ce3f4224eb6bfabde6c8afa3e81a7713ad1f32 extends Template
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
        echo "<!-- NEWSLETTER -->
<!-- newsletter -->


";
        // line 7
        echo "
  <section id=\"newsletter\" class=\"text-center p-5\" style=\"background:#010203;color:#E1AD21;\">
    <div class=\"container pb-5 \">
      <div class=\"row\">
        <div class=\"col\">

          <h1 class=\"mb-3\">Inscrivez-vous à notre Newsletter</h1>

          

          <form id=\"newslater_form\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" method=\"post\" class=\"form-row justify-content-center needs-validation\">
      
                <div class=\"row\">

                  <div class=\"col-md-6\">
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 23
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 23), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"veuillez entrer votre nom \">
                          <div class=\"invalid-feedback white-text\"> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 24), "html", null, true);
        echo " </div>
                      </div>
                    </div>

                    <div class=\"col-md-6\">

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 31
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 31), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"veuillez entrer votre email\">
                            <div class=\"invalid-feedback white-text\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 32), "html", null, true);
        echo "</div>
                      </div>
                      
                    </div>
                    
               
                </div>

                   <div class=\"row \">
                      <div class=\"col-md-6\">
                          <button 
                              style=\" margin-top:-4px;background:#E1AD21;color:#010203;\" 
                              class=\"ml-4 btn amber darken-3 black-text rounded\">
                              Envoyer
                          </button>
                        
                  </div>
                  </div>

                   

          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      ";
        // line 57
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
        return "/components/index/fr/newsletterSection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 57,  82 => 32,  78 => 31,  68 => 24,  64 => 23,  55 => 17,  43 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- NEWSLETTER -->
<!-- newsletter -->


{# #ffca28 amber lighten-1 #}
{# #212121 grey darken-4 #}

  <section id=\"newsletter\" class=\"text-center p-5\" style=\"background:#010203;color:#E1AD21;\">
    <div class=\"container pb-5 \">
      <div class=\"row\">
        <div class=\"col\">

          <h1 class=\"mb-3\">Inscrivez-vous à notre Newsletter</h1>

          

          <form id=\"newslater_form\" action=\"{{URLROOT}}/homes/newsletter\" method=\"post\" class=\"form-row justify-content-center needs-validation\">
      
                <div class=\"row\">

                  <div class=\"col-md-6\">
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"veuillez entrer votre nom \">
                          <div class=\"invalid-feedback white-text\"> {{data.name_err }} </div>
                      </div>
                    </div>

                    <div class=\"col-md-6\">

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"veuillez entrer votre email\">
                            <div class=\"invalid-feedback white-text\">{{data.email_err }}</div>
                      </div>
                      
                    </div>
                    
               
                </div>

                   <div class=\"row \">
                      <div class=\"col-md-6\">
                          <button 
                              style=\" margin-top:-4px;background:#E1AD21;color:#010203;\" 
                              class=\"ml-4 btn amber darken-3 black-text rounded\">
                              Envoyer
                          </button>
                        
                  </div>
                  </div>

                   

          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      {{register_success}}
                  </div>
        </div>
      </div>
    </div>
  </section>

", "/components/index/fr/newsletterSection.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\components\\index\\fr\\newsletterSection.twig");
    }
}
