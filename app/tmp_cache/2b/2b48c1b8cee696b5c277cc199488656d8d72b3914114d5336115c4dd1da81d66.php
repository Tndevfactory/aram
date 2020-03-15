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

/* /components/index/ar/home_heading_section.twig */
class __TwigTemplate_c5a1376630c61546cf773306bb0896ac499bb5f9257d8048b652f69db51711ba extends Template
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
        echo "<style>
.headingAR {
  font-family: \"Times New Roman\", Times, serif;
  font-size: 150%;
  text-align:right;
}
</style>



  <section  dir=\"rtl\" id=\"home-heading\" class=\" headingAR p-5 img-fluid\">
    <div  dir=\"rtl\" class=\"dark-overlay\">
      <div  dir=\"rtl\" class=\"row\">
        <div  dir=\"rtl\" class=\"col\">
          <div  dir=\"rtl\" class=\"container pt-5\">
            <h1  dir=\"rtl\" class=\"d-none d-md-block\"> ابدأ الآن في تحسين شعرك</h1>
            <p  dir=\"rtl\"  class=\"d-none d-md-block\">فاتورتك في أقل من دقيقة</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    ";
    }

    public function getTemplateName()
    {
        return "/components/index/ar/home_heading_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
.headingAR {
  font-family: \"Times New Roman\", Times, serif;
  font-size: 150%;
  text-align:right;
}
</style>



  <section  dir=\"rtl\" id=\"home-heading\" class=\" headingAR p-5 img-fluid\">
    <div  dir=\"rtl\" class=\"dark-overlay\">
      <div  dir=\"rtl\" class=\"row\">
        <div  dir=\"rtl\" class=\"col\">
          <div  dir=\"rtl\" class=\"container pt-5\">
            <h1  dir=\"rtl\" class=\"d-none d-md-block\"> ابدأ الآن في تحسين شعرك</h1>
            <p  dir=\"rtl\"  class=\"d-none d-md-block\">فاتورتك في أقل من دقيقة</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    ", "/components/index/ar/home_heading_section.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\index\\ar\\home_heading_section.twig");
    }
}
