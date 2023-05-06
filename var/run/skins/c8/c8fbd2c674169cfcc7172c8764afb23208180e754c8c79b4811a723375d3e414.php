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

/* C:\OpenServer\domains\xcartsite\skins\admin\modules\CDev\PINCodes\product\pins_status.twig */
class __TwigTemplate_900ddd0a947f2885d505485b270a40c8d812fcba520e24e71db8b5c1809bc6af extends \XLite\Core\Templating\Twig\Template
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
<li class=\"pin-codes-status sold\">
  ";
        // line 9
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Label", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sold PINs"]), "value" => ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getSoldPinCodesCount", [], "method") . " ")]]), "html", null, true);
        echo "
</li>
";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getAutoPinCodes", [], "method")) {
            // line 12
            echo "<li class=\"pin-codes-status remaining\">
    ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Label", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Remaining PINs"]), "value" => ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getRemainingPinCodesCount", [], "method") . " ")]]), "html", null, true);
            echo "
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\CDev\\PINCodes\\product\\pins_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  42 => 12,  40 => 11,  34 => 9,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\CDev\\PINCodes\\product\\pins_status.twig", "");
    }
}
