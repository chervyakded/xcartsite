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

/* layout/header/header.bar.links.twig */
class __TwigTemplate_29972656389888c72fdbdf9d93816265a7ec4b793f160bc9625ea90eee8216a3 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if (($this->getAttribute(($context["this"] ?? null), "isAccountLinksVisible", [], "method") &&  !$this->getAttribute(($context["this"] ?? null), "isCheckoutLayout", [], "method"))) {
            // line 8
            echo "  <div class=\"header_bar-sign_in\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\PopupLogin", "label" => "Sign in / sign up"]]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header.bar.links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
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
 # Header bar account links
 #
 # @ListChild (list=\"layout.header.bar\", weight=\"100\")
 #}

{% if this.isAccountLinksVisible() and not this.isCheckoutLayout() %}
  <div class=\"header_bar-sign_in\">
    {{ widget('XLite\\\\View\\\\Button\\\\PopupLogin', label='Sign in / sign up') }}
  </div>
{% endif %}", "layout/header/header.bar.links.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\layout\\header\\header.bar.links.twig");
    }
}
