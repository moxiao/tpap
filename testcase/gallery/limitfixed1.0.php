<!--页头公共资源引入-->
<? include("../common/head.php");?>

<!--
    需要测试的dom结构，注意，最外层<div class="J_TScriptedModule" data-componentid="uniqueSign"> 的class和为属性不可修改
    用户的javascript理论上只可以作用到这个dom下面，不可以"越界"
-->

<div class="J_TScriptedModule" data-componentid="uniqueSign">
<style type="text/css">
    ul, li{
        list-style: none;
        margin: 0;
        padding: 0;
    }
.shelfbox {
    margin: 20px;
    width: 450px;
    border: 1px solid #2b81af;
    padding: 10px;
}

.floor li {
    height: 20px;
    padding: 10px;
    line-height: 2;
    cursor: pointer;
}
.floor li:hover {
    background-color: #e7f2e7;
}
.floor .caption {
    height: 20px;
    padding: 10px;
    line-height: 22px;
    background: #eeeeee;
    border: 1px solid #ccc;
    width: 430px;
    font-size: 18px;
    font-weight: 700;
    color: #aaa;

    -webkit-user-select: none;
    user-select: none;
}
    
</style>

  <div id="J_ShelfBox" class="shelfbox">
      <div class="floor">
          <div class="caption">A</div>
          <ul>
              <li>阿</li>
              <li>阿迪达斯男鞋</li>
              <li>阿迪达斯</li>
              <li>按摩器</li>
              <li>阿迪达斯t恤</li>
              <li>奥特曼</li>
              <li>阿迪达斯 女鞋</li>
              <li>艾格专柜正品</li>
              <li>爱马仕皮带</li>
          </ul>
      </div>
      <div class="floor">
          <div class="caption">B</div>
          <ul>
              <li>包包2013新款</li>
              <li>包</li>
              <li>保护套</li>
              <li>冰箱</li>
              <li>包包</li>
              <li>抱枕</li>
              <li>杯子</li>
              <li>笔袋</li>
              <li>半身裙</li>
          </ul>
      </div>
      <div class="floor">
          <div class="caption">C</div>
          <ul>
              <li>充电宝</li>
              <li>窗帘</li>
              <li>床</li>
              <li>按摩器</li>
              <li>长裙</li>
              <li>充气娃真人实体</li>
              <li>床垫</li>
              <li>茶具</li>
              <li>床上用品四件套</li>
          </ul>
      </div>
  </div>

</div>

<!--模块初始化的包配置，都很熟悉了-->
<script type="text/javascript">

    cajaConfig={//配置下你需要引入的模块名称，最后会被use到
        modules:"openjs/kissy/1.3.0/core,openjs/kissy/gallery/limitfixed/1.0/index"
    }

</script>

<!--这里是将自己的js让服务端编译一下，配置下服务端的php路径和自己的js即可，注意路径-->
<?
$jsurl="testcase/gallery/limitfixed1.0.js";//注意路径
$jsservice="../common/cajoled_service.php";//注意路径
include("../common/foot.php");//引入foot
?>