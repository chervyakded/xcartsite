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

/* modules/XC/Reviews/reviews_tab/parts/tab.all_reviews_link.twig */
class __TwigTemplate_24b2078097cadf412b5f9bbc290ed75402376fe1ebe54fc3b0509339707c8f6e extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayReadAllReviewsLink", [], "method")) {
            // line 8
            echo "  <div class=\"link\">
    <div class=\"line\"></div>
    <a href=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "product_reviews", "", ["product_id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProductId", [], "method"), "category_id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getCategoryId", [], "method")]]), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Read all reviews about the product"]), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getReviewsCount", [], "method"), "html", null, true);
            echo ")</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/reviews_tab/parts/tab.all_reviews_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 8,  33 => 7,  30 => 6,);
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
 # Read all reviews link
 #
 # @ListChild (list=\"product.reviews.tab\", weight=\"500\")
 #}

{% if this.isDisplayReadAllReviewsLink() %}
  <div class=\"link\">
    <div class=\"line\"></div>
    <a href=\"{{ url('product_reviews', '', {'product_id': this.product.getProductId(), 'category_id': this.product.getCategoryId()}) }}\">{{ t('Read all reviews about the product') }} ({{ this.product.getReviewsCount() }})</a>
  </div>
{% endif %}
", "modules/XC/Reviews/reviews_tab/parts/tab.all_reviews_link.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\Reviews\\reviews_tab\\parts\\tab.all_reviews_link.twig");
    }
}
