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

/* modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_reset_layout_modal.twig */
class __TwigTemplate_59259421aeac1c271c273ef87b7ca97e8962d9360c880edf7f8e6fc0458c705c extends \XLite\Core\Templating\Twig\Template
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
<xlite-themetweaker-modal :show=\"isResetLayoutConfirmVisible\" namespace=\"resetLayoutConfirm\">
  <p slot=\"body\" class=\"text-center\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Are you sure you want to reset current layout? Custom layout settings will be lost."]);
        echo "</p>
</xlite-themetweaker-modal>";
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_reset_layout_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 6,);
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
 # Layout editor panel
 #
 # @ListChild(list=\"themetweaker-panel-extensions\", weight=\"200\")
 #}

<xlite-themetweaker-modal :show=\"isResetLayoutConfirmVisible\" namespace=\"resetLayoutConfirm\">
  <p slot=\"body\" class=\"text-center\">{{ t('Are you sure you want to reset current layout? Custom layout settings will be lost.')|raw }}</p>
</xlite-themetweaker-modal>", "modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_reset_layout_modal.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel_extensions\\confirm_reset_layout_modal.twig");
    }
}
