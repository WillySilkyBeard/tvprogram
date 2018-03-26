<?php
$host = 'localhost';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$d = getdate(); // использовано текущее время
foreach ( $d as $key => $val )
	$today = $d[mday];
$one = $d[mday]+1;
$two = $d[mday]+2;
$three = $d[mday]+3;
$four = $d[mday]+4;
$five = $d[mday]+5;
$six = $d[mday]+6;

//echo $d[wday];

$wday = $d[wday];
$wone = $d[wday]+1;
$wtwo = $d[wday]+2;
$wthree = $d[wday]+3;
$wfour = $d[wday]+4;
$wfive = $d[wday]+5;
$wsix = $d[wday]+6;

if(!isset($_GET['day'])){

	$day = $d[year]."-0".$d[mon]."-".$today;
} else {
	$day = $_GET['day'];
}

//0
if ($wday == 0 || $wday == 7) {
	$wday = 'Вс';
} elseif ($wday == 1 || $wday == 8) {
	$wday = 'Пн';
} elseif ($wday == 2 || $wday == 9) {
	$wday = 'Вт';
} elseif ($wday == 3 || $wday == 10) {
	$wday = 'Ср';
} elseif ($wday == 4 || $wday == 11) {
	$wday = 'Чт';
} elseif ($wday == 5 || $wday == 12) {
	$wday = 'Пт';
} elseif ($wday == 6) {
	$wday = 'Сб';
}
//1
if ($wone == 0 || $wone == 7) {
	$wone = 'Вс';
} elseif ($wone == 1 || $wone == 8) {
	$wone = 'Пн';
} elseif ($wone == 2 || $wone == 9) {
	$wone = 'Вт';
} elseif ($wone == 3 || $wone == 10) {
	$wone = 'Ср';
} elseif ($wone == 4 || $wone == 11) {
	$wone = 'Чт';
} elseif ($wone == 5 || $wone == 12) {
	$wone = 'Пт';
} elseif ($wone == 6) {
	$wone = 'Сб';
}
//2
if ($wtwo == 0 || $wtwo == 7) {
	$wtwo = 'Вс';
} elseif ($wtwo == 1 || $wtwo == 8) {
	$wtwo = 'Пн';
} elseif ($wtwo == 2 || $wtwo == 9) {
	$wtwo = 'Вт';
} elseif ($wtwo == 3 || $wtwo == 10) {
	$wtwo = 'Ср';
} elseif ($wtwo == 4 || $wtwo == 11) {
	$wtwo = 'Чт';
} elseif ($wtwo == 5 || $wtwo == 12) {
	$wtwo = 'Пт';
} elseif ($wtwo == 6) {
	$wtwo = 'Сб';
}
//3
if ($wthree == 0 || $wthree == 7) {
	$wthree = 'Вс';
} elseif ($wthree == 1 || $wthree == 8) {
	$wthree = 'Пн';
} elseif ($wthree == 2 || $wthree == 9) {
	$wthree = 'Вт';
} elseif ($wthree == 3 || $wthree == 10) {
	$wthree = 'Ср';
} elseif ($wthree == 4 || $wthree == 11) {
	$wthree = 'Чт';
} elseif ($wthree == 5 || $wthree == 12) {
	$wthree = 'Пт';
} elseif ($wthree == 6) {
	$wthree = 'Сб';
}
//4
if ($wfour == 0 || $wfour == 7) {
	$wfour = 'Вс';
} elseif ($wfour == 1 || $wfour == 8) {
	$wfour = 'Пн';
} elseif ($wfour == 2 || $wfour == 9) {
	$wfour = 'Вт';
} elseif ($wfour == 3 || $wfour == 10) {
	$wfour = 'Ср';
} elseif ($wfour == 4 || $wfour == 11) {
	$wfour = 'Чт';
} elseif ($wfour == 5 || $wfour == 12) {
	$wfour = 'Пт';
} elseif ($wfour == 6) {
	$wfour = 'Сб';
}
//5
if ($wfive == 0 || $wfive == 7) {
	$wfive = 'Вс';
} elseif ($wfive == 1 || $wfive == 8) {
	$wfive = 'Пн';
} elseif ($wfive == 2 || $wfive == 9) {
	$wfive = 'Вт';
} elseif ($wfive == 3 || $wfive == 10) {
	$wfive = 'Ср';
} elseif ($wfive == 4 || $wfive == 11) {
	$wfive = 'Чт';
} elseif ($wfive == 5 || $wfive == 12) {
	$wfive = 'Пт';
} elseif ($wfive == 6) {
	$wfive = 'Сб';
}
// 6
if ($wsix == 0 || $wsix == 7) {
	$wsix = 'Вс';
} elseif ($wsix == 1 || $wsix == 8) {
	$wsix = 'Пн';
} elseif ($wsix == 2 || $wsix == 9) {
	$wsix = 'Вт';
} elseif ($wsix == 3 || $wsix == 10) {
	$wsix = 'Ср';
} elseif ($wsix == 4 || $wsix == 11) {
	$wsix = 'Чт';
} elseif ($wsix == 5 || $wsix == 12) {
	$wsix = 'Пт';
} elseif ($wsix == 6) {
	$wsix = 'Сб';
}

    # подключаем библиотеку
