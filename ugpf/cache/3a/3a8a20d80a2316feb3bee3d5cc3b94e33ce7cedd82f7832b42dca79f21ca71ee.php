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

/* block_index.html */
class __TwigTemplate_980a1fc48719db951fac499510a2533499092233af6f862ca336588774f67f30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block_skeleton.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block_skeleton.html", "block_index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 4));
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!--BLOCK_INDEX_START-->
<section id=\"posts\">
    <div class=\"container\">
      <div class=\"columns\" style=\"margin-bottom: 36px;\">
        <div class=\"column is-two-third\">
          <div class=\"card has-shadow-down\">
            <div class=\"card-header has-shadow-down\">
              <p class=\"card-header-title has-text-success is-size-5\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>&nbsp;Posts</p>
            </div>
            <div class=\"card-content\">
              <div class=\"content has-text-light\">
                <ul>
                  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "                  <li class=\"post\">
                    <time class=\"has-text-grey-light meta\">[";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "create_time", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            echo "]</time>
                    <a href=\"/post/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                      <p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                    </a>
                    <div style=\"margin-left: auto;\" class=\"is-hidden-touch\">
                        <p class=\"has-text-grey-light\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["post"], "category_id", [], "any", false, false, false, 27)] ?? null) : null), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    </div>
                  </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </ul>
              </div>
            </div>

            <div class=\"card-footer\">

            </div>

          </div>
        </div>

        <div class=\"column is-one-third is-hidden-touch\">
          <div class=\"card has-shadow-down\"  style=\"position: sticky;top: 3%;\">
            <div class=\"card-header has-shadow-down\">
              <p class=\"card-header-title has-text-success is-size-5\"><i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i>&nbsp;Categories</p>
            </div>
            <div class=\"card-content\">
              ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 49
            echo "              <ul class=\"menu-list\">
                  <li>
                    <a href=\"/categories/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51));
            echo "</a>
                  </li>
              </ul>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
<!--BLOCK_INDEX_END-->
";
    }

    public function getTemplateName()
    {
        return "block_index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  133 => 51,  129 => 49,  125 => 48,  106 => 31,  96 => 27,  90 => 24,  86 => 23,  82 => 22,  79 => 21,  75 => 20,  61 => 8,  57 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'block_skeleton.html' %}

{% block title %}
{{site.title | e }}
{% endblock %}

{% block body %}
<!--BLOCK_INDEX_START-->
<section id=\"posts\">
    <div class=\"container\">
      <div class=\"columns\" style=\"margin-bottom: 36px;\">
        <div class=\"column is-two-third\">
          <div class=\"card has-shadow-down\">
            <div class=\"card-header has-shadow-down\">
              <p class=\"card-header-title has-text-success is-size-5\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>&nbsp;Posts</p>
            </div>
            <div class=\"card-content\">
              <div class=\"content has-text-light\">
                <ul>
                  {% for post in posts %}
                  <li class=\"post\">
                    <time class=\"has-text-grey-light meta\">[{{post.create_time|date('d/m/Y')}}]</time>
                    <a href=\"/post/{{post.url}}\">
                      <p>{{post.title}}</p>
                    </a>
                    <div style=\"margin-left: auto;\" class=\"is-hidden-touch\">
                        <p class=\"has-text-grey-light\">{{categories[post.category_id].name}}</p>
                    </div>
                  </li>
                  {% endfor %}
                </ul>
              </div>
            </div>

            <div class=\"card-footer\">

            </div>

          </div>
        </div>

        <div class=\"column is-one-third is-hidden-touch\">
          <div class=\"card has-shadow-down\"  style=\"position: sticky;top: 3%;\">
            <div class=\"card-header has-shadow-down\">
              <p class=\"card-header-title has-text-success is-size-5\"><i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i>&nbsp;Categories</p>
            </div>
            <div class=\"card-content\">
              {% for category in categories %}
              <ul class=\"menu-list\">
                  <li>
                    <a href=\"/categories/{{category.name}}\">{{category.name |e }}</a>
                  </li>
              </ul>
              {% endfor %}
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
<!--BLOCK_INDEX_END-->
{% endblock %}
", "block_index.html", "/home/restkhz/桌面/Dev/ugly-blog/ugly-php-blog/ugpf/view/block_index.html");
    }
}
