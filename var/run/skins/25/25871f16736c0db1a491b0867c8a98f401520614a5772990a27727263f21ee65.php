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

/* pager/parts/items_total.twig */
class __TwigTemplate_7b0c1f1f0e16cc931f1c8a0b8c70f285ed5ae6a428beaa31993367bc091bf662 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isItemsPerPageVisible", [], "method")) {
            // line 5
            echo "  <div class=\"pager-items-total\">
    <span class=\"pager-items-label\">";
            // line 6
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPagerLabel", [], "method"), "html", null, true);
            echo ":</span>
    <span class=\"pager-items-range\">";
            // line 7
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["BEGIN - END of TOTAL", ["begin" => $this->getAttribute(($context["this"] ?? null), "getBeginRecordNumber", [], "method"), "end" => $this->getAttribute(($context["this"] ?? null), "getEndRecordNumber", [], "method"), "total" => $this->getAttribute(($context["this"] ?? null), "getItemsTotal", [], "method")]]);
            echo "</span>
    ";
            // line 8
            if (($this->getAttribute(($context["this"] ?? null), "isItemsPerPageSelectorVisible", [], "method") && $this->getAttribute(($context["this"] ?? null), "getPerPageCounts", [], "method"))) {
                // line 9
                echo "      <div class=\"per-page-box\">
        <div>
          <span class=\"per-page-label\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Show:"]), "html", null, true);
                echo "</span>
          <span class=\"per-page-value\">";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemsPerPage", [], "method"), "html", null, true);
                echo "</span>
        </div>

        <ul class=\"display-per-page grid-list\">
          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getPerPageCounts", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                    // line 17
                    echo "            <li class=\"list-type-grid ";
                    if (($context["count"] == $this->getAttribute(($context["this"] ?? null), "getItemsPerPage", [], "method"))) {
                        echo " selected";
                    }
                    echo "\">
              <a data-items-per-page=\"";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["count"], "html", null, true);
                    echo "\" href=\"#\">
                ";
                    // line 19
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["count"], "html", null, true);
                    echo "
              </a>
            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </ul>

      </div>
    ";
            }
            // line 27
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "pager/parts/items_total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  85 => 23,  75 => 19,  71 => 18,  64 => 17,  60 => 16,  53 => 12,  49 => 11,  45 => 9,  43 => 8,  39 => 7,  35 => 6,  32 => 5,  30 => 4,);
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
 # Products list items total
 #}
{% if this.isItemsPerPageVisible() %}
  <div class=\"pager-items-total\">
    <span class=\"pager-items-label\">{{ this.getPagerLabel() }}:</span>
    <span class=\"pager-items-range\">{{ t('BEGIN - END of TOTAL', {'begin': this.getBeginRecordNumber(), 'end': this.getEndRecordNumber(), 'total': this.getItemsTotal()})|raw }}</span>
    {% if this.isItemsPerPageSelectorVisible() and this.getPerPageCounts() %}
      <div class=\"per-page-box\">
        <div>
          <span class=\"per-page-label\">{{ t('Show:') }}</span>
          <span class=\"per-page-value\">{{ this.getItemsPerPage() }}</span>
        </div>

        <ul class=\"display-per-page grid-list\">
          {% for count in this.getPerPageCounts() %}
            <li class=\"list-type-grid {% if count == this.getItemsPerPage() %} selected{% endif %}\">
              <a data-items-per-page=\"{{ count }}\" href=\"#\">
                {{ count }}
              </a>
            </li>
          {% endfor %}
        </ul>

      </div>
    {% endif %}
  </div>
{% endif %}
", "pager/parts/items_total.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\pager\\parts\\items_total.twig");
    }
}
