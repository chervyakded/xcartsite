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

/* C:\OpenServer\domains\xcartsite\skins\admin\modules\XPay\XPaymentsCloud\product\is_subscription_plan.twig */
class __TwigTemplate_6f053d92372a8524af866afb5b01d14f586fbfa6558fa85c7b549dc61acb2ab8 extends \XLite\Core\Templating\Twig\Template
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
        // line 11
        echo "
<tr style=\"display: none;\">
  <td class=\"name-attribute\">&nbsp;</td>
  <td class=\"star\">&nbsp;</td>
  <td class=\"value-attribute\">";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isXpaymentsSubscriptionPlan", [], "method")) {
            echo "<div id=\"product-is-xpayments-subscription-plan\"></div>";
        }
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XPay\\XPaymentsCloud\\product\\is_subscription_plan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  30 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XPay\\XPaymentsCloud\\product\\is_subscription_plan.twig", "");
    }
}
