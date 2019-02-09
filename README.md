<img href="" src="https://sortvoice.preprod-2.full-adgency.com/wp-content/themes/sortvoices-theme/img/logo_sortvoices.png">

## Installation

Ouvrez un terminal dans le dossier voulu et cloner le projet dedans
```shell
git clone https://github.com/eJanuel/sitev2.git
```

Modifiez le fichier .env en remplaçant les valeurs user et password
```env
DATABASE_URL=mysql://user:password@127.0.0.1:3306/db_sort_voices
```

Créez la base de donnée (A la racine du projet)
```shell
php bin/console doctrine:database:create
```

Lancez le serveur symfony
```shell
php bin/console server:run
```

###- Installation des dépendances

```shell
composer require server --dev
composer require symfony/orm-pack
composer require symfony/maker-bundle --dev
composer require symfony/asset
composer require symfony/twig-bundle
composer require symfony/form
composer require sensio/framework-extra-bundle
composer require security
composer require validator
```