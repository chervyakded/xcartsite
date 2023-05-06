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

/* C:\OpenServer\domains\xcartsite\skins\customer\modules\XPay\XPaymentsCloud\button\checkout_wallet.form.twig */
class __TwigTemplate_d737737618560ffbd96a6d671e7e2971e48cdf0ab741cbf4dce3ec6d288644b5 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        $this->startForm("\\XLite\\Module\\XPay\\XPaymentsCloud\\View\\Form\\Checkout\\Wallet", ["className" => $this->getAttribute(($context["this"] ?? null), "getFormClass", [], "method"), "walletId" => $this->getAttribute(($context["this"] ?? null), "getWalletId", [], "method")]);        $this->endForm();    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XPay\\XPaymentsCloud\\button\\checkout_wallet.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XPay\\XPaymentsCloud\\button\\checkout_wallet.form.twig", "");
    }
}
