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

/* /components/nosTraitements/gr/greffeCheveux.twig */
class __TwigTemplate_b5159ae6738b95d922bdaba846131ef8b49986bef07b73423df46e9dd074df2d extends Template
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
        echo "greffes cheuveux ";
    }

    public function getTemplateName()
    {
        return "/components/nosTraitements/gr/greffeCheveux.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("greffes cheuveux ", "/components/nosTraitements/gr/greffeCheveux.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\nosTraitements\\gr\\greffeCheveux.twig");
    }
}
