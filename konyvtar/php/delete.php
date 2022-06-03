<? 
include_once('Books.php');
include_once('Authors.php');
include_once('Categories.php');

switch($_GET['t']) {
	case 'books':
		$books = new Books();
		$res = $books->delete(intval($_GET['id']));
		if (!$res) {
			echo "Hiba a könyv törlése során, id: " . $_GET['id'];
		}
		break;
	case 'authors':
		$authors = new Authors();
		$res = $authors->delete(intval($_GET['id']));
		if (!$res) {
			echo "Hiba a szerző törlése során, id: " . $_GET['id'];
		}
		break;
	case 'categories':
		$categories = new Categories();
		$res = $categories->delete(intval($_GET['id']));
		if (!$res) {
			echo "Hiba a kategória törlése során, id: " . $_GET['id'];
		}
		break;

	default:
		break;
}

if ($res) {
	header("Location: ../admin/index.php");
}

?>