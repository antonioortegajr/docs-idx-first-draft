<?php

/* partials/nav-user-avatar.html.twig */
class __TwigTemplate_0115248ae732aeec5b963fa1d28ee70e8b16135c09b1fc9eecd9ce1652c263d0 extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "avatarUrl", array(), "method"), "html", null, true);
        echo "?s=47\" />
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img src=\"{{ admin.user.avatarUrl() }}?s=47\" />
", "partials/nav-user-avatar.html.twig", "/Users/home/GitHub/docs-idx-first-draft/user/plugins/admin/themes/grav/templates/partials/nav-user-avatar.html.twig");
    }
}
