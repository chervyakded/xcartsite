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

/* product/quantity/body.twig */
class __TwigTemplate_5293b5987ae329adceabf0be55432591bd7b4b4adadf5d4b6f18c51e608a4eb2 extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCSSClass", [], "method"), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFingerprint", [], "method"), "html", null, true);
        echo "\">
  ";
        // line 5
        if (( !$this->getAttribute(($context["this"] ?? null), "isAllStockInCart", [], "method") && $this->getAttribute(($context["this"] ?? null), "isProductAvailableForSale", [], "method"))) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Qty"]), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Product\\QuantityBox", "fieldValue" => $this->getAttribute(($context["this"] ?? null), "getQuantity", [], "method"), "product" => $this->getAttribute(($context["this"] ?? null), "getProduct", [], "method"), "maxValue" => $this->getAttribute(($context["this"] ?? null), "getMaxQuantity", [], "method")]]), "html", null, true);
            echo "
  ";
        }
        // line 8
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "product/quantity/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  39 => 6,  37 => 5,  30 => 4,);
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
 # Product quantity widget (for customer area)
 #}
<span class=\"{{ this.getCSSClass() }} {{ this.getFingerprint() }}\">
  {% if not this.isAllStockInCart() and this.isProductAvailableForSale() %}
    {{ t('Qty') }}: {{ widget('\\\\XLite\\\\View\\\\Product\\\\QuantityBox', fieldValue=this.getQuantity(), product=this.getProduct(), maxValue=this.getMaxQuantity()) }}
  {% endif %}
</span>
", "product/quantity/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\quantity\\body.twig");
    }
}
