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

/* header/parts/meta_upgrade_insecure.twig */
class __TwigTemplate_8827d67f1b456b5a6c238002ea7b6dc0ee10d7f72dd1cd1783605b4ee3faec63 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "useUpgradeInsecure", [], "method")) {
            // line 8
            echo "  <meta http-equiv=\"Content-Security-Policy\" content=\"upgrade-insecure-requests\">
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/meta_upgrade_insecure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  33 => 7,  30 => 6,);
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
 # Head list children
 #
 # @ListChild (list=\"head\", weight=\"700\")
 #}

{% if this.useUpgradeInsecure() %}
  <meta http-equiv=\"Content-Security-Policy\" content=\"upgrade-insecure-requests\">
{% endif %}
", "header/parts/meta_upgrade_insecure.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\header\\parts\\meta_upgrade_insecure.twig");
    }
}
