<?php

/* partials/nav-user-details.html.twig */
class __TwigTemplate_91320078b1ff3afc603d8b5c9b00e028539ba5c0e54e1113de6ac66a645d27c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
<div id=\"admin-user-details\">
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
        echo "/user/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "username", array()));
        echo "\">
        ";
        // line 6
        $this->loadTemplate("partials/nav-user-avatar.html.twig", "partials/nav-user-details.html.twig", 6)->display($context);
        // line 7
        echo "
        <div class=\"admin-user-names\">
            <h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "fullname", array()));
        echo "</h4>
            <h5>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "title", array()));
        echo "</h5>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  37 => 9,  33 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
<div id=\"admin-user-details\">
    <a href=\"{{ base_url_relative }}/user/{{ admin.user.username|e }}\">
        {% include 'partials/nav-user-avatar.html.twig' %}

        <div class=\"admin-user-names\">
            <h4>{{ admin.user.fullname|e }}</h4>
            <h5>{{ admin.user.title|e }}</h5>
        </div>
    </a>
</div>
", "partials/nav-user-details.html.twig", "/Users/home/GitHub/docs-idx-first-draft/user/plugins/admin/themes/grav/templates/partials/nav-user-details.html.twig");
    }
}
