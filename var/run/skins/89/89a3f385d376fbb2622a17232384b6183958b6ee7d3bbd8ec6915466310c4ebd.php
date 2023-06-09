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

/* items_list/product/parts/common.sort-options.twig */
class __TwigTemplate_65bb3dfb7ebb6112dd4e142e055f48dd9234314f686876e10dc11ffcd7a41ad7 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isSortBySelectorVisible", [], "method")) {
            // line 9
            echo "  <div class=\"sort-box\">
    <div>
      <span class=\"sort-by-label\">";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sort by:"]), "html", null, true);
            echo "</span>
      <span class=\"sort-by-value\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getSortByLabel", [], "method")]), "html", null, true);
            echo " ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getSortOrderLabel", [], "method")]), "html", null, true);
            echo "</span>
    </div>
    <ul class=\"display-sort sort-crit grid-list\" id=\"";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSortWidgetId", [0 => $this->getAttribute(($context["this"] ?? null), "true", [])], "method"), "html", null, true);
            echo "\">
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "sortByModes", []));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 16
                echo "      ";
                if ($this->getAttribute(($context["this"] ?? null), "isSingleOrderSortBy", [0 => $context["key"]], "method")) {
                    // line 17
                    echo "        <li class=\"list-type-grid ";
                    if ($this->getAttribute(($context["this"] ?? null), "isSortByModeSelected", [0 => $context["key"]], "method")) {
                        echo " selected";
                    }
                    echo "\">
          <a data-sort-by=\"";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-sort-order=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSortOrderToChange", [0 => $context["key"]], "method"), "html", null, true);
                    echo "\" href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getActionURL", [0 => ["sortBy" => $context["key"], "sortOrder" => $this->getAttribute(($context["this"] ?? null), "getSortOrderToChange", [], "method")]], "method"), "html", null, true);
                    echo "\">
            ";
                    // line 19
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["name"]]), "html", null, true);
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getSortOrderLabel", [0 => $context["key"]], "method")]), "html", null, true);
                    echo "<i class=\"sort-arrow ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSortArrowClassCSS", [0 => $context["key"]], "method"), "html", null, true);
                    echo "\"></i>
          </a>
        </li>
      ";
                } else {
                    // line 23
                    echo "        <li class=\"list-type-grid ";
                    if ($this->getAttribute(($context["this"] ?? null), "isSortByModeSelected", [0 => $context["key"], 1 => "asc"], "method")) {
                        echo " selected";
                    }
                    echo "\">
          <a data-sort-by=\"";
                    // line 24
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-sort-order=\"asc\" href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getActionURL", [0 => ["sortBy" => $context["key"], "sortOrder" => "asc"]], "method"), "html", null, true);
                    echo "\">
            ";
                    // line 25
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["name"]]), "html", null, true);
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getAscOrderLabel", [0 => $context["key"]], "method")]), "html", null, true);
                    echo "<i class=\"sort-arrow ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSortArrowClassCSS", [0 => $context["key"]], "method"), "html", null, true);
                    echo "\"></i>
          </a>
        </li>
        <li class=\"list-type-grid ";
                    // line 28
                    if ($this->getAttribute(($context["this"] ?? null), "isSortByModeSelected", [0 => $context["key"], 1 => "desc"], "method")) {
                        echo " selected";
                    }
                    echo "\">
          <a data-sort-by=\"";
                    // line 29
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-sort-order=\"desc\" href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getActionURL", [0 => ["sortBy" => $context["key"], "sortOrder" => "desc"]], "method"), "html", null, true);
                    echo "\">
            ";
                    // line 30
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["name"]]), "html", null, true);
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getDescOrderLabel", [0 => $context["key"]], "method")]), "html", null, true);
                    echo "<i class=\"sort-arrow ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSortArrowClassCSS", [0 => $context["key"]], "method"), "html", null, true);
                    echo "\"></i>
          </a>
        </li>
      ";
                }
                // line 34
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.sort-options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  130 => 34,  119 => 30,  113 => 29,  107 => 28,  97 => 25,  91 => 24,  84 => 23,  73 => 19,  65 => 18,  58 => 17,  55 => 16,  51 => 15,  47 => 14,  40 => 12,  36 => 11,  32 => 9,  30 => 8,);
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
 # Products list sorting control
 #
 # @ListChild (list=\"itemsList.product.grid.customer.header\")
 # @ListChild (list=\"itemsList.product.list.customer.header\")
 # @ListChild (list=\"itemsList.product.table.customer.header\")
 #}
{% if this.isSortBySelectorVisible() %}
  <div class=\"sort-box\">
    <div>
      <span class=\"sort-by-label\">{{ t('Sort by:') }}</span>
      <span class=\"sort-by-value\">{{ t(this.getSortByLabel()) }} {{ t(this.getSortOrderLabel()) }}</span>
    </div>
    <ul class=\"display-sort sort-crit grid-list\" id=\"{{ this.getSortWidgetId(this.true) }}\">
    {% for key, name in this.sortByModes %}
      {% if this.isSingleOrderSortBy(key) %}
        <li class=\"list-type-grid {% if this.isSortByModeSelected(key) %} selected{% endif %}\">
          <a data-sort-by=\"{{ key }}\" data-sort-order=\"{{ this.getSortOrderToChange(key) }}\" href=\"{{ this.getActionURL({'sortBy': key, 'sortOrder': this.getSortOrderToChange()}) }}\">
            {{ t(name) }} {{ t(this.getSortOrderLabel(key)) }}<i class=\"sort-arrow {{ this.getSortArrowClassCSS(key) }}\"></i>
          </a>
        </li>
      {% else %}
        <li class=\"list-type-grid {% if this.isSortByModeSelected(key, 'asc') %} selected{% endif %}\">
          <a data-sort-by=\"{{ key }}\" data-sort-order=\"asc\" href=\"{{ this.getActionURL({'sortBy': key, 'sortOrder': 'asc'}) }}\">
            {{ t(name) }} {{ t(this.getAscOrderLabel(key)) }}<i class=\"sort-arrow {{ this.getSortArrowClassCSS(key) }}\"></i>
          </a>
        </li>
        <li class=\"list-type-grid {% if this.isSortByModeSelected(key, 'desc') %} selected{% endif %}\">
          <a data-sort-by=\"{{ key }}\" data-sort-order=\"desc\" href=\"{{ this.getActionURL({'sortBy': key, 'sortOrder': 'desc'}) }}\">
            {{ t(name) }} {{ t(this.getDescOrderLabel(key)) }}<i class=\"sort-arrow {{ this.getSortArrowClassCSS(key) }}\"></i>
          </a>
        </li>
      {% endif %}
    {% endfor %}
    </ul>
  </div>
{% endif %}
", "items_list/product/parts/common.sort-options.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\items_list\\product\\parts\\common.sort-options.twig");
    }
}
