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

/* modules/XC/Reviews/button/add_review.twig */
class __TwigTemplate_c945ee58489b5932f8eeb22ba850d236f9b1e3850a1c60c8eca16facafed4518 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"product-reviews-button\">
    ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isAllowedAddReview", [], "method")) {
            // line 8
            echo "      ";
            if ($this->getAttribute(($context["this"] ?? null), "isReplaceAddReviewWithLogin", [], "method")) {
                // line 9
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\PopupLogin", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add review"]), "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
                echo "
      ";
            } else {
                // line 11
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReview", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add review"]), "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
                echo "
      ";
            }
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      <div class=\"add-review-button-disabled\">
          ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAddReviewMessage", [], "method"), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/button/add_review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  56 => 15,  53 => 14,  50 => 13,  44 => 11,  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
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
 # Button 'Add review'
 #
 # @ListChild (list=\"reviews.general\", weight=\"20\")
 #}
<div id=\"product-reviews-button\">
    {% if this.isAllowedAddReview() %}
      {% if this.isReplaceAddReviewWithLogin() %}
        {{ widget('\\\\XLite\\\\Module\\\\XC\\\\Reviews\\\\View\\\\Button\\\\PopupLogin', label=t('Add review'), product=this.product) }}
      {% else %}
        {{ widget('\\\\XLite\\\\Module\\\\XC\\\\Reviews\\\\View\\\\Button\\\\Customer\\\\AddReview', label=t('Add review'), product=this.product) }}
      {% endif %}
    {% else %}
      <div class=\"add-review-button-disabled\">
          {{ this.getAddReviewMessage() }}
      </div>
    {% endif %}
</div>
", "modules/XC/Reviews/button/add_review.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\Reviews\\button\\add_review.twig");
    }
}
