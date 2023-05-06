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

/* modules/CDev/MarketPrice/details.twig */
class __TwigTemplate_9357b9bec68112f18ae4c4e4475eab39e168efd785eff15ccdf657ee00ee333c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isShowMarketPrice", [], "method")) {
            // line 8
            echo "  <div class=\"product-details-market-price\">
    <div class=\"text\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "market_price.text", "type" => "nested"]]), "html", null, true);
            echo "
    </div>
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "market_price.label", "type" => "nested"]]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/MarketPrice/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  39 => 10,  35 => 8,  33 => 7,  30 => 6,);
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
 # Product market price
 #
 # @ListChild (list=\"product.plain_price.before\", weight=\"45\")
 #}

{% if this.isShowMarketPrice() %}
  <div class=\"product-details-market-price\">
    <div class=\"text\">
      {{ widget_list('market_price.text', type='nested') }}
    </div>
    {{ widget_list('market_price.label', type='nested') }}
  </div>
{% endif %}
", "modules/CDev/MarketPrice/details.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\MarketPrice\\details.twig");
    }
}
