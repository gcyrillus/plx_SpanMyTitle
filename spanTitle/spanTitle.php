<?php
  class spanTitle extends plxPlugin {	 
	
    public function __construct($default_lang) {
	
		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# déclaration des hooks
		$this->addHook('spanMainLinkTitle', 'spanMainLinkTitle');
		$this->addHook('spanMainTitle','spanMainTitle');
        
        # droits pour accèder à la page config.php du plugin
		$this->setConfigProfil(PROFIL_ADMIN);
    }
		
		#desc hook function
    public function spanMainLinkTitle()
    {
		global $plxMotor;
        $title = plxUtils::strCheck($plxMotor->aConf['title']);
            echo '<a class="maintitle" href="' . $plxMotor->urlRewrite() . '" title="' . $title . '">' . $this->spanit() . '</a>';
    }   
	public function spanMainTitle()
    {
         echo $this->spanit() ;
    }
	public function spanit() {
		global $plxMotor;
		$spannedTitled="";
		 $title = $plxMotor->aConf['title'];
		$spanIt= explode(' ',$title);
		$i=0;
		foreach($spanIt as $word => $item) {
			$i++;
			$spannedTitled .='<span class="spnTtle-'.$i.'">'.$item.'</span> ';	
		}
		return $spannedTitled;
	}
}
?>	