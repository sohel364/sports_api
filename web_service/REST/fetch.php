<?php
require '../model/connection.php';

$flag = isset($_REQUEST['flag']) ? $_REQUEST['flag'] : null;
if($flag != null){

	/*if($flag == 'news'){
		$query = "SELECT title, imageurl, description, publishTime FROM news";
		$news_data = json_encode(['news' => fetchDataFromDatabase('news',$query)]);
		echo $news_data;
	}*/
	switch ($flag) {
		case 'news':
			$query = "SELECT title, imageurl, description, publishTime FROM news";
			$news_data = json_encode(['news' => fetchDataFromDatabase('news',$query)]);
			echo $news_data;
			break;
		case 'livescrore': //problem in json
			$query = "SELECT match_type, title, url FROM livescrore";
			$json_data = [];
			$json_data2;
			$livescore_Data = fetchDataFromDatabase('livescrore',$query);
			foreach ($livescore_Data as $value) {
				$json_data['match_type'] = $value['match_type'];
				$json_data['urlList'] = [
					'title' => $value['title'],
					'url' => $value['url']
				];
				$json_data['title'] = $value['title'];
				$json_data['url'] = $value['url'];
				
				$json_data2[] = $json_data;
			}
			$livescrore = json_encode(['livescrore' => $json_data2]);
			echo $livescrore;
			break;

		case 'highlights':
			$query = "SELECT title, type, url, imageurl FROM highlights";
			$highlights_data = json_encode(['highlights' => fetchDataFromDatabase('highlights',$query)]);
			echo $highlights_data;
			break;

		case 'schedule':
			$query = "SELECT title, venue, matchtime FROM schedule";
			$schedule_data = json_encode(['schedule' => fetchDataFromDatabase('schedule',$query)]);
			echo $schedule_data;
			break;
			
		default:
			echo json_encode(['1']);
			break;
	}

}else{
	echo json_encode(['success'=>'', 'error'=>'Flag Missing', 'status' => 'failed', 'code' => '301']);
}




function fetchDataFromDatabase($table_name=null,$query=null){
	$db = new Connection();
	$db = $db->dbConnect();
	if($query == null)
		$query = "SELECT * FROM $table_name";
	else
		$query = $query;
                            
    $getAll = $db->prepare($query);
    $getAll->execute();
    $json_data = [];
    foreach ($getAll->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
    	$json_data[$key] = $value;
    }
    return $json_data;
}