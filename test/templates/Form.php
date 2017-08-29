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
                        Form
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
                                    .Form__Group
                                </td>
                                <td class="Table__Cell">
                                    Gruppe an Controll-Elementen.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Form__Label
                                </td>
                                <td class="Table__Cell">
                                    Label eines Controll-Elementes.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Form__Control
                                </td>
                                <td class="Table__Cell">
                                    Text inputs, file inputs, select menus
                                    und textareas.
                                    <code>text</code>,
                                    <code>password</code>,
                                    <code>datetime-local</code>,
                                    <code>date</code>,
                                    <code>month</code>,
                                    <code>time</code>,
                                    <code>week</code>,
                                    <code>number</code>,
                                    <code>email</code>,
                                    <code>url</code>,
                                    <code>search</code>,
                                    <code>tel</code>,
                                    <code>color</code>,
                                    <code>multiple</code>,
                                    <code>size</code>,
                                    <code>file</code>
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Form__Check
                                </td>
                                <td class="Table__Cell">
                                    Container für Checkboxes und radios.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Form__CheckLabel
                                </td>
                                <td class="Table__Cell">
                                    Label für Checkboxes und radios.
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    .Form__CheckInput
                                </td>
                                <td class="Table__Cell">
                                    Input-Element für Checkboxes und radios.
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
                    # Form inputs
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('-textual-inputs')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('-textual-inputs')
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
                                    <a href="#mod-inline"
                                       class="Button Button--link Button--example">
                                        .Form--inline
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>
                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-invalid"
                                       class="Button Button--link Button--example">
                                        .Form__Control--invalid
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>
                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-custom-checkbox"
                                       class="Button Button--link Button--example">
                                        .Form__Custom--checkbox
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

    <!-- MODIFIER EXAMPLES -->
    <div class="grid grid--container examples-row">
        <h4>Examples</h4>
        <br>
        <!-- Example -->
        <div class="row example-block" id="mod-inline">
            <div class="col">
                <div class="example__title">
                    # Inline form
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--inline')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--inline')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-invalid">
            <div class="col">
                <div class="example__title">
                    # Invalid inputs
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--invalid')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--invalid')
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Example -->
        <div class="row example-block" id="mod-custom-checkbox">
            <div class="col">
                <div class="example__title">
                    # Custom checkbox
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--custom-checkbox')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--custom-checkbox')
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Example -->
        <div class="row example-block" id="mod-custom-radio">
            <div class="col">
                <div class="example__title">
                    # Custom radio
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--custom-radio')
                        ?>
                    </div>
                    <i class="Icon Icon--code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        html('--custom-radio')
                        ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>