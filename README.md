# plx_SpanMyTitle
Inclus chaque mots du titre de votre site dans un span avec une classe numérotée.

<h2>Aide du plugin</h2>
	
<h3>Configuration</h3>
  <p>Aucune</p>
<h3>Affichage Dans le théme</h3>
  <p>Pour afficher le titre de votre site avec un span par mot vous disposez de deux options </p>
  <ol><li>Afficher un lien vers la racine de votre site</li>
    <li>Afficher le titre uniquement  </li>
  </ol>
  <p>Ces options sont celles qu'offre pluxml à partir des template de votre thème. Il vous suffit de remplacer le appels aux fonctions natives par celle du plugin.</p>

  <table>
    <tr><td></td><th>pour afficher le titre avec le lien vers la racine</th><th>Afficher le titre</th></tr>
    <tr><td>rechercher</td><td><code>&lt;?php $plxShow->mainTitle('link'); ?></code></td><td><code>&lt;?php $plxShow->mainTitle(); ?></code></td></tr>
    <tr><td>remplacer par</td> <td><code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainLinkTitle'))) return; ?></code></td> <td> <code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainTitle'))) return; ?></code></td></tr>
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
  
