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

/* center.twig */
class __TwigTemplate_7e882077a9220cc6b115389bdc40a7d8ab8572609a1b1d795823f55cfc750671 extends \XLite\Core\Templating\Twig\Template
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
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("noscript.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 6
        $this->loadTemplate("noscript.twig", "center.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "
";
        // line 8
        if (($this->getAttribute(($context["this"] ?? null), "isTitleVisible", [], "method") && $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method"))) {
            // line 9
            echo "  <h1 class=\"title text-capitalize\" id=\"page-title\">
    <div id=\"breadcrumb\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.main.breadcrumb"]]), "html", null, true);
            echo "
    </div>
  </h1>
";
        }
        // line 15
        echo "
";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "admin.h1.after"]]), "html", null, true);
        echo "

";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "admin.center"]]), "html", null, true);
        echo "

";
        // line 20
        if (($this->getAttribute(($context["this"] ?? null), "target", []) == "access_denied")) {
            // line 21
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("access_denied.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("access_denied.twig", "center.twig", 21)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 23
        echo "
";
        // line 24
        if (($this->getAttribute(($context["this"] ?? null), "target", []) == "license_restriction")) {
            // line 25
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("license_message.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("license_message.twig", "center.twig", 25)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 27
        echo "
";
        // line 31
        echo "
";
        // line 32
        if ((($this->getAttribute(($context["this"] ?? null), "target", []) == "profile") && ($this->getAttribute(($context["this"] ?? null), "mode", []) == "delete"))) {
            // line 33
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "common/dialog.twig", "head" => "Delete profile - Confirmation", "body" => "profile/confirm_delete.twig"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  106 => 32,  103 => 31,  100 => 27,  88 => 25,  86 => 24,  83 => 23,  71 => 21,  69 => 20,  64 => 18,  59 => 16,  56 => 15,  49 => 11,  45 => 9,  43 => 8,  40 => 7,  35 => 6,);
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
 # Center column
 #
 # @ListChild (list=\"admin.main.page.content.center\", weight=\"10\")
 #}
{% include 'noscript.twig' %}

{% if this.isTitleVisible() and this.getTitle() %}
  <h1 class=\"title text-capitalize\" id=\"page-title\">
    <div id=\"breadcrumb\">
      {{ widget_list('layout.main.breadcrumb') }}
    </div>
  </h1>
{% endif %}

{{ widget_list('admin.h1.after') }}

{{ widget_list('admin.center') }}

{% if this.target == 'access_denied' %}
  {% include 'access_denied.twig' %}
{% endif %}

{% if this.target == 'license_restriction' %}
  {% include 'license_message.twig' %}
{% endif %}

{### TODO: will be moved to the dashboard side bar
<widget template=\"common/dialog.tpl\" head=\"Customer zone warning\" body=\"customer_zone_warning.tpl\" IF=\"{getCustomerZoneWarning()}\" />
###}

{% if this.target == 'profile' and this.mode == 'delete' %}
  {{ widget(template='common/dialog.twig', head='Delete profile - Confirmation', body='profile/confirm_delete.twig') }}
{% endif %}
", "center.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\center.twig");
    }
}
