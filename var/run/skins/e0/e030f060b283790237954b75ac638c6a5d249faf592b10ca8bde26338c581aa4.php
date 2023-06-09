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

/* product/details/parts/common.product-main-attributes.twig */
class __TwigTemplate_c3d2614fafb2516fec05866d7d888178f61d7c2617ce5ba020f3a7285d79b2a7 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getAttrSepTab", [], "method")) {
            // line 8
            echo "  <ul class=\"extra-fields other-attributes\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.common.product-attributes.attributes"]]), "html", null, true);
            echo "
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.product-main-attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
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
 # Product details attributes block
 #
 # @ListChild (list=\"product.details.page.tab.description\", weight=\"100\")
 #}

{% if not this.product.getAttrSepTab() %}
  <ul class=\"extra-fields other-attributes\">
    {{ widget_list('product.details.common.product-attributes.attributes') }}
  </ul>
{% endif %}
", "product/details/parts/common.product-main-attributes.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\common.product-main-attributes.twig");
    }
}
