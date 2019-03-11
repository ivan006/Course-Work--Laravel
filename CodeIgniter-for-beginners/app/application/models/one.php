<?php
public function handle( $responceContent) {


  preg_match_all( '/\[r\](.*)\[\/r\]/', $responceContent, $matches);

  if (!empty($matches[0])) {


    foreach ($matches[0] as $key => $value) {
      $shortcode = $value;
      $parameter = str_replace("[r]", "", $shortcode);
      $parameter = str_replace("[/r]", "", $parameter);

      $retrieval_path = url('/')."/blogApi/".$parameter;

      $result = file_get_contents($retrieval_path);


      if ($result !== "[]") {
        $result = json_decode($result);

        $responceContent = str_replace($shortcode, $result, $responceContent);
      }

    }
    $responce->setContent($responceContent);



  }
  return $responce;
}
