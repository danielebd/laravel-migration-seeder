# LARAVEL MIGRATION SEEDER

- creare tabella in myphpadmin manualmente
- nel file env. in DB DATABASE inserire il nome del db appena creato in phpmyadmin 
- inserire il comando 'php artisan make:migration create_trains_table' nel terminale per generare la migrazione
- nel file create di migrations inserire tutte le collone di cui necessitiamo 
- inviare il comando 'php artisan migrate' per creare le colonne
- generare il page-controller con 'php artisan make:controller Guest/PageController'
- generare il model per la connettere il db a laravel 'php artisan make:model Trains'
- in PageController inserire 'use App\Models\Trains;' e creare la funzione che vada a prendere solo i dati che ci interanno, in questo caso la data di partenza odierna.
- stampare i dati in blade.

# SEEDER 
-