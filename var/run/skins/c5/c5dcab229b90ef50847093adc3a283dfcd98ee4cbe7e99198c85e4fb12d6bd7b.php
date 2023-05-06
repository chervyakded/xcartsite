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

/* product/add_button/body.twig */
class __TwigTemplate_560c1aa31bf4789155db4136e8158bbd6da5bd7c0ffc0cd3d4f9421c18768cf0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"add-button-wrapper ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFingerprint", [], "method"), "html", null, true);
        echo "\">
  ";
        // line 5
        if (( !$this->getAttribute(($context["this"] ?? null), "isAllStockInCart", [], "method") && $this->getAttribute(($context["this"] ?? null), "isProductAvailableForSale", [], "method"))) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getAddButtonLabel", [], "method")]), "style" => "regular-main-button add2cart"]]), "html", null, true);
            echo "
  ";
        } elseif (($this->getAttribute(        // line 7
($context["this"] ?? null), "isAllStockInCart", [], "method") && $this->getAttribute(($context["this"] ?? null), "isProductAvailableForSale", [], "method"))) {
            // line 8
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["View cart"]), "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "cart"]), "style" => "regular-main-button"]]), "html", null, true);
            echo "
  ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "product/add_button/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 8,  42 => 7,  37 => 6,  35 => 5,  30 => 4,);
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
 # Add to bag buttons
 #}
<div class=\"add-button-wrapper {{ this.getFingerprint() }}\">
  {% if not this.isAllStockInCart() and this.isProductAvailableForSale() %}
    {{ widget('\\\\XLite\\\\View\\\\Button\\\\Submit', label=t(this.getAddButtonLabel()), style='regular-main-button add2cart') }}
  {% elseif this.isAllStockInCart() and this.isProductAvailableForSale() %}
    {{ widget('\\\\XLite\\\\View\\\\Button\\\\Link', label=t('View cart'), location=url('cart') , style='regular-main-button') }}
  {% endif %}
</div>
", "product/add_button/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\add_button\\body.twig");
    }
}
