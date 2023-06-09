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

/* form_model/body.twig */
class __TwigTemplate_e63bbac8d68829821c918e57abaffa7f1fcc3dd3af31b173adacacd02ddea368 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
";
        // line 2
        $context["form"] = $this->getAttribute(($context["this"] ?? null), "getFormView", [], "method");
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), $this->getAttribute(($context["this"] ?? null), "getFormThemeFiles", [], "method"), true);
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "v-on:submit" => "onSubmit"]]);
        echo "

";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "before", "type" => "inherited"]]), "html", null, true);
        echo "

";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "after", "type" => "inherited"]]), "html", null, true);
        echo "

";
        // line 13
        if ($this->getAttribute(($context["this"] ?? null), "useButtonPanel", [], "method")) {
            // line 14
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "buttonPanel", []), "display", [], "method"), "html", null, true);
            echo "
";
        }
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "footer", "type" => "inherited"]]), "html", null, true);
        echo "

";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "form_model/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  68 => 16,  62 => 14,  60 => 13,  55 => 11,  50 => 9,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% set form = this.getFormView() %}
{% form_theme form with this.getFormThemeFiles() %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'v-on:submit': 'onSubmit'}}) }}

{{ widget_list('before', type='inherited') }}

{{ form_widget(form) }}

{{ widget_list('after', type='inherited') }}

{% if this.useButtonPanel() %}
  {{ this.buttonPanel.display() }}
{% endif %}
{{ widget_list('footer', type='inherited') }}

{{ form_end(form) }}
", "form_model/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\form_model\\body.twig");
    }
}
