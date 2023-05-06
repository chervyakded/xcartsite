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

/* product/attribute_value/select/selectbox.twig */
class __TwigTemplate_d9575459091668b5ca3bf23b306631978d7ad07f34e8dd28b79e8a9db7e6da7b extends \XLite\Core\Templating\Twig\Template
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
<label class=\"title\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "attribute", []), "name", []), "html", null, true);
        echo "</label>
<select
    class=\"form-control\"
    name=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\"
    data-attribute-id=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "attribute", []), "id", []), "html", null, true);
        echo "\"
    ";
        // line 10
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getSelectAttributes", [], "method")], "method");
        echo "
>
  ";
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "showPlaceholderOption", [], "method")) {
            // line 13
            echo "    <option ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getPlaceholderOptionAttributes", [], "method")], "method");
            echo "disabled=\"disabled\" hidden=\"hidden\" selected=\"selected\" value=\"\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPlaceholderOptionLabel", [], "method"), "html", null, true);
            echo "</option>
  ";
        }
        // line 15
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAttributeValue", [], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 16
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getOptionTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getOptionTemplate", [], "method"), "product/attribute_value/select/selectbox.twig", 16)->display(twig_array_merge($context, ["option" => $context["v"]]));
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 17
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "product/attribute_value/select/selectbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  91 => 17,  80 => 16,  62 => 15,  54 => 13,  52 => 12,  47 => 10,  43 => 9,  39 => 8,  33 => 5,  30 => 4,);
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
 # Attribute value (Select) in selectbox mode
 #}

<label class=\"title\">{{ this.attribute.name }}</label>
<select
    class=\"form-control\"
    name=\"{{ this.getName() }}\"
    data-attribute-id=\"{{ this.attribute.id }}\"
    {{ this.printTagAttributes(this.getSelectAttributes())|raw }}
>
  {% if this.showPlaceholderOption() %}
    <option {{ this.printTagAttributes(this.getPlaceholderOptionAttributes())|raw }}disabled=\"disabled\" hidden=\"hidden\" selected=\"selected\" value=\"\">{{ this.getPlaceholderOptionLabel() }}</option>
  {% endif %}
  {% for v in this.getAttributeValue() %}
    {% include this.getOptionTemplate() with {'option': v} %}
  {% endfor %}
</select>", "product/attribute_value/select/selectbox.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\attribute_value\\select\\selectbox.twig");
    }
}
