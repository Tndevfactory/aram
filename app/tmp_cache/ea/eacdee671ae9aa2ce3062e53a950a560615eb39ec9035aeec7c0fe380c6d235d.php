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

/* /components/index/fr/leadFormFixBottom.twig */
class __TwigTemplate_35b682a729c5c0633a5946437b9b62461e3130e2765058e954595fb082d3f33f extends Template
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
        echo "<!-- d-block d-xl-none leadFormFixBottom_fix-->

<style>


</style>


  <section id=\"form_fixBottom \" class=\"py-4\" style=\"background-color:#010203;color:#E1AD21;\">
      <div class=\"container\"> 
          <div class=\"row\"> 
              
              <div class=\"col-md-6 text-center\">
                  <form  style=\"  background-color:#010203;color:#E1AD21; \" 
                            id=\"lead_form_fixBottom\" 
                            action=\"#\" method=\"post\"
                            class=\"form p-3 \">
                  
                            
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
                                <label class=\"input-group-text\" for=\"inputGroupSelect55\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                              </div>
                              <select class=\"custom-select\" id=\"inputGroupSelect55\">
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
                              style=\" border:1px solid black; background-color:#E1AD21;color:#010203;border-radius:10px;\" 
                              class=\" ml-4 rounded btn z-depth-3 \">
                              Envoyer
                          </button>
                  </form>
              </div>
              <div class=\"col-md-6 \">
                <h3 class=\"pt-3 \"> Inscription</h3>
                <p class=\"pl-2 \">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae eveniet sed mollitia architecto ducimus debitis facere, fuga placeat quod dolore ipsum beatae. Velit eligendi vero sapiente culpa adipisci, consequuntur deserunt aliquam!</p>
                
              </div>
             
          </div>
      </div>

  </section>

        

                  ";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/leadFormFixBottom.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- d-block d-xl-none leadFormFixBottom_fix-->

<style>


</style>


  <section id=\"form_fixBottom \" class=\"py-4\" style=\"background-color:#010203;color:#E1AD21;\">
      <div class=\"container\"> 
          <div class=\"row\"> 
              
              <div class=\"col-md-6 text-center\">
                  <form  style=\"  background-color:#010203;color:#E1AD21; \" 
                            id=\"lead_form_fixBottom\" 
                            action=\"#\" method=\"post\"
                            class=\"form p-3 \">
                  
                            
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
                                <label class=\"input-group-text\" for=\"inputGroupSelect55\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                              </div>
                              <select class=\"custom-select\" id=\"inputGroupSelect55\">
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
                              style=\" border:1px solid black; background-color:#E1AD21;color:#010203;border-radius:10px;\" 
                              class=\" ml-4 rounded btn z-depth-3 \">
                              Envoyer
                          </button>
                  </form>
              </div>
              <div class=\"col-md-6 \">
                <h3 class=\"pt-3 \"> Inscription</h3>
                <p class=\"pl-2 \">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae eveniet sed mollitia architecto ducimus debitis facere, fuga placeat quod dolore ipsum beatae. Velit eligendi vero sapiente culpa adipisci, consequuntur deserunt aliquam!</p>
                
              </div>
             
          </div>
      </div>

  </section>

        

                  ", "/components/index/fr/leadFormFixBottom.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\components\\index\\fr\\leadFormFixBottom.twig");
    }
}
