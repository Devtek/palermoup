<?
$filename="http://www.palermotoday.it/rss";
if( ! ($fp = fopen( "$filename" , "r" )) ){echo "Impossibile aprire il file xml!";}
$item_counter = 0;
$item_data = array();
$xml_current_tag_state = '';
function startElementHandler( $parser, $element_name, $element_attribs ){
	global $item_counter;
	global $item_data;
	global $xml_current_tag_state;
	$xml_current_tag_state = $element_name;
}
function endElementHandler( $parser, $element_name ){
	global $item_counter;
	global $item_data;
	global $xml_current_tag_state;
	$xml_current_tag_state = '';
	if( $element_name == "ITEM" ) {
		$item_counter++;
	}
}
function characterDataHandler( $parser , $data ){
	global $item_counter;
	global $item_data;
	global $xml_current_tag_state;
	if( $xml_current_tag_state == '' ) {
		return;
	}
	if( $xml_current_tag_state == "TITLE" ) {
		$item_data[$item_counter]["title"] = $data;
	}
	if( $xml_current_tag_state == "LINK" ) {
		$item_data[$item_counter]["link"] = $data;
	}
}
if( !($xml_parser = xml_parser_create()) ){
	die("Impossibile creare l' XML parser!");
}

xml_set_element_handler($xml_parser, "startElementHandler", "endElementHandler");
xml_set_character_data_handler($xml_parser, "characterDataHandler");

$data = stream_get_contents($fp);
if( !xml_parse($xml_parser, $data, feof($fp)) ){
	break; // esce dal loop quando finisce
}

xml_parser_free($xml_parser);

for( $i=0 ; $i < $item_counter ; ++$i ){
	echo "<a href='".$item_data[$i]["link"]."'>".$item_data[$i]["title"]."</a><BR/>";
}
?>