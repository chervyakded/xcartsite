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

/* product/details/parts/gallery.twig */
class __TwigTemplate_8295c0a636b03135d9d1308bd40496059c08491c711c3a587736932805e1e479 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"product-image-gallery\"";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleAsHidden", [], "method")) {
            echo " style=\"display:none;\"";
        }
        echo ">
  <div class=\"product-image-gallery-navigation product-image-gallery-prev\" id='product-image-gallery-prev-";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "' style=\"display: none\"></div>
  <ul
          class=\"cycle-cloak cycle-slideshow\"
          data-cycle-carousel-vertical=true
          data-cycle-carousel-visible=";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMinCountForSlider", [], "method"), "html", null, true);
        echo "
          data-cycle-next=\"#product-image-gallery-next-";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "\"
          data-cycle-prev=\"#product-image-gallery-prev-";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "\"
          data-cycle-slides=\"> li\"
  >
    ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getDefaultCycleData", [], "method")], "method"), "html", null, true);
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getPublicImages", [], "method"));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 17
            echo "      <li ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getListItemClassAttribute", [0 => $context["i"], 1 => $context["image"]], "method")], "method");
            echo ">
        <a href=\"";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getFrontURL", [], "method"), "html", null, true);
            echo "\" rel=\"lightbox\"
           rev=\"width: ";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getWidth", [], "method"), "html", null, true);
            echo ", height: ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getHeight", [], "method"), "html", null, true);
            echo "\"
           title=\"";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getAlt", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "image" => $context["image"], "alt" => $this->getAttribute(($context["this"] ?? null), "getAlt", [0 => $context["image"], 1 => $context["i"]], "method"), "imageSizeType" => "XSThumbnail"]]), "html", null, true);
            echo "</a>
        ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "className" => "middle", "style" => "display: none;", "image" => $context["image"], "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getWidgetMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getWidgetMaxHeight", [], "method"), "alt" => $this->getAttribute(($context["this"] ?? null), "getAlt", [0 => $context["image"], 1 => $context["i"]], "method")]]), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </ul>

  <div class=\"product-image-gallery-navigation product-image-gallery-next\" id='product-image-gallery-next-";
        // line 26
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "' style=\"display: none\"></div>
</div>

<script>
  var lightBoxImagesDir = '";
        // line 30
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLightBoxImagesDir", [], "method"), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  102 => 26,  98 => 24,  89 => 21,  83 => 20,  77 => 19,  73 => 18,  68 => 17,  64 => 16,  60 => 15,  54 => 12,  50 => 11,  46 => 10,  39 => 6,  33 => 5,  30 => 4,);
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
 # Gallery widget
 #}

<div class=\"product-image-gallery\"{% if this.isVisibleAsHidden() %} style=\"display:none;\"{% endif %}>
  <div class=\"product-image-gallery-navigation product-image-gallery-prev\" id='product-image-gallery-prev-{{ this.getProductId() }}' style=\"display: none\"></div>
  <ul
          class=\"cycle-cloak cycle-slideshow\"
          data-cycle-carousel-vertical=true
          data-cycle-carousel-visible={{ this.getMinCountForSlider() }}
          data-cycle-next=\"#product-image-gallery-next-{{ this.getProductId() }}\"
          data-cycle-prev=\"#product-image-gallery-prev-{{ this.getProductId() }}\"
          data-cycle-slides=\"> li\"
  >
    {{ this.displayCommentedData(this.getDefaultCycleData()) }}
    {% for i, image in this.product.getPublicImages() %}
      <li {{ this.printTagAttributes(this.getListItemClassAttribute(i, image))|raw }}>
        <a href=\"{{ image.getFrontURL() }}\" rel=\"lightbox\"
           rev=\"width: {{ image.getWidth() }}, height: {{ image.getHeight() }}\"
           title=\"{{ image.getAlt() }}\">{{ widget('\\\\XLite\\\\View\\\\Image', image=image, alt=this.getAlt(image, i), imageSizeType='XSThumbnail') }}</a>
        {{ widget('\\\\XLite\\\\View\\\\Image', className='middle', style='display: none;', image=image, maxWidth=this.getWidgetMaxWidth(), maxHeight=this.getWidgetMaxHeight(), alt=this.getAlt(image, i)) }}
      </li>
    {% endfor %}
  </ul>

  <div class=\"product-image-gallery-navigation product-image-gallery-next\" id='product-image-gallery-next-{{ this.getProductId() }}' style=\"display: none\"></div>
</div>

<script>
  var lightBoxImagesDir = '{{ this.getLightBoxImagesDir() }}';
</script>
", "product/details/parts/gallery.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\product\\details\\parts\\gallery.twig");
    }
}
