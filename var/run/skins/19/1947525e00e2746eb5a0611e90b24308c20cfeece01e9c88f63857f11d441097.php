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

/* product/details/parts/common.briefDescription.twig */
class __TwigTemplate_077a82223b2edcddd66c21e6ee95ec72a58b7b2f3b231d24a9f80c14ad750499 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "briefDescription", []) || $this->getAttribute(($context["this"] ?? null), "isPreview", [], "method"))) {
            // line 8
            echo "  <div class=\"brief-descr product-description\" ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getFieldMetadata", [0 => "briefDescription"], "method")], "method");
            echo " >";
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProcessedBriefDescription", [], "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.briefDescription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  33 => 7,  30 => 6,);
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
 # Rating value in product info
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"18\")
 #}

{% if this.product.briefDescription or this.isPreview() %}
  <div class=\"brief-descr product-description\" {{ this.printTagAttributes(this.product.getFieldMetadata('briefDescription'))|raw }} >{{ this.product.getProcessedBriefDescription()|raw }}</div>
{% endif %}
", "product/details/parts/common.briefDescription.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\common.briefDescription.twig");
    }
}
