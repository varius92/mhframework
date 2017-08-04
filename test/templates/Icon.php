<div class="component-demo icon-demo">

    <!-- MENU -->
    <ul class="Menu Menu--vertical Menu--right Menu--demo-component">
        <li class="Menu__Item">
            <a href="#modifier" class="Menu__Link">Modifier</a>
        </li>
        <li class="Menu__Item">
            <a href="#top" class="Menu__Link backtotop">Back to top</a>
        </li>
    </ul>

    <!-- INTRO -->
    <div id="intro" class="grid grid--container">
        <div class="row">
            <div class="col">
                <article>
                    <h1>
                        <small>COMPONENT</small>
                        Icon
                    </h1>
                    Die Icon Komponente gibt es in
                    zwei Variationen:

                    <ul>
                        <li>Custom icons <code
                                    class="language-scss">.Icon{}</code></li>
                        <li>Font Awesome Icons
                            <code class="language-scss">.Icon{}</code></li>
                    </ul>

                    <p>
                        Mit <code class="language-scss">$icon-pseudo</code> in
                        der Datei
                        <code class="language-css">_variables.scss</code> kann
                        gesteuert werden, ob die Icons als <code
                                class="language-css">:before{}</code>
                        oder als <code class="language-css">:after{}</code>
                        ausgegeben werden sollen. Alles zu Font Awesome liegt
                        unter <code
                                class="language-css">vendor/font-awesome/</code>.
                    </p>


                    <!-- Demo -->
                    <div class="Demo Demo--toggle">
                        <div class="Demo__header">
                            <?php
                            demo()
                            ?>
                        </div>
                        <i class="Icon Icon--code Demo__toggle-btn"></i>
                        <div class="Demo__footer">
                            <?php
                            code()
                            ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>


    <!-- MODIFIER -->
    <div id="modifier" class="Info-row">
        <div class="grid grid--container">
            <div class="row">
                <div class="col">
                    <h3>MODIFIER</h3>
                    <!-- SelectorTable -->
                    <div class="SelectorTable">
                        <table class="Table Table--border-rows Table--demo">
                            <thead class="Table__Header">
                            <tr class="Table__Row">
                                <th class="Table__Cell">SELECTOR</th>
                                <th class="Table__Cell">DESCRIPTION</th>
                            </tr>
                            </thead>
                            <tbody class="Table__Body">

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-custom"
                                       class="Button Button--link Button--example">
                                        .Icon--custom
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Change font for custom icons. <br>
                                    (<code class="language-scss">$font-icon-custom: 'icomoon';</code>)
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-animated"
                                       class="Button Button--link Button--example">
                                        .Icon--spin
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Add a spin animation.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-animated"
                                       class="Button Button--link Button--example">
                                        .Icon--pulse
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                   Add a pulse animation.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-rotate"
                                       class="Button Button--link Button--example">
                                        .Icon--rotate-90
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Rotate icon by 90 degrees.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-rotate"
                                       class="Button Button--link Button--example">
                                        .Icon--rotate-180
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Rotate icon by 180 degrees.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-rotate"
                                       class="Button Button--link Button--example">
                                        .Icon--rotate-270
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Rotate icon by 270 degrees.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-rotate"
                                       class="Button Button--link Button--example">
                                        .Icon--flip-horizontal
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Flip icon horizontally.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-rotate"
                                       class="Button Button--link Button--example">
                                        .Icon--flip-vertical
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Flip icon vertically.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Icon--pull-left
                                </td>
                                <td class="Table__Cell">
                                    Left floated icon with margin-right gap.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Icon--pull-right
                                </td>
                                <td class="Table__Cell">
                                    Right floated icon with margin-left gap.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODIFIER EXAMPLES -->
    <div class="grid grid--container examples-row">
        <h4>Examples</h4>
        <br>

        <!-- Example -->
        <div class="row example-block" id="mod-custom">
            <div class="col">
                <div class="example__title">
                    # Custom Icon
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('-custom')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('-custom')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-animated">
            <div class="col">
                <div class="example__title">
                    # Animated Icons
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('-animated')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('-animated')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-rotate">
            <div class="col">
                <div class="example__title">
                    # Rotated & Flipped
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('-rotate')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('-rotate')
                        ?>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>