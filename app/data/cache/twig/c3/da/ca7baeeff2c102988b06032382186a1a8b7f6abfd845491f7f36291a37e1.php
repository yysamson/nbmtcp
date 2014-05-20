<?php

/* macro/goods_list.twig */
class __TwigTemplate_c3daca7baeeff2c102988b06032382186a1a8b7f6abfd845491f7f36291a37e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getgoods_list($_goods_array = null)
    {
        $context = $this->env->mergeGlobals(array(
            "goods_array" => $_goods_array,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["goods_array"]) ? $context["goods_array"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["goods"]) {
                // line 3
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("goods", array("id" => $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "id"))), "html", null, true);
                echo "\">

            <div class=\"pro-list\">
                <div class=\"container\">
                    <div class=\"pro-xx\">
                        <div class=\"pro-img\"><img src=\"";
                // line 8
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "image"), "/images/default-pro.jpg")) : ("/images/default-pro.jpg")), "html", null, true);
                echo "\"></div>
                        <div class=\"pro-info\">
                            <h2 class=\"pro-name\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "name"), "html", null, true);
                echo "</h2>

                            <div class=\"price-info\">
                                <h3 class=\"price\">￥<span class=\"bigprice\">";
                // line 13
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "price"), 2), "html", null, true);
                echo "</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macro/goods_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  51 => 10,  46 => 8,  37 => 3,  32 => 2,  21 => 1,  80 => 43,  70 => 36,  64 => 33,  33 => 4,  30 => 3,  25 => 2,);
    }
}
