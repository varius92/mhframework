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
            <a href="#dropdown" class="Menu__Link">Dropdown</a>
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
                        Menu
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
    <div id="elements" class="Info-row Info-row--empty">
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
                                        .Menu__Item
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                        .Menu__Link
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                        .Menu__Children
                                </td>
                                <td class="Table__Cell">
                                    Submenu container style.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><div id="modifier" class="Info-row">
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
                                    <a href="#mod-mobile"
                                       class="Button Button--link Button--example">
                                        .Menu--mobile
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-right"
                                       class="Button Button--link Button--example">
                                        .Menu--right
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-center"
                                       class="Button Button--link Button--example">
                                        .Menu--center
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-expand"
                                       class="Button Button--link Button--example">
                                        .Menu--expand
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-vertical"
                                       class="Button Button--link Button--example">
                                        .Menu--vertical
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
        <div class="row example-block" id="mod-mobile">
            <div class="col">
                <div class="example__title">
                    # Mobile Menu
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--mobile')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--mobile')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-right">
            <div class="col">
                <div class="example__title">
                    # Menu right
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--right')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--right')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-center">
            <div class="col">
                <div class="example__title">
                    # Centred Menu
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--center')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--center')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-expand">
            <div class="col">
                <div class="example__title">
                    # Expanded Menu
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--expand')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--expand')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-vertical">
            <div class="col">
                <div class="example__title">
                    # Vertical Menu
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--vertical')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--vertical')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- DROPDOWN -->
    <div id="dropdown" class="Info-row">
        <div class="grid grid--container">
            <div class="row">
                <div class="col">
                    <h3>DROPDOWN <small><code>JS</code></small></h3>
                    <!-- SelectorTable -->
                    <div class="SelectorTable">
                        <table class="Table Table--border-rows Table--demo">
                            <thead class="Table__Header">
                            <tr class="Table__Row">
                                <th class="Table__Cell">EXAMPLE</th>
                                <th class="Table__Cell">DESCRIPTION</th>
                            </tr>
                            </thead>
                            <tbody class="Table__Body">

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-dp-hh"
                                       class="Button Button--link Button--example">
                                        Horizontal / Horizontal
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-dp-hv"
                                       class="Button Button--link Button--example">
                                        Horizontal / Vertical
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-dp-vv"
                                       class="Button Button--link Button--example">
                                        Vertical / Vertical
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-dp-vh"
                                       class="Button Button--link Button--example">
                                        Vertical / Horizontal
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-dp-vInline"
                                       class="Button Button--link Button--example">
                                        Vertical Inline
                                    </a>
                                </td>
                                <td class="Table__Cell">
                                    /
                                </td>
                            </tr>

                            <!--Row-->
                            <tr class="Table__Row">
                                <td class="Table__Cell">
                                    <a href="#mod-dp-mega"
                                       class="Button Button--link Button--example">
                                        Mega Menu
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

    <!-- DROPDOWN EXAMPLES -->
    <div class="grid grid--container examples-row">
        <h4>Examples</h4>
        <br>

        <!-- Example -->
        <div class="row example-block" id="mod-dp-hh">
            <div class="col">
                <div class="example__title">
                    # Horizontal / Horizontal
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--dp-hh')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--dp-hh')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-dp-hv">
            <div class="col">
                <div class="example__title">
                    # Horizontal / Vertical
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--dp-hv')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--dp-hv')
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Example -->
        <div class="row example-block" id="mod-dp-vv">
            <div class="col">
                <div class="example__title">
                    # Vertical / Vertical
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--dp-vv')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--dp-vv')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-dp-vh">
            <div class="col">
                <div class="example__title">
                    # Vertical / Horizontal
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--dp-vh')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--dp-vh')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-dp-vInline">
            <div class="col">
                <div class="example__title">
                    # Vertical Inline
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--dp-vInline')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--dp-vInline')
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="row example-block" id="mod-dp-mega">
            <div class="col">
                <div class="example__title">
                    # Mega Menu
                </div>
                <div class="Demo Demo--toggle">
                    <div class="Demo__header">
                        <?php
                        demo('--dp-mega')
                        ?>
                    </div>
                    <i class="Icon-fa Icon-fa-code Demo__toggle-btn"></i>
                    <div class="Demo__footer">
                        <?php
                        code('--dp-mega')
                        ?>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>