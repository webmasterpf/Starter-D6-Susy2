  <?php
  
  /*Pour débugger et modifier les tpl de views
à commenter quand site en prod,permet debug durant dev
     */
//print '<h2>Les Valeurs de $data </h2>';
//print '<pre>'.print_r($data, TRUE).'</pre>';
//
//print '<h2>Les Valeurs avec Devel </h2>';
//
print '<h2>Les Valeurs avec var_dump($row)</h2>';
print var_dump($row);
//print '<h2>Les Valeurs avec var_dump($fields)</h2>';
//print var_dump($fields);

// Debug avec le module Devel  !!!!
dsm(get_defined_vars());

// Le contenu de la variable $fields (au niveau d'une tpl de fields)
dsm(array_keys($fields));
dsm(array_keys($row));
// Le contenu de la variable $view (contenu de la vue au niveau d'un tpl de style)
dsm($view);

         ?>