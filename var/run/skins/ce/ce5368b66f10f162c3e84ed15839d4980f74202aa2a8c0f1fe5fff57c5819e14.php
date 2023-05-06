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

/* product/attribute_value/select/option.twig */
class __TwigTemplate_e8abfe67570f9fc121f5b9fc0eb94a49ac093727bdcacbb1ed557e39d0e142fd extends \XLite\Core\Templating\Twig\Template
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
        echo "<option ";
        if ($this->getAttribute(($context["this"] ?? null), "isSelectedValue", [0 => ($context["option"] ?? null)], "method")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "id", []), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOptionTitle", [0 => ($context["option"] ?? null)], "method"), "html", null, true);
        echo $this->getAttribute(($context["this"] ?? null), "getModifierTitle", [0 => ($context["option"] ?? null)], "method");
        echo "</option>
";
    }

    public function getTemplateName()
    {
        return "product/attribute_value/select/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,);
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
 # Attribute value (Select option)
 #}
<option {% if this.isSelectedValue(option) %} selected=\"selected\" {% endif %} value=\"{{ option.id }}\">{{ this.getOptionTitle(option) }}{{ this.getModifierTitle(option)|raw }}</option>
", "product/attribute_value/select/option.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\attribute_value\\select\\option.twig");
    }
}
