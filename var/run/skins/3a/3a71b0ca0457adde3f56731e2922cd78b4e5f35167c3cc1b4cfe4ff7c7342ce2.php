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

/* modules/CDev/Paypal/product/details/parts/express_checkout.twig */
class __TwigTemplate_5ed580a8b2f10388001ef66625c45572f89ee5bdf0c532afb146a0ceb2e46b8b extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Product\\ExpressCheckoutButton", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/product/details/parts/express_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,);
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
 # Express checkout
 #
 # @ListChild (list=\"product.details.page.info.form.buttons-added.cart-buttons\", zone=\"customer\", weight=\"150\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons-added.cart-buttons\", zone=\"customer\", weight=\"150\")
 # @ListChild (list=\"product.details.page.info.form.buttons.cart-buttons\", zone=\"customer\", weight=\"150\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons.cart-buttons\", zone=\"customer\", weight=\"150\")
 #}
{{ widget('\\\\XLite\\\\Module\\\\CDev\\\\Paypal\\\\View\\\\Product\\\\ExpressCheckoutButton', product=this.product) }}

", "modules/CDev/Paypal/product/details/parts/express_checkout.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\Paypal\\product\\details\\parts\\express_checkout.twig");
    }
}
