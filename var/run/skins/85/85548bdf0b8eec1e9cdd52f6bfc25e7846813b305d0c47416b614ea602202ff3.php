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

/* C:\OpenServer\domains\xcartsite\skins\crisp_white\customer\layout\header\mobile_header_parts\navbar\first_additional_menu.twig */
class __TwigTemplate_0d2af433087c592817741e0909f8898ee14d375aee2c8e5f3c6f731f31be6b98 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isSlidebar", [])) {
            // line 7
            echo "  <li class=\"additional-menu-wrapper\">
    <ul class=\"Inset additional-menu\">
      ";
            // line 9
            ob_start(function () { return ''; });
            // line 10
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.navbar.account.first-additional-menu"]]), "html", null, true);
            echo "
      ";
            $context["account_additional_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
      ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["account_additional_items"] ?? null), "html", null, true);
            echo "
    </ul>
  </li>
  ";
            // line 16
            if ( !twig_test_empty(twig_trim_filter(($context["account_additional_items"] ?? null)))) {
                // line 17
                echo "    <li class=\"mm-divider\"></li>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\navbar\\first_additional_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  53 => 16,  47 => 13,  44 => 12,  38 => 10,  36 => 9,  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\navbar\\first_additional_menu.twig", "");
    }
}
