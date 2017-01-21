<?php
require '../model/connection.php';

$flag = isset($_REQUEST['flag']) ? $_REQUEST['flag'] : null;
if($flag != null){

	if($flag == 'news'){
		$news_data = json_encode(['result' => fetchDataFromDatabase('news',null),'optional' => ['success'=> ['data'=>'Name'], 'error'=>'', 'status' => 'ok', 'code' => '200']]);
		echo $news_data;
	}

}else{
	echo json_encode(['success'=>'', 'error'=>'Flag Missing', 'status' => 'failed', 'code' => '301']);
}




function fetchDataFromDatabase($table_name=null,$query=null){
	$db = new Connection();
	$db = $db->dbConnect();
	if($query == null)
		$query = "SELECT * FROM $table_name";
                            
    $getAll = $db->prepare($query);
    $getAll->execute();
    $json_data = [];
    foreach ($getAll->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
    	$json_data[$key] = $value;
    }
    return $json_data;
}