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

/* /homes/data/index/en/leadFormFloat.twig */
class __TwigTemplate_ac444bcd465100cf975ee208f0afa63fae2d6b654288495582a3ebdf14ff4494 extends Template
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
            position:absolute;
            top:-50px;
            z-index:900;
            background:#B0B0B0;
            color:black;
            border: 1px solid grey; }
 </style>

<section style=\"position:relative\">
          <form  id=\"lead_form_float\" action=\"#\" method=\"post\" 
          class=\" my-0 p-3 text-center d-none d-xl-block  z-depth-3 \">

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
                <label class=\"input-group-text\" for=\"inputGroupSelect22\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
              </div>
              <select class=\"custom-select\" id=\"inputGroupSelect22\">
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

 <script>
       
      //  document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
            var w = parseInt(window.innerWidth);
            pos=w-450;
         // document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';

      /*  window.addEventListener('load', function(event){
          var w = parseInt(window.innerWidth);
          
          pos=w-450;
          document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });*/


        window.addEventListener('resize', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
           pos=w-450;
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });

      /*
        ";
        // line 102
        echo "        ";
        echo "*/
      window.addEventListener('scroll', function(e){
     
            var docScrollHeight=document.documentElement.scrollHeight;
            var windowScrollHeight=window.innerHeight;
            var endScrollDoc=docScrollHeight - windowScrollHeight;
            var scrolled=Math.ceil(window.scrollY);
            var formHeight=document.getElementById(\"lead_form_float\").clientHeight;
           // var posTop=document.getElementById(\"showcaseVideo\").clientHeight;
            var posDown=endScrollDoc - (formHeight + 100);

           /* console.log('docScrollHeight '+ docScrollHeight);
            console.log('windowScrollHeight '+ windowScrollHeight);
            console.log('endScrollDoc '+ endScrollDoc);
            console.log('formHeight '+ formHeight);
            console.log('scrolled '+ scrolled );
            console.log('posTop '+ posTop );
            console.log('posDown '+ posDown );
            console.log('scrolled end at ' +  scrolled);*/

            if( (scrolled < posDown) ){
              document.getElementById(\"lead_form_float\").style.top = (scrolled - 530) + 'px';
            }else{
               document.getElementById(\"lead_form_float\").style.visibility = \"hidden\";
            } 
            
            if( (scrolled < posDown) ){
               document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
            }

            });

            /*document.getElementById(\"lead_form_float\").style.top =  (scrolled)+'px';

            if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                document.getElementById(\"lead_form_float\").style.background= \"red\";   
                console.log((scrolledGap)+'px');
            } else {
              
              document.getElementById(\"lead_form_float\").style.background= \"blue\";
            }
        */

</script>";
    }

    public function getTemplateName()
    {
        return "/homes/data/index/en/leadFormFloat.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 102,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_float-->

<style>
form#lead_form_float {
            width:400px;
            position:absolute;
            top:-50px;
            z-index:900;
            background:#B0B0B0;
            color:black;
            border: 1px solid grey; }
 </style>

<section style=\"position:relative\">
          <form  id=\"lead_form_float\" action=\"#\" method=\"post\" 
          class=\" my-0 p-3 text-center d-none d-xl-block  z-depth-3 \">

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
                <label class=\"input-group-text\" for=\"inputGroupSelect22\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
              </div>
              <select class=\"custom-select\" id=\"inputGroupSelect22\">
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

 <script>
       
      //  document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
            var w = parseInt(window.innerWidth);
            pos=w-450;
         // document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';

      /*  window.addEventListener('load', function(event){
          var w = parseInt(window.innerWidth);
          
          pos=w-450;
          document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });*/


        window.addEventListener('resize', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
           pos=w-450;
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });

      /*
        {# gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 }); #}
        {# gsap.to(\".box\", {rotation: -55, x: 10, duration: 4}); #}*/
      window.addEventListener('scroll', function(e){
     
            var docScrollHeight=document.documentElement.scrollHeight;
            var windowScrollHeight=window.innerHeight;
            var endScrollDoc=docScrollHeight - windowScrollHeight;
            var scrolled=Math.ceil(window.scrollY);
            var formHeight=document.getElementById(\"lead_form_float\").clientHeight;
           // var posTop=document.getElementById(\"showcaseVideo\").clientHeight;
            var posDown=endScrollDoc - (formHeight + 100);

           /* console.log('docScrollHeight '+ docScrollHeight);
            console.log('windowScrollHeight '+ windowScrollHeight);
            console.log('endScrollDoc '+ endScrollDoc);
            console.log('formHeight '+ formHeight);
            console.log('scrolled '+ scrolled );
            console.log('posTop '+ posTop );
            console.log('posDown '+ posDown );
            console.log('scrolled end at ' +  scrolled);*/

            if( (scrolled < posDown) ){
              document.getElementById(\"lead_form_float\").style.top = (scrolled - 530) + 'px';
            }else{
               document.getElementById(\"lead_form_float\").style.visibility = \"hidden\";
            } 
            
            if( (scrolled < posDown) ){
               document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
            }

            });

            /*document.getElementById(\"lead_form_float\").style.top =  (scrolled)+'px';

            if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                document.getElementById(\"lead_form_float\").style.background= \"red\";   
                console.log((scrolledGap)+'px');
            } else {
              
              document.getElementById(\"lead_form_float\").style.background= \"blue\";
            }
        */

</script>", "/homes/data/index/en/leadFormFloat.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/en/leadFormFloat.twig");
    }
}
