
# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/) and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Public API

The [public API](https://semver.org/spec/v2.0.0.html#spec-item-1) of this project is defined by the `install.yaml` 
file and `project_files` listed in the `install.yaml` file.

---

## [1.22.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.22.0) - 2025-09-05
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.21.0...v1.22.0)

### Changed

- Mount `/var/lib/crowdsec/data/` folder as it is required since CrowdSec 1.7.0

---

## [1.21.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.21.0) - 2024-10-29
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.20.1...v1.21.0)

### Changed

- Allow the service to be accessible directly from host machine at `localhost:8080`.

---

## [1.20.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.20.1) - 2024-10-24
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.20.0...v1.20.1)

### Fixed

- Fix `AppSec Upload` test html content for WP 4.9

---

## [1.20.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.20.0) - 2024-10-24
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.19.0...v1.20.0)

### Added

- Add `AppSec Upload` test html content and `wp_appsec_custom_upload.php` script for WordPress page

---

## [1.19.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.19.0) - 2024-10-11
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.18.0...v1.19.0)

### Added

- Add `AppSec` test html content for WordPress page

---

## [1.18.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.18.0) - 2024-10-11
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.17.0...v1.18.0)

### Changed

- Change `AppSec` testing rule to match also query args

---

## [1.17.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.17.0) - 2024-09-26
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.16.0...v1.17.0)

### Changed

- Add `NET_ADMIN` and `NET_RAW` capabilities to the `crowdsec` container

---

## [1.16.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.16.0) - 2024-09-19
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.15.1...v1.16.0)

### Changed

- Add SSL certificates in trusted store to allow TLS configuration and AppSec calls

---

## [1.15.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.15.1) - 2024-09-19
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.15.0...v1.15.1)

### Fixed

- Fix `AppSec` testing rule

---

## [1.15.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.15.0) - 2024-09-19
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.14.0...v1.15.0)

### Added

- Add `AppSec` testing rule 

---

## [1.14.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.14.0) - 2024-09-19
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.13.0...v1.14.0)

### Changed

- Separate TLS configuration for easy removal

---


## [1.13.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.13.0) - 2024-08-29
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.12.0...v1.13.0)

### Added

- Add `AppSec` configuration and files

### Changed

- Remove `DISABLE_AGENT=true` as it breaks `AppSec` feature
- Allow more certificates OU for SSL connexion

### Fixed

- Fix `crowdsec-config` command for Native PHP projects

---

## [1.12.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.12.0) - 2024-03-29
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.11.2...v1.12.0)

### Changed

- Update `cache-actions-with-wordpress-load.php` for WordPress bouncer to use namespace

---

## [1.11.2](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.11.2) - 2024-03-08
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.11.1...v1.11.2)

### Fixed

- Do not bounce `cache-actions.php`

---

## [1.11.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.11.1) - 2024-03-08
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.11.0...v1.11.1)

### Fixed

- Remove `cache-actions.php` from `install.yaml`

---


## [1.11.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.11.0) - 2024-03-08
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.10.0...v1.11.0)

### Added

- Added `cache-actions-with-wordpress-load.php` for WordPress bouncer

---

## [1.10.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.10.0) - 2024-03-08
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.9.2...v1.10.0)

### Added

- Added `php.ini` for WordPress bouncer

---

## [1.9.2](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.9.2) - 2024-01-04
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.9.1...v1.9.2)

### Fixed

- Fixed `crowdsec-config` command for Magento 2

---

## [1.9.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.9.1) - 2024-01-04
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.9.0...v1.9.1)

### Changed

- Add debug for `crowdsec-config` command for Magento 2

---

## [1.9.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.9.0) - 2024-01-04
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.8.0...v1.9.0)

### Changed

- Change `crowdsec-config` command for Magento 2 to create a file with plain text bouncer key

---

## [1.8.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.8.0) - 2023-11-16
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.7.1...v1.8.0)

### Changed

- Change `crowdsec-config` command for WordPress to use `wp-config.php` instead of `wp-config-ddev.php` for multisite

---

## [1.7.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.7.1) - 2023-08-22
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.7.0...v1.7.1)

