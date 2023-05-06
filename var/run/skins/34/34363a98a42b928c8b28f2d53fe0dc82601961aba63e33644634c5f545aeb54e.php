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

/* C:\OpenServer\domains\xcartsite\skins\customer\checkout\steps\review\parts\place_order.agree_note.browsewrap.twig */
class __TwigTemplate_4d158e89da035589a12f3e1106767ff23bedd434649979f2d80c91b2fba329fd extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "General", []), "terms_conditions_confirm_type", []) == twig_constant("XLite\\View\\FormField\\Select\\TermsConfirmType::TYPE_BROWSEWRAP"))) {
            // line 7
            echo "  <p class=\"agree-note\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Clicking the Place order button you accept: Terms and Conditions", ["URL" => $this->getAttribute(($context["this"] ?? null), "getTermsURL", [], "method")]]);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\checkout\\steps\\review\\parts\\place_order.agree_note.browsewrap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\checkout\\steps\\review\\parts\\place_order.agree_note.browsewrap.twig", "");
    }
}
