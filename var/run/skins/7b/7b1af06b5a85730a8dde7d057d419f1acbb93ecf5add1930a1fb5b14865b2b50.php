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

/* C:\OpenServer\domains\xcartsite\skins\customer\modules\XC\AvaTax\checkout\steps\shipping\parts\button.second.twig */
class __TwigTemplate_42bfef037663e2eb88b4d1263bb5cbd8e29b43b0810e1930c6e22af09d86dded extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute(($context["this"] ?? null), "isShippingEnabled", [], "method") && $this->getAttribute(($context["this"] ?? null), "isAvaTaxAddressVerificationEnabled", [], "method"))) {
            // line 8
            echo "  <div class=\"avatax-check-box billing\" ";
            if ($this->getAttribute(($context["this"] ?? null), "isSameAddress", [], "method")) {
                echo " style=\"display: none;\"";
            }
            echo ">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Check address"]), "style" => "avatax-check billing"]]), "html", null, true);
            echo " 
  </div>
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\AvaTax\\checkout\\steps\\shipping\\parts\\button.second.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  42 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\AvaTax\\checkout\\steps\\shipping\\parts\\button.second.twig", "");
    }
}
