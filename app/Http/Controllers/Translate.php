<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;
//use Illuminate\Support\Facades\Input;
//use PhpXmlRpc;
//use PhpXmlRpc\Value;
use Enl\MosesClient\Client;
use Enl\MosesClient\Transport;
class Translate extends Controller
{


	public function translate(Request $request){

		$text=$request->text;
		$input = $request->input;

		if ($input == 'ja') {
//			$lang = "ja-vi";
			$text = $request->text;
			$transport = new Transport('http://112.137.130.53:8080/RPC2');
			$client = new Client($transport);

			$translation = $client->translate($text);
			echo $translation;
		} else if($input == 'vi') {
//		    $lang = "vi-ja";

			echo "Ngôn ngữ chưa được hỗ trợ";
		}

//	    $server = "http://dictmachine.dev";
//	    $req = new PhpXmlRpc\Request('server.translate', array(
//			    new PhpXmlRpc\Value($lang),
//			    new PhpXmlRpc\Value($text)
//		    )
//	    );
//
//	    $client = new PhpXmlRpc\Client($server);
////	    $client->setDebug(2);
//	    $resp = $client->send($req);
//
//	    if (!$resp->faultCode()) {
//
//		    $value = $resp->value();
//		    echo ($value->scalarval());
//
//
//
//	    } else {
//		    echo "ERR";
//	    }




	}


}
