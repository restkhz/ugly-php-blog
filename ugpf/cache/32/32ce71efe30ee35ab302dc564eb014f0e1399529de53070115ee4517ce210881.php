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

/* rss.html */
class __TwigTemplate_52dab01ffe9fdcbba3fc19e56f7a6f0cc1a49e7a5c71c65eb7ecffea3c8de253 extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" version=\"2.0\">
    <channel>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 4));
        echo "</title>
        <description>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "subtitle", [], "any", false, false, false, 5));
        echo "</description>
        <icon>";
        // line 6
        echo twig_escape_filter($this->env, ($context["domainName"] ?? null), "html", null, true);
        echo "favicon.ico</icon>
        <link>";
        // line 7
        echo twig_escape_filter($this->env, ($context["domainName"] ?? null), "html", null, true);
        echo "</link>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "            <item>
                <title>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</title>
                <pubDate>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "create_time", [], "any", false, false, false, 11), "html", null, true);
            echo "</pubDate>
                <link>";
            // line 12
            echo twig_escape_filter($this->env, ($context["domainName"] ?? null), "html", null, true);
            echo "post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 12), "html", null, true);
            echo "</link>
                <content:encoded>
                    
                    <![CDATA[";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 15), "html", null, true);
            echo "]]>
                    
                </content:encoded>
            </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </channel>
</rss>";
    }

    public function getTemplateName()
    {
        return "rss.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  81 => 15,  73 => 12,  69 => 11,  65 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" version=\"2.0\">
    <channel>
        <title>{{site.title | e }}</title>
        <description>{{site.subtitle | e }}</description>
        <icon>{{domainName}}favicon.ico</icon>
        <link>{{domainName}}</link>
        {% for post in posts %}
            <item>
                <title>{{post.title}}</title>
                <pubDate>{{post.create_time}}</pubDate>
                <link>{{domainName}}post/{{post.url}}</link>
                <content:encoded>
                    
                    <![CDATA[{{post.content_html}}]]>
                    
                </content:encoded>
            </item>
        {% endfor %}
    </channel>
</rss>", "rss.html", "/home/restkhz/桌面/Dev/ugly-blog/ugly-php-blog/ugpf/view/rss.html");
    }
}
