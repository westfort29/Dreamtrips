<?php
require_once 'config.php';

function getmonth ($date)
{
	$date = substr($date,3,2);
	if ($date == '01') $date="jan";
	if ($date == '02') $date="feb";
	if ($date == '03') $date="mar";
	if ($date == '04') $date="apr";
	if ($date == '05') $date="may";
	if ($date == '06') $date="jun";
	if ($date == '07') $date="jul";
	if ($date == '08') $date="aug";
	if ($date == '09') $date="sep";
	if ($date == '10') $date="oct";
	if ($date == '11') $date="nov";
	if ($date == '12') $date="dec";
	return $date;
}

function tripFinder($triptype, $tripflight, $tripseason, $tripseasonend, $totalcost, $comfort, $entertain, $people)
{
	global $db;
	$date = date_create($tripseason);
	$date1 = date_create($tripseasonend);
	$days = date_diff($date, $date1)->days;
	$tripseason = getmonth($_GET['date-to']); 
	$tripseasonend = getmonth($_GET['date-back']);
	if ($people > 3) $hotelMult = 2;
	else $hotelMult = 1;
	if ($triptype == "ski")
	{
	$query = "SELECT * FROM countries WHERE ski_seasons LIKE '%$tripseason%' AND entertain LIKE '%$entertain%' AND ski_seasons LIKE '%$tripseasonend%' AND triptype LIKE '%$triptype%' AND flight <= $tripflight AND ski_avia * $people + visa * $people + hotelcost * $days * $comfort * $hotelMult < $totalcost ORDER BY name";	
	}
	else
	{
	$query = "SELECT * FROM countries WHERE seasons LIKE '%$tripseason%' AND entertain LIKE '%$entertain%' AND seasons LIKE '%$tripseasonend%' AND triptype LIKE '%$triptype%' AND flight <= $tripflight AND aviacost * $people + visa * $people + hotelcost * $days * $comfort * $hotelMult < $totalcost ORDER BY name";
	}
	$res = mysqli_query($db, $query);
	$countries = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$countries[$row['id_country']] = $row;
	};
	return $countries;
}


 function addWhere($where, $add, $and = true) 
  {
    if ($where) 
	{
      if ($and) $where .= " AND $add";
      else $where .= " OR $add";
    }
    else $where = $add;
    return $where;
  }

function get_images_db($gallery)
{
	global $db;
	global $where;
	/*if (!empty($_POST["filter"])) 
    {
		$where = "";
		if ($_POST["locations"]) $where = htmlspecialchars(implode(",", $_POST["locations"]));
    }*/
	$query = "SELECT * FROM images WHERE gallery_id = $gallery ORDER BY location DESC";
	//if ($where) $query .= " AND location = '$where'";
	$res = mysqli_query($db, $query);
	$images = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$images[$row['id']] = $row;
	};
	return $images;
}

function get_articles($start_pos, $perpage)
{
	global $db;
	$sql = "SELECT * FROM articles ORDER BY id DESC LIMIT $start_pos, $perpage";
	$res = mysqli_query($db, $sql);
	$articles = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$articles[$row['id']]=$row;
	};
	return $articles;
}
function get_articles_main()
{
	global $db;
	$sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 3";
	$res = mysqli_query($db, $sql);
	$articles = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$articles[$row['id']]=$row;
	};
	return $articles;
}

function get_article($blog)
{
	global $db;
	global $blog;
	$sql = "SELECT * FROM articles WHERE id = $blog";	
	$res = mysqli_query($db, $sql);
	$articles = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$articles[$row['id']]=$row;
	};
	return $articles;
}

function get_countries()
{
	global $db;
	$sql = "SELECT * FROM countries ORDER BY name ASC";
	$res = mysqli_query($db, $sql);
	$countries = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$countries[$row['id_country']]=$row;
	};
	return $countries;
}
function get_country($countryname)
{
	global $db;
	global $countryname;
	$sql = "SELECT * FROM countries WHERE name_en = '$countryname'";
	$res = mysqli_query($db, $sql);
	$countries = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$countries[$row['id_country']]=$row;
	};
	return $countries;
}


function count_art() 
{
	global $db;
	$query = "SELECT COUNT(*) FROM articles";
	$res = mysqli_query($db, $query);
	$row = mysqli_fetch_row($res);
	return $row[0];
}



function get_images($dir)
{
	@$files = scandir($dir);
	if (!$files) return false;
	$pattern = "#\.(jpe?g|png|gif)$#i";
	foreach ($files as $key => $file)
	{
		if (!preg_match($pattern, $file))
		{
			unset($files[$key]);
		}
	}
	$files = array_merge($files);
	return $files;
}


function pagination($page, $count_pages, $modrew=true)
{
	$back = null;
	$forward = null;
	$startpage = null;
	$endpage =  null;
	$page2left = null;
	$page1left = null;
	$page2right = null;
	$page1right = null;
	
	$uri= "?";
	if(!$modrew)
	{
		if ($_SERVER['QUERY_STRING'])
		{
			foreach ($_GET as $key => $value)
			{
				if ($key != 'page') $uri .= "{$key}=$value&amp;";
			}
		}
	}
	else
	{
		$url = $_SERVER['REQUEST_URI'];
		$url = explode("?", $url);
		if (isset($url[1]) && $url[1] != '')
		{
			$params = explode("&", $url[1]);
			foreach ($params as $param)
			{
				if (!preg_match("#page=#", $param)) $uri .= "($param)&amp;";
			}
		}
	}
	if ($page > 1) 
	{
		$back = "<a class='nav-link' data-page='".($page-1)."' href='{$uri}page=" . ($page-1) . "'>&lt;</a>";
	}
	if ($page < $count_pages) 
	{
		$forward = "<a class='nav-link' data-page='".($page+1)."' href='{$uri}page=" . ($page+1) . "'>&gt;</a>";
	}
	if ($page > 3) 
	{
		$startpage = "<a class='nav-link' data-page='1' href='{$uri}page=1'>&laquo;</a>";
	}
	if ($page < ($count_pages - 2) ) 
	{
		$endpage = "<a class='nav-link' data-page='".$count_pages."' href='{$uri}page={$count_pages}'>&raquo;</a>";
	}
	if ($page - 2 > 0)  
	{
		$page2left = "<a class='nav-link' data-page='".($page-2)."' href='{$uri}page=" . ($page-2) . "'>" . ($page-2) . "</a>";
	}
	if ($page - 1 > 0)  
	{
		$page1left = "<a class='nav-link' data-page='".($page-1)."' href='{$uri}page=" . ($page-1) . "'>" . ($page-1) . "</a>";
	}
	if ($page + 1 <= $count_pages)  
	{
		$page1right = "<a class='nav-link' data-page='".($page+1)."' href='{$uri}page=" . ($page+1) . "'>" . ($page+1) . "</a>";
	}
	if ($page + 2 <= $count_pages)  
	{
		$page2right = "<a class='nav-link' data-page='".($page+2)."' href='{$uri}page=" . ($page+2) . "'>" . ($page+2) . "</a>";
	}
	return $startpage.$back.$page2left.$page1left. '<a class="nav-active">' . $page . '</a>' . $page1right.$page2right.$forward.$endpage;
}

?>