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

/* product/details/parts/image-regular.twig */
class __TwigTemplate_8c8120ab649cef9ffc41d74d00e319f50e773a2587ab263c0bfe4ad25102c169 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"product-photo\">
  <div class=\"image-flex-item\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CrispWhiteSkin\\View\\CommonImage", "lazyLoad" => true, "image" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getImage", [], "method"), "className" => "photo product-thumbnail", "verticalAlign" => "top", "id" => ("product_image_" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "product_id", [])), "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getWidgetMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getWidgetMaxHeight", [], "method"), "alt" => $this->getAttribute(($context["this"] ?? null), "getAlt", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getImage", [], "method")], "method")]]), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/image-regular.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 4,);
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
 # Product details image default box
 #}
<div class=\"product-photo\">
  <div class=\"image-flex-item\">
    {{ widget('\\\\XLite\\\\Module\\\\XC\\\\CrispWhiteSkin\\\\View\\\\CommonImage', lazyLoad=true, image=this.product.getImage(), className='photo product-thumbnail', verticalAlign='top', id='product_image_' ~ this.product.product_id, maxWidth=this.getWidgetMaxWidth(), maxHeight=this.getWidgetMaxHeight(), alt=this.getAlt(this.product.getImage())) }}
  </div>
</div>
", "product/details/parts/image-regular.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\product\\details\\parts\\image-regular.twig");
    }
}
