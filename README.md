# E-commerce Prodotti Animali

## Descrizione

Questo progetto è un semplice e-commerce per prodotti destinati agli animali. Utilizza PHP per il backend e include una serie di classi per rappresentare differenti tipologie di prodotti come cibo, giocattoli e cucce per animali.

## Funzionalità

- Visualizzazione di prodotti per animali.
- Classi specializzate per diverse categorie di prodotti (es. Cibo, Giocattoli).
- Utilizzo di Bootstrap per un design responsive.

## Struttura del Codice

- `Product.php`: Classe base per tutti i prodotti.
- `Category.php`: Classe per gestire le categorie di prodotti.
- `Toy.php`, `Kennel.php`, `Food.php`: Classi derivate da `Product` per specifiche categorie.
- `functions.php`: Contiene funzioni per la renderizzazione delle card dei prodotti.
- `index.php`: File principale che mostra i prodotti nel browser.
