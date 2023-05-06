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

/* product/details/parts/attributes_modify/body.twig */
class __TwigTemplate_2ba05ee2e4de80f21a0600661d4c01072d6fafe2eabd1c4d810910f09cb2f118 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"attribute-values\" data-include-non-editable=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getIncludeNonEditable", [], "method"), "html", null, true);
        echo "\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAttributes", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 6
            echo "    ";
            if ($this->getAttribute(($context["this"] ?? null), "isEditableAttribute", [0 => $context["attribute"]], "method")) {
                // line 7
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAttributeCSSClass", [0 => $context["attribute"]], "method"), "html", null, true);
                echo "\">
        ";
                // line 8
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["attribute"], "getWidgetClass", [0 => $this->getAttribute($context["attribute"], "getType", [], "method")], "method"), "attribute" => $context["attribute"], "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
                echo "
      </li>
    ";
            } else {
                // line 11
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAttributeCSSClass", [0 => $context["attribute"]], "method"), "html", null, true);
                echo " non-editable\">
        <strong>";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "getName", [], "method"), "html", null, true);
                echo ": </strong>
        <span>";
                // line 13
                echo nl2br(XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAttrStringValue", [0 => $context["attribute"]], "method"), "html", null, true));
                echo "</span>
      </li>
    ";
            }
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/attributes_modify/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  68 => 16,  62 => 13,  58 => 12,  53 => 11,  47 => 8,  42 => 7,  39 => 6,  35 => 5,  30 => 4,);
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
 # Product attributes 
 #}
<ul class=\"attribute-values\" data-include-non-editable=\"{{ this.getIncludeNonEditable() }}\">
  {% for attribute in this.getAttributes() %}
    {% if this.isEditableAttribute(attribute) %}
      <li class=\"{{ this.getAttributeCSSClass(attribute) }}\">
        {{ widget(attribute.getWidgetClass(attribute.getType()), attribute=attribute, product=this.product) }}
      </li>
    {% else %}
      <li class=\"{{ this.getAttributeCSSClass(attribute) }} non-editable\">
        <strong>{{ attribute.getName() }}: </strong>
        <span>{{ this.getAttrStringValue(attribute)|nl2br }}</span>
      </li>
    {% endif %}
  {% endfor %}
</ul>
", "product/details/parts/attributes_modify/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\attributes_modify\\body.twig");
    }
}
