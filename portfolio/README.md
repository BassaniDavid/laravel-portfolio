# Laravel Portfolio

### Obiettivo: creare passo dopo passo un portfolio online.

## giorni 1

### Mettere su un'app Laravel provvista di autenticazione grazie a Breeze:

-   Avviare l'installazione di Laravel
-   Installare Breeze e Bootstrap
-   Verificare che l'autenticazione funzioni
-   creare un layout per l area admin

## giorno 2

### iniziare a preparare il back-office per poter gestire i progetti nel nostro sito portfolio

-   Creare il modello Project, con relativa migrazione ed un seeder per inserire inizialmente alcuni progetti nel Database
-   Preparare un Resource Controller (Admin/ProjectController) incaricato di gestire tutte le operazioni CRUD di index e show sui progetti
-   Creare le rotte e preparare un layout per mostrare i progetti in tabella nella rotta index
-   Inventare anche uno stile per la pagina di show, che dovrà mostrare un singolo progetto

## giorno 3

### terminare le operazioni CRUD sui progetti, dando la possibilità all'utente di creare nuovi progetti, modificare quelli esistenti o eliminarli.

-   Preparare le rotte per le pagine di creazione e modifica dei progetti
-   All'interno delle pagine, preparare i rispettivi form
-   Nella pagina di dettaglio del progetto, mostrare il Type a cui il progetto appartiene
-   Nel controller, inserire la logica per il salvataggio di un nuovo progetto, per la sua modifica e per l'eliminazione
-   Nella tabella della pagina index, inserire i pulsanti su ciascuna riga, per permettere l'eliminazione e la modifica del singolo progetto e inserire un tasto in cima che ci porti alla pagina di creazione del progetto.
-   aggiungere un controllo quando l'utente clicca sul pulsante per l'eliminazione
