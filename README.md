# plx_SpanMyTitle
Inclus chaque mots du titre de votre site(ou de vos articles, pages statiques) dans un span avec une classe numérotée pour les styler individuellement.

<div id="help">
<h2>Aide du plugin</h2>
	
<h3>Configuration</h3>
  <p>Aucune</p>
<h3>Affichage Dans le théme</h3>
  <p>Pour afficher le titre de votre site (ou d'un arrticle) avec un span par mot vous disposez de deux options </p>
  <ol><li>Afficher un lien vers la racine de votre site</li>
    <li>Afficher le titre uniquement <sup><sub>(cette option est la seule disponible pour les titre de pages statiques)</sub></sup> </li>
  </ol>
  <p>Ces options sont celles qu'offre pluxml à partir des themplate de votre thème. Il vous suffit de remplacer les appels aux fonctions natives de PluXml par celle du Plugin. <sub>(Voir les tableaux ci-dessous)</sub></p>
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
    <tr><td>remplacer par</td> <td><code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanArtTitle','link'))) return; ?></code></td> <td> <code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanArtTitle'))) return; ?></code></td></tr>
  </table>
	
  <h4>Pour les titres des pages statiques</h4>
  <table>
  <tr><td></td><th>Afficher le titre</th></tr>
    <tr><td>rechercher</td><td><code>&lt;?php $plxShow->staticTitle(); ?></code></td></tr>
    <tr><td>remplacer par</td><td> <code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanStaticTitle'))) return; ?></code></td></tr>
  </table>
  
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
<hr>
</div>
