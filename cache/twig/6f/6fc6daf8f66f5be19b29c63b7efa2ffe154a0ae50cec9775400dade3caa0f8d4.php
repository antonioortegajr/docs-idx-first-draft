<?php

/* tools.html.twig */
class __TwigTemplate_39afe9a087b0b6b68eeddeddd3730689b0ef6470c0a8d13995501f809aa1916f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "tools.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tools_slug"] = twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "basename", array()));
        // line 4
        if (((isset($context["tools_slug"]) ? $context["tools_slug"] : null) == "tools")) {
            $context["tools_slug"] = "direct-install";
        }
        // line 5
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS") . ": ") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", (isset($context["tools_slug"]) ? $context["tools_slug"] : null))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = array())
    {
        // line 8
        echo "    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", (isset($context["tools_slug"]) ? $context["tools_slug"] : null))))), "html", null, true);
        echo "</h1>
";
    }

    // line 11
    public function block_content_top($context, array $blocks = array())
    {
        // line 12
        echo "    <ul class=\"tab-bar\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "tools", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 14
            echo "            <li ";
            if (((isset($context["tools_slug"]) ? $context["tools_slug"] : null) == $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["tool"]))) {
                echo "class=\"active\"";
            }
            echo ">
                ";
            // line 15
            if (((isset($context["tools_slug"]) ? $context["tools_slug"] : null) == $context["tool"])) {
                echo "<span>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/tools/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["tool"]), "html", null, true);
                echo "\">";
            }
            // line 16
            echo "                ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["tool"])), "html", null, true);
            echo "
                ";
            // line 17
            if (((isset($context["tools_slug"]) ? $context["tools_slug"] : null) == $context["tool"])) {
                echo "</span>";
            } else {
                echo "</a>";
            }
            // line 18
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.tools", 1 => "admin.super"))) {
            // line 25
            echo "        ";
            try {
                $this->loadTemplate((("partials/tools-" . (isset($context["tools_slug"]) ? $context["tools_slug"] : null)) . ".html.twig"), "tools.html.twig", 25)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 26
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  107 => 25,  104 => 24,  101 => 23,  96 => 20,  89 => 18,  83 => 17,  78 => 16,  68 => 15,  61 => 14,  57 => 13,  54 => 12,  51 => 11,  42 => 8,  39 => 7,  35 => 1,  33 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set tools_slug = uri.basename|e %}
{% if tools_slug == 'tools' %}{% set tools_slug = 'direct-install' %}{% endif %}
{% set title = \"PLUGIN_ADMIN.TOOLS\"|tu ~ \": \" ~ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|tu %}

{% block titlebar %}
    <h1><i class=\"fa fa-fw fa-wrench\"></i> {{ \"PLUGIN_ADMIN.TOOLS\"|tu }} - {{ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|tu }}</h1>
{% endblock %}

{% block content_top %}
    <ul class=\"tab-bar\">
        {% for tool in admin.tools %}
            <li {% if tools_slug == tool|hyphenize %}class=\"active\"{% endif %}>
                {% if tools_slug == tool %}<span>{% else %}<a href=\"{{ base_url_relative }}/tools/{{tool|hyphenize}}\">{% endif %}
                {{ tool|tu|capitalize }}
                {% if tools_slug == tool %}</span>{% else %}</a>{% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}

{% block content %}
    {% if authorize(['admin.tools', 'admin.super']) %}
        {% include 'partials/tools-' ~ tools_slug ~ '.html.twig' ignore missing %}
    {% endif %}
{% endblock %}

", "tools.html.twig", "/Users/home/GitHub/docs-idx-first-draft/user/plugins/admin/themes/grav/templates/tools.html.twig");
    }
}
