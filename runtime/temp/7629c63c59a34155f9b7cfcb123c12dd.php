<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\Users\HP\Desktop\PHP5.0\public/../application/index\view\form\Form.html";i:1541479796;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="http://www.tp5.com/static/index/jindutiao/css/ystep.css">
      <style>

      </style>
  </head>
  <body>
  <h1>显示点击按钮 不可操作进度条节点</h1>
  <div class="stepCont stepCont2">
      <!-- <div class="ystep"></div> -->
      <div class='ystep-container ystep-lg ystep-blue'></div>
      <div class="pageCont">
          <div id="page1" class="stepPage">
              <h1>
                  page1
              </h1>
          </div>
          <div id="page2" class="stepPage">
              <h1>
                  page2
              </h1>
          </div>
          <div id="page3" class="stepPage">
              <h1>
                  page3
              </h1>
          </div>
          <div id="page4" class="stepPage">
              <h1>
                  page4
              </h1>
          </div>
           <div id="page5" class="stepPage">
              <h1>
                  page5
              </h1>
          </div>
      </div>
  </div>
 <script src="http://www.tp5.com/static/index/jindutiao/js/jquery.min.js"></script>
  <script type="text/javascript" src=http://www.tp5.com/static/index/jindutiao/js/setStep.js></script>
  <script>
    var step1=new SetStep({
        content:'.stepCont1',
        showBtn:false,
    })
    var step2=new SetStep({
        content:'.stepCont2',
        clickAble:false
    })
    var step3=new SetStep({
        content:'.stepCont3'
    })
  </script>
  </body>
</html>