<div class="component-demo">
    <!-- MENU -->
    <ul class="Menu Menu--vertical Menu--right Menu--demo-component">
        <li class="Menu__Item">
            <a href="#elements" class="Menu__Link">Elements</a>
        </li>
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
                        Button
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad
                        blanditiis, commodi consectetur dolores dolorum eveniet
                        facere illo inventore, iste laboriosam laborum
                        necessitatibus perspiciatis quo saepe sint sit soluta
                        velit
                        voluptates?
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
                            html()
                            ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- ELEMENTS -->
    <div id="elements" class="Info-row">
        <div class="grid grid--container">
            <div class="row">
                <div class="col">
                    <h3>ELEMENTS</h3>
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
                                    <a href="#el-icon"
                                       class="Button Button--link Button--example">
                                        .Button__Icon
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Icon container.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ELEMENTS EXAMPLES -->
    <div class="grid grid--container examples-row">
        <h4>Examples</h4>
        <br>

        <!-- Example -->
        <div class="row example-block" id="el-icon">
            <div class="col">
                <div class="example__title">
                    # Button with Icon (Element)
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('__Icon')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('__Icon')
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Example -->
        <div class="row example-block" id="el-icon">
            <div class="col">
                <div class="example__title">
                    # Button with Icon-Component (:before or :after)
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('-icon-before')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('-icon-before')
                        ?>
                    </div>
                </div>
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
                                    <a href="#mod-full-width"
                                       class="Button Button--link Button--example">
                                        .Button--full-width
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-round"
                                       class="Button Button--link Button--example">
                                        .Button--round
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Adds a rounded border.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-ghost"
                                       class="Button Button--link Button--example">
                                        .Button--ghost
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Adds a solid border and tranparent
                                    Background.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-link"
                                       class="Button Button--link Button--example">
                                        .Button--link
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Makes the button look like a link.
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
        <div class="row example-block" id="mod-full-width">
            <div class="col">
                <div class="example__title">
                    # Button--full-width
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--full-width')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--full-width')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-round">
            <div class="col">
                <div class="example__title">
                    # Button--round
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--round')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--round')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-ghost">
            <div class="col">
                <div class="example__title">
                    # Button--ghost
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--ghost')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--ghost')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-link">
            <div class="col">
                <div class="example__title">
                    # Button--link
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--link')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--link')
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>