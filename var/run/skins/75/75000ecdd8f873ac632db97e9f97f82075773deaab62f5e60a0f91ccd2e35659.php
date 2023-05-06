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

/* product/details/parts/common.form.twig */
class __TwigTemplate_b736a097d01d8f11f3b51ce73d020ceef4adece7032c95beb36cc677c52f7d9d extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Product\\AddToCart", ["product" => $this->getAttribute(($context["this"] ?? null), "product", []), "className" => "product-details", "validationEngine" => "1"]);        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.page.info.form"]]), "html", null, true);
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "product/details/parts/common.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  33 => 7,  30 => 6,);
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
 # Product details main form (qty/buttons)
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"50\")
 #}

{% form '\\\\XLite\\\\View\\\\Form\\\\Product\\\\AddToCart' with {product: this.product, className: 'product-details', validationEngine: '1'} %}
  {{ widget_list('product.details.page.info.form') }}
{% endform %}
", "product/details/parts/common.form.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\common.form.twig");
    }
}
