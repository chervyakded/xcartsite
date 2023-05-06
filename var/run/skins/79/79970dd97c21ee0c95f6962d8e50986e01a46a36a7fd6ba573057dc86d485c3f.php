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

/* modules/XC/Reviews/reviews_tab/parts/tab.reviews_list_header.twig */
class __TwigTemplate_d345bfe43be96371f2446dffea2613eab1b8f7914973462e4fa5fcfe6f3fc6f9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"header\">
  <div class=\"left\">
    <div class=\"head-h2\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Customer reviews"]), "html", null, true);
        echo "</div>
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsTab\\AverageRating", "product" => $this->getAttribute(($context["this"] ?? null), "getProduct", [], "method")]]), "html", null, true);
        echo "
  </div>

  ";
        // line 13
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "getProduct", [], "method"), "getReviewsCount", [], "method") > 0)) {
            // line 14
            echo "    <div class=\"buttons\">
      ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "reviews.general"]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 18
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/reviews_tab/parts/tab.reviews_list_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  50 => 15,  47 => 14,  45 => 13,  39 => 10,  35 => 9,  30 => 6,);
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
 # Reviews list header
 #
 # @ListChild (list=\"product.reviews.tab\", weight=\"200\")
 #}

<div class=\"header\">
  <div class=\"left\">
    <div class=\"head-h2\">{{ t('Customer reviews') }}</div>
    {{ widget('XLite\\\\Module\\\\XC\\\\Reviews\\\\View\\\\Customer\\\\ReviewsTab\\\\AverageRating', product=this.getProduct()) }}
  </div>

  {% if this.getProduct().getReviewsCount() > 0 %}
    <div class=\"buttons\">
      {{ widget_list('reviews.general') }}
    </div>
  {% endif %}

</div>
", "modules/XC/Reviews/reviews_tab/parts/tab.reviews_list_header.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\modules\\XC\\Reviews\\reviews_tab\\parts\\tab.reviews_list_header.twig");
    }
}
