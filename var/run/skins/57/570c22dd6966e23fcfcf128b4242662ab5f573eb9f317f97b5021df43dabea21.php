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

/* modules/XC/FacebookMarketing/product/details/pixel_value/body.twig */
class __TwigTemplate_3e40727c6c037e65af833ddb8af2ad1741210a6fea46d0df7631ea9f217f37af extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFingerprint", [], "method"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"facebook_pixel_content_id\" value=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFacebookPixelContentId", [], "method"), "html", null, true);
        echo "\" />
  <input type=\"hidden\" name=\"facebook_pixel_value\" value=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFacebookPixelValue", [], "method"), "html", null, true);
        echo "\" />
  <input type=\"hidden\" name=\"facebook_pixel_value_currency\" value=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFacebookPixelValueCurrency", [], "method"), "html", null, true);
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/FacebookMarketing/product/details/pixel_value/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  35 => 5,  30 => 4,);
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
 # Product sku
 #}
<div class=\"{{ this.getFingerprint() }}\">
  <input type=\"hidden\" name=\"facebook_pixel_content_id\" value=\"{{ this.getFacebookPixelContentId() }}\" />
  <input type=\"hidden\" name=\"facebook_pixel_value\" value=\"{{ this.getFacebookPixelValue() }}\" />
  <input type=\"hidden\" name=\"facebook_pixel_value_currency\" value=\"{{ this.getFacebookPixelValueCurrency() }}\" />
</div>
", "modules/XC/FacebookMarketing/product/details/pixel_value/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\FacebookMarketing\\product\\details\\pixel_value\\body.twig");
    }
}
