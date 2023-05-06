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

/* product/details/stock/body.twig */
class __TwigTemplate_bf3211f3f753d406c796eb86e62d24db4d4031d80ddc48a00cb7bbb42161afcc extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-stock ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFingerprint", [], "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "getItemsInCart", [], "method")) {
            // line 7
            echo "    <p class=\"product-added-note\">
      <i class=\"icon-ok-mark\"></i>
      ";
            // line 9
            echo $this->getAttribute(($context["this"] ?? null), "getItemsInCartMessage", [], "method");
            echo "
    </p>
  ";
        }
        // line 12
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isInStock", [], "method")) {
            // line 13
            echo "    <span class=\"stock-level product-in-stock\">
      ";
            // line 14
            if ($this->getAttribute(($context["this"] ?? null), "isShowStockWarning", [], "method")) {
                // line 15
                echo "        <span class=\"product-items-available low-stock\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Only X left in stock", ["X" => $this->getAttribute(($context["this"] ?? null), "getAvailableAmount", [], "method")]]), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 17
                echo "        <span class=\"in-stock-label\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["In stock"]), "html", null, true);
                echo "</span>
        <span class=\"product-items-available\">(";
                // line 18
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X items available", ["count" => $this->getAttribute(($context["this"] ?? null), "getAvailableAmount", [], "method")]]), "html", null, true);
                echo ")</span>
      ";
            }
            // line 20
            echo "    </span>
  ";
        } else {
            // line 22
            echo "    ";
            if ($this->getAttribute(($context["this"] ?? null), "isOutOfStock", [], "method")) {
                // line 23
                echo "      <span class=\"stock-level product-out-of-stock\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOutOfStockMessage", [], "method"), "html", null, true);
                echo "</span>
    ";
            }
            // line 25
            echo "  ";
        }
        // line 26
        echo "
  ";
        // line 27
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.stock.info"]]), "html", null, true);
        echo "

  
</div>
<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "product/details/stock/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  89 => 26,  86 => 25,  80 => 23,  77 => 22,  73 => 20,  68 => 18,  63 => 17,  57 => 15,  55 => 14,  52 => 13,  49 => 12,  43 => 9,  39 => 7,  37 => 6,  33 => 5,  30 => 4,);
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
 # Product stock
 #}

<div class=\"product-stock {{ this.getFingerprint() }}\">
  {% if this.getItemsInCart() %}
    <p class=\"product-added-note\">
      <i class=\"icon-ok-mark\"></i>
      {{ this.getItemsInCartMessage() | raw}}
    </p>
  {% endif %}
  {% if this.isInStock() %}
    <span class=\"stock-level product-in-stock\">
      {% if this.isShowStockWarning() %}
        <span class=\"product-items-available low-stock\">{{ t('Only X left in stock', {'X': this.getAvailableAmount()}) }}</span>
      {% else %}
        <span class=\"in-stock-label\">{{ t('In stock') }}</span>
        <span class=\"product-items-available\">({{ t('X items available', {'count': this.getAvailableAmount()}) }})</span>
      {% endif %}
    </span>
  {% else %}
    {% if this.isOutOfStock() %}
      <span class=\"stock-level product-out-of-stock\">{{ this.getOutOfStockMessage() }}</span>
    {% endif %}
  {% endif %}

  {{ widget_list('product.stock.info') }}

  
</div>
<div class=\"clearfix\"></div>
", "product/details/stock/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\stock\\body.twig");
    }
}