include('tv/simple_html_dom.php');

    # глобальный массив, который будет заполняться информацией статьи
$articles = array();

    # передаем первую страницу на парсинг, до последней он доберется сам
getArticles('http://www.vl.ru/tv/grid/'.$day);

function getArticles($page) {
	global $articles, $descriptions;

	$html = new simple_html_dom();
	$html->load_file($page);

	$items = $html->find('div[class=col]');

	foreach($items as $post) {

        $articles[] = array($post->children(0)->outertext, // получили название канала
                            $post->children(1)->outertext); // список передач
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tv</title>
		<link rel="stylesheet" type="text/css" href="tv/style.css">    
	</head>
	<body>
<div class="tv__menu">
	<ul>
		<li><a class="nav-filter-date-link" href="get.php?day=<?="$d[year]-0$d[mon]-$today"?>"><span>Сегодня <span class="nav__day">(<?=$wday." ".$d[mday]?>)</span></span></a></li>
		<li><a class="nav-filter-date-link" href='get.php?day=<?="$d[year]-0$d[mon]-$one"?>'><span><?=$wone?> <span class="nav__day"><?=$d[mday]+1?></span></span></a></li>
		<li><a class="nav-filter-date-link" href="get.php?day=<?="$d[year]-0$d[mon]-$two"?>"><span><?=$wtwo?> <span class="nav__day"><?=$d[mday]+2?></span></span></a></li>
		<li><a class="nav-filter-date-link" href="get.php?day=<?="$d[year]-0$d[mon]-$three"?>"><span><?=$wthree?> <span class="nav__day"><?=$d[mday]+3?></span></span></a></li>
		<li><a class="nav-filter-date-link" href="get.php?day=<?="$d[year]-0$d[mon]-$four"?>"><span><?=$wfour?> <span class="nav__day"><?=$d[mday]+4?></span></span></a></li>
		<li><a class="nav-filter-date-link" href="get.php?day=<?="$d[year]-0$d[mon]-$five"?>"><span><?=$wfive?> <span class="nav__day"><?=$d[mday]+5?></span></span></a></li>
		<li><a class="nav-filter-date-link" href="get.php?day=<?="$d[year]-0$d[mon]-$six"?>"><span><?=$wsix?> <span class="nav__day"><?=$d[mday]+6?></span></span></a></li>
	</ul>
</div>
<?php
echo "<div class='ecentr'>Телепрограмма на $day</div>";
?>
<div id="main">
	<?php
	foreach($articles as $item) {
// соединяем в одну переменную. $item[0] - название каналов. $item[1] - программа передач
		$content .= $item[0];
		$content .= $item[1];
	}

// запрос проверяем сохраняли ли этот день в БД или нет
	$sql = "SELECT * FROM tv WHERE name = '$day'";
	$statement = $pdo->prepare($sql);
	$statement->execute();
	
	$data = $statement->fetch();
	$name = $data['name'];

	if(($name === $day) == false) {
		echo "Пишем содержимое в БД";
		echo "<br>";
	// Пишем содержимое в БД
		if($content) {
		$sql = "INSERT INTO tv (name, content) VALUES (:name, :content)";
		$statement = $pdo->prepare($sql);
		$params = ['name' => $day, 'content' => $content];

		$statement->execute($params);

		} echo "На этот день еще нет телепрограммы";

	} else {
	// показываем на экран
	// если есть такой день
		if($data['content']) {
			echo "<div class='channel'";
			echo $data['content'];
			echo "</div>";
		} else {
			echo "Еще не добавили телепрограмму, скоро добавим!";
		}
	}
		?>
</div>
	<script src="tv/main.js"></script>
</body>
</html>