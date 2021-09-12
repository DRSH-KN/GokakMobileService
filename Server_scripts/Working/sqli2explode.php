/* $keyWord = explode(";", $inputData);
    $keyWordLen = count($keyWord);
    $keyWordQuery = " WHERE (";
    for ($i=0; $i < $keyWordLen ; $i++) { 
        $keyWordQuery = $keyWordQuery."[firstName] LIKE ('%".$keyWord[$i]."%') OR ";
        if (($keyWordLen-1)==$i) {
            $keyWordQuery = $keyWordQuery."[lastName] LIKE ('%".$keyWord[$i]."%'))";  
        }else
        {
          $keyWordQuery = $keyWordQuery."[lastName] LIKE ('%".$keyWord[$i]."%') OR ";  
        }
        
    }*/