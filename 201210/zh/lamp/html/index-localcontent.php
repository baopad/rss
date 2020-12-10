<!doctype html>
<main id="localcontent">
    <div id="lc-content"> 
        <!--Article content-->
        <div class="lc-article">
            <div class="lc-article-case">
                <div class="lc-article-aside">
                    <div class="lc-article-aside-case">
                        <h4 class="lc-article-aside-title">HTML</h4>
                        <ul class="lc-article-aside-list">
                            <li class="lc-article-aside-list-item"><a href="#01">如何保护隐私权安全</a> </li>
                            <li class="lc-article-aside-list-item"><a href="#02">如何移除隐私信息</a></li>
                            <li class="lc-article-aside-list-item"><a href="#03">信息会被发送到相关网站</a> </li>
                        </ul>
                        <div class="mt-3"> <a class="muted-link" href="#readme">
                            <svg class="octicon" viewBox="0 0 16 16" height="16" width="16">
                                <path fill-rule="evenodd" d="M0 1.75A.75.75 0 01.75 1h4.253c1.227 0 2.317.59 3 1.501A3.744 3.744 0 0111.006 1h4.245a.75.75 0 01.75.75v10.5a.75.75 0 01-.75.75h-4.507a2.25 2.25 0 00-1.591.659l-.622.621a.75.75 0 01-1.06 0l-.622-.621A2.25 2.25 0 005.258 13H.75a.75.75 0 01-.75-.75V1.75zm8.755 3a2.25 2.25 0 012.25-2.25H14.5v9h-3.757c-.71 0-1.4.201-1.992.572l.004-7.322zm-1.504 7.324l.004-5.073-.002-2.253A2.25 2.25 0 005.003 2.5H1.5v9h3.757a3.75 3.75 0 011.994.574z"></path>
                            </svg>
                            <span>关于Readme</span> </a>
                            <div style="font-size: 0.875em">隐私政策已于2020年01月01日更新。<br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lc-article-content" style="display: no ne">
                    <div class="lc-article-content-case"> 
                        <!--*************************起始正文*************************-->
                        <h3 class="typography-section-subhead">HTML是什么</h3>
                        <p>超文本标记语言（英语：HyperText Markup Language，简称：HTML）是一种用于创建网页的标准标记语言。HTML是一种基础技术，常与CSS、JavaScript一起被众多网站用于设计网页、网页应用程序以及移动应用程序的用户界面[3]。网页浏览器可以读取HTML文件，并将其渲染成可视化网页。HTML描述了一个网站的结构语义随着线索的呈现，使之成为一种标记语言而非编程语言。</p>
                        <p>HTML元素是构建网站的基石。HTML允许嵌入图像与对象，并且可以用于创建交互式表单，它被用来结构化信息——例如标题、段落和列表等等，也可用来在一定程度上描述文档的外观和语义。HTML的语言形式为尖括号包围的HTML元素（如
                            <html>
                            ），浏览器使用HTML标签和脚本来诠释网页内容，但不会将它们显示在页面上。</p>
                        <p>HTML可以嵌入如JavaScript的脚本语言，它们会影响HTML网页的行为。网页浏览器也可以引用层叠样式表（CSS）来定义文本和其它元素的外观与布局。维护HTML和CSS标准的组织万维网联盟（W3C）鼓励人们使用CSS替代一些用于表现的HTML元素[4]。</p>
                        <h3 class="typography-subsection-headline">标记</h3>
                        <p>HTML标记包含标签（及其属性）、基于字符的数据类型、字符引用和实体引用等几个关键部分。HTML标签是最常见的，通常成对出现，比如<code class=" " dir="ltr"><span>&lt;</span><span>h1</span><span>&gt;</span></code>与<code class=" " dir="ltr"><span>&lt;/</span><span>h1</span><span>&gt;</span></code>。这些成对出现的标签中，第一个标签是开始标签，第二个标签是结束标签。两个标签之间为元素的内容，有些标签没有内容，为空元素，如<code class=" " dir="ltr"><span>&lt;</span><span>img</span><span>&gt;</span></code>。 </p>
                        <p>以下是一个经典的"Hello World"程序的例子： </p>
                        <div lang="en">
                            <div>
                                <pre>
									<span>1 </span><span>&lt;!DOCTYPE html&gt;</span>
									<span>2 </span><span>&lt;</span><span>html</span><span>&gt;</span>
									<span>3 </span><span>&lt;</span><span>head</span><span>&gt;</span>
									<span>4 </span><span>&lt;</span><span>title</span><span>&gt;</span>This is a title<span>&lt;/</span><span>title</span><span>&gt;</span>
									<span>5 </span><span>&lt;/</span><span>head</span><span>&gt;</span>
									<span>6 </span><span>&lt;</span><span>body</span><span>&gt;</span>
									<span>7 </span><span>&lt;</span><span>p</span><span>&gt;</span>Hello world!<span>&lt;/</span><span>p</span><span>&gt;</span>
									<span>8 </span><span>&lt;/</span><span>body</span><span>&gt;</span>
									<span>9 </span><span>&lt;/</span><span>html</span><span>&gt;</span>
								</pre>
                            </div>
                        </div>
                        <p><code class=" " dir="ltr"><span>&lt;</span><span>html</span><span>&gt;</span></code>和<code class=" " dir="ltr"><span>&lt;/</span><span>html</span><span>&gt;</span></code>之间的文本描述网页，<code class=" " dir="ltr"><span>&lt;</span><span>body</span><span>&gt;</span></code>和<code class=" " dir="ltr"><span>&lt;/</span><span>body</span><span>&gt;</span></code>之间的文本为可视页面内容。标记文本<span lang="en"><code class=" " dir="ltr"><span>&lt;</span><span>title</span><span>&gt;</span>This is a title<span>&lt;/</span><span>title</span><span>&gt;</span></code></span>定义了浏览器的页面标题。
                            
                            文档标记类型<!DOCTYPE html>用于HTML5。 如果未进行声明，浏览器会使用“怪异模式”进行渲染。[55]</p>
                        
                        <!--*************************结束*************************--> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
