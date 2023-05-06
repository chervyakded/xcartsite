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

/* layout/header/orders.twig */
class __TwigTemplate_2c1d4647c5d0129e39dbff8a757b1818e79f112b7cee022855eea4a0b876a7b8 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-orders\">
  <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOrdersListUrl", [], "method"), "html", null, true);
        echo "\" class=\"orders icon-orders\">
  \t<span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCaption", [], "method"), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "layout/header/orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 4,);
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
 # Orders list
 #}

<li class=\"account-link-orders\">
  <a href=\"{{ this.getOrdersListUrl() }}\" class=\"orders icon-orders\">
  \t<span>{{ this.getCaption() }}</span>
  </a>
</li>
", "layout/header/orders.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\layout\\header\\orders.twig");
    }
}