### Fixed

- Run `CrowdSec_Bouncer` post-start hook only if the module is enabled

---


## [1.7.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.7.0) - 2023-08-18
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.6.0...v1.7.0)

### Changed

- Update `runActions.php` script for CrowdSec Engine Magento 2 extension (implement `add-local-decision` action)

---

## [1.6.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.6.0) - 2023-08-17
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.5.1...v1.6.0)

### Changed

- Update `runActions.php` script for CrowdSec Engine Magento 2 extension (implement `set-forced-ip` action)

---

## [1.5.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.5.1) - 2023-08-17
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.5.0...v1.5.1)

### Fixed

- Renew `cfssl` certificates that were expired

---


## [1.5.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.5.0) - 2023-08-01
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.4.0...v1.5.0)

### Changed

- Update `runActions.php` script for CrowdSec Engine Magento 2 extension (implement `add-alert-by-event` action)

---


## [1.4.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.4.0) - 2023-07-11
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.3.0...v1.4.0)

### Changed

- Update `runActions.php` script for CrowdSec Engine Magento 2 extension (implement `add-alert` action)

---

## [1.3.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.3.0) - 2023-07-07
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.2.0...v1.3.0)

### Changed

- Update `runActions.php` script for CrowdSec Engine Magento 2 extension

---


## [1.2.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.2.0) - 2023-07-07
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.1.0...v1.2.0)

### Added

- Add `runActions.php` script for CrowdSec Engine Magento 2 extension

---

## [1.1.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.1.0) - 2023-07-06
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.0.1...v1.1.0)

### Added

- Add `docker-compose.override.yaml` for Playwright test and CrowdSec Engine Magento 2 extension

---


## [1.0.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.0.1) - 2023-06-01
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.0.0...v1.0.1)

### Fixed

- Fix `crowdsec-config` content for WordPress multisite

---

## [1.0.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.0.0) - 2023-05-19
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.13...v1.0.0)

### Changed

- Change `crowdsec-config` content for WordPress multisite

---

## [0.0.13](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.13) - 2023-04-17
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.12...v0.0.13)

### Changed

- Change `standalone-settings.php` content for WordPress scripts

---


## [0.0.12](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.12) - 2023-04-12
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.11...v0.0.12)

### Changed

- Change paths for standalone bouncer `auto_prepend_file` files

---


## [0.0.11](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.11) - 2023-04-11
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.10...v0.0.11)

### Changed

- Use new path for standalone bouncer `auto_prepend_file` files

---

## [0.0.10](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.10) - 2023-04-07
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.9...v0.0.10)

### Changed

- Use `crowdsec-config` only in `crowdsec-standalone-bouncer` project instead of `crowdsec-bouncer-lib`

---

## [0.0.9](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.9) - 2023-03-24
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.8...v0.0.9)

### Changed

- Change path for the CrowdSec php bouncer lib


---

## [0.0.8](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.8) - 2023-03-23
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.7...v0.0.8)

### Changed

- Change `crowdsec-config` for native php to run only if crowdsec-bouncer-lib project is detected


---


## [0.0.7](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.7) - 2023-03-23
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.6...v0.0.7)

### Changed

- Rename development folder `my-own-modules` to `my-code`


---


## [0.0.6](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.6) - 2023-03-17
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.5...v0.0.6)

### Changed

- List each file individually in `project_files`

### Added

- Add `post_install_actions` to copy some DDEV project type files

---

## [0.0.5](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.5) - 2023-03-15
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.4...v0.0.5)

### Fixed

- Add missing cfssl files


---

## [0.0.4](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.4) - 2023-03-15
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.3...v0.0.4)

### Changed

- Update ddev signature in all files

### Removed

- Remove some cfssl files

---



## [0.0.3](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.3) - 2023-03-15
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.2...v0.0.3)

### Changed

- Update ddev signature in all files

---

## [0.0.2](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.2) - 2023-03-14
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.1...v0.0.2)

### Changed

- Add ddev signature in all files

---


## [0.0.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.1) - 2023-03-14

- Initial release

