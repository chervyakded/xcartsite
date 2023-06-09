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

/* layout/footer/main.footer.twig */
class __TwigTemplate_8cf9b26c0d4a5897767d78772ed3aaf76b103a8ef41930774b17a6c7af245b64 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"footer-area\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.main.footer.before"]]), "html", null, true);
        echo "
    <div class=\"container\">
        ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.main.footer"]]), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/main.footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  34 => 8,  30 => 6,);
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
 # Footer
 #
 # @ListChild (list=\"layout.footer\", weight=\"500\")
 #}

<div id=\"footer-area\">
    {{ widget_list('layout.main.footer.before') }}
    <div class=\"container\">
        {{ widget_list('layout.main.footer') }}
    </div>
</div>
", "layout/footer/main.footer.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\layout\\footer\\main.footer.twig");
    }
}
