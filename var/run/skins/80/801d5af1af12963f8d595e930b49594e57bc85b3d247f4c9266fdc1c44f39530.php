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

/* C:\OpenServer\domains\xcartsite\skins\admin\images_settings\parts\layout_settings.cloud_zoom.twig */
class __TwigTemplate_978653db5c6f368e421cdddc19e9ef9ac960c0e4094c3d12b239f099544020cc extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isCloudZoomAllowed", [], "method")) {
            // line 8
            echo "  <li>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => "Cloud Zoom", "fieldName" => "cloud_zoom", "value" => $this->getAttribute(($context["this"] ?? null), "getCloudZoomEnabled", [], "method")]]), "html", null, true);
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\images_settings\\parts\\layout_settings.cloud_zoom.twig";
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
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\images_settings\\parts\\layout_settings.cloud_zoom.twig", "");
    }
}
