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

/* product/details/parts/attribute.twig */
class __TwigTemplate_2d9761eb6f795c07e19259a9b2a3d0b0ec4e817488d4b55ac6bfb032b1347586 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getAttributeGroup", [], "method")) {
            // line 5
            echo "<li><div class=\"head-h3\"><span class=\"title-text\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method"), "html", null, true);
            echo "</span><span class=\"line\"></span></div>
  <ul>
";
        }
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAttrList", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 9
            echo "  <li>
    <div><strong>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", []), "html", null, true);
            echo "</strong></div>
    <span class=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["a"], "class", []), "html", null, true);
            echo "\">";
            echo nl2br(XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["a"], "value", []), "html", null, true));
            echo "</span>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        if ($this->getAttribute(($context["this"] ?? null), "getAttributeGroup", [], "method")) {
            // line 15
            echo "  </ul>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/parts/attribute.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  61 => 14,  50 => 11,  46 => 10,  43 => 9,  39 => 8,  32 => 5,  30 => 4,);
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
 # Attribute
 #}
{% if this.getAttributeGroup() %}
<li><div class=\"head-h3\"><span class=\"title-text\">{{ this.getTitle() }}</span><span class=\"line\"></span></div>
  <ul>
{% endif %}
{% for a in this.getAttrList() %}
  <li>
    <div><strong>{{ a.name }}</strong></div>
    <span class=\"{{ a.class }}\">{{ a.value|nl2br }}</span>
  </li>
{% endfor %}
{% if this.getAttributeGroup() %}
  </ul>
</li>
{% endif %}
", "product/details/parts/attribute.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\attribute.twig");
    }
}
