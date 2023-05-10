<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csv konatus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--<?php /*
function get_csv_data_and_types($file)
{
    $handle = fopen($file, "r");
    $headers = fgetcsv($handle, 1000, ",");
    $data = [];
    $column_types = array_fill(0, count($headers), []);

    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $data[] = $row;
        foreach ($row as $index => $value) {
            if (is_numeric($value)) {
                $type = (strpos($value, '.') !== false) ? 'float' : 'integer';
            } else {
                $type = 'string';
            }
            $column_types[$index][$type] = true;
        }
    }
    fclose($handle);

    $types = [];
    foreach ($column_types as $type_set) {
        $types[] = implode('/', array_keys($type_set));
    }

    return [$headers, $data, $types];
}

function compare_columns_based_on_name_value_and_type($data1, $data2, $headers1, $headers2, $types1, $types2)
{
    $column_matches = [];
    $non_matching_columns = [[], []];

    foreach ($headers1 as $index1 => $header1) {
        $matched = false;
        foreach ($headers2 as $index2 => $header2) {
            if ($header1 === $header2 && $types1[$index1] === $types2[$index2]) {
                $values1 = array_column($data1, $index1);
                $values2 = array_column($data2, $index2);

                if (count(array_diff($values1, $values2)) === 0) {
                    $column_matches[] = [$header1, $header2, $types1[$index1]];
                    $matched = true;
                    break;
                }
            }
        }
        if (!$matched) {
            $non_matching_columns[0][] = [$header1, $types1[$index1]];
        }
    }

    foreach ($headers2 as $index2 => $header2) {
        if (!in_array($header2, array_column($column_matches, 1))) {
            $non_matching_columns[1][] = [$header2, $types2[$index2]];
        }
    }

    return [$column_matches, $non_matching_columns];
}

if ($_FILES["csv1"]["error"] == UPLOAD_ERR_OK && $_FILES["csv2"]["error"] == UPLOAD_ERR_OK) 
    list($headers1, $data1, $types1) = get_csv_data_and_types($_FILES["csv1"]["tmp_name"]);
    list($headers2, $data2, $types2) = get_csv_data_and_types($_FILES["csv2"]["tmp_name"]);

    list($column_matches, $non_matching_columns) = compare_columns_based_on_name_value_and_type($data1, $data2, $headers1, $headers2, $types1, $types2);

    echo "Les colonnes correspondantes en fonction du nom, de la valeur et du type de données sont :<br>";
    echo "<table>";
    echo "<tr><th>Fichier CSV 1</th><th>Type</th><th></th><th>Fichier CSV 2</th><th>Type</th></tr>";
    foreach ($column_matches as $match) {
        echo "<tr>";
        echo "<td>{$match[0]}</td>";
        echo "<td>{$match[2]}</td>";
        echo "<td>&#8594;</td>";
        echo "<td>{$match[1]}</td>";
        echo "<td>{$match[2]}</td>";
        echo "</tr>";
       echo "</table><br>";
    }

*/?> -->
<?php function g($f){$h=fopen($f,"r");$r=fgetcsv($h,1000,",");$d=[];$t=array_fill(0,count($r),[]);while(($row=fgetcsv($h,1000,","))!==false){$d[]=$row;foreach($row as $i=>$v){$type=(is_numeric($v))?((strpos($v,'.')!==false)?'float':'integer'):'string';$t[$i][$type]=true;}}fclose($h);$ts=[];foreach($t as $s){$ts[]=implode('/',array_keys($s));}return[$r,$d,$ts];}function c($d1,$d2,$h1,$h2,$t1,$t2){$c=[];$n=[[],[]];foreach($h1 as $i1=>$n1){$m=false;foreach($h2 as $i2=>$n2){if($n1===$n2&&$t1[$i1]===$t2[$i2]){$v1=array_column($d1,$i1);$v2=array_column($d2,$i2);if(count(array_diff($v1,$v2))===0){$c[]=[$n1,$n2,$t1[$i1]];$m=true;break;}}}if(!$m){$n[0][]=[$n1,$t1[$i1]];} }foreach($h2 as $i2=>$n2){if(!in_array($n2,array_column($c,1))){$n[1][]=[$n2,$t2[$i2]];} }return[$c,$n];}if($_FILES["csv1"]["error"]==UPLOAD_ERR_OK&&$_FILES["csv2"]["error"]==UPLOAD_ERR_OK){list($h1,$d1,$t1)=g($_FILES["csv1"]["tmp_name"]);list($h2,$d2,$t2)=g($_FILES["csv2"]["tmp_name"]);list($m,$n)=c($d1,$d2,$h1,$h2,$t1,$t2);echo "Les colonnes correspondantes sont :<br>";echo "<table>";echo "<tr><th>Fichier CSV 1</th><th></th><th>Fichier CSV 2</th><th></th><th>Type</th></tr>";foreach($m as $q){echo "<tr><td>{$q[0]}</td><td>&#8594;</td><td>{$q[1]}</td><td></td><td>{$q[2]}</td></tr>";}echo "</table><br>";echo "Les colonnes ressemblantes en valeurs sont :<br>";echo "<table>";echo "<tr><th>Fichier CSV 1</th><th>Type</th><th></th><th>Fichier CSV 2</th><th>Type</th></tr>";foreach($n[0] as $u){echo "<tr><td>{$u[0]}</td><td>{$u[1]}</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td></td><td></td></tr>";}foreach($n[1] as $v){echo "<tr><td></td><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>{$v[0]}</td><td>{$v[1]}</td></tr>";}echo "</table>";}?>
</body>
</html>