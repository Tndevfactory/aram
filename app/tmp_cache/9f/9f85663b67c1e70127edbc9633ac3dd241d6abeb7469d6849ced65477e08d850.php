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

/* /components/qui_somme_nous/ar/testimonial.twig */
class __TwigTemplate_fff17ce7a9a71ddb18b2ab4ffcd27d53db905ffb7bc411ea0b666a7f46a2a802 extends Template
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
        echo "<!-- TESTIMONIALS -->
  <section id=\"testimonials\" class=\"p-4 bg-dark text-white\">
    <div class=\"container\">
      <h2 class=\"text-center\">testimonials</h2>
      <div class=\"row text-center\">
        <div class=\"col\">
          <div class=\"slider\">
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class=\"blockquote-footer\">John Doe From
                  <cite title=\"Company 1\">Company 1</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class=\"blockquote-footer\">Sam Smith From
                  <cite title=\"Company 2\">Company 2</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class=\"blockquote-footer\">Meghan Williams From
                  <cite title=\"Company 3\">Company 3</cite>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/qui_somme_nous/ar/testimonial.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- TESTIMONIALS -->
  <section id=\"testimonials\" class=\"p-4 bg-dark text-white\">
    <div class=\"container\">
      <h2 class=\"text-center\">testimonials</h2>
      <div class=\"row text-center\">
        <div class=\"col\">
          <div class=\"slider\">
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class=\"blockquote-footer\">John Doe From
                  <cite title=\"Company 1\">Company 1</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class=\"blockquote-footer\">Sam Smith From
                  <cite title=\"Company 2\">Company 2</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class=\"blockquote-footer\">Meghan Williams From
                  <cite title=\"Company 3\">Company 3</cite>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>", "/components/qui_somme_nous/ar/testimonial.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\components\\qui_somme_nous\\ar\\testimonial.twig");
    }
}
