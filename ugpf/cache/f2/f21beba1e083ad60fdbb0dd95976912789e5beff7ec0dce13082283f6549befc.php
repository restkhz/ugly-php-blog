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

/* block_post.html */
class __TwigTemplate_1a893a1f90fefee5ca252b8e5e94c64943ea78338fa5d53676bdf0c371cf8c6c extends Template
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
        $this->parent = $this->loadTemplate("block_skeleton.html", "block_post.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 4));
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!--BLOCK_POST_START-->
<section id=\"posts\">
    <div class=\"container\">
      <div class=\"columns\">
        <div class=\"column is-two-third\" style=\"overflow-wrap:break-world;overflow:hidden;\">
          <div class=\"card has-shadow-down\">
            <div class=\"card-content\">
                <h1 class=\"title has-text-success\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 15));
        echo "</h1>
                <span>
                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;
                    <b>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 18));
        echo "</b>
                </span>
                &nbsp;|&nbsp;
                <span>
                    <i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i>&nbsp;
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "create_time", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</span>
                <hr>
              <div class=\"content has-text-light\">
                ";
        // line 27
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 27);
        echo "
                ";
        // line 29
        echo "              </div>
                <hr>
                <p><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> Views: <span id=\"view\"></span></p>
                <img src=\"/viewscounter/postcount?pid=";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pid", [], "any", false, false, false, 32), "html", null, true);
        echo "&t=a\" onerror=\"this.style.display='none'\" width=\"1\" height=\"1\" alt=\"\">

            </div>
            </div>
        </div>

        <div class=\"column is-one-third is-hidden-mobile\">
          <div class=\"card has-shadow-down\" style=\"position: sticky;top: 3%;\">
            <div class=\"card-header has-shadow-down\">
              <p class=\"card-header-title has-text-success is-size-5\"><i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i>&nbsp;Categories</p>
            </div>
            <div class=\"card-content\">
              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "              <ul class=\"menu-list\">
                  <li>
                    <a href=\"/categories/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47));
            echo "</a>
                  </li>
              </ul>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>

          </div>
        </div>

      </div>
    </div>

  </section>

  <section class=\"section\">
    <div class=\"container\">
      <div class=\"comments\">
        <h2 class=\"is-size-4 title has-text-success\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i>&nbsp;Comments</h2>
        <hr>
        ";
        // line 66
        if (($context["comments"] ?? null)) {
            // line 67
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 68
                echo "            <div class=\"media\">
                <p class=\"media-left\"><i class=\"fa fa-user-circle-o fa-3x\" aria-hidden=\"true\"></i> </p>
              <div class=\"media-content\">
                <div class=\"content\" >
                  <p>
                    <strong>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 73), "html", null, true);
                echo ":</strong>";
                if ((twig_get_attribute($this->env, $this->source, $context["comment"], "is_admin", [], "any", false, false, false, 73) == 1)) {
                    echo "<span class=\"has-text-warning\">(admin)</span>";
                }
                // line 74
                echo "                    <p id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\">
                        ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 75);
                echo "
                    </p>
                    <span><a href=\"#comment_text\" onClick=\"return CommentQuote('";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 77), "html", null, true);
                echo "')\"><i class=\"fa fa-reply\" aria-hidden=\"true\"></i>&nbsp;Reply</a></span>
                  </p>
                </div>
              </div>
            </div>
            <hr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "        ";
        }
        // line 85
        echo "
        ";
        // line 86
        if ( !($context["comments"] ?? null)) {
            // line 87
            echo "          <span class=\"is-size-5\">(no comments...maybe you can be the first?)</span>
        ";
        }
        // line 89
        echo "      </div>

      <div class=\"media\">
        <div class=\"media-content\">
          <form id=\"comment_form\" class=\"\" action=\"/post/postComment\" method=\"post\">
            <div class=\"field\">
              <label class=\"label\">Name</label>
              <p class=\"control\">
                <input id=\"comment_name\" class=\"input has-text-light has-background-dark\" name=\"user\" type=\"text\" placeholder=\"(name required)\"  required=\"required\">
              </p>
            </div>
            <div class=\"field\">
              <label class=\"label\">Email(Won't be public)</label>
              <p class=\"control\">
                <input id=\"comment_email\" class=\"input has-text-light has-background-dark\" name=\"email\" type=\"text\" placeholder=\"(email, required)\" required=\"required\">
              </p>
            </div>
            <div class=\"field\">
              <label class=\"label\">Your website(optional)</label>
              <p class=\"control\">
                <input id=\"comment_site\" class=\"input input has-text-light has-background-dark\" name=\"site\" type=\"text\" placeholder=\"(not required)\">
              </p>
            </div>
          <div class=\"field\">
            <label class=\"label\">Comment</label>
            <p class=\"control\">
              <textarea id=\"comment_text\" class=\"textarea input has-text-light has-background-dark\" name=\"comment\" placeholder=\"Add a comment :)\" required=\"required\"></textarea>
            </p>
          </div>
          <div class=\"field\">
            <p class=\"control\">
              <input type=\"submit\" class=\"button\" value=\"Post!\"></input>
            </p>
          </div>
          <input type=\"hidden\" name=\"pid\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pid", [], "any", false, false, false, 123), "html", null, true);
        echo "\">
          <input id=\"key\" type=\"hidden\" name=\"key\" value=\"x\">
          </form>
        </div>
      </div>

    </div>
  </section>
  <script type=\"text/javascript\" src=\"/assets/comment.js\"></script>
  <script type=\"text/x-mathjax-config\">
      MathJax.Hub.Config({
        tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}
      });
  </script>
  <script type=\"text/javascript\" src=\"https://cdn.rawgit.com/mathjax/MathJax/2.7.1/MathJax.js?config=TeX-AMS_HTML-full\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

  <script type=\"text/javascript\">
      \$(document).ready(function(){\$('#view').load(\"/post/getView/";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pid", [], "any", false, false, false, 141), "html", null, true);
        echo "\");})
  </script>


  <!--BLOCK_POST_END-->
  ";
    }

    public function getTemplateName()
    {
        return "block_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 141,  247 => 123,  211 => 89,  207 => 87,  205 => 86,  202 => 85,  199 => 84,  184 => 77,  179 => 75,  174 => 74,  168 => 73,  161 => 68,  156 => 67,  154 => 66,  137 => 51,  125 => 47,  121 => 45,  117 => 44,  102 => 32,  97 => 29,  92 => 27,  86 => 23,  78 => 18,  72 => 15,  63 => 8,  59 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'block_skeleton.html' %}

{% block title %}
{{post.title}} | {{site.title | e}}
{% endblock %}

{% block body %}
<!--BLOCK_POST_START-->
<section id=\"posts\">
    <div class=\"container\">
      <div class=\"columns\">
        <div class=\"column is-two-third\" style=\"overflow-wrap:break-world;overflow:hidden;\">
          <div class=\"card has-shadow-down\">
            <div class=\"card-content\">
                <h1 class=\"title has-text-success\">{{post.title | e}}</h1>
                <span>
                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;
                    <b>{{post.author | e }}</b>
                </span>
                &nbsp;|&nbsp;
                <span>
                    <i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i>&nbsp;
                    {{post.create_time|date('d/m/Y')}}</span>
                <hr>
              <div class=\"content has-text-light\">
                {% autoescape false %}
                {{post.content_html}}
                {% endautoescape %}
              </div>
                <hr>
                <p><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> Views: <span id=\"view\"></span></p>
                <img src=\"/viewscounter/postcount?pid={{post.pid}}&t=a\" onerror=\"this.style.display='none'\" width=\"1\" height=\"1\" alt=\"\">

            </div>
            </div>
        </div>

        <div class=\"column is-one-third is-hidden-mobile\">
          <div class=\"card has-shadow-down\" style=\"position: sticky;top: 3%;\">
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

  <section class=\"section\">
    <div class=\"container\">
      <div class=\"comments\">
        <h2 class=\"is-size-4 title has-text-success\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i>&nbsp;Comments</h2>
        <hr>
        {% if comments %}
          {% for comment in comments %}
            <div class=\"media\">
                <p class=\"media-left\"><i class=\"fa fa-user-circle-o fa-3x\" aria-hidden=\"true\"></i> </p>
              <div class=\"media-content\">
                <div class=\"content\" >
                  <p>
                    <strong>{{comment.name}}:</strong>{% if comment.is_admin ==1 %}<span class=\"has-text-warning\">(admin)</span>{% endif %}
                    <p id=\"{{comment.id}}\">
                        {{comment.content |raw}}
                    </p>
                    <span><a href=\"#comment_text\" onClick=\"return CommentQuote('{{comment.id}}','{{comment.name}}')\"><i class=\"fa fa-reply\" aria-hidden=\"true\"></i>&nbsp;Reply</a></span>
                  </p>
                </div>
              </div>
            </div>
            <hr>
          {% endfor %}
        {% endif %}

        {% if not comments %}
          <span class=\"is-size-5\">(no comments...maybe you can be the first?)</span>
        {% endif %}
      </div>

      <div class=\"media\">
        <div class=\"media-content\">
          <form id=\"comment_form\" class=\"\" action=\"/post/postComment\" method=\"post\">
            <div class=\"field\">
              <label class=\"label\">Name</label>
              <p class=\"control\">
                <input id=\"comment_name\" class=\"input has-text-light has-background-dark\" name=\"user\" type=\"text\" placeholder=\"(name required)\"  required=\"required\">
              </p>
            </div>
            <div class=\"field\">
              <label class=\"label\">Email(Won't be public)</label>
              <p class=\"control\">
                <input id=\"comment_email\" class=\"input has-text-light has-background-dark\" name=\"email\" type=\"text\" placeholder=\"(email, required)\" required=\"required\">
              </p>
            </div>
            <div class=\"field\">
              <label class=\"label\">Your website(optional)</label>
              <p class=\"control\">
                <input id=\"comment_site\" class=\"input input has-text-light has-background-dark\" name=\"site\" type=\"text\" placeholder=\"(not required)\">
              </p>
            </div>
          <div class=\"field\">
            <label class=\"label\">Comment</label>
            <p class=\"control\">
              <textarea id=\"comment_text\" class=\"textarea input has-text-light has-background-dark\" name=\"comment\" placeholder=\"Add a comment :)\" required=\"required\"></textarea>
            </p>
          </div>
          <div class=\"field\">
            <p class=\"control\">
              <input type=\"submit\" class=\"button\" value=\"Post!\"></input>
            </p>
          </div>
          <input type=\"hidden\" name=\"pid\" value=\"{{post.pid}}\">
          <input id=\"key\" type=\"hidden\" name=\"key\" value=\"x\">
          </form>
        </div>
      </div>

    </div>
  </section>
  <script type=\"text/javascript\" src=\"/assets/comment.js\"></script>
  <script type=\"text/x-mathjax-config\">
      MathJax.Hub.Config({
        tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}
      });
  </script>
  <script type=\"text/javascript\" src=\"https://cdn.rawgit.com/mathjax/MathJax/2.7.1/MathJax.js?config=TeX-AMS_HTML-full\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

  <script type=\"text/javascript\">
      \$(document).ready(function(){\$('#view').load(\"/post/getView/{{post.pid}}\");})
  </script>


  <!--BLOCK_POST_END-->
  {% endblock %}
", "block_post.html", "/home/restkhz/桌面/Dev/ugly-blog/ugly-php-blog/ugpf/view/block_post.html");
    }
}
