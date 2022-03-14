<div id="help">
<h2>Aide du plugin</h2>
	
<h3>Configuration</h3>
  <p>Aucune</p>
<h3>Affichage Dans le théme</h3>
  <p>Pour afficher le titre de votre site avec un span par mot vous disposez de deux options </p>
  <ol><li>Afficher un ien vers la racine de votre site</li>
    <li>Afficher le titre uniquement  </li>
  </ol>
  <p>Ces options sont celles qu'offre pluxml à partir des themplate de votre thème. Il vous suffit de les remplacées.</p>

  <table>
    <tr><td></td><th>pour afficher le titre avec le lien vers la racine</th><th>Afficher le titre</th></tr>
    <tr><td>rechercher</td><td><code>&lt;?php $plxShow->mainTitle('link'); ?></code></td><td><code>&lt;?php $plxShow->mainTitle(); ?></code></td></tr>
    <tr><td>remplacer par</td> <td><code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainLinkTitle'))) return; ?></code></td> <td> <code>&lt;?php if (eval($plxMotor->plxPlugins->callHook('spanMainTitle'))) return; ?></code></td></tr>
  </table>
    
  </table>
  </dl>
<hr>
<style>#help {max-width:120ch;}
h2 {
  text-align: center;
  color: hotpink;
}
h3 {
  color: #6AA6CE;
  border-bottom: solid;
  width: max-content;
  padding-inline-end: 1.5em;
  border-inline-end: solid transparent 6px;
}
p,dd {
  padding: 1px 1em;
  margin:0 0 0.25em;
  text-indent:1em;
}
code, pre {
  background: ivory;
  color:blue
}
dd code {
  white-space:nowrap;
}
dt{
  font-weight:bold;
}
dt~dt {
  margin-top:1em;
}</style>
</div>