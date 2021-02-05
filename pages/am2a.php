<?php 
    include("./connectdb.php");

    $sql = "SELECT * FROM `student` WHERE `class` = 'AM2A'";

    $result = mysqli_query($conn, $sql);

    $records = "";
    while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr><th scope='row'>" . $record["Student_Nr"] . "</th> 
          <td> " . $record["naam"] . "</td> 
          <td> " . $record["tussenvoegsel"] . "</td> 
          <td> " . $record["achternaam"] . "</td>
          <td> " . $record["class"] . "</td>
          </tr>";
}
?>

<div class="col-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Student Nummer</th>
                <th scope="col">Naam</th>
                <th scope="col">Tussenvoegsel</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Klas</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo $records;
            ?>
            <tr>
        </tbody>
    </table>
</div>