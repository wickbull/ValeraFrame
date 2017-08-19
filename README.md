<h1><strong>Фреймворк - ValeraFrame</strong></h1>

<h3><strong><em>Создан для собственных удобств!</em></strong></h3>

<p>Роутинг реализован в __ROOT__\Routes\routing.php</p>

<p>cуществует 3 метода определения маршрутизации!</p>

<ol>
	<li>метод Static;</li>
	<li>метод Post;</li>
	<li>метод Get;</li>
</ol>

<p>Как правильно писать роутинг?</p>

<ul>
	<li>если статическая страница!</li>
</ul>

<div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><code>array(</code></div>

<div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;url&#39; =&gt; &#39;/index&#39;, &lt;- Cтатическая ссылка;</code></div>

<div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;controller&#39; =&gt; &#39;IndexController&#39;, &lt;- Название контроллера + класс контроллера;</code></div>

<div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;function&#39; =&gt; &#39;index&#39;, &lt;- Метод контроллера + автоматически создаются index_static, index_post, index_get;</code></div>

<div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><code>&nbsp; &nbsp; &nbsp; &nbsp; ),</code></div>

<ul>
	<li>если нужно передать через url переменные</li>
</ul>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>array(</code></div>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;url&#39; =&gt; &#39;/index&#39;, &lt;- Cтатическая ссылка;</code></div>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;var&#39; =&gt; &#39;/var1/var2&#39;, &lt;- Переменные, названия могут быть любые ссылка должна выглядить прмерным образом если там 2 переменных как тут https://www.veb.com/index/2/3 , где 2 - var1 , а 3 - var2;</code></div>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;rule&#39; =&gt; &#39;/([^a-zA-Z0-9_])/i&#39;, &lt;- Правило для переменных;</code></div>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;controller&#39; =&gt; &#39;IndexController&#39;, &lt;- Название контроллера + класс контроллера;</code></div>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;function&#39; =&gt; &#39;index&#39;, &lt;- Метод контроллера + автоматически создаются index_static, index_post, index_get;</code></div>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>&nbsp; &nbsp; &nbsp; &nbsp; ),</code></div>

<p>Зачем методы&nbsp;<code>_static, _post, _get?</code></p>

<p>Фреймворк автоматически определяет в каком положении сайт если мы зашли на страницу допустим:&nbsp;</p>

<ol>
	<li><code>&nbsp;мы зашли https://www.veb.com/index у нас запустится статический метод index_static();</code></li>
	<li><code>&nbsp;мы зашли&nbsp;https://www.veb.com/index/2/3 у нас запустится пост метод index_post();</code></li>
	<li>&nbsp;мы зашли&nbsp;<code>https://www.veb.com/index или&nbsp;https://www.veb.com/index/2/3 но использовали &lt;form method=&#39;post&#39;&gt; у нас запустится метод index_get(), в index_get() просто вызываем $_POST;</code></li>
</ol>

<p><code>Контроллеры находятся в __ROOT__\Controllers... .</code></p>

<p>В&nbsp;<code>__ROOT__\Controllers\Static... - находятся контроллеры, которые отвечают за файлы header &amp; footer, которые находятся в __ROOT__\Views\Static... .</code></p>

<p><code>Здесь пока не используються PSRы!</code></p>

<p><code>В папке __ROOT__\Core\Composer... находится модуль компоузер.</code></p>

<p>Если нашли косяк, не стесняйтесь пишите!</p>
