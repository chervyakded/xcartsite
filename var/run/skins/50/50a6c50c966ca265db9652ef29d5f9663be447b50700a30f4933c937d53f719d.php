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

/* product/quantity_box/parts/quantity_box.twig */
class __TwigTemplate_341f8e5d0012975b8361493dfb50998180d6940287ce72f67069423678d13b06 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<input
  type=\"number\"
  min=\"1\"
  inputmode=\"numeric\"
  value=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBoxValue", [], "method"), "html", null, true);
        echo "\"
  class=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getClass", [], "method"), "html", null, true);
        echo "\"
  id=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBoxId", [], "method"), "html", null, true);
        echo "\"
  name=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBoxName", [], "method"), "html", null, true);
        echo "\"
  title=\"";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getBoxTitle", [], "method")]), "html", null, true);
        echo "\"
  onclick=\"this.focus();\"/>
<span class=\"wheel-mark\">&nbsp;</span>
";
    }

    public function getTemplateName()
    {
        return "product/quantity_box/parts/quantity_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  30 => 6,);
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
 # Main element (input)
 #
 # @ListChild (list=\"product.quantity-box\", weight=\"20\")
 #}

<input
  type=\"number\"
  min=\"1\"
  inputmode=\"numeric\"
  value=\"{{ this.getBoxValue() }}\"
  class=\"{{ this.getClass() }}\"
  id=\"{{ this.getBoxId() }}\"
  name=\"{{ this.getBoxName() }}\"
  title=\"{{ t(this.getBoxTitle()) }}\"
  onclick=\"this.focus();\"/>
<span class=\"wheel-mark\">&nbsp;</span>
", "product/quantity_box/parts/quantity_box.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\quantity_box\\parts\\quantity_box.twig");
    }
}
