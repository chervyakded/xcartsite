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

/* C:\OpenServer\domains\xcartsite\skins\customer\modules\CDev\Paypal\login\signin\signin.paypal.twig */
class __TwigTemplate_5f9847bc4cdd22ea8e7d54dff7d754b560716a26f1f2e5b1e28aa1c94794dde2 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget", "placement" => "signin", "text_before" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Use existing PayPal account"]), "text_after" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Or sign in the classic way"])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\Paypal\\login\\signin\\signin.paypal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\Paypal\\login\\signin\\signin.paypal.twig", "");
    }
}
