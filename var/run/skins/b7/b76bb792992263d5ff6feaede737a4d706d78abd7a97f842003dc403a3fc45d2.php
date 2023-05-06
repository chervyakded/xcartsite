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

/* product/details/parts/common.product-description.twig */
class __TwigTemplate_dd5bd9dfe16446fd52452f1be9486dde9ced11ffbb5a5bfd44f94be83c964044 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"description product-description\" ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getFieldMetadata", [0 => "description"], "method")], "method");
        echo " >";
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProcessedDescription", [], "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.product-description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,);
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

<div class=\"description product-description\" {{ this.printTagAttributes(this.product.getFieldMetadata('description'))|raw }} >{{ this.product.getProcessedDescription()|raw }}</div>
", "product/details/parts/common.product-description.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\common.product-description.twig");
    }
}
