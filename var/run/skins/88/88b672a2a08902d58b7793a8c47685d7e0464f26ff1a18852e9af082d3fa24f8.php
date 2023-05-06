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

/* items_list/product\sidebar/small_thumbnails\body.twig */
class __TwigTemplate_d478710433692e974e06daf9ad55f7e5556ff18ddcab2fa5375ebcb840acfa61 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "itemsList.product.cart"]]), "html", null, true);
        echo "

<ul class=\"list-body-sidebar products products-sidebar products-sidebar-small-thumbnails\">

  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSideBarData", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 10
            echo "    <li class=\"product-cell box-product item ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAdditionalItemClass", [0 => $this->getAttribute($context["loop"], "index", []), 1 => $this->getAttribute($context["loop"], "length", [])], "method"), "html", null, true);
            echo "\">
      ";
            // line 11
            echo $this->getAttribute(($context["this"] ?? null), "getProductWidgetContent", [0 => $context["product"]], "method");
            echo "
    </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
  ";
        // line 15
        if ($this->getAttribute(($context["this"] ?? null), "isShowMoreLink", [], "method")) {
            // line 16
            echo "    <li class=\"more_link\">
      <a class=\"link\" href=\"";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMoreLinkURL", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMoreLinkText", [], "method"), "html", null, true);
            echo "</a>
    </li>
  ";
        }
        // line 20
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "items_list/product\\sidebar/small_thumbnails\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  87 => 17,  84 => 16,  82 => 15,  79 => 14,  62 => 11,  57 => 10,  40 => 9,  33 => 5,  30 => 4,);
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
 # Products list (sidebar variant)
 #}

{{ widget_list('itemsList.product.cart') }}

<ul class=\"list-body-sidebar products products-sidebar products-sidebar-small-thumbnails\">

  {% for i, product in this.getSideBarData() %}
    <li class=\"product-cell box-product item {{ this.getAdditionalItemClass(loop.index, loop.length) }}\">
      {{ this.getProductWidgetContent(product)|raw }}
    </li>
  {% endfor %}

  {% if this.isShowMoreLink() %}
    <li class=\"more_link\">
      <a class=\"link\" href=\"{{ this.getMoreLinkURL() }}\">{{ this.getMoreLinkText() }}</a>
    </li>
  {% endif %}

</ul>
", "items_list/product\\sidebar/small_thumbnails\\body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\items_list\\product\\sidebar\\small_thumbnails\\body.twig");
    }
}
