<?php
class textManager
{
		//variable longueur resumé des articles 
		//page principale
		public $_stringLenght = 40;										
		
		public function initSummary($datas)
		{
			$newDatas = html_entity_decode($datas);					
			if (str_word_count($newDatas) <= $this->_stringLenght)
			{
				// rétablir la variable avec -2 (balise HTML à enlever)
				$this->_stringLenght = str_word_count($newDatas)-2;
				$this->summary($newDatas);
			}
			else
			{
				$this->summary($newDatas);
			}			
		}
		public function summary($newDatas)
		{
			$summary = explode(" ",$newDatas); 						
			
			for ($i=0; $i<$this->_stringLenght; $i++)
			{
				echo $summary[$i]." ";
			}
		}	
}