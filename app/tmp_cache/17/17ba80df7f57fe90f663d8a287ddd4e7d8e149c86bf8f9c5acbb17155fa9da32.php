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

/* /components/greffe_barbe/blog_section.twig */
class __TwigTemplate_2b1cb5dff9d3f4e803ca37e48e15ac2d63ef95b93f7be35774d013175eb0bc35 extends Template
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
  <!-- BLOG SECTION -->
  <section id=\"blog\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"card-columns\">
            <div class=\"card\">
              <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe1.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post One</h4>
                <small class=\"text-muted\">Written by Jeff on 05/20</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe2.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Two</h4>
                <small class=\"text-muted\">Written by Karen on 05/22</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3 bg-danger text-white\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-white\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/barbe/barbe3.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Three</h4>
                <small class=\"text-muted\">Written by Harry on 05/23</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
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
        return "/components/greffe_barbe/blog_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 57,  74 => 33,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
  <!-- BLOG SECTION -->
  <section id=\"blog\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"card-columns\">
            <div class=\"card\">
              <img src=\"{{URLROOT}}/public/img/barbe/barbe1.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post One</h4>
                <small class=\"text-muted\">Written by Jeff on 05/20</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"{{URLROOT}}/public/img/barbe/barbe2.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Two</h4>
                <small class=\"text-muted\">Written by Karen on 05/22</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3 bg-danger text-white\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-white\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"{{URLROOT}}/public/img/barbe/barbe3.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Three</h4>
                <small class=\"text-muted\">Written by Harry on 05/23</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>", "/components/greffe_barbe/blog_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/greffe_barbe/blog_section.twig");
    }
}
