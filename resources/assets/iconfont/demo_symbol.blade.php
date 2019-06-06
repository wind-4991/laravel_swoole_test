
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>IconFont</title>
    <link rel="stylesheet" href="demo.css">
    <script src="iconfont.js"></script>

    <style type="text/css">
        .icon {
          /* 通过设置 font-size 来改变图标大小 */
          width: 1em; height: 1em;
          /* 图标和文字相邻时，垂直对齐 */
          vertical-align: -0.15em;
          /* 通过设置 color 来改变 SVG 的颜色/fill */
          fill: currentColor;
          /* path 和 stroke 溢出 viewBox 部分在 IE 下会显示
             normalize.css 中也包含这行 */
          overflow: hidden;
        }

    </style>
</head>
<body>
    <div class="main markdown">
        <h1>IconFont 图标</h1>
        <ul class="icon_lists clear">
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-shijian"></use>
                    </svg>
                    <div class="name">时间</div>
                    <div class="fontclass">#icon-shijian</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-browse"></use>
                    </svg>
                    <div class="name">browse</div>
                    <div class="fontclass">#icon-browse</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-xihuan"></use>
                    </svg>
                    <div class="name">喜欢2</div>
                    <div class="fontclass">#icon-xihuan</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-xihuan1"></use>
                    </svg>
                    <div class="name">喜欢</div>
                    <div class="fontclass">#icon-xihuan1</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-zan"></use>
                    </svg>
                    <div class="name">赞2</div>
                    <div class="fontclass">#icon-zan</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-zan1"></use>
                    </svg>
                    <div class="name">赞</div>
                    <div class="fontclass">#icon-zan1</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-paihang"></use>
                    </svg>
                    <div class="name">排行</div>
                    <div class="fontclass">#icon-paihang</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-fanhui"></use>
                    </svg>
                    <div class="name">返回</div>
                    <div class="fontclass">#icon-fanhui</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-wode"></use>
                    </svg>
                    <div class="name">我的</div>
                    <div class="fontclass">#icon-wode</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-huanyihuan"></use>
                    </svg>
                    <div class="name">换一换</div>
                    <div class="fontclass">#icon-huanyihuan</div>
                </li>
            
                <li>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-remen"></use>
                    </svg>
                    <div class="name">热门</div>
                    <div class="fontclass">#icon-remen</div>
                </li>
            
        </ul>


        <h2 id="symbol-">symbol引用</h2>
        <hr>

        <p>这是一种全新的使用方式，应该说这才是未来的主流，也是平台目前推荐的用法。相关介绍可以参考这篇<a href="">文章</a>
        这种用法其实是做了一个svg的集合，与另外两种相比具有如下特点：</p>
        <ul>
          <li>支持多色图标了，不再受单色限制。</li>
          <li>通过一些技巧，支持像字体那样，通过<code>font-size</code>,<code>color</code>来调整样式。</li>
          <li>兼容性较差，支持 ie9+,及现代浏览器。</li>
          <li>浏览器渲染svg的性能一般，还不如png。</li>
        </ul>
        <p>使用步骤如下：</p>
        <h3 id="-symbol-">第一步：引入项目下面生成的symbol代码：</h3>
        <pre><code class="lang-js hljs javascript"><span class="hljs-comment">&lt;script src="./iconfont.js"&gt;&lt;/script&gt;</span></code></pre>
        <h3 id="-css-">第二步：加入通用css代码（引入一次就行）：</h3>
        <pre><code class="lang-js hljs javascript">&lt;style type=<span class="hljs-string">"text/css"</span>&gt;
.icon {
   width: <span class="hljs-number">1</span>em; height: <span class="hljs-number">1</span>em;
   vertical-align: <span class="hljs-number">-0.15</span>em;
   fill: currentColor;
   overflow: hidden;
}
&lt;<span class="hljs-regexp">/style&gt;</span></code></pre>
        <h3 id="-">第三步：挑选相应图标并获取类名，应用于页面：</h3>
        <pre><code class="lang-js hljs javascript">&lt;svg <span class="hljs-class"><span class="hljs-keyword">class</span></span>=<span class="hljs-string">"icon"</span> aria-hidden=<span class="hljs-string">"true"</span>&gt;<span class="xml"><span class="hljs-tag">
  &lt;<span class="hljs-name">use</span> <span class="hljs-attr">xlink:href</span>=<span class="hljs-string">"#icon-xxx"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">use</span>&gt;</span>
</span>&lt;<span class="hljs-regexp">/svg&gt;
        </span></code></pre>
    </div>
</body>
</html>
