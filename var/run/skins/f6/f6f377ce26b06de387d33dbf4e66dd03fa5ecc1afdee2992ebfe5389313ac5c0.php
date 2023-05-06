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

/* modules/CDev/Sale/details/you_save.twig */
class __TwigTemplate_de151cf2cf79de97c22afaaa24afb7d678ef48016bc35ebda195cce6b66b13e0 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["save"]), "html", null, true);
        echo " <span class=\"you-save\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatPrice", [0 => $this->getAttribute(($context["this"] ?? null), "getSalePriceDifference", [], "method"), 1 => $this->getAttribute(($context["this"] ?? null), "null", []), 2 => 1], "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Sale/details/you_save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,);
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
 # \"You save\" label (internal list element)
 #
 # @ListChild (list=\"product.plain_price.before.sale_price.text\", weight=\"200\")
 #}
{{ t('save') }} <span class=\"you-save\">{{ this.formatPrice(this.getSalePriceDifference(), this.null, 1) }}</span>
", "modules/CDev/Sale/details/you_save.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\Sale\\details\\you_save.twig");
    }
}
