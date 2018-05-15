$no_rea = true;
$no_maintenance = true;

require_once('../includes/core.php');
Header("Content-type: image/png");

$name = $_GET['name'];
$size = $_GET['size'];
$direction = $_GET['direction'];
$head_direction = $_GET['head_direction'];
$gesture = $_GET['gesture'];
$action = $_GET['action'];
$user = FilterText($_GET['user']);

if(!empty($name))
{
	$real_figure = $name;
} 
else if(!empty($user)) 
{
	$real_figure = userData("name", $user);
}

if(empty($size))
{
	$size = "b";
}

if(empty($direction))
{
	$direction = "3";
}

if(empty($head_direction))
{
	$head_direction = "3";
}

if(empty($gesture))
{
	$gesture = "sml";
}
	

echo file_get_contents('http://www.habbo.com/habbo-imaging/avatarimage?name='.$name.'&size='.$size.'&direction='.$direction.'&head_direction='.$head_direction.'&gesture='.$gesture.'&action='.$action);
