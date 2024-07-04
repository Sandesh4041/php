<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            height: 400px;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<?php
function createChessBoard() {
    echo "<table border='3'>";
    for ($row = 0; $row < 8; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++) {
            // Calculate the cell color
            $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
            echo "<td class='$color'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Call the function to create the chessboard
createChessBoard();
?>

</body>
</html>
