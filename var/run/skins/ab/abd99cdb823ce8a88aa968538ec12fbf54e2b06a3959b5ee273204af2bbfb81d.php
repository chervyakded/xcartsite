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

/* form_field/input/symbol.twig */
class __TwigTemplate_61da1d90168187e39ab567e9d6240401a5c1418d8d1d67c363b8cc66e4947195 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
<span class=\"input-field-wrapper ";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
  ";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
  <span class=\"input-group-wrapper\">
    <div class=\"input-group\">
    <span class=\"input-group-addon\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getSymbol", [], "method")]), "html", null, true);
        echo "</span>
    <input";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo " />
    </div>
  </span>
</span>
";
    }

    public function getTemplateName()
    {
        return "form_field/input/symbol.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  43 => 6,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<span class=\"input-field-wrapper {{ this.getWrapperClass() }}\">
  {{ this.displayCommentedData(this.getCommentedData()) }}
  <span class=\"input-group-wrapper\">
    <div class=\"input-group\">
    <span class=\"input-group-addon\">{{ t(this.getSymbol()) }}</span>
    <input{{ this.getAttributesCode()|raw }} />
    </div>
  </span>
</span>
", "form_field/input/symbol.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\form_field\\input\\symbol.twig");
    }
}
