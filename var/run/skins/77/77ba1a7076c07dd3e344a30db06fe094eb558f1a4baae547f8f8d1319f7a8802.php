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

/* product/details/parts/common.add-button.twig */
class __TwigTemplate_476c49d2349c0e42a9f251ce5bb0a7659d885cdece43eec103d3dad81c68c68b extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Product\\Details\\Customer\\AddButton", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.add-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  30 => 9,);
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
 #
 # @ListChild (list=\"product.details.page.info.form.buttons-added.cart-buttons\", weight=\"30\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons-added.cart-buttons\", weight=\"30\")
 # @ListChild (list=\"product.details.page.info.form.buttons.cart-buttons\", weight=\"20\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons.cart-buttons\", weight=\"20\")
 #}

{{ widget('\\\\XLite\\\\View\\\\Product\\\\Details\\\\Customer\\\\AddButton', product=this.product) }}
", "product/details/parts/common.add-button.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\common.add-button.twig");
    }
}
