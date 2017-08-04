<div class="component-demo">

    <!-- MENU -->
    <ul class="Menu Menu--vertical Menu--right Menu--demo-component">
        <li class="Menu__Item">
            <a href="#elements" class="Menu__Link">Elements</a>
        </li>
<!--        <li class="Menu__Item">-->
<!--            <a href="#modifier" class="Menu__Link">Modifier</a>-->
<!--        </li>-->
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
                        Card
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
                            </tr>
                            </thead>
                            <tbody class="Table__Body">

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#el-title"
                                       class="Button Button--link Button--example">
                                        .Card__Title
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#el-image"
                                       class="Button Button--link Button--example">
                                        .Card__Image
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#el-header"
                                       class="Button Button--link Button--example">
                                        .Card__Header
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#el-body"
                                       class="Button Button--link Button--example">
                                        .Card__Body
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#el-footer"
                                       class="Button Button--link Button--example">
                                        .Card__Footer
                                    </a>
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

    <!-- ELEMENTS EXAMPLES -->
    <div class="grid grid--container examples-row">
        <h4>Examples</h4>
        <br>

        <!-- Example -->
        <div class="row example-block" id="EXAMPLE1">
            <div class="col">
                <div class="example__title">
                    # Complete Card
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('-complete')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('-complete')
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>