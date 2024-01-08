<?php
$manglh = ["a" => 1, "b" => 3, "c" => 6];
echo $manglh["c"];
?>
<table border="1px">
    <tr>
        <?php
        foreach ($manglh as $key => $value) {
        ?>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        <?php
        }
        ?>
    </tr>
</table>
<?php
function ktasochan($n)
{
    if ($n % 2 == 0) {
        echo "day la so chan";
    } else echo "ddaay la so le";
}
ktasochan(3);
function dthcn($a, $b)
{
    return $a * $b;
}
echo dthcn(3, 4);
function ttcn($ten, $ns, $diachi, $email)
{
    $tuoi = date("Y") - $ns;
    echo "<br>Ten cua ban la:$ten <br> song o:$diachi <br> email:$email <br> tuoi:$tuoi";
}
ttcn("hau", 2004, "phu tho", "abc@.com")
?>