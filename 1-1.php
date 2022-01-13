<?php
$conn = mysqli_connect("localhost", "root", "123456", "recipe_db");
$sql = "select * from food";
$result = mysqli_query($conn, $sql); 

$list1 = '';
$list2 = '';
$list3 = '';
$list4 = '';

while($row = mysqli_fetch_array($result))
{
    $list1 = $list1."<li>{$row['m_ingredient']}</li>"; 
    $list2 = $list2."<li>{$row['s_ingredient']}</li>";
    $list3 = $list3."<li>{$row['seasoning']}</li>";
    $list4 = $list4."<li>{$row['recipe']}<p></li>";
}
?>

<html>
    <head>
        <meta charset= "utf-8"/>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
        <title>recipe</title>
    </head>
    <body bgcolor = "#FFFDE7">
        <div id = "1-1">
            <mystyle>
            <h1>&nbsp;&nbsp;등갈비김치찜</h1>
            <p>
            <table border="1" style="margin-left: 30px;" bordercolor = "#434142">
                <colgroup width = "300px"></colgroup>
                <colgroup width = "120px"></colgroup>
                <colgroup width = "120px"></colgroup>
                <colgroup width = "120px"></colgroup>
            <thead>
                <tr>
                    <th>메뉴</th>
                    <th>주재료</th>
                    <th>부재료</th>
                    <th>양념</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src = "image/1.jpg" width = "300" height = "200"></td>
                    <th><?php echo $list1;?></th>
                    <th><?php echo $list2;?></th>
                    <th><?php echo $list3;?></th>
                </tr>
            </tbody>
            </table>
            <p>
            <h2>&nbsp;&nbsp;&nbsp;조리순서</h2>
            <ol>
                <?php
                    echo $list4;
                ?>
            </ol>
            </mystyle>
        </div>
    </body>
</html>
