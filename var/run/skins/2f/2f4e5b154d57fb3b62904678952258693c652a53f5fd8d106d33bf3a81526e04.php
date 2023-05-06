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

/* product/details/editable_attributes/body.twig */
class __TwigTemplate_412bdd773e6828cadc439833569f5eb86ab4ccfc675797f584007584420db97b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasAttributes", [], "method")) {
            // line 6
            echo "  <div class=\"editable-attributes ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFingerprint", [], "method"), "html", null, true);
            echo "\">
    ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Product\\Details\\Customer\\AttributesModify", "product" => $this->getAttribute(($context["this"] ?? null), "getProduct", [], "method"), "attribute_values" => $this->getAttribute(($context["this"] ?? null), "getAttributeValues", [], "method"), "includeNonEditable" => true]]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/editable_attributes/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  35 => 6,  33 => 5,  30 => 4,);
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
 # Product details attributes block
 #}

{% if this.hasAttributes() %}
  <div class=\"editable-attributes {{ this.getFingerprint() }}\">
    {{ widget('\\\\XLite\\\\View\\\\Product\\\\Details\\\\Customer\\\\AttributesModify', product=this.getProduct(), attribute_values=this.getAttributeValues(), includeNonEditable=true) }}
  </div>
{% endif %}
", "product/details/editable_attributes/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\editable_attributes\\body.twig");
    }
}
