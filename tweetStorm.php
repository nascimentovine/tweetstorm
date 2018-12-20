<?php

class tweetStorm{
	private $file_name;
	private $arrWords = array(); //irá recebe todas as palavras do texto, indice a indice
	private $arrTweet  = array(); //recebe os lotes de frases na iteraçao do loop de palavras
	private $tweet = ""; 
	private $return = "";
	public function __construct($file){
      $this->file_name = $file;
	}
	public function TweetGenerator(){
		$str = utf8_encode(file_get_contents($this->file_name));
		$this->arrWords = explode(" ",$str);
		$srtCount = 0;
		foreach ($this->arrWords as $key => $value) {
			$srtCount += strlen($value);
			$this->tweet .= $value." ";
			if($srtCount  > 135){
				$this->arrTweet[] = $this->tweet;
				$srtCount = 0;
				$this->tweet = "";
			}
		}
		$countTweets = count($this->arrTweet);
		foreach ($this->arrTweet as $key => $value) {
			$tweetAtual = $key+1;
			$this->return .= "$value...$tweetAtual/$countTweets <br><br>";
		}
		return $this->return;
	}
}



//Como no próprio exercicio sugere, o algoritmo não é totalmente eficaz, mas consegue transparecer o que foi pedido. com certeza tem melhores formas de fazer, mas com o tempo estimado, pensei nesta :)	