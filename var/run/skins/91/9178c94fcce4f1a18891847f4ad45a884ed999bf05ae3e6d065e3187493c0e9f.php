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

/* modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.twig */
class __TwigTemplate_00975d66cd66a8055cd1ce293538a06b39c8ec70aa26925d29cfe8dd86a699ed extends \XLite\Core\Templating\Twig\Template
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
<div class=\"themetweaker-panel--tabs-wrapper\">
    <div class=\"themetweaker-panel--tabs\" data-panel-tabs>
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "themetweaker-panel--tabs"]]), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  30 => 6,);
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
 # @ListChild(list=\"themetweaker-panel--header\", weight=\"100\")
 #}

<div class=\"themetweaker-panel--tabs-wrapper\">
    <div class=\"themetweaker-panel--tabs\" data-panel-tabs>
        {{ widget_list('themetweaker-panel--tabs') }}
    </div>
</div>", "modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel\\tabs.twig");
    }
}
