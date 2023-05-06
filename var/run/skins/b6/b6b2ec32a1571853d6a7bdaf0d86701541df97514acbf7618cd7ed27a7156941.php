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

/* modules/XC/Reviews/reviews_tab/parts/average_rating.twig */
class __TwigTemplate_a942cfe5600228600f7e8814f2224b80c8d303bcc2bbfff464763a3ab2d2a02e extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleAverageRatingOnPage", [], "method")) {
            // line 5
            echo "  ";
            $this->startForm("\\XLite\\Module\\XC\\Reviews\\View\\Form\\AverageRating", ["product_id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "product_id", [])]);            // line 6
            echo "    <div class=\"product-average-rating clearfix\">
      <input type=\"hidden\" name=\"target_widget\" value=\"\\XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsTab\\AverageRating\"/>
      <div class=\"comment\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Average rating"]), "html", null, true);
            echo ":</div>
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "reviews.product.rating", "place" => "tab"]]), "html", null, true);
            echo "
      <div class=\"product-average-rating-toggle\">
        <div class=\"comment\">
          <span class=\"score\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "html", null, true);
            echo "</span>
          <span class=\"votes\">(";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Votes: X", ["votes" => $this->getAttribute(($context["this"] ?? null), "getVotesCount", [], "method")]]), "html", null, true);
            echo ")</span>
        </div>
        ";
            // line 15
            if ($this->getAttribute(($context["this"] ?? null), "isVisibleAverageRating", [], "method")) {
                // line 16
                echo "          <div class=\"button-average-rating\"></div>

          <div class=\"product-average-rating-container\">
            <div class=\"product-average-rating summary\">
              ";
                // line 20
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "reviews.rating.details"]]), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 24
            echo "      </div>

      <div class=\"line\"></div>
    </div>
  ";
            $this->endForm();        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/reviews_tab/parts/average_rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  65 => 20,  59 => 16,  57 => 15,  52 => 13,  48 => 12,  42 => 9,  38 => 8,  34 => 6,  32 => 5,  30 => 4,);
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
 # Average product rating widget in reviews tab
 #}
{% if this.isVisibleAverageRatingOnPage() %}
  {% form '\\\\XLite\\\\Module\\\\XC\\\\Reviews\\\\View\\\\Form\\\\AverageRating' with {product_id: this.product.product_id} %}
    <div class=\"product-average-rating clearfix\">
      <input type=\"hidden\" name=\"target_widget\" value=\"\\XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsTab\\AverageRating\"/>
      <div class=\"comment\">{{ t('Average rating') }}:</div>
      {{ widget_list('reviews.product.rating', place='tab') }}
      <div class=\"product-average-rating-toggle\">
        <div class=\"comment\">
          <span class=\"score\">{{ this.getAverageRating() }}</span>
          <span class=\"votes\">({{ t('Votes: X', {'votes': this.getVotesCount()}) }})</span>
        </div>
        {% if this.isVisibleAverageRating() %}
          <div class=\"button-average-rating\"></div>

          <div class=\"product-average-rating-container\">
            <div class=\"product-average-rating summary\">
              {{ widget_list('reviews.rating.details') }}
            </div>
          </div>
        {% endif %}
      </div>

      <div class=\"line\"></div>
    </div>
  {% endform %}
{% endif %}
", "modules/XC/Reviews/reviews_tab/parts/average_rating.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\modules\\XC\\Reviews\\reviews_tab\\parts\\average_rating.twig");
    }
}
