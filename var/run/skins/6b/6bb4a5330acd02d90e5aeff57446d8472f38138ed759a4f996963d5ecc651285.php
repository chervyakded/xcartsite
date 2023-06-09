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

/* header/parts/js_static.twig */
class __TwigTemplate_9a2361561fc957a4331e1a62eb05ec923cca2fcfcaa92ddd37d81de318e8bfa7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<script type=\"text/javascript\">
var xliteConfig = {
  script:              '";
        // line 9
        echo $this->getAttribute(($context["this"] ?? null), "getScript", [], "method");
        echo "',
  target:              '";
        // line 10
        echo $this->getAttribute(($context["this"] ?? null), "getTarget", [], "method");
        echo "',
  language:            '";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currentLanguage", []), "getCode", [], "method"), "html", null, true);
        echo "',
  success_lng:         '";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Success"]), "html", null, true);
        echo "',
  base_url:            '";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBaseShopURL", [], "method"), "html", null, true);
        echo "',
  form_id:             '";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "xlite", []), "formId", []), "html", null, true);
        echo "',
  form_id_name:        '";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_constant("XLite::FORM_ID"), "html", null, true);
        echo "',
  zone:                'admin',
  developer_mode:      ";
        // line 17
        echo (($this->getAttribute(($context["this"] ?? null), "isDeveloperMode", [], "method")) ? ("true") : ("false"));
        echo ",
  cloud:               ";
        // line 18
        echo (($this->getAttribute(($context["this"] ?? null), "isCloud", [], "method")) ? ("true") : ("false"));
        echo ",
};
</script>
";
    }

    public function getTemplateName()
    {
        return "header/parts/js_static.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  63 => 17,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 7,);
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
 # Header part
 #
 # @ListChild (list=\"head\", weight=\"100\")
 #}
{# TODO : Remove the whole static code into the comment model#}
<script type=\"text/javascript\">
var xliteConfig = {
  script:              '{{ this.getScript()|raw }}',
  target:              '{{ this.getTarget()|raw }}',
  language:            '{{ this.currentLanguage.getCode() }}',
  success_lng:         '{{ t('Success') }}',
  base_url:            '{{ this.getBaseShopURL() }}',
  form_id:             '{{ this.xlite.formId }}',
  form_id_name:        '{{ constant('XLite::FORM_ID') }}',
  zone:                'admin',
  developer_mode:      {{ this.isDeveloperMode() ? 'true' : 'false' }},
  cloud:               {{ this.isCloud() ? 'true' : 'false' }},
};
</script>
", "header/parts/js_static.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\header\\parts\\js_static.twig");
    }
}
