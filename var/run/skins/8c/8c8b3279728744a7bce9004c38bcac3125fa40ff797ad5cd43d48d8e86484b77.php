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

/* C:\OpenServer\domains\xcartsite\skins\admin\pager\parts\items_total.twig */
class __TwigTemplate_0df44157ae5bb77ef4ef91cc549773eec60dd5b88fa5147a8ef6fce1a95f7323 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isItemsPerPageVisible", [], "method")) {
            // line 8
            echo "  <div class=\"pager-items-total\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Items"]), "html", null, true);
            echo ":
    <span class=\"begin-record-number\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBeginRecordNumber", [], "method"), "html", null, true);
            echo "</span>
    &ndash;
    <span class=\"end-record-number\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEndRecordNumber", [], "method"), "html", null, true);
            echo "</span> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["of"]), "html", null, true);
            echo " <span class=\"records-count\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemsTotal", [], "method"), "html", null, true);
            echo "</span>";
            if ($this->getAttribute(($context["this"] ?? null), "isItemsPerPageSelectorVisible", [], "method")) {
                echo "<span>, <input type=\"text\" value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemsPerPage", [], "method"), "html", null, true);
                echo "\" class=\"page-length\" /> ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["per page"]), "html", null, true);
                echo " </span>";
            }
            // line 13
            echo "  </div>
";
        }
        // line 15
        echo "
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\pager\\parts\\items_total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 13,  47 => 12,  42 => 10,  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\pager\\parts\\items_total.twig", "");
    }
}
