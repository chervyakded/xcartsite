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

/* items_list/product/parts/common.display-modes.twig */
class __TwigTemplate_c2a53bbbf00343351e908756d2a46d95e8a44df7f69d1ce40e18a4836e48497d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayModeSelectorVisible", [], "method")) {
            // line 6
            echo "<div class=\"display-mode-box\">
  <div>
    <span class=\"display-mode-value\"><i class=\"fa ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDisplayModeCSS", [0 => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "displayMode"], "method")], "method"), "html", null, true);
            echo "\"></i></span>
  </div>
  <ul class=\"display-modes grid-list\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "displayModes", []));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 12
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDisplayModeLinkClassName", [0 => $context["key"]], "method"), "html", null, true);
                echo "\">
        <a href=\"";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getActionURL", [0 => ["displayMode" => $context["key"]]], "method"), "html", null, true);
                echo "\" class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["name"]]), "html", null, true);
                echo "\">
          <i class=\"";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDisplayModeCSS", [0 => $context["key"]], "method"), "html", null, true);
                echo "\"></i>
          <span class=\"text\">";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["name"]]), "html", null, true);
                echo "</span>
        </a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.display-modes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  66 => 15,  62 => 14,  54 => 13,  49 => 12,  45 => 11,  39 => 8,  35 => 6,  33 => 5,  30 => 4,);
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
 # Products list display mode selector
 #}

{% if this.isDisplayModeSelectorVisible() %}
<div class=\"display-mode-box\">
  <div>
    <span class=\"display-mode-value\"><i class=\"fa {{ this.getDisplayModeCSS(this.getParam('displayMode')) }}\"></i></span>
  </div>
  <ul class=\"display-modes grid-list\">
    {% for key, name in this.displayModes %}
      <li class=\"{{ this.getDisplayModeLinkClassName(key) }}\">
        <a href=\"{{ this.getActionURL({'displayMode': key}) }}\" class=\"{{ key }}\" title=\"{{ t(name) }}\">
          <i class=\"{{ this.getDisplayModeCSS(key) }}\"></i>
          <span class=\"text\">{{ t(name) }}</span>
        </a>
      </li>
    {% endfor %}
  </ul>

</div>
{% endif %}
", "items_list/product/parts/common.display-modes.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\items_list\\product\\parts\\common.display-modes.twig");
    }
}
