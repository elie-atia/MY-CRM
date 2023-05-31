<head>
    <script src="/public/assets/js/jquery-3.6.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/assets/css/learn-php.css">

</head>

<body>
    <?php
    $var1 = 'HELLO_ELIE';
    $$var1 = 'JERUSALEM IS BEAUTIFUL';
    const PI = 3.14;
    const NEW_LINE = '<br/>';
    define('G', 9.8);
    ?>

    <button id="toggleButton">display variables</button>
    </br>

    <div id="myVarDiv" style="display: none;">
        <?php
        echo $HELLO_ELIE .  ' ' . 'cool' . '<br/>';
        echo PI . NEW_LINE;;
        echo G . NEW_LINE . NEW_LINE;
        ?>
    </div>

    <form>
        <input type="button" value="Sort by values" id="sortButton">
    </form>
    </br>

    <input  type="number" value=10 id="lengthConstants">

    </br>
    <div id="numberOfConstantsMsg"></div>

    <div class="table-container">
        <table id="table-constants" class="full-width-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>





    <script src='/public/assets/js/learn-php.js'> </script>
</body>

</html>