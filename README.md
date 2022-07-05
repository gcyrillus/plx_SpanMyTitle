# plx_SpanMyTitle
Inclus chaque mots du titre de votre site dans un span avec une classe numérotée pour les styler individuellement.

<h2>Aide du plugin</h2>
	
<h3>Configuration</h3>
  <p>Aucune</p>
<h3>Affichage Dans le théme</h3>
  <p>Pour afficher le titre de votre site(ou de vos articles) avec un span par mot vous disposez de deux options </p>
  <ol><li>Afficher un lien vers la racine de votre site ou de l'article</li>
    <li>Afficher le titre uniquement  </li>
  </ol>
  <p>Ces options sont celles qu'offre pluxml à partir des template de votre thème. Il vous suffit de remplacer le appels aux fonctions natives par celle du plugin.</p>

  <table>
    <tr><td></td><th>pour afficher le titre avec le lien vers la racine</th><th>Afficher le titre</th></tr>
    <tr><td>rechercher</td><td><code>&lt;?php $plxShow->mainTitle('link'); ?></code></td><td><code>&lt;?php $plxShow->mainTitle(); ?></code></td></tr>
    <tr><td>remplacer par</td> <td><code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainLinkTitle'))) return; ?></code></td> <td> <code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainTitle'))) return; ?></code></td></tr>
  </table>
  <h4>Pour le titre du site</h4>
  <table>
    <tr><td></td><th>pour afficher le titre avec le lien vers la racine</th><th>Afficher le titre</th></tr>
    <tr><td>rechercher</td><td><code>&lt;?php $plxShow->mainTitle('link'); ?></code></td><td><code>&lt;?php $plxShow->mainTitle(); ?></code></td></tr>
    <tr><td>remplacer par</td> <td><code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainLinkTitle'))) return; ?></code></td> <td> <code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainTitle'))) return; ?></code></td></tr>
  </table>

  <h4>Pour les titres d'articles</h4>
  <table>
  <tr><td></td><th>pour afficher le titre de l'article avec le lien</th><th>Afficher le titre</th></tr>
    <tr><td>rechercher</td><td><code>&lt;?php $plxShow->artTitle('link'); ?></code></td><td><code>&lt;?php $plxShow->artTitle(); ?></code></td></tr>
    <tr><td>remplacer par</td> <td><code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanArtTitle'))) return; ?></code></td> <td> <code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanArtTitle','link'))) return; ?></code></td></tr>
  </table>
  
 
  Pour chaque mot trouvé, un span avec une classe suivie d'un numéro est crèé dans lequel le mot est inclus. Cette class est nommée:  `spnTtle-X` , où X est le numéro du mot encapsulé.
  
  Vous pouvez styler individuellement chaque mot.
  
  Un exemple:
  ```
  .spnTtle-1 {
     color:tomato;
     font-size:1.2em;
  }
  
  .spnTtle-2 {
     color:gray;
     font-family: cursive;
  }

  .spnTtle-3 {
     color:hotpink;
     font-weight:bold;
  }
  /* etc...*/
  
  ```
  
  Un autre exemple en stylant un mot sur deux.
  ```
  span[class^='spnTtle']:nth-child(odd) {
     font-style:italic;
     font-variant:small-caps;
  }
  
  ```
  
  <h3>La feuille de style par défaut</h3>
  <p>Le plugin embarque une feuille de style par défaut, listant les 10 premiers mots et 5 couleurs</p>
  <p><strong>Celle-ci est editable depuis la page des plugins en cliquant sur le lien <a href="parametres_plugincss.php?p=spanTitle">code CSS</a> du plugin.</strong></p>
  <p>Voici à quoi elle ressemble</p>
  <pre><code>span[class="spnTtle-1"],
span[class="spnTtle-6"] {
  color:#1467b4;
}
span[class="spnTtle-2"] ,
span[class="spnTtle-7"]{
  color:#c6d43f;
}
span[class="spnTtle-3"],
span[class="spnTtle-8"] {
  color:#c7a18b
}
span[class="spnTtle-4"],
span[class="spnTtle-9"] {
  color:#00a0b4
}
span[class="spnTtle-5"] ,
span[class="spnTtle-10"]{
  color:#d47a4b
}
span[class="spnArtTtle-1"],
span[class="spnArtTtle-6"] {
  color:#1467b4;
  
}
span[class="spnArtTtle-2"] ,
span[class="spnArtTtle-7"]{
  color:#c6d43f
}
span[class="spnArtTtle-3"],
span[class="spnArtTtle-8"] {
  color:#c7a18b
}
span[class="spnArtTtle-4"] ,
span[class="spnArtTtle-9"]{
 color:#00a0b4 
}
span[class="spnArtTtle-5"],
span[class="spnArtTtle-10"] {
  color:#d47a4b
}</code></pre> 
