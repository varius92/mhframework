<main class="grid grid--container">
    <div class="row">
        <div class="col">
            <article>
                <h1>Button</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium at
                    atque aut beatae culpa deleniti <code>.Button {}</code>
                    doloribus
                    explicabo fugiat, placeat
                    porro praesentium qui quo repellat sit sunt vel veniam
                    vitae.
                    Totam.</p>
                <br>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <a class="Button" href="#">Link</a>
                        <span class="Button" href="#">Span</span>
                        <button class="Button" type="submit">Button</button>
                        <input class="Button" type="button" value="Input">
                        <input class="Button" type="submit" value="Submit">
                        <input class="Button" type="reset" value="Reset">
                        <a class="Button" href="#" role="button" disabled>Disabled</a>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                                <pre><code class="language-markup">&lt;a class=&quot;Button&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
&lt;span class=&quot;Button&quot; href=&quot;#&quot;&gt;Link&lt;/span&gt;
&lt;button class=&quot;Button&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt;
&lt;input class=&quot;Button&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt;
&lt;input class=&quot;Button&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
&lt;input class=&quot;Button&quot; type=&quot;reset&quot; value=&quot;Reset&quot;&gt;
&lt;a class=&quot;Button&quot; href=&quot;#&quot; role=&quot;button&quot; disabled&gt;Disabled&lt;/a&gt;</code></pre>
                    </div>
                </div
            </article>
        </div>
    </div>
    <!--    ---------------------------------->
    <div class="row">
        <div class="col">
            <article>
                <h3>
                    Elemente
                </h3>
                <p>
                <pre>keine vorhanden</pre>
                </p>
            </article>
        </div>
    </div>
    <!--    ---------------------------------->
    <div class="row">
        <div class="col">
            <article>
                <h3>
                    Modifier
                </h3>
                <div class="row">

                    <!--///////MOD////////-->
                    <div class="col col--sm-6 col--sm-flex">
                        <div class="mod-inline">
                            <pre><code>.Button--round</code></pre>
                            <div class="Demo Demo--toggle">
                                <div class="Demo__header">
                                    <!--//-----------------------//-->
                                    <button class="Button Button--round">Round
                                    </button>
                                    <!--//-----------------------//-->
                                </div>
                                <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                                <div class="Demo__footer">
                                    <?=code(
                                        '<button class="Button Button--round">Round</button>'
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col--sm-6 col--sm-flex">
                        <!--///////MOD////////-->
                        <div class="mod-inline">
                            <pre><code>.Button--outline</code></pre>
                            <div class="Demo Demo--toggle">
                                <div class="Demo__header">
                                    <!--//-----------------------//-->
                                    <button class="Button Button--outline">
                                        Outline
                                    </button>
                                    <!--//-----------------------//-->
                                </div>
                                <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                                <div class="Demo__footer">
                                    <?=code(
                                        '<button class="Button Button--outline">Round</button>'
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col--sm-6 col--sm-flex">
                        <!--///////MOD////////-->
                        <div class="mod-inline">
                            <pre><code>.Button--ghost</code></pre>
                            <div class="Demo Demo--toggle">
                                <div class="Demo__header">
                                    <!--//-----------------------//-->
                                    <button class="Button Button--ghost">Ghost
                                    </button>
                                    <!--//-----------------------//-->
                                </div>
                                <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                                <div class="Demo__footer">
                                    <?=code(
                                        '<button class="Button Button--ghost">Round</button>'
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
        </div>
    </div>
</main>
