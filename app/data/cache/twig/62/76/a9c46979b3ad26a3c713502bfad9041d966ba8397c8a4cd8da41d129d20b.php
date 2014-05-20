<?php

/* admin/goods/category.twig */
class __TwigTemplate_6276a9c46979b3ad26a3c713502bfad9041d966ba8397c8a4cd8da41d129d20b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin/base.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"/js/jstree/themes/default/style.min.css\"/>
    <script src=\"/js/jstree/jstree.min.js\"></script>
    <h1>分类管理</h1>
    <div class=\"ui two column divided grid\">
        <div class=\"row\">
            <div class=\"column\">
                <div id=\"tree\">";
        // line 9
        echo (isset($context["tree"]) ? $context["tree"] : null);
        echo "</div>
            </div>
            <div class=\"column\">
                <div class=\"ui form segment\">
                    <div class=\"field\">
                        <label>修改分类名称</label>

                        <div class=\"ui left labeled icon input\"><input id=\"rename-title\"></div>
                    </div>
                    <div class=\"field\">
                        <a id=\"rename\" class=\"ui green submit button\" href=\"#\">修改分类名称</a>
                        <a id=\"delete\" class=\"ui red submit button delete\" href=\"#\">删除分类</a>
                    </div>
                    <div class=\"field\">
                        <input type=\"hidden\" id=\"selected-id\">
                        <label>新增分类</label>

                        <div class=\"ui left labeled icon input\"><input id=\"title\"></div>
                    </div>
                    <div class=\"field\">
                        <a id=\"add-child\" class=\"ui blue submit button\" href=\"#\">创建子分类</a> -
                        <a id=\"add-pre\" class=\"ui blue submit button\" href=\"#\">上方插入分类</a>
                        <a id=\"add-next\" class=\"ui blue submit button\" href=\"#\">下方插入分类</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        function addNode(type) {
            if (\$('#title').val() == '') {
                alert('分类名称不能为空');
                return false;
            }

            \$.post('";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_category_add");
        echo "', { 'name': '";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "', 'selected': \$('#selected-id').val(), 'position': type, 'title': \$('#title').val() }, function (data) {
                if (data.success) {
                    alert('操作成功');
                    location.reload();
                } else {
                    alert('出现错误');
                }

                return false;
            });
        }
        function rename() {
            if (\$('#rename-title').val() == '') {
                alert('分类名称不能为空');
                return false;
            }
            if (!\$('#selected-id').val()) {
                alert('请选择分类');
                return false;
            }

            \$.post('";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_category_rename");
        echo "', { 'name': '";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "', 'selected': \$('#selected-id').val(), 'title': \$('#rename-title').val() }, function (data) {
                if (data.success) {
                    alert('操作成功');
                    location.reload();
                } else {
                    alert('出现错误');
                }

                return false;
            });
        }
        function del() {
            if (!\$('#selected-id').val()) {
                alert('请选择分类');
                return false;
            }

            \$.post('";
        // line 85
        echo $this->env->getExtension('routing')->getPath("admin_category_delete");
        echo "', { 'selected': \$('#selected-id').val() }, function (data) {
                if (data.success) {
                    alert('操作成功');
                    location.reload();
                } else {
                    alert('出现错误');
                }

                return false;
            });
        }
        function move(id, parent, position) {
            \$.post('";
        // line 97
        echo $this->env->getExtension('routing')->getPath("admin_category_move");
        echo "', { 'name': '";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "', 'selected': id, 'parent': parent, 'position': position}, function (data) {
                if (data.success) {
                    alert('操作成功');
                    //location.reload();
                } else {
                    alert('出现错误');
                }

                return false;
            });
        }
        \$(function () {
            \$('#tree').jstree({
                \"core\": {
                    \"multiple\": false,
                    \"check_callback\": true,
                    \"animation\": 0
                },
                \"plugins\": [
                    \"dnd\"
                ]
            });
            \$('#tree').on('move_node.jstree', function (e, data) {
//                console.log(data);
            });
            \$('#add-child').on('click', function () {
                addNode('child');
            });

            \$('#add-pre').on('click', function () {
                if (!\$('#selected-id').val()) {
                    alert('请先选择一个分类');
                    return false;
                }
                addNode('pre');
            });

            \$('#add-next').on('click', function () {
                if (!\$('#selected-id').val()) {
                    alert('请先选择一个分类');
                    return false;
                }
                addNode('next');
            });

            \$('#rename').on('click', function () {
                rename();
            });
            \$('#delete').on('click', function () {
                del();
            });

            \$('#tree').on('changed.jstree', function (e, data) {
                \$('#selected-id').val(data.instance.get_node(data.selected[0]).id);
                \$('#rename-title').val(data.instance.get_node(data.selected[0]).text);
            });

            \$('#tree').on('move_node.jstree', function (e, data) {
                move(data.node.id, data.parent, data.position);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "admin/goods/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 97,  128 => 85,  106 => 68,  80 => 47,  39 => 9,  31 => 3,  28 => 2,);
    }
}
