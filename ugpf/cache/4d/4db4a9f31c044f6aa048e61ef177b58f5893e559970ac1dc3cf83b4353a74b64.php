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

/* block_head.html */
class __TwigTemplate_427c354e9f414c4474e3d2435fe41b6948b1ceddcce7b2faceb58542e98aeaa6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!--BLOC_HEAD_START-->
<section class=\"hero is-black is-medium\">

    <div class=\"hero-head\">

      <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
          <div class=\"navbar-brand\">

              <a role=\"button\" class=\"navbar-burger burger  has-text-success\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarMenu\">
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
              </a>
          </div>

          <div id=\"navbarMenu\" class=\"navbar-menu\">
              <div class=\"navbar-start\">
                <a class=\"navbar-item\" href=\"/\">
                  ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "
                </a>

                <div class=\"navbar-item has-dropdown is-hoverable\">
                  <a class=\"navbar-link\">
                    Category
                  </a>

                  <div class=\"navbar-dropdown has-background-dark\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "                    <a class=\"navbar-item\" href=\"/categories/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                      ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31));
            echo "
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                  </div>
                </div>
                <a class=\"navbar-item\" href=\"/rss\">
                    <i class=\"fa fa-rss\"></i><span style=\"margin-left: 5px;\">RSS</span>
                </a>
              </div>

            <div class=\"navbar-end\">
              <div class=\"navbar-item\">
                <div class=\"buttons\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 45
            echo "                  <a class=\"button is-black has-text-light\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "link", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "
                  </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                  <a class=\"button is-dark  has-text-light\" href=\"/mgmt/\">
                    Log in
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>

    </div>
    <div class=\"hero-body has-shadow-down\">
      <div class=\"container has-text-centered\">
        <span class=\"title is-size-2-desktop is-size-3-touch\" style=\"display:inline-block;\"> #></span>
        <span class=\"title is-size-2-desktop is-size-3-touch\" style=\"display:inline-block;\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 62));
        echo "</span>
        <span id=\"blink\" class=\"title is-size-2-desktop is-size-3-touch\" style=\"display:inline-block;\">_</span>
        <p class=\"subtitle  is-size-6-touch\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "subtitle", [], "any", false, false, false, 64));
        echo "</p>
      </div>
  </div>
</section>
<!--BLOC_HEAD_END-->
";
    }

    public function getTemplateName()
    {
        return "block_head.html";
    }

    public function getDebugInfo()
    {
        return array (  145 => 64,  140 => 62,  125 => 49,  116 => 46,  111 => 45,  107 => 44,  95 => 34,  86 => 31,  81 => 30,  77 => 29,  65 => 20,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<!--BLOC_HEAD_START-->
<section class=\"hero is-black is-medium\">

    <div class=\"hero-head\">

      <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
          <div class=\"navbar-brand\">

              <a role=\"button\" class=\"navbar-burger burger  has-text-success\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarMenu\">
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
              </a>
          </div>

          <div id=\"navbarMenu\" class=\"navbar-menu\">
              <div class=\"navbar-start\">
                <a class=\"navbar-item\" href=\"/\">
                  {{site.title}}
                </a>

                <div class=\"navbar-item has-dropdown is-hoverable\">
                  <a class=\"navbar-link\">
                    Category
                  </a>

                  <div class=\"navbar-dropdown has-background-dark\">
                    {% for category in categories %}
                    <a class=\"navbar-item\" href=\"/categories/{{category.name}}\">
                      {{ category.name | e }}
                    </a>
                    {% endfor %}
                  </div>
                </div>
                <a class=\"navbar-item\" href=\"/rss\">
                    <i class=\"fa fa-rss\"></i><span style=\"margin-left: 5px;\">RSS</span>
                </a>
              </div>

            <div class=\"navbar-end\">
              <div class=\"navbar-item\">
                <div class=\"buttons\">
                {% for page in pages %}
                  <a class=\"button is-black has-text-light\" href=\"{{page.link}}\">
                    {{page.title}}
                  </a>
                {% endfor %}
                  <a class=\"button is-dark  has-text-light\" href=\"/mgmt/\">
                    Log in
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>

    </div>
    <div class=\"hero-body has-shadow-down\">
      <div class=\"container has-text-centered\">
        <span class=\"title is-size-2-desktop is-size-3-touch\" style=\"display:inline-block;\"> #></span>
        <span class=\"title is-size-2-desktop is-size-3-touch\" style=\"display:inline-block;\">{{site.title|e}}</span>
        <span id=\"blink\" class=\"title is-size-2-desktop is-size-3-touch\" style=\"display:inline-block;\">_</span>
        <p class=\"subtitle  is-size-6-touch\">{{site.subtitle |e }}</p>
      </div>
  </div>
</section>
<!--BLOC_HEAD_END-->
{% endblock %}
", "block_head.html", "/home/restkhz/桌面/Dev/ugly-blog/ugly-php-blog/ugpf/view/block_head.html");
    }
}
