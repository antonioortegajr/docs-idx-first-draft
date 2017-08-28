<?php

/* partials/tools-direct-install.html.twig */
class __TwigTemplate_29bcb8e726bb01e5a680758c6ae771f3d04e303dc87920ca6bc4439daae3b915 extends Twig_Template
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
        echo "<h1>
    Direct install of packages
</h1>

<div class=\"direct-install-content\">

\t<h2>Install a zip package by uploading it</h2>

\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
        echo "/tools/task:directInstall\" method=\"post\" enctype=\"multipart/form-data\">
\t    <input type=\"file\" name=\"uploaded_file\" id=\"uploaded_file\" required accept=\"application/zip, application/octet-stream\">
\t    <input type=\"submit\" value=\"Upload and install\" name=\"submit\" class=\"button\">
\t    <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t\t";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
\t</form>


\t<h2>Install a zip package from a remote location</h2>

\t<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
        echo "/tools/task:directInstall\" method=\"post\">
\t\t<input type=\"text\" name=\"file_path\" required />
\t    <input type=\"submit\" value=\"Install\" name=\"submit\" class=\"button\">
        <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t    ";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
\t</form>


</div>

";
    }

    public function getTemplateName()
    {
        return "partials/tools-direct-install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 25,  46 => 20,  37 => 14,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>
    Direct install of packages
</h1>

<div class=\"direct-install-content\">

\t<h2>Install a zip package by uploading it</h2>

\t<form action=\"{{ base_url_relative }}/tools/task:directInstall\" method=\"post\" enctype=\"multipart/form-data\">
\t    <input type=\"file\" name=\"uploaded_file\" id=\"uploaded_file\" required accept=\"application/zip, application/octet-stream\">
\t    <input type=\"submit\" value=\"Upload and install\" name=\"submit\" class=\"button\">
\t    <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t\t{{ nonce_field('admin-form', 'admin-nonce')|raw }}
\t</form>


\t<h2>Install a zip package from a remote location</h2>

\t<form action=\"{{ base_url_relative }}/tools/task:directInstall\" method=\"post\">
\t\t<input type=\"text\" name=\"file_path\" required />
\t    <input type=\"submit\" value=\"Install\" name=\"submit\" class=\"button\">
        <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t    {{ nonce_field('admin-form', 'admin-nonce')|raw }}
\t</form>


</div>

", "partials/tools-direct-install.html.twig", "/Users/home/GitHub/docs-idx-first-draft/user/plugins/admin/themes/grav/templates/partials/tools-direct-install.html.twig");
    }
}
