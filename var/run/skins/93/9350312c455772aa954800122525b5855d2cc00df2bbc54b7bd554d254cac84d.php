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

/* C:\OpenServer\domains\xcartsite\skins\customer\shopping_cart\parts\item.price.twig */
class __TwigTemplate_0270066735383ca3cc360234de7d35210059d4c78d8e49766e42fee5e46d92a7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getDisplayPrice", [], "method"), "currency" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getCurrency", [], "method")]]), "html", null, true);
        echo "</td>
<td class=\"item-multi\">&times;</td>
";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\shopping_cart\\parts\\item.price.twig";
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
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\shopping_cart\\parts\\item.price.twig", "");
    }
}
