<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="stylesheets/main.css">

        <script src="javascript/jquery-3.7.1.js"></script>
        <script src="javascript/font_awesome.js"></script>
        <script src="javascript/bootstrap.bundle.js"></script>
        <script src="javascript/calc.js"></script>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <title> </title>

    </head>
    <body>
        <div id="keys-div">
            <form action="">
                <table>
                    <tr>
                        <td colspan="4" id="output-parent">
                            <input name="output" id="output-self" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><button value="7" type="submit" name="b">7</button></td>
                        <td><button value="8" type="submit" name="b">8</button></td>
                        <td><button value="9" type="submit" name="b">9</button></td>
                        <td><button value="-" type="submit" name="b">-</button></td>
                    </tr>
                    <tr>
                        <td><button value="4" type="submit" name="b">4</button></td>
                        <td><button value="5" type="submit" name="b">5</button></td>
                        <td><button value="6" type="submit" name="b">6</button></td>
                        <td><button value="+" type="submit" name="b">+</button></td>
                    </tr>
                    <tr>
                        <td><button value="1" type="submit" name="b">1</button></td>
                        <td><button value="2" type="submit" name="b">2</button></td>
                        <td><button value="3" type="submit" name="b">3</button></td>
                        <td><button value="/" type="submit" name="b">/</button></td>
                    </tr>
                    <tr>
                        <td><button value="0" type="submit" name="b">0</button></td>
                        <td colspan="2"><button value="=" type="submit" name="b">=</button></td>
                        <td><button value="*" type="submit" name="b">*</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php

        $c = null;
        $c = $_POST["b"];

        echo $c; 

        ?>
    </body>
</html>