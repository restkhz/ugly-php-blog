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

/* 404.html */
class __TwigTemplate_84b1f31c6fa588a67567f16527f112127fcf03cc58c287824348a94a78d00ffa extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"\">
  <head>
    <meta charset=\"utf-8\">

    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\"/>
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta http-equiv=\"refresh\" content=\"3;url=/\"/>


    <title>404 Ooops!</title>

    <link href=\"/assets/glitch.css\" rel=\"stylesheet\">
    <link href=\"/assets/bulma-0.8.2/css/bulma.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/costum.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css\">

    <link rel=\"icon\" href=\"assets/psb.ico\">

  </head>
  <body>



    <section class=\"hero is-fullheight is-dark\" style=\"background:url(/assets/cyberpunk-3723725_1920.jpg);background-size:100% 100%;\">


        <div class=\"hero-body\">
          <div class=\"container has-text-centered\">
              <h1 class=\"title is-size-1-desktop is-size-3-touch glitch\" data-text=\"[ 4 0 4 ]\"> [ 4 0 4 ] </h1>
              <h2 class=\"subtitle is-size-6-touch\">&gt;&nbsp;PAGE: &nbsp; ";
        // line 32
        echo twig_escape_filter($this->env, ($context["class"] ?? null));
        echo " NOT FOUND&nbsp;&lt;</h2>
              <h2 class=\"subtitle is-size-6-touch\">You will be redirect to Index after 3s</h2>
          </div>
        </div>
    </section>



  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"\">
  <head>
    <meta charset=\"utf-8\">

    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\"/>
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta http-equiv=\"refresh\" content=\"3;url=/\"/>


    <title>404 Ooops!</title>

    <link href=\"/assets/glitch.css\" rel=\"stylesheet\">
    <link href=\"/assets/bulma-0.8.2/css/bulma.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/costum.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css\">

    <link rel=\"icon\" href=\"assets/psb.ico\">

  </head>
  <body>



    <section class=\"hero is-fullheight is-dark\" style=\"background:url(/assets/cyberpunk-3723725_1920.jpg);background-size:100% 100%;\">


        <div class=\"hero-body\">
          <div class=\"container has-text-centered\">
              <h1 class=\"title is-size-1-desktop is-size-3-touch glitch\" data-text=\"[ 4 0 4 ]\"> [ 4 0 4 ] </h1>
              <h2 class=\"subtitle is-size-6-touch\">&gt;&nbsp;PAGE: &nbsp; {{class |e }} NOT FOUND&nbsp;&lt;</h2>
              <h2 class=\"subtitle is-size-6-touch\">You will be redirect to Index after 3s</h2>
          </div>
        </div>
    </section>



  </body>
</html>
", "404.html", "/home/restkhz/桌面/Dev/ugly-blog/ugly-php-blog/ugpf/view/404.html");
    }
}
