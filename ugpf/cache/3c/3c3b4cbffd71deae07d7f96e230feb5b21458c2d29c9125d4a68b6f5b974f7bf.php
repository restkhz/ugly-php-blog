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

/* block_skeleton.html */
class __TwigTemplate_3f51747ebeef051d46e8556bc776f7ea2a45abf2de5fc5e47ba939a9b6971175 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"\">
  <head>
    <meta charset=\"utf-8\">

    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\"/>
    <meta name=\"author\" content=\"休止千鹤\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta name=\"description\" content=\"";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 10)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 10), "html", null, true);
        }
        echo "\">
    <meta name=\"keywords\" content=\"信息安全,树莓派,学习笔记,博客\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">


    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link href=\"/assets/bulma-0.8.2/css/bulma.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/costum.css\" rel=\"stylesheet\">
    <link href=\"/assets/prism.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css\">

    <!--<link href=\"https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css\" rel=\"stylesheet\">-->

    <link rel=\"icon\" href=\"/assets/psb.ico\">

  </head>
  <body class=\"body\">

    ";
        // line 29
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "

    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "

    <section class=\"hero is-dark has-shadow-up\" id=\"footer\">
      <div class=\"hero-body\">
        <div class=\"container has-text-centered\">
          <h5 class=\"subtitle is-6 is-size-7-touch\">Designed and developed by 休止千鹤 Copyright ©  2016-2021 <a class=\"has-text-success\" href=\"https://www.restkhz.com/\">restkhz.com</a></h6>
          <img src=\"/viewscounter/count?t=a\" onerror=\"this.style.display='none'\" width=\"1\" height=\"1\" alt=\"\">    
        </div>
    </div>
    </section>

    <script type=\"text/javascript\" src=\"/assets/costum.js\"></script>
    <script src=\"/assets/prism.js\" ></script>

  </body>
</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        ";
        echo twig_include($this->env, $context, "block_head.html");
        echo "
    ";
    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
    }

    public function getTemplateName()
    {
        return "block_skeleton.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 35,  123 => 34,  116 => 30,  112 => 29,  106 => 15,  86 => 36,  84 => 34,  80 => 32,  78 => 29,  61 => 15,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"\">
  <head>
    <meta charset=\"utf-8\">

    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\"/>
    <meta name=\"author\" content=\"休止千鹤\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta name=\"description\" content=\"{% if post.description %}{{post.description}}{% endif %}\">
    <meta name=\"keywords\" content=\"信息安全,树莓派,学习笔记,博客\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">


    <title>{% block title %}{% endblock %}</title>

    <link href=\"/assets/bulma-0.8.2/css/bulma.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/costum.css\" rel=\"stylesheet\">
    <link href=\"/assets/prism.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css\">

    <!--<link href=\"https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css\" rel=\"stylesheet\">-->

    <link rel=\"icon\" href=\"/assets/psb.ico\">

  </head>
  <body class=\"body\">

    {% block head %}
        {{include('block_head.html')}}
    {% endblock %}


    {% block body %}
    {% endblock %}


    <section class=\"hero is-dark has-shadow-up\" id=\"footer\">
      <div class=\"hero-body\">
        <div class=\"container has-text-centered\">
          <h5 class=\"subtitle is-6 is-size-7-touch\">Designed and developed by 休止千鹤 Copyright ©  2016-2021 <a class=\"has-text-success\" href=\"https://www.restkhz.com/\">restkhz.com</a></h6>
          <img src=\"/viewscounter/count?t=a\" onerror=\"this.style.display='none'\" width=\"1\" height=\"1\" alt=\"\">    
        </div>
    </div>
    </section>

    <script type=\"text/javascript\" src=\"/assets/costum.js\"></script>
    <script src=\"/assets/prism.js\" ></script>

  </body>
</html>
", "block_skeleton.html", "/home/restkhz/桌面/Dev/ugly-blog/ugly-php-blog/ugpf/view/block_skeleton.html");
    }
}
