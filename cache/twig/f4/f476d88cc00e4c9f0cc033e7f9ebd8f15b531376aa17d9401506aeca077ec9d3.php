<?php

/* partials/base.html.twig */
class __TwigTemplate_a526ef8be83c11e5f55ec5968bdd1f7add5a16ba712f2b84645f0997e62f3cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["github_link_position"] = ((array_key_exists("github_link_position", $context)) ? ((isset($context["github_link_position"]) ? $context["github_link_position"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "position", array())));
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 43
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "\">
    ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 94
        echo " </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 11
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 12
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/theme.css", 1 => 101), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 21
        echo "
        ";
        // line 22
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 24
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 28
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 38
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
        // line 45
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 48
        echo (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "home_url", array())) ? ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "home_url", array())) : ((isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 48)->display($context);
        echo "</a>
                ";
        // line 49
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "            </div>
        </div>
        ";
        // line 52
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "    </nav>
    ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 63
        $this->displayBlock('topbar', $context, $blocks);
        // line 76
        echo "
            ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "
            ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "
        </div>
        ";
        // line 86
        $this->displayBlock('navigation', $context, $blocks);
        // line 87
        echo "    </section>
    ";
    }

    // line 63
    public function block_topbar($context, array $blocks = array())
    {
        if ((((isset($context["github_link_position"]) ? $context["github_link_position"] : null) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 64
            echo "            <div id=\"top-bar\">
                ";
            // line 65
            if (((isset($context["github_link_position"]) ? $context["github_link_position"] : null) == "top")) {
                // line 66
                echo "                <div id=\"top-github-link\">
                ";
                // line 67
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 67)->display($context);
                // line 68
                echo "                </div>
                ";
            }
            // line 70
            echo "
                ";
            // line 71
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
                // line 72
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 72)->display($context);
                // line 73
                echo "                ";
            }
            // line 74
            echo "            </div>
            ";
        }
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "                ";
        if (((isset($context["github_link_position"]) ? $context["github_link_position"] : null) == "bottom")) {
            // line 81
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 81)->display($context);
            // line 82
            echo "                ";
        }
        // line 83
        echo "            ";
    }

    // line 86
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 89
    public function block_analytics($context, array $blocks = array())
    {
        // line 90
        echo "        ";
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "google_analytics_code", array())) {
            // line 91
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 91)->display($context);
            // line 92
            echo "        ";
        }
        // line 93
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 93,  315 => 92,  312 => 91,  309 => 90,  306 => 89,  301 => 86,  297 => 83,  294 => 82,  291 => 81,  288 => 80,  285 => 79,  280 => 77,  274 => 74,  271 => 73,  268 => 72,  266 => 71,  263 => 70,  259 => 68,  257 => 67,  254 => 66,  252 => 65,  249 => 64,  245 => 63,  240 => 87,  238 => 86,  234 => 84,  232 => 79,  229 => 78,  227 => 77,  224 => 76,  222 => 63,  214 => 57,  211 => 56,  206 => 53,  204 => 52,  200 => 50,  198 => 49,  192 => 48,  187 => 45,  184 => 44,  177 => 38,  174 => 37,  171 => 36,  168 => 35,  165 => 34,  162 => 33,  159 => 32,  156 => 31,  150 => 28,  147 => 27,  144 => 26,  141 => 25,  138 => 24,  135 => 23,  133 => 22,  130 => 21,  127 => 20,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  112 => 15,  107 => 40,  105 => 31,  102 => 30,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  84 => 10,  82 => 9,  74 => 8,  71 => 7,  68 => 6,  62 => 94,  59 => 89,  57 => 56,  54 => 55,  52 => 44,  46 => 43,  43 => 42,  41 => 6,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set github_link_position = github_link_position is defined ? github_link_position : theme_config.github.position %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"{{ base_url_absolute}}/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{{ base_url_absolute}}/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/theme.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/featherlight.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}

        {{ assets.css() }}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/featherlight.min.js') %}
        {% do assets.addJs('theme://js/clipboard.min.js') %}
        {% do assets.addJs('theme://js/jquery.scrollbar.min.js') %}
        {% do assets.addJs('theme://js/learn.js') %}
        {{ assets.js() }}
    {% endblock %}

    {% endblock %}
</head>
<body class=\"searchbox-hidden {{ page.header.body_classes }}\" data-url=\"{{ page.route }}\">
    {% block sidebar %}
    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">{% include 'partials/logo.html.twig' %}</a>
                {% include 'partials/search.html.twig' %}
            </div>
        </div>
        {% include 'partials/sidebar.html.twig' %}
    </nav>
    {% endblock %}

    {% block body %}
    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            {% block topbar %}{% if  github_link_position == 'top' or config.plugins.breadcrumbs.enabled %}
            <div id=\"top-bar\">
                {% if  github_link_position == 'top' %}
                <div id=\"top-github-link\">
                {% include 'partials/github_link.html.twig' %}
                </div>
                {% endif %}

                {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
                {% endif %}
            </div>
            {% endif %}{% endblock %}

            {% block content %}{% endblock %}

            {% block footer %}
                {% if  github_link_position == 'bottom' %}
                {% include 'partials/github_note.html.twig' %}
                {% endif %}
            {% endblock %}

        </div>
        {% block navigation %}{% endblock %}
    </section>
    {% endblock %}
    {% block analytics %}
        {% if theme_config.google_analytics_code %}
        {% include 'partials/analytics.html.twig' %}
        {% endif %}
    {% endblock %}
 </body>
</html>
", "partials/base.html.twig", "/Users/home/GitHub/docs-idx-first-draft/user/themes/learn2/templates/partials/base.html.twig");
    }
}
