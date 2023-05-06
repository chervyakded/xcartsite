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

/* modules/XPay/XPaymentsCloud/details/trial_period.twig */
class __TwigTemplate_878c1b8422db112372408082269d29baf83dd796a741db6fdb4cca6f867f5566 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "hasTrialPeriod", [], "method")) {
            // line 10
            echo "  <li class=\"product-price-base xpayments-trial-period-notice\">
    <span class=\"price product-price xpayments-trial-period-notice-text\">(";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["trial period"]), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getXpaymentsTrialDescription", [], "method"), "html", null, true);
            echo ")</span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XPay/XPaymentsCloud/details/trial_period.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  35 => 10,  33 => 9,  30 => 8,);
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
 # Trial period description
 #
 #
 # @ListChild (list=\"product.plain_price\", weight=\"100\")
 # @ListChild (list=\"product.plain_price_only\", weight=\"100\")
#}

{% if this.hasTrialPeriod() %}
  <li class=\"product-price-base xpayments-trial-period-notice\">
    <span class=\"price product-price xpayments-trial-period-notice-text\">({{ t('trial period') }}: {{ this.getXpaymentsTrialDescription() }})</span>
  </li>
{% endif %}
", "modules/XPay/XPaymentsCloud/details/trial_period.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XPay\\XPaymentsCloud\\details\\trial_period.twig");
    }
}
