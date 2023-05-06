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

/* product/details/parts/gallery_mobile.twig */
class __TwigTemplate_c78eeda296563764bf0828214579168d0496b9faf8a578edf343681b40812817 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-image-gallery";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCSSClasses", [], "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleAsHidden", [], "method")) {
            echo " style=\"display:none;\"";
        }
        echo ">
  <div class=\"product-image-gallery-navigation product-image-gallery-prev-mobile\" id='product-image-gallery-prev-mobile-";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "' style=\"display: none\"></div>
  <div class=\"slides\">

    <ul
            class=\"cycle-cloak cycle-slideshow\"
            data-cycle-carousel-vertical=false
            data-cycle-carousel-visible=";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMinCountForSlider", [], "method"), "html", null, true);
        echo "
            data-cycle-next=\"#product-image-gallery-next-mobile-";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "\"
            data-cycle-prev=\"#product-image-gallery-prev-mobile-";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "\"
            data-cycle-slides=\"> li\"
    >
      ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getDefaultCycleData", [], "method")], "method"), "html", null, true);
        echo "
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getPublicImages", [], "method"));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 19
            echo "        <li ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getListItemClassAttribute", [0 => $context["i"], 1 => $context["image"]], "method")], "method");
            echo ">
          <a href=\"";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getFrontURL", [], "method"), "html", null, true);
            echo "\" rel=\"lightbox\"
             rev=\"width: ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getWidth", [], "method"), "html", null, true);
            echo ", height: ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getHeight", [], "method"), "html", null, true);
            echo "\"
             title=\"";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getAlt", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "image" => $context["image"], "alt" => $this->getAttribute(($context["this"] ?? null), "getAlt", [0 => $context["image"], 1 => $context["i"]], "method"), "imageSizeType" => "MSThumbnail"]]), "html", null, true);
            echo "</a>
          ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "className" => "middle", "style" => "display: none;", "image" => $context["image"], "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getWidgetMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getWidgetMaxHeight", [], "method"), "alt" => $this->getAttribute(($context["this"] ?? null), "getAlt", [0 => $context["image"], 1 => $context["i"]], "method")]]), "html", null, true);
            echo "
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
  </div>

  <div class=\"product-image-gallery-navigation product-image-gallery-next-mobile\" id='product-image-gallery-next-mobile-";
        // line 29
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method"), "html", null, true);
        echo "' style=\"display: none\"></div>
</div>

<script>
  var lightBoxImagesDir = '";
        // line 33
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLightBoxImagesDir", [], "method"), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/gallery_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  107 => 29,  102 => 26,  93 => 23,  87 => 22,  81 => 21,  77 => 20,  72 => 19,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  50 => 12,  41 => 6,  33 => 5,  30 => 4,);
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

<div class=\"product-image-gallery{{ this.getCSSClasses() }}\"{% if this.isVisibleAsHidden() %} style=\"display:none;\"{% endif %}>
  <div class=\"product-image-gallery-navigation product-image-gallery-prev-mobile\" id='product-image-gallery-prev-mobile-{{ this.getProductId() }}' style=\"display: none\"></div>
  <div class=\"slides\">

    <ul
            class=\"cycle-cloak cycle-slideshow\"
            data-cycle-carousel-vertical=false
            data-cycle-carousel-visible={{ this.getMinCountForSlider() }}
            data-cycle-next=\"#product-image-gallery-next-mobile-{{ this.getProductId() }}\"
            data-cycle-prev=\"#product-image-gallery-prev-mobile-{{ this.getProductId() }}\"
            data-cycle-slides=\"> li\"
    >
      {{ this.displayCommentedData(this.getDefaultCycleData()) }}
      {% for i, image in this.product.getPublicImages() %}
        <li {{ this.printTagAttributes(this.getListItemClassAttribute(i, image))|raw }}>
          <a href=\"{{ image.getFrontURL() }}\" rel=\"lightbox\"
             rev=\"width: {{ image.getWidth() }}, height: {{ image.getHeight() }}\"
             title=\"{{ image.getAlt() }}\">{{ widget('\\\\XLite\\\\View\\\\Image', image=image, alt=this.getAlt(image, i), imageSizeType='MSThumbnail') }}</a>
          {{ widget('\\\\XLite\\\\View\\\\Image', className='middle', style='display: none;', image=image, maxWidth=this.getWidgetMaxWidth(), maxHeight=this.getWidgetMaxHeight(), alt=this.getAlt(image, i)) }}
        </li>
      {% endfor %}
    </ul>
  </div>

  <div class=\"product-image-gallery-navigation product-image-gallery-next-mobile\" id='product-image-gallery-next-mobile-{{ this.getProductId() }}' style=\"display: none\"></div>
</div>

<script>
  var lightBoxImagesDir = '{{ this.getLightBoxImagesDir() }}';
</script>
", "product/details/parts/gallery_mobile.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\crisp_white\\customer\\product\\details\\parts\\gallery_mobile.twig");
    }
}
