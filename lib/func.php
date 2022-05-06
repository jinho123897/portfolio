<?
   function latest_article($table, $loop, $char_limit) 
   {
		include "dbconn.php";

		$sql = "select * from $table order by num desc limit $loop";
		$result = mysql_query($sql, $connect);

		while ($row = mysql_fetch_array($result))
		{
			$num = $row[num];
			$len_subject = mb_strlen($row[subject], 'utf-8');
			$len_content = strlen($row[content]);  // 텍스트의 길이를 구한다.
			$subject = $row[subject];
			$content = $row[content];
			$image_copied = $row[file_copied_0];

			if ($len_content > $char_limit)   //제목의 길이가 지정한 길이보다 크면
			{
				$content = mb_substr($row[content], 0, $char_limit, 'utf-8');   // 첫번째 문자부터 $char_limit만큼 잘라낸다.
                                                  //mb_substr 은 입력받은 문자열을 정해진 길이만큼 잘라서 리턴하는데 
                                                  //2byte 문자인 한글에 대해서도 처리가 가능한 함수입니다. 

				$content = $content."...";   // 잘라낸 문자열에 ...을 추가한다.
			}			

			if ($len_subject > $char_limit)
			{
				$subject = str_replace( "&#039;", "'", $subject);               
               	$subject = mb_substr($subject, 0, $char_limit, 'utf-8');
				$subject = $subject."...";
			}

			$regist_day = substr($row[regist_day], 0, 10);

            
            if($table=='concert'){
               
                if($row[file_copied_0]){
                 $concertimg='./concert/data/'.$row[file_copied_0];
                }else{
                 $concertimg= './concert/data/default.jpg';
                }
            }
            
            
            
           if($table=='greet'){ 
            
			echo "      
			<li>
				<a href='./$table/view.php?table=$table&num=$num'>
					<dl>
						<dt>$subject</dt>
						<dd>$content <span>$regist_day</span></dd>
					</dl>
				</a>
			</li>
			";
               
           }else if($table=='concert'){
             
             echo "      
				<li>
					<a href='./$table/view.php?table=$table&num=$num'>
						<img src='./concert/images/new9.jpg' alt='뉴스이미지'>
						<dl>
							<dt>$subject</dt>
							<dd>$content <span>$regist_day</span></dd>
						</dl>
					</a>
				</li>
			";  
               
           }
               
               
		}
		mysql_close();
   }
?>