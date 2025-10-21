# Installer Composer

Ce README contient uniquement les instructions pour installer Composer sur macOS et l'utiliser dans ce projet.

## Vérifier PHP

Avant d'installer Composer, vérifie que le CLI PHP est disponible :

```bash
php -v
```

## Option A — Installer via Homebrew (simple)

Si tu utilises Homebrew :

```bash
brew update
brew install composer
# Vérifier
composer --version
```

## Option B — Installer localement avec composer.phar (recommandé si Homebrew pose problème)

1. Télécharger et installer dans le dossier courant :

```bash
cd /Applications/XAMPP/xamppfiles/htdocs/Jobiz
php -r "copy('https://getcomposer.org/installer','composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

2. Exécuter Composer depuis le projet :

```bash
# Utiliser le PHP système
php composer.phar install

# Ou utiliser explicitement le PHP de XAMPP si nécessaire
/Applications/XAMPP/xamppfiles/bin/php composer.phar install
```

## Rendre Composer global (optionnel)

Si tu veux pouvoir appeler `composer` depuis n'importe où, déplace le phar dans un dossier du PATH :

```bash
# pour Mac Intel (Homebrew prefix = /usr/local)
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer

# pour Apple Silicon (Homebrew prefix = /opt/homebrew)
# sudo mv composer.phar /opt/homebrew/bin/composer
# sudo chmod +x /opt/homebrew/bin/composer

composer --version
```

## Dépannage rapide

- Si Homebrew tente de compiler des paquets volumineux (ex: cmake) et que ça échoue → utilise `composer.phar`.
- Si Composer signale des erreurs liées à des extensions PHP manquantes, installe-les ou utilise le PHP de XAMPP qui inclut souvent les extensions nécessaires.
- Evite `sudo composer` ; préfère corriger les permissions des dossiers.

Si tu veux, je peux ajouter ici une section expliquant comment exécuter Composer avec le PHP de XAMPP par défaut ou comment automatiser la configuration.
