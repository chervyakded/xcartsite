<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/CDev/FileAttachments/file_attachments.twig */
class __TwigTemplate_98f78e600e31e75e43e8d9cb4bbd736c0bfdfc7dba8c413b22afb6ea921e8a1b extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.page.tab.description.file-attachments", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/CDev/FileAttachments/file_attachments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{##
 # Attachments list
 #
 # @ListChild (list=\"product.details.page.tab.description\", weight=\"50\")
 #}
{{ widget_list('product.details.page.tab.description.file-attachments', product=this.product) }}", "modules/CDev/FileAttachments/file_attachments.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\FileAttachments\\file_attachments.twig");
    }
}
