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

/* common/price_plain.twig */
class __TwigTemplate_ac29cfe3da20c643487d61f289ff3bb5c148dac2741c6829eb5054a11655b87e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-price ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFingerprint", [], "method"), "html", null, true);
        echo "\">
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.plain_price.head"]]), "html", null, true);
        echo "
  <ul class=\"product-price\">
  \t<li class=\"product-labels\">
\t  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.plain_price.before"]]), "html", null, true);
        echo "
\t</li>
  \t";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.plain_price"]]), "html", null, true);
        echo "
  </ul>
";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.plain_price.tail"]]), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "common/price_plain.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  48 => 11,  43 => 9,  37 => 6,  33 => 5,  30 => 4,);
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
 # Price widget
 #}

<div class=\"product-price {{ this.getFingerprint() }}\">
{{ widget_list('product.plain_price.head') }}
  <ul class=\"product-price\">
  \t<li class=\"product-labels\">
\t  {{ widget_list('product.plain_price.before') }}
\t</li>
  \t{{ widget_list('product.plain_price') }}
  </ul>
{{ widget_list('product.plain_price.tail') }}
</div>", "common/price_plain.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\common\\price_plain.twig");
    }
}
