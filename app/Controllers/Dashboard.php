<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VisitorModel; 

class Dashboard extends Controller
{
	public function __construct() {
		$this->visitorModel = new VisitorModel();
	}

	public function index()
	{
		$db = db_connect();
		$query = $db->query('SELECT category, COUNT(id) as jumlahdata FROM visitors GROUP BY category');
		$result = $query->getResultArray();

		// foreach ($result as $data) {
		// 	$hasil[] = $data['date'];
		// 	$hasil[] = $data['jumlahdata'];
		// }

		$data = [
			"visitors" => $result
		];

		echo view('dashboard', $data);
	}

	// public function show(){

	// 	$db = db_connect();
	// 	$query = $db->query('SELECT DISTINCT(date), COUNT(id) as jumlahdata FROM visitors GROUP BY date');
	// 	$result = $query->getResultArray();

	// 	foreach ($result as $data) {
	// 		$hasil[] = $data['date'];
	// 		$hasil[] = $data['jumlahdata'];
	// 	}

	// 	json_encode($hasil);
	// }
}