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

/* C:\OpenServer\domains\xcartsite\skins\customer\product\details\parts\common.image-previous.twig */
class __TwigTemplate_b696d7fe2fec11cd78f4bebcfc2f9806bbb8f7f02d82c033a07274030d418f1d extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getImages", [], "method") && ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "countImages", [], "method") != 1))) {
            // line 7
            echo "  <a class=\"arrow left-arrow\" href=\"javascript:void(0);\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
            echo "\" alt=\"Previous image\" /></a>
";
        }
        // line 9
        if ( !($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getImages", [], "method") || ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "countImages", [], "method") == 1))) {
            // line 10
            echo "  <span class=\"arrow left-arrow\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\common.image-previous.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  38 => 9,  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\details\\parts\\common.image-previous.twig", "");
    }
}
