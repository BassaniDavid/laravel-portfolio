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
-   Nel controller, inserire la logica per il salvataggio di un nuovo progetto, per la sua modifica e per l'eliminazione
-   Nella tabella della pagina index, inserire i pulsanti su ciascuna riga, per permettere l'eliminazione e la modifica del singolo progetto e inserire un tasto in cima che ci porti alla pagina di creazione del progetto.
-   aggiungere un controllo quando l'utente clicca sul pulsante per l'eliminazione

## giorno 4

### aggiungere una nuova entità `category`. Questa entità rappresenta la tipologia di un progetto ed è in relazione `one to many` con i progetti.

-   Creare il modello `category`, con relativa migrazione ed un seeder per inserire i types nel Database
-   Creare anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna `category_id`
-   Nei modelli `category` e `Project`, aggiungere i metodi per definire la relazione `one-to-many`
-   Nella pagina di dettaglio del progetto, mostrare il category a cui il progetto appartiene
-   Nei form di creazione e modifica dei progetti, permettere di associare un type al progetto stesso. Gestire inoltre il salvataggio di questa associazione progetto-tipologia nel controller `ProjectController`

## giorno 5

### Inserire l'entità `Technology`, che rappresenta i linguaggi utilizzati nei progetti e che avrà una relazione `molti a molti` con i progetti stessi.

-   Creare il modello `Technology`, la migration per la sua tabella ed un seeder.
-   Creare anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna `tecnology_id`
-   Sarà inoltre necessario creare la tabella pivot `project_technology`, per gestire la relazione molti a molti
-   Nei modelli `Technology` e `Project`, aggiungere i metodi corretti per rappresentare la relazione molti a molti
-   Nei form di creazione e modifica dei progetti, permettere di associare una o più tecnologie al progetto stesso. Gestire inoltre il salvataggio di queste associazioni progetto-tecnologie nel controller `ProjectController`
-   All'interno della pagina di dettaglio di un modello, visualizzare la lista delle tecnologie utilizzate nel singolo progetto.

## giorno 6

### predisporre le API che permettano di inviare all'esterno i dati relativi progetti.

-   Creare il file routes/api.php col comando `php artisan install api`
-   Creare poi un controller dedicato alle API dei progetti, col comando `php artisan make:controller Api/ProjectController` e inserire all'interno i metodi per restituire l'elenco dei progetti ed un singolo progetto, in formato JSON
-   Testare su Postman le due rotte per verificare che restituiscano correttamente i JSON
