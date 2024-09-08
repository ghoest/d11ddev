  


  ddev config --project-type=drupal --php-version=8.3 --docroot=docroot
  ddev composer create drupal/recommended-project:^11
  ddev composer require drush/drush
  ddev composer update -W
  ddev start
  ddev drush site:install --account-name=admin --account-pass=admin -y
  ddev drush cr
  ddev drush uli

  ddev composer require drupal/admin_toolbar
  ddev composer require drupal/paragraphs
  ddev composer require cweagans/composer-patches

  ddev composer require drupal/devel --dev
  ddev composer require drupal/webprofiler --dev
  ddev composer require drupal/core-dev --dev
  ddev composer remove phpro/grumphp --dev
  ddev composer require phpro/grumphp --dev
  ddev composer require rector/rector --dev
  ddev composer require rector/swiss-knife --dev
  ddev composer require palantirnet/drupal-rector --dev
  ddev composer require drupal/config-split
  ddev composer require drupal/ctools
  ddev composer search paragraphs
  ddev composer require drupal/coder  --dev
  ddev composer require php-parallel-lint/php-parallel-lint --dev
  ddev composer require --dev ergebnis/composer-normalize
  
  ddev export-db --file=database.sql.bz2 --bzip2
  ddev exec env EDITOR=vim git commit

  ddev npm install --save-dev stylelint
  ddev npm install --save-dev eslint
