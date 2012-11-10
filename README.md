# Doctrine2 with Symfony2 Workshop

This repository hosts a Symfony2 application used for Doctrine2 workshops.
It is a derivation of the Symfony Standard Distribution that is explicitly
build for teaching Doctrine2 in a Symfony2 application.

## Installation

When you have trouble intalling this application before a workshop, send me
an email to ``kontakt@beberlei.de`` with your errors/problems and I try to help you.

If you don't have Composer installed, go to: http://getcomposer.org/download/
Install Composer as described.

If you have Composer installed on your machine, go into your working directory
and call:

    composer create-project beberlei/doctrine2-symfony2-workshop doctrine-ws

This will create a new project with this application and download all the dependencies.

## Database Configuration

By default this example application will use SQLite as a database. To configure
another database to use during the workshop go to ``app/config/config.yml``
and change the configuration as explained in the file. You can uncomment
the specific sections for MySQL or PostgreSQL to change the database.

## Important Note

This application is only for workshop purposes, it is neither secure nor sanely
configured production usage.

