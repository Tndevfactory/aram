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

/* \components\nosTtraitements\soinsDentaires.twig */
class __TwigTemplate_691b01354ed74b2293b8db0cf549954a4c22046f2ac9d984ad425ca482df950a extends Template
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
        echo "
 Soins dentaire ";
    }

    public function getTemplateName()
    {
        return "\\components\\nosTtraitements\\soinsDentaires.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 Soins dentaire ", "\\components\\nosTtraitements\\soinsDentaires.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\nosTtraitements\\soinsDentaires.twig");
    }
}
