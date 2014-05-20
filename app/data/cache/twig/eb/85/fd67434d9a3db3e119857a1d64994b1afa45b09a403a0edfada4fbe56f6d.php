<?php

/* products.twig */
class __TwigTemplate_eb85fd67434d9a3db3e119857a1d64994b1afa45b09a403a0edfada4fbe56f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'nav_title' => array($this, 'block_nav_title'),
            'main' => array($this, 'block_main'),
            'end_js' => array($this, 'block_end_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["goods_list"] = $this->env->loadTemplate("macro/goods_list.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nav_title($context, array $blocks = array())
    {
        // line 4
        echo "    <a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left return1\"></span>";
        echo twig_escape_filter($this->env, (isset($context["cate_name"]) ? $context["cate_name"] : null), "html", null, true);
        echo "</a>
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"cate\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["cate"]) ? $context["cate"] : null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" id=\"page\" value=\"1\"/>
    <div class=\"main\">
        <div id=\"products\" class=\"products\">
            ";
        // line 11
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getUrl("list_block", array("cate" => (isset($context["cate"]) ? $context["cate"] : null))));
        echo "
        </div>
        <!--products end-->
        <div class=\"load\">
            <div class=\"container\">
                <button id=\"load-more\" type=\"button\" class=\"btn btn-primary btn-lg btn-block\">加载更多</button>
            </div>
        </div>
    </div>  <!--main end-->
";
    }

    // line 21
    public function block_end_js($context, array $blocks = array())
    {
        // line 22
        echo "    <script>
        \$('#load-more').on('click', function () {
            if (!(\$(this).hasClass('disabled'))) {
                \$(this).addClass('disabled');
                \$(this).text('加载中');
                var page = parseInt(\$('#page').val()) + 1;
                \$.get('/list_block/";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["cate"]) ? $context["cate"] : null), "html", null, true);
        echo "/_' + page, function (data) {
                    if (data.replace(/\\s/g, \"\")) {
                        \$('#products').append(data);
                        \$('#load-more')
                                .removeClass('disabled')
                                .text('加载更多');
                        \$('#page').val(page);
                    } else {
                        \$('#load-more')
                                .text('没有更多');
                    }
                });
            }
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  72 => 22,  69 => 21,  55 => 11,  47 => 7,  44 => 6,  35 => 4,  32 => 3,  27 => 2,);
    }
}
