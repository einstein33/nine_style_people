<?php

function get_lib_path($mark)
{
	// var_dump(scandir("../nine_style/lib/"));
	return "../nine_style/lib/q_144_" . $mark . ".php";
}

function get_9style_people_question()
{
	$q_count = 144;
	if (isset($_GET['qid']) && ((int)$_GET['qid'] >= 0) && ((int)$_GET['qid'] < $q_count)) {
		require_once(get_lib_path("question"));
		$json = array();
		array_push($json, $question[$_GET['qid']]);
		return json_encode($json, JSON_UNESCAPED_UNICODE);
	}
}

function get_9style_people_info()
{
	$q_count = 9;
	if (isset($_GET['typeID']) && ((int)$_GET['typeID'] >= 0) && ((int)$_GET['typeID'] < $q_count)) {
		require_once(get_lib_path("info"));
		$json = array();
		array_push($json, $people_style_info[$_GET['typeID']]);
		return json_encode($json);
	}
}

function post_9style_people_result()
{
	if (isset($_POST['result']) && (NULL !== $_POST['result'])) {
		$response = json_decode($_POST['result']);
		//return json_encode($response);
		require_once(get_lib_path("answer"));
		$score = array(
			'A' => 0, 'B' => 0, 'C' => 0,
			/** 9-6-3 */
			'D' => 0, 'E' => 0, 'F' => 0,
			/** 1-4-2 */
			'G' => 0, 'H' => 0, 'I' => 0,
			/** 8-5-7 */
		);
		for ($i = 0; $i < count($response); $i++) {
			++$score[$answer[$i][$response[$i]]];
		}
		//var_dump($score);
		return json_encode($score);
	}
}
