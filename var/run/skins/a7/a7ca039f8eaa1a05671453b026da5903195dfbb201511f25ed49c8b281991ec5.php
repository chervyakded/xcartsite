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

/* 404.twig */
class __TwigTemplate_0584651a523534788ea01b08c244390ed89b4289d779456f5a2991c4b84d075c extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<h2 class=\"page-not-found\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Page not found"]), "html", null, true);
        echo "</h2>

";
        // line 6
        if (($this->getAttribute(($context["this"] ?? null), "getPageType", [], "method") == "product")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "404.product"]]), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 8
($context["this"] ?? null), "getPageType", [], "method") == "category")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "404.category"]]), "html", null, true);
            echo "
";
        } else {
            // line 11
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "404.default"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  45 => 9,  43 => 8,  38 => 7,  36 => 6,  30 => 4,);
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
 # 404 Page not found widget
 #}
<h2 class=\"page-not-found\">{{ t('Page not found') }}</h2>

{% if this.getPageType() == 'product' %}
  {{ widget_list('404.product') }}
{% elseif this.getPageType() == 'category' %}
  {{ widget_list('404.category') }}
{% else %}
  {{ widget_list('404.default') }}
{% endif %}", "404.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\404.twig");
    }
}
