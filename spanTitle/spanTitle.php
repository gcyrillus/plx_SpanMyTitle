<?php
  class spanTitle extends plxPlugin {	 
	
    public function __construct($default_lang) {
	
		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# déclaration des hooks
		$this->addHook('IndexBegin', 'IndexBegin');
		$this->addHook('spanMainLinkTitle', 'spanMainLinkTitle');
		$this->addHook('spanMainTitle','spanMainTitle');
        $this->addHook('spanArtTitle','spanArtTitle');
        $this->addHook('spanStaticTitle','spanStaticTitle');
		
        # droits pour accèder à la page config.php du plugin
		$this->setConfigProfil(PROFIL_ADMIN);
    }
        // désactive de force la compression gzip si activée pour une compatibilité des plugins usant du hook indexEnd() ou hook perso similaire dans les templates
        public function  IndexBegin() {
            echo '<?php ';
			?>
        $plxMotor->aConf['gzip'] ='0';
            ?>
			<?php           
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
	
	#traite les titres des articles
	public function spanArtTitle($type = '')
    {
		global $plxMotor;
		global $plxUtils;
		$spannedTitled="";
			$title = plxUtils::strCheck($plxMotor->plxRecord_arts->f('title'));
			$spanIt= explode(' ',$title);
			$i=0;
			foreach($spanIt as $word => $item) {
				$i++;
				$spannedTitled .='<span class="spnArtTtle-'.$i.'">'.$item.'</span> ';	
			}
        if ($type == 'link') { # Type lien
            $id = intval($plxMotor->plxRecord_arts->f('numero'));            
            $url = $plxMotor->plxRecord_arts->f('url');
            # On effectue l'affichage
            echo '<a href="' . $plxMotor->urlRewrite('?article' . $id . '/' . $url) . '" title="' . $title . '">' .  $spannedTitled . '</a>';
        } else { # Type normal
            echo $spannedTitled;
        }
	}	

	#traite les titres des pages statiques
    public function spanStaticTitle()
    {
		global $plxMotor;
		global $plxUtils;
		$spannedTitled="";
		$title = plxUtils::strCheck($plxMotor->aStats[$plxMotor->cible]['name']);
		$spanIt= explode(' ',$title);
			$i=0;	
		foreach($spanIt as $word => $item) {
			$i++;
			$spannedTitled .='<span class="spnArtTtle-'.$i.'">'.$item.'</span> ';	
		}		
        echo $spannedTitled;
    }	
}
?>
