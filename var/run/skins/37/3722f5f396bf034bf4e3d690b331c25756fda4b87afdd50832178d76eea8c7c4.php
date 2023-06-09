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

/* modules/XC/Reviews/average_rating/text.twig */
class __TwigTemplate_ab72b132eb7f955db06194c82aed3fea6f69aa14371c0bcd3a92a421f0685ab8 extends \XLite\Core\Templating\Twig\Template
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
        echo " <div class=\"text\">
  ";
        // line 5
        if (($this->getAttribute(($context["this"] ?? null), "getVotesCount", [], "method") > 0)) {
            // line 6
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Score: X. Votes: Y", ["score" => $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "votes" => $this->getAttribute(($context["this"] ?? null), "getVotesCount", [], "method")]]), "html", null, true);
            echo "</div>
    ";
            // line 7
            if (($this->getAttribute(($context["this"] ?? null), "getReviewsCount", [], "method") > 0)) {
                // line 8
                echo "      <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Reviews: X", ["count" => $this->getAttribute(($context["this"] ?? null), "getReviewsCount", [], "method")]]), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 10
                echo "      <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["No reviews."]), "html", null, true);
                echo "</div>
    ";
            }
            // line 12
            echo "  ";
        } else {
            // line 13
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Not rated yet"]), "html", null, true);
            echo "</div>
  ";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/average_rating/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  57 => 13,  54 => 12,  48 => 10,  42 => 8,  40 => 7,  35 => 6,  33 => 5,  30 => 4,);
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
 # Rating value in text
 #}
 <div class=\"text\">
  {% if this.getVotesCount() > 0 %}
    <div>{{ t('Score: X. Votes: Y', {'score': this.getAverageRating(), 'votes': this.getVotesCount()}) }}</div>
    {% if this.getReviewsCount() > 0 %}
      <div>{{ t('Reviews: X', {'count': this.getReviewsCount()}) }}</div>
    {% else %}
      <div>{{ t('No reviews.') }}</div>
    {% endif %}
  {% else %}
    <div>{{ t('Not rated yet') }}</div>
  {% endif %}
</div>
", "modules/XC/Reviews/average_rating/text.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\modules\\XC\\Reviews\\average_rating\\text.twig");
    }
}
