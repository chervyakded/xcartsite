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

/* modules/CDev/Sale/top_categories/additional_links.twig */
class __TwigTemplate_8c1f0f42dcf971ab444d9030542581fa3d65e5666ea380df85aa0d271f607050 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSaleDiscounts", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 6
            echo "  <li>
    <a href=\"";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSalePageLink", [0 => $context["discount"]], "method"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["this"] ?? null), "getCurrentDiscountId", [], "method") == $this->getAttribute($context["discount"], "getId", [], "method"))) {
                echo "class=\"active\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["discount"], "getName", [], "method"), "html", null, true);
            echo "</a>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/CDev/Sale/top_categories/additional_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  33 => 5,  30 => 4,);
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
 # Top categories additional links
 #}

{% for discount in this.getSaleDiscounts() %}
  <li>
    <a href=\"{{ this.getSalePageLink(discount) }}\" {% if this.getCurrentDiscountId() == discount.getId() %}class=\"active\"{% endif %}>{{ discount.getName() }}</a>
  </li>
{% endfor %}
", "modules/CDev/Sale/top_categories/additional_links.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\Sale\\top_categories\\additional_links.twig");
    }
}
