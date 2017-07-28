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
                        Table
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
                        <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
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
                                <th class="Table__Cell">TAG</th>
                            </tr>
                            </thead>
                            <tbody class="Table__Body">

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Table__Header
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                                <td class="Table__Cell">
                                    <code>&lt;thead&gt;</code>
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Table__Body
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                                <td class="Table__Cell">
                                    <code>&lt;tbody&gt;</code>
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Table__Footer
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                                <td class="Table__Cell">
                                    <code>&lt;tfooter&gt;</code>
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Table__Row
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                                <td class="Table__Cell">
                                    <code>&lt;tr&gt;</code>
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Table__Cell
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                                <td class="Table__Cell">
                                    <code>&lt;td&gt;</code>
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#el-responsive"
                                       class="Button Button--link Button--example">
                                        .Table__Responsive
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    To make a table
                                    responsive
                                    wrap the <code>&lt;table&gt;</code> in a
                                    div with that class.
                                </td>
                                <td class="Table__Cell">
                                    <code>&lt;div&gt;</code>
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
        <div class="row example-block" id="el-responsive">
            <div class="col">
                <div class="example__title">
                    # Responsive Table
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('__Responsive')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('__Responsive')
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
                                <th class="Table__Cell">TAG</th>
                            </tr>
                            </thead>
                            <tbody class="Table__Body">

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-striped"
                                       class="Button Button--link Button--example">
                                        .Table--striped
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Adds "Zebra-Striping" rows.
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-border-rows"
                                       class="Button Button--link Button--example">
                                        .Table--border-rows
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Adds bottom-border to rows.
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-border-cells"
                                       class="Button Button--link Button--example">
                                        .Table--border-cells
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    Adds border to cells.
                                </td>
                                <td class="Table__Cell">
                                    /
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
        <div class="row example-block" id="mod-striped">
            <div class="col">
                <div class="example__title">
                    # Table--striped
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--striped')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--striped')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-border-rows">
            <div class="col">
                <div class="example__title">
                    # Table--border-rows
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--border-rows')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--border-rows')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-border-cells">
            <div class="col">
                <div class="example__title">
                    # Table--border-cells
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--border-cells')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--border-cells')
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>