# E-commerce Prodotti Animali

## Descrizione

Questo progetto è un semplice e-commerce per prodotti destinati agli animali. Utilizza PHP per il backend e include una serie di classi per rappresentare differenti tipologie di prodotti come cibo, giocattoli e cucce per animali, avviene anche una simulazione di pagamento con la carta in cui é necessario inserire una data valida e che non sia scaduta affinché faccia passare alla pagina di pagamento completato.

## Funzionalità

- Visualizzazione di prodotti per animali.
- Classi specializzate per diverse categorie di prodotti (es. Cibo, Giocattoli).
- Utilizzo di Bootstrap per un design responsive.
- Utilizzo di VueJS per la logica di pagamento, con un validatore per la data di scadenza

## Struttura del Codice

- `Product.php`: Classe base per tutti i prodotti.
- `Category.php`: Classe per gestire le categorie di prodotti.
- `Toy.php`, `Kennel.php`, `Food.php`: Classi derivate da `Product` per specifiche categorie.
- `functions.php`: Contiene funzioni per la renderizzazione delle card dei prodotti.
- `index.php`: File principale che mostra i prodotti nel browser.
- `script.js`: File di logica per la gestione del validatore della data di scadenza della carta.
- `success.html`: Pagina che simula l'acquisto comunica il pagamento dell'utente avvenuto con successo.
