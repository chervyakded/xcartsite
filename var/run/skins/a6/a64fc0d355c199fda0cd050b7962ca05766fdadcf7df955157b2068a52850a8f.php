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

/* modules/CDev/ProductAdvisor/product/details/parts/common.coming_soon.twig */
class __TwigTemplate_c7026f861983a0521250b1b95d994c3184caa820d72174b042369addc9e62825 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isShowComingSoonLabel", [], "method")) {
            // line 9
            echo "  <span class=\"coming-soon-label\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Labels", "labels" => $this->getAttribute(($context["this"] ?? null), "getComingSoonLabel", [], "method")]]), "html", null, true);
            echo "
  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/ProductAdvisor/product/details/parts/common.coming_soon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  35 => 9,  33 => 8,  30 => 7,);
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
 # Quantity input box
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"19\")
 # @ListChild (list=\"product.details.quicklook.info\", weight=\"19\")
 #}

{% if this.isShowComingSoonLabel() %}
  <span class=\"coming-soon-label\">
    {{ widget('XLite\\\\View\\\\Labels', labels=this.getComingSoonLabel()) }}
  </span>
{% endif %}
", "modules/CDev/ProductAdvisor/product/details/parts/common.coming_soon.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\ProductAdvisor\\product\\details\\parts\\common.coming_soon.twig");
    }
}
