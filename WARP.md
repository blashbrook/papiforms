# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

PAPIForms is a Laravel package that provides custom forms for the Polaris ILS (Integrated Library System). It creates registration forms for library patrons, including Teen Pass and Adult registration forms with file uploads, SMS notifications, and integration with the Polaris API.

## Architecture

### Core Structure
- **Laravel Package**: Built as a Laravel package with service provider auto-discovery
- **Livewire Components**: Two main registration forms (`TeenPassRegistrationForm`, `AdultRegistrationForm`)
- **API Integration**: Uses `blashbrook/papiclient` for Polaris API communication
- **File Storage**: S3-based file uploads for document verification
- **Email System**: Automated confirmation and notification emails
- **Database Seeding**: Postal codes, delivery options, and carrier data

### Key Components
- **Service Provider**: `PAPIFormsServiceProvider` registers Livewire components, validates birth dates, and configures S3 storage
- **Controllers**: API controllers for postal codes, delivery options, mobile carriers, and patron codes
- **Models**: Eloquent models for all form data entities
- **Facades**: Simplified access to controller methods
- **Mailables**: Email notifications for confirmations and applications

## Common Development Commands

### Testing
```bash
composer test                    # Run PHPUnit tests
vendor/bin/phpunit              # Direct PHPUnit execution
```

### Package Management
```bash
composer install                # Install PHP dependencies
composer update                 # Update PHP dependencies
composer validate               # Validate composer.json
```

### Database Operations
```bash
php artisan papiforms:seed      # Run package-specific seeders
php artisan migrate             # Run migrations
```

### Node.js/Asset Building
```bash
npm install                     # Install Node dependencies
npm run dev                     # Development build
npm run watch                   # Watch for changes
npm run prod                    # Production build
```

### Publishing Package Assets
```bash
php artisan vendor:publish --tag=papiforms.config    # Publish config files
php artisan vendor:publish --tag=papiforms.views     # Publish views
php artisan vendor:publish --tag=papiforms.Tests     # Publish tests
```

## Development Architecture

### Form Validation
- Custom validation rules for Teen Pass (13-17 years) and Adult (18+ years) age requirements
- Conditional validation for mobile carriers when SMS delivery is selected
- Real-time Livewire validation with custom error messages

### File Upload System
- Adult registration requires photo ID upload
- Files stored in S3 via Laravel filesystem
- Dynamic S3 configuration in service provider
- Temporary upload URLs generated for email attachments

### Email Flow
1. **Confirmation Emails**: Sent to applicants with barcode and instructions
2. **Application Emails**: Sent to library staff with applicant details
3. **Duplicate Patron Emails**: Special handling for existing patrons

### API Integration Pattern
```php
$response = PAPIClient::publicRequest('POST', 'patron', $json);
$body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
```

### Postal Code Selection
- Dynamic city/state population based on postal code selection
- Defaults to 'OWENSBORO' as primary service area
- Supports multiple counties and delivery zones

## Environment Requirements

### PHP Requirements
- PHP 8.2+ (specified in composer.json)
- Laravel Livewire v3.4.12+
- AWS S3 SDK (league/flysystem-aws-s3-v3)

### Required Environment Variables
[See required variables in PAPIClient readme.md](https://github.com/blashbrook/papiclient/)

## CI/CD Pipeline

### GitHub Actions
- **PHP Composer**: Validates and installs PHP dependencies on PHP 8.2
- **Node.js CI**: Tests on Node.js 18.x and 22.x
- **Semantic Release**: Automated versioning and changelog generation

### Release Management
- Follows Angular commit convention
- Automated semantic versioning
- Changelog automatically updated
- GitHub releases with packaged assets

## Testing Strategy

- PHPUnit configuration in `phpunit.xml`
- Test directory structure: `./Tests/`
- Orchestra Testbench for Laravel package testing
- Feature tests can be published to consuming applications

## Code Style

- StyleCI integration for PHP code formatting
- EditorConfig for consistent code formatting
- PSR-4 autoloading with `Blashbrook\PAPIForms` namespace

## Database Schema

- Migration files create tables for delivery options, patron codes, postal codes, mobile carriers
- Comprehensive factory classes for testing data generation
- Seeder classes populate reference data from JSON sources
- Custom `papiforms:seed` command runs all seeders in correct order
