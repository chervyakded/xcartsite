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

/* modules/QSL/FlyoutCategoriesMenu/\body.twig */
class __TwigTemplate_4d46ea870cc10cecaadc617631eb35120db8ba98861ea77c1bbbfa41636fd206 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"flyout-menu";
        if ( !$this->getAttribute(($context["this"] ?? null), "isSubtree", [], "method")) {
            echo " catalog-categories catalog-categories-tree";
        } else {
            echo " sublevel";
        }
        echo "\">
  ";
        // line 5
        if ( !$this->getAttribute(($context["this"] ?? null), "isSubtree", [], "method")) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "topCategories.linksAbove"]]), "html", null, true);
            echo "
  ";
        }
        // line 8
        echo "
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getCategories", [0 => $this->getAttribute(($context["this"] ?? null), "rootId", [])], "method"));
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
        foreach ($context['_seq'] as $context["idx"] => $context["_category"]) {
            // line 10
            echo "    <li ";
            echo $this->getAttribute(($context["this"] ?? null), "displayItemClass", [0 => $context["idx"], 1 => $this->getAttribute($context["loop"], "length", []), 2 => $context["_category"]], "method");
            echo ">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => ($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "parts/category.link.twig"), "_category" => $context["_category"], "isShowTriangle" => (($this->getAttribute(($context["this"] ?? null), "isShowTriangle", [], "method") && $this->getAttribute($context["_category"], "hasSubcategories", [])) && $this->getAttribute(($context["this"] ?? null), "isNotDeep", [0 => $this->getAttribute($context["_category"], "depth", [])], "method"))]]), "html", null, true);
            echo "
      ";
            // line 12
            if (($this->getAttribute($context["_category"], "hasSubcategories", []) && $this->getAttribute(($context["this"] ?? null), "isNotDeep", [0 => $this->getAttribute($context["_category"], "depth", [])], "method"))) {
                // line 13
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => $this->getAttribute(($context["this"] ?? null), "getBody", [], "method"), "rootId" => $this->getAttribute($context["_category"], "id", []), "is_subtree" => "1"]]), "html", null, true);
                echo "
      ";
            }
            // line 15
            echo "    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "topCategories.children", 1 => ["rootId" => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "rootId"], "method"), "is_subtree" => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "is_subtree"], "method")]], "method"));
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
        foreach ($context['_seq'] as $context["idx"] => $context["w"]) {
            // line 18
            echo "    <li ";
            echo $this->getAttribute(($context["this"] ?? null), "displayListItemClass", [0 => $context["idx"], 1 => $this->getAttribute($context["loop"], "length", []), 2 => $context["w"]], "method");
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
            echo "</li>
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
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
  ";
        // line 21
        if ( !$this->getAttribute(($context["this"] ?? null), "isSubtree", [], "method")) {
            // line 22
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "topCategories.linksUnder"]]), "html", null, true);
            echo "
  ";
        }
        // line 24
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "modules/QSL/FlyoutCategoriesMenu/\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 24,  141 => 22,  139 => 21,  136 => 20,  117 => 18,  99 => 17,  84 => 15,  78 => 13,  76 => 12,  72 => 11,  67 => 10,  50 => 9,  47 => 8,  41 => 6,  39 => 5,  30 => 4,);
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
 # Top categories tree
 #}
<ul class=\"flyout-menu{% if not this.isSubtree() %} catalog-categories catalog-categories-tree{% else %} sublevel{% endif %}\">
  {% if not this.isSubtree() %}
    {{ widget_list('topCategories.linksAbove') }}
  {% endif %}

  {% for idx, _category in this.getCategories(this.rootId) %}
    <li {{ this.displayItemClass(idx, loop.length, _category)|raw }}>
      {{ widget(template=this.getDir() ~ \"parts/category.link.twig\", _category=_category, isShowTriangle=this.isShowTriangle() and _category.hasSubcategories and this.isNotDeep(_category.depth)) }}
      {% if _category.hasSubcategories and this.isNotDeep(_category.depth) %}
        {{ widget(template=this.getBody(), rootId=_category.id, is_subtree='1') }}
      {% endif %}
    </li>
  {% endfor %}
  {% for idx, w in this.getViewList('topCategories.children', {'rootId': this.getParam('rootId'), 'is_subtree': this.getParam('is_subtree')}) %}
    <li {{ this.displayListItemClass(idx, loop.length, w)|raw }}>{{ w.display() }}</li>
  {% endfor %}

  {% if not this.isSubtree() %}
    {{ widget_list('topCategories.linksUnder') }}
  {% endif %}
</ul>
", "modules/QSL/FlyoutCategoriesMenu/\\body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\QSL\\FlyoutCategoriesMenu\\body.twig");
    }
}
