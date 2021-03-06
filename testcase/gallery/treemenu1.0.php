<!--页头公共资源引入-->
<? include("../common/head.php");?>

<!--
    需要测试的dom结构，注意，最外层<div class="J_TScriptedModule" data-componentid="uniqueSign">
的class和为属性不可修改
    用户的javascript理论上只可以作用到这个dom下面，不可以"越界"
-->

<style>
	body{font-size:12px; padding:5px;}
	button{padding:3px 5px;}
	td{padding:3px;}
	#menu{width:300px;}

	.treemenu-gray-dot-menu{font-size:12px; color:#444;}
	.treemenu-gray-dot-menu dl{padding:0; margin:0;}
	.treemenu-gray-dot-menu dt, .treemenu-gray-dot-menu dd{padding-left:18px; line-height:22px;}
	.treemenu-gray-dot-menu dd{ margin-left:4px; padding-left:0; background:url(http://gtms01.alicdn.com/tps/i1/T1aHK0FglgXXb4Qgbc-30-24.png) -24px 0 repeat-y;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-unfold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 -21px no-repeat;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-fold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 0 no-repeat;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-last{background:none;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-cross{width:20px; height:16px; float:left; padding:0; margin:0 5px 0 0; background:url(http://gtms01.alicdn.com/tps/i1/T1aHK0FglgXXb4Qgbc-30-24.png);}
	.treemenu-gray-dot-menu .treemenu-gray-dot-leaf{color:#666;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-submenu{margin-left:20px;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-quto{quotes:none; padding:3px 4px; cursor:pointer; -moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-selected{background:#666; color:#FFF;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-mouseover-node{background:#CCC;}
	.treemenu-gray-dot-menu .treemenu-gray-dot-mouseover-leaf{background:#EEE;}


	.treemenu-blue-dot-menu{font-size:12px; color:#009;}
	.treemenu-blue-dot-menu dl{padding:0; margin:0;}
	.treemenu-blue-dot-menu dt, .treemenu-blue-dot-menu dd{padding-left:18px; line-height:22px;}
	.treemenu-blue-dot-menu dd{ margin-left:4px; padding-left:0; background:url(http://gtms03.alicdn.com/tps/i3/T14ym5FhBaXXbSM3bc-30-24.gif) -24px 0 repeat-y;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-unfold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 -21px no-repeat;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-fold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 0 no-repeat;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-last{background:none;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-cross{width:20px; height:16px; float:left; padding:0; margin:0 5px 0 0; background:url(http://gtms03.alicdn.com/tps/i3/T14ym5FhBaXXbSM3bc-30-24.gif);}
	.treemenu-blue-dot-menu .treemenu-blue-dot-leaf{color:#00C;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-submenu{margin-left:20px;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-quto{quotes:none; padding:3px 4px; cursor:pointer; -moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-selected{background:#06C; color:#FFF;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-mouseover-node{background:#069; color:#FFF;}
	.treemenu-blue-dot-menu .treemenu-blue-dot-mouseover-leaf{background:#D9D9FF;}


	.treemenu-gray-line-menu{font-size:12px; color:#444;}
	.treemenu-gray-line-menu dl{padding:0; margin:0;}
	.treemenu-gray-line-menu dt, .treemenu-gray-line-menu dd{padding-left:18px; line-height:22px;}
	.treemenu-gray-line-menu dd{ margin-left:4px; padding-left:0; background:url(http://gtms01.alicdn.com/tps/i1/T1FDSMFb0gXXbSM3bc-30-24.gif) -24px 0 repeat-y;}
	.treemenu-gray-line-menu .treemenu-gray-line-unfold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 -40px no-repeat;}
	.treemenu-gray-line-menu .treemenu-gray-line-fold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 -60px no-repeat;}
	.treemenu-gray-line-menu .treemenu-gray-line-last{background:none;}
	.treemenu-gray-line-menu .treemenu-gray-line-cross{width:20px; height:16px; float:left; padding:0; margin:0 5px 0 0; background:url(http://gtms01.alicdn.com/tps/i1/T1FDSMFb0gXXbSM3bc-30-24.gif);}
	.treemenu-gray-line-menu .treemenu-gray-line-leaf{color:#666;}
	.treemenu-gray-line-menu .treemenu-gray-line-submenu{margin-left:20px;}
	.treemenu-gray-line-menu .treemenu-gray-line-quto{quotes:none; padding:3px 4px; cursor:pointer; -moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px;}
	.treemenu-gray-line-menu .treemenu-gray-line-selected{background:#666; color:#FFF;}
	.treemenu-gray-line-menu .treemenu-gray-line-mouseover-node{background:#CCC;}
	.treemenu-gray-line-menu .treemenu-gray-line-mouseover-leaf{background:#EEE;}


	.treemenu-orange-line-menu{font-size:12px; color:#F60;}
	.treemenu-orange-line-menu dl{padding:0; margin:0;}
	.treemenu-orange-line-menu dt, .treemenu-orange-line-menu dd{padding-left:18px; line-height:22px;}
	.treemenu-orange-line-menu dd{ margin-left:4px; padding-left:0; background:url(http://gtms04.alicdn.com/tps/i4/T1Rq94FbRcXXbSM3bc-30-24.gif) -24px 0 repeat-y;}
	.treemenu-orange-line-menu .treemenu-orange-line-unfold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 -98px no-repeat;}
	.treemenu-orange-line-menu .treemenu-orange-line-fold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 -118px no-repeat;}
	.treemenu-orange-line-menu .treemenu-orange-line-last{background:none;}
	.treemenu-orange-line-menu .treemenu-orange-line-cross{width:20px; height:16px; float:left; padding:0; margin:0 5px 0 0; background:url(http://gtms04.alicdn.com/tps/i4/T1Rq94FbRcXXbSM3bc-30-24.gif);}
	.treemenu-orange-line-menu .treemenu-orange-line-leaf{color:#FB7D00;}
	.treemenu-orange-line-menu .treemenu-orange-line-submenu{margin-left:20px;}
	.treemenu-orange-line-menu .treemenu-orange-line-quto{quotes:none; padding:3px 4px; cursor:pointer; -moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px;}
	.treemenu-orange-line-menu .treemenu-orange-line-selected{background:#F60; color:#FFF;}
	.treemenu-orange-line-menu .treemenu-orange-line-mouseover-node{background:#FDB}
	.treemenu-orange-line-menu .treemenu-orange-line-mouseover-leaf{background:#FFF2E6;}


	.treemenu-simple-menu{font-size:12px; color:#444;}
	.treemenu-simple-menu dl{padding:0; margin:0;}
	.treemenu-simple-menu dt, .treemenu-simple-menu dd{padding-left:18px; line-height:22px;}
	.treemenu-simple-menu dd{ margin-left:4px; padding-left:0;}
	.treemenu-simple-menu .treemenu-simple-unfold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 -21px no-repeat;}
	.treemenu-simple-menu .treemenu-simple-fold{background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 0 0 no-repeat;}
	.treemenu-simple-menu .treemenu-simple-last{background:none;}
	.treemenu-simple-menu .treemenu-simple-cross{width:24px; height:16px; float:left; padding:0; margin:0 5px 0 0;}
	.treemenu-simple-menu .treemenu-simple-leaf{color:#777; background:url(http://gtms04.alicdn.com/tps/i4/T1E5CMFbVgXXX3.Y_g-20-140.gif) 14px -80px no-repeat; padding-left:2px;}
	.treemenu-simple-menu .treemenu-simple-submenu{margin-left:14px;}
	.treemenu-simple-menu .treemenu-simple-quto{quotes:none; padding:3px 4px; cursor:pointer; -moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px;}
	.treemenu-simple-menu .treemenu-simple-selected{background:#03C; color:#FFF;}
	.treemenu-simple-menu .treemenu-simple-mouseover-node{background:#666; color:#FFF;}
	.treemenu-simple-menu .treemenu-simple-mouseover-leaf{background:#EEE;}
</style>

<div class="J_TScriptedModule" data-componentid="uniqueSign">
	<h2>树形菜单treemenu</h2>
	<table>
		<tr>
			<td rowspan="5" style="vertical-align:top;"><div id="menu"></div></td>
			<td><label><input type="checkbox" id="unique" />保持同支同级节点最多展开一个</label></td>
		</tr>
		<tr>
			<td><label><input type="checkbox" id="anim" />启用展开收缩渐隐效果</label></td>
		</tr>
		<tr>
			<td>默认提供样式：
				<select id="style">
					<option value="gray-dot">gray-dot</option>
					<option value="blue-dot">blue-dot</option>
					<option value="gray-line">gray-line</option>
					<option value="orange-line">orange-line</option>
					<option value="simple">simple</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><button id="unfoldAll">展开全部节点</button> <button id="foldAll">关闭全部节点</button> <button id="resetAll">重置为初始状态</button></td>
		</tr>
		<tr>
			<td id="info" style="vertical-align:top;"></td>
		</tr>
	</table>
</div>

<!--模块初始化的包配置，都很熟悉了-->
<script type="text/javascript">

    cajaConfig={//配置下你需要引入的模块名称，最后会被use到
        modules:"openjs/kissy/1.3.0/core,openjs/kissy/gallery/treemenu/1.0/index"
    }

</script>

<!--这里是将自己的js让服务端编译一下，配置下服务端的php路径和自己的js即可，注意路径-->
<?
$jsurl="testcase/gallery/treemenu1.0.js";//注意路径
$jsservice="../common/cajoled_service.php";//注意路径
include("../common/foot.php");//引入foot
?>