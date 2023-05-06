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

/* C:\OpenServer\domains\xcartsite\skins\crisp_white\customer\product\search\parts\search_options_toggler_desktop.twig */
class __TwigTemplate_3f349d0e10c8d2ec1409f8937251743e5018c21e06a89b8854787b218c505675 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<td class=\"less-search-options-cell hidden-xs hidden-sm";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "showAdvancedPanel", [], "method")) {
            echo " expanded";
        }
        echo "\">
  <a href=\"javascript:void(0);\" class=\"less\" onclick=\"javascript:jQuery('.less-search-options-cell').toggleClass('expanded');jQuery('#advanced_search_options').toggle()\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Less search options"]), "html", null, true);
        echo "</a>
  <a href=\"javascript:void(0);\" class=\"more\" onclick=\"javascript:jQuery('.less-search-options-cell').toggleClass('expanded');jQuery('#advanced_search_options').toggle()\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["More search options"]), "html", null, true);
        echo "</a>
</td>
";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\product\\search\\parts\\search_options_toggler_desktop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  33 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\product\\search\\parts\\search_options_toggler_desktop.twig", "");
    }
}
