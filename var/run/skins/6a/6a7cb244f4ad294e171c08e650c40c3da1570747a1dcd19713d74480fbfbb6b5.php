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

/* modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.inline_editor.twig */
class __TwigTemplate_f7e510eb796b51c93b85c947324ef5f264655957aa7e9b407dd1127ddcc9f649 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab", "svg" => "modules/XC/ThemeTweaker/themetweaker_panel/icons/inline.svg", "label" => "Inline editor", "style" => ("themetweaker-tab themetweaker-tab_inline_editor " . $this->getAttribute(        // line 10
($context["this"] ?? null), "getTabClass", [0 => "inline_editor"], "method")), "disabled" =>  !$this->getAttribute(        // line 11
($context["this"] ?? null), "isTabAvailable", [0 => "inline_editor"], "method"), "disabledTooltip" => $this->getAttribute(        // line 12
($context["this"] ?? null), "getTabDisabledTooltip", [0 => "inline_editor"], "method"), "attributes" => $this->getAttribute(        // line 13
($context["this"] ?? null), "getTabAttributes", [0 => "inline_editor"], "method")]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.inline_editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  36 => 12,  35 => 11,  34 => 10,  33 => 7,  30 => 6,);
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
 # @ListChild(list=\"themetweaker-panel--tabs\", weight=\"30\")
 #}

{{ widget('XLite\\\\Module\\\\XC\\\\ThemeTweaker\\\\View\\\\Button\\\\ThemeTweakerTab',
  svg='modules/XC/ThemeTweaker/themetweaker_panel/icons/inline.svg',
  label=\"Inline editor\",
  style=\"themetweaker-tab themetweaker-tab_inline_editor \" ~ this.getTabClass('inline_editor'),
  disabled=(not this.isTabAvailable('inline_editor')),
  disabledTooltip=this.getTabDisabledTooltip('inline_editor'),
  attributes=this.getTabAttributes('inline_editor')) }}", "modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.inline_editor.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel\\tabs.inline_editor.twig");
    }
}
