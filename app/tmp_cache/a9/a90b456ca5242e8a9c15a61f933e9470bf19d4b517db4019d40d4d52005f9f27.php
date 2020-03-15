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

/* /components/nosTraitements/gr/medecineEsthethique.twig */
class __TwigTemplate_85cfb56f34ee0ca27433c9ee5205967e6e32de49f08d51a325013d032a02b9a1 extends Template
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
        echo "soins dentaires fr ";
    }

    public function getTemplateName()
    {
        return "/components/nosTraitements/gr/medecineEsthethique.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("soins dentaires fr ", "/components/nosTraitements/gr/medecineEsthethique.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\nosTraitements\\gr\\medecineEsthethique.twig");
    }
}
