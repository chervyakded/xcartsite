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

/* settings/cache_management.twig */
class __TwigTemplate_f70c52f9a863ad669ab150c7fde7ee8eeae2dfbbe204136453fdf2e8815decd8 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ( !$this->getAttribute(($context["this"] ?? null), "isQuickDataNotFinished", [], "method")) {
            // line 6
            echo "  <div class=\"rebuilded-time\">
      <span>";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Last time re-deployed at"]), "html", null, true);
            echo " </span>
      <span class=\"time\" data-time=\"";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLastRebuildTimeRaw", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLastRebuildTime", [], "method"), "html", null, true);
            echo "</span>
  </div>
  ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\ItemsList\\Model\\CacheManagementActions"]]), "html", null, true);
            echo "
";
        }
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "isQuickDataNotFinished", [], "method")) {
            // line 13
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\QuickData\\Progress"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "settings/cache_management.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  54 => 12,  49 => 10,  42 => 8,  38 => 7,  35 => 6,  33 => 5,  30 => 4,);
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
 # Cache management page
 #}

{% if not this.isQuickDataNotFinished() %}
  <div class=\"rebuilded-time\">
      <span>{{ t('Last time re-deployed at') }} </span>
      <span class=\"time\" data-time=\"{{ this.getLastRebuildTimeRaw() }}\">{{ this.getLastRebuildTime() }}</span>
  </div>
  {{ widget('\\\\XLite\\\\View\\\\ItemsList\\\\Model\\\\CacheManagementActions') }}
{% endif %}
{% if this.isQuickDataNotFinished() %}
  {{ widget('\\\\XLite\\\\View\\\\QuickData\\\\Progress') }}
{% endif %}
", "settings/cache_management.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\settings\\cache_management.twig");
    }
}
