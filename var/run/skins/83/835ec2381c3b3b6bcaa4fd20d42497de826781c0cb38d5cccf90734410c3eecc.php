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

/* product/details/page/body.twig */
class __TwigTemplate_5e5d88ad32d4bc78824c044d85ab392998ac1fec0478c1552fc6178fbed3c565 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div ";
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerAttributes", [], "method")], "method");
        echo ">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.page"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "product/details/page/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 4,);
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
 # Product details
 #}
<div {{ this.printTagAttributes(this.getContainerAttributes())|raw }}>
  {{ widget_list('product.details.page') }}
</div>
", "product/details/page/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\page\\body.twig");
    }
}
